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

Route::get('/', function () {
    return view('home');})->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/delivery', function () {
    return view('delivery');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/registration/submit', 'RegistrationController@submit' )->name('contaact-form');

Route::get('/login', function () {
    return view('login');}->name('login');

