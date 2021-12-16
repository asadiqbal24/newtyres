<div class="row">
	<div class="col-md-6 input-group">
		
		<div class="form-line">
			<label>Labour Rate</label>
			<input type="text" name="labour_rate" required value="{{isset($customer_details)?$customer_details->labour_rate:old('labour_rate')}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="col-md-6 input-group">
		
		<div class="form-line">
			<label>Labour Discount (%)</label>
			<input type="text" name="labour_discount" required value="{{isset($customer_details)?$customer_details->labour_discount:old('labour_discount')}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		
		<div class="form-line">
			<label>Trade Parts Rate</label>
			<div class="demo-checkbox">
				<div class="row">

					 @if(isset($customer_details))
	                
					 @if($customer_details->trade_parts_rate==1)	                 
	                 @php $check_yes = 'checked'; @endphp
	                   @php $check_no = ''; @endphp
	                @else
	                  @php $check_no = 'checked'; @endphp
	                  @php $check_yes = ''; @endphp
	                @endif


					 @else
					@if(old('trade_parts_rate')=='on')	                 
	                 @php $check_yes = 'checked'; @endphp
	                   @php $check_no = ''; @endphp
	                @else
	                  @php $check_no = 'checked'; @endphp
	                  @php $check_yes = ''; @endphp
	                @endif

	                @endif  


					<div class="col-md-6">
						<input type="radio" id="md_checkbox_1" name="trade_parts_rate" {{$check_yes}} value="1" class="chk-col-red"  />
						<label for="md_checkbox_1">Yes</label>
					</div>
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_2" name="trade_parts_rate" value="0" {{$check_no}} class="chk-col-red" checked />
						<label for="md_checkbox_2">No</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 input-group">
		
		<div class="form-line">
			<label>Parts Discount (%)</label>
			<input type="text" name="parts_discount" required value="{{isset($customer_details)?$customer_details->parts_discount:old('parts_discount')}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		
		<div class="form-line">
			<label>Force TAX code usage</label>
			<select class="form-control show-tick" name="force_tax_code_usage" required>
				<option>-</option>
				<option <?php if(isset($customer_details)?$customer_details->force_tax_code_usage:old("force_tax_code_usage")=='T0 VAT FREE 0%') echo "selected" ?> >T0 VAT FREE 0%</option>
				<option <?php if(isset($customer_details)?$customer_details->force_tax_code_usage:old("force_tax_code_usage")=='T1 VAT FREE 20%') echo "selected" ?> >T1 VAT FREE 20%</option>
				<option <?php if(isset($customer_details)?$customer_details->force_tax_code_usage:old("force_tax_code_usage")=='T5 VAT FREE 20%') echo "selected" ?> >T5 VAT FREE 20%</option>
			</select>
		</div>
	</div>
	
</div>
<div class="row">
	<div class="col-md-12 input-group mt-3">
		
		<div class="form-line" >
			<label>Customer Type</label>
			<select class="form-control show-tick" name="customer_type" required>
				<optgroup>
					<option  <?php if(isset($customer_details)?$customer_details->customer_type:old("customer_type")=='Retail Customer') echo "selected" ?>>Retail Customer</option>
					<option  <?php if(isset($customer_details)?$customer_details->customer_type:old("customer_type")=='Trade Customer') echo "selected" ?>>Trade Customer</option>
					<option  <?php if(isset($customer_details)?$customer_details->customer_type:old("customer_type")=='Insurance Company') echo "selected" ?>>Insurance Company</option>
				</optgroup>
				
				<optgroup><option>Internal</option></optgroup>
			</select>
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	
</div>
<div class="row">
	<div class="col-md-12">
		<p style="text-align: justify;"><strong>Customer type:</strong> Insurance company, Trade, and Retail are currently used for the Business Report > KPI Report Assistant, to break down the figures appropriately. Internal should be used when invoicing yourself and will use the cost price of parts for the selling price.</p>
	</div>
	
</div>