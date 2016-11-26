<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'MainController@index');

Route::get('/navigation', 'NavigationController@index');

Route::post('/navigation', 'NavigationController@store');

Route::get('/service', 'ServiceController@index');

Route::get('/project', 'ProjectController@index');

Route::get('/contact', 'ContactController@index');


