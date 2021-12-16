<?php

namespace App\Http\Controllers;

use App\Models\LabourRates;
use Illuminate\Http\Request;
use App\Models\SetLabourRate;

class LabourRatesController extends Controller
{
    public function labour_rates()
    {
        $page_title = 'Labour Rates';
        $labour=SetLabourRate::first();
        return view('admin.labour.rates',compact('page_title','labour'));
    }

    public function admin_labour_rate_save(Request $request)
    {
        $new=SetLabourRate::where('id',$request->id)->first();
        if (empty($new)) {
       $new= new SetLabourRate();
       $new->labur_rate=$request->labur_rate;
       $new->default_part_rate=$request->default_part_rate;
       $new->parts_markup=$request->parts_markup;
       $new->parts_markup_method=$request->parts_markup_method;
       $new->parts_markup_calculated=$request->parts_markup_calculated;
       $new->save();
        }
        else{
         $new->labur_rate=$request->labur_rate;
       $new->default_part_rate=$request->default_part_rate;
       $new->parts_markup=$request->parts_markup;
       $new->parts_markup_method=$request->parts_markup_method;
       $new->parts_markup_calculated=$request->parts_markup_calculated;
       $new->save();   
        }
       //dd($request);
       alert()->success("Labout Rate Save Successfully");
       return redirect()->route('admin.dashboard');
    }
}
