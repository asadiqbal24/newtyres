<div class="row">
  <div class="col-md-12 input-group">
    
    <div class="form-line">
      <label>Further Info 1</label>
      <input type="text" name="further_info_1" required value="{{isset($edit)?$edit->further_info_1:old('further_info_1')}}" class="form-control">
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
</div>
<div class="row">
  <div class="col-md-12 input-group">
    
    <div class="form-line">
      <label>Further Info 2</label>
      <input type="text" name="further_info_2" required value="{{isset($edit)?$edit->further_info_2:old('further_info_2')}}" class="form-control">
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
</div>
<div class="row">
  <div class="col-md-12 input-group">
    
    <div class="form-line">
      <label>Further Info 3</label>
      <input type="text" name="further_info_3" required value="{{isset($edit)?$edit->further_info_3:old('further_info_3')}}" class="form-control">
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
</div>
<div class="row">
  <div class="col-md-6 input-group">
    
    <div class="form-line">
      <label>How Found Us</label>
      <select class="form-control show-tick" name="how_found_us">
        <option></option>
        <option <?php if(isset($edit->how_found_us)?$edit->how_found_us:old("how_found_us")=='EC Existing Customer') echo "selected" ?> >EC Existing Customer</option>
      </select>
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
  <div class="col-md-6 input-group">
    
    <div class="form-line">
      <label>Last Invoiced</label>
      <input type="text" name="last_invoiced" required value="{{isset($edit)?$edit->last_invoiced:old('last_invoiced')}}" class="form-control">
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
</div>
<div class="row">
  <div class="col-md-12 input-group">
    
    <div class="form-line">
      <textarea type="text" name="description" required class="form-control"> {{isset($edit)?$edit->description:old('description')}}</textarea>
    </div>
    <span class="input-group-addon"> <i></i> </span>
  </div>
</div>