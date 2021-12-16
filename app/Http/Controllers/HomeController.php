<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Mail;
use Session;
use App\Models\Settings;
use App\Models\Sliders;
use App\Models\Regions;
use App\Models\User;
use App\Models\Tyres;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;
use App\Models\TyreAttributes;
use App\Models\Sites;
use App\Models\Pages;
use App\Models\CheckoutCart;
use App\Models\HomeDelivery;
use App\Models\CustomerDetail;
use App\Models\Categories;
use App\Models\Vehicles;
use DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\DealerSignup;
use App\Models\FinanceProvider;
use App\Models\SubCategories;
use App\Models\ExtraOrderItems;
use App\Models\ShippingAddress;
use App\Models\PostCode;
use Response;
use App\Models\VehiclesMake;

class HomeController extends Controller
{
	public function home(){


		$page_title = 'Home';
        //getIp();
        $full_sliders = Sliders::where('name','full')->get();	            
        $m_sliders = Sliders::where('name','mobile')->get();                       
		return view('home.index',compact('page_title','full_sliders','m_sliders'));
	}

	public function register(){
		$page_title = '::Register';		
   	$user_last_id=User::select('name')->orderby('id','desc')->first();
    $user_next_id	= (int)$user_last_id->username+1;
    $user_next_id = str_pad($user_next_id, 7, '0', STR_PAD_LEFT);

		return view('auth.register',compact('page_title','user_next_id'));
	}


	public function test_email(){
		

					// return redirect()->back();
	                $data = ['username'=>'a','email'=>'a@a.com','password'=>'123456','uid'=>'7859b164bbaef3b2139c1ef0d720b812'];
		            $email = 'mohammad.arbaz001@yahoo.com';
           			if(Mail::send('mails.login_credentials',['data'=>$data],function($mail) use ($email){
                		$mail->to($email,'SAFE User')->from("no-reply@safepk.com")->subject("SAFE Account Credentials");
             		})){

             		}else{
             			dd(Mail::failures());
             		}

		dd('a');
	}


	public function terms_and_conditions(){
        $terms_condition = Settings::where('key_term','terms_condition')->select('value')->first();		
		return view('home.terms_and_conditions',compact('terms_condition'));
	}


	public function privacy_policy(){
        $privacy_policy = Settings::where('key_term','privacy_policy')->select('value')->first();		
		return view('home.privacy_policy',compact('privacy_policy'));
	}


	public function demo(){
			return view('home.demo');	
	}

	public function save_lang(){
	$homepage = file_get_contents(base_path().'\\resources\\views\\partials\\languages.blade.php');
	$text = explode('@',$homepage);
	foreach($text as $t){
		$td = explode('_',$t);
		if(isset($td[0])){
			$cou = $td[0];
		}else{
			$cou = 'nil';
		}


	  if(isset($td[1])){
			$iso = $td[1];
		}else{
			$iso = 'nil';
		}

			DB::table('languages')->insert(
			    ['country' => $cou, 'iso' => $iso]
			);

	}



	$country = array();
	$iso = array();	

		dd('a');
	}

    public function getUserNumber()
    {
        $phone_number = '+923205038329';
        $message = "A message has been sent to you";

        $this->initiateSmsActivation($phone_number, $message);
//        $this->initiateSmsGuzzle($phone_number, $message);

        return redirect()->back()->with('message', 'Message has been sent successfully');
    }


public function initiateSmsActivation($phone_number, $message){
    $isError = 0;
    $errorMessage = true;

    //Preparing post parameters
    $postData = array(
        'username' => $this->SMS_USERNAME,
        'password' => $this->SMS_PASSWORD,
        'message' => $message,
        'sender' => $this->SMS_SENDER,
        'mobiles' => $phone_number,
        'response' => $this->RESPONSE_TYPE
    );

    $url = "http://portal.bulksmsnigeria.net/api/";

    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData
    ));


    //Ignore SSL certificate verification
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


    //get response
    $output = curl_exec($ch);


    //Print error if any
    if (curl_errno($ch)) {
        $isError = true;
        $errorMessage = curl_error($ch);
    }
    curl_close($ch);


    if($isError){
        return array('error' => 1 , 'message' => $errorMessage);
    }else{
        return array('error' => 0 );
    }
}

        public function initiateSmsGuzzle($phone_number, $message)
        {
            $client = new Client();

            $response = $client->post('http://portal.bulksmsnigeria.net/api/?', [
                'verify'    =>  false,
                'form_params' => [
                    'username' => $this->SMS_USERNAME,
                    'password' => $this->SMS_PASSWORD,
                    'message' => $message,
                    'sender' => $this->SMS_SENDER,
                    'mobiles' => $phone_number,
                ],
            ]);


            $response = json_decode($response->getBody(), true);
        }


        public function single_page(Request $request){

            $x = explode('/', $request->getPathInfo());
            $slug = $x[1];
            $page_title = str_replace('-',' ',$slug);
                $sp = NULL;
                $p = NULL;
            $page = Pages::where('url',$slug)->first();

            if(empty($page)){
                return redirect()->back();
            }

            if($page->category_id==-1){

                $page_cat = NULL;
                $sp = NULL;
                $p = NULL;
                return view('home.single_page',compact('page_title','page','page_cat','sp','p'));                

            }else{
            if(empty($page)){
                abort(404);  //404 page
            }else{

                $page_cat = Categories::where('url',$slug)->first();
                if(empty($page_cat)){
                    $page_cat = SubCategories::where('url',$slug)->first();
                    $sp = Categories::where('id',$page_cat->category_id)->first();
                    $p = Categories::where('id',$sp->category_id)->first();
                }else{
                    $p = Categories::where('id',$page_cat->category_id)->first();                    
                }


                
                return view('home.single_page',compact('page_title','page','page_cat','sp','p'));                
            }
          }

        }


        public function search(Request $request){


/*            dd($_GET);*/

            $url1 = $request->fullUrl();

            $exp = explode('?page', $url1);

            $url = $exp[0];

            $s_width = isset($_GET['width'])?$_GET['width']:NULL;
            $s_aspect = isset($_GET['aspect'])?$_GET['aspect']:NULL;
            $s_rim = isset($_GET['rim'])?$_GET['rim']:NULL;
            $s_region = isset($_GET['delivery'])?$_GET['delivery']:NULL;
            $s_brand = isset($_GET['brands'])?$_GET['brands']:NULL;
            $s_pattern = isset($_GET['pattern'])?$_GET['pattern']:NULL;
            $s_categories = isset($_GET['categories'])?$_GET['categories']:NULL;
            $sel_categories = isset($_GET['sel_categories'])?$_GET['sel_categories']:NULL;
            $s_designedfor = isset($_GET['designedfor'])?$_GET['designedfor']:NULL;
            $s_load = isset($_GET['load'])?$_GET['load']:NULL;
            $s_speed = isset($_GET['speed'])?$_GET['speed']:NULL;
            $designedfor = isset($_GET['designedfor'])?$_GET['designedfor']:NULL; 
            $attribute = isset($_GET['attribute'])?$_GET['attribute']:NULL;     

            $pricefrom = isset($_GET['pricefrom'])?$_GET['pricefrom']:'0';
            $promotion = isset($_GET['promotion'])?$_GET['promotion']:'0';

            $otr = isset($_GET['otr'])?$_GET['otr']:'0';

            $priceto = isset($_GET['priceto'])?$_GET['priceto']:'0';         
            
            $rn = isset($_GET['rn'])?$_GET['rn']:'0';                        

            $runflat = isset($_GET['runflat'])?$_GET['runflat']:'0';  

            $sortby = isset($_GET['sortby'])?$_GET['sortby']:'0';   


            $make = isset($_GET['make'])?$_GET['make']:'0';         
            
            $model = isset($_GET['model'])?$_GET['model']:'0';                        

            $series = isset($_GET['series'])?$_GET['series']:'0';  

            $year = isset($_GET['year'])?$_GET['year']:'0';   



            $truck = isset($_GET['truck'])?$_GET['truck']:'0';

            $brands = TyresBrands::all();
            $patterns  = TyresBrandsPatterns::all();    
            $attributes = TyreAttributes::all();

            if(!empty($s_width) && $s_width!='0'){
            $tyres = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts');

                $ceo = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('ceo_choice','1')->limit(3)->orderBy('id','desc');

                $recommend = Tyres::where('profile',$s_aspect)->where('width',$s_width)->where('rim_size',$s_rim)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->where('recommend','1')->limit(3)->orderBy('id','desc');                
            }else{
                $tyres = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes');  

                $ceo = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('ceo_choice','1')->limit(3)->orderBy('id','desc');

                $recommend = Tyres::with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->where('recommend','1')->limit(3)->orderBy('id','desc');  
            }


            //dd($s_region);
            if(!empty($s_region) && $s_region!='0' && $s_region!=''){
                $reg_id = Regions::where('nick',$s_region)->first();
                $tyres = $tyres->where('fitment_in',$reg_id->id);
                $ceo = $ceo->where('fitment_in',$reg_id->id);
                $recommend = $recommend->where('fitment_in',$reg_id->id);                
            } 


            if(!empty($s_brand) && $s_brand!='0'){
                $br_id = TyresBrands::where('url',$s_brand)->first();
                $tyres = $tyres->where('brand_id',$br_id->id);
                $ceo = $ceo->where('brand_id',$br_id->id);
                $recommend = $recommend->where('brand_id',$br_id->id);
            }


            if(!empty($s_pattern) && $s_pattern!='0'){
                $pt_id = TyresBrandsPatterns::where('url',$s_pattern)->first();
                $tyres = $tyres->where('pattern_id',$pt_id->id);
                $ceo = $ceo->where('brand_id',$pt_id->id);
                $recommend = $recommend->where('brand_id',$pt_id->id);
            }

            if(!empty($s_categories) && $s_categories!='0'){

                $ct_id = TyreAttributes::where('url',$s_categories)->first();
                $tyres = $tyres->where('attributes',$ct_id->id);
                $ceo = $ceo->where('brand_id',$ct_id->id);
                $recommend = $recommend->where('brand_id',$ct_id->id);                
            }


            if(!empty($sel_categories)){
                $arr = explode(',', $sel_categories);
                 $tyres = $tyres->whereIn('attributes',$arr);
            }

            if(!empty($s_load) && $s_load!='0'){
                $tyres = $tyres->where('load_index',$s_load);
                $ceo = $ceo->where('load_index',$s_load);
                 $recommend = $recommend->where('load_index',$s_load);
            }

            if(!empty($s_speed) && $s_speed!='0'){
                $tyres = $tyres->where('speed_index',$s_speed);
                $ceo = $ceo->where('speed_index',$s_speed);
                $recommend = $recommend->where('speed_index',$s_speed);                
            }


            if(!empty($designedfor) && $designedfor!='0'){
                $veh = Vehicles::where('url',$designedfor)->select('id')->first();
                $tyres = $tyres->where('vehicle_id',$veh->id);
                $ceo = $ceo->where('vehicle_id',$veh->id);  
                $recommend = $recommend->where('vehicle_id',$veh->id);                
            }


            if(!empty($make) && $make!='0'){
                $tyres = $tyres->where('vehicle_id',$make);
                $ceo = $ceo->where('vehicle_id',$make);  
                $recommend = $recommend->where('vehicle_id',$make);                
            }


            if(!empty($model) && $model!='0'){
                $tyres = $tyres->where('make_id',$model);
                $ceo = $ceo->where('make_id',$model);  
                $recommend = $recommend->where('make_id',$model);                
            }

            if(!empty($series) && $series!='0'){
                $tyres = $tyres->where('series_id',$series);
                $ceo = $ceo->where('series_id',$series);  
                $recommend = $recommend->where('series_id',$series);                
            }


/*            if(!empty($year) && $year!='0'){
                $tyres = $tyres->where('year',$year);
                $ceo = $ceo->where('year',$year);  
                $recommend = $recommend->where('year',$year);                
            }*/




        if($promotion!='0' && $promotion!=''){
        
            $tyres = $tyres->where('on_sale',1);

        }else{
            $tyres = $tyres;
        }             




        if($otr!='0' && $otr!=''){
        
            $tyres = $tyres->where('otr',1);

        }else{
            $tyres = $tyres;
        }        



            if($pricefrom > 0){
                    $tyres = $tyres->whereBetween('price', [$pricefrom, $priceto]);
                }else{
                    $tyres = $tyres;
                }   

                if($sortby!='0'){


                  if($sortby=='pricehighlow'){
                    $tyres = $tyres->orderBy('price','desc');
                     $ceo = $ceo->orderBy('price','desc');
                     $recommend = $recommend->orderBy('price','desc');
                  }elseif($sortby=='pricelowhigh'){
                    $tyres = $tyres->orderBy('price','asc');
                    $ceo = $ceo->orderBy('price','asc');
                    $recommend = $recommend->orderBy('price','asc');            
                  }elseif($sortby=='brandatoz'){
                    $tyres = $tyres->orderBy('brand_id','asc'); 
                     $ceo = $ceo->orderBy('brand_id','asc');
                     $recommend = $recommend->orderBy('brand_id','asc');          
                  }elseif($sortby=='brandztoa'){
                $tyres = $tyres->orderBy('brand_id','desc');
                $ceo = $ceo->orderBy('brand_id','desc');
                 $recommend = $recommend->orderBy('brand_id','desc'); 
                  }elseif($sortby=='runflat'){
                $tyres = $tyres->where('run_flat','1'); 
                $ceo = $ceo->where('run_flat','1'); 
                $recommend = $recommend->where('run_flat','1');                 
                  }


                }


                  if($runflat=='on'){
                      $tyres = $tyres->where('run_flat','1');
                      $ceo = $ceo->where('run_flat','1');
                      $recommend = $recommend->where('run_flat','1');
                    }


                    if($truck!='0'){
                      $tyres = $tyres->where('truck','1');
                      $ceo = $ceo->where('truck','1');
                      $recommend = $recommend->where('truck','1');
                    }


                    

            $total = $tyres->count();        
            $page=1;        
            if(isset($_GET['page'])){

                  $pg = 12 * $_GET['page'];  

                $tyres = $tyres->limit($pg)->get();                
                $page = $_GET['page']+1;
            }else{
                $tyres = $tyres->limit(12)->get();  
                $page = 2;              
            }            


            $arr = $_GET;
            $param = [];
            foreach ($arr as $key => $value) {
                array_push($param, $key);
            }


                        $chk = count($_GET);
            if($chk==1){
                if($param[0]!='page'){
                    $url = $url.'&page='.$page;
                }else{
                    $url = $url.'?page='.$page; 
                }
            }elseif($chk==0){
                $url = $url.'?page='.$page;
            }else{
                               $url = $url.'&page='.$page; 
            }

            $ceo = $ceo->get();
            $recommend = $recommend->get();
            $speed_index = Tyres::select('speed_index')->groupBy('speed_index')->get();       
            $load_index = Tyres::select('load_index')->groupBy('load_index')->get();                   
            $makes = Vehicles::all();  


            return view('home.search',compact('s_width','s_aspect','s_rim','tyres','brands','patterns','attributes','speed_index','load_index','s_region','s_brand','s_pattern','s_categories','s_designedfor','s_load','s_speed','makes','ceo','recommend','page','url','total','sortby'));

        }

        public function get_width_profile(Request $r){

            $profile = Tyres::where('width',$r->val)->select('profile')->groupBy('profile')->where('profile','!=','0')->get();
            return $profile;

        }

        public function get_profile_rim(Request $r){

           $rim_size = Tyres::where('profile',$r->val)->select('rim_size')->groupBy('rim_size')->where('rim_size','!=','0')->get();
            return $rim_size;

        }


public function get_tra_code(Request $r){

           $tra_code = Tyres::where('profile',$r->val)->select('tra_code')->groupBy('tra_code')->get();
            return $tra_code;

        }        

        public function get_brands_patterns(Request $r){

          $brand = TyresBrands::where('url',$r->val)->first();
           $pattern = TyresBrandsPatterns::where('brand_id',$brand->id)->get();
            return $pattern;
        }


        public function get_brands_patterns_list(Request $r){

          $brand = TyresBrands::where('url',$r->val)->first();
           $pattern = TyresBrandsPatterns::where('brand_id',$brand->id)->get();
            return $pattern;
        }        

        public function get_brands_patterns_list_by_id(Request $r){

           $pattern = TyresBrandsPatterns::where('brand_id',$r->val)->get();
            return $pattern;
        }        



        public function buy($brand,$pattern,$tyre,$id){


            $tyred = explode('&', $id); 
            $tyre = $tyred[0];

            $tyre = Tyres::where('id',$tyre)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->first();


            $price = $tyre->price * $tyre->min_quantity;

            $extra = ExtraOrderItems::where([
                    ['price_from', '<=', $price],
                    ['price_to', '>=', $price]
                ])->get();

            $brand = TyresBrands::where('url',$brand)->first();
            $pattern = TyresBrandsPatterns::where('url',$pattern)->first();
            return view('home.buy',compact('brand','pattern','tyre','extra'));
        }

        public function checkout(Request $r,$token){

            //dd($r);
            $tyre = Tyres::where('id',$r->tyre)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes','tyre_discounts')->first();


                    if(!empty($tyre->tyre_discounts)){
                
                        if($tyre->tyre_discounts->active==1){
                                $price = $tyre->price;
                                $price = $price * ($tyre->tyre_discounts->discount_percent/100);
                                $price =  $tyre->price - $price;                            
                        }else{
                            $price = $tyre->price;                            
                        }                    


                    }else{
                            $price = $tyre->price;                            
                } 


                    $price = round($price);


            $cartc = CheckoutCart::where('session_id',Session::getId())->first();
            if(empty($cartc)){


                    $newc = new CheckoutCart();
                    if(!Auth::check()){

                        $newc->session_id = Session::getId();

                    }else{
                        $newc->user_id = Auth::user()->id;
                        $newc->session_id = Session::getId();
                    }
                    $newc->quantity = $r->q;
                    $newc->brand = $r->q;
                    $newc->pattern = $r->q;
                    $newc->tyre = $r->q;
                    $newc->price = $r->q*$price;
                    $newc->save();    
                    $cart_id = $newc->id;


            }else{

                $cart_id = $cartc->id;

            }


            $quantity = $r->q;            
            
                
            $brand = TyresBrands::where('id',$r->brand)->first();
            $pattern = TyresBrandsPatterns::where('id',$r->pattern)->first();
            $vehicles = Vehicles::all();
            $provider = FinanceProvider::all();

            $price = $tyre->price * $tyre->min_quantity;

            $extra = ExtraOrderItems::where([
                    ['price_from', '<=', $price],
                    ['price_to', '>=', $price]
                ])->get();            


    $ship_discount = ShippingAddress::first();        
    return view('home.checkout',compact('brand','pattern','tyre','quantity','cart_id','vehicles','provider','price','extra','ship_discount'));
    
    }


        public function home_delivery_save(Request $r){
            
               $session = Session::getId();
               $chkh = HomeDelivery::where('session_id',$session)->first(); 
               if(!empty($chhk)){

                   $chkh->first_name = $r->firstName;
                   $chkh->last_name = $r->lastName;
                   $chkh->address_1 = $r->address1;
                   $chkh->address_2 = $r->address2;
                   $chkh->supurb = $r->supurb;
                   $chkh->state = $r->state;
                   $chkh->postcode = $r->postcode;
                   $chkh->save(); 
               }else{
                   $newh = new HomeDelivery();

                           if(!Auth::check()){

                        $newh->session_id = Session::getId();

                    }else{
                        $newh->user_id = Auth::user()->id;
                        $newh->session_id = Session::getId();
                    }

                    $newh->cart_id = $r->cart_id;
                   $newh->first_name = $r->firstName;
                   $newh->last_name = $r->lastName;
                   $newh->address_1 = $r->address1;
                   $newh->address_2 = $r->address2;
                   $newh->supurb = $r->suburb;
                   $newh->state = $r->state;
                   $newh->postcode = $r->postcode;
                   $newh->save(); 
               }

               return 'true';

        }

    public function customer_details_save(Request $r){

            if($r->email!=$r->email_confirm){

                return 'Email Doesnot Match';

            }else{


                $session = Session::getId();
               $chkh = CustomerDetail::where('session_id',$session)->first(); 
               if(!empty($chhk)){

                   $chkh->first_name = $r->customer_given_name;
                   $chkh->last_name = $r->customer_family_name;
                   $chkh->phone_number = $r->customer_phone_no;
                   $chkh->company = $r->customer_organization_name;
                   $chkh->email = $r->email;
                   $chkh->make = $r->make;
                   $chkh->model = $r->model;
                   $chkh->registration_number = $r->registration_number;
                   $chkh->save(); 
               

               }else{
                   $newh = new CustomerDetail();

                           if(!Auth::check()){

                        $newh->session_id = Session::getId();

                    }else{
                        $newh->user_id = Auth::user()->id;
                        $newh->session_id = Session::getId();
                    }

                   $newh->cart_id = $r->cart_id;
                   $newh->first_name = $r->customer_given_name;
                   $newh->last_name = $r->customer_family_name;
                   $newh->phone_number = $r->customer_phone_no;
                   $newh->company = $r->customer_organization_name;
                   $newh->email = $r->email;
                   $newh->make = $r->make;
                   $newh->model = $r->model;
                   $newh->registration_number = $r->registration_number;
                   $newh->save(); 
               }

               return 'true';


            }

      }  

      public function dealer_signup(){


        $page_title = 'Dealer Signup';
        
        $vehicles = Vehicles::get()->chunk(2);
        

                $data = get_footer_data();

        $all_vehicles_makes = $data['all_vehicles_makes'];

        $all_brands = $data['all_brands'];

        $all_sizes = $data['all_sizes'];

        $all_brand_sizes = $data['all_brand_sizes'];

        $all_truck_sizes = $data['all_truck_sizes'];

        $all_otr_sizes = $data['all_otr_sizes'];

        return view('home.dealer_signup',compact('page_title','vehicles','all_vehicles_makes','all_brands','all_sizes','all_brand_sizes','all_truck_sizes','all_otr_sizes'));


      }

      public function dealer_signup_post(Request $r){

            if(empty($r->terms_and_conditions)){
                alert()->error('Please check the terms & conditions.');
                return redirect()->back()->with(['error' => 'terms_and_conditions']);
            }else{
                $newd = new DealerSignup();
                $newd->first_name = $r->FirstName;
                $newd->last_name = $r->LastName;
                $newd->position = $r->Position;
                $newd->organization = $r->Organisation;
                $newd->phone = $r->Phone;
                $newd->email = $r->Email;
                $newd->address = $r->Address;
                $newd->city = $r->City;
                $newd->state = $r->State;
                $newd->post_code = $r->Postcode;
                $newd->dealership = $r->Dealership;

                if(!empty($r->PreferredVehicleMakeAll)){

                    $i[0] =  'All Makes';
                    $newd->prefered_vehicle = serialize($i);                    

                }else{
                    $newd->prefered_vehicle = serialize($r->PreferredVehicleMake);                    
                }


                $newd->save();
                alert()->success('Success. Thank you, we will contact you shortly...!!!');
                return redirect()->back();
            }

      }

      public function help_ask_an_expert(){

        $page_title = 'Ask An Expert';
        return view('home.help_ask_an_expert',compact('page_title'));

      }



      public function order_test(){
        return view('test.ordersummary');
      }


      public function get_postal_code(Request $request){
        



        $url ="https://maps.googleapis.com/maps/api/geocode/json?address=".$request->val."&key=AIzaSyBikMgCY_d1NwtVzeM4mIviqZBBDrAFEko&in_country=PK";
        $geocode  = file_get_contents($url);
        $curl_handle=curl_init();
        curl_setopt($curl_handle,CURLOPT_URL,$url);
        curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
        curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
    

        $data = json_decode($geocode ,true);  
/*        dd($data);*/
/*        return $data['results'];*/
        $array = [];
        $array['town'] = isset($data['results'])?$data['results'][0]['address_components'][1]['long_name']:'';
        $array['county'] = isset($data['results'])?$data['results'][0]['address_components'][3]['long_name']:'';        
        $array['country'] = isset($data['results'])?$data['results'][0]['address_components'][4]['long_name']:'';        
        return $array;

      }

      public function generate_barcode()
      {
        $random_number = rand(000000000000,999999999999);             
        $barcode = \DNS1D::getBarcodeSVG($random_number, 'C128');
        $data = [];
        $data['random_number'] = $random_number;
        $data['barcode'] = $barcode;        
        return $data;

      }

      public function change_status(Request $request)
      {

        DB::table($request->table)->where('id', $request->id)
       ->update([
           $request->column => $request->status
        ]);

      }


      public function get_vehicle_make(Request $request)
      {
        
            $make = VehiclesMake::where('make',$request->val)->get();
            return $make;
      }



}
