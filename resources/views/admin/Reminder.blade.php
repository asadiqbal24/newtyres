@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/fullcalendar/fullcalendar.css')}}" />
@section('content')
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header"></div>
        
        <div class="row float-fix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body text-align: center" style="background-color:white;">
               
                        <div class="container" style="background-color:cdd0d5;border: 1px solid black;
                       padding: 35px;">
                            <div class="row" style="height: 60px; border: 1px solid black; background-color:white;">
                                
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                <h3 style="margin-top:10px">All Reminders</h3>
                                </div>
                                
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                            </div>
                            
                            <div class="row" style="height: 230px;background-color:white;">
                                <div class="col-md-7" style="height: 230px; border-left: 1px solid black;
                                ; border-right: 1px solid black; border-bottom: 1px solid black;">
                                    <p class="text-center"></p>
                                </div>
                                <div class="col" style="height: 230px; border-bottom: 1px solid black;
                                 ">
                                    <div class="row" style="height: 180px; ">
                                        <div class="col" style="height:  120px; border-bottom: 1px solid black;">
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;
                                            background-color:cdd0d5">
                                                
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;
                                             background-color:cdd0d5">
                                               
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 3px solid black; background-color:cdd0d5">
                                               
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                                
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                                
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="height:  180px; border-left: 1px solid black;
                                        ; border-right: 1px solid black; ">
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                            &nbsp; <div class="col">Print</div>
                                            <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                            &nbsp;  <div class="col">Email</div>
                                            <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 3px solid black;">
                                            &nbsp;  <div class="col">SMS</div>
                                            <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                            &nbsp;  
                                            <div class="col">Error</div>
                                            <div class="col"></div><div class="col"></div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                            &nbsp; 
                                            <div class="col">Fail</div>
                                            <div class="col"></div><div class="col"></div>
                                            
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                            &nbsp; 
                                            <div class="col">Expired</div>
                                            <div class="col"></div><div class="col"></div>
                                            </div>
                                        </div>
                                        <div class="col" style="height: 180px;
                                         border-right: 1px solid black; border-bottom: 1px solid black;">
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                            
                                            <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">Print</button>
                            </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                            
                                            <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">Send</button>
                            </div>
                                            
                                            </div>
                                            <div class="row" style="height: 29px; border-bottom: 3px solid black; background-color:cdd0d5">
                                            <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">Send</button>
                            </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                            
                                            <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">View</button>
                            </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                            <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">View</button>
                            </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;
                                             background-color:cdd0d5">
                                             <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5">View</button>
                            </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row" style="height: 49px;width:auto;border: 2px solid black;background-color:cdd0d5">
                                               
                                         
                                
                                
                                
                                <div class="row" >
                                <button style="margin-left:14px;margin-top:-1px;width:456px;height: 48px; background-color:cdd0d5"><i><b>Retry Failure</b></i></button>
                            </div>
                                
                                
                                
                               
                                            </div>
                                </div>
                            </div>
                            <br>
                            <div class="row float-center" style="height: 60px; border-left: 1px solid black; ">
                                <button style="width:1200px"><i>Print / Send Current Reminders</i></button>
                            </div>
                            <br>
                            <div class="row" style="height: 62px">
                                <div class="col" style="height: 60px; border-right: 1px solid black;">
                               
                                <div class="row float-center" style="height: 60px;border-left: 1px solid black;">
                                <button style="width:360px;"><i>View Reminder Due Now</i></button>
                            </div>
                                </div>
                                <div class="col" style="height: 60px;">
                                
                                <div class="row float-center" style="height: 60px;">
                                <button style="width:360px"><b>View Past</b></button>
                            </div>
                                </div>
                                <div class="col" style="height: 60px; border-left: 1px solid black;">
                                
                                <div class="row float-center" style="height: 60px;">
                                <button style="width:364px"><b>View Future</b></button>
                            </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row" style="height: 62px;">
                                <div class="col-5 float-center" style="height: 60px; border-right: 1px solid black;">
                                <div class="row float-center" style="height: 60px;">
                                
                                <div class="dropdown">
  <button style="margin-top:-1px;height: 60px;width:450px;background-color:f3f5f8;border: 1px solid black;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Previouse Dates 
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
                            </div>
                                </div>
                                <div class="col" style="height: 60px;">
                                
                                <div class="row float-center" style="height: 59px;">
                                <button style="width:640px"><b>Display Previously Sent</b></button>
                            </div>
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        
 </section>

        @endsection() @section('jsOutside')

        <script type="text/javascript">
            $("#acc_number").change(function () {
                val = $(this).val();
                $.ajax({
                    type: "GET",
                    url: '{{route("get_customer_details")}}',
                    data: { val: val },
                    success: function (msg) {
                        $("#company").val(msg.company);
                        $("#first_name").val(msg.first_name);
                        $("#middle_name").val(msg.middle_name);
                        $("#last_name").val(msg.last_name);
                        $("#house_no").val(msg.house_no);
                        $("#postcode").val(msg.postcode);
                        $("#road").val(msg.road);
                        $("#locality").val(msg.locality);
                        $("#town").val(msg.town);
                        $("#county").val(msg.county);
                        $("#telephone").val(msg.telephone);
                        $("#mobile").val(msg.mobile);
                        $("#email").val(msg.email);
                    },
                });
            });
        </script>

        @endsection()
    </div>
</section>
