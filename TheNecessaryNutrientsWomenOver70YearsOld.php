<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsWomenOver70YearsOld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '93.6',
            'lipid_g'        => '62.4',
            'carbohydrate_g' => '304',
            'calcium_mg'     => '2500',
            'iron_mg'        => '40',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '650',
            'vitaminB1_mg'   => '0.8',
            'vitaminB2_mg'   => '0.9',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '18',
            'Saturated_fatty_acid_g' => '14.55',
            'salt_g'          => '7',
        ];
        DB::table('the_necessary_nutrients_women_over_70_years_old')->truncate();
        DB::table('the_necessary_nutrients_women_over_70_years_old')->insert($param);
    }
}
