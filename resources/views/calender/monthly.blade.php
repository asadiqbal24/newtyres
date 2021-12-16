@php
use Carbon\Carbon;
@endphp
@section('calender','active_tab')
@extends('partials.default')
<link rel="stylesheet" href="{{asset('public/assets/plugins/fullcalendar/fullcalendar.css')}}">
<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/powerful-calendar/style.css">
<link rel="stylesheet" type="text/css" href="http://www.jqueryscript.net/demo/powerful-calendar/theme.css">


<style type="text/css">
    .highlight > div > span {
        color: black !important;
    }
    .change_day_calender{
        color: black !important;        
    }

    .notes_btn_cl{
        color: red !important;
        font-weight: 900
    }

    .fc-day-header > span{
        color: black !important;
    }
</style>

@section('content')

<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        

 

        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="{{route('admin.calender')}}">Calender</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-9 col-md-9">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                             <form method="get" action="{{ route('admin.calender') }}">
                                 <div class="row">
                                <div class="col-md-10">
                                    <div class="form-line">
                                        <input type="text" name="search" class="form-control" style="height: 40px !important;border-bottom:1px solid black">
                                    </div>
                                    <span class="input-group-addon"> <i></i> </span>
                                </div>
                                 <div class="col-md-2 text-left">
                                 <button class="btn btn-raised btn-primary">Search</button>
                                 </div>
                                 </div>
                             </form>
                            </div>
                            <div class="col-md-8 text-center">
                                <a href="{{route('admin.new.appointment')}}" class="btn btn-raised btn-success">New Appt</a>
                                <a href="{{route('admin.calender/list')}}" class="btn btn-raised btn-default">List</a>
                                <a href="{{route('admin.calender')}}" class="btn btn-raised btn-default" >Day</a>
                                <a href="{{route('admin.calender/week')}}" class="btn btn-raised btn-default">Week</a>
                                <a href="{{route('admin.calender/monthly')}}" class="btn btn-raised btn-primary">Month</a>
                            </div> 
                        </div>
                        <form>
                        <div class="row">
                            
                              <div class="col-md-4 input-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="bay" required id="select_bay">
                                        <option value="{{NULL}}">Select Bay</option>
                                        @foreach($bays as $b)
                                        <option value="{{$b->bay_name}}">{{$b->bay_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
        

                            <div class="col-lg-8">
                                <a class="btn btn-raised @if($date==date('Y-m-d',strtotime('-1 day'))) btn-success @else btn-default @endif" href="{{route('admin.calender')}}?date={{date('Y-m-d',strtotime('-1  day'))}}" >Yesterday</a>
                                <a class="btn btn-raised @if($date==date('Y-m-d')) btn-success @else btn-default @endif" href="{{route('admin.calender')}}?date={{date('Y-m-d')}}" id="change-view-day">Today</a>
                                <a class="btn btn-raised @if($date==date('Y-m-d',strtotime('+1 day'))) btn-success @else btn-default @endif" href="{{route('admin.calender')}}?date={{date('Y-m-d',strtotime('+1  day'))}}" >Tomorrow</a>                                    
                            </div>

                          
                        </div>
                       </form>         
                            
                        
                        <div id="calendar" style="display:block"></div>
                       
                       
                       <!--table for searched data start-->
                       @php
                       $result = $searched;
                       @endphp
                       @if(!empty($result))
                       <div class="col-lg-12" id="show_search_calender" style="display: none;">
                           <input type="hidden" id="searched" value="data" />
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <td>Day</td>
                                    <td>Date</td>
                                    <td>Bay</td>
                                    <td>Time</td>
                                    <td>Duration</td>
                                    <td>Description</td>
                                    <td>Status</td>
                                    <td>Action</t>
                                </thead>
                                 <tbody>
                                  
                                   @foreach($result as $value)
                                   @php
                                    $date = $value->created_at->format('Y-m-d');
                                    $day = Carbon::parse($date)->format('l');
        
                                    $start = Carbon::parse($value->time_from);
                                    $end = Carbon::parse($value->time_to);
                                    
                                    $difference = $start->diff($end);
                                    $diffInMinutes = $difference->i; 
                                    $diffInHours   = $difference->h;
                                    
                                    @endphp
                                    <tr>
                                       <td>{{ $day }}</td>
                                       <td>{{ $date }}</td>
                                       <td>{{ $value->bay }}</td>
                                       <td>{{ $value->time_from }} ~ {{ $value->time_to }}</td>
                                       <td>{{ $diffInHours }} hours {{ $diffInMinutes }} mins </td>
                                       <td>{{ $value->company }} Mob: {{ $value->mobile }}</td>
                                       <td>{{ $value->status }}</td>
                                       <td>
                                       
                                       <a href="#" data-toggle="modal" data-target="#mobile{{ $value->id }}" data-backdrop="false">
                                       <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
</a> | 
                                    <a href="{{ route('admin.edit.appointment', ['id' => $value->id ]) }}" >open</a>
                                    
                                               <div class="modal fade" id="mobile{{ $value->id }}" tabindex="-1" role="dialog">
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <form method="POST" id="vehicle_form" action="">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="selected_id" id="selected_id">
                                                        <div class="modal-header">
                                                          <h4 class="modal-title" id="defaultModalLabel">Contact Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                                <label class="mr-2">Company</label>
                                                               <input type="text" class="form-control" name="company" id="company" value="{{ $value->company }}" style="color: black !important;">
                                                               
                                                            </div>
                                                            
                                                            <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                                <label class="mr-2">Telephone</label>
                                                               <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $value->telephone }}" style="color: black !important;">
                                                                <a href="tel:{{ $value->telephone }}" class="float-right">
                                                                                                                                            <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                                </svg>
                                                                        </a>
                                                            </div>
                                                            
                                                            <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                                <label class="mr-2">Mobile</label>
                                                               <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $value->mobile }}" style="color: black !important;">
                                                                <a href="tel:{{ $value->mobile }}" class="float-right">
                                                                                                                                            <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                                </svg>
                                                                </a>
                                                            </div>
                                                            
                                                            <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                                <label class="mr-2">Email</label>
                                                               <input type="email" class="form-control" name="email" id="email" value="{{ $value->email }}" style="color: black !important;">
                                                                <a href="mailto:{{ $value->email }}" class="btn btn-primary btn-xs  float-right">Email</a>
                                                            </div>
                                                       
                                                        <div>
                                                            <span>Send Message to mobile number</span>
                                                        </div>
                                                        
                                                        <div class="form-group" style="display:flex; flex-direction: row; justify-content: center; align-items: center; margin: 0px;">
                                                                <label class="mr-2">Send SMS</label>
                                                                  <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $value->mobile }}" style="color: black !important;">
                                                               <a href="sms:{{ $value->mobile }}">
                                                                 <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
      <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
    </svg></a>
                                                            </div>
                                                        
                                                        
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-warning btn-sm waves-effect ml-2" data-dismiss="modal">CLOSE</button>
                                                        </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                            </tr>
                                         @endforeach
                                 </tbody>
                            </table>
                        </div>
                        @endif
                       <!--table for searched data end-->                       
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3"> 
                <div class="calendar-container"></div>

                <div class="col-md-12">
              <div class="card">
                <div class="card-header" style="font-size:12px;">
                  <a style="cursor:pointer" class="notes_btn" data-type="global">Global Notes</a>
                  <a style="cursor:pointer" class="notes_btn" data-type="user">User Notes</a>
                  <span style="float: right;font-size: 8px;" class="open_right_divs" data-div="notes_div"><i class="zmdi zmdi-caret-down-circle"></i></span>                  
                </div>
                <div class="card-body notes_div" id="global_notes" style="display: none;">
                  <textarea name="global_notes" id="global_notes_input" rows="10" cols="36">{{isset($global_notes)?$global_notes->data:''}}</textarea>
                  


                </div>

                <div class="card-body notes_div" id="user_notes" style="display: none;">
                  <textarea name="user_notes" id="user_notes_input" rows="10" cols="36">{{isset($user_notes)?$user_notes->data:''}}</textarea>
                </div>
              </div>
            </div>

            </div>




        </div>        
        
        
<!--testing-->


<!--testing end-->

    </div>
</section>

@endsection()
@section('jsOutside')
<script src="{{asset('public/assets/bundles/fullcalendarscripts.bundle.js')}}"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="http://www.jqueryscript.net/demo/powerful-calendar/calendar.js"></script>


<script type="text/javascript">


    $('.notes_btn').click(function(){

      $('.notes_btn').removeClass('notes_btn_cl');  
      $('.notes_div').hide();
      if($(this).data('type')=='global'){
        $('#global_notes').show();
      }else{
        $('#user_notes').show();
      }
      $(this).addClass('notes_btn_cl');        
  });

var date = "{{date('Y-m-d')}}" 
var categories_s = {!! json_encode($categories_s->toArray()) !!};           
var apt = {!! json_encode($apt->toArray()) !!};   

var monthly_data = {!! json_encode($monthly_data) !!};

$(document).ready(function(){
var searched = $('#searched').val();

if(searched){
    $('#show_search_calender').show(100);
    $('#show_day_calender').hide(100);
    $('#calendar').hide(100);
    $('#show_list_calender').hide(100);
    $('#show_weekly_calender').hide(100);
}else{
}
});

$('#change-view-day').click(function(){
        $('#show_day_calender').show(100);
        $('#calendar').hide(100);
        $('#show_list_calender').hide(100);
        $('#show_weekly_calender').hide(100);
        $('#show_search_calender').hide(100);
    
    });
    
    $('#change-view-week').click(function(){
        $('#show_day_calender').hide();
        $('#calendar').hide(100);
        $('#show_list_calender').hide(100);
        $('#show_weekly_calender').show(100);
        $('#show_search_calender').hide(100);
    
    });
    
    $('#change-view-list').click(function(){
        $('#show_day_calender').hide();
        $('#calendar').hide(100);
        $('#show_weekly_calender').hide(100);
        $('#show_list_calender').show(100);
        $('#show_search_calender').hide(100);
    
    });
    
    // $('#change-view-month').click(function(){
    //     $('#calendar').show(100);
    //     $('#show_day_calender').hide();
    //     $('#show_weekly_calender').hide(100);
    //     $('#show_list_calender').hide(100);
    //     $('#show_search_calender').hide(100);
    
    // });




"use strict";

    $('#calendar').fullCalendar({
               header: {
                left: 'prev, ',
                center: 'today',
                right: 'next'
            },



        defaultDate: date,//'2018-12-12',

        editable: true,

        droppable: true, // this allows things to be dropped onto the calendar

        drop: function() {

            // is the "remove after drop" checkbox checked?

            if ($('#drop-remove').is(':checked')) {

                // if so, remove the element from the "Draggable Events" list

                $(this).remove();

            }

        },

        eventLimit: true, // allow "more" link when too many events

        events: monthly_data,

        color: '#ffff93',
    });


    $(document).ready(function(){

            htg = 33;
            for(h=0;h<apt.length;h++){

                time_from = apt[h].time_from;
                time_to = apt[h].time_to;                
                type = apt[h].bay;

                /*$('.category_selection').each(function(){

                   console.log(apt[h].time_from); 
                   console.log($(this).data('time'));
                      


                })*/                
                var cnt = 0;
                var x = 15; //minutes interval
                var times = []; // time array
                var tt = 0; // start time
                var ap = ['AM', 'PM']; // AM-PM

                //loop to increment the time and push results in array
                for (var i=0;tt<24*60; i++) {
                  var hh = Math.floor(tt/60); // getting hours of day in 0-24 format
                  var mm = (tt%60); // getting minutes of the hour in 0-55 format
                  times[i] = ("0" + (hh % 24)).slice(-2) + ':' + ("0" + mm).slice(-2); // pushing data in array in [00:00 - 12:00 AM/PM format]
                  tt = tt + x;
                  time_f = new Date(date+' '+apt[h].time_from);
                  time_f = time_f.getTime();

                  time_t = new Date(date+' '+apt[h].time_to);
                  time_t = time_t.getTime();                                      
                  
                  c_f = new Date(date+' '+times[i]);                                      
                  c_f = c_f.getTime();

                  if(c_f>=time_f && c_f<=time_t){
                    cnt++;
                  } 

                }

                total_height = htg * cnt;
                diff = calculateTimeDifference(apt[h].time_from,apt[h].time_to,date);
                var x = '<div style="background-color: yellow;padding: 5px;border-radius: 5px;position:absolute;height:'+total_height+'">'+
                '<p style="text-align:center">'+apt[h].time_from+' ~ '+apt[h].time_to+'</p>'+'<p style="text-align:center">'+diff+'</p>'+
                '</div>';
                var y = '<div style="background-color: yellow;padding: 5px;border-radius: 5px;"></div>';

/*
                $('.'+type+"[data-time='" + time_from +"']").html(x);
                $('.'+type+"[data-time='" + time_to +"']").html();*/

        }
    });



    $(document).ready(function(){

            htg = 33;

           for(wk=0;wk<week_dates.length;wk++){ 
            for(h=0;h<weekly_data.length;h++){
                if(week_dates[wk]==weekly_data[h].from_date){
                time_from = weekly_data[h].time_from;
                time_to = weekly_data[h].time_to;                
                type = weekly_data[h].bay;

    
                    var cnt = 0;
                    var x = 15; //minutes interval
                    var times = []; // time array
                    var tt = 0; // start time
                    var ap = ['AM', 'PM']; // AM-PM

                    //loop to increment the time and push results in array
                    for (var i=0;tt<24*60; i++) {
                      var hh = Math.floor(tt/60); // getting hours of day in 0-24 format
                      var mm = (tt%60); // getting minutes of the hour in 0-55 format
                      times[i] = ("0" + (hh % 24)).slice(-2) + ':' + ("0" + mm).slice(-2); // pushing data in array in [00:00 - 12:00 AM/PM format]
                      tt = tt + x;
                      time_f = new Date(date+' '+weekly_data[h].time_from);
                      time_f = time_f.getTime();

                      time_t = new Date(date+' '+weekly_data[h].time_to);
                      time_t = time_t.getTime();                                      
                      
                      c_f = new Date(date+' '+times[i]);                                      
                      c_f = c_f.getTime();

                      if(c_f>=time_f && c_f<=time_t){
                        cnt++;
                      } 

                    }                    
                total_height = htg * cnt;
                diff = calculateTimeDifference(weekly_data[h].time_from,weekly_data[h].time_to,date);
                var x = '<div style="position: relative;width:140px;"><div style="width:135px;background-color: #ffff93;padding: 5px;border-radius: 5px;position:absolute;height:'+total_height+'">'+
                '<p style="text-align:center">'+weekly_data[h].time_from+' ~ '+weekly_data[h].time_to+'</p>'+'<p style="text-align:center">'+diff+'</p>'+
                '</div></div>';
                var y = '<div style="background-color: #ffff93;padding: 5px;border-radius: 5px;"></div>';
                //$('.w_'+type+"[data-time='" + time_from +"'][data-date='"+week_dates[wk]+"']").html(x);
/*                $('.'+type+"[data-time='" + time_to +"']").html();*/


            }
           }

        }

    });




function calculateTimeDifference(date1,date2,date) {
    var date1 = new Date(date+' '+date1);
    var date2 = new Date(date+' '+date2);

    var diff = date2.getTime() - date1.getTime();

    var msec = diff;
    var hh = `0${Math.floor(msec / 1000 / 60 / 60)}`;
    msec -= hh * 1000 * 60 * 60;

    var mm = `0${Math.floor(msec / 1000 / 60)}`;
    msec -= mm * 1000 * 60;

    var ss = `0${Math.floor(msec / 1000)}`;
    msec -= ss * 1000;

    return hh.slice(-2) + ":" + mm.slice(-2); 
}    

/*document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'UTC',
    initialView: 'resourceTimeGridFourDay',
    datesAboveResources: true,
    headerToolbar: {
      left: 'prev,next',
      center: 'title',
      right: 'resourceTimeGridDay,resourceTimeGridFourDay'
    },
    views: {
      resourceTimeGridFourDay: {
        type: 'resourceTimeGrid',
        duration: { days: 4 },
        buttonText: '4 days'
      }
    },
    resources: [
      { id: 'a', title: 'Room A' },
      { id: 'b', title: 'Room B' }
    ],
    events: 'http://fullcalendar.io/demo-events.json?with-resources=2'
  });

  calendar.render();
});
*/

$(function(){
  $('.calendar-container').calendar();
});
</script>
@if(isset($request->date))

<script type="text/javascript">
$('.calendar-container').calendar({
  date: new Date('{{$request->date}}') // today
});
</script>

@else
<script type="text/javascript">
$('.calendar-container').calendar({
  date: new Date() // today
});
</script>
@endif


<script type="text/javascript">
$('.calendar-container').calendar({

  // text for prev/next buttons
  prevButton: "Prev",
  nextButton: "Next",

  // custom separator between the month and the year in the month view.
  monthYearSeparator: " ",

  // false = 4 months in a row
  showThreeMonthsInARow: true,

  // whether to change either month or year
  enableMonthChange: true,

  // whether to disable year view
  enableYearView: true,

  // shows a Today button on the bottom of the calendar
  showTodayButton: true,
  todayButtonContent: "Today",

  // highlights all other dates with the same week-day
  highlightSelectedWeekday: true,

  // highlights the selected week that contains the selected date
  highlightSelectedWeek: true,

  // whether to enable/disable the year selector
  showYearDropdown: false,

  // min/max dates
  // Date Object or Date String
  min: null,
  max: null,

  // start on Sunday instead
  startOnMonday: false,
  
});


 $('#calendar_1').fullCalendar({

        header: {

            left: 'prev',
            center: 'title',
            right: 'next'

        },  

        defaultDate: date,//'2018-12-12',
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar
        drop: function() {

            // is the "remove after drop" checkbox checked?

            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }
        },

        eventLimit: true, // allow "more" link when too many events
        events: []

    });


    // Hide default header

    //$('.fc-header').hide();

    // Previous month action

    $('#cal-prev').click(function(){
        $('#calendar').fullCalendar( 'prev' );
    });

    // Next month action

    $('#cal-next').click(function(){
        $('#calendar').fullCalendar( 'next' );
    });



    // Change to month view

    $('#change-view-month').click(function(){

        $('#calendar').fullCalendar('changeView', 'month');

        $('#calendar').show(100);
        $('#show_day_calender').hide();
        $('#show_weekly_calender').hide(100);
        $('#show_list_calender').hide(100);
        $('#show_search_calender').hide(100);

        // safari fix

        $('#content .main').fadeOut(0, function() {

            setTimeout( function() {
                $('#content .main').css({'display':'table'});
            }, 0);
        });
        

    });



    // Change to week view

/*    $('#change-view-week').click(function(){

        $('#calendar').fullCalendar( 'changeView', 'agendaWeek');



        // safari fix

        $('#content .main').fadeOut(0, function() {

            setTimeout( function() {

                $('#content .main').css({'display':'table'});

            }, 0);

        });



    });
*/


    // Change to day view
/*
    $('#change-view-day').click(function(){

        $('#calendar').fullCalendar( 'changeView','agendaDay');



        // safari fix

        $('#content .main').fadeOut(0, function() {

            setTimeout( function() {

                $('#content .main').css({'display':'table'});

            }, 0);

        });



    });*/



    // Change to today view

    $('#change-view-today').click(function(){

        $('#calendar').fullCalendar('today');

    });



    /* initialize the external events

     -----------------------------------------------------------------*/

    $('#external-events .event-control').each(function() {



        // store data so the calendar knows to render an event upon drop

        $(this).data('event', {

            title: $.trim($(this).text()), // use the element's text as the event title

            stick: true // maintain when user navigates (see docs on the renderEvent method)

        });



        // make the event draggable using jQuery UI

        $(this).draggable({

            zIndex: 999,

            revert: true,      // will cause the event to go back to its

            revertDuration: 0  //  original position after the drag

        });



    });



    $('#external-events .event-control .event-remove').on('click', function(){

        $(this).parent().remove();

    });



    // Submitting new event form

    $('#add-event').submit(function(e){

        e.preventDefault();

        var form = $(this);



        var newEvent = $('<div class="event-control p-10 mb-10">'+$('#event-title').val() +'<a class="pull-right text-muted event-remove"><i class="fa fa-trash-o"></i></a></div>');



        $('#external-events .event-control:last').after(newEvent);



        $('#external-events .event-control').each(function() {



            // store data so the calendar knows to render an event upon drop

            $(this).data('event', {

                title: $.trim($(this).text()), // use the element's text as the event title

                stick: true // maintain when user navigates (see docs on the renderEvent method)

            });



            // make the event draggable using jQuery UI

            $(this).draggable({

                zIndex: 999,

                revert: true,      // will cause the event to go back to its

                revertDuration: 0  //  original position after the drag

            });



        });



        $('#external-events .event-control .event-remove').on('click', function(){

            $(this).parent().remove();

        });



        form[0].reset();



        $('#cal-new-event').modal('hide');



    });

    $(document).ready(function(){/*

        $('#change-view-day').click();
        $('.fc-day').remove();
        // $('.fc-slats > table').remove();
        var x = '';
        for(i=0;i<categories_s.length;i++){
            if(i==0){
                x = '<td style="text-align:center;" class="fc-day fc-widget-content fc-wed fc-today">'+categories_s[i].name+'</td>';

            }else{
                x = x + '<td style="text-align:center;" class="fc-day fc-widget-content fc-wed fc-today">'+categories_s[i].name+'</td>';
            }
        }


        var start = '00:00';
        var end = '12:00';
        var tds = '<table>';
        var new_tds = '';
        for(i=0;i<categories_s.length;i++){
            if(i==0){
                new_tds = '<td class="fc-widget-content"></td>';
            }else{
                new_tds = new_tds + '<td class="fc-widget-content"></td>';
            }

        }

        for(i=0;i<12;i++){

                tds = tds + `<tr data-time="`+i+`:00">
                    <td class="fc-axis fc-time fc-widget-content" style="width: 48px;"><span>`+i+`am</span></td>
                    `+new_tds+`
                    </tr>

                    <tr class="fc-minor" data-time="`+i+`:00">
                    <td class="fc-axis fc-time fc-widget-content" style="width: 48px;"></td>
                    `+new_tds+`
                </tr>`;

        }


                tds = tds + '</table>';            
        $('.main_tr0').append(x);
         $('.fc-slats').append(tds);

    */})


/*    $('.day').click(function(){
        alert('a');
        date = $(this).data('date');
        alert(date);
    });*/


$(document).on('click', '.day', function(){

            date = $(this).data('date');
            var date = new Date(date);
                td = date.getDate();
                md = date.getMonth() + 1;
                if(td < 9){
                    td = '0'+td;
                }
                // alert(md);
                if(md < 9){
                    md = '0'+md;
                }
            d = date.getFullYear() + '-'+md + '-' +td; 

            window.location.href="{{route('admin.calender')}}?date="+d;             


});

        $(document).ready(function() {
            $('.select_bay').select2();
            $('.day').each(function(){
            date = $(this).data('date');
            var date = new Date(date);
                td = date.getDate();
                md = date.getMonth() + 1;


                if(td < 9){
                    td = '0'+td;
                }

                if(md < 9){
                    md = '0'+md;
                }
            d = date.getFullYear() + '-'+md + '-' +td; 
             $(this).attr('data-cdate',d);
            });            

        }); 




    $('#select_bay').change(function(){
        if($(this).val()!=''){
            window.location.href="{{route('admin.calender')}}?type="+$(this).val();
        }

    });

</script>
@if($request->date)

    <script type="text/javascript">
        $(document).ready(function() {        
        var date ='{{$request->date}}';
           /* date = new Date(date); */

            $('.day').each(function(){


                if($(this).attr('data-cdate')!=undefined){

                    if($(this).data('cdate')===date){
                        $(this).addClass('x`selected today highlight');
                    }

                }

            });

            });





    </script>

@endif

<script type="text/javascript">
    
 $('#global_notes_input').on('keyup',function(){

    function timer(){
    var data = $('#global_notes_input').val();
        $.ajax({
                type:'POST',
                url:'{{route("calender_save_notes")}}',
                data:{_token: "{{ csrf_token() }}",data:data,type:'global'
                },
                success: function( msg ) {
                }
            });


    }
   
   //setTimeout(myFunc,5000);
    setTimeout(timer,2000);   

  });



 $('#user_notes_input').on('keyup',function(){

    function timer(){
    var data = $('#user_notes_input').val();
        $.ajax({
                type:'POST',
                url:'{{route("calender_save_notes")}}',
                data:{_token: "{{ csrf_token() }}",data:data,type:'user'
                },
                success: function( msg ) {
                }
            });


    }
   
   //setTimeout(myFunc,5000);
    setTimeout(timer,2000);   

  });
</script>


<script type="text/javascript">
    
    $('.change_calender').click(function(){

        $('.change_calender').removeClass('btn-primary');
        $('.change_calender').addClass('btn-default');
        $(this).removeClass('btn-default');
        $(this).addClass('btn-primary');        
    });

    $(document).ready(function(){
    $('.fc-next-button').text('Next');        
    $('.fc-prev-button').text('Previous');        
    })

    function editAppointment(id) {
        window.location.href = "{{route('admin.edit.appointment')}}?id="+id
    }

</script>

@endsection()