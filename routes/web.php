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
Route::get('stats-by-province', 'StatsByProvinceController@index')->name('provinces');
Route::get('funds/tracker', 'FundsTrackerController@index')->name('funds');
Route::get('privacy/policy', 'PrivacyPolicyController@index')->name('privacy');
Route::get('terms', 'TermsController@index')->name('terms');
Route::get('zimbabwe-covid19-isolation-centres', 'StatsByProvinceController@isolation')->name('isolation');
Route::view('/about',  'about');
Route::view('/api/docs',  'api-docs');

Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::middleware(['auth', 'admin'])->group(function ()
{
	Route::get('admin/home', 'HomeController@index')->name('home')->middleware('admin');
	Route::resource('admin/provinces', 'ProvincesController');
	Route::resource('admin/infections', 'InfectionsController');
	Route::resource('admin/deaths', 'DeathsController');
	Route::resource('admin/recovered', 'RecoveredController');
	Route::resource('admin/tests', 'TestsController');
	Route::resource('admin/quarantine', 'QuarantineController');
	Route::resource('admin/survey', 'SurveyController');
	Route::resource('admin/countries', 'CountriesController');
	Route::resource('admin/donor-type', 'DonorTypeController');
	Route::resource('admin/focus-area', 'FocusAreaController');
	Route::resource('admin/donor-name', 'DonorNameController');
	Route::resource('admin/pledge', 'PledgeController');
	Route::resource('admin/recieved', 'RecievedController');
	Route::resource('admin/products', 'ProductController');
	Route::resource('admin/spent', 'SpentController');
	Route::resource('admin/users', 'Admin\UserController');
});

Route::resource('self-positive', 'SelfPositiveController');
Route::post('donate-paynow', 'DonationsController@paynow')->name('paynow');
Route::resource('donate', 'DonationsController');
