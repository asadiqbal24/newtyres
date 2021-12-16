<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerTyreNotFound extends Model
{
    protected $table = 'tyre_not_found';

    public function vehicle_d(){
        return $this->hasOne('App\Models\Vehicles','id','make');
    }

}
