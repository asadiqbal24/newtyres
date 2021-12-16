@extends('front.default.default')
<style type="text/css">


</style>
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
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" href="{{route('home')}}">Home</a><span class="sc-iQKALj fwrZl">/</span>Size</div>

                         <div>
                            <h1 class="sc-bwzfXH sc-hMqMXs giyoWh">Tyre Sizes</h1></div>   

                                    <div>
                                        @foreach($tyres_cat as $ty)

                                            <h2 class="sc-htpNat sc-kEYyzF xkIpZ">{{$ty->name}}</h2>
                                            <ul class="sc-kgoBCf sc-jwJjzT ktEmEm">
                                                @foreach($ty->tyres as $tyre)
                                                @php $url = $tyre->url; @endphp
                                                    <li class="sc-kpOJdX sc-jRnjsG kDvVJr"><a href="{{route('tyre/size/view',['slug'=>$url])}}" class="sc-VigVT iGmfbA">{{$tyre->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>                            

                        <div class="sc-esOvli giRUqh">
                            <div class="sc-hORach ineNZO">
                                <div id="CenterDiv" class="sc-cKZAiZ hYECGi">                                    
                                                                       @include('front.default.footer')
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
                 @include('front.default.footer_end')
    </app>

    @endsection()