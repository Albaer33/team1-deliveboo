<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function piatto() {

        return $this->belongsToMany('App\Piatto');

    }
}
