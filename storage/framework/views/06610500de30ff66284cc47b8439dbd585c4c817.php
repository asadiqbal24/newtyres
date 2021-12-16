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
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#home_animation_1">Close</a></li>
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sales_animation_1">Sales</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#expense_animation_1">Expense</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#stock_animation_1">Stock</a></li>
                        </ul>
                        <div class="row">
                            <div class="col-md-2">
                                <select name="created_type" class="form-control show-tick">
                                    <option value="created">Created</option>
                                    <option value="due">Due</option>
                                    
                                </select>
                            </div>
                            <div class="col-md-2" style="margin-top: 20px;">
                                <input type="date" name="from" class="form-control" placeholder="From">
                            </div>
                            <div class="col-md-2" style="margin-top: 20px;">
                                <input type="date" name="to" class="form-control" placeholder="To">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info" value="<?php echo e(date('Y-m-d')); ?>">Today</button>
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
                
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Nav tabs -->
                        
                        
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane animated flipInX active" id="sales_animation_1"> <b>Sales</b>
                                <p><?php echo $__env->make('admin.business.sales_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="expense_animation_1"> <b>Expense</b>
                                <p><?php echo $__env->make('admin.business.expense_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></p>
                            </div>
                            <div role="tabpanel" class="tab-pane animated flipInX" id="stock_animation_1"> <b>Stock</b>
                                <p><?php echo $__env->make('admin.business.stock_tab', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></p>
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