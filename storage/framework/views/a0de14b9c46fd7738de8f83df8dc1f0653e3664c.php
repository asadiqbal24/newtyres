<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e($page_title); ?></a></li>
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
                        <button class="btn btn-success">Print</button>                        
                        <div class="row">
                            
                            <div class="col-md-2">
                                <label>From</label>
                                <input type="date" name="from" class="form-control" placeholder="From">
                            </div>
                            <div class="col-md-2">
                                <label>To</label>
                                <input type="date" name="to" class="form-control" placeholder="To">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" value="<?php echo e(date('Y-m-d')); ?>">Today</button>
                            </div>
                            <div class="col-md-2">
                                <label>Date Range</label>                                
                                <select name="created_type" class="form-control show-tick">
                                    <option></option>
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

                            <div class="col-md-2">
                                <label>By: </label>                                                                    
                                <select name="created_type" class="form-control show-tick">
                                    <optgroup>
                                        <option value="issue_date">Issue Date</option>
                                        <option value="today">Payment Date</option>
                                    </optgroup>
                                    
                                    
                                
                                    
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label>Color Theme: </label>                                                                    
                                <select name="created_type" class="form-control show-tick">
                                    <optgroup>
                                        <option value="beige">Beige</option>
                                    </optgroup>
                                                                        
                                </select>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-3 col-lg-3">

                        <div class="row clearfix">
                        <div class="col-md-12">
                                <label>Net or Gross</label>                                                                    
                                <select name="net_or_gross" class="form-control show-tick">
                                    <optgroup>
                                        <option value="gross">Gross</option>
                                        <option value="net">Net</option>                                        
                                    </optgroup>
                                                                        
                                </select>

                            </div>
                        </div>

                         <div class="row clearfix mt-2">
                            <div class="col-md-12">
                                <label><strong>Sales Grouped by Date</strong></label>
                                <label>Department Filter</label>                                                                    
                                <select name="department_fitler" class="form-control show-tick">
                                    <optgroup>

                                    </optgroup>
                                                                        
                                </select>

                            </div> 
                            </div>        


                         <div class="row clearfix mt-2">
                            <div class="col-md-7">
                                <button class="btn btn-primary btn-block">Total Sales</button>
                            </div>

                            <div class="col-md-5">
                                <button class="btn btn-primary btn-block">Split</button>
                            </div> 

                             <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Mot Sales</button>
                            </div>                            
                            <hr style="width: 100%">
                        </div>

                        <div class="row clearfix mt-2">
                            <label>Sales Grouped By:</label>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Department</button>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Referall</button>
                            </div> 

                             <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Vehicle</button>
                            </div>

                            <div class="col-md-7">
                                <button class="btn btn-primary btn-block">Sales Person</button>
                            </div>

                            <div class="col-md-5">
                                <button class="btn btn-primary btn-block">Split</button>
                            </div>

                             <div class="col-md-7">
                                <button class="btn btn-primary btn-block">QC Technician</button>
                            </div>

                            <div class="col-md-5">
                                <button class="btn btn-primary btn-block">Split</button>
                            </div>

                             <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Mot Sales By Tester</button>
                            </div>


                            <hr style="width: 100%">
                        </div>




                        <div class="row clearfix mt-2">
                            <label>Count By:</label>
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Referrals Invoiced</button>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Vehicles Invoiced</button>
                            </div> 

                             <div class="col-md-12">
                                <button class="btn btn-primary btn-block">Repeat vs New Customers</button>
                            </div>


                            <hr style="width: 100%">
                        </div>


                    </div>

                    <div class="col-sm-12 col-md-9 col-lg-9" style="border-left: 1px solid grey">

                            <div class="col-md-12" style="text-align: center;margin-top: 35px">
                                <p style="margin: 0px;">Choose a range and data set to display charts</p>
                                <br>
                                <p style="margin: 0px;">For some charts, the format will depend on the date range chosen</p>                                
                                <br>
                                <p style="margin: 0px;">i.e. Total Sales over 10 years will show year by year comparison</p>                                                                
                                <br>

                                <p style="margin: 0px;">whereas Total Sales over 2 years will show a side by side comparison</p>
                                                            </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>