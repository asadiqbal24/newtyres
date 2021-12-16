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
      <div class="card-body">
        <div class="row">
          
          <div class="col-md-2">
            <input type="text" name="account_search" class="form-control" placeholder="Account Search">
          </div>
          <div class="col-md-2">
            <button class="btn btn-info"><i class="zmdi zmdi-search"></i></button>
            <button class="btn btn-info"><i class="zmdi zmdi-close"></i></button>
          </div>
          <div class="col-md-8">
            <a href="<?php echo e(route('admin.add.new.customer')); ?>" class="btn btn-success">New Customer</a>
            <a href="#" class="btn btn-success">Outstanding</a>

      <div class="btn-group" role="group">
          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-success waves-effect dropdown-toggle" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"> Statements (All) <span class="caret"></span> </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
            <li>
              <div class="col-md-12 input-group">
                                <div class="form-line">
                                    <label>Month Ending:</label>
                                    <input type="month" name="month" required class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
            </li>
            <li>
              
              <div class="col-md-12 input-group">
                                <div class="form-line">
                                    <label>Display:</label>
                                    <select class="form-control show-tick" name="display">
                                        <option>List all outstandings</option>
                                        <option>List within month only</option>                                        
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

            </li>
            <li>
              
              <div class="col-md-12">
                  <button class="btn  btn-raised bg-grey waves-effect btn-block">Batch Print</button>
              </div>

            </li>

          </ul>
        </div>

            <a href="#" class="btn btn-success">Print</a>
          </div>
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
    
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Acc Number</th>
                <th>Name</th>
                <th>Credit Limit</th>
                <th>To Allocate</th>
                <th>Balance</th>
                <th>Last Inv</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(isset($c->customer)?$c->customer->account_number:''); ?></td>
                <td><?php echo e(isset($c->customer)?$c->customer->company:''); ?></td>
                <td><?php echo e($c->credit_limit); ?></td>
                <td>00.00</td>
                <td>00.00</td>
                <td>00.00</td>
                <td><a href="<?php echo e(route('admin-manage-receipt-new',['id'=>$c->customer_id])); ?>" class="btn btn-primary"> Manage Receipt </a><a href="" class="btn btn-primary"> Statement </a><a href="" class="btn btn-primary">Edit</a>
                  <a href="<?php echo e(route('admin-unpaid-account-manager-delete',['id'=>$c->id])); ?>" class="btn btn-danger">Delete</a></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    
    
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>