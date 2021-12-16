<header class="topbar container">
  <div class="topbar__inner container-inner">
    <div class="topbar__col">
      <div class="logo-wrapper">
        <div class="logo">
         <a title="Home" href="{{route('home')}}">
           <img src="{{asset('public/front/contactus/bf9249f3aa55de3f283a2040252858be67f22800.png')}}" alt="Logo" />
         </a> 
        </div>
      </div>
      <button type="button" role="button" aria-label="Toggle Navigation" class="lines-button" data-toggle-menu>
        <span class="lines"></span>
      </button>
    </div>
    <div class="topbar__col topbar__menu">
      <div class="topbar__collapse clearfix" data-menu>
        <div class="topbar__controls">
          <a class="submit-a-request hidden-xs" href="{{route('home')}}" target="_blank">Go to tyresales.com.au</a>
          <div class="topbar__quicklink hidden-sm hidden-md hidden-lg">
            <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000896112-FAQs">
              <img src="//theme.zdassets.com/theme_assets/258086/2814f45af1b0155fbe3ad167a24fd0d6ff427ef3.png" /><span>How does Tyresales work?</span>
            </a>
            <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000901952-Get-Started">
              <img src="//theme.zdassets.com/theme_assets/258086/2814f45af1b0155fbe3ad167a24fd0d6ff427ef3.png" /><span>Get Started</span>
            </a>
            <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000901932-Shipping-Delivery">
              <img src="//theme.zdassets.com/theme_assets/258086/2814f45af1b0155fbe3ad167a24fd0d6ff427ef3.png" /><span>Shipping & Delivery</span>
            </a>
            <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000900591-Returns-Exchanges">
              <img src="//theme.zdassets.com/theme_assets/258086/2814f45af1b0155fbe3ad167a24fd0d6ff427ef3.png" /><span>Returns & Exchanges</span>
              
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="hero-unit search-box">
    <div class="intro-title hidden-xs">Welcome, how can we help?</div>
    <div class="intro-title hidden-sm hidden-md hidden-lg">How can we help?</div>
    
    <form role="search" class="search" data-search="" action="{{route('help/search')}}" accept-charset="UTF-8" method="post">
      {{csrf_field()}}

      <input name="utf8" type="hidden" value="&#x2713;" /><input type="search" name="query" id="query" placeholder="Search" aria-label="Search" />
<input type="submit" name="commit" value="Search" /></form>
  </section>
  
  <div class="custom-blocks hidden-xs row clearfix" id="custom-blocks">
    <div class="column column--xs-6 column--sm-3 custom-block">
            <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000896112-FAQs">
        <div class="img img-tyre"></div>
        <h4 class="custom-block__title">How does Tyresales work?</h4>
        </a>
    </div>
    <div class="column column--xs-6 column--sm-3 custom-block">
        <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000901952-Get-Started">
        <div class="img img-tyre"></div>
        <h4 class="custom-block__title">Get Started</h4>
        </a>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="column column--xs-6 column--sm-3 custom-block">
        <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000901932-Shipping-Delivery">
        <div class="img img-tyre"></div>
        <h4 class="custom-block__title">Shipping & Delivery</h4>
        </a>
    </div>
    <div class="column column--xs-6 column--sm-3 custom-block">
        <a href="https://help.tyresales.com.au/hc/en-gb/categories/360000900591-Returns-Exchanges">
            <div class="img img-tyre"></div>
        <h4 class="custom-block__title">Returns & Exchanges</h4>
        </a>
    </div>
  </div>
</header>