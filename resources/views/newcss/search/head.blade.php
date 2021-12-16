<!doctype html>
<html lang="en-AU">

<head>
    <script>
        window.ddoptions = {
            ajaxListenerPath: ['www.tyresales.com.au/apis/']
        };
        window.ddjskey = "C0705ACD75EBF650A07FF8291D3528";
    </script>
    <script src="{{asset('public/front/js/tags.js')}}"></script>
    <title data-react-helmet="true">Buy Tyres Online At Cheap Prices | Car Tyres Online | Tyreflicks</title>
    <meta data-react-helmet="true" charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5" />
    <meta data-react-helmet="true" name="theme-color" content="#007CC2" />
    <meta data-react-helmet="true" name="description" content="" />
    <link data-react-helmet="true" rel="manifest" href="{{asset('public/front/dist/manifest.json')}}" />
    <link data-react-helmet="true" rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/front/dist/assets/slick-theme.f9faba678c4d6dcfdde69e5b11b37a2e.css')}}" />
    <link data-react-helmet="true" rel="stylesheet" type="text/css" href="data:text/css;base64,LyogU2xpZGVyICovCi5zbGljay1zbGlkZXIKewogICAgcG9zaXRpb246IHJlbGF0aXZlOwoKICAgIGRpc3BsYXk6IGJsb2NrOwogICAgYm94LXNpemluZzogYm9yZGVyLWJveDsKCiAgICAtd2Via2l0LXVzZXItc2VsZWN0OiBub25lOwogICAgICAgLW1vei11c2VyLXNlbGVjdDogbm9uZTsKICAgICAgICAtbXMtdXNlci1zZWxlY3Q6IG5vbmU7CiAgICAgICAgICAgIHVzZXItc2VsZWN0OiBub25lOwoKICAgIC13ZWJraXQtdG91Y2gtY2FsbG91dDogbm9uZTsKICAgIC1raHRtbC11c2VyLXNlbGVjdDogbm9uZTsKICAgIC1tcy10b3VjaC1hY3Rpb246IHBhbi15OwogICAgICAgIHRvdWNoLWFjdGlvbjogcGFuLXk7CiAgICAtd2Via2l0LXRhcC1oaWdobGlnaHQtY29sb3I6IHRyYW5zcGFyZW50Owp9Cgouc2xpY2stbGlzdAp7CiAgICBwb3NpdGlvbjogcmVsYXRpdmU7CgogICAgZGlzcGxheTogYmxvY2s7CiAgICBvdmVyZmxvdzogaGlkZGVuOwoKICAgIG1hcmdpbjogMDsKICAgIHBhZGRpbmc6IDA7Cn0KLnNsaWNrLWxpc3Q6Zm9jdXMKewogICAgb3V0bGluZTogbm9uZTsKfQouc2xpY2stbGlzdC5kcmFnZ2luZwp7CiAgICBjdXJzb3I6IHBvaW50ZXI7CiAgICBjdXJzb3I6IGhhbmQ7Cn0KCi5zbGljay1zbGlkZXIgLnNsaWNrLXRyYWNrLAouc2xpY2stc2xpZGVyIC5zbGljay1saXN0CnsKICAgIC13ZWJraXQtdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTsKICAgICAgIC1tb3otdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTsKICAgICAgICAtbXMtdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTsKICAgICAgICAgLW8tdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTsKICAgICAgICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGUzZCgwLCAwLCAwKTsKfQoKLnNsaWNrLXRyYWNrCnsKICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsKICAgIHRvcDogMDsKICAgIGxlZnQ6IDA7CgogICAgZGlzcGxheTogYmxvY2s7CiAgICBtYXJnaW4tbGVmdDogYXV0bzsKICAgIG1hcmdpbi1yaWdodDogYXV0bzsKfQouc2xpY2stdHJhY2s6YmVmb3JlLAouc2xpY2stdHJhY2s6YWZ0ZXIKewogICAgZGlzcGxheTogdGFibGU7CgogICAgY29udGVudDogJyc7Cn0KLnNsaWNrLXRyYWNrOmFmdGVyCnsKICAgIGNsZWFyOiBib3RoOwp9Ci5zbGljay1sb2FkaW5nIC5zbGljay10cmFjawp7CiAgICB2aXNpYmlsaXR5OiBoaWRkZW47Cn0KCi5zbGljay1zbGlkZQp7CiAgICBkaXNwbGF5OiBub25lOwogICAgZmxvYXQ6IGxlZnQ7CgogICAgaGVpZ2h0OiAxMDAlOwogICAgbWluLWhlaWdodDogMXB4Owp9CltkaXI9J3J0bCddIC5zbGljay1zbGlkZQp7CiAgICBmbG9hdDogcmlnaHQ7Cn0KLnNsaWNrLXNsaWRlIGltZwp7CiAgICBkaXNwbGF5OiBibG9jazsKfQouc2xpY2stc2xpZGUuc2xpY2stbG9hZGluZyBpbWcKewogICAgZGlzcGxheTogbm9uZTsKfQouc2xpY2stc2xpZGUuZHJhZ2dpbmcgaW1nCnsKICAgIHBvaW50ZXItZXZlbnRzOiBub25lOwp9Ci5zbGljay1pbml0aWFsaXplZCAuc2xpY2stc2xpZGUKewogICAgZGlzcGxheTogYmxvY2s7Cn0KLnNsaWNrLWxvYWRpbmcgLnNsaWNrLXNsaWRlCnsKICAgIHZpc2liaWxpdHk6IGhpZGRlbjsKfQouc2xpY2stdmVydGljYWwgLnNsaWNrLXNsaWRlCnsKICAgIGRpc3BsYXk6IGJsb2NrOwoKICAgIGhlaWdodDogYXV0bzsKCiAgICBib3JkZXI6IDFweCBzb2xpZCB0cmFuc3BhcmVudDsKfQouc2xpY2stYXJyb3cuc2xpY2staGlkZGVuIHsKICAgIGRpc3BsYXk6IG5vbmU7Cn0K" />
    <link data-react-helmet="true" rel="canonical" href="index.html" />
    

    <link type="image/x-icon" href="{{asset('public/assets/images/fav-icon.png')}}" rel="shortcut icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/front/vehicles/images/apple-touch-icon-144x144-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/front/vehicles/images/apple-touch-icon-114x114-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/front/vehicles/images/apple-touch-icon-72x72-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" href="{{asset('public/front/vehicles/images/apple-touch-icon-57x57-precomposed.png')}}" />
    

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/front/dist/assets/search-style.css')}}" />
      
      <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome/css/font-awesome.min.css')}}" />


    @include('front.search.search_styles')
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHVJSS7&amp;gtm_auth=bSFAPbSXZHgoZI4cRFKwcQ&amp;gtm_preview=env-29&amp;gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->