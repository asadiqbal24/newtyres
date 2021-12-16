<?php

namespace App\Http\Controllers;

use App\Models\Tyres;
use App\Models\TyresDiscounts;
use App\Models\Settings;
use Illuminate\Http\Request;
use DB;

class TyresDiscountsController extends Controller
{


    public function site_discounts(){
       $page_title = 'Admin-Discounts';
       $tyre = Tyres::count();
       $fun_type = 'add';
       $site_discounts = Settings::where('key_term','site_discounts')->first();
       $site_discounts_name = Settings::where('key_term','site_discounts_name')->first();
       $site_discounts_value = Settings::where('key_term','site_discounts_value')->first();
       return view('admin.add_site_discounts',compact('page_title','tyre','fun_type','site_discounts','site_discounts_name','site_discounts_value'));
    }

    public function savesite_discounts(Request $r){


    	$site_discounts=Settings::where('key_term','site_discounts')->first();
        
        if(empty($site_discounts)){
            Settings::insert(['key_term'=>'site_discounts']);
            Settings::where('key_term','site_discounts')->update(['value' => $r->site_discounts]);
        }else{
            Settings::where('key_term','site_discounts')->update(['value' => $r->site_discounts]);            
        }

        $site_discounts_name=Settings::where('key_term','site_discounts_name')->first();
        
        if(empty($site_discounts_name)){
            Settings::insert(['key_term'=>'site_discounts_name']);
            Settings::where('key_term','site_discounts_name')->update(['value' => $r->site_discounts_name]);
        }else{
            Settings::where('key_term','site_discounts_name')->update(['value' => $r->site_discounts_name]);            
        }

        $site_discounts_value=Settings::where('key_term','site_discounts_value')->first();
        
        if(empty($site_discounts_value)){
            Settings::insert(['key_term'=>'site_discounts_value']);
            Settings::where('key_term','site_discounts_value')->update(['value' => $r->site_discounts_value]);
        }else{
            Settings::where('key_term','site_discounts_value')->update(['value' => $r->site_discounts_value]);            
        }

        if($r->site_discounts=='1'){
        	DB::beginTransaction();
        	$tyres = Tyres::select('id')->get();
        	foreach($tyres as $t){

        		$ty = DB::table('tyres')->where('id', $t->id)
			       ->update([
			           'on_sale' => 1,
			           'sale_percentage'=>$r->site_discounts_value
			        ]);

			       $chkd = TyresDiscounts::where('tyre_id',$t->id)->first();
			       if(!empty($chkd)){

			       	$td = DB::table('tyre_discounts')->where('tyre_id', $t->id)
			       ->update([
			           'discount_name' => $r->site_discounts_name,
			           'discount_percent'=>$r->site_discounts_value,
			            'active' => '1'
			        ]);

			       }else{

			       		$td = DB::table('tyre_discounts')->where('tyre_id', $t->id)
				       ->insert([
				           'discount_name' => $r->site_discounts_name,
				           'discount_percent'=>$r->site_discounts_value,
				           'tyre_id'=>$t->id,
				           'active' => '1'
				        ]);

			       }
        	}

        	DB::commit();	

        }else{


        	DB::beginTransaction();
        	$tyres = Tyres::select('id')->get();
        	foreach($tyres as $t){

        		$ty = DB::table('tyres')->where('id', $t->id)
			       ->update([
			           'on_sale' => 0,
			           'sale_percentage'=>0
			        ]);

			       
        	}
        	$chkd = DB::table('tyre_discounts')->truncate();
        	DB::commit();



        }
        alert()->success('Updated');
        return redirect()->back();
    }

}
