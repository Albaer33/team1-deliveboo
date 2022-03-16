<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function dish() {

        return $this->belongsToMany('App\Dish');

    }
}
