<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TheNecessaryNutrientManFrom15To17YearsOld;
use App\TheNecessaryNutrientManFrom18To29YearsOld;
use App\TheNecessaryNutrientManFrom30To49YearsOld;
use App\TheNecessaryNutrientManFrom50To69YearsOld;
use App\TheNecessaryNutrientManOver70YearsOld;
use App\TheNecessaryNutrientWomanFrom15To17YearsOld;
use App\TheNecessaryNutrientWomanFrom18To29YearsOld;
use App\TheNecessaryNutrientWomanFrom30To49YearsOld;
use App\TheNecessaryNutrientWomanFrom50To69YearsOld;
use App\TheNecessaryNutrientWomanOver70YearsOld;
use App\UserSelectedFood;
use App\RiceProduct;
use App\User;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        if (\Auth::check() !== true) {
            return view('/home');
        } else {
        //性別と年齢で条件分岐
            if (\Auth::user()->sex == 'm') {
                if (\Auth::user()->age >= 15 && \Auth::user()->age <= 17) {
                    $required_data = TheNecessaryNutrientManFrom15To17YearsOld::all();
                }
                if (\Auth::user()->age >= 18 && \Auth::user()->age <= 29) {
                    $required_data = TheNecessaryNutrientManFrom18To29YearsOld::all();
                }
                if (\Auth::user()->age >= 30 && \Auth::user()->age <= 49) {
                    $required_data = TheNecessaryNutrientManFrom30To49YearsOld::all();
                }
                if (\Auth::user()->age >= 50 && \Auth::user()->age <= 69) {
                    $required_data = TheNecessaryNutrientManFrom50To69YearsOld::all();
                }
                if (\Auth::user()->age >= 70) {
                    $required_data = TheNecessaryNutrientManOver70YearsOld::all();
                }
            }
            if (\Auth::user()->sex == 'f') {
                if (\Auth::user()->age >= 15 && \Auth::user()->age <= 17) {
                    $required_data = TheNecessaryNutrientWomanFrom15To17YearsOld::all();
                }
                if (\Auth::user()->age >= 18 && \Auth::user()->age <= 29) {
                    $required_data = TheNecessaryNutrientWomanFrom18To29YearsOld::all();
                }
                if (\Auth::user()->age >= 30 && \Auth::user()->age <= 49) {
                    $required_data = TheNecessaryNutrientWomanFrom30To49YearsOld::all();
                }
                if (\Auth::user()->age >= 50 && \Auth::user()->age <= 69) {
                    $required_data = TheNecessaryNutrientWomanFrom50To69YearsOld::all();
                }
                if (\Auth::user()->age >= 70) {
                    $required_data = TheNecessaryNutrientWomanOver70YearsOld::all();
                }
            }

            //form で受け取った値をDBに保存
            if ($request->has('food')) {
                $selected_foods_data = array_filter($request->input('food'));
                $selected_foods_data = array_values($selected_foods_data);
                $selected_foods_data = implode(':', $selected_foods_data);
                $selected_foods_data = trim($selected_foods_data, '[]');
                $selected_foods_data = json_decode($selected_foods_data);
                
                $user_selected_foods = new UserSelectedFood;
                
                $user_selected_foods->user_id = \Auth::user()->id;
                $user_selected_foods->food_name = $selected_foods_data->food_name;
                $user_selected_foods->protein_g = $selected_foods_data->protein_g;
                $user_selected_foods->lipid_g =$selected_foods_data->lipid_g;
                $user_selected_foods->carbohydrate_g = $selected_foods_data->carbohydrate_g;
                $user_selected_foods->calcium_mg = $selected_foods_data->calcium_mg;
                $user_selected_foods->iron_mg = $selected_foods_data->iron_mg;
                $user_selected_foods->vitaminA_mcg = $selected_foods_data->vitaminA_mcg;
                $user_selected_foods->vitaminE_mg = $selected_foods_data->vitaminE_mg;
                $user_selected_foods->vitaminB1_mg = $selected_foods_data->vitaminB1_mg;
                $user_selected_foods->vitaminB2_mg = $selected_foods_data->vitaminB2_mg;
                $user_selected_foods->vitaminC_mg = $selected_foods_data->vitaminC_mg;
                $user_selected_foods->dietary_fibers_g = $selected_foods_data->dietary_fibers_g;
                $user_selected_foods->Saturated_fatty_acid_g = $selected_foods_data->Saturated_fatty_acid_g;
                $user_selected_foods->salt_g = $selected_foods_data->salt_g;

                $user_selected_foods->save();
                $request->session()->regenerateToken();
                $users = User::with('UserSelectedFood')->get();
            }
                $userSelectedFood = UserSelectedFood::all();
                $got_foods = DB::table('users_selected_foods')
                    ->select(
                        'user_id',
                        'food_name',
                        'protein_g',
                        'lipid_g',
                        'carbohydrate_g',
                        'calcium_mg',
                        'iron_mg',
                        'vitaminA_mcg',
                        'vitaminE_mg',
                        'vitaminB1_mg',
                        'vitaminB2_mg',
                        'vitaminC_mg',
                        'dietary_fibers_g',
                        'Saturated_fatty_acid_g',
                        'salt_g'
                    )
                    ->where('user_id', \Auth::user()->id)
                    ->get();

                return view('home', [
                    'required_data'       => $required_data,
                    'userSelectedFood'    => $userSelectedFood,
                    'got_foods'           => $got_foods,
                ]);
        }
    }

    public function delete()
    {
        $got_foods = DB::table('users_selected_foods')
        ->select(
            'user_id',
            'food_name',
            'protein_g',
            'lipid_g',
            'carbohydrate_g',
            'calcium_mg',
            'iron_mg',
            'vitaminA_mcg',
            'vitaminE_mg',
            'vitaminB1_mg',
            'vitaminB2_mg',
            'vitaminC_mg',
            'dietary_fibers_g',
            'Saturated_fatty_acid_g',
            'salt_g'
        )
        ->where('user_id', \Auth::user()->id)
        ->get();

        return view('delete', ['got_foods' => $got_foods]);
    }

    public function remove(Request $request)
    {
        UserSelectedFood::where('food_name', $request->input('delete'))
        ->first()
        ->delete();
        return redirect('home');
    }

    public function info()
    {
        return view('info');
    }
}
