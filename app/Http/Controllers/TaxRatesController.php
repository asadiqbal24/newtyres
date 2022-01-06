<?php

namespace App\Http\Controllers;

use App\Models\TaxRates;
use Illuminate\Http\Request;
use App\Models\PaymentMethods;

class TaxRatesController extends Controller
{

public function tax_rates()
    {
        $page_title = 'Tax Rates';
        $tax=TaxRates::all();
        return view('admin.tax.rates',compact('page_title','tax'));
    }


    public function admin_tax_rates_save(Request $request)
    {
        //dd($request);
        
        $new= new TaxRates();
        $new->tax_code=$request->tax_code;
        $new->description=$request->description;
        $new->rate=$request->rate;
        $new->save();
        alert()->success("Tax Rates Save");
        return redirect()->back();
    }


    public function admin_tax_rate_delete($id)
    {
       $delete=TaxRates::where('id',$id)->delete();
       alert()->success("Tax Rate success Deleted");
       return redirect()->back();
    }

    public function admin_payment_methods()
    {
        
        $page_title="Payment Method";
          $payment=PaymentMethods::all();
         return view('admin.tax.admin_payment_methods',compact('page_title','payment'));
    }

    public function admin_add_new_payment()
    {
        $page_title="Add New Payment Method";
      
        return view('admin.tax.admin_add_new_payment',compact('page_title'));
    }

    public function admin_payment_save(Request $request)
    {
       //dd($request);

       $new = new PaymentMethods();
       $new->group_type=$request->group_type;
       $new->bank_nominal=$request->bank_nominal;
       $new->name=$request->name;
       $new->active=$request->payment_active;
       $new->surcharge_applicable=$request->surcharge_applicable;
       $new->save();
       alert()->success("Payment Method Added Successfully");
       return redirect()->route('admin-payment-methods');
    }


    public function admin_payment_edit($id)
    {
        $page_title="Payment Method Edit";
       $edit=PaymentMethods::where('id',$id)->first();
       return view('admin.tax.admin_payment_edit',compact('edit','page_title'));
    }

    public function admin_payment_update(Request $request)
    {
        $update=PaymentMethods::where('id',$request->id)->first();
        if (!empty($update)) {
            $update->group_type=$request->group_type;
            $update->bank_nominal=$request->bank_nominal;
            $update->name=$request->name;
            $update->active=$request->payment_active;
            $update->surcharge_applicable=$request->surcharge_applicable;
            $update->save();

        }
        alert()->success("Data Update Successfully");
        return redirect()->route('admin-payment-methods');
      
    }

    public function admin_payment_delete($id)
    {
        $delete=PaymentMethods::where('id',$id)->delete();
        alert()->success("Data Deleted Successfully");
        return redirect()->back();
    }




public function admin_taxes_rate_edit($id)
{
   $page_title="Tax Rate Edit";
   $edit=TaxRates::where('id',$id)->first();
   return view('admin.tax.admin_taxes_rate_edit',compact('edit','page_title'));
}

public function admin_tax_rate_update(Request $request)
{
    //dd($request);
    $update=TaxRates::where('id',$request->id)->first();
    if (!empty($update)) {
         $update->tax_code=$request->tax_code;
        $update->description=$request->description;
        $update->rate=$request->rate;
        $update->save();
       
    }
    alert()->success('Data Updated SuccessFully');
    return redirect()->route('admin.tax.rates');
}

}
