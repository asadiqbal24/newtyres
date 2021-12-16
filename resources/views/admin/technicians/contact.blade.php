<div class="clearfix"></div>
<div class="row" style="margin-top:20px;">
<div class="col-md-8">
	
<div class="row">
	<div class="col-md-12">
		<label class="col-md-12">Technician</label>
		<input type="radio" id="basic_checkbox_1" name="is_technician" value="1" checked/>
		<label for="basic_checkbox_1">Yes</label>
		<input type="radio" id="basic_checkbox_2" name="is_technician" value="0"  />
		<label for="basic_checkbox_2">No</label>
	</div>
	<div class="col-md-12">
		<label class="col-md-12">MOT Tester</label>
		<input type="radio" id="basic_checkbox_1" name="is_motor_test" value="1" />
		<label for="basic_checkbox_1">Yes</label>
		<input type="radio" id="basic_checkbox_2" name="is_motor_test" value="0" checked />
		<label for="basic_checkbox_2">No</label>
	</div>
	<hr style="width: 100%">
</div>
<div class="row">
	<div class="col-md-12 input-group">
		<div class="form-line">
			<label>Address</label>
			<textarea type="text" name="address" rows="5" required class="form-control"></textarea>
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
</div>

<div class="row">
	<div class="col-md-6 input-group">
		<div class="form-line">
			<label>Telephone</label>
			<input type="text" name="telephone" required class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>

	<div class="col-md-6 input-group">
		<div class="form-line">
			<label>Phone</label>
			<input type="text" name="phone" required class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
</div>

<div class="row">
	<div class="col-md-12 input-group">
		<div class="form-line">
			<label>Email</label>
			<textarea type="text" name="email" required class="form-control"></textarea>
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>


</div>



</div>

<div class="col-md-4">
	
	<div class="col-md-12 mt-2">
		<img id="image_upload" src="{{asset('public/images/theme/placeholder.jpg')}}" style="width: 100%">
	</div>

	<div class="col-md-12">	

			<label class="custom-file-upload btn btn-info btn-block">
			    <input id="image" type="file"/ onchange="readURL(this,'image_upload')" style="display: none">
			    Add Photo
			</label>

			<button class="btn btn-warning btn-block" id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')" disabled>
			    Remove Photo
			</button>

	</div>
</div>

	<hr style="width: 100%">
</div>


<div class="row">
	<div class="col-md-12 input-group">
		<div class="form-line">
			<textarea type="text" name="description" rows="5" class="form-control"></textarea>
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
</div>