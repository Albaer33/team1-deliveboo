<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function dish() {

        return $this->belongsToMany('App\Dish');

    }
}
