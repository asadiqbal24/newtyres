<?php

namespace App\Http\Controllers;

use App\Models\DealerSignup;
use Illuminate\Http\Request;

class DealerSignupController extends Controller
{

    public function admin_dealer_signup(){

        $dealer = DealerSignup::paginate(15);
        $page_title = 'Dealer Sign Ups';
        return view('admin.dealer_signup',compact('page_title','dealer'));

    }

}
