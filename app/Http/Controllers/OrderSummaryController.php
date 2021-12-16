<?php

namespace App\Http\Controllers;

use App\Models\OrderSummary;
use Illuminate\Http\Request;

class OrderSummaryController extends Controller
{

    public function admin_orders(){


        $page_title='Admin-Orders';
        $orders = OrderSummary::with('customer','tyre_brands','tyre_pattern','tyres.tyre_category','customer_details','bank_details','finance_provider_details','tyres.tyre_sizes')->orderBy('id','desc')->paginate(15); 
        return view('admin.orders',compact('page_title','orders'));



    }

    public function admin_view_order($id){

    	$page_title='Admin-Orders';
        $orders = OrderSummary::where('id',$id)->with('customer','tyre_brands','tyre_pattern','tyres')->orderBy('id','desc')->first(); 
        return view('admin.orders_details',compact('page_title','orders'));

    }

    public function admin_completed_order($id)
    {
        $order = OrderSummary::where('id',$id)->first();
        $order->order_completed = 2;
        $order->save();
        alert()->success('Saved');
        return redirect()->back();
    }

}
