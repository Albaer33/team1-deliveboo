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
    public function run(Faker $faker)
    {
        for($i = 0; $i <10; $i++){
            $new_dish = new Dish();
            $new_dish->nome = $faker->words(3, true);
            $new_dish->descrizione = $faker->paragraphs(rand(2,6), true);
            $new_dish->slug = Str::slug($new_dish->nome);
            $new_dish->prezzo = $faker-> randomFloat(2, 0, 999);
            $new_dish->immagine = $faker ->sentence();
            $new_dish->visibile = rand(0, 1);
            $new_dish->ingredienti = $faker ->words(15, true);
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