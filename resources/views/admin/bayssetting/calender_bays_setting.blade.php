@extends('partials.default')
@section('content')
<style type="text/css">

.bootstrap-select.btn-group .dropdown-toggle .filter-option{
text-align: center!important;
}
</style>
<section class="content home">
  <div class="container-fluid">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-7">
          <h2>Dashboard</h2>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{$page_title}}</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="{{route('admin.dashboard')}}" class="btn btn-danger">Close</a>
            <a href="{{route('admin-new-bay-add')}}" class="btn btn-primary">New Bay</a>
            
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            
            <table class="table table-bordered">
              
              <thead>
                <tr>
                  <th>#</th>
                  <th>Bay</th>
                  <th>Sort Order</th>
                  <th>Active</th>
                  <th style="width:25%;">Action</th>
                </tr>
              </thead>
              <tbody>
                @php $i=1
                @endphp
                @foreach($bay as $b)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$b->bay_name}}</td>
                  <td>{{$b->sort_order}}</td>
                  <td>@if($b->active==0){{'N0'}} @elseif($b->active==1){{'Yes'}} @endif</td>
                  <td><a href="{{route('admin-bay-setting-edit',['id'=>$b->id])}}" class="btn btn-primary">Edit</a><a href="{{route('admin-bay-delete',['id'=>$b->id])}}" style="margin-left: 15px;" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach()
              </tbody>
              
            </table>
            
          </div>
          
          
        </div>
        <hr style="width:100%;">

        <form method="post" action="{{route('admin-calender-grid-system-save')}}">
          {{csrf_field()}}
          @isset($calender)
          <input type="hidden" name="id" value="{{$calender->id}}">
          @endif
        <div class="row" style="margin:0px;">
          <div class="col-lg-6">
            <div class="col-lg-12">
              <h6>Calender Grid System</h6>
            </div>
            <hr style="width:100%;">
            <div class="row" style="margin:0px">
              <div class="col-lg-2">
                <label style="color:#fff; margin-top: 54px;">Grid</label>
              </div>
              <div class="col-lg-4">
                <label style="color:#fff">Start Time</label>
<select class="form-control show-tick" style="margin-bottom:20px;" name="grid_start_time">
  <option value="1:00 AM"

 {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='1')?'selected':''}}>1:00 AM</option>


  <option value="2:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='2')?'selected':''}}  >2:00 AM</option>
  <option value="3:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='3')?'selected':''}} >3:00 AM</option>
  <option value="4:00 AM"{{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='4')?'selected':''}}>4:00 AM</option>
  <option value="5:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='5')?'selected':''}} >5:00 AM</option>
  <option value="6:00 AM"{{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='6')?'selected':''}} >6:00 AM</option>
  <option value="7:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='7')?'selected':''}} >7:00 AM</option>
  <option value="8:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='8')?'selected':''}} >8:00 AM</option>
  <option value="9:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='9')?'selected':''}} >9:00 AM</option>
  <option value="10:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='10')?'selected':''}} >10:00 AM</option>
  <option value="11:00 AM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='11')?'selected':''}}>11:00 AM</option>
  <option value="12:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='12')?'selected':''}}>12:00 PM</option>
  <option value="1:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='1')?'selected':''}}>1:00 PM</option>
  <option value="2:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='2')?'selected':''}} >2:00 PM</option>
  <option value="3:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='3')?'selected':''}} >3:00 PM</option>
  <option value="4:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='4')?'selected':''}}>4:00 PM</option>
  <option value="5:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='5')?'selected':''}} >5:00 PM</option>
  <option value="6:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='6')?'selected':''}} >6:00 PM</option>
  <option value="7:00 PM"{{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='7')?'selected':''}}>7:00 PM</option>
  <option value="8:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='8')?'selected':''}} >8:00 PM</option>
  <option value="9:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='9')?'selected':''}} >9:00 PM</option>
  <option value="10:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='10')?'selected':''}} >10:00 PM</option>
  <option value="11:00 PM" {{ (isset($calender->grid_start_time)&& $calender->grid_start_time=='11')?'selected':''}} >11:00 PM</option>
</select>
              </div>
              <div class="col-lg-4">
                <label style="color:#fff">End Time</label>
                <select class="form-control show-tick" style="margin-bottom:20px;" name="grid_end_time">
  <option value="1:00 AM"
 {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='1:00 AM')?'selected':''}}>1:00 AM</option>
  <option value="2:00 AM"

  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='2:00 AM')?'selected':''}} >2:00 AM</option>
  <option value="3:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='3:00 AM')?'selected':''}} >3:00 AM</option>
  <option value="4:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='4:00 AM')?'selected':''}} >4:00 AM</option>
  <option value="5:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='5:00 AM')?'selected':''}} >5:00 AM</option>
  <option value="6:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='6:00 AM')?'selected':''}} >6:00 AM</option>
  <option value="7:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='7:00 AM')?'selected':''}} >7:00 AM</option>
  <option value="8:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='8:00 AM')?'selected':''}} >8:00 AM</option>
  <option value="9:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='9:00 AM')?'selected':''}} >9:00 AM</option>
  <option value="10:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='10:00 AM')?'selected':''}} >10:00 AM</option>
  <option value="11:00 AM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='11:00 AM')?'selected':''}} >11:00 AM</option>
  <option value="12:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='12:00 PM')?'selected':''}} >12:00 PM</option>
  <option value="1:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='1:00 PM')?'selected':''}}>1:00 PM</option>
  <option value="2:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='2:00 PM')?'selected':''}}>2:00 PM</option>
  <option value="3:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='3:00 PM')?'selected':''}}>3:00 PM</option>
  <option value="4:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='4:00 PM')?'selected':''}}>4:00 PM</option>
  <option value="5:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='5:00 PM')?'selected':''}}>5:00 PM</option>
  <option value="6:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='6:00 PM')?'selected':''}}>6:00 PM</option>
  <option value="7:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='7:00 PM')?'selected':''}}>7:00 PM</option>
  <option value="8:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='8:00 PM')?'selected':''}}>8:00 PM</option>
  <option value="9:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='9:00 PM')?'selected':''}}>9:00 PM</option>
  <option value="10:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='10:00 PM')?'selected':''}} >10:00 PM</option>
  <option value="11:00 PM" 
  {{ (isset($calender->grid_end_time)&& $calender->grid_end_time=='11:00 PM')?'selected':''}} >11:00 PM</option>
</select>
              </div>
            </div>
            <div class="row" style="margin:0px">
              <div class="col-lg-2">
                <label style="color:#fff; margin-top: 25px;">Work</label>
              </div>
              <div class="col-lg-4">
                
                <select class="form-control show-tick" style="margin-bottom:20px;" name="work_start_time">
  <option value="1:00 AM"

{{ (isset($calender->work_start_time)&& $calender->work_start_time=='1:00 AM')?'selected':''}}>1:00 AM</option>
  <option value="2:00 AM"

  {{ (isset($calender->work_start_time)&& $calender->work_start_time=='2:00 AM')?'selected':''}} >2:00 AM</option>
  <option value="3:00 AM"
{{ (isset($calender->work_start_time)&& $calender->work_start_time=='3:00 AM')?'selected':''}} >3:00 AM</option>
  <option value="4:00 AM"
 {{ (isset($calender->work_start_time)&& $calender->work_start_time=='4:00 AM')?'selected':''}} >4:00 AM</option>
  <option value="5:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='5:00 AM')?'selected':''}}  >5:00 AM</option>
  <option value="6:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='6:00 AM')?'selected':''}}  >6:00 AM</option>
  <option value="7:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='7:00 AM')?'selected':''}}  >7:00 AM</option>
  <option value="8:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='8:00 AM')?'selected':''}}  >8:00 AM</option>
  <option value="9:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='9:00 AM')?'selected':''}}  >9:00 AM</option>
  <option value="10:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='10:00 AM')?'selected':''}}  >10:00 AM</option>
  <option value="11:00 AM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='11:00 AM')?'selected':''}}  >11:00 AM</option>
  <option value="12:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='12:00 PM')?'selected':''}}  >12:00 PM</option>
  <option value="1:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='1:00 PM')?'selected':''}} >1:00 PM</option>
  <option value="2:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='2:00 PM')?'selected':''}} >2:00 PM</option>
  <option value="3:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='3:00 PM')?'selected':''}} >3:00 PM</option>
  <option value="4:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='4:00 PM')?'selected':''}} >4:00 PM</option>
  <option value="5:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='5:00 PM')?'selected':''}} >5:00 PM</option>
  <option value="6:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='6:00 PM')?'selected':''}} >6:00 PM</option>
  <option value="7:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='7:00 PM')?'selected':''}} >7:00 PM</option>
  <option value="8:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='8:00 PM')?'selected':''}} >8:00 PM</option>
  <option value="9:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='9:00 PM')?'selected':''}} >9:00 PM</option>
  <option value="10:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='10:00 PM')?'selected':''}}  >10:00 PM</option>
  <option value="11:00 PM" {{ (isset($calender->work_start_time)&& $calender->work_start_time=='11:00 PM')?'selected':''}}  >11:00 PM</option>
</select>
</div>
      <div class="col-lg-4">
        
        <select class="form-control show-tick" style="margin-bottom:20px;" name="work_end_time">
          <option value="1:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='1:00 AM')?'selected':''}}>1:00 AM</option>
          <option value="2:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='2:00 AM')?'selected':''}} >2:00 AM</option>
          <option value="3:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='3:00 AM')?'selected':''}} >3:00 AM</option>
          <option value="4:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='4:00 AM')?'selected':''}} >4:00 AM</option>
          <option value="5:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='5:00 AM')?'selected':''}} >5:00 AM</option>
          <option value="6:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='6:00 AM')?'selected':''}} >6:00 AM</option>
          <option value="7:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='7:00 AM')?'selected':''}} >7:00 AM</option>
          <option value="8:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='8:00 AM')?'selected':''}} >8:00 AM</option>
          <option value="9:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='9:00 AM')?'selected':''}} >9:00 AM</option>

          <option value="10:00 AM"  {{ (isset($calender->work_end_time)&& $calender->work_end_time=='10:00 AM')?'selected':''}}>10:00 AM</option>
          <option value="11:00 AM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='11:00 AM')?'selected':''}}>11:00 AM</option>
          <option value="12:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='12:00 AM')?'selected':''}}>12:00 PM</option>
          <option value="1:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='1:00 PM')?'selected':''}}>1:00 PM</option>
          <option value="2:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='2:00 PM')?'selected':''}}>2:00 PM</option>
          <option value="3:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='3:00 PM')?'selected':''}}>3:00 PM</option>
          <option value="4:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='4:00 PM')?'selected':''}}>4:00 PM</option>
          <option value="5:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='5:00 PM')?'selected':''}}>5:00 PM</option>
          <option value="6:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='6:00 PM')?'selected':''}}>6:00 PM</option>
          <option value="7:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='7:00 PM')?'selected':''}}>7:00 PM</option>
          <option value="8:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='8:00 PM')?'selected':''}}>8:00 PM</option>
          <option value="9:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='9:00 PM')?'selected':''}}>9:00 PM</option>
          <option value="10:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='10:00 PM')?'selected':''}}>10:00 PM</option>
          <option value="11:00 PM" {{ (isset($calender->work_end_time)&& $calender->work_end_time=='11:00 PM')?'selected':''}}>11:00 PM</option>
        </select>
      </div>
            </div>
            <div class="row" style="margin:0px">
              <div class="col-lg-2">
                <label style="color:#fff; margin-top: 25px;">Lunch</label>
              </div>
              <div class="col-lg-4">
                
                <select class="form-control show-tick" style="margin-bottom:20px;" name="lunch_start_time">
          <option value="1:00 AM"
{{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='1:00 AM')?'selected':''}}>1:00 AM</option>
          <option value="2:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='2:00 AM')?'selected':''}}  >2:00 AM</option>
          <option value="3:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='3:00 AM')?'selected':''}}  >3:00 AM</option>
          <option value="4:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='4:00 AM')?'selected':''}}  >4:00 AM</option>
          <option value="5:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='5:00 AM')?'selected':''}}  >5:00 AM</option>
          <option value="6:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='6:00 AM')?'selected':''}}  >6:00 AM</option>
          <option value="7:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='7:00 AM')?'selected':''}}  >7:00 AM</option>
          <option value="8:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='8:00 AM')?'selected':''}}  >8:00 AM</option>
          <option value="9:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='9:00 AM')?'selected':''}}  >9:00 AM</option>
          <option value="10:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='10:00 AM')?'selected':''}}  >10:00 AM</option>
          <option value="11:00 AM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='11:00 AM')?'selected':''}}  >11:00 AM</option>
          <option value="12:00 PM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='12:00 PM')?'selected':''}}  >12:00 PM</option>
          <option value="1:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='1:00 PM')?'selected':''}} >1:00 PM</option>
          <option value="2:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='2:00 PM')?'selected':''}} >2:00 PM</option>
          <option value="3:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='3:00 PM')?'selected':''}} >3:00 PM</option>
          <option value="4:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='4:00 PM')?'selected':''}} >4:00 PM</option>
          <option value="5:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='5:00 PM')?'selected':''}} >5:00 PM</option>
          <option value="6:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='6:00 PM')?'selected':''}} >6:00 PM</option>
          <option value="7:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='7:00 PM')?'selected':''}} >7:00 PM</option>
          <option value="8:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='8:00 PM')?'selected':''}} >8:00 PM</option>
          <option value="9:00 PM"  {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='9:00 PM')?'selected':''}} >9:00 PM</option>
          <option value="10:00 PM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='10:00 PM')?'selected':''}}  >10:00 PM</option>
          <option value="11:00 PM" {{ (isset($calender->lunch_start_time)&& $calender->lunch_start_time=='11:00 PM')?'selected':''}}  >11:00 PM</option>
        </select>
              </div>
              <div class="col-lg-4">
                
                <select class="form-control show-tick" style="margin-bottom:20px;" name="lunch_end_time">
          <option value="1:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='1:00 AM')?'selected':''}} >1:00 AM</option>
          <option value="2:00 AM"  {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='2:00 AM')?'selected':''}} >2:00 AM</option>
          <option value="3:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='3:00 AM')?'selected':''}}  >3:00 AM</option>
          <option value="4:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='4:00 AM')?'selected':''}}  >4:00 AM</option>
          <option value="5:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='5:00 AM')?'selected':''}}  >5:00 AM</option>
          <option value="6:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='6:00 AM')?'selected':''}}   >6:00 AM</option>
          <option value="7:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='7:00 AM')?'selected':''}}  >7:00 AM</option>
          <option value="8:00 AM"  {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='8:00 AM')?'selected':''}} >8:00 AM</option>
          <option value="9:00 AM"  {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='9:00 AM')?'selected':''}} >9:00 AM</option>
          <option value="10:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='10:00 AM')?'selected':''}}   >10:00 AM</option>
          <option value="11:00 AM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='11:00 AM')?'selected':''}}  >11:00 AM</option>
          <option value="12:00 PM"{{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='12:00 PM')?'selected':''}}   >12:00 PM</option>
          <option value="1:00 PM"{{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='1:00 PM')?'selected':''}}   >1:00 PM</option>
          <option value="2:00 PM"{{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='2:00 PM')?'selected':''}}   >2:00 PM</option>
          <option value="3:00 PM"{{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='3:00 PM')?'selected':''}}   >3:00 PM</option>
          <option value="4:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='4:00 PM')?'selected':''}}  >4:00 PM</option>
          <option value="5:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='5:00 PM')?'selected':''}}  >5:00 PM</option>
          <option value="6:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='6:00 PM')?'selected':''}}  >6:00 PM</option>
          <option value="7:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='7:00 PM')?'selected':''}}  >7:00 PM</option>
          <option value="8:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='8:00 PM')?'selected':''}}  >8:00 PM</option>
          <option value="9:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='9:00 PM')?'selected':''}}  >9:00 PM</option>
          <option value="10:00 PM"  {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='10:00 PM')?'selected':''}}  >10:00 PM</option>
          <option value="11:00 PM" {{ (isset($calender->lunch_end_time)&& $calender->lunch_end_time=='11:00 PM')?'selected':''}}   >11:00 PM</option>
        </select>
              </div>
            </div>
            <div class="row" style="margin:0px; padding-top: 30px;">
              <div class="col-lg-2">
                <label style="color:#fff; margin-top: 25px;">Interval</label>
              </div>
              <div class="col-lg-4">
                
                <select class="form-control show-tick" style="margin-bottom:20px;" name="interval_time">
                  <option value="5 Min"


           {{ (isset($calender->interval_time)&& $calender->interval_time=='5 Min')?'selected':''}} >5 Min</option>
                  <option value="10 Min"
            {{ (isset($calender->interval_time)&& $calender->interval_time=='10 Min')?'selected':''}}>10 Min</option>
                  <option value="15 Min" {{ (isset($calender->interval_time)&& $calender->interval_time=='15 Min')?'selected':''}}>15 Min</option>
                  <option value="20 Min"
                  { (isset($calender->interval_time)&& $calender->interval_time=='20 Min')?'selected':''}}>20 Min</option>
                  <option value="Half Hour"
                    { (isset($calender->interval_time)&& $calender->interval_time=='Half Hour')?'selected':''}}>Half Hour</option>
                  <option value="Hour"
             {{ (isset($calender->interval_time)&& $calender->interval_time=='Hour')?'selected':''}}>Hour</option>
                </select>
              </div>
              
            </div>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-12">
              <h6>Calender System</h6>
            </div>
            <hr style="width:100%;">
            <div class="col-md-12 input-group">
              
              
              <input type="checkbox"  id="default_calender" class="filled-in" name="default_calender"
        @if(isset($calender)?$calender->default_calender:'') checked @endif>
              <label for="default_calender" style="padding-left: 60px;color: white;">Use Default or Alt Calender </label>
            </div>
            <div class="col-lg-12">
              <p>G4A Include two calender systems. The default calender uses the operating system browser for rendering and working with the calendar (basically a web-page ) whereas the alternative does not.  </p>
              <p>
                If you experience issues with the default calendar, we recommed switching to the altenative.
                <br>This can be done at any time.
              </p>
            </div>
            
            
          </div>
          
        </div>
        <hr style="width:">
        <div class="row" style="margin:0px;">
          <div class="col-lg-12 input-group">
            
            <input type="checkbox" id="calender_display_setting" class="filled-in" name="calender_display_setting"
            

            @if(isset($calender)?$calender->calender_display_setting:'') checked @endif>
            <label for="calender_display_setting" style="padding-left: 60px;color: white;">Use 24 hour Clock for Calendar display and setting times </label>
          </div>
          <div class="col-lg-12 input-group">
            
            <input type="checkbox" id="appointment_date" class="filled-in" name="appointment_date"
        @if(isset($calender)?$calender->appointment_date:'') checked @endif>
            <label for="appointment_date" style="padding-left: 60px;color: white;">Keep Linked Document and Appointment Date / Times in Sync </label>
          </div>
          
          
        </div>
        <div class="row" style="margin:0px">
          <div class="col-lg-8">
            <p style="
            margin-left: 60px;margin-top: 20px;">Transfer Booking notes to new Documents , created from an Appointment</p>
          </div>
          <div class="col-lg-3">
            <select class="form-control show-tick" style="margin-bottom:20px;" name="booking_notes">
              <option value="Disabled"
            {{ (isset($calender->booking_notes)&& $calender->booking_notes=='Disabled')?'selected':''}}>Disabled</option>
              <option value="To Work Description"
            {{ (isset($calender->booking_notes)&& $calender->booking_notes=='To Work Description')?'selected':''}}>To Work Description</option>
              <option value="To Document Notes"
       {{ (isset($calender->booking_notes)&& $calender->booking_notes=='To Document Notes')?'selected':''}}>To Document Notes</option>
            </select>
          </div>
          
        </div>


        <div class="row" style="margin:0px">
          <div class="col-lg-6">
            
          </div>
          <div class="col-lg-4" style="margin-top: 10px;">
            <a href="" class="btn btn-danger" style="float:right;    margin-left: 35px;">Exit</a>
            <button type="submit" class="btn btn-primary" style="float:right">Save</button>

          </div>
          
        </div>



        </form>
      </div>
    </div>
  </div>
</section>
@endsection()