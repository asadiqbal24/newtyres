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
    <form method="post" action="<?php echo e(route('admin-tax-rate-update')); ?>">
      <?php echo e(csrf_field()); ?>

      <input type="hidden" name="id" value="<?php echo e($edit->id); ?>">

    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</a>
            <button class="btn btn-success" >Save</button>
            
          </div>
        </div>
        
      </div>
    </div>


    <div class="card">
      <div class="card-body">
        <div class="col-md-10">
            
            <div class="row">
              <div class="col-md-8 input-group">
                <div class="form-line">
                  <label>Tax Code</label>
                  <input type="text" value="<?php echo e($edit->tax_code); ?>"  name="tax_code" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              <div class="col-md-4">
                <button class="btn btn-success">Set As Default</button>
              </div>
              <div class="col-md-8 input-group">
                <div class="form-line">
                  <label>Description</label>
                  <input type="text" value="<?php echo e($edit->description); ?>" name="description" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Rate</label>
                  <input type="text" value="<?php echo e($edit->rate); ?>" name="rate" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

          <hr style="width: 100%">              
              </div>

              <div class="row">
          <div class="col-md-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum
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