<?php

namespace App\Http\Controllers;
use App\Models\ExpenseHead;
use App\Models\Expense;
use App\Models\Banks;
use Illuminate\Http\Request;
use Alert;
class ExpenseHeadController extends Controller
{
	    public function expenses(){
        $i=1;
    	$bank = Banks::all(); 	       
        $page_title='::Admin-Expenses';        
        $expenseheads = ExpenseHead::paginate(15);  
        return view('admin.expenses',compact('expenseheads','i','page_title','bank'));
    }


    public function addExpenseHead(Request $r){

    	$this->validate($r,[
          'name' => 'required',
            ]);

    	$expenseheads = ExpenseHead::where('name',$r->name)->first();
    	if(!empty($expenseheads)){

    		Alert::error('Already Exist');
			return redirect()->back();

    	}else{

    					$query = ExpenseHead::insert([
				          'uid' => md5(date('Y-m-d').microtime()),
				          'name' => $r->name
				       ]);

						Alert::success('Added');
						return redirect()->back();

    	} 


    }


        public function editExpenseHead(Request $r){

    	$this->validate($r,[
          'name' => 'required',
            ]);

    	$expenseheads = ExpenseHead::where('name',$r->name)->where('id','!=',$r->id)->first();
    	if(!empty($expenseheads)){

    		Alert::error('Already Exist');
			return redirect()->back();

    	}else{

				    	$exp = ExpenseHead::where('id',$r->id)->first();
				    	$exp->name = $r->name;
				    	$exp->save();					
						Alert::success('Saved');
						return redirect()->back();

    	} 


    }


}
