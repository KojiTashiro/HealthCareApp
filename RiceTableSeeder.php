<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiceTableSeeder extends Seeder
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
            'food_name'         => 'rice',
            'protein_g'         => '6.1',
            'lipid_g'           => '3.7',
            'carbohydrate_g'    => '38.5',
            'calcium_mg'        => '15',
            'iron_mg'           => '0.4',
            'vitaminA_mcg'      => '23',
            'vitaminE_mg'       => '0.7',
            'vitaminB1_mg'      => '0.03',
            'vitaminB2_mg'      => '0.05',
            'vitaminC_mg'       => '2',
            'dietary_fibers_g'  => '0.6',
            'Saturated_fatty_acid_g'  => '0.52',
            'salt_g'   => '0.2',

        ];

        DB::table('rice')->truncate();
        DB::table('rice')->insert($param);
    }
}
