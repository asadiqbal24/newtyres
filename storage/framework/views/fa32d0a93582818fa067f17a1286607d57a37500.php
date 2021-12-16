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
                
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <!-- Nav tabs -->
                        <button class="btn btn-danger">Close</button>
                        <button class="btn btn-success">Export Logs</button>
                        <button class="btn btn-success float-right">Export All Data Tables (Internal Format)</button>
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Documents (ALL) <button class="btn btn-primary btn-xs"><i class="material-icons">settings</i> </button></label>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All Doc Types </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Estimates </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Job Sheets </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">All Invoices </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Issued Invoices </button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Expenses (ALL) <button class="btn btn-primary btn-xs"><i class="material-icons">settings</i> </button></label>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All</button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Customers<button class="btn btn-primary btn-xs"> <i class="material-icons">settings</i> </button></label>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All</button>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">All with Phone. No</button>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">All With Email</button>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">All with Address</button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Documents (In Range)</label>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="form-line">
                                    <label>From:</label>
                                    <input type="date" name="from_documents" class="form-control">
                                </div>
                                <div class="form-line">
                                    <label>To:</label>
                                    <input type="date" name="to_documents" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>By Creation Date</label>
                                <button class="btn btn-info btn-block">Export All Doc Types</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Estimates </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Job Sheets </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">All Invoices </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Issued Invoices </button>
                            </div>
                            <div class="col-md-12">
                                <label>By Issue Date</label>
                                <button class="btn btn-info btn-block">Issued Invoices</button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Expenses (In Range)</label>
                            </div>
                            <div class="col-md-12">
                                
                                <div class="form-line">
                                    <label>From:</label>
                                    <input type="date" name="from_expenses" class="form-control">
                                </div>
                                <div class="form-line">
                                    <label>To:</label>
                                    <input type="date" name="to_expenses" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>By Creation Date</label>
                                <button class="btn btn-info btn-block">Export</button>
                            </div>
                            <div class="col-md-12">
                                <label>By Supplier Invoice Date</label>
                                <button class="btn btn-info btn-block">Export</button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Vehicles<button class="btn btn-primary btn-xs"> <i class="material-icons">settings</i> </button></label>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All</button>
                            </div>
                                            <hr style="width: 100%">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Suppliers<button class="btn btn-primary btn-xs"> <i class="material-icons">settings</i> </button></label>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All</button>
                            </div>
                                            <hr style="width: 100%">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Stock<button class="btn btn-primary btn-xs"> <i class="material-icons">settings</i> </button></label>
                            </div>
                            
                            <div class="col-md-12">
                                <button class="btn btn-info btn-block">Export All</button>
                            </div>
                                        <hr style="width: 100%">
                        </div>
                    </div>
                </div>
            </div>

            <hr style="width: 100%">
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                <p style="text-align: center;">CSV Exports are intended for using your data in 3rd party applications.<br>
                    However, no support is offered for using data derived from Garage Assistant in 3rd party applications.
                </p>
            </div>
        </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('jsOutside'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>