<?php

use App\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [

            $McDonald = [

                'nome_attivita' => 'McDonald',
                'P_IVA' => 'McDonald',
                'telefono' => '1237',
                'indirizzo' => 'Via Dei Fiaschi',
                'immagine' => 'McDonald'
    
            ],
    
            $Burger_King = [
    
                'nome_attivita' => 'Burger King',
                'P_IVA' => 'Burger King',
                'telefono' => '4568',
                'indirizzo' => 'Via Dei Fiaschi 89',
                'immagine' => 'Burger King'
    
            ],

        ];

        foreach ($restaurants as $restaurant) {
            
            $new_restaurant = new Restaurant();
            $new_restaurant->nome_attivita = $restaurant['nome_attivita'];
            $new_restaurant->P_IVA = $restaurant['P_IVA'];
            $new_restaurant->telefono = $restaurant['telefono'];
            $new_restaurant->indirizzo = $restaurant['indirizzo'];
            $new_restaurant->immagine = $restaurant['immagine'];
            $new_restaurant->save();

        }
    }
}


/*

            $table->string('nome_attivita', 30);
            $table->string('P_IVA', 50);
            $table->string('telefono', 15);
            $table->string('indirizzo', 50);
            $table->unsignedBigInteger('user_id');
            $table->text('immagine')->nullable();

*/