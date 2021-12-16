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
        <div class="col-md-2">
          <input type="text" name="account_search" class="form-control" placeholder="Stock Search">
        </div>
        <div class="col-md-2">
          <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
          <button class="btn btn-info"><i class="zmdi zmdi-close"></i></button>
        </div>
        <div class="col-md-6">
          <a href="#" class="btn btn-success">Close</a>
          <a href="{{route('admin.new.order')}}" class="btn btn-success">New Order</a>
          <a href="{{route('admin.new.return')}}" class="btn btn-success">New Return</a>
        </div>
        
      </div>
    </div>
        
    <div class="row">
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Created At</th>
                    <th>Type</th>
                    <th>Order No.</th>
                    <th>Order Date / Time</th>
                    <th>Supplier</th>
                    <th>Note</th>
                    <th>Items</th>                    
                    <th>Qty</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>


              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Created At</th>
                    <th>Type</th>
                    <th>Order No.</th>
                    <th>Order Date / Time</th>
                    <th>Supplier</th>
                    <th>Qty</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">Required Stock</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Not On an Order</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td>Qty</td>
                </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>
</section>
@endsection()
@section('jsOutside')
@endsection()