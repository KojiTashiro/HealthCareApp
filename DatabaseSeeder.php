<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CurryTableSeeder::class,
            FoodsCategoryTableSeeder::class,
            RiceTableSeeder::class,
            TheNecessaryNutrientsOldWomenTableSeeder::class,
            TheNecessaryNutrientsYoungMenTableSeeder::class,
            TheNecessaryNutrientsYoungMenTableSeeder::class,
            TheNecessaryNutrientsYoungWomenTableSeeder::class,
            SoySourceRamenTableSeeder::class,
            ]);
    }
}
