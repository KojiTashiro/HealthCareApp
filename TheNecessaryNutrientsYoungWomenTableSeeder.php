<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsYoungWomenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'    => '109.2',
            'lipid_g'        => '72.8',
            'carbohydrate_g' => '354.7',
            'calcium_mg'      => '2500',
            'iron_mg'         => '40',
            'vitaminA_mcg'     => '2700',
            'vitaminE_mg'     => '650',
            'vitaminB1_mg'    => '0.9',
            'vitaminB2_mg'    => '1',
            'vitaminC_mg'     => '100',
            'dietary_fibers_g' => '18',
            'Saturated_fatty_acid_g' => '16.98',
            'salt_g'          => '7',
        ];
        DB::table('the_necessary_nutrients_young_women')->truncate();
        DB::table('the_necessary_nutrients_young_women')->insert($param);
    }
}
