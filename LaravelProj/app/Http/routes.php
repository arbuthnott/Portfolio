<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ResumeController@index');
Route::get('overview', 'ResumeController@overview');
Route::get('contact', 'ResumeController@contact');
Route::post('send', 'ResumeController@send');

Route::get('skills', 'SkillController@index');
Route::get('skills/{skill}', 'SkillController@show');

Route::get('education', 'CourseController@index');
Route::get('education/{course}', 'CourseController@show');

Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
