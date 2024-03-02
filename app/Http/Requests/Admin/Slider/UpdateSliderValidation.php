<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderValidation extends FormRequest
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
            'title'                        => ['required','string'],
            'main_photo'                   => ['required'],
            'link'                         => ['required','string'],
            'button_title'                 => ['required','string'],
            'status'                       => ['nullable', 'boolean'],
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'status'              => $this->status ? 1 : 0,
        ]);
    }
}
