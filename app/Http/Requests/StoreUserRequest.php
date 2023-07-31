<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'user_id' => 'bail|required',
            'tutor_id' => 'bail|required',
            'why_would_you_like_to_be_matched_with_a_coach' => 'bail|required|max:255',
            'experience_of_public_speaking' => 'bail|required',
            'do_you_have_access_to_a_webcam_and_mic' => 'bail|required',
        ];
    }
}
