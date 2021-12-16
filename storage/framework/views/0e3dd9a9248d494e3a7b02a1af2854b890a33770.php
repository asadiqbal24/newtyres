<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <a href="#" class="btn btn-success save-form">Save</a>
                <a href="" class="btn btn-success">Print</a>
                <a href="" class="btn btn-success">Email</a>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> Extras <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="javascript:void(0);">Print Preview</a></li>
                        <li><a href="javascript:void(0);">Print Advisories</a></li>
                        <li><a href="javascript:void(0);">Save To PDF</a></li>
                        <li><a href="javascript:void(0);">Print Job Sheet</a></li>
                        <li><a href="javascript:void(0);">Print Checklist</a></li>
                    </ul>
                </div>
                <div class="btn-group" role="group">
                    <button id="btnGroupVerticalDrop1" type="button" class="btn bg-teal waves-effect dropdown-toggle" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"> Convert <span class="caret"></span> </button>
                    <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                        <li><a href="javascript:void(0);">Convert to JobSheet</a></li>
                        <li><a href="javascript:void(0);">Convert To Invoice</a></li>
                        <li><a href="javascript:void(0);">Copy To Appointment</a></li>
                    </ul>
                </div>
                <a href="" class="btn btn-danger float-right">Delete</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                    
                <div class="card">
                    <div class="card-body">
                            

                <form method="post" action="<?php echo e(route('admin.save.new.estimate')); ?>" id="estmate_form">
                 <?php echo e(csrf_field()); ?>   

                 <?php if(isset($estimate)): ?>

                    <input type="hidden" name="id" value="<?php echo e($estimate->id); ?>">
                    <input type="hidden" name="update" value="update">

                 <?php endif; ?>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 input-group">
                                <div class="form-line">
                                    <label>Registration test</label>
                                    <input type="text" name="registration_no" value="<?php echo e(isset($estimate)?$estimate->registration_no:''); ?>" required class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default waves-effect"><i class="zmdi zmdi-search"></i></button>
                                    <button type="button" class="btn btn-default waves-effect ml-1">VRM Lookup</button>
                                    
                                </div>
                            </div>
                        </div>
                        <?php if(isset($estimate->model)): ?>
                            <?php $model = unserialize($estimate->model); ?>
                        <?php else: ?>
                            <?php $model = [] ?>                            
                        <?php endif; ?>    
                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Make</label>
                                    <!-- <input type="text" name="model[]" required value="<?php echo e(isset($model[0])?$model[0]:''); ?>" class="form-control"> -->
                                    <select class="form-control show-tick get_make" name="model[]">
                                        <option value="<?php echo e(NULL); ?>">Choose</option>
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($v->id); ?>"><?php echo e($v->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Model</label>
 <!--                                    <input type="text" name="model[]" required value="<?php echo e(isset($model[1])?$model[1]:''); ?>" class="form-control"> -->

                                    <select id="models_list" class="form-control show-tick" name="model[]">

                                    </select>



                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Derivative</label>
                                    <input type="text" name="derivative" required value="<?php echo e(isset($estimate)?$estimate->derivative:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Chassis</label>
                                    <input type="text" name="chassis" required value="<?php echo e(isset($estimate)?$estimate->chassis:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engince CC</label>
                                    <input type="text" name="engine_cc" required value="<?php echo e(isset($estimate)?$estimate->engine_cc:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Fuel Type</label>
                                    <input type="text" name="fuel_type" required value="<?php echo e(isset($estimate)?$estimate->fuel_type:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                              <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engice Code</label>
                                    <input type="text" name="engine_code" required value="<?php echo e(isset($estimate)?$estimate->engine_code:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Engine Number</label>
                                    <input type="text" name="engine_no" required value="<?php echo e(isset($estimate)?$estimate->engine_no:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Colour</label>
                                    <input type="text" name="color" required value="<?php echo e(isset($estimate)?$estimate->color:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Paint Code</label>
                                    <input type="text" name="paint_code" required value="<?php echo e(isset($estimate)?$estimate->paint_code:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Key Code</label>
                                    <input type="text" name="key_code" required value="<?php echo e(isset($estimate)?$estimate->key_code:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Radio Code</label>
                                    <input type="text" name="radio_code" required value="<?php echo e(isset($estimate)?$estimate->radio_code:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Mileage</label>
                                    <input type="text" name="mileage" required value="<?php echo e(isset($estimate)?$estimate->mileage:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Date Reg</label>
                                    <input type="date" name="date_reg" required value="<?php echo e(isset($estimate)?$estimate->date_reg:''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-xs btn-info">MOT Check</button>
                                <button class="btn btn-xs btn-danger">Technical Data</button>
                                <button class="btn btn-xs btn-default">VRM Transfer</button>
                                <button class="btn btn-xs btn-default"><i class="material-icons">attach_file</i> </button>
                                <button class="btn btn-xs btn-default">More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Acc Number</label>
                                    <input type="text" name="acc_number" id="acc_number" required value="<?php echo e(isset($estimate)?$estimate->acc_number:$request->account_number??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-2">
                                
                                <div class="btn-group" role="group">
                                    <button type="button" id="account_search" class="btn btn-default waves-effect"><i class="zmdi zmdi-search"></i></button>
                                </div>
                            </div>

                            <div class="col-md-5 input-group">
                                <div class="form-line">
                                    <label>Company</label>
                                    <input type="text" name="company" id="company" required value="<?php echo e(isset($estimate)?$estimate->company:$request->company??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                         <?php if(isset($estimate->name)): ?>
                            <?php $name = unserialize($estimate->model); ?>
                         <?php else: ?>
                            <?php $name = [] ?>                            
                         <?php endif; ?> 

                        <div class="row">
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Name</label>
                                    <input type="text" name="name[]" id="first_name" required value="<?php echo e(isset($name[0])?$name[0]:$request->first_name??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="text" name="name[]" id="middle_name"  required value="<?php echo e(isset($name[1])?$name[1]:$request->middle_name??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="text" name="name[]" id="last_name"  required value="<?php echo e(isset($name[2])?$name[2]:$request->last_name??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>House No</label>
                                    <input type="text" name="house_no" id="house_no" required value="<?php echo e(isset($estimate)?$estimate->house_no:$request->house_no??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-2 input-group">
                                <div class="form-line">
                                    <label>Post Code</label>
                                    <input type="text" name="post_code" id="postal_code" required value="<?php echo e(isset($estimate)?$estimate->post_code:$request->postcode??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-1 input-group">
                                <div class="form-line">
                                      <button class="btn btn-success btn-xs" type="button" id="find_postal_code"><i class="material-icons">search</i></button>  
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Road</label>
                                    <input type="text" name="road" id="road" required value="<?php echo e(isset($estimate)?$estimate->road:$request->road??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Locality</label>
                                    <input type="text" name="locality" id="locality" required value="<?php echo e(isset($estimate)?$estimate->locality:$request->locality??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Town</label>
                                    <input type="text" name="town" id="town" required value="<?php echo e(isset($estimate)?$estimate->town:$request->town??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>County</label>
                                    <input type="text" name="county" id="county" required value="<?php echo e(isset($estimate)?$estimate->county:$request->county??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>

                             <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Telephone</label>
                                    <input type="text" name="telephone" id="telephone" required value="<?php echo e(isset($estimate)?$estimate->telephone:$request->telephone??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-3 input-group">
                                <div class="form-line">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile" id="mobile" required value="<?php echo e(isset($estimate)?$estimate->mobile:$request->mobile??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-1 input-group">
                            <?php if(isset($estimate)): ?>
                                <?php if($estimate->is_email=='on'): ?>
                                    <?php $checked = 'checked'; ?>
                                <?php else: ?>
                                    <?php $checked = ''; ?>
                                <?php endif; ?>
                            <?php else: ?>                                    <?php $checked = 'checked'; ?>

                            <?php endif; ?>    
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in" name="is_email" <?php echo e($checked); ?> />
                            <label for="basic_checkbox_2">Email</label>

                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            <div class="col-md-11 input-group">
                                <div class="form-line">
                                    <label></label>
                                    <input type="email" name="email" id="email" required value="<?php echo e(isset($estimate)?$estimate->email:$request->email??''); ?>" class="form-control">
                                </div>
                                <span class="input-group-addon"> <i></i> </span>
                            </div>
                            
                        </div>

                        <div class="row">

                              <button class="btn btn-xs btn-info"><i class="material-icons">mode_edit</i></button>
                            <button class="btn btn-xs btn-danger"><i class="material-icons">mail</i></button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">message</i></button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">place</i> </button>
                            <button class="btn btn-xs btn-default">Deliver To</button>
                            <button class="btn btn-xs btn-default"><i class="material-icons">attach_file</i> </button>                            
                            <button class="btn btn-xs btn-default">More</button>                            

                        </div>
                    </div>
                </div>
                </form>
            

                    </div>
                </div>

            </div>

                                    <div class="col-lg-3">
                                        <div class="col-md-12">
                                          <div class="card">
                                            <div class="card-header">
                                              Additional Info
                                              <span style="float: right"><i class="zmdi zmdi-caret-down-circle"></i></span>
                                            </div>
                                            <div class="card-body" >
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Rec</label>                                                            
                                                    </div>
                                                    
                                                     <div class="col-md-3">
                                                        <input type="time" name="rec_time" style="display:inline;" placeholder="Time"> 
                                                                                                    
                                                     </div> 
                                                     <div class="col-md-6">
                                                         
                                                        <input type="date" name="rec_date" style="display: inline;">                                                         
                                                     </div>    
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Due</label>                                                            
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="time" name="due_time" placeholder="Time">    
                                                    </div>
                                                     <div class="col-md-7">
                                                        <input type="date" name="due_date">                                                         
                                                     </div>     
                                                </div>

                                                 <div class="row">
                                                     <div class="col-md-12">
                                                        <label>Status</label>
                                                        </div>
                                                      <div class="col-lg-12">     
                                                         <select name="status" class="show-tick">
                                                            <option value="~">~</option>
                                                            <option  value="auth-req">Auth Req</option>
                                                            <option value="complete">Complete</option>
                                                            <option value="mot">Mot</option>                                                                                 
                                                            <option value="service">Service</option>
                                                            <option value="urgent">Urgent</option>
                                                          </select>                                                         
                                                    </div>
                                                 </div>

                                                    <div class="row">
                                                     <div class="col-md-12">
                                                        <label>Order Ref</label>
                                                        </div>
                                                      <div class="col-md-12">     
                                                        <input type="text" name="order_ref" style="    width: 96%;">  
                                                    </div>
                                                 </div>
                                            </div>
                                          </div>
                                        </div>                                

            </div>
        </div>
        

        <div class="card">
            <div class="card-body">
                <?php echo $__env->make('admin.estimate.tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>


<script>

 /** Search accordign to account number */
        $('#account_search').on('click', function(){
            var val = $('#acc_number').val();
            $.ajax({
                type:'GET',
                url:'<?php echo e(route("get_estimate_details")); ?>',
                data:{account:val },

                success: function( msg ) {

                    if(msg != ''){
                        $('#company').val(msg.company)
                        $('#first_name').val(msg.first_name)
                        $('#middle_name').val(msg.middle_name)
                        $('#last_name').val(msg.last_name)
                        $('#house_no').val(msg.house_no)
                        $('#postal_code').val(msg.post_code)
                        $('#road').val(msg.road)
                        $('#locality').val(msg.locality)
                        $('#town').val(msg.town)
                        $('#county').val(msg.county)
                        $('#telephone').val(msg.telephone)
                        $('#mobile').val(msg.mobile)
                        $('#email').val(msg.email)

                    }else{
                        alert("there is no detail of this account, please enter right account no");
                    }
                }
            });
        });


       /** Search according to postal code */
        $('#find_postal_code').on('click', function(){
            var val = $('#postal_code').val();
            $.ajax({
                type:'GET',
                url:'<?php echo e(route("get_estimate_details")); ?>',
                data:{val:val },

                success: function( response ) {

                    if(response != ''){

                        $('#postal_code').val(response.post_code)
                        $('#road').val(response.road)
                        $('#locality').val(response.locality)
                        $('#town').val(response.town)
                        $('#county').val(response.county)
                        $('#telephone').val(response.telephone)
                        $('#mobile').val(response.mobile)
                        $('#email').val(response.email)

                    }else{
                        alert('there is no record of this postal code!');
                    }
                }
            });
        });

</script>



<script type="text/javascript">
    $('.save-form').click(function(){

        $('#estmate_form').submit();

    });


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>