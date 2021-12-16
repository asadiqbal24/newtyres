<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TyresBrands extends Model
{
   protected $table = 'tyres_brands';

    public function patterns(){
        return $this->hasMany('App\Models\TyresBrandsPatterns','brand_id','id');
    }

    public function run_flat(){
        return $this->hasMany('App\Models\Tyres','brand_id','id')->where('run_flat','1');
    }

    public function suv_tyres(){
        return $this->hasMany('App\Models\Tyres','brand_id','id')->where('suv_tyre','1');
    }

    public function fuel_tyres(){
        return $this->hasMany('App\Models\Tyres','brand_id','id')->where('fuel_efficient_tyre','1');
    }
    
}
