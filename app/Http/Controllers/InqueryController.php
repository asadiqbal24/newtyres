<?php

namespace App\Http\Controllers;

use App\Models\Inquery;
use Illuminate\Http\Request;
use Auth;
use Mail;
class InqueryController extends Controller
{


    public function post_inquery(Request $r)
    {
        $new = new Inquery();
        if(Auth::check()){
            $new->user_id = Auth::user()->id;
        }

        $new->name = $r->contactName;
        $new->email = $r->email;
        $new->phone = $r->phone;
        $new->comments = $r->enquiry;
        $new->save();

/*$data = ['cname'=>$r->Name,'enquiry'=>$r->enquiry];

            if(Mail::send('mails.new_tyre_not_found_query',['data'=>$data],function($mail) use ($customer){
                    $mail->to('info@tyreflicks.com.au','Tyres & Sales')->from("no-reply@tyreflicks.com.au")->subject("Tyres & Sales Order Summary");
                })){}   */ 

        return redirect()->back();
    }

    public function admin_inqueries($value='')
    {
        $page_title = 'Customer Queries';
        
        $queries = Inquery::orderBy('id','desc')->paginate(25);
                  
        return view('admin.inqueries',compact('page_title','queries'));

    }

    public function inquery_reply($id){
        $page_title = 'Customer Queries Reply';
        
        $queries = Inquery::where('id',$id)->first();
    
        return view('admin.customer_query_reply_2',compact('page_title','queries'));

    }


    public function inquery_delete($id){        
        $queries = Inquery::where('id',$id)->delete();
        alert()->success('Deleted...!!!');

        return redirect()->back();
    }

}
