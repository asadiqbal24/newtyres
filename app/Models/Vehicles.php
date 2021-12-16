<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $table = 'vehicles';
    public function vehicle_models(){
        return $this->hasMany('App\VehicleMakeModel','make','id');
    }   
}
