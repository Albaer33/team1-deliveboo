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
                'nome' => "CAMARÃO EMPANADO ROLL",
                'descrizione' => "Mazzancolla* tropicale impanata, tenkasu, salsa maionese piccante, salsa teriyaki",
                'prezzo' => '15',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
            ],
            [
                'nome' => "SALMÃO ABACATE ROLL",
                'descrizione' => "Tartare di salmone, erba cipollina, avocado, sesamo, teriyaki, uova di pesce volante e maionese piccante",
                'prezzo' => '18',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
            ],
            [
                'nome' => "SALMÃO GOSTOSO ROLL",
                'descrizione' => "Salmone, avocado, philadelphia, erba cipollina, uova di pesce volante, maionese piccante, salsa teriyaki e scaglie di mandorla",
                'prezzo' => '20',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
            ],
            [
                'nome' => "SALMÃO COM CAMARÃO ROLL",
                'descrizione' => "Salmone, mazzancolla tropicale impanata, maionese piccante, teriyaki e sesamo",
                'prezzo' => '18.50',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
            ],
            [
                'nome' => "COPACABANA",
                'descrizione' => "CAMARÃO BAIANINHO; PASTEL DE QUEIJO; SUSHI JOE PAIXÃO DE SALMÃO; FOZ DO IGUAÇU ROLL; SALMÃO GOSTOSO ROLL; CAMARÃO EMPANADO ROLL; CAMARÃO AMARELO ROLL: Mazzancolla* tropicale impanata, pomodori secchi, mango, uova di pesce volante*; ​NIGIRI DE SALMÃO: Fettina di salmone* scottata, riso, erba cipollina. Per l'indicazione degli ingredienti e dei prodotti decongelati, fare riferimento al singolo piatto nella famiglia dedicata",
                'prezzo' => '40',
                'immagine' => '',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '5'
            ],
            [
                'nome' => "PIZZA MARGHERITA",
                'descrizione' => "",
                'prezzo' => '6.24',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/f74dad4b-70a7-453a-aa6b-2733e3d1db90/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Fiordilatte, pomodoro, basilico e olio',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "PIZZA MARINARA",
                'descrizione' => "",
                'prezzo' => '6.24',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/88deef4e-9d06-4725-bb56-51dc6a7021c0/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Aglio, pomodoro, prezzemolo e olio',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "PIZZA MEDITERRANEA",
                'descrizione' => "",
                'prezzo' => '5.60',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/61008da3-c704-48cf-90fa-3c659819cd78/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Olive nere, cipolla rossa saltata, pomodoro e origano',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "PIZZA NAPOLI",
                'descrizione' => "",
                'prezzo' => '8',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/d8c36634-e5bb-4bc6-9dd7-39aaabab1e9f/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Acciughe, capperi, fiordilatte, pomodoro e origano',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "PIZZA SALSICCIA E PARMIGIANO",
                'descrizione' => "",
                'prezzo' => '8',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/a4a87535-1903-4950-90e5-bc79664dc06d/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Prosciutto crudo di Norcia, burrata, rucola, fiordilatte e olio di arancia',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "PIZZA CRUDO E BURRATA",
                'descrizione' => "",
                'prezzo' => '10.40',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/60c09aaa-3d04-45df-ad0a-8df647340192/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Salsiccia di Mora Romagnola, pomodoro, parmigiano reggiano 24 mesi, semi di finocchio',
                'restaurant_id' => '6'
            ],
            [
                'nome' => "Billy bbq",
                'descrizione' => "",
                'prezzo' => '6.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/885928816/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Pane, hamburger, formaggio cheddar, bacon grigliato, lattuga e salsa barbecue',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Ranchero wrap",
                'descrizione' => "",
                'prezzo' => '6.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/885929616/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Tortilla* di grano farcita con cotoletta di pollo* panata, crema di pomodori secchi, scaglie di parmigiano reggiano DOP, lattuga e salsa Old Wild West',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Santa Cruz wrap",
                'descrizione' => "",
                'prezzo' => '6.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/885929951/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Tortilla* di grano farcita con petto di pollo* marinato e grigliato, lattuga, formaggio fuso e salsa peri cheddar',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Geronimo burger",
                'descrizione' => "",
                'prezzo' => '6.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/885930182/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Pane*, hamburger*, doppio bacon grigliato, lattuga e salsa Old Wild West',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Apache",
                'descrizione' => "",
                'prezzo' => '9.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/261396498/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Pane, hamburger, cipolla bianca, pomodoro e cetriolini - servito con patate french fries',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Navajo",
                'descrizione' => "",
                'prezzo' => '9.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/261396499/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648555981&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Pane, hamburger e formaggio cheddar - servito con patate french fries',
                'restaurant_id' => '7'
            ],
            [
                'nome' => "Maxxxi Combo",
                'descrizione' => "Maxxxi burger, guarnito con semi di sesamo, con Coca-Cola o Coca-Cola Zero, servito con patatine fritte",
                'prezzo' => '11.97',
                'immagine' => 'https://f.roocdn.com/images/menu_items/103305788/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
            ],
            [
                'nome' => "Bacon Swiss Classic Combo",
                'descrizione' => "Bacon Swiss Classic con Coca-Cola o Coca-Cola Zero, servito con patatine fritte",
                'prezzo' => '10.57',
                'immagine' => 'https://f.roocdn.com/images/menu_items/103305790/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
            ],
            [
                'nome' => "R special Classic Combo",
                'descrizione' => "R Special Classic con Coca-Cola o Coca-Cola Zero, servito con patatine fritte",
                'prezzo' => '10.57',
                'immagine' => 'https://f.roocdn.com/images/menu_items/103305791/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
            ],
            [
                'nome' => "Fried Chicken Burger Combo",
                'descrizione' => "Fried Chicken Burger con Coca-Cola o Coca-Cola Zero, servito con patatine fritte",
                'prezzo' => '11.27',
                'immagine' => 'https://f.roocdn.com/images/menu_items/1044617604/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
            ],
            [
                'nome' => "Grill chicken wrap",
                'descrizione' => "Tortillas con pollo grigliato, insalata, pomodoro e salsa alle erbette",
                'prezzo' => '6.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/90928847/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
            ],
            [
                'nome' => "Crispy chicken wrap",
                'descrizione' => "Tortillas con filetti di pollo fritto, insalata e salsa honey",
                'prezzo' => '6.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/90928853/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648539126&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '8'
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
            [
                'nome' => "Menu Tender OR",
                'descrizione' => "Menu con un contorno a scelta, una bibita e 4 Tender OR, teneri filetti preparati seguendo la ricetta originale del Colonnello Sanders, infarinati e fritti al momento per ottenere una panatura uniforme, croccante e gustosissima!",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/e406f65d-d866-4d66-a4bf-b502c6442abb/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'pollo',
                'restaurant_id' => '9'
            ],
            [
                'nome' => "Menu Tender Crispy",
                'descrizione' => "Menu con un contorno a scelta, una bibita e 4 Tender Crispy, filetti di pollo, croccanti fuori e tenerissimi dentro, serviti con una salsa a scelta.",
                'prezzo' => '10.90',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/e07d5597-e326-47bf-826a-47a9b1fe5c16/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'pollo',
                'restaurant_id' => '9'
            ],
            [
                'nome' => "Menu COB OR",
                'descrizione' => "Menu con un contorno a scelta, una bibita e 2 pezzi di irresistibile pollo con osso - Chicken On the Bones - cucinato secondo la ricetta segreta del Colonnello Sanders, con le 11 erbe e spezie.",
                'prezzo' => '9.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/9608be19-0428-4d81-bc7c-cb88779c9cd9/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'pollo',
                'restaurant_id' => '9'
            ],
            [
                'nome' => "Menu Hot Wings",
                'descrizione' => "Menu con un contorno a scelta, una bibita e 5 alette piccanti di KFC! Le Hot Wings sono marinate e speziate con peperoncino piccante e altre deliziose spezie. Poi infarinate e fritte alla perfezione per ottenere una dorata croccantezza.",
                'prezzo' => '9.50',
                'immagine' => 'https://rs-menus-api.roocdn.com/images/b271803c-8ae3-4c69-9c5a-671c730dce6b/image.jpeg?width=545&height=307&auto=webp&format=jpg&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'pollo',
                'restaurant_id' => '9'
            ],
            [
                'nome' => "L'intensa",
                'descrizione' => "",
                'prezzo' => '7.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/957332605/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Spianata, brie, zucchine grigliate, peperoni grigliati, maionese',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "La regina con crema pistacchio salato",
                'descrizione' => "",
                'prezzo' => '7.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/957332605/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Mortadella cuor di paese, bufala, crema pistacchio salato, lattuga',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "La regina con crema tartufo",
                'descrizione' => "",
                'prezzo' => '7.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/1061068286/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Mortadella cuor di paese, bufala, crema tartufo, lattuga',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "La squisita",
                'descrizione' => "",
                'prezzo' => '8.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/966181722/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Tacchino, alpigiana, avocado, pomodoro',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "La prelibata",
                'descrizione' => "",
                'prezzo' => '8.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/198823450/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Speck, mozzarella, provola, funghi, zucchine grigliate e salsa boscaiola',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "Pollorollo con patate",
                'descrizione' => "",
                'prezzo' => '8.40',
                'immagine' => 'https://f.roocdn.com/images/menu_items/954072745/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648200982&fit=crop',
                'visibile' => '1',
                'ingredienti' => 'Rotolo, pollo grigliato, patate al forno, lattuga, pomodoro, maionese',
                'restaurant_id' => '10'
            ],
            [
                'nome' => "Big King Menù Medio + King Fusion Oreo",
                'descrizione' => "",
                'prezzo' => '8.70',
                'immagine' => 'https://f.roocdn.com/images/menu_items/1043967031/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Crispy Chicken Menù Medio + King Fusion Oreo",
                'descrizione' => "",
                'prezzo' => '7.80',
                'immagine' => 'https://f.roocdn.com/images/menu_items/1043967032/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Pecorino & scamorza burger - menù",
                'descrizione' => "Italian Kings - 150gr di carne grigliata, salsa al pecorino Romano DOP, pomodori semi secchi, scamorza e soncino",
                'prezzo' => '12.10',
                'immagine' => 'https://f.roocdn.com/images/menu_items/254551347/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Bacon King - menù",
                'descrizione' => "Inimitabile. Due hamburger di manzo alla griglia con 8 fette di bacon, cheddar, ketchup e maionese",
                'prezzo' => '12.10',
                'immagine' => 'https://f.roocdn.com/images/menu_items/19526412/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Double whopper® - menù",
                'descrizione' => "Classico…doppio! L’impareggiabile gusto del whopper® moltiplicato per due. ..Null'altro da aggiungere.",
                'prezzo' => '12.10',
                'immagine' => 'https://f.roocdn.com/images/menu_items/19526432/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Chicken royale bacon cheese - menù",
                'descrizione' => "Leggerezza golosa! Panino al sesamo extralungo, petto di pollo dorato, maionese, bacon, formaggio, lattuga e pomodoro.",
                'prezzo' => '12.10',
                'immagine' => 'https://f.roocdn.com/images/menu_items/19526436/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1648454815&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '11'
            ],
            [
                'nome' => "Crea il tuo gelato - per 3/4 persone",
                'descrizione' => "I tuoi gusti di gelato preferiti in una vaschetta da 500gr, 300gr di panna montata, granelle croccanti, coni gelato classici e il grembiule marchiato grom - il kit perfetto per trasformare in una festa la tua pausa gelato",
                'prezzo' => '22',
                'immagine' => 'https://f.roocdn.com/images/menu_items/97674239/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
            ],
            [
                'nome' => "Gelato fai da te - grande",
                'descrizione' => "Servi il gelato come un vero professionista! Hai a disposizione 1 vaschetta di gelato da 1kg, 1 vaschetta di panna montata da 300gr e come asso nella manica avrai lo scooper d'acciaio marchiato Grom!",
                'prezzo' => '33',
                'immagine' => 'https://f.roocdn.com/images/menu_items/774288958/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
            ],
            [
                'nome' => "Vaschetta di gelato da 500gr - per 3-4 persone",
                'descrizione' => "Scegli i tuoi 3 gusti di gelato preferiti. Senza glutine, senza aromi, senza coloranti e senza emulsionanti",
                'prezzo' => '11',
                'immagine' => 'https://f.roocdn.com/images/menu_items/973740757/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
            ],
            [
                'nome' => "Vaschetta panna montata 600gr",
                'descrizione' => "Montata delicatamente, poco dolce e tipica per la sua consitenza soffice e compatta",
                'prezzo' => '12',
                'immagine' => 'https://f.roocdn.com/images/menu_items/97674228/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
            ],
            [
                'nome' => "Biscotti cioccolato fondente 200gr",
                'descrizione' => "Prodotti con farina macinata a pietra e cioccolato fondente ecuador in pezzi, i nostri biscotti al cioccolato fondente sono golosi, croccanti e senza glutine",
                'prezzo' => '6',
                'immagine' => 'https://f.roocdn.com/images/menu_items/97674206/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
            ],
            [
                'nome' => "Crema spalmabile al pistacchio",
                'descrizione' => "Prodotta con oltre il 30% di pistacchio, è vellutata e leggermente salata. Perfetta per accompagnare spuntini dolci o salati e caffè golosi",
                'prezzo' => '7.50',
                'immagine' => 'https://f.roocdn.com/images/menu_items/97674210/item-image.jpg?width=545&height=307&auto=webp&format=jpg&v=1646745736&fit=crop',
                'visibile' => '1',
                'ingredienti' => '',
                'restaurant_id' => '12'
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