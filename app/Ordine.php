<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordine extends Model
{
    public function piatto() {

        return $this->belongsToMany('App\Piatto');

    }
}
