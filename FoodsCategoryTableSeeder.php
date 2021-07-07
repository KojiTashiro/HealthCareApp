<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'rice_dishes'        => 'rice_dishes',
            'bread_products'     => 'bread_products',
            'noodle_dishes'      => 'noodle_dishes',
            'meat_dishesd'       => 'meat_dishesd',
            'seefood_dishes'     => 'seefood_dishes',
            'vagetable_dishes'   => 'vagetable_dishes',
            'fruits'             => 'fruits',
            'egg_dishes'         => 'egg_dishes',
            'dairy_products'     => 'dairy_products',
            'desserts'           => 'desserts',
        ];
        DB::table('foods_category')->truncate();
        DB::table('foods_category')->insert($param);
    }
}
