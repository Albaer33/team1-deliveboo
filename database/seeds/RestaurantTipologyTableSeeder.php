<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RestaurantTipologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_tipology')->insert(array(
            array('restaurant_id' => 1, 'tipology_id' => 1),
            array('restaurant_id' => 2, 'tipology_id' => 4),
            array('restaurant_id' => 3, 'tipology_id' => 6),
            array('restaurant_id' => 4, 'tipology_id' => 6),
            array('restaurant_id' => 5, 'tipology_id' => 4),
            array('restaurant_id' => 6, 'tipology_id' => 3),
            array('restaurant_id' => 7, 'tipology_id' => 1),
            array('restaurant_id' => 8, 'tipology_id' => 1),
            array('restaurant_id' => 9, 'tipology_id' => 1),
            array('restaurant_id' => 10, 'tipology_id' => 3),
            array('restaurant_id' => 11, 'tipology_id' => 1),
            array('restaurant_id' => 12, 'tipology_id' => 11),
            
        ));
       
    }
}
