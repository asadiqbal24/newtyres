<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FitmentLocationsAreas extends Model
{
	protected $table = 'fitment_locations_areas';

	public function fitment_areas_center(){
        return $this->hasMany('App\Models\FitmentLocationsAreaCenters','area_id','id');
    }

}
