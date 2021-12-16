<?php $__env->startSection('content'); ?>
<?php $__env->startSection('archives','active_tab'); ?>
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
                <div class="row">
                    
                    <div class="col-md-2">
                        <input type="text" name="account_search" class="form-control" placeholder="Account Search">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
                    </div>
                    <div class="col-md-8">
                        <a href="#" class="btn btn-success btn-xs">All</a>
                        <a href="#" class="btn btn-success btn-xs">Invoices</a>
                        <a href="#" class="btn btn-success btn-xs">Job Sheets</a>
                        <a href="#" class="btn btn-success btn-xs">Estimates</a>
                        <a href="#" class="btn btn-success btn-xs">Credit Notes</a>
                        <a href="#" class="btn btn-success btn-xs">Outstanding</a>
                        <a href="#" class="btn btn-success btn-xs">Print</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
                <div class="card-body">
                    


        <form method="get" action="<?php echo e(route('admin.invoices')); ?>">
          <div class="row">
            <div class="col-md-2">
              <select name="created_type" class="form-control show-tick">
                <option <?php if(isset($requestData) && $requestData->created_type=='created') echo 'selected'; ?> value="created">Created</option>
                <option <?php if(isset($requestData) && $requestData->created_type=='due') echo 'selected'; ?> value="due">Due</option>
                
              </select>
            </div>
            <div class="col-md-2">
              <input type="date" name="from" value="<?php echo e(isset($requestData)?$requestData->from:''); ?>" class="form-control" placeholder="From">
            </div>
            <div class="col-md-2">
              <input type="date" name="to" value="<?php echo e(isset($requestData)?$requestData->to:''); ?>" class="form-control" placeholder="To">
            </div>
            <div class="col-md-2">
              <?php if(isset($requestData->today)): ?>
                <p><?php echo e($requestData->today); ?></p>
              <?php endif; ?>
              <button class="btn btn-info today" type="button" name="today" value="<?php echo e(date('Y-m-d')); ?>">Today</button>
            </div>
            <div class="col-md-2">
              <select name="custom_date_range" class="form-control show-tick">
                <option value="<?php echo e(NULL); ?>">Date Range</option>
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
        <div class="card">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>