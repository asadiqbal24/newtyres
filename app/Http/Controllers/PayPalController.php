<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use Auth;

use App\Models\CheckoutCart;
use App\Models\Banks;
use App\Models\OrderSummary;
use App\Models\CustomerDetail;
use App\Models\Tyres;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;
use App\Models\HomeDelivery;

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
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Models\ExtraOrderItems;
class PayPalController extends Controller
{
/**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function paywithpaypal($session)
    {

            $chkh = CheckoutCart::where('session_id',$session)->first(); 
            $chko  = OrderSummary::where('session_id',$session)->first();
            $customer  = CustomerDetail::where('session_id',$session)->first();
            $delivery = HomeDelivery::where('session_id',$session)->first();


            $brand =  TyresBrands::where('id',$chkh->brand)->first();
            $pattern =  TyresBrandsPatterns::where('id',$chkh->pattern)->first();
            $tyre =  Tyres::where('id',$chkh->tyre)->first();        
        return view('home.paypal',compact('chkh','tyre','customer','chko','brand','pattern'));
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success()
    {
            $session = Session::getId();
            $ref_id = $_GET['ref_id'];
            $ref_no = $ref_id;
            $chkh = CheckoutCart::where('session_id',$session)->first(); 
            $chko  = OrderSummary::where('session_id',$session)->first();
            $customer  = CustomerDetail::where('session_id',$session)->first();
            $delivery = HomeDelivery::where('session_id',$session)->first();
              $price = $chkh->price;
            $extra = ExtraOrderItems::where([
                    ['price_from', '<=', $price],
                    ['price_to', '>=', $price]
                ])->get(); 

                   $brand =  TyresBrands::where('id',$chkh->brand)->first();
                   $pattern =  TyresBrandsPatterns::where('id',$chkh->pattern)->first();
                   $tyre =  Tyres::where('id',$chkh->tyre)->first();        

                    if(empty($chko)){
    

                            $newo = new OrderSummary();

                    if(!Auth::check()){

                        $newo->session_id = Session::getId();

                    }else{
                        $newo->user_id = Auth::user()->id;
                        $newo->session_id = Session::getId();
                    }

                   $newo->cart_id = $chkh->id;
                   $newo->reference_id = $ref_no;
                   $newo->brand = $chkh->brand;
                   $newo->pattern = $chkh->pattern;
                   $newo->tyre = $chkh->tyre;
                   $newo->quantity = $chkh->quantity;
                   $newo->paypal_ref = $ref_id;
                   $newo->price = $chkh->price;
                   $newo->payment_via = 'PAYPAL';
                   $newo->order_completed = 1;
                   $newo->save(); 




            }else{
                $newo = $chko;
            }

                   $brand =  TyresBrands::where('id',$chkh->brand)->first();
                   $pattern =  TyresBrandsPatterns::where('id',$chkh->pattern)->first();
                   $tyre =  Tyres::where('id',$chkh->tyre)->first();

                   Session()->regenerate();                                     
                   return view('home.order_paypal_summary',compact('newo','chkh','bank','customer','brand','pattern','tyre','delivery','extra'));


    }

}
