<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FitmentLocationsAreaCenters extends Model
{
    protected $table = 'fitment_locations_areas_centers';
	
	public function fitment_locations(){
        return $this->hasOne('App\Models\FitmentLocations','id','fitment_location_id');
    }

    public function fitment_locations_areas(){
        return $this->hasOne('App\Models\FitmentLocationsAreas','id','area_id');
    }
    
     public function fitment_locations_region(){
        return $this->hasOne('App\Models\Regions','id','state_id');
    }

}
