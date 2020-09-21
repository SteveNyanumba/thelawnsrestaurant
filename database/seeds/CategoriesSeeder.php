<?php

use App\FoodCategory;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category'=>'Juices'
            ],
            [
                'category'=>'Cakes & Pastries'
            ],
            [
                'category'=>'Continental Cuisine'
            ],
        ];

        FoodCategory::insert($categories);
    }
}
