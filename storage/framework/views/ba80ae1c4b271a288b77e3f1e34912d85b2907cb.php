<style type="text/css">
  .alpha_pad{
    padding-left: 5px !important;
    padding-right:5px !important;
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
                <div class="card-body row">

              <div class="col-md-2">
            <input type="text" name="account_search" class="form-control" placeholder="Account Search">
              </div>
              <div class="col-md-2">
                <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
                <button class="btn btn-info"><i class="zmdi zmdi-close"></i></button>
              </div>
            <div class="col-md-8">
                <a href="<?php echo e(route('admin.add.new.customer')); ?>" class="btn btn-success">New Customer</a>
                <a href="<?php echo e(route('admin.advanced_search')); ?>" class="btn btn-success">Oustanding</a>
                <a href="<?php echo e(route('admin.advanced_search')); ?>" class="btn btn-success">Statements (ALL)</a>                
                <a href="" class="btn btn-success">Print</a>

            </div>



        </div>
        </div>
            


            <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class="btn btn-primary btn-xs alpha_pad">A</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">B</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">C</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">D</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">E</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">F</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">G</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">H</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">I</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">J</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">K</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">L</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">M</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">N</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">O</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">P</a>                                                
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Q</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">R</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">S</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">T</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">U</a>   
           <a href="#" class="btn btn-primary btn-xs alpha_pad">V</a>   
           <a href="#" class="btn btn-primary btn-xs alpha_pad">W</a>             
            <a href="#" class="btn btn-primary btn-xs alpha_pad">X</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Y</a>            
            <a href="#" class="btn btn-primary btn-xs alpha_pad">Z</a>            

          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="copyModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="get" action="<?php echo e(route('admin.save-starting-no',['type'=>'estimate'])); ?>">
            <?php echo e(csrf_field()); ?>                
            <input type="hidden" name="selected_id" id="selected_id">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Starting Document No</h4>
            </div>
            <div class="modal-body"> 

                          <div class="col-lg-12 col-sm-12 col-md-12 input-group">
                            <div class="form-line">             
                                <label class="col-md-12">Starting No</label>
                                <input type="number" class="form-control" name="starting_from" id="starting_from">
                            </div>
                            <span class="input-group-addon"> <i></i> </span>
                            </div> 

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
        </div>
    </div>
</div>


        <div class="card">
            <div class="card-body">
                <div class="row">
                    <table class="table table-bordered">
                          
                          <thead>
                              <tr>
                                  <th>Acc Number</th>
                                  <th>Name</th>
                                  
                                  <th>Credit Limit</th>
                                  <th>Tot Allocate</th>
                                  <th>Tot Docs</th>
                                  <th>Last Inc</th>
                                  <th></th>
                                
                              </tr>
                          </thead>  
                          <tbody>
                            <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($i->customer->account_number); ?></td>
                                  <td><?php echo e($i->customer->company); ?></td>
                                  <td><?php echo e($i->credit_limit); ?></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td><a href="<?php echo e(route('admin-manage-receipt-new',['id'=>$i->customer_id])); ?>" class="btn btn-primary"> Manage Receipt </a><a href="" class="btn btn-primary"> Statement </a><a href="<?php echo e(route('admin-customer-edit',['id'=>$i->customer_id])); ?>" class="btn btn-primary">Edit</a></td>
                                  
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>

                    </table>
                    <?php echo e($invoice->links()); ?>

                </div>
            </div>
        </div>
        
        
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>