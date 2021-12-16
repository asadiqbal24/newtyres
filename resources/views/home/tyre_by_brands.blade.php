@extends('front.default.default')
<style type="text/css">
    @media screen and (max-width: 99999px) and (min-width: 960px)
{
.dUQdPS {
    font-size: 16px;
    line-height: 36px;
    margin: 16px 0px;
}
}
.dUQdPS {
    color: rgb(28, 28, 28);
    font-family: Asap, sans-serif;
    word-break: break-all;
    padding: 0px;
    margin: 0px 0px 15px;
    overflow: hidden;
}


@media screen and (max-width: 99999px) and (min-width: 960px)
{
.hiKuIP {
    width: 33%;
}
}
.hiKuIP {
    float: left;
    list-style-type: none;
    list-style-position: inside;
    text-align: center;
}
@media screen and (max-width: 99999px) and (min-width: 960px)
{
.kMBHnQ {
    max-width: 90%;
}
}
.kMBHnQ {
    background: white;
}



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
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" href="../index.html">Home</a><span class="sc-iQKALj fwrZl">/</span>Tyres</div>

                         <div>
                            <h1 class="sc-bwzfXH sc-hMqMXs giyoWh">Tyre Brands</h1></div>   
                                    <div>
                                        	
                                    	<ul class="sc-kgoBCf sc-fThejE dUQdPS">
                                    		@foreach($tyres_brands as $br)		
                                            
                                    		<li class="sc-kpOJdX sc-ecFaGM hiKuIP">
                                    			<a href="{{route('search')}}?brands={{$br->url}}" class="sc-VigVT iGmfbA">
                                    				<img class="sc-kGsDXJ kMBHnQ" src="{{$br->image}}" alt="{{$br->name}}">
                                    			</a>
                                    		</li>	
                                    		@endforeach

                                    	</ul>

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
                                            @include('front.default.footer_end')
        </div>
        
    </app>

    @endsection()