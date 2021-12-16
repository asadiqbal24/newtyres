<?php

namespace App\Http\Controllers;

use App\Models\CheckoutCart;
use App\Models\Banks;
use App\Models\OrderSummary;
use App\Models\CustomerDetail;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\Tyres;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;
use App\Models\HomeDelivery;
use App\Models\FinanceProvider;
use App\Models\ShippingAddress;
/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Mail;
use App\Models\SelectedFitmentCenter;
use App\Models\PromoCodesValue;
use App\Models\ExtraOrderItems;
class CheckoutCartController extends Controller
{



    public function ordersummary(Request $r){

            $session = Session::getId();
            $chkh = CheckoutCart::where('session_id',$session)->first(); 
            
            if(empty($chkh)){
                return redirect()->route('home');
            }

            $chko  = OrderSummary::where('session_id',$session)->first();
            $customer  = CustomerDetail::where('session_id',$session)->first();
              
             if(empty($customer)){
                return redirect()->back();
            }  

            $delivery = HomeDelivery::where('session_id',$session)->first();
            $selected = SelectedFitmentCenter::where('session_id',$session)->with('fitment_locations_areas_center')->first();

            $shipping = ShippingAddress::first();

            $ref_no = md5(date('Y-m-d').microtime());
            $ref_no = substr($ref_no,0,9);
            $ref_no = strtoupper($ref_no);


            $brand =  TyresBrands::where('id',$chkh->brand)->first();
            $pattern =  TyresBrandsPatterns::where('id',$chkh->pattern)->first();
            $tyre =  Tyres::where('id',$chkh->tyre)->first();
            $tyre->stock_available  = $tyre->stock_available - $chkh->quantity;
            $tyre->save();

            $price = $chkh->price;

            $extra = ExtraOrderItems::where([
                    ['price_from', '<=', $price],
                    ['price_to', '>=', $price]
                ])->get(); 

                   $newo = new OrderSummary();
                   $newo->cart_id = $chkh->id;
                   $newo->reference_id = $ref_no;
                   $newo->brand = $chkh->brand;
                   $newo->pattern = $chkh->pattern;
                   $newo->tyre = $chkh->tyre;
                   if($tyre->on_sale==1){
                     $newo->discount_percentage = $tyre->sale_percentage;                    
                   }else{
                     $newo->discount_percentage = 0;                    
                   }
                   if(!empty($chkh->promo_code)){
                    $newo->promo_code = $chkh->promo_code;
                    $newo->promo_percentage = $chkh->promo_value;
                    $newo->price = $chkh->price - $chkh->promo_final_amount;

                    $pro = PromoCodesValue::where('value',$chkh->promo_code)->first();
                    $pro->status=2;
                    $pro->used_at = date('Y-m-d h:i:s');
                     $pro->used_for = $chkh->tyre;
                    $pro->save();

                   }else{
                   $newo->price = $chkh->price;                    
                   }  

                   $newo->quantity = $chkh->quantity;

                   $newo->estimated_delivery_date = date('Y-m-d', strtotime('+7 days'));
                   $newo->estimated_delivery_days = 7;
                   $newo->order_completed = 1;       

                    if(!Auth::check()){
                        $newo->session_id = Session::getId();
                    }else{
                        $newo->user_id = Auth::user()->id;
                        $newo->session_id = Session::getId();
                    }
                          

                        

        if($r->paymentType=='PAYPAL'){
            $newo->payment_via = 'PAYPAL';  
            $newo->save();         
            return redirect()->route('paywithpaypal',['session'=>$session]);
        }

        if($r->paymentType=='EFT'){

            $bank = Banks::where('default_b','1')->first();




            if(empty($chko)){
  

                    if(!Auth::check()){

                        $newo->session_id = Session::getId();

                    }else{
                        $newo->user_id = Auth::user()->id;
                        $newo->session_id = Session::getId();
                    }


                   $newo->payment_via = 'EFT';
                   $newo->bank_id = $bank->id;
                                              $newo->save(); 


            }else{
                $newo = $chko;
            }

                   $brand =  TyresBrands::where('id',$chkh->brand)->first();
                   $pattern =  TyresBrandsPatterns::where('id',$chkh->pattern)->first();
                   $tyre =  Tyres::where('id',$chkh->tyre)->first();

                $cname = $customer->first_name.' '.$customer->last_name;   
                $data = ['cname'=>$cname,'quantity'=>$chkh->quantity,'brand'=>$brand->name,'pattern'=>$pattern->name,'tyre_name'=>$tyre->name];
                
                if(Mail::send('mails.order_summary',['data'=>$data],function($mail) use ($customer){
                    $mail->to($customer->email,'Tyres & Sales')->from("no-reply@tyreflicks.com.au")->subject("Tyres & Sales Order Summary");
                })){}                   

                    Session::put('old_session', Session::getId());
                   Session()->regenerate();                  
                   return view('home.order_summary',compact('newo','chkh','bank','customer','brand','pattern','tyre','delivery','selected','shipping','extra'));

        }elseif($r->paymentType=='LEASE'){

                   $newo->lease_provider_id = $r->lease_finance_provider; 
                   $newo->payment_via = 'LEASE';

                   $provider = FinanceProvider::where('id',$r->lease_finance_provider)->first();
                   $price = $chkh->price;
                           $newo->save(); 

                            $extra = ExtraOrderItems::where([
                    ['price_from', '<=', $price],
                    ['price_to', '>=', $price]
                ])->get(); 


                $cname = $customer->first_name.' '.$customer->last_name;   
                $data = ['cname'=>$cname,'quantity'=>$chkh->quantity,'brand'=>$brand->name,'pattern'=>$pattern->name,'tyre_name'=>$tyre->name];
                
/*                if(Mail::send('mails.order_summary',['data'=>$data],function($mail) use ($user){
                    $mail->to($user->email,'Tyres & Sales')->from("no-reply@tyreflicks.com.au")->subject("Tyres & Sales Order Summary");
                })){} */

                   Session()->regenerate();                                    
                   return view('home.lease_provider_summary',compact('newo','chkh','provider','customer','brand','pattern','tyre','delivery','extra'));

                   
        }


    }


}
