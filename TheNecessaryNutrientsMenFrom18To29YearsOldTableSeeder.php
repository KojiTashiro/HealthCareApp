<?php

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsMenFrom18To29YearsOldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $param = [
                'protein_g'      => '124.4',
                'lipid_g'        => '82.8',
                'carbohydrate_g' => '403.5',
                'calcium_mg'     => '800',
                'iron_mg'        => '50',
                'vitaminA_mcg'   => '2600',
                'vitaminE_mg'    => '750',
                'vitaminB1_mg'   => '1.4',
                'vitaminB2_mg'   => '1.5',
                'vitaminC_mg'    => '100',
                'dietary_fibers_g' => '19',
                'Saturated_fatty_acid_g' => '19.31',
                'salt_g'          => '8',
            ];
            DB::table('the_necessary_nutrients_men_from_18_29_years_old')->truncate();
            DB::table('the_necessary_nutrients_men_from_18_29_years_old')->insert($param);
        }
}
