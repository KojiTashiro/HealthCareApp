<?php

namespace App\Http\Middleware;

use Closure;
use Validator;

class FoodValidateDeleteMiddleware
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
        $validator = $request->validate([
            'delete' => 'required',
        ], [
            'delete.required' => '削除するものを選択してください'
        ]);

        return $next($request);
    }
}
