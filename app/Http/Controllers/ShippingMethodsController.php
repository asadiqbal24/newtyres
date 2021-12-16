<?php

namespace App\Http\Controllers;

use App\Models\ShippingMethods;
use Illuminate\Http\Request;
use App\Models\Regions;
use App\Models\Country;

class ShippingMethodsController extends Controller
{

    public function shipping_methods(){

        $page_title = 'Shipping Methods';
        $regions = Regions::all();
        $countries = Country::all();        
        $methods = ShippingMethods::all();
                  
        return view('admin.shipping_methods',compact('page_title','methods','regions','countries'));        

    }


    public function add_shipping_methods(){


       $page_title = 'Admin-Add-Shipment-Methods';
       $fun_type ='add';
       $method = NULL;
       return view('admin.add_shipping_methods',compact('page_title','fun_type','method'));        


    }

    public function shipping_method_save(Request $r){

        $chk_method = ShippingMethods::where('name',$r->name)->first();
        if(!empty($chk_method)){
            alert()->warning('Exists...!!!');
            }else{

                        $newc = new ShippingMethods();
                        $newc->name=$r->name;
                        $newc->distance_from=$r->distance_from;
                        $newc->distance_to=$r->distance_to;
                        $newc->price = $r->price;
                        $newc->save();
                        alert()->success('Added...!!!');
                }


                return redirect()->back();
           }

    public function shipping_address_delete($id){

                ShippingMethods::where('id',$id)->delete();
                alert()->success('Deleted...!!!'); 
                return redirect()->back();
    }

    public function shipping_address_edit($id){

       $page_title = 'Admin-Edit-Shipment-Methods';
       $fun_type ='edit';
       $method = ShippingMethods::where('id',$id)->first();
       return view('admin.add_shipping_methods',compact('page_title','fun_type','method'));        


    }    

    public function shipping_method_update(Request $r){



        $chk_method = ShippingMethods::where('name',$r->name)->where('id','!=',$r->id)->first();
        if(!empty($chk_method)){
            alert()->warning('Exists...!!!');
            }else{

                        $newc = ShippingMethods::where('id',$r->id)->first();
                        $newc->name=$r->name;
                        $newc->distance_from=$r->distance_from;
                        $newc->distance_to=$r->distance_to;
                        $newc->price = $r->price;
                        $newc->save();
                        alert()->success('Saved...!!!');
                }


                return redirect()->back();

    }

}
