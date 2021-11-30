<?php

namespace App\Http\Requests\Tags;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name' => 'required|unique:tags'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A Tag Name is required.',
            'name.unique' => 'This Tag Name is Already Exist.'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tag Name',
        ];
    }
}
