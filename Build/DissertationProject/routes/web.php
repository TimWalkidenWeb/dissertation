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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::resource('/new_projects', 'new_project');
Route::post('/new_projects', 'new_project@create');



Route::resource('project','Project');
Route::get('projects/{id}', 'Project@show');
Route::get('projects/{id}/edit', 'Project@edit');
Route::patch('projects/{id}', 'Project@update');
Route::delete('projects/{id}', 'Project@destroy');




Route::resource('/new_previous_project', 'Previouscreate');
Route::post('/new_previous_project', 'Previouscreate@create');


Route::resource('previous_projects', 'Previous_project');






Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});

Route::get('/new_staff', function (){
   return view('/auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Route::get('projects/{id}', 'view_projectController@show');