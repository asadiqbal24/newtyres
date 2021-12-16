<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TyresCategories extends Model
{
    protected $table = 'tyre_categories';

     public function tyres(){
        return $this->hasMany('App\Models\Tyres','tyre_category_id','id');
    }

     public function truck_tyres(){
        return $this->hasMany('App\Models\Tyres','tyre_category_id','id')->where('truck','1');
    }

    public function otr_tyres(){
        return $this->hasMany('App\Models\Tyres','tyre_category_id','id')->where('otr','1');
    }

}
