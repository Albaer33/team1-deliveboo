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

            'Americano',
            'Colazione',
            'Italiano',
            'Giapponese',
            'Vegetariano',
            'Sushi',
            'Pizzeria',
            'Cinese',
            'Indiano',
            'Messicano',
            'Dolci',
            'Greco',
            'Halal',
            'Thai'

        ];

        foreach ($tipologies as $tipology) {
            
            $new_tipology = new Tipology();
            $new_tipology->nome = $tipology;
            $new_tipology->slug = Str::slug($tipology);
            $new_tipology->save();

        }
    }
}
