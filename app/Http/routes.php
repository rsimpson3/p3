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
        return 'Welcome to P3 by Robert Simpson';
    });

    Route::get('/practice',function() {

        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(3);
        echo implode('<p>', $paragraphs);
        return '';
    });

});
