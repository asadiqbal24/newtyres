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

        <div class="row">
          <div class="col-md-12">
            <a href="<?php echo e(route('admin-work-description')); ?>" class="btn btn-success">Add Work Description</a>
          </div>
        </div>

      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                
                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                
                <th>Name</th>
                <th>Description</th>
                
                <th style="width:20%;"><input type="checkbox" name="">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1
              ?>
              <?php $__currentLoopData = $work; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($w->name); ?></td>
                <td><?php echo e($w->description); ?></td>
                <td>
                 
                  <a href="<?php echo e(route('admin-work-description-edit',['id'=>$w->id])); ?>" class="btn btn-success">Edit</a>
             <a href="<?php echo e(route('admin-work-description-delete',['id'=>$w->id])); ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
            </tbody>
            
          </table>
        </div>
      </div>



    </div>
  </section>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>