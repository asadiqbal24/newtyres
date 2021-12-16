<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" class="no-js">

<head id="Head1" prefix="og: http://ogp.me/ns# tyresales: http://ogp.me/ns/apps/tyresales#">

    
    <meta name="rating" content="general" />
    
    <meta name="robots" content="index,follow,noodp" />
    
 <title>{{isset($page_seo)?$page_seo->title:''}}</title>

    <meta name="description" content="{{isset($page_seo)?$page_seo->description:''}}">
    <meta name="keywords" content="{{isset($page_seo)?$page_seo->keywords:''}}">
    <meta name="author" content="{{isset($page_seo)?$page_seo->writer:''}}">
    <meta name="handler" content="{{isset($page_seo)?$page_seo->handler:''}}">
    
    <meta name="viewport" content="width=device-width" />
    
    <meta http-equiv="content-language" content="en" />
    
    <meta name="google-site-verification" content="kOO0C7hhS_QmM-0UEYlCWnYQQBc_-miPjFjCr7Q7NlY" />
    
    <meta name="google-site-verification" content="TIZhjR1PZxsQ1E9hZhZhtje-Z14kMPwR1BCzzWm659w" />
    
    <meta name="p:domain_verify" content="pinterest-eed4b.html" />
    
    <meta property="fb:app_id" content="409178825820782" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    
    <meta name="WT.ts_make" />
    
    <meta name="WT.ts_model" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">    

    <link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400italic" rel="stylesheet" type="text/css" />
    

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,900,500,700" rel="stylesheet" type="text/css" />
    

    <link href="https://www.tyresales.com.au/includes/styles.min.css?q=2019-01-17" rel="stylesheet" type="text/css" />
    

    <link href="https://www.tyresales.com.au/wwwroot/dist/vendor.css?q=2019-01-17" rel="stylesheet" type="text/css" />

    

    <link type="image/x-icon" href="{{asset('public/assets/images/fav-icon.png')}}" rel="shortcut icon" />
    

    <link type="image/x-icon" href="{{asset('public/front/vehicles/images/favicon.ico')}}" rel="shortcut icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/front/vehicles/images/apple-touch-icon-144x144-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/front/vehicles/images/apple-touch-icon-114x114-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/front/vehicles/images/apple-touch-icon-72x72-precomposed.png')}}" />

    <link rel="apple-touch-icon-precomposed" href="{{asset('public/front/vehicles/images/apple-touch-icon-57x57-precomposed.png')}}" />


    <link rel="canonical" href="https://www.tyresales.com.au/truck" />
    <meta name="Generator" content="Sitefinity 5.0.2500.0 PE" />
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
      <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/front/dist/assets/theme-style-10.css')}}" />
      
      <link data-react-helmet="true" rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome/css/font-awesome.min.css')}}" />

    @include('front.default.style')
    
</head>
<!--[if lt IE 7]><body class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><body class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><body class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<body class="no-js">

     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="{{asset('public/front/vehicles/jlinq.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.cycle2.min.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.colorbox-min.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.cookie.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.media.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.pagination.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.validate.min.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jsTemplate.js')}}"></script>
        <script src="{{asset('public/front/vehicles/modernizr-2.6.1.min.js')}}"></script>
        <script src="{{asset('public/front/vehicles/swfobject.js')}}"></script>
        <script src="{{asset('public/front/vehicles/csn_carousel.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.base64.min.js')}}"></script>
        <script src="{{asset('public/front/vehicles/csn_animation.js')}}"></script>
        <script src="{{asset('public/front/vehicles/vivid.core-1.4.beautiful.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.history.js')}}"></script>
        <script src="{{asset('public/front/vehicles/jquery.stylish-select.js')}}"></script>
        <script src="{{asset('public/front/vehicles/sitefinity.editmode.js')}}"></script>


        <script src="{{asset('public/front/vehicles/tyresales.search-results.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.api.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.global.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.search-global.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.common.js')}}?q=2019-01-17"></script>
        <!-- Tyresales Passenger !-->
        <script src="{{asset('public/front/vehicles/tyresales.search-size.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.search-brand.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.search-vehicle.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.search.js')}}?q=2019-01-17"></script>

        <!-- Tyresales Truck !-->
        <script src="{{asset('public/front/vehicles/tyresales.searchtruck-brand.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.searchtruck-size.js')}}?q=2019-01-17"></script>

        <!-- Tyresales Otr !-->
        <script src="{{asset('public/front/vehicles/tyresales.searchotr-brand.js')}}?q=2019-01-17"></script>
        <script src="{{asset('public/front/vehicles/tyresales.searchotr-size.js')}}?q=2019-01-17"></script>

        <!--<ul id="skipMenu">-->
        <!--    <li><a href="#navigationContainer">Skip to Navigation</a></li>-->
        <!--    <li><a href="#content">Skip to Content</a></li>-->
        <!--</ul>-->
    <!--    <header role="banner" id="navigationContainer" class="csn-navigation quicksales" itemscope itemtype="http://schema.org/Organization">-->
    <!--        <meta itemprop="name" content="Tyresales" />-->
    <!--        <meta itemprop="description" content="For the best deal on tyres." />-->
    <!--        <meta itemprop="logo" content="https://www.tyresales.com.au/images/tyreSales.jpg" />-->

    <!--        <meta itemprop="url" content="https://www.tyresales.com.au/" />-->
    <!--        <meta itemprop="sameAs" content="https://www.facebook.com/tyresales.com.au" />-->
    <!--        <meta itemprop="sameAs" content="https://twitter.com/tyresalescomau" />-->
    <!--        <meta itemprop="sameAs" content="https://www.youtube.com/user/Tyresalescomau" />-->

    <!--        <div class="wrapper clearfix">-->

    <!--            <script>-->
    <!--                (function() {-->
    <!--                    var cx = '014007775749810251086:_0hlju5defi';-->
    <!--                    var gcse = document.createElement('script');-->
    <!--                    gcse.type = 'text/javascript';-->
    <!--                    gcse.async = true;-->
    <!--                    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +-->
    <!--                        '//cse.google.com/cse.js?cx=' + cx;-->
    <!--                    var s = document.getElementsByTagName('script')[0];-->
    <!--                    s.parentNode.insertBefore(gcse, s);-->
    <!--                })();-->
    <!--            </script>-->

    <!--            <nav>-->
    <!--                <ul class="navigation">-->
                        


                        
    <!--<li id="home"><a href="{{route('home')}}">Home</a></li>-->

    <!--    @foreach($vehicle_categories as $vc)-->

    <!--                            @if($vc->url_page==1)-->
    <!--                              @php $url = url('page',['slug'=>$vc->url]); @endphp-->
    <!--                            @else-->
    <!--                              @php $url = route($vc->url); @endphp-->
    <!--                            @endif-->

    <!--        @if($vc->name=='Browse For Tyres')-->
    <!--        <li id="search"><a href="{{$url}}">{{$vc->name}}</a>-->
    <!--        @else-->
    <!--        <li><a href="{{$url}}">{{$vc->name}}</a>-->
    <!--        @endif    -->

    <!--        @if($vc->category->count() > 0)-->

    <!--        <div class="menu-panel"> <span class="arrow">&nbsp;</span>-->
    <!--            <div class="menu-links">-->
    <!--                <ul class="menu-links">-->
    <!--                    @php $i=0;@endphp    -->
    <!--                    @foreach($vc->category as $cat)-->

    <!--                     @if($cat->url_page==1)-->
    <!--                                        @php $url = url('page',['slug'=>$cat->url]); @endphp -->
    <!--                                      @else-->
    <!--                                        @php $url = $cat->url; @endphp-->
    <!--                                      @endif-->


    <!--                        <li class="vip <?php if($i==0) echo 'first' ?>"><a href="{{$url}}">{{$cat->name}}</a></li>-->
    <!--                    @php $i++;@endphp-->
    <!--                    @endforeach-->

    <!--                </ul>-->
    <!--            </div>  -->
    <!--        </div>-->


    <!--        @endif-->



    <!--    @endforeach-->



    <!--    <li id="network"><a href="#">More Sites</a>-->
    <!--        <ul>-->
    <!--             <li><a href="#" class="carsales-network"></a><span class="key-lines">Welcome to Australia's No. 1 classified network</span></li>-->
    <!--             <li class="carsales">-->
    <!--                 <a target="_blank" href="http://carsales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Carsales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia’s No.1 place to buy, sell or research a car, and read all the latest news and reviews.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="bikesales">-->
    <!--                 <a target="_blank" href="http://bikesales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Bikesales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia’s No.1 place to buy, sell or research a bike, and read all the latest news and reviews.</span>-->
    <!--                 </a>-->
    <!--             </li>-->

    <!--             <li class="boatsales last">-->
    <!--                 <a target="_blank" href="http://boatsales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Boatsales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia's No.1 place to buy, sell or research a boat, and read all the latest news and reviews.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="caravancampingsales">-->
    <!--                 <a target="_blank" href="http://caravancampingsales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Caravan Camping Sales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia's No.1 place to buy, sell or research a caravan or camping equipment.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="trucksales">-->
    <!--                 <a target="_blank" href="http://trucksales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Trucksales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Buy, sell or hire new and used trucks, buses and equipment at Australia's No. 1 online truck marketplace.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="constructionsales last">-->
    <!--                 <a target="_blank" href="http://constructionsales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Constructionsales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Buy and sell new and used construction equipment and machinery at Australia's No. 1 online earthmoving marketplace.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="farmmachinerysales">-->
    <!--                 <a target="_blank" href="http://farmmachinerysales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Farmmachinerysales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia’s No.1 place to buy, sell and research new and used farm machinery and livestock.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="motoring">-->
    <!--                 <a target="_blank" href="http://motoring.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Motoring</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Australia's most comprehensive coverage of what's new in the automotive space.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="tyresales last">-->
    <!--                 <a target="_blank" href="http://tyresales.com.au">-->
    <!--                     <div class="nav-network__container">-->
    <!--                         <span class="logo">Tyresales</span>-->
    <!--                     </div>-->
    <!--                     <span class="content">Buy tyres online and save up to 50% off RRP. Tyresales has over 1.000 accredited fitment centres Australia-wide.</span>-->
    <!--                 </a>-->
    <!--             </li>-->
    <!--             <li class="view-all"><a href="/carsales-network" class="view-all">View all</a></li>-->
    <!--         </ul>-->
    <!--    </li>-->
  



    <!--                </ul>-->
    <!--            </nav>-->


                <!-- navigation // end -->
    <!--            <div class="needHelp">Need help? <a href="tel:1300897372" itemprop="telephone">1300 897 372</a></div>-->
    <!--        </div>-->
    <!--    </header>-->

    <!--    <div class="m-header">-->
    <!--        <a {{route('home')}} title="tyresales proudly part of carsales" style="height:62px; display:inline-block;"><img alt="tyresales proudly part of carsales" src="{{asset('public/front/vehicles/images/Tyresales_LockupCarsales_Horizontal_grey.png')}}" style="height:62px !important;" /></a>-->
    <!--        <a href="#" id="navigationToggle"></a>-->
    <!--        <nav role="navigation">-->
    <!--            <div id="m-navigationContainer">-->
    <!--                <ul class="m-navigation clearfix">-->
    <!--                    <li>-->
    <!--                        <a href="/search">Browse for tyres</a>-->
    <!--                        <ul>-->
    <!--                            <li>-->
    <!--                                <a href="/search?search=vehicle">By Vehicle</a>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <a href="/search?search=size">By Size</a>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <a href="/tyres">By Brand</a>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <a href="/tyres/brand/size">By Brand and Size</a>-->
    <!--                            </li>-->
    <!--                            <li><a href="/tyres/brand/pattern">By Brand and Pattern</a></li>-->
    <!--                            <li>-->
    <!--                                <a href="/truck">By Truck Tyres</a>-->
    <!--                            </li>-->
    <!--                            <li>-->
    <!--                                <a href="/otr">By OTR Tyres</a>-->
    <!--                            </li>-->
    <!--                        </ul>-->
    <!--                    </li>-->

    <!--                    <li>-->
    <!--                        <a href="https://www.tyresales.com.au/customer-service">Customer Service</a>-->
    <!--                        <ul>-->
    <!--                            <li><a href="/customer-service/money-back-guarantee">Money Back Guarantee</a></li>-->
    <!--                            <li><a href="/customer-service/fitting-and-balancing">Fitting & Balancing</a></li>-->
    <!--                            <li><a href="/customer-service/shipping">Shipping</a></li>-->
    <!--                            <li><a href="/customer-service/shipping-areas">Shipping Areas</a></li>-->
    <!--                            <li><a href="/customer-service/tyre-roadside-assist">Tyre Roadside Assist</a></li>-->
    <!--                            <li><a href="/customer-service/tyre-size-guide">Tyre Size Guide</a></li>-->
    <!--                            <li><a href="/customer-service/warranty">Warranty</a></li>-->
    <!--                            <li><a href="/customer-service/returns">Returns</a></li>-->
    <!--                            <li><a href="https://tyresales.zendesk.com/hc/en-us/requests/new">Contact Us</a></li>-->
    <!--                            <li><a href="/customer-service/promotions">Promotions</a></li>-->
    <!--                            <li><a href="/customer-service/lowest-price-guarantee">Price Match Guarantee</a></li>-->
    <!--                            <li><a href="/customer-service/zipmoney">Zip Money</a></li>-->

    <!--                        </ul>-->
    <!--                    </li>-->

    <!--                    <li>-->
    <!--                        <a href="https://tyresales.zendesk.com/hc/en-us/requests/new">Contact Us</a>-->
    <!--                    </li>-->
    <!--                </ul>-->
    <!--            </div>-->
    <!--        </nav>-->
    <!--        <div class="m-advertising"></div>-->
    <!--    </div>-->
    
    <!--Custom Header-->

 @include('front.default.header')

        <div role="main">
            <!--<div id="FeedBack">-->
            <!--    <a href="/helpfindtyre" id="linkHelpFindTyreForm">-->
            <!--        <img alt="help me find tyre" src="{{asset('public/front/vehicles/images/helpmefind.png')}}" />-->
            <!--    </a>-->
            <!--</div>-->
            <div class="content feedback" id="content">

                <!--<header class="quicksales" style="margin:0 auto; padding:0;">-->
                <!--    <a {{route('home')}} title="Tyresales">-->
                <!--        <img alt="Tyresales" src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/Tyresales_Blue_WebVersion.png" style="max-height:100%;" />-->
                <!--    </a>-->
                <!--    <img alt="Proudly part of carsales" src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/PartOfCarsales_Lockup_grey.png" style="max-height: 100%; float: right;" />-->
                <!--</header>-->

                <article class="clearfix">

                    <!-- client templates section -->
                <?php /*
                    <script type="text/html" id="tyreResults">

                        <# for(var i=0; i < obj.length; i++) { var tyre=o bj[i]; var tyre=o bj[i]; if(tyre==u ndefined) break; var tyrePanelClass="getQuote" ; if(tyre.Transactional){ if(tyre.DisplayAsBestBuy){ tyrePanelClass="buyNow" ; }else{ tyrePanelClass="buyNowRrp" ; } } #>

                            <div id="tyrePanel_<#= tyre.Id #>" class="tyrePanel <#=tyrePanelClass #>">
                                <div class="logo"><img src="<#= tyre.BrandImageUrl #>" alt="<#= tyre.BrandName #>">
                                </div>
                                <# if(tyre.CurrentPromotion && tyre.CurrentPromotion.PromoStyle.SearchIcon && tyre.CurrentPromotion.SearchResultsPromoIcon){ #>
                                    <div class="<#=tyre.CurrentPromotion.PromoStyle.SearchIcon #>">
                                        <img alt="Promo" src="/images/<#=tyre.CurrentPromotion.SearchResultsPromoIcon #>">
                                    </div>
                                    <# } #>

                                        <div class="tyreName">
                                            <a href="<#= baseUrl.slice(0,-1) #><#= tyre.DetailPageUrl #>?q=4">
                                                <#=t yre.PatternName #>
                                            </a>
                                            <#=t yre.TyreSizeDisplayTemplate #>
                                        </div>

                                        <div class="icons">
                                            <# if(tyre.EcoFriendly && (!(tyre.IsLowestPriceGuarantee && tyre.StockLevel> 0 && tyre.Transactional) || !tyre.RunFlat)) { #>
                                                <span class="eco"><span class="labelEco">Eco tyre</span></span>
                                                <# } #>

                                                    <# if(tyre.RunFlat) { #>
                                                        <div>
                                                            <img alt="Runflat" style="width: 25px; height: 20px; vertical-align: middle" src="/images/run-flat-icon.png" />
                                                            <!--<img src="/images/run-flat-icon.png" width="25px" height="20px" vertical-align:middle/>-->
                                                            <span style="font: 11px/15px Arial, Helvetica, sans-serif" ;color:#666>RUN FLAT</span>
                                                        </div>
                                                        <!--<span class="runFlat"><span class="labelRunFlat">Run flat</span></span>-->
                                                        <# } #>

                                                            <!--<# if(tyre.IsLowestPriceGuarantee && tyre.StockLevel > 0 && tyre.Transactional) { #>
    <img src="/images/lowest-price-guarentee_81x25.png" class="lowestPriceGuarantee" data-tyre="<#= tyre.BrandName #> <#= tyre.PatternName #> <#= tyre.TyreSizeDisplay #>"/>
    <# } #>-->
                                        </div>

                                        <div class="thumbnail resultMoreInfo">
                                            <# if((tyre.StockLevel> 0) && (tyre.Transactional)) { #>

                                                <# if((tyre.Transactional)&&(tyre.OnlineDiscount>= 10)) { #>
                                                    <div class="discount">
                                                        <strong><#= tyre.OnlineDiscount #>%</strong> Off RRP
                                                    </div>
                                                    <# } if(tyre.CurrentPromotion && tyre.CurrentPromotion.PromoStyle.SearchBubble && tyre.CurrentPromotion.PromoBubbleMessage) { #>
                                                        <div class="<#= tyre.CurrentPromotion.PromoStyle.SearchBubble #>">
                                                            <#=t yre.CurrentPromotion.PromoBubbleMessage #>
                                                        </div>
                                                        <# } #>
                                                            <# } #>

                                                                <a href="<#= baseUrl.slice(0,-1) #><#= tyre.DetailPageUrl #>?q=<#= tyre.DefaultStockLevelSelection #>&c=<#= tyre.CurrentCurrency.CurrencyType.Id #>" id="moreinfo_<#= tyre.Id #>">
        <img src="<#= tyre.PatternMainImageUrl #>" width="73" height="100" alt="<#= tyre.BrandName #> <#= tyre.PatternName #> <#= tyre.TyreSizeDisplay #>">
    </a>

                                        </div>

                                        <# if(tyre.Transactional) { #>
                                            <# if(tyre.DisplayAsBestBuy) { #>
                                                <div class="price">

                                                    <# if(tyre.BrandName.toLowerCase()=="radar" ){ #>
                                                        <div class="promoText">&nbsp;</div>
                                                        <# }else{ #>
                                                            <div class="promoText">&nbsp;</div>
                                                            <# } #>
                                                                <# if(tyre.TyreTypeId==1 ) { #>
                                                                    <div class="strike eachfitted-passenger">
                                                                        <#=t yre.DisplayOnlinePrice #>
                                                                    </div>
                                                                    <# } else if(tyre.TyreTypeId==2 ) { #>
                                                                        <div class="strike eachfitted-truck">
                                                                            <#=t yre.DisplayOnlinePrice #>
                                                                        </div>
                                                                        <# } else { #>

                                                                            <# if(tyre.CurrentCurrency.CurrencyType.Id==1 ){ #>
                                                                                <div class="strike eachfitted-otr-currency-aud">
                                                                                    <#=t yre.DisplayOnlinePrice #>
                                                                                </div>
                                                                                <# } else if(tyre.CurrentCurrency.CurrencyType.Id==2 ) { #>
                                                                                    <div class="strike eachfitted-otr-currency-usd">
                                                                                        <#=t yre.DisplayOnlinePrice #>
                                                                                    </div>
                                                                                    <# } else if(tyre.CurrentCurrency.CurrencyType.Id==3 ) { #>
                                                                                        <div class="strike eachfitted-otr-currency-eur">
                                                                                            <#=t yre.DisplayOnlinePrice #>
                                                                                        </div>
                                                                                        <# } #>

                                                                                            <# } #>

                                                </div>
                                                <# }else{ #>
                                                    <div class="price">
                                                        <div class="rrp">
                                                            <span class="rrpPrice"><#= tyre.DisplayPrice #></span> RRP
                                                        </div>
                                                        <# if(tyre.TyreTypeId==1 ) { #>
                                                            <div class="strike eachfitted-passenger">
                                                                <#=t yre.DisplayOnlinePrice #>
                                                            </div>
                                                            <# } else if(tyre.TyreTypeId==2 ) { #>
                                                                <div class="strike eachfitted-truck">
                                                                    <#=t yre.DisplayOnlinePrice #>
                                                                </div>
                                                                <# } else { #>

                                                                    <# if(tyre.CurrentCurrency.CurrencyType.Id==1 ){ #>
                                                                        <div class="strike eachfitted-otr-currency-aud">
                                                                            <#=t yre.DisplayOnlinePrice #>
                                                                        </div>
                                                                        <# } else if(tyre.CurrentCurrency.CurrencyType.Id==2 ) { #>
                                                                            <div class="strike eachfitted-otr-currency-usd">
                                                                                <#=t yre.DisplayOnlinePrice #>
                                                                            </div>
                                                                            <# } else if(tyre.CurrentCurrency.CurrencyType.Id==3 ) { #>
                                                                                <div class="strike eachfitted-otr-currency-eur">
                                                                                    <#=t yre.DisplayOnlinePrice #>
                                                                                </div>
                                                                                <# } #>

                                                                                    <# } #>

                                                    </div>
                                                    <# } #>
                                                        <# }else{ #>
                                                            <div class="price">
                                                                <div class="rrp">
                                                                    <span class="rrpPrice"></span> RRP per tyre
                                                                </div>
                                                                <# if(tyre.TyreTypeId==1 ) { #>
                                                                    <div class="strike eachfitted-below-passenger">
                                                                        <#=t yre.DisplayOOSPrice #>
                                                                    </div>
                                                                    <# } else if(tyre.TyreTypeId==2 ) { #>
                                                                        <div class="strike eachfitted-below-truck">
                                                                            <#=t yre.DisplayOOSPrice #>
                                                                        </div>
                                                                        <# } else { #>

                                                                            <# if(tyre.CurrentCurrency.CurrencyType.Id==1 ){ #>
                                                                                <div class="strike eachfitted-otr-currency-aud">
                                                                                    <#=t yre.DisplayOOSPrice #>
                                                                                </div>
                                                                                <# } else if(tyre.CurrentCurrency.CurrencyType.Id==2 ) { #>
                                                                                    <div class="strike eachfitted-otr-currency-usd">
                                                                                        <#=t yre.DisplayOOSPrice #>
                                                                                    </div>
                                                                                    <# } else if(tyre.CurrentCurrency.CurrencyType.Id==3 ) { #>
                                                                                        <div class="strike eachfitted-otr-currency-eur">
                                                                                            <#=t yre.DisplayOOSPrice #>
                                                                                        </div>
                                                                                        <# } #>

                                                                                            <# } #>
                                                                                                <!-- <# if(tyre.TyreTypeId != 3) { #>
    <div class="fitting">+ Fitting</div>
    <# } #>-->
                                                                                                <strong>&nbsp;</strong>
                                                            </div>
                                                            <# } #>

                                                                <!--<div class="searchtile-deliverylocation">
    <# if(tyre.Delivery !=null) { #>
    <div class="searchtile-deliverylocation-text">Includes fitment <#= tyre.Delivery.ToState #> est. <#= tyre.Delivery.DaysToDelivery #> days</div>
    <# } #>
</div>-->

                                                                <# if(tyre.Transactional) { #>

                                                                    <div class="buyPanel" style="height: 41px">
                                                                        <# if(tyre.TyreTypeId==1 ) { #>
                                                                            <div class="buyNow">
                                                                                <p>Buy now and pay <span class="afterPayAmount"><strong><#= tyre.GetAfterPayAmount #></strong> </span> a day*
                                                                                </p>
                                                                            </div>
                                                                            <# } #>
                                                                                <div class="quantity">
                                                                                    <label for="quantity_<#= tyre.Id#>"><strong>Qty: </strong></label>
                                                                                    <select id="quantity_<#= tyre.Id#>">
                                                                                        <# if(tyre.StockLevel < 8) { for(var x=t yre.StockLevel + 1; x--> 1;) { if(x == tyre.DefaultStockLevelSelection) {#>
                                                                                            <option selected>
                                                                                                <#=x #>
                                                                                            </option>
                                                                                            <#} else {#>
                                                                                                <option>
                                                                                                    <#=x #>
                                                                                                </option>
                                                                                                <#} } } else { for(var x=8 + 1; x--> 1;) { if(x == tyre.DefaultStockLevelSelection) {#>
                                                                                                    <option selected>
                                                                                                        <#=x #>
                                                                                                    </option>
                                                                                                    <#} else {#>
                                                                                                        <option>
                                                                                                            <#=x #>
                                                                                                        </option>
                                                                                                        <#} } } #>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="submit">
                                                                                    <input type="button" name="addToQuote" id="addToQuote_<#= tyre.Id #>" class="button add quotebutton">
                                                                                </div>

                                                                    </div>
                                                                    <# if (tyre.StockLevel < 31){ #>
                                                                        <div class="endingStock">
                                                                            <#=t yre.StockLevelMessage #>
                                                                        </div>
                                                                        <# }else{ #>
                                                                            <div class="endingStock viewcount">
                                                                                <#=t yre.ViewCount #> people viewing this tyre
                                                                            </div>
                                                                            <# } #>

                                                                                <# }else{ #>
                                                                                    <img alt="Sold out" src="/images/sold-out.gif" class="sold-out" />
                                                                                    <# } #>

                                                                                        <!-- tyrePanel // end -->
                            </div>
                            <# } #>
                                <div class="clear"></div>

                    </script> */ ?>

                    <style>
body {
    background: white !important;
}
                    </style>
                    <!-- end client templates -->

                    <section>

                        <ul class="breadcrumbs clearfix" vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" class=""><a property="item" typeof="WebPage" href="#"><span property="name">Home</span></a>
                                <meta property="position" content="1">
                            </li>
                            <li property="itemListElement" typeof="ListItem" class=""><a property="item" typeof="WebPage" class="last-breadcrumb"><span property="name">Truck</span></a>
                                <meta property="position" content="2">
                            </li>
                            <li></li>
                        </ul>

                        <div class="searchMod clearfix">
                            <ul class="tabNavigation clearfix mainSearch">
                                <li class="searchAgainBy">Search Truck again by:</li>
                                <li><a class="selected" id="size_div" href="#searchSizeDiv">Size</a></li>

                                <li><a class="" id="brands_div" href="#searchBrandDiv">Brand</a></li>
                            </ul>

                            <div id="searchSizeDiv" class="tab">
                                <form method="get" action="{{route('truck/search')}}">
                                
                                <div class="searchRow searchRowTruckSize">
                                    <span class="searchTabSubheading">Your tyre size:</span>
                                    <div class="searchSelect width">
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckSectionWidth">Width *</label>
                                        <select name="width" id="defaultContent_searchContainer_searchSize_ddlTruckSectionWidth" class="ddlTruckSectionWidth">
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
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckAspectRatio">Profile *</label>
                                        <select name="aspect" id="defaultContent_searchContainer_searchSize_ddlTruckAspectRatio" class="ddlTruckAspectRatio">
                                            <option value="">Profile</option>

                                        </select>
                                    </div>
                                    <div class="searchSelect rim">
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckRimDiameter">Rim Diameter *</label>
                                        <select name="rim" id="defaultContent_searchContainer_searchSize_ddlTruckRimDiameter" class="ddlTruckRimDiameter">
                                            <option value="">Rim</option>

                                        </select>
                                    </div>
                                    <div class="searchSelect position">
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckPosition">Position</label>
                                        <select name="position" id="defaultContent_searchContainer_searchSize_ddlTruckPosition" class="ddlTruckPosition">
                                            <option value="">Position</option>
                                            <option value="Drive">Drive</option>
                                            <option value="Steer">Steer</option>
                                            <option value="Trailer">Trailer</option>
                                            <option value="All">All Positions</option>

                                        </select>
                                    </div>
                                    <input type="submit" value="search" id="sizeTruckSearchButton" data-isinternal="true" class="disabled" />
                                    <div class="advancedLink"><a href="#" data-id="advancedSizeSearch">Advanced</a></div>
                                </div>
                                <div class="searchRow advancedHidden advancedSizeSearch">
                                    <span class="searchTabSubheading">Optional details:</span>
                                    <div class="searchSelect load">
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckLoadIndex">Load Index (Optional) </label>
                                        <select name="load" id="defaultContent_searchContainer_searchSize_ddlTruckLoadIndex" class="ddlTruckLoadIndex">
                                            <option value="">Load index</option>
                                             @foreach($load_index as $ind)

                                                <option value="{{$ind->load_index}}">{{$ind->load_index}}</option>

                                             @endforeach   

                                        </select>
                                    </div>
                                    <span class="faq">
        <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText">
            <p>Symbol which indicates the maximum weight each tyre can safely carry.</p>
            <p><a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables" target="_top"><img sfref="[images]c773fb0f-d095-4b3a-95b1-cbd060036a83" title="LoadIndex_info" alt="Tyre Load Index" src="{{asset('public/front/vehicles/images/loadindex_info.jpg')}}" /><br />
            </a></p>
        </div>
    </span>
                                    <div class="searchSelect">
                                        <label for="defaultContent_searchContainer_searchSize_ddlTruckSpeedIndex">Speed Index (Optional) </label>
                                        <select name="speed" id="defaultContent_searchContainer_searchSize_ddlTruckSpeedIndex" class="ddlTruckSpeedIndex">
                                            <option value="">Speed index</option>
                                            @foreach($speed_index as $ind)

                                                <option value="{{$ind->speed_index}}">{{$ind->speed_index}}</option>

                                             @endforeach 

                                        </select>
                                    </div>
                                    <span class="faq"><img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText">
            <p>Symbol which indicates the maximum speed at which a tyre can safely travel corresponding to its load index.</p>
            <p><a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables"><img sfref="[images]b3024559-58fe-4810-a21f-a3cc6cd03801" src="{{asset('public/front/vehicles/images/speedindex_info.jpg')}}" alt="Tyre Speed Index" title="SpeedIndex_info" /><br />
            </a></p>
        </div>
    </span>
                                    <div class="searchSelect checkboxes">
                                        <label for="defaultContent_searchContainer_searchSize_chkRunFlat"><span class="chkRunFlat" data-isinternal="true"><input id="defaultContent_searchContainer_searchSize_chkRunFlat" type="checkbox" name="runflat" /></span> Run Flat</label>
                                        <label for="defaultContent_searchContainer_searchSize_chkEcoFriendly"><span class="chkEcoFriendly" data-isinternal="true"><input id="defaultContent_searchContainer_searchSize_chkEcoFriendly" type="checkbox" name="eco_freindly" /></span> ECO Friendly</label>
                                    </div>
                                </div>

                                <div class="tireSizes clearfix">
                                    <div>

                                        <div id="sizeSeoTag" style="display:none"></div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div id="searchBrandDiv" class="tab" style="display:none">
                                <form method="get" action="{{route('truck/search')}}">
                                <div class="searchRow">
                                    <div class="searchSelect brand">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrand">Brand *</label>
                                        <select name="brand" id="defaultContent_searchContainer_searchBrand_ddlTruckBrand" class="ddlTruckBrand">
                                            <option value="">Brand</option>
                                            @foreach($brands as $br)
                                            <option value="{{$br->id}}">{{$br->name}}</option>                                            
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="searchSelect model">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandModel">Model</label>
                                        <select name="pattern" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandModel" class="ddlTruckBrandModel">
                                            <option value="">Model</option>

                                        </select>
                                    </div>
                                    <div class="advancedLink"><a href="#" data-id="advancedBrandSearch">Advanced</a></div>
                                </div>
                                <div class="searchRow">
                                    <div class="searchSelect width">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandSectionWidth">Width</label>
                                        <select name="width" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandSectionWidth" class="ddlTruckBrandSectionWidth">
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
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandAspectRatio">Profile</label>
                                        <select name="aspect" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandAspectRatio" class="ddlTruckBrandAspectRatio">
                                            <option value="">Profile</option>
                                            

                                        </select>
                                    </div>
                                    <div class="searchSelect rim">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandRimDiameter">Rim Diameter</label>
                                        <select name="rim" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandRimDiameter" class="ddlTruckBrandRimDiameter">
                                            <option value="">Rim Diameter</option>                                           

                                        </select>
                                    </div>
                                    <input type="submit" value="search" id="brandTruckSearchButton" data-isinternal="true" class="disabled" />
                                </div>
                                <div class="searchRow advancedHidden advancedBrandSearch">
                                    <span class="searchTabSubheading">Optional details:</span>
                                    <div class="searchSelect load">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandLoadIndex">Load Index (Optional)</label>
                                        <select name="load" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandLoadIndex" class="ddlTruckBrandLoadIndex">
                                            <option value="">Load Index</option>
                                            <option value="">Don&#39;t know</option>
                                            @foreach($load_index as $ind)

                                                <option value="{{$ind->load_index}}">{{$ind->load_index}}</option>

                                             @endforeach 

                                        </select>
                                    </div>
                                    <span class="faq">
        <img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText">
            <p>Symbol which indicates the maximum weight each tyre can safely carry.</p>
            <p><a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables" target="_top"><img sfref="[images]c773fb0f-d095-4b3a-95b1-cbd060036a83" title="LoadIndex_info" alt="Tyre Load Index" src="/sfimages/default-album/loadindex_info.jpg?sfvrsn=2" /><br />
            </a></p>
        </div>
    </span>
                                    <div class="searchSelect speed">
                                        <label for="defaultContent_searchContainer_searchBrand_ddlTruckBrandSpeedIndex">Speed Index (Optional)</label>
                                        <select name="speed" id="defaultContent_searchContainer_searchBrand_ddlTruckBrandSpeedIndex" class="searchFilter ddlTruckBrandSpeedIndex">
                                            <option value="">Speed Index</option>
                                            <option value="">Don&#39;t know</option>
                                            @foreach($load_index as $ind)

                                                <option value="{{$ind->load_index}}">{{$ind->load_index}}</option>

                                             @endforeach 

                                        </select>
                                    </div>
                                    <span class="faq"><img src="{{asset('public/front/vehicles/images/qmark.png')}}" alt="help" />
        <div class="helpText"> 
            <p>Symbol which indicates the maximum speed at which a tyre can safely travel corresponding to its load index.</p>
            <p><a sfref="[pages]3c31e6bf-5d50-45df-b81d-71177c0dd6b0" href="/help/load-and-speed-index-tables"><img sfref="[images]b3024559-58fe-4810-a21f-a3cc6cd03801" src="/sfimages/default-album/speedindex_info.jpg?sfvrsn=2" alt="Tyre Speed Index" title="SpeedIndex_info" /><br />
            </a></p>
        </div>
    </span>
                                    <div class="searchSelect checkboxes">
                                        <label for="defaultContent_searchContainer_searchBrand_chkTruckBrandRunFlat"><span class="chkTruckBrandRunFlat" data-isinternal="true"><input id="defaultContent_searchContainer_searchBrand_chkTruckBrandRunFlat" type="checkbox" name="ctl00$ctl00$defaultContent$searchContainer$searchBrand$chkTruckBrandRunFlat" /></span> Run Flat</label>
                                        <label for="defaultContent_searchContainer_searchBrand_chkTruckBrandEcoFriendly"><span class="chkTruckBrandEcoFriendly" data-isinternal="true"><input id="defaultContent_searchContainer_searchBrand_chkTruckBrandEcoFriendly" type="checkbox" name="ctl00$ctl00$defaultContent$searchContainer$searchBrand$chkTruckBrandEcoFriendly" /></span>ECO Friendly</label>
                                    </div>
                                </div>

                                <div class="tireSizes clearfix">
                                    <div>

                                        <div id="brandSeoTag" style="display:none"></div>
                                    </div>
                                </div>
                                    </form>
                            </div>

                            <div class="resultsMod">

                                <img alt="Save up to $100 with Free Shipping to metro areas for limited time only!" src="/images/freeShipping.jpg" class="freeShipping" />

                                <div id="competitorPricing"></div>

                                <div class="searchResults clearfix">
                                    <span class="searchResultsFound"></span>
                                    <span class="sortBy">
        <strong>Sort by</strong>
        <select id="orderResults" class="searchOrderFilter">
            <option value="Price">Price ( low - high )</option>
            <option value="-Price">Price ( high - low )</option>
            <option value="BrandName">Brand ( A - Z )</option>
            <option value="-BrandName">Brand ( Z - A )</option>
            <option value="-RunFlat">Run Flat</option>
            <option value="-EcoFriendly">Eco Friendly</option>
        </select>
    </span>
                                    <h1 class="resultsInfo"></h1>
                                </div>
                                <!-- stepNavigation // end -->

                                <div class="dealOfTheDayContainer"></div>
                                <div class="tyrePanels clearfix"></div>
                                <div class="paginationButtons"></div>
                                <div class="footnote">Some images for illustration purposes only.</div>

                            </div>
                            <div>

                                <div class="getHelpForm" style="display: none;">
                                    <span id="headerThankyouGetHelpFom"></span>
                                    <div id="defaultContent_searchContainer_GetHelpFormSearchResult_updateProgress" style="display:none;">

                                        <div class="overlay-mask" style="position: absolute; width: 100%; height: 100%; top: 0;
                left: 0; z-index: 100">
                                        </div>

                                    </div>
                                    <div id="defaultContent_searchContainer_GetHelpFormSearchResult_getHelpUptPanel">

                                        <div class="getHelpFormHeader">
                                            <p>

                                                Unfortunately we have no tyres available for that search! Please fill in the form below and one of our Tyre Experts will be able to help you.
                                            </p>
                                        </div>
                                        <div class="getHelpFormBody">
                                            <div id="defaultContent_searchContainer_GetHelpFormSearchResult_pnlForm" class="gethelpForm">

                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_txtName">
                                                        Name</label>
                                                    <input name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$txtName" type="text" id="defaultContent_searchContainer_GetHelpFormSearchResult_txtName" title="Enter your name" />
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_RequiredFieldValidator1" class="error" style="display:none;">We need your name</span>
                                                </div>
                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_txtEmail">
                                                        Email</label>
                                                    <input name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$txtEmail" type="text" id="defaultContent_searchContainer_GetHelpFormSearchResult_txtEmail" title="Enter your email address" />
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_RequiredFieldValidator2" class="error" style="display:none;">We need your email</span>
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_revEmail" class="error" style="display:none;">Valid email only</span>
                                                </div>
                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_txtPhone">
                                                        Phone</label>
                                                    <input name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$txtPhone" type="text" id="defaultContent_searchContainer_GetHelpFormSearchResult_txtPhone" title="Enter your phone" />
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_RequiredFieldValidator3" class="error" style="display:none;">We need your phone</span>
                                                </div>
                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_txtPostcode">
                                                        Location</label>
                                                    <input name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$txtPostcode" type="text" id="defaultContent_searchContainer_GetHelpFormSearchResult_txtPostcode" title="Enter your postcode" />
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_RequiredFieldValidator4" class="error" style="display:none;">We need your postcode</span>
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_reqPostcodeInt" class="error" style="display:none;">Postcode numeric only</span>
                                                </div>
                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_ddlMakeHelpForm">
                                                        Make</label>
                                                    <select name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$ddlMakeHelpForm" id="defaultContent_searchContainer_GetHelpFormSearchResult_ddlMakeHelpForm" class="searchFilterGetHelpForm" style="width:238px;">
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

                                                </div>

                                                <div class="searchField clearfix">
                                                    <label for="defaultContent_searchContainer_GetHelpFormSearchResult_txtComments">
                                                        Comments</label>
                                                    <textarea name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$txtComments" rows="2" cols="20" id="defaultContent_searchContainer_GetHelpFormSearchResult_txtComments" title="Tell us as much as you can about your vehicle and tyres. We will contact you to help you determine the best tyres to suit your vehicle and budget">
                                                    </textarea>
                                                    <span id="defaultContent_searchContainer_GetHelpFormSearchResult_RequiredFieldValidator5" class="error" style="display:none;">We need your comments</span>
                                                </div>
                                                <div class="clear"></div>
                                                <input type="submit" name="ctl00$ctl00$defaultContent$searchContainer$GetHelpFormSearchResult$btnSubmitGetHelpForm" value="Submit" onclick="return sanitizeInput();" id="defaultContent_searchContainer_GetHelpFormSearchResult_btnSubmitGetHelpForm" class="getQuoteButton" LeadFrom="No Tyre Results" />
                                                <span class="footnote" style="line-height: 15px; padding-bottom: 15px;">
                        Please view our <a href="#" target="_blank">Personal Information Collection Statement</a>. By clicking the submit button you acknowledge that you have read and agree to abide by the tyreflicks <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a>.
                    </span>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $('input[id*="txt"], textarea').each(function() {

                                        this.value = $(this).attr('title');

                                        $(this).focus(function() {
                                            if (this.value == $(this).attr('title')) {
                                                this.value = '';
                                            }
                                        });

                                        $(this).blur(function() {
                                            if (this.value == '') {
                                                this.value = $(this).attr('title');
                                            }
                                        });
                                    });

                                    function sanitizeInput() {
                                        $('input[id*="txt"], textarea').each(function() {

                                            if (this.value == $(this).attr('title')) {
                                                this.value = '';
                                            }
                                        });

                                        return true;
                                    }
                                </script>

                            </div>
                        </div>

                        <div class="search-link">
                            <div>

                                <h1>Truck Tyres</h1>
                                <div>

                                    @foreach($tyres_cat as $cat)
                                    @if($cat->truck_tyres->count() > 0)
                                    <h2>{{$cat->name}} tyres: </h2>
                                    <ul class="search-tyre-size-links">
                                        @foreach($cat->truck_tyres as $tyre)
                                        <li><a href="{{route('truck/size',['slug'=>$tyre->url])}}">{{$tyre->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    @endforeach

                                   
                                </div>

                            </div>
                        </div>

                    </section>
                    <aside>

<div id="LiveDiv">
        
    

            <div class="lhnInviteContainer">
                <div class="LHNInviteTitle">
                    <img alt="Livechat" src="{{asset('public/assets/images/help.png')}}"/>
                </div>    
                <div class="LHNInviteMessage">
                    <p>We have a tyre expert to help you.</p>
                    <p><span>Hi!</span> - Let's get your questions answered.</p>
                </div>

                <div class="LHNInviteButtons">
                    <div class="InviteAcceptButtonWrap">
                        
                        <span class="NeepHelpContactNumber"><a href="tel:(02) 9771 0170 ">(02) 9771 0170</a> </span>
                    </div>
                </div>
            </div>
            


</div>








        


<!--<div>-->
<!--    <div class="banner-ad" id="Tile3" style="height:250px;width:300px;">-->

<!--</div>-->
        

    </aside>

                    

                </article>
                <!-- extendedFooter // end -->
            </div>
            <!-- content // end -->

 @include('front.default.footer')
        </div>
        <!-- role=main // end -->
        
        
 @include('front.default.footer_end')



<script type="text/javascript">
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

      $('#defaultContent_searchContainer_searchSize_ddlTruckSectionWidth').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_width_profile")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {

                    var x = '<option value="NULL">Profile</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }else{
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#defaultContent_searchContainer_searchSize_ddlTruckAspectRatio').removeAttr('disabled');
                        $('#defaultContent_searchContainer_searchSize_ddlTruckAspectRatio').html(x);
                    }

                }
            });


      });



      $('#defaultContent_searchContainer_searchSize_ddlTruckAspectRatio').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_profile_rim")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="NULL">Rim</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].rim_size+'" class="sc-esjQYD iBqqkR">'+msg[i].rim_size+'</option>';
                        }else{
                            x += '<option value="'+msg[i].rim_size+'" class="sc-esjQYD iBqqkR">'+msg[i].rim_size+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#defaultContent_searchContainer_searchSize_ddlTruckRimDiameter').removeAttr('disabled');
                        $('#defaultContent_searchContainer_searchSize_ddlTruckRimDiameter').html(x);
                    }

                    $('#sizeTruckSearchButton').removeClass('disabled');

                }
            });


      });






      $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandSectionWidth').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_width_profile")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="NULL">Profile</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }else{
                            x += '<option value="'+msg[i].profile+'">'+msg[i].profile+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandAspectRatio').removeAttr('disabled');
                        $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandAspectRatio').html(x);
                    }

                }
            });


      });



      $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandAspectRatio').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_profile_rim")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {
                    var x = '<option value="NULL">Rim Diameter</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].rim_size+'" class="sc-esjQYD iBqqkR">'+msg[i].rim_size+'</option>';
                        }else{
                            x += '<option value="'+msg[i].rim_size+'" class="sc-esjQYD iBqqkR">'+msg[i].rim_size+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandRimDiameter').removeAttr('disabled');
                        $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandRimDiameter').html(x);
                    }

                    $('#sizeTruckSearchButton').removeClass('disabled');
                    $('#brandTruckSearchButton').removeClass('disabled');                    
                    

                }
            });


      });


      $('.advancedLink').click(function(){

            if($(this).find('a').html()=='Advanced'){
                $(this).find('a').html('Close');
                $('.advancedSizeSearch').removeClass('advancedHidden');
                $('.advancedBrandSearch').removeClass('advancedHidden');
                
            }else{
                $(this).find('a').html('Advanced');
                $('.advancedSizeSearch').addClass('advancedHidden');
                $('.advancedBrandSearch').addClass('advancedHidden');
                
            }

      });


      $('#size_div').click(function(){


            $('#searchBrandDiv').hide();
            $('#searchSizeDiv').show();
            $('#brands_div').removeClass('selected');
            $(this).addClass('selected');


      });

    $('#brands_div').click(function(){

            
            $('#searchSizeDiv').hide();
            $('#searchBrandDiv').show();
            $('#size_div').removeClass('selected');            
            $(this).addClass('selected','selected');



      });


      $('#defaultContent_searchContainer_searchBrand_ddlTruckBrand').change(function(){

        val = $(this).val();

        $.ajax({
                type:'POST',
                url:'{{route("get_brands_patterns_list_by_id")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {

                    var x = '<option value="NULL">Model</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandModel').html(x);
                    }else{
                         x = '<option value="NULL">Model</option>';
                         $('#defaultContent_searchContainer_searchBrand_ddlTruckBrandModel').html(x);
                    }

                }
            });


      });


</script>

<script type="text/javascript">
    
$('.browse-links').click(function(){
    
    $('.browse-class').hide();
    id = $(this).attr('data-id');
    $('#'+id).show();

});

</script>


</body>

</html>