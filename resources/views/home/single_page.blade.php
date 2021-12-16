@extends('front.default.default')
{!!$page->meta_tags!!}
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
                        <div id="breadcrumbs" class="sc-RefOD ctSZcR"><a class="sc-chPdSV krpDTx" href="{{route('home')}}">Home</a> 
                            @php $page_url = str_replace('-',' ',$page->url); $page_url = strtoupper($page_url); @endphp
                            <span class="sc-iQKALj fwrZl">/</span>{{isset($p)?$p->name:$page_url}}
                            @if(isset($sp))<span class="sc-iQKALj fwrZl">/</span>{{$sp->name}}@endif
                            @if(isset($page_cat))<span class="sc-iQKALj fwrZl">/</span>{{$page_cat->name}}@endif

                        </div>

                         <div>
                                    <div>
                                        	
                                    {!!$page->data!!}

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