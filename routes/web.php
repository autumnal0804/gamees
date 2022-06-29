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
    Route::get('/register','GameController@gameregister');
    Route::post('/register','GameController@create');
    Route::get('/search','GameController@gamesearch');
    Route::get('/detail','GameController@detail');
    Route::post('/comments','GameController@game_comments');
});
Route::group(['prefix' => 'user','middleware'=>'auth'], function() {
    Route::get('/search','UsersController@search');
    Route::get('/game','UsersController@game');
    Route::post('/comments','UsersController@user_comments');
});
Auth::routes();
