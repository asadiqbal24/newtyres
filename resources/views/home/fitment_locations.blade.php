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

                         <div>
                            <h1 class="sc-bwzfXH sc-hMqMXs ihLcyg">Fitment Locations Australia</h1></div>   
                        <div>
                            
                            <p class="sc-dnqmqq btZTLD">Tyresales has hundreds of fitment centres across Australia covering each state and territory. Each fitment centre will fit your tyres, replace the tubeless valves, balance your wheels as well as dispose of your old tyres. Some even come with an optional wheel alignment or car clean (you can also choose this option if available in the checkout).</p><p class="sc-dnqmqq btZTLD">Simply jump online to <a href="https://www.tyresales.com.au/" class="sc-VigVT iGmfbA">www.tyresales.com.au</a>, choose the right tyres at the best price and select your fitment centre in your local town, region or state at a preferred time and date that suits you. It’s that easy.</p><p class="sc-dnqmqq btZTLD">To get in contact give tyresales a call on <a href="tel:1300897372" class="sc-VigVT iGmfbA">1300 897 372</a> or visit us online at <a href="https://www.tyresales.com.au/" class="sc-VigVT iGmfbA">www.tyresales.com.au</a>.</p>

                        </div>

                        @foreach($regions as $loc)


                            <h2 class="sc-htpNat nNgIq">{{$loc->name}}</h2>       
                            @php $areas = $loc->fitment_areas->chunk(4); @endphp


                                @foreach($areas as $ar)
                                    <div class="sc-esOvli giRUqh">
                                       @php $i = 1; @endphp     
                                        @foreach($ar as $a)
                                        @if($i==1)
                                            @php $class = 'jXvPvf'; @endphp
                                        @elseif($i==2)
                                            @php $class = 'enfBmt'; @endphp
                                        @elseif($i==3)
                                            @php $class = 'iaOPHV'; @endphp
                                        @else
                                            @php $class = 'cJTegZ'; @endphp
                                        @endif
                                           <div class="sc-hORach {{$class}}">
                                                <a href="{{route('fitment-centers',['state'=>$loc->url,'slug'=>$a->url])}}" class="sc-fjdhpX jDwSKB">{{$a->name}}
                                                    <br>
                                                    ({{$a->fitment_locations->count()}} fitment locations)
                                                </a>
                                           </div>  

                                            @php $i++ ; @endphp                                            
                                        @endforeach   
                                    </div>                                       
                                    @endforeach


                        @endforeach


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