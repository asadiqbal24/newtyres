<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>{{isset($page_seo)?$page_seo->title:''}}</title>

    <meta name="description" content="{{isset($page_seo)?$page_seo->description:''}}">
    <meta name="keywords" content="{{isset($page_seo)?$page_seo->keywords:''}}">
    <meta name="author" content="{{isset($page_seo)?$page_seo->writer:''}}">
    <meta name="handler" content="{{isset($page_seo)?$page_seo->handler:''}}">

    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('public/front/css/animate.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/front/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/front/css/owl.theme.default.min.css')}}">
    <!-- Cube Portfolio -->
    <link rel="stylesheet" href="{{asset('public/front/css/cubeportfolio.min.css')}}">
    <!-- Fancy Box -->
    <link rel="stylesheet" href="{{asset('public/front/css/jquery.fancybox.min.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/front/css/navigation.css')}}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">

<style type="text/css">
    .terms{
        color: white;
    }

    .terms p {
        color: white !important;
        max-width: 100% !important;
    }

    p {
        color: white !important;
        max-width: 100% !important;
    }
</style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--Loader Start-->
<div class="loader">
    <div class="loader-inner">
        <div class="loader-blocks">
            <span class="block-1"></span>
            <span class="block-2"></span>
            <span class="block-3"></span>
            <span class="block-4"></span>
            <span class="block-5"></span>
            <span class="block-6"></span>
            <span class="block-7"></span>
            <span class="block-8"></span>
            <span class="block-9"></span>
            <span class="block-10"></span>
            <span class="block-11"></span>
            <span class="block-12"></span>
            <span class="block-13"></span>
            <span class="block-14"></span>
            <span class="block-15"></span>
            <span class="block-16"></span>
        </div>
    </div>
</div>
<!--Loader End-->

<!--Header Start-->
<header>

    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-gradient nav-icon">
        <div class="container">
            <a href="{{route('home')}}" title="Logo" class="logo scroll" style="font-size: 30px;color: white">
                {{$app_name->value}}
            </a>

            <!--Nav Links-->
            <div class="collapse navbar-collapse" id="wexim">
                <div class="navbar-nav ml-auto">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                        <a class="nav-link" href="{{route('login_here')}}">Login</a>                        
                    <span class="menu-line"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
            </div>

            <!--Side Menu Button-->
            <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span>
                <span></span>
                <span></span>
            </a>

        </div>
    </nav>

    <!--Side Nav-->
    <div class="side-menu">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login_here')}}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('terms_and_conditions')}}">Term & Conditions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('privacy_policy')}}">Privacy Policy</a>
                    </li>
                </ul>
            </nav>        
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
    <!-- End side menu -->

</header>
<!--Header end-->

<section id="about" style="background-image:url('http://themesindustry.com/html/wexim-2019/images/gradient-bg.png');background-size: cover;min-height: 635px;">
    <div class="container" >
        
        <!--About-->
        <div class="row align-items-center wow fadeIn">
            <div class="col-md-12">
                <div class="title">
                        <h3 class="second-color mb-3" style="color: white">Privacy Policy</h3>
                        <h6 class="terms">{!! $privacy_policy->value !!}</h6>
                </div>
            </div>            
        </div>
    </div>
</section>

<!--Footer End-->

<!--Scroll Top-->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!--Scroll Top End-->



<!-- Optional JavaScript -->
<script src="{{asset('public/front/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('public/front/js/popper.min.js')}}"></script>
<script src="{{asset('public/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.appear.js')}}"></script>
<!-- isotop gallery -->
<script src="{{asset('public/front/js/isotope.pkgd.min.js')}}"></script>
<!-- cube portfolio gallery -->
<script src="{{asset('public/front/js/jquery.cubeportfolio.min.js')}}"></script>
<!-- owl carousel slider -->
<script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
<!-- text rotate -->
<script src="{{asset('public/front/js/morphext.min.js')}}"></script>
<!-- particles -->
<script src="{{asset('public/front/js/particles.min.js')}}"></script>
<!-- parallax Background -->
<script src="{{asset('public/front/js/parallaxie.min.js')}}"></script>
<!-- fancybox popup -->
<script src="{{asset('public/front/js/jquery.fancybox.min.js')}}"></script>
<!-- fancybox popup -->
<script src="{{asset('public/front/js/wow.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('public/front/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('public/front/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset('public/front/js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('public/front/js/revolution.extension.video.min.js')}}"></script>

<script src="{{asset('public/front/js/script.js')}}"></script>

</body>

</html>