<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class user_info_validate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'last_name'=>'required',
            'first_name'=>'required',
            'sex'=>'required',
            'email'=>'required',
            'phone' => ['required', 'regex:/(\+?\d{12,13}|\b0\d{9}\b)/'],
            'adress'=>'required',
            'birth'=>'required',
            'cin'=>'required',
        ];
    }

    public function messages()
    {
        return [    
            'last_name.required'=>"you should to fill you last name ",
            'first_name.required'=>"you should to fill you first name ",
            'sex.required'=>'Male or Female',
            'email.required'=>'fill an email correct',
            'phone.required'=>' ',
            'phone.regex'=>'fill a phone number existing',
            'adress.required'=>'your adress please', 
            'cin.required'=>'your cin please', 
            'birth.required'=>'your birth please', 
        ];
    }
}
