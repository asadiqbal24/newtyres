<?php

namespace App\Http\Controllers;

use App\Unpaid;
use Illuminate\Http\Request;
use App\Models\CustomerDetail;


class UnpaidController extends Controller
{

    public function index()
    {
        $page_title = 'Unpaid';
        return view('admin.unpaid',compact('page_title'));
    }

    public function unpaid_account_manager()
    {

        $page_title = 'Unpaid Account Manager';
        $customer=CustomerDetail::where('credit_account',1)->with('customer')->get();
        //dd($customer);
        return view('admin.unpaid_account_manager',compact('page_title','customer'));        
    }

}
