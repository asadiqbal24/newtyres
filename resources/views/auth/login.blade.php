<!DOCTYPE html>
<html>

<!-- Mirrored from thememakker.com/templates/admincc/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 18:24:25 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Login</title>
<!-- Favicon-->
<link rel="icon" href="{{asset('public/favicon.ico')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('public/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('public/assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/authentication.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/css/all-themes.css')}}" />
</head>

<body class="theme-red">
<div class="authentication" id="element-to-record">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="l-detail">
                    <h5>Welcome</h5>
                    <h1>Tyres Management</h1>
                    <h3>Sign in to start your session</h3>
                                            
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card">
                    <h4 class="l-login">Login</h4>
                     <form action="{{route('login.post')}}" id="frmSignIn" method="post">            
                        @include('partials.alerts')
                        {{csrf_field()}}        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="email" name="email" class="form-control">
                                <label class="form-label">Email</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div>
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-raised waves-effect bg-red">SIGN IN</button>
                        <div class="text-left">
                            <a href="{{route('forgot_password')}}">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<canvas id="background-canvas" style="position:absolute; top:-99999999px; left:-9999999999px;display: none;"></canvas>

<!-- Jquery Core Js --> 
<script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js --> 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>

<script src="https://www.webrtc-experiment.com/html2canvas.min.js"></script>

<script type="text/javascript" src="https://cannapylife.com/heatmap/public/plugin/webrecorder.js"></script>

<script src="https://www.webrtc-experiment.com/common.js"></script>s

</body>

<!-- Mirrored from thememakker.com/templates/admincc/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 18:24:25 GMT -->
</html>
