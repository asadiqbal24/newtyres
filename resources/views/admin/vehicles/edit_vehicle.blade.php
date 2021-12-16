@extends('partials.default')

<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
.input-group-prepend {
position: absolute;
right: 6px;
top: 50%;
transform: translateY(-50%);
}
.bg-deep-purple{
background-color: purple;
}
</style>
@section('content')
<!-- Main Content -->
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="row clearfix">
      <div class="col-md-12">
        <a href="#" id="save" class="btn btn-success">Save</a>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> New Doc <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a href="javascript:void(0);">Estimate</a></li>
            <li><a href="javascript:void(0);">Job Sheet</a></li>
            <li><a href="javascript:void(0);">Invoice</a></li>
            <li><a href="javascript:void(0);">Appointment</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-success">Select Owner</a>
        
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> Print <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a href="javascript:void(0);">Customer Details</a></li>
            <li><a href="javascript:void(0);">Reminder List</a></li>
          </ul>
        </div>

        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> History <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a href="javascript:void(0);">Preview</a></li>
            <li><a href="javascript:void(0);">Print</a></li>
            <li><a href="javascript:void(0);">Save To PDF</a></li>
            <li><a href="javascript:void(0);">Email</a></li>
          </ul>
        </div>

        <a href="{{route('admin.attachments-lists')}}" class="btn btn-success">Attachments</a>
        <a href="#" class="btn btn-success">Tech Data</a>
        <a href="#" class="btn btn-success">MOT Check</a>        
        <a href="" class="btn btn-danger float-right">Delete</a>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">


        @if($errors->any())
         
          @foreach($errors->all() as $error)
              {{ $error }}
          @endforeach

          <div class="alert alert-danger">{{$errors->first()}}</div>
        @endif
       
        <form method="post" action="{{route('admin-vechile-upate')}}" id="submit_vehicle_form">
        {{csrf_field()}}
        @if(isset($vehicle))

          <input type="hidden" name="id" value="{{$vehicle->id}}">

        @endif

  
        <div class="row">
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Registration Number</label>
                  <input type="text" name="register_no" value="{{isset($make)?$make->registration_number:''}}" class="form-control"  placeholder="Auto Generate">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-5">
                <button class="btn btn-info btn-xs">VRM Lookup</button>
                <button class="btn btn-info btn-xs">VRM Transfer</button>
              </div>
            
              <div class="col-md-4 input-group">
                       <div class="form-line">
                        <select class="form-control show-tick" name="make" id="vehicle_make">
                            <option selected disabled>Make</option>
                            
                           
                          
                            <option <?php if(isset($vehicle) && $vehicle->make==$vehicle->id) echo 'selected="selected'; ?> value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                         
                          
  
                        </select>
                        </div>


              </div>
              </div>
            <div class="row">
              <div class="col-md-3 input-group">
                <!-- <div class="form-line">
                  <label>Model</label>
                  <input type="text" name="model" required value="{{isset($vehicle)?$vehicle->model:old('model')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span> -->



                       <div class="form-line">
                        <select class="form-control show-tick" name="models" id="vehicle_models">
                            <option selected disabled>Model</option>
                        </select>
                        </div>

              </div>
            
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Derivative</label>
                  <input type="text" value="{{isset($make)?$make->derivative:''}}" name="derivative"  required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Chassis Number</label>
                  <input type="text" value="{{isset($make)?$make->chassis_number:''}}" name="chassis_number" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Engine CC</label>
                  <input type="text" value="{{isset($make)?$make->engine_cc:''}}" name="engine_cc" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              </div>

            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Fuel Type</label>
                  <input type="text" value="{{isset($make)?$make->fuel_type:''}}" name="fuel_type" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
           
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Engine Code</label>
                  <input type="text" value="{{isset($make)?$make->engine_cc:''}}" name="engine_cc" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Engine No</label>
                  <input type="text" value="{{isset($make)?$make->engine_no:''}}" name="engine_no" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
           
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Color</label>
                  <input type="text" value="{{isset($make)?$make->color:''}}" name="color" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              </div>
            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Tyre Size(Front)</label>
                  <input type="text" value="{{isset($make)?$make->tyre_size_front:''}}" name="tyre_size_front" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Tyre Size(Back)</label>
                  <input type="text" value="{{isset($make)?$make->tyre_size_back:''}}" name="tyre_size_back" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Tyre Depth(Front)</label>
                  <input type="text" value="{{isset($make)?$make->tyre_depth_front:''}}" name="tyre_depth_front" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Tyre Depth(Back)</label>
                  <input type="text" value="{{isset($make)?$make->tyre_depth_back:''}}" name="tyre_depth_back" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Paint Code</label>
                  <input type="text" value="{{isset($make)?$make->paint_code:''}}" name="paint_code" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Key Code</label>
                  <input type="text" value="{{isset($make)?$make->key_code:''}}" name="key_code" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Radio Code</label>
                  <input type="text" value="{{isset($make)?$make->radio_code:''}}" name="radio_code" required class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Date Manufactured</label>
                  <input type="date" value="{{isset($make)?$make->date_manufactured:''}}" name="date_manufactured" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Date Reg</label>
                  <input type="date" value="{{isset($make)?$make->date_reg:''}}" name="date_reg" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
          </div>
          
          <div class="col-md-6" style="border-left: 1px solid;">
            <div class="row">
              <div class="col-md-12 input-group">
                
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general">General</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#specs">Specs</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#extra">Extra</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#features">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#notes">Notes</a></li>                  
                </ul>
              </div>
            </div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane animated flipInX active" id="general">
                @include('admin.vehicles.general1')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="specs">
                @include('admin.vehicles.specs')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="extra">
                @include('admin.vehicles.extra')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="features">
                @include('admin.vehicles.features')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="notes">
                @include('admin.vehicles.notes')
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        @include('admin.customer.tabs')
      </div>
    </div>
    
  </div>
</section>
@endsection()
@section('jsOutside')


<script type="text/javascript">
$('.add_new_alt_delivery').click(function(){
$('#div_1').hide();
$('#div_2').show();
});


$('#save').click(function(){
  $('#submit_vehicle_form').submit();

});

$('.type_of_vehicles').change(function(){

  $('.image_type').hide();
  if($(this).val()=='car'){
    $('#car').show();
  }
  if($(this).val()=='truck'){
       $('#truck').show(); 
  }
  if($(this).val()=='bike'){
        $('#bike').show();
  }

});


$('#vehicle_make').change(function(){
model = '{{isset($vehicle)?$vehicle->model:0}}';
            val = $(this).val();
            $.ajax({
                type:'GET',
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
                        $('#vehicle_models').html(x);
                        $('#vehicle_models').val(model).trigger('change');           
                        $('#vehicle_models').selectpicker('refresh'); 
                    }

                }
            });

});

</script>
@endsection()