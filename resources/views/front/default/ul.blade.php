                        <ul class="sc-kxynE hVvTOh main-site-menu-items">

                          @foreach($categories as $cat)

                           <li><a class="topMenu" href="{{route('search')}}" style="color: white">{{$cat->name}}<i class="sc-caSCKo sc-LKuAh eaWStw"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 8"><path d="M.99-.01a1 1 0 0 0-.7 1.72l6 6a1 1 0 0 0 1.42 0l6-6A1 1 0 1 0 12.29.29L7 5.6 1.7.29A1 1 0 0 0 1 0z"></path></svg></i></a>
                     <ul>
                        @foreach($cat->category as $ct) 
                        @if($ct->url_page==1)

                          @php $url = url('page',['slug'=>$ct->url]); @endphp


                        @else

                         @php $url = url($ct->url); @endphp

                        @endif

                            <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{$url}}">{{$ct->name}}</a>
                                          
                          @foreach($ct->subcategory as $subcat)
                                <ul>
                                   @if($subcat->url_page==1)
                                    @php $url = url('page',['slug'=>$subcat->url]); @endphp

                                  @else
                                   @php $url = url($subcat->url); @endphp

                                  @endif

                                    <li><a style="padding-top: 1.2pc;padding-bottom: 1.2pc;color:white" href="{{$url}}">{{$subcat->name}}</a>                                                
                                    </li>
                                </ul>

                               @endforeach

                            </li>
                          @endforeach  
                            </ul>

                           </li>
                          @endforeach
                     </ul>
                     