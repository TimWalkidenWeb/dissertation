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

Route::get('/previous_project', function () {
    return view('new_previous_project');
});

Route::get('/staff', function () {
    return view('new_staff');
});

Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});