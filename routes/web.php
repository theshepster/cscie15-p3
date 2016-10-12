<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# Access user generation page
Route::get('/users', 'UserController@index')->name('users.index');

# Sumbit form for user generation
Route::post('/users', 'UserController@store')->name('users.store');

# Access user generation page
Route::get('/lorem', 'LoremController@index')->name('lorem.index');

# Sumbit form for user generation
Route::post('/lorem', 'LoremController@store')->name('lorem.store');
