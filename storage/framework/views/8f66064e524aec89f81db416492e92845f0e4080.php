<style type="text/css">
    
    .dashboard_btn{
/*    height: 100px;
    width: 100px;
    font-size: 1vw;*/
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                    </ul>
                </div>            
            </div>
        </div>
        
        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <ul>
                    <li><?php echo \Session::get('success'); ?></li>
                </ul>
            </div>
        <?php endif; ?>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                
                 <?php echo $__env->make('partials.adminMenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>
        </div>

                
                
        
                
                
               
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>