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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('admin/home', 'HomeController@index')->name('home')->middleware('admin');

Route::resource('admin/provinces', 'ProvincesController')->middleware('admin');
Route::resource('admin/infections', 'InfectionsController')->middleware('admin');
Route::get('admin/RequestAmbulance/{requestAmbulance}/assisted', 'RequestAmbulancesController@assisted')->name('RequestAmbulance.assisted')->middleware('admin');
Route::resource('admin/deaths', 'DeathsController')->middleware('admin');
Route::resource('admin/recovered', 'RecoveredController')->middleware('admin');
Route::resource('admin/tests', 'TestsController')->middleware('admin');
Route::resource('admin/quarantine', 'QuarantineController');
Route::resource('admin/survey', 'SurveyController');

Route::resource('RequestAmbulance', 'RequestAmbulancesController')->middleware('auth');
Route::get('stats-by-province', 'StatsByProvinceController@index')->name('provinces');
Route::get('zimbabwe-covid19-isolation-centres', 'StatsByProvinceController@isolation')->name('isolation');
Route::resource('self-positive', 'SelfPositiveController');

Route::resource('donate', 'DonateController');
Route::get('donate', 'DonateController@paynow')->name('paynow');
