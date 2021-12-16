<div class="menu-container">
    <div class="menu">
        <ul>
            <li class="<?php echo $__env->yieldContent('dashboard'); ?>"><a href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
            <li class="<?php echo $__env->yieldContent('calender'); ?>"><a href="<?php echo e(route('admin.calender')); ?>">Calender</a></li>
            <li class="<?php echo $__env->yieldContent('estimates'); ?>"><a href="<?php echo e(route('admin.estimates')); ?>">Estimates</a></li>
            <li class="<?php echo $__env->yieldContent('job_sheets'); ?>"><a href="<?php echo e(route('admin.jobsheets')); ?>">Job Sheets</a></li>                        
            <li class="<?php echo $__env->yieldContent('invoices'); ?>"><a href="<?php echo e(route('admin.invoices')); ?>">Invoices</a></li>
            <li class="<?php echo $__env->yieldContent('unpaid'); ?>"><a href="<?php echo e(route('admin.unpaid')); ?>">Unpaid</a></li>
            <li class="<?php echo $__env->yieldContent('archives'); ?>"><a href="<?php echo e(route('admin.archives')); ?>">Archives</a></li>
            <li class="<?php echo $__env->yieldContent('customers'); ?>"><a href="<?php echo e(route('admin.customers')); ?>">Customers</a></li>
            <li class="<?php echo $__env->yieldContent('vehicles'); ?>"><a href="<?php echo e(route('admin.customer_vehicles')); ?>">Vehicles</a></li>

            <li class="<?php echo $__env->yieldContent('suppliers'); ?>"><a href="<?php echo e(route('admin.supplier')); ?>">Suppliers</a></li>
            <li class="<?php echo $__env->yieldContent('stock'); ?>"><a href="<?php echo e(route('admin.stock')); ?>">Stock</a></li>
            <li class="<?php echo $__env->yieldContent('reminders'); ?>"><a href="<?php echo e(route('admin.reminder')); ?>">Reminders</a></li>

       

           
        </ul>
    </div>
</div>