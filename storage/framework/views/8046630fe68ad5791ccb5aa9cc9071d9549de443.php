<form method="post" action="<?php echo e(route('admin.global-notes-save')); ?>">
  <?php echo e(csrf_field()); ?>

  <div class="card">
    <div class="card-header" style="font-size:12px;">
      <a style="cursor:pointer" class="notes_btn" data-type="global">Global Notes</a>
      <a style="cursor:pointer" class="notes_btn" data-type="user">User Notes</a>
      <span style="float: right;font-size: 8px;" class="open_right_divs" data-div="notes_div"><i class="zmdi zmdi-caret-down-circle"></i></span>
    </div>
    <div class="card-body notes_div" id="global_notes" style="display: none;">
      <textarea name="global_notes" rows="10" cols="37"><?php echo e($globalNotes->global_notes); ?></textarea>
      
    </div>
    <div class="card-body notes_div" id="user_notes" style="display: none;">
      <textarea name="user_notes" rows="10" cols="37" ><?php echo e($globalNotes->user_notes); ?></textarea>
    </div>
    <div class="row notes_div" style="display:none;" id="notes_div_btn">
      <div class="col-md-9">
        <button type="submit" class="btn btn-primary btn-sm">Save Notes</button>
      </div>
      <div class="col-md-3">
        <button type="button" class="btn btn-primary btn-sm"><i class="zmdi zmdi-refresh-alt"></i></button>
      </div>
    </div>
    
  </div>
</form>