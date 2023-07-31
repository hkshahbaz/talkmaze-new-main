<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreApplicant extends FormRequest
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
            'fname' => 'bail|required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'lname' => 'bail|required|string|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'bail|required|email:rfc',
            'education' => 'bail|required|string|max:255',
            'experience' => 'bail|required|string|max:255',
            'phone' => 'bail|required|',
            'allow_device' => 'bail|required',
            'how_here_about_us' => 'bail|required',
            'resume' => 'bail|required|mimes:pdf',
        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'First Name',
            'lname' => 'Last Name',
            'email' => 'Email Address',
            'education' => 'Education',
            'phone' => 'Phone number',
        ];
    }

    public function messages()
    {
        return [
            'allow_device.required' => 'You have to check Webcam/Microphone',
        ];
    }

}
