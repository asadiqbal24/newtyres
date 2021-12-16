<?php

namespace App\Http\Controllers;

use App\Models\AccountsCsv;
use Illuminate\Http\Request;

class AccountsCsvController extends Controller
{

    public function accounts_csv()
    {
                $page_title='Account-CSV-Exports';
        return view('admin.accounts.csv_export',compact('page_title'));
    }

    public function general_csv()
    {
                $page_title='Admin General-Exports';
        return view('admin.accounts.general_csv',compact('page_title'));
    }

    public function export_sales(){
        alert()->error('No records have been found to export');
        return redirect()->back();
    }    

    public function export_expense(){
        alert()->error('No records have been found to export');
        return redirect()->back();
    } 

}
