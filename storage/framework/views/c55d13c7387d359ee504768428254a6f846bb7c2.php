<?php $__env->startSection('content'); ?>
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
    <form method="post" action="<?php echo e(route('admin-cash-drawer-save')); ?>">
      <?php echo e(csrf_field()); ?>

      <?php if(isset($cashdrawer)): ?>
      <input type="hidden" name="id" value="<?php echo e($cashdrawer->id); ?>">
      <?php endif; ?>
      <div class="card">
        <div class="card-body">
          
          <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <!-- Nav tabs -->
              <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</a>
              <button type="submit" class="btn btn-primary">Save</button>
              
              
            </div>
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12" style="margin-top:50px;    margin-left: 47px;">
                  <input type="checkbox" id="enable_opening" class="filled-in" name="enable_opening"
                  <?php if(isset($cashdrawer)?$cashdrawer->enable_opening:''): ?> checked <?php endif; ?>>
                  <label for="enable_opening" style="padding-left: 235px!important;font-size: 15px;color: white;">Enable Till Opening </label>
                </div>
                
              </div>
              <div class="row" style="
                margin-top: 15px;">
                <div class="col-lg-4">
                  <label style="color:#fff;padding-left: 46px;">Port Mode </label>
                </div>
                <div class="col-lg-4">
                  <input type="text" name="port_mode" value="<?php echo e(isset($cashdrawer)?$cashdrawer->port_mode:''); ?>" style="border-color: #747474;border: 1px solid;
                  height: 24px !important;" class="form-control">
                </div>
              </div>
              <div class="row" style="margin-top:20px;">
                <div class="col-lg-4">
                  <label style="color:#fff;padding-left: 46px;">Open Command </label>
                </div>
                <div class="col-lg-4">
                  <input type="text" name="open_command" value="<?php echo e(isset($cashdrawer)?$cashdrawer->open_command:''); ?>" style="border-color: #747474;border: 1px solid;
                  height: 24px !important;" class="form-control">
                </div>
              </div>
              <hr style="width:100%;">
              <div class="row">
                <div class="col-lg-12">
                  <label style="    margin-left: 46px;
                  font-size: 15px;">Notes</label>
                  <p style="    margin-left: 50px;
                    text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </form>
    
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>