<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Middleware\FoodValidateMiddleware;
use App\Http\Middleware\FoodValidateDeleteMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::post('/home', 'HomeController@index')
    ->middleware(FoodValidateMiddleware::class);

Route::get('/foods/add', 'Foods\FoodsController@add');
Route::post('/foods/add', 'Foods\FoodsController@register');

Route::get('/home/delete', 'HomeController@delete');
Route::post('/home/delete', 'HomeController@remove')
    ->middleware(FoodValidateDeleteMiddleware::class);

Route::get('/auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');

Route::get('/auth/logout', 'Auth\LoginController@logout');

Route::get('/home/info', 'HomeController@info');
