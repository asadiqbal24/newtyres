        <div style="padding-top:20px;padding-bottom:20px;margin-bottom:20px" class="sc-erNlkL YoHkW">
            <div class="sc-kNBZmU hcpByS">
                <div class="sc-cqPOvA fBcsYU">
                    <p class="sc-jKJlTe lkbSDu">{{$distance}} kms</p>
                </div>
                <div class="sc-yZwTr kWiCki">
                    <div class="sc-hMFtBS gWLzxB"><strong><p class="sc-eNQAEJ sc-kDhYZr eMUMcH">{{$ce->name}}</p> </strong>
                        <div class="sc-gNJABI onjCk">
                            <p class="sc-ckVGcZ EGtrQ">{{$distance}} kms</p>
                        </div>
                    </div>
                    <p class="sc-jKJlTe emdbmN"><span color="#1c1c1c" class="sc-dRaagA dnSVbe">{{$ce->offer}}</span></p>
                    <p class="sc-jKJlTe cCGnbB">{{$ce->address}}  {{$ce->fitment_locations->post_code}}</p>
                    <p class="sc-jKJlTe emdbmN"></p>
                </div>
                <div class="sc-fjhmcy feGwSc"></div>
            </div>
            <div class="sc-kNBZmU hLJwKc" style="display: none;" id="selected_time_div">
                <p class="sc-jKJlTe lkbSDu" id="selected_date">You requested your appointment on the  <strong id="seleccted_appointment_time">Afternoon</strong> of <strong id="seleccted_appointment_date"></strong></p>
            </div>
            <div class="sc-kNBZmU hcpByS"><a class="FitmentAppointment sc-kAdXeD cIKlXt" onclick="show_selection_div()" id="show_select_div">Request a different date</a></div>
            <div class="sc-kNBZmU hcpByS">
                <div class="sc-ecaExY irFlte" id="appointment_div" content="[object Object]" style="display: none">
                    
                    <div class="sc-ecaExY gOjJmN" content="[object Object]">
        <form id="save_appoinment_time">
            {{csrf_field()}}
            <input type="hidden" name="center_id" id="center_id" value="{{$ce->id}}">
            <h6 class="sc-bZQynM sc-fHSTwm eivKFx">When would you like to have your tyres fitted?</h6>
            <p class="sc-hdPSEv ceJerK">Your selected Tyre Fitting Centre will try to accomodate your request, but they will call you to book in your actual appointment time once your tyres arrive.</p>
            <ol class="sc-kGXeez eClItd">
                <li class="sc-kpOJdX kAzjOl">What day would you like your appointment?
                    <div class="sc-hycgNl bNyzli">
                        <div class="react-datepicker">
                            <div class="react-datepicker__triangle"></div>

                            <div class="react-datepicker__month-container">
                                   <input type="date" name="sselected_date" id="sselected_date"> 
                            </div>
                        </div>
                    </div>
                </li>
                <li class="sc-kpOJdX kAzjOl">Would you prefer your appointment in the morning or afternoon?
                    <div class="sc-cmIlrE bJiZHj">
                        <label name="appointmentTime" value="Morning" label="[object Object]" class="sc-jvEmr sc-gleUXh fSnWAC">
                            <input type="radio" name="appointmentTime" class="appointmentTime" value="Morning" checked="">
                            <span class="rb__label">Morning</span>
                        </label>
                        <label
                            name="appointmentTime" value="Afternoon" label="[object Object]" class="sc-jvEmr sc-gleUXh fSnWAC">
                            <input type="radio" name="appointmentTime" class="appointmentTime" value="Afternoon">
                            <span class="rb__label">Afternoon</span>
                        </label>
                    </div>
                    <p class="sc-dnqmqq sc-dTLGrV dkZcQx"></p>
                </li>
            </ol><input type="button" id="save_appoinment_time_button" onclick="appoinmenttimebutton()" class="sc-gwVKww fMoxtG" value="Continue to step 2">
            <div class="sc-cCbXAZ idokcX"><a class="sc-chAAoq dvluJT">[ Cancel - I don't want to request a date ]</a></div>
        </form>
    </div>

                </div>
            </div>
        </div>
