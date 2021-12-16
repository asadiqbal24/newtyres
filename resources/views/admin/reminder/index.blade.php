@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/fullcalendar/fullcalendar.css')}}" />
@section('content')
<style type="text/css">
    .total {
    margin: 0;    
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) ;
    font-size: 80px;
}
.colour{
    color:black;
}
div, button {
    color: black !important;
}
</style>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header"></div>
        
        <div class="row float-fix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body text-align: center" style="background-color:white;">
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <select class="form-control show-tick" name="type">
                                    <option value="all">All Reminders</option>
                                    <option value="cambelt">Cambelt</option>
                                    <option value="mot">MOT</option>
                                    <option value="service">Service</option>
                                </select>
                            </div>
                            <div class="col-md-4 mt-3">
                                <div class="form-line">
                                    <label class="colour">Date</label>
                                    <input type="date" name="date" required class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
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
                            
                            <div class="row" style="background-color:white;">
                                <div class="col-md-7" style="border-left: 1px solid black;
                                    ; border-right: 1px solid black; border-bottom: 1px solid black;">
<div id="wrapper" style="height: 220px; width: 100%;position:relative;">

                                   <div id="chartContainer" style="height: 220px; width: 100%;"></div>
                                    <div class="total" id="total">300</div>
</div>

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
                                                &nbsp; <div class="col colour">Print</div>
                                                <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                                &nbsp;  <div class="col colour">Email</div>
                                                <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 3px solid black;">
                                                &nbsp;  <div class="col colour">SMS</div>
                                                <div class="col"></div><div class="col">0</div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                                &nbsp;
                                                <div class="col colour">Error</div>
                                                <div class="col"></div><div class="col"></div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                                &nbsp;
                                                <div class="col color-black">Fail</div>
                                                <div class="col"></div><div class="col"></div>
                                                
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;">
                                                &nbsp;
                                                <div class="col colour">Expired</div>
                                                <div class="col"></div><div class="col"></div>
                                            </div>
                                        </div>
                                        <div class="col" style="height: 180px;
                                            border-right: 1px solid black; border-bottom: 1px solid black;">
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                                
                                                <div class="row" >
                                                    <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5; color:black">Print</button>
                                                </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black; background-color:cdd0d5">
                                                
                                                <div class="row" >
                                                    <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5; color:black">Send</button>
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
                                                    <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5; color:black">View</button>
                                                </div>
                                            </div>
                                            <div class="row" style="height: 30px; border-bottom: 1px solid black;
                                                background-color:cdd0d5">
                                                <div class="row" >
                                                    <button style="margin-left:14px;margin-top:-1px;width:115px; background-color:cdd0d5; color:black">View</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row" style="height: 49px;width:auto;border: 2px solid black;background-color:cdd0d5">
                                        <div class="row" >
                                            <button style="margin-left:14px;margin-top:-1px;width:456px;height: 48px; background-color:cdd0d5"><i><b class="colour">Retry Failure</b></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row float-center" style="height: 60px; border-left: 1px solid black;">
                                <button style="width:1200px;"><i style="color:black;" >Print / Send Current Reminders</i></button>
                            </div>
                            <br>
                            <div class="row" style="height: 62px">
                                <div class="col" style="height: 60px; border-right: 1px solid black;">
                                    
                                    <div class="row float-center" style="height: 60px;border-left: 1px solid black;">
                                        <button style="width:360px;"><i class="colour">View Reminder Due Now</i></button>
                                    </div>
                                </div>
                                <div class="col" style="height: 60px;">
                                    
                                    <div class="row float-center" style="height: 60px;">
                                        <button style="width:360px"><b class="colour">View Past</b></button>
                                    </div>
                                </div>
                                <div class="col" style="height: 60px; border-left: 1px solid black;">
                                    
                                    <div class="row float-center" style="height: 60px;">
                                        <button style="width:364px"><b class="colour">View Future</b></button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">

                                    <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle btn-blocks colour" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Previouse Dates
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    
                                </div>

                                <div class="col-lg-8">
                                    <a href="{{route('admin.all_reminders')}}" class="btn btn-primary btn-block"><b>Display Previously Sent</b></a>
                                </div>
                            </div>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
        @endsection() 
        @section('jsOutside')
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    interactivityEnabled: false,
    animationEnabled: true,
    data: [{
        type: "doughnut",
        startAngle: 60,
        //innerRadius: 60,
        indexLabelFontSize: 17,
        dataPoints: [
            { y: 1},
        ]
    }]
});
chart.render();
document.getElementById("total").innerHTML = 0;
}
</script>
        @endsection()
    </div>
</section>