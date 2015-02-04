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

Route::get('/', 'ComingSoonController@index');

Route::get('coming-soon/time', 'ComingSoonController@getTime');
Route::post('coming-soon/subscribe', 'ComingSoonController@subscribe');