<div class="row">
	<div class="col-md-3 input-group">
        <div class="form-line">
          <label>Origin</label>
          <input type="text" name="origin" required value="{{isset($vehicle_details)?$vehicle_details->origin:old('origin')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Model Series</label>
          <input type="text" name="model_series" required value="{{isset($vehicle_details)?$vehicle_details->model_series:old('model_series')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>              

      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Seats</label>
          <input type="text" name="seats" required value="{{isset($vehicle_details)?$vehicle_details->seats:old('seats')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Body Style</label>
          <input type="text" name="body_style" required value="{{isset($vehicle_details)?$vehicle_details->body_style:old('body_style')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>


      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Gears</label>
          <input type="text" name="gears" required value="{{isset($vehicle_details)?$vehicle_details->gears:old('gears')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Transmission</label>
          <input type="text" name="transmission" required value="{{isset($vehicle_details)?$vehicle_details->transmission:old('transmission')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

       <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Drive Axle</label>
          <input type="text" name="drive_axle" required value="{{isset($vehicle_details)?$vehicle_details->drive_axle:old('drive_axle')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

       <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Drive Type</label>
          <input type="text" name="drive_type" required value="{{isset($vehicle_details)?$vehicle_details->drive_type:old('drive_type')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Fuel Delivery</label>
          <input type="text" name="fuel_delivery" required value="{{isset($vehicle_details)?$vehicle_details->fuel_delivery:old('fuel_delivery')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>



      <div class="col-md-3 input-group">
        <div class="form-line">
          <label>Aspiration</label>
          <input type="text" name="aspiration" required value="{{isset($vehicle_details)?$vehicle_details->aspiration:old('aspiration')}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>
    <br>
      

        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Valves per Cyl</label>
            <input type="text" name="valves_per_cyl" required value="{{isset($vehicle_details)?$vehicle_details->valves_per_cyl:old('valves_per_cyl')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Bore</label>
            <input type="text" name="bore" required value="{{isset($vehicle_details)?$vehicle_details->bore:old('bore')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Kerb Weight Min</label>
            <input type="text" name="kerb_weight" required value="{{isset($vehicle_details)?$vehicle_details->kerb_weight:old('kerb_weight')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Max</label>
            <input type="text" name="max" required value="{{isset($vehicle_details)?$vehicle_details->max:old('max')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Gross</label>
            <input type="text" name="gross" required value="{{isset($vehicle_details)?$vehicle_details->gross:old('gross')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>




         <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Height mm</label>
            <input type="text" name="height_mm" required value="{{isset($vehicle_details)?$vehicle_details->height_mm:old('height_mm')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Width</label>
            <input type="text" name="width" required value="{{isset($vehicle_details)?$vehicle_details->width:old('width')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>


        <div class="col-md-3 input-group">
          <div class="form-line">
            <label>Roof</label>
            <input type="text" name="roof" required value="{{isset($vehicle_details)?$vehicle_details->roof:old('roof')}}" class="form-control">
          </div>
          <span class="input-group-addon"> <i></i> </span>
        </div>
        <div class="col-md-3 input-group"></div>
        <div class="col-md-3 input-group"></div>        
        <div class="col-md-3 input-group">
          <label>Cylinders</label>
      </div>
      @if(isset($vehicle_details->cylinders))
                            @php $cylinders = unserialize($vehicle_details->cylinders); @endphp
                         @else
                            @php $cylinders = [] @endphp                            
                         @endif 

      <div class="col-md-3 input-group">
        <div class="form-line">
          <input type="text" name="cylinders[]" required value="{{isset($cylinders[0])?$cylinders[0]:$cylinders->cylinders??''}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <input type="text" name="cylinders[]" required value="{{isset($cylinders[1])?$cylinders[0]:$cylinders->cylinders??''}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

      <div class="col-md-3 input-group">
        <div class="form-line">
          <input type="text" name="cylinders[]" required value="{{isset($cylinders[2])?$cylinders[0]:$cylinders->cylinders??''}}" class="form-control">
        </div>
        <span class="input-group-addon"> <i></i> </span>
      </div>

</div>