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
        <a href="#" id="submit_customer_form" class="btn btn-success">Save</a>
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> New Doc <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a class="add_document" data-type="estimate" href="javascript:void(0);">Estimate</a></li>
            <li><a class="add_document" data-type="job_sheet" href="javascript:void(0);">Job Sheet</a></li>
            <li><a class="add_document" data-type="invoice" href="javascript:void(0);">Invoice</a></li>
            <li><a class="add_document" data-type="appoinment" href="javascript:void(0);">Appointment</a></li>
          </ul>
        </div>
        <a href="javascript:void(0);"  data-type="vehicle" class="btn btn-success add_document">New Vehicle</a>
        
        <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> Print <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li><a href="javascript:void(0);">Customer Details</a></li>
            <li><a href="javascript:void(0);">Reminder List</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#statement_modal" data-backdrop="false">Statements</a>
        <a href="#" class="btn btn-success">Attachments</a>
        <a href="#" class="btn btn-success">Map</a>
        <a href="" class="btn btn-danger float-right">Delete</a>
        <a href="" class="btn btn-danger float-right">Export</a>        
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">


        @if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
       
        <form method="post" action="{{route('admin.save.new.customer')}}" id="submit_new_customer_form">
        {{csrf_field()}}
        @if(isset($customer))

          <input type="hidden" name="id" value="{{$customer->id}}">

        @endif
        <div class="row">
          <div class="col-md-6">
            
            <div class="row">
              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Account Number</label>
                  <input type="text" name="account_number" class="form-control" value="{{isset($customer)?$customer->account_number:old('account_number')}}" placeholder="Auto Generate">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-3">
                <button class="btn btn-info btn-xs"><i class="zmdi zmdi-edit"></i></button>
                <button class="btn btn-info btn-xs"><i class="zmdi zmdi-email"></i></button>
                <button class="btn btn-info btn-xs"><i class="zmdi zmdi-inbox"></i></button>
              </div>
            
              <div class="col-md-6 input-group">
                <div class="form-line">
                  <label>Company</label>
                  <input type="text" name="company" required value="{{isset($customer)?$customer->company:old('company')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <select class="form-control show-tick" name="first_name" required id="first_name">
                      <option value="{{NULL}}" selected="selected">First Name</option>
                      <optgroup>  
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='') echo "selected" ?> value=""></option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Mr') echo "selected" ?> value="Mr">Mr</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Mrs') echo "selected" ?> value="Mrs">Mrs</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Miss') echo "selected" ?> value="Miss">Miss</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Ms') echo "selected" ?> value="Ms">Ms</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Mr & Mrs') echo "selected" ?> value="Mr & Mrs">Mr & Mrs</option>
                      </optgroup>


                      <optgroup>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Dr') echo "selected" ?> value="Dr">Dr</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Sir') echo "selected" ?> value="Sir">Sir</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Rev') echo "selected" ?> value="Rev">Rev</option>
                        <option <?php if(isset($customer)?$customer->first_name:old("first_name")=='Prof') echo "selected" ?> value="Prof">Prof</option>
                      </optgroup>

                    </select>


                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                                    <label>Middle Name</label>
                  <input type="text" name="middle_name" required value="{{isset($customer)?$customer->middle_name:old('middle_name')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                                   <label>Last Name</label>
                  <input type="text" name="last_name" required value="{{isset($customer)?$customer->last_name:old('last_name')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>House No</label>
                  <input type="text" name="house_no" required value="{{isset($customer)?$customer->house_no:old('house_no')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>PostCode</label>
                  <input type="text" name="postcode" required id="postal_code" value="{{isset($customer)?$customer->postal_code:old('postcode')}}" class="form-control">
                  <div class="input-group-prepend">
                    
                    <button type="button" id="find_postal_code" class="btn btn-primary btn-xs"><i class="zmdi zmdi-search"></i></button>
                  </div>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Road</label>
                  <input type="text" name="road" id="road" required value="{{isset($customer)?$customer->road:old('road')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            <div class="row">
              
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Locality</label>
                  <input type="text" name="locality" required value="{{isset($customer)?$customer->locality:old('locality')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Town</label>
                  <input type="text" name="town" id="town"  required value="{{isset($customer)?$customer->town:old('town')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
           
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>County</label>
                  <input type="text" name="county" id="county" required value="{{isset($customer)?$customer->county:old('county')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              </div>
            <div class="row">
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone" required value="{{isset($customer)?$customer->telephone:old('telephone')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Mobile</label>
                  <input type="text" name="mobile" required value="{{isset($customer)?$customer->mobile:old('mobile')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            
              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Email</label>
                  <input type="email" name="email" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
          </div>
          <div class="col-md-6" style="border-left: 1px solid;">
            <div class="row">
              <div class="col-md-12 input-group">
                
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#account">Account</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#info_notes">Info / Notes</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rates">Rates / Misc</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privacy">Privacy</a></li>
                </ul>
              </div>
            </div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane animated flipInX active" id="account">
                @include('admin.customer.account')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="info_notes">
                @include('admin.customer.info_notes')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="rates">
                @include('admin.customer.rates')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="privacy">
                @include('admin.customer.privacy')
              </div>
              
            </div>
            
          </div>
        </div>
      </form>
      </div>
    </div>
    

<div id="statement_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="color: black !important;">Customer Statement</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <a href="" class="btn btn-success" data-dismiss="modal">Close</a>
          <hr style="width: 100%;">
        </div>

        <div class="row">
            <div class="col-md-9">
              <div class="col-md-12 input-group">
                <div class="form-line">
                  <select class="form-control show-tick" name="statement_type" required id="statement_type">
                      <option value="{{NULL}}" selected="selected">Type</option>
                      <option value="{{'statement_to_current_date'}}">Statement to Current Date</option>
                      <option value="{{'statement_within_range'}}">Statement Within Range</option>
                    </select>


                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div> 

              <div class="col-md-12 input-group" id="date_ranges" style="display: none;">
                <div class="row" style="width: 100%;">
                  <div class="col-md-6">
                          <div class="form-line">
                        <label>From</label>
                        <input type="date" name="from" required class="form-control" style="color: black !important;">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                  </div>

                  <div class="col-md-6">
                          <div class="form-line">
                        <label>To</label>
                        <input type="date" name="to" required class="form-control" style="color: black !important;">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                  </div>                
                </div>
              </div>
              <div class="col-md-12 input-group">

                  <a href="#" class="btn btn-primary">Preview</a>
                  <a href="#" class="btn btn-primary">Print</a>
                  <a href="#" class="btn btn-primary">Pdf</a>                  
                  <a href="#" class="btn btn-primary">Email</a>
              </div> 

               <div class="col-md-12 input-group">

                  <a href="#" class="btn btn-primary">Email Duplicate Invoices</a>
                  <a href="#" class="btn btn-primary">Print Duplicate Invoices</a>
              </div>               
            </div>

            <div class="col-md-3">
                <div class="row" style="height: 100%;background-color: #dedede;width: 100%;padding: 10px;font-size: 10px;color: black !important;">
                    <p id="all_unpaid">Show all unpaid invoices up to the current date.</p>
                    <p id="all_transactions" style="display: none;">Show all transactions between the date range, including those paid.</p>                    
                </div>
            </div>


        </div>
      </div>

    </div>

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

$('#statement_type').change(function(){

    if($(this).val()=='statement_within_range'){
      $('#date_ranges').show();
      $('#all_unpaid').hide();
      $('#all_transactions').show();
    }else{
      $('#date_ranges').hide();
      $('#all_unpaid').show();
      $('#all_transactions').hide();
    }


})


$('#submit_customer_form').click(function(){
  $('#submit_new_customer_form').submit();
});


$('.add_document').click(function(){

  var type = $(this).data('type');

  if($('input[name="account_number"]').val()==''){
    alert('Important customer details are missing');
    return false;
  }

  if($('input[name="company"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('#first_name').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="last_name"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }


  if($('input[name="house_no"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="postcode"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="road"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="locality"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="town"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="county"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="telephone"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="mobile"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

  if($('input[name="email"]').val()==''){
    alert('Important customer details are missing');
    return false;    
  }

var data=[];

account_number = $('input[name="account_number"]').val();
company = $('input[name="company"]').val();
first_name = $('#first_name').val();
last_name = $('input[name="last_name"]').val();
house_no = $('input[name="house_no"]').val();
postcode = $('input[name="postcode"]').val();
road = $('input[name="road"]').val();
locality = $('input[name="locality"]').val();
town = $('input[name="town"]').val();
county = $('input[name="county"]').val();
telephone = $('input[name="telephone"]').val();
mobile = $('input[name="mobile"]').val();
email = $('input[name="email"]').val();
middle_name = $('input[name="middle_name"]').val();

var string = 'account_number='+account_number+'&company='+company+'&first_name='+first_name+'&last_name='+last_name+'&house_no='+house_no+'&postcode='+postcode+'&road='+road+'&locality='+locality+'&town='+town+'&county='+county+'&telephone='+telephone+'&mobile='+mobile+'&email='+email+'&middle_name='+middle_name;


  if(type=='estimate'){
      window.location.href = '{{route("admin.add-new-estimate")}}?'+string;
  }
  if(type=='job_sheet'){
      window.location.href = '{{route("admin.add.jobsheets")}}?'+string;
  }

  if(type=='invoice'){
      window.location.href = '{{route("admin.add-new-invoice")}}?'+string;
  }

  if(type=='appoinment'){
      window.location.href = '{{route("admin.new.appointment")}}?'+string;
  }

  if(type=='vehicle'){
      window.location.href = "{{route('admin.add.new.vehicle')}}?"+string;
  }

});

$('#first_name').val(2);
$('#first_name').selectpicker('refresh');

</script>
@endsection()