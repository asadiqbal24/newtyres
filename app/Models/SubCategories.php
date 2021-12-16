<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
       protected $table = 'sub_categories';

       public function category_name(){
        return $this->hasOne('App\Models\Categories','id','category_id');
    } 

    public function subcategory(){
        return $this->hasMany('App\Models\SubCategories','category_id','id');
    } 
}
