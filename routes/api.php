<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List vaccinations
Route::get('vaccinations', 'VaccinationsController@index');

//List single vaccination
Route::get('vaccinations/{id}', 'VaccinationsController@show');

//Create new vaccination
Route::post('vaccinations', 'VaccinationsController@store');

//Update vaccination
Route::put('vaccinations/{id}', 'VaccinationsController@store');

//Delete vaccination
Route::delete('vaccinations/{id}', 'VaccinationsController@destroy');
