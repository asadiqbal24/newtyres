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
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</a>
            <a href="<?php echo e(route('admin-add-new-payment')); ?>" class="btn btn-success" >Add New Payment Method</a>
            
          </div>
        </div>
        
      </div>
    </div>









  <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          
          <div class="col-md-12">
            <table class="table table-bordered table-hovered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Group Type</th>
                   <th>Name</th>
                    <th>Bank Nominal</th>
                    <th>Active</th>
                    <th>Surcharge Applicable</th>
                    <th>Action</th>
                </tr>
              </thead>

              <tbody>
                <?php $i=1
                ?>
                <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($i++); ?></td>
                  <td><?php echo e($p->group_type); ?></td>
                   <td><?php echo e($p->name); ?></td>
                    <td><?php echo e($p->bank_nominal); ?></td>
                    <td><?php echo e($p->active); ?></td>
                    <td><?php echo e($p->surcharge_applicable); ?></td>
                    <td><a href="<?php echo e(route('admin-payment-edit',['id'=>$p->id])); ?>" class="btn btn-success">Edit</a><a href="<?php echo e(route('admin-payment-delete',['id'=>$p->id])); ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
             
            </table>
          </div>
</div>
</div>
</div>

















  	</div>
  </section>





  <?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>