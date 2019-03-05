<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheNecessaryNutrientOldWoman extends Model
{
    protected $table = 'the_necessary_nutrients_old_women';

    public function getData()
    {
        return  '■タンパク質 : ' . $this->protein_g . '(g)' .
                ' ■脂質 : ' . $this->lipid_g . '(g)' . ' ■炭水化物 : ' . $this->carbohydrate_g . '(g)' .
                ' ■カルシウム : ' . $this->calcium_mg . '(mg)' . ' ■鉄分 : ' . $this->iron_mg . '(mg)' .
                ' ■ビタミンA  :' . $this->vitaminA_mug . '(mug)' . ' ■ビタミンE : ' . $this->vitaminE_mg . '(mg)' .
                ' ■ビタミンB1 : ' . $this->vitaminB1_mg . '(mg)' . ' ■ビタミンB2 : ' . $this->vitaminB2_mg . '(mg)' .
                ' ■ビタミンC : ' . $this->vitaminC_mg . '(mg)' . ' ■食物繊維 : ' . $this->dietary_fibers_g . '(g)' .
                ' ■飽和脂肪酸 : ' . $this->dietary_fibers_g . '(g)' . ' ■塩分 : ' . $this->salt_g . '(g)';
    }
    public function getFoodsName()
    {
        return $this::select('food_name')->get();
    }

    public function getProtein()
    {
        return $this->select('protein_g')->get();
    }

    public function getSumlipid()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('lipid_g');
    }

    public function getSumCarbohydrate()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('carbohydrate_g');
    }

    public function getSumCalcium()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('calcium_mg');
    }

    public function getSumIron()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('iron_mg');
    }

    public function getSumVitaminA()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('vitaminA_mcg');
    }

    public function getSumVitaminE()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('vitaminE_mg');
    }

    public function getSumVitaminB1()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('vitaminB1_mg');
    }

    public function getSumVitaminB2()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('vitaminB2_mg');
    }

    public function getSumVitaminC()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('vitaminC_mg');
    }

    public function getSumDietaryFibers()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('dietary_fibers_g');
    }

    public function getSumSaturatedFattyAcid()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('Saturated_fatty_acid_g');
    }

    public function getSumSalt()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('salt_g');
    }
}
