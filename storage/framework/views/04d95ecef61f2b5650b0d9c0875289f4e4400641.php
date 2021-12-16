                        <ul class="sc-kxynE hVvTOh main-site-menu-items">

                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                           <li><a class="topMenu" href="<?php echo e(route('search')); ?>" style="color: white"><?php echo e($cat->name); ?><i class="sc-caSCKo sc-LKuAh eaWStw"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8"><path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path></svg></i></a>
                     <ul>
                        <?php $__currentLoopData = $cat->category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <?php if($ct->url_page==1): ?>

                          <?php $url = url('page',['slug'=>$ct->url]); ?>


                        <?php else: ?>

                         <?php $url = url($ct->url); ?>

                        <?php endif; ?>

                            <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="<?php echo e($url); ?>"><?php echo e($ct->name); ?></a>
                                          
                          <?php $__currentLoopData = $ct->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <ul>
                                   <?php if($subcat->url_page==1): ?>
                                    <?php $url = url('page',['slug'=>$subcat->url]); ?>

                                  <?php else: ?>
                                   <?php $url = url($subcat->url); ?>

                                  <?php endif; ?>

                                    <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="<?php echo e($url); ?>"><?php echo e($subcat->name); ?></a>                                                
                                    </li>
                                </ul>

                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            </ul>

                           </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                     