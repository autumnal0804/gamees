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
Route::group(['prefix' => 'game','middleware'=>'auth'], function() {
    Route::get('/home','GameController@home');
    Route::get('/userlist','GameController@userlist');
    Route::get('/gameregister','GameController@gameregister');
    Route::post('/gameregister','GameController@create');
    Route::get('/usergame','GameController@usergame');
});
Auth::routes();
