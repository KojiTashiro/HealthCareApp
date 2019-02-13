<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class the_necessary_nutrient_old_woman extends Model
{
    protected $table = 'the_necessary_nutrients_old_women';

    public function getData()
    {   
        return  '■タンパク質 ' . $this->protein_g . '(g)' .
                ' ■脂質' . $this->lipid_g . '(g)' . ' ■炭水化物 ' . $this->carbohydrate_g . '(g)' .
                ' ■カルシウム ' . $this->calcium_mg . '(mg)' . ' ■鉄分 ' . $this->iron_mg . '(mg)' .
                ' ■ビタミンA ' . $this->vitaminA_mug . '(mug)' . ' ■ビタミンE ' . $this->vitaminE_mg . '(mg)' .
                ' ■ビタミンB1 ' . $this->vitaminB1_mg . '(mg)' . ' ■ビタミンB2 ' . $this->vitaminB2_mg . '(mg)' .
                ' ■ビタミンC ' . $this->vitaminC_mg . '(mg)' . ' ■食物繊維 ' . $this->dietary_fibers_g . '(g)';
    }
}
