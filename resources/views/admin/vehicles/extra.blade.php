<div class="row">

 				<div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Combined</label>
                    <input type="text" name="combined" required value="{{isset($vehicle_details)?$vehicle_details->combined:old('combined')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Urban</label>
                    <input type="text" name="urban" required value="{{isset($vehicle_details)?$vehicle_details->urban:old('urban')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Cold</label>
                    <input type="text" name="cold" required value="{{isset($vehicle_details)?$vehicle_details->cold:old('cold')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>



                 <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>BHP</label>
                    <input type="text" name="bhp" required value="{{isset($vehicle_details)?$vehicle_details->bhp:old('bhp')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Torque</label>
                    <input type="text" name="torque" required value="{{isset($vehicle_details)?$vehicle_details->torque:old('torque')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Top Speed</label>
                    <input type="text" name="top_speed" required value="{{isset($vehicle_details)?$vehicle_details->top_speed:old('top_speed')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>0 - 60</label>
                    <input type="text" name="zero_sixty" required value="{{isset($vehicle_details)?$vehicle_details->zero_sixty:old('zero_sixty')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>C02</label>
                    <input type="text" name="c02" required value="{{isset($vehicle_details)?$vehicle_details->c02:old('c02')}}" class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>


                @for($i=1;$i<=8;$i++)
                <div class="col-md-3 input-group">
                  <div class="form-line">
                    <label>Custom Field {{$i}}</label>
                    <input type="text" name="custom_field{{$i}}" value="{{isset($vehicle_details)?$vehicle_details->custom_field1:old('custom_field1')}}" required class="form-control">
                  </div>
                  <span class="input-group-addon"> <i></i> </span>
                </div>
                @endfor



</div>