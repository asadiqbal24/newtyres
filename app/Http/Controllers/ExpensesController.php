<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseHead;
use App\Models\Expense;
use App\Models\Transactions;
use Alert;
use Auth;
use App\Models\Banks;
use App\Models\Suppliers;
use App\Models\ExpenseNomial;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class ExpensesController extends Controller
{


public function admin_expense_manager(){

        $page_title='Admin-Expense';
        $suppliers = Suppliers::paginate(25);        
        return view('admin.expense.index',compact('page_title','suppliers'));

   }


	   public function addexpense(Request $request)
   {




   	      $this->validate($request,[
          'name' => 'required',
          'amount' => 'required',          
          ]);

		$query = Expense::insert([
          'uid' => md5(date('Y-m-d').microtime()),
          'head_id' => $request->exp_head_id,
          'name' => $request->name,
          'date'=>$request->date,
          'description' => $request->desc,
          'amount' => $request->amount,                    
       ]);

    $bank = Banks::where('id',$request->bank)->first();

        $transactions = new Transactions;
        $transactions->uid  = md5(date('Y-m-d').microtime()); 
        $transactions->user_id = Auth::user()->id; 
        $transactions->amount = $request->amount;
        $transactions->bank_id = $bank->id; 
        $transactions->type = 'cr';        
        $transactions->desc = $request->name.' expense of Amount '.$request->amount.' Paid via Bank '.$bank->name;
        $transactions->save();
       
       Banks::where('id',$request->bank)->update([
           'bal' => $bank->bal-$request->amount
       ]);


		$head = ExpenseHead::where('id',$request->exp_head_id)->first();
		$head->balance = $head->balance+$request->amount;
		$head->save();


			Alert::success('Added');
			return redirect()->back();		
       
   }

   public function view_expense_sheet($exp_id){

   	    	$bank = Banks::all(); 	       
   		$page_title='::Admin-Expense';
        $expense = Expense::orderby('id','desc')->paginate(25);        
        return view('admin.view_expense_sheet',compact('page_title','expense','exp_id','bank'));

   }

   public function expense_nominals()
   {
        $page_title = 'Expense Nominal';
        $expense=ExpenseNomial::paginate(10);
        return view('admin.expense.nominal',compact('page_title','expense'));
   }

    public function new_expense_invoice()
    {
              $suppliers = Suppliers::all();        
            $page_title = 'Expense Invoice';
        return view('admin.expense.invoice',compact('page_title','suppliers'));

    }
   public function expense_nomial_save(Request $request)
   {
      // dd($request);
       $new=new ExpenseNomial();
       $new->category=$request->main_category;
       $new->description=$request->description;
       $new->code=$request->code;
       $new->active=$request->active;
       $new->save();
       alert()->success("Data Inserted SuccessFully");
       return redirect()->back();
   }

   public function admin_expense_nominal_edit($id)
   {
     $page_title = 'Expense Nominal Edit';
     $edit=ExpenseNomial::where('id',$id)->first();
     return view('admin.expense.admin_expense_nominal_edit',compact('page_title','edit'));
   }

   public function expense_nomial_update(Request $request)
   {
    $update=ExpenseNomial::where('id',$request->id)->first();    
    if (!empty($update)) {  
    $update->category=$request->main_category;
    $update->description=$request->description;
    $update->code=$request->code;
    $update->active=$request->active;
    $update->save();
    }
    alert()->success("Data Updated SuccessFully");
    return redirect()->route('admin.expense.nominals');
   }
    public function export() 
    {
        return Excel::download(new UsersExport, 'customer.xlsx');
    }
}
