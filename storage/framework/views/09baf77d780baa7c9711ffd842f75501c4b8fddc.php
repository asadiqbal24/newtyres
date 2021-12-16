<?php $__env->startSection('content'); ?>
<?php $__env->startSection('unpaid','active_tab'); ?>
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
        
        <div class="row clearfix">
            <div class="col-md-12">
                <a href="<?php echo e(route('admin.unpaid.account.manager')); ?>" class="btn btn-success">Account Manager</a>
                <a href="" class="btn btn-success">Archive</a>
                <a href="" class="btn btn-success">Print</a>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-bordered">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Doc No</th>
                                        <th>Issue Date</th>
                                        <th>Registration</th>
                                        <th>Make & Model</th>
                                        <th>Customer</th>
                                        <th>Total</th>
                                        <th>Outstanding</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    





        <div class="col-md-3">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Reminders
                  <span style="float: right" class="open_right_divs" data-div="reminders"><i class="zmdi zmdi-caret-down-circle"></i></span>
                </div>
                <div class="card-body" style="display: none;" id="reminders_div">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <td width="100%">Due</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Errors</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Failed</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Expired</td>
                      <td width="100%"> </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>



            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Stock Order Info
                  <span style="float: right" class="open_right_divs" data-div="stock_order_info"><i class="zmdi zmdi-caret-down-circle"></i></span>                  
                </div>
                <div class="card-body" style="display: none;" id="stock_order_info_div">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <td width="100%">Due</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Errors</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Failed</td>
                      <td width="100%"> </td>
                    </tr>

                    <tr>
                      <td width="100%">Expired</td>
                      <td width="100%"> </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-12">
                <?php echo $__env->make('partials.global_notes', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>                
            </div>

          </div>
        </div>
        
        
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>