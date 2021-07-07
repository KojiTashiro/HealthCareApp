<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsWomenFrom50To69YearsOldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '113.6',
            'lipid_g'        => '75.7',
            'carbohydrate_g' => '369',
            'calcium_mg'     => '650',
            'iron_mg'        => '40',
            'vitaminA_mcg'   => '2600',
            'vitaminE_mg'    => '650',
            'vitaminB1_mg'   => '1.1',
            'vitaminB2_mg'   => '1.2',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '17',
            'Saturated_fatty_acid_g' => '17.66',
            'salt_g'          => '7',
        ];
        DB::table('the_necessary_nutrients_women_from_50_69_years_old')->truncate();
        DB::table('the_necessary_nutrients_women_from_50_69_years_old')->insert($param);
    }
}
