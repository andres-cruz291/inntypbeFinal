<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/bill', 'BillController@index');
Route::post('/bill', 'BillController@store');
Route::get('/bill/{bill}', 'BillController@show');
Route::put('/bill/{bill}', 'BillController@update');

Route::get('/pizza', 'PizzaController@index');
Route::post('/pizza', 'PizzaController@store');
Route::get('/pizza/{pizza}', 'PizzaController@show');
Route::put('/pizza/{pizza}', 'PizzaController@update');

Route::get('/foto/{pizza}', 'FotoController@show');
Route::delete('/foto/{pizza}', 'FotoController@delete');

Route::post('/user', 'UserController@store');
Route::get('/user/{user}', 'UserController@show');
Route::post('/user/validate', 'UserController@validateLogin');

