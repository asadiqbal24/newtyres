@extends('front.buy.default')
<style type="text/css">
    .bSDKaV:hover{
        text-decoration: none;
        color:white;
    }

    .gBavju:hover{
        text-decoration: none;
        color:black;
    }
</style>
@section('content')  
    <app id="app">
        <div class="sc-hZSUBg sc-itybZL huXSnK"></div>
        <div class="sc-hZSUBg sc-kZmsYB jvVwcU"></div>
        @include('front.buy.header')
        
        <div class="sc-hZSUBg sc-ikTlrC fyXNbm"></div>
        
        <div class="sc-kqqoiJ djSLzE">
            <div class="sc-hZSUBg jvmIQB">
                <div class="sc-cMhqgX lgIQGd">
                    <div class="sc-iuJeZd mpjmA">
                        
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" {{route('home')}}>Home</a><span class="sc-iQKALj fwrZl">/</span><a class="sc-chPdSV krpDTx" href="/tyre/size/225-40r19">{{$tyre->name}}</a><span class="sc-iQKALj fwrZl">/</span>{{$brand->name}} {{$pattern->name}} {{$tyre->name}}</div>
                        <div class="sc-cQFLBn eyioiZ">
                            <div selected="" class="sc-bAeIUo hveDxG">
                                <div class="sc-exAgwC TSUuQ"><i class="sc-brqgnP sc-gojNiO joeIyx"><svg viewBox="0 0 58 59" xmlns="http://www.w3.org/2000/svg"><path d="M17.81 53.54l.8-1.78a24.89 24.89 0 0 0 26.84-4.2l1.58 1.76.1-.08 1.31 1.5-.08.07.43.47a29.89 29.89 0 0 1-32.22 5.04l.43-.95A29 29 0 0 1 0 29C0 12.98 13.05 0 29.15 0a29.1 29.1 0 0 1 28.84 24.79l-1.98.29A27.1 27.1 0 0 0 29.15 2C14.15 2 2 14.09 2 29a27 27 0 0 0 15.81 24.54z"></path></svg></i><span selected="" class="sc-iujRgT bkEfAz">Search<!-- --> <span class="sc-GMQeP nLkyu">for tyres</span></span>
                                </div>
                            </div>
                            <div selected="" class="sc-bAeIUo hveDxG">
                                <div class="sc-exAgwC TSUuQ"><i selected="" class="sc-cMljjf sc-daURTG kLcgUw"><svg viewBox="0 0 61 60" xmlns="http://www.w3.org/2000/svg"><path d="M14.17 8.77l.56.68A25.33 25.33 0 0 0 5.5 29c0 14.08 11.54 25.5 25.78 25.5 6.38 0 12.4-2.3 17.07-6.4l1.33 1.52.44-.38 1.32 1.5-.45.38.66.75a30.83 30.83 0 0 1-20.37 7.63C14.28 59.5.5 45.85.5 29c0-9.15 4.1-17.64 11.04-23.4l1.35 1.63A29.12 29.12 0 0 1 32.15 0a29.1 29.1 0 0 1 28.84 24.79l-1.98.29A27.1 27.1 0 0 0 32.15 2c-6.9 0-13.2 2.56-17.98 6.77z"></path></svg></i><span selected="" class="sc-iujRgT bkEfAz">Select<!-- --> <span class="sc-GMQeP nLkyu">Tyre Fitting Centre</span></span>
                                </div>
                            </div>
                            <div class="sc-bAeIUo hPPxTU">
                                <div class="sc-exAgwC TSUuQ"><i class="sc-jAaTju sc-bXGyLb nYnUi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62"><path d="M31.15.5A30.61 30.61 0 0 0 .5 31a30.61 30.61 0 0 0 30.65 30.5c7.76 0 14.88-2.89 20.28-7.64l-3.3-3.75a25.6 25.6 0 0 1-16.98 6.39A25.54 25.54 0 0 1 5.5 31c0-14.1 11.45-25.5 25.65-25.5a25.58 25.58 0 0 1 25.38 21.8l4.94-.73A30.63 30.63 0 0 0 31.15.5z"></path></svg></i><span class="sc-iujRgT bGHjKm">Checkout<!-- --> <span class="sc-GMQeP nLkyu"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="sc-hUMlYv gbNYSk"></div>
                        <div style="grid-template-rows:max-content min-content" class="sc-esOvli sc-jKmXuR ccjPoV">
                            <div class="sc-hORach cPdhSj">
                                <div class="sc-elNKlv coIhsW"></div>
                                <h2 class="sc-ccSCjj flOvCf">{{$tyre->tyre_attributes->name}}</h2>
                                <div class="sc-cJOK hVQWfL">
                                    
                                @if(!empty($tyre->tyre_discounts))  
                                @if($tyre->tyre_discounts->active==1)                                  
                                <div class="sc-hcmgZB dbhHfF"><span color="#a31e00" class="sc-dRaagA sc-dHmInP iKALlJ">{{$tyre->tyre_discounts->discount_percent}}% Off</span></div>
                                @endif
                                @endif

                                @if($tyre->on_sale==1)
                                <div class="sc-feryYK eSjYAD"><div class="sc-gldTML KUFqe">SALE</div></div>
                                @endif

                                    <div class="sc-dREXXX cJJANY"><img sizes="
        (max-width: 767px) 286px,
        (max-width: 959px) 694px,
        (max-width: 1440px) 470px
    " alt="WINRUN R330 225/40R19 93W" src="{{$tyre->image}}" theme="[object Object]" class="sc-kcbnda gPduav" data-src="{{$tyre->image}}" /></div>
                                    <div class="sc-ejGVNB bKEesc"></div>
                                    <div class="sc-hgRTRy eBCCZC">
                                        <a href="/tyres/winrun"><img BrandName="winrun" alt="winrun" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" class="sc-iIHSe haXuyd" data-src="https://tyresales-static.s3-ap-southeast-2.amazonaws.com/brand-images/winrun.gif" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-hORach eFQsis">
                                <div class="sc-bYwvMP bHWxqZ"></div>
                                <div>
                                    <div class="sc-ugnQR hJlbXi">
                                        <h1><span class="sc-eTpRJs jqNScz">{{$brand->name}}</span> <br/><span class="sc-iomxrj kNOgkC">{{$pattern->name}}</span> <br/><span class="sc-iFMziU jcRMLh">{{$tyre->name}}</span></h1></div>


                                                        @if(!empty($tyre->tyre_discounts))
                                                            @if($tyre->tyre_discounts->active==1)
                                                                @php $price = $tyre->price;
                                                                        $price = $price * ($tyre->tyre_discounts->discount_percent/100);
                                                                      $price =  $tyre->price - $price; 
                                                                @endphp
                                                            
                                                            @else
                                                                @php $price = $tyre->price; @endphp    
                                                            @endif
                                                        @else
                                                            @php $price = $tyre->price; @endphp         
                                                        @endif                                        

                                    <div class="sc-keVrkP kKePAO"><span class="sc-kcDeIU ghKMjO"><div class="sc-BngTV fLyAsQ">Today&#x27;s Price</div><div class="sc-cqpYsc hZwHSu">$<span>{{round($price)}}</span></div><div class="sc-dyGzUR iKfWfK">each</div></span><span class="sc-eAKXzc fRLyAS"></span></div>
                                    <div class="sc-gRnDUn clYZvV"><i class="sc-iYUSvU htWNXQ"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 31"><path d="M33.07 11.07h12.75v2.36H40.8v13.3h-2.76v-13.3h-4.99v-2.36h.01zm12.2 4.32h2.36v2.19h.04c.08-.31.23-.61.44-.9a4 4 0 0 1 1.76-1.38 3.2 3.2 0 0 1 1.13-.22l.6.02.35.05v2.4a8.06 8.06 0 0 0-1.09-.1 2.76 2.76 0 0 0-2.18 1c-.27.32-.5.72-.66 1.2a5.12 5.12 0 0 0-.25 1.67v5.4h-2.5V15.38zM63.5 26.72h-2.46v-1.58h-.05a3.42 3.42 0 0 1-1.37 1.37c-.62.35-1.24.52-1.87.52-1.5 0-2.59-.36-3.26-1.1-.66-.74-1-1.86-1-3.35V15.4H56v6.95c0 1 .2 1.7.58 2.1.38.42.92.63 1.61.63.54 0 .97-.08 1.33-.25.35-.16.64-.37.85-.65.22-.26.38-.6.48-.97.1-.38.14-.78.14-1.23V15.4h2.51v11.32zm4.28-3.63c.08.73.36 1.24.83 1.54.5.28 1.07.44 1.75.44a6.17 6.17 0 0 0 1.64-.26c.27-.1.48-.26.66-.46.17-.2.24-.45.23-.77a1.06 1.06 0 0 0-.35-.79 2.5 2.5 0 0 0-.85-.5 8.51 8.51 0 0 0-1.18-.32c-.44-.08-.88-.18-1.34-.28-.47-.1-.92-.24-1.36-.38a4.15 4.15 0 0 1-1.16-.6 2.63 2.63 0 0 1-.82-.95 2.96 2.96 0 0 1-.31-1.43c0-.62.15-1.13.45-1.55.3-.42.69-.75 1.15-1 .46-.26.97-.43 1.54-.54a7.6 7.6 0 0 1 3.31.03 4.6 4.6 0 0 1 1.46.6 3.59 3.59 0 0 1 1.62 2.7h-2.62c-.13-.6-.4-1-.83-1.2a3.36 3.36 0 0 0-1.49-.31 4.7 4.7 0 0 0-1.32.2c-.2.09-.39.2-.54.36a.85.85 0 0 0-.22.6c0 .32.1.56.32.75.2.19.49.34.83.47.35.13.73.24 1.18.32l1.37.3c.45.1.9.22 1.34.37.44.14.83.34 1.18.6.34.25.62.56.83.93.21.38.32.85.32 1.4 0 .68-.15 1.24-.46 1.72-.31.46-.71.85-1.2 1.14-.5.28-1.05.5-1.65.64a8.3 8.3 0 0 1-3.79-.05 4.88 4.88 0 0 1-1.58-.73c-.45-.33-.8-.74-1.06-1.22a4 4 0 0 1-.41-1.75h2.53v-.02zm8.29-7.7h1.9v-3.4h2.51v3.4h2.27v1.87h-2.27v6.05c0 .27.01.49.03.69.03.18.08.35.16.48s.2.23.37.3c.16.07.37.1.66.1l.54-.01c.17-.01.35-.03.53-.08v1.93l-.81.1a7.32 7.32 0 0 1-2.41-.16c-.4-.11-.72-.3-.95-.54a1.91 1.91 0 0 1-.46-.9 6.77 6.77 0 0 1-.15-1.26v-6.68h-1.9v-1.89h-.02zm8.45 0h2.38v1.54h.05a3.1 3.1 0 0 1 1.47-1.42 4.9 4.9 0 0 1 2.06-.43c.9 0 1.68.16 2.34.48.67.3 1.23.74 1.67 1.29.44.55.77 1.2.99 1.92a8.1 8.1 0 0 1 .03 4.55 5.9 5.9 0 0 1-.9 1.9 4.41 4.41 0 0 1-3.72 1.81c-.37 0-.73-.03-1.1-.1a4.86 4.86 0 0 1-1.05-.32 3.82 3.82 0 0 1-1.66-1.35h-.04v5.65H84.5V15.4zm8.78 5.68c0-.51-.07-1-.2-1.5-.13-.48-.33-.9-.6-1.27a2.78 2.78 0 0 0-2.36-1.24c-1.05 0-1.85.36-2.38 1.1-.54.72-.8 1.7-.8 2.9 0 .58.06 1.11.2 1.6.15.49.35.9.64 1.26a3 3 0 0 0 1 .83c.4.2.85.3 1.36.3a2.84 2.84 0 0 0 2.43-1.25c.26-.38.44-.8.56-1.27.1-.48.15-.96.15-1.46zm4.43-10h2.52v2.36h-2.52v-2.36zm0 4.32h2.52v11.33h-2.52V15.4zm4.76-4.32H105v15.65h-2.51V11.07zm10.21 15.96a6.2 6.2 0 0 1-2.43-.45 5.37 5.37 0 0 1-1.81-1.24 5.38 5.38 0 0 1-1.13-1.89 7.25 7.25 0 0 1-.39-2.4c0-.87.14-1.66.4-2.39a5.12 5.12 0 0 1 2.93-3.13c.7-.3 1.52-.45 2.43-.45.91 0 1.72.16 2.43.45.71.3 1.31.72 1.81 1.24.5.53.87 1.16 1.13 1.89.25.73.38 1.52.38 2.39 0 .87-.13 1.68-.38 2.4a5.12 5.12 0 0 1-2.93 3.13c-.72.3-1.53.45-2.44.45zm0-1.97a2.92 2.92 0 0 0 2.47-1.27c.26-.38.45-.81.59-1.29a5.83 5.83 0 0 0 0-2.9c-.13-.49-.33-.9-.6-1.28a2.92 2.92 0 0 0-2.47-1.26 2.92 2.92 0 0 0-2.46 1.26 4 4 0 0 0-.59 1.28 5.88 5.88 0 0 0 0 2.9c.13.48.33.91.6 1.29.26.37.6.68 1 .91.42.25.9.36 1.46.36zm6.49-9.67h1.9v-3.4h2.5v3.4h2.28v1.87h-2.27v6.05c0 .27.01.49.03.69.02.18.08.35.16.48s.2.23.36.3c.17.07.38.1.67.1l.53-.01c.18-.01.36-.03.54-.08v1.93l-.81.1a7.32 7.32 0 0 1-2.41-.16 2 2 0 0 1-.95-.54 1.91 1.91 0 0 1-.47-.9 6.77 6.77 0 0 1-.14-1.26v-6.68h-1.9v-1.89h-.02zM15.07.17l-3.57 10.9H0l9.32 6.73-3.56 10.88 9.32-6.73 5.75-4.15 9.31-6.73h-11.5L15.07.17zm5.76 17.63l.8 2.46-6.55 1.69 9.3 6.73-3.55-10.88z"></path></svg></i><i class="sc-sdtwF bKPurX"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#73CF11" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#73CF11" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#73CF11" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#73CF11" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#d6d6d6" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i></div>
                                    
                                    @if($tyre->stock_available > 0)
                                    <form class="sc-kXeGPI xBDkv" method="post" action="{{route('checkout',['token'=>md5(date('Y-m-d').microtime())])}}"> 
                                        {{csrf_field()}}
                                        <input type="hidden" name="brand" value="{{$brand->id}}">
                                        <input type="hidden" name="pattern" value="{{$pattern->id}}">
                                        <input type="hidden" name="tyre" value="{{$tyre->id}}">
                                        <label for="q" class="sc-cHSUfg dyotZN">QUANTITY</label>
                                        <div class="sc-hMFtBS gWLzxB">

                                            <select id="q" name="q" style="width:75px;min-width:75px;max-width:100px" class="sc-kfGgVZ sc-fyjhYU jirwge">

                                                @if($tyre->stock_available > $tyre->max_order_quantity)
                                                    @php $to = $tyre->max_order_quantity; @endphp
                                                @else
                                                    @php $to = $tyre->stock_available; @endphp
                                                @endif


                                                @for($i=$tyre->min_quantity;$i<=$to;$i++)
                                                    <option>{{$i}}</option>
                                                @endfor
                                            </select>
                                            <div class="sc-cugefK loVGJk"></div>
                                            <button name="Checkout" class="sc-hrWEMg sc-cmjSyW fcvuXp"><i class="sc-jnlKLf sc-fnwBNb hiufyZ"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16,21.9146472 L16,24.5089948 C16,24.7801695 16.2319336,25 16.5,25 C16.7761424,25 17,24.7721195 17,24.5089948 L17,21.9146472 C17.5825962,21.708729 18,21.1531095 18,20.5 C18,19.6715728 17.3284272,19 16.5,19 C15.6715728,19 15,19.6715728 15,20.5 C15,21.1531095 15.4174038,21.708729 16,21.9146472 L16,21.9146472 L16,21.9146472 Z M15,22.5001831 L15,24.4983244 C15,25.3276769 15.6657972,26 16.5,26 C17.3284271,26 18,25.3288106 18,24.4983244 L18,22.5001831 C18.6072234,22.04408 19,21.317909 19,20.5 C19,19.1192881 17.8807119,18 16.5,18 C15.1192881,18 14,19.1192881 14,20.5 C14,21.317909 14.3927766,22.04408 15,22.5001831 L15,22.5001831 L15,22.5001831 Z M9,14.0000125 L9,10.499235 C9,6.35670485 12.3578644,3 16.5,3 C20.6337072,3 24,6.35752188 24,10.499235 L24,14.0000125 C25.6591471,14.0047488 27,15.3503174 27,17.0094776 L27,26.9905224 C27,28.6633689 25.6529197,30 23.991212,30 L9.00878799,30 C7.34559019,30 6,28.652611 6,26.9905224 L6,17.0094776 C6,15.339581 7.34233349,14.0047152 9,14.0000125 L9,14.0000125 L9,14.0000125 Z M10,14 L10,10.4934269 C10,6.90817171 12.9101491,4 16.5,4 C20.0825462,4 23,6.90720623 23,10.4934269 L23,14 L22,14 L22,10.5090731 C22,7.46649603 19.5313853,5 16.5,5 C13.4624339,5 11,7.46140289 11,10.5090731 L11,14 L10,14 L10,14 Z M12,14 L12,10.5008537 C12,8.0092478 14.0147186,6 16.5,6 C18.9802243,6 21,8.01510082 21,10.5008537 L21,14 L12,14 L12,14 L12,14 Z M8.99742191,15 C7.89427625,15 7,15.8970601 7,17.0058587 L7,26.9941413 C7,28.1019465 7.89092539,29 8.99742191,29 L24.0025781,29 C25.1057238,29 26,28.1029399 26,26.9941413 L26,17.0058587 C26,15.8980535 25.1090746,15 24.0025781,15 L8.99742191,15 L8.99742191,15 Z"></path></svg></i> CHECKOUT NOW...  
                                               
                                                <!-- -->$<span id="quantity_price">{{round($price)*$tyre->min_quantity}}</span></button>
                                        </div>
                                    </form>
                                   @endif     

<!--                                     <a purpose="PRIMARY" class="sc-hXRMBi sc-iNhVCk djlJaN" href="/buy/tyre/winrun/r330/225-40r19/122677#fitment-modal">Or click here for Fitment TODAY</a> -->
                                    

                                    <div class="sc-bfYoXt cQNJPW">
                                        <div class="sc-cTjmhe eiVRnA"><i class="sc-jtRfpW cUTVSj"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 121 44"><g fill="none" fill-rule="evenodd"><g fill="#272560" fill-rule="nonzero"><path d="M59.17 35.7a2.67 2.67 0 0 1-2.04-.83c-.52-.56-.8-1.3-.77-2.07 0-.77.18-1.53.55-2.21.33-.6.73-1.17 1.19-1.68L69.52 16h-9.96c-.96 0-1.65-.33-2.03-.99a4.21 4.21 0 0 1-.53-2.16c-.03-.73.18-1.45.6-2.05a2.08 2.08 0 0 1 1.78-.85h17.6c.74-.04 1.47.23 2 .75.5.5.76 1.2.76 2.1.02.7-.13 1.4-.43 2.03a6.89 6.89 0 0 1-1.08 1.52l-11.9 13.3h11.28c.68 0 1.32.3 1.74.84.44.6.66 1.33.63 2.08.03.77-.15 1.54-.54 2.22-.38.61-1.07.93-2.03.93H59.17zM86.82 36.05c-3.13 0-3.79-1.61-3.79-2.96V13.41c0-1.03.31-1.86.93-2.48.61-.6 1.6-.92 2.91-.92 1.11 0 2 .25 2.62.75.63.5.97 1.31.97 2.35V33c0 1.08-.34 1.87-1 2.36-.68.5-1.54.7-2.64.7zm0-28.15a4.21 4.21 0 0 1-2.98-1.07 3.77 3.77 0 0 1-1.15-2.87 3.78 3.78 0 0 1 1.14-2.82 4.1 4.1 0 0 1 2.99-1.1c1.01 0 2 .33 2.8.94.88.65 1.33 1.65 1.33 3 0 1.19-.39 2.15-1.15 2.87a4.2 4.2 0 0 1-2.98 1.05zM98.63 43.59c-2.93 0-3.55-1.64-3.55-3V12.73c-.02-.87.31-1.71.93-2.33.61-.61 1.6-.93 2.91-.93.83 0 1.64.18 2.37.55.78.4 1.18 1.19 1.18 2.3l.51-.55a8.99 8.99 0 0 1 6.55-2.68c1.65-.03 3.3.32 4.78 1.03a9.77 9.77 0 0 1 3.48 2.88c.96 1.3 1.66 2.77 2.06 4.34.46 1.77.68 3.59.67 5.41.02 1.86-.24 3.72-.77 5.5a12.93 12.93 0 0 1-2.26 4.36 10.4 10.4 0 0 1-3.66 2.88c-1.54.7-3.23 1.06-4.93 1.03a9.27 9.27 0 0 1-5.56-1.56 6.09 6.09 0 0 1-1.01-.87v6.34c0 1.1-.3 1.92-.9 2.42-.6.5-1.5.73-2.8.73zm9-28.19a4.7 4.7 0 0 0-2.31.55c-.67.38-1.25.91-1.68 1.55a7.33 7.33 0 0 0-1.05 2.36c-.25.98-.37 2-.36 3 0 2.3.47 4.16 1.42 5.5a4.52 4.52 0 0 0 4 1.96c1.76 0 3.04-.67 3.93-2.05a9.93 9.93 0 0 0 1.37-5.4c0-1.02-.12-2.02-.37-3a7.68 7.68 0 0 0-1.03-2.36 4.6 4.6 0 0 0-3.92-2.1z"></path></g><g fill-rule="nonzero"><path fill="#F15B41" d="M43.17 16.39l-9.75 8.77H9.27c-2.26 0-4.43.82-6.12 2.3l12.18-10.95.19-.17L30.78 2.6a9.26 9.26 0 1 1 12.39 13.78z"></path><circle cx="9.27" cy="9.5" r="9.27" fill="#F99D1D"></circle><path fill="#272560" d="M9.27 25.16c-2.26 0-4.43.82-6.12 2.3l-.08.08a9.26 9.26 0 0 0 12.4 13.78l17.95-16.16H9.27z"></path><path fill="#00B6BD" d="M33.4 25.17L15.44 41.32a9.23 9.23 0 0 1-6.2 2.37h27.72a9.03 9.03 0 0 0 9.11-9.27 9.2 9.2 0 0 0-9.11-9.26H33.4z"></path></g></g></svg></i>
                                            <div>Buy
                                                <!-- -->4
                                                <!-- -->tyres and pay <b>$2.20</b> a day</div>
                                            <div>12 months interest free</div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="sc-ePZHVD dWVxrl">Delivery &amp; Installation</h4>
                                <div class="sc-jeCdPy fNFkNf">
                                    <div class="sc-rBLzX eaIZyh">
                                        <div class="sc-hMFtBS gWLzxB">
                                            <div class="sc-bMvGRv eWoZPm"><span class="sc-bGbJRg vNbBx"><i class="sc-gisBJw kLFNvz"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 20"><path d="M1 0a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h1.36c-.23.46-.36.96-.36 1.5C2 18.42 3.58 20 5.5 20S9 18.42 9 16.5c0-.54-.13-1.04-.36-1.5h6.72c-.23.46-.36.96-.36 1.5 0 1.92 1.58 3.5 3.5 3.5s3.5-1.58 3.5-3.5c0-.54-.13-1.04-.36-1.5H23a1 1 0 0 0 1-1V9a1 1 0 0 0-.3-.7l-3-3A1 1 0 0 0 20 5h-3V1a1 1 0 0 0-1-1H1zm1 2h13v11H2V2zm15 5h2.59L22 9.41V13h-5V7zM5.5 15c.84 0 1.5.66 1.5 1.5S6.34 18 5.5 18 4 17.34 4 16.5 4.66 15 5.5 15zm13 0c.84 0 1.5.66 1.5 1.5s-.66 1.5-1.5 1.5-1.5-.66-1.5-1.5.66-1.5 1.5-1.5z"></path></svg></i></span></div>
                                            <div class="sc-CtfFt gkVnKb"><span class="sc-gqjmRU hxUOCW">Delivery est. on {{date('d F Y', strtotime('+7 days'))}}</span></div>
                                            <div class="sc-laTMn kyyuMU"><span class="sc-gqjmRU hxUOCW"><span>Included <sup>+</sup></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sc-rBLzX eaIZyh">
                                        <div class="sc-hMFtBS gWLzxB">
                                            <div class="sc-bMvGRv eWoZPm"><span class="sc-bGbJRg vNbBx"><i class="sc-cHGsZl eHnnEg"><svg viewBox="0 0 18 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><title>Spanner</title><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-1139.000000, -728.000000)"><g id="Icon/Spanner/Grey" transform="translate(1136.000000, 728.000000)"><g id="Group" transform="translate(4.000000, 0.000000)"><path d="M10.1723729,15.6977061 C13.4051606,14.7156553 15.7578716,11.7114651 15.7578716,8.15776991 C15.7578716,5.00142172 13.9018713,2.27856561 11.221703,1.02103378 M4.58137096,1 C1.87689108,2.24801705 0,4.98370778 0,8.15776991 C0,11.7235676 2.36876311,14.7361111 5.61855816,15.7076691" id="Oval-7" stroke="#1C1C1C" stroke-width="2"></path><rect id="Rectangle-8" fill="#1C1C1C" x="4" y="15" width="2" height="9"></rect><rect id="Rectangle-8-Copy-2" fill="#1C1C1C" x="7" y="18" width="2" height="6"></rect><rect id="Rectangle-8-Copy" fill="#1C1C1C" x="10" y="15" width="2" height="9"></rect><polyline id="Rectangle-7-Copy" stroke="#1C1C1C" stroke-width="2" points="11 0 11 8 5 8 5 0"></polyline></g></g></g></g></svg></i></span></div>
                                            <div class="sc-CtfFt gkVnKb"><span class="sc-gqjmRU hxUOCW">Fitting, Balancing &amp; Old Tyre Disposal</span></div>
                                            <div class="sc-laTMn kyyuMU"><span class="sc-gqjmRU hxUOCW"><span>Included</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="sc-ePZHVD dWVxrl">Includes</h4>
                                <div class="sc-jeCdPy fNFkNf">
                                    @php $total = 0; @endphp
                                    @foreach($extra as $e)
                                    <div class="sc-rBLzX eaIZyh">
                                        <div class="sc-hMFtBS gWLzxB">
                                            <div class="sc-bMvGRv eWoZPm"><img src="{{$e->image}}" style="width: 25px"></div>
                                            <div class="sc-CtfFt gkVnKb"><span class="sc-gqjmRU hxUOCW">{{$e->name}}</span></div>
                                            <div class="sc-laTMn kyyuMU"><span class="sc-gqjmRU hxUOCW">
                                                <span>{{$e->description}}</span>
                                                @if($e->cost!=0)
                                                <div class="sc-likbZx dsNuwd">Valued At ${{$e->cost}}</div>
                                                @php $total = $e->cost + $total; @endphp
                                                @endif
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                @if($total!=0)
                                <div class="sc-dymIpo fLskIG">
                                    <div class="sc-hGoxap JkAju">
                                        <div class="sc-gJWqzi iXPCqW"><img width="52" height="105" style="position:absolute" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="/dist/assets/tyres_stacked.e04837f287171c0dc1a40eb7a304153d.png" /></div>
                                        <div class="sc-bnXvFD iMtfrr">
                                            <p class="sc-gFaPwZ hmyRmL">Tyresales Advantage YOU&#x27;RE SAVING</p>
                                            <p class="sc-fhYwyz gIKEeB">Total savings based on value of discounts &amp; inclusions</p>
                                        </div>
                                        <p class="sc-jzgbtB cFqMhi">${{$total}}</p>
                                    </div>
                                </div>
                                @endif
                                <div class="sc-hUMlYv gbNYSk"></div>
                            </div>
                            <div class="sc-hORach dHGapB">
                                <div class="sc-hMFtBS gWLzxB">
                                    <a class="sc-bdVaJa bSDKaV tyres_details" data-div="reviews_div">Reviews</a>
                                    <a class="sc-bdVaJa gBavju tyres_details" data-div="desc_div">Tyre Details</a>
                                    <a class="sc-bdVaJa gBavju tyres_details" data-div="delivery_div">Delivery, Installation &amp; Returns</a></div>
                                <div class="sc-cjHlYL jrhnbl"></div>
                                <div style="display:block" id="reviews_div" class="tyres_details_div">
                                    <div class="sc-eIHaNI jEHRgD">{{$brand->name}}</div>
                                    <div class="sc-dxZgTM juCvuw">{{$pattern->name}}</div>
                                    <div class="sc-dvCyap cmaakG">{{$tyre->name}}</div>
                                    <div class="sc-imABML eFNSR"></div><i class="sc-gVyKpa emOWPB"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 31"><path d="M33.07 11.07h12.75v2.36H40.8v13.3h-2.76v-13.3h-4.99v-2.36h.01zm12.2 4.32h2.36v2.19h.04c.08-.31.23-.61.44-.9a4 4 0 0 1 1.76-1.38 3.2 3.2 0 0 1 1.13-.22l.6.02.35.05v2.4a8.06 8.06 0 0 0-1.09-.1 2.76 2.76 0 0 0-2.18 1c-.27.32-.5.72-.66 1.2a5.12 5.12 0 0 0-.25 1.67v5.4h-2.5V15.38zM63.5 26.72h-2.46v-1.58h-.05a3.42 3.42 0 0 1-1.37 1.37c-.62.35-1.24.52-1.87.52-1.5 0-2.59-.36-3.26-1.1-.66-.74-1-1.86-1-3.35V15.4H56v6.95c0 1 .2 1.7.58 2.1.38.42.92.63 1.61.63.54 0 .97-.08 1.33-.25.35-.16.64-.37.85-.65.22-.26.38-.6.48-.97.1-.38.14-.78.14-1.23V15.4h2.51v11.32zm4.28-3.63c.08.73.36 1.24.83 1.54.5.28 1.07.44 1.75.44a6.17 6.17 0 0 0 1.64-.26c.27-.1.48-.26.66-.46.17-.2.24-.45.23-.77a1.06 1.06 0 0 0-.35-.79 2.5 2.5 0 0 0-.85-.5 8.51 8.51 0 0 0-1.18-.32c-.44-.08-.88-.18-1.34-.28-.47-.1-.92-.24-1.36-.38a4.15 4.15 0 0 1-1.16-.6 2.63 2.63 0 0 1-.82-.95 2.96 2.96 0 0 1-.31-1.43c0-.62.15-1.13.45-1.55.3-.42.69-.75 1.15-1 .46-.26.97-.43 1.54-.54a7.6 7.6 0 0 1 3.31.03 4.6 4.6 0 0 1 1.46.6 3.59 3.59 0 0 1 1.62 2.7h-2.62c-.13-.6-.4-1-.83-1.2a3.36 3.36 0 0 0-1.49-.31 4.7 4.7 0 0 0-1.32.2c-.2.09-.39.2-.54.36a.85.85 0 0 0-.22.6c0 .32.1.56.32.75.2.19.49.34.83.47.35.13.73.24 1.18.32l1.37.3c.45.1.9.22 1.34.37.44.14.83.34 1.18.6.34.25.62.56.83.93.21.38.32.85.32 1.4 0 .68-.15 1.24-.46 1.72-.31.46-.71.85-1.2 1.14-.5.28-1.05.5-1.65.64a8.3 8.3 0 0 1-3.79-.05 4.88 4.88 0 0 1-1.58-.73c-.45-.33-.8-.74-1.06-1.22a4 4 0 0 1-.41-1.75h2.53v-.02zm8.29-7.7h1.9v-3.4h2.51v3.4h2.27v1.87h-2.27v6.05c0 .27.01.49.03.69.03.18.08.35.16.48s.2.23.37.3c.16.07.37.1.66.1l.54-.01c.17-.01.35-.03.53-.08v1.93l-.81.1a7.32 7.32 0 0 1-2.41-.16c-.4-.11-.72-.3-.95-.54a1.91 1.91 0 0 1-.46-.9 6.77 6.77 0 0 1-.15-1.26v-6.68h-1.9v-1.89h-.02zm8.45 0h2.38v1.54h.05a3.1 3.1 0 0 1 1.47-1.42 4.9 4.9 0 0 1 2.06-.43c.9 0 1.68.16 2.34.48.67.3 1.23.74 1.67 1.29.44.55.77 1.2.99 1.92a8.1 8.1 0 0 1 .03 4.55 5.9 5.9 0 0 1-.9 1.9 4.41 4.41 0 0 1-3.72 1.81c-.37 0-.73-.03-1.1-.1a4.86 4.86 0 0 1-1.05-.32 3.82 3.82 0 0 1-1.66-1.35h-.04v5.65H84.5V15.4zm8.78 5.68c0-.51-.07-1-.2-1.5-.13-.48-.33-.9-.6-1.27a2.78 2.78 0 0 0-2.36-1.24c-1.05 0-1.85.36-2.38 1.1-.54.72-.8 1.7-.8 2.9 0 .58.06 1.11.2 1.6.15.49.35.9.64 1.26a3 3 0 0 0 1 .83c.4.2.85.3 1.36.3a2.84 2.84 0 0 0 2.43-1.25c.26-.38.44-.8.56-1.27.1-.48.15-.96.15-1.46zm4.43-10h2.52v2.36h-2.52v-2.36zm0 4.32h2.52v11.33h-2.52V15.4zm4.76-4.32H105v15.65h-2.51V11.07zm10.21 15.96a6.2 6.2 0 0 1-2.43-.45 5.37 5.37 0 0 1-1.81-1.24 5.38 5.38 0 0 1-1.13-1.89 7.25 7.25 0 0 1-.39-2.4c0-.87.14-1.66.4-2.39a5.12 5.12 0 0 1 2.93-3.13c.7-.3 1.52-.45 2.43-.45.91 0 1.72.16 2.43.45.71.3 1.31.72 1.81 1.24.5.53.87 1.16 1.13 1.89.25.73.38 1.52.38 2.39 0 .87-.13 1.68-.38 2.4a5.12 5.12 0 0 1-2.93 3.13c-.72.3-1.53.45-2.44.45zm0-1.97a2.92 2.92 0 0 0 2.47-1.27c.26-.38.45-.81.59-1.29a5.83 5.83 0 0 0 0-2.9c-.13-.49-.33-.9-.6-1.28a2.92 2.92 0 0 0-2.47-1.26 2.92 2.92 0 0 0-2.46 1.26 4 4 0 0 0-.59 1.28 5.88 5.88 0 0 0 0 2.9c.13.48.33.91.6 1.29.26.37.6.68 1 .91.42.25.9.36 1.46.36zm6.49-9.67h1.9v-3.4h2.5v3.4h2.28v1.87h-2.27v6.05c0 .27.01.49.03.69.02.18.08.35.16.48s.2.23.36.3c.17.07.38.1.67.1l.53-.01c.18-.01.36-.03.54-.08v1.93l-.81.1a7.32 7.32 0 0 1-2.41-.16 2 2 0 0 1-.95-.54 1.91 1.91 0 0 1-.47-.9 6.77 6.77 0 0 1-.14-1.26v-6.68h-1.9v-1.89h-.02zM15.07.17l-3.57 10.9H0l9.32 6.73-3.56 10.88 9.32-6.73 5.75-4.15 9.31-6.73h-11.5L15.07.17zm5.76 17.63l.8 2.46-6.55 1.69 9.3 6.73-3.55-10.88z"></path></svg></i>
                                    <br/><i class="sc-hIVACf iiTqoe"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#73CF11" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#73CF11" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#73CF11" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#73CF11" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#d6d6d6" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i> <span class="sc-eXNvrr cNweTs">554<!-- --> reviews</span>
                                    <div class="sc-cjHlYL jrhnbl"></div><i class="sc-gpHHfC gcptpM"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#00B67A" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#00B67A" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#00B67A" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i>
                                    <p class="sc-dnqmqq btZTLD"><strong>by <!-- -->Tracey<!-- --> <!-- -->18th April 2020</strong>
                                        <br/>I travel well over an hour to and from work country miles these tyres are super quite my old ones droned handle well I’ve driven in the rain they haven’t slid...... I have a turbo Cruze.... Highly recommended great price too </p><i class="sc-gpHHfC gcptpM"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#00B67A" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#00B67A" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#00B67A" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i>
                                    <p class="sc-dnqmqq btZTLD"><strong>by <!-- -->Andrew<!-- --> <!-- -->5th April 2020</strong>
                                        <br/>Very happy. Price excellent. Bit early to tell re durability however quietness, performance and stability seems very good. </p><i class="sc-gpHHfC gcptpM"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#00B67A" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#00B67A" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#00B67A" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i>
                                    <p class="sc-dnqmqq btZTLD"><strong>by <!-- -->Michael Day<!-- --> <!-- -->3rd April 2020</strong>
                                        <br/>I love these tyres. My second set after 55k and they performed extremely well in all weather even at the end. I will buy another set in another 55k.</p><i class="sc-gpHHfC gcptpM"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251 46"><path fill="#00B67A" d="M0 46.33h46.38V0H0z"></path><path fill="#FFF" d="M39.53 19.71l-26.3 19.1L17.07 27 7.02 19.7h12.42l3.84-11.8 3.83 11.8h12.42zm-16.25 11.8L30.46 30l2.86 8.8-10.04-7.29z"></path><path fill="#00B67A" d="M51.25 46.33h46.37V0H51.25z"></path><path fill="#FFF" d="M75 31.33L81.14 30 84 39l-9.66-7.2L64.3 39l3.9-11.84L58 19.84h12.6L74.5 8l3.9 11.84H91L75 31.33z"></path><path fill="#00B67A" d="M102.53 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M142.07 19.71l-26.3 19.1L119.6 27l-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8L133 30l2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M153.82 46.33h46.37V0h-46.37z"></path><path fill="#FFF" d="M193.35 19.71l-26.3 19.1 3.83-11.8-10.04-7.3h12.41l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path><path fill="#00B67A" d="M205.06 46.33h46.38V0h-46.38z"></path><path fill="#FFF" d="M244.6 19.71l-26.3 19.1 3.83-11.8-10.05-7.3h12.42l3.84-11.8 3.84 11.8h12.42zm-16.26 11.8l7.19-1.51 2.86 8.8-10.05-7.29z"></path></svg></i>
                                    <p class="sc-dnqmqq btZTLD"><strong>by <!-- -->Stuart<!-- --> <!-- -->29th March 2020</strong>
                                        <br/>Excellent tyres, Really happy with these</p>
                                    <button class="sc-hrWEMg ffOGnX"><i class="sc-gGBfsJ sc-hUfwpO dXIZGR"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M0 0h5v5H0zM7 0h5v5H7zM0 7h5v5H0zM7 7h5v5H7z"></path></svg></i> Load
                                        <!-- -->550
                                        <!-- -->more of
                                        <!-- -->
                                        <!-- -->550</button>
                                </div>
                                <div style="display:none" id="desc_div" class="tyres_details_div">
                                    <div class="sc-eIHaNI jEHRgD">WINRUN</div>
                                    <div class="sc-dxZgTM juCvuw">R330</div>
                                    <div class="sc-dvCyap cmaakG">225/40R19 93W</div>
                                    @if(!empty($tyre->description))
                                        <p class="sc-dnqmqq btZTLD">{!!$tyre->description!!}</p>
                                    @endif
                                    @if(!empty($tyre->features))
                                    <h3 class="sc-bxivhb utJvR">Features</h3>
                                    {!!$tyre->features!!}
                                    @endif

                                    @if(!empty($tyre->video)) 
                                    <h3 class="sc-bxivhb utJvR">Video</h3>
                                    <div class="sc-gbOuXE fmkzAz">
                                        <iframe allowfullscreen="" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameBorder="0" class="sc-dRFtgE dTxlHr" src="{{$tyre->video}}"></iframe>
                                    </div>
                                    @endif
                                </div>
                                <div style="display:none" id="delivery_div" class="tyres_details_div">
                                    <h3 class="sc-bxivhb utJvR">Delivery</h3>
                                    <p class="sc-dnqmqq btZTLD">Tyresales delivers Australia wide with fast service which is sure to impress. With free delivery to most metropolitan areas, our expansive network means your tyres will arrive in no time at all. To read more about delivery to your area please click our
                                        <!-- --><a href="/learn-more/purchasing-tyres/delivery-information" target="_blank" class="sc-VigVT iGmfbA">Delivery Information page</a>
                                        <!-- -->to find out more.</p>
                                    <h3 class="sc-bxivhb utJvR">Installation</h3>
                                    <p class="sc-dnqmqq btZTLD">With the largest fitment network all across Australia there is always a fitment centre in close proximity to your home or workplace. Simply choose your fitment location while in the checkout process. Once your tyres arrive the centre will be in contact and arrange a fitting time that suits you. Alternatively, you can arrange the fitment yourself and we will deduct the cost of the fitting from your order. You can read more about the installation on our
                                        <!-- --><a href="/customer-service/fitting-and-balancing" target="_blank" class="sc-VigVT iGmfbA">Fitting and Balancing page</a>.</p>
                                    <h3 class="sc-bxivhb utJvR">Returns</h3>
                                    <p class="sc-dnqmqq btZTLD">Tyresales Risk Free Guarantee provides full money back guarantee if you’re not happy with your purchase, we will even cover the shipping costs!</p>
                                    <p class="sc-dnqmqq btZTLD">To be eligible, tyres must be unmounted and returned within 30 days of purchase. If a return request is made after this time, tyresales reserves the right to refuse the return.</p>
                                    <p class="sc-dnqmqq btZTLD">If wanting to process a return please send an email to our customer service team at
                                        <!-- --><a href="mailto:customersupport@tyresales.com.au" class="sc-VigVT iGmfbA">customersupport@tyresales.com.au</a>. If you would like to read our full T’s and C’s on warranties &amp; returns you can visit our
                                        <!-- --><a href="/customer-service/warranty" target="_blank" class="sc-VigVT iGmfbA">Warranty &amp; Returns page</a>.</p>
                                </div>
                                <script type="application/ld+json">{"@context":"https://schema.org","@type":"Product","productID":"","sku":"17148","name":"R330","model":"225/40R19 93W","image":"https://tyresales-static.s3-ap-southeast-2.amazonaws.com/product-images/101861-winrun-r330.jpg","description":"The Winrun R330 is an Ultra High Performance tyre designed for use on passenger cars.\r\n","brand":{"@type":"Brand","name":"WINRUN","identifier":"WINRUN"},"aggregateRating":{"@type":"AggregateRating","ratingValue":4,"reviewCount":554},"review":[{"@type":"Review","author":{"@type":"Person","name":"Tracey"},"datePublished":"2020-04-18T00:00:00","description":"I travel well over an hour to and from work country miles these tyres are super quite my old ones droned handle well I’ve driven in the rain they haven’t slid...... I have a turbo Cruze.... Highly recommended great price too ","reviewRating":{"@type":"Rating","bestRating":"5","ratingValue":5,"worstRating":"1"}},{"@type":"Review","author":{"@type":"Person","name":"Andrew"},"datePublished":"2020-04-05T00:00:00","description":"Very happy. Price excellent. Bit early to tell re durability however quietness, performance and stability seems very good. ","reviewRating":{"@type":"Rating","bestRating":"5","ratingValue":5,"worstRating":"1"}},{"@type":"Review","author":{"@type":"Person","name":"Michael Day"},"datePublished":"2020-04-03T00:00:00","description":"I love these tyres. My second set after 55k and they performed extremely well in all weather even at the end. I will buy another set in another 55k.","reviewRating":{"@type":"Rating","bestRating":"5","ratingValue":5,"worstRating":"1"}},{"@type":"Review","author":{"@type":"Person","name":"Stuart"},"datePublished":"2020-03-29T00:00:00","description":"Excellent tyres, Really happy with these","reviewRating":{"@type":"Rating","bestRating":"5","ratingValue":5,"worstRating":"1"}}]}</script>
                            </div>
                        </div>
                        <div class="sc-hUMlYv gbNYSk"></div>
                    </div>
                </div>

                                    @include('front.default.footer_end')                
            </div>
        </div>
          
        
    </app>

    @endsection()
    @section('jsOutside')

    <script type="text/javascript">
        
        $('#q').change(function(){

            var price = '{{$tyre->price}}';
            var q = $(this).val();
            total = Number(q)*Number(price);
            $('#quantity_price').html(total);
            $('#todays_price').html(total);
        });

    
        $('.tyres_details').click(function(){

            $('.tyres_details').each(function(){


                   $(this).removeClass('bSDKaV');
                   $(this).addClass('gBavju');


            });

            $(this).removeClass('gBavju');
            $(this).addClass('bSDKaV');

            $('.tyres_details_div').hide();
            var div = $(this).attr('data-div');
            $('#'+div).show();

        });

        </script>

    @endsection