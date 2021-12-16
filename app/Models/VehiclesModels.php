<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclesModels extends Model
{
    protected $table = 'vehicles_models';

    public function vehicle_d(){
        return $this->hasOne('App\Models\Vehicles','id','vehicle_id');
    }
}
