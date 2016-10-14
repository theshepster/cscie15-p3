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

# Access user generation page
Route::get('/users', 'UserController')->name('users');

# Sumbit form for user generation
Route::post('/users', 'UserController')->name('users');

# Access user generation page
Route::get('/lorem', 'LoremController')->name('lorem');

# Sumbit form for user generation
Route::post('/lorem', 'LoremController')->name('lorem');
