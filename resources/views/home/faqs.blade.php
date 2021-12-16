@include('front.contact.head')
@include('front.contact.header')

<div class="container">
  <main role="main">
    <div class="category row category-page">
  <div class="column column--sm-3 hidden-xs">
    <div class="row">
      <div class="column--sm-10 column--sm-offset-1">
        
      </div>
		</div>
    <div class="row">
                        @include('front.contact.sidebar')
      </div>
  </div>
  <div class="column column--sm-8 column--sm-offset-1">
    <h2>{{str_replace('-',' ',$top)}}</h2>
    <p class="category-description"></p>
    
      <div class="section-tree row clearfix">
        @foreach($faqs as $key => $ff)
          <section class="column column--sm-6 section">
            <h3>
              <a href="{{route('help/faqs/section')}}">{{$key}}</a>
            </h3>            

            <ul class="article-list">
                @foreach($ff as $f)

                <li>
                    <a href="{{route('help/faqs/section/article',['url'=>$f->url])}}">{{$f->question}}</a>
                </li>

                @endforeach
            </ul>
          </section>        
          @endforeach

      </div>
     
  </div>
</div>

  </main>
@include('front.contact.footer')
  </div> <!--/.container-->

@include('front.contact.scripts')
  