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

<form method="post" action="{{route('admin-payment-update')}}">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$edit->id}}">
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <button class="btn btn-success" type="submit">Save</button>
            
          </div>
        </div>
        
      </div>
    </div>


      <div class="card">
        <div class="card-body">
          <div class="row clearfix">
            <div class="col-lg-4 input-group">
              <div class="form-line">
                <label>Name</label>
                <input type="text" value="{{$edit->name}}" name="name" class="form-control">
              </div>
            </div>
            <div class="col-lg-4 input-group">
              <div class="form-line">
                <label>Bank Nominal</label>
                <input type="text" value="{{$edit->bank_nominal}}" name="bank_nominal" class="form-control">
              </div>
            </div>
            <div class="col-lg-4 input-group">
              <div class="form-line">
                <label>Type Grouping Used for Report</label>
                <select class="form-control show-tick" name="group_type">
                  <option value="{{Null}}">Choose</option>
                  <option value="Cash" <?php if($edit->group_type=='Cash')echo"selected='selected'";?>>Cash</option>
                  <option value="Cheque" <?php if($edit->group_type=='Cheque')echo"selected='selected'";?>>Cheque</option>
                  <option value="Digital" <?php if($edit->group_type=='Digital')echo"selected='selected'";?>>Digital</option>
                  
                </select>
              </div>
              
            </div>
            <div class="col-md-4 input-group" style="margin-top:30px;">
              
              <div class="demo-checkbox">
                <input type="checkbox" name="payment_active" value="1" id="payment_active" class="chk-col-red" @if($edit->active) checked @endif>
                <label for="payment_active">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Active</font></font>
                </label>
              </div>
              
            </div>
            <div class="col-md-4 input-group" style="margin-top:30px;">
              
              <div class="demo-checkbox">
                <input type="checkbox" name="surcharge_applicable" value="1" id="surcharge_applicable" class="chk-col-red" @if($edit->surcharge_applicable) checked @endif>
                <label for="surcharge_applicable">
                  <font style="vertical-align: inherit;">Surcharge Applicable</font>
                </label>
              </div>
              
            </div>
            
            
          </div>
        </div>
        
      </div>



      </form>

  </div>
</section>




  @endsection()