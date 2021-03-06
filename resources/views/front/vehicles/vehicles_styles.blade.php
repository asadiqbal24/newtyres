<style type="text/css">
  
/* Don't import the entire bootstrap lib, just the variables and mixins that are used for the shared imports. */
/*********************/
/* Bootstrap Settings*/
/*********************/
/*
 * Use this file to define and override any bootstrap settings and variables.
 */
/************/
/* Branding */
/************/
/*
    Tyresales branding consists of the following colours:

    Primary: "Tyresales orange"
    Is used in the logo and other branding materials.

    Secondary: "Grays, Blacks & White"
    Is also used in the logo and other branding materials.

    Contrast: "Tyresales lime green"
    A shade of green with high luminance value.
    Is used to provide contrast with the sea of oranges and grays, used to drive user attention.
    To be used on buttons or other UI elements with high importance to drive conversion rates.
    
    Tyresales also uses various shades, offsets, mixes etc of each color.

    See Less helper functions:
    http://lesscss.org/functions/#color-definition
    http://lesscss.org/functions/#color-channel
    http://lesscss.org/functions/#color-operations
    http://lesscss.org/functions/#color-blending
*/
/**********************/
/* Branding - Oranges */
/**********************/
/* tyresales orange */
/*
@lightish-brand-orange: lighten(@base-brand-primary-color, 10%);
@light-brand-orange: lighten(@base-brand-primary-color, 20%);
@lighter-brand-orange: lighten(@base-brand-primary-color, 30%);
@lightist-brand-orange: lighten(@base-brand-primary-color, 40%);

@darkish-brand-orange: darken(@base-brand-primary-color, 10%);
@dark-brand-orange: darken(@base-brand-primary-color, 20%);
@darker-brand-orange: darken(@base-brand-primary-color, 30%);
@darkest-brand-orange: darken(@base-brand-primary-color, 40%);

@lumish-brand-orange: luminance(@base-brand-primary-color, 10%);
@lume-brand-orange: luminance(@base-brand-primary-color, 20%);
@lumer-brand-orange: luminance(@base-brand-primary-color, 30%);
@lumist-brand-orange: luminance(@base-brand-primary-color, 40%);
*/
/****************************/
/* Branding - (Lime) Greens */
/****************************/
/********************/
/* Branding - Grays */
/********************/
/* @base-tyresales-gray: @gray; */
/*************************/
/* Monochromatic colours */
/*************************/
/********/
/* Hues */
/********/
/**********/
/* Images */
/**********/
/*
 * Define your image url, width, height, x and y positions here.
 * A spritesheet generator like spritesmith could generate & maintain this file for us.
 */
/* TODO: Resource versioning mixin is work in progress.
@version: 1.2.0;

.versioned(@baseurl) {
    @url:"@{url}?q=@{version}";
}
.versioned-url(@baseurl) {
    @url:"url(@{url}?q=@{version})";
}
*/
/***************************************/
/* Home - Why Tyresales - How it Works */
/***************************************/
/******************/
/* Home - Reviews */
/******************/
/*@review-trustpilotperson-image: url(/images/home/review_trustpilotperson.png);*/
/*******************/
/* Home - Benefits */
/*******************/
/*@carclean-car-width: 385px;
@carclean-car-height: 171px;
@carclean-car-image: url(/images/home/carclean-car.min.png);*/
/*******************/
/* Home - Risk Free */
/*******************/
/***************************************/
/* Risk Free Guarantee Page */
/***************************************/
/*********************/
/* Home - Contact Us */
/*********************/
/************************/
/* Home - Interest Free */
/************************/
/*******************/
/* Shared - Header */
/*******************/
/***********************/
/* Shared - Navigation */
/***********************/
@media screen and (max-width: 767px) {
}@media (min-width: 768px) {
}@media (min-width: 768px) {
}@media (max-width: 767px) {
}@media (min-width: 768px) {
}@media (min-width: 768px) {
}@media (max-width: 767px) {
}@media (max-width: 767px) {
}.here-is-how-it-works,
.here-is-how-it-works .explanation,
.here-is-how-it-works .reasons,
.free-benefits,
.free-benefits .benefits,
.tyrePanels,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel {
  *zoom: 1;
}
.here-is-how-it-works:before,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:before,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:before,
.here-is-how-it-works .reasons:after,
.free-benefits:before,
.free-benefits:after,
.free-benefits .benefits:before,
.free-benefits .benefits:after,
.tyrePanels:before,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:before,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  display: table;content: " ";
}
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:after,
.free-benefits:after,
.free-benefits .benefits:after,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  clear: both;
}
.here-is-how-it-works {
  background: #fff;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-left: 0;
  padding-right: 0;
}
.here-is-how-it-works > .navbar-header,
.here-is-how-it-works > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .here-is-how-it-works > .navbar-header,
  .here-is-how-it-works > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.here-is-how-it-works .find-out-more-lightbox {
  cursor: pointer;
}
.here-is-how-it-works .explanation {
  margin-right: 0;
  margin-left: 0;
  /*.make-md-column(12);*/
  box-sizing: border-box;
  /* Explicitly specify box-sizing for pages that do not import bootstrap.css */
  margin-top: 0;
  margin-bottom: 0;
  text-align: center;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: lighter;
  letter-spacing: 0.01em;
  font-size: 30px;
  color: #000;
}
.here-is-how-it-works .reasons {
  margin-right: 0;
  margin-left: 0;
}
.here-is-how-it-works .reasons .reason {
  float: left;
  width: 100%;
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  box-sizing: border-box;
  /* Explicitly specify box-sizing for pages that do not import bootstrap.css */
  text-align: center;
  font: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
@media (min-width: 768px) {
  .here-is-how-it-works .reasons .reason {
    float: left;
    width: 50%;
  }
}
@media (min-width: 992px) {
  .here-is-how-it-works .reasons .reason {
    float: left;
    width: 25%;
  }
}
.here-is-how-it-works .reasons .reason .heading {
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  line-height: 1;
}
.here-is-how-it-works .reasons .reason .heading .first-half {
  display: block;
  font-size: 18px;
  font-weight: bold;
}
.here-is-how-it-works .reasons .reason .heading .second-half {
  display: block;
  color: #ee8000;
  font-size: 24px;
  font-weight: bold;
}
.here-is-how-it-works .reasons .reason .rationale {
  margin-top: 0.3em;
  margin-bottom: 1em;
  font-size: 1.25em;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.here-is-how-it-works .reasons .reason .action {
  background-image: url(/images/home/howitworks_arrow.png);
  background-repeat: no-repeat;
  background-position: center right;
  padding-right: 28px;
  line-height: 20px;
  display: inline-block;
  color: #000;
  font-weight: bold;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
}
.here-is-how-it-works .reasons .reason .action :hover {
  text-decoration: none;
}
.here-is-how-it-works .reasons,
.here-is-how-it-works .explanation {
  display: block;
  max-width: 992px;
  margin-left: auto;
  margin-right: auto;
}
.home .here-is-how-it-works .reasons,
.home .here-is-how-it-works .explanation {
  max-width: initial;
  margin-left: initial;
  margin-right: initial;
}
.free-benefits {
  background-color: #000;
  background-image: url(/images/home/free-benefits-background.jpg);
  background-size: cover;
  background-position: center center;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-left: 0;
  padding-right: 0;
}
.free-benefits > .navbar-header,
.free-benefits > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .free-benefits > .navbar-header,
  .free-benefits > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.free-benefits .benefits {
  margin-right: 0;
  margin-left: 0;
  max-width: 992px;
  margin-left: auto;
  margin-right: auto;
  /*
            * TODO: Cleanup the mutliple :after psudo element selectors.
            * Multiple layered backgrounds are supported in most modern browers.
            * No need to abuse :after psudo element.
            * http://caniuse.com/#feat=multibackgrounds
            * https://developer.mozilla.org/en/docs/Web/CSS/CSS_Background_and_Borders/Using_CSS_multiple_backgrounds
            */
  /* 3rd layer background image positioning */
  /*> :nth-child(3):after
        {
            height: 25%;
            bottom: 0;
            background: @uber-white-logo-transparent-withspacing-image center center no-repeat;
            background-size: contain;
        }*/
}
.free-benefits .benefits .benefit {
  padding-top: 2em;
  padding-bottom: 1em;
  float: left;
  width: 100%;
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  box-sizing: border-box;
  /* Explicitly specify box-sizing for pages that do not import bootstrap.css */
  color: #fff;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  text-align: center;
  padding-bottom: 114.6px;
}
@media (min-width: 768px) {
  .free-benefits .benefits .benefit {
    float: left;
    width: 25%;
  }
}
.free-benefits .benefits .benefit .heading {
  font-size: 24px;
  text-transform: uppercase;
  color: #fff;
}
.free-benefits .benefits .benefit .heading .highlight {
  color: #ee8000;
  display: inline-block;
}
.free-benefits .benefits .benefit .description {
  font-size: 16.5px;
  max-width: 20em;
  margin: 1em auto;
}
.free-benefits .benefits .benefit .description small {
  font-size: 11px;
  font-weight: normal;
}
.free-benefits .benefits .benefit .description small a {
  color: #fff;
}
.free-benefits .benefits .benefit a {
  text-decoration: none;
  color: #fff;
}
.free-benefits .benefits .benefit a:hover {
  text-decoration: none;
  color: #fff;
}
.free-benefits .benefits > :after,
.free-benefits .benefits > :nth-child(4) .description:after {
  position: absolute;
  /*bottom:0;*/
  left: 0;
  width: 100%;
  content: " ";
  box-sizing: border-box;
  /* Explicitly specify box-sizing for pages that do not import bootstrap.css */
}
.free-benefits .benefits > :nth-child(1):after {
  height: 102.6px;
  bottom: 10px;
  background: url(/images/home/free-benefits-tyre.png) center center no-repeat;
  background-size: contain;
  background-origin: content-box;
  padding: 0 30px;
}
.free-benefits .benefits > :nth-child(2):after {
  height: 71.6px;
  bottom: 43px;
  background: url(/images/home/free-benefits-toyota-rav-43.png) center center no-repeat;
  background-size: contain;
  background-origin: content-box;
  padding: 0 30px;
}
.free-benefits .benefits > :nth-child(3):after {
  height: 71.6px;
  bottom: 43px;
  background: url(/images/home/free-benefits-risk-free-badge.png) center center no-repeat;
  background-size: contain;
  background-origin: content-box;
  padding: 0 30px;
}
.free-benefits .benefits > :nth-child(4):after {
  height: 171px /* * @free-benefit-image-scale*/;
  /*bottom: 25%;*/
  background: url(/images/home/free-benefits-mazda-3.png) center center no-repeat;
  background-size: contain;
  background-origin: content-box;
  padding: 0 30px;
  /* Requirement: Uber logo branding must have full sized margins as defined by their branding.
                * So we calculate hieght based on:
                * Minus uber logo height, minus top positioning, minus 7% for the flare, so we do not overlap with uber logo.
                */
  /*max-height: 25%;*/
}
.free-benefits .benefits .sale-foobar {
  margin-bottom: 15px;
}
.free-benefits .benefits .sale-foobar:after {
  background: url(/images/sale/placeholder/image.png) center center no-repeat;
  background-size: contain;
  background-origin: content-box;
  height: 130px;
}
.free-benefits .benefits .biggerImage:after {
  height: 185px !important;
}
.home .free-benefits .benefits {
  max-width: initial;
  margin-left: initial;
  margin-right: initial;
}
.home .free-benefits .benefits .benefit {
  padding-bottom: 183px;
  /*background-image: @promo-box-flare-image;*/
  /*background-size:contain;*/
  background-repeat: no-repeat;
  background-position: bottom -26.1px center;
}
.home .free-benefits .benefits .benefit .description {
  font-size: 18px;
}
.home .free-benefits .benefits > :nth-child(1):after {
  height: 171px;
}
.home .free-benefits .benefits > :nth-child(2):after {
  height: 171px;
  bottom: 12px;
}
.home .free-benefits .benefits > :nth-child(3):after {
  height: 171px;
  bottom: 12px;
}
.home .free-benefits .benefits > :nth-child(4) .description:after {
  height: 171px;
  top: 42%;
  max-height: 26%;
}
.home .free-benefits .benefits > :nth-child(4):after {
  bottom: 26.1px;
}
.sfexpandableListWrp > .sflistList {
  list-style: none;
  padding: 0;
  margin: 0;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemTitle {
  display: block;
  padding: 0 20px;
  background-color: #f7f7f7;
  margin: 15px 0 0 0;
  border: 1px solid #e8ebf2;
  box-sizing: border-box;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemTitle > .sflistItemToggleLnk {
  font-weight: normal;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #373737;
  font-size: 16px;
  line-height: 36px;
  box-sizing: border-box;
  padding: 10px 24px 10px 0;
  display: block;
  text-decoration: none;
  position: relative;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemTitle > .sflistItemToggleLnk:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f107";
  position: absolute;
  right: 0;
  top: 50%;
  margin-top: -18px;
  color: #373737;
  line-height: 36px;
  font-size: 24px;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemTitle > .sflistItemToggleLnk.sflistListItemExpanded:after {
  content: "\f106";
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemTitle > .sflistItemToggleLnk:hover {
  text-decoration: none;
  color: #373737;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemContent {
  display: none;
  color: #373737;
  font-size: 14px;
  font-weight: normal;
  padding: 20px;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  border: 1px solid #e8ebf2;
  border-top: none;
  margin: 0 0 15px 0;
  box-sizing: border-box;
  overflow: hidden;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemContent.sflistItemContentExp {
  display: block;
}
.sfexpandableListWrp > .sflistList > .sflistListItem > .sflistItemContent * {
  max-width: 100%;
}
.sfexpandableListWrp > .sflistExpandAllLnkWrp {
  display: none !important;
}
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk {
  background-color: #ee8000;
  color: #fff;
  width: 110px;
  line-height: 1;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  display: inline-block;
  padding: 0.75em;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  box-shadow: none;
  border: none;
  cursor: pointer;
  font-size: 12.8px;
  display: none !important;
}
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk:hover {
  background-color: #ff9315;
}
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk[disabled],
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk .disabled {
  border: none;
  cursor: default;
  opacity: 0.4;
}
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk[disabled]:hover,
.sfexpandableListWrp > .sflistExpandAllLnkWrp > .sflistExpandAllLnk.disabled:hover {
  background-color: #ee8000;
}
/*square stylesheet2014*/
/*h3.sflistItemTitle {
    font-weight: 400;
    font-size: 14px;
}*/
/*square mobile*/
/*.sfexpandedListWrp ul.sflistList {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  li.sflistListItem {
    border-bottom: 1px solid #ccc;
    padding-top: 10px;
  }
  h3.sflistItemTitle {
    margin: 0;
  }
  h3.sflistItemTitle a {
    display: block;
    color: #333;
    padding: 10px 0;
  }
  h3.sflistItemTitle a.sflistListItemExpanded {
    color: #de7209;
  }
  .sflistItemContent > p > strong {
    text-transform: uppercase;
  }
  .sflistExpandAllLnkWrp a {
    display: block;
    text-transform: uppercase;
    padding: 10px 0;
  }*/
/*Mobile*/
/*.sfexpandedListWrp ul.sflistList {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  li.sflistListItem {
    border-bottom: 1px solid #ccc;
    padding-top: 10px;
  }
  h3.sflistItemTitle {
    margin: 0;
  }
  h3.sflistItemTitle a {
    display: block;
    color: #333;
    padding: 10px 0;
  }
  h3.sflistItemTitle a.sflistListItemExpanded {
    color: #de7209;
  }
     
  .sflistItemContent > p > strong {
    text-transform: uppercase;
  }
  .sflistExpandAllLnkWrp a {
    display: block;
    text-transform: uppercase;
    padding: 10px 0;
  }


 */
@media (min-width: 768px) {
  .here-is-how-it-works .explanation {
    padding-top: 1em;
    padding-bottom: 1em;
  }
  .here-is-how-it-works .reasons {
    /*display:table;*/
    /*width:100%;*/
    padding-bottom: 3em;
    /* Desktop grid borders */
  }
  .here-is-how-it-works .reasons .reason {
    padding-bottom: 18px;
    /*display:table-cell;
            float:none;
            vertical-align:top;*/
    /* 
             * TODO: Find another solution, !important is bad.
             * HACK: to override bootstrap mixin gutters, 
             * because the bootstrap make-*-columns mixin has issues setting multiple different gutter sizes.
             * use direct decendent selector to get priority over bootstrap.
             */
    padding-left: 2% !important;
    padding-right: 2% !important;
  }
  .here-is-how-it-works .reasons > :before {
    background: #ddd;
    bottom: 0;
    content: " ";
    left: 0;
    position: absolute;
    height: 100%;
    top: 0;
    width: 1px;
  }
  .here-is-how-it-works .reasons > :first-child:before {
    display: none;
  }
  .here-is-how-it-works .reasons > :nth-child(1) {
    background-image: url(/images/home/howitworks_icon1.png);
    background-repeat: no-repeat;
    background-position: top 12px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(2) {
    background-image: url(/images/home/howitworks_icon2.png);
    background-repeat: no-repeat;
    background-position: top 12px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(3) {
    background-image: url(/images/home/howitworks_icon3.png);
    background-repeat: no-repeat;
    background-position: top 12px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(4) {
    background-image: url(/images/home/howitworks_icon4.png);
    background-repeat: no-repeat;
    background-position: top 12px center;
    padding-top: 100px;
  }
  .free-benefits .benefits {
    display: table;
    width: 100%;
    /* Desktop grid borders */
  }
  .free-benefits .benefits .benefit {
    display: table-cell;
    float: none;
    vertical-align: top;
  }
  .free-benefits .benefits > :before {
    border-right: 1px solid #ffffff;
    -o-border-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 15%, #ffffff 15%, #ffffff 85%, rgba(255, 255, 255, 0) 85%);
       border-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 15%, #ffffff 15%, #ffffff 85%, rgba(255, 255, 255, 0) 85%);
    border-image-slice: 1;
    bottom: 0;
    content: " ";
    left: 0;
    position: absolute;
    height: 100%;
    top: 0;
    width: 1px;
  }
  .free-benefits .benefits > :first-child:before {
    display: none;
  }
}
@media (max-width: 767px) {
  .here-is-how-it-works .explanation {
    padding-top: 1em;
  }
  .here-is-how-it-works .reasons .reason {
    padding-bottom: 25px;
    /* 
             * TODO: Find another solution, !important is bad.
             * HACK: to override bootstrap mixin gutters, 
             * because the bootstrap make-*-columns mixin has issues setting multiple different gutter sizes.
             * use direct decendent selector to get priority over bootstrap.
             */
    padding-left: 20% !important;
    padding-right: 20% !important;
  }
  .here-is-how-it-works .reasons > :before {
    background: #ddd;
    bottom: 0;
    content: " ";
    left: 0;
    position: absolute;
    height: 1px;
    top: 0;
    width: 60%;
    margin: 0 20%;
  }
  .here-is-how-it-works .reasons > :first-child:before {
    display: none;
  }
  .here-is-how-it-works .reasons > :nth-child(1) {
    background-image: url(/images/home/howitworks_icon1.png);
    background-repeat: no-repeat;
    background-position: top 35px center;
    padding-top: 120px;
  }
  .here-is-how-it-works .reasons > :nth-child(2) {
    background-image: url(/images/home/howitworks_icon2.png);
    background-repeat: no-repeat;
    background-position: top 35px center;
    padding-top: 120px;
  }
  .here-is-how-it-works .reasons > :nth-child(3) {
    background-image: url(/images/home/howitworks_icon3.png);
    background-repeat: no-repeat;
    background-position: top 35px center;
    padding-top: 120px;
  }
  .here-is-how-it-works .reasons > :nth-child(4) {
    background-image: url(/images/home/howitworks_icon4.png);
    background-repeat: no-repeat;
    background-position: top 35px center;
    padding-top: 120px;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .here-is-how-it-works .reasons .reason {
    padding: 1em 0;
  }
  .here-is-how-it-works .reasons > :before {
    background: #ddd;
    bottom: 20%;
    content: " ";
    left: 0;
    position: absolute;
    height: 60%;
    top: 20%;
    width: 1px;
    /*margin: 20% 0;*/
  }
  .here-is-how-it-works .reasons > :last-child:after,
  .here-is-how-it-works .reasons > :nth-child(3):after {
    background: #ddd;
    bottom: 0;
    content: " ";
    left: 0;
    position: absolute;
    height: 1px;
    top: 0;
    width: 60%;
    margin: 0 20%;
  }
  .here-is-how-it-works .reasons > :nth-child(1) {
    background-image: url(/images/home/howitworks_icon1.png);
    background-repeat: no-repeat;
    background-position: top 24px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(2) {
    background-image: url(/images/home/howitworks_icon2.png);
    background-repeat: no-repeat;
    background-position: top 24px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(3) {
    background-image: url(/images/home/howitworks_icon3.png);
    background-repeat: no-repeat;
    background-position: top 24px center;
    padding-top: 100px;
  }
  .here-is-how-it-works .reasons > :nth-child(4) {
    background-image: url(/images/home/howitworks_icon4.png);
    background-repeat: no-repeat;
    background-position: top 24px center;
    padding-top: 100px;
  }
}
/*resets*/
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  font-size: 0.8em;
  line-height: 1.4;
}
ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
/*global classes*/
html,
button,
input,
select,
textarea {
  font-family: arial, helvetica, sans-serif;
}
body {
  background: url(../images/bgRepeat.png) center top repeat-x;
}
p {
  margin: 0 0 15px 0;
}
table,
input,
textarea,
select {
  font-size: 1em;
}
dl {
  margin: 0 0 15px 0;
}
.content ul {
  list-style: disc;
  padding: 0 0 0 20px;
  margin: 0 0 15px 0;
}
.content ol {
  list-style: decimal;
  padding: 0 0 0 20px;
  margin: 0 0 15px 0;
}
.content ol li {
  margin: 0 0 5px 0;
}
textarea {
  font-family: Arial, Helvetica, sans-serif;
}
sup {
  font-size: 0.75em;
  vertical-align: super;
}
sub {
  font-size: 0.75em;
  vertical-align: sub;
}
acronym {
  text-transform: uppercase;
  border-bottom: 1px dotted;
}
abbr {
  text-transform: uppercase;
  border-bottom: 1px dotted;
}
hr {
  border: none 0;
  border-top: 1px solid #ccc;
  width: 100%;
  height: 1px;
  margin: 0 0 15px 0;
}
small {
  font-size: 0.75em;
}
/*links*/
a {
  color: #de7209;
  text-decoration: none;
}
a:hover {
  color: #000;
  text-decoration: underline;
}
a:active,
a:focus {
  outline: none;
  border: none;
}
object {
  outline: none;
}
/*headers*/
h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: 1em;
  color: #de7209;
  margin: 0 0 15px 0;
  line-height: 1.2;
}
h1 {
  font-size: 2em;
  text-align: left;
}
h2 {
  font-size: 1.25em;
}
h3 {
  font: 700 14px/18px Arial, Helvetica, sans-serif;
}
h4 {
  font: 700 14px/18px Arial, Helvetica, sans-serif;
  color: #000;
}
h5 {
  font-size: 1.083em;
  font-size: 1em;
}
@media print {
  * {
    background: transparent !important;
    color: #000 !important;
    /* Black prints faster: h5bp.com/s */
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  .ir a:after,
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
    /* h5bp.com/t */
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  #navigationContainer,
  .footcrumbContainer,
  .footer,
  .breadcrumbs,
  #FeedBack,
  .tabNavigation,
  .steps,
  .checkout-right,
  .columnDeal {
    display: none;
  }
  .tyreWinningBidRetailPanels,
  .tyreWinningBidRetailPanel {
    border: none !important;
  }
  .csn-sitelogo img {
    display: block !important;
    background-color: #fff;
  }
  .csn-sitelogo {
    text-indent: -9999px;
    font-size: 0;
  }
  .checkout-form:before {
    content: "Tax Invoice - Tyresales Pty LTD: ABN: 14 158 371 423 ";
    font-size: 16px;
    font-weight: bold;
  }
}
.breadcrumbs-otr {
  float: left;
}
.currency {
  width: 75px;
  float: right;
}
.search-top {
  width: 96%;
  padding-left: 10px;
  /*height: 30px;*/
}
.tyreSizeList-table td {
  width: 160px;
}
.toDeliveryLocation {
  float: right;
  height: 30px;
  display: inline-block;
  margin-top: 5px;
}
.searchtile-deliverylocation {
  display: inline-block;
  margin-top: 5px;
  height: 15px;
  width: 100%;
}
.searchtile-deliverylocation-text {
  font: 12px/15px Arial, Helvetica, sans-serif;
  color: #666;
  /*margin: 0 0 5px 0;*/
}
.toDeliveryLocation-dropdown {
  width: auto;
  display: inline;
}
.toDeliveryLocation-text {
  font-size: 12px;
  color: #7e7e7e;
  line-height: 25px;
}
.toCurrency {
  float: right;
  height: 30px;
  display: inline-block;
  margin-top: -25px;
  margin-right: -5px;
}
.toCurrency-text {
  font-size: 12px;
  color: #7e7e7e;
  line-height: 25px;
}
.toCurrency-dropdown {
  width: auto;
  display: inline;
}
.headinggraphic {
  font: 17px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  display: block;
  height: auto;
  background-color: #024CD6;
  min-height: 33px;
}
.headinggraphic .panelArrow {
  position: relative;
}
.headinggraphic .panelArrow:after,
.headinggraphic .panelArrow:before {
  content: "";
  position: absolute;
  width: 0;
  height: 0;
}
.headinggraphic .panelArrow:after {
  top: 100%;
  left: 50%;
  margin-left: 0px;
  border-left: 0px solid transparent;
  border-right: 0px solid transparent;
  border-top: 0px solid #000000;
}
.headinggraphic .panelArrow:before {
  /*top: 100%;*/
  left: 50%;
  margin-left: -6px;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid;
  border-top-color: #ffffff;
}
.headinggraphic .banner {
  width: 992px;
  color: white;
  padding: 7px 0px 7px 0px;
  margin: 0 auto;
}
.headinggraphic .banner .fa-2x {
  font-size: 1.5em;
  vertical-align: middle;
}
.headinggraphic .banner .deliveryAndInstallation {
  width: 50%;
  text-align: center;
  float: left;
}
.headinggraphic .banner .deliveryAndInstallation span {
  padding: 0px 5px 0px 5px;
  vertical-align: middle;
}
.headinggraphic .banner .deliveryAndInstallation span .disclaimerSymbol {
  font-size: 11px;
  vertical-align: middle;
}
.headinggraphic .banner .fitmentCenterLocation {
  width: 50%;
  text-align: center;
  float: right;
}
.headinggraphic .banner .fitmentCenterLocation span {
  padding: 0px 5px 0px 5px;
  vertical-align: middle;
}
.headinggraphicsearchpage {
  margin: 0 auto;
  width: 992px;
  margin-top: 10px;
}
/*************/
/* Structure */
/*************/
.tyrePanel .tyrethumbnail {
  padding: 5px 2px 5px 5px;
  float: left;
}
.tyrePanel .tyrethumbnail .discount {
  margin-top: 5px;
  position: absolute;
  top: 74px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 11px;
}
.tyrePanel .promotion-bubble-container {
  position: absolute;
  right: 90px;
  width: 54px;
  height: 120px;
}
.tyrePanel .tyrethumbnail .superspecial,
.tyrePanel .tyrethumbnail .bestseller {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 11px;
}
.tyrePanel .tyrethumbnail .blueBubbleSize12 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
  line-height: 12px;
}
.tyrePanel .tyrethumbnail .blueBubbleSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .tyrethumbnail .blueBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .tyrethumbnail .greenBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .tyrethumbnail .redBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .tyrethumbnail .greenBubbleSize12 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
}
.tyrePanel .tyrethumbnail .specialOffer {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 11px;
}
.tyrePanel .tyrethumbnail .specialOffer2 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 13px;
}
.tyrePanel .tyrethumbnail .freeTyreOffer {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
  line-height: 13px;
}
.tyrePanel .tyrethumbnail .temporaryPromo {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 13px;
}
.tyrePanel .tyrethumbnail .superspecial,
.tyrePanel .tyrethumbnail .blueBubbleSize12 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #3366FF;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .blueBubbleSize10 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  padding: 5px 0;
  background: #3366FF;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .blueBubbleAdSize10 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  padding: 5px 0;
  background: #3366FF;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .greenBubbleAdSize10 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  padding: 5px 0;
  background: #2eb559;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .redBubbleAdSize10 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  padding: 5px 0;
  background: #f00;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .greenBubbleSize12 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #2eb559;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .specialOffer,
.tyrePanel .tyrethumbnail .specialOffer2,
.tyrePanel .tyrethumbnail .freeTyreOffer,
.tyrePanel .tyrethumbnail .bestseller {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #ef1a1a;
  font-weight: 700;
}
.tyrePanel .tyrethumbnail .discount strong {
  font-size: 18px;
  padding-top: 6px;
}
.tyrePanel .tyrethumbnail a {
  display: block;
  height: 125px;
  width: 100px;
}
.tyrePanel .tyrethumbnail img {
  height: auto;
  max-width: 100%;
  display: block;
}
.tyrePanel .tyrethumbnail strong {
  display: block;
  text-align: center;
  font: bold 11px/24px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  cursor: pointer;
}
/*.checkoutCart .tyrePanel .price {
min-height: 25px;
clear: left;
color: #FFF;
padding-top: 10px;
}*/
/*.checkoutCart .tyrePanel .price div {
    float: left;
}

    .checkoutCart .tyrePanel .price div.strike {
        float: right;
    }

.checkoutCart .tyrePanel .promoText {
    color: #75B618;
    font-weight: bold;
    text-transform: uppercase;
}

.checkoutCart .tyrePanel .price .strike {
    font: 18px Arial, Helvetica, sans-serif;
}

.checkoutCart .tyrePanel .price .fitting {
    font-size: 11px;
    color: #000;
    font-weight: bold;
    padding-bottom: 5px;
}

.checkoutCart .tyrePanel .price strong {
    display: none;
}*/
.tyrePanels .tyrePanel .tyre-rightside {
  float: right;
}
.tyrePanels .tyrePanel .promoText {
  color: #75B618;
  font-weight: bold;
  text-transform: uppercase;
}
.tyrePanels .tyrePanel .today-price-text {
  color: rgba(255, 119, 20, 0.89);
  margin-bottom: -10px;
  font-size: small;
}
.tyrePanels .tyrePanel .price .strike {
  font: 32px/29px Arial, Helvetica, sans-serif;
  color: rgba(255, 119, 20, 0.89);
  padding-top: 5px;
}
.tyrePanels .tyrePanel .price .fitting {
  font-size: 11px;
  color: #000;
  font-weight: bold;
  padding-bottom: 5px;
}
.tyrePanels .tyrePanel .price strong {
  display: none;
}
.tyrePanel .getQuote .rrp {
  display: none;
}
.tyrePanel .submit {
  float: right;
}
.tyrePanel .submit input.button {
  display: block;
  height: 25px;
  width: 85px;
  border: 0 none;
  border-radius: 0;
  background: url(/images/sprites.png) no-repeat -278px -60px;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  text-align: center;
  padding: 0;
  margin: 0;
}
.tyrePanel .submit input.button:hover {
  background: url(/images/sprites.png) no-repeat -278px -90px;
  cursor: pointer;
}
.tyrePanel.buyNow .submit input.button,
.tyrePanel.buyNowRrp .submit input.button {
  background-position: -278px -120px;
}
.tyrePanel.buyNow .submit input.button:hover,
.tyrePanel.buyNowRrp .submit input.button:hover {
  background: url(/images/sprites.png) no-repeat -278px -205px;
  cursor: pointer;
}
.tyrePanel .roadside {
  padding: 4px 0 0 15px;
  clear: both;
  background: url(/images/dealOfTheDay_sprites.png) no-repeat 0 -251px;
}
.tyrePanel .fitted {
  padding: 4px 0 0 15px;
  clear: both;
  background: url(/images/dealOfTheDay_sprites.png) no-repeat 0 -251px;
}
.tyrePanel .reviews span.star {
  vertical-align: middle;
  display: inline;
  padding: 0 0 0 2px;
}
.tyrePanel .reviews .gig-rating-averageRating {
  display: none;
}
.seoSchemaHide {
  display: none;
}
/********/
/* 2014 */
/********/
.tyrePanels .tyrePanel .cusViewCount {
  position: relative;
  padding-bottom: 2px;
}
/*******/
/* NEW */
/*******/
.search-top {
  margin: 10px;
  *zoom: 1;
}
.search-top:before,
.search-top:after {
  display: table;
  content: " ";
}
.search-top:after {
  clear: both;
}
.search-top:before,
.search-top:after {
  display: table;
  content: " ";
}
.search-top:after {
  clear: both;
}
.searchMod {
  margin: 10px;
}
.searchMod input[type='submit'] {
  background-color: #ee8000;
  color: #fff;
  width: auto;
  line-height: 1;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  display: inline-block;
  padding: 0.75em;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  box-shadow: none;
  border: none;
  cursor: pointer;
  font-size: 14px;
}
.searchMod input[type='submit']:hover {
  background-color: #ff9315;
}
.searchMod input[type='submit'][disabled],
.searchMod input[type='submit'] .disabled {
  border: none;
  cursor: default;
  opacity: 0.4;
}
.searchMod input[type='submit'][disabled]:hover,
.searchMod input[type='submit'].disabled:hover {
  background-color: #ee8000;
}
.patternContent {
  margin: 10px;
  padding: 8px;
  border: 1px solid #ccc;
}
.tyrePanels {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  padding-left: 5px;
  padding-right: 5px;
}
.tyrePanels > .navbar-header,
.tyrePanels > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .tyrePanels > .navbar-header,
  .tyrePanels > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.ribbon-red-small {
  font: bold 15px Sans-Serif;
  text-align: center;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  position: relative;
  padding: 4px 0;
  left: -10px;
  top: 16px;
  width: 120px;
  background-color: #E00000;
  color: #fff;
}
.ribbon-wrapper-red-small {
  width: 80px;
  height: 90px;
  overflow: hidden;
  position: absolute;
  top: -1px;
  right: -1px;
}
.ribbon-wrapper-green {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  right: -3px;
}
.ribbon-green {
  font: bold 15px Sans-Serif;
  text-align: center;
  /*text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;*/
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  position: relative;
  padding: 7px 0;
  left: -5px;
  top: 15px;
  width: 120px;
  background-color: #DC7A7A;
  background-image: -o-linear-gradient(top, #DC7A7A, #E00000);
  color: white;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3);
}
.ribbon-green:before,
.ribbon-green:after {
  content: "";
  border-top: 3px solid #6e8900;
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position: absolute;
  bottom: -3px;
}
.ribbon-green:before {
  left: 0;
}
.ribbon-green:after {
  right: 0;
}
.tyrePanelRow {
  padding-bottom: 5px;
}
.tyrePanelRow .tyrePanel_GBB {
  float: left;
  width: 100%;
  position: relative;
  min-height: 1px;
  padding-right: 5px;
  padding-left: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
}
@media (min-width: 768px) {
  .tyrePanelRow .tyrePanel_GBB {
    float: left;
    width: 33.33333333%;
  }
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel {
  position: relative;
  /* so we can absolute position child elements. */
  border: 1px solid #C4C4C4;
  font-size: 12px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .wrapper {
  background: white;
  border-radius: 10px;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
  z-index: 90;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .icons {
  height: 40px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .icons .runFlat {
  display: block;
  height: 25px;
  font-size: 10px;
  font-weight: bold;
  text-transform: uppercase;
  color: #DE7209;
  padding: 10px 6px;
  float: right;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .icons .runFlat:before {
  display: inline-block;
  vertical-align: middle;
  width: 25px;
  height: 25px;
  content: " ";
  background: red;
  background: url(/images/run-flat-icon.png) no-repeat;
  background-size: 20px 20px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price {
  font: 11px/25px Arial, Helvetica, sans-serif;
  color: #666;
  padding-right: 10px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .rrp-outer {
  height: 20px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .rrp {
  position: relative;
  height: 25px;
  font: 11px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .rrpPrice {
  font: 16px/25px arial, sans-serif;
  color: #666;
  font-weight: 600;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .rrpPrice:before {
  position: absolute;
  top: 12px;
  left: 2px;
  width: 36px;
  display: block;
  content: " ";
  border-top: 1px solid #ff3333;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .price-was-outer {
  height: 20px;
  text-align: right;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .price-was {
  position: relative;
  height: 25px;
  font: 11px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .wasPrice {
  font: 16px/25px arial, sans-serif;
  color: #666;
  font-weight: 600;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .wasPrice:before {
  content: ' $ ';
  font-size: 12px;
  vertical-align: top;
  font-weight: normal;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .wasPrice:after {
  position: absolute;
  top: 12px;
  right: 0;
  width: 30px;
  display: block;
  content: " ";
  border-top: 1px solid #f33;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .wordPrice {
  text-align: right;
  margin-bottom: -12px;
  padding-right: 5px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .cost {
  font: bold 29px/29px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: rgba(255, 119, 20, 0.89);
  padding-top: 5px;
  text-align: right;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .promotionPricePerTyre {
  font: bold 29px/29px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  float: right;
  font-size: smaller;
  color: #36f;
  font-weight: 700;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .cost:before {
  content: '$';
  font-size: 15px;
  vertical-align: top;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .each {
  text-align: right;
  margin-top: -8px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .fourTyrePromotionText {
  color: #36f;
  text-align: right;
  margin-top: -8px;
  font-size: 11px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .fourTyrePromotionPrice {
  color: #36f;
  font-size: medium;
  text-align: right;
  font-weight: 600;
  margin-top: -10px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .price .fourTyrePromotionEach {
  color: #36f;
  text-align: right;
  margin-top: -12px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel:hover {
  box-shadow: inset 0 0 0 5px #e5e5e5;
  transition: all 400ms ease-in-out;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .logo {
  height: 40px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .logo img {
  width: auto;
  max-width: 100%;
  margin: 10px 10px 10px 10px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreName {
  color: white;
  background: #A8A8A8;
  text-align: center;
  font-size: 13px;
  padding: 3px 0px 3px 0px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreName a {
  color: white;
  display: block;
  font-weight: 600;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories {
  text-align: center;
  line-height: 1;
  background: #EBEBEB;
  height: 28px;
  font-weight: 500;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories .divLeft {
  float: left;
  width: 80px;
  height: 28px;
  /*text-align: right*/
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories .divLeft span {
  vertical-align: middle;
  line-height: 28px;
  padding: 0;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories .divRight {
  /*float: right;*/
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories .divRight div {
  width: 105px;
  height: 28px;
  display: table-cell;
  vertical-align: middle;
  text-align: left;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories p {
  vertical-align: middle;
  line-height: 28px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories span {
  vertical-align: middle;
  line-height: 28px;
  padding-right: 4px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyreCarCategories img {
  max-width: 90px;
  max-height: 17px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .samedayFitmentPanel {
  background-color: #0068ff;
  text-align: center;
  padding: 3px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .samedayFitmentPanel a {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
  font-weight: 700;
  line-height: 19.4px;
  color: #fff;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .samedayFitmentPanel a:hover {
  color: #ffc200;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .lowestPriceGuarantee {
  display: block;
  cursor: pointer;
  max-height: 25px;
  margin: 5px 0;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel {
  margin-right: 0;
  margin-left: 0;
  border-top: solid 1px #c4c4c4;
  border-bottom: solid 1px #c4c4c4;
  clear: both;
  padding: 8px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity {
  position: relative;
  float: left;
  width: 50%;
  min-height: 1px;
  padding-right: 0px;
  padding-left: 0px;
  text-align: center;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity label {
  display: inline-block;
  width: 25px;
  height: 32.5px;
  line-height: 32.5px;
  vertical-align: middle;
  color: black;
  font-weight: bold;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .quantity select {
  width: 40px;
  height: 32.5px;
  line-height: 32.5px;
  box-sizing: border-box;
  display: inline-block;
  vertical-align: middle;
  border: solid 1px #A8A8A8;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct {
  position: relative;
  float: left;
  width: 50%;
  min-height: 1px;
  padding-right: 0px;
  padding-left: 0px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton {
  background-color: #66a210;
  color: #fff;
  width: 100%;
  border: 1px solid #ffffff;
  line-height: 1;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  display: inline-block;
  padding: 0.7em;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  box-shadow: none;
  cursor: pointer;
  display: block;
  margin-right: auto;
  margin-left: auto;
  width: 75px;
  font-size: 13px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton:hover {
  background-color: #7cc513;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton[disabled],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton .disabled {
  border: none;
  cursor: default;
  opacity: 0.4;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton[disabled]:hover,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel .tyreProduct .productViewButton.disabled:hover {
  background-color: #66a210;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyNow {
  cursor: pointer;
  text-align: center;
  line-height: 1;
  background: #EBEBEB;
  padding: 7px;
  font-weight: 500;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyNow:hover {
  color: #de7209;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyNow strong {
  color: #de7209;
  font-size: 120%;
  white-space: nowrap;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .endingStock {
  box-sizing: border-box;
  line-height: 12px;
  font-size: 12px;
  text-align: center;
  padding: 7px;
  font-weight: 500;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .endingStock strong {
  color: #66a210;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .endingStock.viewcount:before {
  background: url(/images/icon-people.png) 0 0;
  background-size: contain;
  content: '';
  width: 12px;
  height: 12px;
  display: inline-block;
  vertical-align: top;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .tyrethumbnail img {
  width: auto !important;
  height: auto !important;
  max-width: 100px !important;
  max-height: 125px !important;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal {
  background-color: #ee8000;
  color: #fff;
  width: 100%;
  line-height: 1;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  display: inline-block;
  padding: 0.75em;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  box-shadow: none;
  border: none;
  cursor: pointer;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal:hover {
  background-color: #ff9315;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal[disabled],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal .disabled {
  border: none;
  cursor: default;
  opacity: 0.4;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal[disabled]:hover,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .askForADeal.disabled:hover {
  background-color: #ee8000;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .pricePerTyreAfterPromotion {
  float: right;
  color: #36f;
  font: 12px/15px 'Roboto';
  font-weight: 600;
  padding-right: 10px;
  min-height: 15px;
  clear: both;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .deliverylocation {
  display: inline-block;
  padding: 7px;
  width: 100%;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .deliverylocation .deliverylocation-text {
  font: 12px/15px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #666;
  text-align: center;
  font-weight: 500;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm {
  display: none !important;
  font-size: 12px;
  padding: 3px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm .success-message {
  display: none !important;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm p {
  margin-bottom: 1em;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div {
  position: relative;
  /*.make-xs-column(12, 0);*/
  margin: 0.5em 0;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div label {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
  display: block;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input {
  width: 100%;
  border: 1px solid #000;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input:hover {
  border: 1px solid #444;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input:focus {
  border: 1px solid #ee8000;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='text'],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='email'],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='tel'],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='number'] {
  padding: 4px 8px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'] {
  background-color: #66a210;
  color: #fff;
  width: 100%;
  line-height: 1;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
  display: inline-block;
  padding: 0.75em;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  box-shadow: none;
  border: none;
  cursor: pointer;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit']:hover {
  background-color: #7cc513;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled],
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'] .disabled {
  border: none;
  cursor: default;
  opacity: 0.4;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled]:hover,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'].disabled:hover {
  background-color: #66a210;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'] + .fa-cog {
  display: none !important;
  color: #fff;
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -0.5em;
  margin-top: 0.15em;
  cursor: default;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] {
  text-indent: -9999px;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] + .fa-cog {
  display: block !important;
}
table.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] + .fa-cog {
  display: table !important;
}
tr.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] + .fa-cog {
  display: table-row !important;
}
th.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] + .fa-cog,
td.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div input[type='submit'][disabled] + .fa-cog {
  display: table-cell !important;
}
.tyrePanelRow .tyrePanel_GBB .tyrePanel .findTyreForm form > div .field-validation-error {
  display: block;
  font: 11px/16px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #da3f26;
}
.dealSubTitleGBB,
.dealTitleGBB {
  background: #f57e21;
  padding: 10px;
  margin: 10px 5px;
  margin-top: 0;
  color: #fff;
  display: block;
  clear: both;
  text-align: center;
}
.dealTitleGBBMobile {
  display: none;
}
.dealSubTitleGBB {
  font: 18px/25px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.dealTitleGBB {
  font: 16px/23px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: bold;
}
.dealGBBTitle {
  background: #f57e21;
  font: 16px/40px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 700;
  color: #fff;
  text-align: center;
  border: 1px solid #f57e21;
  margin-bottom: 10px;
}
.freeShipping {
  margin: 10px;
}
.freeShipping img {
  display: block;
  margin-right: auto;
  margin-left: auto;
  height: auto;
  max-width: 100%;
}
.searchResults {
  margin: 10px;
  *zoom: 1;
}
.searchResults:before,
.searchResults:after {
  display: table;
  content: " ";
}
.searchResults:after {
  clear: both;
}
.searchResults:before,
.searchResults:after {
  display: table;
  content: " ";
}
.searchResults:after {
  clear: both;
}
.searchResultsBannerContainer {
  margin: 10px;
  position: relative;
}
.searchResultsBannerFinePrint {
  position: absolute;
  bottom: 5px;
  left: 0;
  right: 0;
  text-align: center;
  font-size: 10px;
}
.content .search-link {
  /*h1 {
        font-size: 14px;
        color: #534c46;
        font-weight: 400;
        padding:0 0 15px 20px;
    }*/
}
.content .search-link h2 {
  font: 700 20px Arial, Helvetica, sans-serif;
  color: #f57e21;
  margin: 0 0 15px 0;
  padding: 0 0 0 20px;
}
.content .search-link .search-tyre-size-links {
  padding: 0 0 0 20px;
  margin: 0 0 15px 0;
}
.trust-pilot {
  padding: 7px;
  text-align: center;
}
.trust-pilot-widget-search-page {
  display: inline-block;
}
.trust-pilot-widget-search-page:hover {
  text-decoration: none;
}
.trust-pilot-widget-search-page .trust-pilot-image img {
  width: 60px;
  height: 15px;
}
.trust-pilot-widget-search-page .trust-pilot-rating img {
  width: 50px;
  height: 9px;
}
.trust-pilot-widget-search-page .trust-pilot-totalreview span {
  color: #f57e21;
}
.green-button {
  background: #97c522;
  font: 18px/42px Arial, Helvetica, sans-serif;
  font-weight: 700;
  color: #fff;
  cursor: pointer;
  line-height: 14px;
  padding: 13px 31px 11px;
  text-align: center;
  text-decoration: none;
  border: none;
}
.green-button:hover {
  background: #66a210;
  text-decoration: none;
  color: #fff;
}
.samedayFitmentContainer h2 {
  font: bold 20px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #f57e21;
}
.samedayFitmentContainer h4 {
  font: bold 16px 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #333;
}
.samedayFitmentContainer .samedayFitmentImg {
  width: 45%;
  float: left;
  padding-left: 4px;
  text-align: center;
}
.samedayFitmentContainer .samedayFitmentImg > img {
  -o-object-fit: cover;
     object-fit: cover;
}
.samedayFitmentContainer .samedayFitmentImg > p {
  font-style: italic;
  font-size: x-small;
}
.samedayFitmentContainer .postcode-textbox {
  z-index: 2;
  margin-bottom: 0;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 20px;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  margin-left: 10px;
}
.samedayFitmentContainer .green-button {
  font-size: inherit;
  margin-left: 10px;
  line-height: 10px;
}
.samedayFitmentContainer .samedayFitmentText {
  width: 55%;
  float: right;
  height: 100%;
  text-align: center;
  padding-right: 4px;
}
.samedayFitmentContainer .samedayFitmentText .payment-info {
  font-style: italic;
}
.samedayFitmentContainer .samedayFitmentText .instruction {
  font-size: 14px;
}
.samedayFitmentContainer .samedayFitmentText .green-tick {
  background: url(/images/sprites_checkout.png) no-repeat -467px 8px #fff;
  width: 35px;
  height: 40px;
  vertical-align: middle;
  display: inline-block;
  margin-top: -13px;
}
.samedayFitmentContainer .samedayFitmentText .thankyou-message {
  color: green;
  font-weight: bold;
}
.samedayFitmentContainer .samedayFitmentText .inputPhoneNextDayFitment .phone-input {
  z-index: 2;
  width: 85%;
  margin-bottom: 0;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  margin-left: 10px;
}
.samedayFitmentContainer .samedayFitmentText .inputPhoneNextDayFitment .first {
  margin-bottom: 3px;
}
.samedayFitmentContainer .termCondition {
  clear: both;
  padding: 10px;
}
.samedayFitmentContainer .termCondition ul {
  list-style-type: disc;
  padding-left: 40px;
}
.samedayFitmentContainer .errorFitment {
  color: red;
}
#cboxClose {
  right: 10px !important;
  top: 10px !important;
}
/* checkout */
.processingAlert {
  z-index: 99999;
  width: 300px;
  position: absolute;
  position: fixed;
  left: 50%;
  top: 50%;
  margin: -50px 0 0 -150px;
}
.processingAlert-content {
  border: 4px solid #de7209;
  min-height: 80px;
  background: #FFF;
  color: #000;
  font: 12px/18px 'Roboto Condensed', sans-serif;
  padding: 1em;
  margin: 0;
  height: 80px;
}
.processingAlert-content p {
  text-align: center;
  margin-top: 5px;
}
.processingAlert-content img {
  display: block;
  margin: auto;
}
.overlay {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10001;
  width: 100%;
  height: 100%;
  background-color: #fff;
  filter: alpha(opacity=80);
  opacity: 0.8;
}
ul.steps {
  margin: 0;
  padding: 0;
  list-style: none;
}
ul.steps li {
  float: left;
  width: 216px;
  height: 34px;
  line-height: 33px;
  text-align: center;
  font-size: 13px;
  background: url(../images/sprites_checkout.png) no-repeat 0 -198px;
  margin-left: -15px;
  font-weight: bold;
}
ul.steps li:first-child {
  margin: 0;
}
ul.steps li.selected {
  color: #DE7209;
  font-weight: 700;
}
.dealHeading {
  border-bottom: solid 2px #f6984e;
  color: #333;
  padding-bottom: 5px;
  margin: 20px 0 10px;
  display: block;
}
.dealHeading strong {
  font-size: 14px;
  background: url(../images/arrow_bullet.gif) no-repeat 100% 3px;
  padding: 0 10px 0 0;
}
.dealHeading i {
  font: 14px/24px Georgia, "Times New Roman", Times, serif;
}
.checkout-deal {
  width: 380px;
  float: left;
}
.checkout-deal .floatLeft {
  width: 140px;
  float: left;
  margin: auto;
  text-align: center;
  position: relative;
}
.checkout-deal .floatLeft .sale {
  display: block;
  position: absolute;
  top: 20px;
  left: 6px;
  background: url(../images/sprites_checkout.png) no-repeat -407px -214px;
  width: 93px;
  height: 50px;
}
.checkout-deal .floatLeft img {
  display: block;
  margin: auto;
  width: 115px!important;
  height: auto;
}
.checkout-deal .floatLeft p {
  margin-top: 10px;
  font-weight: bold;
}
.checkout-deal .floatLeft p strong {
  color: #b3282e;
}
.checkout-deal .floatRight {
  width: 235px;
  float: right;
  font-size: 14px;
  color: #666;
}
.checkout-deal .floatRight span {
  color: #f5791f;
  font-size: 15px;
  display: block;
  font-weight: bold;
}
.checkout-deal .floatRight img + span {
  margin: 11px 0;
  font-size: 19px;
}
.checkout-deal .floatRight p span {
  color: #009933;
}
.checkout-deal .floatRight p span strong {
  color: #f5791f;
  text-transform: uppercase;
  font-weight: 700;
}
.checkout-deal .floatRight ul {
  margin: 15px 0 0;
  padding: 0 0 44px 0;
  list-style: none;
}
.checkout-deal .floatRight li {
  background: url(../images/sprites_checkout.png) no-repeat 0 -243px;
  padding-left: 20px;
}
.checkout-deal .price-discount {
  position: absolute;
  top: 0;
  left: -15px;
  width: 70px;
  height: 70px;
  border-radius: 35px;
  background: #a0cb35;
  /* Old browsers */
  /* FF3.6+ */
  /* Chrome,Safari4+ */
  /* Chrome10+,Safari5.1+ */
  /* Opera 11.10+ */
  /* IE10+ */
  background: linear-gradient(to bottom, #a0cb35 0%, #437b0a 100%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a0cb35', endColorstr='#437b0a', GradientType=0);
  /* IE6-9 */
  font: italic 11px/20px 'Arial', sans-serif;
  color: #fff;
  text-align: center;
}
.checkout-deal .price-discount span {
  display: block;
  font-size: 28px;
  font-style: normal;
  padding-top: 20px;
}
.content section > div.qualifyForFreeFuelContainer {
  width: 380px;
  height: 35px;
  padding: 0 0 10px 10px;
}
.content section > .checkout-form + div.qualifyForFreeFuelContainer {
  margin: 37px 0 0;
}
.qualifyForFreeFuel {
  font-size: 18px;
  color: #f5791f;
  font-weight: bold;
  letter-spacing: -1px;
}
.qualifyForFreeFuel:before {
  width: 75px;
  height: 42px;
  display: block;
  content: "";
  background: url(../images/mobile-sprites.png) 0 -234px no-repeat;
  float: left;
  margin: -13px 5px 0 0;
}
/*Pirelli Cash Back*/
.qualifyForCashBackContainer {
  background-color: #ecfcdb;
  border: solid 1px #cdd8c1;
  border-radius: 7px;
  padding: 10px;
  position: relative;
  box-sizing: border-box;
  margin-top: 5px;
}
.qualifyForCashBackContainer p {
  font-size: 12px;
  margin-bottom: 0px;
  font-weight: 500;
  text-align: center;
}
.optionalAlignmentText {
  background: #f2f1f0;
  padding: 10px;
  font-size: 11px;
  margin-top: 20px;
}
.deal-container .checkoutCart {
  background: #f9f9f9;
}
.deal-container .bullets {
  margin-right: 20px;
}
.deal-container .bullets li:first-child {
  margin: 0;
}
.deal-container .bullets li {
  float: left;
  margin-left: 30px;
  font-size: 12px;
}
.deal-container input[type="button"] {
  float: right !important;
}
.checkoutCart {
  width: 210px;
  min-height: 290px;
  float: right;
  color: #FFF;
  background-color: #666;
  padding: 6px;
}
.checkoutCart .tyrePanel {
  float: none;
  width: auto;
  height: auto;
  border: none;
}
.checkoutCart .tyrePanel:hover {
  box-shadow: none;
  -webkit-box-shadow: none;
}
.checkoutCart .tyrePanel .newListSelected {
  width: 40px;
  margin-right: 0 !important;
  overflow: visible !important;
  z-index: 10000;
}
.checkoutCart .tyrePanel .newListSelected .fieldLabel {
  display: none;
}
.checkoutCart .tyrePanel .newListSelected .selectedTxt {
  padding: 2px;
}
.checkoutCart .tyrePanel ul.newList {
  width: 52px !important;
}
.checkoutCart .tyrePanel ul.newList li {
  margin-bottom: 0;
}
.checkoutCart .tyrePanel ul.newList li a {
  padding-left: 7px;
}
.checkoutCart .tyrePanel label {
  float: left;
  display: block;
}
.checkoutCart .size {
  height: 28px;
  font-size: 16px;
  border-bottom: 1px solid #999;
}
.checkoutCart .size label {
  float: right;
}
.checkoutCart .size .label {
  display: block;
  float: left;
  font-weight: bold;
}
.checkoutCart .qty {
  height: 22px;
  font-size: 14px;
  border-bottom: 1px solid #999;
  padding: 10px 0;
}
.checkoutCart .qty select {
  font-size: 16px;
  color: #000;
  float: right;
  border: 0;
  border-radius: 0;
  padding: 0;
}
.checkoutCart .qty select:disabled {
  background: #ccc;
  color: #666;
}
.checkoutCart .type {
  height: 33px;
  display: block;
}
.checkoutCart .checkoutCurrency {
  font-size: 14px;
  padding: 10px 0;
  font-weight: bold;
  height: 22px;
  padding: 12px 0;
}
.checkoutCart .checkoutCurrency label {
  float: left;
  display: block;
}
.checkoutCart .checkoutCurrency select {
  font-size: 16px;
  color: #000;
  float: right;
  border: 0;
  border-radius: 0;
  padding: 0;
  width: 75px;
}
.checkoutCart .checkoutCurrency select:disabled {
  background: #ccc;
  color: #666;
}
.checkoutCart .checkoutIncludeGst label {
  font-weight: 700;
  padding-top: 12px;
}
.checkoutCart .checkoutIncludeGst .gstDetails {
  float: right;
  padding-top: 0;
  width: 110px;
}
.checkoutCart .checkoutIncludeGst .gstDetails span.checkoutGst {
  display: block;
  min-height: 0;
  width: 110px;
  float: none;
  text-align: right;
  padding: 0;
  margin: 0;
  color: #f5791f;
}
.checkoutCart .newPrice {
  height: 56px;
}
.checkoutCart .newPrice .save {
  color: #f5791f;
  font-size: 14px;
  display: block;
  font-weight: bold;
  text-align: right;
}
.checkoutCart .newPrice label {
  font-weight: 700;
  padding-top: 12px;
}
.checkoutCart .newPrice .pertyre {
  display: block;
  font-weight: 400;
}
.checkoutCart .newPrice .price {
  font: bold 32px/32px Arial, Helvetica, sans-serif;
  display: block;
  color: #FFF;
  float: right;
  width: auto;
  padding: 0;
}
.checkoutCart .newPrice .priceDetails {
  float: right;
  padding-top: 0;
  width: 110px;
}
.checkoutCart .newPrice .priceDetails span.price,
.checkoutCart .newPrice .priceDetails span.save {
  display: block;
  min-height: 0;
  width: 110px;
  float: none;
  text-align: right;
  line-height: 12px;
  padding: 0;
  margin: 0;
}
.checkoutCart ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.checkoutCart li {
  padding-bottom: 10px;
  margin-bottom: 10px;
  border-bottom: solid 1px #cccccc;
}
.deal-container .checkoutCart li {
  border: none;
}
.premiumDetail-content .costs {
  width: 310px;
  margin-top: 10px;
  margin-left: 10px;
}
.checkoutCart li.costs .item {
  float: left;
  margin: 0 0 10px;
  font-size: 12px;
  font-weight: bold;
}
.premiumDetail-content .costs .item {
  float: left;
  margin: 0 0 2px;
  font-size: 12px;
  font-weight: bold;
}
.checkoutCart li.costs .item.tick:before,
.premiumDetail-content .costs .item.tick:before {
  width: 16px;
  height: 12px;
  display: block;
  content: "";
  float: left;
  margin: 2px 5px 0 0;
  background: url(../images/mobile-sprites.png) no-repeat -78px -235px;
}
.checkoutCart li.costs .item.checkbox {
  font-size: 10px;
}
.checkoutCart li.costs .item input {
  vertical-align: bottom;
  margin-left: 0 !important;
  margin-right: 9px;
}
.checkoutCart li.costs .total,
.premiumDetail-content .costs .total {
  float: right;
  width: 38px;
  text-align: right;
  padding: 0;
  background: none;
  font-weight: bold;
}
.checkoutCart .total {
  background: #f5791f;
  padding: 0 8px;
}
.checkoutCart .total span {
  float: left;
  font: 18px/39px Arial, Helvetica, sans-serif;
  font-weight: bold;
}
.checkoutCart .total span.price {
  float: right;
  font: 32px/42px Arial, Helvetica, sans-serif;
  font-weight: bold;
}
.checkoutCart .total .price .strike {
  position: relative;
  font: 28px/39px Arial, Helvetica, sans-serif;
  min-height: 39px;
  font-weight: bold;
}
.checkoutCart .total .strike .strikeThrough {
  top: -4px;
  left: -13px;
  display: block;
  width: 85px;
  height: 39px;
  z-index: 9;
  text-align: right;
}
.checkoutCart .total .strike .strikeThrough:before {
  position: absolute;
  top: 28px;
  left: 16px;
  width: 70px;
  display: block;
  content: " ";
  border-top: 4px solid #F00;
  transform: rotate(-20deg);
}
.checkout-right h2 {
  font-size: 19px;
  font-weight: bold;
  width: 100%;
  text-align: center;
  color: #fff;
  background-color: #626262;
  border-radius: 4px 4px 0px 0px;
  height: 40px;
  line-height: 40px;
  margin-bottom: 4px;
}
/*.checkout-right .LHNInviteTitle h2 {
    font-size: 24px;
    font-weight: 100;
    width: auto;
    text-align: left;
    color: #000;
    background-color: transparent;
    -webkit-border-radius: 0;
    border-radius: 0;

    height: 32px;
    line-height: normal;
    margin-bottom: 15px;
}*/
.checkout-right h3 {
  margin: 10px 0 0 0;
}
.checkout-right p {
  margin-bottom: 20px;
}
.checkout-right .LHNInviteMessage p {
  margin-bottom: 5px;
}
.checkout-right .inner {
  width: 300px;
  margin: 0 auto 20px;
}
.checkout-right ul {
  margin: 0;
  padding: 0;
  list-style: none;
  background: url(../images/sprites_checkout.png) no-repeat 0 -287px;
}
.checkout-right ul li {
  font-size: 11px;
  padding-left: 82px;
}
.checkout-right ul li strong {
  font-size: 15px;
  display: block;
  line-height: 18px;
  width: 168px;
}
.checkout-right ul li.dollar {
  height: 108px;
  padding-top: 6px;
}
.checkout-right ul li.van {
  height: 100px;
}
.checkout-right ul li.car {
  height: 107px;
}
.checkout-right ul li.wrench {
  height: 96px;
}
.checkout-right img {
  display: block;
  margin: 20px auto 0;
}
.checkout-right .icon.secure {
  background-position: 0 -130px;
}
/*purchase-guarantee*/
.purchase-guarantee {
  clear: both;
  min-height: 55px;
  position: relative;
  background: url(../images/guarantee.gif) 0 10px no-repeat;
  font-size: 12px!important;
  line-height: 15px;
  color: #666;
  border-top: 1px solid #CCC;
  padding: 29px 0 0 73px;
}
.checkout-deal .purchase-guarantee .sale {
  font-size: 12px;
  display: inline;
}
.checkout-deal .floatRight .purchase-guarantee .faq {
  font-size: 12px;
  padding: 0;
}
.purchase-guarantee .faq:hover .helpText {
  font-size: 12px;
  background: #fff;
  width: 330px;
  padding: 20px;
}
.purchase-guarantee .faq:hover .helpText strong {
  margin-left: 0;
  margin-bottom: 10px;
}
.purchase-guarantee p {
  margin: 0;
}
.checkout-form {
  position: relative;
}
.checkout-top .checkout-form {
  position: relative;
  width: auto;
  height: auto;
  margin-top: 10px;
  clear: both;
  font-family: 'Roboto', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.checkout-form .whatsThis {
  font-size: 10px;
  font-style: italic;
  position: absolute;
  bottom: -14px;
  right: 298px;
  left: 0;
  width: 200px;
  color: #de7209;
  cursor: pointer;
}
.checkout-form .row {
  margin-bottom: 8px;
  position: relative;
}
.checkout-form .row p {
  margin: 5px 0;
  font-size: 12px;
}
.checkout-form .row .text {
  float: left;
  margin-top: 10px;
  width: 425px;
}
.checkout-form .row .textwide {
  float: left;
}
.checkout-form .row .riTextBox {
  padding-left: 3px;
}
.checkout-form .button {
  float: right;
}
.checkout-form .buttonRight {
  float: right;
}
.checkout-form .buttonRight img {
  display: block;
  clear: right;
}
.checkout-form .button input,
.checkout-form .row input[type="button"],
.searchMod .deal-container input[type="button"],
.deal-container input[type="button"] {
  display: block;
  height: 31px;
  width: 85px;
  border: 0 none;
  border-radius: 3px;
  background: url(../images/sprites.png) no-repeat -278px -60px;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  text-align: center;
  padding: 0;
  margin: 0;
  float: left;
}
.checkout-form .button input,
.checkout-form .row input[type="button"] {
  width: 100%;
  height: 28px;
  background: none;
  border: 0 none;
  color: #FFF;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}
.searchMod .deal-container input[type="button"]:hover,
.deal-container input[type="button"]:hover {
  background: url(../images/sprites.png) no-repeat -278px -89px;
  cursor: pointer;
}
.checkout-form .button {
  display: block;
  height: 28px;
  width: 163px;
  border: 0 none;
  background: url(../images/mobile-sprites.png) no-repeat 0 -305px;
  font: bold 16px/28px Arial, Helvetica, sans-serif;
  color: #fff;
  text-align: center;
  padding: 0;
  float: right;
  cursor: pointer;
}
.checkout-form .aspNetDisabled .button {
  background: #666;
}
.checkout-form .buttonRight .button {
  float: right;
}
.checkout-form .button.payNow {
  float: right;
  margin: -9px 0 0 0;
}
.checkout-form .buttonBottom {
  padding-top: 86px;
}
.checkout-form .serviceCenter label {
  width: 99%;
  font-weight: normal;
}
.checkout-form .serviceCenter li {
  /*padding-top: 10px;*/
  list-style: none;
}
.checkout-form .serviceCenter p {
  font-size: small;
}
.preferedFitmentPanel {
  margin-top: 1.4em;
}
.preferredFitmentRadioButtonList input {
  margin: 8px;
}
.checkout-form .preferredFitmentRadioButtonList label {
  float: none;
  vertical-align: top;
  display: inline;
}
.preferredFitmentDateCalendar {
  width: 240px;
  padding: 0 30px;
  float: left;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain {
  border-color: #ccc;
  border-radius: 0 0 10px 10px;
}
.preferredFitmentDateCalendar .RadCalendar table {
  border-spacing: 2px;
  border-collapse: separate;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar {
  background: #534C46;
  font-weight: bold;
  background: -webkit-gradient(left top, left bottom, color-stop(0%, #534C46), color-stop(100%, #1F1C1A));
  background: linear-gradient(to bottom, #534C46 0, #1F1C1A 100%);
  padding: 0 20px;
  height: 35px;
  border: 0;
  border-radius: 10px 10px 0 0;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcTitle {
  font: 13px/35px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  color: #fff;
  font-weight: bold;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcPrev,
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcNext {
  background: url(/images/arrows.png) no-repeat scroll 0 0 transparent;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcNext,
.preferredFitmentDateCalendar.disabled .RadCalendar .rcTitlebar .rcNext:hover {
  background-position: 0 0;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcPrev,
.preferredFitmentDateCalendar.disabled .RadCalendar .rcTitlebar .rcPrev:hover {
  background-position: 0 -15px;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcNext:hover {
  background-position: 0 -30px;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcPrev:hover {
  background-position: 0 -45px;
}
.preferredFitmentDateCalendar.disabled a {
  cursor: default;
}
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcFastPrev,
.preferredFitmentDateCalendar .RadCalendar .rcTitlebar .rcFastNext {
  display: none;
}
.preferredFitmentDateCalendar .RadCalendar .rcRow td {
  border: 0 none;
  padding: 3px 5px;
  border-radius: 3px;
  background: #d9d9d9;
  color: #000;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow a,
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow span {
  color: #000;
}
.preferredFitmentDateCalendar .RadCalendar .rcRow td.rcOtherMonth {
  background: #f6f6f6;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcOtherMonth a,
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcOtherMonth span {
  color: #666;
}
.preferredFitmentDateCalendar .RadCalendar .rcRow td.rcOutOfRange {
  background: #fff;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcOutOfRange a,
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcOutOfRange span {
  color: #ccc;
}
.preferredFitmentDateCalendar .RadCalendar .rcRow td.rcHover {
  background: #F56120;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcHover a,
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcHover span {
  color: #FFF;
}
.preferredFitmentDateCalendar .RadCalendar .rcRow td.rcSelected {
  background: #DE7209;
}
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcSelected a,
.preferredFitmentDateCalendar .RadCalendar .rcMain .rcRow td.rcSelected span {
  color: #FFF;
}
.preferredFitmentDateCalendar td[role=gridcell]:not(.k-state-disabled) {
  background: #d9d9d9;
}
.preferredFitmentTime .preferredFitmentTimePicker {
  width: 100%;
}
.preferredFitmentTime {
  width: 240px;
  padding: 0 30px;
  float: right;
}
.checkout-form .serviceCenter .preferredFitmentDateCalendar label,
.checkout-form .serviceCenter .preferredFitmentTime label {
  font-weight: bold;
  float: none;
}
.preferredFitmentTime img {
  display: block;
  margin: 0 auto;
}
.preferredFitmentTimePicker {
  width: 100px;
  display: inline-block;
  vertical-align: top;
}
.serviceCentreList {
  padding: 0 0 0 0;
}
.checkout-form .section.step3 .RadPicker {
  float: left;
  margin-right: 15px;
}
.checkout-form .section.step3 .newListSelected.small {
  float: left;
}
.checkout-form .section.step3 .step3 {
  float: left;
  margin-left: 41px;
}
.checkout-form h2 {
  font-weight: bold;
  margin: 0px 0 5px;
}
.checkout-form p {
  margin-bottom: 0;
}
.checkout-form p.checkoutInstruction {
  width: 374px;
  top: -60px;
  left: 0;
}
.checkout-form p.checkoutInstruction span {
  color: red;
}
.checkout-form p.checkoutInstructionTop {
  width: 374px;
  top: -60px;
  left: 0;
}
.checkout-form p.checkoutInstructionTop span {
  color: red;
}
.checkout-form p.checkoutCompetition {
  width: 385px;
  position: absolute;
  top: -60px;
  left: 0;
  display: none;
}
.checkout-form p.checkoutCompetition img {
  width: 70px;
}
.checkout-form p.checkoutCompetition a {
  color: #00B5FB;
  font-weight: bold;
  position: inherit;
  padding-top: 10px;
  padding-left: 10px;
}
.checkout-form p.checkoutCompetitionPayment {
  width: 385px;
  position: absolute;
  top: -110px;
  left: 0;
  display: none;
}
.checkout-form p.checkoutCompetitionPayment img {
  width: 70px;
}
.checkout-form p.checkoutCompetitionPayment a {
  color: #FF179E;
  font-weight: bold;
  position: inherit;
  padding-top: 10px;
  padding-left: 10px;
}
.checkout-form textarea {
  border: none;
  padding: 4px 4px 4px 10px;
  float: left;
  margin-right: 12px;
  color: #272525;
  height: 40px;
  background-color: #eeeeee;
  width: 315px;
  height: 110px;
}
.checkout-form input[type="text"],
.checkout-form .newListSelected,
.checkoutCart .tyrePanel .newListSelected {
  border: none;
  padding: 4px 4px 4px 10px;
  float: left;
  margin-right: 12px;
  color: #272525;
  height: 20px;
  background-color: #eeeeee;
}
.checkout-form .formField {
  float: left;
  position: relative;
  width: 265px;
}
.checkout-form .newListSelected,
.checkoutCart .tyrePanel .newListSelected {
  background: url(../images/sprites_checkout.png) no-repeat 100% -78px #eeeeee;
}
.checkout-form label {
  float: left;
  font-weight: bold;
  display: block;
  line-height: 28px;
}
.checkout-form .deliveryOptions label {
  float: none;
  font-weight: normal;
  width: auto;
  display: block;
  line-height: 20px;
  margin-left: 25px;
  margin-bottom: 5px;
}
.checkout-form .deliveryOptions table input {
  float: left;
}
.checkout-form input[type="text"] {
  width: 236px;
  margin-top: 1px;
}
.checkout-form input[type="radio"] {
  vertical-align: middle;
  height: 13px;
  padding: 0;
}
/*.serviceCenter td {vertical-align:middle;}*/
.checkout-form #securePayMessage {
  font-size: 9px;
}
.checkout-form .newListSelected {
  width: 236px;
}
.checkout-form .locationStep .newListSelected .fieldLabel {
  display: none;
}
.checkout-form .newListSelected.small {
  width: 105px;
}
.checkout-form ul.newList,
.checkoutCart .tyrePanel ul.newList {
  left: 0 !important;
  top: 29px !important;
  box-shadow: none;
  border-radius: 0;
  border: solid 1px #eeeeee;
  width: 251px;
  background-color: #fdfdfd;
  padding: 0 !important;
  z-index: 1000;
}
.checkout-form ul.newList li,
.checkoutCart .tyrePanel ul.newList li {
  padding: 5px !important;
}
.checkout-form ul.newList li:hover,
.checkoutCart .tyrePanel ul.newList li:hover {
  background-color: #939598;
}
.checkout-form ul.newList li a,
.checkoutCart .tyrePanel ul.newList li a {
  transition: none;
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
}
.checkout-form ul.newList a:hover,
.checkoutCart .tyrePanel ul.newList li a:hover {
  background: #939598;
}
.checkout-form .newListSelected.small ul.newList {
  width: 117px;
}
.checkout-form .fieldLabel,
.checkout-form .selectedTxt {
  min-height: 15px;
  padding: 3px 0;
}
.checkout-form #banktransfer {
  display: none;
  margin-bottom: 20px;
  height: 410px;
}
.checkout-form #banktransfer .button input {
  width: 178px;
  height: 42px;
  padding-left: 10px;
}
.checkout-form #finance {
  display: none;
  margin-bottom: 20px;
  height: 340px;
}
.checkout-form #finance .button input {
  width: 178px;
  height: 42px;
  padding-left: 10px;
}
.checkout-form #paypal {
  display: none;
  margin-bottom: 20px;
  height: 60px;
}
.checkout-form #paypal .button input {
  width: 138px;
  height: 42px;
}
.checkout-form h2.heading {
  width: 383px;
  display: block;
  border-bottom: solid 2px #f6984e;
  padding-bottom: 5px;
  margin-bottom: 4px;
  font: 14px/24px Georgia, "Times New Roman", Times, serif;
  color: #333;
}
.checkout-form h2.heading strong {
  font-family: Arial, Helvetica, sans-serif;
}
.checkout-form h2.locator {
  display: block;
  border-bottom: solid 2px #f6984e;
  padding-bottom: 5px;
  margin-bottom: 4px;
  font: 700 14px/24px 'Arial', 'Helvetica', sans-serif;
  color: #222;
}
.checkout-form h2.locator strong {
  font-family: Arial, Helvetica, sans-serif;
}
.checkout-form .req {
  font-size: 12px;
  color: #666;
  margin-bottom: 9px;
}
.checkout-form .section {
  position: relative;
}
.section .row {
  width: 64.5868%;
}
.checkout-form .serviceCenter {
  width: 100%;
}
.section.step3 .row {
  width: 100%;
}
.checkout-form .disabled {
  opacity: 0.3;
  filter: alpha(opacity=30);
}
.checkout-form .disabled h2.heading {
  border-color: #d5d5d5;
}
.checkout-form .disabled .row input[type="button"] {
  background: #c3c3c3 !important;
  cursor: default;
}
.checkout-form .extendedAddress {
  display: none;
}
.checkout-form .success {
  background: url(../images/sprites_checkout.png) no-repeat -435px 11px #ecfcdb;
  padding: 7px 8px 0 40px;
  font-size: 11px;
  margin-bottom: 10px;
}
.checkout-form .successTop {
  width: 132px;
  min-height: 66px;
  padding: 7px 8px 0 3px;
  font-size: 11px;
  position: absolute;
  right: 0;
  top: 3px;
}
.checkout-form .successTop strong {
  font-size: 12px;
  display: block;
}
.checkout-form .successTop b {
  font-weight: bold;
  display: block;
  margin-bottom: 1px;
}
.checkout-form .successTop p {
  display: block;
  float: left;
}
.checkout-form p.contactUs {
  position: absolute;
  bottom: 120px;
  right: 5px;
  width: 179px;
  color: #e98310;
}
.checkout-form .step2 .success {
  top: 40px;
}
.checkoutInstruction {
  width: 130px;
  height: 55px;
  background: #F6F6F6;
  color: #999999;
  float: right;
  font-weight: bold;
  padding: 11px 25px;
  text-align: center;
  margin-top: -45px;
}
.checkoutInstruction > strong {
  clear: both;
  color: #F5791F;
  display: block;
  font-weight: 700;
}
.checkoutInstructionTop {
  width: 130px;
  height: 55px;
  background: #F6F6F6;
  color: #999999;
  float: right;
  font-weight: bold;
  padding: 11px 25px;
  text-align: center;
  margin-top: -45px;
}
.checkoutInstructionTop > strong {
  clear: both;
  color: #F5791F;
  display: block;
  font-weight: 700;
}
.checkout-form .fail {
  width: 145px;
  height: 83px;
  background: url(../images/sprites_checkout.png) no-repeat -466px -290px #FFA1C0;
  padding: 9px 4px 0 40px;
  font-size: 10px;
  position: absolute;
  right: 0;
  top: 130px;
}
.checkout-form .fail strong {
  font-size: 12px;
}
.checkout-form .fail b {
  font-weight: bold;
}
.checkout-form .step2 .fail {
  top: 32px;
}
.checkout-form a.redeemCoupon {
  display: block;
  text-decoration: underline;
  margin: 0 0 15px 0;
  color: #de7209;
  font-size: 13px;
  font-weight: bold;
}
.checkout-form a.redeemCoupon:hover {
  text-decoration: none;
}
.checkout-form .redemptionCode {
  margin: 10px 0;
}
.checkout-form .redemptionCode label,
.checkout-form .redemptionCode span {
  font-weight: bold;
  display: block;
  margin-bottom: 3px;
  float: none;
  width: auto;
}
.checkout-form .redemptionCode input[type="text"] {
  background-color: #fff;
  padding: 4px;
  margin-right: 12px;
  color: #272525;
  border: solid 2px #e9e9e9;
  -webkit-border-radius: 4px;
}
.redeemVoucher {
  margin-bottom: 10px;
}
.redemptionChoices {
  border: 1px solid #ccc;
  background: #eee;
  padding: 10px;
  margin-bottom: 10px;
}
.redemptionChoices p {
  margin: 10px 0;
}
.redemptionChoices p a:before {
  content: '\00bb';
  padding-right: 4px;
  vertical-align: text-bottom;
}
.whyChooseDealersLink a {
  display: block;
  line-height: 30px;
  padding-left: 40px;
  margin-bottom: 20px;
}
#fitment-centre h2 {
  font-size: 2em;
}
#fitment-centre ol {
  list-style: decimal;
  padding-left: 20px;
  margin-left: 10px;
}
#fitment-centre ol li {
  margin-bottom: 7px;
}
.customerInformation {
  float: left;
  width: 40%;
  line-height: 1.5;
}
.shippingInformation {
  float: left;
  width: 60%;
  line-height: 1.5;
}
.purchaseSummary strong {
  margin-bottom: 5px;
}
.shippingInformation a {
  font-weight: 700;
}
.shippingInformation dl.preferredFitmentDate {
  margin: 1em 0;
}
.shippingInformation dl.preferredFitmentDate dt,
.shippingInformation dl.preferredFitmentDate dd {
  display: inline-block;
  width: 509%;
}
.summaryMessage {
  padding-top: 15px;
  clear: both;
}
.content .checkout-form .redemptionCode a {
  display: block;
  height: 31px;
  width: 85px;
  border: 0 none;
  border-radius: 3px;
  background-color: #277cc0;
  font: bold 12px/30px Arial, Helvetica, sans-serif;
  color: #fff;
  text-align: center;
  padding: 0;
  margin: 0;
  float: left;
  transition: none;
}
.checkout-form .redemptionCode a:hover {
  background-color: #1469ae;
  text-decoration: none;
}
.checkout-form .redemptionCode .instruction {
  display: block;
  clear: left;
  font-size: 10px;
  width: 376px;
  color: #acacac;
  font-style: italic;
  margin-top: 2px;
}
.checkout-form .redemtionCodeSuccess {
  background: #ecfcdb;
  margin-bottom: 10px;
  border-radius: 7px;
}
.checkout-form .redemtionCodeSuccess .copy {
  height: 40px;
  font-weight: bold;
  font-size: 12px;
  padding-left: 58px;
  margin-top: 21px;
  background: url(../images/sprites_checkout.png) no-repeat -455px 7px;
}
.checkout-form .redemtionCodeSuccess .cinema {
  float: left;
  width: 100px;
  background: url(../images/sprites_checkout.png) no-repeat -455px 7px;
  font-weight: bold;
  font-size: 12px;
  width: 520px;
  height: 40px;
  padding: 10px 10px 10px 58px;
  margin-top: 21px;
}
.checkout-form .redemtionCodeSuccess .newTotal {
  float: right;
}
.checkout-form .redemtionCodeSuccess .newTotal span {
  display: block;
  font: 32px/40px Arial, Helvetica, sans-serif;
  font-weight: bold;
  margin: 0;
  padding: 0 10px;
  text-align: right;
}
.checkout-form .section .error {
  right: 261px;
  top: 2px;
}
.checkout-form .customerDeliveryDetails .error {
  right: 15px;
  top: 2px;
}
.checkout-form .payment span {
  height: 34px;
  display: block;
  float: left;
}
.checkout-form .payment span input {
  float: left;
  display: block;
  margin-top: 10px;
}
.checkout-form .payment span img {
  float: left;
  display: block;
  margin-left: 5px;
}
.checkout-form .payment .creditCard {
  background-position: -244px 0;
}
.checkout-form .payment .paypal {
  width: 68px;
  background-position: -452px 0;
  margin-left: 17px;
}
.checkout-form .googletrustedstore {
  margin-top: 20px;
}
.checkout-form .googletrustedstore .googletrustedlogo {
  float: left;
  margin-right: 10px;
}
.checkout-form .googletrustedstore .googletrusteddetail {
  color: #7e7e7e;
  font-size: 12px;
  line-height: 40px;
}
.checkout-form .payment .eft {
  width: 155px;
  margin-left: 17px;
}
.checkout-form .payment .finance {
  width: 142px;
  margin-left: 17px;
  color: #000080;
  font-style: italic;
  font-size: 13px;
  padding-top: 1px;
}
/*.checkout-form .payment, .checkout-form .buttonRight img {display:none;}*/
/*hide credit card info*/
/* clearfix */
.clearfix:before,
.clearfix:after,
.here-is-how-it-works:before,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:before,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:before,
.here-is-how-it-works .reasons:after,
.free-benefits:before,
.free-benefits:after,
.free-benefits .benefits:before,
.free-benefits .benefits:after,
.tyrePanels:before,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:before,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  content: "";
  display: table;
}
.clearfix:after,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:after,
.free-benefits:after,
.free-benefits .benefits:after,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  clear: both;
}
ul#skipMenu,
.hide {
  position: absolute;
  height: 0;
  overflow: hidden;
  top: -100px;
}
.left {
  float: left;
}
.right {
  float: right;
}
.clear {
  clear: both;
  height: 0;
  overflow: hidden;
  /*for IE6*/
}
.clearRight {
  height: 0;
  clear: right;
  overflow: hidden;
  /*for IE6*/
}
.clearLeft {
  height: 0;
  clear: left;
  overflow: hidden;
  /*for IE6*/
}
.backing {
  background: url(../images/backing.gif) repeat-x 0 0;
}
.wrapper {
  width: 992px;
  margin: 0 auto;
  padding: 0 16px;
}
.content {
  width: 992px;
  margin: 0 auto;
}
.content.k-window-content {
  width: auto;
}
.content.iframe {
  margin: 0;
}
.content.facebook {
  margin: 0;
  width: auto;
}
.content.facebook section {
  float: none;
  /*width:643px;*/
  width: auto;
}
/*content header*/
.content header {
  height: 70px;
  padding: 14px 5px;
  width: 992px;
}
.content header #sitelogo {
  display: block;
  float: left;
  padding-top: 7px;
}
.content header #sitelogo h1 {
  margin: 0;
}
.content header #sitelogo .csn-sitelogo {
  background: url("https://tyresales-static.s3-ap-southeast-2.amazonaws.com/tyresales_BLUE.png") no-repeat scroll 0 0 transparent;
  display: block;
  height: 75px;
  text-indent: -9999px;
  width: 231px;
}
.content header .leaderBoard {
  float: right;
  margin-right: 14px;
}
.content section {
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #DDDDDD;
  /*border-radius: 5px 5px 5px 5px;*/
}
.content section {
  float: left;
  margin-bottom: 15px;
  width: 64.8%;
}
.content section > div {
  padding: 5px;
}
.content aside {
  float: right;
  /*min-height: 373px;*/
  width: 33.3%;
  background: none;
  padding-top: 15px;
}
.content aside > div {
  padding: 13px;
  margin-bottom: 16px;
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #DDDDDD;
  /*border-radius: 5px 5px 5px 5px;*/
  min-height: 120px;
}
.content aside ul {
  list-style: none;
}
/*Main Navigation*/
.csn-navigation {
  height: 40px;
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") repeat-x 0 0;
}
ul.navigation,
ul.membership {
  position: relative;
  z-index: 9;
}
ul.navigation ul,
ul.membership ul {
  width: 215px;
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  border: 1px solid #cdcdcd;
  background: #fafafa;
  padding: 15px;
}
ul.navigation ul ul,
ul.navigation ul ul ul,
ul.membership ul ul,
ul.membership ul ul ul {
  top: 0;
  left: 100%;
}
ul.navigation li,
ul.membership li {
  float: left;
  display: inline;
  position: relative;
  z-index: 99;
}
ul.navigation ul li,
ul.membership ul li {
  width: 100%;
  display: block;
}
ul.navigation li li:hover,
ul.membership li li:hover {
  background: none;
}
/* Root Menu */
ul.navigation a,
ul.membership a {
  float: left;
  display: block;
  font: 700 14px/40px Arial, Helvetica, sans-serif;
  color: #ccc;
  text-decoration: none;
  height: 1%;
}
/* 2nd Menu */
ul.navigation li:hover li a,
ul.membership li:hover li a {
  float: none;
  font: 700 11px/15px Arial, Helvetica, sans-serif;
  border-top: 1px solid #e3e3e3;
  background: none!important;
  color: #de7209;
  padding: 5px 10px;
}
/* 2nd Menu Hover Persistence */
ul.navigation li:hover li a:hover,
ul.navigation li:hover li:hover a,
ul.membership li:hover li a:hover,
ul.membership li:hover li:hover a {
  background: #fff !important;
}
/* Hover Function - Do Not Move */
ul.navigation li:hover ul ul,
ul.membership li:hover ul ul {
  display: none;
}
ul.navigation li:hover ul,
ul.membership li:hover ul {
  display: block;
}
/*navigation*/
ul.navigation li:hover {
  background: #313131;
}
ul.navigation li#home:hover {
  background: none;
}
/* Root Menu */
ul.navigation a {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 100% -160px;
  padding: 0 22px 0 8px;
  margin: 0 2px 0 0;
}
ul.navigation a.no-arrow {
  background: none;
}
ul.navigation #new a,
ul.navigation #Li2 a {
  background: none;
}
ul.navigation li#home a {
  width: 52px;
  text-indent: -9999px;
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 8px -120px;
  padding: 0;
}
ul.navigation li#home a:hover {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat -72px -120px;
}
/* Root Menu Hover Persistence */
ul.navigation a:hover,
ul.navigation li:hover a {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 100% -200px;
  color: #fff;
}
ul.navigation a:hover,
ul.navigation li:hover a.no-arrow {
  background: none;
}
/* 2nd Menu */
ul.navigation li:hover li a {
  float: none;
  background: #bbb;
}
/* 2nd Menu Hover Persistence */
ul.navigation li:hover li a:hover,
ul.navigation li:hover li:hover a {
  background: #999;
}
/*mega panel*/
ul.navigation li:hover .menu-panel {
  display: block;
}
ul.navigation li#search .menu-panel .arrow {
  display: none;
}
ul.navigation li#search .menu-panel .menu-links {
  border-top: 1px solid #CDCDCD;
}
ul.navigation li#help .menu-panel .menu-links {
  width: 187px;
}
ul.navigation li#help .menu-panel {
  width: 500px;
}
ul.navigation li#help .menu-panel .menu-links ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
ul.navigation li#help .menu-panel .menu-content {
  background: url("../images/askGreg_sml.jpg") no-repeat scroll right bottom #FFFFFF;
  float: left;
  padding: 0 14px 0 15px;
  width: 253px;
  display: block;
}
ul.navigation li#help .menu-panel .menu-content .menu-title {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 18px;
  line-height: 20px;
}
ul.navigation li#help .menu-panel .menu-title a {
  color: #FF6600;
  font-size: 18px;
  font-style: normal;
  font-weight: bold;
  text-decoration: none;
  padding: 0;
  margin: 0;
  background: none;
}
ul.navigation li#help .menu-panel .content {
  float: left;
  width: 130px;
}
ul.navigation li#help p.statement a {
  color: #666666;
  font-family: georgia, serif;
  font-size: 13px;
  font-style: italic;
  line-height: 16px;
  text-decoration: none;
  margin: 0;
  padding: 0;
  background: none;
  font-weight: normal;
}
ul.navigation li#help .menu-panel .menu-cta {
  background: #66a210;
  border-radius: 3px 3px 3px 3px;
  color: #FFFFFF;
  float: left;
  font-size: 12px;
  font-weight: bold;
  padding: 5px 0;
  text-align: center;
  text-decoration: none;
  width: 100px;
  transition: none;
  height: 20px;
  margin: 10px 0;
  line-height: 20px;
  display: inline;
}
.menu-panel {
  background: #FAFAFA;
  border: 1px solid #CDCDCD;
  display: none;
  position: absolute;
  top: 40px;
  left: 0;
  z-index: 20;
  width: 880px;
}
.menu-panel .key-lines {
  border-left: 1px dotted #CDCDCD;
  float: left;
  margin: 25px 0 10px 15px;
  padding-left: 15px;
  width: 600px;
}
.menu-panel .menu-links {
  position: relative;
  top: 0;
  border: 0 none;
  float: left;
  padding: 15px;
  width: 187px;
  background: #fafafa;
  height: 314px;
}
#help .menu-panel .menu-links,
#membership .menu-panel .menu-links {
  width: 217px;
}
.menu-panel .menu-links ul {
  display: block!important;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.menu-panel .menu-links li {
  border-top: 1px solid #E3E3E3;
  float: none;
}
.menu-panel .menu-links .first {
  border-top: 0 none;
}
ul.navigation li:hover .menu-panel .menu-links a,
.menu-panel .menu-links a {
  color: #666666;
  display: block;
  font-size: 11px;
  padding: 8px 10px;
  font-weight: normal;
  text-decoration: none;
  margin: 0;
  float: none;
  height: auto;
  line-height: 16px;
  border: 0 none;
}
ul.navigation li:hover .menu-panel .menu-links .vip a,
.menu-panel .menu-links .vip a {
  color: #DE7209;
  font-weight: bold;
}
ul.navigation li:hover .menu-panel .menu-links a:hover,
.menu-panel .menu-links a:hover {
  background: none repeat scroll 0 0 #FFFFFF;
}
.menu-panel .menu-content {
  float: left;
  background: #fff;
  padding-top: 10px;
  width: 660px;
}
.menu-panel .menu-title {
  color: #333333;
  font-weight: bold;
}
.menu-panel .menu-content .category {
  float: left;
  padding: 0 0 0 10px;
  width: 180px;
}
ul.navigation li:hover .menu-panel .menu-content .category ul,
.menu-panel .menu-content .category ul {
  background: none repeat scroll 0 0 #FFFFFF;
  position: relative;
  top: 0;
  display: block;
  width: auto;
  border: 0 none;
  padding: 0;
}
.menu-panel .menu-content .browse-tyre-category {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: #E5E5E5;
  -o-border-image: none;
     border-image: none;
  border-style: solid;
  border-width: 0 1px;
  margin: 0 15px;
  padding: 0 24px;
  height: 320px;
}
.menu-panel .category .menu-title,
#accessories .menu-title {
  color: #DE7209;
  font-size: 15px;
  line-height: 16px;
  margin: 0 0 4px;
}
.category .menu-title em,
#accessories .menu-title em {
  background: url("../images/Popoutsprite.png") no-repeat scroll 3px -231px transparent;
  color: #666666;
  font-family: georgia, serif;
  font-size: 12px;
  font-style: italic;
  font-weight: normal;
  padding-left: 17px;
}
.category ul {
  list-style-type: none;
  margin: 0;
  overflow: hidden;
  padding: 0;
}
ul.navigation li:hover .category li,
ul.navigation .category li {
  float: left;
  margin: 5px 7px 5px 0;
  width: 80px!important;
}
ul.navigation li:hover .category li.alt,
ul.navigation .category li.alt {
  margin-right: 0;
}
.category .more-link {
  margin-top: 15px;
  width: auto;
}
ul.navigation li:hover .category a,
ul.navigation .category a:hover,
ul.navigation .category a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-repeat: no-repeat;
  color: #666666;
  display: block;
  padding: 40px 0 0 0;
  text-align: center;
  text-decoration: none;
  float: none;
  height: auto;
  font: 12px/15px arial;
  border: 0 none;
  margin: 0;
}
ul.navigation li:hover .category a:hover,
ul.navigation .category a:hover {
  text-decoration: underline;
  color: #000;
}
ul.navigation li:hover .category .passenger a,
.category .passenger a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: 1px -132px !important;
}
ul.navigation li:hover .category .suv4wd a,
.category .suv4wd a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -79px -1px !important;
}
ul.navigation li:hover .category .performance a,
.category .performance a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -160px -64px !important;
}
ul.navigation li:hover .category .van a,
.category .van a {
  background-image: url("../images/mega-  menu-sprite-vivid.jpg") !important;
  background-position: -78px -63px !important;
}
ul.navigation li:hover .category .ford a,
.category .ford a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -240px 0 !important;
}
ul.navigation li:hover .category .volkswagen a,
.category .volkswagen a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -320px -2px !important;
}
ul.navigation li:hover .category .toyota a,
.category .toyota a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -240px -56px !important;
}
ul.navigation li:hover .category .holden a,
.category .holden a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -320px -2px !important;
}
ul.navigation li:hover .category .mazda a,
.category .mazda a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -320px -177px !important;
}
ul.navigation li:hover .category .nissan a,
.category .nissan a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -322px -60px !important;
}
ul.navigation li:hover .category .honda a,
.category .honda a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -240px -113px !important;
}
ul.navigation li:hover .category .hyundai a,
.category .hyundai a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -320px -115px !important;
}
ul.navigation li:hover .category .mitsubishi a,
.category .mitsubishi a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -240px -175px !important;
}
ul.navigation li:hover .category .economy a,
.category .economy a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -80px -315px !important;
}
ul.navigation li:hover .category .handling a,
.category .handling a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: 0 -192px !important;
}
ul.navigation li:hover .category .wetconditions a,
.category .wetconditions a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -162px -190px !important;
}
ul.navigation li:hover .category .comfort a,
.category .comfort a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -80px -192px !important;
}
ul.navigation li:hover .category .durability a,
.category .durability a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -80px -254px !important;
}
ul.navigation li:hover .category .allseason a,
.category .allseason a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: -159px -254px !important;
}
ul.navigation li:hover .category .greeneco a,
.category .greeneco a {
  background-image: url("../images/mega-menu-sprite-vivid.jpg") !important;
  background-position: 0 -317px !important;
}
ul.navigation li:hover .category .category a:hover,
.category a:hover {
  color: #333333;
  text-decoration: underline;
}
ul.navigation li:hover .category .more-link a,
.category .more-link a {
  background: none repeat scroll 0 0 transparent !important;
  display: inline;
  font-weight: bold;
  text-decoration: underline;
}
/*menu temp patch*/
.menu-panel {
  width: 217px;
}
.menu-panel .menu-links {
  height: auto;
}
.menu-panel .menu-content {
  display: none;
}
/*membership*/
ul.membership {
  float: right;
}
ul.membership a {
  padding: 0 23px 0 8px;
  margin: 0;
}
ul.membership ul {
  left: -563px;
  width: 992px;
  background: #fff;
}
ul.membership {
  float: right;
}
ul.navigation #network a {
  padding: 0 23px 0 8px;
  margin: 0;
}
ul.navigation li#network a {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 100% -40px;
}
ul.navigation li#network a:hover {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 100% -80px;
}
ul.navigation #network ul {
  left: -740px;
  width: 992px;
  background: #fff;
}
ul.navigation li#network ul a.carsales-network,
ul.membership li#network:hover ul a.carsales-network {
  display: block;
  float: left;
  width: 222px;
  height: 62px;
  background: url(../images/network.gif) no-repeat 0 0 !important;
  border-top: 0 none;
  padding: 5px 0;
}
ul.navigation li#network ul .key-lines {
  border-left: 1px dotted #cdcdcd;
  float: left;
  margin: 25px 0 10px 15px;
  padding-left: 15px;
  width: 600px;
  font-weight: 700;
}
ul.navigation li#network ul li {
  display: block;
  float: left;
  width: 304px;
  background: none;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  margin: 0 10px 20px 0;
}
ul.navigation li#network ul li.last {
  margin: 0 0 20px 0;
}
ul.navigation li#network ul li:first-child {
  width: 900px;
  float: none;
  height: 72px;
  border: 0 none;
  margin: 0;
}
ul.navigation li#network ul li a {
  color: #666;
  padding: 5px;
  overflow: hidden;
  display: block;
  font: 11px/12px Arial;
  border-top: 0 none;
  height: auto;
  background: none;
}
ul.navigation li#network ul li.view-all {
  border: none;
  float: right;
  margin: 0;
}
ul.navigation li#network ul li a.view-all {
  float: right;
  font-size: 11px;
  color: #333;
  margin-right: 3px;
  font-weight: bold;
  text-decoration: underline;
}
ul.navigation li#network ul li a:hover {
  background: none;
  color: #000;
}
ul.navigation li#network ul li a .logo {
  float: left;
  margin: 0;
  text-indent: -9999px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
ul.navigation li#network ul li a .nav-network__container {
  float: left;
  position: relative;
  height: 55px;
  width: 124px;
}
ul.navigation li#network ul li.bikesales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -6px -79px;
  width: 75px;
  height: 26px;
}
ul.navigation li#network ul li.boatsales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -145px -79px;
  width: 73px;
  height: 26px;
}
ul.navigation li#network ul li.caravancampingsales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -287px -76px;
  width: 97px;
  height: 31px;
}
ul.navigation li#network ul li.trucksales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -5px -205px;
  width: 65px;
  height: 33px;
}
ul.navigation li#network ul li.farmmachinerysales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -138px -206px;
  width: 102px;
  height: 34px;
}
ul.navigation li#network ul li.carsales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -428px -72px;
  width: 67px;
  height: 30px;
}
ul.navigation li#network ul li.constructionsales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -283px -208px;
  width: 105px;
  height: 30px;
}
ul.navigation li#network ul li.tyresales a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -430px -142px;
  width: 67px;
  height: 30px;
}
ul.navigation li#network ul li.homesales a .logo {
  background: url(/images/network.gif) no-repeat 0 -172px;
}
ul.navigation li#network ul li.motoring a .logo {
  background: url(../images/logos/carsales-network-logos-sprite-small-v2.png) no-repeat -286px -152px;
  width: 99px;
  height: 20px;
}
ul.navigation li#network ul li.quicksales a .logo {
  background: url(../images/network.gif) no-repeat -248px -172px;
}
ul.navigation li#network ul li.redbook a .logo {
  background: url(/images/logos/redbook_logo.gif);
  background-size: contain;
  margin-left: -10px;
}
ul.navigation li#network ul li a .content {
  border-left: 1px solid #EBEBEB;
  border-right: 0 none;
  display: block;
  float: left;
  font-size: 11px;
  height: 45px;
  line-height: 12px;
  overflow: hidden;
  padding: 5px 0 5px 5px;
  width: 159px;
}
/*my tyres*/
ul.membership li#myTyres a {
  background: url("{{asset('public/front/vehicles/images/spritesNavigation.png')}}") no-repeat 0 -240px;
  color: #ccc;
  font: 700 11px/40px Arial, Helvetica, sans-serif;
  padding: 0 0 0 35px;
}
/* 2nd Menu */
ul.membership li:hover li a,
ul.membership li.iehover li a {
  float: none;
  background: #bbb;
}
/* 2nd Menu Hover Persistence */
ul.membership li:hover li a:hover,
ul.membership li:hover li:hover a,
ul.membership li.iehover li a:hover,
ul.membership li.iehover li.iehover a {
  background: #999;
}
/*header*/
.header {
  height: 90px;
  background: #fff;
  padding: 15px 0;
  border-left: 16px solid #fff;
  border-right: 16px solid #fff;
}
.header #sitelogo {
  float: left;
  display: block;
}
.header #sitelogo h1 {
  margin: 0;
}
.header #sitelogo .csn-sitelogo {
  background: url(https://tyresales-static.s3-ap-southeast-2.amazonaws.com/tyresales_BLUE.png) no-repeat 0 0;
  display: block;
  height: 90px;
  width: 235px;
  text-indent: -9999px;
}
.csn-sitelogo img {
  display: none;
}
.header .leaderBoard {
  float: right;
  min-width: 500px;
  min-height: 80px;
}
/*searchContainer*/
.searchContainer {
  background: #fff;
  padding: 15px 0;
  border-left: 16px solid #fff;
  border-right: 16px solid #fff;
  margin: 0 0 15px 0;
}
.searchContainer #defaultContent_homepageSearchContainer_UpdatePanel {
  position: relative;
  z-index: 2;
}
.searchContainer .searchBanner {
  position: relative;
  z-index: 1;
}
.searchContainer .searchBanner .sfContentBlock {
  background-color: #000;
  padding: 10px 10px 4px;
}
.searchOptions {
  float: left;
  width: 436px;
  height: 387px;
  border: 4px solid #de7209;
  border-radius: 4px;
  padding: 0 13px;
}
section .searchOptions {
  width: 100%;
  height: auto;
  box-sizing: border-box;
  border-radius: 0;
  border: 0 none;
  border-bottom: 2px solid #de7209;
  padding: 0 0 15px 0;
  margin: 0 0 15px 0;
}
.searchOptions h2 {
  font: italic 14px/30px Georgia, "Times New Roman", Times, serif;
  color: #000;
  margin: 20px 0 5px 0;
}
section .searchOptions h2 {
  display: none;
}
.searchOptions h2 strong {
  font: 20px/40px Arial, Helvetica, sans-serif;
  color: #de7209;
  background: url(../images/arrow_bullet.gif) no-repeat 100% 50%;
  padding: 0 15px 0 0;
  margin: 0 5px 0 0;
}
.searchOptions .tabs ul.tabNavigation li {
  display: block;
  float: left;
  margin: 0 0 0 4px;
}
.searchOptions input[type="submit"] {
  background: url("../images/sprites.png") no-repeat scroll -20px -10px;
  border: medium none;
  border-radius: 3px;
  color: #FFFFFF;
  display: block;
  float: right;
  font: bold 1px/1px Arial;
  height: 40px;
  padding: 0;
  cursor: pointer;
  width: 258px;
  margin: 10px 0 0;
}
.searchOptions input[type="submit"]:hover {
  background: url("../images/sprites.png") no-repeat scroll -20px -50px;
}
.searchOptions .searchButton {
  background: url("../images/sprites.png") no-repeat scroll -164px -10px;
  border: medium none;
  border-radius: 3px;
  color: #FFFFFF;
  display: block;
  float: right;
  font: bold 1px/1px Arial;
  height: 40px;
  padding: 0;
  cursor: pointer;
  width: 114px;
  margin: 15px 0 0 0;
  /*remove css transitions*/
  transition: none;
  text-indent: -9999px;
}
.searchOptions .searchButton:hover {
  background-position: -164px -50px;
}
.searchOptions #size .searchButton {
  margin-top: 9px;
}
.tabPanel {
  position: relative;
  font: 14px/14px Arial, Helvetica, sans-serif;
  color: #000;
  text-align: right;
  padding: 15px 0 0 0;
}
.tabPanel .activeArrow {
  position: absolute;
  top: 0;
  left: 0;
  width: 12px;
  height: 6px;
  background: url(../images/sprites.png) no-repeat 0 -10px;
}
.tabPanel#vehicle {
  height: 270px;
}
.tabPanel#size {
  height: 270px;
}
.tabPanel#brand {
  height: 270px;
}
section .searchOptions .tabPanel#vehicle,
section .searchOptions .tabPanel#size,
section .searchOptions .tabPanel#brand {
  height: auto;
  clear: both;
}
section .searchOptions .tabPanel#size {
  height: 280px;
}
#vehicle .activeArrow {
  left: 58px;
}
#size .activeArrow {
  left: 194px;
}
#brand .activeArrow {
  left: 332px;
}
.tabPanel .newListSelected {
  width: 434px;
  text-align: left;
}
section .tabPanel .newListSelected {
  width: 144px;
  text-align: left;
}
.tabPanel ul.newList {
  width: 424px;
  height: auto !important;
  max-height: 200px;
}
section .tabPanel .searchForm ul.newList {
  width: 134px;
}
.tabPanel .searchForm .searchTyres {
  margin: 0 0 0 177px;
}
#vehicle.tabPanel .searchForm .searchTyres {
  margin: 0 0 20px 177px;
}
.searchBanner {
  float: right;
  width: 484px;
  height: 393px;
  border: 1px solid #7e7e7e;
}
.tabPanel#size .searchField,
.tabPanel#brand .searchSelect {
  width: 205px;
  float: left;
  margin: 17px 0 0;
  padding: 0 0 10px 0;
  position: relative;
}
section .tabPanel#size .searchField,
section .tabPanel#brand .searchSelect {
  width: 298px;
  margin: 5px 0 0;
}
.tabPanel#size .searchField.odd,
.tabPanel#brand .searchSelect.odd {
  margin: 17px 25px 0 0;
}
section .tabPanel#size .searchField.odd,
section .tabPanel#brand .searchSelect.odd {
  margin: 5px 25px 0 0;
}
.tabPanel#size .newListSelected,
.tabPanel#brand .newListSelected {
  width: 203px;
  text-align: left;
}
section .tabPanel#size .newListSelected,
section .tabPanel#brand .newListSelected {
  width: 296px;
}
.tabPanel#size .newListSelected .fieldLabel,
.tabPanel#brand .newListSelected .fieldLabel {
  position: absolute;
  top: -25px;
  left: -5px;
}
.tabPanel#size ul.newList,
.tabPanel#brand ul.newList {
  width: 193px;
  height: 200px !important;
}
.tabPanel#size .checkboxes label,
.tabPanel#brand .checkboxes label {
  display: inline;
  font-weight: bold;
  padding-right: 12px;
  font-size: 12px;
  float: left;
}
.tabPanel#size .checkboxes input[type="checkbox"],
.tabPanel#brand .checkboxes input [type="checkbox"] {
  position: relative;
  right: 0px;
  top: 2px;
}
/*search options loading overlay*/
.overlay-mask {
  background: url(../images/loading.gif) no-repeat 50% 50% #fff;
  background-color: rgba(255, 255, 255, 0.4);
}
.searchContainer .searchOptions .overlay-mask {
  display: none;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1000;
}
/* search page*/
.searchMod {
  padding-top: 0!important;
  margin: 0 auto;
  width: 96%;
}
.searchMod .tabNavigation {
  border-bottom: 2px solid #DE7209;
  margin: 5px auto 16px auto;
  padding: 0;
}
.searchMod .tabNavigation li {
  float: left;
  list-style: none outside none;
  margin-left: 5px;
  width: 202px;
}
.searchMod .tabNavigation li:first-child {
  margin-left: 0px;
  width: 201px;
}
.searchMod .tabNavigation li a {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 #F9F9F9;
  border-color: #D0D0D0;
  -o-border-image: none;
     border-image: none;
  border-radius: 5px 5px 0 0;
  border-style: solid;
  border-width: 1px 1px 0;
  color: #333333;
  float: left;
  font-size: 12px;
  font-weight: bold;
  text-decoration: none;
  width: 100%;
  height: 32px;
  line-height: 38px;
}
.searchMod .tabNavigation li a:hover,
.searchMod .tabNavigation li a.selected {
  background: none repeat scroll 0 0 #DE7209;
  border-color: #DE7209;
  color: #FFFFFF;
}
.searchMod .tabNavigation li a span {
  font: italic bold 14px/1em Georgia, "Times New Roman", Times, serif;
}
.searchMod .searchRow:before,
.searchMod .searchRow:after {
  content: "";
  display: table;
}
.searchMod .searchRow:after {
  clear: both;
}
.searchMod .searchRow {
  padding-bottom: 14px;
}
.searchMod .searchRow .searchDiv {
  display: inline-block;
  width: 100%;
}
.searchMod .searchRow .searchDiv #sizeSearchButton {
  width: 100%;
}
.searchMod .searchRow .searchButton-div {
  float: left;
}
.searchMod .searchRow .searchButton-div #brandSearchButton {
  width: 100%;
}
#searchSizeDiv {
  position: relative;
}
.searchSelect {
  float: left;
  margin-left: 11px;
  /*position: relative;*/
}
.searchSelect.make {
  margin-left: 0;
  margin-right: 1px;
}
.searchSelect.loadIndex,
.searchSelect.width {
  /*margin-left: 0;
        margin-right: 2px;*/
}
.searchSelect label {
  display: block;
  font-size: 12px;
  font-weight: bold;
  padding-bottom: 3px;
}
.searchSelect.checkboxes label {
  display: block;
  font-weight: bold;
  padding-right: 12px;
}
.searchSelect.checkboxes input[type="checkbox"] {
  position: relative;
  right: 0px;
  top: 2px;
}
.searchSelect.checkboxes {
  padding: 0;
  margin: 8px;
}
.searchSelect a.faq {
  padding: 0 0 0 3px;
  position: relative;
  top: 3px;
}
.searchMod input[type="submit"],
.searchMod input[type="button"] {
  background: url("../images/miniCartSprites.png") no-repeat scroll 69px -60px #DE7209;
  border: medium none;
  border-radius: 0 0 3px 3px;
  color: #FFFFFF;
  display: block;
  font: bold 14px/19px Arial;
  height: 33px;
  padding: 0 35px 0 13px;
  cursor: pointer;
  width: 98px;
}
.searchMod input[type="button"] {
  margin-top: 0;
}
.searchMod input[type="submit"].disabled,
.searchMod input[type="button"].disabled {
  cursor: default;
  background-color: #e3e3e3;
}
input[type="submit"].disabled,
input[type="button"].disabled:focus {
  outline: 0 !important;
}
.searchMod .tyrePanels input[type="button"] {
  background-image: none;
}
.searchMod .newListSelected {
  background: url("../images/miniCartSprites.png") no-repeat scroll 118px -95px white;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  cursor: pointer;
  float: left;
  font: 11px/11px Arial, Helvetica, sans-serif;
  height: 25px;
  margin: 0;
  width: 143px;
}
.searchMod .year .newListSelected {
  width: 128px;
  background-position: 103px -95px;
}
.searchMod .series .newListSelected {
  width: 158px;
  background-position: 133px -95px;
}
.searchMod div#searchSizeDiv .newListSelected,
.searchMod div#searchBrandDiv .newListSelected {
  background: url("../images/miniCartSprites.png") no-repeat scroll 170px -95px white;
  width: 195px;
}
.searchMod .fieldLabel,
.searchMod .selectedTxt {
  display: block;
  padding: 7px;
}
.searchMod .fieldLabel {
  display: none;
  float: left;
  font-weight: bold;
}
.searchMod ul.newList {
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  box-shadow: 0 0 3px 0 #999999;
  height: auto !important;
  left: -1px !important;
  list-style: none outside none !important;
  margin: 0 !important;
  max-height: 200px;
  overflow: auto;
  padding: 5px !important;
  position: absolute;
  top: 24px !important;
  width: 133px;
  z-index: 100;
}
.searchMod div#searchSizeDiv ul.newList,
.searchMod div#searchBrandDiv ul.newList {
  width: 185px;
}
.searchMod ul.newList a {
  color: #444444;
  display: block;
  padding: 3px;
  text-decoration: none;
}
.searchMod ul.newList a:hover {
  background: none repeat scroll 0 0 #DE7209;
  color: #FFFFFF;
  text-decoration: none;
}
.searchMod .tireSizes {
  font: bold 12px/20px Arial, Helvetica, sans-serif;
  padding-top: 0;
}
.searchMod .tireSizes .sizes {
  float: left;
  padding-right: 45px;
  width: 196px;
  margin-top: 0;
}
.searchMod .tireSizes .sizes li {
  list-style: none outside none;
}
.searchMod .tireSizes .sizes label {
  padding-left: 5px;
}
.searchMod .tireSizes .sizes input[type="checkbox"] {
  position: relative;
  right: 4px;
  top: 2px;
}
.searchMod .tireSizes .sizes span {
  font-weight: bold;
}
.searchMod .tireSizes .sizes span a {
  padding: 0 0 0 3px;
  position: relative;
  top: 3px;
}
.clearfix:before,
.clearfix:after,
.here-is-how-it-works:before,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:before,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:before,
.here-is-how-it-works .reasons:after,
.free-benefits:before,
.free-benefits:after,
.free-benefits .benefits:before,
.free-benefits .benefits:after,
.tyrePanels:before,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:before,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  content: "";
  display: table;
}
.clearfix:after,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:after,
.free-benefits:after,
.free-benefits .benefits:after,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  clear: both;
}
#searchVehicleDiv:before,
#searchSizeDiv:before,
#searchBrandDiv:before,
#searchVehicleDiv:after,
#searchSizeDiv:after,
#searchBrandDiv:after {
  content: "";
  display: table;
}
#searchVehicleDiv:after,
#searchSizeDiv:after,
#searchBrandDiv:after {
  clear: both;
}
#searchVehicleDiv,
#searchSizeDiv,
#searchBrandDiv {
  padding-bottom: 10px;
}
.tireSizes {
  float: left;
  max-width: 458px;
}
#searchVehicleDiv .tireSizes {
  margin-top: 10px;
}
#searchVehicleDiv #searchVehicleButton,
#vehicleSearchButton {
  /*margin-top: 10px;*/
}
.tireSizes h1 {
  margin: 0;
}
.resultsMod {
  margin: 0 auto;
  width: 100%;
  display: table;
  padding-top: 0;
  display: none;
  border-top: 1px solid #ddd;
}
.resultsMod .filterResults {
  border-bottom: 2px solid #DDDDDD;
  border-top: 2px solid #DDDDDD;
  font-size: 12px;
  line-height: 23px;
  padding: 6px 0;
}
.resultsMod .filterResults > div {
  float: left;
  width: 50%;
}
.resultsMod .filterResults .sortBy {
  font-weight: bold;
  text-align: right;
}
.resultsMod .newListSelected {
  background: url("../images/miniCartSprites.png") no-repeat scroll 121px -135px white;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  cursor: pointer;
  float: right;
  font: 12px/12px Arial, Helvetica, sans-serif;
  height: 21px;
  margin: 0 0 0 10px;
  padding: 0;
  text-align: left;
  width: 143px;
}
.resultsMod .fieldLabel,
.searchMod .selectedTxt {
  display: block;
  padding: 0 25px 0 7px;
  line-height: 25px;
  height: 25px !Important;
  overflow: hidden;
}
.resultsMod .fieldLabel {
  display: none;
  float: left;
  font-weight: bold;
}
.resultsMod .selectedTxt {
  padding: 0 5px;
  line-height: 21px;
}
.resultsMod ul.newList {
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  box-shadow: 0 0 3px 0 #999999;
  left: -1px !important;
  list-style: none outside none !important;
  margin: 0 !important;
  max-height: 200px;
  overflow: auto;
  padding: 5px !important;
  position: absolute;
  top: 24px !important;
  width: 133px;
  z-index: 1;
}
.resultsMod ul.newList a {
  color: #444444;
  display: block;
  padding: 3px;
  text-decoration: none;
}
.resultsMod ul.newList a:hover {
  background: none repeat scroll 0 0 #DE7209;
  color: #FFFFFF;
  text-decoration: none;
}
/*mini cart*/
div > .miniCart {
  padding: 0 13px;
  margin-bottom: 16px;
  background: none repeat scroll 0 0 #FFFFFF;
  border: none;
  border-radius: 5px 5px 5px 5px;
  min-height: 120px;
}
.miniCart {
  padding: 0 13px;
  margin-bottom: 16px;
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #DDDDDD;
  border-radius: 5px 5px 5px 5px;
  min-height: 120px;
}
.miniCart .tabNavigation {
  border-bottom: 2px solid #DE7209;
  margin: 0px auto 16px;
  width: 100%;
  padding: 0;
}
.miniCart .tabNavigation li {
  float: right;
  list-style: none outside none;
  margin: 0 0 0 4px !important;
  /*margin-left: 4px !important;*/
}
.miniCart .tabNavigation li a {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 #F9F9F9;
  border-color: #D0D0D0;
  -o-border-image: none;
     border-image: none;
  border-radius: 5px 5px 0 0;
  border-style: solid;
  border-width: 1px 1px 0;
  color: #333333;
  float: left;
  font-size: 12px;
  font-weight: bold;
  height: 20px;
  padding: 9px 17px 3px;
  position: relative;
  text-decoration: none;
  width: auto;
}
.miniCart .tabNavigation li a img.notSelectedIcon {
  margin-bottom: 9px;
}
.miniCart .tabNavigation li a img.selectedIcon {
  left: 17px;
  position: absolute;
  top: 9px;
  visibility: hidden;
}
.miniCart .tabNavigation li a:hover img.selectedIcon {
  left: 17px;
  position: absolute;
  top: 9px;
  visibility: visible !important;
}
.miniCart .tabNavigation li a:hover,
.miniCart .tabNavigation li a.selected {
  background: none repeat scroll 0 0 #DE7209;
  border-color: #DE7209;
  color: #FFFFFF;
  width: auto;
}
.miniCart .tabNavigation li a span {
  font: italic bold 14px/1em Georgia, "Times New Roman", Times, serif;
}
.miniCart .tabNavigation li.header {
  float: left;
  font: italic bold 14px/13px Georgia, "Times New  Roman", Times, serif;
  padding: 11px 0 5px;
  border: none;
  height: auto;
  background: none;
}
.miniCart .searchSelect {
  float: left;
  margin-bottom: 17px;
  width: 33%;
}
.miniCart .searchSelect label {
  display: block;
  font-size: 12px;
  font-weight: bold;
}
.miniCart input[type="submit"] {
  clear: both;
  display: block;
  float: right;
}
.miniCart h2 {
  font-size: 14px;
  line-height: 14px;
  margin-bottom: 5px;
}
.miniCart ul.tyreList {
  list-style: none outside none;
  margin: 0;
  padding: 0;
}
.miniCart ul.tyreList > li:first-child {
  border-top: 1px solid #DDDDDD;
}
.miniCart ul.tyreList > li {
  border-bottom: 1px solid #DDDDDD;
  padding: 8px 0 11px;
}
.miniCart ul.tyreList > li .thumbnail {
  float: left;
  width: 17%;
}
.miniCart ul.tyreList > li .detail {
  display: block;
  float: left;
  font-size: 12px;
  padding-left: 11px;
  position: relative;
  width: 79%;
}
.miniCart ul.tyreList > li .removeTyre {
  background: url("../images/miniCartSprites.png") no-repeat scroll 0 0 #F4F4F4;
  cursor: pointer;
  height: 17px;
  position: absolute;
  right: 0;
  width: 17px;
}
.miniCart ul.tyreList > li a {
  color: #DE7209;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}
.miniCart ul.tyreList label {
  float: left;
  font-weight: bold;
  padding-right: 6px;
  padding-top: 5px;
}
.miniCart ul.tyreList .price {
  margin-bottom: 7px;
}
.miniCart .newListSelected {
  background: url("../images/miniCartSprites.png") no-repeat scroll -17px white;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  cursor: pointer;
  float: left;
  font: 12px/15px Arial, Helvetica, sans-serif;
  height: 21px;
  margin: 0;
  width: 58px;
}
.miniCart .fieldLabel,
.miniCart .selectedTxt {
  display: block;
  padding: 3px;
}
.miniCart .fieldLabel {
  display: none;
  float: left;
  font-weight: bold;
}
.miniCart ul.newList {
  background: none repeat scroll 0 0 #FFFFFF;
  border: 1px solid #868686;
  border-radius: 2px 2px 2px 2px;
  box-shadow: 0 0 3px 0 #999999;
  left: -1px !important;
  list-style: none outside none !important;
  margin: 0 !important;
  max-height: 200px;
  overflow: auto;
  padding: 5px !important;
  position: absolute;
  top: 24px !important;
  width: 48px;
  z-index: 1;
  height: auto !important;
}
.miniCart ul.newList a {
  color: #444444;
  display: block;
  padding: 3px;
}
.miniCart ul.newList a:hover {
  background: none repeat scroll 0 0 #DE7209;
  color: #FFFFFF;
  text-decoration: none;
}
.miniCart .price .strike {
  display: inline-block;
  font: bold 18px/18px Arial, Helvetica, sans-serif;
  height: 22px;
  position: relative;
  min-width: 46px;
}
.miniCart .price .askdeal {
  padding-left: 8px;
}
.miniCart .price .strike .strikeThrough {
  background: url("../images/miniCartSprites.png") no-repeat scroll 0 -38px transparent;
  display: block;
  height: 22px;
  left: 0;
  position: absolute;
  top: 0;
  width: 46px;
}
.miniCart .price strong {
  display: block;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
}
.miniCart .deal {
  font: 10px/10px Arial, Helvetica, sans-serif;
  padding: 13px 0;
}
.miniCart .deal input[type="checkbox"] {
  position: relative;
  top: 3px;
}
.miniCart a.getadeal {
  float: right;
}
.miniCart a.getadeal:hover {
  cursor: pointer;
  zoom: 1;
  filter: alpha(opacity=90);
  opacity: 0.9;
}
.miniCart a.getadeal img {
  display: block;
  padding-top: 6px;
}
.miniCart .deal .memberDisc {
  clear: both;
  font-size: 12px;
  line-height: 18px;
  padding: 24px 0;
  text-align: center;
}
.miniCart .deal .memberDisc span.red {
  color: #FA0505;
  display: block;
  text-transform: uppercase;
}
/*brand list*/
ul.brandList {
  text-align: left;
  padding-top: 10px;
}
ul.brandList li {
  float: left;
}
ul.brandList a {
  display: block;
  width: 87px;
  height: 25px;
  text-align: center;
  border: 1px solid #fff;
  padding: 3px 10px;
}
ul.brandList a:hover {
  border: 1px solid #ccc;
}
/*mainPanel*/
.mainPanel {
  position: relative;
  width: 598px;
  min-height: 436px;
  float: left;
  border: 4px solid #de7209;
  border-radius: 4px;
  padding: 19px 23px;
  z-index: 1;
}
.panelShadow {
  float: left;
  clear: left;
  width: 651px;
  height: 10px;
  background: url(../images/sprites.png) no-repeat 0 0;
}
.deal .mainPanel {
  min-height: 630px;
}
/*stepNavigation*/
.stepNavigation {
  height: 33px;
  border-bottom: 2px solid #de7209;
  margin: 0 0 20px 0;
}
.content .stepNavigation ul {
  list-style: none;
  height: 33px;
  padding: 0;
  margin: 0;
}
.stepNavigation ul li {
  display: block;
  float: left;
  margin: 0 0 0 8px;
}
.stepNavigation ul li:first-child {
  margin: 0;
}
.stepNavigation ul a {
  display: block;
  width: 192px;
  height: 32px;
  border: 1px solid #d0d0d0;
  border-bottom: 0 none;
  border-radius: 3px 3px 0 0;
  background: #f9f9f9;
  text-align: center;
  font: bold 14px/32px Arial, Helvetica, sans-serif;
  color: #444;
}
.stepNavigation ul a strong {
  font: bold italic 14px/32px Georgia, "Times New Roman", Times, serif;
}
.stepNavigation ul a:hover {
  text-decoration: none;
  background: #e8e8e8;
}
.stepNavigation ul a.active {
  background: #de7209;
  border: 1px solid #de7209;
  color: #fff;
}
.activeArrow {
  position: absolute;
  top: 0;
  left: 0;
  width: 12px;
  height: 6px;
  background: url(../images/sprites.png) no-repeat 0 -10px;
}
/*tyreSearch*/
.search .activeArrow {
  top: 54px;
  left: 111px;
}
.search h2 {
  font: bold 14px/24px Arial, Helvetica, sans-serif;
}
.search h2 strong {
  display: block;
  font: italic 400 24px/24px Georgia, "Times New Roman", Times, serif;
  color: #444;
}
.searchVehicle,
.searchSize {
  position: relative;
  display: block;
  width: 260px;
  float: left;
}
.searchVehicle {
  z-index: 98;
}
.searchSize {
  z-index: 1;
}
/*searchForm*/
.searchFieldTop {
  position: relative;
}
.searchFieldTop:nth-of-type(1) {
  z-index: 10;
}
.searchFieldTop:nth-of-type(2) {
  z-index: 9;
}
.searchFieldTop:nth-of-type(3) {
  z-index: 8;
}
.searchFieldTop:nth-of-type(4) {
  z-index: 7;
}
.searchFieldTop:nth-of-type(5) {
  z-index: 6;
}
.searchFieldTop:before,
.searchFieldTop:after {
  content: "";
  display: table;
}
.searchFieldTop:after {
  clear: both;
}
.searchField {
  position: relative;
  padding-bottom: 10px;
}
section .searchField {
  width: 146px;
  position: relative;
  padding-bottom: 10px;
  display: inline-block;
  margin-left: 6px;
}
section .searchField .selectedTxt {
  height: 10px;
  overflow: hidden;
}
.searchField:nth-child(1) {
  z-index: 5;
}
section .searchField:nth-child(1) {
  margin-left: 0;
}
.searchField:nth-child(2) {
  z-index: 4;
}
.searchField:nth-child(3) {
  z-index: 3;
}
.searchField:nth-child(4) {
  z-index: 2;
}
#size .searchField:nth-child(4) {
  z-index: 3 !important;
}
.searchField:nth-child(5) {
  z-index: 1;
}
.searchField:before,
.searchField:after {
  content: "";
  display: table;
}
.searchField:after {
  clear: both;
}
.searchForm label {
  display: none;
}
section .searchForm label {
  display: block;
  text-align: left;
  font-weight: bold;
  font-size: 12px;
  line-height: 1.5;
}
.searchForm .checkboxes label {
  display: block;
}
.newListSelected {
  position: relative;
  border: 1px solid #868686;
  border-radius: 2px;
  height: 25px;
  width: 258px;
  background: url(../images/sprites.png) no-repeat 100% -10px #fff;
  font: 12px/15px Arial, Helvetica, sans-serif;
  padding: 0;
  margin: 0;
  cursor: pointer;
  float: left;
}
.getQuoteForm .newListSelected {
  width: 252px;
  margin-top: 2px;
}
.fieldLabel {
  display: none !important;
}
.fieldLabel,
.selectedTxt {
  display: inline;
  display: inline-block;
  display: block;
  padding: 5px;
}
.SSContainerDivWrapper {
  height: auto !important;
  max-height: 200px;
}
.fieldLabel {
  font-weight: bold;
  float: left;
}
section .searchForm .fieldLabel {
  display: none;
}
ul.newList {
  position: absolute;
  left: -1px !important;
  top: 24px!important;
  width: 248px;
  max-height: 200px;
  overflow: auto;
  border: 1px solid #868686;
  border-radius: 2px;
  background: #fff;
  list-style: none!important;
  padding: 5px!important;
  margin: 0!important;
  box-shadow: 0 0 3px 0 #999;
  z-index: 1;
}
ul.newList a {
  display: block;
  color: #444;
  padding: 3px;
}
ul.newList a:hover {
  color: #fff;
  background: #de7209;
  text-decoration: none;
}
.searchForm .searchTyres {
  display: block;
  position: relative;
  border: 0 none;
  width: 258px;
  height: 40px;
  overflow: hidden;
  background: url(../images/sprites.png) no-repeat -20px -10px;
  text-indent: -9999px;
  cursor: pointer;
}
* + html .searchForm .searchTyres {
  text-indent: 0;
  text-align: left;
  font-size: 1px;
  color: #fff;
}
/*ie7*/
.searchForm .searchTyres:hover {
  background: url(../images/sprites.png) no-repeat -20px -50px;
}
.searchSize .searchForm .searchTyres {
  margin: 7px 0 0 0;
}
/*advancedSearch*/
.advancedSearch {
  border-bottom: 1px solid #d0d0d0;
  margin: 0 0 5px 0;
}
.advancedSearch h2 {
  text-align: right;
  font: bold 12px/18px Arial, Helvetica, sans-serif;
  background: url(../images/sprites.png) no-repeat -733px -150px #fff;
  margin: 0 0 7px 0;
  cursor: pointer;
}
/*optionDivider*/
.optionDivider {
  position: relative;
  display: block;
  float: left;
  width: 38px;
  height: 380px;
  border-left: 1px solid #d0d0d0;
  margin: 0 0 0 38px;
}
.optionDivider span {
  position: absolute;
  top: 107px;
  left: -35px;
  width: 70px;
  font: bold 18px/36px Arial, Helvetica, sans-serif;
  color: #de7209;
  text-transform: uppercase;
  text-align: center;
  background: #fff;
}
/*compare*/
.compare .activeArrow {
  top: 54px;
  left: 313px;
}
.compare h2 {
  font: bold 20px/24px Arial, Helvetica, sans-serif;
}
.compare h2 strong {
  display: inline;
  font: italic 400 24px/24px Georgia, "Times New Roman", Times, serif;
  color: #444;
}
.goToTop,
.goToBottom {
  position: absolute;
  right: 23px;
  display: block;
  width: 150px;
  height: 30px;
  text-align: center;
  background: url(../images/sprites.png) no-repeat -278px -60px;
  border-radius: 3px;
  font: bold 12px/30px Arial, Helvetica, sans-serif;
  color: #fff;
}
.goToTop {
  top: 65px;
}
.goToBottom {
  bottom: 20px;
}
.goToTop:hover,
.goToBottom:hover {
  color: #fff;
  text-decoration: none;
  background: url(../images/sprites.png) no-repeat -278px -90px;
}
.searchResults {
  background: #f3f3f3;
  font: 11px/18px Arial, Helvetica, sans-serif;
  padding: 5px;
  margin-top: 10px;
}
.searchResults span {
  padding-right: 20px;
  float: left;
  line-height: 22px;
}
.searchResults span.sortBy {
  padding: 0;
  float: right;
}
.searchResults span.sortBy label {
  font-size: 12px;
  color: #7E7E7E;
  line-height: 25px;
}
.searchResults span.sortBy strong {
  float: left;
}
/*tyrePanels*/
.relatedTyres {
  width: 96%;
  margin: 0 auto;
}
.leadRewardTitle {
  width: 96%;
  margin: 10px auto;
}
.tyrePanels {
  padding: 5px 0;
}
.tyrePanel {
  position: relative;
  border: 1px solid #999;
  display: block;
  float: left;
  width: 178px;
  height: 297px;
  padding: 8px;
  font-size: 12px;
  margin: 4px;
}
.tyrePanel:hover {
  box-shadow: inset 0 0 0 5px #e5e5e5;
  /*css3 transition*/
  transition: all 400ms ease-in-out;
}
.tyrePanel:nth-child(3n+1) {
  clear: left;
}
.tyrePanel.selected {
  box-shadow: inset 0 0 0 3px #87c622;
}
.tyrePanel .logo {
  height: 25px;
}
.tyrePanel .logo img {
  width: auto;
  max-width: 100%;
}
.tyrePanel .tyreName {
  height: 45px;
  font: 11px/15px Arial, Helvetica, sans-serif;
  color: #666;
}
.tyrePanel .tyreName a {
  display: block;
  font: bold 13px/15px Arial, Helvetica, sans-serif;
}
/*.tyrePanel .fitment {
        display: inline-block;
        margin-top: 5px;
    }
        
        .tyrePanel .fitment p {
            font:12px/16px Arial, Helvetica,san-serif;
            color:#000;
            text-align:center;
        }*/
/*content summary*/
#contentSummary {
  border: 1px solid #CCC;
  margin-top: 20px;
  padding: 10px 10px 0;
  font-size: 12px;
}
/*icons*/
.tyrePanel .icons {
  height: 50px;
}
.checkout-deal .checkoutTyreDetail {
  padding-bottom: 0px !important;
}
.checkoutTyreDetail > h1 {
  margin: 0;
}
.checkoutTyreDetail > h1 > span.brandTitle {
  width: 100%;
  display: block;
  height: 17px;
  text-indent: -9999px;
}
.checkoutTyreDetail > h1 > span.patternName {
  color: #F5791F;
  font: bold 14px Arial, Helvetica, sans-serif;
  margin: 5px 0px;
}
.checkoutTyreDetail > h1 > span.pTyreSize {
  margin-bottom: 5px;
  font-size: 11px !important;
  color: #7E7E7E !important;
}
.tyrePanel .icons .eco,
.tyrePanel .icons .runFlat,
.checkoutTyreDetail .icons .eco,
.checkoutTyreDetail .icons .runFlat {
  display: block;
  height: 25px;
  font-size: 10px;
  font-weight: bold;
  text-transform: uppercase;
}
.tyrePanel .icons .eco:before,
.tyrePanel .icons .runFlat:before,
.checkoutTyreDetail .icons .eco:before,
.checkoutTyreDetail .icons .runFlat:before {
  display: inline-block;
  vertical-align: middle;
  width: 25px;
  height: 25px;
  content: " ";
  background: red;
}
.lowestPriceGuarantee {
  display: block;
  cursor: pointer;
}
.tyrePanel .lowestPriceGuarantee {
  max-height: 25px;
  margin: 5px 0;
}
.checkoutProductImages .lowestPriceGuarantee {
  bottom: 6px;
  left: 6px;
  position: absolute;
  max-width: 45%;
}
.checkout-tabs .lowestPriceGuarantee {
  width: 100%;
  margin: 0 auto;
}
.dealOfTheDay .lowestPriceGuarantee {
  position: absolute;
  bottom: 6px;
  left: 6px;
  width: 145px;
}
.tyrePanel .icons .eco:before,
.checkoutTyreDetail .icons .eco:before {
  background: url(../images/run-flat-icon.png) no-repeat;
  background-size: 20px 20px;
}
.tyrePanel .icons .runFlat:before,
.checkoutTyreDetail .icons .runFlat:before {
  background: url(../images/run-flat-icon.png) no-repeat;
  background-size: 20px 20px;
}
.tyrePanel .icons .eco,
.checkoutTyreDetail .icons .eco,
.checkoutTyreDetail .icons .eco span {
  color: #75b618;
}
.tyrePanel .icons .runFlat,
.checkoutTyreDetail .icons .runFlat span {
  color: #DE7209;
}
.checkoutTyreDetail .icons .eco,
.checkoutTyreDetail .icons .eco span,
.checkoutTyreDetail .icons .runFlat,
.checkoutTyreDetail .icons .runFlat span {
  display: inline;
}
.dealOfTheDay .dealInfo .iconsdeal .eco,
.dealOfTheDay .dealInfo .iconsdeal .runFlat {
  display: block;
  height: 25px;
  font-size: 10px;
  font-weight: bold;
  text-transform: uppercase;
  float: left;
  padding-right: 5px;
}
.dealOfTheDay .dealInfo .iconsdeal .eco:before,
.dealOfTheDay .dealInfo .iconsdeal .runFlat:before {
  display: inline-block;
  vertical-align: middle;
  width: 25px;
  height: 25px;
  content: " ";
  background: red;
}
.dealOfTheDay .dealInfo .iconsdeal .eco:before {
  background: url(../images/sprites.png) no-repeat -55px -91px;
}
.dealOfTheDay .dealInfo .iconsdeal .runFlat:before {
  background: url(../images/run-flat-icon.png) no-repeat;
  background-size: 22px 20px;
}
.dealOfTheDay .dealInfo .iconsdeal .eco {
  color: #75b618;
}
.dealOfTheDay .dealInfo .iconsdeal .runFlat {
  color: #DE7209;
}
/*.dealOfTheDay .dealInfo .runFlatEcoArea {
    min-height: 35px;
}*/
/*thumbnails*/
.tyrePanel .thumbnail {
  position: absolute;
  top: 79px;
  right: 8px;
  width: 75px;
  z-index: 98;
}
.tyrePanel .thumbnail .discount {
  margin-top: 5px;
  position: absolute;
  top: 74px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 11px;
}
.tyrePanel .thumbnail .superspecial,
.tyrePanel .thumbnail .bestseller {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 11px;
}
.tyrePanel .thumbnail .blueBubbleSize12 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
  line-height: 12px;
}
.tyrePanel .thumbnail .blueBubbleSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .thumbnail .blueBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .thumbnail .greenBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .thumbnail .redBubbleAdSize10 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 10px;
  line-height: 12px;
}
.tyrePanel .thumbnail .greenBubbleSize12 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
  line-height: 12px;
}
.tyrePanel .thumbnail .specialOffer {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 11px;
}
.tyrePanel .thumbnail .specialOffer2 {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 9px;
  line-height: 13px;
}
.tyrePanel .thumbnail .freeTyreOffer {
  margin-top: 5px;
  position: absolute;
  top: 14px;
  right: -13px;
  width: 54px;
  height: 54px;
  border-radius: 27px;
  background: #64a400;
  text-align: center;
  color: #fff;
  font-size: 12px;
  line-height: 13px;
}
.tyrePanel .thumbnail .superspecial,
.tyrePanel .thumbnail .blueBubbleSize12 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #3366FF;
  font-weight: 700;
}
.tyrePanel .thumbnail .greenBubbleSize12 {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #2eb559;
  font-weight: 700;
}
.tyrePanel .thumbnail .specialOffer,
.tyrePanel .thumbnail .specialOffer2,
.tyrePanel .thumbnail .freeTyreOffer,
.tyrePanel .thumbnail .bestseller {
  /*height: 43px;*/
  padding: 11px 0 0;
  text-transform: uppercase;
  background: #ef1a1a;
  font-weight: 700;
}
.tyrePanel .thumbnail .discount strong {
  font-size: 18px;
  padding-top: 6px;
}
.tyrePanel .thumbnail a {
  display: block;
}
.tyrePanel .thumbnail img {
  height: auto;
  max-width: 100%;
  display: block;
}
.tyrePanel .thumbnail strong {
  display: block;
  text-align: center;
  font: bold 11px/24px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  cursor: pointer;
}
/*Checkout bubble*/
/*Green RRP vs Price Discount Bubble*/
.checkout-deal .discount {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 11px;
  font-size: 10px;
  top: 0px;
  background-color: #66a210;
}
.checkout-deal .discount strong {
  font-size: 26px;
  letter-spacing: -2px;
  display: block;
  line-height: 30px;
}
/*End - Green RRP vs Price Discount Bubble*/
/*Stock Level Bubble*/
.checkout-deal .floatRight .stock {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 11px;
  font-size: 9px;
  line-height: 10px;
  top: 70px;
  background-color: #de7209;
}
.checkout-deal .floatRight .outOfStock {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 11px;
  display: none;
  font-size: 9px;
  line-height: 10px;
  top: 70px;
  background-color: #F00;
}
.checkout-deal .floatRight .stock strong,
.checkout-deal .floatRight .outOfStock strong {
  font-size: 11px;
  margin: 5px 0 4px;
  display: block;
}
.checkout-deal .floatRight .outOfStock > span {
  margin-top: 9px;
}
/*End - Stock Level Bubble*/
/*Promotion Bubbles*/
.checkout-deal .floatRight .CheckoutSpecialOffer,
.checkout-deal .floatRight .CheckoutFreeTyreOffer,
.checkout-deal .floatRight .CheckoutRedBubble12 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 12px;
  line-height: 12px;
  top: 140px;
  background-color: #F00;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutSpecialOffer2,
.checkout-deal .floatRight .CheckoutRedBubble11 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 11px;
  line-height: 12px;
  top: 140px;
  background-color: #F00;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutRedBubble11alignment {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 11px 2px;
  font-size: 11px;
  line-height: 15px;
  top: 140px;
  background-color: #F00;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutBlueBubble12 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 10px 11px;
  font-size: 11px;
  line-height: 14px;
  top: 140px;
  background-color: #36f;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutBlueBubble10 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 10px;
  line-height: 12px;
  top: 140px;
  background-color: #36f;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutGreenBubble10 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 10px;
  line-height: 12px;
  top: 140px;
  background-color: #2eb559;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutRedBubble10 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 10px;
  line-height: 12px;
  top: 140px;
  background-color: #f00;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutGreenBubble12 {
  position: absolute;
  width: 64px;
  height: 64px;
  border-radius: 32px;
  box-sizing: border-box;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  left: -10px;
  padding: 15px 11px;
  font-size: 12px;
  top: 140px;
  background-color: #2eb559;
  font-weight: bold;
}
.checkout-deal .floatRight .CheckoutSpecialOffer div,
.checkout-deal .floatRight .CheckoutFreeTyreOffer div {
  font-size: 12px;
}
.checkout-deal .floatRight .CheckoutSpecialOffer2 div {
  font-size: 11px;
}
.checkout-deal .floatRight .CheckoutSpecialOffer > span {
  margin-top: 9px;
}
/*End - Promotion Bubbles*/
.checkout-deal .floatRight div,
.checkout-deal .floatRight span {
  color: #fff;
  font-size: 9px;
}
.checkout-deal .purchase-guarantee .sale,
.checkout-deal .purchase-guarantee .sale a {
  color: #7e7e7e;
}
/*End - Checkout bubble*/
/*price*/
.checkoutCart .tyrePanel .price {
  min-height: 25px;
  clear: left;
  color: #FFF;
  padding-top: 10px;
}
.checkoutCart .tyrePanel .price div {
  float: left;
}
.checkoutCart .tyrePanel .price div.strike {
  float: right;
}
.checkoutCart .tyrePanel .promoText {
  color: #75B618;
  font-weight: bold;
  text-transform: uppercase;
}
.checkoutCart .tyrePanel .price .strike {
  font: 18px Arial, Helvetica, sans-serif;
}
.checkoutCart .tyrePanel .price .fitting {
  font-size: 11px;
  color: #000;
  font-weight: bold;
  padding-bottom: 5px;
}
.checkoutCart .tyrePanel .price strong {
  display: none;
}
/*price*/
.tyrePanels .tyrePanel .price {
  /*height: 54px;*/
  clear: left;
  font: 11px/25px Arial, Helvetica, sans-serif;
  color: #666;
  padding-top: 25px;
  /*margin-top: 10px;*/
}
.tyrePanels .tyrePanel .promoText {
  color: #75B618;
  font-weight: bold;
  text-transform: uppercase;
}
.tyrePanels .tyrePanel .price .strike {
  font: 32px/29px Arial, Helvetica, sans-serif;
  color: rgba(255, 119, 20, 0.89);
  padding-top: 5px;
}
/*.tyrePanels .tyrePanel .price .strike:after {
        display: inline-block;
        vertical-align: top;
        content: "each";
        font-size: 10px;
        line-height: 13px;
        font-style: italic;
        color: #666;
        padding-left: 3px;
    }*/
.tyrePanels .tyrePanel .price .fitting {
  font-size: 11px;
  color: #000;
  font-weight: bold;
  padding-bottom: 5px;
}
.tyrePanels .tyrePanel .price strong {
  display: none;
}
/*rrp*/
.tyrePanel.buyNowRrp .price,
.tyrePanel.getQuote .price {
  /*height: 79px;*/
  /*padding-top: 0;*/
}
.rrp {
  position: relative;
  height: 25px;
  font: 11px;
}
/*.tyrePanel.getQuote .rrp {font:13px; color:#666;}*/
.rrpPrice {
  font: 20px/25px arial, sans-serif;
  color: #000;
}
.buyNowRrp .rrpPrice:before {
  position: absolute;
  top: 12px;
  left: 2px;
  width: 70px;
  display: block;
  content: " ";
  border-top: 2px solid #ff3333;
  /*-moz-transform: rotate(-30deg);
    -webkit-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);*/
}
.tyrePanel .getQuote .rrp {
  display: none;
}
/*checkout price*/
.checkoutCart .price {
  margin: 0;
}
.checkoutCart .price .strike {
  position: relative;
}
.checkoutCart ul .price .strike:before {
  position: absolute;
  top: 11px;
  left: 0;
  width: 45px;
  display: block;
  content: " ";
  border-top: 4px solid #f8781d;
  transform: rotate(-20deg);
}
.checkoutCart .price .strike:after {
  display: none;
}
/*buyPanel*/
.buyPanel {
  position: relative;
  width: 178px;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  background: #eff5df;
  height: auto;
  margin-left: -8px;
}
.getQuote .buyPanel {
  background: #f5eadf;
  padding-top: 21px;
}
.buyPanel:before,
.buyPanel:after {
  content: "";
  display: table;
}
.buyPanel:after {
  clear: both;
}
.buyPanel {
  *zoom: 1;
}
img.sold-out {
  display: block;
}
/*qty*/
.tyrePanel .quantity {
  /*clear: both;*/
  float: left;
  width: 90px;
  font: 12px/16px Arial, Helvetica, sans-serif;
  padding: 10px 0 0 5px;
  margin-right: 7px;
}
.tyrePanel .quantity label {
  display: inline-block;
  width: 30px;
}
.tyrePanel .quantity select {
  width: 50px;
  height: 23px;
  margin-left: 3px;
}
/*buttons*/
.tyrePanel .submit {
  float: right;
}
.tyrePanel .submit input.button {
  display: block;
  height: 25px;
  width: 85px;
  border: 0 none;
  /*-webkit-border-radius: 3px;*/
  border-radius: 0;
  background: url(../images/sprites.png) no-repeat -278px -60px;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
  color: #fff;
  text-align: center;
  padding: 0;
  margin: 0;
}
.tyrePanel .submit input.button:hover {
  background: url(../images/sprites.png) no-repeat -278px -90px;
  cursor: pointer;
}
.tyrePanel.buyNow .submit input.button,
.tyrePanel.buyNowRrp .submit input.button {
  background-position: -278px -120px;
}
.tyrePanel.buyNow .submit input.button:hover,
.tyrePanel.buyNowRrp .submit input.button:hover {
  background: url(../images/sprites.png) no-repeat -278px -205px;
  cursor: pointer;
}
/*roadside*/
.tyrePanel .roadside {
  padding: 4px 0 0 15px;
  clear: both;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -251px;
}
/*fitting*/
.tyrePanel .fitted {
  padding: 4px 0 0 15px;
  clear: both;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -251px;
}
g-readReviewsLink:active {
  color: #de7209;
  margin: 0;
}
.tyrePanel .reviews span.star {
  vertical-align: middle;
  display: inline;
  padding: 0 0 0 2px;
}
.tyrePanel .reviews .gig-rating-averageRating {
  display: none;
}
div.gig-comments-comment {
  padding: 0;
}
div.gig-comments-rating {
  float: none;
  padding-bottom: 5px;
}
div.gig-comments-star {
  background-image: url(../images/starGrey.gif);
  height: 15px;
  width: 16px;
}
div.gig-comments-star-full {
  background-image: url(../images/starOrange.gif);
}
div.gig-comments-dottedLine {
  margin-bottom: 5px;
}
.loginContainer {
  display: block;
  height: 40px;
}
.loginContainer .loginLabel {
  font: 11px/40px Arial, Helvetica, sans-serif;
  float: left;
  padding: 0;
  color: #fff;
}
.loginContainer .loginLabel a {
  display: inline;
  float: right;
  padding-bottom: 9px;
  height: 18px;
}
.loginContainer .loginLabel img {
  width: 30px;
  height: 30px;
  padding: 5px 5px 0 0;
  display: block;
  float: left;
}
.loginContainer .loginBox table {
  width: 100%!important;
}
#logoutDiv {
  float: left;
  padding: 0 0 0 20px;
  color: #FFF;
  font: 11px/40px Arial, Helvetica, sans-serif;
  cursor: pointer;
}
.loginContainer .loginBox {
  float: right;
}
.footnote {
  float: left;
  width: 230px;
  font: italic 11px/30px arial, sans-serif;
  color: #666;
  padding-top: 10px;
}
.paginationButtons {
  height: 40px;
  margin-left: 240px;
}
.pagination {
  height: 30px;
  font: bold 12px/15px Arial, Helvetica, sans-serif;
  padding: 10px 0 0 0;
  float: right;
}
.pagination span {
  display: block;
  float: left;
  min-width: 15px;
  height: 15px;
  color: #de7209;
  text-align: center;
  padding: 0;
  margin: 7px 2px;
}
.pagination span.current {
  background: #000;
  color: #fff;
}
.pagination span.prev {
  color: #de7209;
  background: white;
}
.pagination span.next {
  color: #de7209;
  background: white;
}
.pagination a {
  display: block;
  float: left;
  min-width: 15px;
  height: 15px;
  color: #de7209;
  text-align: center;
  padding: 0;
  margin: 7px 2px;
}
.pagination a.selected {
  background: #000;
  color: #fff;
}
.pagination a:hover {
  text-decoration: underline;
}
.pagination a.selected:hover {
  text-decoration: none;
}
/*deal*/
.deal {
  position: relative;
  padding: 20px 0 0 0;
  zoom: 1;
}
.deal .activeArrow {
  top: 54px;
  left: 517px;
}
.deal h2 {
  font: bold 20px/24px Arial, Helvetica, sans-serif;
}
.deal h2 strong {
  display: inline;
  font: italic 400 24px/24px Georgia, "Times New Roman", Times, serif;
  color: #444;
}
/*done*/
.done {
  font: bold 18px/24px Arial, Helvetica, sans-serif;
}
.done h2 {
  display: block;
  width: 586px;
  height: 52px;
  background: url(../images/sprites.png) no-repeat 0 -262px;
  text-indent: -9999px;
}
.done .activeArrow {
  display: none;
}
.done .tyrePanels {
  font: normal 14px/14px Arial, Helvetica, sans-serif;
  padding: 0;
}
.done .tyrePanels .tyrePanel {
  border: 0 none;
  float: none;
  border-bottom: 1px solid #ccc;
  min-height: 0;
  height: 160px;
  width: auto;
  padding: 5px;
  margin: 30px 0 0 0;
}
.done .tyrePanels .tyrePanel:first-child {
  margin: 0;
}
.tyreWinningBidRetailPanels {
  border-bottom: 1px solid #ddd;
}
.tyreWinningBidRetailPanel {
  border-top: 1px solid #ddd;
  padding: 5px 0;
}
.tyreWinningBidRetailPanel:before,
.tyreWinningBidRetailPanel:after {
  content: "";
  display: table;
}
.tyreWinningBidRetailPanel:after {
  clear: both;
}
.tyreWinningBidRetailPanel {
  *zoom: 1;
}
.tyreWinningBidRetailPanel .tyreDetail .price {
  font-style: normal;
}
/*tax invoice*/
.taxInvoice {
  font: 18px/24px airal, sans-serif;
}
.taxInvoice h2 {
  color: #000;
  font-size: 20px;
}
.taxInvoice table {
  border: 1px solid #777;
  width: 100%;
}
.taxInvoice th,
.taxInvoice td {
  border: 1px solid #777;
  padding: 5px;
}
.taxInvoice th {
  text-align: left;
  border-bottom-width: 3px;
  font-weight: 700;
  padding: 10px 5px;
}
.taxInvoice td.price {
  text-align: right;
}
.tyreDetail {
  float: right;
  width: 270px;
  padding: 5px 0px 5px 20px;
}
.tyreDetail .thumbnail {
  float: right;
}
.tyreDetail .tyreName a {
  display: block;
  font: bold 16px/18px arial;
  padding: 4px 0 10px 0;
}
.tyreDetail .price {
  font-style: italic;
}
.tyreDetail .price:before {
  content: "Price per tyre :";
}
.tyreDetail .price .strike {
  display: inline;
  font-weight: bold;
  font-style: normal;
}
.sellerDetail {
  position: relative;
  float: left;
  width: 275px;
  min-height: 100px;
  border: 1px solid #ccc;
  padding: 15px;
  background: #efefef;
}
.sellerDetail h4 {
  display: block;
  font-size: 12px;
  margin: 0 0 5px 0;
}
/*right rail*/
.rightRail {
  float: right;
  background: url(../images/rightRail.gif) no-repeat -200px 0;
  width: 322px;
  min-height: 482px;
  padding: 0 0 0 15px;
}
.rightRail .help {
  position: relative;
  display: block;
  border-bottom: 1px solid #e3e3e3;
  height: 57px;
  font: 24px/57px Arial, Helvetica, sans-serif;
  color: #de7209;
  text-align: right;
}
.rightRail .help a {
  display: block;
  color: #de7209;
  padding: 0 45px 0 0;
}
.rightRail .help a:hover {
  text-decoration: none;
  color: #444;
}
.rightRail .help a .helpIcon {
  position: absolute;
  top: 10px;
  right: 0;
  height: 34px;
  width: 30px;
  background: url(../images/sprites.png) no-repeat 0 -90px;
}
.rightRail p {
  display: block;
  width: 173px;
  text-indent: -9999px;
  margin: 15px 0 15px 142px;
}
.rightRail ul {
  list-style: none;
  padding: 0;
  margin: 15px 0 15px 142px;
}
.rightRail ul li {
  font: 14px/18px Arial, Helvetica, sans-serif;
  color: #000;
  text-align: right;
  margin: 15px 0;
}
.rightRail ul li img {
  vertical-align: middle;
  padding: 0 5px 0 0;
}
.search .rightRail p.paragraph1 {
  height: 66px;
  background: url(../images/rightRail.gif) no-repeat -27px 0;
}
.search .rightRail p.paragraph2 {
  height: 85px;
  background: url(../images/rightRail.gif) no-repeat -27px -70px;
}
.compare .rightRail p.paragraph1 {
  height: 93px;
  background: url(../images/rightRail.gif) no-repeat -27px -160px;
}
.compare .rightRail a.step3 {
  display: block;
  height: 34px;
  background: url(../images/sprites.png) no-repeat 137px -126px;
  text-indent: -9999px;
}
.compare .rightRail a.step3:hover {
  background: url(../images/sprites.png) no-repeat 137px -160px;
}
.deal .rightRail p.paragraph1 {
  height: 94px;
  background: url(../images/rightRail.gif) no-repeat -27px -260px;
}
.deal .rightRail input {
  display: block;
  border: 1px solid #828282;
  background: #fff;
  width: 306px;
  font: 14px Arial, Helvetica, sans-serif;
  color: #000;
  padding: 7px;
  margin: 0 0 10px 0;
}
.deal .rightRail textarea {
  display: block;
  border: 1px solid #828282;
  background: #fff;
  width: 306px;
  font: 14px Arial, Helvetica, sans-serif;
  color: #000;
  padding: 7px;
  margin: 0 0 10px 0;
}
.deal .rightRail input:focus,
.deal textarea:focus {
  background: #ebebeb;
}
.deal .rightRail input[type=submit] {
  display: block;
  float: right;
  border: 0 none;
  height: 34px;
  width: 184px;
  background: url(../images/sprites.png) no-repeat 0 -194px;
  text-indent: -9999px;
}
.deal .rightRail input[type=submit]:hover,
.deal input[type=submit]:focus {
  background: url(../images/sprites.png) no-repeat 0 -228px;
  cursor: pointer;
}
.done .rightRail p {
  display: block;
  margin: 15px 0 15px 142px;
  text-indent: 0;
  width: 173px;
  font: normal 14px/18px Arial, Helvetica, sans-serif;
}
.done .rightRail p.paragraph1 {
  height: 93px;
  background: url(../images/rightRail.gif) no-repeat -27px -360px;
  text-indent: -9999px;
}
/*hot deals*/
.hotDeal {
  padding: 10px;
}
aside .hotDeal {
  padding: 13px;
  margin: 0 0 20px 0;
}
.hotDeal h2 {
  font: 24px/24px Arial, Helvetica, sans-serif;
}
aside .hotDeal h2 {
  font: 18px/24px Arial, Helvetica, sans-serif;
}
.hotDealImage {
  float: left;
  margin: 0 20px 0 0;
}
.rightRail .hotDealImage {
  float: none;
  margin: 0;
}
.hotDealImage img {
  width: 620px;
  height: auto;
  display: block;
  margin: 0 0 15px 0;
}
.rightRail .hotDealImage img {
  width: 274px;
}
.hotDealDescription {
  font: 12px/15px Arial, Helvetica, sans-serif;
}
.hotDealStartDate {
  margin-bottom: 7px;
}
.hotDealEndDate,
.hotDealStartDate {
  clear: both;
  font: 12px/16px Arial, Helvetica, sans-serif;
}
aside .hotDealEndDate,
.hotDealStartDate {
  clear: both;
  font: 12px/16px Arial, Helvetica, sans-serif;
}
.rightRail .hotDealEndDate,
.rightRail .hotDealStartDate {
  text-align: right;
}
.hotDealEndDate strong,
.hotDealStartDate strong {
  font: bold 12px/16px Arial, Helvetica, sans-serif;
  color: #de7209;
}
aside .hotDealEndDate strong,
.hotDealStartDate strong {
  font: bold 12px/18px Arial, Helvetica, sans-serif;
  color: #de7209;
}
.rightRail .hotDeal p {
  margin: 0 0 15px 0;
  text-indent: 0;
  width: auto;
}
/*extendedFooter*/
.extendedFooter {
  clear: both;
  border: 1px solid #ddd;
  min-height: 315px;
  background: #fff;
}
.extendedFooter header {
  width: 100%;
  background: #f4f4f4 url(../images/sprites.png) -965px 8px no-repeat;
  height: 34px;
  border-bottom: 1px solid #ccc;
  padding: 0;
  text-indent: -9999px;
}
.extendedFooter .column {
  height: 100%;
  width: 235px;
  float: left;
}
.extendedFooter .column h2 {
  font-size: 0.9em;
  color: #cc6600;
  padding: 14px 0 2px;
}
.extendedFooter .column.column1 {
  width: 330px;
  /*border-left: 0 none; padding: 16px 0 10px 15px;*/
}
.extendedFooter .column.column1 .adWrapper {
  height: 250px;
  wide: 300px;
}
.extendedFooter .column.column1 .adWrapper img {
  display: block;
}
.extendedFooter .column.column2 ul li {
  float: left;
  width: 115px;
  padding: 0 0 6px;
  list-style: none;
}
.extendedFooter .column.column2 ul a {
  display: block;
  font-size: 11px;
  background: url(../images/arrowBullet.png) no-repeat 5px 4px;
  color: #333;
  padding: 0 0 0 15px;
  text-decoration: none;
}
.extendedFooter .column.column2 ul a:hover {
  color: #CC6600;
}
.extendedFooter .column.column3 {
  padding: 0 0 0 15px;
  width: 385px;
}
.extendedFooter .column.column3 ul {
  float: left;
  width: 60px;
  padding: 0 15px 0 0;
}
.extendedFooter .column.column3 ul li {
  padding: 0 0 3px 0;
  list-style: none;
}
.extendedFooter .column.column3 ul li strong {
  font-size: 12px;
}
.extendedFooter .column.column3 ul a {
  display: block;
  font-size: 10px;
  color: #333;
  padding: 0;
  text-decoration: none;
}
.extendedFooter .column.column3 ul a:hover {
  color: #CC6600;
}
.extendedFooter .column.column2 table tr td {
  float: left;
  width: 115px;
  padding: 0 0 6px;
}
.extendedFooter .column.column2 table tr td a {
  display: block;
  font-size: 11px;
  background: url(../images/arrowBullet.png) no-repeat 5px 4px;
  color: #333;
  padding: 0 0 0 15px;
  text-decoration: none;
}
.extendedFooter .column.column2 table tr td a:hover {
  color: #CC6600;
}
.extendedFooter .columnDeal {
  width: 630px;
  margin-top: -2px;
  padding: 16px 0;
}
.extendedFooter .sfimageWrp {
  padding-top: 16px;
}
/*footer*/
.footer {
  clear: both;
}
.footer .wrapper {
  font: 11px/14px Arial, Helvetica, sans-serif;
  color: #999;
  padding: 15px 0;
}
.footerNav {
  width: 640px;
  margin-top: 26px;
  padding-left: 5px;
}
.footerNav ul,
.footerNav li {
  list-style: none;
  float: left;
}
.footerNav p.copyright {
  clear: left;
}
.footer a {
  color: #999;
  text-decoration: none;
  padding: 0 14px 0 0;
  line-height: 16px;
}
.footer a:hover {
  color: #000;
  text-decoration: underline;
}
.socialMedia {
  float: right;
  width: 320px;
  margin-top: -20px;
}
.socialMedia h2 {
  color: #000;
  font: bold 12px Arial, Helvetica, sans-serif;
  margin: 0 0 10px 0;
}
.socialMedia span {
  display: inline-block;
  vertical-align: top;
  max-width: 160px;
  padding: 0 8px 0 0;
}
.socialMedia a {
  padding: 0;
}
.carsales-network {
  float: right;
  clear: right;
  width: 320px;
}
.carsales-network img {
  margin-top: 20px;
}
/*mailing box*/
.footer .mailingBox {
  border: 1px solid #bbb;
  margin: 30px 0;
  padding: 10px 10px 15px 10px;
  color: #000;
}
.footer .mailingBox p {
  font-size: 12px;
}
.footer .mailingBox h3 {
  font-size: 14px;
  margin: 0 0 10px 0;
}
.footer .mailingBox .proudlyAccept {
  width: 300px;
  float: left;
}
.footer .mailingBox .joinMailing {
  width: 440px;
  float: left;
}
.footer .mailingBox input[type="text"],
.footer .mailingBox input[type="email"],
.footer .mailingBox input[type="submit"] {
  border: none;
  height: 33px;
  line-height: 33px;
  float: left;
  font-size: 12px;
}
.footer .mailingBox input[type="text"],
.footer .mailingBox input[type="email"] {
  background: #f1f1f1;
  width: 285px;
  padding: 0 10px;
}
.footer .mailingBox input[type="submit"] {
  background: #d7721a;
  color: #fff;
  width: 125px;
  font-weight: bold;
  cursor: pointer;
}
.footer .mailingBox input[type="submit"]:hover {
  background: #e15a06;
}
/*Internal Navigation*/
ul.internalNavigation {
  width: 250px;
}
ul.internalNavigation li {
  border-bottom: 1px dotted #666;
}
ul.internalNavigation li a {
  display: block;
  color: #ff6600;
  text-decoration: none;
  padding: 5px;
}
ul.internalNavigation li a:hover {
  background: #ff6600;
  color: #fff;
  text-decoration: none;
}
ul.internalNavigation li a.active {
  font-weight: 800;
}
ul.internalNavigation ul {
  padding: 0 10px;
  margin: 0 10px;
}
ul.internalNavigation ul li {
  list-style: square;
  border-bottom: none;
  padding: 0;
  margin: 0;
}
/*Breadcrumbs*/
ul.breadcrumbs {
  list-style: none;
  /*height: 12px;*/
  padding: 5px 0 0;
  font: 11px/23px Arial, helvetica, sans-serif;
  margin: 0;
}
section > ul.breadcrumbs {
  padding: 5px 10px 0;
}
ul.breadcrumbs li {
  float: left;
  display: block;
  color: #999999;
}
ul.breadcrumbs li a {
  float: left;
  display: block;
  background: url(../images/arrow_bullet.gif) no-repeat right;
  padding: 0 10px 0 0;
  margin: 0 5px 0 0;
  color: #999999;
}
/* ColorBox Core Style:*/
#colorbox,
#cboxOverlay,
#cboxWrapper {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9999;
  overflow: hidden;
}
#cboxOverlay {
  position: fixed;
  width: 100%;
  height: 100%;
}
#cboxMiddleLeft,
#cboxBottomLeft {
  clear: left;
}
#cboxContent {
  position: relative;
}
#cboxLoadedContent {
  overflow: auto;
}
#cboxTitle {
  margin: 0;
}
#cboxLoadingOverlay,
#cboxLoadingGraphic {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
#cboxPrevious,
#cboxNext,
#cboxClose,
#cboxSlideshow {
  cursor: pointer;
}
.cboxPhoto {
  float: left;
  margin: auto;
  border: 0;
  display: block;
  max-width: none;
}
.cboxIframe {
  width: 100%;
  height: 100%;
  display: block;
  border: 0;
}
#colorbox,
#cboxContent,
#cboxLoadedContent {
  box-sizing: content-box;
}
/* ColorBox User Style:*/
#cboxOverlay {
  background: #000;
}
#cboxContent {
  margin-top: 32px;
  overflow: visible;
  background: #de7209;
  padding: 5px;
  border-radius: 5px;
}
.cboxIframe {
  background: #fff;
  overflow-x: hidden;
}
#cboxError {
  padding: 50px;
  border: 5px solid #fff;
}
#cboxLoadedContent {
  background: #fff;
  padding-top: 20px;
}
#cboxLoadingGraphic {
  background: url(../images/loading.gif) no-repeat center center;
}
#cboxLoadingOverlay {
  background: #fff;
}
#cboxClose {
  position: absolute;
  top: 15px;
  right: 27px;
  border-radius: 3px 0 0 3px;
  font: 11px/23px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  color: #000;
  background: url("../images/close.gif") no-repeat scroll 100% 0 #FFFFFF;
  padding: 0 30px 0 10px;
  width: 35px;
}
#cboxClose:hover {
  color: #de7209;
}
#cboxTitle,
#cboxCurrent,
#cboxSlideshow,
#cboxPrevious,
#cboxNext {
  display: none;
}
/*colorbox content - popup*/
#cboxLoadedContent .backing {
  background: #fff;
}
#cboxLoadedContent .wrapper {
  width: 100%;
}
#cboxLoadedContent .wrapper .content {
  border: 0 none;
  padding: 0;
}
#cboxLoadedContent .wrapper .content .tabContainer {
  font: 12px/16px Arial;
}
/* myTyres list */
.myTyresList {
  font-size: 12px;
}
.myTyresList table {
  width: 100%;
}
.myTyresList table th {
  text-align: left;
  background: #de7209;
  color: #fff;
  padding: 10px;
}
.myTyresList table td {
  border-bottom: 1px solid #d0d0d0;
  vertical-align: middle;
  padding: 10px;
}
.myTyresList table td:last-child {
  width: 25px;
}
.myTyresList img {
  width: 30px;
}
a.removeMyTyre {
  display: block;
  width: 25px;
  height: 25px;
  overflow: hidden;
  background: url(../images/sprites.png) no-repeat -708px -150px;
  text-indent: -9999px;
}
/* advanced size search */
.myTyresList {
  font-size: 12px;
}
.myTyresList table {
  width: 100%;
}
.myTyresList table th {
  text-align: left;
  background: #de7209;
  color: #fff;
  padding: 10px;
}
.myTyresList table td {
  border-bottom: 1px solid #d0d0d0;
  vertical-align: middle;
  padding: 10px;
}
.myTyresList table td:last-child {
  width: 25px;
}
.myTyresList img {
  width: 30px;
}
a.removeMyTyre {
  display: block;
  width: 25px;
  height: 25px;
  overflow: hidden;
  background: url(../images/sprites.png) no-repeat -708px -150px;
  text-indent: -9999px;
}
/* product detail */
/*tabs*/
.checkout-top.checkout-tabs {
  padding-top: 0;
}
.tabs {
  background: #fff;
}
ul.tabNavigation {
  height: 33px;
  margin: 0;
  padding: 0;
}
ul.tabNavigation li {
  float: left;
  display: block;
}
.checkout-top ul.tabNavigation li {
  margin: 0 5px 0 0;
  padding: 0;
}
.checkout-top ul.tabNavigation li a {
  padding: 0 20px;
}
.checkout-tabs > div {
  border: 1px solid #F57B22;
  padding: 19px 14px;
}
ul.tabNavigation li .countdown {
  font: bold italic 12px/33px Arial, Helvetica, sans-serif;
  color: #75a948;
}
ul.tabNavigation a {
  display: block;
  height: 32px;
  border: 1px solid #999;
  border-bottom: 0 none;
  border-radius: 3px 3px 0 0;
  text-align: center;
  font: 14px/32px Arial, Helvetica, sans-serif;
  color: #666;
}
ul.tabNavigation a:hover {
  text-decoration: none;
  background: #e8e8e8;
}
ul.tabNavigation a.selected {
  background: #de7209;
  border: 1px solid #de7209;
  border-bottom: 0;
  color: #fff;
}
ol.steps {
  counter-reset: li-counter;
  list-style-type: none;
  padding: 0;
  border-bottom: 1px solid #EEE;
  padding: 0 0 10px;
}
ol.steps li:before {
  width: 21px;
  height: 21px;
  line-height: 21px;
  background: #CCC;
  border-radius: 10px;
  color: #FFF;
  content: counter(li-counter, decimal);
  counter-increment: li-counter;
  display: block;
  float: left;
  margin: 0 6px 0 0;
  text-align: center;
}
ol.steps li {
  float: left;
  position: relative;
  font-size: 14px;
  font-weight: bold;
  color: #CCC;
  margin: 0 13px 0 0;
  padding: 0 14px 0 0;
}
ol.steps li a {
  color: #CCC;
}
ol.steps li.selected:before {
  color: #FFF;
  background: #F5791F;
}
ol.steps li.selected {
  color: #F5791F;
}
.tabContainer {
  clear: both;
  font: 14px/18px Arial, Helvetica, sans-serif;
  padding: 0px 0px 10px 10px;
  font-weight: normal;
}
.tabContainer2 {
  padding: 0px 0 0px;
}
.tyredetails-info {
  float: left;
  width: 360px;
}
.tabTyreImage {
  float: left;
  width: 210px;
  margin-bottom: 20px;
}
.tabTyreImage img {
  margin: 0 0 10px 0;
  max-width: 194px;
}
.tabTyreImage input#buyNowButton {
  display: block;
  width: 100%;
  height: auto;
  border: 0 none;
  text-indent: 0;
  border-radius: 5px;
  font: bold 14px/24px Arial, Helvetica, sans-serif;
  text-align: center;
  color: #fff;
  background: #97c522;
  padding: 5px 0;
  margin-top: 10px;
}
/*reviews*/
.tabContainer .pr-widget iframe {
  width: 593px!important;
  height: 767px!important;
}
.tabContainer iframe {
  max-width: 600px;
}
.FullDetail .strike {
  display: inline-block;
  font: bold 18px/18px Arial, Helvetica, sans-serif;
  height: 22px;
  position: relative;
  width: 46px;
}
.FullDetail .strike .strikeThrough {
  background: url("../images/miniCartSprites.png") no-repeat scroll 0 -38px transparent;
  display: block;
  height: 22px;
  left: 0;
  position: absolute;
  top: 0;
  width: 46px;
}
.tabDescription {
  float: left;
}
.tabDescription {
  /*width: 380px;*/
}
.tabDescription .strike {
  display: inline-block;
  font: bold 18px/18px Arial, Helvetica, sans-serif;
  height: 22px;
  position: relative;
  width: 46px;
}
.tabDescription .strike .strikeThrough {
  background: url("../images/miniCartSprites.png") no-repeat scroll 0 -38px transparent;
  display: block;
  height: 22px;
  left: 0;
  position: absolute;
  top: 0;
  width: 46px;
}
.tabDescription .submit {
  margin-bottom: 10px;
}
.reviewDiv div.gig-rating-star {
  background-image: url(../images/starGrey.gif);
  height: 15px;
  padding-right: 3px;
  width: 16px;
}
.reviewDiv div.gig-rating-star-full {
  background-image: url(../images/starOrange.gif);
}
.reviewDiv div.gig-rating-star-half {
  background-image: url(../images/starHalf.gif);
}
.reviewDiv a.gig-rating-readReviewsLink,
.reviewDiv a.gig-rating-readReviewsLink:hover,
.reviewDiv a.gig-rating-readReviewsLink:visited,
.reviewDiv a.gig-rating-readReviewsLink:link,
.reviewDiv a.gig-rating-readReviewsLink:active {
  color: #de7209;
  margin: 0;
}
table.tyreSecifications {
  width: 100%;
}
table.tyreSecifications th {
  text-align: left;
  border-bottom: 1px solid #d0d0d0;
  background: #e8e8e8;
  padding: 10px 5px;
}
table.tyreSecifications td {
  border-bottom: 1px solid #d0d0d0;
  padding: 5px;
}
div.tabDescription h1 {
  font-family: Arial, Helvetica, Verdana, sans-serif;
  font-size: 1.417em;
  font-weight: normal;
  color: #de7209;
  margin-bottom: 0;
}
div.tabDescription h3 {
  font-family: Arial, Helvetica, Verdana, sans-serif;
  font-size: 1.25em;
  font-weight: normal;
  color: #de7209;
  margin: 15px 0 10px 0;
}
div.tabDescription p {
  margin-bottom: 10px;
}
div.tabDescription ul {
  list-style: disc;
  padding-left: 15px;
}
div.tabDescription .submit .quotebutton {
  background: url("../images/sprites.png") no-repeat scroll -278px -60px transparent;
  border: 0 none;
  border-radius: 3px 3px 3px 3px;
  color: #FFFFFF;
  display: block;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
  height: 25px;
  margin: 5px 0;
  padding: 0;
  text-align: center;
  width: 85px;
}
/*offers // reviews*/
ul.offers,
ul.reviews {
  list-style: none !important;
  padding: 0;
  margin: 0;
}
ul.reviews li {
  padding: 10px 5px;
}
ul.reviews li:hover {
  background: #efefef !important;
}
ul.reviews a {
  display: block;
  height: 73px;
  overflow: hidden;
  color: #333;
  font-size: 11px;
  padding: 7px;
  margin: 0 0 1px 0;
}
ul.offers li.altRow,
ul.reviews li.altRow {
  background: #f5f7f3;
}
ul.reviews a:hover {
  text-decoration: none;
  background: #efefef !important;
  color: #000;
}
ul.reviews .offerImage {
  display: block;
  float: left;
  width: 97px;
  height: 65px;
  border: 1px solid #dddad2;
  border-radius: 3px;
  background: #fff;
  padding: 3px;
  margin: 0 12px 0 0;
}
ul.offers .offerContent {
  float: left;
  width: 385px;
}
ul.offers a strong,
ul.reviews a strong {
  display: block;
  color: #000;
}
ul.reviews a em {
  display: block;
}
ul.offers p,
ul.reviews p {
  margin: 0;
}
ul.offers li.more {
  display: none;
}
.homeContent .column2 ul.offers li.more {
  display: block;
}
ul.offers li.more,
ul.reviews li.more {
  padding: 0;
  border-bottom: 1px solid #E1E1E1;
}
ul.offers li.more a,
ul.reviews li.more a {
  height: auto;
  background: url(../images/arrowOrange.png) no-repeat 327px 50% #f3f3f3 !important;
  text-align: right;
  color: #d46d09;
  font-weight: bold;
  padding: 5px 20px;
}
/*content columns*/
.contentRightRail .contentContainer {
  width: 100%;
  float: left;
}
.contentRightRail .rightRail {
  width: 300px;
  float: right;
  min-height: 0;
  background: none;
  padding: 0;
}
.contentRightRail .rightRail #ActivityFeed {
  margin-top: 10px;
}
.contentRightRail .rightRail #ActivityFeedConsumerReview {
  margin-top: 20px;
}
.contentRightRail .rightRail #ActivityFeedHotDeal {
  margin-top: 10px;
}
.contentRightRail table {
  clear: both;
}
/*homeContent*/
.homeContent {
  border: 1px solid #dadada;
  background: #fff;
  float: left;
  width: 960px;
  clear: both;
  padding: 15px;
  margin: 15px 0;
}
.homeContent .column .sfimageWrp,
.homeContent .column .sf_cols {
  min-height: 85px;
}
.homeContent .column .sf_cols:after {
  overflow: hidden;
}
.homeContent .column .sfimageWrp img,
.homeContent .column .sf_cols img {
  display: block;
}
/*col 1*/
.homeContent .column1 {
  width: 288px;
  float: left;
  margin: 0 10px 0 0;
}
.homeContent .column1 #container {
  margin-top: 0;
  height: 494px;
}
.homeContent .column1 #container .pagination {
  float: left;
}
.homeContent .column1 #container .poweredBy {
  float: right;
  margin-top: 9px;
}
/*col 2*/
.homeContent .column2 {
  width: 342px;
  float: left;
  margin: 0 10px 0 0;
}
ul.offers {
  list-style: none;
  margin: 0;
}
ul.offers li {
  border: 1px solid #E1E1E1;
  margin-bottom: 1px;
}
ul.offers li:last-child {
  height: 100px;
  margin-bottom: 0;
}
ul.offers li:nth-child(2n) {
  background: #efefef;
}
ul.offers a {
  display: block;
  color: #333;
  font-size: 11px;
}
ul.offers .offerImage {
  display: block;
  float: left;
  margin: 0 12px 0 0;
  height: 100px;
}
ul.offers .text {
  float: left;
  margin-top: 5px;
  width: 260px;
  display: block;
}
ul.offers .text strong {
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
}
ul.offers a strong {
  display: block;
  color: #000;
}
ul.offers p {
  margin: 0;
}
ul.offers li.more {
  border-top: 1px solid #E1E1E1;
}
ul.offers li.more a {
  height: auto;
  background: url(../images/arrowOrange.png) no-repeat 327px 50% #f3f3f3 !important;
  text-align: right;
  color: #d46d09;
  font-weight: bold;
  padding: 5px 20px;
}
ul.offers li.more a:hover {
  background: url(../images/arrowOrange.png) no-repeat 327px 50% #efefef !important;
}
.homeContent .column2 .miniAd {
  height: 80px;
}
.homeContent .column2 .miniAd ul {
  list-style: none;
  padding: 0;
  margin: 15px 0 0 0;
}
.homeContent .column2 .miniAd ul li {
  position: relative;
  float: right;
  display: block;
  width: 163px;
  height: 80px;
}
.homeContent .column2 .miniAd ul li:first-child {
  float: left;
}
.homeContent .column2 .miniAd ul a {
  display: block;
  font: 10px/14px Arial, Helvetica, sans-serif;
  color: #333;
  border: 1px solid #d8dadf;
  border-radius: 3px;
  width: 147px;
  height: 64px;
  overflow: hidden;
  padding: 7px;
}
.homeContent .column2 .miniAd ul a h3 {
  color: #000;
  font-size: 11px;
  font-weight: bold;
  margin: 0 0 5px 0;
}
.homeContent .column2 .miniAd ul a .tileImg {
  display: block;
  float: left;
  width: 50px;
  height: 45px;
}
.homeContent .column2 .miniAd ul a .text {
  display: block;
  margin: 0 0 0 55px;
}
.homeContent .column2 .miniAd ul a .more {
  position: absolute;
  bottom: 0;
  right: 10px;
  display: block;
  border: 1px solid #d8dadf;
  border-radius: 3px 3px 0 0;
  background: #fff;
  padding: 1px 6px;
}
.homeContent .column2 .miniAd ul a:hover {
  text-decoration: none;
  color: #000;
}
/*col3*/
.homeContent .column3 {
  width: 308px;
  float: left;
}
.homeContent .column.column1 h2 {
  margin-top: 15px;
}
.homeContent .column h2 {
  clear: both;
  border-bottom: 4px solid #de7209;
  font: 14px/24px Georgia, "Times New Roman", Times, serif;
  color: #333;
  min-height: 25px;
  margin: 15px 0 10px 0;
}
.homeContent .column h2 strong {
  font-family: Arial, Helvetica, sans-serif;
  background: url(../images/arrow_bullet.gif) no-repeat 100% 3px;
  padding: 0 10px 0 0;
}
.homeContent .column3 .adWrapper {
  border: 1px solid #e2e2e2;
  height: 250px;
  padding: 8px;
  margin: 0 0 16px 0;
}
.homeContent .column3 .adWrapper img {
  max-width: 100%;
}
#content.homeContent #ActivityFeed {
  border-right: 1px solid #c2c2c2;
  height: auto !important;
}
#ActivityFeed #ActivityFeed_top > table {
  border-right: 0 !important;
}
.homeContent #ActivityFeed,
.homeContent #ActivityFeed > table,
.homeContent #ActivityFeed_EF {
  height: 361px !important;
  margin-top: 0;
}
.facebookWrapper {
  border-top: 5px solid #e87d13;
}
.tyreReviewLink {
  padding: 8px;
}
.hotdealshare {
  padding: 0 0 5px 0px;
}
ul.offers li .hotdealshare {
  padding: 0 0 5px 7px;
}
.brandshare {
  padding: 0 0 15px 0;
}
.componentDivFeaturedContent {
  padding: 0 7px 7px;
}
/* Editorial Featured News */
#container {
  border: 1px solid #e1e1e1;
  padding: 9px;
}
.tabContent {
  height: 320px;
  width: 268px;
  overflow: hidden;
  margin-bottom: 10px;
}
.latestNewsItem {
  position: relative;
  height: 300px;
  border-bottom: 1px solid #e1e1e1;
  padding-bottom: 10px;
  margin-bottom: 10px;
}
.latestNewsItem img {
  display: block;
  height: 180px;
}
.latestNewsItem p {
  margin: 0;
}
.latestNewsItem .caption {
  background: #000;
  color: #fff;
  font: bold 11px/16px Arial;
  padding: 8px;
}
.latestNewsItem .description {
  font: 11px/16px Arial;
  padding: 8px;
}
.latestNewsItem a.readMore {
  display: block;
  background: #fff;
  position: absolute;
  right: 0;
  bottom: -10px;
  font: 11px/20px arial;
  padding: 0 5px;
}
#container ul.menu {
  list-style: none;
  margin: 0;
  padding: 0;
  width: 269px;
}
#container ul.menu:before,
#container ul.menu:after {
  content: "";
  display: table;
}
#container ul.menu:after {
  clear: both;
}
#container ul.menu {
  *zoom: 1;
}
#container ul.menu li {
  float: left;
  border-bottom: 2px solid #fff;
  margin: 0 4px 2px 0;
}
#container ul.menu li.active {
  border-bottom: 2px solid #de7209;
}
#container ul.menu a,
#container ul.menu img {
  display: block;
}
#container.largeGallery {
  position: relative;
  border: 0 none;
  border-top: 4px solid #de7209;
  background: #eaeaea;
  width: 605px;
  margin-bottom: 15px;
}
.tabContentLargeGallery {
  border: 1px solid #e1e1e1;
  background: #fff;
  padding: 2px;
  height: 310px;
  width: 427px;
  overflow: hidden;
  float: left;
}
.tabContentLargeGallery div,
.tabContentLargeGallery div img {
  display: block;
}
#container.largeGallery ul.menu {
  float: right;
  width: 168px;
}
#container.largeGallery ul.menu li {
  border: 1px solid #e1e1e1;
  background: #fff;
  padding: 2px;
  margin: 0 0 2px 4px;
}
.largeGallery .pagination {
  position: absolute;
  right: 0;
  bottom: 0;
  width: 168px;
}
.largeGallery .pagination a {
  height: 20px;
  width: 20px;
  text-indent: -9999px;
  background: url(../images/sprites.png) no-repeat 0 0;
  padding: 0;
  margin: 0;
}
.largeGallery .pagination a.left {
  background-position: -710px -184px;
}
.largeGallery .pagination a.right {
  background-position: -730px -184px;
}
.largeGallery .pagination p.number {
  float: left;
  width: 117px;
  text-align: center;
  line-height: 20px;
  margin: 0;
}
@media all and (max-width: 1024px) {
  .wrapper {
    width: 992px;
  }
  .header,
  .extendedFooter,
  .footer {
    border: 0 none;
  }
}
/* get quote  popup */
body.no-bg {
  background: none;
}
.getquote {
  position: absolute;
  width: 804px;
  background: #fff;
  padding-top: 5px;
}
.getquote > div {
  float: left;
  width: 382px;
  padding: 5px;
}
.getquote .quoteForm {
  padding: 19px 19px 0;
}
.getquote .quoteForm:before,
.getquote .quoteForm:after {
  content: "";
  display: table;
}
.getquote .quoteForm:after {
  clear: both;
}
.getquote .quoteForm {
  *zoom: 1;
}
.getquote .quoteForm .newListSelected {
  width: 252px;
}
.getquote h3 {
  margin: 0;
  font-size: 18px;
  line-height: 18px;
  color: #222222;
  font-family: sans-serif;
}
.getquote h2 {
  margin: 10px 0;
  font-size: 14px;
  line-height: 14px;
  color: #de7209;
  text-decoration: none;
  font-weight: bold;
  line-height: 16px;
}
.getquote p {
  font-style: italic;
  font-size: 14px;
}
.getquote ul.tyreList {
  list-style: none;
}
.getquote ul.tyreList > li:first-child {
  border-top: 1px solid #ddd;
}
.getquote ul.tyreList > li {
  border-bottom: 1px solid #ddd;
  padding: 8px 0 11px;
}
.getquote ul.tyreList > li .thumbnail {
  float: left;
  width: 17%;
  height: 50px;
}
.getquote ul.tyreList > li .thumbnail a img {
  max-height: 100%;
  display: block;
  margin-top: 12px;
}
.getquote ul.tyreList > li .detail {
  float: left;
  padding-left: 11px;
  display: block;
  position: relative;
  width: 79%;
  font-size: 12px;
}
.getquote ul.tyreList > li .removeTyre {
  width: 17px;
  height: 17px;
  background: #f4f4f4 url(../images/miniCartSprites.png) 0px 0px no-repeat;
  position: absolute;
  right: 0px;
  cursor: pointer;
}
.getquote ul.tyreList > li a {
  color: #de7209;
  text-decoration: none;
  font-weight: bold;
  font-size: 14px;
  display: block;
  margin-bottom: 5px;
}
.getquote ul.tyreList label {
  float: left;
  padding-top: 5px;
  padding-right: 6px;
  font-weight: bold;
}
.getquote ul.tyreList .price {
  margin-bottom: 7px;
}
.getquote ul.tyreList .price .strike {
  position: relative;
  font: bold 18px/18px Arial, Helvetica, sans-serif;
  width: 46px;
  height: 22px;
  display: inline-block;
  margin-top: 5px 0;
}
.getquote ul.tyreList .price .askdeal {
  padding-left: 8px;
}
.getquote ul.tyreList .price .strike .strikeThrough {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 46px;
  height: 22px;
  background: url(../images/miniCartSprites.png) no-repeat 0px -38px;
}
.getquote div.tyreList {
  padding: 8px 28px 28px;
  width: 346px;
}
.getquote .searchField {
  position: relative;
  padding-bottom: 0;
}
.getquote .searchField:before,
.searchField:after {
  content: "";
  display: table;
}
.getquote .searchField:after {
  clear: both;
}
.getquote .searchField {
  *zoom: 1;
}
.getquote .searchField label {
  width: 90px;
  display: block;
  float: left;
  font-weight: bold;
  line-height: 36px;
}
.getquote .searchField input {
  display: block;
  border: 1px solid #828282;
  background: #efefef;
  width: 238px;
  font: 14px Arial, Helvetica, sans-serif;
  color: #000;
  padding: 7px;
  margin: 0 0 5px 0;
  height: 16px;
}
.getquote .searchField textarea {
  display: block;
  border: 1px solid #828282;
  background: #efefef;
  width: 238px;
  font: 14px Arial, Helvetica, sans-serif;
  color: #000;
  padding: 7px;
  margin: 0;
  height: 50px;
}
.getquote .searchField input:focus,
.getquote .searchField textarea:focus {
  box-shadow: 0 0 5px 0 #ccc;
  background: #fff;
}
.getquote .searchField input.shortField {
  width: 108px;
}
.getquote .searchField .fieldLabel {
  display: none;
}
.getquote .chkSubscribeToNewsletter {
  margin: 0 5px 0 90px;
  height: 19px;
  top: 4px;
  position: relative;
}
.getquote .getQuoteButton {
  float: right;
  margin-top: 15px;
  background-image: url(../images/getquotes.png);
  border: none;
  width: 164px;
  height: 53px;
}
.getquote .getQuoteButton:hover {
  cursor: pointer;
  zoom: 1;
  filter: alpha(opacity=90);
  opacity: 0.9;
}
.getquote .quoteForm .error {
  top: 4px;
  left: 315px;
}
.getquote .quoteForm .error:hover {
  width: 221px;
  left: 94px;
  background: url(../images/error.png) no-repeat 223px 1px #cc0000;
  padding: 0 25px 0 0;
}
.processDiv {
  width: auto;
  border: 5px solid #ccc;
  background: #efefef;
  text-align: center;
  font: 11px/20px arial;
  text-transform: uppercase;
  padding: 20px;
}
.processDiv h3 {
  display: none;
}
/* carousel */
.r-module:after,
.r-row:after,
.r-col-last:after {
  clear: both;
  display: block;
  visibility: hidden;
  overflow: hidden;
  height: 0 !important;
  line-height: 0;
  content: " ";
}
.r-module,
.r-row {
  *zoom: 1;
}
.r-module span.chevron {
  background: transparent url(../images/editorial-icons.png) no-repeat scroll 0 -21px;
  display: inline-block;
  height: 9px;
  width: 11px;
  z-index: 0;
  margin-left: 7px;
  line-height: 16px;
  top: 9px;
  position: absolute;
}
.r-module .csn-carousel span.chevron {
  top: 8px;
}
.r-module.carousel-landscape {
  margin-top: 14px;
}
.r-module h3 {
  border-bottom: 2px solid #DE7209;
  font-size: 14px;
  line-height: 16px;
  margin: 0;
  padding: 4px 0;
  font-weight: bold;
  color: #222222;
}
.r-module h3 em {
  font-family: Georgia, serif;
  font-size: 13px;
  font-weight: normal;
  color: #333;
  line-height: 16px;
  position: absolute;
  margin-left: 16px;
}
.carousel-landscape h3 {
  background-color: #fff;
}
.carousel-landscape .csn-carousel {
  background: #fff;
  overflow: hidden;
  *zoom: 1;
  position: relative;
  padding-bottom: 19px;
}
.carousel-landscape .thumbs {
  width: 100%;
  background: transparent none;
  border: none;
  /*border:1px solid #c0cbd7;*/
}
.carousel-landscape .item {
  padding: 10px 0 0 5px;
}
.carousel-landscape .item img {
  float: left;
  margin: 0 0 6px 5px;
  z-index: 0!important;
}
.carousel-landscape .frame {
  margin: 0 5px 10px 5px;
  padding: 0;
  width: 292px;
  height: 200px;
  overflow: hidden;
  display: inline;
}
.carousel-landscape .frame img {
  margin: 0px;
}
.carousel-landscape .desc {
  float: right;
  height: 113px;
  width: 310px;
}
.carousel-landscape .desc h4 {
  margin: 0 10px 0 0;
  padding: 0 0 8px;
}
.carousel-landscape .desc h4 a {
  color: #000;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}
.carousel-landscape .desc p {
  color: #FFFFFF;
  font-family: Arial;
  font-size: 11px;
  line-height: 16px;
  color: #000;
  margin: 0 10px 0 0;
}
.carousel-landscape .item .more {
  background-color: #EEF4FB;
  color: #000000;
  display: block;
  position: absolute;
  right: 10px;
  top: 141px;
  text-align: center;
  text-decoration: none;
  font-size: 10px;
  font-weight: bold;
  background: url(../images/editorial-icons.png) no-repeat scroll 56px -32px transparent;
  color: #004D76;
  padding-right: 12px;
}
.carousel-landscape .item .more:hover {
  text-decoration: none;
}
.carousel-landscape .thumbs li a:hover span,
.csn-carousel .thumbs a.selected span {
  display: block;
  position: absolute;
  bottom: -4px;
  _bottom: -5px;
  height: 7px;
  width: 70px;
  overflow: hidden;
  left: 0;
  background-color: #EE7D0C;
}
.carousel-landscape .foot {
  background-color: #FFFFFF;
  float: right;
  margin: 10px 10px 10px 0;
  overflow: hidden;
  padding: 5px 5px 0 0;
  width: 300px;
}
.carousel-landscape .foot li {
  float: left;
  margin: 0 0 5px 5px;
  _margin: 0 0 5px 3px;
  overflow: hidden;
  padding: 0;
  position: relative;
}
.carousel-landscape .foot .status {
  background-color: #000;
  color: #FFFFFF;
  font-size: 11px;
  font-weight: bold;
  left: 10px;
  padding: 8px 10px;
  position: absolute;
  top: 238px;
  width: 272px;
}
.carousel-landscape .foot .status var {
  font-style: normal;
  color: #f96;
}
.carousel-landscape hr {
  border: 0;
  border-top: 1px solid #c0cbd7;
  height: 1px;
  left: 313px;
  top: 148px;
  *top: 148px;
  position: absolute;
  width: 229px;
}
/* news reviews videos landing page */
.csn-feed {
  padding-top: 1px;
  position: relative;
}
.csn-feed h5 {
  clear: both;
  font-size: 12px;
  font-weight: bold;
  padding: 5px 0;
  margin: 0;
}
.editorial-tabs-panel {
  margin: 0;
  list-style-type: none;
  clear: left;
}
.editorial-tabs-panel .items {
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.editorial-tabs-panel li {
  overflow: hidden;
  background-color: #f7faff;
  *margin-bottom: -3px;
  _zoom: 1;
  border-bottom: 1px solid #e7ebf0;
}
.editorial-tabs-panel li a {
  display: block;
  text-decoration: none;
  overflow: hidden;
  float: left;
  _zoom: 1;
  padding: 8px 8px 9px;
}
.editorial-tabs-panel li a:hover {
  text-decoration: underline;
}
.editorial-tabs-panel li.alt a:hover {
  background-color: #F1F2F5;
}
.editorial-tabs-panel li.alt,
.twitter-feed li.alt,
.comments-feed li.alt {
  background-color: #fcfcfc;
}
.editorial-tabs-panel .last {
  border: 0;
}
.editorial-tabs-panel .image-container {
  float: left;
  background-color: #fff;
  padding: 3px;
  margin-right: 11px;
  width: 97px;
  overflow: hidden;
  border: 1px solid #D0D0D0;
  border-radius: 3px;
}
.editorial-tabs-panel .portrait {
  margin: 0 auto;
}
.editorial-tabs-panel img {
  display: block;
  margin: auto;
}
.editorial-tabs-panel a img {
  border: 0;
}
.editorial-tabs-panel div {
  margin-left: 118px;
  font-size: 11px;
  color: #666;
}
.editorial-tabs-panel h4 {
  font-size: 11px;
  color: #004d76;
  margin: 0;
  padding: 0;
  line-height: 13px;
}
.editorial-tabs-panel h4 a {
  color: #004d76;
  text-decoration: none;
}
.editorial-tabs-panel p {
  color: #333333;
  font-size: 11px;
  line-height: 13px;
  margin: 0 0 0 117px;
  padding: 4px 0 0;
}
.editorial-tabs-panel .timestamp {
  font-family: Georgia, serif;
  font-style: italic;
  font-size: 10px;
}
.editorial-tabs-panel .loading,
.social-media-container .loading {
  background: #fff url(/CarContent/cs/ajax-loading.gif) no-repeat;
  font-size: 11px;
  float: left;
  margin: 10px 0 0 10px;
  padding: 2px 0 5px 21px;
  height: 16px;
  color: #666;
}
.editorial-tabs-panel .loading:hover,
.social-media-container .loading:hover {
  background-color: #fff;
}
.editorial-tabs-panel .loading {
  width: 318px;
}
.social-media-container .loading {
  width: 258px;
}
.editorial-tabs .footer {
  background: #f0f3fc;
  padding: 9px 10px 9px 15px;
  margin-top: 6px;
  overflow: hidden;
  *zoom: 1;
}
.editorial-tabs .footer a {
  font-weight: bold;
  text-decoration: none;
  color: #000;
  float: right;
  font-size: 10px;
}
.csn-feed ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.csn-feed .module-tabs-menu {
  display: none;
}
/* Hide "Latest" tabs as there is only one visible */
.csn-feed .editorial-tabs-panel li {
  display: block;
  font-size: 11px;
  width: 196px;
  background: transparent none;
  border-bottom: none;
  float: left;
  padding: 10px 8px 8px 9px;
}
.csn-feed .editorial-tabs-panel li:hover {
  background-color: transparent;
}
.csn-feed .editorial-tabs-panel ul.items li:first-child {
  padding-left: 0;
}
.csn-feed .editorial-tabs-panel ul.items li:last-child {
  padding-right: 0;
}
.csn-feed .editorial-tabs-panel li h4 {
  font-family: Georgia, Times New Roman, Serif;
}
.csn-feed .editorial-tabs-panel li h4 a {
  width: 100%;
  padding: 0;
}
.csn-feed .editorial-tabs-panel li h4 a,
.csn-feed .other-items .caption,
.csn-feed .other-items li .details {
  color: #DE7209;
  font-size: 11px;
  font-weight: bold;
  text-decoration: none;
  background-color: transparent;
  margin-bottom: 5px;
}
.csn-feed .editorial-tabs-panel li h4 a:hover,
.csn-feed .other-items .caption:hover,
.csn-feed .other-items li .details:hover {
  text-decoration: underline;
  background-color: transparent;
}
.editorial-tabs-panel p {
  margin: 0;
}
.csn-feed .image-container {
  -moz-border-radius: 3px 3px 3px 3px;
  border: 1px solid #DDDDDD;
  float: left;
  margin-bottom: 8px;
  margin-right: 0px;
  overflow: hidden;
  padding: 2px;
  width: 190px;
  height: 132px;
}
.csn-feed .other-items {
  padding-bottom: 8px;
}
.csn-feed .other-items li {
  color: #666666;
  font-size: 11px;
  list-style-type: none;
  overflow: hidden;
  padding: 5px 0px 0 10px;
  float: none;
  width: auto;
  background: transparent url(../images/editorial-module-sprite.png) no-repeat scroll 0 9px;
}
.csn-feed .editorial-tabs-panel div {
  margin-left: 71px;
}
.csn-feed h5 {
  background: transparent url(../images/other-news-heading-line.png) no-repeat scroll 80px center;
}
.csn-feed .other-items .caption {
  margin-right: 5px;
  width: auto;
  padding: 0;
}
.csn-feed .other-items li .details {
  float: right;
  background: url("../images/icons-sprite.png") no-repeat scroll 0 -54px transparent;
  font-weight: normal;
  padding: 0 0 0 10px;
  width: auto;
  height: 12px;
  margin-left: 3px;
}
.csn-feed .footer {
  margin-top: 5px;
  overflow: hidden;
  padding: 5px;
  clear: both;
  background: #f7f7f7 url(../images/editorial-module-sprite.png) repeat-x scroll 0 -65px;
  *zoom: 1;
}
.csn-feed .footer a {
  color: #000;
  float: right;
  font-size: 11px;
  font-weight: bold;
  line-height: 9px;
  padding: 3px 12px 3px 0;
  text-decoration: none;
  background: transparent url(../images/icon-more-link-chevron.gif) no-repeat scroll 100% 4px;
}
.csn-feed .footer a:hover {
  text-decoration: underline;
}
.videoList {
  padding: 0 10px 10px;
}
.videoList h2 {
  font-size: 16px;
  font-weight: bold;
  padding: 5px 0;
  border-bottom: 2px solid #de7209;
  color: #222;
  list-style-type: none;
  margin-bottom: 0;
}
.videoList a:hover {
  text-decoration: none;
}
.videoList .items {
  list-style: none;
  margin: 0;
  padding: 0;
}
.videoList .items li {
  background: none repeat scroll 0 0 #fcf6f0;
  border-bottom: 1px solid #fff;
  border-right: 6px solid #fff;
  cursor: pointer;
  float: left;
  height: 180px;
  margin-bottom: 5px;
  padding: 7px;
  text-align: left;
  width: 135px;
  text-overflow: ellipsis;
  overflow: hidden;
}
.videoList #sideListVideo div > a {
  background: none repeat scroll 0 0 #fcf6f0;
  border-bottom: 1px solid #fff;
  border-right: 6px solid #fff;
  cursor: pointer;
  float: left;
  height: 200px;
  margin-bottom: 5px;
  padding: 8px;
  text-align: left;
  width: 135px;
  text-overflow: ellipsis;
  overflow: hidden;
}
.videoList .items li:hover,
.videoList #sideListVideo div > a:hover {
  background: #dfd8d2;
  /*css3 transition*/
  transition: all 400ms ease-in-out;
}
.videoList .items li.lastInRow {
  border-right: none;
}
.videoList .items li h4,
.videoList #sideListVideo div h4 {
  color: #000;
  display: block;
  font-size: 11px;
  margin: 5px 0;
  line-height: 13px;
}
.videoList .items li a img,
.videoList #sideListVideo div a img {
  max-width: 135px;
  display: block;
  margin: auto;
}
.videoList .items li p,
.videoList #sideListVideo div p {
  font-size: 11px;
  color: #666;
  margin: 0;
  display: block;
  font-size: 10px;
  font-weight: normal;
  text-overflow: ellipsis;
}
.videoList .footer a {
  display: block;
  text-align: right;
  background: #dfd8d2;
  line-height: 30px;
  margin: 0px;
  padding: 0px;
  color: black;
  font-size: 10px;
  text-decoration: none;
  padding-right: 5px;
}
.videoList #sideListVideo div.pager > span {
  display: block;
  text-align: right;
  background: #dfd8d2;
  line-height: 30px;
  margin: 0px;
  padding: 0px;
  color: black;
  font-size: 10px;
  text-decoration: none;
  padding-right: 5px;
  clear: left;
}
.videoList .footer a:hover {
  text-decoration: underline;
}
/* news page */
.panelDetails {
  padding: 0 10px 10px;
}
/*help - faq*/
.faq {
  display: block;
  padding: 0 0 0 5px;
  position: relative;
  vertical-align: middle;
}
.checkout-deal .floatRight .faq {
  vertical-align: middle;
  display: block;
  padding: 0 0 0 5px;
  font-weight: 400;
  color: #666;
}
label .faq > img {
  top: -16px;
}
.tireSizes .faq {
  top: -18px;
}
.faq > img {
  position: absolute;
  top: -1px;
  right: 0;
  cursor: pointer;
}
.faq .helpText {
  display: none;
}
.faq:hover .helpText {
  position: absolute;
  right: 5px;
  top: 5px;
  display: block;
  width: 302px;
  overflow: hidden;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: #ebebeb;
  box-shadow: 0 0 5px 0 #999;
  font: 11px/14px arial;
  color: #666;
  padding: 10px;
  z-index: 999;
}
label .faq:hover .helpText {
  top: -5px;
}
div#size.tabPanel .faq,
div#brand.tabPanel .faq {
  top: -17px;
  position: absolute;
  right: 1px;
  z-index: 99;
}
section div#size.tabPanel .faq,
section div#brand.tabPanel .faq {
  top: -5px;
  position: absolute;
  right: 1px;
}
/* editorial listing page */
.editorial-section {
  margin: 0;
  list-style-type: none;
  clear: left;
  padding: 10px 0;
}
.editorial-section h2 {
  margin: 0 0 4px;
  font-size: 24px;
}
.editorial-section .items {
  padding: 0;
  margin: 0;
  list-style-type: none;
}
.editorial-section li {
  overflow: hidden;
  *margin-bottom: -3px;
  border-bottom: 1px solid #D0D0D0;
  padding: 10px 0;
}
.editorial-section li a {
  text-decoration: none;
}
.editorial-section li a:hover {
  background-color: #e9f0ff;
}
.editorial-section li.alt a:hover {
  background-color: #F1F2F5;
}
.editorial-section li.alt,
.twitter-feed li.alt,
.comments-feed li.alt {
  background-color: #fcfcfc;
}
.editorial-section .last {
  border: 0;
}
.editorial-section .image-container {
  float: left;
  background-color: #fff;
  padding: 3px;
  width: 97px;
  overflow: hidden;
  border: 1px solid #D0D0D0;
  border-radius: 3px;
}
.editorial-section .portrait {
  margin: 0 auto;
}
.editorial-section img {
  display: block;
  margin: auto;
}
.editorial-section a img {
  border: 0;
}
.editorial-section ul.items li > div {
  float: left;
  padding: 8px;
}
.editorial-section ul.items li > div.rightCol {
  width: 363px;
  padding: 8px 8px 0 0;
}
.editorial-section ul.items li > div.socialMedia {
  padding: 0;
}
.editorial-section ul.socialMedia {
  clear: both;
  display: block;
  float: none;
  list-style: none;
  height: auto;
  width: auto;
  padding-left: 6px;
}
.editorial-section ul.socialMedia li {
  float: left;
  padding: 0 2px 5px;
}
.editorial-section ul.socialMedia li a.facebook {
  background: url(../images/editorial-icons.png) no-repeat 0 -50px;
  display: block;
  height: 16px;
  width: 16px;
}
.editorial-section ul.socialMedia li a.twitter {
  background: url(../images/editorial-icons.png) no-repeat 0 -69px;
  display: block;
  height: 16px;
  width: 16px;
}
.editorial-section ul.socialMedia li a.pinterest {
  background: url(../images/pinterest.png) no-repeat 0 0px;
  display: block;
  height: 16px;
  width: 16px;
}
.editorial-section ul.socialMedia li a.print {
  background: url(../images/editorial-icons.png) no-repeat 0 -50px;
  display: block;
  height: 16px;
  width: 16px;
}
.editorial-section ul.socialMedia li a.email {
  background: url(../images/editorial-icons.png) no-repeat 0 -50px;
  display: block;
  height: 16px;
  width: 16px;
}
.editorial-section h4 {
  font-size: 12px;
  color: #DE7209;
  margin: 0;
  padding: 0;
  line-height: 13px;
}
.editorial-section h4 a {
  color: #004d76;
  text-decoration: none;
}
.editorial-section p {
  color: #333333;
  font-size: 11px;
  line-height: 13px;
  /*margin: 0 0 0 117px;*/
  padding: 4px 0 0;
}
.editorial-section .loading,
.social-media-container .loading {
  background: #fff url(/CarContent/cs/ajax-loading.gif) no-repeat;
  font-size: 11px;
  float: left;
  margin: 10px 0 0 10px;
  padding: 2px 0 5px 21px;
  height: 16px;
  color: #666;
}
.editorial-section .loading:hover,
.social-media-container .loading:hover {
  background-color: #fff;
}
.editorial-section .loading {
  width: 318px;
}
/* Feedback floater */
#FeedBack {
  position: fixed;
  overflow: hidden;
  top: 23%;
  border: solid 2px #fff;
  height: 160px;
  white-space: nowrap;
  z-index: 200;
  right: 0px;
}
#Zsmenu.lhnInviteContainer {
  position: fixed;
  left: -99999px;
  bottom: 10px;
  width: 302px;
  z-index: 101;
  background-image: url(/Images/LiveChatGraphic-person.png);
  background-position: bottom right;
  background-repeat: no-repeat;
}
.lhnInviteContainer {
  background-image: url(/Images/LiveChatGraphic-person.png);
  background-position: bottom right;
  background-repeat: no-repeat;
}
/*.InviteAcceptButtonWrap {
    text-align: center;
}*/
.NeepHelpContactNumber {
  background: #97C522;
  font: 18px/42px Arial, Helvetica, sans-serif;
  font-weight: 700;
  border-radius: 5px;
  min-width: 37%;
  border: 0;
  color: #fff;
  display: inline-block;
  line-height: 14px;
  padding: 13px 35px 11px;
  text-align: center;
  text-decoration: none;
  margin-top: 1em;
}
.LHNInviteAcceptButton {
  background: #97C522;
  /*#F57E21;*/
  font: 18px/42px Arial, Helvetica, sans-serif;
  font-weight: 700;
  border-radius: 5px;
  min-width: 37%;
  border: 0;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  line-height: 14px;
  padding: 13px 35px 11px;
  text-align: center;
  text-decoration: none;
  margin-top: 1em;
}
.LHNInviteAcceptButton:hover {
  background-color: #66A210;
  color: #fff;
  text-decoration: none;
}
.LHNInviteCloseButton {
  color: #97C522;
  /*#F57E21;*/
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
  margin: 16px 16px 0 0;
  font-size: 15px;
  font-weight: bold;
}
.LHNInviteCloseButton:hover {
  color: #66A210;
  text-decoration: none;
}
.LHNInviteTitle img {
  margin-left: 0px !important;
}
/*.LHNInviteTitle h2{
    color: #000;
    font-family: "Helvetica Neue","Segoe UI",Segoe,Helvetica,Arial,"Lucida Grande",sans-serif;
    font-size: 24px;
    font-weight: 100;
}*/
/*.LHNInviteTitle h2:before {
    background: url("/images/speech-bubble.png") no-repeat scroll 0 0 transparent;
    content: "";
    width: 43px;
    height: 32px;
    display: inline-block;
    vertical-align: middle;
    float: left;
    margin-right: 16px;
}*/
.LHNInviteMessage {
  font-size: 13px;
}
.LHNInviteMessage p {
  margin-top: 10px;
}
.LHNInviteMessage span {
  color: #97C522;
  /*#F57E21;*/
  font-weight: bold;
}
/* Sitefinity Content Block */
.sfContentBlock {
  padding: 10px;
}
.sfContentBlockNoBorder {
  background: none !important;
  border: none !important;
}
.column .sfContentBlock {
  padding: 0;
}
/* feedback form */
.feedbackForm {
  box-sizing: border-box;
  font: 13px Arial, sans-serif;
  margin: 20px;
}
.feedbackForm .sfFormBox:before,
.feedbackForm .sfFormBlock:before,
.feedbackForm .sfFormBox:after,
.feedbackForm .sfFormBlock:after {
  content: "";
  display: table;
}
.feedbackForm .sfFormBox:after,
.feedbackForm .sfFormBlock:after {
  clear: both;
}
.feedbackForm .sfFormBox,
.feedbackForm .sfFormBlock {
  *zoom: 1;
}
.feedbackForm label.sfTxtLbl {
  display: block;
  float: left;
  width: 105px;
  font-weight: bold;
  line-height: 32px;
}
.feedbackForm .sfFieldWrp {
  display: block;
  float: left;
  width: 254px;
  padding-bottom: 7px;
}
.feedbackForm .sfFieldWrp input[type="text"],
.feedbackForm .sfFieldWrp textarea {
  border: 1px solid #ccc;
  background: #eaeaea;
  font: 14px arial;
  height: 16px;
  width: 238px;
  padding: 7px;
}
.feedbackForm .sfFieldWrp textarea {
  height: 100px;
}
.feedbackForm .sfFieldWrp input[type="text"]:focus,
.feedbackForm .sfFieldWrp textarea:focus {
  box-shadow: 0 0 5px 0 #ccc;
  background: #fff;
}
.feedbackForm .sfFormSubmit {
  padding-left: 105px;
}
.feedbackForm .sfFormSubmit input[type=submit] {
  width: auto;
  box-sizing: border-box;
  border: 1px solid #de7209;
  border-radius: 3px;
  cursor: pointer;
  padding: 5px 15px;
  vertical-align: top;
  margin: 0;
  background: url(../images/sprites.png) no-repeat -278px -61px;
  color: #fff;
  text-transform: uppercase;
}
.feedbackForm .sfFormSubmit input[type=submit]:hover,
.feedbackForm .sfFormSubmit input [type=submit]:focus {
  background: #de7209;
}
.feedbackForm h2.info {
  margin: 4px 10px 17px 0;
  background: url(../images/sprites.png) no-repeat 0 -90px;
  display: block;
  float: left;
  width: 30px;
  height: 35px;
  font-size: 0px;
}
.feedbackForm .sfFormInstructions {
  margin-left: 50px;
  font-size: 11px;
  padding: 0;
}
.feedbackForm .sfContentBlock p {
  margin: 4px 0;
}
.feedbackForm a {
  color: #de7209;
  text-decoration: none;
}
.feedbackForm a:hover {
  color: #000;
  text-decoration: underline;
}
.feedbackForm .feedbackFooter br {
  display: none;
}
.dynamicTitle {
  padding-left: 10px !important;
  padding-bottom: 0 !important;
}
.dynamicTitle h2 {
  margin-bottom: 5px;
}
/*ask greg module*/
.questionForm {
  max-width: 603px;
  /*height:481px; */
  font: 14px/18px arial;
  color: #fff;
  background: url(/images/askGreg.jpg) no-repeat;
  padding: 20px;
  margin: auto;
  position: relative;
}
.questionForm h2 {
  font: bold 66px/90px arial;
  color: #fff;
  margin: 0;
}
.questionForm p {
  font-weight: bold;
  line-height: 16px;
  max-width: 300px;
}
.sponsor {
  margin: 20px 0;
}
.questionForm textarea {
  display: block;
  width: 271px;
  height: 140px;
  border: 1px solid #b7b7b7;
  border-radius: 3px;
  background: #fff;
  color: #666;
  padding: 10px;
  margin: 10px 0;
}
.questionForm input[type="text"] {
  display: block;
  width: 271px;
  border: 1px solid #b7b7b7;
  border-radius: 3px;
  background: #fff;
  color: #666;
  padding: 10px;
  margin: 10px 0;
}
.questionForm input[type="text"] {
  width: 200px;
}
.questionForm input[type="submit"] {
  display: block;
  width: 136px;
  height: 33px;
  border: 0 none;
  border-radius: 3px;
  background: #f57d20;
  font: bold 16px/33px arial;
  text-align: center;
  color: #fff;
  padding: 0;
  margin: 10px 0;
}
.questionForm textarea:focus,
.questionForm input[type="text"]:focus {
  box-shadow: 0 0 5px 0 #888;
  border: 1px solid #666;
}
.questionForm input[type="submit"]:focus,
.questionForm input[type="submit"]:hover {
  background: #f56120;
  cursor: pointer;
}
.sponsorDetail {
  max-width: 603px;
  background: #fff;
  font: 12px/17px arial;
  color: #333;
  padding: 20px;
}
.sponsorDetail img {
  float: left;
  margin: 0 20px 0 0;
}
.sponsorDetail h3 {
  font: bold 15px arial;
  color: #000;
  margin: 0;
}
.sponsorDetail p {
  max-width: 480px;
}
/*ask greg side*/
.homeContent .column3 .banner-ad {
  margin-left: 8px;
}
aside .questionForm,
.homeContent .questionForm {
  width: 266px;
  min-height: 300px;
  background: url(/images/askGregMini.jpg) #fff no-repeat 50% 0px !important;
  background-size: cover !important;
  font: 11px/14px 'Arial', sans-serif;
  padding: 0 17px;
  margin: 17px;
}
aside .questionForm a {
  display: inline;
}
aside .questionForm a:hover {
  background-color: white;
}
.homeContent .questionForm {
  margin: 17px 0 0 8px;
}
aside .questionForm .error,
.homeContent .questionForm .error {
  color: #fff;
}
aside .questionForm {
  margin: 17px auto;
}
aside .questionForm h2,
.homeContent .column .questionForm h2 {
  font: 34px/46px 'Arial', sans-serif;
  color: #fff;
  border: 0;
  min-height: 0;
  margin: 0;
}
aside p,
.homeContent p {
  margin-bottom: 5px;
}
aside a,
aside img,
.homeContent a,
.homeContent img {
  display: block;
}
aside .sponsor,
.homeContent .sponsor {
  margin: 4px 0;
}
aside .questionForm textarea,
.homeContent .questionForm textarea {
  height: 60px;
  width: 190px;
  margin: 4px 0;
}
aside .questionForm input[type='text'],
.homeContent .questionForm input[type='text'] {
  width: 190px;
  margin: 4px 0;
}
aside .questionForm span,
.homeContent .questionForm span {
  display: block;
}
aside .questionForm .error,
.homeContent .questionForm .error {
  line-height: 4px;
}
#ContentPlaceHolder1_C002_UpdatePanel .searchOptions {
  width: auto;
  height: auto;
  border: 0;
  padding: 0;
}
/*Get help Form*/
.getHelpForm {
  min-height: 436px;
  background: transparent none;
  height: auto;
  padding: 0px;
  margin: 1em 2%;
}
.getHelpForm h1 {
  color: #000;
  width: 360px;
  font-weight: bold;
}
.getHelpForm p {
  font-size: 12px;
  width: 350px;
}
.getHelpForm label {
  font-weight: bold;
  display: block;
  float: left;
  width: 100px;
}
.getHelpForm input[type="text"],
.getHelpForm textarea {
  background-color: #EEEEEE;
  border: medium none;
  display: block;
  float: left;
  padding: 5px;
  color: #918D8F;
  width: 238px;
}
.getHelpForm textarea {
  height: 125px;
}
/*Get help Form in Search Result*/
.getHelpForm {
  background: none;
  /*height: 436px;*/
  padding: 0 0 0 10px;
}
.getHelpForm p {
  width: auto;
}
.getHelpForm .getQuoteButton {
  background: none repeat scroll 0 0 #DE7209;
  border: medium none;
  border-radius: 4px 4px 4px 4px;
  color: #FFFFFF;
  display: block;
  padding: 3px;
  text-transform: uppercase;
  width: 84px;
  margin: 0 0 0 100px;
  /*float: left;*/
  font: bold 14px/19px Arial;
  height: 33px;
}
section .getHelpForm .searchField {
  float: none;
  margin-left: 0 !important;
  width: 100%;
}
section .getHelpForm .searchField:nth-child(1) {
  margin-left: 0 !important;
}
div.RadTreeView_Sitefinity a.rtIn {
  color: #000;
}
.helpFindTyreLink {
  position: absolute;
  bottom: 5px;
  right: 0;
  font-size: 11px;
}
section .helpFindTyreLink {
  position: relative;
  bottom: 0;
  left: 0;
  font-size: 16px;
  margin-top: 20px;
  float: left;
}
div.RadTreeView_Sitefinity a.rtIn {
  color: #000;
}
.leadRewardTitle {
  width: 96%;
}
.sfFormsEditor label {
  display: block;
  clear: both;
  margin: 5px 0 0;
}
.sfFormsEditor input[type=text] {
  width: 192px;
  height: 15px;
  border: 1px solid #CCCCCC;
  padding: 5px 10px;
  margin: 0 0 5px 0;
  font-family: Arial, Helvetica, sans-serif;
  clear: both;
  display: block;
}
.sfFormsEditor textarea {
  width: 300px;
  height: 100px;
  border: 1px solid #CCCCCC;
  padding: 5px 10px;
  margin: 5px 0;
  font-family: Arial, Helvetica, sans-serif;
  clear: both;
  display: block;
}
.sfFormsEditor select {
  width: 213px;
  height: 20px;
  clear: both;
  display: block;
  margin: 5px 0 10px;
}
.sfFormsEditor .state input[type=text],
.sfFormsEditor .postcode input[type=text],
.state,
.postcode {
  width: 50px;
}
.sfFormsEditor input[type=submit] {
  background: #DE7209;
  border: medium none;
  border-radius: 4px 4px 4px 4px;
  color: #FFFFFF;
  display: block;
  margin: 0;
  text-transform: uppercase;
  width: 84px;
  cursor: pointer;
}
.sfFormsEditor .sfError {
  color: #C00;
  margin: 0 0 5px;
  font-size: 0.917em;
}
/* SEO footer */
/*first toggle*/
.enhancedSEOFooter p {
  font: italic 14px 'Georgia', Serif;
  line-height: 24px;
  margin: 10px 15px;
  padding-right: 5px;
  top: 0;
  color: #666666;
  float: left;
}
.enhancedSEOFooter .tabContainer {
  overflow: hidden;
  width: 100%;
}
.enhancedSEOFooter .tabContainer {
  padding-top: 16px;
}
/*ie7/8 fix*/
.extendedFooter .enhancedSEOFooter ul.tags,
.enhancedSEOFooter .tabContainer ul.tags {
  float: right;
  margin: 0 13px 0 0;
  padding: 7px 0;
  width: 590px;
}
.extendedFooter .enhancedSEOFooter ul.tags li,
.enhancedSEOFooter .tabContainer ul.tags li {
  float: left;
  clear: none;
  margin: 3px 0 3px 6px;
  padding: 0;
  width: auto;
  list-style: none;
}
.extendedFooter .enhancedSEOFooter ul.tags li a,
.enhancedSEOFooter .tabContainer ul.tags li a {
  background: #F8F8F8;
  border: 1px solid #E5E5E5;
  border-radius: 2px 2px 2px 2px;
  color: #CC6600;
  display: block;
  font-size: 12px;
  line-height: 22px;
  padding: 0 22px;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
  font-weight: bold;
}
.toggleSEOFooter {
  background: url(/images/spritesToggleFooter.png) 35px -37px no-repeat transparent;
  display: block;
  float: right;
  font-size: 12px;
  line-height: 34px;
  right: 15px;
  text-align: right;
  top: -25px;
  width: 23px;
  z-index: 3;
  margin: 0 15px 0 0;
  padding-right: 45px;
}
a.toggleSEOFooter {
  color: #CC6600;
  text-decoration: none;
}
a.toggleSEOFooter.less {
  background: url(/images/spritesToggleFooter.png) 35px -13px no-repeat transparent;
}
.extendedFooter .enhancedSEOFooter,
.enhancedSEOFooter .tabContainer {
  background: #FCFCFC;
  width: 100%;
  min-height: 47px;
  margin-top: 34px;
  border-bottom: 1px solid #E9E9E9;
}
.footcrumbContainer {
  background: #ffffff;
  border-bottom: 0 none;
  width: 990px;
}
.extendedFooter .tabContainer {
  padding: 0;
}
.footCrumb {
  background: #F4F4F4;
  overflow: hidden;
}
/*tabPanelContent*/
.tabPanelContent {
  background: #FCFCFC;
  width: 100%;
  margin: 0;
  padding: 0 0 0;
  border-bottom: 1px solid #E9E9E9;
  min-height: 34px;
}
.tabPanelContent ul {
  overflow: hidden;
  float: right;
  margin: 0 -7px 0;
  padding: 7px 0;
  width: 100%;
}
.tabPanelContent ul li {
  float: left;
  clear: none;
  margin: 3px 0 3px 6px;
  padding: 0;
  width: auto;
  list-style: none;
}
.tabPanelContent li a {
  background: #ECECEC;
  border: 1px solid #E5E5E5;
  border-radius: 2px 2px 2px 2px;
  color: #CC6600;
  display: block;
  font-size: 12px;
  line-height: 22px;
  padding: 0 22px;
  text-decoration: none;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.75);
  font-weight: bold;
}
/*homepage ads*/
.homeColLeft {
  width: 350px;
  position: absolute;
  top: 40px;
  left: 50%;
  margin: 0 0 0 -846px;
}
.homeColRight {
  width: 350px;
  position: absolute;
  top: 40px;
  left: 50%;
  margin: 0 0 0 496px;
}
/* Redemption Code Promotions */
.promotionBanner {
  width: 617px;
  height: 151px;
  background-color: #36448b;
  font-size: 20px;
  padding-top: 17px;
  margin: 20px 0;
  font-family: Arial, Helvetica, sans-serif;
  display: normal;
}
.promotionBanner .inner {
  height: 125px;
  width: 587px;
  margin: auto;
  padding: 9px 0 0 28px;
}
.promotionBanner.union .inner {
  color: #000084;
  background: url(/images/logo_unions.jpg) no-repeat 446px 28px #fff;
}
.promotionBanner.nrma .inner {
  color: #fff;
  background: url(/images/logo_nrma.jpg) no-repeat 410px -5px;
}
.promotionBanner p {
  width: 342px;
  margin: 7px 0 0;
}
.promotionBanner .copy {
  float: left;
}
.tyrePanel_GBB {
  float: left;
}
.dealGBB {
  /*width: 617px;*/
  /*height: 420px;*/
}
.dealGBB .tyrePanel {
  margin-bottom: 0;
}
.dealGBB .dealSubTitleGBB,
.dealGBB .dealTitleGBB {
  background: #f57e21;
  /*margin: 0;*/
  /*height: 40px;*/
  padding: 10px 10px;
  font-weight: 700;
  color: #fff;
  display: block;
  clear: both;
  text-align: center;
  margin-left: -2px;
  margin-right: -4px;
}
.dealGBB .dealSubTitleGBB {
  font: 18px/25px Arial, Helvetica, sans-serif;
}
.dealGBB .dealTitleGBB {
  font: 16px/23px Arial, Helvetica, sans-serif;
}
.dealGBB .dealGBBTitle {
  background: #f57e21;
  font: 16px/40px Arial, Helvetica, sans-serif;
  font-weight: 700;
  color: #fff;
  /* padding: 5px; */
  width: 200px;
  margin-right: 4px;
  margin-bottom: 5px;
  margin-left: 4px;
  text-align: center;
  border: 1px solid #f57e21;
}
.dealOfTheDay {
  background: url(../images/dealOfTheDay_background.png) no-repeat 0 0;
  height: auto;
  width: 617px;
  padding: 0 !important;
  margin: 0 auto;
}
.dealOfTheDay .newList {
  z-index: 100;
  width: 40px;
}
.dealOfTheDay.minified {
  background: url(../images/dealOfTheDay_background-minified.png) no-repeat 0 0;
}
.dealOfTheDay ul {
  margin: 0;
  padding: 0;
  list-style: none;
}
.dealOfTheDay .dealtTitle {
  font-family: arial;
  font-size: 16px;
  color: #fff;
  display: block;
  margin: 49px 0 0 20px;
  text-transform: uppercase;
  line-height: 20px;
}
.dealOfTheDay.minified .dealtTitle {
  margin-top: 8px;
}
.dealOfTheDay .dealtTitle strong {
  display: block;
}
.dealOfTheDay.minified .dealtTitle strong {
  display: inline;
}
.dealOfTheDay .inner {
  border-bottom: solid 2px #de7209;
  border-left: solid 2px #de7209;
  border-right: solid 2px #de7209;
  margin-top: 10px;
  height: auto;
  position: relative;
  padding: 0 0 35px;
}
.dealOfTheDay .tyreImage {
  float: left;
  position: relative;
  margin: 35px 25px 0 0;
  max-height: 100%;
  max-width: 162px;
  width: auto !important;
}
.dealOfTheDay .buyOnlineSave {
  display: block;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -179px;
  width: 211px;
  height: 60px;
  position: absolute;
  top: -39px;
  left: -34px;
}
.dealOfTheDay .dealInfo {
  float: left;
  position: relative;
  padding-top: 62px;
  width: 175px;
  margin-right: 20px;
  height: 77px;
}
.dealOfTheDay .dealInfo .brand {
  display: block;
}
.dealOfTheDay .dealInfo .discount {
  font-size: 14px;
  color: #fff;
  text-align: center;
  height: 71px;
  width: 90px;
  border-radius: 34px;
  background-color: #66a210;
  display: block;
  padding-top: 20px;
  position: absolute;
  top: -30px;
  left: 24px;
}
/*.dealDayPromoBlock()
        {
            color: #fff;
            text-align: center;
            height: 71px;
            width: 90px;
            border-radius: 34px;
            display: block;
            padding-top: 20px;
            position: absolute;
            top: -10px;
            left: 24px;
        }

        .dealOfTheDay .dealInfo .specialOffer {
            .dealDayPromoBlock();
            font-size: 14px;
            background-color: #ef1a1a;
        }

        .dealOfTheDay .dealInfo .redBubbleSize12Bold {
            .dealDayPromoBlock();
            font-size: 12px;
            background-color: #ef1a1a;
        }*/
.dealOfTheDay .dealInfo .discount strong {
  font-size: 38px;
  display: block;
  line-height: 33px;
}
.dealOfTheDay .dealInfo .specialOffer strong {
  font-size: 12px;
  display: block;
}
.dealOfTheDay .dealInfo .bestbuy {
  font-size: 14px;
  color: #fff;
  text-align: center;
  height: 71px;
  width: 91px;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat -98px 0;
  display: block;
  padding-top: 20px;
  position: absolute;
  top: -30px;
  left: -4px;
}
.dealOfTheDay.minified .dealInfo .bestbuy {
  top: -17px;
  left: 308px;
}
.dealOfTheDay .dealInfo .bestbuy strong {
  font-size: 25px;
  display: block;
  line-height: 25px;
}
.dealOfTheDay .dealInfo .tyreType {
  color: #de7209;
  font-weight: bold;
  font-size: 13px;
  display: block;
  text-transform: uppercase;
}
.dealOfTheDay .dealInfo ul {
  margin-top: 10px;
}
.dealOfTheDay .dealInfo li {
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -256px;
  padding-left: 20px;
  font-size: 12px;
  margin-bottom: 4px;
}
.dealOfTheDay .dealOffer {
  float: left;
  padding-top: 42px;
  /*padding-bottom: 10px;*/
  width: 240px;
  position: relative;
  height: auto;
}
.dealOfTheDay .dealOffer .newPrice {
  font-weight: bold;
  font-size: 34px;
  float: left;
}
.dealOfTheDay .dealOffer .newPrice span.dollar {
  float: left;
  margin-top: -8px;
}
.dealOfTheDay .dealOffer .newPrice span.priceAmount {
  color: rgba(255, 119, 20, 0.89);
  font-size: 70px;
  float: left;
  line-height: 44px;
  float: none;
  padding-bottom: 15px;
}
.dealOfTheDay .dealOffer .newPrice span.priceLabel {
  display: block;
  font-weight: bold;
  color: #55920c;
  font-size: 18px;
  text-transform: uppercase;
  margin-left: 29px;
}
.dealOfTheDay .dealOffer .newPrice .subtext {
  clear: both;
  font: italic 12px/20px arial, sans-serif;
  height: 20px;
  font-weight: normal;
  padding-left: 20px;
}
.dealOfTheDay .dealOffer .oldPrice {
  float: left;
  margin: 30px 0 0 7px;
}
.dealOfTheDay .dealOffer .oldPrice .rrp {
  font-size: 8px;
  text-transform: uppercase;
  font-weight: bold;
}
.dealOfTheDay .dealOffer .oldPrice .strike {
  position: relative;
  font: 32px/42px Arial, Helvetica, sans-serif;
  margin-top: -4px;
}
.dealOfTheDay .dealOffer .oldPrice .strike {
  position: relative;
  font: 32px/42px Arial, Helvetica, sans-serif;
  margin-top: -4px;
}
.dealOfTheDay .dealOffer .oldPrice .strike:before {
  position: absolute;
  top: 12px;
  left: 2px;
  width: 70px;
  display: block;
  content: " ";
  border-top: 2px solid #ff3333;
}
.dealOfTheDay .dealOffer .stock {
  font-size: 14px;
  color: #fff;
  text-align: center;
  height: 91px;
  width: 91px;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat -2px 0;
  display: block;
  padding-top: 20px;
  text-transform: uppercase;
  line-height: 14px;
  float: left;
  position: absolute;
  bottom: -9px;
  left: -11px;
  z-index: 10;
}
.dealOfTheDay .dealOffer .stock strong {
  display: block;
  font-size: 17px;
  margin: 5px 0 4px;
}
.dealOfTheDay .dealOffer .quantity {
  width: 86px;
  float: left;
  margin: 5px 0 0 44px;
}
.dealOfTheDay .dealOffer .quantity label {
  float: left;
  font-size: 12px;
  margin: 6px 5px 0 0;
}
.dealOfTheDay .dealOffer .quantity .newListSelected {
  width: 50px;
  background: url(../images/sprites.png) no-repeat 100% -10px #fff;
}
.dealOfTheDay .dealOffer .tyreSize {
  font-size: 0.89em;
  display: block;
  float: left;
  background-color: #f9f9f9;
  margin: 9px 0 0 2px;
  padding: 3px 0 1px 3px;
}
.dealOfTheDay .dealOffer input[type="button"] {
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -99px;
  cursor: pointer;
  border: none;
  height: 53px;
  width: 157px;
  text-indent: -9999px;
  text-transform: uppercase;
  float: right;
  margin-top: 26px;
  font-size: 13px;
}
.dealOfTheDay.minified .dealOffer input[type="button"] {
  margin-top: 5px;
}
.dealOfTheDay .dealFooter {
  border-top: solid 1px #d9d9d9;
  background-color: #ebebeb;
  float: left;
  width: 598px;
  padding: 6px 0 0 15px;
  height: 27px;
  position: absolute;
  bottom: 0;
  left: 0;
}
.dealOfTheDay .dealFooter li {
  float: left;
  font-size: 12px;
  background: url(../images/dealOfTheDay_sprites.png) no-repeat 0 -297px;
  padding: 1px 0 0 20px;
  margin-left: 15px;
}
.dealOfTheDay .dealFooter li:first-child {
  margin: 0;
}
/*.dealOfTheDay.minified{float:right;}*/
.dealOfTheDay.minified .dealOffer {
  padding-top: 30px;
}
.dealOfTheDay.minified .dealOffer .oldPrice {
  margin: 12px 0 0 14px;
}
.dealOfTheDay.minified .dealOffer .oldPrice {
  margin: 12px 0 0 14px;
}
.dealOfTheDay.minified .dealOffer .quantity {
  width: 85px;
}
.dealOfTheDay.minified .dealInfo {
  padding-top: 38px;
  margin-right: 14px;
  width: 205px;
}
.dealOfTheDay.minified .buyOnlineSave {
  top: -45px;
  z-index: 10;
}
.dealOfTheDay.minified .tyreImage img {
  width: 109px;
}
.dealOfTheDay.minified .dealInfo .tyreType {
  margin-top: 0;
}
.dealOfTheDay.minified .dealOffer .newPrice span.priceAmount {
  font-size: 66px;
}
.dealOfTheDay.minified .dealOffer .newPrice {
  margin: -21px 0 0 20px;
}
.dealOfTheDay.minified .dealOffer .stock {
  z-index: 10;
}
.dealOfTheDay.minified .inner {
  margin-top: 6px;
}
.dealOfTheDay.minified .dealFooter {
  height: 23px;
}
.dealOfTheDay.minified .tyreImage {
  margin: 35px 15px 0 15px;
}
.dealOfTheDay.minified .dealInfo ul {
  margin-top: 0;
}
.dealOfTheDay.minified .dealInfo li {
  font-size: 11px;
}
.dealOfTheDay.minified .dealInfo .discount {
  top: -30px;
  left: 385px;
  height: 62px;
  width: 77px;
  padding-top: 15px;
  background-position: 0 -330px;
  font-size: 12px;
}
.dealOfTheDay.minified .dealInfo .discount strong {
  font-size: 30px;
}
.dealOfTheDay.minified .dealOffer .oldPrice .strike {
  font-size: 28px;
  margin-top: -9px;
}
.dealOfTheDay.minified .dealOffer .quantity {
  margin: -2px 0 0 59px;
}
.dealOfTheDay.minified .dealOffer .tyreSize {
  padding-top: 0;
  margin-top: 5px;
}
.dealOfTheDay.minified.bestBuy .dealInfo .discount {
  top: 7px;
  right: -247px;
  padding-top: 17px;
  height: 67px;
}
.dealOfTheDay.minified.bestBuy .dealInfo .discount strong {
  font-size: 22px;
  line-height: 22px;
}
.dealOfTheDay.minified.bestBuy .dealOffer .quantity {
  margin-top: 2px;
}
.dealOfTheDay.minified.bestBuy .dealOffer .tyreSize {
  margin-top: 7px;
}
.dealOfTheDay.minified.bestBuy .dealOffer .newPrice span.priceLabel {
  font-size: 16px;
}
.dealOfTheDay.minified.bestBuy .dealOffer .stock {
  top: auto;
}
.dealOfTheDay.minified.bestBuy .dealOffer .newPrice span.priceAmount {
  font-size: 62px;
}
.dealOfTheDay.minified.bestBuy .dealOffer .newPrice {
  margin-top: -26px;
}
.dealOfTheDay.bestBuy .oldPrice {
  display: none;
}
.dealOfTheDay.bestBuy .dealInfo .discount {
  padding-top: 22px;
  top: 53px;
  right: -256px;
  left: auto;
}
.dealOfTheDay.bestBuy .dealInfo .discount strong {
  font-size: 24px;
  line-height: 24px;
}
.dealOfTheDay.bestBuy .dealOffer .stock {
  z-index: 10;
}
.dealOfTheDay.bestBuy .dealOffer .tyreSize {
  margin-top: 29px;
}
.dealOfTheDayContainer p {
  display: block;
  font-size: 12px;
}
.dealOfTheDay .dealListing {
  position: relative;
  clear: both;
  padding: 10px 0 0;
}
.dealOfTheDay .ribbonMoreDeals {
  width: 71px;
  height: 62px;
  display: block;
  background: url(../images/ribbonMoreDeals.png) no-repeat;
  position: absolute;
  top: 0;
  left: 26px;
  z-index: 2;
}
.dealOfTheDay .dealSubTitle {
  width: 506px;
  height: 38px;
  padding: 0 0 0 107px;
  display: block;
  background: #de7209;
  font: bold 16px/38px Arial, Helvetica, sans-serif;
  color: #FFF;
}
.dealOfTheDay .tyrePanels {
  padding: 0;
}
/* Easter Promo Deal styles */
.dealOfTheDay.easter .dealInfo .discount {
  display: none;
}
.dealOfTheDay.easter .buyOnlineSave {
  background: url("../images/dealOfTheDayEaster_sprites.png") no-repeat scroll 0 0;
}
.dealOfTheDay.easter .dealInfo {
  padding-top: 20px;
  margin: 0 10px;
}
.dealOfTheDay.easter .dealOffer {
  padding-top: 20px;
}
.dealOfTheDay.easter .dealOffer .oldPrice {
  margin-top: 54px;
}
.dealOfTheDay.easter .dealOffer .newPrice span.priceLabel {
  max-width: 120px;
  margin-left: 21px;
}
.dealOfTheDay.easter .dealOffer .newPrice .subtext {
  color: #666;
}
.dealOfTheDay.easter .dealInfo ul {
  display: none;
}
.easter-promotion {
  width: 175px;
  height: 200px;
  background: url("../images/dealOfTheDayEaster_sprites.png") no-repeat scroll 0 -60px;
  text-indent: -9999px;
}
/*search loading overlay*/
.searchOptions {
  position: relative;
}
.searchOptions .overlay-mask {
  position: absolute;
  /*top: 0;
        left: 0;*/
  width: 100%;
  height: 100%;
  z-index: 10000;
}
#searchVehicleDiv {
  position: relative;
}
#searchVehicleDiv .overlay-mask {
  position: absolute;
  /*top: 0;
    left: 0;*/
  width: 617px;
  height: 96px;
  z-index: 10000;
}
#searchSizeDiv .overlay-mask {
  position: absolute;
  /*top: 0;
        left: 0;*/
  width: 617px;
  height: 96px;
  z-index: 10000;
}
#searchBrandDiv .overlay-mask {
  position: absolute;
  /*top: 0;
        left: 0;*/
  width: 617px;
  height: 96px;
  z-index: 10000;
}
.banner-ad {
  background: url(/images/bannerAdPlaceholder.png) no-repeat 50% #e3e3e3;
}
/*best deal panel*/
.extendedFooter .column.columnBestDeal {
  width: 377px;
  height: 268px;
  padding: 34px 235px 0 24px;
  background: url(../images/bgBestDeal.jpg) no-repeat;
}
.extendedFooter .column.columnBestDeal h3 {
  font-size: 1.7em;
  font-weight: bold;
  line-height: 1em;
  color: #000;
  margin: 0 0 5px;
}
.extendedFooter .column.columnBestDeal input[type=text] {
  width: 168px;
  height: 20px;
  padding: 3px 5px 0;
  border: 1px solid #e1e1e1;
  background: #f8f8f8;
  margin: 0 0 5px 0;
  color: #7e7e7e;
  font-size: 12px;
}
.extendedFooter .column.columnBestDeal textarea {
  width: 352px;
  height: 42px;
  padding: 3px 5px 0;
  border: 1px solid #e1e1e1;
  background: #f8f8f8;
  margin: 0 0 5px 0;
  color: #7e7e7e;
  font-size: 12px;
}
.extendedFooter .column.columnBestDeal p {
  margin: 0 0 10px;
}
.extendedFooter .column.columnBestDeal input[type="submit"] {
  width: 73px;
  height: 29px;
  display: block;
  float: right;
  margin: 0 12px 0 0;
  padding: 0;
  text-align: center;
  font: bold 14px/29px arial;
  color: #FFFFFF;
  background: #F57D20;
  border: 1px solid #b5b5b5;
  border-radius: 3px 3px 3px 3px;
  cursor: pointer;
}
.extendedFooter .column.columnBestDeal .row {
  position: relative;
  display: inline-block;
}
.extendedFooter .column.columnBestDeal .row .error {
  right: 0;
  top: 0;
}
/*footer overlay*/
.footerOverlay {
  width: 100%;
  height: 80px;
  line-height: 60px;
  position: fixed;
  bottom: 0;
  left: 0;
  background: url(../images/footerOverlay.png) repeat-x;
  font-size: 2.3em;
  color: #FFF;
  z-index: 15;
}
.footerOverlay a p,
.footerOverlay a:hover p {
  color: #FFF;
  cursor: pointer;
}
.footerOverlay p {
  padding: 0 30px;
  padding-top: 10px;
  float: left;
  margin: 0;
}
.footerOverlay .btn-contactus {
  width: 222px;
  height: 50px;
  display: block;
  float: right;
  cursor: pointer;
  border: 0;
  background: url(../images/sprites.png) 0 -330px no-repeat;
  text-transform: uppercase;
  text-indent: -9999px;
  margin: 16px 100px 0 0;
}
#overlayClose {
  position: absolute;
  top: 30px;
  right: 27px;
  width: 25px;
  height: 25px;
  text-indent: -9999px;
  text-transform: uppercase;
  color: #000;
  background: url(../images/sprites.png) -708px -150px no-repeat;
  cursor: pointer;
}
#overlayClose:hover {
  color: #de7209;
}
/*checkout reviews Tab*/
.tyreReviewsContainer ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.tyreReviewsContainer ul li:first-child {
  border: none;
  padding: 0;
}
.tyreReviewsContainer ul li {
  padding-top: 10px;
  border-top: dotted 1px #e3e3e3;
  margin-bottom: 10px;
}
.tyreReviewsContainer h3 {
  color: #4D4D4D;
  font-size: 14px;
  margin-left: 10px;
}
.tyreReviewsContainer .description,
.tyreReviewsContainer .reviewer {
  color: #4d4d4d;
  font-size: 12px;
  margin-top: 10px;
  display: block;
}
.tyreReviewsContainer .description {
  margin-top: 0;
}
.tyreReviewsContainer .ref {
  display: block;
  font-size: 12px;
  color: #999999;
  margin-top: 10px;
}
.tyreReviewsContainer .rating {
  float: left;
  background: url(../images/SpritesStarRatings.jpg) no-repeat 0 0;
  display: block;
  height: 13px;
  width: 77px;
  text-indent: -9999px;
}
.tyreReviewsContainer .rating.two {
  background-position: 0 -14px;
}
.tyreReviewsContainer .rating.three {
  background-position: 0 -28px;
}
.tyreReviewsContainer .rating.four {
  background-position: 0 -43px;
}
.tyreReviewsContainer .rating.five {
  background-position: 0 -58px;
}
.tyreReviewsContainer .summary {
  float: left;
}
.ribbon {
  float: right;
}
img.howitworks {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.dealHeading .countdown {
  font: bold italic 12px/33px Arial, Helvetica, sans-serif;
  color: #75a948;
  padding-left: 15px;
  float: right;
}
.islandHolidayPopupInner {
  background: url(../images/bg_IslandHoliday.png) no-repeat 0 0;
  width: 652px;
  height: 523px;
  position: relative;
}
.islandHolidayPopup h1 {
  text-transform: uppercase;
  font-weight: bold;
  color: #f7923f;
  text-align: center;
  font-size: 22px;
  line-height: 26px;
  font-family: Arial, Helvetica, sans-serif;
}
.islandHolidayPopupContent {
  position: absolute;
  top: 15px;
  left: 20px;
  width: 303px;
  height: 235px;
  padding: 15px;
  font-size: 12px;
}
.islandHolidayFooterContent {
  margin-left: 10px;
}
.islandHolidayFooterContent h2 {
  font-weight: bold;
  font-size: 20px;
  color: #f7923f;
}
.islandHolidayFooterContent h2 a {
  text-decoration: underline;
  color: #f7923f;
}
.islandHolidayFooterContent .terms a {
  color: #000;
  text-decoration: underline;
  font-size: 13px;
}
.islandHolidayFooterContent a:hover {
  text-decoration: none;
}
/*styles for the compare widget*/
#competitorPricing p {
  text-align: center;
  font-style: italic;
  font-size: 11px;
}
.compare {
  border: 1px solid #d0d0d0;
  border-radius: 4px;
  margin-bottom: 20px;
}
.compare:before,
.compare:after {
  content: "";
  display: table;
}
.compare:after {
  clear: both;
}
.comapre-col {
  float: left;
}
.comapre-col ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.comapre-col li {
  text-align: center;
  border-top: 1px solid #d0d0d0;
  height: 25px;
  overflow: hidden;
  font: 12px/25px 'Arial', 'Helvetica', sans-serif;
}
.comapre-col li:first-child {
  border: 0 none;
  height: 31px;
}
.comapre-col strong {
  display: block;
  border-bottom: 2px solid #d0d0d0;
  line-height: 30px;
}
.compare-tyre {
  width: 35%;
}
.compare-tyre ul {
  padding-left: 13px;
}
.compare-tyre li {
  width: 100%;
  text-align: left;
  padding-right: 20px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  box-sizing: border-box;
}
.compare-tyre li:first-child {
  padding-right: 16px;
}
.compare-tyre ul {
  padding-left: 13px;
}
.compare-tyre strong {
  color: #de7209;
  font-size: 14px;
}
.compare-tyresales {
  position: relative;
  width: 20%;
  min-height: 1px;
}
.compare-tyresales .ico {
  position: absolute;
  top: -34px;
  left: 50%;
  width: 39px;
  height: 39px;
  background: url(../images/sprites.png) no-repeat 0 -380px;
  margin-left: -20px;
  z-index: 1;
}
.compare-tyresales ul {
  position: absolute;
  top: -15px;
  left: -16px;
  width: 100%;
  background: #de7209;
  color: #fff;
  border-radius: 4px;
  padding: 15px 16px 10px 16px;
  box-shadow: 0 0 5px 0 #999;
}
.compare-tyresales li {
  border-color: #e98321;
  font-weight: bold;
}
.compare-tyresales strong {
  font-size: 20px;
  border-color: #e98321;
  font-weight: normal;
}
.compare-competitors {
  width: 45%;
}
.compare-store {
  width: 50%;
}
.single-competitor .compare-store {
  width: 100%;
}
/*if there is a single competitor*/
.compare-store li {
  padding-left: 16px;
}
.compare-store + .compare-store ul {
  padding-right: 13px;
}
.compare-store + .compare-store li {
  padding: 0;
}
/*single-compare*/
.single-compare .compare-tyre {
  width: 35%;
}
.single-compare .compare-tyresales {
  width: 30%;
}
.single-compare .compare-competitors {
  width: 35%;
}
/*productdetails-tabs*/
.tyreFullDetail ul.tabNavigation li a {
  padding: 0 20px;
}
.tyreFullDetail ul.tabNavigation li {
  margin: 0 5px 0 0;
}
.tyreFullDetail .tabs > div {
  border: 1px solid #F57B22;
  padding: 19px 14px;
}
iframe[name="google_conversion_frame"] {
  height: 0 !important;
  position: absolute;
}
.fitmentTableRow {
  height: 30px;
  font-size: 13px;
}
.fitmentTableRow td {
  vertical-align: middle;
}
/*.fitmentTableRow td > * {
    vertical-align : middle;
}*/
/*.dealerTable td > * {
    vertical-align : middle;
}*/
.fitmentTableRow .dealername {
  margin-top: 6px;
}
.fitmentTableAlternatingRow {
  background-color: #F6F6F6;
}
.fitmentTableHeader {
  background-color: #F57B22;
  color: #ffffff;
  height: 30px;
  font-weight: bold;
}
.fitmentTableHeader th {
  vertical-align: middle;
  margin-left: 4px;
  text-align: left;
}
.mapViewButton {
  border: none;
  background-color: #818286;
  color: #ffffff;
  border-radius: 0px;
  padding: 3px 5px 3px 5px;
  border-radius: 3px;
}
.trackingTable-TableRowTop {
  background-color: #ffffff;
  height: 25px;
  line-height: 25px;
}
.trackingTable-DeliveryHeading {
  height: 35px;
  color: #F57B22;
  line-height: 35px;
  font-size: 14px;
  font-weight: bolder;
}
.trackingTable-DeliverySubHeading {
  height: 25px;
  background-color: #7C7C76;
  color: #ffffff;
  text-align: left;
  line-height: 25px;
}
.trackingTable-TableRowBottom {
  background-color: #ECECE7;
}
.trackingTable-DeliveryHeadingBottom {
  color: #ffffff;
  height: 25px;
  line-height: 25px;
}
.trackingTable-TableRowHeader {
  color: black;
  font-weight: bolder;
}
.retailerInfo {
  display: none;
}
.activeDealerSpan {
  font-weight: bold;
}
.checkout-priceonlinetext {
  color: #F57B22;
  padding-top: 10px;
  text-align: center;
}
.checkoutCart .lowestPriceGuarantee {
  color: #F57B22;
  padding-top: 10px;
  text-align: center;
}
.checkoutCart .lowestPriceGuarantee a:hover {
  color: #fff;
  text-decoration: none;
}
.retalierPromotion {
  color: #F57B22;
  font-weight: bold;
}
.retalierClosestVehicleMatch {
  color: green;
  font-weight: bold;
}
.pinNotice {
  font-size: small;
}
.dealerRadioButton input[type="checkbox"] {
  display: none;
}
.dealerRadioButton input[type="checkbox"] {
  display: inline-block;
  width: 19px;
  height: 19px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  background: url(check_radio_sheet.png) left top no-repeat;
  cursor: pointer;
}
.dealerRadioButton input[type=radio]:checked {
  border: 0.0625em solid #73994d;
  border-radius: 0.125em;
  background: url(check_radio_sheet.png) left top no-repeat;
  /*background-image :    -moz-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :     -ms-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :      -o-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image : -webkit-linear-gradient(rgb(179,217,140),rgb(153,204,102));
  background-image :         linear-gradient(rgb(179,217,140),rgb(153,204,102));*/
}
.orange-button {
  text-transform: uppercase;
  display: block;
  width: 100%;
  border: 0 none;
  background: #F57E21;
  font: bold 12px/12px Arial, Helvetica, sans-serif;
  text-align: center;
  color: #FFF;
  padding: 1em 0;
  margin: 10px 0;
}
.orange-button:hover {
  background: #F56120;
  cursor: pointer;
  color: #fff;
  text-decoration: none;
}
#popUpDiv {
  position: fixed;
  background: white;
  width: 420px;
  /*height: 300px;*/
  border: 3px solid #F57B22;
  box-sizing: border-box;
  border-radius: 10px;
  padding: 10px 10px 10px;
  z-index: 9002;
  top: 50%;
  left: 50%;
  margin-top: -150px;
  margin-left: -210px;
}
#popUpDiv.afterPayPanel {
  width: 626px;
  /*height:778px;*/
  margin-left: -313px;
  margin-top: -350px;
}
#popUpDiv.afterPayPanel img {
  max-width: 100%;
}
#popUpDiv.askForADealPanel {
  background: none;
  width: auto;
  height: auto;
  margin-left: -270px;
  margin-top: -260px;
  border: none;
  border-radius: 0px;
  padding: 0px;
}
#popUpDiv.askForADealPanel iframe {
  width: 540px;
  height: 535px;
}
#closePopup:hover,
.premiumDetail-content .btn-priceIncludedLink:hover {
  cursor: pointer;
}
.homeSearchContainer .searchOptions a.vehicleSearchLinkBack:hover,
.homeSearchContainer .searchOptions a.brandSearchLinkBack:hover,
.homeSearchContainer .searchOptions a.sizeSearchLinkBack:hover,
.homeSearchContainer .searchOptions a.regoSearchLinkBack:hover,
.homeSearchContainer .searchOptions a.linkHelpFindTyreForm:hover,
.homeSearchContainer .searchOptions #sizeDetails:hover,
.homeSearchContainer .searchOptions #regoSearchLink:hover {
  color: #CCC;
}
.promoSearchResultsIcon {
  position: absolute;
  top: 6px;
  right: 2px;
  z-index: 100;
}
.search-tyre-size-links li {
  display: inline;
  list-style-type: none;
  padding-right: 10px;
  list-style-position: inside;
}
.add-more-referral {
  background: none repeat scroll 0 0 #DE7209;
  border: medium none;
  color: #FFFFFF;
  display: block;
  padding: 3px;
  text-transform: uppercase;
  width: 100% !important;
  margin-bottom: 40px;
  font: bold 14px/19px Arial;
  height: 30px;
}
.green-button input[type=submit] {
  background: #97c522;
  font: 18px/42px Arial, Helvetica, sans-serif;
  font-weight: 700;
  color: #fff;
  cursor: pointer;
  line-height: 14px;
  padding: 13px 31px 11px;
  text-align: center;
  text-decoration: none;
  border: none;
}
.green-button input[type=submit]:hover {
  background: #66a210;
  text-decoration: none;
  color: #fff;
}
.footerSection {
  min-height: 285px;
}
.m-header {
  display: none;
}
.clearfix:before,
.clearfix:after,
ul.tags:before,
ul.tags:after,
.searchForm:before,
.searchForm:after,
.searchSelect:before,
.searchSelect:after,
#searchSizeDiv:before,
#searchSizeDiv:after,
.here-is-how-it-works:before,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:before,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:before,
.here-is-how-it-works .reasons:after,
.free-benefits:before,
.free-benefits:after,
.free-benefits .benefits:before,
.free-benefits .benefits:after,
.tyrePanels:before,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:before,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  content: "";
  display: table;
}
.clearfix:after,
ul.tags:after,
.searchForm:after,
.searchSelect:after,
#searchSizeDiv:after,
.here-is-how-it-works:after,
.here-is-how-it-works .explanation:after,
.here-is-how-it-works .reasons:after,
.free-benefits:after,
.free-benefits .benefits:after,
.tyrePanels:after,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel:after {
  clear: both;
}
.clearfix,
ul.tags,
.searchForm,
.searchSelect,
#searchSizeDiv,
.here-is-how-it-works,
.here-is-how-it-works .explanation,
.here-is-how-it-works .reasons,
.free-benefits,
.free-benefits .benefits,
.tyrePanels,
.tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel {
  *zoom: 1;
}
/*form layout*/
fieldset {
  border: 0 none;
  padding: 0;
  margin: 0;
}
legend {
  display: block;
  width: 100%;
  font: 20px/36px arial, sans-serif;
  padding: 0;
  margin-bottom: 10px;
}
.vividForm ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.vividForm li {
  margin-bottom: 5px;
}
.vividForm li:last-child {
  margin-bottom: 0;
}
.vividForm label,
.vividForm h3 {
  display: block;
  font: 700 16px/26px arial, sans-serif;
  margin-bottom: 5px;
}
.help-block {
  font-size: 11px;
  font-style: italic;
}
/*inputs, selects, textareas*/
input,
select,
textarea {
  box-sizing: border-box;
}
input,
select,
textarea {
  display: block;
  width: 100%;
  height: 25px;
  border: 1px solid #868686;
  font: 12px/25px arial, sans-serif;
  border-radius: 2px;
  padding: 0 5px;
}
textarea {
  line-height: 16px;
}
input:disabled {
  border: 1px solid #ddd;
  background: #eee;
}
input:focus,
select:focus,
textarea:focus {
  border-color: #797979;
}
select {
  padding-right: 0;
  vertical-align: middle;
  padding: 3px 5px;
}
select option {
  padding: 5px;
}
textarea {
  height: auto;
}
.sfFormsEditor input.sfTxt,
.sfFormsEditor textarea.sfTxt {
  padding: 0 5px;
  height: auto;
}
.sfFormsEditor input.sfTxt {
  height: 25px;
}
.extendedFooter .column.columnBestDeal input[type="text"] {
  height: 25px;
  margin-bottom: 2px;
}
/*radio buttons // checkboxes*/
input[type="radio"],
input[type="checkbox"] {
  width: auto;
  min-height: 0;
  display: inline-block;
  height: auto;
  border: 0 !important;
}
/*buttons*/
.btn,
input[type="submit"] {
  width: auto;
}
.error,
span.field-validation-error,
.searchMod .searchSelect .errorSearchPage,
.checkout-form .section .error,
.checkout-form .formField .error,
.getquote .quoteForm .error {
  font: 11px/16px 'Arial', sans-serif;
  color: #da3f26;
}
.error[style*="inline"] {
  display: block !Important;
}
/*tabs*/
.tabPanel {
  text-align: left;
  padding-top: 10px;
}
/*search form*/
.searchField {
  padding-bottom: 5px;
}
.searchForm label {
  display: block;
  font: bold 12px/20px 'Arial';
  padding: 0;
}
.helpFindTyreLink {
  right: inherit;
  left: 0;
}
/*search size*/
.searchOptions #size .searchButton {
  margin: 3px 0 0 0;
}
#size.tabPanel {
  height: 275px;
}
#size.tabPanel .searchField.odd,
#brand.tabPanel .searchSelect.odd {
  margin-top: 0;
}
#size.tabPanel .searchField,
#brand.tabPanel .searchSelect {
  margin-top: 0;
}
#size.tabPanel .searchField.checkboxes {
  margin-top: 20px;
}
#size.tabPanel .checkboxes label,
#brand.tabPanel .checkboxes label {
  padding-left: 0;
}
#size .checker {
  margin-right: 3px;
}
div#size.tabPanel .faq,
div#brand.tabPanel .faq {
  top: 4px;
}
#brand.tabPanel .searchSelect.checkboxes {
  margin-top: 20px;
}
/*listing search*/
.tyrePanel .quantity label {
  width: 25px;
}
.tyrePanel select {
  width: 55px;
  display: inline-block;
}
.tyrePanel .submit {
  padding-top: 6px;
}
.tyreList .k-dropdown {
  width: 80px;
}
/*search by vehicle*/
#searchVehicleDiv .searchSelect {
  width: 145px;
}
/*search by size*/
#searchSizeDiv .searchSelect {
  width: 197px;
}
/*search by brand*/
#searchBrandDiv .searchSelect {
  width: 197px;
}
.searchSelect.checkboxes label {
  font-size: 11px;
  padding-right: 7px;
}
.searchSelect.checkboxes .checker {
  margin-right: 5px;
}
.searchResults select {
  display: inline-block;
  width: 150px;
  margin-left: 5px;
}
/*get quote*/
.quoteForm select,
.quoteForm .k-dropdown {
  width: 238px;
}
.getquote .chkSubscribeToNewsletter {
  display: block;
  height: auto;
  margin-top: 5px;
}
.getquote .chkSubscribeToNewsletter label {
  display: inline-block;
  width: 207px;
  vertical-align: top;
}
/*detail*/
.checkout-form input[type="text"],
.checkout-form .newListSelected,
.checkoutCart .tyrePanel .newListSelected {
  border: 1px solid #ccc;
}
/*checkout*/
.checkout-form input[type="text"],
.checkout-form .newListSelected,
.checkoutCart .tyrePanel .newListSelected {
  float: none;
  width: 100%;
  height: 26px;
  padding: 0 5px;
  border-radius: 0;
  color: #000;
  font-size: 12px;
}
.checkout-form #creditCard input[type="text"] {
  width: 236px;
}
.checkout-form .creditCard .radio span,
.checkout-form .paypal .radio span,
.checkout-form .eft .radio span,
.checkout-form .finance .radio span {
  height: 20px;
  float: none;
}
.checkout-form .payment span input {
  margin: 0;
  float: none;
  display: inline-block;
}
.checkout-form .payment span img {
  display: inline-block;
  float: none;
  vertical-align: middle;
  margin: 0;
}
/*.checkout-form input[type="radio"] {width: auto; float: left;}*/
.checkout-form .radio {
  margin-top: 3px;
}
.section.locationStep select {
  background: #eee;
  border: 1px solid #ccc;
}
.customerDeliveryDetails input[type="text"],
.customerDeliveryDetails select {
  display: inline-block;
  margin: 10px 0 0;
}
.customerDeliveryDetails select {
  width: 100px;
  height: 26px;
  display: inline-block;
  background: #eee;
  border-color: #ccc;
  border-radius: 0;
  font-size: 12px;
}
#creditCard .formField select {
  margin: 0;
  width: 233px;
  height: 26px;
  display: inline-block;
  background: #eee;
  border-width: 0;
  font-size: 12px;
}
#creditCard .formField select.small {
  width: 115px;
}
#creditCard input.small {
  display: inline-block;
  vertical-align: top;
  margin-top: 0;
}
.checkout-form .button {
  margin-top: 7px;
}
/*voucher*/
.checkout-form .redemptionCode input[type="text"] {
  display: inline-block;
}
/*ask greg*/
aside .questionForm textarea,
.questionForm textarea {
  padding: 0 5px;
}
.questionForm input[type="text"] {
  padding: 0 5px;
}
/*hide quoting on all viewports*/
.getQuote .buyPanel {
  display: none;
}
.miniCart {
  display: none;
}
/*device media query*/
@media only screen and (max-device-width: 1024px) {
  /*select {visibility:visible; -webkit-appearance: listbox; background:url(../images/mobile-sprites.png) no-repeat 100% -272px;}*/
}
/*mobile media query*/
@media only screen and (max-width: 640px) {
  body {
    background: #fff;
    min-width: 320px;
  }
  img {
    max-width: 100%;
    /*width: auto!important;*/
    height: auto !important;
  }
  iframe {
    width: 100% !important;
    max-width: 100% !important;
  }
  .wrapper {
    width: auto;
  }
  /*hide from mobile*/
  #nielsenTagDiv,
  #FeedBack,
  .content header,
  .searchBanner,
  .homeContent,
  .extendedFooter .sfimageWrp,
  .extendedFooter .column.columnBestDeal,
  .extendedFooter .column.column1,
  #competitorPricing,
  section + aside,
  .csn-navigation {
    display: none !important;
  }
  .tyrePanel_GBB {
    float: none;
  }
  .tyrePanel_GBB_first-child {
    position: initial !important;
    top: initial !important;
    right: initial !important;
  }
  .dealGBB .dealGBBTitle {
    width: 100%;
  }
  /*hide desktop header*/
  /*header*/
  .m-header {
    position: relative;
    display: block;
    border-bottom: 3px solid #de7209;
  }
  .m-logo a {
    display: block;
    width: 140px;
    height: 62px;
    background: url(https://tyresales-static.s3-ap-southeast-2.amazonaws.com/Tyresales_Blue_WebVersion.png) no-repeat 0 0;
    text-indent: -9999px;
    background-size: contain;
    margin-top: 10px;
    margin-left: 10px;
  }
  .m-advertising {
    width: 300px;
    padding: 0 0 2px 0;
    margin: 0 auto;
  }
  /*navigation*/
  #navigationToggle {
    position: absolute;
    top: 15px;
    right: 15px;
    display: block;
    width: 32px;
    height: 32px;
    background: url(../images/mobile-sprites.png) no-repeat -170px 0;
    text-indent: -9999px;
  }
  #navigationToggle.active {
    /*background-position: -170px -32px;*/
  }
  #m-navigationContainer {
    display: none;
    background: #333;
  }
  ul.m-navigation li {
    border-bottom: 1px solid #191919;
    border-top: 1px solid #4c4c4c;
  }
  ul.m-navigation > li:first-child {
    background: #222;
  }
  ul.m-navigation a {
    display: block;
    color: #ccc;
    font: 18px/20px 'arial';
    padding: 10px 15px;
  }
  ul.m-navigation li {
    border-bottom: 1px solid #191919;
    border-top: 1px solid #4c4c4c;
  }
  ul.m-navigation > li:first-child a {
    color: #fff;
  }
  ul.m-navigation ul li {
    border: 0 none;
  }
  ul.m-navigation ul a {
    font-size: 12px;
    border: 0 none;
    background: url(../images/mobile-sprites.png) no-repeat -251px -161px;
    padding: 10px 35px;
  }
  ul.m-navigation ul li:last-child {
    padding-bottom: 10px;
  }
  .fitmentTableRow {
    font-size: 11px;
  }
  .retailerInfo {
    display: inline;
  }
  .checkoutErrorMessage,
  .checkoutErrorPaymentMessage {
    position: inherit !important;
    top: auto !important;
    right: auto !important;
    width: auto !important;
    text-align: center !important;
  }
  /*forms*/
  input,
  select,
  textarea {
    min-height: 26px;
    font: 16px/26px arial, sans-serif;
    border-color: #ccc;
    box-shadow: none;
  }
  /*min font size of 16px required for devices*/
  /*sf forms*/
  .sfFormsEditor label.sfTxtLbl {
    text-transform: uppercase;
    font-weight: bold;
    padding: 0 5px;
  }
  .sfFormsEditor input.sfTxt,
  .sfFormsEditor textarea.sfTxt {
    width: 100%;
  }
  /*content*/
  .content {
    width: 100%;
  }
  .content section {
    border: 0 none;
    float: none;
    width: 100%;
    margin: 0;
  }
  .content section > div {
    padding: 0;
  }
  .dynamicTitle {
    padding: 10px !important;
  }
  .content section h1 {
    font-size: 16px !important;
  }
  .content section h1 strong {
    font-size: 24px !important;
  }
  .content aside {
    float: none;
    width: 100%;
  }
  .content aside > div {
    border: 0 none;
    border-radius: 0;
    min-height: 0;
    padding: 0 15px;
  }
  aside.checkout-right {
    display: none;
  }
  /*sf content*/
  .content section > div.sfContentBlock {
    padding: 15px;
  }
  .content section > div.sfFormsEditor {
    padding: 15px;
  }
  .content section div.sfexpandedListWrp {
    padding: 15px;
  }
  .content section div.sfexpandableListWrp {
    padding: 15px;
  }
  /*search area*/
  .searchContainer {
    display: block !important;
    background: #de7209;
    border: 0 none;
    padding: 10px;
    margin: 0;
  }
  .searchOptions {
    border: 0 none;
    border-radius: 0;
    float: none;
    height: auto;
    padding: 0;
    width: 100%;
  }
  .searchOptions h2 {
    color: #fff;
    font: italic 14px/26px Georgia, "Times New Roman", Times, serif;
    margin: 0 0 10px 0;
  }
  .searchOptions h2 strong {
    background: none;
    color: #fff;
    font: 14px/26px Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
  }
  .searchOptions h2 strong:after {
    display: inline-block;
    vertical-align: middle;
    width: 9px;
    height: 16px;
    background: url(../images/mobile-sprites.png) no-repeat scroll -266px -52px;
    content: '';
    margin: 0 5px 0 10px;
  }
  /*search by size*/
  #searchSizeDiv .searchSelect {
    width: 100%;
  }
  /*search by brand*/
  #searchBrandDiv .searchSelect {
    width: 100%;
  }
  /*tabs*/
  .tabs {
    background: none;
  }
  .searchOptions .tabs ul.tabNavigation,
  .tabs ul.tabNavigation {
    border: 0 none;
    height: 42px;
    padding: 0;
    margin: 0;
    background: #de7209;
  }
  .tabs ul.tabNavigation {
    padding: 5px 15px 0 15px;
  }
  .searchOptions .tabs ul.tabNavigation li,
  .tabs ul.tabNavigation li {
    margin: 0 0 0 1%;
    width: 32.3333%;
  }
  .searchOptions .tabs ul.tabNavigation li:first-child,
  .tabs ul.tabNavigation li:first-child {
    margin: 0;
    width: 33.3333%;
  }
  .searchOptions .tabs ul.tabNavigation a,
  .tabs ul.tabNavigation a {
    border: 0 none;
    border-radius: 5px 5px 0 0;
    color: #000;
    font: 11px/42px 'Arial';
    text-transform: uppercase;
    height: auto;
    width: 100%;
    background: #e89d53;
  }
  .searchOptions .tabs ul.tabNavigation li:first-child a,
  .tabs ul.tabNavigation li:first-child a {
    width: 100%;
  }
  .searchOptions .tabs ul.tabNavigation a.selected,
  .tabs ul.tabNavigation a.selected {
    border: 0 none;
    background: #fff;
    color: #000;
  }
  .searchOptions .tabs ul.tabNavigation a.selected:after,
  .tabs ul.tabNavigation a.selected:after {
    display: none;
  }
  .tabPanel {
    background: #fff;
    text-align: left;
    padding: 25px 15px;
  }
  #vehicle.tabPanel {
    height: auto;
  }
  /*search form*/
  .searchField {
    padding-bottom: 10px;
  }
  .searchForm label {
    display: block;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }
  .searchForm .k-dropdown,
  .searchForm select {
    width: 100%;
  }
  .searchOptions .searchButton,
  .searchOptions .searchButton:hover,
  .questionForm input[type="submit"],
  .questionForm input[type="submit"]:hover,
  .sfFormsEditor input[type="submit"] {
    background: #de7209;
    background: linear-gradient(to bottom, #e89d53 0%, #de7209 100%);
    border-radius: 5px;
    float: none;
    font: bold 18px/40px 'Arial';
    height: 40px;
    margin: 0 auto;
    text-indent: 0;
    width: 100%;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
  }
  .helpFindTyreLink {
    display: none;
  }
  /*search size / brand*/
  #brand.tabPanel,
  #size.tabPanel {
    background: #fff;
    height: auto;
  }
  #size.tabPanel {
    padding-bottom: 10px;
  }
  #size.tabPanel .searchField.odd,
  #brand.tabPanel .searchSelect.odd {
    margin: 0;
  }
  #size.tabPanel .searchField,
  #brand.tabPanel .searchSelect {
    float: none;
    margin: 0;
    padding: 0 0 10px 0;
    width: 100%;
  }
  #size.tabPanel .searchField.checkboxes {
    margin-top: 0;
  }
  div#size.tabPanel .faq,
  div#brand.tabPanel .faq {
    display: none;
  }
  #size.tabPanel:after {
    display: block;
    width: 233px;
    height: 93px;
    background: red;
    margin: 0 auto;
    content: '';
    background: url(../images/m-tyre-size.jpg) no-repeat 50% 0;
    background-size: 233px 93px;
  }
  #searchVehicleButton {
    margin: 0;
  }
  .dealOfTheDay .dealOffer .newPrice span.priceAmount {
    padding-bottom: 0px;
  }
  .dealOfTheDay .dealInfo .runFlatEcoArea {
    min-height: 4px;
  }
  .dealOfTheDay .lowestPriceGuarantee {
    max-width: 89px;
    position: absolute;
    bottom: 100px;
    left: 6px;
  }
  /*listing search*/
  .searchMod {
    width: 100%;
  }
  /*tabs*/
  .searchMod .tabNavigation {
    border-bottom: 0 none;
    background: #de7209;
    padding: 10px 10px 10px 10px;
    padding-bottom: 0;
    margin: 0;
    width: auto;
    height: auto;
  }
  .searchMod .tabNavigation li {
    width: 32.3333%;
    margin: 0 0 0 1%;
  }
  .searchMod .tabNavigation li:first-child {
    width: 33.3333%;
    margin: 0;
  }
  .searchMod ul.tabNavigation a {
    height: 30px;
    border: 0 none;
    border-radius: 5px 5px 0 0;
    color: #000;
    font: 10px/15px 'Arial';
    text-transform: uppercase;
    height: auto;
    width: 100%;
    background: #e89d53;
    padding: 6px 0;
  }
  .searchMod .tabNavigation li a span {
    font: 12px/21px 'Arial';
    display: block;
  }
  .searchMod ul.tabNavigation a.selected {
    border: 0 none;
    background: #fff;
    color: #000;
  }
  .searchMod .tabNavigation + div {
    background: #de7209;
    padding: 10px 10px 10px 10px;
    padding-top: 0;
  }
  #searchVehicleDiv,
  #searchSizeDiv,
  #searchBrandDiv {
    padding: 25px 15px;
    background: #fff;
  }
  .searchSelect,
  .searchSelect.checkboxes {
    float: none;
    padding-bottom: 10px;
    margin: 0;
  }
  .searchSelect label {
    display: block;
    text-transform: uppercase;
    font: bold 12px/24px 'Arial';
    padding: 0 4px;
  }
  .searchMod .tireSizes {
    font: 12px/20px Arial, Helvetica, sans-serif;
    padding-top: 0;
  }
  .content section .tireSizes h1 {
    font-size: 14px !important;
    margin: 10px 0;
  }
  .searchMod .tireSizes .sizes {
    float: none;
    width: 100%;
    padding: 0;
    margin: 10px 0;
  }
  .searchMod .tireSizes .sizes > span {
    display: block;
    margin-bottom: 5px;
  }
  .searchMod span.faq {
    display: none;
  }
  .searchMod input[type="button"] {
    background: #de7209;
    background: linear-gradient(to bottom, #e89d53 0%, #de7209 100%);
    /*border-radius: 5px;*/
    float: none;
    font: bold 18px/40px 'Arial';
    height: 40px;
    margin: 0 auto;
    text-indent: 0;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    width: 100%;
  }
  .searchMod .searchRow {
    padding: 0;
  }
  .searchMod .searchRow .searchDiv {
    display: block;
  }
  .searchMod .searchRow .searchButton-div {
    width: 100%;
  }
  .searchSelect.checkboxes {
    padding-top: 0;
  }
  /*search by vehicle*/
  #searchVehicleDiv .searchSelect {
    width: 100%;
  }
  /*result listing*/
  .resultsMod {
    padding: 0;
  }
  .freeShipping {
    max-width: 100%;
  }
  /*search results*/
  .searchResults {
    padding: 10px;
  }
  .searchResults .k-dropdown {
    width: 100%;
    margin: 0;
  }
  .searchResults span {
    float: none;
    line-height: inherit;
    padding: 0;
  }
  .searchResults > span {
    position: relative;
    height: 0;
    display: block;
    float: right;
    line-height: inherit;
    padding: 0;
  }
  .searchResults span.sortBy {
    clear: both;
    height: auto;
    float: none;
    padding: 0;
  }
  .searchResults span.sortBy strong {
    float: none;
    display: block;
  }
  .searchResults span.k-dropdown-wrap {
    padding: 0 30px 0 5px;
    line-height: 26px;
  }
  /*tyre panel*/
  .tyrePanels {
    padding: 0;
  }
  .tyrePanel:before,
  .tyrePanel:after {
    content: "";
    display: table;
  }
  .tyrePanel:after {
    clear: both;
  }
  .tyrePanel {
    *zoom: 1;
  }
  .tyrePanel {
    border: 0 none;
    border-bottom: 1px solid #ccc;
    float: none;
    height: auto;
    padding: 15px;
    margin: 0;
    width: auto;
  }
  .tyrePanel:hover {
    box-shadow: none;
  }
  .tyrePanel .logo {
    height: auto;
    margin-right: 100px;
  }
  .tyrePanel .logo img {
    height: 10px;
  }
  .tyrePanel .tyreName {
    height: auto;
    margin-right: 100px;
  }
  .tyrePanel .thumbnail {
    width: 90px;
  }
  .checkoutTyreDetail > h1 {
    margin: 0;
  }
  .checkoutTyreDetail > h1 > span.brandTitle {
    width: 100%;
    display: block;
    height: 17px;
    text-indent: -9999px;
  }
  .checkoutTyreDetail > h1 > span.patternName {
    color: #F5791F;
    font: bold 14px Arial, Helvetica, sans-serif;
    margin: 5px 0px;
  }
  .checkoutTyreDetail > h1 > span.pTyreSize {
    margin-bottom: 5px;
    font-size: 11px !important;
    color: #7E7E7E !important;
  }
  .tyrePanel .icons,
  .checkoutTyreDetail .icons {
    float: left;
    clear: left;
    height: auto;
  }
  .tyrePanel .icons .eco:before,
  .checkoutTyreDetail .icons .eco:before {
    background: url(../images/run-flat-icon.png) no-repeat;
    background-size: 20px 20px;
  }
  .tyrePanel .icons .runFlat:before,
  .checkoutTyreDetail .icons .runFlat:before {
    background: url(../images/run-flat-icon.png) no-repeat;
    background-size: 20px 20px;
  }
  .tyrePanel .thumbnail {
    top: 10px;
    right: 10px;
  }
  .tyrePanel .thumbnail img {
    max-width: none;
  }
  .tyrePanel .thumbnail .discount {
    top: 75px;
    right: -13px;
  }
  .tyrePanel .thumbnail .freeTyreOffer,
  .tyrePanel .thumbnail .blueBubbleSize12 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .blueBubbleSize10 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .blueBubbleAdSize10 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .greenBubbleAdSize10 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .redBubbleAdSize10 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .greenBubbleSize12 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .bestseller {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .specialOffer {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .specialOffer2 {
    top: 15px;
    right: -13px;
  }
  .tyrePanel .thumbnail .CheckoutSpecialOffer2 {
    top: 0px;
    right: -6px;
  }
  .tyrePanel .price,
  .tyrePanel.buyNowRrp .price,
  .tyrePanel.getQuote .price {
    height: auto;
    margin-right: 100px;
  }
  .buyPanel {
    border: 1px solid #8cc622;
    width: 100% !important;
    margin: 10px 0;
    box-sizing: border-box;
  }
  .getQuote .buyPanel {
    border-color: #de7108;
  }
  .getQuote .buyPanel {
    padding-top: 4px;
  }
  .tyrePanel .quantity {
    width: 140px;
    padding: 0;
  }
  .buyPanel label + .k-dropdown,
  .buyPanel label + select {
    display: inline-block;
    width: 100px;
  }
  .buyPanel .submit {
    padding: 0;
  }
  .buyPanel .submit input.button {
    width: 110px;
  }
  .buyPanel + img {
    height: 25px;
    margin: 0 auto;
  }
  .tyrePanel .fitted:before,
  .tyrePanel .roadside:before {
    display: inline-block;
    width: 14px;
    height: 13px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -64px;
    content: '';
    margin-right: 5px;
  }
  .tyrePanel .fitted,
  .tyrePanel .roadside {
    padding-left: 0;
    background: none;
  }
  /*listing form*/
  div#body > section > .getHelpForm {
    height: auto;
    padding: 15px;
  }
  #headerThankyouGetHelpFom {
    font-weight: bold;
    display: block;
  }
  .getHelpFormHeader p {
    margin: 0;
    width: auto;
  }
  .getHelpForm label {
    float: none;
    width: 100%;
    padding: 0 4px;
    text-transform: uppercase;
  }
  .getHelpForm input[type="text"],
  .getHelpForm textarea,
  .getHelpForm select {
    border: 1px solid #ccc;
    background: #fff;
    float: none;
    width: 100% !important;
  }
  section .getHelpForm .searchField {
    width: auto;
  }
  /*deal of the day*/
  body .dealOfTheDay {
    width: auto;
    height: auto;
  }
  body .dealOfTheDay .inner {
    height: auto;
    /*padding-bottom: 20px;*/
  }
  body .dealOfTheDay .tyreImage img {
    max-width: 90px;
  }
  body .dealOfTheDay .dealInfo {
    width: 170px;
    padding-top: 0px;
  }
  body .dealOfTheDay .dealInfo .discount {
    left: -70px;
  }
  body .dealOfTheDay .dealInfo .specialOffer,
  body .dealOfTheDay .dealInfo .redBubbleSize12Bold,
  body .dealOfTheDay .dealInfo .blueBubbleSize14Bold {
    top: 35px;
    left: -70px;
  }
  /*.checkout-deal .floatRight .CheckoutSpecialOffer {
    top: 17px !important;
    left: 5px !important;
  }
  .checkout-deal .floatRight .CheckoutSpecialOffer2 {
    top: 17px !important;
    left: 5px !important;
  }
  .checkout-deal .floatRight .CheckoutFreeTyreOffer {
    top: 17px !important;
    left: 5px !important;
  }*/
  .checkout-form .preferredFitmentDateCalendar {
    float: none;
    width: 100%;
    padding: 0;
  }
  .checkout-form .preferredFitmentDateCalendar > div {
    margin: 0 auto;
    display: block;
    width: 220px;
  }
  .checkout-form .preferredFitmentTime {
    float: none;
    width: 100%;
    padding: 0;
  }
  .checkout-form .preferredFitmentTime .preferredFitmentTimePicker {
    width: 100%;
  }
  body .dealOfTheDay .dealOffer {
    width: 170px;
  }
  body .dealOfTheDay .dealOffer .newPrice {
    margin-bottom: 5px;
    float: none;
  }
  body .dealOfTheDay .dealOffer .newPrice span.priceLabel {
    margin-top: 5px;
  }
  body .dealOfTheDay .dealOffer .oldPrice {
    float: none;
  }
  body .dealOfTheDay .dealOffer .oldPrice .rrp {
    margin: 0;
  }
  body .dealOfTheDay .dealOffer .greyBg {
    margin-left: -70px;
    margin-bottom: 21px;
  }
  body .dealOfTheDay .dealOffer .stock {
    left: -130px;
    top: auto;
    bottom: 7px;
  }
  body .dealOfTheDay .dealOffer input[type="button"] {
    width: 120px !important;
  }
  /*mini cart*/
  /*tabs*/
  .miniCart .tabNavigation li a,
  .miniCart .tabNavigation li a.selected,
  .miniCart .tabNavigation li a:hover {
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    text-indent: -9999px;
    width: 0;
  }
  .miniCart .tabNavigation li a.viewedTyre {
    background-position: -64px -64px;
  }
  .miniCart .tabNavigation li a.viewedTyre.selected {
    background-color: #de7108;
    background-position: -64px -102px;
  }
  .miniCart .tabNavigation li a.selectedTyre {
    background-position: -98px -64px;
  }
  .miniCart .tabNavigation li a.selectedTyre.selected {
    background-color: #de7108;
    background-position: -98px -102px;
  }
  .miniCart .tabNavigation li a img {
    display: none;
  }
  /*quote panel*/
  .miniCart ul.tyreList > li .removeTyre {
    width: 32px;
    height: 32px;
    background: url(../images/mobile-sprites.png) no-repeat -132px -64px #dddddd;
    border-radius: 16px;
  }
  .miniCart .tyreName,
  .miniCart .tyresize {
    padding-right: 40px;
  }
  .miniCart ul.tyreList label {
    display: inline-block;
    padding-top: 5px;
  }
  .miniCart select,
  .miniCart .k-dropdown {
    width: 80px;
    display: inline-block;
  }
  .miniCart a.getadeal {
    display: block;
    width: 200px;
    height: 40px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -140px #8cc622;
    border-radius: 5px;
    float: none;
    text-indent: -9999px;
    margin: 10px auto 0 auto;
  }
  .miniCart a.getadeal img {
    display: none;
  }
  /*pagination*/
  .footnote {
    float: none;
    text-align: center;
    width: 100%;
  }
  .paginationButtons {
    margin: 0;
  }
  .pagination {
    float: none;
    text-align: center;
    width: 100%;
  }
  .pagination a,
  .pagination span,
  .pagination span.prev {
    float: none;
    display: inline-block;
    font-weight: normal;
    font-size: 14px;
    color: #999;
    padding: 5px 3px;
    margin: 0;
  }
  .pagination a {
    color: #666;
  }
  .pagination span.current {
    background: none;
    color: #666;
    font-weight: bold;
  }
  /*quote*/
  .getquote {
    position: relative;
    width: auto;
    padding: 0;
  }
  .getquote div.tyreList {
    width: auto;
    padding: 0;
  }
  .getquote div.tyreList:before {
    display: block;
    width: 170px;
    height: 62px;
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    content: '';
  }
  .getquote div.tyreList h3,
  .getquote div.tyreList h2,
  .getquote div.tyreList > div {
    padding: 0 15px;
  }
  .getquote div.tyreList h3 {
    border-top: 3px solid #de7209;
    padding-top: 20px;
  }
  .getquote p {
    font-size: 11px;
  }
  .getquote > div {
    float: none;
    padding: 0;
    width: 100%;
  }
  .getquote .quoteForm {
    padding: 25px 15px;
  }
  .getquote .searchField label {
    float: none;
    width: auto;
    font: bold 12px/24px 'arial';
    text-transform: uppercase;
    padding: 0 5px;
  }
  .getquote .searchField input,
  .getquote .searchField textarea {
    width: 100%;
    background: #fff;
    border-color: #ccc;
    color: #333;
    font: 16px/20px Arial, Helvetica, sans-serif;
    height: 24px;
    padding: 0 5px;
    margin: 0 0 10px 0;
  }
  .getquote .searchField textarea {
    height: 100px;
  }
  .quoteForm select,
  .quoteForm .k-dropdown {
    width: 100%;
    margin-bottom: 10px;
  }
  .getquote .chkSubscribeToNewsletter {
    margin: 5px 0 0 0;
  }
  .getquote .getQuoteButton {
    display: block;
    width: 200px;
    height: 40px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -140px #8cc622 !important;
    border-radius: 5px;
    float: none;
    text-indent: -9999px;
    margin: 10px auto 0 auto;
  }
  .getquote .getQuoteButton img {
    display: none;
  }
  .getquote ul.tyreList > li .removeTyre {
    background: none;
    height: 32px;
    width: 32px;
  }
  a.removeMyTyre {
    background: url("../images/mobile-sprites.png") no-repeat -132px -64px #dddddd;
    border-radius: 16px;
    height: 32px;
    width: 32px;
  }
  .getquote .tyreName,
  .getquote .price {
    margin-right: 40px;
  }
  /*detail*/
  /*steps*/
  ul.steps {
    background: #f3f3f3;
    padding: 10px;
  }
  ul.steps li {
    background: none;
    width: 33.3333%;
    height: auto;
    font-size: 10px;
    line-height: 12px;
    padding: 5px 0;
    margin-left: 0;
  }
  /*heading*/
  .dealHeading {
    display: none;
    border-bottom: 0 none;
    padding: 0 15px;
  }
  .dealHeading strong {
    background: none;
    padding: 0;
  }
  .dealHeading i {
    display: block;
  }
  .dealHeading .countdown {
    float: none;
    padding: 0;
  }
  /*deal*/
  .checkout-top {
    padding: 10px 15px 0;
  }
  .checkout-deal {
    float: none;
    width: 100%;
  }
  .checkout-deal .floatLeft {
    width: 50%;
  }
  .checkout-deal .floatLeft .sale {
    background: url(../images/mobile-sprites.png) no-repeat -164px -64px;
  }
  .checkout-deal .floatLeft img {
    width: 115px !important;
  }
  .checkout-deal .floatRight {
    width: 50%;
  }
  .checkout-deal .floatRight .stock {
    top: 68px;
    left: 5px;
  }
  .checkout-deal .floatRight img {
    height: 10px;
  }
  .checkout-deal .floatRight ul {
    padding: 0;
  }
  .checkout-deal .floatRight li {
    position: relative;
    background: none;
    margin-bottom: 7px;
  }
  .checkout-deal .floatRight li:before {
    position: absolute;
    top: 3px;
    left: 0;
    display: block;
    width: 14px;
    height: 13px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -64px;
    content: '';
  }
  .checkout-deal .floatRight .CheckoutSpecialOffer,
  .checkout-deal .floatRight .CheckoutFreeTyreOffer,
  .checkout-deal .floatRight .CheckoutRedBubble12,
  .checkout-deal .floatRight .CheckoutSpecialOffer2,
  .checkout-deal .floatRight .CheckoutRedBubble11,
  .checkout-deal .floatRight .CheckoutRedBubble11alignment {
    top: 138px;
    left: 5px;
  }
  .checkout-deal .checkoutProductImages {
    height: auto;
  }
  .checkout-deal .discount {
    left: 5px;
  }
  .purchase-guarantee {
    min-height: 70px;
    padding-top: 21px;
  }
  /*cart*/
  .checkoutCart {
    background: #666;
    float: none;
    padding: 20px;
    width: auto;
    min-height: 0;
    margin: 0 0 10px 0;
  }
  .checkoutCart li {
    border-bottom: 0 none;
    padding: 0;
    margin: 0;
  }
  .checkoutCart .col1,
  .checkoutCart .col2 {
    width: 50%;
  }
  .checkoutCart .col1 select,
  .checkoutCart .col1 .k-dropdown {
    width: 60px;
    vertical-align: middle;
  }
  .tyrePanel .price,
  .tyrePanel.buyNowRrp .price,
  .tyrePanel.getQuote .price {
    min-height: 65px;
    padding-top: 5px;
    margin-right: 0;
  }
  .checkoutCart .col2 .newPrice {
    text-align: left;
  }
  .checkoutCart .col2 .newPrice .price {
    display: inline-block;
    vertical-align: baseline;
  }
  .checkoutCart .col2 .newPrice .pertyre {
    display: inline-block;
    margin: 0;
  }
  .checkoutCart li.costs {
    border-top: 1px solid #ccc;
    margin-top: 10px;
    padding-top: 10px;
  }
  .checkoutCart li.costs span {
    padding: 0 0 3px 0;
    margin: 0;
  }
  .checkoutCart li.costs span.item {
    clear: both;
  }
  .checkoutCart li.costs span.total {
    font-weight: bold;
  }
  .checkoutCart .costs div {
    clear: both;
  }
  .checkoutCart .total {
    margin: 10px 0 0;
  }
  .whatsThis {
    display: none;
  }
  .section .row {
    width: 100%;
  }
  .homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter {
    float: none !important;
    display: inline-block !important;
    width: 100% !important;
  }
  .homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounterInner {
    padding-top: 0px !important;
    padding-left: 10px;
    padding-bottom: 2px;
  }
  .homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter .frontPageTyreCounterText {
    font-size: 16px !important;
    margin-top: 10px;
    color: #666;
  }
  .homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter .frontPageTyreCounterTextOrange {
    font-size: 16px !important;
    color: #f57e21;
    font-weight: bold;
  }
  .frontFooterTyreCounter .frontFooterTyreCounterText {
    color: #fff;
    font-size: larger;
    margin-bottom: 1.5em;
  }
  .frontFooterTyreCounter .frontFooterTyreCounterTextOrange {
    color: #f57e21;
    font-size: larger;
    font-weight: bold;
  }
  /*guarantee*/
  .checkout-deal .floatRight span {
    font-size: 9px;
  }
  .checkout-deal .floatRight .faq {
    display: none;
  }
  /*free fuel*/
  .content section > div.qualifyForFreeFuelContainer {
    margin: 10px 0 0;
    width: auto;
    padding: 10px 0 0 10px;
  }
  .qualifyForFreeFuel {
    font-size: 14px;
  }
  /*pirelli cash back*/
  .qualifyForCashBackContainer {
    margin: 10px 0 10px 0;
    width: auto;
    padding: 10px;
  }
  .qualifyForCashBackContainer p {
    font-size: 12px;
  }
  /*tabs*/
  .checkout-top.checkout-tabs {
    margin: 0 0 10px 0;
  }
  .checkout-tabs {
    background: #de7209;
    padding: 10px !important;
  }
  .checkout-tabs ul.tabNavigation {
    border-bottom: 0 none;
    height: auto;
    padding: 0;
    margin: 0;
  }
  .checkout-tabs ul.tabNavigation > li,
  .checkout-tabs ul.tabNavigation > div {
    margin-left: 1%;
    width: 19%;
  }
  .checkout-tabs ul.tabNavigation > li:first-child {
    margin-left: 0;
  }
  .checkout-top ul.tabNavigation > li a {
    padding: 6px;
  }
  .checkout-tabs ul.tabNavigation a {
    background: #e89d53;
    border: 0 none;
    border-radius: 5px 5px 0 0;
    color: #000000;
    font: 10px/15px 'Arial';
    height: 42px;
    padding: 6px;
    text-transform: uppercase;
    width: 100%;
    box-sizing: border-box;
  }
  .checkout-tabs ul.tabNavigation a.selected {
    background: #fff;
    border: 0 none;
    color: #000000;
  }
  /*reviews*/
  .tabContainer .pr-widget iframe {
    width: 301px !important;
    height: 784px !important;
  }
  /*checkout*/
  ol.steps {
    padding: 10px 10px 0px 10px;
  }
  ol.steps li {
    clear: both;
    float: none;
    margin: 0 0 6px;
  }
  .steps + div + .checkout-form {
    padding: 10px;
  }
  .checkout-form {
    padding: 0px 15px 0px 15px;
    margin: 0;
  }
  .content section > div.checkout-form {
    width: auto;
    padding: 15px;
    margin: 0;
  }
  .content section > .checkout-form + div.qualifyForFreeFuelContainer {
    margin: 0;
  }
  .content section > .checkout-form + div.qualifyForCashBackContainer {
    margin: 0;
  }
  .checkout-form .row {
    margin-bottom: 10px;
  }
  .checkout-tabs > div {
    background-color: #fff;
    padding: 25px 15px;
    border: 0;
  }
  .checkout-form p.checkoutInstruction {
    top: 0;
    width: auto;
  }
  .checkout-form p.checkoutInstructionTop {
    top: 0;
    width: auto;
  }
  .checkout-form .success,
  .checkout-form .locationStep .success {
    width: 100%;
    height: auto;
    box-sizing: border-box;
    background-position: -455px 20px;
  }
  .checkout-form .success .reservationtext {
    margin-left: 0px !important;
  }
  /*checkout pages - customers viewing*/
  .content article .customerViewCount {
    /*top: 182px !important;
        left: 52% !important;
        width: 108px !important;*/
  }
  .btn-priceMatch {
    font-size: 12px !important;
    top: -1px !important;
  }
  .checkout-form .successTop,
  .checkout-form .locationStep .successTop {
    display: inline-block;
    position: relative;
    top: 0;
    width: 100%;
    height: auto;
    background: #ecfcdb;
    box-sizing: border-box;
    padding: 15px 15px 15px 70px;
    margin: 15px 0;
  }
  .checkout-form .successTop .sucessImage {
    display: none;
    background-image: none;
  }
  .checkout-form .successTop b:before {
    position: absolute;
    top: 13px;
    left: 15px;
    display: block;
    width: 39px;
    height: 39px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -89px;
    content: '';
  }
  .checkoutInstruction {
    width: 100%;
    height: 40px;
    float: none;
    padding: 11px 0;
    position: relative;
    margin: 0 auto;
    top: 0 !important;
  }
  .checkout-form .fail,
  .checkout-form .locationStep .fail {
    position: relative;
    top: 0;
    width: 100%;
    height: auto;
    background: #e68585;
    box-sizing: border-box;
    padding: 15px;
    margin: 15px 0;
  }
  .checkout-form h2.heading {
    border-bottom: 0 none;
    color: #333;
    width: 100%;
    font: bold 14px/20px Arial, Helvetica, sans-serif !important;
  }
  .checkout-form h2.heading strong {
    background: none;
    font: bold 14px/20px Arial, Helvetica, sans-serif;
    padding: 0;
  }
  .checkout-form-topheader {
    margin-left: 10px;
  }
  .checkout-form-topheader h2.heading {
    border-bottom: 0 none;
    color: #333;
    width: 100%;
    font: bold 14px/20px Arial, Helvetica, sans-serif !important;
  }
  .checkout-form-topheader h2.heading strong {
    background: none;
    font: bold 14px/20px Arial, Helvetica, sans-serif;
    padding: 0;
  }
  /*checkout form*/
  .checkout-form label {
    float: none;
    display: block;
    font: bold 12px/24px 'Arial';
    padding: 0 4px;
    text-transform: uppercase;
  }
  .checkout-form input[type="text"],
  .checkout-form .newListSelected,
  .checkoutCart .tyrePanel .newListSelected {
    background-color: #fff;
    border: 1px solid #ccc;
    color: #333;
    float: none;
    height: 26px;
    font-size: 16px;
    width: 100%;
    margin-right: 0;
    padding: 0 5px;
    box-sizing: border-box;
  }
  .customerDeliveryDetails select {
    height: 26px;
  }
  .checkout-form .button,
  .checkout-form .button:hover {
    background: linear-gradient(to bottom, #e89d53 0%, #de7209 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-radius: 5px;
    float: none;
    font: bold 18px/40px Arial, Helvetica, sans-serif;
    height: 40px;
    width: 100%;
    margin: 10px 0 0 0;
  }
  .checkout-form .button.aspNetDisabled {
    display: none;
  }
  .dealerSuccess + h2 + div + div + div input[type="submit"] {
    display: none;
  }
  .serviceCenter .dealerTable td {
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
  }
  /*.checkout-form .serviceCenter label {float: none; display:inline-block; vertical-align:top; line-height:18px; width: 83%;}*/
  .checkout-form .row .textwide {
    float: none;
    font-size: 11px;
    text-align: center;
  }
  .section.locationStep select {
    max-width: 100%;
    border-width: 1px;
  }
  .customerDeliveryDetails .row {
    margin: 0;
  }
  .customerDeliveryDetails .formField {
    margin-bottom: 10px;
  }
  .customerDeliveryDetails select {
    font-size: 16px;
  }
  .checkout-form .buttonRight {
    float: none;
    text-align: center;
  }
  .checkout-form .buttonRight img {
    height: 30px;
    display: inline-block;
  }
  .carsales-logo {
    text-align: center;
  }
  .carsales-logo img {
    height: 40px;
  }
  .whyChooseDealersLink {
    display: none;
  }
  .checkout-form .disabled {
    display: none;
    opacity: 1;
  }
  #creditCard .formField select {
    font-size: 16px;
  }
  /*voucher*/
  .checkout-top + .checkout-form {
    padding: 0;
    padding: 0 15px 15px 15px;
  }
  .checkout-form a.redeemCoupon {
    font: 13px/25px Arial;
    /*text-transform: uppercase;*/
    text-decoration: none;
    padding: 5px;
    margin: 0;
  }
  .checkout-form a.redeemCoupon:before {
    display: inline-block;
    vertical-align: text-bottom;
    width: 9px;
    height: 16px;
    background: url(../images/mobile-sprites.png) no-repeat -266px -172px;
    content: '';
    padding: 0;
    margin-right: 10px;
  }
  .checkout-form .redemptionCode {
    border: 0 none;
    width: auto;
    padding: 0;
    margin: 0;
  }
  .redemptionCode label {
    height: 0;
    overflow: hidden;
  }
  .checkout-form .redemptionCode input[type="text"] {
    border: 1px solid #ccc;
    color: #333;
    margin: 0;
    padding: 0 5px;
    width: 100% !important;
  }
  .redemptionCode a {
    display: block;
    background: #de7209;
    background: linear-gradient(to bottom, #e89d53 0%, #de7209 100%);
    border-radius: 5px;
    font: bold 12px/30px 'Arial';
    height: 30px;
    text-align: center;
    width: 100px;
    color: #fff;
    text-transform: uppercase;
    margin-top: 5px;
  }
  .checkout-form .redemptionCode .instruction {
    width: auto;
  }
  .checkout-form .redemtionCodeSuccess {
    border: 1px solid #8bc521;
    background: #ecFcdb;
    padding: 15px;
  }
  .checkout-form .redemtionCodeSuccess .cinema {
    background: none;
    line-height: 18px;
    float: none;
    width: auto;
    height: auto;
    min-height: 39px;
    padding: 0;
  }
  .checkout-form .redemtionCodeSuccess .cinema:before {
    display: inline-block;
    vertical-align: middle;
    float: left;
    width: 39px;
    height: 39px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -89px;
    content: '';
    margin-right: 15px;
  }
  .checkout-form .redemtionCodeSuccess .copy {
    background: none;
    line-height: 18px;
    float: none;
    width: auto;
    height: auto;
    min-height: 39px;
    padding: 0;
  }
  .checkout-form .redemtionCodeSuccess .copy:before {
    display: inline-block;
    vertical-align: middle;
    float: left;
    width: 39px;
    height: 39px;
    background: url(../images/mobile-sprites.png) no-repeat 0 -89px;
    content: '';
    margin-right: 15px;
  }
  .checkout-form .redemtionCodeSuccess .newTotal {
    background: none;
    float: none;
    width: auto;
    padding: 0;
    margin-top: 10px;
  }
  .checkout-form .redemtionCodeSuccess .newTotal span {
    margin-left: 15px;
  }
  /*payment summery*/
  .customerInformation,
  .shippingInformation {
    width: 100%;
    float: none;
    margin-bottom: 10px;
  }
  .purchaseSummary strong,
  .shippingInformation strong {
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  .shippingInformation a {
    display: block;
    margin: 10px 0;
  }
  .summaryMessage {
    border: 1px solid #ccc;
    background: #ededed;
    padding: 10px;
  }
  .checkout-form .formField {
    width: auto;
  }
  .checkout-form .payment span {
    /*height: auto;*/
  }
  .checkout-form .payment .eft {
    margin-left: 0px;
  }
  .checkout-form .payment .finance {
    margin-left: 0px;
    font-size: 12px;
  }
  .checkout-form #banktransfer .button input {
    width: 280px !important;
  }
  .checkout-form .payment .creditCard {
    width: 155px;
  }
  .checkout-form .payment .paypal {
    width: 140px;
    margin-left: 0;
  }
  /*.checkout-form .payment .creditCard,
  .checkout-form .payment .paypal,
  .checkout-form .payment .eft {
    position: relative;
    width: 50%;
    min-height: 25px;
    margin: 0;
  }
  .checkout-form .payment span.creditCard:after {
    position: absolute;
    top: 0;
    left: 30px;
    display: block;
    width: 90px;
    height: 25px;
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    content: '';
    background-position: -73px -180px;
  }
  .checkout-form .payment span.paypal:after {
    position: absolute;
    top: 0;
    left: 30px;
    display: block;
    width: 90px;
    height: 25px;
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    content: '';
    background-position: -73px -205px;
  }
  .checkout-form .payment span.eft:after {
    position: absolute;
    top: 0;
    left: 30px;
    display: block;
    width: 90px;
    height: 25px;
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    content: '';
    background-position: -73px -205px;
  }
  .checkout-form .payment span.creditCard img,
  .checkout-form .payment span.paypal img,
  .checkout-form .payment span.eft img {
    display: none;
  }*/
  .tyrePanel .buyPanel .endingStock {
    /*display:inline-block;*/
  }
  .tyrePanel .buyPanel .endingStock p {
    text-align: left !important;
  }
  #creditCard .row {
    margin: 0;
  }
  #creditCard .formField select,
  #creditCard .formField input[type="text"] {
    margin-bottom: 10px !important;
  }
  #creditCard .formField select {
    width: 100%;
    border-width: 1px;
  }
  #creditCard .formField.dateField .k-dropdown,
  #creditCard .formField.dateField select {
    width: 45%;
    display: inline-block;
  }
  #creditCard .formField.dateField .k-dropdown:first-child,
  #creditCard .formField.dateField select:first-child {
    margin-right: 8%;
  }
  .checkout-form input.large[type="text"] {
    width: 100%;
  }
  #creditCard .formField select {
    height: 26px;
  }
  .checkout-form .button.payNow {
    float: none;
    background: none;
    height: auto;
    margin: 10px 0;
  }
  .checkout-form .button input,
  .checkout-form .row input[type="button"],
  .searchMod .deal-container input[type="button"],
  .deal-container input[type="button"] {
    background: #de7209;
    background: linear-gradient(to bottom, #e89d53 0%, #de7209 100%) !important;
    border-radius: 5px;
    float: none;
    font: bold 18px/40px 'Arial';
    height: 40px;
    margin: 0 auto;
    text-indent: 0;
    width: 100%;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
  }
  .checkout-form #paypal .button input {
    width: auto;
  }
  /*summary*/
  ul.steps + .checkout-form {
    padding: 0 15px;
  }
  ul.steps + .checkout-form p > strong {
    text-transform: uppercase;
    display: block;
    border-top: 1px solid #ccc;
    padding: 15px 0;
  }
  .tyreWinningBidRetailPanel {
    border: 0 none;
    padding: 0;
  }
  .tyreDetail {
    float: none;
    width: auto;
    padding: 0;
  }
  .tyreDetail .logo img {
    height: 10px;
  }
  .tyreDetail .price div {
    border-top: 1px solid #ededed;
    padding: 5px 0;
  }
  .sellerDetail {
    width: auto;
    float: none;
    min-height: 0;
    margin: 20px 0;
  }
  .sellerDetail .sellerLogo img {
    width: 50px !important;
  }
  /*thank you*/
  .compare {
    border: 0 none;
    border-radius: 0;
  }
  .searchMod {
    width: auto;
    padding: 0;
  }
  .searchMod h2,
  .searchMod p,
  .searchMod p + p + div {
    margin: 15px;
  }
  .tyreWinningBidRetailPanels {
    border: 0 none;
    background: #de7209;
    padding: 10px;
  }
  .tyreWinningBidRetailPanel {
    background: #fff;
    padding: 15px;
  }
  .leadRewardTitle {
    display: none;
  }
  .relatedTyres {
    width: 100%;
  }
  .relatedTyres h2 {
    margin: 15px;
  }
  .checkout-tabs > div#first {
    padding: 0;
  }
  .tyreWinningBidRetailPanels {
    background: #fff;
    padding: 0;
  }
  /*help*/
  .questionForm {
    background-image: url(../images/askGreg.jpg) /*only for CU purpoeses*/;
    background-size: 100%;
    background-color: #13120e;
    padding: 15px !important;
  }
  .questionForm h2 {
    font: bold 48px/48px arial;
    width: 100px;
    margin-bottom: 20px;
  }
  .sponsor img {
    display: block;
    width: 50%;
  }
  .questionForm textarea {
    border: 1px solid #ccc;
    color: #333;
    width: 100%;
  }
  .questionForm input[type="text"] {
    width: 100%;
    padding: 0 5px;
  }
  .sponsorDetail {
    border-bottom: 1px solid #ccc;
    padding: 15px !important;
    margin-bottom: 15px;
  }
  .sponsorDetail img {
    width: 50px !important;
    height: auto !important;
  }
  .sponsorDetail h3,
  .sponsorDetail p {
    margin: 0 0 0 70px;
  }
  .sponsorDetail + div > div {
    padding: 15px;
  }
  .sponsorDetail + div > div h1 {
    font-size: 2em !important;
  }
  /*quote product detail*/
  .tyre-tabWrap {
    padding: 10px;
    background: #de7209;
  }
  .tabContainer {
    background: #fff;
  }
  .tabDescription {
    width: 70%;
  }
  .tabTyreImage {
    width: 30%;
  }
  .tabTyreImage img {
    max-width: 100%;
  }
  .tabTyreImage + .tabTyreImage {
    float: none;
    clear: both;
  }
  .contentRightRail iframe {
    display: block;
    clear: left;
    display: none;
  }
  .tabContainer iframe {
    display: block;
    clear: left;
    display: none;
  }
  table.tyreSecifications th {
    display: none;
  }
  table.tyreSecifications tr {
    border-bottom: 1px solid #ccc;
  }
  table.tyreSecifications td {
    display: block;
    float: left;
    width: 100%;
    border: 0 none;
    clear: left;
  }
  table.tyreSecifications td:before {
    display: block;
    float: left;
    width: 35%;
  }
  table.tyreSecifications td:nth-child(1):before {
    content: 'Size';
  }
  table.tyreSecifications td:nth-child(2):before {
    content: 'Width';
  }
  table.tyreSecifications td:nth-child(3):before {
    content: 'Ratio';
  }
  table.tyreSecifications td:nth-child(4):before {
    content: 'RIM';
  }
  table.tyreSecifications td:nth-child(5):before {
    content: 'Load';
  }
  table.tyreSecifications td:nth-child(6):before {
    content: 'Speed';
  }
  table.tyreSecifications td:nth-child(7):before {
    content: 'Run Flat';
  }
  table.tyreSecifications td:nth-child(8):before {
    content: 'Eco';
  }
  /*contact*/
  .content > section > .sfContentBlock,
  .content > section > .sfContentBlock + .sfFormsEditor {
    padding: 25px 15px;
  }
  .content > section > .sfContentBlock + .sfFormsEditor {
    padding-top: 0;
  }
  /*extended footer*/
  .extendedFooter {
    padding-top: 30px;
    min-height: 0;
    display: none;
  }
  .footcrumbContainer {
    width: auto;
  }
  .footCrumb {
    background: none;
  }
  .footCrumb {
    background: none;
  }
  a.toggleSEOFooter {
    display: none;
  }
  .extendedFooter .enhancedSEOFooter,
  .enhancedSEOFooter .tabContainer {
    display: none !important;
    background: none;
    border: 0 none;
    margin: 0;
  }
  .enhancedSEOFooter p {
    float: none;
    text-align: center;
    color: #000;
    padding: 0;
    margin: 0 15px;
  }
  .extendedFooter .enhancedSEOFooter ul.tags,
  .enhancedSEOFooter .tabContainer ul.tags {
    float: none;
    width: auto;
    padding: 0;
    margin: 5px;
  }
  .extendedFooter .enhancedSEOFooter ul.tags li,
  .enhancedSEOFooter .tabContainer ul.tags li {
    float: left;
    width: 50%;
    margin: 0;
  }
  .extendedFooter .enhancedSEOFooter ul.tags li a,
  .enhancedSEOFooter .tabContainer ul.tags li a {
    border: 1px solid #ccc;
    background: #f5f5f5;
    color: #000;
    font-weight: normal;
    text-transform: uppercase;
    text-align: center;
    line-height: 38px;
    padding: 0;
    text-shadow: none;
    margin: 5px;
  }
  .tabPanelContent {
    background: none;
    border: 0 none;
  }
  .tabPanelContent ul {
    float: none;
    margin: 0;
    padding: 0;
  }
  .tabPanelContent ul li {
    width: 50%;
    margin: 0;
  }
  .tabPanelContent li a {
    border: 0 none;
    border-bottom: 1px solid #ccc;
    background: #fff;
    color: #000;
    font-weight: normal;
    text-transform: uppercase;
    text-align: center;
    line-height: 20px;
    padding: 0;
    text-shadow: none;
    padding: 9px 0;
    margin: 5px;
    border-radius: 0;
  }
  .tabPanelContent li:nth-child(1) a,
  .tabPanelContent li:nth-child(2) a {
    border-top: 1px solid #ccc;
  }
  .tabPanelContent li:nth-child(even) a {
    margin-right: 10px;
  }
  .tabPanelContent li:nth-child(odd) a {
    margin-left: 10px;
  }
  /*footer*/
  .footer {
    text-align: center;
    padding: 15px 0;
  }
  .footer .footerSection {
    min-height: 0;
  }
  .footer .socialMedia {
    display: none;
  }
  .socialMedia {
    float: none;
    width: auto;
  }
  .socialMedia h2 {
    display: none;
  }
  .socialMedia span {
    width: 32px;
    height: 32px;
    background: url(../images/mobile-sprites.png) no-repeat 0 0;
    padding: 0;
    margin: 0 10px;
    text-indent: -9999px;
  }
  .socialMedia span:nth-child(2) {
    background-position: -202px 0;
  }
  .socialMedia span:nth-child(3) {
    background-position: -234px 0;
  }
  .socialMedia span:nth-child(4) {
    background-position: -266px 0;
  }
  .socialMedia span:nth-child(5) {
    display: none;
  }
  .socialMedia span a {
    display: block;
    width: 32px;
    height: 32px;
  }
  .footer a {
    display: inline-block;
    padding: 3px 10px;
  }
  .footer p {
    margin: 0;
  }
  .carsales-network img {
    margin: 20px 0 10px;
  }
  .checkoutErrorMessage {
    width: 92% !important;
  }
  #popUpDiv.afterPayPanel,
  #popUpDiv {
    position: fixed;
    background: white;
    width: auto;
    max-width: 100%;
    /*height: 300px;*/
    border: 3px solid #F57B22;
    box-sizing: border-box;
    border-radius: 10px;
    padding: 10px 10px 10px;
    z-index: 9002;
    top: 0;
    left: 0;
    margin: 5px 5px 5px 5px;
  }
  #popUpDiv.askForADealPanel {
    position: fixed;
    background: none;
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    /*height: 300px;*/
    border: none;
    box-sizing: border-box;
    border-radius: 0;
    padding: 0;
    z-index: 9002;
    top: 0;
    left: 0;
    margin: 0;
  }
  #popUpDiv.askForADealPanel iframe {
    width: 100%;
    height: 100%;
  }
  .regLabelNonMobile {
    display: none;
  }
  .regLabelMobileOnly {
    display: inline !important;
  }
  .homeSearchContainer .searchOptions .tabPanel#rego .findRegoVehicle,
  .homeSearchContainer .searchOptions .tabPanel#rego .searchingRegoVehicle {
    margin-left: -27px;
    margin-top: -5px;
    /*padding: 5px 5px;*/
  }
  .homeSearchContainer .searchOptions .tabPanel#rego .regoSearch span {
    font-weight: 200;
    font-size: 24px;
    line-height: 50px;
  }
  .homeSearchContainer .searchOptions .tabPanel#rego .regoSearch {
    margin-bottom: 10px;
  }
  .subTabs ul.tabSubNavigation a {
    /*width: 80px !important;
    margin: 5px !important;*/
  }
  .passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch {
    margin-left: 0px !important;
  }
  .passengerSearchOptions .subTabs .truckSubTabs {
    margin-left: 0px !important;
  }
  .passengerSearchOptions .subTabs .searchSelect,
  .passengerSearchOptions .subTabs .searchField {
    width: 100% !important;
  }
  .searchForm .sizeTyre {
    display: none;
  }
  #sizeHomeSearchButton {
    clear: both;
  }
  .passengerSearchOptions .subPanel#passengerSize,
  .passengerSearchOptions .subPanel#truckSize {
    height: auto !important;
  }
  .resultsMod .patternContent {
    display: none;
  }
  .toDeliveryLocation {
    width: 100%;
  }
  .dealOfTheDay .searchtile-deliverylocation-text {
    margin-left: -70px;
  }
  .headinggraphic .banner {
    width: 100%;
  }
  .headinggraphic .banner .deliveryAndInstallation {
    width: 100%;
  }
  .headinggraphic .banner .deliveryAndInstallation .fa-2x {
    font-size: 1em;
    vertical-align: baseline;
  }
  .headinggraphic .banner .deliveryAndInstallation span {
    font-size: 15px;
    padding-left: 2px;
  }
  .headinggraphic .banner .fitmentCenterLocation {
    width: 100%;
  }
  .headinggraphic .banner .fitmentCenterLocation .fa {
    font-size: 1em;
    vertical-align: baseline;
  }
  .headinggraphic .banner .fitmentCenterLocation span {
    font-size: 15px;
    padding-left: 2px;
  }
  .headinggraphicsearchpage {
    width: auto;
  }
}
@media only screen and (max-width: 640px) and (-webkit-min-device-pixel-ratio: 1.5), only screen and (max-width: 640px) and (min-resolution: 144dpi) {
  #navigationToggle,
  ul.m-navigation ul a,
  .socialMedia span,
  .tyrePanel .fitted:before,
  .tyrePanel .roadside:before,
  .tyrePanel .icons .eco:before,
  .tyrePanel .icons .runFlat:before,
  .checkoutTyreDetail .icons .eco:before,
  .checkoutTyreDetail .icons .runFlat:before,
  .miniCart .tabNavigation li a,
  .miniCart .tabNavigation li a.selected,
  .miniCart ul.tyreList > li .removeTyre,
  .miniCart a.getadeal,
  .checkout-deal .floatLeft .sale,
  .checkout-deal .floatRight li:before,
  .purchase-guarantee p:before,
  .checkout-form .success p:before,
  .checkout-form a.redeemCoupon:before,
  .getquote h3:before,
  .getquote .getQuoteButton,
  .getquote div.tyreList:before,
  a.removeMyTyre,
  .checkout-form .payment span:after,
  .checkout-form .redemtionCodeSuccess .copy:before {
    background-image: url(../images/mobile-sprites@2x.png) !important;
    background-size: 300px 400px !important;
  }
  .headinggraphic .banner {
    width: 100%;
  }
  .headinggraphic .banner .deliveryAndInstallation {
    width: 100%;
  }
  .headinggraphic .banner .deliveryAndInstallation .fa-2x {
    font-size: 1em;
    vertical-align: baseline;
  }
  .headinggraphic .banner .deliveryAndInstallation span {
    font-size: 15px;
    padding-left: 2px;
  }
  .headinggraphic .banner .fitmentCenterLocation {
    width: 100%;
  }
  .headinggraphic .banner .fitmentCenterLocation .fa {
    font-size: 1em;
    vertical-align: baseline;
  }
  .headinggraphic .banner .fitmentCenterLocation span {
    font-size: 15px;
    padding-left: 2px;
  }
  .headinggraphicsearchpage {
    width: auto;
  }
}
/*global - content styles*/
h1 {
  font: bold 26px Arial, Helvetica, sans-serif;
  color: #f57e21;
}
h2 {
  font: bold 20px Arial, Helvetica, sans-serif;
  color: #f57e21;
}
h3 {
  font: bold 18px Arial, Helvetica, sans-serif;
  color: #333;
}
h4 {
  font: bold 16px Arial, Helvetica, sans-serif;
  color: #333;
}
h3.sflistItemTitle {
  font-weight: 400;
  font-size: 14px;
}
.content {
  font-size: 14px;
}
a {
  color: #f57e21;
}
input[type="submit"],
input[type="button"] {
  -webkit-appearance: none;
}
/*global - structure*/
body {
  min-width: 1024px;
}
.content aside > div.noPadding {
  padding: 0;
  border: 0;
  background: none;
}
.content section {
  /*margin-bottom: 0;*/
  /*-webkit-border-radius: 5px 5px 0 0;
    -moz-border-radius: 5px 5px 0 0;*/
  /*border-radius: 5px 5px 0 0;*/
  border: 1px solid #DDDDDD;
  /*border-bottom: 0;*/
  /*-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;*/
  box-sizing: border-box;
}
.content header {
  padding: 14px 0 20px 14px;
}
/*global - header*/
.needHelp {
  color: #fff;
  font-size: 13px;
  display: inline-block;
  float: right;
  padding: 10px 0;
}
.needHelp a {
  color: #f57e21;
  font-weight: bold;
}
.needHelp a:hover {
  text-decoration: underline;
}
/*breadcrumbs*/
ul.breadcrumbs {
  font: 12px/30px Arial, helvetica, sans-serif;
}
ul.breadcrumbs li,
ul.breadcrumbs li a.last-breadcrumb {
  color: #f5791f;
  font-weight: bold;
}
ul.breadcrumbs li a.last-breadcrumb {
  cursor: default;
  background: none;
  text-decoration: none;
}
ul.breadcrumbs li a {
  font-weight: normal;
  color: #7e7e7e;
  cursor: pointer;
}
/*global - SEOfooter - overrides*/
a.toggleSEOFooter {
  float: none;
  width: 76px;
  height: 31px;
  position: absolute;
  top: -31px;
  left: 50%;
  padding: 0 15px;
  box-sizing: border-box;
  margin: 0 0 0 -38px;
  background: #ecebeb url(../images/sprite_redesign.png) no-repeat 109% -441px;
  text-align: left;
  color: #7e7e7e;
  font-size: 12px;
  border-radius: 7px 7px 0 0;
}
a.toggleSEOFooter.less {
  background: #ecebeb url(../images/sprite_redesign.png) no-repeat 109% 13px;
}
.extendedFooter {
  background: #ecebeb;
  border: none;
  min-height: inherit;
}
.extendedFooter .enhancedSEOFooter {
  margin-top: 23px;
}
.extendedFooter .enhancedSEOFooter ul.tags {
  padding: 21px 0;
}
.extendedFooter .enhancedSEOFooter .tabPanelContent ul {
  padding: 20px 0 30px;
  margin: 0;
}
.extendedFooter .enhancedSEOFooter .tabPanelContent ul li {
  margin: 3px;
}
.extendedFooter .enhancedSEOFooter ul.tags li a,
.enhancedSEOFooter .tabContainer ul.tags li a,
.tabPanelContent li a {
  color: #f57e21;
  background: #fff;
  font-size: 12px;
  line-height: 30px;
  padding: 0 10px;
  border: none;
  border-radius: 5px;
  text-shadow: none;
}
.extendedFooter .enhancedSEOFooter ul.tags li a.current,
.enhancedSEOFooter .tabContainer ul.tags li a:hover,
.tabPanelContent li a:hover {
  background: #c3c2c2;
  color: #fff;
}
.tabPanelContent {
  border-top: 1px solid #dbdbdb;
  background: none;
}
.extendedFooter .enhancedSEOFooter p {
  font: 12px Arial, Helvetica, sans-serif;
  color: #7e7e7e;
  margin: 30px 0 0 30px;
}
.extendedFooter .enhancedSEOFooter,
.enhancedSEOFooter .tabContainer {
  background: none;
  margin: 0;
}
.footcrumbContainer {
  background: #ecebeb;
  border-bottom: 0 none;
  width: 990px;
  margin: 0 auto;
  position: relative;
}
.footCrumb {
  background: none;
}
/*global - footer*/
.footer {
  background: #534c46;
  color: #c3c2c2;
}
.footer a {
  color: #c3c2c2;
}
.footer a:hover {
  color: #fff;
}
.footer .socialMedia h2 {
  color: #c3c2c2;
  font: 11px 'ITCAvantGardeStd-Bk', sans-serif;
  text-transform: uppercase;
}
.footer .wrapper {
  padding: 30px 0;
  color: #c3c2c2;
}
.socialMedia a:hover {
  zoom: 1;
  filter: alpha(opacity=70);
  opacity: 0.7;
}
/*home - container*/
.content.homeContainer {
  width: 100%;
  background: #fff url(../images/bgRepeatHome.png) center top repeat-x;
  min-width: 1020px;
}
.content.homeContainer header {
  margin: 0 auto;
  padding: 14px 0 0 29px;
}
/*home - home searchContainer - overrides*/
.homePassengerBackground {
  background: #47413c url(../images/homebg1.jpg) no-repeat center center;
}
.homeTruckBackground {
  background: #47413c url(../images/homebg2.jpg) no-repeat center center;
}
.homeSearchContainer-whitebackground {
  background: url("../images/heroTabsBg.png") repeat-x left top rgba(0, 0, 0, 0);
}
.homeSearchContainer {
  background-size: cover;
  padding: 0;
  border: 0;
  margin: 0;
  height: 542px;
  position: relative;
  min-width: 1020px;
  /*transition: background-image 0.5s;*/
}
.homeSearchContainer:after {
  width: 100%;
  height: 79px;
  display: block;
  content: "";
  background: url(../images/heroShadow.png) repeat-x;
  position: absolute;
  bottom: 0;
  left: 0;
}
.homeSearchContainer:before {
  position: absolute;
  top: 20px;
  left: 50%;
  margin-left: -544px;
  display: block;
  width: 1088px;
  height: 369px;
  border-radius: 10px;
  /* white background on homepage*/
  /*background: url("../images/heroTabsBg.png") repeat-x left top rgba(0, 0, 0, 0);*/
  content: '';
  z-index: 1;
}
/*style for panel behind the search functionality*/
.homeSearchContainer .searchOptions {
  font-family: 'ITCAvantGardeStd-Bk', sans-serif;
  width: 100%;
  max-width: 880px;
  margin: 0 auto;
  float: none;
  box-sizing: border-box;
  border: 0;
  padding: 28px 0 0 0;
  z-index: 3;
}
.homeSearchContainer .searchOptions h2 {
  margin: 0;
  text-align: center;
  color: #de7209;
  font: 44px/57px 'ITCAvantGardeStd-Demi', sans-serif;
  font-style: normal;
  text-transform: uppercase;
  font-weight: bold;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.5);
}
.homeSearchContainer .searchOptions .tabs {
  width: 760px;
  margin: 17px auto 0;
  background: none;
  position: relative;
}
.homeSearchContainer .searchOptions .tabs p.searchby {
  position: absolute;
  left: 0;
  top: 0;
  font: 22px/40px 'ITCAvantGardeStd-Bk', sans-serif;
  margin: 0 0 0 20px;
  color: #524e4b;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation {
  border: none;
  margin-left: 143px;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation li:first-child a {
  width: auto;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation a {
  display: block;
  width: auto;
  height: 40px;
  border: 0;
  border-bottom: 0 none;
  border-radius: 3px 3px 0 0;
  background: #534c46;
  text-align: center;
  color: #fff;
  font: 16px/40px 'ITCAvantGardeStd-Bk', sans-serif;
  padding: 0 20px;
  text-transform: uppercase;
  zoom: 1;
  filter: alpha(opacity=50);
  opacity: 0.85;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation a:hover {
  text-decoration: none;
  filter: alpha(opacity=100);
  opacity: 1;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation a.selected {
  font-size: 20px;
  filter: alpha(opacity=100);
  opacity: 1;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation a.selected:after {
  display: none;
}
.homeSearchContainer .searchOptions .tabs ul.tabNavigation {
  height: 40px;
}
.homeSearchContainer .searchOptions .tabPanel {
  color: #fff;
  border-radius: 8px;
  padding: 28px 52px;
  background: #1e1b19 url(../images/tabbg.png) repeat-x top left;
  height: auto;
}
.homeSearchContainer .searchOptions .tabPanel p {
  font: 19px/26px 'ITCAvantGardeStd-Bk', sans-serif;
  text-align: center;
  margin: 0 0 18px 0;
  display: inline-block;
}
.homeSearchContainer .searchOptions .tabPanel .advancedSearchLink {
  margin: 30px 0 0 0;
  width: 100px;
  float: left;
  display: block;
  text-align: right;
}
.homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter {
  float: left;
  display: block;
  width: 380px;
}
.homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounterInner {
  padding-top: 0px;
  padding-left: 10px;
}
.homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter .frontPageTyreCounterText {
  font-size: large;
  margin-top: 10px;
}
.homeSearchContainer .searchOptions .tabPanel .frontPageTyreCounter .frontPageTyreCounterTextOrange {
  font-size: large;
  color: #f57e21;
  font-weight: bold;
}
.frontFooterTyreCounter .frontFooterTyreCounterText {
  color: #fff;
  font-size: larger;
}
.frontFooterTyreCounter .frontFooterTyreCounterTextOrange {
  color: #f57e21;
  font-size: larger;
  font-weight: bold;
}
.searchOptions .tabPanel .advancedSearchLink a {
  color: #918f8f;
  font-size: 12px;
  text-decoration: underline;
}
.searchOptions .tabPanel .advancedSearchLink a:hover {
  color: #de7209;
  text-decoration: none;
}
.homeSearchContainer .searchOptions #vehicleDetails:hover,
.homeSearchContainer .searchOptions .linkHelpFindTyreForm {
  color: #f57e21;
}
/*size tab*/
.homeSearchContainer .searchOptions .tabPanel#size {
  background: #1e1b19 url(../images/tabbg.png) repeat-x top left;
  padding-bottom: 55px;
}
.homeSearchContainer .searchOptions .tabPanel#size .advancedSearchLink {
  position: absolute;
  margin: 0;
  width: auto;
  bottom: 30px;
  right: 0;
  width: 210px;
  text-align: left;
}
/*vehicle tab*/
.homeSearchContainer .searchOptions .tabPanel#vehicle {
  height: auto;
}
.homeSearchContainer .searchOptions .tabPanel#vehicle .searchField {
  width: 323px;
  display: inline-block;
  float: left;
  padding-bottom: 10px;
}
.homeSearchContainer .searchOptions .tabPanel#vehicle .searchField.vehicleYear,
.homeSearchContainer .searchOptions .tabPanel#vehicle .searchField.vehicleModel {
  margin-right: 10px;
}
/*brand tab*/
.homeSearchContainer .searchOptions .tabPanel#brand {
  height: auto;
}
.homeSearchContainer #brand.tabPanel .searchSelect.brand,
.homeSearchContainer #brand.tabPanel .searchSelect.brandModel {
  width: 323px;
}
.homeSearchContainer #brand.tabPanel .searchSelect.brandWidth,
.homeSearchContainer #brand.tabPanel .searchSelect.brandProfile {
  width: 189px;
}
.homeSearchContainer #brand.tabPanel .searchSelect.brandRim {
  width: 258px;
}
.homeSearchContainer #brand.tabPanel .searchSelect.brand,
.homeSearchContainer #brand.tabPanel .searchSelect.brandWidth,
.homeSearchContainer #brand.tabPanel .searchSelect.brandProfile {
  margin-right: 10px;
}
/*Rego tab*/
.homeSearchContainer .searchOptions .tabPanel#rego {
  height: auto;
}
.homeSearchContainer .searchOptions .tabPanel#rego .searchField {
  width: 293px;
  display: inline-block;
  float: left;
  padding-bottom: 10px;
}
.homeSearchContainer .searchOptions .tabPanel#rego .searchField.vehicleRegoState {
  margin-right: 10px;
}
.homeSearchContainer .searchOptions .tabPanel#rego input[type="text"],
.homeSearchContainer .searchOptions .tabPanel#rego select {
  text-transform: uppercase;
}
/*home search fields*/
.homeSearchContainer .searchOptions .searchButton,
.searchOptions.searchMod .searchButton {
  font-size: 12px;
  text-indent: 0;
  width: 156px;
  height: 59px;
  padding: 10px 23px;
  box-sizing: border-box;
  font-weight: normal;
  background: #f57e21 url(../images/sprite_redesign.png) no-repeat -64px -114px;
}
.homeSearchContainer .searchOptions .searchButton span,
.searchOptions.searchMod .searchButton span {
  clear: both;
  display: block;
  font: 24px/24px 'ITCAvantGardeStd-Demi', sans-serif;
  margin-bottom: 7px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.homeSearchContainer .searchOptions .searchButton:hover {
  background-color: #f56120;
  text-decoration: none;
}
.homeSearchContainer select,
.searchOptions.searchMod .tab select,
.homeSearchContainer input[type="text"],
.searchOptions.searchMod .tab input[type="text"] {
  border-radius: 5px;
  height: 50px;
  font-size: 20px;
  line-height: 50px;
  border: none;
  vertical-align: middle;
  /*padding: 11px 11px;*/
}
.homeSearchContainer #size.tabPanel .searchField.odd,
.homeSearchContainer #brand.tabPanel .searchSelect.odd {
  margin: 0;
}
.homeSearchContainer .searchOptions .tabPanel#size select {
  width: 136px;
  margin: 8px 30px 0 0;
}
.homeSearchContainer .tabPanel#size .searchField,
.homeSearchContainer .tabPanel#brand .searchSelect {
  width: auto;
}
.homeSearchContainer .searchForm label {
  display: none;
}
.homeSearchContainer #size.tabPanel .sizeTyre {
  position: absolute;
  bottom: -165px;
  left: 50%;
  margin-right: 0;
  margin-left: -372px;
}
.homeSearchContainer #size.tabPanel,
#passengerSize.tabPanel {
  height: auto;
}
.homeSearchContainer #searchVehicleDiv #searchVehicleButton,
.homeSearchContainer #vehicleSearchButton {
  position: relative;
  margin-top: 10px;
  right: auto;
  top: auto;
}
.searchOptions #vehicleSearchButton.disabled,
.searchOptions #sizeSearchButton.disabled,
.searchOptions #regoSearchButton.disabled,
.searchOptions #VINSearchButton.disabled {
  opacity: 0.2 !important;
  cursor: default;
  background-color: #f57e21 !important;
}
/*home - how it works*/
.howItWorks {
  background: #fcfcfc url(../images/howBgGrey.png) repeat-x top left;
  position: relative;
  height: 168px;
}
.howItWorks a:hover {
  text-decoration: none;
}
.howItWorks h2 {
  background: #f57e21 url(../images/howArrowOrange.png) no-repeat top right;
  height: 168px;
  width: 200px;
  font: 24px/24px 'ITCAvantGardeStd-Demi', sans-serif;
  color: #fff;
  text-transform: uppercase;
  padding: 62px 69px 0 40px;
  box-sizing: border-box;
  margin: 0;
}
.howItWorks:before {
  content: "";
  width: 50%;
  background: #f57e21;
  height: 168px;
  position: absolute;
  left: 0;
  top: 0;
}
.howItWorks .innerContainer {
  width: 100%;
  max-width: 1170px;
  margin: 0 auto;
  z-index: 1;
  position: relative;
  background: #fcfcfc url(../images/howBgGrey.png) repeat-x top left;
}
.howItWorks .sfContentBlock {
  padding: 0;
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
}
.howItWorks ul {
  list-style: none;
  display: inline-block;
  float: left;
  padding: 0 200px;
  width: 100%;
  margin: 0;
  box-sizing: border-box;
  height: 168px;
}
.howItWorks ul li {
  width: 25.9%;
  display: inline-block;
  float: left;
  text-align: center;
  background: url(../images/howArrow.png) no-repeat 0 25px;
  padding: 23px 0 0 55px;
  box-sizing: border-box;
}
.howItWorks ul li:first-child {
  background: none;
  padding: 23px 0 0 0;
  width: 18.8%;
}
.howItWorks ul li img {
  width: 58px;
  margin: 0 auto;
}
.howItWorks p {
  color: #7e7e7e;
  font: 16px/20px 'ITCAvantGardeStd-Bk', sans-serif;
}
.howItWorks p span {
  color: #f57e21;
}
.howItWorks .howCrest {
  width: 195px;
  position: absolute;
  top: 0;
  right: 0;
  margin: 9px 0 0 0;
}
.howItWorks:after {
  content: "";
  height: 39px;
  display: block;
  width: 100%;
  background: url(../images/howShadow.png) repeat-x;
}
/*home - promographic*/
.homeContent .promoGraphic {
  display: inline-block;
  float: right;
  width: 30%;
}
.homeContent .promoGraphic .sfContentBlock {
  padding: 0;
}
.homeContent .promoGraphic img {
  margin: 0 auto;
  max-width: 100%;
}
/*home - homeContent*/
.homeContent {
  width: 100%;
  max-width: 1170px;
  margin: 0 auto;
  float: none;
  box-sizing: border-box;
  padding: 0;
  border: none;
  height: 272px;
}
.homeContent .customerTestimonial {
  background: url(../images/testimonialQuote.png) no-repeat 36px 66px;
  color: #7e7e7e;
  width: 67%;
  max-width: 780px;
  padding: 62px 0 0 85px;
  margin-bottom: 4em;
  box-sizing: border-box;
  display: inline-block;
  float: left;
  position: relative;
}
.homeContent .customerTestimonial .productReview {
  position: absolute;
  right: 0;
  top: 64px;
  z-index: 100;
}
.homeContent .customerTestimonial h3 {
  margin: 0;
  font-size: 24px;
}
.homeContent .customerTestimonial .stars {
  text-indent: -99999px;
  background: transparent url(/images/SpritesStarRatings.jpg) no-repeat scroll 0 0;
  width: 77px;
  height: 14px;
  display: block;
  margin: 0.6em 0;
}
.homeContent .customerTestimonial .stars.stars0 {
  background-position: 0 -1px;
}
.homeContent .customerTestimonial .stars.stars1 {
  background-position: 0 -1px;
}
.homeContent .customerTestimonial .stars.stars2 {
  background-position: 0 -15px;
}
.homeContent .customerTestimonial .stars.stars3 {
  background-position: 0 -29px;
}
.homeContent .customerTestimonial .stars.stars4 {
  background-position: 0 -43px;
}
.homeContent .customerTestimonial .stars.stars5 {
  background-position: 0 -57px;
}
.homeContent .customerTestimonial p {
  font-weight: bold;
  font-size: 12px;
}
.homeContent .customerTestimonial ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
.homeContent .customerTestimonial ul li blockquote {
  min-height: 75px;
  overflow: hidden;
  font: 16px/23px 'Noto Serif', serif;
  font-style: italic;
}
.homeContent .customerTestimonial .moreTestimonials {
  color: #7e7e7e;
  text-decoration: underline;
  position: absolute;
  bottom: 6px;
  right: 0;
  font-size: 12px;
}
.homeContent .customerTestimonial .moreTestimonials:hover {
  text-decoration: none;
}
/*search page tabs*/
.searchMod {
  /*position: relative;*/
}
.searchMod .searchResultsFound {
  font: 16px/33px 'ITCAvantGardeStd-Demi', sans-serif;
  color: #f57e21;
  position: absolute;
  left: 15px;
  top: 50px;
}
.searchMod ul.tabNavigation {
  border: none;
  height: 33px;
  margin: 12px 0 0;
  float: right;
}
.searchMod ul.tabNavigation li {
  width: auto;
  margin-left: 3px;
}
.searchMod ul.tabNavigation li:first-child {
  width: auto;
}
.searchMod ul.tabNavigation a {
  display: block;
  width: auto;
  height: 33px;
  border: 0;
  border-bottom: 0 none;
  border-radius: 10px 10px 0 0;
  background: #534c46;
  text-align: center;
  color: #fff;
  font: 14px/33px 'ITCAvantGardeStd-Bk', sans-serif;
  padding: 0 25px;
  text-transform: uppercase;
  zoom: 1;
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.searchMod ul.tabNavigation a:hover {
  text-decoration: none;
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
}
.searchMod ul.tabNavigation a.selected {
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
  color: #fff;
}
.searchMod ul.tabNavigation a.selected:after {
  display: none;
}
.searchMod li.searchAgainBy {
  color: #7e7e7e;
  font-size: 12px;
  line-height: 33px;
  padding: 0 10px;
}
/*search page tabs - tab content*/
.searchMod .tab {
  /*color: #fff;*/
  border-radius: 8px 0 8px 8px;
  padding: 34px 52px;
  background: #534c46 url(../images/tabbg.png) repeat-x bottom left;
  height: auto;
  padding: 10px;
}
.searchMod .tab p {
  font: 22px/30px 'ITCAvantGardeStd-Bk', sans-serif;
  text-align: center;
  margin: 0 0 18px 0;
}
.searchMod .tab input[type="submit"],
.searchMod .tab input[type="button"] {
  background: #de7209;
  /*float: none;*/
  -webkit-border-radius: 5px;
  -moz-box-sizing: 5px;
  border-radius: 5px;
  height: 36px;
  text-transform: uppercase;
  width: auto;
  padding: 0 11px;
  margin: 0;
  display: inline-block;
}
.searchMod .tab input[type="submit"].disabled,
.searchMod .tab input[type="button"].disabled {
  cursor: default !important;
  opacity: 0.2 !important;
}
.searchMod .tab input[type="submit"]:hover,
.searchMod .tab input[type="button"]:hover {
  cursor: pointer;
  background: #f56120;
}
.searchMod .tab .searchSelect label {
  display: none;
}
.searchMod .tab .searchSelect.checkboxes label {
  display: block;
  padding: 0;
  color: #918f8f;
  font-size: 12px;
  font-weight: normal;
}
.searchMod .tab .searchTabSubheading {
  color: #fff;
  font-size: 12px;
  line-height: 36px;
  float: left;
  margin: 0 25px 0 13px;
}
.search-clearall {
  background: none!important;
  border: none;
  padding: 9px 11px 0px 0px;
  font-family: arial, sans-serif;
  color: #918f8f;
  cursor: pointer;
  float: right;
}
.searchMod .tab .advancedLink {
  float: right;
}
.searchMod .tab .advancedLink a {
  color: #918f8f;
  font-size: 12px;
  text-transform: uppercase;
  background: url(../images/sprite_redesign.png) no-repeat 100% -440px;
  padding: 0 20px 0 0;
  line-height: 36px;
  display: inline-block;
}
.searchMod .tab .advancedLink a:hover {
  cursor: pointer;
}
.searchMod .tab .advancedLink a.close {
  background-position: 100% 13px;
}
.searchMod .tab .searchRow.advancedHidden {
  display: none;
  background: #534b45;
  -webkit-border-radius: 5px;
  -moz-box-sizing: 5px;
  border-radius: 5px;
  padding: 14px;
  margin: 0 0 10px 0;
}
.searchMod .tab .searchRow.advancedHidden .searchTabSubheading {
  margin: 0 7px 0 0;
}
.searchMod .tab .searchRow.advancedHidden input[type="button"] {
  float: right;
}
.searchMod .tab .faq {
  float: left;
  margin: 10px 0 0 5px;
}
.searchMod .tab .standardSizes .faq > img {
  position: absolute;
  right: 64px;
}
.searchMod .tab .faq > img {
  position: relative;
  padding: 0 5px 0 0;
}
.searchMod .tab .faq .helpText p {
  font: 12px/14px Arial, Helvetica, sans-serif;
  text-align: left;
}
.searchMod .searchRow {
  /*padding-bottom: 20px;*/
}
.searchMod .tireSizes .sizes {
  float: left;
  padding-right: 10px;
  width: 196px;
  margin-top: 10px;
}
.searchMod .tireSizes .sizes .faq {
  position: relative;
  float: right;
  top: 0;
  left: 0;
  margin: 2px 0 0 0;
  white-space: normal;
}
.searchMod .tireSizes .sizes span {
  color: #918f8f;
  font-size: 13px;
}
.searchMod .tab select {
  border-radius: 5px;
  height: 36px;
  font-size: 12px;
  line-height: 36px;
  border: none;
  font-weight: bold;
  padding: 10px 5px;
}
.searchSelect {
  margin: 0 5px;
}
.resultsMod {
  border: 0;
}
/*search page - tabs unique styles*/
#searchVehicleDiv,
#searchSizeDiv,
#searchBrandDiv {
  padding: 20px 10px 0;
  clear: both;
}
/*size*/
#searchSizeDiv .searchSelect {
  width: 76px;
}
#searchSizeDiv .searchSelect.checkboxes {
  width: 105px;
}
#searchSizeDiv .R {
  display: inline-block;
  float: left;
  color: #7e7e7e;
  line-height: 36px;
}
#searchSizeDiv .advancedHidden .searchSelect {
  width: 110px;
}
/*brand*/
#searchBrandDiv .searchSelect {
  width: 161px;
}
#searchBrandDiv .advancedHidden .searchSelect {
  width: 110px;
}
#searchBrandDiv .searchSelect.width,
#searchBrandDiv .searchSelect.brand {
  margin: 0 5px 0 0;
}
#searchBrandDiv .searchSelect.brand,
#searchBrandDiv .searchSelect.model {
  width: 245px;
}
#searchSizeDiv .searchSelect.position {
  width: 128px;
  /*margin-left:115px;*/
}
#searchBrandDiv .searchSelect.model {
  margin-left: 4px;
}
#searchBrandDiv input[type="button"] {
  float: right;
}
/*vehicle*/
#searchVehicleDiv {
  padding: 20px 7px 10px 5px;
}
#searchVehicleDiv .searchSelect {
  width: 20%;
  margin: 0 0.76%;
}
#searchVehicleDiv .searchSelect.year {
  margin: 0 0.76% 0 0;
}
#searchVehicleDiv #searchVehicleButton,
#vehicleSearchButton {
  /*margin: 0;
        position: absolute;
        right: 10px;
        top: 20px;*/
}
#searchVehicleDiv .tireSizes {
  color: #fff;
}
#searchVehicleDiv .infoText {
  font-size: 8px;
  font-style: italic;
  color: #cccccc;
  margin-left: 150px;
}
/*search page - results */
.searchResults {
  background: none;
  margin: 10px 0;
  padding: 0;
}
.searchResults .resultsInfo {
  font-size: 14px;
  color: #534c46;
  font-weight: 400;
}
.searchResults .sortBy strong {
  font-size: 12px;
  color: #7e7e7e;
  font-weight: normal;
  line-height: 25px;
}
/*search page - tyrepanels*/
.tyrePanels {
  margin-left: -6px;
  width: 630px;
  /*padding: 15px 0 5px;*/
  position: relative;
  /*margin-top: 20px;*/
}
.tyrePanel {
  /*-webkit-border-radius: 10px;*/
  -moz-box-sizing: 10px;
  /*border-radius: 10px;*/
  height: 297px;
  width: 200px;
  margin: 0 5px 10px;
  box-sizing: border-box;
}
.tyrePanels .tyrePanel span {
  color: #666;
  /*font: 11px/15px Arial,Helvetica,sans-serif;*/
}
.dealOfTheDay span.trust-pilot-totalreview {
  color: #666;
  font-size: 12px;
}
.tyrePanels .tyrePanel .cusViewCount {
  position: relative;
  padding-bottom: 2px;
}
.tyrePanels .tyrePanel .price .strike {
  font: bold 29px/29px Arial, Helvetica, sans-serif;
}
/*.tyrePanels .tyrePanel .price .strike::first-letter {
        font-size: 18px;
        line-height: 24px;
        vertical-align: top;
    }*/
/*.tyrePanels .tyrePanel .price .strike:after {
        display: inline-block;
        vertical-align: bottom;
        content: "each fitted";
        font-size: 9px;
        line-height: 12px;
        color: #000;
        padding: 0 0 3px 3px;
        font-style: normal;
        font-weight: normal;
    }*/
.eachfitted:after {
  display: inline-block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each";
}
.eachfitted-passenger:after {
  /*display: inline-block;*/
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each";
}
.eachfitted-truck:after {
  display: inline-block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each (inc GST)";
}
.eachfitted-otr-currency-aud:after {
  display: inline-block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "AUD each";
}
.eachfitted-otr-currency-usd:after {
  display: inline-block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "USD each";
}
.eachfitted-otr-currency-eur:after {
  display: inline-block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "EUR each";
}
.eachfitted-below:after {
  /*display: block;*/
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each";
}
.eachfitted-below-passenger:after {
  display: block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each";
}
.eachfitted-below-truck:after {
  display: block;
  vertical-align: bottom;
  font-size: 9px;
  line-height: 12px;
  color: #000;
  padding: 0 0 3px 3px;
  font-style: normal;
  font-weight: normal;
  content: "each (inc GST)";
}
/*.tyrePanel_GBB:first-child {
    position: absolute;
    top: -335px;
    right: 0;
}*/
.tyrePanel_GBB_first-child {
  position: absolute;
  top: -335px;
  right: 0;
}
.resultsMod.noDeal .tyrePanel:first-child {
  position: relative;
  top: 0;
  right: 0;
}
.tyrePanel:nth-child(3n+1) {
  clear: none;
}
.tyrePanel .buyPanel {
  background: #ecebeb;
  clear: both;
  display: block;
  border: none;
  width: 198px;
  margin-bottom: 6px;
  height: 72px;
}
.tyrePanel .buyPanel .buyNow {
  width: 100%;
  cursor: pointer;
}
.tyrePanel .buyPanel .buyNow :hover {
  color: #de7209;
}
.tyrePanel .buyPanel .buyNow p {
  margin: 0;
  font-size: 100%;
  white-space: nowrap;
}
.tyrePanel .buyPanel .buyNow span {
  color: #de7209;
  font-size: 120%;
  white-space: nowrap;
}
/*.tyrePanel .buyPanel .endingStock p {
            margin:0;
            font-size:100%;
            white-space:nowrap;
            color:#f5791f;
            width:100%;
            display:block;
            text-align:center;
            display:table;
        }*/
.tyrePanels .tyrePanel > div.endingStock {
  box-sizing: border-box;
  height: 24px;
  line-height: 12px;
  font-size: 12px;
  border: 1px solid #ccc;
  text-align: center;
  margin: 9px 0;
  padding: 5px;
}
.tyrePanels .tyrePanel > div.endingStock p {
  margin: 0 !important;
}
.tyrePanels .tyrePanel > div.endingStock strong {
  color: #ff2626;
}
.tyrePanels .tyrePanel > div.endingStock.viewcount:before {
  background: url(/images/icon-people.png) 0 0;
  background-size: contain;
  content: '';
  width: 12px;
  height: 12px;
  display: inline-block;
  vertical-align: top;
}
.tyrePanel .submit input.button {
  background: #66a210;
  width: 95px;
  height: 30px;
  /*-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;*/
}
.tyrePanel .quantity {
  width: 80px;
}
.tyrePanel .quantity label {
  width: 20px;
  vertical-align: middle;
}
.tyrePanel .submit {
  padding-top: 5px;
  padding-right: 5px;
}
.tyrePanel .thumbnail img {
  width: auto!important;
  height: 125px!important;
}
.tyrePanel .thumbnail {
  width: 90px;
  top: 50px;
}
/*search page - deal of the day*/
.dealOfTheDay {
  background: none;
  width: 409px;
  margin: 0;
  height: 297px;
}
.dealOfTheDay .dealtTitle {
  background: #f57e21;
  margin: 0;
  height: 40px;
  font: 16px/40px Arial, Helvetica, sans-serif;
  padding: 0 10px;
  /*-webkit-border-radius: 10px 10px 0 0;
        -moz-box-sizing: 10px 10px 0 0;
        border-radius: 10px 10px 0 0;*/
  font-weight: 700;
}
.dealOfTheDay .inner {
  margin: 0;
  border: 1px solid #cccccc;
  /*-webkit-border-radius: 0 0 10px 10px;
        -moz-box-sizing: 0 0 10px 10px;*/
  /*border-radius: 0 0 10px 10px;*/
  padding: 6px 0 0 6px;
  position: relative;
  border-top: 0;
  height: 289px;
}
.dealOfTheDay .tyreImage {
  margin: 0;
  max-height: 100%;
  max-width: 162px;
  width: auto !important;
}
.dealOfTheDay .tyreImage img {
  max-height: 223px;
  max-width: 162px;
  width: auto !important;
}
.dealOfTheDay .dealOffer {
  width: 200px;
  float: right;
  position: relative;
  padding-top: 5px;
}
.dealOfTheDay .dealOffer .newPrice span.priceLabel {
  margin: 0;
  color: #55920c;
  font-size: 15px;
  line-height: 15px;
  /*margin-top: 5px;*/
  margin-bottom: 3px;
}
.dealOfTheDay .dealOffer .newPrice span.priceLabelOtr {
  margin: 0;
  font-size: 15px;
  line-height: 0px;
  padding-bottom: 9px;
  display: block;
  font-weight: bold;
  color: #55920c;
  text-transform: uppercase;
}
.dealOfTheDay .dealOffer .newPrice span.priceLabelTruck {
  margin: 0;
  font-size: 15px;
  line-height: 6px;
  margin-bottom: 3px;
  display: block;
  font-weight: bold;
  color: #55920c;
  text-transform: uppercase;
}
.dealOfTheDay .dealOffer .oldPrice {
  margin: 0;
  width: 87px;
  float: right;
  /*position: absolute;
            left: 120px;
            top: -4px;*/
}
.dealOfTheDay .dealOffer .oldPrice .strike {
  font: 28px/28px Arial, Helvetica, sans-serif;
  margin-top: 0;
}
.dealOfTheDay .dealOffer .oldPrice .strike .strikeThrough {
  position: absolute;
  top: -8px;
  left: -16px;
  display: block;
  width: 89px;
  height: 35px;
  z-index: 9;
}
.dealOfTheDay .dealOffer .oldPrice .rrp {
  line-height: 8px;
  height: 8px;
  margin: 26px 0 0 0;
  display: block;
}
.dealOfTheDay .dealOffer .quantity {
  margin: 0;
}
.dealOfTheDay .dealOffer input[type="button"] {
  background: #66a210;
  margin: 0;
  width: 96px;
  height: 40px;
  color: #fff;
  text-indent: 0;
  padding: 0 6px;
  width: 100px;
  margin-top: 11px;
  /*border-radius: 5px;*/
  font-size: 13px;
  border-radius: 0;
}
.dealOfTheDay .dealOffer .greyBg {
  background: #ecebeb;
  clear: both;
  display: block;
  padding: 3px 10px 7px 8px;
  height: 80px;
  /*-webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;*/
  box-sizing: border-box;
  /*-webkit-border-radius: 10px 10px 10px 10px;
            -moz-box-sizing: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;*/
  margin-bottom: 2px;
}
.dealOfTheDay .dealOffer .greyBg > .buyNow {
  cursor: pointer;
}
.dealOfTheDay .dealOffer .greyBg > .buyNow:hover {
  color: #DE7209;
}
/*.dealOfTheDay .dealOffer .greyBg .ttwidget {
                margin-bottom:2px;
            }*/
.dealOfTheDay .dealOffer .quantity {
  width: 80px;
  padding: 17px 0px;
}
.dealOfTheDay .dealOffer .quantity label {
  /*float: none;*/
}
.dealOfTheDay .dealOffer .quantity select {
  /*width: 58px;*/
}
.dealOfTheDay .dealOffer .newPrice span.priceAmount {
  font-size: 55px;
  letter-spacing: -3px;
}
.dealOfTheDay .dealInfo {
  position: relative;
  width: 200px;
  margin: 0;
  float: right;
  padding: 0 0 0 0;
}
.dealOfTheDay .dealInfo .discount {
  position: absolute;
  font-size: 10px;
  top: 105px;
  left: -90px;
  border-radius: 34px;
  background-color: #66a210;
  width: 67px;
  height: 67px;
  padding: 10px 0;
  box-sizing: border-box;
}
.dealOfTheDay .dealInfo .discount strong {
  font-size: 30px;
  letter-spacing: -3px;
}
.dealOfTheDay .dealInfo .redBubbleSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #ef1a1a;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .redBubbleSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #ef1a1a;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .blueBubbleSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #3366FF;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .blueBubbleSize10Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 10px;
  background-color: #3366FF;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .blueBubbleAdSize10 {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 10px;
  background-color: #3366FF;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .blueBubbleAdSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #3366FF;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .blueBubbleSize14Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 14px;
  background-color: #3366FF;
  font-weight: 700;
  line-height: 16px;
}
.dealOfTheDay .dealInfo .greenBubbleAdSize10 {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 10px;
  background-color: #2eb559;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .redBubbleAdSize10 {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 10px;
  background-color: #f00;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .redBubbleAdSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #f00;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .greenBubbleSize12Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 12px;
  background-color: #2eb559;
  font-weight: 700;
}
.dealOfTheDay .dealInfo .greenBubbleSize14Bold {
  position: absolute;
  top: 35px;
  left: -90px;
  width: 67px;
  border-radius: 34px;
  height: 67px;
  padding: 10px 0;
  color: #fff;
  text-align: center;
  box-sizing: border-box;
  display: block;
  font-size: 14px;
  background-color: #2eb559;
  font-weight: 700;
  line-height: 16px;
}
.dealOfTheDay .dealOffer .stock {
  position: absolute;
  font-size: 11px;
  line-height: 10px;
  top: 107px;
  left: -58px;
  background: url(../images/sprite_redesign.png) no-repeat -1px -371px;
  width: 64px;
  height: 64px;
  padding: 14px 0;
  box-sizing: border-box;
}
.dealOfTheDay .dealOffer .stock strong {
  font-size: 13px;
}
.dealOfTheDay .buyOnlineSave {
  background: url(../images/sprite_redesign.png) no-repeat 0 -320px;
  width: 154px;
  height: 46px;
  position: absolute;
  left: -15px;
  top: 0;
}
.dealOfTheDay .dealInfo .tyreType {
  color: #f57e21;
  font-size: 14px;
  line-height: 14px;
}
.dealOfTheDay .dealInfo .tyreSize {
  color: #7e7e7e;
  font-size: 11px;
}
/*search page - pagination and footnote*/
.footnote {
  font: 11px/30px Arial, sans-serif;
  width: 100%;
  text-align: center;
}
.footnoteVehicleDisclaimer {
  font: 13px/17px Arial, sans-serif;
  width: 100%;
  text-align: center;
  color: #666;
}
.paginationButtons {
  margin: 0;
  clear: both;
  text-align: center;
  height: auto;
}
.pagination {
  font: 14px/18px Arial, Helvetica, sans-serif;
  float: none;
  display: inline-block;
  margin: 0 auto;
}
.pagination a,
.pagination span.prev,
.pagination span.next {
  color: #7e7e7e;
}
.pagination a,
.pagination span {
  height: 25px;
  margin: 0 2px;
  padding: 3px 10px;
  box-sizing: border-box;
  -webkit-border-radius: 5px;
  -moz-box-sizing: 5px;
  border-radius: 5px;
}
.pagination a:hover {
  background: #ecebeb;
  text-decoration: none;
}
.pagination span.current {
  background: #f57e21;
  color: #fff;
}
.pagination span.prev.current,
.pagination span.next:hover,
.pagination span.prev:hover {
  background: none;
  color: #7e7e7e;
}
/*checkout pages - checkoutCart (product image and info)*/
.checkoutCart .tyrePanel {
  position: relative;
  top: 0;
  left: 0;
}
.checkoutCart {
  background: #534c46 url(../images/tabbg.png) repeat-x bottom left;
  border-radius: 10px;
  padding: 20px 15px 15px;
  width: 250px;
  box-sizing: border-box;
  min-height: 376px;
}
.checkoutCart li {
  padding: 0 0 10px 0;
  margin: 0 0 10px 0;
}
.checkoutCart .size {
  font-size: 14px;
  height: 30px;
}
.checkoutCart .qty {
  font-weight: bold;
  height: 50px;
  box-sizing: border-box;
  padding: 12px 0;
}
.checkoutCart li,
.checkoutCart .qty,
.checkoutCart .size {
  border-bottom: 1px solid #726b66;
}
.checkoutCart .costs {
  border: none;
  margin: 0;
}
.checkoutCart div.total {
  border-radius: 5px;
  background: #f57e21 url(../images/sprite_redesign.png) no-repeat -20px -477px;
}
.checkoutCart .total span {
  font: bold 26px/60px Arial, Helvetica, sans-serif;
}
.checkoutCart .total .price .strike {
  font: bold 36px/60px Arial, Helvetica, sans-serif;
}
.checkoutCart .newPrice .priceDetails span.price,
.checkoutCart .newPrice .priceDetails span.save {
  color: #f5791f;
}
.checkoutCart span.price::first-letter {
  font-size: 20px;
  line-height: 20px;
  vertical-align: top;
}
.checkoutCart .total span.price::first-letter {
  line-height: 52px;
}
.checkoutCart .newPrice .priceDetails span.price {
  line-height: 24px;
}
.checkoutCart li.costs .total,
.premiumDetail-content .costs .total {
  color: #f5791f;
  font-size: 16px;
  line-height: 14px;
}
.checkoutCart li.costs .item,
.premiumDetail-content .costs .item {
  clear: left;
  line-height: 20px;
  font-weight: normal;
}
.checkoutCart .tyrePanel .QuantityOutOfStock {
  display: none;
  font-size: 14px;
  font-weight: normal;
  float: right;
}
/*checkout pages - purchase buttons*/
.paymentPage .purchase-buttons {
  display: none;
}
/*.purchase-buttons{margin-top: 32px;}*/
.purchase-buttons .btn-purchase {
  width: 100%;
  display: inline-block;
  margin-right: 4px;
  margin-top: 10px;
  border-radius: 5px;
  font: bold 14px/24px Arial, Helvetica, sans-serif;
  text-align: center;
  color: #fff;
  background: #97c522;
  padding: 5px 0;
}
.purchase-buttons .btn-priceIncludedLink {
  /*width: 48%;*/
  display: inline-block;
  margin-right: 4px;
  /*margin-left: 180px;*/
  border-radius: 5px;
  font: 12px Arial, Helvetica, sans-serif;
  text-align: center;
  color: dodgerblue;
  padding-top: 10px;
}
/*.purchase-buttons .btn-purchase:first-child{margin: 0}*/
.purchase-buttons .btn-purchase:hover {
  text-decoration: none;
  background-color: #66a210;
}
.purchase-buttons .btn-priceIncludedLink:hover {
  text-decoration: none;
  color: #4169e1;
  cursor: pointer;
}
.btn-priceMatch {
  background-color: #ecebeb;
  font-size: 14px;
  font-weight: 700;
  color: #7e7e7e;
  padding: 12px 10px 12px 130px;
  border-radius: 10px;
  position: relative;
  display: block;
  margin: 30px 0 10px;
}
.btn-priceMatch:hover {
  text-decoration: none;
  color: #fff;
  background-color: #a2a2a2;
}
.btn-priceMatch img {
  position: absolute;
  top: -7px;
  left: 58px;
}
/*checkout pages - customers viewing*/
.content article {
  position: relative;
}
.content article .customerViewCount .cusViewCount:before {
  background: url(../images/icon-people.png) 0 0;
  content: '';
  width: 26px;
  height: 23px;
  display: inline-block;
  vertical-align: middle;
  float: left;
  margin-right: 5px;
}
.content article .customerViewCount {
  /*position: absolute;
        top: 278px;
        left: 191px;*/
  background-color: #ecfcdb;
  border-radius: 5px;
  border: solid 1px #cdd8c1;
  padding: 10px 10px 10px 10px;
  font-weight: normal;
  display: inline-block;
  margin-top: 25px;
}
.content article .customerViewCount span {
  font-size: 11px;
  color: #67635a;
  display: inline-block;
  vertical-align: middle;
  font-weight: normal;
}
.checkout-deal .checkoutProductImages {
  box-sizing: border-box;
  border: 1px solid #cccccc;
  border-radius: 10px;
  padding: 5px 5px 8px;
  margin: 0 0 10px 0;
  position: relative;
}
.checkout-deal .checkoutProductImages .clearfix,
.checkout-deal .checkoutProductImages .here-is-how-it-works,
.checkout-deal .checkoutProductImages .here-is-how-it-works .explanation,
.checkout-deal .checkoutProductImages .here-is-how-it-works .reasons,
.checkout-deal .checkoutProductImages .free-benefits,
.checkout-deal .checkoutProductImages .free-benefits .benefits,
.checkout-deal .checkoutProductImages .tyrePanels,
.checkout-deal .checkoutProductImages .tyrePanelRow .tyrePanel_GBB .tyrePanel .buyPanel {
  min-height: 161px;
}
/*.checkout-deal .floatLeft img {width:162px!important;}*/
.checkout-deal .floatLeft img {
  max-height: 100%;
  max-width: 162px;
  width: auto !important;
  max-height: 250px;
}
.checkout-deal .floatRight img + span {
  color: #f5791f;
  font: bold 14px Arial, Helvetica, sans-serif;
  margin: 5px 0;
}
.checkout-deal .floatRight p {
  font-size: 11px;
  color: #7e7e7e;
}
/*checkout pages - purchase-guarantee*/
.purchase-guarantee {
  background: #ecebeb;
  border: none;
  border-radius: 10px;
  min-height: inherit;
  height: 50px;
  padding: 12px 10px 12px 150px;
  box-sizing: border-box;
  position: relative;
  margin-bottom: 15px;
}
.purchase-guarantee img {
  position: absolute;
  top: -10px;
  left: 39px;
}
/*checkout pages - tabs*/
.checkout-tabs > div {
  border: 1px solid #cccccc;
  border-radius: 0 10px 10px 10px;
  padding: 19px 14px 14px;
}
.checkout-tabs ol.steps {
  border: none;
  text-transform: uppercase;
}
.checkout-tabs ul.tabNavigation {
  height: 35px;
}
.checkout-tabs ul.tabNavigation2 {
  margin-top: 10px;
}
.checkout-tabs ul.tabNavigation a.selected {
  background: #292522;
  border: none;
  font-weight: bold;
  background: #5c5c5c;
  background: -webkit-gradient(left top, left bottom, color-stop(0%, #5c5c5c), color-stop(100%, #292522));
  background: linear-gradient(to bottom, #5c5c5c 0%, #292522 100%);
}
.checkout-tabs ul.tabNavigation li a {
  padding: 0 20px;
  height: 35px;
  background: #a2a2a2;
  font: 13px/35px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  color: #fff;
  border: none;
  border-radius: 10px 10px 0 0;
}
.checkout-form h2.heading {
  color: #333333;
  font: bold 14px Arial, Helvetica, sans-serif;
  border: none;
}
.checkout-form h2.heading strong {
  color: #f57e21;
}
.checkout-form-topheader h2.heading {
  border-bottom: 0 none;
  color: #333;
  width: 100%;
  font: bold 14px/20px Arial, Helvetica, sans-serif !important;
  padding-top: 10px;
}
.checkout-form-topheader h2.heading strong {
  background: none;
  font: bold 14px/20px Arial, Helvetica, sans-serif;
  padding: 0;
}
successTop .checkout-form select {
  padding: 10px 0;
}
.checkout-form input[type="text"],
.checkout-form .newListSelected,
.checkoutCart .tyrePanel .newListSelected,
.checkout-form select,
.section.locationStep select,
#creditCard .formField select {
  background: #fff;
  border: 1px solid #cccccc;
  border-radius: 5px;
  height: 43px;
  font: 14px/43px 'Noto Serif', serif;
  color: #726b66;
}
.checkout-form .button {
  background: #f57e21;
  height: 42px;
  font: 18px/42px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  border-radius: 5px;
  width: 83px;
  margin-top: 8px;
}
.checkout-form .button:hover {
  background: #f56120;
}
.checkout-form #paypal .button {
  width: 138px;
  height: 42px;
}
.checkout-form .aspNetDisabled .button,
.checkout-form .aspNetDisabled .button:hover {
  background: #666;
}
.checkout-tabs .getHelpForm {
  height: auto;
}
.checkout-tabs .getHelpForm .error {
  float: left;
}
.section .row .callMeSuccess {
  width: 100%;
}
/*checkout pages - tabs - error success*/
.checkout-form .success {
  border: 1px solid #cdd8c1;
  border-radius: 5px;
  padding: 13px 8px 13px 2px;
  box-sizing: border-box;
}
.checkout-form .success .reservationtext {
  font-weight: bold;
  font-size: larger;
  margin-right: 2px;
  margin-left: 70px;
}
.checkout-form .success .countdown {
  font-weight: bold;
  font-size: larger;
}
.checkout-form .section .error,
.checkout-form .row .error {
  background: #fae1e1;
  border: 1px solid #dfa5a5;
  color: #534c46;
  font: 13px Arial, Helvetica, sans-serif;
  border-radius: 5px;
  padding: 5px 10px;
  margin: 5px 0 0;
  font-weight: bold;
}
.section .row {
  width: 390px;
}
.checkout-form .successTop {
  border: 1px solid #cdd8c1;
  background-color: #ecfcdb;
  border-radius: 5px;
  padding: 13px 8px 13px 3px;
  width: 190px;
  box-sizing: border-box;
  font: 11px Arial, Helvetica, sans-serif;
}
.checkout-form .successTop .sucessImage {
  background: url(../images/sprites_checkout.png) no-repeat -467px 8px #ecfcdb;
  width: 40px;
  height: 60px;
  float: left;
}
/*checkout pages - tabs - step 1 - instruction box */
.checkoutInstruction {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 0;
  width: 190px;
  box-sizing: border-box;
  height: 96px;
  position: absolute;
  top: -160px;
  right: 0;
  font-size: 18px;
  font-weight: normal;
  background: #fff;
  margin-bottom: 10px;
}
.checkoutInstruction h3 {
  background: #c3c2c2;
  padding: 4px 13px;
  color: #fff;
  font: 14px/16px 'ITCAvantGardeStd-Demi', sans-serif;
  text-transform: uppercase;
  margin: 0;
}
.checkoutInstruction strong {
  font: 16px/16px 'ITCAvantGardeStd-Demi', sans-serif;
  text-transform: uppercase;
  color: #F5791F;
  display: block;
  font-weight: 700;
}
.checkoutInstruction div {
  padding: 19px 13px;
  line-height: 20px;
}
/*checkout pages - tabs - step 1 - instruction box */
.checkoutInstructionTop {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 0;
  width: 190px;
  box-sizing: border-box;
  height: 96px;
  position: absolute;
  top: 69px;
  right: 0;
  font-size: 18px;
  font-weight: normal;
  background: #fff;
  margin-bottom: 10px;
}
.checkoutInstructionTop h3 {
  background: #c3c2c2;
  padding: 4px 13px;
  color: #fff;
  font: 14px/16px 'ITCAvantGardeStd-Demi', sans-serif;
  text-transform: uppercase;
  margin: 0;
}
.checkoutInstructionTop strong {
  font: 16px/16px 'ITCAvantGardeStd-Demi', sans-serif;
  text-transform: uppercase;
  color: #F5791F;
  display: block;
  font-weight: 700;
}
.checkoutInstructionTop div {
  padding: 19px 13px;
  line-height: 20px;
}
/*checkout pages - tabs - step 1 - list of service centre locations*/
.checkout-form .serviceCenter {
  width: 100%;
}
.checkout-form .serviceCenter table {
  margin: 0px 0;
}
/*.checkout-form .serviceCenter td:hover {background:#ecebeb; -webkit-border-radius: 5px; -moz-border-radius: 5px;  border-radius: 5px; }*/
.checkout-form .serviceCenter label {
  width: 95%;
}
.checkout-form .buttonRight .button {
  width: 192px;
}
/*checkout - free deliery */
.checkout-form .row.freeDeliveryMessage,
.checkout-form .row.autoMasterMessage {
  background-color: #ecfcdb;
  border: solid 1px #cdd8c1;
  border-radius: 7px;
  padding: 10px;
  position: relative;
  box-sizing: border-box;
  width: 100%;
}
.freeDeliveryMessage .deliveryIcon {
  position: absolute;
  top: 10px;
  left: 10px;
  display: block;
  width: 58px;
  height: 58px;
  background: url(../images/sprite_redesign.png) no-repeat -130px -550px;
}
.autoMasterMessage .serviceIcon {
  position: absolute;
  top: 10px;
  left: 10px;
  display: block;
  width: 58px;
  height: 58px;
  background: url(../images/AutoMasters_Logo_transparent_58x58.png) no-repeat;
}
.checkout-form .row.freeDeliveryMessage p,
.checkout-form .row.autoMasterMessage p {
  font-size: 16px;
  margin-left: 75px;
}
.freeDeliveryMessage span,
.autoMasterMessage span {
  color: #f57e21;
}
.checkout-form .row.freeDeliveryMessage p.smallText,
.checkout-form .row.autoMasterMessage p.smallText {
  font-size: 12px;
}
/*checkout pages - tabs - step 2 */
.summaryMessage {
  color: #7e7e7e;
}
.checkout-form .formField {
  color: #7e7e7e;
  width: 390px;
}
.checkout-form .formField:first-child,
.checkout-form .deliveryOptionForm .formField {
  margin: 0;
}
.checkout-form .formField.stateField {
  float: left;
  margin-right: 10px;
  width: 102px;
}
.checkout-form .formField.postcodeField {
  float: left;
  width: 140px;
}
.checkout-form .formField.postcodeField input[type="text"] {
  width: 130px;
}
#creditCard .formField select.small {
  width: 104px;
}
#creditCard .formField select.small:first-child,
#creditCard .formField .small:first-child {
  width: 177px;
  margin: 0 4px 0 0;
}
.checkout-form #creditCard input[type="text"] {
  width: 100%;
}
#creditCard .formField .creditCardState {
  width: 103px !important;
}
#terms {
  margin: 35px 0 25px;
}
.checkout-form .button.payNow {
  margin: -57px 0 0 0;
  width: auto;
  position: relative;
  z-index: 1;
}
.checkout-form .button.payNow input {
  text-transform: uppercase;
  padding: 0 20px;
  line-height: 42px;
  height: 42px;
}
#creditCard .formField select {
  width: 289px;
}
/*payment method secutity*/
.formField.dateField {
  float: left;
  width: 300px;
}
.formField.dateField + .formField {
  width: auto;
}
.formField.dateField + .formField input {
  width: 89px!important;
}
/*billing details postcode*/
.formField.cityState {
  float: left;
  width: 300px;
  padding: 0px 4px 0px 0px;
}
.formField.cityState + .formField {
  width: auto;
}
.formField.cityState + .formField input {
  width: 89px!important;
}
/*checkout pages - tabs - step 2 - redeem coupon*/
.checkout-form a.redeemCoupon {
  font: bold 13px/30px Arial, Helvetica, sans-serif;
  /*text-transform: uppercase;*/
  border-radius: 7px 7px 0 0;
  color: #fff;
  text-decoration: none;
  display: inline-block;
  padding: 0 50px 0 17px;
  margin: 0;
  background: #c3c2c2 url(../images/sprite_redesign.png) no-repeat -21px -665px;
}
.checkout-form .redemptionCode {
  background: #c3c2c2;
  padding: 22px 17px 17px;
  border-radius: 0 7px 7px 7px;
  margin: 0 0 10px;
}
.checkout-form a.redeemCoupon.close {
  background-position: -21px -638px;
}
.checkout-form .redemptionCode label {
  display: none;
}
.checkout-form .redemptionCode input[type="text"] {
  width: 289px;
  float: left;
  border: 0;
  padding: 5px 10px;
  margin: 0 6px 0 0;
}
.content .checkout-form .redemptionCode a {
  background: #f57e21;
  height: 44px;
  font: 18px/44px Arial, Helvetica, sans-serif;
  text-transform: uppercase;
  padding: 0 15px;
}
.content .checkout-form .redemptionCode a:hover {
  background: #f56120;
}
.checkout-form .redemptionCode .instruction {
  color: #fff;
  font: 11px/14px 'Noto Serif', serif;
  font-style: italic;
  padding: 10px 0 0;
  width: auto;
}
/*checkout pages - tabs - step 2 - why choose dealers*/
.whyChooseDealersLink {
  border-bottom: 1px solid #cccccc;
  padding: 15px 15px 15px 15px;
  margin: 0 -15px 0;
}
.whyChooseDealersLink a {
  margin: 0;
  color: #7e7e7e;
  height: 60px;
  padding: 15px 0 0 83px;
  box-sizing: border-box;
  position: relative;
}
.whyChooseDealersLink a:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  background: url(../images/sprite_redesign.png) no-repeat -1px -550px;
  display: block;
  width: 58px;
  height: 58px;
}
/*checkout pages - tabs - step 2 - purchase summary*/
.purchaseSummary {
  background: #ecebeb;
  padding: 15px 20px 7px;
  color: #7e7e7e;
  font: 12px Arial, Helvetica, sans-serif;
  border-radius: 7px;
  margin: 0 0 15px;
}
.purchaseSummary strong {
  color: #f57e21;
  font: bold 17px/20px Arial, Helvetica, sans-serif;
}
.purchaseSummary .summaryMessage {
  padding: 20px 0 0 0;
}
.purchaseSummary .summaryMessage strong a {
  font: 700 12px/14px Arial, Helvetica, sans-serif;
  color: #7e7e7e;
  text-transform: uppercase;
  background: url(../images/sprite_redesign.png) no-repeat 0 -622px;
  padding: 0 0 0 20px;
}
.checkoutErrorMessage,
.checkoutErrorPaymentMessage {
  display: block;
  font-weight: bold;
  color: #000;
  font-size: 14px;
  width: 65%;
  text-align: center;
  margin: 0 auto 15px;
  background: #fae1e1;
  border: 1px solid #dfa5a5;
  padding: 10px;
  border-radius: 5px;
}
.checkoutErrorPaymentMessage {
  position: absolute;
  top: 0;
  right: 0;
  width: 135px;
  font-size: 13px;
  text-align: left;
}
#creditCard {
  position: relative;
}
/*checkout pages - right rail */
.checkout-right img {
  margin: 0 auto;
}
.sideCategory li {
  width: 132px;
  margin: 0 15px 3px 0;
  float: left;
  font-size: 10px;
}
.sideCategory li:nth-child(2n+1) {
  margin-right: 0;
}
.sideCategory li:empty {
  display: none;
}
.content aside .sideCategory ul {
  list-style: square;
  color: #c2c2c2;
}
.content aside .sfimageWrp {
  padding: 0;
}
.checkout-deal .floatRight .review p.reviewTitle {
  font-size: 14px;
  color: #534c46;
  margin-bottom: 10px;
}
.checkout-deal .floatRight .review .stars {
  background: url(../images/starRatings.png) no-repeat 0 0;
  display: inline-block;
  height: 9px;
}
.checkout-deal .floatRight .review .reviewBy {
  color: #7e7e7e;
  display: inline-block;
}
.review {
  position: absolute;
  bottom: 0;
}
.review .stars.stars1 {
  width: 9px;
}
.review .stars.stars2 {
  width: 20px;
}
.review .stars.stars3 {
  width: 31px;
}
.review .stars.stars4 {
  width: 42px;
}
.review .stars.stars5 {
  width: 53px;
}
.review a {
  display: block;
  margin-top: 10px;
}
/*free shipping banner*/
.freeShipping {
  display: block;
  margin-top: 10px;
}
/*Non-Mobile*/
@media only screen and (min-width: 641px) {
  section .searchOptions.searchMod .tabPanel#size {
    height: 170px;
  }
  .searchOptions.searchMod ul.tabNavigation {
    margin-top: 0;
  }
  .searchOptions.searchMod .sizeTyre,
  section .searchOptions.searchMod .searchForm label {
    display: none;
  }
  .searchOptions.searchMod .tab#size .searchField {
    width: 137px;
    margin-right: 10px;
  }
  .searchOptions.searchMod .tab#vehicle .searchField {
    width: 295px;
  }
  .searchOptions.searchMod .tab#vehicle .searchField.vehicleModel {
    margin-left: 0;
  }
  .searchOptions.searchMod .tab select {
    margin-top: 2px;
  }
  .searchOptions.searchMod .tab p {
    font-size: 19px;
  }
  .searchOptions.searchMod a:hover {
    color: #f57e21;
    text-decoration: none;
  }
  .searchOptions.searchMod a.searchButton:hover {
    color: #fff;
  }
  .searchOptions.searchMod .advancedSearchLink {
    position: absolute;
    bottom: 13px;
    right: 72px;
  }
  .searchOptions.searchMod .tab#vehicle .advancedSearchLink,
  .searchOptions.searchMod .tab#brand .advancedSearchLink {
    bottom: 32px;
    right: 186px;
  }
  .searchOptions.searchMod #vehicleSearchButton {
    position: relative;
    right: auto;
    top: auto;
  }
  section .searchOptions.searchMod .tabPanel#brand .searchSelect {
    margin: 0;
    width: 296px;
  }
  section .searchOptions.searchMod .tabPanel#brand .searchSelect.brandModel,
  section .searchOptions.searchMod .tabPanel#brand .searchSelect.brandProfile {
    margin-left: 10px;
  }
  .regLabelMobileOnly {
    display: none;
  }
  .homeSearchContainer .searchOptions .tabPanel#rego .regoSearch {
    width: 50px;
    margin-left: 10px;
  }
  .homeSearchContainer .searchOptions .tabPanel#rego .findRegoVehicle,
  .homeSearchContainer .searchOptions .tabPanel#rego .searchingRegoVehicle {
    padding: 9px 9px;
    height: 32px;
    width: 32px;
  }
  .passengerSearchOptions .subTabs .subPanel#truckSize .searchForm {
    height: 100px;
    width: 670px;
  }
  .passengerSearchOptions .subTabs .subPanel#truckSize .searchButton {
    margin: 0;
  }
  .homeSearchContainer .searchOptions .tabPanel #truckSize .frontPageTyreCounter {
    width: 320px;
    float: right;
  }
  .passengerSearchOptions .subTabs .subPanel#truckSize .searchField.sizePosition {
    float: right;
  }
  .searchMod .searchRow.searchRowTruckSize {
    padding-bottom: 0;
  }
  .passengerSearchOptions .subTabs .subPanel#truckSize .searchFormLeft {
    width: 480px;
    display: inline-block;
    float: left;
  }
  .passengerSearchOptions .subTabs .subPanel#truckSize .searchFormRight {
    display: inline-block;
    float: left;
    width: 180px;
  }
  .otr-searchpage-promotion {
    width: 641px;
  }
  .otr-mainpage-promotion-promotext {
    width: 500px;
    padding: 20px 0px 0px 65px;
  }
  .otr-mainpage-promotion {
    padding: 5px 0px 30px 120px;
  }
  .otr-mainpage-promotion-headertext {
    font-size: 24px;
    text-align: justify;
  }
  /*checkout pages - checkout-deal (purchase info box)*/
  .checkout-deal {
    width: 362px;
  }
  .checkout-deal .floatRight {
    width: 180px;
    padding: 20px 0;
  }
}
.whatsIncludedPanel .close-panel {
  position: absolute;
  top: 10px;
  right: 10px;
  display: block;
  text-align: center;
  width: 17px;
  height: 17px;
  line-height: 17px;
  font-size: 16px;
  color: #fff;
  text-decoration: none;
  background: #999;
  border-radius: 17px;
}
/*homepage promotion
* 1. changing this value will update the background advert
*/
#Tile13 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: block;
  overflow: hidden;
  z-index: 2;
}
#Tile13 a {
  position: relative;
  display: block;
  height: 555px;
  background: url(https://mm.carsales.com.au/carsales/test/michelin_2b.jpg) no-repeat 50% 0 #000;
  /* 1 */
  background-size: auto 555px;
}
#Tile13 img {
  display: none;
}
.m-promo {
  display: none;
}
/*mobile media query*/
@media only screen and (max-width: 640px) {
  /*global - content styles*/
  .content section h1,
  .content section h2 {
    font-size: 24px!important;
    position: relative;
  }
  /*global - structure*/
  body {
    min-width: 320px;
  }
  /*global - header*/
  .content.homeContainer {
    width: 100%;
    background: none;
    margin-top: -10px;
  }
  .content.homeContainer header {
    margin: 0 auto;
    padding: 2px 0 0 2px;
  }
  .m-promo {
    display: block;
    width: 100%;
  }
  .m-header {
    border-bottom: none;
  }
  /*.m-header:after {background:#fff url(../images/m-gradientbg.png) repeat-x top left;content: "";height: 50px;display: block;width: 100%;position: absolute;top: 64px;left: 0;}*/
  .m-logo a {
    background-position: -2px 2px;
    width: 165px;
  }
  .tabicon-rego {
    background: url(/images/tabicon_register_black.png) no-repeat !important;
  }
  .tabicon-vehicle {
    background: url(/images/tabicon_vehicle_black.png) no-repeat !important;
  }
  .tabicon-size {
    background: url(/images/tabicon_size_black.png) no-repeat !important;
  }
  .tabicon-brand {
    background: url(/images/tabicon_brand_black.png) no-repeat !important;
  }
  .passengerSearchOptions .subTabs ul.tabSubNavigation a {
    margin-left: 2px !important;
  }
  .passengerSearchOptions .subTabs ul.tabSubNavigation li:first-child a {
    width: 100px;
  }
  .tabicon-display {
    margin-left: 45px !important;
  }
  #navigationToggle {
    background: #534c46 url(../images/sprite_redesign.png) no-repeat 0 -200px;
    width: 35px;
    height: 32px;
    text-indent: 0;
    text-transform: uppercase;
    color: #fff;
    font-size: 12px;
    line-height: 32px;
    text-align: right;
    padding: 0 13px 0 0;
    box-sizing: border-box;
    border-radius: 5px;
    top: 16px;
    right: 10px;
  }
  #navigationToggle:active,
  #navigationToggle:hover {
    background-color: #f57e21;
    text-decoration: none;
  }
  #m-navigationContainer {
    position: relative;
    z-index: 1;
  }
  .content.homeContainer {
    min-width: 0;
  }
  /*home searchContainer - overrides*/
  .homeSearchContainer {
    background-image: none !important;
    min-width: 0;
    height: auto;
    padding-bottom: 18px;
  }
  .content .searchOptions {
    background-image: none;
    padding: 0 10px;
    margin: 18px auto 0;
  }
  .content .searchOptions h2 {
    font: bold 28px/28px 'ITCAvantGardeStd-Demi', sans-serif;
    max-width: 350px;
    margin: 0 auto;
  }
  .content .searchOptions,
  .homeContent {
    width: 100%;
  }
  .content .searchOptions .tabs {
    width: 100%;
  }
  .content .searchOptions .tabs p.searchby {
    display: none;
  }
  .content .searchOptions .tabs ul.tabNavigation {
    margin: 0;
    background: none;
    height: 34px;
  }
  .homeSearchContainer .searchOptions {
    padding-top: 20px;
    margin-top: 0;
  }
  .homeSearchContainer:before {
    display: none;
  }
  .homeSearchContainer .searchOptions .tabs ul.tabNavigation li,
  .homeSearchContainer .tabs ul.tabNavigation li {
    width: auto;
  }
  .content .searchOptions .tabPanel {
    background: #fff;
    border-radius: 0 10px 10px 10px;
  }
  .homeSearchContainer .searchOptions .tabs ul.tabNavigation a {
    background: #c3c2c2;
    opacity: 1;
    color: #fff;
    font-size: 14px;
    border-radius: 10px 10px 0 0;
    height: 34px;
    line-height: 34px;
    padding: 0 14px;
  }
  .homeSearchContainer .searchOptions .tabs ul.tabNavigation a.selected {
    background: #fff;
    color: #fa7e1b;
    font-size: 14px;
  }
  .searchOptions .tabPanel .advancedSearchLink a,
  .passengerSearchOptions .advancedSearchLink {
    position: static !important;
    text-align: left !important;
    width: 100% !important;
    margin: 5px 0 15px !important;
    float: none !important;
  }
  .content .searchOptions .tabPanel {
    background: #ecebeb url(../images/m-tab-bg.png) repeat-x 0 0;
  }
  .content .searchOptions .tabPanel#size {
    background: #ecebeb url(../images/m-tab-bg.png) repeat-x 0 0;
    padding-bottom: 27px;
  }
  .homeSearchContainer:after {
    display: none;
  }
  .content .searchOptions select,
  .content .searchOptions .tabPanel#size select {
    width: 100%;
    border: 1px solid #aea9a9;
    font-weight: bold;
    margin: 0;
  }
  .content .searchOptions .tabPanel {
    padding: 19px 10px 27px !important;
    text-align: center;
  }
  .content .searchOptions .tabPanel p {
    font-size: 14px;
    color: #231f20;
    line-height: 18px;
    display: inline-block;
  }
  .content .searchOptions .searchButton {
    width: 100%;
    background-position: 100% -107px;
    line-height: 14px;
    text-align: left;
    text-transform: none;
    clear: both;
  }
  .content .searchOptions .searchButton span {
    margin: 0;
    width: 100%;
    text-transform: uppercase;
  }
  .searchOptions #size .searchButton {
    margin: 0;
  }
  section .searchOptions.searchMod .tabPanel#size {
    height: auto;
  }
  section .searchOptions.searchMod .searchField {
    margin: 0 !important;
    width: 100% !important;
  }
  section .searchOptions.searchMod label {
    display: none;
  }
  .searchOptions.searchMod ul.tabNavigation li {
    margin-left: 3px !important;
    width: auto !important;
  }
  .searchOptions.searchMod ul.tabNavigation li:first-child {
    margin: 0 !important;
  }
  .searchOptions.searchMod ul.tabNavigation a {
    background: #534c46;
    font: 14px/34px 'ITCAvantGardeStd-Bk', sans-serif;
    border-radius: 10px 10px 0 0;
    color: #fff;
    height: 34px;
    width: auto !important;
    padding: 0 22px;
  }
  .searchOptions.searchMod ul.tabNavigation a.selected {
    background: #534c46;
    color: #fff;
  }
  .searchOptions.searchMod .tab {
    background: #534c46 url(../images/tabbg.png) repeat-x bottom left !important;
  }
  .searchOptions.searchMod #passengerSize.tabPanel .mtyresize {
    display: none;
  }
  .searchOptions.searchMod #passengerSize.subPanel .mtyresize {
    display: none;
  }
  .content .searchOptions.searchMod .tabPanel p {
    color: #fff;
  }
  /*size tab*/
  #size.tabPanel:after {
    display: none;
  }
  #passengerSize.tabPanel .mtyresize {
    display: inline-block;
    width: 280px;
    height: 132px;
    background: url(../images/m-tyre-size.png) no-repeat 50% 0;
    margin: 0 0 18px -10px;
  }
  #passengerSize.subPanel .mtyresize {
    display: inline-block;
    width: 280px;
    height: 132px;
    background: url(../images/m-tyre-size.png) no-repeat 50% 0;
    margin: 0 0 18px -10px;
  }
  .content #passengerSize.tabPanel .sizeTyre {
    display: none;
  }
  .content .searchOptions .tabPanel#size .advancedSearchLink {
    display: none;
    position: relative;
    bottom: 0;
    left: 0;
    margin: 5px 0 15px;
  }
  .content .searchOptions .subPanel#size .advancedSearchLink {
    display: none;
    position: relative;
    bottom: 0;
    left: 0;
    margin: 5px 0 15px;
  }
  /*vehicle tab*/
  .content .searchOptions .tabPanel#vehicle .searchField {
    width: 100% !important;
  }
  #searchVehicleDiv #searchVehicleButton,
  #vehicleSearchButton {
    /*position: relative;
        top: 0;
        left: 0;*/
    width: 100%;
  }
  /*brand tab*/
  .content .searchOptions #brand.tabPanel .searchSelect.brand,
  .content .searchOptions #brand.tabPanel .searchSelect.brandModel,
  .content .searchOptions #brand.tabPanel .searchSelect.brandWidth,
  .content .searchOptions #brand.tabPanel .searchSelect.brandProfile,
  .content .searchOptions #brand.tabPanel .searchSelect.brandRim {
    width: 100%;
  }
  /*vehicle tab*/
  .content .searchOptions .tabPanel#rego .searchField {
    width: 100% !important;
  }
  /*home - how it works*/
  .howItWorks {
    height: auto;
    padding: 15px 15px 60px;
    background: #ecebeb;
  }
  .howItWorks:before {
    display: none;
  }
  .howItWorks:after {
    display: none;
  }
  .howItWorks .innerContainer {
    width: 100%;
    background: #fff;
    border-radius: 8px;
  }
  .howItWorks .sfContentBlock {
    float: none;
    display: block;
    position: relative;
    top: 0;
    left: 0;
  }
  .howItWorks h2 {
    background: #f57e21;
    width: 100%;
    height: auto;
    position: relative;
    padding: 21px 10px 7px;
    text-align: center;
    margin-bottom: 30px;
    border-radius: 8px 8px 0 0;
  }
  .howItWorks h2:after {
    background: url(../images/m-howArrowOrange.png) no-repeat top left;
    background-size: 300px 30px;
    content: "";
    width: 300px;
    height: 30px;
    display: block;
    position: absolute;
    bottom: -30px;
    left: 50%;
    margin-left: -150px;
  }
  .howItWorks ul {
    display: block;
    float: none;
    clear: both;
    padding: 30px 30px 0;
  }
  .howItWorks ul li {
    width: 100%;
    text-align: left;
    background: none;
    padding: 10px 0 25px;
    position: relative;
  }
  .howItWorks ul li:first-child {
    width: 100%;
    padding: 10px 0 25px;
  }
  .howItWorks ul li img {
    width: 58px!important;
    position: absolute;
    left: 0;
    top: 0;
  }
  .howItWorks ul li p {
    padding-left: 70px;
  }
  .howItWorks .howCrest {
    width: 268px!important;
    margin: 0 auto -43px;
    float: none;
    display: block;
    position: relative;
    top: 0;
    left: 0;
  }
  /*search page tabs*/
  .content section > div.searchMod {
    padding: 0 15px;
    width: 96%;
  }
  .searchMod ul.tabNavigation {
    margin: 0 0 0 -3px;
    height: auto;
    padding: 10px 15px 0 0;
    float: left;
  }
  .searchMod ul.tabNavigation a {
    padding: 0 18px;
  }
  .searchMod li.searchAgainBy {
    display: none;
  }
  .searchMod .searchResultsFound {
    height: auto;
    position: relative;
    float: left;
    top: 0;
    left: 0;
    width: 45%;
    line-height: 27px;
  }
  .resultsMod {
    box-sizing: border-box;
  }
  /*search page - tyrepanels*/
  .tyrePanels {
    width: 100%;
    padding: 5px 0;
  }
  .tyrePanels .tyrePanel {
    height: auto;
    width: 100%;
    min-width: 195px;
    max-width: 195px;
    border: 1px solid #ccc;
    padding: 15px 5px 5px;
    margin: 10px auto;
  }
  .tyrePanels .tyrePanel > div {
    padding: 0 10px;
  }
  .tyrePanels .tyrePanel:first-child {
    position: relative !important;
    top: 0 !important;
    right: 0 !important;
  }
  .tyrePanels .tyrePanel .thumbnail {
    top: 10px;
    right: 10px;
    width: 75px;
  }
  .tyrePanels .tyrePanel .buyPanel {
    padding: 6px;
  }
  .tyrePanels .tyrePanel .buyPanel .submit {
    padding: 0;
  }
  .tyrePanels .tyrePanel .buyPanel .submit input.button {
    width: 58px;
    height: 30px;
  }
  .searchMod .tabNavigation {
    background: none;
  }
  .searchResults {
    margin: 0 0 10px 0;
  }
  .searchResults .resultsInfo {
    height: auto;
    float: none;
    /*margin: 0 0 10px;
            width: 100%;
            clear: both;
            padding: 10px 0 0 0;*/
    margin: 0;
  }
  .searchResults span.sortBy {
    float: right;
    display: inline-block;
    width: 55%;
    clear: none;
    text-align: right;
  }
  .searchResults span.sortBy strong {
    display: inline-block;
  }
  .searchResults select {
    font: 14px/20px arial, sans-serif;
  }
  .searchSelect {
    float: left;
  }
  .searchMod .tab {
    border-radius: 0 8px 8px 8px;
  }
  .searchMod .tab .searchTabSubheading {
    display: none;
  }
  .searchMod .tab .searchRow.advancedHidden .searchTabSubheading {
    display: block;
    text-align: center;
    clear: both;
    width: 100%;
  }
  .searchMod .tab input[type="submit"].disabled,
  .searchMod .tab input[type="button"].disabled {
    background-color: #de7209 !important;
    width: 100%;
    font: bold 16px/32px Arial, Helvetica, sans-serif;
    margin: 0;
    clear: both;
    display: block;
  }
  #searchVehicleDiv,
  #searchSizeDiv,
  #searchBrandDiv {
    background: #534c46 url(../images/tabbg.png) repeat-x bottom left;
  }
  .searchMod .tab .searchRow.advancedHidden input[type="button"] {
    float: left;
  }
  .searchMod .searchRow {
    padding-bottom: 0;
  }
  /*.searchMod .tab#searchBrandDiv, .searchMod .tab#searchSizeDiv {
        padding-bottom: 33px;
        position: relative;
    }*/
  /*.searchMod .tab {
        margin-bottom: 10px;
    }*/
  .searchMod .tab .advancedLink {
    position: absolute;
    bottom: 0;
    right: 0;
    text-align: center;
    width: 100%;
  }
  /*size*/
  #searchSizeDiv .searchSelect {
    width: 32%;
    margin: 0 0 0 2%;
  }
  #searchSizeDiv .searchSelect.width {
    margin: 0;
  }
  #searchSizeDiv .searchSelect.position {
    margin: 0;
    width: 100%;
  }
  #searchSizeDiv .R {
    width: 6%;
    text-align: right;
  }
  #searchSizeDiv .advancedHidden .searchSelect {
    width: 49%;
    margin: 0 0 0 2%;
  }
  #searchSizeDiv .advancedHidden .searchSelect.load {
    margin: 0;
  }
  /*vehicle*/
  #searchVehicleDiv .searchSelect {
    width: 49%;
    margin: 0 0 0 2%;
  }
  #searchVehicleDiv .searchSelect.year,
  #searchVehicleDiv .searchSelect.model {
    margin: 0;
  }
  /*brand*/
  #searchBrandDiv .searchSelect {
    width: 49%;
    margin: 0 0 0 2%;
  }
  #searchBrandDiv .searchSelect.brand,
  #searchBrandDiv .searchSelect.model {
    width: 49%;
    margin: 0 0 0 2%;
  }
  #searchBrandDiv .searchSelect.brand {
    margin: 0;
  }
  #searchBrandDiv .searchSelect.width,
  #searchBrandDiv .searchSelect.profile,
  #searchBrandDiv .searchSelect.rim {
    width: 32%;
    margin: 0 0 0 2%;
  }
  #searchBrandDiv .searchSelect.width {
    margin: 0;
  }
  #searchBrandDiv .advancedHidden .searchSelect {
    width: 100%;
  }
  #searchBrandDiv .advancedHidden .searchSelect.load,
  #searchBrandDiv .advancedHidden .searchSelect.speed {
    width: 49%;
    margin: 0 0 0 2%;
  }
  #searchBrandDiv .advancedHidden .searchSelect.load {
    margin: 0;
  }
  /*checkout pages - checkoutCart (product image and info)*/
  .checkoutCart {
    width: 100%;
  }
  .checkoutCart li.costs,
  .premiumDetail-content .costs {
    border: none;
  }
  .checkoutCart li.costs .item,
  .checkoutCart li.costs div span.item,
  .premiumDetail-content .costs .item,
  .premiumDetail-content .costs div span.item {
    margin: 0 0 10px 0;
    display: block;
  }
  /*checkout pages - checkout-deal (purchase info box)*/
  .checkout-top {
    padding: 10px 10px 0;
  }
  .checkout-deal .floatRight {
    width: 50%;
  }
  .checkout-deal .checkoutProductImages {
    height: auto;
  }
  /*checkout pages - purchase-guarantee*/
  .purchase-guarantee {
    margin: 20px 0 25px 0;
  }
  /*checkout pages - tabs*/
  .checkout-tabs {
    background: none;
    padding: 10px 10px 15px!important;
  }
  .checkout-tabs ul.tabNavigation a.selected {
    color: #fff;
  }
  .checkout-tabs ul.tabNavigation li a {
    padding: 8px 5px;
    font-size: 10px;
    line-height: 10px;
    text-align: center;
  }
  .checkout-tabs ul.tabNavigation li a.reviewsTab {
    padding-top: 13px;
  }
  .section .row {
    width: 100%;
  }
  .checkout-form .button,
  .checkout-form .button:hover {
    background: #f57e21 !important;
    width: 100%;
    font-weight: normal;
    height: 42px;
    margin-top: 8px;
    height: 40px;
    line-height: 40px;
    float: left;
  }
  .cboxContent {
    width: 100%;
    height: 100%;
  }
  .checkout-form .buttonRight .button,
  .checkout-form .buttonRight .button:hover {
    width: 100%;
    float: none;
  }
  .checkout-form .button input {
    background: #f57e21 !important;
  }
  /*checkout pages - tabs - error success*/
  .checkout-form .success {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    padding: 13px 8px 13px 68px;
  }
  .checkout-form .success p:before {
    top: 13px;
  }
  .checkout-form .successTop {
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    padding: 13px 8px 13px 68px;
  }
  .checkout-form .successTop p:before {
    top: 13px;
  }
  /*checkout pages - tabs - step 1 - instruction box */
  .checkoutInstruction {
    position: relative;
    top: 0;
    left: 0;
  }
  .checkoutInstructionTop {
    position: relative;
    top: 0;
    left: 0;
  }
  /*checkout pages - tabs - step 1 - list of service centre locations*/
  .checkout-form .serviceCenter label {
    width: 85%;
  }
  /*checkout pages - tabs - step 2 */
  .checkout-form .locationStep .successTop {
    position: relative;
    top: 0;
    left: 0;
  }
  .purchaseSummary .summaryMessage {
    padding: 0 0 3px;
    border: 0;
  }
  .checkout-form a.redeemCoupon:before {
    display: none;
  }
  .content .checkout-form .redemptionCode a {
    margin: 10px 0 0;
  }
  .checkout-form .formField {
    width: 100%;
    margin: 0;
  }
  .checkout-form .button.payNow {
    margin: 0;
  }
  /*free shipping banner*/
  .freeShipping {
    margin-bottom: 10px;
  }
  /*homepage promotion
* 1. this hides the promotion in the mobile viewport
*/
  #Tile13 {
    display: none;
  }
  /* 1 */
  .otr-mainpage-promotion {
    padding: 15px 15px 20px 15px;
  }
  .otr-mainpage-promotion-promotext {
    padding: 20px 20px 0px 20px;
  }
  .otr-mainpage-promotion-headertext {
    font-size: 20px;
    text-align: center;
  }
  .dealOfTheDay .dealtTitle {
    font: 0.8em/40px Arial, Helvetica, sans-serif;
  }
}
@media only screen and (min-width: 641px) and (max-width: 1200px) {
  .howItWorks p {
    font: 14px/17px 'ITCAvantGardeStd-Bk', sans-serif;
  }
  .howItWorks ul li {
    padding: 23px 0 0 48px;
    width: 27%;
  }
}
@media only screen and (max-width: 640px) and (-webkit-min-device-pixel-ratio: 1.5), only screen and (max-width: 640px) and (min-resolution: 144dpi) {
  a.toggleSEOFooter,
  .homeSearchContainer .searchOptions .searchButton,
  .searchMod .tab .advancedLink a,
  .dealOfTheDay .dealOffer .stock,
  .dealOfTheDay .buyOnlineSave,
  .checkout-form a.redeemCoupon,
  .whyChooseDealersLink a,
  .purchaseSummary .summaryMessage strong a,
  #navigationToggle,
  .whyChooseDealersLink a:before {
    background-image: url(../images/sprite_redesign@2x.png) !important;
    background-size: 200px 693px!important;
  }
  .review .stars {
    background-image: url(../images/starRatings@2x.png) !important;
    background-size: 53px 9px !important;
  }
}
.regoSearchResults {
  display: none;
  clear: both;
}
.regoHaveResults,
.regoNoResults {
  display: block;
}
.regoNoResults .regoVehicleDetail {
  display: none;
}
.regoNoResults .regoNoVehicleDetail {
  display: block;
}
.regoHaveResults .regoVehicleDetail {
  display: block;
}
.regoHaveResults .regoNoVehicleDetail {
  display: none;
}
.purchaseSummary .paymentBack:hover {
  cursor: pointer;
}
.regLabelMobileOnly {
  display: none;
}
.mcafee-footer-logo {
  padding: 15px 0px 0px 0px;
}
.illustrationImage {
  font-size: 10px;
}
.checkout-otr-purchase-buttons .checkout-btn-option {
  width: 100%;
  display: inline-block;
  margin-right: 4px;
  border-radius: 5px;
  font: bold 14px/24px Arial, Helvetica, sans-serif;
  text-align: center;
  color: #fff;
  background: #97c522;
  padding: 5px 0;
}
.checkout-otr-purchase-buttons #otrBuyNowButton {
  width: 250px;
  margin-left: 40px;
}
.checkout-otr-purchase-buttons #otrEnquireButton {
  width: 250px;
  margin-left: 20px;
}
.checkout-otr-purchase-text {
  margin-top: 10px;
  font-weight: 600;
  color: #f57e21;
}
.otr-enquriy {
  background: #fff;
  border: 1px solid #cccccc;
  border-radius: 5px;
  height: 43px;
  font: 14px/43px 'Noto Serif', serif;
  color: #726b66;
  margin: 10px 0px 10px 1px;
}
.otr-enquriy-notes {
  height: 160px;
}
.otr-eft-form-firstname {
  margin: 0 4px 0 0;
}
.otr-eft-form-surname {
  margin: 0 4px 0 0;
}
.otr-eft-form-address {
  margin: 0 4px 0 0;
}
.otr-eft-form-country {
  margin: 0 4px 0 0;
}
.otr-eft-form-city {
  width: 177px !important;
  margin: 0 4px 0 0 !important;
  float: left !important;
}
.otr-eft-form-state {
  width: 104px !important;
  margin: 0 4px 0 0;
}
.otr-eft-form-postcode {
  width: 104px !important;
  margin: 0 4px 0 0;
}
.reviewImageCycleComment {
  font-style: italic;
  margin-left: 30px;
  margin-top: 10px;
  color: #CCC;
  font-size: 12px;
}
.bold-text {
  font-weight: bold;
}
.checkout-needfitment-link {
  width: 300px;
  float: left;
  padding-top: 10px;
  font-size: 13px;
}
.checkout-needfitment-link-color {
  color: #0000FF;
}
.checkout-directshipping-link {
  color: #0000FF;
  background: none!important;
  border: none;
  padding: 0!important;
  font-family: Verdana;
  cursor: pointer;
  white-space: normal;
  height: 35px;
}
.otr-searchpage-promotion {
  /*background-color: white;*/
  /*border: 1px solid #ddd;*/
}
/*.otr-mainpage-promotion {
    padding: 120px 0px 0px 120px;
}*/
.otr-mainpage-promotion-image {
  height: 600px;
  width: 400px;
}
/*.otr-mainpage-promotion-promotext{
    width: 500px;
    padding: 20px 0px 0px 65px;
}*/
.otr-mainpage-promotion-headertext {
  font-weight: 600;
  /* font-family: sans-serif; */
  color: #564343;
}
.otr-mainpage-promotion-text {
  text-align: justify;
  /* font-family: sans-serif; */
  color: #564343;
}
.resultsMod .patternContent {
  border: 1px solid #ccc;
  -webkit-border-radius: 10px;
  -moz-box-sizing: 10px;
  border-radius: 10px;
  box-sizing: border-box;
  padding: 10px;
  font-weight: normal;
  margin-bottom: 10px;
}
.seofooterLastLink {
  background-color: #ececec !important;
}
.seofooterLastLink:hover {
  color: cornflowerblue !important;
}
/*search widget page tabs*/
.searchMod ul.tabWidgetNavigation {
  border: none;
  height: 33px;
  margin: 12px 0 0;
  float: right;
}
.searchMod ul.tabWidgetNavigation li {
  width: auto;
  margin-left: 3px;
}
.searchMod ul.tabWidgetNavigation li:first-child {
  width: auto;
}
.searchMod ul.tabWidgetNavigation a {
  display: block;
  width: auto;
  height: 33px;
  border: 0;
  border-bottom: 0 none;
  border-radius: 10px 10px 0 0;
  background: #534c46;
  text-align: center;
  color: #fff;
  font: 14px/33px 'ITCAvantGardeStd-Bk', sans-serif;
  padding: 0 25px;
  text-transform: uppercase;
  zoom: 1;
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.searchMod ul.tabWidgetNavigation a:hover {
  text-decoration: none;
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
}
.searchMod ul.tabWidgetNavigation a.selected {
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
  color: #fff;
}
.searchMod ul.tabWidgetNavigation a.selected:after {
  display: none;
}
.searchMod .tabWidgetNavigation {
  border-bottom: 2px solid #DE7209;
  margin: 5px auto 16px auto;
  padding: 0;
}
.searchMod .tabWidgetNavigation li {
  float: left;
  list-style: none outside none;
  margin-left: 5px;
  width: 202px;
}
.searchMod .tabWidgetNavigation li:first-child {
  margin-left: 0px;
  width: 201px;
}
.searchMod .tabWidgetNavigation li a {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 #F9F9F9;
  border-color: #D0D0D0;
  -o-border-image: none;
     border-image: none;
  border-style: solid;
  border-width: 1px 1px 0;
  color: #333333;
  float: left;
  font-size: 12px;
  font-weight: bold;
  text-decoration: none;
  width: 100%;
  height: 32px;
  line-height: 38px;
}
.searchMod .tabWidgetNavigation li a:hover,
.searchMod .tabWidgetNavigation li a.selected {
  background: none repeat scroll 0 0 #DE7209;
  border-color: #DE7209;
  color: #FFFFFF;
}
.searchMod .tabWidgetNavigation li a span {
  font: italic bold 14px/1em Georgia, "Times New Roman", Times, serif;
}
.searchMod ul.tabWidgetNavigation {
  border: none;
  height: 33px;
  margin: 12px 0 0;
  float: right;
}
.searchMod ul.tabWidgetNavigation li {
  width: auto;
  margin-left: 3px;
}
.searchMod ul.tabWidgetNavigation li:first-child {
  width: auto;
}
.searchMod ul.tabWidgetNavigation a {
  display: block;
  width: auto;
  height: 33px;
  border: 0;
  border-bottom: 0 none;
  border-radius: 10px 10px 0 0;
  background: #534c46;
  text-align: center;
  color: #fff;
  font: 14px/33px 'ITCAvantGardeStd-Bk', sans-serif;
  padding: 0 25px;
  text-transform: uppercase;
  zoom: 1;
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.searchMod ul.tabWidgetNavigation a:hover {
  text-decoration: none;
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
}
.searchMod ul.tabWidgetNavigation a.selected {
  filter: alpha(opacity=100);
  opacity: 1;
  background: #534c46;
  color: #fff;
}
.searchMod ul.tabWidgetNavigation a.selected:after {
  display: none;
}
#mobile-call-overlay {
  display: none !important;
  text-decoration: none;
  position: fixed;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: 9999;
  background-color: #66a210;
  color: white;
  width: 100%;
  text-align: center;
  padding: 1em;
  border-top: 5px solid white;
}
@media (max-width: 767px) {
  #mobile-call-overlay {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  #mobile-call-overlay {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  #mobile-call-overlay {
    display: none !important;
  }
}
#mobile-call-overlay:hover {
  text-decoration: none;
}
#mobile-call-overlay .need-help {
  padding-right: 12px;
  font-size: 14pt;
  font-weight: bold;
}
#mobile-call-overlay .talk-now {
  font-size: 12pt;
  padding-left: 12px;
}
.homeSearchContainer .searchOptions .tabPanel#rego .regoSearch {
  background-color: #CCC;
  box-sizing: border-box;
  border-radius: 5px;
  /*height: 50px;*/
  cursor: pointer;
  padding: 0;
}
.homeSearchContainer .searchOptions .tabPanel#rego .regoSearch.disabled {
  cursor: inherit;
}
.homeSearchContainer .searchOptions .tabPanel#rego .findRegoVehicle,
.homeSearchContainer .searchOptions .tabPanel#rego .searchingRegoVehicle {
  font-size: 20px;
  line-height: 50px;
  border: none;
  vertical-align: middle;
}
.homeSearchContainer .searchOptions .tabPanel#rego .regoSearch:hover {
  background-color: #BBB;
}
.homeSearchContainer .searchOptions .tabPanel#rego .disabled .findRegoVehicle {
  display: none;
}
.homeSearchContainer .searchOptions .tabPanel#rego .searchingRegoVehicle {
  display: none;
}
.homeSearchContainer .searchOptions .tabPanel#rego .disabled .searchingRegoVehicle {
  display: inline;
}
.homeSearchContainer .searchOptions .tabPanel#otr {
  padding: 20px 52px 40px 52px;
}
.homeSearchContainer .searchOptions .tabPanel#truck {
  padding: 20px 52px 40px 52px;
}
/* Sub Tab Passenger Tab Navigation*/
.homeSearchContainer .searchOptions .tabPanel#passenger .passengerSearchOptions .subPanel#passengerSize {
  height: 150px;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation {
  border: none;
  list-style: none;
  padding: 0 0 0 0;
  margin: 0 0 0 0;
  /*margin-left: 143px;*/
}
.passengerSearchOptions .subTabs ul.tabSubNavigation li:first-child a {
  width: 100px;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation a {
  background: #F57E21;
  border-radius: 6px;
  padding: 5px 20px 5px 20px;
  /*border: solid #f57e21 1px;*/
  float: left;
  margin-left: 20px;
  width: 100px;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation a:hover {
  background: #fcc63c;
  background-image: linear-gradient(to bottom, #fcc63c, #d99734);
  text-decoration: none;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation a.selected {
  background: #fcc63c;
  background-image: linear-gradient(to bottom, #fcc63c, #d99734);
  text-decoration: none;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation a.selected .homepage-button-arrow {
  transform: rotateZ(90deg);
}
.passengerSearchOptions .subTabs ul.tabSubNavigation a.selected:after {
  display: none;
}
.passengerSearchOptions .subTabs ul.tabSubNavigation {
  height: 50px;
}
.passengerSearchOptions .subTabs {
  width: 100%;
}
.passengerSearchOptions .subTabs ul.tabNavigation {
  margin: 0;
  background: none;
  height: 34px;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .searchField {
  width: 293px;
  display: inline-block;
  float: left;
  padding-bottom: 10px;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .searchField.vehicleRegoState {
  margin-right: 10px;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego input[type="text"],
.passengerSearchOptions .subTabs .subPanel#passengerRego select {
  text-transform: uppercase;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch {
  background-color: #CCC;
  box-sizing: border-box;
  border-radius: 5px;
  cursor: pointer;
  padding: 0;
  width: 50px;
  margin-left: 10px;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch.disabled {
  cursor: inherit;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .searchingRegoVehicle {
  font-size: 20px;
  line-height: 50px;
  border: none;
  vertical-align: middle;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch .findRegoVehicle,
.passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch .searchingRegoVehicle {
  font-size: 20px;
  line-height: 50px;
  border: 0;
  vertical-align: middle;
  padding: 9px 9px;
  height: 32px;
  width: 32px;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .regoSearch:hover {
  background-color: #BBB;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .disabled .findRegoVehicle {
  display: none;
}
.passengerSearchOptions .subTabs .subPanel#passengerRego .searchingRegoVehicle {
  display: none;
}
.passengerSearchOptions .subTabs .subPanel#passengerVehicle {
  height: auto;
}
.passengerSearchOptions .subTabs .subPanel#passengerVehicle .searchField {
  width: 323px;
  display: inline-block;
  float: left;
  padding-bottom: 10px;
}
/* Passenger Brand Homepage Search*/
.passengerSearchOptions .subTabs .subPanel#passengerBrand .searchSelect {
  display: inline-block;
  padding-bottom: 10px;
}
.passengerSearchOptions .subTabs .subPanel#passengerBrand .brand {
  width: 318px;
}
.passengerSearchOptions .subTabs .subPanel#passengerBrand .brandModel {
  width: 318px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#passengerBrand .brandWidth {
  width: 208px;
}
.passengerSearchOptions .subTabs .subPanel#passengerBrand .brandProfile {
  width: 208px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#passengerBrand .brandRim {
  width: 209px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#passengerVehicle .searchField.vehicleYear,
.passengerSearchOptions .subTabs .subPanel#passengerVehicle .searchField.vehicleModel {
  margin-right: 10px;
}
.passengerSearchOptions .subTabs .subPanel#passengerSize .searchField {
  width: 136px;
  float: left;
  margin: 0px 30px 0 0;
  padding: 0 0 10px 0;
  position: relative;
}
.passengerSearchOptions .subTabs .subPanel#truckSize .searchField {
  width: 150px;
  float: left;
  margin: 0px 10px 0 0;
  padding: 0 0 10px 0;
  position: relative;
}
.passengerSearchOptions .subTabs .subPanel#otrSize .searchField {
  width: 136px;
  float: left;
  margin: 0px 30px 0 0;
  padding: 0 0 10px 0;
  position: relative;
}
.passengerSearchOptions .subTabs .subPanel#passengerSize .advancedSearchLink {
  position: absolute;
  margin: 0;
  width: auto;
  bottom: 20px;
  right: 0;
  width: 180px;
  text-align: left;
}
.passengerSearchOptions .subTabs .subPanel#truckSize .advancedSearchLink {
  /*position: absolute;*/
  margin: 10px 0  0 20px;
  /*width: auto;*/
  /*bottom: 70px;*/
  /*right: 0;*/
  /*width: 180px;*/
  /*text-align: left;*/
  /*float:left;*/
  display: block;
}
.passengerSearchOptions .subTabs .subPanel#otrSize .advancedSearchLink {
  position: absolute;
  margin: 0;
  width: auto;
  bottom: 20px;
  right: 0;
  width: 180px;
  text-align: left;
  float: left;
  display: block;
}
.passengerSearchOptions .subTabs .subPanel#passengerSize .searchButton {
  margin: 4px 0 0 0;
}
.passengerSearchOptions .subTabs .subPanel#otrSize .searchButton {
  margin: 4px 0 0 0;
}
.passengerSearchOptions .subTabs #vehicleHomeSearchButton.disabled,
.passengerSearchOptions .subTabs #sizeHomeSearchButton.disabled,
.passengerSearchOptions .subTabs #regoHomeSearchButton.disabled,
.passengerSearchOptions .subTabs #VINSearchButton.disabled,
.passengerSearchOptions .subTabs #sizeTruckSearchButton.disabled,
.passengerSearchOptions .subTabs #brandTruckSearchButton.disabled,
.passengerSearchOptions .subTabs #sizeOtrSearchButton.disabled,
.passengerSearchOptions .subTabs #brandOtrSearchButton.disabled {
  opacity: 0.2 !important;
  cursor: default;
  background-color: #f57e21 !important;
}
.searchOptions #vehicleHomeSearchButton.disabled,
.searchOptions #sizeHomeSearchButton.disabled,
.searchOptions #brandHomeSearchButton.disabled,
.searchOptions #regoHomeSearchButton.disabled,
.searchOptions #VINSearchButton.disabled,
.searchOptions #brandTruckSearchButton.disabled,
.searchOptions #sizeTruckSearchButton.disabled,
.searchOptions .subTabs #sizeOtrSearchButton.disabled,
.searchOptions .subTabs #brandOtrSearchButton.disabled {
  opacity: 0.2 !important;
  cursor: default;
  background-color: #f57e21 !important;
}
/* Truck Home Page */
.passengerSearchOptions .subTabs .subPanel#truckBrand .searchSelect {
  display: inline-block;
  padding-bottom: 10px;
}
.passengerSearchOptions .subTabs .subPanel#truckBrand .brand {
  width: 318px;
}
.passengerSearchOptions .subTabs .subPanel#truckBrand .brandModel {
  width: 318px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#truckBrand .brandWidth {
  width: 208px;
}
.passengerSearchOptions .subTabs .subPanel#truckBrand .brandProfile {
  width: 208px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#truckBrand .brandRim {
  width: 209px;
  float: left;
}
/* Otr Home Page */
.passengerSearchOptions .subTabs .subPanel#otrBrand .searchSelect {
  display: inline-block;
  padding-bottom: 10px;
}
.passengerSearchOptions .subTabs .subPanel#otrBrand .brand {
  width: 318px;
}
.passengerSearchOptions .subTabs .subPanel#otrBrand .brandModel {
  width: 318px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#otrBrand .brandWidth {
  width: 208px;
}
.passengerSearchOptions .subTabs .subPanel#otrBrand .brandProfile {
  width: 208px;
  float: left;
}
.passengerSearchOptions .subTabs .subPanel#otrBrand .brandRim {
  width: 209px;
  float: left;
}
/*.sizeTruckHomeTab{
    height: 83px;
}*/
.sizeOtrHomeTab {
  height: 83px;
}
.passengerSearchOptions .subTabs ul.truckSubTabs {
  margin-left: 150px;
}
.tabicon-display {
  display: block;
  height: 45px;
  margin-left: 60px;
}
.tabicon-rego {
  background: url(/images/tabicon_register_white.png) no-repeat;
}
.tabicon-vehicle {
  background: url(/images/tabicon_vehicle_white.png) no-repeat;
}
.tabicon-size {
  background: url(/images/tabicon_size_white.png) no-repeat;
}
.tabicon-brand {
  background: url(/images/tabicon_brand_white.png) no-repeat;
}
.subtabLayout {
  width: 160px;
  height: 115px;
  float: left;
}
.homepage-button-searchby {
  font-size: 12px;
  /*text-align: center;*/
  font-family: Arial;
  color: #ffffff;
  padding-bottom: 5px;
  text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.3);
  color: #542C12;
}
.homepage-button-text {
  font-size: 18px;
  font-family: 'Oswald', Arial, sans-serif;
  color: #ffffff;
  font-weight: 600;
}
.homepage-button-rightpart {
  width: 80px;
  float: left;
}
.homepage-button-leftpart {
  border: #B25618;
  border-left-width: 1px;
  border-left-style: solid;
  width: 10px;
  height: 35px;
  float: left;
}
.homepage-button-arrow {
  color: #B25618;
  font-size: 2.5em !important;
  text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.3);
  margin-left: 12px;
}

/*# sourceMappingURL=styles.min.css.map */

</style>