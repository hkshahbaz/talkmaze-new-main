<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompetition extends FormRequest
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
            'title' => 'bail|required|string',
            'description' => 'bail|required|string',
            'requirement' => 'bail|required|string',
            'open_date' => 'bail|required',
            'close_date' => 'bail|required',
            'status' => 'bail|required',
            'comp_image' => 'bail|required|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
