@extends('partials.default')
@section('content')
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
        <form method="get" action="{{route('admin.estimates')}}">
          <div class="row">
            <div class="col-md-2 input-group">
              <div class="form-line">
                <label>Archive Search</label>
                <input type="text" name="archive_search" required value="" class="form-control">
              </div>
              <span class="input-group-addon"> <i></i> </span>
              
            </div>
            <div class="col-md-10">
              <a href="{{route('admin.document.archive')}}?type=all" class="btn btn-<?php if($type=='all') echo 'success'; else echo 'primary' ?>">All</a>


              <a href="{{route('admin.document.archive')}}?type=invoices" class="btn btn-<?php if($type=='invoices') echo 'success'; else  echo 'primary' ?>">Invoices</a>
              

              <a href="{{route('admin.document.archive')}}?type=jobsheets" class="btn btn-<?php if($type=='jobsheets') echo 'success'; else  echo 'primary' ?>">JOb Sheets</a>
              
              <a href="{{route('admin.document.archive')}}?type=estimate" class="btn btn-<?php if($type=='estimate') echo 'success'; else  echo 'primary' ?>">Estimates</a>
              
              <a href="{{route('admin.document.archive')}}?type=credit_note" class="btn btn-<?php if($type=='credit_note') echo 'success'; else  echo 'primary' ?>">Credit Notes</a>
              
              <a href="{{route('admin.document.archive')}}?type=outstanding" class="btn btn-<?php if($type=='outstanding') echo 'success'; else  echo 'primary' ?>">Outstanding</a>

              <a href="" class="btn btn-primary">Print</a>
            </div>
            <div class="col-md-2">
              <select name="created_type" class="form-control show-tick">
                <option <?php if(isset($requestData) && $requestData->created_type=='created') echo 'selected'; ?> value="created">Created</option>
                <option <?php if(isset($requestData) && $requestData->created_type=='due') echo 'selected'; ?> value="due">Due</option>
                <option <?php if(isset($requestData) && $requestData->created_type=='issued') echo 'selected'; ?> value="issued">Issued</option>
                
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
                <option <?php if(isset($requestData) && $requestData->status=='inc') echo 'selected'; ?> value="inc">Inc Pending</option>
                <option <?php if(isset($requestData) && $requestData->status=='exc') echo 'selected'; ?> value="exc">Exc Pending</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-info">Submit</button>
            </div>
            
          </div>
        </form>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>T</th>
                <th>Doc No</th>
                <th>Date</th>
                <th>Issue Date</th>
                <th>Registration</th>
                <th>Make & Model</th>
                <th>Customer</th>
                <th>Total</th>
                <th>Receipts</th>
                <th>Balance</th>
                <th>P</th>
                <th>Exp</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-body">
        
        <div class="row">
          <div class="col-md-12 input-group">
            
            <ul class="nav nav-tabs">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#details">Details</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#description">Description</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#labour">Labour</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#parts">Parts</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#advisories">Advisories</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reminders">Reminders</a></li>
            </ul>
          </div>
        </div>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane animated flipInX active" id="details">
            @include('admin.document.details')
          </div>
          <div role="tabpanel" class="tab-pane animated flipInX" id="description">
            @include('admin.document.description')
          </div>
          <div role="tabpanel" class="tab-pane animated flipInX" id="labour">
            @include('admin.document.labour')
          </div>
          <div role="tabpanel" class="tab-pane animated flipInX" id="parts">
            @include('admin.document.parts')
          </div>
          <div role="tabpanel" class="tab-pane animated flipInX" id="advisories">
            @include('admin.document.advisories')
          </div>
          <div role="tabpanel" class="tab-pane animated flipInX" id="reminders">
            @include('admin.document.reminders')
          </div>
          
        </div>
        
        
      </div>
    </div>
    
  </div>
</section>
@endsection()
@section('jsOutside')
<script type="text/javascript"></script>
@endsection()