<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCoachingBulk extends FormRequest
{
    protected $redirect = '#contact-us';
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
            'first_name' => 'bail|required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'bail|required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'bail|required|email:rfc',
            'phone' => 'bail|required',
            'role' => 'bail|required|regex:/^[\pL\s\-]+$/u',
            'organization' => 'bail|required',
            'message' => 'bail|required',
        ];
    }
    public function attributes()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email Address',
            'phone' => 'Phone number',
            'role' => 'Role',
            'organization' => 'Organization/Company',
            'message' => 'Message',
        ];
    }

}
