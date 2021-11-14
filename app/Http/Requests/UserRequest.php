<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|unique:users',
            'email' => 'required|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A User Name is required.',
            'name.unique' => 'This User Name is Already Exist.'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'User Name',
        ];
    }


}
