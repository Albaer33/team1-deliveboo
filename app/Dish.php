<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function restaurant() {

        return $this->hasOne('App\Restaurant');

    }

    public function order() {

        return $this->belongsToMany('App\Order');

    }

    public function tag() {

        return $this->belongsToMany('App\Tag');

    }

    public function category() {

        return $this->belongsTo('App\Category');

    }
}
