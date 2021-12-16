@extends('front.default.default')
@section('content')  
    <app id="app">
        <div class="sc-hZSUBg sc-itybZL huXSnK"></div>
        <div class="sc-hZSUBg sc-kZmsYB jvVwcU"></div>
        @include('front.default.header')
        
        <div class="sc-hZSUBg sc-ikTlrC fyXNbm"></div>
        <div class="sc-kqqoiJ djSLzE">
            <div class="sc-hZSUBg sc-gohEOc jhuupG">
            @include('front.search_div_mini')
                
            </div>
            <div class="sc-hZSUBg jvmIQB">
                <div class="sc-cMhqgX lgIQGd">
                    <div class="sc-iuJeZd mpjmA">
                        <div class="sc-esOvli giRUqh">
                            <div class="sc-hORach ineNZO">
                                <div class="sc-esOvli giRUqh">
                                  <div class="sc-hORach dOPNfZ">
                                    <h1 class="sc-bwzfXH sc-hMqMXs sc-hmAwuO dnQYsv"> Ask a Tyre Expert</h1>
                                    <img src="{{asset('public/front/AskGreg.jpg')}}" alt="Ask Greg" class="sc-fNFDGM eYJlYT" data-src="{{asset('public/front/AskGreg.jpg')}}">
                                    <p class="sc-dnqmqq btZTLD">Greg and his team of Tyre Experts are available to answer any tyre related question you have.</p>

                                    <form method="post" action="{{route('post.inquery')}}">
                                      {{csrf_field()}}
                                      <label class="sc-dxgOiQ fDspfl">Name *</label>
                                      <input type="text" required="" title="Your name" placeholder="your name" name="contactName" class="sc-gzOgki bkohDI"><br>

                                      <label class="sc-dxgOiQ fDspfl">Email *</label>
                                      <input type="email" required="" title="Your email" placeholder="your email" name="email" class="sc-ibxdXY ktkth"><br>

                                      <label class="sc-dxgOiQ fDspfl">Phone</label><input type="number" title="Your phone" placeholder="your phone" pattern="^[0-9]{4}$" name="phone" class="sc-kPVwWT sc-euofZA eidGtW"><br>

                                      <label class="sc-dxgOiQ fDspfl">Enquiry *</label><textarea required="" placeholder="your enquiry" name="enquiry" class="sc-eXEjpC sc-dRFBHB KrgzW"></textarea><br>

                                      <div class="sc-bUIkmT fVNQPh"><button class="sc-hrWEMg sc-dsaGNW bINWvH">Send My Enquiry</button></div>

                                    </form>

                                  </div>
                                  <div class="sc-hORach iBsLXi"></div>

                                </div>
                        </div>


                    </div>
                                    @include('front.default.footer')
                </div>

            </div>
                                    @include('front.default.footer_end')
        </div>
        
        </div>
        
    </app>

    @endsection()

    @section('jsOutside')

      <script type="text/javascript">
       
       $(document).ready(function(){


                  $('.sc-idjmjb').click();

       });   


      </script>

    @endsection