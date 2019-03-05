<?php

namespace App\Http\Middleware;

use Closure;
use Validator;

class FoodValidateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('food') == null) {
            return redirect('foods/add');
        }

        $data = array_diff($request->input('food'), array('',));
        $rules = ['food' => 'required'];
        $message = ['food.required' => '食べ物を一つ選択してください'];

        $validator = Validator::make($data, $rules, $message);


        if ($validator->fails()) {
            if (empty($data)) {
                return redirect('foods/add')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        return $next($request);
    }
}
