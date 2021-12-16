<?php

namespace App\Http\Controllers;

use App\Models\ExtraOrderItems;
use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Country;


class ExtraOrderItemsController extends Controller
{

    public function extra_order_items(){

        $page_title = 'Shipping Methods';
        $regions = Regions::all();
        $countries = Country::all();        
        $methods = ExtraOrderItems::all();
                  
        return view('admin.tax_methods',compact('page_title','methods','regions','countries'));        

    }


    public function add_extra_order_items(){


       $page_title = 'Admin-Add-Shipment-Methods';
       $fun_type ='add';
       $method = NULL;
       return view('admin.add_tax_methods',compact('page_title','fun_type','method'));        


    }

    public function extra_order_items_save(Request $r){

        $chk_method = ExtraOrderItems::where('name',$r->name)->first();
        if(!empty($chk_method)){
            alert()->warning('Exists...!!!');
            }else{

                        $newc = new ExtraOrderItems();
                        $newc->name=$r->name;
                        $newc->price_from=$r->price_from;
                        $newc->price_to=$r->price_to;
                        $newc->tax = $r->tax;
                        $newc->description = $r->description;

                        if ($r->hasFile('image')) 
                            {

                            $destinationPath = public_path()."/images/tyres/";
                            $extension =  $r->file('image')->getClientOriginalExtension();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$r->file('image')->move($destinationPath,$fileName))
                            {
                                throw new \Exception("Failed Upload");                    
                            }

                            $picture = asset("/public/images/tyres/")."/".$fileName;
                            $newc->image = $picture;

                        }

                        $newc->save();
                        alert()->success('Added...!!!');
                }


                return redirect()->back();
           }

    public function extra_order_items_delete($id){

                ExtraOrderItems::where('id',$id)->delete();
                alert()->success('Deleted...!!!'); 
                return redirect()->back();
    }

    public function extra_order_items_edit($id){

       $page_title = 'Admin-Edit-Shipment-Methods';
       $fun_type ='edit';
       $method = ExtraOrderItems::where('id',$id)->first();
       return view('admin.add_tax_methods',compact('page_title','fun_type','method'));        


    }    

    public function extra_order_items_update(Request $r){



        $chk_method = ExtraOrderItems::where('name',$r->name)->where('id','!=',$r->id)->first();
        if(!empty($chk_method)){
            alert()->warning('Exists...!!!');
            }else{

                        $newc = ExtraOrderItems::where('id',$r->id)->first();
                        $newc->name=$r->name;
                        $newc->price_from=$r->price_from;
                        $newc->price_to=$r->price_to;
                        $newc->tax = $r->tax;
                        $newc->description = $r->description;                        

                        if ($r->hasFile('image')) 
                            {

                            $destinationPath = public_path()."/images/tyres/";
                            $extension =  $r->file('image')->getClientOriginalExtension();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$r->file('image')->move($destinationPath,$fileName))
                            {
                                throw new \Exception("Failed Upload");                    
                            }

                            $picture = asset("/public/images/tyres/")."/".$fileName;
                            $newc->image = $picture;

                        }

                        $newc->save();
                        alert()->success('Saved...!!!');
                }


                return redirect()->back();

    }

}
