<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{

	public function save_payment(Request $request)
	{


		$pre = Payment::latest()->first();

		$payment_id = 0;
		if(!empty($pre)){
			$payment_id = $pre->payment_id + 1;			
		}else{
			$payment_id = 0001;			
		}	


		$payment_id = str_pad($payment_id,4,'0',STR_PAD_LEFT);

		if(!empty($request->selected_id)){
			$new = Payment::where('id',$request->selected_id)->first();
		}else{
			$new = new Payment();			
		}

		$new->method = $request->method;	
		$new->amount = $request->amount;	
		$new->date = $request->date;	
		$new->description = $request->description;	
		$new->allocated = $request->allocated;	
		$new->balance = $request->balance;
		$new->payment_id = $payment_id;
		$new->save();
		alert()->success('Saved');
		return redirect()->back();


	}

	public function delete_payment(Request $request)
	{
			Payment::where('id',$request->id)->delete();
			alert()->success('Deleted');
			return redirect()->back();

	}

}
