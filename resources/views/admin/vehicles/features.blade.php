<div class="row">

	@php 

		$data = ['ABS Brakes','Airbag (Driver)','Airbags (Multiple)','Alarm Systems','Alloy Wheels','Central Locking','Climate Control','Cruise Control','Onbaord Computer','Electric Mirrors','Electric Windows','Electric Seats','ESP Traction','Heated Screen','Heated Seats','Isofix Seats','Immobiliser','Lane Control System','Leather Interior','Light Sensors','Parking Sensors','Power Steering','Rain Sensors','Remote Central Locking','Traction Control','Stability Control','Satellite Navigation','Speed Limiter','Sunroof (normal)','Sunroof (Panaromic)','Stop Start System','Towbar','Voice Control','Auxiliary / USB Input','Bluetooth','CD Player','DVD System','MP3 Player'];

	@endphp				

			  @if(isset($vehicle_details))
                @php $features = unserialize($vehicle_details->features); @endphp
              @else
                @php $features = []; @endphp
              @endif


	<div class="col-md-12">
	@foreach($data as $d)

		 		@if(in_array($d,$features))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

				<div class="demo-checkbox" style="display: inline">
                  <input type="checkbox" name="features[]" id="{{$d}}" {{$checked}} value="{{$d}}" class="chk-col-red">
                  <label for="{{$d}}">{{$d}}</label>
                </div>

	@endforeach
</div>
</div>