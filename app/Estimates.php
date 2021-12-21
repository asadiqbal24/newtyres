<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimates extends Model
{
    protected $table='estimates';
    public function modal()
    {
        return $this->hasOne('App\Models\Vehicles','id','model');
    }
}
