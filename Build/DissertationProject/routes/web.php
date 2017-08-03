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



Route::resource('/new_project', 'Project');
Route::post('/new_project', 'Project@create');


Route::resource('/new_previous_project', 'Previous_project');
Route::post('/new_previous_project', 'Previous_project@create');

Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});

Route::get('/new_staff', function (){
   return view('/auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
