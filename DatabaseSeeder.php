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
            SoySourceRamenTableSeeder::class,
            TheNecessaryNutrientsMenFrom15To17YearsOldTableSeeder::class,
            TheNecessaryNutrientsMenFrom18To29YearsOldTableSeeder::class,
            TheNecessaryNutrientsMenFrom30To49YearsOldTableSeeder::class,
            TheNecessaryNutrientsMenFrom50To69YearsOldTableSeeder::class,
            TheNecessaryNutrientsMenOver70YearsOldTableSeeder::class,
            TheNecessaryNutrientsWomenFrom15To17YearsOldTableSeeder::class,
            TheNecessaryNutrientsWomenFrom18To29YearsOldTableSeeder::class,
            TheNecessaryNutrientsWomenFrom30To49YearsOldTableSeeder::class,
            TheNecessaryNutrientsWomenFrom50To69YearsOldTableSeeder::class,
            TheNecessaryNutrientsWomenOver70YearsOldTableSeeder::class,

            ]);
    }
}
