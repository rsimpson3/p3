<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/text/create', 'FriendController@getCreate');
    Route::post('/text/create', 'FriendController@postCreate');

    Route::get('/practice',function() {
        return 'This is only a practice route.';
    });

});
