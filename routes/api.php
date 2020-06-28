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

Route::get('tests', 'API\ApiController@index');
Route::get('infections', 'API\ApiController@infections');
Route::get('deaths', 'API\ApiController@deaths');
Route::get('recovered', 'API\ApiController@recovered');
Route::get('provinces', 'API\ApiController@provinces'); 
Route::get('donors', 'API\ApiController@donorsDetail'); 
Route::get('spent', 'API\ApiController@spent'); 
Route::get('isolation-centres', 'API\ApiController@isolation'); 
