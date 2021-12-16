<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 18:24:27 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title><?php echo e(isset($app_name->value)?$app_name->value:''); ?> <?php echo e($page_title); ?></title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/morrisjs/morris.css')); ?>"/>

<!-- Custom Css -->
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/main.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/hm-style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/all-themes.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>">
<link href="<?php echo e(asset('public/assets/plugins/multi-select/css/multi-select.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.css')); ?>" rel="stylesheet" />

<link href="<?php echo e(asset('public/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" rel="stylesheet">
    
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!--this is for $is not defined-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>


.slimScrollBar{
    width:8px !important;
}

.form-control{
    height: 10px !important;
}

.swal-text{
    color: black !important;
}
body{

background: #0f0c29 !important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29) !important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #24243e, #302b63, #0f0c29) !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.card{
    background: #16222A !important;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #3A6073, #16222A) !important;  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #3A6073, #16222A) !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: white !important;

}

th{
    color: white !important;
}
td{
    color: white !important;
}

div,button{
    color: white !important;
}

.btn-default{
    color: black !important;    
}

.filter-option{
    color: black !important;        
}

.form-control{
     color: white !important;   
}

.text{
     color: black !important;   
}

span{
    color: white !important;
}

.form-control:focus{
    background: transparent !important;
}


.active_tab{
    background-color: black !important;
}

</style>


</head>

<body class="theme-deep-purple index2">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-cyan">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
