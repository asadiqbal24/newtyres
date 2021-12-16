<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{

	public function country_name(){
        return $this->hasOne('App\Models\Country','id','country');
    }  

}
