<?php

namespace App\Http\Controllers;

use App\Models\MotRates;
use Illuminate\Http\Request;

class MotRatesController extends Controller
{
    
    public function mot_rates()
    {
        $page_title = 'MOT Rates';
        return view('admin.mot.rates',compact('page_title'));
    }

    public function admin_mote_rate_save(Request $request)
    {
        //dd($request);
        $new=new MotRates();
        $new->type=$request->type;
        $new->description=$request->description;
        $new->total_gross=serialize($request->total_gross);
        $new->tax_code=$request->tax_code;
        $new->outsourced=$request->outsourced;
        $new->apply_tax=$request->applytax;
        $new->cost=serialize($request->cost);
        $new->technician=$request->technician;
        $new->save();
        alert()->success("Moto Rate Saved Successfully");
        return redirect()->route('admin.dashboard');
        
    }
}
