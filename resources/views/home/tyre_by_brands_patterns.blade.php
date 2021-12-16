@extends('front.default.default')
<style type="text/css">

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.ksKtRp {
    font-size: 16px;
    line-height: 36px;
    margin: 16px 0px;
}
}

.ksKtRp {
    color: rgb(28, 28, 28);
    font-family: Asap, sans-serif;
    word-break: break-all;
    padding: 0px;
    margin: 0px 0px 15px;
    overflow: hidden;
}
    
@media screen and (max-width: 99999px) and (min-width: 960px)
{
.cmoKyc {
    width: 350px;
}
}

.cmoKyc {
    display: inline-block;
    list-style-type: none;
    padding-right: 10px;
    list-style-position: inside;
    text-align: center;
}

.cmoKyc a {
    display: inline;
    position: relative;
    width: 100%;
    text-decoration: none;
}

@media screen and (max-width: 99999px) and (min-width: 960px)
{
.iGmfbA {
    font-size: 16px;
    line-height: 36px;
    margin: 30px 0px;
}
}

.iGmfbA {
    font-family: Asap, sans-serif;
    cursor: pointer;
    color: rgb(129, 178, 39);
    text-decoration: underline;
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
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" href="../index.html">Home</a><span class="sc-iQKALj fwrZl">/</span>Tyre Brands and Patterns</div>

                         <div>
                            <h1 class="sc-bwzfXH sc-hMqMXs giyoWh">Tyre Brands</h1>
                            <p class="sc-dnqmqq btZTLD">Choose from hundreds of tyre patterns from all of the major tyre manufacturers available today including; Michelin, Bridgestone, Goodyear, Dunlop, BF Goodrich, Pirelli, Yokohama, Toyo, Yokohama and many more. You won’t find a larger selection of tyres anywhere.<br>
							Having trouble choosing the right tyre? Contact Us and our tyre experts will help you find the Right Tyre at the Best Price.</p>
                        </div>   
                                    <div>	
			
                                    	@foreach($tyres_brands as $br)
								 			<img class="sc-jEdsij NXrrh" src="{{$br->image}}" alt="{{$br->name}}">      	

								 		<ul class="sc-kgoBCf sc-kBzFSH ksKtRp">
                                    		@foreach($br->patterns as $pt)			
                                    		<li class="sc-kpOJdX sc-eBipZS cmoKyc">
                                    			<a href="{{route('search/brand')}}?brands={{$br->url}}&pattern={{$pt->url}}" class="sc-VigVT iGmfbA">
                                    				{{$pt->name}}
                                    			</a>
                                    		</li>	
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
        
    </app>

    @endsection()