<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectedFitmentCenter extends Model
{
    protected $table = 'selected_fitment_centers';


    public function fitment_locations_areas_center(){
        return $this->hasOne('App\Models\FitmentLocationsAreaCenters','id','fitment_center_id');
    }



}
