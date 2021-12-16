
<?php if(Session::has('info')): ?>
  <div class="alert alert-info alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	<?php echo e(Session::get('info')); ?>

       <?php echo e(Session::forget('info')); ?>

  </div>
<?php elseif(Session::has('success')): ?>
  <div class="alert alert-success alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	<?php echo e(Session::get('success')); ?>

    <?php echo e(Session::forget('success')); ?>

  </div>
<?php elseif(Session::has('warning')): ?>
  <div class="alert alert-warning alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	<?php echo e(Session::get('warning')); ?>

       <?php echo e(Session::forget('warning')); ?>

  </div>
 <?php elseif(Session::has('danger')): ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
  	<?php echo e(Session::get('danger')); ?>

       <?php echo e(Session::forget('danger')); ?>

  </div>  
<?php endif; ?>
