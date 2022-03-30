<?php

use Illuminate\Database\Seeder;

class RestaurantTipologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantTipology = [
                [
                'restaurant_id' => '1',
                'tipology_id' => '1'
                ],
                [
                'restaurant_id' => '2',
                'tipology_id' => '1'
                ],
        ];
    }
}
