<?php

namespace App\Http\Requests\Admin\News;


use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'title'                         => ['required','string'],
            'author'                        => ['required','string'],
            'date'                          => ['required','date'],
            'main_photo'                    => ['nullable'],
            'excerpt'                       => ['nullable'],
            'status'                        => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}

