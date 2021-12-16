<div class="row">
	<div class="col-md-6">
		<img id="bike" class="image_type" src="{{asset('public/images/bike.jpg')}}" style="width: 100%;height: 250px;display: none">
		<img id="car" class="image_type" src="{{asset('public/images/car.jpg')}}" style="width: 100%;height: 250px;">
		<img id="truck" class="image_type" src="{{asset('public/images/truck.png')}}" style="width: 100%;height: 250px;display: none">
	</div>
	<div class="col-md-6">
		
		<div class="col-md-12 input-group">
			<div class="form-line">
				<label>Notes</label>
				<textarea type="text" name="notes" style="height: 250px;" required class="form-control">{!!isset($vehicle_details)?$vehicle_details->notes:''!!}</textarea>
			</div>
			<span class="input-group-addon"> <i></i> </span>
		</div>
	</div>
	<div class="col-md-3 input-group">
		<div class="form-line">
			<label>Type Of Vehicle</label>
			<select class="form-control show-tick type_of_vehicles" name="type_of_vehicles">
				<option value="car">Car</option>
				<option value="bike">Bike</option>
				<option value="truck">Truck</option>
			</select>
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="col-md-3 input-group">
		<div class="form-line">
			<label>Last Invoiced</label>
			<input type="text" name="last_invoiced" required value="{{isset($vehicle_details)?$vehicle_details->last_invoiced:old('last_invoiced')}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="row">

	<div class="col-md-3 input-group">
		<label class="ml-3">Previous VRM's</label>
	</div>
	 @if(isset($vehicle_details->previous))
                            @php $previous = unserialize($vehicle_details->previous); @endphp
                         @else
                            @php $previous = [] @endphp                            
                         @endif 
	<div class="col-md-3 input-group">
		<div class="form-line">
			<input type="text" name="previous[]" required value="{{isset($previous[0])?$previous[0]:$previous->previous??''}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="col-md-3 input-group">
		<div class="form-line">
			<input type="text" name="previous[]" required value="{{isset($previous[1])?$previous[0]:$previous->previous??''}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>
	<div class="col-md-3 input-group">
		<div class="form-line">
			<input type="text" name="previous[]" required value="{{isset($previous[2])?$previous[0]:$previous->previous??''}}" class="form-control">
		</div>
		<span class="input-group-addon"> <i></i> </span>
	</div>

	</div>

</div>