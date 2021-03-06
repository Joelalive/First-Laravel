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
// Route::get('/' , function() {
//    dd(app('App\Example'));
// });
use App\Services\Twitter;

Route::get('/example', function(Twitter $twitter){
    dd($twitter);
});

// app()->singleton('App\Services\Twitter', function(){
//     return new \App\Services\Twitter('asdasdasd');
// });

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');



// Resources

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
