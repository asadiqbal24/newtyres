<?php

namespace App\Http\Controllers;

use App\Models\CustomerVehicles;
use App\Models\VehiclesMake;
use Illuminate\Http\Request;

class CustomerVehiclesController extends Controller
{

    public function customer_vehicles(Request $request){

        $page_title = 'Vehicles';
        $data = VehiclesMake::orderBy('id','desc')->paginate(25);
        return view('admin.customer_vehicles.index',compact('request','page_title','data'));

    }

}
