<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheNecessaryNutrientYoungWoman extends Model
{
    protected $table = 'the_necessary_nutrients_young_women';

    public function getData()
    {
        return  '■タンパク質 : ' . $this->protein_g . '(g)' .
                ' ■脂質 : ' . $this->lipid_g . '(g)' . ' ■炭水化物 : ' . $this->carbohydrate_g . '(g)' .
                ' ■カルシウム : ' . $this->calcium_mg . '(mg)' . ' ■鉄分 : ' . $this->iron_mg . '(mg)' .
                ' ■ビタミンA  :' . $this->vitaminA_mug . '(mcg)' . ' ■ビタミンE : ' . $this->vitaminE_mg . '(mg)' .
                ' ■ビタミンB1 : ' . $this->vitaminB1_mg . '(mg)' . ' ■ビタミンB2 : ' . $this->vitaminB2_mg . '(mg)' .
                ' ■ビタミンC : ' . $this->vitaminC_mg . '(mg)' . ' ■食物繊維 : ' . $this->dietary_fibers_g . '(g)' .
                ' ■飽和脂肪酸 : ' . $this->dietary_fibers_g . '(g)' . ' ■塩分 : ' . $this->salt_g . '(g)';
    }

    public function getProtein()
    {
        return $this->protein_g;
    }

    public function getlipid()
    {
        return $this->lipid_g;
    }

    public function getCarbohydrate()
    {
        return $this->carbohydrate_g;
    }

    public function getCalcium()
    {
        return $this->calcium_mg;
    }

    public function getIron()
    {
        return $this->iron_mg;
    }

    public function getVitaminA()
    {
        return $this->vitaminA_mug;
    }

    public function getVitaminE()
    {
        return $this->vitaminE_mug;
    }

    public function getVitaminB1()
    {
        return $this->vitaminB1_mg;
    }

    public function getSumVitaminB2()
    {
        return $this->vitaminB2_mg;
    }

    public function getVitaminC()
    {
        return $this->vitaminC_mg;
    }

    public function getDietaryFibers()
    {
        return $this->dietary_fibers_g;
    }

    public function getSaturatedFattyAcid()
    {
        return $this->Saturated_fatty_acid_g;
    }

    public function getSalt()
    {
        return $this->salt_g;
    }
}
