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
    return view('pages.home');
});

Route::post('/', function () {
    return view('pages.home');
});

# Access user generation page
Route::get('/users', 'UserController@index')->name('users.index');

# Sumbit form for user generation
Route::post('/users', 'UserController@submit')->name('users.submit');

# Access lorem generation page
Route::get('/lorem', 'LoremController@index')->name('lorem.index');

# Sumbit form for lorem generation
Route::post('/lorem', 'LoremController@submit')->name('lorem.submit');
