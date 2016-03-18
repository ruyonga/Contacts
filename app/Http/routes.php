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
Route::get('home','PagesController@home');
Route::get('signup','PagesController@signup');
Route::get('login','PagesController@login');
Route::get('addActivity','PagesController@addActivity');
Route::get('admin','PagesController@admin');
Route::get('region','PagesController@region');
Route::get('activity','PagesController@activity');



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
