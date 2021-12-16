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
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</button>

                        <a href="#" data-backdrop="false" data-toggle="modal" data-target="#copyModal" class="btn btn-success">New</a>
                        <div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form method="get" action="<?php echo e(route('admin.doc.template.work_description_create')); ?>">
                                        <?php echo e(csrf_field()); ?>


                                        <div class="modal-body">
                                            <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                                                <div class="form-line">
                                                    <label class="col-md-12"> Name</label>
                                                    <input type="text" class="text-info" class="form-control" name="name" id="starting_from" />
                                                </div>
                                                <span class="input-group-addon"> <i></i> </span>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="form-floating">
                                                <label for="floatingTextarea2">Comments</label>
  <textarea  class="text-info" class="form-control" cols="5" rows="5" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;    width: 100%;border-color: #ced2d5;"></textarea>
  
</div>
                                        </div>

                                       

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">SAVE</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal" style="margin-left:10px;">CLOSE</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                id
                                            </th>
                                            <th>Name</th>
                                            <th>Descriptions</th>

                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($user->id); ?></th>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e($user->description); ?></td>
                                           

                                            <td>
                                                <a href="<?php echo e(route('admin.doc.template.work_description_edit',['id'=>$user->id])); ?>" type="button" class="btn btn-primary">Edit</a>
                                                <a href="<?php echo e(route('admin.doc.template.work_description_delete',['id'=>$user->id])); ?>" type="button" class="btn btn-danger">Delete</a>
                                            </td>
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
<?php $__env->stopSection(); ?> <?php $__env->startSection('jsOutside'); ?> <?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>