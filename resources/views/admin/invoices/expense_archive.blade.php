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
                <div class="card-body row">

              <div class="col-md-2">
            <input type="text" name="account_search" class="form-control" placeholder="Expense Search">
              </div>
              <div class="col-md-1" style="padding: 0px;">
                <button class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
                <button class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
              </div>
            <div class="col-md-9">
                <a href="{{route('admin.add.new.customer')}}" class="btn btn-success btn-xs">All</a>
                <a href="#" data-toggle="modal" data-target="#copyModal" data-backdrop="false" class="btn btn-success btn-xs">Invoices</a>
                <a data-toggle="modal" data-target="#creditNote" data-backdrop="false" class="btn btn-success btn-xs">Credit Notes</a>                

                <a href="{{route('admin.advanced_search')}}" class="btn btn-success btn-xs">Outstanding</a>
                <a href="" class="btn btn-success btn-xs">Acc Payments</a>
                <a href="{{route('admin.advanced_search')}}" class="btn btn-success btn-xs">Print</a>
            </div>



        </div>
        </div>
            


            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <select name="created_type" class="form-control show-tick">

                                <option value="created">Created</option>
                                <option value="due">Due</option>                                
                                
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="from" class="form-control" placeholder="From">
                        </div>
                        <div class="col-md-2">
                            <input type="date" name="to" class="form-control" placeholder="To">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info" value="{{date('Y-m-d')}}">Today</button>
                        </div>
                        <div class="col-md-2">

                              <select name="created_type" class="form-control show-tick">
                                <option>Date Range</option>
                                <optgroup>
                                    <option value="yesterday">Yesterday</option>
                                    <option value="today">Today</option>
                                    <option value="tomorrow">Tomorrow</option>                                  
                                </optgroup>

                                <optgroup>
                                    <option value="last_week">Last Week</option>
                                    <option value="this_week">This Week</option>
                                    <option value="next_week">Next Week</option>                                  
                                </optgroup>

                                 <optgroup>
                                    <option value="last_month">Last Month</option>
                                    <option value="this_month">This Month</option>
                                    <option value="next_month">Next Month</option>                                  
                                </optgroup>


                                 <optgroup>
                                    <option value="last_year">Last Year</option>
                                    <option value="this_year">This Year</option>
                                    <option value="next_year">Next Year</option>                                  
                                </optgroup>


                                
                            </select>

                        </div>
                        
                       
                    </div>
                </div>
        </div>

<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="{{route('admin.new.invoice',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Starting Document No</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Starting No</label>
                                <input type="number" class="form-control" value="1000" name="starting_from" id="starting_from">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>



<div class="modal fade" id="creditNote" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="{{route('admin.new.credit_expense',['type'=>'new_invoice'])}}">
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Starting Document No</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Starting No</label>
                                <input type="number" class="form-control" value="1000" name="starting_from" id="starting_from">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
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
                                  <th>Date Paid</th>
                                  <th>Acc Number</th>
                                  <th>Company</th>
                                  <th>Desc.</th>
                                  <th>Total</th>                                  
                                  <th>Receipts</th> 
                                  <th>Balance</th>
                                  <th>P</th>                                  
                                  <th>Saqe</th>                                                                    
                                  <th></th>
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
@endsection()