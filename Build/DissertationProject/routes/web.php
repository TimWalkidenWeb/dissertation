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

//route used to test a outcome during the creation
Route::get('/welcome', function () {
    return view('welcome');
});

//set of routes to create a new project
Route::resource('/new_projects', 'new_project');
Route::post('/new_projects', 'new_project@create');


//set of routes to deal with the current project being advertised
Route::resource('project','Project');
Route::get('projects/{id}', 'Project@show');
Route::get('projects/{id}/edit', 'Project@edit');
Route::patch('projects/{id}', 'Project@update');
Route::delete('projects/{id}', 'Project@destroy');


//set of routes to create projects
Route::resource('/new_previous_project', 'Previouscreate');
Route::post('/new_previous_project', 'Previouscreate@create');

//set of routes to deal with previous projects
Route::resource('previous_projects', 'Previous_project');
Route::get('previous_projects/{id}', 'Previous_project@show');
Route::get('previous_projects/{id}/edit', 'Previous_project@edit');
Route::patch('previous_projects/{id}', 'Previous_project@update');
Route::delete('previous_projects/{id}, Previous_project@destroy');





Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});

Route::get('/new_staff', function (){
   return view('/auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Route::get('projects/{id}', 'view_projectController@show');