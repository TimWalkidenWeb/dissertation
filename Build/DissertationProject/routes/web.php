<?php


//route used to test a outcome during the creation
Route::get('/welcome', function () {
    return view('welcome');
});


//set of routes to create a new project
Route::resource('/new_project', 'new_project');
Route::post('/new_project_store', 'new_project@store');
Route::post('upload','new_project@store');


//set of routes to deal with the current project being advertised
Route::resource('project','Project');
Route::get('project/{id}', 'Project@show');

//set of routes used to edit and delete project
Route::get('projects/{id}/edit', 'Project@edit');
Route::patch('projects/{id}', 'Project@update');

Route::delete('projects/{id}', 'Project@destroy');



//set of routes to create previous projects
Route::resource('/new_previous_project', 'Previouscreate');
Route::post('/new_previous_project', 'Previouscreate@store');

//set of routes to deal with the previous project being advertised
Route::resource('previous_projects', 'Previous_project');
Route::get('show/{id}', 'FileController@show');

//set of routes used to edit and delete previous project
Route::get('previous_projects/{id}/edit', 'Previous_project@edit');
Route::patch('previous_projects/{id}', 'Previous_project@update');
Route::delete('previous_projects/{id}, Previous_project@destroy');



//set of routes to create a learning section
Route::get('learning_section/create', 'LearningSection@create');

Route::post('learning.upload.post',['as'=>'learning.upload.post','uses'=>'LearningSection@store']);

//set of routes to deal with the learning section being shown
Route::resource('learning_section', 'LearningSection');

//set of routes used to edit and delete learning section
Route::get('learning_section/{id}/edit', 'LearningSection@edit');
Route::patch('learning_section/{id}', 'LearningSection@update');
Route::delete('learning_section/{id}, LearningSection@destroy');


Route::post('learningMat.upload.post',['as'=>'learningMat.upload.post','uses'=>'Learning_materials@store']);






//set of routes used to edit and delete learning section
Route::resource('learning_materials', 'Learning_materials');
Route::delete('learning_materials/{id}', 'Learning_materials@destroy');
Route::get('learning_materials/{id}/edit', 'learning_materials@edit');
Route::patch('learning_materials/{id}', 'learning_materials@update');

//set of routes for log_out

Auth::routes();

Route::get('/log_out', function () {
    Auth::logout();
    return view('home');
});

//set of routes for new staff and new student

Route::resource('/new_staff','staffMember');
Route::post('/new_staff', 'staffMember@store');
Route::get('/new_student','staffMember@view');
Route::post('/new_student', 'staffMember@store');

//set of routes for home page

Route::get('/home', 'HomeController@index')->name('home');



//Other routes
Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');
Route::get('image-upload',['as'=>'image.upload','uses'=>'ImageUploadController@imageUpload']);
Route::post('image-upload',['as'=>'image.upload.post','uses'=>'new_project@store']);
Route::post('previous.upload.post',['as'=>'previous.upload.post','uses'=>'Previouscreate@store']);
Route::post('project.response', ['as' => 'project.response', 'uses'=> 'Project@send']);

