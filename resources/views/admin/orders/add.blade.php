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
          <a href="#" class="btn btn-success">Close</a>
          <a href="{{route('admin.new.order')}}" class="btn btn-success">Set Ordered</a>
          <a href="" class="btn btn-success">Print Order</a>
          <a href="" class="btn btn-success">Email Order</a>
          <a href="" class="btn btn-success">Print Allocations</a>

          <a href="" class="btn btn-danger float-right">Delete</a>          
        </div>
              
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <div class="row">



              <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#required_items">Required Items</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#low_stock">Low Stock</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#search">Search</a></li>                                    
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="required_items">
                                      @include('admin.orders.required_items')
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="low_stock">
                                      @include('admin.orders.low_stock')                                      
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="search">
                                      @include('admin.orders.search')                                                                            
                                    </div>
                                </div>
                            </div>


              
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            
            <div class="row">

              <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                <div class="form-line">
                  <label class="col-md-12">Suppliers</label>
                  <select class="form-control show-tick" name="supplier_1">
                    <option>Select</option>
                    @foreach($suppliers as $sub)
                    <option value="{{$sub->id}}">{{$sub->name}}</option>
                    @endforeach
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Telephone</label>
                  <input type="text" name="telephone" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Acc</label>
                  <input type="text" name="account" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Order No.</label>
                  <input type="text" name="order_no" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Total Items</label>
                  <input type="text" name="total_items" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


                            <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Date</label>
                  <input type="date" name="date" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Total Qty</label>
                  <input type="text" name="total_qty" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>



               <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Status</label>
                  <input type="text" name="status" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-lg-6 col-sm-12 col-md-6 input-group">
                <div class="form-line">
                  <label class="col-md-12">Type</label>
                  <input type="text" name="type" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>




            </div>


            <div class="row">

                <h3>Items of Order</h3>

                <table class="table table-bordered">
                <thead>
                  <tr>
                    <th></th>
                    <th>Part Number</th>
                    <th>Description</th>
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
    </div>
  </div>
</section>
@endsection()
@section('jsOutside')
@endsection()