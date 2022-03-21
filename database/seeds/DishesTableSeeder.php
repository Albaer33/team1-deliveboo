<?php

use Illuminate\Database\Seeder;
use App\Dish;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dishes = [

            [

                'nome' => "Box Meal Colonel's Burger",
                'descrizione' => "Così buono che il Colonnello ci ha messo la firma. Il Box Meal contiene un Colonel's Burger, una porzione di Pop Corn Chicken, un contorno speciale, patatine e bibita a scelta.",
                'prezzo' => '11',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/58e5a37c-964d-49a0-bc80-699b11b26834/image.jpeg?width=817.5&height=460.5&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'bacon',

            ],

            [

                'nome' => "Menu Colonel's Burger",
                'descrizione' => "Menu con un contorno a scelta, una bibita e il Burger del Colonnello. Bacon, formaggio, insalata, salsa barbecue, maionese e un irresistibile filetto Original Recipe, preparato secondo la sua leggendaria ricetta, con il mix segreto di 11 erbe e spezie.",
                'prezzo' => '8',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/cdf67042-dcee-459a-b6fc-9e10adb87c6f/image.jpeg?width=817.5&height=460.5&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'burger',

            ]

        ];


        foreach($dishes as $dish){

            $new_dish = new Dish();

            $new_dish->nome = $dish['nome'];
            $new_dish->descrizione = $dish['descrizione'];
            $new_dish->slug = Str::slug($new_dish->nome);
            $new_dish->prezzo = $dish['prezzo'];
            $new_dish->immagine = $dish['immagine'];
            $new_dish->visibile = $dish['visibile'];
            $new_dish->ingredienti = $dish['ingredienti'];
            // $new_dish->restaurant_id = rand(1000, 3000);
            $new_dish->save();

        }
    }
}


//             $table->id();
//             $table->string('nome', 15);
//             $table->string('slug', 15)->unique();
//             $table->text('descrizione');
//             $table->decimal('prezzo', 5, 2);
//             $table->text('immagine');
//             $table->boolean('visibile');
//             $table->unsignedBigInteger('restaurants_id');