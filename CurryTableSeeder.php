<?php

use Illuminate\Database\Seeder;

class CurryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category'          => 'rice_dishes',
            'food_name'         => 'curry',
            'protein_g'         => '15.5',
            'lipid_g'           => '31.7',
            'carbohydrate_g'    => '88.3',
            'calcium_mg'        => '41',
            'iron_mg'           => '1.4',
            'vitaminA_mcg'      => '83',
            'vitaminE_mg'       => '1.2',
            'vitaminB1_mg'      => '0.39',
            'vitaminB2_mg'      => '0.12',
            'vitaminC_mg'       => '6',
            'dietary_fibers_g'  => '2.4',
            'Saturated_fatty_acid_g'  => '12.27',
            'salt_g'   => '2.2',

        ];

        DB::table('curry')->truncate();
        DB::table('curry')->insert($param);
    }
    
}
