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

Route::get('/design_1', function () {
    return view('design_1');
});
Route::get('/design_2', function () {
    return view('design_2');
});
//set of routes to create a new project
Route::resource('/new_project', 'new_project');
Route::post('/new_project_store', 'new_project@store');

Route::post('upload','new_project@store');


//set of routes to deal with the current project being advertised
Route::resource('project','Project');
Route::get('project/{id}', 'Project@show');
Route::get('projects/{id}/edit', 'Project@edit');
Route::patch('update/{id}', 'Project@update');
//Route::patch('projectsPathway/{id}', 'Project@updatePathway');
Route::delete('projects/{id}', 'Project@destroy');



//set of routes to create projects
Route::resource('/new_previous_project', 'Previouscreate');
Route::post('/new_previous_project', 'Previouscreate@store');

//set of routes to deal with previous projects
Route::resource('previous_projects', 'Previous_project');
Route::get('show/{id}', 'FileController@show');
Route::get('previous_projects/{id}/edit', 'Previous_project@edit');
Route::patch('previous_projects/{id}', 'Previous_project@update');
Route::delete('previous_projects/{id}, Previous_project@destroy');


Route::get('/learning_material', function () {
    return view('new_learningMaterial');
});

Route::get('/log_out', function () {
    Auth::logout();
    return view('home');
});


Route::resource('/new_staff','staffMember');
Route::post('/new_staff', 'staffMember@store');
Route::get('/new_student','staffMember@view');
Route::post('/new_student', 'staffMember@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




//Route::get('projects/{id}', 'view_projectController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');


Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload']);

Route::post('image-upload',['as'=>'image.upload.post','uses'=>'new_project@store']);
Route::post('previous.upload.post',['as'=>'previous.upload.post','uses'=>'Previouscreate@store']);

Route::post('project.response', ['as' => 'project.response', 'uses'=> 'Project@send']);

Route::get('/demo', function () {
    return new App\Mail\UserWelcome();
});