<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dish extends Model
{
    protected $fillable = [
        'nome',
        'slug',
        'descrizione',
        'prezzo',
        'immagine',
        'visibile',
        'restaurants_id',
        'categories_id'
    ];

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
    // public static function getUniqueSlugFromTitle($nome) {
        
    //     $slug = Str::slug($nome);
    //     $slug_base = $slug;

    //     $dish_found = Dish::where('slug', '=', $slug)->first();
    //     $counter = 1;
    //     while($dish_found) {
            
    //         $slug = $slug_base . '-' . $counter;
    //         $dish_found = Dish::where('slug', '=', $slug)->first();
    //         $counter++;
    //     }

    //     return $slug;
    // }
}
