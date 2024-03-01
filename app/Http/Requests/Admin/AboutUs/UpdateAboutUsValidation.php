<?php

namespace App\Http\Requests\Admin\AboutUs;


use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsValidation extends FormRequest
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
    public function rules(): array
    {
        return [
            'title'                         => ['required','string'],
            'description'                   => ['required','string'],
            'main_photo'                   => ['required'],
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

