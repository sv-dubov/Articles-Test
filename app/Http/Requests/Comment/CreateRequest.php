<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'subject' => 'required|min:6',
            'body' => 'required|min:10',
            'article_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'The field is required',
            'subject.min' => 'The field must contain more than 6 symbols',
            'body.required' => 'The field is required',
            'body.min' => 'The field must contain more than 10 symbols',
        ];
    }
}
