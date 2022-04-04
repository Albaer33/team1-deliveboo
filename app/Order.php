<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'nome',
        'indirizzo',
        'dettaglio',
        'codice_transazione',
        'totale',
        'email',
        'telefono',
        'pagato',
        'restaurant_id'
    ];

    public function dishes() {

        return $this->belongsToMany('App\Dish');

    }
}
