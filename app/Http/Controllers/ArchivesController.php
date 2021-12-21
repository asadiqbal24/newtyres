<?php

namespace App\Http\Controllers;

use App\Archives;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\JobSheets;
use App\Estimates;

class ArchivesController extends Controller
{

    public function index()
    {
       $page_title = 'Archives';
       $invoice=Invoice::get();
       $jobsheet=JobSheets::get();
       $estimate=Estimates::with('modal')->get();
       return view('admin.archives',compact('page_title','invoice','jobsheet','estimate'));     
    }

}
