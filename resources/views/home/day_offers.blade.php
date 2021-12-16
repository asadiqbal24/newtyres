@extends('front.default')
@section('content')  

		<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 search-div" style="background-image: url('{{asset('public/front/tyre-banner.jpg')}}');">
					<p class=" d-block d-sm-none show-on-mobile">WE ARE STILL OPEN | SHOP SAFELY ONLINE<br>AND SUPPORT LOCAL BUSINESS.</p>
						<h1 class="search-div-heading">Find your new tyres</h1>

						<div class="col-md-12 col-lg-12 col-sm-12">
							<p class="search-div-text"><strong>Search By</strong> <a href="#" class="search-div-link" >Tyre Size</a></p>
							


							<p class="search-div-text">Search By <a href="#" class="search-div-text-a"> Truck Tyres</a>or <a class="search-div-text-a"> OTR Tyres </a></p>
							<form style="margin-bottom: 10px;">	
								<div class="row">	
									<div class="col-lg-6 col-sm-12 col-md-6" style="margin-bottom: 10px;">
			                            <div>
			                                <select class="form-control" name="state" id="state" style="height: 56px;font-size: 18px;">
			                                	<option value="{{NULL}}">State</option>	
			                                	@foreach($regions as $r)
			                                	<option value="{{$r->id}}">{{$r->name}}</option>	
			                                	@endforeach
			                                </select>
			                            </div>
		                             </div> 

		                             <div class="col-lg-6 col-sm-12 col-md-6" style="margin-bottom: 10px;">
			                            <div>
			                                <button class="btn btn-primary btn-block" style="height: 56px;font-size: 18px;"><strong>FIND MY TYRES</strong></button>
			                                
			                            </div>

			                             <div class="col-lg-12 col-sm-12 col-md-12">
			                                	<div class="row">
				                                	<div class="col-lg-1 col-sm-1 col-md-1 col-xs-1 width-20">
				                                		<img src="{{asset('public/front/svgexport-20.png')}}"> 
				                                	</div>
				                                	<div class="col-lg-11 col-sm-11 col-md-11 col-xs-11 width-80">
				                                		<span class="white_text trouble-text">Having trouble with tyre size?</span>
				                                	<h6><a href="#" class="more_help">More Help</a></h6>	
				                                	</div>	
			                                	</div>	
			                                		
			                          </div>
		                             </div> 

		                            
		                         </div>

							</form>
						</div>		
				</div>

		</div>

			
		<div class="row row_padding">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<h1>Order before 10:30am for same day fitment*!</h1>

				<div class="row"> 
					<p>
						
					Need your tyres now? Tyresales now offer SAME DAY delivery and installation to most metropolitan areas on selected tyres, Monday through to Friday. $20 FEE WAIVED FROM 26th March 2020

If you miss the same day delivery cut-off, we can arrange next day delivery Monday through to Friday on eligible tyres.

How it works:
Look for tyres with the "Click & Today" or "Click & Tomorrow" banner
Call us on 1300 897 372, let us know you need same day delivery and place your order for eligible tyres before 10:30am (local time). A $20 delivery surcharge for will apply for same day / next day orders. $20 FEE WAIVED FROM 26th March 2020
We’ll organise delivery to a participating fitment centre who can arrange installation
Your order must be paid for by credit card or PayPal. Bank Transfer & ZipMoney orders will not qualify for same day / next day delivery.

Same day delivery FAQ’s:
Is there a fee for same day / next day deliveries?
A $20 delivery surcharge will apply for all same-day and next-day deliveries. $20 FEE WAIVED FROM 26th March 2020

What happens if my order does not arrive in time?
We stand by our same-day delivery promise – but as we all know, occasionally things happen. If you choose an eligible product and an eligible installer and we’re unable to deliver your tyres on the same day you ordered, we will refund you the same day delivery surcharge ($20).

What happens if I miss the 10:30am cut-off time?
We will do our best to get the tyres to you on the same day, so please give us a call. If we cannot, we can arrange next day delivery & installation. The delivery surcharge will still apply.

The tyres that I want are not available for same day delivery, why?
As we hold stock all across the country, some products need to be transported form interstate, as such we cannot arrange same day delivery.

* Eligible tyres marked with “CLICK & FIT TODAY” or “CLICK & FIT TOMORROW” banner
Order must be placed BY PHONING TYRESALES on 1300 897 372 before 10:30am (local time). All orders placed after this time will qualify for next-day delivery.
$20 delivery surcharge will be applied to your order. $20 FEE WAIVED FROM 26th March 2020
Order must be paid for in full by Credit Card or PayPal.

Mobile Tyre Fitment; Have your tyres professionally fitted at home or work!
Too busy to wait around to have your tyres installed? Why not let us come to you?
Tyresales mobile tyre fitters will professionally fit and balance your tyres at home, work – almost anywhere!
Click here to find out more.
						
					</p>
			  </div>
			</div>
		</div>	



</section>
@endsection()
