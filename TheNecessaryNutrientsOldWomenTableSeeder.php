<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsOldWomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'      => '105.7',
            'lipid_g'        => '70.5',
            'carbohydrate_g' => '343.5',
            'calcium_mg'     => '2500',
            'iron_mg'        => '40',
            'vitaminA_mcg'   => '2700',
            'vitaminE_mg'    => '700',
            'vitaminB1_mg'   => '0.9',
            'vitaminB2_mg'   => '1.1',
            'vitaminC_mg'    => '100',
            'dietary_fibers_g' => '18',
            'Saturated_fatty_acid_g' => '16.44',
            'salt_g'          => '7',
        ];
        DB::table('the_necessary_nutrients_old_women')->truncate();
        DB::table('the_necessary_nutrients_old_women')->insert($param);
    }
}
