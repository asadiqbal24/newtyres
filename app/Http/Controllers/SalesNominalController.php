<?php

namespace App\Http\Controllers;

use App\Models\SalesNominal;
use Illuminate\Http\Request;
use App\Models\SaleNomial;

class SalesNominalController extends Controller
{

    public function sales_nominals()
    {
        $page_title = 'Sales Nominal';
        $sale=SaleNomial::orderby('id','DESC')->first();
       // dd($sale);
        return view('admin.sales.nominal',compact('page_title','sale'));
    }

    public function sale_nomial_save(Request $request)
    {
        //dd($request);
        
        $new=SaleNomial::first();
        if (empty($new)) {
            $new=new SaleNomial();
            $new->labour_standard=$request->labour_standard;
            $new->labour_account=$request->labour_account;
            $new->labour_sublet_standard=$request->labour_sublet_standard;
            $new->labour_sublet_account=$request->labour_sublet_account;
            $new->parts_standard=$request->parts_standard;
            $new->parts_account=$request->parts_account;
            $new->mot_standard=$request->mot_standard;
            $new->mot_account=$request->mot_account;
            $new->mot_sublet_standard=$request->mot_sublet_standard;
            $new->mot_sublet_account=$request->mot_sublet_account;
            $new->sundries_standard=$request->sundries_standard;
            $new->sundries_account=$request->sundries_account;
            $new->lubricants_standard=$request->lubricants_standard;
            $new->lubricants_account=$request->lubricants_account;
            $new->paint_standard=$request->paint_standard;
            $new->paint_account=$request->paint_account;
            $new->excess_standard=$request->excess_standard;
            $new->excess_account=$request->excess_account;
            $new->vehicle_exchange_standard=$request->vehicle_exchange_standard;
            $new->vehicle_exchange_account=$request->vehicle_exchange_account;
            $new->vehicle_purchase_standard=$request->vehicle_purchase_standard;
            $new->vehicle_purchase_account=$request->vehicle_purchase_account;
            $new->vehicle_sale_standard=$request->vehicle_sale_standard;
            $new->vehicle_sale_account=$request->vehicle_sale_account;
            $new->surcharge_standard=$request->surcharge_standard;
            $new->surcharge_account=$request->surcharge_account;
            $new->Save(); 
        }else{

            $new->labour_standard=$request->labour_standard;
            $new->labour_account=$request->labour_account;
            $new->labour_sublet_standard=$request->labour_sublet_standard;
            $new->labour_sublet_account=$request->labour_sublet_account;
            $new->parts_standard=$request->parts_standard;
            $new->parts_account=$request->parts_account;
            $new->mot_standard=$request->mot_standard;
            $new->mot_account=$request->mot_account;
            $new->mot_sublet_standard=$request->mot_sublet_standard;
            $new->mot_sublet_account=$request->mot_sublet_account;
            $new->sundries_standard=$request->sundries_standard;
            $new->sundries_account=$request->sundries_account;
            $new->lubricants_standard=$request->lubricants_standard;
            $new->lubricants_account=$request->lubricants_account;
            $new->paint_standard=$request->paint_standard;
            $new->paint_account=$request->paint_account;
            $new->excess_standard=$request->excess_standard;
            $new->excess_account=$request->excess_account;
            $new->vehicle_exchange_standard=$request->vehicle_exchange_standard;
            $new->vehicle_exchange_account=$request->vehicle_exchange_account;
            $new->vehicle_purchase_standard=$request->vehicle_purchase_standard;
            $new->vehicle_purchase_account=$request->vehicle_purchase_account;
            $new->vehicle_sale_standard=$request->vehicle_sale_standard;
            $new->vehicle_sale_account=$request->vehicle_sale_account;
            $new->surcharge_standard=$request->surcharge_standard;
            $new->surcharge_account=$request->surcharge_account;
            $new->save();

        }
        alert()->success('Data Inserted SuccessFully');
        return redirect()->back();
    }

}
