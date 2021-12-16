<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderSummary extends Model
{
	protected $table = 'order_summary';

     public function customer(){
        return $this->hasOne('App\Models\HomeDelivery','session_id','session_id');
    }

    public function customer_details(){
        return $this->hasOne('App\Models\CustomerDetail','session_id','session_id');
    }

    public function bank_details(){
        return $this->hasOne('App\Models\Banks','id','bank_id');
    }

    public function finance_provider_details(){
        return $this->hasOne('App\Models\FinanceProvider','id','lease_provider_id');
    }

     public function tyre_category(){
        return $this->hasOne('App\Models\TyresCategories','id','tyre_category_id');
    }

     public function tyre_brands(){
        return $this->hasOne('App\Models\TyresBrands','id','brand');
    }

         public function tyre_pattern(){
        return $this->hasOne('App\Models\TyresBrandsPatterns','id','pattern');
    }

         public function tyres(){
        return $this->hasOne('App\Models\Tyres','id','tyre');
    }


         public function tyre_attributes(){
        return $this->hasOne('App\Models\TyreAttributes','id','attributes');
    }

}
