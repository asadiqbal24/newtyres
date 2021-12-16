<div class="row">


<div class="col-md-12">

<table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th width="5%"><i class="material-icons">arrow_downward</i></th>
                                                <th>Decription</th>
                                                <th>Name</th>
                                                <th>Cost</th>
                                                <th>Qty</th>
                                                <th>Unit Price</th>
                                                
                                                <th>Vat</th>
                                                <th>Subtotal</th>
                                                <th><input type="checkbox" name="">Action</th>
                                              </tr>
                                            </thead>

                                            <tbody>
                                              <?php
                                              $i=1
                                              ?>
                                              <?php $__currentLoopData = $part; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <tr>
                                                <td></td>
                                                <td><?php echo e($i++); ?></td>
                                                <td><?php echo e($p->part_name); ?></td>
                                                  <td><?php echo e($p->description); ?></td>
                                                    <td><?php echo e($p->cost); ?></td>
                                                    <td><?php echo e($p->qty); ?></td>
                                                    <td><?php echo e($p->unit_price); ?></td>
                                                    <td><?php echo e($p->vat); ?></td>
                                                    <td><?php echo e($p->total); ?></td>
                                                    <td><a href="<?php echo e(route('admin-part-edit',['id'=>$p->id])); ?>" class="btn btn-success">Edit</a>
                                                      <a href="<?php echo e(route('admin-part-delete',['id'=>$p->id])); ?>" class="btn btn-danger">Delete</a></td>
                                              </tr>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                            </tbody>
                                            
                                       </table>

</div>

</div>

