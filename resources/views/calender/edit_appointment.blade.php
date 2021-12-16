@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/fullcalendar/fullcalendar.css')}}">
<style type="text/css">
    .time_diff{
        background-color: silver;
        padding: 10px;
        color: black;
        font-weight: bold;
    }
    .app_buttons{
        margin-top:23px !important;
    }
    .newClass{
        position: relative;
        margin-top: -26px !important;
        margin-bottom: -26px; !important;
    }
    .newClassDesc{
         position: relative;
        margin-top: -40px !important;
    }
</style>
@section('content')
<!-- Main Content -->

<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <a href="#" class="btn btn-raised btn-success save-form">Update</a>
                        <a class="btn btn-raised btn-default" >New Doc</a>
                        <a class="btn btn-raised btn-default" >New Repetition</a>
                        <a class="btn btn-raised btn-default" >Link To Doc</a>
                        <a class="btn btn-raised btn-danger float-right" >Delete</a>
                    </div>
                </div>
            </div>
            
            
        </div>
        <form method="post" action="{{route('admin.update-new-appointment')}}" id="form">
            {{csrf_field()}}
        <div class="row clearfix newClass">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="bay" required>
                                        
                                        @if(is_null($data->bay))
                                        <option value="{{NULL}}">Select Bay</option>
                                        <option value="MOT Ramp">MOT Ramp</option>
                                        <option value="Bay 1">Bay 1</option>
                                        <option value="Bay 2">Bay 2</option>
                                        <option value="Bay 3">Bay 3</option>
                                        <option value="Bay 4">Bay 4</option>
                                        <option value="Bay 5">Bay 5</option>
                                        <option value="Bay 6">Bay 6</option>
                                        @else
                                        <option value="{{ $data->bay }}" selected>{{ $data->bay }}</option>
                                        @endif
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>From</label>
                                    <input type="date" name="from_date" value="{{ $data->from_date ? $data->from_date : date('Y-m-d') }}"   class="form-control">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Time</label>
                                    <input type="time" name="time_from" id="time_from" class="form-control time_selection" value="{{ $data->time_from ? $data->time_from : '' }}">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <label>Duration</label>
                            </div>
                        </div>
                        <div class="row newClass">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="status" required>
                                        <option value="{{NULL}}">Select Status</option>
                                        <option value="~">~</option>
                                        <option value="Auth Req">Auth Req</option>
                                        <option value="Cancellation" selected>Cancellation</option>
                                        <option value="Complete">Complete</option>
                                        <option value="MOT">MOT</option>
                                        <option value="Pending Review">Pending Review</option>
                                        <option value="Service">Service</option>
                                        <option value="Urgent">Urgent</option>
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>To</label>
                                    <input type="date" name="to_date" value="{{$data->to_date ? $data->to_date : date('Y-m-d')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Time</label>
                                    <input type="time" name="time_to" id="time_to" class="form-control time_selection">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <label style="padding-top: 15px;"><span class="time_diff" id="hours_diff">0</span> Hours <span class="time_diff" id="mins_diff">0</span> Mins</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="row newClass">
            
            <div class="col-md-6">
                
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Registration Number</label>
                                    <input type="text" name="account_number" class="form-control" value="{{ $data->account_number ? $data->account_number : old('account_number') }}" >
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-6 text-center">
                                <button class="btn btn-info btn-xs">VRM Lookup</button>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Make</label>
                                    <input type="text" name="make" required value="{{ $data->make ? $data->make : old('make')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>
                        <div class="row newClass">
                            
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Model</label>
                                    <input type="text" name="model" required value="{{ $data->model ? $data->model : old('model') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Derivative</label>
                                    <input type="text" name="derivative" required value="{{ $data->derivative ? $data->derivative : old('derivative') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Chassis Number</label>
                                    <input type="text" name="chassis_number" required value="{{ $data->chassis_number ? $data->chassis_number : old('chassis_number') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engine CC</label>
                                    <input type="text" name="engine_cc" required value="{{ $data->engine_cc ? $data->engine_cc : old('engine_cc') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>


                        </div>
                        
                        <div class="row newClass">
                            
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Fuel Type</label>
                                    <input type="text" name="fuel_type" required value="{{ $data->fuel_type ? $data->fuel_type : old('fuel_type') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engine Code</label>
                                    <input type="text" name="engine_cc" required value="{{ $data->engine_cc ? $data->engine_cc : old('engine_cc') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engine No</label>
                                    <input type="text" name="engine_no" required value="{{ $data->engine_no ? $data->engine_no : old('engine_no') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Color</label>
                                    <input type="text" name="color" required value="{{ $data->color ? $data->color : old('color') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                        </div>

                        <div class="row newClass">
                           
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Paint Code</label>
                                    <input type="text" name="paint_code" required value="{{ $data->paint_code ? $data->paint_code : old('paint_code') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Key Code</label>
                                    <input type="text" name="key_code" required value="{{ $data->key_code ? $data->key_code : old('key_code') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Radio Code</label>
                                    <input type="text" name="radio_code" required value="{{ $data->radio_code ? $data->radio_code  : old('radio_code') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-left: 1px solid;">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Acc Number</label>
                                    <input type="text" name="acc_number" required value="{{ $data->acc_number ? $data->acc_number : old('acc_number')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-1" ></div>
                            <div class="col-md-5 input-group text-center">
                                <button type="button" class="btn btn-primary btn-xs app_buttons"><i class="material-icons">search</i></button>
                                <button type="button" class="btn btn-primary btn-xs app_buttons">New</button>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Company</label>
                                    <input type="text" name="company" id="company" required value="{{ $data->company ? $data->company : old('company')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>
                        
                        <div class="row newClass">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" id="first_name" required value="{{ $data->first_name ? $data->first_name : old('first_name') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name" required value="{{ $data->middle_name ? $data->middle_name : old('middle_name')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" id="last_name" required value="{{ $data->last_name ? $data->last_name : old('last_name') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>House No</label>
                                    <input type="text" name="house_no" id="house_no" required value="{{ $data->house_no ? $data->house_no : old('house_no') }}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>
                        <div class="row newClass">
                            
                            <div class="col-md-2 input-group">
                                <div class="form-line">
                                    <label>PostCode</label>
                                    <input type="text" name="postcode" id="postcode" required id="postal_code" value="{{ $data->postcode ? $data->postcode : old('postcode') }}" class="form-control">
                                    
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-1 input-group">
                                 <button type="button" id="find_postal_code" class="btn btn-primary btn-xs app_buttons"><i class="zmdi zmdi-search"></i></button>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Road</label>
                                    <input type="text" name="road" id="road" id="road" required value="{{ $data->road ? $data->road : old('road')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Locality</label>
                                    <input type="text" name="locality" id="locality" required value="{{ $data->locality ? $data->locality : old('locality')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Town</label>
                                    <input type="text" name="town" id="town"  required value="{{ $data->town ? $data->town : old('town')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                        
                        <div class="row newClass">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>County</label>
                                    <input type="text" name="county" id="" required value="{{ $data->county ? $data->county : old('county')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="" required value="{{ $data->telephone ? $data->telephone : old('telephone')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>       
                            
                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" id="" required value="{{ $data->mobile ? $data->mobile : old('mobile')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>  

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Email</label>
                                    <!--<div class="demo-checkbox">-->
                                    <!--    <input type="checkbox" id="enable_email_field" checked="">-->
                                    <!--    <label for="enable_email_field">Enable Email</label>-->
                                    <!--</div>     -->
                                    <input type="email" name="email" id="" required value="{{ $data->email ? $data->email : old('email')}}" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>                   

                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
        <div class="row newClassDesc">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card m-0">
                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#descriptions">Description</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#appts_for_bay">Appts For Bay</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#repetitions">Repetitions</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#veh_history">Veh History</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
                        </ul>
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane animated flipInX" id="descriptions">
                                @include('calender.descriptions')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="appts_for_bay">
                                @include('calender.appts_for_bay')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="repetitions">
                                @include('calender.repetitions')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="veh_history">
                                @include('calender.veh_history')
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="activity">
                                @include('calender.activity')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="add-event-modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom: 1px solid">
                            <h4 class="modal-title">Add New Event</h4>
                            <hr>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    @endsection()
    @section('jsOutside')

    <script type="text/javascript">
        $('#acc_number').change(function(){


            val = $(this).val();
            $.ajax({
                type:'GET',
                url:'{{route("get_customer_details")}}',
                data:{val:val
                },
                success: function( msg ) {

                    $('#company').val(msg.company)
                    $('#first_name').val(msg.first_name)
                    $('#middle_name').val(msg.middle_name)
                    $('#last_name').val(msg.last_name)
                    $('#house_no').val(msg.house_no)
                    $('#postcode').val(msg.postcode)
                    $('#road').val(msg.road)
                    $('#locality').val(msg.locality)
                    $('#town').val(msg.town)
                    $('#county').val(msg.county)
                    $('#telephone').val(msg.telephone)
                    $('#mobile').val(msg.mobile)
                    $('#email').val(msg.email)

                }
            });            


        });

        $('.time_selection').change(function(){

            time_from = $('#time_from').val();
            time_to = $('#time_to').val();   
            f_time = formatAMPM(new Date('{{date("Y-m-d")}} ' + time_from));
            t_time = formatAMPM(new Date('{{date("Y-m-d")}} ' + time_to));            
            
            var timeStart = new Date('{{date("Y-m-d")}} ' + f_time);
            var timeEnd = new Date('{{date("Y-m-d")}} ' + t_time);


            var hourDiff = timeEnd - timeStart; //in ms
            var secDiff = hourDiff / 1000; //in s
            var minDiff = hourDiff / 60 / 1000; //in minutes
            var hDiff = hourDiff / 3600 / 1000; //in hours
            var humanReadable = {};
            humanReadable.hours = Math.floor(hDiff);
            humanReadable.minutes = minDiff - 60 * humanReadable.hours;
            $('#hours_diff').html(humanReadable.hours);
            $('#mins_diff').html(humanReadable.minutes);
           

        });

        function formatAMPM(date) {
              var hours = date.getHours();
              var minutes = date.getMinutes();
              var ampm = hours >= 12 ? 'pm' : 'am';
              hours = hours % 12;
              hours = hours ? hours : 12; // the hour '0' should be '12'
              minutes = minutes < 10 ? '0'+minutes : minutes;
              var strTime = hours + ':' + minutes + ' ' + ampm;
              return strTime;
            }

            /*console.log(formatAMPM(new Date));*/
    </script>
<script type="text/javascript">
    $('.save-form').click(function(){

        $('#form').submit();

    });
</script>
    @endsection()