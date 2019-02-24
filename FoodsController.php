<?php

namespace App\Http\Controllers\Foods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FoodCategory;
use App\Rice;
use App\Curry;
use App\User;

class FoodsController extends Controller
{

    public function add(Request $request)
    {

        $foods_category = FoodCategory::all();
        $Rice = Rice::all();
        $Curry = Curry::all();

        return view('foods.add', [
            'foods_category' => $foods_category,
            'Rice'  => $Rice,
            'Curry' => $Curry,
        ]);
    }

    public function goHome(Request $request)
    {
        $foodData = json_decode($request->input('food'));
        foreach ($foodData as $value) {
            return var_dump($value->product_name);
        }
    }
}
