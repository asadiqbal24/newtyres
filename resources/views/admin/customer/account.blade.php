            <div class="row">
              <div class="col-md-4">
                @if(isset($customer_details))
                  @php $check = 'checked'; @endphp                  
                @else

                @if(old('credit_account')=='on')
                  @php $check = 'checked'; @endphp
                @else
                  @php $check = ''; @endphp
                @endif

                @endif  
                <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_credit_account" name="credit_account" {{$check}} class="chk-col-red" />
                  <label for="md_checkbox_credit_account">Credit Account Held</label>
                </div>


              </div>
              <div class="col-md-4">
                @if(isset($customer_details))
                  @php $check = 'checked'; @endphp                  
                @else
                @if(old('active_account')=='on')
                  @php $check = 'checked'; @endphp
                @else
                  @php $check = ''; @endphp
                @endif 
                @endif 
                <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_active_account" name="active_account" {{$check}} class="chk-col-red" />
                  <label for="md_checkbox_active_account">Account Active</label>
                </div>


              </div>
              <hr style="width: 100%">
            </div>



              <div class="row">
              <div class="col-md-4 input-group">
                 
                <div class="form-line">
                  <label>Credit Limit</label>
                  <input type="text" name="credit_limit" required value="{{isset($customer_details)?$customer_details->credit_limit:old('credit_limit')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>

              <div class="col-md-4 input-group">
                
                 <div class="form-line">
                  <label>Credit Terms</label>
                  <input type="text" name="credit_terms" required value="{{isset($customer_details)?$customer_details->credit_terms:old('credit_terms')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              

              </div>



              <div class="col-md-4">
                <a type="button" href="{{route('admin.manage.receipts')}}" class="btn btn-primary waves-effect">Manage Receipts</a>
              </div>

              <hr style="width: 100%">
            </div>





            <div class="row">
              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Alternate Contact 1</label>
                  <input type="text" name="alternate_contact_1" required value="{{isset($customer_details)?$customer_details->alternate_contact_1:old('alternate_contact_1')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>

              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone_1" required value="{{isset($customer_details)?$customer_details->telephone_1:old('telephone_1')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>
              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Alternate Contact 2</label>
                  <input type="text" name="alternate_contact_2" required value="{{isset($customer_details)?$customer_details->alternate_contact_2:old('alternate_contact_2')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>
            </div>


            <div class="row">
              

              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone_2" required value="{{isset($customer_details)?$customer_details->telephone_2:old('telephone_2')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>
            
              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Alternate Contact 3</label>
                  <input type="text" name="alternate_contact_3" required value="{{isset($customer_details)?$customer_details->alternate_contact_3:old('alternate_contact_3')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>

              <div class="col-md-4 input-group">
                 

                <div class="form-line">
                  <label>Telephone</label>
                  <input type="text" name="telephone_3" required value="{{isset($customer_details)?$customer_details->telephone_3:old('telephone_3')}}" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>

              </div>
            </div>