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

// GET Requests

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');



// Resources

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

