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
              <h4>{{isset($reg_name)?$reg_name.' / ':''}} {{isset($fit_area)?$fit_area:''}} / {{isset($fit_areac)?$fit_areac.' / ':''}} Fitment Centers</h4>           

             @if(isset($fit_areac)) 
             <a href="#" class="btn btn-raised btn-success waves-effect float-right" data-toggle="modal" data-backdrop="false" data-target="#addfitmentlocation"><i class="zmdi zmdi-plus"></i> Add Fitment Center</a>                             
             @else
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
                                        @if(isset($fit_areac)) 
                                         <th>Address</th>
                                         @else
                                             <th>Fitment Centers</th>
                                         @endif
                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                         @if(isset($fit_areac)) 
                                         <th>Address</th>
                                         @else
                                             <th>Fitment Centers</th>
                                         @endif
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($regions_d as $r)
                                        <tr>
                                            <td>{{$r->name}}</td>
                                        @if(isset($fit_areac)) 
                                         <td>{{$r->address}}</td>

                                         <td>
                                                    
                                                     <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                                
                                                                
                                                                @if(isset($fit_areac))

                                                                <li><a href="{{route('admin.edit.fitment.center',['id'=>$r->id])}}" class="" data-id='{{$r->id}}' data-name='{{$r->name}}'  data-address='{{$r->address}}'>Edit</a></li>

                                                                <li><a class="sweet-approve" href="#" data-url="{{route('admin.fitment-area_center.delete',['id'=>$r->id])}}">Delete</a></li>                                                                 

                                                                @else

                                                                <li><a href="{{route('admin.fitments.center',['area_slug'=>$reg->url,'slug'=>$ft->url,'url'=>$r->url])}}">Fitment Areas</a></li>

                                                                <li><a href="javascript:void(0);" class="editareaModal" data-toggle="modal" data-id='{{$r->id}}' data-name='{{$r->name}}' data-backdrop="false" data-target="#areaEditModal">Edit</a></li>

                                                                <li><a class="sweet-approve" href="#" data-url="{{route('admin.fitment-area.delete',['id'=>$r->id])}}">Delete</a></li>

                                                                @endif 
                                                        </ul>
                                                    </div>                                                


                                            </td>

                                         @else
                                            <td>{{isset($r->fitment_areas_center)?$r->fitment_areas_center->count():''}}
                                            </td>

                                             <td>
                                                    
                                                     <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">

                                                                
                                                                
                                                                @if(isset($fit_areac))

                                                                <li><a href="javascript:void(0);" class="editcenterModal" data-toggle="modal" data-id='{{$r->id}}' data-name='{{$r->name}}'  data-address='{{$r->address}}' data-vehicle='{{unserialize($r->deals_in)}}' data-backdrop="false" data-target="#centerEditModal">Edit</a></li>

                                                                <li><a class="sweet-approve" href="#" data-url="{{route('admin.fitment-area.delete',['id'=>$reg->id])}}">Delete</a></li>                                                                 

                                                                @else

                                                                <li><a href="{{route('admin.fitments.center',['area_slug'=>$reg->url,'slug'=>$ft->url,'url'=>$r->url])}}">Fitment Areas</a></li>

                                                                <li><a href="javascript:void(0);" class="editareaModal" data-toggle="modal" data-id='{{$r->id}}' data-name='{{$r->name}}' data-backdrop="false" data-target="#areaEditModal">Edit</a></li>

                                                                <li><a class="sweet-approve" href="#" data-url="{{route('admin.fitment-area.delete',['id'=>$r->id])}}">Delete</a></li>

                                                                @endif 
                                                        </ul>
                                                    </div>                                                


                                            </td>

                                         @endif                                            
                                            
                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_area.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$ft->id}}">
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


<div class="modal fade" id="areaEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_area.update')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$ft->id}}">
            <input type="hidden" name="area_id" id="area_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Fitment Location</h4>
            </div>
            <div class="modal-body"> 
                         <div id="manually">   
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="area_name" required="required">
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

@if(isset($ftc))
<div class="modal fade" id="addfitmentlocation" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_center.save')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$ftc->id}}">
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
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Deals In</label>

                                             <select class="form-control show-tick" multiple="multiple" required="required" name="deals_in[]" id="deals_in">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($vehicles as $veh)
                                                <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                @endforeach
                                            </select>
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

<div class="modal fade" id="centerEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.fitment_center.update')}}">
            {{csrf_field()}}                
            <input type="hidden" name="region_name" value="{{$ftc->id}}">
            <input type="hidden" name="center_id" id="center_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Fitment Location</h4>
            </div>
            <div class="modal-body"> 
                         <div id="manually">   
                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="center_name" name="name" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>   

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Address</label>
                                            <input type="text" class="form-control" id="address" name="address" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Deals In</label>

                                             <select class="form-control show-tick" multiple="multiple" required="required" name="deals_in[]" id="deals_in">
                                                <option value="{{NULL}}">Select</option>
                                                @foreach($vehicles as $veh)
                                                <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                @endforeach
                                            </select>
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

@endsection()
@section('jsOutside')
<script type="text/javascript">
    $('.editareaModal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');        
        $('#area_id').val(id);
        $('#area_name').val(name)

    });


    $('.editcenterModal').click(function(){

        id = $(this).attr('data-id');
        name = $(this).attr('data-name');
        address = $(this).attr('data-address');        
        $('#center_id').val(id);
        $('#center_name').val(name);
        $('#address').val(address);

    });
</script>
@endsection()