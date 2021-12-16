@include('front.contact.head')
@include('front.contact.header')

<div class="container">

  <main role="main">
    <div class="page page--article">
    <article class="article row clearfix">
        <div class="column column--sm-3 hidden-xs">
            <div class="row">
                @include('front.contact.sidebar')
            </div>
            <div class="row">
                <div class="column--sm-12">

                </div>
            </div>
        </div>

        <div class="column column--sm-8 column--sm-offset-1 article-column">
            <ol class="breadcrumbs">
  
    <li title="tyresales.com.au Help Center ">
      
        <a href="/hc/en-gb">tyresales.com.au Help Center </a>
      
    </li>
  
    <li title="FAQs">
      
        <a href="/hc/en-gb/categories/360000896112-FAQs">FAQs</a>
      
    </li>
  
    <li title="tyresales">
      
        <a href="{{route('faqs')}}">{{$faqs->category}}</a>
      
    </li>
  
</ol>


          <header class="article-header">
            <h1 class="article__title"> 
              {{$faqs->question}} 
            </h1>
            <div class="article-info hidden">
              <div class="article-info__item article-meta">
                <div class="article-meta__item article-meta__item--author">
                  <span class="article-info__item article-avatar">
                    <img src="https://secure.gravatar.com/avatar/a54f92c822c7e2d9658c4254c2265154?default=https%3A%2F%2Fassets.zendesk.com%2Fhc%2Fassets%2Fdefault_avatar.png&amp;r=g" alt="Avatar"/>
                  </span> 
                  <span class="article-author-name">
                    
                      Customer Service
                    
                  </span>
                </div>
                <div class="article-meta__item">
                   <span class="article-updated"><time datetime="2020-03-29T10:10:08Z" title="2020-03-29T10:10:08Z" data-datetime="calendar">29 March 2020 10:10</time></span>
                </div>
              </div>
              <div class="article-info__item article-follow"><a class="article-subscribe" title="Opens a sign-in dialogue" rel="nofollow" role="button" data-auth-action="signin" aria-selected="false" href="/hc/en-gb/articles/360024064492-Price-Match-Guarantee-/subscription.html">Follow</a></div>
            </div>
          </header>

          <div class="article-body markdown">
            <div class="sfContentBlock">
                {!!$faqs->answer!!}
            </div>
              <div class="sfContentBlock"> </div>  
          </div>

          
          
          <div class="article-related hidden-sm hidden-md hidden-lg">
            
          </div>
          
          <div class="article-share hidden">
            
  <ul class="share">
    <li><a href="https://www.facebook.com/share.php?title=Price+Match+Guarantee%C2%A0&u=https%3A%2F%2Fhelp.tyresales.com.au%2Fhc%2Fen-gb%2Farticles%2F360024064492-Price-Match-Guarantee-" class="share-facebook">Facebook</a></li>
    <li><a href="https://twitter.com/share?lang=en&text=Price+Match+Guarantee%C2%A0&url=https%3A%2F%2Fhelp.tyresales.com.au%2Fhc%2Fen-gb%2Farticles%2F360024064492-Price-Match-Guarantee-" class="share-twitter">Twitter</a></li>
    <li><a href="https://www.linkedin.com/shareArticle?mini=true&source=tyresales&title=Price+Match+Guarantee%C2%A0&url=https%3A%2F%2Fhelp.tyresales.com.au%2Fhc%2Fen-gb%2Farticles%2F360024064492-Price-Match-Guarantee-" class="share-linkedin">LinkedIn</a></li>
  </ul>


          </div>
          
          <footer class="article-footer">
            
              <div class="article-vote">
                <h5 class="article-vote-question">Was this article helpful?</h5>
                <div class="article-vote-controls">
                  <a class="fa fa-thumbs-up article-vote-controls__item article-vote-controls__item--up" data-helper="vote" data-item="article" data-type="up" data-id="360024064492" data-upvote-count="1" data-vote-count="10" data-vote-sum="-8" data-vote-url="/hc/en-gb/articles/360024064492/vote" data-value="null" data-label="1 out of 10 found this helpful" data-selected-class="article-vote-controls__item--voted" aria-selected="false" role="button" rel="nofollow" title="Yes" href="#"></a>
                  <a class="fa fa-thumbs-down article-vote-controls__item article-vote-controls__item--down" data-helper="vote" data-item="article" data-type="down" data-id="360024064492" data-upvote-count="1" data-vote-count="10" data-vote-sum="-8" data-vote-url="/hc/en-gb/articles/360024064492/vote" data-value="null" data-label="1 out of 10 found this helpful" data-selected-class="article-vote-controls__item--voted" aria-selected="false" role="button" rel="nofollow" title="No" href="#"></a>
                </div>
                <small class="article-vote-count hidden">
                  <span class="article-vote-label" data-helper="vote" data-item="article" data-type="label" data-id="360024064492" data-upvote-count="1" data-vote-count="10" data-vote-sum="-8" data-vote-url="/hc/en-gb/articles/360024064492/vote" data-value="null" data-label="1 out of 10 found this helpful">1 out of 10 found this helpful</span>
                </small>
              </div>
            
          </footer>

          <div class="article-more-questions"> Have more questions? <a href="/hc/en-gb/requests/new">Submit a request</a> </div>

          <section class="article-comments hidden">
            <h3>Comments</h3> 
            
             

            <p>Please <a data-auth-action="signin" rel="nofollow" href="/hc/en-gb/signin?return_to=https%3A%2F%2Fhelp.tyresales.com.au%2Fhc%2Fen-gb%2Farticles%2F360024064492-Price-Match-Guarantee-">sign in</a> to leave a comment.</p>
            
            
          </section>
          
        </div>
    </article>
</div>

  @include('front.contact.footer')
  </div> <!--/.container-->
  @include('front.contact.scripts')