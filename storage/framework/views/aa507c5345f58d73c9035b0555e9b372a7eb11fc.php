<style type="text/css">
    .alpha_pad {
        padding-left: 5px !important;
        padding-right: 5px !important;
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
                        <button class="btn btn-danger">Close</button>

                        <a href="<?php echo e(route('admin-new-predefined')); ?>" class="btn btn-success">New Job</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Categories</th>
                                            <th>Job Code</th>
                                            <th>Descriptions</th>
                                            <th>Lab#</th>
                                            <th>Lab Sub</th>
                                            <th>Part#</th>
                                            <th>Part Sub</th>
                                            <th>Sub Total</th>
                                            <th>Action</th>
                                        </tr>
                                       

                                    </thead>
                                    <tbody>
                                        <?php $i=1
                                        ?>
                                         <?php $__currentLoopData = $job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                             <td><?php echo e($i++); ?></td>
                                             <td><?php echo e($j->category); ?></td>
                                              <td><?php echo e($j->job_code); ?></td>
                                              <td><?php echo e($j->description); ?></td>
                                              <td>0</td>
                                               <td>0</td>
                                                <td>0</td>
                                                 <td>0</td>
                                                  <td>0</td>
                                                  <td><a href="<?php echo e(route('admin-edit-predefined',['id'=>$j->id])); ?>" class="btn btn-success">Edit</a>
                                                  <a href="<?php echo e(route('admin-predefined-delete',['id'=>$j->id])); ?>" class="btn btn-danger">Delete</a> </td>
                                         </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> 



<?php $__env->startSection('jsOutside'); ?> <?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>