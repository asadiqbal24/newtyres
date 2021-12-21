@extends('partials.default')
@section('content')
@section('archives','active_tab')
<!-- Main Content -->
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
                <div class="row">
                    
                    <div class="col-md-2">
                        <input type="text" name="account_search" class="form-control" placeholder="Account Search">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
                    </div>
                    
                    <div class="col-md-8" id="buttons">
                        <a id="all" data-target=".all" class="btn btn-success btn-xs Smallbutton">All</a>
                        <a id="invoice" data-target=".invoice" class="btn btn-success btn-xs Smallbutton">Invoices</a>
                        <a  id="jobsheet" data-target=".jobsheet" class="btn btn-success btn-xs Smallbutton">Job Sheets</a>
                        <a  id="jobsheet" data-target=".estimate" class="btn btn-success btn-xs Smallbutton">Estimates</a>
                        <a  id="creditnote" data-target=".creditnote" class="btn btn-success btn-xs Smallbutton">Credit Notes</a>
                        <a id="outstanding" data-target=".outstanding" class="btn btn-success btn-xs Smallbutton">Outstanding</a>
                        <a href="#" class="btn btn-success btn-xs Smallbutton">Print</a> 
                    </div>
                

                </div>
            </div>
        </div>


        <div class="card">
                <div class="card-body">
                    


        <form method="get" action="{{route('admin.invoices')}}">
          <div class="row">
            <div class="col-md-2">
              <select name="created_type" class="form-control show-tick">
                <option <?php if(isset($requestData) && $requestData->created_type=='created') echo 'selected'; ?> value="created">Created</option>
                <option <?php if(isset($requestData) && $requestData->created_type=='due') echo 'selected'; ?> value="due">Due</option>
                
              </select>
            </div>
            <div class="col-md-2">
              <input type="date" name="from" value="{{isset($requestData)?$requestData->from:''}}" class="form-control" placeholder="From">
            </div>
            <div class="col-md-2">
              <input type="date" name="to" value="{{isset($requestData)?$requestData->to:''}}" class="form-control" placeholder="To">
            </div>
            <div class="col-md-2">
              @if(isset($requestData->today))
                <p>{{$requestData->today}}</p>
              @endif
              <button class="btn btn-info today" type="button" name="today" value="{{date('Y-m-d')}}">Today</button>
            </div>
            <div class="col-md-2">
              <select name="custom_date_range" class="form-control show-tick">
                <option value="{{NULL}}">Date Range</option>
                <optgroup>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='yesterday') echo 'selected'; ?> value="yesterday">Yesterday</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='today') echo 'selected'; ?> value="today">Today</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='tomorrow') echo 'selected'; ?> value="tomorrow">Tomorrow</option>
                </optgroup>
                <optgroup>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_week') echo 'selected'; ?> value="last_week">Last Week</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_week') echo 'selected'; ?> value="this_week">This Week</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_week') echo 'selected'; ?> value="next_week">Next Week</option>
                </optgroup>
                <optgroup>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_month') echo 'selected'; ?> value="last_month">Last Month</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_month') echo 'selected'; ?> value="this_month">This Month</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_month') echo 'selected'; ?> value="next_month">Next Month</option>
                </optgroup>
                <optgroup>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='last_year') echo 'selected'; ?> value="last_year">Last Year</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='this_year') echo 'selected'; ?> value="this_year">This Year</option>
                  <option <?php if(isset($requestData) && $requestData->custom_date_range=='next_year') echo 'selected'; ?> value="next_year">Next Year</option>
                </optgroup>
                
              </select>
            </div>
            <div class="col-md-2">
              <select name="status" class="form-control show-tick">
                <option <?php if(isset($requestData) && $requestData->status=='~') echo 'selected'; ?> value="~">~</option>
                <option <?php if(isset($requestData) && $requestData->status=='auth-req') echo 'selected'; ?> value="auth-req">Auth Req</option>
                <option <?php if(isset($requestData) && $requestData->status=='complete') echo 'selected'; ?> value="complete">Complete</option>
                <option <?php if(isset($requestData) && $requestData->status=='mot') echo 'selected'; ?> value="mot">Mot</option>                                                                                 
                <option <?php if(isset($requestData) && $requestData->status=='service') echo 'selected'; ?> value="service">Service</option>
                <option <?php if(isset($requestData) && $requestData->status=='urgent') echo 'selected'; ?> value="urgent">Urgent</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-info">Submit</button>
            </div>
            
          </div>
        </form>
      

                </div>
        </div>

<div class="card all target" >
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                               <th>Doc No</th>
                                <th>Date</th>
                                <th>Issue Date</th>
                                <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                            
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $a=1
                            @endphp
                            @foreach($invoice as $i)
                              @php $name = unserialize($i->name); @endphp
                            <tr>
                                <td>{{$a++}}</td>
                                <td></td>
                                <td>{{$i->created_at->format('Y-m-d')}}</td>
                                <td>{{$i->date_reg}}</td>
                                <td>{{$i->registration_no}}</td>
                                <td>{{$i->model}}</td>
                                <td>@foreach($name as $n) {{$n}} @endforeach</td>

                                <td><a href="{{route('admin.invoice.view-detail',['id'=>$i->id])}}" class="btn btn-primary">Open</a></td>
                                
                            </tr>
                            @endforeach()
                             @foreach($jobsheet as $j)
                                 @php $modal = unserialize($j->model); @endphp
                                    @php $name = unserialize($j->name); @endphp
                             <tr>
                                 <td>{{$a++}}</td>
                                 <td></td>
                                 <td>{{$j->date_reg}}</td>
                                 <td>{{$j->created_at->format('Y-m-d')}}</td>
                                 <td>{{$j->registration_no}}</td>
                                 <td>@foreach($modal as $m) {{$m}} @endforeach</td>
                                 <td>@foreach($name as $n) {{$n}} @endforeach</td>
                                 
                                 <td><a href="{{route('admin.jobsheet.view',['id'=>$j->id])}}" class="btn btn-primary">Open</a></td>
                             </tr>
                             @endforeach()
                             @foreach($estimate as $e)
                              @php $name = unserialize($e->name); @endphp
                            <tr>
                                <td>{{$a++}}</td>
                                <td></td>
                                <td>{{$e->date_reg}}</td>
                                <td>{{$e->created_at->format('Y-m-d')}}</td>
                                <td>{{$e->registration_no}}</td>
                                <td>{{isset($e->modal)?$e->modal->name:''}}</td>
                                 <td>@foreach($name as $n) {{$n}} @endforeach</td>
                                 
                                 <td><a href="{{route('admin.estimates.view',['id'=>$e->id])}}" class="btn btn-primary">Open</a></td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="card invoice target" style="display:none;" >
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doc No</th>
                                <th>Date</th>
                                <th>Issue Date</th>
                                <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                            
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $a=1;
                             ?>
                              
                            @foreach($invoice as $i)
                            @php $name = unserialize($i->name); @endphp
                            <tr>
                                <td>{{$a++}}</td>
                                <td></td>
                                <td>{{$i->created_at->format('Y-m-d')}}</td>
                                <td>{{$i->date_reg}}</td>
                                <td>{{$i->registration_no}}</td>
                                <td>{{$i->model}}</td>
                                <td>@foreach($name as $n) {{$n}} @endforeach</td>
                                <td><a href="{{route('admin.invoice.view-detail',['id'=>$i->id])}}" class="btn btn-primary">Open</a></td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="card jobsheet target" style="display:none;">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doc No</th>
                                <th>Date</th>
                                <th>Issue Date</th>
                                 <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           @php
                              $i=1;
                             @endphp
                             @foreach($jobsheet as $j)
                                 @php $modal = unserialize($j->model); @endphp
                                    @php $name = unserialize($j->name); @endphp
                             <tr>
                                 <td>{{$i++}}</td>
                                 <td></td>
                                 <td>{{$j->date_reg}}</td>
                                 <td>{{$j->created_at->format('Y-m-d')}}</td>
                                 <td>{{$j->registration_no}}</td>
                                 <td>@foreach($modal as $m) {{$m}} @endforeach</td>
                                 <td>@foreach($name as $n) {{$n}} @endforeach</td>
                                 <td>0</td>
                                 <td><a href="{{route('admin.jobsheet.view',['id'=>$j->id])}}" class="btn btn-primary">Open</a></td>
                             </tr>
                             @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card estimate target" style="display:none;">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doc No</th>
                                <th>Date</th>
                                <th>issue Date</th>
                                 <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1;
                            @endphp
                            @foreach($estimate as $e)
                              @php $name = unserialize($e->name); @endphp
                            <tr>
                                <td>{{$i++}}</td>
                                <td></td>
                                <td>{{$e->date_reg}}</td>
                                <td>{{$e->created_at->format('Y-m-d')}}</td>
                                <td>{{$e->registration_no}}</td>
                                <td>{{isset($e->modal)?$e->modal->name:''}}</td>
                                 <td>@foreach($name as $n) {{$n}} @endforeach</td>
                                 <td>0</td>
                                 <td><a href="{{route('admin.estimates.view',['id'=>$e->id])}}" class="btn btn-primary">Open</a></td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card creditnote target" style="display:none;">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doc No</th>
                                <th>Date</th>
                                 <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="card outstanding target" style="display:none;">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Doc No</th>
                                <th>Date</th>
                                 <th>Registration</th>
                                <th>Make & Model</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>    
        
        
        
        
    </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript">
$(document).ready(function () {
    var $targets = $('.target');
    $('#buttons .Smallbutton').click(function () {
        var $target = $($(this).data('target')).slideToggle();
        $targets.not($target).hide()
    });
});
</script>

@endsection()