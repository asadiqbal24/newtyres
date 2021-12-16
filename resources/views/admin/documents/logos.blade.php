<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<label class="col-md-12"><strong>Header</strong> <span style="float: right;color: red;font-size:10px; "><i>Dimensions</i></span></label>
			</div>

				<div class="col-md-12 mt-2">
					<img id="image_upload" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 100%;height: 150px;">
				</div>

			<div class="col-md-12">
				<label class="custom-file-upload btn btn-info btn-block">
				    <input id="image" type="file"/ onchange="readURL(this,'image_upload')" style="display: none">
				    Full Letterhead
				</label>
			</div>

			<div class="col-md-12">
				<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>	

				<label><small>Stretch<br>to Fit</small></label>	
					<input type="radio" id="basic_checkbox_1" name="is_stretch_to_fit" value="1" />
					<label for="basic_checkbox_1">Yes</label>
					<input type="radio" id="basic_checkbox_2" name="is_stretch_to_fit" value="0" checked />
					<label for="basic_checkbox_2">No</label>
			</div>



			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_1" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;">
				</div>


					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_1" type="file"/ onchange="readURL(this,'logo_1','65','65')" style="display: none">
					    Logo
					</label>

					<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>

			</div>

			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_2" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;padding: 0px;">
				</div>


					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_2" type="file"/ onchange="readURL(this,'logo_2','65','65')" style="display: none">
					    Logo
					</label>
<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>


			</div>

			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_3" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;padding: 0px;">
				</div>

				
					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_3" type="file"/ onchange="readURL(this,'logo_3','65','65')" style="display: none">
					    Logo
					</label>

					<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>

			</div>
		</div>
	</div>
</div>



<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<label class="col-md-12"><strong>Footer</strong> <span style="float: right;color: red;font-size:10px; "><i>Dimensions</i></span></label>
			</div>

				<div class="col-md-12 mt-2">
					<img id="image_upload" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 100%;height: 150px;">
				</div>

			<div class="col-md-12">
				<label class="custom-file-upload btn btn-info btn-block">
				    <input id="image" type="file"/ onchange="readURL(this,'image_upload')" style="display: none">
				    Full Footer
				</label>
			</div>

			<div class="col-md-12">
				<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>	

				<label><small>Stretch<br>to Fit</small></label>	
					<input type="radio" id="basic_checkbox_1" name="is_stretch_to_fit" value="1" />
					<label for="basic_checkbox_1">Yes</label>
					<input type="radio" id="basic_checkbox_2" name="is_stretch_to_fit" value="0" checked />
					<label for="basic_checkbox_2">No</label>
			</div>



			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_1" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;">
				</div>


					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_1" type="file"/ onchange="readURL(this,'logo_1','65','65')" style="display: none">
					    Logo
					</label>

					<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>

			</div>

			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_2" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;padding: 0px;">
				</div>


					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_2" type="file"/ onchange="readURL(this,'logo_2','65','65')" style="display: none">
					    Logo
					</label>
<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>
					

			</div>

			<div class="col-md-4">

				<div class="col-md-12 mt-2" style="padding: 0px !important">
					<img id="logo_3" src="{{asset('public/images/theme/placeholder_general.jpg')}}" style="width: 65px;height: 65px;padding: 0px;">
				</div>

				
					<label class="custom-file-upload btn btn-info btn-block">
					    <input id="logo_file_3" type="file"/ onchange="readURL(this,'logo_3','65','65')" style="display: none">
					    Logo
					</label>

					<button><i class="material-icons">add</i></button>
				<button><i class="material-icons">file_download</i></button>
				<button id="disable_upload_btn" onclick="disable_remove_btn(this,'image_upload','image')"><i class="material-icons">clear</i></button>

			</div>
		</div>
	</div>
</div>