<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello-world', 'LaravelLivewireController@helloWorld')->name('hello-world');
Route::get('/reset-password', 'LaravelLivewireController@index')->name('reset-password');
Route::get('/contact-form', 'LaravelLivewireController@index')->name('contact-form');
Route::get('/public-api', 'LaravelLivewireController@index')->name('public-api');
Route::get('/deep-dive', 'LaravelLivewireController@index')->name('deep-dive');

Route::get('/', function () {
    return view('welcome');
});


