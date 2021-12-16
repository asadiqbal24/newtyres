
@extends('partials.default')
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
    <form method="post" action="{{route('admin-required-field-save')}}">
        {{csrf_field()}}


  @if(isset($field))
  <input type="hidden" name="id" value="{{$field->id}}">
  @endif

    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <button type="submit" class="btn btn-primary">Save</button>
   
            
          </div>
        </div>
        
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="col-lg-12">
          <h4>Field Required</h4>
          <hr style="width:100%;">
        </div>
    <div class="row clearfix">
      <div class="col-lg-4">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="registration" class="filled-in" name="registration"
          @if(isset($field)?$field->registration:'') checked @endif>
          <label for="registration" style="padding-left: 50px!important;font-size: 15px;color: white;">Registration</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="make_model" class="filled-in" name="make_model"
        @if(isset($field)?$field->make_model:'') checked @endif>
          <label for="make_model" style="padding-left: 50px!important;font-size: 15px;color: white;">Make and Model</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="derivative" class="filled-in" name="derivative"
         @if(isset($field)?$field->derivative:'') checked @endif>
          <label for="derivative" style="padding-left: 50px!important;font-size: 15px;color: white;">Derivative</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="chassis_no" class="filled-in" name="chassis_no"

        @if(isset($field)?$field->chassis_no:'') checked @endif>
          <label for="chassis_no" style="padding-left: 50px!important;font-size: 15px;color: white;">Chassis No</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="fuel_type" class="filled-in" name="fuel_type"
           @if(isset($field)?$field->fuel_type:'') checked @endif>
          <label for="fuel_type" style="padding-left: 50px!important;font-size: 15px;color: white;">Fuel Type</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="engine_cc" class="filled-in" name="engine_cc"
            @if(isset($field)?$field->engine_cc:'') checked @endif>
          <label for="engine_cc" style="padding-left: 50px!important;font-size: 15px;color: white;">Engine CC</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="engine_code" class="filled-in" name="engine_code"
       @if(isset($field)?$field->engine_code:'') checked @endif>
          <label for="engine_code" style="padding-left: 50px!important;font-size: 15px;color: white;">Engine Code</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="engine_number" class="filled-in" name="engine_number"
         @if(isset($field)?$field->engine_number:'') checked @endif>
          <label for="engine_number" style="padding-left: 50px!important;font-size: 15px;color: white;">Engine Number</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="color" class="filled-in" name="color"
       @if(isset($field)?$field->colour:'') checked @endif>
          <label for="color" style="padding-left: 50px!important;font-size: 15px;color: white;">Color</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="paint_code" class="filled-in" name="paint_code"
      @if(isset($field)?$field->paint_code:'') checked @endif>
          <label for="paint_code" style="padding-left: 50px!important;font-size: 15px;color: white;">Paint Code</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="key_code" class="filled-in" name="key_code"
    @if(isset($field)?$field->key_code:'') checked @endif>
          <label for="key_code" style="padding-left: 50px!important;font-size: 15px;color: white;">Key Code</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="radio_code" class="filled-in" name="radio_code"
        @if(isset($field)?$field->radio_code:'') checked @endif>
          <label for="radio_code" style="padding-left: 50px!important;font-size: 15px;color: white;">Radio Code</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="milage" class="filled-in" name="milage"
        @if(isset($field)?$field->mileage:'') checked @endif>
          <label for="milage" style="padding-left: 50px!important;font-size: 15px;color: white;">Milage</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="date_reg" class="filled-in" name="date_reg"
       @if(isset($field)?$field->date_reg:'') checked @endif>
          <label for="date_reg" style="padding-left: 50px!important;font-size: 15px;color: white;">Date Of Reg</label>
        </div>
        
        <hr style="width:100%;">
      </div>
      <div class="col-lg-4">
        
        <div class="col-lg-12 input-group">
           <input type="checkbox" id="full_name" class="filled-in" name="full_name"
         @if(isset($field)?$field->name:'') checked @endif>
          <label for="full_name" style="padding-left: 50px!important;font-size: 15px;color: white;">Full Name</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="house_no" class="filled-in" name="house_no"
   @if(isset($field)?$field->house_no:'') checked @endif>
          <label for="house_no" style="padding-left: 50px!important;font-size: 15px;color: white;">House No</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="road" class="filled-in" name="road"
       @if(isset($field)?$field->road:'') checked @endif>
          <label for="road" style="padding-left: 50px!important;font-size: 15px;color: white;">Road</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="locality" class="filled-in" name="locality" 
        @if(isset($field)?$field->locality:'') checked @endif>
          <label for="locality" style="padding-left: 50px!important;font-size: 15px;color: white;">Locailty</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="town" class="filled-in" name="town"
          @if(isset($field)?$field->town:'') checked @endif>
          <label for="town" style="padding-left: 50px!important;font-size: 15px;color: white;">Town</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="country" class="filled-in" name="country"
   @if(isset($field)?$field->country:'') checked @endif>
          <label for="country" style="padding-left: 50px!important;font-size: 15px;color: white;">Country</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="post_code" class="filled-in" name="post_code"
        @if(isset($field)?$field->post_code:'') checked @endif>
          <label for="post_code" style="padding-left: 50px!important;font-size: 15px;color: white;">Post Code</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="telephone" class="filled-in" name="telephone"
          @if(isset($field)?$field->telephone:'') checked @endif>
          <label for="telephone" style="padding-left: 50px!important;font-size: 15px;color: white;">Telephone</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="mobile" class="filled-in" name="mobile"
        @if(isset($field)?$field->mobile:'') checked @endif>
          <label for="mobile" style="padding-left: 50px!important;font-size: 15px;color: white;">Mobile</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="email" class="filled-in" name="email"

          @if(isset($field)?$field->email:'') checked @endif>
          <label for="email" style="padding-left: 50px!important;font-size: 15px;color: white;">Email Address</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="refferal" class="filled-in" name="refferal"
    @if(isset($field)?$field->referral:'') checked @endif>
          <label for="refferal" style="padding-left: 50px!important;font-size: 15px;color: white;"> Refferal</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="sundaries" class="filled-in" name="sundaries"
           @if(isset($field)?$field->fp1_sundries:'') checked @endif>
          <label for="sundaries" style="padding-left: 50px!important;font-size: 15px;color: white;"> FP1 - Sundaries</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="lubricant" class="filled-in" name="lubricant"
          @if(isset($field)?$field->fp2_lubricants:'') checked @endif>
          <label for="lubricant" style="padding-left: 50px!important;font-size: 15px;color: white;"> FP2 - Lubricant</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="pant_mat" class="filled-in" name="pant_mat"
            @if(isset($field)?$field->fp3_paint_mat:'') checked @endif>
          <label for="pant_mat" style="padding-left: 50px!important;font-size: 15px;color: white;"> FP3 - Paint & Mat</label>
        </div>
        
        <hr style="width:100%;">
      </div>
      <div class="col-lg-4">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="department" class="filled-in" name="department"
            @if(isset($field)?$field->department:'') checked @endif>
          <label for="department" style="padding-left: 50px!important;font-size: 15px;color: white;">Department</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="order_ref" class="filled-in" name="order_ref"
          @if(isset($field)?$field->order_ref:'') checked @endif>
          <label for="order_ref" style="padding-left: 50px!important;font-size: 15px;color: white;">Order Ref</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="term" class="filled-in" name="term"
         @if(isset($field)?$field->terms:'') checked @endif>
          <label for="term" style="padding-left: 50px!important;font-size: 15px;color: white;">Term</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="sale_person" class="filled-in" name="sale_person"
          @if(isset($field)?$field->sales_person:'') checked @endif>
          <label for="sale_person" style="padding-left: 50px!important;font-size: 15px;color: white;">Sale Person</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="qc_technician" class="filled-in" name="qc_technician"
      @if(isset($field)?$field->qc_technician:'') checked @endif>
          <label for="qc_technician" style="padding-left: 50px!important;font-size: 15px;color: white;">Qc Technician</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="road_tester" class="filled-in" name="road_tester"
          @if(isset($field)?$field->road_tester:'') checked @endif>
          <label for="road_tester" style="padding-left: 50px!important;font-size: 15px;color: white;">Road Tester</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="mot_status" class="filled-in" name="mot_status"
           @if(isset($field)?$field->mot_status:'') checked @endif>
          <label for="mot_status" style="padding-left: 50px!important;font-size: 15px;color: white;">Mot Status</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="mot_technician" class="filled-in" name="mot_technician"
            @if(isset($field)?$field->fuel_type:'') checked @endif>
          <label for="mot_technician" style="padding-left: 50px!important;font-size: 15px;color: white;">Mot Technician</label>
        </div>
        
        <hr style="width:100%;">
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="at_least_technician" class="filled-in" name="at_least_technician" 
          @if(isset($field)?$field->at_least_technician:'') checked @endif>
          <label for="at_least_technician" style="padding-left: 50px!important;font-size: 15px;color: white;">At Least 1 Technician</label>
        </div>
        
        <hr style="width:100%;">
        <div class="col-lg-12 input-group">
          <input type="checkbox" id="technician_all_labour" class="filled-in" name="technician_all_labour" 
       @if(isset($field)?$field->technician_all_labour:'') checked @endif>
          <label for="technician_all_labour" style="padding-left: 50px!important;font-size: 15px;color: white;">Technician For All Labour </label>
        </div>
        
        <hr style="width:100%;">
        
        
      </div>



 
      
    </div>
<div class="row clearfix" style="margin:0px;">
  <div class="col-lg-4">
    <h6>Reminder Prompts</h6>
    
  </div>
  <div class="col-lg-4">
    <label>Search Term(Labour Line)</label>
    
  </div>
  <div class="col-lg-4">
    <label>Reminder Templates</label>
    
  </div>
</div>

<hr style="width:100%;">




<div class="row clearfix">
  <div class="col-lg-4">
    <div class="col-lg-12 input-group">
          <input type="checkbox" id="mot_reminder" class="filled-in" name="mot_reminder"
         @if(isset($field)?$field->mot_reminder:'') checked @endif>
          <label for="mot_reminder" style="padding-left: 50px!important;font-size: 15px;color: white;">Mot Reminder </label>
        </div>
        
        <hr style="width:100%;">


        <div class="col-lg-12 input-group">
          <input type="checkbox" id="services_reminder" class="filled-in" name="services_reminder" 
      @if(isset($field)?$field->service_reminder:'') checked @endif >
          <label for="services_reminder" style="padding-left: 50px!important;font-size: 15px;color: white;">Services Reminder </label>
        </div>
        
        <hr style="width:100%;">

        <div class="col-lg-12 input-group">
          <input type="checkbox" id="cambelt_reminder" class="filled-in" name="cambelt_reminder"
          @if(isset($field)?$field->cambelt_reminder:'') checked @endif >
          <label for="cambelt_reminder" style="padding-left: 50px!important;font-size: 15px;color: white;">Cambelt Reminder </label>
        </div>
        
        <hr style="width:100%;">
    
  </div>
  <div class="col-lg-4">
    <div class="col-lg-12">
      <div class="form-line">
        
        <input type="text" placeholder="    Automatic" readonly style="border: 1px solid #5b6468;height: 40px !important;" class="form-control">
      </div>
    </div>


    <div class="col-lg-12">
      <div class="form-line">
        
        <input type="text" placeholder="   Carry Out Services" style="border: 1px solid #5b6468;height: 40px !important;    margin-top: 35px;" class="form-control" value="{{isset($field)?$field->carry_out:''}}" name="carry_out">
      </div>
    </div>

    <div class="col-lg-12">
      <div class="form-line">
        
        <input type="text" placeholder="   Replace Cambelt" style="border: 1px solid #5b6468;height: 40px !important;    margin-top: 35px;" value="{{isset($field)?$field->replace_cambelt:''}}" class="form-control" name="replace_cambelt">
      </div>
    </div>
    
  </div>
      <div class="col-lg-4">
        <div class="col-lg-12" style="
          margin-top: -15px;">
          <div class="form-line">
            <select class="form-control show-tick" name="mot_reminder_select">
              <option value="{{Null}}">Choose</option>
              <option value="Cambelt"
              {{ (isset($field->mot_reminder_select)&& $field->mot_reminder_select=='Cambelt')?'selected':''}}>Cambelt</option>
              <option value="Molt"
              {{ (isset($field->mot_reminder_select)&& $field->mot_reminder_select=='Molt')?'selected':''}}>Molt</option>
              <option value="Services"
              {{ (isset($field->mot_reminder_select)&& $field->mot_reminder_select=='Services')?'selected':''}}>Services</option>
              
            </select>
          </div>
        </div>
        <div class="col-lg-12" style="margin-top: 55px;">
          <div class="form-line">
            <select class="form-control show-tick" name="services_reminder_select">
              <option value="Cambelt"
              {{ (isset($field->services_reminder_select)&& $field->services_reminder_select=='Cambelt')?'selected':''}}> Cambelt </option>
              <option value="Molt"
              {{ (isset($field->services_reminder_select)&& $field->services_reminder_select=='Molt')?'selected':''}}>Molt</option>
              <option value="Services"
                {{ (isset($field->services_reminder_select)&& $field->services_reminder_select=='Services')?'selected':''}}
              >Services</option>
            </select>
          </div>
        </div>
        <div class="col-lg-12" style="margin-top: 55px;">
          <div class="form-line">
            <select class="form-control show-tick" name="camblet_reminder_select">
              <option value="Cambelt"
              {{ (isset($field->camblet_reminder_select)&& $field->camblet_reminder_select=='Cambelt')?'selected':''}}>Cambelt</option>


              <option value="Molt" {{ (isset($field->camblet_reminder_select)&& $field->camblet_reminder_select=='Molt')?'selected':''}} >Molt</option>
              <option value="Services"
             {{ (isset($field->camblet_reminder_select)&& $field->camblet_reminder_select=='Services')?'selected':''}} >Services</option>
            </select>
          </div>
        </div>
        
        
      </div>
</div>




    
        
      </div>
      
    </div>
</form>

  </div>

</section>


@endsection()


