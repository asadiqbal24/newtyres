
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


<form method="post" action="{{route('admin-stock-setting-save')}}">
	{{csrf_field()}}

	@if(isset($stock))
	<input type="hidden" name="id" value="{{$stock->id}}">
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
		<div class="row clearfix">
			<div class="col-lg-6">
				<div class="col-lg-12 input-group">
					<input type="checkbox" id="basic_checkbox_2" class="filled-in" name="new_entry" @if($stock->new_item) checked @endif>
					<label for="basic_checkbox_2" style="padding-left: 50px!important;font-size: 15px;color: white;">Ask to add newly entered items to the stock database</label>
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group">
					<input type="checkbox" id="defaultstock" class="filled-in" name="defaultstock" @if($stock->default_stock) checked @endif>
					<label for="defaultstock" style="padding-left: 50px!important;font-size: 15px;color: white;">Default stock tracking option for new items</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12">
					<input type="text"  name="new_stock_item" style="width:10%;" value="{{isset($stock)?$stock->stock_item:''}}" >
					<label  style="padding-left: 10px!important;font-size: 15px;color: white;position: relative;
						top: 10px;">
						Default Mark as low value for new stock items
						<br>Set too 0 to prevent the item showing as low when there is 0 stock qty<br>
						Set to 1 or leave to empty to mark as low when there is 0 stock qty
					</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group" style="padding-top:30px;">
					<input type="checkbox" id="home_screen" class="filled-in" name="home_screen" @if($stock->home_screen) checked @endif>
					<label for="home_screen" style="padding-left: 50px!important;font-size: 15px;color: white;">Show low stock count on Home Screens</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group">
					<input type="checkbox" id="auto_lookup" class="filled-in" name="auto_lookup" @if($stock->auto_lookup) checked @endif>
					<label for="auto_lookup" style="padding-left: 50px!important;    padding-bottom: 70px;
					font-size: 15px;color: white;">Disable Part Number Auto Lookup <br>This should not be set to Yes (disabled) if you use stock control ! <br>When disabled,the part number field has no functionality,changing a part number will not clear /re-look up new part details</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group" style="padding-top:30px;">
					<input type="checkbox" id="gross_figure" class="filled-in" name="gross_figure" @if($stock->gross_figure) checked @endif>
					<label for="gross_figure" style="padding-left: 50px!important;font-size: 15px;color: white;">Display stock pricing as GROSS figure instead of NET</label>
					
				</div>
				<hr style="width:100%;">
				
				<div class="col-lg-12 input-group" style="padding-top:30px;">
					<input type="checkbox" id="update_stock_pricing" class="filled-in" name="update_stock_pricing" @if($stock->update_stock_price) checked @endif>
					<label for="update_stock_pricing" style="padding-left: 50px!important;font-size: 15px;color: white;">Update stock pricing when changed via document</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group" style="padding-top:30px;">
					<input type="checkbox" id="enable_barcode" class="filled-in" name="enable_barcode" @if($stock->barcode_scanning) checked @endif>
					<label for="enable_barcode" style="padding-left: 50px!important;padding-bottom: 80px;font-size: 15px;color: white;">Enable Barcode scanning adjustment<br> If Using Barcode scanner this will make it so after scanning  the barcode number the system will drop down to the next part number field for additional scans.<br>When set to N it will go the part description </label>
					
				</div>
				<hr style="width:100%;">
			</div>
			<div class="col-lg-6">
				<div class="col-lg-12 input-group">
					<input type="checkbox" id="stock_older_system" class="filled-in" name="stock_older_system" @if($stock->stock_older_system) checked @endif>
					<label for="stock_older_system" style="padding-left: 50px!important;font-size: 15px;color: white;">Enable stock order system <br>Are out of stock items added to order request lists</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group">
					<input type="checkbox" id="stock_order" class="filled-in" name="stock_order" @if($stock->stock_order) checked @endif>
					<label for="stock_order" style="padding-left: 50px!important;font-size: 15px;color: white;">Enable ordering by prompting each time <br>If Stock order system is off, prompt to order out of stock items</label>
					
				</div>
				<hr style="width:100%;">
				<div class="col-lg-12 input-group" >
					<input type="checkbox" id="allow_negative_stock" class="filled-in" name="allow_negative_stock" @if($stock->negative_stock) checked @endif>
					<label for="allow_negative_stock" style="padding-left: 50px!important;padding-bottom: 70px;font-size: 15px;color: white;">Allow negative stock  <br>
						If set to Yes,items can be added/invoiced regardless of whether
						they exist in stock or not,allowing the stock quantity to go into a negative balance
					This is only available when the order system is disabled</label>
					
				</div>
				<hr style="width:100%;">
				
			</div>
		</div>
	</div>
	
</div>




</form>
</div>
</section>

@endsection()