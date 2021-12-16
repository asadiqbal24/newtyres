<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />


 <title>{{isset($page_seo)?$page_seo->title:''}}</title>

    <meta name="description" content="{{isset($page_seo)?$page_seo->description:''}}">
    <meta name="keywords" content="{{isset($page_seo)?$page_seo->keywords:''}}">
    <meta name="author" content="{{isset($page_seo)?$page_seo->writer:''}}">
    <meta name="handler" content="{{isset($page_seo)?$page_seo->handler:''}}">
    <meta name="rating" content="general" />
    <meta name="robots" content="index,follow,noodp" />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="content-language" content="en" />
    <meta name="google-site-verification" content="kOO0C7hhS_QmM-0UEYlCWnYQQBc_-miPjFjCr7Q7NlY" />
    <meta name="google-site-verification" content="TIZhjR1PZxsQ1E9hZhZhtje-Z14kMPwR1BCzzWm659w" />
    <meta name="p:domain_verify" content="pinterest-eed4b.html" />
    <meta name="fb:app_id" property="fb:app_id" content="409178825820782" />
    <meta name="WT.ts_make" content="{{isset($vehicle)?$vehicle->name:''}}" />
    <meta name="WT.ts_model" content="{{isset($models)?$models->name:''}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link href='//fonts.googleapis.com/css?family=Noto+Serif:400,400italic' rel='stylesheet' type='text/css' />
    <link type="image/x-icon" href="{{asset('public/front/vehicles/images/favicon.ico')}}" rel="shortcut icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">    

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/front/vehicles/images/apple-touch-icon-144x144-precomposed.png')}}" />
    

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/front/vehicles/images/apple-touch-icon-114x114-precomposed.png')}}" />
    

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/front/vehicles/images/apple-touch-icon-72x72-precomposed.png')}}" />
    

    <link rel="apple-touch-icon-precomposed" href="{{asset('public/front/vehicles/images/apple-touch-icon-57x57-precomposed.png')}}" />

    <meta name="viewport" content="width=device-width" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,900,500,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/front/vehicles/tyresales.min.css?v=2019-04-04')}}" rel="stylesheet" type="text/css" />


    <script src="{{asset('public/front/vehicles/jquery-1.7.1.min.js')}}"></script>
    <script src="{{asset('public/front/vehicles/jquery.validate.min.js')}}"></script>

    <script src="{{asset('public/front/vehicles/jquery.validate.unobtrusive.min.js')}}"></script>
    <script src="{{asset('public/front/vehicles/jquery.colorbox-min.js')}}"></script>
    <script src="{{asset('public/front/vehicles/vivid.core-1.4.beautiful.js')}}"></script>
    <script src="{{asset('public/front/vehicles/jquery.cookie.js')}}"></script>
    <script src="{{asset('public/front/vehicles/jquery.stylish-select.js')}}"></script>
    <script src="{{asset('public/front/vehicles/jquery.cycle2.min.js')}}"></script>
    <script src="{{asset('public/front/vehicles/bootstrap.js')}}"></script>
    <script src="{{asset('public/front/vehicles/respond.js')}}"></script>
    <script src="{{asset('public/front/vehicles/moment.min.js')}}"></script>

    <script src="{{asset('public/front/vehicles/tyresales.api.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.global.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.common.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.search.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.search-size.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.search-results.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.search-global.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.search-vehicle.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.searchtruck-brand.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.searchtruck-size.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.searchotr-brand.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/tyresales.searchotr-size.js')}}?v=2019-04-04"></script>

    <script src="{{asset('public/front/vehicles/livehelpnow.settings.js')}}?v=2019-04-04"></script>
    <script src="{{asset('public/front/vehicles/lhnchatbutton-current.min.js')}}" type="text/javascript" id="lhnscript"></script>
    <script src="{{asset('public/front/vehicles/livehelpnow.button.js')}}?v=2019-04-04"></script>

    <link href="{{asset('public/front/vehicles/vendor.css?q=2019-01-17')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('public/front/vehicles/vendor.js?v=2019-04-04')}}"></script>
    <script src="{{asset('public/front/vehicles/main-client.js?v=2019-04-04')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsnlog/2.29.0/jsnlog.min.js"></script>

    <!-- BEGIN Krux Control Tag for "tyresales.com.au" -->
    <!-- Source: /controltag?confid=IPseL_Td&site=tyresales.com.au&edit=1 -->
    <script class="kxct" data-id="IPseL_Td" data-timing="async" data-version="1.9">
        window.Krux || ((Krux = function() {
            Krux.q.push(arguments)
        }).q = []);
        (function() {
            var k = document.createElement('script');
            k.type = 'text/javascript';
            k.async = true;
            var m, src = (m = location.href.match(/\bkxsrc=([^&]+)/)) && decodeURIComponent(m[1]);
            k.src = /^https?:\/\/([^\/]+\.)?krxd\.net(:\d{1,5})?\//i.test(src) ? src : src === "disable" ? "" :
                (location.protocol === "https:" ? "https:" : "http:") + "//cdn.krxd.net/controltag?confid=IPseL_Td";
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(k, s);
        }());
    </script>
    <!-- END Krux Controltag -->

    <script>
        (function(w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function() {
                var o = {
                    ti: "5245771"
                };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
                var s = this.readyState;
                s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
    </script>
    <noscript><img alt="Bing tag" src="//bat.bing.com/action/0?ti=5245771&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>


    <!-- BEGIN DOT TAG -->
    <script type="application/javascript">
        (function(w, d, t, r, u) {
            w[u] = w[u] || [];
            w[u].push({
                'projectId': '10001701058921',
                'properties': {
                    'pixelId': '437530'
                }
            });
            var s = d.createElement(t);
            s.src = r;
            s.async = true;
            s.onload = s.onreadystatechange = function() {
                var y, rs = this.readyState,
                    c = w[u];
                if (rs && rs != "complete" && rs != "loaded") {
                    return
                }
                try {
                    y = YAHOO.ywa.I13N.fireBeacon;
                    w[u] = [];
                    w[u].push = function(p) {
                        y([p])
                    };
                    y(c)
                } catch (e) {}
            };
            var scr = d.getElementsByTagName(t)[0],
                par = scr.parentNode;
            par.insertBefore(s, scr)
        })(window, document, "script", "https://s.yimg.com/wi/ytc.js", "dotq");
    </script>
    <!-- END DOT TAG -->

    <!-- - - - Tags for oneTag - - - -->
    <!-- One Tag Conditional Container: Tyresales (7125) | oneTag (5973) -->

    <script type="text/javascript">
        var ft_onetag_5973 = {
            ft_vars: {
                "ftXRef": "",
                "ftXValue": "",
                "ftXType": "",
                "ftXName": "",
                "ftXNumItems": "",
                "ftXCurrency": "",
                "U1": "",
                "U2": "",
                "U3": "",
                "U4": "",
                "U5": "",
                "U6": "",
                "U7": "",
                "U8": "",
                "U9": "",
                "U10": "",
                "U11": "",
                "U12": "",
                "U13": "",
                "U14": "",
                "U15": "",
                "U16": "",
                "U17": "",
                "U18": "",
                "U19": "",
                "U20": ""
            },
            ot_dom: document.location.protocol + '//servedby.flashtalking.com',
            ot_path: '/container/7125;56285;5973;iframe/?',
            ot_href: 'ft_referrer=' + escape(document.location.href),
            ot_rand: Math.random() * 1000000,
            ot_ref: document.referrer,
            ot_init: function() {
                var o = this,
                    qs = '',
                    count = 0,
                    ns = '';
                for (var key in o.ft_vars) {
                    qs += (o.ft_vars[key] == '' ? '' : key + '=' + o.ft_vars[key] + '&');
                }
                count = o.ot_path.length + qs.length + o.ot_href + escape(o.ot_ref).length;
                ns = o.ot_ns(count - 2000);
                document.write('<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="' + o.ot_dom + o.ot_path + qs + o.ot_href + '&ns=' + ns + '&cb=' + o.ot_rand + '"></iframe>');
            },
            ot_ns: function(diff) {
                if (diff > 0) {
                    var o = this,
                        qo = {},
                        sp = /(?:^|&)([^&=]*)=?([^&]*)/g,
                        fp = /^(http[s]?):\/\/?([^:\/\s]+)\/([\w\.]+[^#?\s]+)(.*)?/.exec(o.ot_ref),
                        ro = {
                            h: fp[2],
                            p: fp[3],
                            qs: fp[4].replace(sp, function(p1, p2, p3) {
                                if (p2) qo[p2] = [p3]
                            })
                        };
                    return escape(ro.h + ro.p.substring(0, 10) + (qo.q ? '?q=' + unescape(qo.q) : '?p=' + unescape(qo.p)));
                } else {
                    var o = this;
                    return escape(unescape(o.ot_ref));
                }
            }
        }
        ft_onetag_5973.ot_init();
    </script>

    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <!-- End Trustbox script -->

                <style type="text/css">
                    .content .search-link h2 {
                            font: 700 20px Arial, Helvetica, sans-serif;
                            color: #f57e21;
                            margin: 0 0 15px 0;
                            padding: 0 0 0 20px;
                        }

                        .content .search-link .search-tyre-size-links {
                            padding: 0 0 0 20px;
                            margin: 0 0 15px 0;
                        }
                        .search-tyre-size-links li {
                                display: inline;
                                list-style-type: none;
                                padding-right: 10px;
                                list-style-position: inside;
                            }
                                .tyrePanelRow .tyrePanel_GBB .tyrePanel .icons {
                                    height: 40px;
                                }


.tyrePanelRow .tyrePanel_GBB .tyrePanel .icons .runFlat {
    display: block;
    height: 25px;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #DE7209;
    padding: 10px 6px;
    float: right;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .icons .runFlat:before {
    display: inline-block;
    vertical-align: middle;
    width: 25px;
    height: 25px;
    content: " ";
    background: red;
    background: url('{{asset("public/front/run-flat-icon.png")}}') no-repeat;
    background-size: 20px 20px;
}                                

.tyrePanelRow .tyrePanel_GBB .tyrePanel .deliverylocation {
    display: inline-block;
    padding: 7px;
    width: 100%;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .deliverylocation .deliverylocation-text {
    font: 12px/15px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #666;
    text-align: center;
    font-weight: 500;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel {
    margin-right: 0;
    margin-left: 0;
    border-top: solid 1px #c4c4c4;
    border-bottom: solid 1px #c4c4c4;
    clear: both;
    padding: 8px;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity {
    position: relative;
    float: left;
    width: 50%;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
    text-align: center;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity label {
    display: inline-block;
    width: 25px;
    height: 32.5px;
    line-height: 32.5px;
    vertical-align: middle;
    color: black;
    font-weight: bold;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity select {
    width: 40px;
    height: 32.5px;
    line-height: 32.5px;
    box-sizing: border-box;
    display: inline-block;
    vertical-align: middle;
    border: solid 1px #A8A8A8;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct {
    position: relative;
    float: left;
    width: 50%;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
}

.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton {
    background-color: #66a210;
    color: #fff;
    width: 100%;
    border: 1px solid #ffffff;
    line-height: 1;
    font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: bold;
    display: inline-block;
    padding: 0.7em;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    box-shadow: none;
    cursor: pointer;
    display: block;
    margin-right: auto;
    margin-left: auto;
    width: 75px;
    font-size: 13px;
}

                </style>    

</head>

<body class="no-js">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHVJSS7&gtm_auth=bSFAPbSXZHgoZI4cRFKwcQ&gtm_preview=env-29&gtm_cookies_win=x" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header role="banner" id="navigationContainer" class="csn-navigation quicksales">

        <div class="wrapper clearfix">

            <nav>
                <script>
                    (function() {
                        var cx = '014007775749810251086:_0hlju5defi';
                        var gcse = document.createElement('script');
                        gcse.type = 'text/javascript';
                        gcse.async = true;
                        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                            '//cse.google.com/cse.js?cx=' + cx;
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(gcse, s);
                    })();
                </script>

                <script>
                    window.Krux || ((Krux = function() {
                        Krux.q.push(arguments);
                    }).q = []);
                    (function() {
                        function retrieve(n) {
                            var m, k = 'kx' + n,
                                ls = (function() {
                                    try {
                                        return window.localStorage;
                                    } catch (e) {
                                        return null;
                                    }
                                })();
                            if (ls) {
                                return ls[k] || "";
                            } else if (navigator.cookieEnabled) {
                                m = document.cookie.match(k + '=([^;]*)');
                                return (m && unescape(m[1])) || "";
                            } else {
                                return '';
                            }
                        }

                        Krux.user = retrieve('user');
                        Krux.segments = retrieve('segs') ? retrieve('segs').split(',') : [];
                    })();
                </script>

                <ul class="navigation">                    
                <li id="home"><a href="{{route('home')}}">Home</a></li>

        @foreach($vehicle_categories as $vc)

                                @if($vc->url_page==1)
                                   @php $url = route($vc->url); @endphp
                                @else
                                  @php $url = route($vc->url); @endphp
                                @endif

            @if($vc->name=='Browse For Tyres')
            <li id="search"><a href="{{$url}}">{{$vc->name}}</a>
            @else
            <li><a href="{{$url}}">{{$vc->name}}</a>
            @endif    

            @if($vc->category->count() > 0)

            <div class="menu-panel"> <span class="arrow">&nbsp;</span>
                <div class="menu-links">
                    <ul class="menu-links">
                        @php $i=0;@endphp    
                        @foreach($vc->category as $cat)

                         @if($cat->url_page==1)
                                             @php $url = route($cat->url); @endphp 
                                          @else
                                            @php $url = route($cat->url); @endphp
                                          @endif


                            <li class="vip <?php if($i==0) echo 'first' ?>"><a href="{{$url}}">{{$cat->name}}</a></li>
                        @php $i++;@endphp
                        @endforeach

                    </ul>
                </div>  
            </div>


            @endif



        @endforeach



        <li id="network"><a href="#">More Sites</a>
            <ul>
                 <li><a href="#" class="carsales-network"></a><span class="key-lines">Welcome to Australia's No. 1 classified network</span></li>
                 <li class="carsales">
                     <a target="_blank" href="http://carsales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Carsales</span>
                         </div>
                         <span class="content">Australia’s No.1 place to buy, sell or research a car, and read all the latest news and reviews.</span>
                     </a>
                 </li>
                 <li class="bikesales">
                     <a target="_blank" href="http://bikesales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Bikesales</span>
                         </div>
                         <span class="content">Australia’s No.1 place to buy, sell or research a bike, and read all the latest news and reviews.</span>
                     </a>
                 </li>

                 <li class="boatsales last">
                     <a target="_blank" href="http://boatsales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Boatsales</span>
                         </div>
                         <span class="content">Australia's No.1 place to buy, sell or research a boat, and read all the latest news and reviews.</span>
                     </a>
                 </li>
                 <li class="caravancampingsales">
                     <a target="_blank" href="http://caravancampingsales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Caravan Camping Sales</span>
                         </div>
                         <span class="content">Australia's No.1 place to buy, sell or research a caravan or camping equipment.</span>
                     </a>
                 </li>
                 <li class="trucksales">
                     <a target="_blank" href="http://trucksales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Trucksales</span>
                         </div>
                         <span class="content">Buy, sell or hire new and used trucks, buses and equipment at Australia's No. 1 online truck marketplace.</span>
                     </a>
                 </li>
                 <li class="constructionsales last">
                     <a target="_blank" href="http://constructionsales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Constructionsales</span>
                         </div>
                         <span class="content">Buy and sell new and used construction equipment and machinery at Australia's No. 1 online earthmoving marketplace.</span>
                     </a>
                 </li>
                 <li class="farmmachinerysales">
                     <a target="_blank" href="http://farmmachinerysales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Farmmachinerysales</span>
                         </div>
                         <span class="content">Australia’s No.1 place to buy, sell and research new and used farm machinery and livestock.</span>
                     </a>
                 </li>
                 <li class="motoring">
                     <a target="_blank" href="http://motoring.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Motoring</span>
                         </div>
                         <span class="content">Australia's most comprehensive coverage of what's new in the automotive space.</span>
                     </a>
                 </li>
                 <li class="tyresales last">
                     <a target="_blank" href="http://tyresales.com.au">
                         <div class="nav-network__container">
                             <span class="logo">Tyresales</span>
                         </div>
                         <span class="content">Buy tyres online and save up to 50% off RRP. Tyresales has over 1.000 accredited fitment centres Australia-wide.</span>
                     </a>
                 </li>
                 <li class="view-all"><a href="/carsales-network" class="view-all">View all</a></li>
             </ul>
        </li>
  

                    
                </ul>
            </nav>
            <div class="needHelp">
                Need help? <a href="tel:1300897372" itemprop="telephone">1300 897 372</a>
            </div>

        </div>
    </header>

    <div class="m-header">
        <a {{route('home')}} title="tyresales proudly part of carsales" style="height:62px; display:inline-block;"><img alt="tyresales proudly part of carsales" src="{{asset('public/front/vehicles/images/Tyresales_LockupCarsales_Horizontal_grey.png')}}" style="height:62px !important;" /></a>
        <a href="#" id="navigationToggle"></a>
        <nav role="navigation">
            <div id="m-navigationContainer">
            <ul class="m-navigation clearfix">
                @foreach($vehicle_categories as $vc)

                                @if($vc->url_page==1)
                                  @php $url = route('page',['slug'=>$vc->url]); @endphp
                                @else
                                  @php $url = route($vc->url); @endphp
                                @endif

            @if($vc->name=='Browse For Tyres')
            <li id="search"><a href="{{$url}}">{{$vc->name}}</a>
            @else
            <li><a href="{{$url}}">{{$vc->name}}</a>
            @endif    

            @if($vc->category->count() > 0)

             <ul>
                        @php $i=0;@endphp    
                        @foreach($vc->category as $cat)

                         @if($cat->url_page==1)
                                            @php $url = route('page',['slug'=>$cat->url]); @endphp 
                                          @else
                                            @php $url = $cat->url; @endphp
                                          @endif


                            <li><a href="{{$url}}"> {{$cat->name}}</a></li>
                        @php $i++;@endphp
                        @endforeach

                    </ul>


            @endif


        </li>
        @endforeach</ul>
        </div>
        </nav>
        <div class="m-advertising"></div>
    </div>

    <div role="main">
        <div id="FeedBack">
            <a href="/helpfindtyre" id="linkHelpFindTyreForm">
                <img alt="help me find tyre" src="{{asset('public/front/vehicles/images/helpmefind.png')}}" />
            </a>
        </div>
        <div class="feedback" id="content">

            <header class="quicksales" style="margin:0 auto; padding:0;">
                <a style="background-image:initial; text-indent:initial;" {{route('home')}} title="Tyresales">
                    <img alt="Tyresales" src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/Tyresales_Blue_WebVersion.png" style="max-height:100%;" />
                </a>
                <img alt="Proudly part of carsales" src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/PartOfCarsales_Lockup_grey.png" style="max-height: 100%;float:right;" />
            </header>

            <div class="headinggraphic headinggraphicsearchpage">
                <div class="panelArrow"></div>
                <div class="banner">

                    <div class="deliveryAndInstallation">
                        <i class="fa fa-truck fa-2x" aria-hidden="true"></i>
                        <span>All prices include delivery & installation<span class="disclaimerSymbol">+</span></span>
                    </div>

                    <div class="fitmentCenterLocation">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        <span>1245 Fitment Centres in AUS</span>

                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div>

            <div id="body">

                <div class="content">
                    <section class="content-wrapper main-content clear-fix gtm-event-target" data-gtm-event-trigger="PageView" data-gtm-event-body="{&quot;event&quot;:&quot;tyreSearch&quot;,&quot;ecommerce&quot;:{&quot;impressions&quot;:[{&quot;id&quot;:&quot;142281&quot;,&quot;name&quot;:&quot;NT860&quot;,&quot;price&quot;:&quot;108.00&quot;,&quot;item_price&quot;:&quot;108.00&quot;,&quot;category&quot;:&quot;Passenger&quot;,&quot;brand&quot;:&quot;NITTO&quot;,&quot;Is4WD&quot;:&quot;4x2&quot;,&quot;currency&quot;:&quot;AUD&quot;,&quot;variant&quot;:&quot;185/65R15 88V&quot;,&quot;list&quot;:&quot;Full 2010 Alfa Romeo 147 Tyre Prices&quot;,&quot;position&quot;:1},{&quot;id&quot;:&quot;105898&quot;,&quot;name&quot;:&quot;ASSURANCE FUELMAX&quot;,&quot;price&quot;:&quot;129.00&quot;,&quot;item_price&quot;:&quot;129.00&quot;,&quot;category&quot;:&quot;Passenger&quot;,&quot;brand&quot;:&quot;GOODYEAR&quot;,&quot;Is4WD&quot;:&quot;4x2&quot;,&quot;currency&quot;:&quot;AUD&quot;,&quot;variant&quot;:&quot;185/65R15 88V&quot;,&quot;list&quot;:&quot;Full 2010 Alfa Romeo 147 Tyre Prices&quot;,&quot;position&quot;:2}]},&quot;currencyCode&quot;:&quot;AUD&quot;}">

                        <form action="{{route('vehicle/search')}}" class="search-form" method="get">
                            <input id="search" name="search" type="hidden" value="" />
                            <input data-val="true" data-val-required="The EnumTyreType field is required." id="tyretype" name="tyretype" type="hidden" value="passenger" />
                            <input id="categories" name="categories" type="hidden" value="" />
                            <input id="brands" name="brands" type="hidden" value="" />
                            <input id="designedforvehiclemakes" name="designedforvehiclemakes" type="hidden" value="" />
                            <input id="pricefrom" name="pricefrom" type="hidden" value="" />
                            <input id="priceto" name="priceto" type="hidden" value="" />
                            <input id="promotion" name="promotion" type="hidden" value="" />
                            <input id="runflat" name="runflat" type="hidden" value="" />
                            <input id="p" name="p" type="hidden" value="" />
                            <div class="search-top">
                                <div class="breadcrumbs-otr">

                                    <ul class="breadcrumbs clearfix" vocab="http://schema.org/" typeof="BreadcrumbList">
                                        <li property="itemListElement" typeof="ListItem" class="">

                                            <a property="item" typeof="WebPage" {{route('home')}} class="">
                                                <span property="name">Home</span>
                                            </a>

                                            <meta property="position" content="1">
                                        </li>
                                        <li property="itemListElement" typeof="ListItem" class="">

                                            <a property="item" typeof="WebPage" href="/vehicles/" class="">
                                                <span property="name">Vehicles</span>
                                            </a>

                                            <meta property="position" content="2">
                                        </li>
                                        <li property="itemListElement" typeof="ListItem" class="">

                                            <a property="item" typeof="WebPage" href="/vehicles/alfa_romeo" class="">
                                                <span property="name">{{isset($vehicle)?$vehicle->name:''}}</span>
                                            </a>

                                            <meta property="position" content="3">
                                        </li>
                                        <li property="itemListElement" typeof="ListItem" class="">

                                            <a property="item" typeof="WebPage" class="last-breadcrumb">
                                                <span property="name">{{isset($models)?$models->name:''}}</span>
                                            </a>

                                            <meta property="position" content="4">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="searchMod">
                                <span class="searchResultsFound">
            <strong>{{$tyres->count()}}</strong> tyres found
        </span>
                                <ul class="tabNavigation clearfix mainSearch">
                                    <li class="searchAgainBy">Search by:</li>
                                    <li><a class="" href="#searchSizeDiv" id="tabSize">Size</a></li>
                                    <li><a <?php if($rn==0) echo 'class="selected"'; else ''; ?> href="#searchVehicleDiv" id="tabVehicle">Vehicle</a></li>
                                    <li><a <?php if($rn==1) echo 'class="selected"'; else ''; ?> class="" href="#searchBrandDiv" id="tabBrand">Brand</a></li>
                                </ul>


                                <div id="searchVehicleDiv" class="clearfix tab" <?php if($rn==1) echo 'style="display: none"'; else 'style="display: block"'; ?> >
                                    <div class="searchRow">
                                        <div class="searchSelect year">
                                            <label for="vyear">Year</label>
                                            <select class="vyear" id="vyear" name="year">
                                                <option value="{{NULL}}">Year</option>
                                                @for($i=date('Y');$i>=1956;$i--)

                                                    @if(isset($models))
                                                    @if($i==$models->year)
                                                    <option  selected="selected"  value="{{$i}}">{{$i}}</option>
                                                   @else
                                                    <option value="{{$i}}">{{$i}}</option>
                                                   @endif 
                                                   @else
                                                    <option value="{{$i}}">{{$i}}</option>
                                                   @endif
                                                    
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="searchSelect make">
                                            <label for="vMake">Make</label>
                                            <select class="vMake" id="vMake" name="make">
                                                <option value="{{NULL}}">Make</option>
                                               <option value="{{NULL}}">Make</option>
                                                @foreach($allvehicle as $veh)
                                                        
                                                @if(isset($smake))

                                                     @if($veh->id==$smake)
                                                        <option selected="selected" value="{{$veh->id}}">{{$veh->name}}</option>
                                                     @else
                                                        <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                     @endif 


                                                @else


                                                  @if(isset($vehicle))  
                                                   @if($veh->id==$vehicle->id)
                                                    <option selected="selected" value="{{$veh->id}}">{{$veh->name}}</option>
                                                   @else
                                                    <option value="{{$veh->id}}">{{$veh->name}}</option>
                                                   @endif 
                                                @else
                                                    <option value="{{$veh->id}}">{{$veh->name}}</option>                                                     
                                                @endif

                                                @endif                                                  
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="advancedLink">
                                            <a href="#" data-id="advancedSizeSearch">Advanced</a>
                                        </div>
                                    </div>

                                    <div class="searchRow">
                                        <div class="searchSelect model">
                                            <label for="vmodel">Model</label>
                                            <select class="vmodel" id="vmodel" name="model">
                                                <option value="{{NULL}}">Model</option>
                                                    <option value="{{NULL}}">Model</option>
                                                    @foreach($allmodels as $mod)

                                                    @if(isset($smodel))

                                                     @if($mod->id==$smodel)
                                                       <option selected="selected" value="{{$mod->id}}">{{$mod->name}}</option> 
                                                     @else
                                                        <option value="{{$mod->id}}">{{$mod->name}}</option>
                                                     @endif 


                                                    @else


                                                       @if(isset($models)) 
                                                        @if($mod->id==$models->id)
                                                            <option selected="selected" value="{{$mod->id}}">{{$mod->name}}</option>    
                                                        @else       
                                                             <option value="{{$mod->id}}">{{$mod->name}}</option>
                                                        @endif
                                                        @else
                                                             <option value="{{$mod->id}}">{{$mod->name}}</option>
                                                        @endif

                                                       @endif 
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="searchSelect">
                                            <label for="vSeries">Series</label>
                                            <select class="vSeries" id="vSeries" name="series">
                                               <option value="{{NULL}}">Series</option>
                                                @php $i=0; @endphp    
                                                @foreach($series as $ser)
                                                    

                                                    @if(isset($seriess))

                                                     @if($ser->id==$seriess)
                                                       <option selected="selected" value="{{$ser->id}}">{{$ser->name}}</option> 
                                                     @else
                                                        <option value="{{$ser->id}}">{{$ser->name}}</option>
                                                     @endif 


                                                    @else    

                                                    @if($i==0)
                                                    <option selected="selected" value="{{$ser->id}}">{{$ser->name}}</option>
                                                    @else
                                                    <option value="{{$ser->id}}">{{$ser->name}}</option>
                                                    @endif
                                                    @endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </select>
                                        </div>

                                        <input id="vehicleSearchButton" type="submit" value="Search" onclick="confirmSubmit('vehicle')" />
                                        <button id="resetFormVehicle" class="search-clearall">Clear All</button>
                                    </div>
                                    <div class="gtm-event-target" data-gtm-event-trigger="PageView" data-gtm-event-body="{&quot;event&quot;:&quot;setVehicle&quot;,&quot;make&quot;:&quot;Alfa Romeo&quot;,&quot;model&quot;:&quot;147&quot;}"></div>
                                    <div id="pnlTyreSizes" class="tireSizes searchRow clearfix">
                                        <div class="resultsLabel">
                                            <div> <span id="svmake">{{isset($vehicle)?$vehicle->name:''}}</span> <span id="svmodel">{{isset($models)?$models->name:''}}</span> <span id="svmake">{{isset($models)?$models->year:''}}</span> tyres that may fit your vehicle </div>
                                        </div>
                                        <div class="sizes">
                                            <div id="plcStandardSize" class="standardSizes">
                                                <div>
                                                    StandardSize<span class="faq">
                        <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
                        <span class="helpText">
                            <p style="margin: 0 0 0 0">This is the manufacturer’s original equipment tyre size.  e.g. 245/40R18 95W</p>
                        </span>
                                                    </span>
                                                </div>

                                                <div id="pnlStandardSize" class="sizeResults">
                                                    <div>

                                                       <!--  <input checked="False" class="vehicleSearchRadioButton" id="26654" name="size" onclick="vehicleSearchOptionSize(&#39;26654F&#39;);" type="radio" value="185-65r15_88v" />
                                                        <label for="185/65R15 88V">185/65R15 88V </label> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sizes">
                                            <div id="plcOptionalSize" CssClass="optionalSizes">
                                                <div style="white-space: nowrap;">
                                                    Or choose optional sizes<span class="faq">
                        <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
                        <span class="helpText">
                            <p style="margin: 0 0 0 0">
                                Most car manufacturers offer optional rim upgrades from the factory when a vehicle is purchased new. <br /> <br /> These will each have a unique tyre size specified by the manufacturer with a unique speed and load rating. e.g. 245/40R18 95W  (18 Inch rim option), or 245/35R19  93W (19 inch rim option).
                            </p>
                        </span>
                                                    </span>
                                                </div>
                                                <div id="pnlOptionalSize" class="sizeResults"><!-- 
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="19033F" name="size" onclick="vehicleSearchOptionSize(&#39;19033F&#39;);" type="radio" value="215-45r17_87y" />
                                                        <label for="215/45R17 87Y">215/45R17 87Y </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="19034F" name="size" onclick="vehicleSearchOptionSize(&#39;19034F&#39;);" type="radio" value="215-45r17_91z" />
                                                        <label for="215/45R17 91Z">215/45R17 91Z </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="23250F" name="size" onclick="vehicleSearchOptionSize(&#39;23250F&#39;);" type="radio" value="205-55r16_91w" />
                                                        <label for="205/55R16 91W">205/55R16 91W </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="23251F" name="size" onclick="vehicleSearchOptionSize(&#39;23251F&#39;);" type="radio" value="215-40r18_89" />
                                                        <label for="215/40R18 89">215/40R18 89 </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="23252F" name="size" onclick="vehicleSearchOptionSize(&#39;23252F&#39;);" type="radio" value="225-40r18_91z" />
                                                        <label for="225/40R18 91Z">225/40R18 91Z Front</label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="23252R" name="size" onclick="vehicleSearchOptionSize(&#39;23252R&#39;);" type="radio" value="235-35r18_98z" />
                                                        <label for="235/35R18 98Z">235/35R18 98Z Rear</label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="23253F" name="size" onclick="vehicleSearchOptionSize(&#39;23253F&#39;);" type="radio" value="225-45r17_91z" />
                                                        <label for="225/45R17 91Z">225/45R17 91Z </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="26655F" name="size" onclick="vehicleSearchOptionSize(&#39;26655F&#39;);" type="radio" value="195-60r15_88v" />
                                                        <label for="195/60R15 88V">195/60R15 88V </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="26656F" name="size" onclick="vehicleSearchOptionSize(&#39;26656F&#39;);" type="radio" value="205-55r16_91v" />
                                                        <label for="205/55R16 91V">205/55R16 91V </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="26657F" name="size" onclick="vehicleSearchOptionSize(&#39;26657F&#39;);" type="radio" value="215-45r17_87w" />
                                                        <label for="215/45R17 87W">215/45R17 87W </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="26658F" name="size" onclick="vehicleSearchOptionSize(&#39;26658F&#39;);" type="radio" value="225-40r18_92z" />
                                                        <label for="225/40R18 92Z">225/40R18 92Z </label>
                                                    </div>
                                                    <div>
                                                        <input class="vehicleSearchRadioButton" id="105018F" name="size" onclick="vehicleSearchOptionSize(&#39;105018F&#39;);" type="radio" value="185-65r15_88h" />
                                                        <label for="185/65R15 88H">185/65R15 88H </label>
                                                    </div>
                                                 --></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="searchRow advancedHidden advancedSizeSearch" style="display: none">

                                    </div>

                                </div>
                                <div id="searchSizeDiv" class="tab" style="display: none">
                                    <div class="searchRow">
                                        <div class="searchDiv">
                                            <span class="searchTabSubheading">Your tyre size:</span>
                                            <div class="searchSelect width">
                                                <label for="swidth">Width *</label>
                                                <select class="ddlSectionWidth" id="swidth" name="width">
                                                    <option value="">Width</option>
                                                    @foreach($width as $w)
                                                    @if(isset($s_width))
                                                        @if($s_width==$w)
                                                           <option selected="selected" value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>

                                                        @else
                                                           <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>

                                                        @endif

                                                    @else
                                                        <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>
                                                     @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="searchSelect profile">
                                                <label for="saspect">Profile</label>
                                                <select class="saspect" id="saspect" name="aspect">
                                                    <option value="">Profile</option>
                                                </select>
                                            </div>
                                            <div class="searchSelect rim">
                                                <label for="srim">Rim Diameter</label>
                                                <select class="ddlRimDiameter" id="srim" name="rim">
                                                    <option value="">Rim</option>
                                                </select>
                                            </div>
                                            <input id="sizeSearchButton" type="submit" value="Search" onclick="confirmSubmit('size')" />

                                            <div class="advancedLink">
                                                <a href="#" data-id="advancedSizeSearch">Advanced</a>
                                            </div>
                                        </div>
                                        <div>
                                            <button id="resetFormSize" class="search-clearall">Clear All</button>
                                        </div>
                                    </div>

                                    <div class="searchRow advancedHidden advancedSizeSearch" style="display: none">
                                        <span class="searchTabSubheading">Optional details:</span>
                                        <div class="searchSelect load">
                                            <label for="ddlLoadIndex">Load Index (Optional)</label>
                                            <select class="ddlLoadIndex" id="ddlLoadIndex" name="load">
                                                <option value="">Load Index</option>
                                                @foreach($load_index as $load)
                                                    <option value="{{$load->load_index}}">{{$load->load_index}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="faq">
        <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText">
            <p>Symbol which indicates the maximum weight each tyre can safely carry.</p>
            <p><a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables" target="_top"><img sfref="[images]c773fb0f-d095-4b3a-95b1-cbd060036a83" title="LoadIndex_info" alt="Tyre Load Index" src="{{asset('public/front/vehicles/images/loadindex_info.jpg')}}?sfvrsn=2" /><br />
            </a></p>
        </div>
    </span>
                                        <div class="searchSelect">
                                            <label for="ddlSpeedIndex">Speed Index (Optional)</label>
                                            <select class="ddlSpeedIndex" id="ddlSpeedIndex" name="speed">
                                                <option value="">Speed Index</option>
                                                @foreach($speed_index as $speed)
                                                    <option value="{{$speed->speed_index}}">{{$speed->speed_index}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="faq"><img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText">
            <p>Symbol which indicates the maximum speed at which a tyre can safely travel corresponding to its load index.</p>
            <p><a href="/help/load-and-speed-index-tables"><img src="{{asset('public/front/vehicles/images/speedindex_info.jpg?sfvrsn=2')}}" alt="Tyre Speed Index" title="SpeedIndex_info" /><br />
            </a></p>
        </div>
    </span>
                                        <div class="searchSelect checkboxes" style="width: 90px;">
                                            <label>
                                                <input type="checkbox" name="runflat" class="chkRunFlat" id="chkRunFlat"> Run Flat
                                            </label>
                                        </div>

                                    </div>

                                    <div class="tireSizes clearfix">
                                        <div>
                                            <div id="sizeSeoTag" style="display: none"></div>
                                        </div>
                                    </div>

                                </div>

                               
                                <div id="searchBrandDiv" class="tab" <?php if($rn==1) echo 'style="display: block"'; else 'style="display: none"';  ?>>
                                    <div class="searchRow" style="height: 42px">
                                        <div class="searchSelect brand">
                                            <label for="ddlBrand">Brand *</label>
                                            <select class="ddlBrand" id="ddlBrand" name="brand">
                                                <option value="">Brand</option>
                                                @foreach($brands as $br)
                                                    <option value="{{$br->url}}">{{$br->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="searchSelect model">
                                            <label for="ddlBrandModel">Pattern</label>
                                            <select class="ddlBrandModel" id="ddlBrandModel" name="pattern">
                                                <option value="">Pattern</option>
                                            </select>
                                        </div>

                                        <div class="advancedLink"><a href="#" data-id="advancedBrandSearch">Advanced</a></div>

                                    </div>
                                    <div class="searchRow" style="height: 42px">
                                        <div>
                                            <div class="searchSelect width">
                                                <label for="ddlBrandSectionWidth">Width *</label>
                                                <select class="ddlBrandSectionWidth" id="ddlBrandSectionWidth" name="width">
                                                    <option value="">Width</option>
                                                     @foreach($width as $w)
                                                    @if(isset($s_width))
                                                        @if($s_width==$w)
                                                           <option selected="selected" value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>

                                                        @else
                                                           <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>

                                                        @endif

                                                    @else
                                                        <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>
                                                     @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="searchSelect profile">
                                                <label for="ddlBrandAspectRatio">Profile</label>
                                                <select class="ddlBrandAspectRatio" id="ddlBrandAspectRatio" name="aspect">
                                                    <option value="{{NULL}}">Profile</option>
                                                   
                                                </select>
                                            </div>
                                            <div class="searchSelect rim">
                                                <label for="ddlBrandRimDiameter">Rim Diameter</label>
                                                <select class="ddlBrandRimDiameter" id="ddlBrandRimDiameter" name="rim">
                                                    <option value="{{NULL}}">Rim Diameter</option>
                                                   
                                                </select>
                                            </div>
                                            <input id="brandSearchButton" type="submit" value="Search" onclick="confirmSubmit('brand')" />
                                        </div>
                                        <div>
                                            <button id="resetFormBrand" class="search-clearall">Clear All</button>
                                        </div>
                                    </div>
                                    <div class="searchRow advancedHidden advancedBrandSearch" style="display: none; overflow:visible">
                                        <span class="searchTabSubheading">Optional details:</span>
                                        <div class="searchSelect load">
                                            <label>Load Index (Optional)</label>
                                            <label for="ddlBrandLoadIndex">Load Index (Optional)</label>
                                            <select class="ddlBrandLoadIndex" id="ddlBrandLoadIndex" name="load">
                                                <option value="">Load Index</option>
                                                 @foreach($load_index as $load)
                                                    <option value="{{$load->load_index}}">{{$load->load_index}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="faq">
                                            <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
                                            <div class="helpText" style="z-index: 9999">
                                                <div style="padding-bottom: 10px">Symbol which indicates the maximum weight each tyre can safely carry.</div>
                                                <div>
                                                    <a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables" target="_top">
                                                        <img sfref="[images]c773fb0f-d095-4b3a-95b1-cbd060036a83" title="LoadIndex_info" alt="Tyre Load Index" src="{{asset('public/front/vehicles/images/loadindex_info.jpg')}}" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchSelect speed">
                                            <label for="ddlBrandSpeedIndex">Speed Index (Optional)</label>
                                            <select class="searchFilter ddlBrandSpeedIndex" id="ddlBrandSpeedIndex" name="speed">
                                                <option value="">Speed Index</option>
                                                 @foreach($speed_index as $speed)
                                                    <option value="{{$speed->speed_index}}">{{$speed->speed_index}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="faq">
                                            <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
                                            <div class="helpText">
                                                <div style="padding-bottom: 10px">Symbol which indicates the maximum speed at which a tyre can safely travel corresponding to its load index.</div>
                                                <div>
                                                    <a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables">
                                                        <img sfref="[images]b3024559-58fe-4810-a21f-a3cc6cd03801" src="{{asset('public/front/vehicles/images/speedindex_info.jpg')}}" alt="Tyre Speed Index" title="SpeedIndex_info" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="searchSelect checkboxes" style="width: 90px;">
                                            <label>
                                                <input type="checkbox" name="runflat" class="chkBrandRunFlat" id="chkBrandRunFlat" <?php if($rn==1) echo 'checked="checked"'; ?>> Run Flat
                                            </label>
                                        </div>

                                    </div>

                                    <div class="tireSizes clearfix">
                                        <div>

                                            <div id="brandSeoTag" style="display: none">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div style="background:#323132;padding:0 16px 16px 16px; display:flex; justify-content:space-around; justify-content:space-evenly;">
                                    <div>
                                        <label for="delivery" style="color:#fff;">Fitment In:</label>

                                        <select id="ddlToDeliveryLocation" name="delivery">
                                            <option value="">Outside Australia</option>
                                            @foreach($regions as $reg)
                                            @if(isset($delivery))
                                                @if($delivery==$reg->nick)
                                                        <option selected="selected" value="{{$reg->nick}}">{{$reg->name}}</option> 
                                                @else

                                                        <option value="{{$reg->nick}}">{{$reg->name}}</option> 
                                                @endif

                                            @else
                                                        <option value="{{$reg->nick}}">{{$reg->name}}</option> 
                                            @endif

                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="SelectedSearchOrder" style="color:#fff;">Sort By</label>
                                        <select class="searchOrderFilter" id="orderResults" name="sortby">
                                            @if(isset($sortby))
                                                @if($sortby=='pricehighlow')

                                                <option selected="selected" value="pricehighlow">Price (high - low)</option>                                                
                                                @else
                                                <option value="pricehighlow">Price (high - low)</option>                                               
                                                @endif    


                                                @if($sortby=='pricelowhigh')
                                                <option selected="selected" value="pricelowhigh">Price (low - high)</option>
                                                
                                                @else
                                                <option value="pricelowhigh">Price (low - high)</option>
                                               
                                                @endif


                                                @if($sortby=='brandatoz')
                                                <option selected="selected" value="brandatoz">Brand (A - Z)</option>
                                                @else
                                                <option value="brandatoz">Brand (A - Z)</option>                                                
                                                @endif                                                     

                                                @if($sortby=='brandztoa')
                                                <option selected="selected" value="brandztoa">Brand (Z - A)</option>
                                                @else
                                                <option value="brandztoa">Brand (Z - A)</option>                                                
                                                @endif

                                                @if($sortby=='runflat')
                                                <option selected="selected" value="runflat">Run Flat</option>
                                                
                                                @else
                                                <option value="runflat">Run Flat</option>                                                
                                                @endif


                                            @else
                                                <option selected="selected" value="pricelowhigh">Price (low - high)</option>
                                                <option value="pricehighlow">Price (high - low)</option>
                                                <option value="brandatoz">Brand (A - Z)</option>
                                                <option value="brandztoa">Brand (Z - A)</option>
                                                <option value="runflat">Run Flat</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="searchResults">
                                <h1 class="resultsInfo">{{strtoupper($brand_id->name)}} Tyre Prices</h1>
                            </div>
                            <div class="searchResultsBannerContainer">
                                <img src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/images/sale/133/banner.png" alt="May Promotions Search Banner" title="May Promotions Search Banner" />
                                <span class="searchResultsBannerFinePrint"></span>
                            </div>
                        </form>

                        <div class="patternContent">
                            {!!$brand_id->description!!}
                        </div>
                        
                        <div class="tyrePanels">

                            <div class="tyrePanelRow">
                                @foreach($tyres as $ty)
                                <div class="tyrePanel_GBB">

                                    <div id="tyrePanel_142281" class="tyrePanel getQuote" style="opacity: <?php if($ty->stock_available > 0) echo 1; else echo 0.45 ?>;" data-gtm-event-body="{&quot;event&quot;:&quot;productClick&quot;,&quot;ecommerce&quot;:{&quot;click&quot;:{&quot;actionField&quot;:{&quot;list&quot;:&quot;Full 2010 Alfa Romeo 147 Tyre Prices&quot;},&quot;products&quot;:[{&quot;id&quot;:&quot;142281&quot;,&quot;name&quot;:&quot;NT860&quot;,&quot;price&quot;:&quot;108.00&quot;,&quot;item_price&quot;:&quot;108.00&quot;,&quot;category&quot;:&quot;Passenger&quot;,&quot;brand&quot;:&quot;NITTO&quot;,&quot;Is4WD&quot;:&quot;4x2&quot;,&quot;currency&quot;:&quot;AUD&quot;,&quot;variant&quot;:&quot;185/65R15 88V&quot;,&quot;list&quot;:&quot;Full 2010 Alfa Romeo 147 Tyre Prices&quot;,&quot;position&quot;:1}]}},&quot;currencyCode&quot;:&quot;AUD&quot;}">

                                        <div class="logo">
                                            <img src="{{$ty->tyre_brands->image}}" alt="{{$ty->tyre_brands->name}}" style="width: 60%">
                                        </div>

                                        @if($ty->on_sale==1)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon-wrapper-red-small">
                                                    <div class="ribbon-red-small">
                                                        <span>SALE</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        <div class="tyreName">
                                            @if($ty->stock_available > 0)
                                            <a class="productButton" href="{{route('buy/tyre',['brand'=>$ty->tyre_brands->url,'pattern'=>$ty->tyre_pattern->url,'tyre'=>$ty->url])}" data-id="142281" data-brand="NITTO" data-pattern="NT860" data-tyresize="185/65R15 88V" data-tyretypeid="1">{{$ty->name}}</a>
                                            @else
                                            <a class="productButton" href="#" data-id="142281" data-brand="NITTO" data-pattern="NT860" data-tyresize="185/65R15 88V" data-tyretypeid="1">{{$ty->name}}</a>
                                            @endif

                                            <div>{{$ty->tyre_pattern->name}}/{{$ty->width}} {{$ty->profile}} /{{$ty->rim_size}}</div>

                                        </div>
                                        <div class="tyreCarCategories">
                                            <p>{{$ty->tyre_attributes->name}}</p>
                                        </div>
                                        <div class="tyrethumbnail resultMoreInfo">
                                            @if(!empty($ty->tyre_discounts))
                                            <div class="promotion-bubble-container">
                                                <div class="specialOffer">
                                                    {{$ty->tyre_discounts->discount_percent}}% off <br>
                                                    {{$ty->tyre_discounts->discount_name}}
                                                </div>
                                            </div>
                                            @endif

                                                                                           @if($ty->stock_available > 0)
                                            <a class="productButton" href="{{route('buy/tyre',['brand'=>$ty->tyre_brands->url,'pattern'=>$ty->tyre_pattern->url,'tyre'=>$ty->url])}}" id="moreinfo_142281" data-id="142281" data-brand="NITTO" data-pattern="NT860" data-tyresize="185/65R15 88V" data-tyretypeid="1">
                                                <img src="{{$ty->image}}" width="73" height="100" alt="NITTO NT860 185/65R15 88V">
                                            </a>
                                            @else
                                            <a class="productButton" href="#" id="moreinfo_142281" data-id="142281" data-brand="NITTO" data-pattern="NT860" data-tyresize="185/65R15 88V" data-tyretypeid="1">
                                                <img src="{{$ty->image}}" width="73" height="100" alt="NITTO NT860 185/65R15 88V">
                                            </a>
                                            @endif
                                        </div>

                                        <div class="tyre-rightside">
                                            @if($ty->stock_available > 0)
                                            @if($ty->run_flat==1)    
                                            <div class="icons">
                                                <span class="runFlat"><span class="labelRunFlat">Run flat</span></span>
                                            </div>
                                            @endif
                                            @endif

                                @if($ty->stock_available > 0)         
                                @if(!empty($ty->tyre_discounts))
                                                            @if($ty->tyre_discounts->active==1)
                                                                @php $price = $ty->price;
                                                                        $price = $price * ($ty->tyre_discounts->discount_percent/100);
                                                                      $price =  $ty->price - $price; 
                                                                @endphp
                                                            
                                                            @else
                                                                @php $price = $ty->price; @endphp    
                                                            @endif
                                                        @else
                                                            @php $price = $ty->price; @endphp         
                                                        @endif

                                            <div class="price">
                                                    <div class="rrp-outer" style="height: initial;">
                                                            <div class="rrp"></div>
                                                    </div>
                                                    @if(!empty($ty->tyre_discounts))
                                                    <div class="rrp-outer" style="height: initial;">
                                                            <div class="price-was-outer">
                                                                <div class="price-was">
                                                                    Was <span class="wasPrice">{{$ty->price}}</span>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    @endif
                                                    <div class="today-price-text">Today's Price</div>
                                                            <div class="cost">
                                                                {{$price}}
                                                            </div>
                                                            <div class="each">each</div>
                                                        <div class="fourTyrePromotionText">&nbsp;</div>
                                                        <div class="fourTyrePromotionPrice">&nbsp;</div>
                                                        <div class="fourTyrePromotionEach">&nbsp;</div>
                                            </div>
                                            @endif
                                        </div>

                                        @if($ty->stock_available > 0) 
                                        <div class="deliverylocation">
                                            <div class="deliverylocation-text">Includes fitment  est. 26 May</div>
                                        </div>
                                        @endif

                                        @if($ty->stock_available == 0)
                                        <img alt="Sold out" src="{{asset('public/front/sold-out.gif')}}" class="sold-out">
                                        @endif
                                        <div class="trust-pilot">
                                            <div class="grayline graylineWidthTop"></div>
                                        </div>
                                        @if($ty->stock_available > 0) 
                                            <div class="buyPanel">
                                                        <div class="quantity">
                                                            <label for="quantity_155884">QTY</label>
                                                            <select id="quantity_155884">
                                                                @for($i=$ty->max_order_quantity;$i>=$ty->min_quantity;$i--)
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                @endfor        

                                                            </select>
                                                        </div>
                                                        <div class="tyreProduct">
                                                            <a class="button add productButton productViewButton" 
                                                            href="{{route('buy/tyre',['brand'=>$ty->tyre_brands->url,'pattern'=>$ty->tyre_pattern->url,'tyre'=>$ty->url])}}" data-id="155884" data-brand="GOODYEAR" data-pattern="EAGLE EFFICIENT GRIP PERFORMANCE" data-tyresize="205/60R16 92V" data-tyretypeid="1">View</a>
                                                        </div>
                                                    </div>                                        
                                                @endif    

                                        <div class="findTyreForm">
                                            <p>We do not currently have this tyre in stock.</p>
                                            <p>Complete your details below and we will try and find it for you.</p>

                                            <form action="/tyrepanel/outofstockform" method="post">
                                                <input data-val="true" data-val-number="The field StockId must be a number." data-val-required="The StockId field is required." id="StockId" name="StockId" type="hidden" value="142281" />
                                                <div>
                                                    <label for="NameTextBox">Name</label>
                                                    <input data-val="true" data-val-required="We need your name" id="NameTextBox" name="Name" placeholder="Name *" type="text" value="" />
                                                    <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div>
                                                    <label for="EmailTextBox">Email</label>
                                                    <input data-val="true" data-val-email="Valid email only" data-val-required="We need your email" id="EmailTextBox" name="Email" placeholder="Email *" type="email" value="" />
                                                    <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                                </div>
                                                <div>
                                                    <label for="PhoneTextBox">Phone</label>
                                                    <input data-val="true" data-val-phone="Valid phone number only" data-val-required="We need your phone" id="PhoneTextBox" name="Phone" placeholder="Phone Number *" type="tel" value="" />
                                                    <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                                                </div>
                                                <div>
                                                    <label for="PostcodeTextBox">Postcode</label>
                                                    <input data-val="true" data-val-length="Postcode numeric only" data-val-length-max="5" data-val-length-min="4" data-val-range="Postcode numeric only" data-val-range-max="99999" data-val-range-min="1" data-val-required="We need your postcode" id="PostcodeTextBox" name="Postcode" placeholder="Postcode *" type="text" value="" />
                                                    <span class="field-validation-valid" data-valmsg-for="Postcode" data-valmsg-replace="true"></span>
                                                </div>
                                                <div>
                                                    <input type="submit" value="Submit" />
                                                    <i class="fa fa-cog fa-spin fa-2x fa-fw"></i>
                                                </div>
                                            </form>
                                            <div class="success-message">Tyre expert will contact you shortly.</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                            </div>
                        </div>

                        <div class="paginationButtons">
                            <!-- <div class="pagination">

                                <a>Prev</a>

                                <span class="current pageButton">1</span>

                                <a>Next</a>
                            </div> -->
                        </div>

                        

                      @if($rn==0) 

                        <div class="footnoteVehicleDisclaimer">
                            This search provides tyre information based upon original equipment for the vehicle entered by you, but may not be accurate for what you require. To avoid ordering the wrong tyres we advise you to check the <a class="tyreplacardDisclaimer" href="javascript:void(0)">tyre placard</a> in your vehicle, and use our
                            <a href="https://www.tyresales.com.au/customer-service/tyre-size-guide" target="_blank">Tyre Size Guide</a> to check the size of the current tyres on your vehicle.
                        </div>
                       

@if($tyres->count() == 0)
<div class="getHelpForm">
                            <p>
                                Unfortunately we have no tyres available for that search!
                            </p>
                            <p>
                                Please fill in the form below and one of our Tyre Experts will be able to help you.
                            </p>

                            <div id="getHelpUptPanel">
                                <div class="getHelpFormBody">
                                    <div id="pnlForm" class="gethelpForm">
                                        <form action="{{route('help-tyre-not-found')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="searchField clearfix">
                                                <label for="txtName">Name</label>
                                                <input data-val="true" data-val-required="We need your name" id="txtName" name="Name" placeholder="Enter your name" type="text" value="" />
                                                <span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="searchField clearfix">
                                                <label for="txtEmail">Email</label>
                                                <input data-val="true" data-val-email="Valid email only" data-val-required="We need your email" id="txtEmail" name="Email" placeholder="Enter your email address" type="text" value="" />
                                                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="searchField clearfix">
                                                <label for="txtPhone">Phone</label>
                                                <input data-val="true" data-val-phone="Valid phone number only" data-val-required="We need your phone" id="txtPhone" name="Phone" placeholder="Enter your phone" type="text" value="" />
                                                <span class="field-validation-valid" data-valmsg-for="Phone" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="searchField clearfix">
                                                <label for="txtPostcode">Postcode</label>
                                                <input data-val="true" data-val-length="Postcode numeric only" data-val-length-max="5" data-val-length-min="4" data-val-range="Postcode numeric only" data-val-range-max="99999" data-val-range-min="1" data-val-required="We need your postcode" id="txtPostcode" name="Postcode" placeholder="Enter your postcode" type="text" value="" />
                                                <span class="field-validation-valid" data-valmsg-for="Postcode" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="searchField clearfix">
                                                <label for="ddlMakeHelpForm">Make</label>
                                                <select class="searchFilterGetHelpForm" id="ddlMakeHelpForm" name="Make" style="width: 238px;">
                                                    <option value="">Select vehicle make</option>
                                                    <option value="ALFA">Alfa Romeo</option>
                                                    <option value="ASTO">Aston Martin</option>
                                                    <option value="AUDI">Audi</option>
                                                    <option value="BENT">Bentley</option>
                                                    <option value="BMW">BMW</option>
                                                    <option value="CHER">Chery</option>
                                                    <option value="CHEV">Chevrolet</option>
                                                    <option value="CHRY">Chrysler</option>
                                                    <option value="CITR">Citroen</option>
                                                    <option value="DAEW">Daewoo</option>
                                                    <option value="DAIH">Daihatsu</option>
                                                    <option value="DODG">Dodge</option>
                                                    <option value="FERR">Ferrari</option>
                                                    <option value="FIAT">Fiat</option>
                                                    <option value="FORD">Ford</option>
                                                    <option value="FPV">Ford Performance Vehicles</option>
                                                    <option value="FOTO">Foton</option>
                                                    <option value="GEEL">Geely</option>
                                                    <option value="GREA">Great Wall</option>
                                                    <option value="HOLD">Holden</option>
                                                    <option value="HSV">Holden Special Vehicles</option>
                                                    <option value="HOND">Honda</option>
                                                    <option value="HUMM">Hummer</option>
                                                    <option value="HYUN">Hyundai</option>
                                                    <option value="INFI">Infiniti</option>
                                                    <option value="ISUZ">Isuzu</option>
                                                    <option value="JAGU">Jaguar</option>
                                                    <option value="JEEP">Jeep</option>
                                                    <option value="KIA">Kia</option>
                                                    <option value="LAMB">Lamborghini</option>
                                                    <option value="LAND">Land Rover</option>
                                                    <option value="LEXU">Lexus</option>
                                                    <option value="LOTU">Lotus</option>
                                                    <option value="MASE">Maserati</option>
                                                    <option value="MAZD">Mazda</option>
                                                    <option value="MCLA">McLaren</option>
                                                    <option value="MERC">Mercedes-Benz</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MINI">MINI</option>
                                                    <option value="MITS">Mitsubishi</option>
                                                    <option value="NISS">Nissan</option>
                                                    <option value="PEUG">Peugeot</option>
                                                    <option value="PORS">Porsche</option>
                                                    <option value="PROT">Proton</option>
                                                    <option value="RENA">Renault</option>
                                                    <option value="ROLL">Rolls-Royce</option>
                                                    <option value="ROVE">Rover</option>
                                                    <option value="SAAB">Saab</option>
                                                    <option value="SEAT">Seat</option>
                                                    <option value="SKOD">SKODA</option>
                                                    <option value="SMAR">smart</option>
                                                    <option value="SSAN">SsangYong</option>
                                                    <option value="SUBA">Subaru</option>
                                                    <option value="SUZU">Suzuki</option>
                                                    <option value="TESL">Tesla</option>
                                                    <option value="TOYO">Toyota</option>
                                                    <option value="TRIU">Triumph</option>
                                                    <option value="VOLK">Volkswagen</option>
                                                    <option value="VOLV">Volvo</option>
                                                </select>
                                                <span class="field-validation-valid" data-valmsg-for="Make" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="searchField clearfix">
                                                <label for="txtComments">Comments</label>
                                                <textarea cols="20" data-val="true" data-val-required="We need your comments" id="txtComments" name="Comments" placeholder="Tell us as much as you can about your vehicle and tyres. We will contact you to help you determine the best tyres to suit your vehicle and budget" rows="2">
                                                </textarea>
                                                <span class="field-validation-valid" data-valmsg-for="Comments" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="clear"></div>
                                            <input value="Submit" id="btnSubmitGetHelpForm" class="getQuoteButton" type="submit" style="">
                                            <span class="footnote">
                        Please view our <a href="https://www.tyresales.com.au/privacy-policy" target="_blank">Personal Information Collection Statement</a>. By clicking the submit button you acknowledge that you have read and agree to abide by the Tyresales <a href="https://www.tyresales.com.au/terms--and--conditions" target="_blank">Terms and Conditions</a> and <a href="https://www.tyresales.com.au/privacy-policy" target="_blank">Privacy Policy</a>.
                    </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                @endif
                @else

                @endif
                    </section>

                    <div class="special-countdown-mrec-container">

                    </div>

                    <aside>

                        <div>
                            <div class="banner-ad" id="Tile3" style="height: 250px; width: 300px;">
                                <script type="text/javascript">

                                </script>
                            </div>
                        </div>

                        <div>

                            <div class="search-filter">

                                <div class="title1">REFINE SEARCH</div>

                                <div class="filter-categories">
                                    <div class="tyrecategories-title">
                                        <div id="categoryCollapseButton" class="title-float-left" role="button" data-toggle="collapse" href="#tyrecategorycollapse" aria-expanded="false" aria-controls="tyrecategorycollapse">
                                            <a class="title2 title-inlineblock">Tyre Attributes</a>
                                            <div class="glyphicon glyphicon-chevron-down"></div>
                                        </div>

                                        <input id="resetFilterSearchButton" type="button" value="Clear All" onclick="resetFilter()" class="reset-filter-button" />
                                    </div>
                                    <div class="in" id="tyrecategorycollapse">

                                        <div class="list-categories">
                                            
                                            @foreach($tyreattributes as $attr)
                                            <div>
                                                <label>
                                                    @if(isset($cate))

                                                            @if(in_array($attr->id, $cate))
                                                    <input type="checkbox" name="categories[]" checked="checked" value="{{$attr->id}}" />
                                                             @else
                                                             
                                                    <input type="checkbox" name="categories[]" value="{{$attr->id}}" />
                                                             @endif   
                                                    @else
                                                    <input type="checkbox" name="categories[]" value="{{$attr->id}}" />
                                                    @endif

                                                    <span class="listText">{{$attr->name}}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-price">
                                    <div class="title2">Price</div>

                                    <div class="list-categories">
                                        <div class="filter-price-from">
                                            <label for="SelectedPriceFrom">From</label>
                                            <select class="filter-price-dropdown price-from" id="SelectedPriceFrom" name="SelectedPriceFrom">
                                                <option value="null">Min</option>
                                                @for($i=50;$i<=1000;$i=$i+50)
                                                 @if(isset($pricefrom))
                                                    @if($pricefrom == $i)
                                                        <option selected="selected" value="{{$i}}">${{$i}}</option>
                                                    @else
                                                        <option value="{{$i}}">${{$i}}</option>
                                                    @endif
                                                 @else
                                                        <option value="{{$i}}">${{$i}}</option>
                                                 @endif   

                                                @endfor
                                            </select>
                                        </div>

                                        <div class="filter-price-to">
                                            <label for="SelectedPriceTo">To</label>
                                            <select class="filter-price-dropdown price-to" id="SelectedPriceTo" name="SelectedPriceTo">
                                                <option value="null">Max</option>
                                                @for($i=50;$i<=1000;$i=$i+50)
                                                 @if(isset($pricefrom))
                                                    @if($priceto == $i)
                                                        <option selected="selected" value="{{$i}}">${{$i}}</option>
                                                    @else
                                                        <option value="{{$i}}">${{$i}}</option>
                                                    @endif
                                                 @else
                                                        <option value="{{$i}}">${{$i}}</option>
                                                 @endif   

                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="filter-promotions">
                                    <div class="title2">Promotions</div>

                                    <div class="list-categories">
                                        <div class="promotion-list">

                                            <input type="checkbox" id="SelectedHasPromotion" name="SelectedHasPromotion" />
                                            <label for="Show_only_promotions">Show only promotions</label>
                                            <br />
                                            <input type="checkbox" id="PromoId" name="PromoId" value="588,592,593,594,595,596" />
                                            <label for="May_Promotions_Search_Banner">May Promotions Search Banner</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="filter-promotions">
                                    <div class="title2">RunFlat</div>

                                    <div class="list-categories">
                                        <div class="runflat-list">

                                            @if(isset($runflat))
                                            <input type="checkbox" id="SelectedHasRunFlat" checked="checked" name="SelectedHasRunFlat" />
                                            @else
                                            <input type="checkbox" id="SelectedHasRunFlat" name="SelectedHasRunFlat" />
                                            @endif

                                            <label for="Show_only_Run_Flat_tyres">Show only Run Flat tyres</label>

                                        </div>
                                    </div>

                                </div>

                                <div class="filter-brands">
                                    <div id="brandsCollapseButton" class="" role="button" data-toggle="collapse" href="#brandscollapse" aria-expanded="false" aria-controls="brandscollapse">
                                        <a class="title2 title-inlineblock">Tyre Brands</a>
                                        <div class="glyphicon glyphicon-chevron-down"></div>
                                    </div>
                                    <div class="in" id="brandscollapse">

                                        <div class="list-categories">
                                            @foreach($brands as $br)

                                            <div>
                                                <label>
                                                    @if(isset($brd)) 
                                                    @if(in_array($br->id, $brd))
                                                    <input type="checkbox" name="brands[]" checked="checked" value="{{$br->id}}" />
                                                    @else
                                                             
                                                    <input type="checkbox" name="brands[]" value="{{$br->id}}" />
                                                    @endif   
                                                    @else
                                                    <input type="checkbox" name="brands[]" value="{{$br->id}}" />
                                                    @endif
                                                    <span class="listText">{{$br->name}}</span>
                                                </label>
                                            </div>

                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div class="center-button">
                                    <input id="filterSearchButton" type="submit" value="Update Search" onclick="searchFilter()" class="search-filter-button" />

                                </div>
                            </div>

                        </div>

                        <div id="LiveDiv">
                            <div class="lhnInviteContainer">
                                <div class="LHNInviteTitle">
                                    <img alt="Livechat" src="{{asset('public/front/vehicles/images/LiveChatGraphic-header.png')}}" />
                                </div>
                                <div class="LHNInviteMessage">
                                    <p>We have a tyre expert to help you.</p>
                                    <p><span>Hi!</span> - Let's get your questions answered.
                                    </p>
                                </div>

                                <div class="LHNInviteButtons">
                                    <div class="InviteAcceptButtonWrap">

                                        <span class="NeepHelpContactNumber">1300 897 372</span>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="Zsmenu" class="lhnInviteContainer">
                            <div class="LHNInviteTitle">
                                <img alt="Livechat" src="{{asset('public/front/vehicles/images/LiveChatGraphic-header.png')}}" />
                            </div>
                            <div id="Zsleft" class="LHNInviteMessage">
                                <p>We have a tyre expert to help you.</p>
                                <p><span>Hi!</span> - Let's get your questions answered.</p>
                            </div>

                            <div class="LHNInviteButtons">
                                <a class="LHNInviteCloseButton" onclick="CloseLHNInvite();return false;" href="#">Hide</a>
                                <div class="InviteAcceptButtonWrap">
                                    <a class="LHNInviteAcceptButton" onclick="OpenLHNChat();return false;" href="#">Start Chat</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="banner-ad" id="Tile4" style="height: 250px; width: 300px;">
                                <script type="text/javascript">

                                </script>
                            </div>
                        </div>

                        <div class="sideCategory">

                            <ul class="clearfix">
                                <li><a href="/vehicles/alfa_romeo/1300">1300</a></li>
                                <li><a href="/vehicles/alfa_romeo/147">147</a></li>
                                <li><a href="/vehicles/alfa_romeo/156">156</a></li>
                                <li><a href="/vehicles/alfa_romeo/159">159</a></li>
                                <li><a href="/vehicles/alfa_romeo/1600">1600</a></li>
                                <li><a href="/vehicles/alfa_romeo/164">164</a></li>
                                <li><a href="/vehicles/alfa_romeo/166">166</a></li>
                                <li><a href="/vehicles/alfa_romeo/1750">1750</a></li>
                                <li><a href="/vehicles/alfa_romeo/2000">2000</a></li>
                                <li><a href="/vehicles/alfa_romeo/2600">2600</a></li>
                                <li><a href="/vehicles/alfa_romeo/4c">4C</a></li>
                                <li><a href="/vehicles/alfa_romeo/alfa_33">Alfa 33</a></li>
                                <li><a href="/vehicles/alfa_romeo/alfa_75">Alfa 75</a></li>
                                <li><a href="/vehicles/alfa_romeo/alfa_90">Alfa 90</a></li>
                                <li><a href="/vehicles/alfa_romeo/alfasud">Alfasud</a></li>
                                <li><a href="/vehicles/alfa_romeo/alfetta">Alfetta</a></li>
                                <li><a href="/vehicles/alfa_romeo/brera">Brera</a></li>
                                <li><a href="/vehicles/alfa_romeo/giulia">Giulia</a></li>
                                <li><a href="/vehicles/alfa_romeo/giulietta">Giulietta</a></li>
                                <li><a href="/vehicles/alfa_romeo/gt">GT</a></li>
                                <li><a href="/vehicles/alfa_romeo/gtv">GTV</a></li>
                                <li><a href="/vehicles/alfa_romeo/mito">MiTo</a></li>
                                <li><a href="/vehicles/alfa_romeo/montreal">Montreal</a></li>
                                <li><a href="/vehicles/alfa_romeo/spider">Spider</a></li>
                                <li><a href="/vehicles/alfa_romeo/sprint">Sprint</a></li>
                            </ul>
                        </div>
                    </aside>

                </div>

                <script src="{{asset('public/front/vehicles/search.passenger.service.js?v=2019-04-04')}}"></script>
                <script src="{{asset('public/front/vehicles/search.passenger.js?v=2019-04-04')}}"></script>
                <script src="{{asset('public/front/vehicles/search.passenger.gethelpform.js?v=2019-04-04')}}"></script>
                <script src="{{asset('public/front/vehicles/tyrepanel.findmethistyreform.js?v=2019-04-04')}}"></script>

                <script src="{{asset('public/front/vehicles/search.truck.service.js?v=2019-04-04')}}"></script>
                <script src="{{asset('public/front/vehicles/search.truck.js?v=2019-04-04')}}"></script>

                <script src="{{asset('public/front/vehicles/search.otr.service.js?v=2019-04-04')}}"></script>
                <script src="{{asset('public/front/vehicles/search.otr.js?v=2019-04-04')}}"></script>

                <script src="{{asset('public/front/vehicles/search.samedayfitment.js?v=2019-04-04')}}" async></script>
                <script>
                    //<![CDATA[
                    if (typeof TyreSales !== "undefined") {
                        TyreSales.search.init("/vehicles/alfa_romeo/147");
                    }
                    //]]>
                </script>
            </div>
        </div>
    </div>

    <div class="here-is-how-it-works">
        <h2 class="explanation">Here's how it works...</h2>
        <div class="reasons">
            <div class="reason">
                <h3 class="heading">
                <span class="first-half">Buy your tyres online</span>
                <span class="second-half">&amp; save up to 50% off RRP</span>
            </h3>
                <p class="rationale">Choose from ~730,966 top brand genuine tyres.</p>
                <a class="action" href="/help/ask-an-expert">Talk to a tyre expert</a>
            </div>
            <div class="reason">
                <h3 class="heading">
                <span class="first-half">Choose your</span>
                <span class="second-half">local fitter</span>
            </h3>
                <p class="rationale">Over 1,750 fitment centres Australia-wide.</p>
                <a class="action" href="/fitment-centres">Find a fitment centre</a>
            </div>
            <div class="reason">
                <h3 class="heading">
                <span class="first-half">Get your</span>
                <span class="second-half">tyres fast</span>
            </h3>
                <p class="rationale">We deliver fast, direct to your fitment centre.</p>
                <a class="action" href="/customer-service/shipping">Estimated 2 days delivery</a>
            </div>
            <div class="reason">
                <h3 class="heading">
                <span class="first-half">Buy now &amp;</span>
                <span class="second-half">pay later</span>
            </h3>
                <p class="rationale">Buy online with 12 months interest free available.</p>
                <a class="action" href="/customer-service/zipmoney">Find out more</a>
            </div>
        </div>
    </div>
    <div class="free-benefits">
        <div class="benefits">
            <div class="benefit">
                <h2 class="heading">Free <span class="highlight">Roadside Assist</span></h2>
                <p class="description">We will attend to any punctures for the first 12 months free!</p>
            </div>
            <div class="benefit">
                <h2 class="heading">Free <span class="highlight">Car Clean</span></h2>
                <p class="description">Get your car back feeling like new at participating fitment centres.</p>
            </div>
            <div class="benefit">
                <a href="/risk-free-guarantee">
                    <h2 class="heading"><span class="highlight">Risk-Free </span> Guarantee</h2>
                    <p class="description">If you are not happy with your order, we will refund you in full without any hidden fees.</p>
                </a>
            </div>
            <div class="benefit">
                <h2 class="heading">Free <span class="highlight">Wheel Alignment</span></h2>
                <p class="description">At participating Premium Fitment Centres. <small><a href="/customer-service/promotions">Conditions Apply</a></small></p>
            </div>
        </div>
    </div>
    <article class="clearfix">
        <footer class="extendedFooter quicksales clearfix">
            <div class="footcrumbContainer">
                <div class="footCrumb">
                    <a href="#" class="toggleSEOFooter">more</a>
                    <div class="enhancedSEOFooter">
                    <div class="tabContainer">
                        <p>Browse tyres by popular brands, patterns and more.</p>
                        <ul class="tags">
                            <li><a class="models browse-links" data-id="seoPopularMakes" href="#seoPopularMakes">Vehicle Makes</a></li>
                            <li><a class="browse-links" data-id="seoPopularBrands" href="#seoPopularBrands">Tyre Brands</a></li>
                            <li><a class="browse-links" data-id="seoPopularSizes" href="#seoPopularSizes">Tyre Sizes</a></li>
                            <li><a class="browse-links" data-id="seoPopularBrandSize" href="#seoPopularBrandSize">Tyre Brand Sizes</a></li>
                            <li><a class="browse-links" data-id="seoPopularTruckSizes" href="#seoPopularTruckSizes">Truck Tyre Sizes</a></li>
                            <li><a class="browse-links" data-id="seoPopularOtrSizes" href="#seoPopularOtrSizes">OTR Tyre Sizes</a></li>
                        </ul>
                    </div>
                    <div class="tabPanelContent">
                        <div id="seoPopularMakes" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                                @foreach($all_vehicles_makes as $all)
                                <li><a href="{{route('vehicles/make',['slug'=>$all->url])}}">{{$all->name}}</a></li>
                                @endforeach
                                @if($all_vehicles_makes->count() > 0)                                
                                <li><a class="seofooterLastLink" href="{{route('vehicles')}}">More Vehicles...</a></li>
                                @endif
                            </ul>
                        </div>
                        <div id="seoPopularBrands" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                               @foreach($all_brands as $all)
                                <li><a href="{{route('search')}}?brands={{$all->url}}">{{$all->name}}</a></li>
                                @endforeach
                                @if($all_brands->count() > 0)                                
                                <li><a class="seofooterLastLink" href="{{route('tyres')}}">More Tyre Brands...</a></li>
                                @endif
                            </ul>
                        </div>
                        <div id="seoPopularSizes" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                                @foreach($all_sizes as $all)
                                @php $url = str_replace(' ','-',$all->name);
                                $url = str_replace('/','-',$url);
                                @endphp
                                <li><a href="{{route('tyre/size/view',['slug'=>$url])}}">{{$all->name}}</a></li>
                                @endforeach
                                @if($all_sizes->count() > 0)                                
                                <li><a class="seofooterLastLink" href="{{route('tyre/size')}}">More Tyre Sizes...</a></li>
                                @endif
                            </ul>
                        </div>
                        <div id="seoPopularBrandSize" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                                  @foreach($all_brand_sizes as $all)

                                @php $url = str_replace(' ','-',$all->tyre_sizes->name);
                                $url = str_replace('/','-',$url);
                                @endphp

                                <li><a href="{{route('brand/size')}}?brands={{$all->tyre_brands->url}}&size={{$url}}&size_type={{$all->tyre_sizes->id}}">{{isset($all->tyre_brands)?$all->tyre_brands->name:''}} {{isset($all->tyre_sizes)?$all->tyre_sizes->name:''}}</a></li>
                                @endforeach

                                @if($all_brand_sizes->count() > 0)                                
                                <li><a class="seofooterLastLink" href="{{route('brand/size')}}">More Brand Sizes...</a></li>
                                @endif
                            </ul>
                        </div>
                        <div id="seoPopularTruckSizes" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                               @foreach($all_truck_sizes as $all)

                               @php $url = str_replace(' ','-',$all->name);
                                $url = str_replace('/','-',$url);
                                @endphp
                               
                                <li><a href="{{route('truck/size',['slug'=>$url])}}">{{$all->name}}</a></li>
                                @endforeach
                                @if($all_truck_sizes->count() > 0)                                
                                <li><a class="seofooterLastLink" href="{{route('truck')}}">More Truck Tyre Sizes...</a></li>
                                @endif
                            </ul>
                        </div>
                        <div id="seoPopularOtrSizes" class="clearfix browse-class" style="display: none;">
                            <ul class="clearfix">
                                @foreach($all_otr_sizes as $all)

                                @php $url = str_replace(' ','-',$all->name);
                                $url = str_replace('/','-',$url);
                                @endphp

                                <li><a href="{{route('otr/size',['slug'=>$url])}}">{{$all->name}}</a></li>
                                @endforeach

                                @if($all_otr_sizes->count() > 0)
                                <li><a class="seofooterLastLink" href="{{route('otr')}}">More OTR Tyre Sizes...</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="column column1">
            </div>
        </footer>
    </article>

    <script type="application/ld+json">
        { "@context": "https://schema.org", "@graph": [ { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "Audi", "url": "https://www.tyresales.com.au/vehicles/audi" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "BMW", "url": "https://www.tyresales.com.au/vehicles/bmw" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "Chrysler", "url": "https://www.tyresales.com.au/vehicles/chrysler" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "Ford", "url": "https://www.tyresales.com.au/vehicles/ford" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "Holden", "url": "https://www.tyresales.com.au/vehicles/holden" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Popular-Tyres", "name": "honda", "url": "https://www.tyresales.com.au/vehicles/honda" } ] }
    </script>

    <footer class="footer quicksales">
        <div class="wrapper">
            <div class="frontFooterTyreCounter">
                <div class="frontFooterTyreCounterText">Australia's favourite online tyre store with <span class="frontFooterTyreCounterTextOrange">~730,966 tyres</span> for sale!</div>
            </div>

            <section class="footerSection">
                <div class="socialMedia">
                    <!-- TrustBox widget - Mini Carousel -->

                    <style>
                        .footerSection .socialMedia #trustPilotDiv iframe {
                            height: 105px !important;
                        }
                    </style>
                    <div id="trustPilotDiv" class="trustpilot-widget notMobile" data-theme="dark" data-locale="en-AU" data-template-id="539ad0ffdec7e10e686debd7" data-businessunit-id="54778d7c00006400057bce5a" data-style-height="150px" data-style-width="100%" data-theme="light" data-stars="4,5">
                        <a href="https://au.trustpilot.com/review/tyresales.com.au" target="_blank">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
                &nbsp;<br />

                <a href="/about-us">About Us</a>
                <a href="https://tyresales.zendesk.com/hc/en-us/requests/new">Contact Us</a>
                <a href="/corporate-advertising">Corporate Advertising</a>
                <a href="/site-map">Site Map</a>
                <a href="/terms-conditions">Terms and Conditions</a>
                <a href="/dealer-signup">Dealer Signup</a>
                <a href="/privacy">Privacy</a>
                <a href="/fitment-locations-australia">Fitment Locations</a>
                <a href="/customer-service/promotions">Promotions</a>

                <br />
                <br />
                <div title="TS-PROD-WEB01">&copy; Tyresales Pty Ltd All rights reserved</div>
                <br />
                <div class="disclaimerFooter">^Average quoted saving from productreview.com.au &nbsp; &nbsp; &nbsp; &nbsp;
                    <br /> *Our cost is the cost of the tyre, freight, fitment and disposal
                    <br />*MLP = Manufacturer’s List Price. Last updated May 2019 </div>
                <div class="disclaimerFooter"> ** See our Lowest Price Guarantee &nbsp; &nbsp; &nbsp; &nbsp;
                    <br />+ Delivery is free to most metro areas, for regional areas a delivery surcharge may apply. Installation applies for Car tyres only - not Truck and OTR tyres.</div>
                <div class="disclaimerFooter">Some images are for illustation purposes only.</div>

            </section>
        </div>
    </footer>

    <script type="application/ld+json">
        { "@context": "https://schema.org", "@graph": [ { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "About Us", "url": "https://www.tyresales.com.au/about-us" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "Contact Us", "url": "https://tyresales.zendesk.com/hc/en-us/requests/new" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "Corporate Advertising", "url": "https://www.tyresales.com.au/corporate-advertising" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "Site map", "url": "https://www.tyresales.com.au/site-map" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "Terms and Conditions", "url": "https://www.tyresales.com.au/terms-conditions" }, { "@context": "https://schema.org", "@type":"SiteNavigationElement", "@id":"Footer", "name": "Dealer Signup", "url": "https://www.tyresales.com.au/dealer-signup" } ] }
    </script>




    <!-- END OF SmartSource Data Collector TAG v10.2.55 -->

    <div id="nielsenTagDiv"></div>

    <!-- Google Code for Remarketing Tag -->
    <!-- - - - - - - - - - - - - - - - - - - - - - - - -
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
 - - - - - - - - - - - - - - - - - - - - - - - - -->

    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 987320419;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>

    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

    <noscript>
        <div style="display: inline;">
            <img height="1" width="1" style="border-style: none;" alt="google doubleclick" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/987320419/?value=0&amp;guid=ON&amp;script=0" />
        </div>
    </noscript>

    <!-- START Nielsen Online SiteCensus V6.0 -->
    <!-- COPYRIGHT 2012 Nielsen Online -->
    <script type="text/javascript" src="//secure-au.imrworldwide.com/v60.js"></script>

    <script type="text/javascript">
        var pvar = {
            cid: "carsales",
            content: "tyresales",
            server: "secure-au"
        };
        if (typeof nol_t === "function") {
            nol_t(pvar).record().post();
        }
    </script>

    <noscript>
        <div>
            <img src="//secure-au.imrworldwide.com/cgi-bin/m?ci=carsales&cg=tyresales&cc=1&ts=noscript" width="1" height="1" alt="secure tracking" />
        </div>

    </noscript>

    <!-- END Nielsen Online SiteCensus V6.0 -->

    <script type="text/javascript">

    </script>

    <!-- BEGIN: Google Trusted Stores -->
    <script type="text/javascript">
        var gts = gts || [];

        gts.push(["id", "509383"]);
        gts.push(["badge_position", "BOTTOM_RIGHT"]);
        gts.push(["locale", "en_AU"]);

        gts.push(["google_base_subaccount_id", "509382"]);

        gts.push(["google_base_language", "en_AU"]);

        (function() {
            var gts = document.createElement("script");
            gts.type = "text/javascript";
            gts.async = true;
            gts.src = "https://www.googlecommerce.com/trustedstores/api/js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(gts, s);
        })();
    </script>
    <!-- END: Google Trusted Stores -->



<script type="text/javascript">
    
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});    

      $('#vyear').change(function(){
        $.ajax({
                type:'POST',
                url:'{{route("get_model_details")}}',
                data:{_token: "{{ csrf_token() }}"
                },
                success: function( msg ) {
                   var x = '<option value="NULL">Make</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'" >'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'" >'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#vMake').html(x);
                    }



                        x = '<option value="NULL">Model</option>';
                         $('#vmodel').html(x);
                        x = '<option value="NULL">Series</option>';
                         $('#vSeries').html(x);              


                    $('#vehicleSearchButton').attr('disabled','disabled');
                    $('#vehicleSearchButton').addClass('disabled');

                }
            });


      });


      $('#vMake').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_vehicle_model_details")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                             var x = '<option value="NULL">Make</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#vmodel').html(x);
                    }else{
                         x = '<option value="NULL">Model</option>';
                         $('#vmodel').html(x);
                    }

                }
            });


      });


      $('#vmodel').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_vehicle_model_series")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                         x = '<option value="NULL">Series</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#vSeries').html(x);
                    }else{
                         x = '<option value="NULL">Series</option>';
                         $('#vSeries').html(x);
                    }


                }
            });


      });


      $('#vSeries').change(function(){


        $('#vehicleSearchButton').removeAttr('disabled');
        $('#vehicleSearchButton').removeClass('disabled');

      });


      $('#swidth').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_width_profile")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="Profile">Profile</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }else{
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#saspect').html(x);
                    }else{
                         x = '<option value="Profile">Model</option>';
                         $('#saspect').html(x);
                    }

                         $('.overlay-mask').hide();
                }
            });


      });


      $('#ddlBrandSectionWidth').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_width_profile")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="Profile">Profile</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }else{
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }
                    }
                    $('#ddlBrandAspectRatio').removeAttr('disabled');
                    if(x!=-1){
                        $('#ddlBrandAspectRatio').html(x);
                    }else{
                         x = '<option value="Profile">Model</option>';
                         $('#ddlBrandAspectRatio').html(x);
                    }

                         $('.overlay-mask').hide();
                }
            });


      });



      $('#ddlBrandAspectRatio').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_profile_rim")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="Rim Size">Rim Size</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].rim_size+'">'+msg[i].rim_size+'</option>';
                        }else{
                            x += '<option value="'+msg[i].rim_size+'">'+msg[i].rim_size+'</option>';
                        }
                    }

                    $('#ddlBrandRimDiameter').removeAttr('disabled');
                    if(x!=-1){  
                        $('#ddlBrandRimDiameter').html(x);
                    }else{
                         x = '<option value="Profile">Model</option>';
                         $('#ddlBrandRimDiameter').html(x);
                    }

                         $('.overlay-mask').hide();
                }
            });


      });



      $('#saspect').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_profile_rim")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="Rim Size">Rim</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].rim_size+'">'+msg[i].rim_size+'</option>';
                        }else{
                            x += '<option value="'+msg[i].rim_size+'">'+msg[i].rim_size+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#srim').html(x);
                    }else{
                         $('#srim').html(x);
                    }

                         $('.overlay-mask').hide();
                }
            });


      });



      $('#ddlBrand').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_brands_patterns_list")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="Rim Size">Patterns</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].url+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].url+'">'+msg[i].name+'</option>';
                        }
                    }

                    $('#ddlBrandModel').removeAttr('disabled');
                    if(x!=-1){  
                        $('#ddlBrandModel').html(x);
                    }else{
                         $('#ddlBrandModel').html(x);
                    }

                         $('.overlay-mask').hide();
                }
            });


      });



</script>

</body>

</html>