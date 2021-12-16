<?php

namespace App\Http\Controllers;

use App\Models\CustomColorOptions;
use Illuminate\Http\Request;

class CustomColorOptionsController extends Controller
{

    public function custom_color_options()
    {   
        $page_title = 'Cutom Color Options';
        return view('admin.colors.index',compact('page_title'));
    }

}
