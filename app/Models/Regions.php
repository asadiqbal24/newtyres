<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'regions';


    public function country_name(){
        return $this->hasOne('App\Models\Country','id','country_id');
    }  

			public function fitment_areas(){
	        return $this->hasMany('App\Models\FitmentLocations','state_id','id');
    }

}
