<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>
                                            <?php $i=1
                                            ?>
                                            <?php $__currentLoopData = $adivsory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                              <td><?php echo e($i++); ?></td>
                                              <td><?php echo e($a->description); ?></td>
                                              <td><a href="<?php echo e(route('admin-adivsory-edit',['id'=>$a->id])); ?>" class="btn btn-success">Edit</a></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            
                                            
                                       </table>

</div>

</div>

  