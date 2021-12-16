<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FitmentLocations extends Model
{
    protected $table = 'fitment_locations';

         public function fitment_locations(){
        return $this->hasMany('App\Models\FitmentLocationsAreas','fitment_location_id','id');
    }
}
