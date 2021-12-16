<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclesMake extends Model
{
   protected $table = 'vehicle_make';


    public function vehicle_d(){
        return $this->hasOne('App\Models\Vehicles','id','make');
    }	

}
