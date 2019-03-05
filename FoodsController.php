<?php

namespace App\Http\Controllers\Foods;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FoodCategory;
use App\Rice;
use App\Curry;
use App\User;
use App\SoySourceRamen;

class FoodsController extends Controller
{

    public function add(Request $request)
    {

        $foods_category = FoodCategory::all();
        $Rice = Rice::all();
        $Curry = Curry::all();
        $SoySourceRamen = SoySourceRamen::all();

        return view('foods.add', [
            'foods_category' => $foods_category,
            'Rice'  => $Rice,
            'Curry' => $Curry,
            'SoySourceRamen' => $SoySourceRamen,
        ]);
    }
}
