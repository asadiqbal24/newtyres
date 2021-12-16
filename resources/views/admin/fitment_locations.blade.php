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
                        <li class="breadcrumb-item"><a href="{{route('admin.fitment.centers')}}">Fitment Centers</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>{{isset($reg_name)?$reg_name.' / ':''}} Fitment Centers</h4>  

             @if(isset($reg_name)) 
             <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Fitment Center</a> 
             @endif                         
            </div>


                <div class="card">
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        @if(isset($reg_name))
                                            <th>Desc.</th>
                                            <th>Postcode</th>
                                        @endif
                                        <th>Fitment Centers</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        
                                        @if(isset($reg_name))
                                            <th>Desc.</th>
                                            <th>Postcode</th>
                                        @endif
                                        <th>Fitment Centers</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($regions_d as $r)
                                        <tr>
                                            <td>{{$r->name}}</td>
                                            @if(isset($reg_name))

                                            <td>{{$r->description}}</td>
                                            <td>{{$r->post_code}}</td>

                                            @endif
                                            <td>{{isset($r->fitment_areas)?$r->fitment_areas->count():''}}
                                                {{isset($r->fitment_locations)?$r->fitment_locations->count():''}}
                                            </td>
                                            <td>
                                                    
                                                     <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                            @if(isset($reg_name))

                                                                <li><a href="{{route('admin.fitment.center',['slug'=>$reg->url,'url'=>$r->url])}}">Fitment Areas</a></li>

                                                                <li><a href="javascript:void(0);" class="editModal" data-toggle="modal" data-id='{{$r->id}}' data-name='{{$r->name}}' data-desc='{{$r->description}}' data-post='{{$r->post_code}}' data-backdrop="false" data-target="#editModal">Edit</a></li>

                                                                <li><a class="sweet-approve" href="#" data-url="{{route('admin.fitment-location.delete',['id'=>$r->id])}}">Delete</a></li>
                                                            
                                                            @else

                                                                <li><a href="{{route('admin.fitment.area',['url'=>$r->url])}}">Fitment Areas</a></li>
                                                            
                                                            @endif                                                            
                                                        </ul>
                                                    </div>                                                


                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@if(isset($reg_name)) 
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_location.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$reg->id}}">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Fitment Location</h4>
            </div>
            <div class="modal-body"> 
                         <div id="manually">   
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" name="post_code" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Desc.</label>
                                            <textarea type="text" class="form-control" name="desc" required="required"></textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   
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



<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_location.update')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$reg->id}}">
            <input type="hidden" name="fitment_id" id="fitment_id">            
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Fitment Location</h4>
            </div>
            <div class="modal-body"> 
                         <div id="manually">   
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="name" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" name="post_code" id="post_code" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Desc.</label>
                                            <textarea type="text" class="form-control" name="desc" id="desc" required="required"></textarea>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   
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
@endif


          </div>  
        </div>

        </div>               
    </div>
</section>

    <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script type="text/javascript">
            CKEDITOR.replace( 'desc' );            
</script>
@endsection()
@section('jsOutside')
<script type="text/javascript">
    $('.editModal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');        
        desc = $(this).attr('data-desc');        
        post = $(this).attr('data-post');

$('#fitment_id').val(id);
$('#name').val(name)
$('#post_code').val(post);
$('#desc').val(desc);
$('#desc').text(desc);
CKEDITOR.instances.desc.setData(desc);
    });
</script>
@endsection()