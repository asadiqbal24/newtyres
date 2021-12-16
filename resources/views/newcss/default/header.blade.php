                <a class="sc-eMigcr ioHOMS"><i class="sc-bRBYWo sc-fzsDOv gngsea"><svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg"><path stroke-linejoin="round" stroke-linecap="round" fill="none" stroke="#1C1C1C" stroke-width="2" d="M1 7h18M1 1h18M1 13h18"></path></svg></i></a>
            <div class="sticky-header">
            <div class="top-strip">
                <div class="container">
                    <div class="col-md-6">
                        <div class="h-info">
                            <a href="tel:(02) 9771 0170"><i class="fa fa-phone"></i>  (02) 9771 0170</a>
                             <a href="mailto:info@tyreflicks.com.au
"><i class="fa fa-envelope-o"></i>  info@tyreflicks.com.au
</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>

            <div class="logo-section">
            <div class="container">
                <div class="col-md-4">
                    <img src="{{asset('public/assets/images/main-logo.png')}}">
                </div>
                </div>
        </div>
        
        
        <div class="sc-hZSUBg sc-chbbiW kOEylg">
                <div class="sc-cMhqgX sc-RcBXQ cKhWBj">
                    <div class="sc-iuJeZd sc-hzNEM gaPFGP"><a title="Home" class="sc-gmeYpB bLLCOc main-site-home-icon" href="{{route('home')}}"><i class="sc-gipzik sc-fcdeBU igvagH"><svg xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd"><path d="M3 16.98V9.03L9.97 3l7.01 6.03v7.95h-4V11h-6v5.98z"></path><path fill-rule="nonzero" d="M1.3 8.42l-.6-.79L10 .37l9.32 7.26-.62.79L10 1.63z"></path></g></svg></i></a>
                     <!--   <ul class="sc-kxynE hVvTOh main-site-menu-items">-->

                     <!--     @foreach($categories as $cat)-->

                     <!--      <li><a class="topMenu" href="{{route('search')}}" style="color: white">{{$cat->name}}<i class="sc-caSCKo sc-LKuAh eaWStw"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8"><path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path></svg></i></a>-->
                     <!--        <ul>-->
                     <!--           @foreach($cat->category as $ct) -->
                     <!--           @if($ct->url_page==1)-->
                     <!--             @php $url = route('page',['slug'=>$ct->url]); @endphp-->
                     <!--           @else-->
                     <!--             @php $url = route($ct->url); @endphp-->
                     <!--           @endif-->
                     <!--               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{$url}}">{{$ct->name}}</a>-->
                                        
                     <!--                  @foreach($ct->subcategory as $subcat)-->
                     <!--                   <ul>-->
                     <!--                      @if($subcat->url_page==1)-->
                     <!--                       @php $url = route('page',['slug'=>$subcat->url]); @endphp -->
                     <!--                     @else-->
                     <!--                       @php $url = route($subcat->url); @endphp-->
                     <!--                     @endif-->

                     <!--                       <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{$url}}">{{$subcat->name}}</a>                                                -->
                     <!--                       </li>-->
                     <!--                   </ul>-->

                     <!--                  @endforeach-->

                     <!--               </li>-->
                     <!--             @endforeach  -->
                     <!--       </ul>-->

                     <!--      </li>-->
                     <!--     @endforeach-->
                     <!--</ul>-->
                     
                     

<ul class="sc-kxynE hVvTOh main-site-menu-items">
   <li>
      <a class="topMenu" href="http://www.tyreflicks.com.au/new/search" style="color: white">
         Shop Tyres
         <i class="sc-caSCKo sc-LKuAh eaWStw">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8">
               <path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path>
            </svg>
         </i>
      </a>
      <ul>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('tyre/size')}}">By Size</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('tyres')}}">By Brand</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('tyres/brand/pattern')}}">By Brand and Pattern</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('vehicles')}}">By Vehicle</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('truck')}}">Truck Tyres</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('otr')}}">OTR Tyres</a>
         </li>
      </ul>
   </li>
   <li>
      <a class="topMenu" href="{{route('search')}}" style="color: white">
         Offer
         <i class="sc-caSCKo sc-LKuAh eaWStw">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8">
               <path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path>
            </svg>
         </i>
      </a>
      <ul>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{route('offers/current-promotions')}}">Current Promotions</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Price Match Guarantee</a>
         </li>
         <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="#">Same Day / Next Day Offers</a>
         </li>
      </ul>
   </li>
   <li>
      <a class="topMenu" href="{{route('search')}}" style="color: white">
         Learn More
         <i class="sc-caSCKo sc-LKuAh eaWStw">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8">
               <path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path>
            </svg>
         </i>
      </a>
      <ul>
         <li>
            <a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Purchasing Tyres</a>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Tyre Buying Guide</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Tyre Size Guide</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Delivery Information</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Why Buy Online</a>                                                
               </li>
            </ul>
         </li>
         <li>
            <a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Fitting Tyres</a>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Fitting &amp; Balancing</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('/fitment-centres') }}">Our Fitment Centers</a>                                                
               </li>
            </ul>
         </li>
         <li>
            <a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Help</a>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">FAQ</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Testimonials</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('#') }}">Warranty &amp; Returns</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('/page/learn-more-help-ask-a-tyre-expert') }}">Ask a Tyre Expert</a>                                                
               </li>
            </ul>
            <ul>
               <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{ url('/page/hc-en-gb-requests-new') }}">Contact Us</a>                                                
               </li>
            </ul>
         </li>
      </ul>
   </li>

</ul>


                        <div class="sc-iSDuPN eggDyf"></div><a href="tel:(02) 9771 0170
" class="sc-kaNhvL cpTcMA"><i class="sc-csuQGl sc-ebFjAB feJYLb"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"><path d="M3.1 0A3 3 0 0 0 .13 3.27a1 1 0 0 0 0 .02 20.8 20.8 0 0 0 3.23 9.1 20.5 20.5 0 0 0 6.3 6.3 20.79 20.79 0 0 0 9.06 3.22 1 1 0 0 0 .02 0 3 3 0 0 0 3.27-3v-2.96a3.01 3.01 0 0 0-2.58-3.05 1 1 0 0 0-.01 0c-.88-.12-1.75-.33-2.59-.65a3 3 0 0 0-3.16.68l-.67.66a14.91 14.91 0 0 1-4.58-4.58l.66-.66a3 3 0 0 0 .68-3.17c-.32-.84-.53-1.7-.65-2.59a1 1 0 0 0 0-.01A3.01 3.01 0 0 0 6.1 0zm0 2h3a1 1 0 0 0 .02 0c.5 0 .93.35 1 .86.14 1.03.39 2.04.75 3.02a1 1 0 0 1-.22 1.06L6.38 8.2a1 1 0 0 0-.16 1.2 17 17 0 0 0 6.38 6.38 1 1 0 0 0 1.2-.16l1.26-1.27a1 1 0 0 1 1.06-.22c.98.36 2 .61 3.03.75.5.07.86.5.85 1.01a1 1 0 0 0 0 .03v3a1 1 0 0 1-1.09 1 18.79 18.79 0 0 1-8.18-2.9 1 1 0 0 0 0-.01 18.5 18.5 0 0 1-5.7-5.7C3.43 8.83 2.43 6 2.12 3.08A1 1 0 0 1 3.1 2zM15 0v2c2.5 0 4.5 2 4.5 4.5h2C21.5 2.92 18.58 0 15 0zM13 4v2c1.67 0 3 1.33 3 3h2c0-2.75-2.25-5-5-5z"></path></svg></i><p class="sc-dnqmqq sc-jKVCRD iVtCUm">Customer support <strong>(02) 9771 0170
</strong></p></a></div>
                </div>
            </div>