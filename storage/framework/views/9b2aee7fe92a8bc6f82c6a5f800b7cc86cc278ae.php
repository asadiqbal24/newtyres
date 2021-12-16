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
    
    <div class="card">
      <div class="card-body">
        
        <div class="row clearfix">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- Nav tabs -->
            <button class="btn btn-danger">Close</button>
            <button class="btn btn-success save-form">Save</button>            
          </div>
        </div>
        
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row clearfix">
          
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form method="post" id="form" action="<?php echo e(route('admin.save-user-preferences')); ?>">
              <?php echo e(csrf_field()); ?>

            <div class="row clearfix">  
            
             <?php if(Session::has('eMessage')): ?>
              
                <div class="col-lg-12">
                    <div class="alert alert-danger">
                      <p><?php echo e(\Session::get('eMessage')); ?></p>
                    </div>
                </div>

             <?php endif; ?> 

            <div class="col-md-12 input-group">
              <div class="form-line">
                <label>Display Name</label>
                <input type="text" name="display_names" class="form-control" value="<?php echo e(Auth::user()->name); ?>">
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
            <div class="col-md-12 input-group">
              <input type="button" name="login" class="btn btn-info" value="Login Credentials" data-toggle="modal" data-backdrop="false" data-target="#login_credentials">
            </div>
            <hr style="width: 100%">
          </div>
          <div class="row clearfix">

                            <div class="col-md-6 input-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="home_screen" required>
                                        <option value="<?php echo e(NULL); ?>">Home Screen</option>
                                        <option value="calender">Calender</option>
                                        <option value="calender_list">Calender List</option>
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>            


                              <div class="col-md-6 input-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="interface_scaling" required>
                                        <option value="<?php echo e(NULL); ?>">Interface Scaling</option>
                                        <option value="50%">50%</option>
                                        <option value="75%">75%</option>
                                        <option value="100%">100%</option>
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
            </div>
            

            <div class="row clearfix">
            <div class="col-md-6 input-group">
              <label>Color Scheme</label>
              <div class="input-group colorpicker icon after_span">
                <div class="form-line">
                  <input type="text" class="form-control" name="color_scheme" value="#00AABB">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
            </div>
            
            <div class="col-md-6 input-group">
              <label>Highlight Account Docs & Customers</label>
              <div class="col-md-12 form-line">
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_1" name="highligt_doc" value="1" />
                  <label for="basic_checkbox_1">Yes</label>
                </div>
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_2" name="highligt_doc" value="0" checked />
                  <label for="basic_checkbox_2">No</label>
                </div>
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
            <div class="col-md-6 input-group">
              <label>Full Width Status Colors</label>
              <div class="col-md-12 form-line">
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_3" name="full_width_colors" value="1" />
                  <label for="basic_checkbox_3">Yes</label>
                </div>
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_4" name="full_width_colors" value="0" checked />
                  <label for="basic_checkbox_4">No</label>
                </div>
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
            <div class="col-md-6 input-group">
              <label>Show Archives Extra Info</label>
              <div class="col-md-12 form-line">
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_5" name="archives_info" value="1" checked />
                  <label for="basic_checkbox_5">Yes</label>
                </div>
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_6" name="archives_info" value="0" />
                  <label for="basic_checkbox_6">No</label>
                </div>
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
            <div class="col-md-6 input-group">
              <label>Show Predefined Job Category Side Menu</label>
              <div class="col-md-12 form-line">
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_7" name="show_predefined" value="1" checked />
                  <label for="basic_checkbox_7">Yes</label>
                </div>
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_8" name="show_predefined" value="0" />
                  <label for="basic_checkbox_8">No</label>
                </div>
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
            <div class="col-md-6 input-group">
              <label>Show Stock Category Side Menu</label>
              <div class="col-md-12 form-line">
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_7" name="show_stock_category" value="1" checked />
                  <label for="basic_checkbox_7">Yes</label>
                </div>
                <div class="demo-checkbox" style="display: inline;">
                  <input type="radio" id="basic_checkbox_8" name="show_stock_category" value="0" />
                  <label for="basic_checkbox_8">No</label>
                </div>
              </div>
              <span class="input-group-addon"> <i></i> </span>
            </div>
          </div>
        </form>


            <div id="login_credentials" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content" style="background-color:cadetblue !important">
                    <div class="modal-header">
                      <h4 class="modal-title">Authentication</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                      <form method="post" action="<?php echo e(route('admin.save-authentication')); ?>" id="authentication_form">
                        <?php echo e(csrf_field()); ?>

                      <div class="row">
                        <div class="col-lg-12">
                          <p>Please specify a email and passcode to login with</p>
                        </div>

                        <div class="col-lg-12">
                          <p>You can also set a hint to help you remember the passcode if required</p>
                        </div>  

                            <div class="col-md-12 input-group">
                              <label class="text-white">Email</label>
                              <div class="input-group colorpicker icon after_span">
                                <div class="form-line">
                                  <input type="email" class="form-control" name="email" required value="<?php echo e(Auth::user()->email); ?>">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                              </div>
                            </div>

                             <div class="col-md-12 input-group">
                              <label class="text-white">Passcode (4 digits min)</label>
                              <div class="input-group colorpicker icon after_span">
                                <div class="form-line">
                                  <input type="password" class="form-control" name="password" required>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                              </div>
                            </div>                        

                             <div class="col-md-12 input-group">
                              <label class="text-white">Hint</label>
                              <div class="input-group colorpicker icon after_span">
                                <div class="form-line">
                                  <input type="text" class="form-control" name="hint">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                              </div>
                            </div>                        
                        </div>
                    </form>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success" id="authentication_form_submit"  style="margin-left:5px;">Save</button>                      
                    </div>
                  </div>

                </div>
              </div>


          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </div>
    







    
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<script src="<?php echo e(asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/forms/advanced-form-elements.js')); ?>"></script>
<script type="text/javascript">
    $('.save-form').click(function(){

        $('#form').submit();

    });

    $('#authentication_form_submit').click(function(){

        $('#authentication_form').submit();

    });




</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>