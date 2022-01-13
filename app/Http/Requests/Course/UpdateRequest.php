<?php

namespace App\Http\Requests\course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'students_limit' => 'required',
            'category_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Course Name is required.',
            'price.required' => 'price is required.',
            'start_date.required' => 'start date is required.',
            'end_date.required' => 'end date is required.',
            'students_limit.required' => 'students limit is required.',
            'category_id.required' => 'category is required.',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Course Name',
            'price' => 'price',
            'start_date' => 'start date',
            'end_date' => 'end date',
            'students_limit' => 'students limit',
            'category_id' => 'category',
        ];
    }
}
