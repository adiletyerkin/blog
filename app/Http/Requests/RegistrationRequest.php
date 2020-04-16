<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'email' => 'required|email',
            'name' => 'required|min:2|max:8',
            'phone' => 'required|min:7',
            'password' => ['required', 'string', 'min:8', 'confirmed']

    
            
        ];
    }

    // public function attributes(){
    //     return [
    //         'name' => 'ИМЯ'

    //     ];
    // }

    public function messages(){
        return [
            'name.required' => 'Поле имя является обязательным !',
            'email.required' => 'Поле email является обязательным !',
            'email.email' => 'Поле email не правильно заполнена!',
            'phone.required' => 'Поле phone является обязательным !',
            'password.required' => 'Поле "пароль" является обязательным !',
            'password.confirmed' => 'Потвердите свой пароль !'

        ];
    }



}
