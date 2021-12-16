<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customers';


    public function customer_details(){
        return $this->hasOne('App\Models\CustomerDetail','id','customer_id');
    }

}
