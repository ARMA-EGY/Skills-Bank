<?php

namespace App\Http\Requests\Collaboration;

use Illuminate\Foundation\Http\FormRequest;

class CollaborationRequest extends FormRequest
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
            'title' => 'required|unique:collaboration',
            'description' => 'required',
            'content' => 'required',
            'image' => 'required',
            'url' => 'unique:collaboration',
            'category_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A Post Title is required.',
            'title.unique' => 'This Post Title is Already Exist.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Post Title',
        ];
    }
}
