<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','PagesController@home');
Route::get('activity','ActivityController@index');

Route::get('addregion','RegionController@addRegion');



        //Activity
Route::get('activities','ActivityController@index');
Route::post('activity', 'ActivityController@store');
Route::get('activities/create','ActivityController@create' );
Route::get('activities/{id}','ActivityController@show');

//Accounts
  Route::get('accounts','AccountsController@index');
  Route::post('account','AccountsController@store');
  Route::get('accounts/create','AccountsController@create');
  Route::get('accounts/{id}','AccountsController@show');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
