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
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" href="../index.html">Home</a><span class="sc-iQKALj fwrZl">/</span>Tyres</div>

                         <div>
                            <h1 class="sc-bwzfXH sc-hMqMXs giyoWh">Tyresales Promotions</h1></div>   
                                    <div>
                                        	
                 @foreach($promotions as $p)
							<h1 class="sc-htpNat sc-kEYyzF xkIpZ">{{$p->title}}</h1>
							<p class="sc-dnqmqq btZTLD">{!!$p->description!!}</p>
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
        
    </app>

    @endsection()