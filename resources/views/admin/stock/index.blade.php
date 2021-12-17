@extends('partials.default')

<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
@section('content')
@section('stock','active_tab')

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
          <a href="{{route('admin.add.new.stock')}}" class="btn btn-success">New Item</a>
          <a href="{{route('admin.orders')}}" class="btn btn-success">Orders</a>
          <a href="{{route('admin.stock')}}?type=low" class="btn btn-success">Low</a>
          <a href="{{route('admin.stock')}}?type=reserved" class="btn btn-success">Reserved</a>
          <a href="" class="btn btn-success">Print</a>
        </div>
        <div class="col-md-2">
          <select class="form-control show-tick">
            <optgroup><option>50</option>
            <option>100</option>
            <option>250</option>
            <option>500</option>                                                                                                                        </optgroup>
            <optgroup>
              <option>1000</option>
              <option>5000</option>
            </optgroup>
            <optgroup>
              <option>All</option>
            </optgroup>
          </select>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2">
            
            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
              <div class="form-line">
                <label class="col-md-12">Category</label>
                <input type="number" class="form-control" name="starting_from" id="starting_from">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
          <div class="col-md-2">
            
            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
              <div class="form-line">
                <label class="col-md-12">Subcategory</label>
                <input type="number" class="form-control" name="starting_from" id="starting_from">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
          <div class="col-md-2">
            
            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
              <div class="form-line">
                <label class="col-md-12">Manufacturer</label>
                <input type="number" class="form-control" name="starting_from" id="starting_from">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
          <div class="col-md-2">
            
            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
              <div class="form-line">
                <label class="col-md-12">Supplier</label>
                <input type="number" class="form-control" name="starting_from" id="starting_from">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
          <div class="col-md-2">
            
            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
              <div class="form-line">
                <label class="col-md-12">Display All</label>
                <input type="number" class="form-control" name="starting_from" id="starting_from">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
          <div class="col-md-1"></div>
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
                    <th>Categories</th>
                    <th>Sup</th>
                    <th>Description</th>
                    <th>Barcode</th>
                    <th>Net Price</th>
                    <th>Avail </th>
                    <th>Low Stock</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="25">ALL</td>
                  </tr>
                  @foreach($stock as $s)
                  <tr>
                    <td>{{$s->sub}}</td>
                    <td>{{$s->description}}</td>
                    <td>{{$s->barcode}}</td>
                    <td>{{$s->cost_net}}</td>
                    <td>{{$s->actual_stock_level}}</td>
                    <td>{{$s->low_stock_below}}</td>
                    <td>
                      <a href="#" data-toggle="modal" data-target="#stock_info_modal" data-backdrop="false" class="btn btn-info">Info</a>
                      <a href="{{route('admin.edit.stock',['id'=>$s->id])}}" class="btn btn-primary">Edit</a>
                      <a href="{{route('admin-stock-delete',['id'=>$s->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th colspan="2">Stock Order Info</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Required Stock</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Orders To Process</td>
                    <td></td>
                  </tr><tr>
                  <td>Returns to Process</td>
                  <td></td>
                </tr><tr>
                <td>Due Delivery</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Stock Basket
        </div>
        <div class="card-body">
          <p>Add stock items from the left to use on a new document</p>
          
          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
            <div class="form-line">
              <label>Retail Subtotal</label>
              <input type="text" class="form-control" required="required" name="retail_subtotal" readonly disabled>
            </div>
            <span class="input-group-addon"> <i></i> </span>
          </div>
          <div class="col-lg-12">
            <button class="btn btn-default btn-block">Add to New Document</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="stock_info_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content" style="background-color:cadetblue;width: 150%;left: -22%;">
        <form method="get" action="{{route('admin.save-starting-no',['type'=>'estimate'])}}">
          {{csrf_field()}}
          <input type="hidden" name="selected_id" id="selected_id">
          <div class="modal-header">
            <h4 class="modal-title" id="defaultModalLabel">Stock Item Info</h4>
            <hr>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-7">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped table-hovered">
                    <thead>
                      <tr>
                        <th colspan="5">Document with this item currently reserved</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Doc no.</th>
                        <th>Date</th>
                        <th>From Order</th>
                        <th>From Stock</th>
                        <th></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12">
                  <p>Items will no longer be reserved once the invoice in question is issued.</p>
                </div>
                
                <div class="col-md-12">
                  <table class="table table-bordered table-striped table-hovered">
                    <thead>
                      <tr>
                        <th colspan="5">Transactions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Cost</th>
                        <th>Retail</th>
                        <th></th>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-md-5">
                
                <div class="col-md-12">
                  
                  <div class="demo-checkbox">
                    <input type="checkbox" value="1" id="md_checkbox_track_item" name="track_item" class="chk-col-red" />
                    <label for="md_checkbox_track_item" style="color: white !important;">Track Item Quantities</label>
                  </div>
                </div>
                <div class="col-md-12 input-group">
                  <div class="form-line">
                    <label class="text-white">Actual Stock Level</label>
                    <input type="text" name="actual_stock_level" id="actual_stock_level" required class="form-control">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Low Stock When Below</label>
                      <input type="text" name="low_stock_when_below" id="low_stock_when_below" required class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Minimum Order Quantity</label>
                      <input type="text" name="minimum_order_quantity" id="minimum_order_quantity" required class="form-control">
                    </div>
                  </div>
                </div>
                
                <hr>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      
                      <div class="col-md-12 input-group">
                        <div class="form-line">
                          <label class="text-white">Reserved Qty From Stock</label>
                          <input type="text" name="reserved_qty_from_stock" id="reserved_qty_from_stock" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12 input-group">
                        <div class="form-line">
                          <label class="text-white">Reserved Qty From Orders</label>
                          <input type="text" name="reserved_qty_from_orders" id="reserved_qty_from_orders" required class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12 input-group">
                        <div class="form-line">
                          <label class="text-white">Reserved Qty Total</label>
                          <input type="text" name="reserved_qty_total" id="reserved_qty_total" required class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <button class="btn btn-primary" type="button">Reset</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Date Last Purchased</label>
                      <input type="text" name="date_last_purchased" id="date_last_purchased" required class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Total Qty IN</label>
                      <input type="text" name="total_qty_in" id="total_qty_in" required class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Date Last Sold</label>
                      <input type="text" name="date_last_sold" id="date_last_sold" required class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6 input-group">
                    <div class="form-line">
                      <label class="text-white">Total Qty OUT</label>
                      <input type="text" name="total_qty_out" id="total_qty_out" required class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <hr>
                  <div class="col-md-6">
                    <div class="col-md-12 input-group">
                      <label class="text-white"><strong>Average</strong></label>
                    </div>
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <label class="text-white">Cost</label>
                        <input type="text" name="average_cost" id="average_cost" required class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <label class="text-white">Retail</label>
                        <input type="text" name="average_retail" id="average_retail" required class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="col-md-12 input-group">
                      <label class="text-white"><strong>Max</strong></label>
                    </div>
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <label class="text-white">Cost</label>
                        <input type="text" name="max_cost" id="max_cost" required class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 input-group">
                      <div class="form-line">
                        <label class="text-white">Retail</label>
                        <input type="text" name="max_retail" id="max_retail" required class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                
                
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection()
@section('jsOutside')
@endsection()