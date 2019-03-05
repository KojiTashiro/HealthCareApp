<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class UserSelectedFood extends Model
{
    protected $table = 'users_selected_foods';
    protected $guarded = array('id');
    
    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }

    public function getFoodsName()
    {
        return $this::select('food_name')->get();
    }

    public function getSumProtein()
    {
        return $this->where('user_id', \Auth::user()->id)
                    ->sum('protein_g');
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
