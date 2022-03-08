<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
                [
                    'food_name' => 'Chocolate Donut',
                    'description' => 'Delicious Food with Chocolate',
                    'price' =>'4000',
                    'category' => 'Sweet Food'
                ],
                [
                    'food_name' => 'Strawberry Donut',
                    'description' => 'Delicious Food with Strawberry Sauce',
                    'price' =>'4000',
                    'category' => 'Sweet Food'
                ]
            ];
        DB::table('food_menus')->insert($data);
    }
}
