<?php

namespace App\Http\Controllers;

use App\Models\TyreSize;
use Illuminate\Http\Request;

class TyreSizeController extends Controller
{


    public function tyres_size(){

        $page_title = 'Admin-Tyres-Sizes';
       $categories=TyreSize::paginate(25);        
       return view('admin.tyre_sizes',compact('page_title','categories'));

    }
    
    public function tyre_size_save(Request $r){


                $check_cat = TyreSize::where('name',$r->name)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

                    $newc = new TyreSize();
                    $newc->name=$r->name;
                    $newc->save();
                    alert()->success('Added...!!!');

         }
            return redirect()->back();


    }

        public function tyre_size_update(Request $r){

                $check_cat = TyreSize::where('name',$r->name)->where('id','!=',$r->edit_id)->first();
        if(!empty($check_cat)){
            alert()->warning('Exists...!!!');
        }else{

                    $newc = TyreSize::where('id',$r->edit_id)->first();
                    $newc->name=$r->edit_name;
                    $newc->save();
                    alert()->success('Saved...!!!');

         }
            return redirect()->back();


    }

}
