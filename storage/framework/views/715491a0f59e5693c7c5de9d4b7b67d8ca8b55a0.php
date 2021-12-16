<style type="text/css">
.alpha_pad{
padding-left: 5px !important;
padding-right:5px !important;
}

.selected_alpha{
      background-color: blue !important;;
}
</style>
<?php $__env->startSection('vehicles','active_tab'); ?>
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
    
    <div class="card" style="display: block;">
      <form method="get" action="<?php echo e(route('admin.customers')); ?>">
      <div class="card-body row">
        <div class="col-md-2">
          <input type="text" name="vehicle_search" id="vehicle_search" class="form-control" value="<?php echo e($request->vehicle_search); ?>" placeholder="Vehicle Search" style="border-bottom: 1px solid;padding: 20px;">
        </div>
       
        <div class="col-md-2">
          <button type="submit"  class="btn btn-info btn-xs"><i class="zmdi zmdi-search"></i></button>
          <button  type="button" id="clear_search" class="btn btn-info btn-xs"><i class="zmdi zmdi-close"></i></button>
        </div>

         <div class="col-md-8">

          <a href="<?php echo e(route('admin.add.new.vehicle')); ?>" class="btn btn-success">New Vehicle</a>
          <a href="<?php echo e(route('admin.advanced_search')); ?>" class="btn btn-success">Adv. Search</a>
          <a href="" class="btn btn-success">Print</a>          

        </div>


        <div class="col-md-12">
           <a href="<?php echo e(route('admin.vehicles')); ?>?search=A" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='A') { echo 'style="background-color:blue !important"'; } ?> >A</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=B" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='B') { echo 'style="background-color:blue !important"'; } ?> >B</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=C" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='C') { echo 'style="background-color:blue !important"'; } ?> >C</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=D" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='D') { echo 'style="background-color:blue !important"'; } ?> >D</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=E" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='E') { echo 'style="background-color:blue !important"'; } ?> >E</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=F" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='F') { echo 'style="background-color:blue !important"'; } ?> >F</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=G" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='G') { echo 'style="background-color:blue !important"'; } ?> >G</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=H" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='H') { echo 'style="background-color:blue !important"'; } ?> >H</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=I" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='I') { echo 'style="background-color:blue !important"'; } ?> >I</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=J" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='J') { echo 'style="background-color:blue !important"'; } ?> >J</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=K" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='K') { echo 'style="background-color:blue !important"'; } ?> >K</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=L" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='L') { echo 'style="background-color:blue !important"'; } ?> >L</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=M" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='M') { echo 'style="background-color:blue !important"'; } ?> >M</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=N" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='N') { echo 'style="background-color:blue !important"'; } ?> >N</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=O" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='O') { echo 'style="background-color:blue !important"'; } ?> >O</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=P" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='P') { echo 'style="background-color:blue !important"'; } ?> >P</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=Q" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Q') { echo 'style="background-color:blue !important"'; } ?> >Q</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=R" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='R') { echo 'style="background-color:blue !important"'; } ?> >R</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=S" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='S') { echo 'style="background-color:blue !important"'; } ?> >S</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=T" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='T') { echo 'style="background-color:blue !important"'; } ?> >T</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=U" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='U') { echo 'style="background-color:blue !important"'; } ?> >U</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=V" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='V') { echo 'style="background-color:blue !important"'; } ?> >V</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=W" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='W') { echo 'style="background-color:blue !important"'; } ?> >W</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=X" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='X') { echo 'style="background-color:blue !important"'; } ?> >X</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=Y" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Y') { echo 'style="background-color:blue !important"'; } ?> >Y</a>
            <a href="<?php echo e(route('admin.vehicles')); ?>?search=Z" class="btn btn-primary btn-xs alpha_pad" <?php if($request->search && $request->search=='Z') { echo 'style="background-color:blue !important"'; } ?> >Z</a>
          </div>
        
      </div>
    </form>
    </div>
    
    
    
    <div class="card">
      <div class="card-body">
        <div class="row">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Registration</th>
                <th>Make / Model</th>
                <th>Customer</th>
                <th>Next Reminder</th>
                <th>Tot Docs</th>
                <th>Last Inv.</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                      
                    <td><?php echo e($d->registration_number); ?></td>
                    <td><?php echo e($d->make); ?> / <?php echo e($d->model); ?></td>
                    <td>Customer</td>
                    <td>Next Reminder</td>
                    <td>Tot Docs</td>
                    <td>Last Inv.</td>
                    <td><a href="<?php echo e(route('admin-customer-vechile-delete',['id'=>$d->id])); ?>" class="btn btn-danger">Delete</a></td>

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
<script type="text/javascript">
$('.edit_modal').click(function(){
id = $(this).data('id');
name = $(this).data('name');
$('#selected_id').val(id)
$('#defaultModalLabel').html('Edit Vehicle');
$('#name').val(name)
})
</script>

<script type="text/javascript">
  
  $('.open_search').click(function(){

      $('#search_div').toggle(100);
/*        if($('#search_div').css('display') != 'none'){
          $(this).text('Hide Search');
        }else{
          $(this).text('Open Search');
        }*/
  });


  
  

  $('#clear_search').click(function(){

      $('#customer_search').val('');
      $('#search_form').submit();

  });

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>