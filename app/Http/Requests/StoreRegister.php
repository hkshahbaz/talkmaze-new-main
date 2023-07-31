<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
            'fname' => 'bail|required|max:255|regex:/^[\pL\s\-]+$/u',
            'lname' => 'bail|required|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'bail|required|email:rfc|unique:users|confirmed',
            'password' => 'bail|required|confirmed',
            'tos' => 'bail|accepted',
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email Address',
            'password' => 'Password',
            'tos' => 'Terms & Conditions',
        ];
    }
}
