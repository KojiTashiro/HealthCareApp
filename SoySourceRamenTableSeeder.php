<?php

use Illuminate\Database\Seeder;

class SoySourceRamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category'          => 'noodle_dishes',
            'food_name'         => 'soy_source_ramen',
            'protein_g'         => '21.8',
            'lipid_g'           => '8.1',
            'carbohydrate_g'    => '74.2',
            'calcium_mg'        => '51',
            'iron_mg'           => '2.5',
            'vitaminA_mcg'      => '5',
            'vitaminE_mg'       => '0.3',
            'vitaminB1_mg'      => '0.3',
            'vitaminB2_mg'      => '0.33',
            'vitaminC_mg'       => '5',
            'dietary_fibers_g'  => '3.1',
            'Saturated_fatty_acid_g'  => '1.14',
            'salt_g'   => '8.1',
        ];

        DB::table('soy_source_ramen')->truncate();
        DB::table('soy_source_ramen')->insert($param);
    }
}
