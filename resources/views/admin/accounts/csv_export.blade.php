@extends('partials.default')
<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;

}
</style>
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
                
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Nav tabs -->
                        <button class="btn btn-danger">Close</button>
                        <a href="{{route('admin.sales.nominals')}}" class="btn btn-success">Sales Nominals</a>
                        <a href="{{route('admin.expense.nominals')}}" class="btn btn-success">Expense Nominals</a>
                        <a href="{{route('admin-payment-methods')}}" class="btn btn-success">Payment Nominals</a>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-4 col-lg-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('export')}}" class="btn btn-info btn-block">
                                Export Sales<br><small>to current date</small>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('export-expense')}}" class="btn btn-info btn-block">
                                Export Expenses<br><small>to current date</small>
                                </a>
                            </div>
                            <hr style="width: 100%">
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label>Month Ending</label>
                                <input type="month" name="month_ending" value="{{date('Y-m',strtotime('2020-04'))}}" class="form-control">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('export-sales')}}" class="btn btn-info btn-block">
                                Export Sales<br><small>to month end</small>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="{{route('export-expense')}}" class="btn btn-info btn-block">
                                Export Expenses<br><small>to month end</small>
                                </a>
                            </div>
                            <hr style="width: 100%">
                        </div>
                        <div class="row">
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label>Format</label>
                                <select class="form-control show-tick" name="format">
                                    <option>Sage Default Format</option>
                                    <option>Custom Export Format</option>
                                </select>
                            </div>
                           </div>
                           <div class="row mt-5">
                             <div class="col-sm-12 col-md-12 col-lg-12">
                                <a class="btn btn-info btn-block" disabled>
                                    <i class="material-icons">settings</i> Configure Custom Format Options
                                </a>
                            </div>          
                            </div>                  
                            

                            <hr style="width: 100%">
                            <div class="row">
                            
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label>Format</label>
                                <select class="form-control show-tick">
                                    <option>Sage Default Format</option>
                                    <option>Custom Export Format</option>
                                </select>
                            </div>
                            
                            
                            <hr style="width: 100%">
                        </div>
                        </div>


 <div class="col-md-8 col-lg-7 col-sm-12">


            <div class="row">
              <div class="col-md-12 input-group">
                
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#account">Info</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#info_notes">Sales Exports</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rates">Expense Exports</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privacy">Settings</a></li>
                </ul>
              </div>
            </div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane animated flipInX active" id="account">
                @include('admin.accounts.info')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="info_notes">
                @include('admin.accounts.sales_export')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="rates">
                @include('admin.accounts.expense_exports')
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="privacy">
                @include('admin.accounts.settings')
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
@endsection()