<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Area;
use Session;
class ReviewsController extends Controller
{


    public function reviews(){

        $page_title = 'Reviews';

        if(!empty(Session::get('front_area_id'))){
            $area_id = Session::get('front_area_id');
        }else{
            $area_id = getIp();            
        }
 $zip_length = Session::get('zip_length');


        $reviews = Reviews::orderBy('id','Desc')->get();
        $settings = Settings::where('area_id',$area_id)->whereIn('key_term', array('expert_numbers','section_footer'))->get();                
        return view('home.reviews',compact('page_title','settings','reviews','zip_length'));

    }

    public function save_review(Request $r){
            
            $rev = new Reviews();
            $rev->name = $r->name;
            $rev->email = $r->email;
            $rev->summary = $r->summary;
            $rev->reviews = $r->review;
            $rev->rating = 3;
            $rev->save();

            alert()->success('Saved');
            return redirect()->back();

    }

}
