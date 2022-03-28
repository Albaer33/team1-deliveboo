<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /* protected $table = 'restaurant'; */

    protected $fillable = [
        'nome_attivita',
        'P_IVA',
        'telefono',
        'indirizzo',
        'immagine',
        'user_id',
        'descrizione',
        'slug'
    ];

    public function user() {

        return $this->belongsTo('App\User');

    }

    public function dishes() {

        return $this->hasMany('App\Dish');

    }
    public function tipologies() {

        return $this->belongsToMany('App\Tipology');

    }
}
