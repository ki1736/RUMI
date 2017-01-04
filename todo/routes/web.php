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
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware'=>'auth'], function(){

  //꼭 필요할때만 resource
  Route::resource('project', 'ProjectController');
//    Route::get('project/{project_id}/task', 'TaskController@index')->name('task.list');
//  Route::resource('task', 'TaskController');
  Route::get('task/list/{id}', 'TaskController@index')->name('task.index');
  Route::get('task/create/{id}', 'TaskController@create')->name('task.create');
  Route::post('task/store', 'TaskController@store')->name('task.store');
  Route::get('task/edit/{id}', 'TaskController@edit')->name('task.edit');
  Route::put('task/update/{id}', 'TaskController@update')->name('task.update');
  Route::get('task/show/{id}', 'TaskController@show')->name('task.show');
  Route::get('task/destroy/{id}', 'TaskController@destroy')->name('task.destroy');


//
    Route::get('/home', 'HomeController@index');
});