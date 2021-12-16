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
    
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    
    <div class="card">
      <div class="card-body">
              <button id="submit_form_btn" class="btn btn-success">Save</button>
              
       <form method="post" action="<?php echo e(route('admin.save.supplier')); ?>" id="submit_form">
        <?php echo e(csrf_field()); ?>

        <?php if(isset($supplier)): ?>
          <input type="hidden" name="id" value="<?php echo e($supplier->id); ?>">
          <input type="hidden" name="update" value="update">
        <?php endif; ?>
        <div class="row">
          <div class="col-md-6">
                    <div class="row">
                <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Account Number</label>
                  <input type="text" name="account_number" class="form-control" value="<?php echo e(isset($supplier)?$supplier->account_number:old('account_number')); ?>" placeholder="Auto Generate" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

                <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Company</label>
                  <input type="text" name="company" class="form-control" value="<?php echo e(isset($supplier)?$supplier->company:old('company')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-4 input-group">
                <div class="form-line">
                  <label>Contact Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo e(isset($supplier)?$supplier->name:old('name')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <?php if(isset($supplier->address)) { $address = unserialize($supplier->address); } else { $address = []; } ?>
              <div class="col-md-12 input-group"> 
                <div class="form-line">
                  <label>Address</label>
                  <input type="text" name="address[]" class="form-control" value="<?php echo e(isset($address[0])?$address[0]:old('address')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-12 input-group">
                <div class="form-line">
                  <input type="text" name="address[]" class="form-control" value="<?php echo e(isset($address[1])?$address[1]:old('address')); ?>">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-12 input-group">
                <div class="form-line">
                  <input type="text" name="address[]" class="form-control" value="<?php echo e(isset($address[2])?$address[2]:old('address')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
              

              <div class="col-md-10 input-group">
                <div class="form-line">
                <label>Post Code</label> 
                  <input type="text" name="post_code" id="postal_code" class="form-control" value="<?php echo e(isset($supplier)?$supplier->post_code:old('post_code')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>

              <div class="col-md-2 input-group">
                <div class="form-line">
                    <button class="btn btn-info" id="find_postal_code" type="button"><i class="material-icons">search</i></button>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-3 input-group">
                <div class="form-line">
                     <label>Telephone</label>                   
                  <input type="text" name="telephone" id="telephone" class="form-control" value="<?php echo e(isset($supplier)?$supplier->telephone:old('telephone')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-3 input-group">
                <div class="form-line">
                   <label>Fax</label>                   
                  <input type="text" name="fax" id="fax" class="form-control" value="<?php echo e(isset($supplier)?$supplier->fax:old('fax')); ?>">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-3 input-group">
                <div class="form-line">
                   <label>Email</label>                   
                  <input type="email" name="email" id="email" class="form-control" value="<?php echo e(isset($supplier)?$supplier->email:old('email')); ?>" required>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-3 input-group">
                <div class="form-line">
                  <label>Website</label>                   
                  <input type="url" name="website" id="website" class="form-control" value="<?php echo e(isset($supplier)?$supplier->website:old('website')); ?>">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


            </div>
          </div>

          <div class="col-md-6">

            <div class="col-md-12">
                <?php if(isset($supplier)): ?>
                  <?php $check = 'checked'; ?>                  
                <?php else: ?>
                <?php if(old('stock_supplier')=='on'): ?>
                  <?php $check = 'checked'; ?>
                <?php else: ?>
                  <?php $check = ''; ?>
                <?php endif; ?> 
                <?php endif; ?> 
                <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_stock_supplier" name="stock_supplier" <?php echo e($check); ?> class="chk-col-red" />
                  <label for="md_checkbox_stock_supplier">Stock Supplier</label>
                </div>


              </div>

               <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Nominal Code</label>                   
                  <select class="form-control show-tick" name="nominal_code">
                      <option></option>
                      <option <?php if(isset($supplier)?$supplier->nominal_code:old("nominal_code")=='5000 | General: General') echo "selected" ?>>5000 | General: General</option>                      
                  </select>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-12">
                <?php if(isset($supplier)): ?>
                  <?php $check = 'checked'; ?>                  
                <?php else: ?>
                <?php if(old('credit_account')=='on'): ?>
                  <?php $check = 'checked'; ?>
                <?php else: ?>
                  <?php $check = ''; ?>
                <?php endif; ?> 
                <?php endif; ?> 
                <div class="demo-checkbox">
                  <input type="checkbox" id="md_checkbox_credit_account" name="credit_account" <?php echo e($check); ?> class="chk-col-red" />
                  <label for="md_checkbox_credit_account">Credit Account</label>
                </div>


              </div>

              <div class="col-md-6 input-group show_credit_d" style="display: <?php if($check=='checked'): ?> <?php echo e('block'); ?> <?php else: ?> <?php echo e('none'); ?> <?php endif; ?>">
                <div class="form-line">
                  <label>Credit Limit</label>                   
                  <input type="url" name="credit_limit" class="form-control" value="<?php echo e(isset($supplier)?$supplier->credit_limit:old('credit_limit')); ?>">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>


              <div class="col-md-6 input-group show_credit_d" style="display: <?php if($check=='checked'): ?> <?php echo e('block'); ?> <?php else: ?> <?php echo e('none'); ?> <?php endif; ?>">
                <div class="form-line">
                  <label>Credit Terms</label>                   
                  <input type="url" name="credit_term" class="form-control" value="<?php echo e(isset($supplier)?$supplier->credit_term:old('credit_term')); ?>">
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>              



              <div class="col-md-12 input-group">
                <div class="form-line">
                  <label>Notes</label>                   
                  <textarea type="text" name="notes" class="form-control" value="<?php echo e(isset($supplier)?$supplier->notes:old('notes')); ?>"></textarea>
                </div>
                <span class="input-group-addon"> <i></i> </span>
              </div>
          </div>
        </div>
      </form>
      </div>
    </div>
    
    
    
    
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<script type="text/javascript">


     /** Search according to postal code */
        $('#find_postal_code').on('click', function () {
            var val = $('#postal_code').val();
            $.ajax({
                type: 'GET',
                url: '<?php echo e(route("get_supplier_details")); ?>',
                data: {val: val},
                success: function (response) {

                    if (response != '') {

                        $('#postal_code').val(response.post_code)
                        $('#telephone').val(response.telephone)
                        $('#fax').val(response.fax)
                        $('#email').val(response.email)
                        $('#website').val(response.website)

                    } else {
                        alert('there is no record of this postal code!');
                    }
                }
            });
        });




  
  $('#submit_form_btn').click(function(){
    $('#submit_form').submit();
  });

  $('#md_checkbox_credit_account').click(function(){

      if($(this).prop('checked')==1){
          $('.show_credit_d').show();
      }else{
          $('.show_credit_d').hide();
      }


  });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>