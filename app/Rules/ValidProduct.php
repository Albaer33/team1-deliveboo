<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Dish;

class ValidProduct implements Rule
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

        $product = Dish::find($value);

        if($product){

            return true;

        }
        else{

            return true;

        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Il prodotto non esiste.';
    }
}
