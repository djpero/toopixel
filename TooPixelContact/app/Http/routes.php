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

Route::get('/', 'ContactController@index');
Route::post('/contact/send', 'ContactController@send');
Route::post('/contact/finish', 'ContactController@send');
Route::get('/language/choose/{lang}', ['uses' => 'LanguageController@choose']);