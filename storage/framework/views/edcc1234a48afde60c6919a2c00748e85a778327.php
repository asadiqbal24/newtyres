<div class="row clearfix">
                            <div class="col-sm-12 col-md-12 col-lg-12"> 
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#issued_animation">Description</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#other_docs">Labour</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#appoinment">Parts</a></li> 
                                     <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#vehicles">Advisiores</a></li>
                                                                        
                                </ul>
                                
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane animated flipInX active" id="issued_animation">
                                        <?php echo $__env->make('admin.predefinedjob.description', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="other_docs">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="<?php echo e(route('admin-add-labour-rates')); ?>" class="btn btn-success">Add Labour Rate</a>
                                            </div>
                                        </div>
                                        <?php echo $__env->make('admin.predefinedjob.labour', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane animated flipInX" id="appoinment">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="<?php echo e(route('admin-add-part-rates')); ?>" class="btn btn-success">Add Parts Rate</a>
                                            </div>
                                        </div>
                                        <?php echo $__env->make('admin.predefinedjob.part', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated flipInX" id="vehicles">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a href="<?php echo e(route('admin-add-advisories')); ?>" class="btn btn-success">Add Advisories</a>
                                            </div>
                                        </div>
                                        <?php echo $__env->make('admin.predefinedjob.advisories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>

                                    

                                    
                                    

                                     

                                </div>
                            </div>                           
                        </div>