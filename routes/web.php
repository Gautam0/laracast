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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/projects', 'ProjectController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');


// Route::get('/projects', 'ProjectController@index');

// Route::get('/projects/create', 'ProjectController@create'); 
// // Route::view('/projects/create', 'projects.create');

// Route::get('/projects/{project}', 'ProjectController@show');

// Route::post('/projects', 'ProjectController@store');

// Route::get('/projects/{project}/edit', 'ProjectController@edit');

// Route::patch('/projects/{project}', 'ProjectController@update');

// Route::delete('/projects/{project}', 'ProjectController@destroy');


