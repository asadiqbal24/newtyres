<?php

namespace App\Http\Controllers;

use App\Models\CustomerTyreNotFound;
use Illuminate\Http\Request;
use Auth;
use Mail;

class CustomerTyreNotFoundController extends Controller
{


    public function save_not_found(Request $r){
        $new = new CustomerTyreNotFound();
        if(Auth::check()){
            $new->user_id = Auth::user()->id;
        }

        $new->name = $r->Name;
        $new->email = $r->Email;
        $new->phone = $r->Phone;
        $new->make = $r->Make;
        $new->poscode = $r->Postcode;
        $new->comments = $r->Comments;        
        $new->save();

            $data = ['cname'=>$r->Name,'enquiry'=>$r->Comments];

            if(Mail::send('mails.new_tyre_not_found_query',['data'=>$data],function($mail) use ($customer){
                    $mail->to('info@tyreflicks.com.au','Tyres & Sales')->from("info@tyreflicks.com.au")->subject("Tyres & Sales Order Summary");
                })){}    


        return redirect()->back();
    }


    public function tyre_not_found(){

        $page_title = 'Customer Queries';
        
        $queries = CustomerTyreNotFound::orderBy('id','desc')->with('vehicle_d')->paginate(25);
                  
        return view('admin.customer_query',compact('page_title','queries'));

    }


    public function delete_tyre_not_found($id){

               $queries = CustomerTyreNotFound::where('id',$id)->delete();
               alert()->success('Deleted...!!!');

               return redirect()->back();

    }   

    public function reply_tyre_not_found($id){
        
        $page_title = 'Customer Queries Reply';
        
        $queries = CustomerTyreNotFound::where('id',$id)->first();
                  
        return view('admin.customer_query_reply',compact('page_title','queries'));


    }


}
