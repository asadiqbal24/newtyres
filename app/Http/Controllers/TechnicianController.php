<?php

namespace App\Http\Controllers;

use App\techniciansModel;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{

    public function technicians()
    {
        $page_title='Employee Records / Technician Options';
        $data = techniciansModel::paginate(25);
        return view('admin.technicians.index',compact('page_title','data'));        
    }

    public function technicians_lists()
    {

        $page_title='Technicians Lists';
        return view('admin.technicians.technicians_list',compact('page_title'));        
    	
    }

}
