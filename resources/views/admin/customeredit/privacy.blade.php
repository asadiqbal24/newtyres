<div class="row">
	<div class="col-md-6">
		
		<div class="form-line">
			<label>Allow <strong>Reminders</strong> (Any Method)</label>
			<div class="demo-checkbox">
				<div class="row">
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_1" name="allow_remainders" value="1" class="chk-col-red" checked  />
						<label for="md_checkbox_1">Yes</label>
					</div>
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_2" name="allow_remainders" value="0" class="chk-col-red"  />
						<label for="md_checkbox_2">No</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		
		<div class="form-line">
			<label>Allow <strong>Mass Mailings</strong> (Any Method)</label>
			<div class="demo-checkbox">
				<div class="row">
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_3" name="allow_mass_mailings" value="1" class="chk-col-red" checked  />
						<label for="md_checkbox_3">Yes</label>
					</div>
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_4" name="allow_mass_mailings" value="0" class="chk-col-red"  />
						<label for="md_checkbox_4">No</label>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		
		<div class="form-line">
			<label>Allow Individual <strong>Email</strong> Communication</label>
			<div class="demo-checkbox">
				<div class="row">
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_5" name="allow_indivual_email" value="1" class="chk-col-red" checked  />
						<label for="md_checkbox_5">Yes</label>
					</div>
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_6" name="allow_indivual_email" value="0" class="chk-col-red"  />
						<label for="md_checkbox_6">No</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6">
		
		<div class="form-line">
			<label>Allow Individual <strong>SMS</strong> Communication</label>
			<div class="demo-checkbox">
				<div class="row">
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_7" name="allow_indivual_sms" value="1" class="chk-col-red" checked  />
						<label for="md_checkbox_7">Yes</label>
					</div>
					<div class="col-md-6">
						<input type="radio" id="md_checkbox_8" name="allow_indivual_sms" value="0" class="chk-col-red"  />
						<label for="md_checkbox_8">No</label>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		
		<div class="form-line">
			<label style="color: red"><strong>Do you have the customers consent for these settings?</strong></label>
			<div class="demo-checkbox">
				<div class="row">
					<div class="col-md-2">
						<input type="radio" id="md_checkbox_9" name="settings" value="1" class="chk-col-red"   />
						<label for="md_checkbox_9">Yes</label>
					</div>
					<div class="col-md-10">
						<input type="radio" id="md_checkbox_10" name="settings" value="0" class="chk-col-red" checked />
						<label for="md_checkbox_10">No</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 input-group">
		
		<div class="form-line">
			<label>Notes</label>
			<input type="text" name="notes" value="{{isset($edit)?$edit->notes:old('notes')}}" required class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="col-md-12 input-group">
		
		<button class="btn  btn-raised bg-grey waves-effect btn-block">Update Privacy Settings</button>
	</div>
</div>