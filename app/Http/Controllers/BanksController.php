<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use Illuminate\Http\Request;

class BanksController extends Controller
{

    
    public function banks(){

        $page_title='Admin-Banks';
        $banks = Banks::all(); 
        return view('admin.banks',compact('page_title','banks'));

    }


    public function add_bank(Request $r){

        $bank = Banks::where('name',$r->name)->where('account_name',$r->account_name)->where('account_number',$r->account_no)->first();
        if(!empty($bank))
        {
            alert()->error('Already Exist');        
            return redirect()->back();                
        }else{
        $banks = new Banks;
        $banks->uid = md5(date('Y-m-d').microtime());
        $banks->name = $r->name;
        $banks->bal = 0;
        $banks->account_name = $r->account_name;
        $banks->account_number = $r->account_no;
        $banks->bsb = $r->bsb;
        $banks->date = date('Y-m-d');
        $banks->status = '1';
        $banks->save();

        alert()->success('Saved');        
        return redirect()->back();                

        }

    }


    public function bank_delete($id){


        $bank = Banks::where('id',$id)->delete();
        alert()->success('Deleted');
            return redirect()->back();                

    }


    public function bank_default($id){


        $bank = Banks::where('default_b','1')->update([
           'default_b' => '0'
        ]);

        $bank = Banks::where('id',$id)->first();
        $bank->default_b = 1;
        $bank->save();

        alert()->success('Success');
        return redirect()->back();                


    }



    public function edit_bank(Request $r){

        $bank = Banks::where('id','!=',$r->bank_id)->where('name',$r->name)->where('account_name',$r->account_name)->where('account_number',$r->account_no)->first();
        if(!empty($bank))
        {
            alert()->error('Already Exist');        
            return redirect()->back();                
        }else{
            
        $banks = Banks::where('id',$r->bank_id)->first();
        $banks->name = $r->name;
        $banks->account_name = $r->account_name;
        $banks->account_number = $r->account_no;
        $banks->bsb = $r->bsb;
        $banks->save();

        alert()->success('Saved');        
        return redirect()->back();                

        }


    }

    public function view_balance_sheet($id){

        $bank = Banks::where('uid',$id)->first();
        $page_title='::Admin-Banks-Balance-Sheet';        
        $transactions = Transactions::where('bank_id',$bank->id)->orderby('id','desc')->paginate(25);
        return view('admin.banks_balance_sheet',compact('page_title','bank','transactions'));

    }

    public function bank_reconcile()
    {

        $page_title='Admin-Banks';
        return view('admin.banks.reconsile',compact('page_title'));

    }

    
}
