<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Input;
use Alert;
use Auth;
use App\Models\Payment;
class CustomerDetailController extends Controller
{

    public function add_new_customer()
    {
        $page_title = 'Add New Customer';
       
        return view('admin.add_new_customer',compact('page_title'));
    }

    public function admin_edit_customer($id)
    {
        $page_title = 'Edit Customer';
        $customer = Customer::where('id',$id)->first();
        $customer_details = CustomerDetail::where('customer_id',$id)->first();

        return view('admin.add_new_customer',compact('page_title','customer','customer_details'));
    }



    public function customer_index(Request $request)
    {




        //  $customers = Customer::orderBy('id','desc')->select('account_number','first_name','middle_name','last_name','postal_code','id','house_no','road','locality','town','county')->paginate(30);

        $customers = Customer::select();

                //apply filter here

        // use request variable for search

        if($request->customer_search){
            $customers = $customers->where('account_number', 'like', '%'.$request->customer_search.'%')->orWhere('company', 'like', '%'.$request->customer_search.'%')->orWhere('first_name', 'like', '%'.$request->customer_search.'%')->orWhere('middle_name', 'like', '%'.$request->customer_search.'%')->orWhere('last_name', 'like', '%'.$request->customer_search.'%');           
        }

         if($request->search){
            $customers = $customers->where('account_number', 'like', $request->search.'%');           
         }
        
        $customers = $customers->orderBy('id','desc');

        if($request->records){
            if($request->records=='all'){
                $customers = $customers->paginate($customers->count());
            }else{
                $customers = $customers->paginate($request->records);                
            }

        }else{
            $customers = $customers->paginate(30);            
        }

        
        $page_title = 'Customer';
        
        return view('admin.customer_index',compact('page_title','customers','request'));

    }


    public function advanced_search()
    {

        $page_title = 'Advanced Search';
        return view('admin.advanced_search',compact('page_title'));

	
    }

    public function admin_account_number()
    {

        $page_title = 'Account Manager';

        $invoice=CustomerDetail::where('credit_account',1)->with('customer')->paginate(5);
        return view('admin.customer.account_manager',compact('page_title','invoice'));        

    }

    public function save_new_customer(Request $request)
    {


 // dd($request);
      $this->validate($request,[
         'first_name'=>'required',
         'last_name'=>'required',
         'house_no'=>'required',
         'postcode'=>'required',
         'road'=>'required',
         'locality'=>'required',
         'town'=>'required',
        'county'=>'required',
        'telephone'=>'required',
        'mobile'=>'required',
        'town'=>'required',
        'email'=>'required',

      ]);
             

        // $validator = Validator::make(
        //         [
        //               "first_name" => $request->first_name,
        //               "last_name" => $request->last_name,
        //               "house_no" => $request->house_no,
        //               "postcode" => $request->postcode,
        //               "road" => $request->road,
        //               "locality" => $request->locality,
        //               "town" => $request->town,
        //               "county" => $request->county,
        //               "telephone" => $request->telephone,
        //               "mobile" => $request->mobile,
        //               "email" => $request->email,

        //         ],
        //         [
        //               "first_name" => 'required',
        //               "last_name" => 'required',
        //               "house_no" => 'required',
        //               "postcode" => 'required',
        //               "road" => 'required',
        //               "locality" => 'required',
        //               "town" => 'required',
        //               "county" => 'required',
        //               "telephone" => 'required',
        //               "mobile" => 'required',
        //               "email" => 'required|email',
        //         ]
        //     );

            // if ($validator->fails())
            // {
            //       alert()->error($validator->errors()->first());        
            //       return redirect()->back()->withError([$validator->errors()])->withInput(Input::all())->with('v_errors',$validator->errors());                
            // }



            // else{


                $str = md5(date('Y-m-d').microtime());

                $str = substr($str, 0,7);

                if($request->id){

                    $email_check = Customer::where('email',$request->email)->where('id','!=',$request->id)->first();

                    if(!empty($email_check)){
                        alert()->error('Email Exits');        
                        return redirect()->back();
                    }

                    $new = Customer::where('id',$request->id)->first();                    
                }else{

                    $email_check = Customer::where('email',$request->email)->first();

                    if(!empty($email_check)){
                        alert()->error('Email Exits');        
                        return redirect()->back();
                    }
                    $new = new Customer();                        
                 }


                $new->account_number = isset($request->account_number)?$request->account_number:$str;
                $new->company = $request->company;
                $new->first_name = $request->first_name;
                $new->middle_name = $request->middle_name;
                $new->last_name = $request->last_name;
                $new->house_no = $request->house_no;
                $new->postal_code = $request->postcode;
                $new->road = $request->road;
                $new->locality = $request->locality;
                $new->town = $request->town;
                $new->county = $request->county;
                $new->telephone = $request->telephone;
                $new->mobile = $request->mobile;
                $new->email = $request->email;


                 $new->save();

                if($request->id){
                    $customer_d = CustomerDetail::where('id',$request->id)->first();                    
                    if(empty($customer_d)){
                        $customer_d = new CustomerDetail();                                                
                    }

                }else{
                    $customer_d = new CustomerDetail();                        
                }


                $customer_d->customer_id = $new->id;
                $customer_d->credit_limit = $request->credit_limit;
                $customer_d->credit_terms = $request->credit_terms;
                $customer_d->alternate_contact_1 = $request->alternate_contact_1;
                $customer_d->telephone_1 = $request->telephone_1;
                $customer_d->alternate_contact_2 = $request->alternate_contact_2;
                $customer_d->telephone_2 = $request->telephone_2;
                $customer_d->alternate_contact_3 = $request->alternate_contact_3;
                $customer_d->telephone_3 = $request->telephone_3;
                $customer_d->further_info_1 = $request->further_info_1;
                $customer_d->further_info_2 = $request->further_info_2;
                $customer_d->further_info_3 = $request->further_info_3;
                $customer_d->how_found_us = $request->how_found_us;
                $customer_d->last_invoiced = $request->last_invoiced;
                $customer_d->description = $request->description;
                $customer_d->labour_rate = $request->labour_rate;
                $customer_d->labour_discount = $request->labour_discount;
                $customer_d->trade_parts_rate = $request->trade_parts_rate;
                $customer_d->parts_discount = $request->parts_discount;
                $customer_d->force_tax_code_usage = $request->force_tax_code_usage;
                $customer_d->allow_remainders = $request->allow_remainders;
                $customer_d->allow_mass_mailings = $request->allow_mass_mailings;
                $customer_d->allow_indivual_email = $request->allow_indivual_email;
                $customer_d->allow_indivual_sms = $request->allow_indivual_sms;
                $customer_d->settings = $request->settings;
                $customer_d->credit_account = $request->credit_account;
                $customer_d->notes = $request->notes;
                $customer_d->customer_type = $request->customer_type;
                $customer_d->save();

                  Alert::success('Saved');        
                  return redirect()->route('admin.customers');     
            
    }


    public function manage_receipts(){

        $payments = Payment::all();
        $page_title = 'Admin Manage Receipts';
        return view('admin.customer.manage_receipts',compact('page_title','payments'));

    }


    public function new_manage_receipt($id)
    {
         $page_title = 'New Manage Receipts';
        $customer_account=CustomerDetail::where('customer_id',$id)->with('customer')->first();
        $FourDigitRandomNumber = mt_rand(1111,9999);
          $payment=Payment::where('customer_id',$id)->get();
          return view('admin.customer.new_manage_receipt',compact('customer_account','page_title','FourDigitRandomNumber','payment'));
    }

    public function payment_save(Request $request)
    {
        
          $random_number=rand(10,100000);
                $customers=CustomerDetail::where('customer_id',$request->customer_id)->with('customer')->first();
                if (!empty($customers)) {
                $payment = new Payment();
                $payment->customer_id=$request->customer_id;
                $payment->method=$request->payment_method;
                $payment->amount=$request->amount;
                $payment->date=$request->date;
                $payment->description=$request->description;
                $payment->payment_id=$random_number;
                 $payment->balance=$request->amount;
                $payment->save();
                alert()->success('Data Insert');
                }else{
                    alert()->warning('Customer Not Exist');
                }
             return redirect()->back();


    }

    public function payment_update(Request $request)
    {
         $id=$request->id;
         $updates=Payment::where('id',$id)->first();
         if (!empty($updates)) {
            //dd($updates);
            $updates->method=$request->method;
            $updates->amount=$request->amount;
            $updates->date=$request->date;
            $updates->description=$request->description;
            $updates->balance=$request->amount;
            $updates->save();
            alert()->success("Payment is Updated success");
         }
         else{
            alert()->warning("Payment not Exist");
         }
         return redirect()->back();

    }

    public function admin_customer_edit($id)
    {
        $page_title = 'Customer Edit';
       $edit=CustomerDetail::where('customer_id',$id)->with('customer')->first();
      // dd($edit);
       return view('admin.accounts.customeredit',compact('edit','page_title'));
    }

    public function admin_customer_update(Request $request)
    {
       $updates=CustomerDetail::where('customer_id',$request->id)->first();
       if (!empty($updates)) {  

                $updates->credit_limit = $request->credit_limit;
                $updates->credit_terms = $request->credit_terms;
                $updates->alternate_contact_1 = $request->alternate_contact_1;
                $updates->telephone_1 = $request->telephone_1;
                $updates->alternate_contact_2 = $request->alternate_contact_2;
                $updates->telephone_2 = $request->telephone_2;
                $updates->alternate_contact_3 = $request->alternate_contact_3;
                $updates->telephone_3 = $request->telephone_3;
                $updates->further_info_1 = $request->further_info_1;
                $updates->further_info_2 = $request->further_info_2;
                $updates->further_info_3 = $request->further_info_3;
               
                $updates->how_found_us = $request->how_found_us;
                $updates->last_invoiced = $request->last_invoiced;
                $updates->description = $request->description;
                $updates->labour_rate = $request->labour_rate;
                $updates->labour_discount = $request->labour_discount;
                $updates->trade_parts_rate = $request->trade_parts_rate;
                $updates->parts_discount = $request->parts_discount;
                $updates->force_tax_code_usage = $request->force_tax_code_usage;
                $updates->allow_remainders = $request->allow_remainders;
                $updates->allow_mass_mailings = $request->allow_mass_mailings;
                $updates->allow_indivual_email = $request->allow_indivual_email;
                $updates->allow_indivual_sms = $request->allow_indivual_sms;
                $updates->settings = $request->settings;
                $updates->credit_account = $request->credit_account;
                $updates->notes = $request->notes;
                $updates->customer_type = $request->customer_type;
                $updates->save();
       }


       $cutomerupdate = Customer::where('id',$request->id)->first();    
       if (!empty($cutomerupdate)) {
               $cutomerupdate->account_number = $request->account_number;
                $cutomerupdate->company = $request->company;
                $cutomerupdate->first_name = $request->first_name;
                $cutomerupdate->middle_name = $request->middle_name;
                $cutomerupdate->last_name = $request->last_name;
                $cutomerupdate->house_no = $request->house_no;
                $cutomerupdate->postal_code = $request->postcode;
                $cutomerupdate->road = $request->road;
                $cutomerupdate->locality = $request->locality;
                $cutomerupdate->town = $request->town;
                $cutomerupdate->county = $request->county;
                $cutomerupdate->telephone = $request->telephone;
                $cutomerupdate->mobile = $request->mobile;
                $cutomerupdate->email = $request->email;
                $cutomerupdate->save();

       }
       alert()->success("Data Updated SuccessFully");
       return redirect()->route('admin.account.manager');
    }

}
