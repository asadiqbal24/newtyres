@extends('partials.default')

@section('content')  
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.tyres')}}"> Tyres</a></li>                       
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Tyres List</h4>   

              <a href="{{route('admin.add.tyre')}}" class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Tyre</a>

              <form method="post" action="{{route('admin.upload_tyre_file')}}" enctype="multipart/form-data">
                {{csrf_field()}}    
                <label>Select File (.xlxs)</label>
                <input type="file" name="file">
                <input type="submit" name="submit" class="btn btn-raised btn-success waves-effect">
              </form>

            </div>


<div class="card">

                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Truck?</th>
                                        <th>Otr?</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Truck?</th>
                                        <th>Otr?</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($tyres as $t)
                                        <tr>
                                            <td>{{$t->name}}</td>
                                            <td>{{$t->tyre_category->name}}</td>
                                            <td>{{$t->tyre_brands->name}}</td>
                                            <td>@if($t->truck==1) Yes @else No @endif</td>
                                            <td>@if($t->otr==1) Yes @else No @endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                                           

                                                             <li><a href="{{route('admin.tyre.edit',['id'=>$t->id])}}">Edit</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.tyres-delete',['id'=>$t->id])}}">Delete</a></li>                                                            
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>

                                        @endforeach    
                                </tbody>
                            </table>
                                {{ $tyres->links('pagination::bootstrap-4') }}  
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
        $('#edit_id').val(id);
        $('#edit_name').val(name);
    });
</script>
@endsection()