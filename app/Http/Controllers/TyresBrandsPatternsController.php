<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TyresBrands;
use App\Models\TyresBrandsPatterns;

class TyresBrandsPatternsController extends Controller
{

	public function tyre_brand_pattern_save(Request $r){

		$check = TyresBrandsPatterns::where('name',$r->name)->where('brand_id',$r->brand_id)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = new TyresBrandsPatterns();
                        $newb->name=$r->name;
                        $newb->brand_id = $r->brand_id;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url);                        
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();

	}


	public function delete_brand_pattern($id){

				$check = TyresBrandsPatterns::where('id',$id)->delete();
	                        alert()->success('Deleted...!!!');	
            return redirect()->back();	                        		

	}

	public function tyre_brand_pattern_update(Request $r){
	
		$check = TyresBrandsPatterns::where('name',$r->name)->where('brand_id',$r->brand_id)->where('id','!=',$r->id)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = TyresBrandsPatterns::where('id',$r->id)->first();
                        $newb->name=$r->edit_name;
                        $url = str_replace(' ','-',$r->edit_name);
                        $newb->url = strtolower($url); 
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();


	}

}
