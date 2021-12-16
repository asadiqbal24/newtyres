<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Alert;
use Mail;

class ContactUsController extends Controller
{

        public function contact_us(){

            $page_title = 'Contact Us';
            return view('home.contact_us',compact('page_title'));

        }


        public function admin_contact_us(){

            $page_title = 'Contact Us';
            $queries = ContactUs::paginate('25');
            return view('admin.contact_us',compact('page_title','queries'));

        }

        public function admin_contact_us_reply($id){

        $page_title = 'Customer Contact Us Reply';
        
        $queries = ContactUs::where('id',$id)->first();
    
        return view('admin.customer_contact_us_reply',compact('page_title','queries'));


        }

        public function post_contact_us(Request $r){

            $contact = new ContactUs(); 
            $contact->uid = md5(date('Y-m-d').microtime());
            // $contact->name = $r->first_name.' '.$r->last_name;   
            $contact->email = $r->request_email ;  
            $contact->phone = $r->request_phone;   
            $contact->older_phone = $r->request_order_phone;
            $contact->subject = $r->request_subject;
            $contact->message = $r->request_description;

                    if ($r->hasFile('request_attachments')) 
                            {

                            $destinationPath = public_path()."/images/contactus/";
                            $extension =  $r->file('request_attachments')->getClientOriginalExtension();
                            $fileName = time();
                            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
                            if(!$r->file('request_attachments')->move($destinationPath,$fileName))
                            {
                                throw new \Exception("Failed Upload");                    
                            }

                            $picture = asset("/public/images/contactus")."/".$fileName;
                            $contact->attachments = $picture;

                        }


            $contact->save();


            $data = ['cname'=>$r->request_email,'enquiry'=>$r->subject,'message'=>$r->request_description];

            if(Mail::send('mails.new_tyre_not_found_query',['data'=>$data],function($mail) use ($contact){
                    $mail->to('info@tyreflicks.com.au','Tyres & Sales')->from("no-reply@tyreflicks.com.au")->subject("Tyres & Sales Order Summary");
                })){}   

            alert()->success('Submitted');
            return redirect()->back();
        }


        public function queries(){

            $page_title='::Admin-Queries';
            $queries = ContactUs::orderby('id','desc')->paginate(25);

            return view('admin.queries',compact('page_title','queries'));

        }

        public function save_query_reply(Request $r){

            $contact = ContactUs::where('id',$r->id)->first(); 
            $contact->reply = $r->query_reply;
            $contact->replied = 'true';
            $contact->save();

            $data = ['name'=>$contact->email,'message'=>$contact->message,'reply'=>$r->query_reply];
                if(Mail::send('mails.Query',['data'=>$data],function($mail) use ($contact){
                    $mail->to($contact->email,'Tyres & Sales')->from("info@tyreflicks.com.au")->subject("Tyres & Sales Query");
                })){}       

            alert()->success('Submitted');
            return redirect()->back();

        }

}
