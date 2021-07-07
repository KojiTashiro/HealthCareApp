<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsWomenFrom50To69YearsOld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '97',
            'lipid_g'        => '64.7',
            'carbohydrate_g' => '315.3',
            'calcium_mg'     => '2500',
            'iron_mg'        => '40',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '700',
            'vitaminB1_mg'   => '0.9',
            'vitaminB2_mg'   => '1',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '18',
            'Saturated_fatty_acid_g' => '15.09',
            'salt_g'          => '7',
        ];
        DB::table('the_necessary_nutrients_women_from_50_69_years_old')->truncate();
        DB::table('the_necessary_nutrients_women_from_50_69_years_old')->insert($param);
    }
}
