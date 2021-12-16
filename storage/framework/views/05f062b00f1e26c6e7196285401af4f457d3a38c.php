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
                        <button class="btn btn-success">Sales Nominals</button>
                        <button class="btn btn-success">Expense Nominals</button>
                        <button class="btn btn-success">Payment Nominals</button>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="<?php echo e(route('export-sales')); ?>" class="btn btn-info btn-block">
                                Export Sales<br><small>to current date</small>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="<?php echo e(route('export-expense')); ?>" class="btn btn-info btn-block">
                                Export Expenses<br><small>to current date</small>
                                </a>
                            </div>
                            <hr style="width: 100%">
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <label>Month Ending</label>
                                <input type="month" name="month_ending" value="<?php echo e(date('Y-m',strtotime('2020-04'))); ?>" class="form-control">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="<?php echo e(route('export-sales')); ?>" class="btn btn-info btn-block">
                                Export Sales<br><small>to month end</small>
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <a href="<?php echo e(route('export-expense')); ?>" class="btn btn-info btn-block">
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
                        </div>
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


                    <div class="col-md-8 col-lg-8 col-sm-12">


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
                <?php echo $__env->make('admin.accounts.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="info_notes">
                <?php echo $__env->make('admin.accounts.sales_export', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="rates">
                <?php echo $__env->make('admin.accounts.expense_exports', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
              <div role="tabpanel" class="tab-pane animated flipInX" id="privacy">
                <?php echo $__env->make('admin.accounts.settings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
              
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