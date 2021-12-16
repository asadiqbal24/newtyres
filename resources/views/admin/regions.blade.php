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
                        <li class="breadcrumb-item"><a href="{{route('admin.regions')}}">Areas</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>List</h4>              
              <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#defaultModal"><i class="zmdi zmdi-plus"></i> Add Regions</a>

            </div>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.region.save')}}">
            {{csrf_field()}}                
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Regions</h4>
            </div>
            <div class="modal-body"> 


                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="required" name="name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Country</label>
                                             <select class="form-control show-tick" required="required" name="country">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($countries as $co)
                                                    <option value="{{$co->id}}">{{$co->name}}</option>   
                                                @endforeach    
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>      

                            <!-- <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" required="required" name="post_code">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   -->                                                   

                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                    
                                            <label>Active</label>
                                            <select class="form-control show-tick" required="required" name="active">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
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

<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.region.update')}}">
            {{csrf_field()}}                
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Regions</h4>
            </div>
            <div class="modal-body"> 

                <input type="hidden" name="id" id="edit_id">
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required="required" name="edit_name" id="edit_name">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Country</label>
                                             <select class="form-control show-tick" required="required" name="edit_country" id="edit_country">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($countries as $co)
                                                    <option value="{{$co->id}}">{{$co->name}}</option>   
                                                @endforeach    
                                            </select>
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>      

                            <!-- <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control" required="required" name="post_code">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   -->                                                   

                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                    
                                            <label>Active</label>
                                            <select class="form-control show-tick" required="required" name="edit_active" id="edit_active">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;min-height: 300px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Country</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($regions as $r)
                                        <tr>
                                            <td>{{$r->name}}</td>
                                            <td>{{$r->country_name->name}}</td>
                                            <td>@if($r->status==1)<span class="label bg-green">Yes</span>@else<span class="label bg-orange">No</span>@endif</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1" style="background: beige">
                                                            <li><a href="{{route('admin.region-active',['id'=>$r->id])}}">@if($r->status==1) In-Active @else Active @endif</a></li>
                                                            
<!--                                                              <li><a href="{{route('admin.view-region-areas',['id'=>$r->id])}}">View Areas</a></li> -->

                                                            <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$r->id}}' data-name='{{$r->name}}' data-country='{{$r->country_id}}' data-status='{{$r->status}}' data-backdrop="false" data-target="#editModal">Edit</a></li>

                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.region-delete',['id'=>$r->id])}}">Delete</a></li>

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
        country = $(this).attr('data-country');
        status = $(this).attr('data-status');                
        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#edit_country').val(country).change();
        $('#edit_active').val(status).change();


    });
</script>
@endsection()