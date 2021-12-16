<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>Unit Price</th>
                                                
                                                <th>Vat</th>
                                                <th>Subtotal</th>
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <?php $i=1
                                              ?>
                                              <?php $__currentLoopData = $labour; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <tr>
                                                <td></td>
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($l->description); ?></td>
                                                <td><?php echo e($l->name); ?></td>
                                                <td><?php echo e($l->qty); ?></td>
                                                <td><?php echo e($l->unit_price); ?></td>
                                                <td><?php echo e($l->vat); ?></td>
                                                <td><?php echo e($l->subtotal); ?></td>
                                                <td><a href="<?php echo e(route('admin-labour-edit',['id'=>$l->id])); ?>" class="btn btn-success">Open</a>
                                                  <a href="<?php echo e(route('admin-labour-delete',['id'=>$l->id])); ?>" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                       </table>

</div>

</div>

