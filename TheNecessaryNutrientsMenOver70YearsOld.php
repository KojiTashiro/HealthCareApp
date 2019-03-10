<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsMenOver70YearsOld extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '103',
            'lipid_g'        => '68.7',
            'carbohydrate_g' => '334.8',
            'calcium_mg'     => '2500',
            'iron_mg'        => '50',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '750',
            'vitaminB1_mg'   => '1',
            'vitaminB2_mg'   => '1.1',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '20',
            'Saturated_fatty_acid_g' => '16.02',
            'salt_g'          => '8',
        ];
        DB::table('the_necessary_nutrients_men_over_70_years_old')->truncate();
        DB::table('the_necessary_nutrients_men_over_70_years_old')->insert($param);
    }
}
