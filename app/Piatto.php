<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piatto extends Model
{
    public function ristoranteInfo() {

        return $this->belongsTo('App\RistoranteInfo');

    }

    public function ordine() {

        return $this->belongsToMany('App\Ordine');

    }

    public function tag() {

        return $this->belongsToMany('App\Tag');

    }

    public function categoria() {

        return $this->belongsTo('App\Categoria');

    }
}
