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
            'phone' => 'required|min:7'

    
            
        ];
    }

    // public function attributes(){
    //     return [
    //         'name' => 'ИМЯ'

    //     ];
    // }

    public function messages(){
        return [
            'name.required' => 'Поля имя является обязательным !',
            'email.required' => 'Поля email является обязательным !',
            'email.email' => 'Поля email не правильно заполнена!',
            'phone.required' => 'Поля phone является обязательным !'

        ];
    }



}
