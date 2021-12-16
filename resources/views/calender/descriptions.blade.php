<div class="col-md-12 input-group">
    <div class="form-line">
        <label>Write Description</label>
        <textarea type="text" name="description" value="{{isset($description)?$customer->description:old('description')}}" class="form-control"></textarea>
    </div>
    <span class="input-group-addon"> <i></i> </span>
</div>
