<?php

namespace App\Http\Requests\Collaboration;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollaborationRequest extends FormRequest
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
            'title' => 'required|unique:collaboration,title,'.$this->collaboration->id,
            'description' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A Collaboration Title is required.',
            'title.unique' => 'This Collaboration Title is Already Exist.'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Collaboration Title',
        ];
    }
}
