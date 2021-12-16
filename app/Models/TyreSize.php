<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TyreSize extends Model
{
    protected $table = 'tyre_sizes';


      public function tyres(){
        return $this->hasOne('App\Models\Tyres','tyre_size','id');
    }
    public function truck_tyre(){
        return $this->hasOne('App\Models\Tyres','tyre_size','id')->where('truck','1');
    }

    public function otr_tyre(){
        return $this->hasOne('App\Models\Tyres','tyre_size','id')->where('otr','1');
    }
}
