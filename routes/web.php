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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/register', 'RegisterController@create');
Route::post('/store', 'RegisterController@store');

Route::get('/login', 'LoginController@create');
Route::post('/session','LoginController@store');
Route::get('/users/{user}','LoginController@show');

Route::get('/workout','WorkoutController@create');
Route::post('/confirm', 'WorkoutController@store');
Route::get('/workout/{user}','WorkoutController@show');

Route::get('/instructors', 'InstructorController@index');
Route::get('/instructor', 'InstructorController@create');
Route::post('/post', 'InstructorController@store');

Route::get('/gyms','GymLocController@index');
Route::get('/gym','GymLocController@create');
Route::post('/begin', 'GymLocController@store');


Route::get('/profile', 'ProfileController@create');
Route::post('/save', 'ProfileController@store');
Route::get('/profile/{user}','ProfileController@show');


