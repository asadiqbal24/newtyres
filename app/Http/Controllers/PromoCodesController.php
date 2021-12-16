<?php

namespace App\Http\Controllers;

use App\Models\PromoCodes;
use App\Models\Tyres;
use App\Models\CheckoutCart;
use App\Models\PromoCodesValue;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Mail;
class PromoCodesController extends Controller
{

    public function admin_promo_codes(){
        $page_title = 'Admin-Promo Codes';
        $promotions = PromoCodes::orderBy('id','Desc')->paginate(15);      
        return view('admin.promocodes' ,compact('page_title','promotions'));
    }

    public function admin_add_promo_codes(){
        $page_title = 'Admin-Promotions-Add';        
        $promotion = NULL;
        $fun_type = 'add';
        return view('admin.promo_code_add' ,compact('page_title','promotion','fun_type')); 
    }

    public function admin_edit_promo_codes($id){
        $page_title = 'Admin-Promotions-Edit';        
        $promotion = PromoCodes::where('id',$id)->first();
        $fun_type = 'edit';
        $promocodes = PromoCodesValue::where('promo_id',$id)->get();
        return view('admin.promo_code_add' ,compact('page_title','promotion','fun_type','promocodes')); 
    }

    public function admin_delete_promo($id){
        $promotion = PromoCodes::where('id',$id)->delete();
        $promocodes = PromoCodesValue::where('promo_id',$id)->delete();

       alert()->success('Deleted...!!!');
       return redirect()->back();     

    }
    
    

    public function promo_code_save(Request $r){
 
         $new = new PromoCodes();
        $new->title = $r->name;
        $new->value = $r->value;
        $new->from = $r->from;
        $new->to = $r->to;
        $new->quantity = $r->quantity; 
        $new->save();

        for($i=0;$i<$r->quantity;$i++){

            $newp = new PromoCodesValue();
            $newp->promo_id = $new->id;
            $value = md5(date('Y-m-d').microtime());
            $value = substr($value,0,7);
            $val = strtoupper($value);
            $newp->value = $val; 
            $newp->save();

        }    


       alert()->success('Saved...!!!');
       return redirect()->back();     
    }

    public function promo_code_update(Request $r){

        $promotion = PromoCodes::where('id',$r->id)->first();
        $promotion->title = $r->name;
        $promotion->value = $r->value;
        $promotion->from = $r->from;
        $promotion->to = $r->to;
        $promotion->quantity = $promotion->quantity + $r->quantity; 
        $promotion->save();

        for($i=0;$i<$r->quantity;$i++){

            $newp = new PromoCodesValue();
            $newp->promo_id = $promotion->id;
            $value = md5(date('Y-m-d').microtime());
            $value = substr($value,0,7);
            $val = strtoupper($value);
            $newp->value = $val; 
            $newp->save();

        }    


       alert()->success('Saved...!!!');
       return redirect()->back();   

    }

    public function check_code(Request $r){

            $token = md5(date('Y-m-d').microtime());
            $user = User::where('email',$r->email)->first();
            if(empty($user)){

            return 'false';

            }else{
            $pro = PromoCodesValue::where('value',$r->promo_code_value)->where('user_id',$user->id)->first();

            if(!empty($pro)){

            $promo = PromoCodes::where('id',$pro->promo_id)->first();
            $date = date('Y-m-d');
            Session::put('promocode', $r->promo_code_value);

            if($promo->from <= $date &&  $promo->to >= $date){

            if($pro->status==1){
            $tyre = Tyres::where('id',$r->tyre_id)->with('tyre_category','tyre_brands','tyre_pattern','tyre_attributes')->first();
            $cartc = CheckoutCart::where('session_id',Session::getId())->first();
            if(empty($cartc)){


                return 'false';


            }else{

                $price = $cartc->price;
                $percent = $promo->value;
                $fprice = $price * ($percent/100); 
                $fprice = round($fprice); 



                $cartc->promo_code = $r->promo_code_value;
                $cartc->promo_value = $promo->value;
                $cartc->promo_final_amount = $fprice;
                $cartc->save();
                $cart_id = $cartc->id;
                return $cartc->price - $fprice;

            }

                                

            }else{

                return 'false';

            }

            }else{
                    return 'false';
            }

        }else{

            return 'false';
            
        }

        }

    }



    public function promocode_send($id){

        $page_title = 'Admin-Send-Promo-Code';        
        $promo = PromoCodes::where('id',$id)->first();
        $promovalues = PromoCodesValue::where('promo_id',$id)->where('status','0')->get();      
        $user = User::all();  
        return view('admin.promo_code_send' ,compact('page_title','promo','promovalues','user'));         


    }


    public function send_promocode(Request $r){


        $codes = $r->codes;
        $users = $r->users;

        if(sizeof($codes) > sizeof($users)){

            alert()->warning('Selected Codes Are Greater Than Selected Users');
            return redirect()->back();

        }elseif(sizeof($codes) < sizeof($users)){

            alert()->warning('Selected Users Are Greater Than Selected Codes');
            return redirect()->back();            

        }else{

            for($i=0;$i<sizeof($codes);$i++){

                $co = PromoCodesValue::where('id',$codes[$i])->first();
                $co->user_id = $users[$i];
                $co->status = 1;
                $co->save();

                $user = User::where('id',$users[$i])->select('email')->first();

                $pro = PromoCodes::where('id',$co->promo_id)->first();
                $data = ['message'=>$r->message,'code'=>$codes[$i],'percent'=>$pro->value,'expiry_date'=>$pro->to];
                
                if(Mail::send('mails.promo_send',['data'=>$data],function($mail) use ($user){
                    $mail->to($user->email,'Tyres & Sales')->from("tyres@baniaadam.com")->subject("Tyres & Sales Promo");
                })){}

            }



            alert()->success('Saved');
            return redirect()->back();            

        }


    }

}
