<?php

namespace App\Http\Controllers;

use App\Archives;
use Illuminate\Http\Request;

class ArchivesController extends Controller
{

    public function index()
    {
       $page_title = 'Archives';
       return view('admin.archives',compact('page_title'));     
    }

}
