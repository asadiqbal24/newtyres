@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<link href="{{asset('public/assets/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
<link href="{{asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.tyres-brands')}}">Brands</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Brand List</h4>              
              <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Brand</a>
            </div>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.tyre_brand.save')}}" enctype="multipart/form-data">
            {{csrf_field()}}                
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Brand</h4>
            </div>
            <div class="modal-body"> 
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="file" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Description</label>
                                            <textarea type="text" class="form-control" name="desc"></textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 
               

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.tyre_brand.update')}}" enctype="multipart/form-data">
            {{csrf_field()}}          
            <input type="hidden" name="id" id="edit_id">      
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Brand</h4>
            </div>
            <div class="modal-body"> 
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="edit_name" required="required" id="edit_name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Image</label>
                                            <img src="" id="edit_image" style="width: 100px;">
                                            <input type="file" class="form-control" name="file">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Description</label>
                                            <textarea type="text" class="form-control" name="edit_desc" id="edit_desc"></textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 
               

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="card">

                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Desc.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Desc.</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($brands as $b)
                                        <tr>
                                            <td><img src="{{$b->image}}" style="width: 150px;"></td>
                                            <td>{{$b->name}}</td>
                                            <td>{!! $b->description !!}</td>                                            
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            
                                                                <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$b->id}}' data-name='{{$b->name}}' data-image='{{$b->image}}' data-desc='{{ $b->description }}' data-backdrop="false" data-target="#edit_modal">Edit</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.brands-delete',['id'=>$b->id])}}">Delete</a></li>

                                                              <li><a href="{{route('admin.brands-patterns',['id'=>$b->id])}}">Patterns</a></li>

                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>
 
                                    @endforeach
                                </tbody>

                            </table>
                                {{ $brands->links('pagination::bootstrap-4') }}  
                        </div>
                    </div>
                </div>


          </div>  
        </div>

        </div>               
    </div>
</section>

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

@endsection()
@section('jsOutside')
<script type="text/javascript">
    
      $('.edit_modal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        image = $(this).attr('data-image');  
        desc = $(this).attr('data-desc');        

        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_image').attr('src',image);
        $('#edit_desc').val(desc); 
        $('#edit_desc').text(desc);         
        CKEDITOR.instances.edit_desc.setData(desc);                


    });
</script>
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
      CKEDITOR.replace( 'desc' );
      CKEDITOR.replace( 'edit_desc' );      

</script>
@endsection()