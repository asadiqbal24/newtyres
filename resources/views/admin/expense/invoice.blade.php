@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
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
    
    <div class="card">
      <div class="card-body row">
        <div class="col-md-12">
          <a href="#" class="btn btn-success btn-xs btn-save">Save</a>
          <a href="#" data-toggle="modal" data-target="#copyModal" data-backdrop="false" class="btn btn-success btn-xs">Payments</a>
        </div>
      </div>
    </div>
    
    
    
    
    
    <div class="card">
      <div class="card-body">
        <form action="{{route('admin.save.invoice')}}?type=invoice" method="post" id="submit_form">
          {{csrf_field()}}
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Supplier</label>
                    <!--                   <input type="text" name="supplier" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control"> -->
                    <select class="form-control show-tick" name="supplier" id="supplier" required>
                      @foreach($suppliers as $s)
                      <option value="{{$s->id}}">{{$s->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Acc Number</label>
                    <input type="text" name="account_number" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Contact Name</label>
                    <input type="text" name="contact_name" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Address</label>
                    <input type="text" name="address[]" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <input type="text" name="address[]" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <input type="text" name="address[]" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <input type="text" name="address[]" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Post Code</label>
                    <input type="text" name="post_code" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Telephone</label>
                    <input type="text" name="telephone" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Fax</label>
                    <input type="text" name="fax" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Invoice Date</label>
                    <input type="date" name="invoice_date" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Invoice Number</label>
                    <input type="text" name="invoice_number" placeholder="Optional" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Nominal Category</label>
                    <!--                   <input type="text" name="supplier" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control"> -->
                    <select class="form-control show-tick" name="nominal_category" id="nominal_category" required>
                      <option>General</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Nominal Code</label>
                    <!--                   <input type="text" name="supplier" required value="{{isset($customer)?$customer->email:old('email')}}" class="form-control"> -->
                    <select class="form-control show-tick" name="nominal_code" id="nominal_code" required>
                      <option>5000 | General</option>
                    </select>
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Reference</label>
                    <input type="text" name="reference" placeholder="Optional" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label>Description</label>
                    <input type="text" name="desc" placeholder="Optional" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label>Calc Net from Gross</label>
                  <div class="row">
                    <div class="col-md-5 input-group">
                      <div class="form-line">
                        <label>T Code</label>
                        <select class="form-control show-tick" name="t_code" id="t_code" required>
                          <option>T0 VAT FREE 0%</option>
                          <option selected="selected">T1 EXC VAT 20%</option>
                          <option>T2 CUSTOM 20%</option>
                        </select>
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                    <div class="col-md-7 input-group">
                      
                      <div class="form-line">
                        <label>Gross</label>
                        <input type="text" name="gross" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                      </div>
                      <span class="input-group-addon"> <i></i> </span>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  
                  <div class="col-md-12 input-group">
                    
                    <div class="form-line">
                      <label>Net</label>
                      <input type="text" name="net" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-12 input-group">
                    
                    <div class="form-line">
                      <label>Net</label>
                      <select class="form-control show-tick" name="t_code_net" id="t_code_net" required>
                        <option>T0 VAT FREE 0%</option>
                        <option selected="selected">T1 EXC VAT 20%</option>
                        <option>T2 CUSTOM 20%</option>
                      </select>
                      <input type="text" name="vat_net" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-12 input-group">
                    
                    <div class="form-line">
                      <label>Gross</label>
                      <input type="text" name="net" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-12 input-group">
                    
                    <div class="form-line">
                      <label>Receipts</label>
                      <input type="text" name="receipts" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                  <div class="col-md-12 input-group">
                    
                    <div class="form-line">
                      <label>Balance</label>
                      <input type="text" name="balance" value="{{isset($customer)?$customer->email:old('email')}}" class="form-control">
                    </div>
                    <span class="input-group-addon"> <i></i> </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">

$('.btn-save').click(function(){
$('#submit_form').submit();
});
</script>
@endsection()