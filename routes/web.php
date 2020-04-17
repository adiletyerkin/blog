<?php

use Illuminate\Support\Facades\Route;


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
    return view('login');
});


Route::get('/listofusers', 'RegistrationController@allData' )->name('listofusers');


Route::get('/edituser/{id}', 'RegistrationController@edituser' )->name('edituser');

Route::post('/update/{id}', 'RegistrationController@update' )->name('update');