<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
   protected $table = 'customer_details';

    public function customer(){
        return $this->hasOne('App\Models\Customer','id','customer_id');
    }


}
