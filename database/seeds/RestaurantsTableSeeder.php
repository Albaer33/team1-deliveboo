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

            [

                'nome_attivita' => 'McDonald\'s',
                'P_IVA' => '11111111111',
                'telefono' => '11111111112',
                'indirizzo' => 'Via Dei Fiaschi 1',
                'immagine' => 'https://f.roocdn.com/images/menus/64574/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1547634455',
                'descrizione' => ''
                // 'slug' => 'x11'
            ],
            [

                'nome_attivita' => 'Nima Sushi',
                'P_IVA' => '11111111112',
                'telefono' => '11111111112',
                'indirizzo' => 'Via Dei Fiaschi 2',
                'immagine' => 'https://f.roocdn.com/images/menus/213898/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1573558821',
                'descrizione' => ''
                // 'slug' => 'x12'
    
            ],
            [

                'nome_attivita' => 'Pokèria by NIMA',
                'P_IVA' => '11111111113',
                'telefono' => '11111111113',
                'indirizzo' => 'Via Dei Fiaschi 3',
                'immagine' => 'https://f.roocdn.com/images/menus/71232/header-image.jpg?width=706.0000210404396&height=354.0000105500221&auto=webp&format=jpg&fit=crop&v=1615219760',
                'descrizione' => ''
                // 'slug' => 'x1'
    
            ],
            [

                'nome_attivita' => 'Daruma Kosher',
                'P_IVA' => '1111111114',
                'telefono' => '11111111114',
                'indirizzo' => 'Via Dei Fiaschi 4',
                'immagine' => 'https://f.roocdn.com/images/menus/14480/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1537967434',
                'descrizione' => ''
                // 'slug' => 'x2'
    
            ],
            [

                'nome_attivita' => 'Temakinho',
                'P_IVA' => '11111111115',
                'telefono' => '11111111115',
                'indirizzo' => 'Via Dei Fiaschi 5',
                'immagine' => 'https://f.roocdn.com/images/menus/67494/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1610355421',
                'descrizione' => ''
                // 'slug' => 'x3'
    
            ],
            [

                'nome_attivita' => 'Berberè Pizzeria',
                'P_IVA' => '11111111116',
                'telefono' => '11111111116',
                'indirizzo' => 'Via Dei Fiaschi 6',
                'immagine' => 'https://f.roocdn.com/images/menus/63776/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1556873766',
                'descrizione' => ''
                // 'slug' => 'x4'
    
            ],
            [

                'nome_attivita' => 'Old Wild West',
                'P_IVA' => '11111111117',
                'telefono' => '11111111117',
                'indirizzo' => 'Via Dei Fiaschi 7',
                'immagine' => 'https://f.roocdn.com/images/menus/225238/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1585830197',
                'descrizione' => 'Il menù potrebbe temporaneamente subire alcune variazioni di ingredienti. Per maggiori informazioni contattare il punto vendita o consultare la sezione “lista ingredienti ed allergeni'
                // 'slug' => 'x5'
    
            ],
            [

                'nome_attivita' => 'Roadhouse',
                'P_IVA' => '11111111118',
                'telefono' => '11111111118',
                'indirizzo' => 'Via Dei Fiaschi 8',
                'immagine' => 'https://f.roocdn.com/images/menus/188980/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1588261235',
                'descrizione' => 'Ordina il tuo piatto preferito a casa tua da Roadhouse grazie alla consegna a domicilio di Deliveroo.'
                // 'slug' => 'x6'
    
            ],
            [

                'nome_attivita' => 'KFC',
                'P_IVA' => '11111111119',
                'telefono' => '11111111119',
                'indirizzo' => 'Via Dei Fiaschi 9',
                'immagine' => 'https://f.roocdn.com/images/menus/257876/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1586357552',
                'descrizione' => 'Ordina il tuo piatto preferito a casa tua da KFC grazie alla consegna a domicilio di Deliveroo. Per maggiori informazioni sul libro ingredienti consulta la pagina: http://www.kfc.it/wp-content/uploads/2016/05/kfc_libro_ingredienti.pdf'
                // 'slug' => 'x7'
    
            ],
            [

                'nome_attivita' => 'La piadineria',
                'P_IVA' => '11111111120',
                'telefono' => '11111111120',
                'indirizzo' => 'Via Dei Fiaschi 10',
                'immagine' => 'https://f.roocdn.com/images/menus/207109/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1602487666',
                'descrizione' => 'Ordina la tua piadina preferita a casa tua da La Piadineria grazie alla consegna a domicilio di Deliveroo.'
                // 'slug' => 'x8'
    
            ],
            [

                'nome_attivita' => 'Burger King',
                'P_IVA' => '11111111121',
                'telefono' => '11111111121',
                'indirizzo' => 'Via Dei Fiaschi 11',
                'immagine' => 'https://f.roocdn.com/images/menus/41027/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1598626967',
                'descrizione' => ''
                // 'slug' => 'x9'
    
            ],
            [

                'nome_attivita' => 'Grom',
                'P_IVA' => '11111111122',
                'telefono' => '11111111122',
                'indirizzo' => 'Via Dei Fiaschi 12',
                'immagine' => 'https://f.roocdn.com/images/menus/17074/header-image.jpg?width=936.0000278949738&height=468.0000139474869&auto=webp&format=jpg&fit=crop&v=1505479292',
                'descrizione' => ''
                // 'slug' => 'x10'
    
            ]

        ];

        foreach ($restaurants as $restaurant) {
            
            $new_restaurant = new Restaurant();
            $new_restaurant->nome_attivita = $restaurant['nome_attivita'];
            $new_restaurant->P_IVA = $restaurant['P_IVA'];
            $new_restaurant->telefono = $restaurant['telefono'];
            $new_restaurant->indirizzo = $restaurant['indirizzo'];
            $new_restaurant->immagine = $restaurant['immagine'];
            $new_restaurant->descrizione = $restaurant['descrizione'];
            $new_restaurant->slug = Str::slug($new_restaurant->nome_attivita);
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