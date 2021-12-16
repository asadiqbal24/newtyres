<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;
use Validator;
use Alert;
use Auth;
use Illuminate\Support\Facades\Input;
use Redirect;

class SuppliersController extends Controller
{

    public function supplier()
    {

        $suppliers = Suppliers::paginate(15);  
        $page_title = 'Admin Supplier';
        return view('admin.supplier.index',compact('page_title','suppliers'));
    }


    public function edit_supplier($id)
    {
        $supplier = Suppliers::where('id',$id)->first();                    
        $page_title = 'Admin Edit Suppler';
        return view('admin.supplier.add',compact('page_title','supplier'));      

    }

    public function save_supplier(Request $request)
    {

        //dd($request);
        
        if($request->update){
             
             $str = md5(date('Y-m-d').microtime());
             $str = substr($str, 0,7);
                
            $result = Suppliers::where('id', $request->id)->update([
                
                'account_number' => isset($request->account_number)?$request->account_number:$str,
                'company' => $request->company,
                'name' => $request->name,
                'address' => serialize($request->address),
                'post_code' => $request->post_code,
                'telephone' => $request->telephone,
                'fax' => $request->fax,
                'email' => $request->email,
                'website' => $request->website,
                'stock_supplier' => $request->stock_supplier,
                'nominal_code' => $request->nominal_code,
                'credit_account' => $request->credit_account,
                'notes' => $request->notes,
                'credit_limit' => $request->credit_limit,
                'credit_terms' => $request->credit_term,
                
                ]);
                
                if ($result) {

                alert()->success('Saved');
                return redirect()->route('admin.supplier')->with('success', 'Updated');
    
                } else {
                    alert()->error('Registration Exists');
                    return redirect()->back()->with('error', 'Something went Wrong');
                }
            
        }else{

               
                $str = md5(date('Y-m-d').microtime());
                $str = substr($str, 0,7);
                
                
                if($request->id){
                    $email_check = Suppliers::where('email',$request->email)->where('id','!=',$request->id)->first();
                    if(!empty($email_check)){
                        return Redirect::back()->withErrors(['msg' => 'No data Found']);     
                    }

                    $new = Suppliers::where('id',$request->id)->first();                    
                }else{
                    $email_check = Suppliers::where('email',$request->email)->first();
                    if(!empty($email_check)){
                        return Redirect::back()->withErrors(['msg' => 'Email ALready Exist']);     
                    }
                    $new = new Suppliers();                        
                }

                $new->account_number = isset($request->account_number)?$request->account_number:$str;
                $new->company = $request->company;
                $new->name = $request->name;
                $new->address = serialize($request->address);
                $new->post_code = $request->post_code;
                $new->telephone = $request->telephone;
                $new->fax = $request->fax;
                $new->email = $request->email;
                $new->website = $request->website;
                $new->stock_supplier = $request->stock_supplier;
                $new->nominal_code = $request->nominal_code;
                $new->credit_account = $request->credit_account;
                $new->notes = $request->notes;
                $new->credit_limit = $request->credit_limit;
                $new->credit_terms = $request->credit_term;
                $new->save();

                  Alert::success('Saved');        
                  return redirect()->route('admin.supplier');     
            }
    }
    
        public function get_supplier_details(Request $request){
            
        $response = Suppliers::where('post_code', $request->val)->first();;
        return $response;
            
        }


        public function add_new_supplier()
        {
            $page_title = 'Admin Supplier';
            return view('admin.supplier.add',compact('page_title'));
        }
    

    }


