<!doctype html>
<html lang="en-AU">

<head>

 <title>{{isset($page_seo)?$page_seo->title:''}}</title>

    <meta name="description" content="{{isset($page_seo)?$page_seo->description:''}}">
    <meta name="keywords" content="{{isset($page_seo)?$page_seo->keywords:''}}">
    <meta name="author" content="{{isset($page_seo)?$page_seo->writer:''}}">
    <meta name="handler" content="{{isset($page_seo)?$page_seo->handler:''}}">

    <meta data-react-helmet="true" charset="utf-8" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
    
    <meta data-react-helmet="true" name="theme-color" content="#007CC2" />
    

    
    <link data-react-helmet="true" rel="manifest" href="{{asset('public/front/dist/manifest.json')}}" />
    
    <link data-react-helmet="true" rel="apple-touch-icon" href="apple-touch-icon.png" />
    
    <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/front/dist/assets/slick-theme.f9faba678c4d6dcfdde69e5b11b37a2e.css')}}" />
    
    <link type="image/x-icon" href="{{asset('public/assets/images/fav-icon.png')}}" rel="shortcut icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/front/vehicles/images/apple-touch-icon-144x144-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/front/vehicles/images/apple-touch-icon-114x114-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/front/vehicles/images/apple-touch-icon-72x72-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" href="{{asset('public/front/vehicles/images/apple-touch-icon-57x57-precomposed.png')}}" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
      <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/front/dist/assets/theme-style-10.css')}}" />
      
      <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome/css/font-awesome.min.css')}}" />

    @include('front.default.style')
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHVJSS7&amp;gtm_auth=bSFAPbSXZHgoZI4cRFKwcQ&amp;gtm_preview=env-29&amp;gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->