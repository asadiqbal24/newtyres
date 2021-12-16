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
                        <li class="breadcrumb-item"><a href="{{route('admin.vehicles.model.series')}}"> Vehicle</a></li>                       
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card widget-stat">
            <div class="body">
              <h4>Model List</h4>              
              <a href="javascript:void(0);" data-toggle="modal" data-backdrop="false" data-target="#defaultModal" class="btn btn-raised btn-success waves-effect float-right"><i class="zmdi zmdi-plus"></i> Add Model</a>
            </div>


<div class="card">

                    <div class="body">
                        <div class="table-responsive">



<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="{{route('admin.vehicle.model.series.save')}}" enctype="multipart/form-data">
            {{csrf_field()}}                
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Add Series</h4>
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
                                            <label>Vehicle</label>
                                            <select class="form-control show-tick" required="required" name="vehicle_id" id="vehicle">
                                            <option value="{{NULL}}">Select</option>
                                            @foreach($vehicles as $veh)
                                            <option value="{{$veh->id}}">{{$veh->name}}</option>
                                            @endforeach
                                            </select>
 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                           <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Model</label>
                                            <select class="form-control show-tick" required="required" name="model" id="make">
                                           
                                            </select>
 
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
            <form method="post" action="{{route('admin.vehicle.model.series.update')}}" enctype="multipart/form-data">
            {{csrf_field()}}                
            <input type="hidden" name="id" id="edit_id">                        
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Edit Series</h4>
            </div>
            <div class="modal-body"> 
                    <div class="row">
                          <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                        <div class="form-line">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name" id="edit_name" required="required">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>  


                            <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                        <div class="form-line">
                                            <label>Vehicle</label>
                                            <select class="form-control show-tick" required="required" name="vehicle_id" id="vehicle_edit">
                                            <option value="{{NULL}}">Select</option>
                                            @foreach($vehicles as $veh)
                                            <option value="{{$veh->id}}">{{$veh->name}}</option>
                                            @endforeach
                                            </select>
 
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div> 

                           <div class="col-lg-4 col-sm-4 col-md-4 input-group">
                                        <div class="form-line">
                                            <label>Model</label>
                                            <select class="form-control show-tick" required="required" name="model" id="make_edit">
                                           
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

                            <table class="table table-bordered table-striped table-hover dataTable js-exportable" style="font-size: 13px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($series as $m)
                                        <tr>
                                            <td>{{$m->name}}</td>
                                            <td>{{$m->vehicle_d->name}}</td>
                                            <td>{{$m->model_d->name}}</td>
                                            <td>

                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false"> Actions <span class="caret"></span> </button>
                                                        <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">                                                           

                                                            <li><a href="javascript:void(0);" class="edit_modal" data-toggle="modal" data-id='{{$m->id}}' data-name='{{$m->name}}' data-vehicle='{{$m->vehicle_id}}' data-model='{{$m->model_id}}' data-backdrop="false" data-target="#edit_modal">Edit</a></li>


                                                             <li><a class="sweet-approve" href="#" data-url="{{route('admin.vehicle-series-delete',['id'=>$m->id])}}">Delete</a></li>                                                            
                                                        </ul>
                                                    </div>                                                

                                            </td>
                                        </tr>

                                        @endforeach    
                                </tbody>
                            </table>
                                {{ $series->links('pagination::bootstrap-4') }}  
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
        vehicle = $(this).attr('data-vehicle');
        model = $(this).attr('data-model');


        $('#edit_id').val(id);
        $('#edit_name').val(name);
        $('#vehicle_edit').val(vehicle);
        $('#make').val(model);
        
        $('#vehicle_edit').val(vehicle).trigger('change');
        

        $('#vehicle_edit').selectpicker('refresh');            


        val = vehicle;
        $.ajax({
                type:'POST',
                url:'{{route("admin.get_vehicle_model")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="{{NULL}}">Select</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#make_edit').html(x);
                        $('#make_edit').val(model).trigger('change');           
                        $('#make_edit').selectpicker('refresh'); 
                    }

                }
            });
        
    });


      $('#vehicle').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("admin.get_vehicle_model")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="{{NULL}}">Select</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#make').html(x);
                        $('#make').val(1).trigger('change');           
                        $('#make').selectpicker('refresh'); 
                    }

                }
            });


      });
</script>

@endsection()