<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class validImage implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(!empty($value)){
           $data =  getimagesize($value->getPathName());
           if($data[0]==550 && $data[1]==370){return true;}else{return false;}
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Product image size must be 550 width and 370 height.';
    }
}
