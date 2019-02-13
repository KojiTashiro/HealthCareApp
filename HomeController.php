<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\the_necessary_nutrient_old_woman;
use App\the_necessary_nutrient_young_woman;
use App\the_necessary_nutrient_young_man;
use App\User;

class HomeController extends Controller
{
    public $required_data;

    public function index(Request $request)
    {

        $items = DB::select('select * from foods_category');
        $user_table = new user;
        $the_necessary_nutrient_old_woman = the_necessary_nutrient_old_woman::all();
 

        //ユーザがログイン指定ないか、usersTableがnullの場合
        if (\Auth::check() !== true) {
            return view('/home');   
        }else{
        //性別と年齢で条件分岐
        if (\Auth::user()->sex == 'm'){
            if(\Auth::user()->age >= 18 && \Auth::user()->age <= 29){
                $the_necessary_nutrient_young_man = the_necessary_nutrient_young_man::all();
                $required_data = $the_necessary_nutrient_young_man;
            }
        }
        if (\Auth::user()->sex == 'f'){
            if (\Auth::user()->age >= 18 && \Auth::user()->age <= 29){
                $the_necessary_nutrient_young_woman = the_necessary_nutrient_young_woman::all();
                $required_data = $the_necessary_nutrient_young_woman;
              
            }
            if(\Auth::user()->age >= 30 && \Auth::user()->age <= 49){
                $the_necessary_nutrient_old_woman = the_necessary_nutrient_old_woman::all();
                $required_data = $the_necessary_nutrient_old_woman;
            }
        }

        return view('home',[
            'items' => $items,
            'user_table' => $user_table,
            'required_data' => $required_data,
            ]);
        }
    }
}
