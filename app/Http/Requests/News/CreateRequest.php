<?php

namespace App\Http\Requests\News;

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
            'category_id' => ['required', 'integer'],
            'title' => ['required', 'string', 'min:5'],
            'source' => ['required', 'string', 'min:5'],
            'status' => ['required','in:DRAFT,ACTIVE,BLOCKED', 'string'],
            'image' => ['nullable', 'file', 'image', 'mimes:jpg,png'],
            'description' => ['nullable', 'string', 'max:2000'],
            'display' => ['nullable', 'boolean']
        ];
    }
}
