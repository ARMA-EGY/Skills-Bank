<?php

namespace App\Http\Requests\Meeting;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'topic' => 'required',
            'start_time' => 'required',
            'course_id' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'topic.required' => 'Meeting Name is required.',
            'start_time.required' => 'price is required.',
            'course_id.required' => 'Course is required.',
        ];
    }

    public function attributes()
    {
        return [
            'topic' => 'Topic',
            'start_time' => 'Start Time',
            'course_id' => 'Course',
        ];
    }
}
