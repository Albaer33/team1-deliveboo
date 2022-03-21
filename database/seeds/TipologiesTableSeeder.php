<?php

use App\Tipology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TipologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipologies = [

            'Carne',
            'Pesce',
            'Sushi',
            'Vegetariano',
            'Vegano',
            'Pizzeria',
            'Cinese',
            'Americano',
            'Indiano',
            'Fast food',
            'Pasticceria'

        ];

        foreach ($tipologies as $tipology) {
            
            $new_tipology = new Tipology();
            $new_tipology->nome = $tipology;
            $new_tipology->slug = Str::slug($tipology);
            $new_tipology->save();

        }
    }
}
