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
                'nome' => "McMenu Triplo Cheeseburger",
                'descrizione' => "",
                'prezzo' => '7.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/b13ef020-10cd-4b48-9ff3-591c49cae276/image.jpeg?width=817.5&height=460.5&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'burger e cheese',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "McMenu My Selection Montasio DOP & Pancetta",
                'descrizione' => "",
                'prezzo' => '11.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/951999a9-1639-4860-aa56-7b9be8d1ee74/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'burger e pancetta',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "McMenu My Selection Chicken Asiago DOP",
                'descrizione' => "",
                'prezzo' => '11.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/8a20ec7d-4152-46e7-a40a-01c04b964052/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'burger e asiago',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "Tasty Basket",
                'descrizione' => "",
                'prezzo' => '12.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/e78b7069-5f44-46e5-9272-b1469436b9e1/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "McMenu Crispy McBacon",
                'descrizione' => "",
                'prezzo' => '9.80',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/0c69bc45-bbd9-45ae-9000-891a0bd76508/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "McMenu Big Mac",
                'descrizione' => "",
                'prezzo' => '8.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/99c1c474-278a-4d1f-989f-8684c6e9a3c5/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '1'
            ],
            [
                'nome' => "Box Meal Colonel's Burger",
                'descrizione' => "Così buono che il Colonnello ci ha messo la firma. Il Box Meal contiene un Colonel's Burger, una porzione di Pop Corn Chicken, un contorno speciale, patatine e bibita a scelta.",
                'prezzo' => '11',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/58e5a37c-964d-49a0-bc80-699b11b26834/image.jpeg?width=817.5&height=460.5&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'bacon',
                'restaurant_id' => '9'
            ],
            [
                'nome' => "Menu Colonel's Burger",
                'descrizione' => "Menu con un contorno a scelta, una bibita e il Burger del Colonnello. Bacon, formaggio, insalata, salsa barbecue, maionese e un irresistibile filetto Original Recipe, preparato secondo la sua leggendaria ricetta, con il mix segreto di 11 erbe e spezie.",
                'prezzo' => '8',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/cdf67042-dcee-459a-b6fc-9e10adb87c6f/image.jpeg?width=817.5&height=460.5&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'burger',
                'restaurant_id' => '9'
            ],

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
            $new_dish->restaurant_id = $dish['restaurant_id'];
            $new_dish->save();

        }
    }
}