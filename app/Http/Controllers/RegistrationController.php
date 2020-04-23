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
        $registration -> surname = $req->input('surname');
    	$registration -> email = $req->input('email');
    	$registration -> phone = $req->input('phone');
        $registration -> password = $req->input('password');


    	$registration -> save();

    	return redirect()-> route('home')->with('success', 'Регистрация прошло успешно ');

    }


// для  LOGIN


    //     public function submit2(RegistrationRequest $req ){

    //     $registration2 = new RegistrationModel();
    //     $registration2-> email = $req->input('email');
    //     $registration2 -> password = $req->input('password');


    //     $registration -> save();

    //     return redirect()-> route('home')->with('success', 'Вы зашли!');

    // }

    public function allData(){
         $registrationData = RegistrationModel :: all();
        // $registrationData = new RegistrationModel;
        // $registrationData -> all();
        // return view('contact-data', compact('registrationData'));
        return view('listofusers', compact('registrationData'));


    }

    public function edituser($id){
        $registration =  RegistrationModel()::find($id);
        $registration =  RegistrationModel::find($id);
        return view('edituser', compact('registration'));

    }

    public function update(RegistrationRequest  $req, $id){

           $registration =  RegistrationModel::find($id);

            $registration -> name = $req->input('name');
            $registration -> surname = $req->input('surname');
            $registration -> email = $req->input('email');
            $registration -> phone = $req->input('phone');
            $registration -> password = $req->input('password');


            $registration -> save();

           return redirect()-> route('home')->with('success', 'ОБНОВЛЕНИЕ прошло успешно ');
     
    }


    public function delete($id){
        RegistrationModel::find($id)->delete();
        return redirect( route( 'home')) -> with('success', 'User delete successfully!');

    }




}
