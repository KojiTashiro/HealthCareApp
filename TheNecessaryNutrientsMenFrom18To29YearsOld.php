<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsMenFrom18To29YearsOld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '119.2',
            'lipid_g'        => '79.5',
            'carbohydrate_g' => '387.4',
            'calcium_mg'     => '2500',
            'iron_mg'        => '50',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '800',
            'vitaminB1_mg'   => '1.2',
            'vitaminB2_mg'   => '1.4',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '20',
            'Saturated_fatty_acid_g' => '18.54',
            'salt_g'          => '8',
        ];
        DB::table('the_necessary_nutrients_men_from_18_29_years_old')->truncate();
        DB::table('the_necessary_nutrients_men_from_18_29_years_old')->insert($param);
    }
}
