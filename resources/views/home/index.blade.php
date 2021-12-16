@extends('front.default.default')
@section('content')  
    <app id="app">
        <!--<div class="sc-hZSUBg sc-itybZL huXSnK"></div>-->
        <!--<div class="sc-hZSUBg sc-kZmsYB jvVwcU"></div>-->
        @include('front.default.header')
        
        <div class="sc-hZSUBg sc-ikTlrC fyXNbm"></div>
        
        <!--Banner-->
<div id="CenterDiv" class="sc-cKZAiZ hYECGi f-w-c banner-section">
                                    <div id="SliderContainer" class="sc-gwZsXD dcRers f-w-c">
                                      
                                    <div class="container sliderd f-w-c">
                                         <div id="myCarousel" class="carousel slide f-w-c" data-ride="carousel">
                                                        <!-- Indicators -->
                                                       

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner f-w-c">

                                                          @php $i = 0; @endphp  
                                                          @foreach($full_sliders as $sl)  
                                                          <div class="item <?php if($i==0) echo 'active'; ?>">
                                                            <img src="{{$sl->file}}" alt="{{$sl->name}}" style="width:100%;">
                                                          </div>
                                                          @php $i++; @endphp 
                                                          @endforeach


                                                        </div>

                                                         <ol class="carousel-indicators" style="bottom: -30px;">
                                                           @php $i = 0; @endphp  
                                                            @foreach($full_sliders as $sl) 
                                                          <li style="background-color:blue" data-target="#myCarousel" data-slide-to="{{$i}}" class="<?php if($i==0) echo 'active'; ?>"></li>
                                                            @php $i++; @endphp 
                                                          @endforeach                                                                                                              
                                                        </ol>
                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                                          <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                          <span class="glyphicon glyphicon-chevron-right"></span>
                                                          <span class="sr-only">Next</span>
                                                        </a>
                                                      </div>
                                          


                                                  <div id="myCarousel" class="carousel slide mobile-slider" data-ride="carousel">
                                                        <!-- Indicators -->
                                                       

                                                        <!-- Wrapper for slides -->
                                                        <div class="carousel-inner">

                                                          @php $i = 0; @endphp  
                                                          @foreach($m_sliders as $sl)  
                                                          <div class="item <?php if($i==0) echo 'active'; ?>">
                                                            <img src="{{$sl->file}}" alt="{{$sl->name}}" style="width:100%;">
                                                          </div>
                                                          @php $i++; @endphp 
                                                          @endforeach


                                                        </div>

                                                         <ol class="carousel-indicators" style="bottom: -30px;">
                                                           @php $i = 0; @endphp  
                                                            @foreach($m_sliders as $sl) 
                                                          <li style="background-color:blue" data-target="#myCarousel" data-slide-to="{{$i}}" class="<?php if($i==0) echo 'active'; ?>"></li>
                                                            @php $i++; @endphp 
                                                          @endforeach                                                                                                              
                                                        </ol>
                                                        <!-- Left and right controls -->
                                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                          <span class="glyphicon glyphicon-chevron-left"></span>
                                                          <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                          <span class="glyphicon glyphicon-chevron-right"></span>
                                                          <span class="sr-only">Next</span>
                                                        </a>
                                                      </div>


                                          </div>

                                    </div>
                                    
                                    

                            </div>

<!--Banner-end        -->
        
            <div class="sc-hZSUBg sc-gohEOc searchdiv-bg">
            @include('front.search_div')
                
            </div>
            
            <!--How it works section-->
            <div class="container how-work-section">
                <div class="row">
                <h5>THE TYRESALES EXPERIENCE</h5>
                <h2>How it works</h2>
                <div class="work-points">
                    <div class="col-md-3">
                    <img src="{{asset('public/assets/images/icon1.jpg')}}">
                    <h6>You Search</h6>
                    <p>Search over ~705,432 tyres to find the right tyre for your car</p>
                    </div>
                    
                    <div class="col-md-3">
                    <img src="{{asset('public/assets/images/icon2.jpg')}}">
                    <h6>You buy</h6>
                    <p>Purchase & save up to 50% off RRP</p>
                    </div>
                    
                    <div class="col-md-3">
                    <img src="{{asset('public/assets/images/icon4.jpg')}}">
                    <h6>We deliver</h6>
                    <p>We deliver your tyres free+ to your chosen Fitment Centre or nominated address</p>
                    </div>
                    
                    <div class="col-md-3">
                    <img src="{{asset('public/assets/images/icon3.jpg')}}">
                    <h6>We install</h6>
                    <p>Our Mobile Fitting Vans can come to you, or select one of our preferred Fitment Centre's to install your tyres and they'll do the rest</p>
                    </div>
                    
                </div>
                </div>
            </div>
            <!--How it works section-end-->
            
            <!--Product Section-->
            <div class="container product-section">
                <div class="row">
                    <div class="col-md-3 pl-r">
                        <div class="product-images">
                        <a href="#"><img src="{{asset('public/assets/images/img1.jpg')}}" class="mb-10"></a>
                        <a href="#"><img src="{{asset('public/assets/images/img2.jpg')}}"></a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 pl-r">
                        <div class="product-images">
                        <a href="#"><img src="{{asset('public/assets/images/main-img.jpg')}}" class="mb-10"> </a>
                        </div>
                    </div>
                    
                    <div class="col-md-3 pl-r">
                        <div class="product-images">
                        <a href="#"><img src="{{asset('public/assets/images/img4.jpg')}}" class="mb-10"></a>
                        <a href="#"><img src="{{asset('public/assets/images/img5.jpg')}}"></a>
                        </div>
                    </div>                    
                    
                </div>
                
            </div>
            <!--Product Section-end-->
            
             <!--Testimonial Section-->
            
            <div class="container testimonial-secion">
            <div class="row">
                <div class="col-md-12 text-center heading">
                    <span>About Tyre Flicks</span>
                    <h2>What Client Says</h2>
                </div>
            <div id="testimonial" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#testimonial" data-slide-to="0" class="active"></li>
      <li data-target="#testimonial" data-slide-to="1"></li>
      <li data-target="#testimonial" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="carousel-caption">
          <p>Great job, very quick and on time</p>
          <h5>Sarah Brooklyn <span>Customer</span></h5>
        </div>
      </div>

      <div class="item">
        <div class="carousel-caption">
          <p>Great job, very quick and on time</p>
          <h5>Sarah Brooklyn <span>Customer</span></h5>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#testimonial" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#testimonial" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
</div>
   <!--Testimonial Section end-->            
            

                                    @include('front.default.footer_end')

           
            
        
        
    </app>

    @endsection()

    @section('jsOutside')

      <script type="text/javascript">
       
       $(document).ready(function(){


                  $('.sc-idjmjb').click();

       });   


      </script>

    @endsection