<?php

namespace App\Http\Controllers;

use App\Models\VehicleCategories;
use Illuminate\Http\Request;

class VehicleCategoriesController extends Controller
{

public function admin_delete($id){
    VehicleCategories::where('id',$id)->delete();
    alert()->success('Deleted');
    return redirect()->back();
}

}
