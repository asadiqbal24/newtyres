<?php

namespace App\Http\Controllers;

use App\Models\SalesNominal;
use Illuminate\Http\Request;

class SalesNominalController extends Controller
{

    public function sales_nominals()
    {
        $page_title = 'Sales Nominal';
        return view('admin.sales.nominal',compact('page_title'));
    }

}
