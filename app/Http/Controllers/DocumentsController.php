<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{

    public function document_archive(Request $request)
    {   
        $page_title = 'Admin Archives Documents';
        $type = $request->type;
        return view('admin.document.index',compact('page_title','type'));
    }

}
