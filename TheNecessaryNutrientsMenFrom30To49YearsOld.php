<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsMenFrom30To49YearsOld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '115.5',
            'lipid_g'        => '77',
            'carbohydrate_g' => '375.2',
            'calcium_mg'     => '2500',
            'iron_mg'        => '55',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '900',
            'vitaminB1_mg'   => '1.2',
            'vitaminB2_mg'   => '1.4',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '20',
            'Saturated_fatty_acid_g' => '17.96',
            'salt_g'          => '8',
        ];
        DB::table('the_necessary_nutrients_men_from_30_49_years_old')->truncate();
        DB::table('the_necessary_nutrients_men_from_30_49_years_old')->insert($param);
    }
}
