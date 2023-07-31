<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJob extends FormRequest
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
            'title' => 'bail|required|string|max:255',
            'location' => 'bail|required|string|max:255',
            'requistion_number' => 'bail|required',
            'category' => 'bail|required',
            'role' => 'bail|required',
            'requirement' => 'bail|required',
            'description' => 'bail|required',
        ];
    }
}
