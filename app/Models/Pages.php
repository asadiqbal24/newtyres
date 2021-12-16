<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
         public function category(){
        return $this->hasOne('App\Models\Categories','id','category_id');
    }
}
