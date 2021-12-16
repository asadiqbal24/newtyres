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
                        <button class="btn btn-success">Print / Perform</button>
                        <button class="btn btn-info">Prev Reconsile</button>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>T</th>
                                            <th>Doc No</th>
                                            <th>Date</th>
                                            <th>Acc Number</th>
                                            <th>Customer</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th><input type="checkbox" name=""></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-8 col-lg-8" style="padding-left: 50px;">
                           
                           <div class="row" style="width: 500px;max-width: 500px;">
                                <p>When performed, all receipts above will be marked as reconsiled.<br>
                                    A list will also be printed resembling what is currently shown on<br>
                                    screen, but grouped by Payment Types.<br><br>

                                    You can view and reprint any previous reconsiles based on the date<br>
                                    they were performed. 
                                </p>
                           </div> 

                    </div>


                    <div class="col-sm-12 col-md-4 col-lg-4">


                        <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Cash</label>
                                            <input type="text" class="form-control" name="cash">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                         <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Cheque</label>
                                            <input type="text" class="form-control" name="cheque">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>


                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Digital</label>
                                            <input type="text" class="form-control" name="digital">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                        <div class="form-line">
                                            <label>Grand Total</label>
                                            <input type="text" class="form-control" name="grand_total">
                                        </div>
                                        <span class="input-group-addon"> <i></i> </span>
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