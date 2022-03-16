<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RistoranteInfo extends Model
{
    public function user() {

        return $this->belongsTo('App\User');

    }

    public function piatto() {

        return $this->hasMany('App\Piatto');

    }

}
