<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tyres extends Model
{
    protected $table = 'tyres';

     public function tyre_category(){
        return $this->hasOne('App\Models\TyresCategories','id','tyre_category_id');
    }

     public function tyre_brands(){
        return $this->hasOne('App\Models\TyresBrands','id','brand_id');
    }

         public function tyre_pattern(){
        return $this->hasOne('App\Models\TyresBrandsPatterns','id','pattern_id');
    }

         public function tyre_attributes(){
        return $this->hasOne('App\Models\TyreAttributes','id','attributes');
    }


   public function tyre_discounts(){
        return $this->hasOne('App\Models\TyresDiscounts','tyre_id','id');
    }


   public function tyre_sizes(){
        return $this->hasOne('App\Models\TyreSize','id','tyre_size');
    }


}
