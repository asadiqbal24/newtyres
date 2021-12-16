<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleCategories extends Model
{
    protected $table = 'vehicle_categories';

     public function category(){
        return $this->hasMany('App\Models\VehicleCategories','category_id','id');
    }

}
