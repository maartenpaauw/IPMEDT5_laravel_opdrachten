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

Route::get('beers/random', 'BeerController@random');
Route::get('beers/more-than-ten-percent', 'BeerController@moreThanTenPercent');
Route::resource('beers', 'BeerController', ['only' => ['index', 'show']]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
