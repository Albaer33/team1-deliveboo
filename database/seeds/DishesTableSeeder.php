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
                'nome' => "Tartare Especial",
                'descrizione' => "Tartare di salmone, avocado, erba cipollina, philadelphia e mandorle",
                'prezzo' => '7',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/fe92d67e-b90b-4a7c-9d74-f39ed01cf8e0/image.jpeg?width=560&height=315&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Nigiri di Salmone",
                'descrizione' => "2 pezzi",
                'prezzo' => '2.80',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/faeedadd-8818-42c9-a8ba-c964fe6009a5/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Miah",
                'descrizione' => "Tartare di salmone, avocado, philadelphia, sesamo, carpaccio di salmone scottato esterno con crunch, spicy cream e salsa teriyaki",
                'prezzo' => '7.70',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/355b7a04-f70b-4851-a6c0-994a190025ca/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Spicy Salmon",
                'descrizione' => "Tartare di salmone, avocado, philadelphia, sesamo, tartare di salmone esterna, nachos, jalapeño, spicy cream, salsa sriracha e salsa teriyaki",
                'prezzo' => '7.70',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/087dac21-c507-482c-a0bb-ef5282029698/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Guadalupe",
                'descrizione' => "Tonno sott'olio, sesamo, carpaccio di avocado esterno, maionese e salsa mayo miso",
                'prezzo' => '6.60',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/2b83c7cd-edd3-4de5-9066-3453bc016bc8/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Shrimp Tempura",
                'descrizione' => "Gamberi in tempura (3PZ)",
                'prezzo' => '6.60',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/668e1121-6b59-4b7e-9a7d-7198beb82eba/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '2'
            ],
            [
                'nome' => "Salmon Poké",
                'descrizione' => "",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/e2816a49-9be6-4cd3-b97b-6ea974241188/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Salmone, avocado, edamame, goma wakame, sesamo',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Tuna Poké",
                'descrizione' => "",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/d17fc782-ea43-4c36-bd60-264b92cfa1c5/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Tonno, cetrioli, goma wakame, avocado, sesamo',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Chicken Poké",
                'descrizione' => "",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/6865d2c0-77b2-4188-8ff5-dfa12b16d8ff/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Pollo, pomodorini, feta, olive',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Salmon Spicy Poké",
                'descrizione' => "",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/043dc8a9-049d-4b84-be77-6e1567dd9a15/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Salmone marinato con maionese spicy, edamame, avocado, cipolla fritta',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Mochi Cioccolato",
                'descrizione' => "",
                'prezzo' => '2.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/518fd674-2b83-4b52-9f74-0bc906a5c3e2/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Mochi Cocco",
                'descrizione' => "",
                'prezzo' => '2.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/47f185e2-1a8e-4135-bcb0-bfefb69d5eb3/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '3'
            ],
            [
                'nome' => "Kosher Mix",
                'descrizione' => "",
                'prezzo' => '19.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/f4b1945c-db89-4987-acf7-5cbc12e92e2a/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "Salmon Passion",
                'descrizione' => "",
                'prezzo' => '19.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/9c79f34d-5ecb-4daa-b821-4409bad05a40/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "Sushi Party",
                'descrizione' => "",
                'prezzo' => '48.00',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/7b44b216-9ada-488b-99dc-8e271b44a77e/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "Sushi Royal",
                'descrizione' => "",
                'prezzo' => '48.00',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/95e2153d-63c7-4f44-a05a-004a12be0988/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "Mango Tartare",
                'descrizione' => "Tartare di Ricciola marinata con il limone, letto di mango e granella di pistacchi",
                'prezzo' => '12.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/7ac8beb3-7b7d-4bf1-bb99-5587c404be86/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "Triple Tartare",
                'descrizione' => "Tre strati di Gusto, Salmone, Ricciola e Tonno! All'interno Mayo Wasabi e Yuzu Mayo. Sopra Ikura ed Edamame.",
                'prezzo' => '48.00',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/719cf55b-6f22-4aa0-9693-2bf4b0da2e9b/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '4'
            ],
            [
                'nome' => "TARTARA DE SALMÃO GOSTOSO",
                'descrizione' => "Tartare di salmone* con erba cipollina, philadelphia, uova di pesce volante*, avocado, salsa maionese piccante, salsa teriyaki, scaglie di mandorla. Accompagnata da nachos*.",
                'prezzo' => '10',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
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
            $new_dish->prezzo = $dish['prezzo'];
            $new_dish->immagine = $dish['immagine'];
            $new_dish->visibile = $dish['visibile'];
            $new_dish->ingredienti = $dish['ingredienti'];
            $new_dish->restaurant_id = $dish['restaurant_id'];
            $new_dish->slug = Str::slug($new_dish->nome);
            $new_dish->save();

        }
    }
}