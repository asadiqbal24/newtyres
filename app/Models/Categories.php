<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
   protected $table = 'categories';

       public function category_name(){
        return $this->hasOne('App\Models\Categories','id','category_id');
    } 

     public function category(){
        return $this->hasMany('App\Models\Categories','category_id','id');
    }

    public function subcategory(){
        return $this->hasMany('App\Models\SubCategories','category_id','id');
    } 
}
