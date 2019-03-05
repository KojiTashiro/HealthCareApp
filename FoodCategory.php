<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    protected $table = 'foods_category';

    public function getData()
    {
        return  ' ■米類: ' . $this->rice_dishes . ' ■パン類: ' . $this->bread_products .
                ' ■麺類: ' . $this->noodle_dishes . ' ■肉類: ' . $this->meat_dishesd .
                ' ■海鮮類: ' . $this->seefood_dishes . ' ■野菜類: ' . $this->vagetable_dishes .
                ' ■フルーツ: ' . $this->fruits . ' ■卵類: ' . $this->egg_dishes .
                ' ■乳製品類: ' . $this->dairy_products . ' ■デザート類: ' . $this->desserts;
    }
}
