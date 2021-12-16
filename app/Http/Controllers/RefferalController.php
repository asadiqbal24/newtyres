<?php

namespace App\Http\Controllers;

use App\Models\Refferal;
use Illuminate\Http\Request;

class RefferalController extends Controller
{

    public function refferal_lists()
    {
        $page_title = 'Refferal Lists';
        return view('admin.refferals.lists',compact('page_title'));
    }

}
