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

Route::get('/project', function () {
    return view('new_project');
});

Route::resource('/new_project', 'Project');

Route::get('/previous_project', function () {
    return view('new_previous_project');
});

Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});

Route::resource('/new_staff', 'Staff_member');

Route::post('/new_staff', 'Staff_member@create');
