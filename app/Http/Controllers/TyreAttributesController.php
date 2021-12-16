<?php

namespace App\Http\Controllers;

use App\Models\TyreAttributes;
use Illuminate\Http\Request;

class TyreAttributesController extends Controller
{


    public function tyres_attributes(){
        $tyres_attributes = TyreAttributes::paginate(25);
       $page_title = 'Admin-Tyres-TAttributes';
       return view('admin.tyres_attributes',compact('page_title','tyres_attributes'));        
    }


    public function tyres_attributes_save(Request $r){


                $check = TyreAttributes::where('name',$r->name)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = new TyreAttributes();
                        $newb->name=$r->name;
                        $url = str_replace(' ','-',$r->name);
                        $newb->url = strtolower($url); 
                        $newb->save();
                        alert()->success('Added...!!!');
            }        

            return redirect()->back();


    }


    public function delete_attribute($id){

            $delete = TyreAttributes::where('id',$id)->delete();
             alert()->success('Deleted...!!!');
            return redirect()->back();
    }


    public function tyres_attributes_update(Request $r){

                        $check = TyreAttributes::where('name',$r->edit_name)->where('id','!=',$r->id)->first();
        if(!empty($check)){
            alert()->warning('Exists...!!!');
        }else{


                        $newb = TyreAttributes::where('id',$r->id)->first();
                        $newb->name=$r->edit_name;
                        $url = str_replace(' ','-',$r->edit_name);
                        $newb->url = strtolower($url); 
                        $newb->save();
                        alert()->success('Saved...!!!');
            }        

            return redirect()->back();

    }

}
