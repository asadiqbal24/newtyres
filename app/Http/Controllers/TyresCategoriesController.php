<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TyresCategories;

class TyresCategoriesController extends Controller
{

	public function tyres_categories(){

	    $page_title = 'Admin-Tyres-Categories';
       $categories=TyresCategories::paginate(25);        
       return view('admin.tyres_categories',compact('page_title','categories'));

	}
   	
	public function tyre_category_save(Request $r){


		        $check_cat = TyresCategories::where('name',$r->name)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

                    $newc = new TyresCategories();
                    $newc->name=$r->name;
                    $newc->save();
                    alert()->success('Added...!!!');

         }
            return redirect()->back();


	}

		public function tyre_category_update(Request $r){

		        $check_cat = TyresCategories::where('name',$r->name)->where('id','!=',$r->edit_id)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

                    $newc = TyresCategories::where('id',$r->edit_id)->first();
                    $newc->name=$r->edit_name;
                    $newc->save();
                    alert()->success('Saved...!!!');

         }
            return redirect()->back();


	}

}
