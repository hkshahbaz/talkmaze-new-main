<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'name' => 'bail|required',
            'tags' => 'bail|required',
            'price' => 'bail|required',
            'category_id' => 'bail|required',
            'description' => 'bail|required',
            'photo' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
