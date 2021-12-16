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
				<h1>Mobile Tyre Fitment; Have your tyres professionally fitted at home or work!</h1>

				<div class="row"> 
					<p>
						Too busy to wait around to have your tyres installed? Why not let us come to you?
Tyresales mobile tyre fitters will professionally fit and balance your tyres at home, work – almost anywhere!
We can even arrange to have your tyres installed on the day you order*
Our mobile service is available in selected areas of Melbourne, Sydney, Adelaide, Perth and Brisbane.

How it works:
Select your tyres
Enter your postcode at checkout – if our Mobile Fitting service is available in your area, Mobile Tyre Fitment will appear as a fitment centre option for you to select
Enter your preferred fitment day & time of day
Complete Payment
Our mobile tyre fitters team will contact you to confirm details and appointment time
*Eligible tyres marked with “SAME DAY” or “NEXT DAY” banner.
Order must be placed before 10:00 AM (local time) Monday to Friday to qualify for same day fitment. Orders placed after this time but before 02:00 PM (local time) Monday to Friday will qualify for next-day delivery. Excluding public holidays.
Order must be paid for in full before tyres will be shipped.
Subject to appointment time availability

Why Choose Tyresales Mobile Fitment?
Our mobile fitters are trained to the highest standard.
We put our customers first.
Our mobile tyre fitting vans are equipped with the latest tyre changing and balancing technology allowing them to work on wheels up to 24”
Choose a morning or afternoon appointment to suit you. Our mobile technicians will give you a call on the day when they are en route to your location
Fitting Location Requirements
How much space do we require to fit your tyres?
Access to both sides of the vehicle is required, and we need to be able to park our van in close proximity to your vehicle. Driveways or car parks are ideal, providing there is enough space around the vehicle.

I have an inclined driveway, is this OK to work on?
Yes, in most circumstances. If there is any doubt as to the suitability or safety of the proposed location, we may ask you to move the vehicle to a more suitable location.

Is there anywhere you can’t fit tyres?
Only areas that represent a danger to you, our technicians or members of the public. If there is any doubt as to the suitability or safety of the proposed location, we may ask you to move the vehicle to a more suitable location.
					</p>
			  </div>
			</div>
		</div>	



</section>
@endsection()
