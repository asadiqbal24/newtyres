@extends('front.default.default')
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
				<h1>Price Match Guarantee</h1>

				<div class="row"> 
					<p>
						
						We believe in giving you one, all-inclusive price which includes fitting, balancing, new tubeless valves and tyre disposal. You will not be charged anything extra, and there are no hidden fees or surprise costs.

If you find an identical, locally stocked, fully fitted tyre for less at any of our competitors, contact us to price match.

Terms and Conditions:
Proof of competitor advertisement or current written quote required
Private buyers only
Not valid with any other promotional offers or cash back
Excludes competitor liquidation & aged stock sales
Not valid after tyre purchase
Only valid for 1 order per customer within a 30 day period
Applies to passenger car tyres only
Tyres must be in stock with tyresales and with the competitor
						
					</p>
			  </div>
			</div>
		</div>	



</section>
@endsection()
