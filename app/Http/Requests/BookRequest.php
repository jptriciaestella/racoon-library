<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'Title' => 'required|between:5,20',
            'Author' => 'required|between:5,20',
            'Pages' => 'required|integer|min:1',
            'YearPublished' => 'required|integer|between:2000,2021',
            'Image' => 'image|file|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute is required.',
            'between' => 'The :attribute should be between :min - :max.',
        ];
    }
}
