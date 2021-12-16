<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}
</style>
<link href="<?php echo e(asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css')); ?>" rel="stylesheet" />
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
    <form method="post" action="<?php echo e(route('admin-labour-rate-save')); ?>">
      <?php echo e(csrf_field()); ?>


      <?php if(isset($labour)): ?>
      <input type="hidden" name="id" value="<?php echo e($labour->id); ?>">
      <?php endif; ?>
    
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-danger">Close</a>
             <button class="btn btn-success">Save</button>
            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Default Labour Rate</label>
                  <input type="text" value="<?php echo e(isset($labour)?$labour->labur_rate:''); ?>" name="labur_rate" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>



              <div class="col-md-4 input-group">
                
                  <div class="demo-checkbox">
                  <input type="checkbox" name="default_part_rate" value="1" id="md_checkbox_parts_markup" class="chk-col-red"  <?php if(isset($labour)?$labour->default_part_rate:''): ?> checked <?php endif; ?>>
                  <label for="md_checkbox_parts_markup">Default Parts Markup Apply:</label>
                </div>
              
              </div>


              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Default Parts Markup / Margin Percentage</label>
                  <input type="text" value="<?php echo e(isset($labour)?$labour->parts_markup:''); ?>" name="parts_markup" class="form-control">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>



              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Parts Markup Method</label>
                  <select class="form-control show-tick" name="parts_markup_method">
                 

                     

                      <option value="Markup" <?php echo e((isset($labour->parts_markup_method)&& $labour->parts_markup_method=='Markup')?'selected':''); ?> >Markup</option>
                      <option value="Margin" <?php echo e((isset($labour->parts_markup_method)&& $labour->parts_markup_method=='Margin')?'selected':''); ?>>Margin</option>   
                                     
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


                <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Parts Markup Calculated Using</label>
                  <select class="form-control show-tick" name="parts_markup_calculated">
                     
                      <option value="Net" <?php echo e((isset($labour->parts_markup_calculated)&& $labour->parts_markup_calculated=='Net')?'selected':''); ?> >Net</option>
                      <option value="Gross" <?php echo e((isset($labour->Gross)&& $labour->Gross=='Net')?'selected':''); ?> >Gross</option>  
                                
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <hr style="width: 100%">
        </div>

        </form>


        <div class="row">
            <div class="col-md-12">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.>
            </div>
        </div>
      </div>
    </div>
    
    
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<script src="<?php echo e(asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/forms/advanced-form-elements.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>