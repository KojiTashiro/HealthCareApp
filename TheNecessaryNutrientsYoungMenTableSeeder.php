<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TheNecessaryNutrientsYoungMenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'protein_g'    => '114.3',
            'lipid_g'        => '76.2',
            'carbohydrate_g' => '371.3',
            'calcium_mg'      => '2500',
            'iron_mg'         => '55',
            'vitaminA_mcg'     => '2700',
            'vitaminE_mg'     => '900',
            'vitaminB1_mg'    => '1.2',
            'vitaminB2_mg'    => '1.4',
            'vitaminC_mg'     => '100',
            'dietary_fibers_g' => '20',
            'Saturated_fatty_acid_g' => '17.77',
            'salt_g'          => '8',
        ];
        DB::table('the_necessary_nutrients_young_men')->truncate();
        DB::table('the_necessary_nutrients_young_men')->insert($param);
    }
}
