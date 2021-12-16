<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclesSeries extends Model
{
    protected $table = 'vehicles_series';


    public function vehicle_d(){
        return $this->hasOne('App\Models\Vehicles','id','vehicle_id');
    }

    public function model_d(){
        return $this->hasOne('App\Models\VehiclesModels','id','model_id');
    }
}
