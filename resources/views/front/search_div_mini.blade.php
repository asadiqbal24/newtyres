<style type="text/css">
    .gcksJJ:hover{
        color: white;
    text-decoration: none;
    }

    .gGfiDU:hover{
        color: white;
    text-decoration: none;
    }
</style>
<div class="sc-hZSUBg sc-hhaNoI ifqUjI search-div-mini">
                <div class="sc-fHlXLc hYijQi">
                    <div class="sc-cMhqgX lgIQGd">
                        <div class="sc-iuJeZd mpjmA">
                            <div class="collapsed sc-guDjWT akHPI">
                                <div class="sc-kqEXUp iXRWeA">
                                    <div class="sc-hMFtBS sc-gxbSSY lcgrgW"><span class="sc-gneEKw kIzNIc">Search by</span> <a class="tyre-btn sc-idjmjb <?php if(!isset($s_width)) echo 'gGfiDU'; else echo 'gcksJJ'; ?>">Tyre size</a></div>
                                    <div class="sc-bXopBW lmsxtl">+</div>
                                </div>
                                <div class="sc-iKiVwC jhSAbk" style="height: 55px; width:100%;">
                                    <div style="display:none" id="search_by_state">
                                        <form method="GET" action="{{route('search')}}">
                                            <input type="hidden" name="search" value="rego" />
                                            <div class="sc-esOvli giRUqh">
                                                
                                                <div class="sc-hORach iXraXF">
                                                    <select required="required" name="delivery" class="sc-kfGgVZ guXMYy">
                                                        <option value="" class="sc-esjQYD iBqqkR">State</option>
                                                        @foreach($regions as $r)
                                                        <option value="{{$r->url}}" class="sc-esjQYD iBqqkR">{{$r->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="sc-hORach gdHDkZ">
                                                    <button class="sc-hrWEMg sc-jJkQYJ fIxOVQ tyre-btn">Find my tyres</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div style="display:block" id="search_by_tyre">
                                        <form action="{{route('search')}}" method="GET">
                                            <input type="hidden" name="search" value="size" />
                                            <div class="sc-esOvli giRUqh">
                                                <div class="sc-hORach jXvPvf">
                                                    <select required="" placeholder="Width" id="width" name="width" class="sc-kfGgVZ guXMYy">
                                                        <option selected="" value="" class="sc-esjQYD iBqqkR">Width</option>
                                                        <optgroup label="Popular" class="sc-kIPQKe jgMiIX">
                                                           
                                                        </optgroup>
                                                        <optgroup label="All" class="sc-kIPQKe jgMiIX">
                                                            
                                                            @foreach($width as $w)
                                                            @if(isset($s_width))

                                                              @if($s_width==$w->width)
                                                                <option value="{{$w->width}}" selected="selected" class="sc-esjQYD iBqqkR">{{$w->width}}</option>                                       
                                                                @else
                                                                <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>                                       
                                                                @endif                            


                                                            @else
                                                                <option value="{{$w->width}}" class="sc-esjQYD iBqqkR">{{$w->width}}</option>
                                                            @endif

                                                            @endforeach

                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="sc-hORach enfBmt">
                                                    <select required="" <?php if(!isset($s_aspect)) echo 'disabled' ?> placeholder="Profile" id="profile" name="aspect" class="sc-kfGgVZ guXMYy">
                                                        <option selected="" value="" class="sc-esjQYD iBqqkR">Profile</option>
                                                        <optgroup label="All" class="sc-kIPQKe jgMiIX" id="profile_all">
                                                            @foreach($profile as $p)
                                                            @if(isset($s_aspect))
                                                             @if($s_aspect==$p->profile)
                                                                <option value="{{$p->profile}}" selected="selected" class="sc-esjQYD iBqqkR">{{$p->profile}}</option>
                                                              @else
                                                                 <option value="{{$p->profile}}" class="sc-esjQYD iBqqkR">{{$p->profile}}</option>
                                                             @endif 
                                                             @else                       
                                                             <option value="{{$p->profile}}" class="sc-esjQYD iBqqkR">{{$p->profile}}</option>
                                                             @endif

                                                            @endforeach
                                                         </optgroup>
                                                    </select>
                                                </div>
                                                <div class="sc-hORach iaOPHV">
                                                    <select required="" <?php if(!isset($s_rim)) echo 'disabled' ?> placeholder="Rim" id="rim" name="rim" class="sc-kfGgVZ guXMYy">
                                                        <option selected="" value="" class="sc-esjQYD iBqqkR">Rim</option>
                                                        <optgroup label="All" class="sc-kIPQKe jgMiIX" id="rim_all">

                                                            @foreach($rim_size as $p)
                                                            @if(isset($s_rim))
                                                             @if($s_rim==$p->rim_size)
                                                                <option value="{{$p->rim_size}}" selected="selected" class="sc-esjQYD iBqqkR">{{$p->rim_size}}</option>
                                                              @else
                                                                 <option value="{{$p->rim_size}}" class="sc-esjQYD iBqqkR">{{$p->rim_size}}</option>
                                                             @endif 
                                                             @else                       
                                                             <option value="{{$p->rim_size}}" class="sc-esjQYD iBqqkR">{{$p->rim_size}}</option>
                                                             @endif

                                                            @endforeach
                                                         </optgroup>
                                                    </select>
                                                </div>
                                                <div class="sc-hORach cJTegZ">
                                                    <button class="sc-hrWEMg sc-kOnlKp jwwlXZ tyre-btn">Find my tyres</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div style="display:none">
                                        <form method="GET" action="https://www.tyresales.com.au/search">
                                            <input type="hidden" name="search" value="vehicle" />
                                            <div class="sc-esOvli giRUqh">
                                                <div class="sc-hORach hKUYLT">
                                                    <input type="text" required="" placeholder="Enter your vehicle model eg (Honda Civic)" class="sc-gzOgki bkohDI" />
                                                </div>
                                                <div class="sc-hORach bHcnLs">
                                                    <button class="sc-hrWEMg iOhvNJ">Find my tyres</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>