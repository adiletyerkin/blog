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

Route::post('/registration/submit', 'RegistrationController@submit' )->name('contact-form');




Route::get('/login', function () {
    return view('login');
});


Route::post('/listofusers', 'RegistrationController@allData' )->name('listofusers');