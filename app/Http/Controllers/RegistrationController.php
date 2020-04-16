<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Models\RegistrationModel;

class RegistrationController extends Controller{
    
    public function submit(RegistrationRequest $req ){

    // public function submit(Request $req ){
    // 	$validation = $req->validate([
    // 		'email' => 'required|min:5|max:20',
    // 		'name' => 'required'

    // 	]);

    	$registration = new RegistrationModel();
    	$registration -> name = $req->input('name');
    	$registration -> email = $req->input('email');
    	$registration -> phone = $req->input('phone');


    	$registration -> save();

    	return redirect()-> route('home')->with('success', 'Регистрация прошло успешно ');

    }
}
