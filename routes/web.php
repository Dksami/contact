<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/phone', 'App\Http\Controllers\ContactController@index')->name('phone.index');
// Route::get('/phone-form', 'App\Http\Controllers\ContactController@create')->name('contactForm');
// Route::post('/phone-form/submit', 'App\Http\Controllers\ContactController@store')->name('contactFormSubmit');

Route::resource('phone','App\Http\Controllers\ContactController');
