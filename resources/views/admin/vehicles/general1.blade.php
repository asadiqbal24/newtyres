    <div class="row">
        <div class="col-md-12 input-group">
                <div class="col-md-6 input-group">
                    <div class="col-md-8">
                        <div class="form-line">
                        <label>Select Owner</label>
                        <select class="form-control show-tick type_of_vehicles" name="selected_owner" id="owner_select">
                            <option selected disabled>---</option>
                            @foreach($customers as $value)
                            <option value="{{ $value->id }}">{{ $value->last_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 30px;">
                        <i class="btn btn-primary" id="select_owner">Select</i>
                    </div>
                </div>
                <div class="col-md-6 input-group">
                    <div class="col-md-8">
                        <div class="form-line">
                        <label>Remove Owner</label>
                        <select class="form-control show-tick type_of_vehicles" name="o_remove" id="owner_remove">
                            <option selected disabled>---</option>
                            @foreach($customers as $value)
                            <option value="{{ $value->id }}">{{ $value->last_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 30px;">
                        <i class="btn btn-primary" id="remove_owner" >Remove</i>
                    </div>
                </div>
            </div>

			<div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Acc Number</label>
                  <input type="text" name="account_number" value="{{isset($make)?$make->account_number:''}}" id="account_number" required  class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Name</label>
                  <input type="text" name="name" id="last_name" required value="{{isset($vehicle_details)?$vehicle_details->name:$request->last_name??old('name')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>              

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone" id="telephone" required value="{{isset($vehicle_details)?$vehicle_details->telephone:$request->telephone??old('telephone')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Mobile</label>
                  <input type="text" name="mobile" id="mobile" required value="{{isset($vehicle_details)?$vehicle_details->mobile:$request->mobile??old('mobile')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              @if(isset($vehicle_details))
                @php $general_checkbox = unserialize($vehicle_details->general_checkbox); @endphp
              @else
                @php $general_checkbox = []; @endphp
              @endif


              <div class="col-md-12 input-group">
                <div class="demo-checkbox">
                  @if(in_array('Air Conditioning',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif
                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="airConditioning"  value="Air Conditioning" class="chk-col-red">
                  <label for="airConditioning">Air Conditioning</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Power Steering',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="powerSteering"  value="Power Steering" class="chk-col-red">
                  <label for="powerSteering">Power Steering</label>
                </div>

                 <div class="demo-checkbox">

                                    @if(in_array('ABS Brakes',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="absBrakes"  value="ABS Brakes" class="chk-col-red">
                  <label for="absBrakes">ABS Brakes</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Traction COntrol',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="tractionCOntrol"  value="Traction COntrol" class="chk-col-red">
                  <label for="tractionCOntrol">Traction COntrol</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Pollen Filter',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="pollenFilter"  value="Pollen Filter" class="chk-col-red">
                  <label for="pollenFilter">Pollen Filter</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Solid Discs',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="solidDiscs"  value="Solid Discs" class="chk-col-red">
                  <label for="solidDiscs">Solid Discs</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Vented Discs',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="ventedDiscs"  value="Vented Discs" class="chk-col-red">
                  <label for="ventedDiscs">Vented Discs</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Rear Shoes & Cylinders',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="rearShoes"  value="Rear Shoes & Cylinders" class="chk-col-red">
                  <label for="rearShoes">Rear Shoes & Cylinders</label>
                </div>

                <div class="demo-checkbox">

                                    @if(in_array('Rear Discs',$general_checkbox))
                    @php $checked = 'checked'; @endphp
                  @else
                    @php $checked = ''; @endphp
                  @endif

                  <input type="checkbox" name="general_checkbox[]" {{$checked}} id="rearDiscs"  value="Rear Discs" class="chk-col-red">
                  <label for="rearDiscs">Rear Discs</label>
                </div>

                <span class="input-group-addon"> <i></i> </span>
              </div>

</div>




<script>
    $('#select_owner').on('click', function(){
      var val = $('#owner_select').find(":selected").val();
         $.ajax({
                type:'GET',
                url:'{{route("get_customer_details")}}',
                data:{val:val },
                
                success: function( msg ) {
                    
                    console.log(msg);
                    
                    if(msg){
                    $('#account_number').val(msg.account_number)
                    $('#last_name').val(msg.last_name)
                    $('#telephone').val(msg.telephone)
                    $('#mobile').val(msg.mobile)

                    }else{
                        alert("there is no detail of this ID, please Select correct option");
                    }
                }
            });
      
    });


//remove owner
$('#remove_owner').on('click', function(){
      var remove = $('#owner_remove').find(":selected").val();
         $.ajax({
                type:'GET',
                url:'{{route("get_customer_details")}}',
                data:{remove:remove },
                
                success: function( msg ) {
                    alert(msg);
                }
            });
      
    });


</script>