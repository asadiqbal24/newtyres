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
                            <h1 class="sc-bwzfXH sc-hMqMXs ihLcyg">{{$locations->name}}</h1></div>   
                        <div>
                            
                            <p class="sc-dnqmqq btZTLD">{!!$locations->description!!}</p>

                        </div>


                        @foreach($fitment_area as $loc)
                                    <div class="sc-esOvli giRUqh">
                            @php $i = 1; @endphp                                         
                           @foreach($loc as $l)               
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
                                                <a href="{{route('fitment-area-centers',['state'=>$state,'slug'=>$locations->url,'are_slug'=>$l->url])}}" class="sc-fjdhpX jDwSKB">{{$l->name}}
                                                    <br>
                                                    ({{$l->fitment_areas_center->count()}} fitment locations)
                                                </a>
                                           </div>  

                                            @php $i++ ; @endphp                                           
                            @endforeach
                                    </div>                                       
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