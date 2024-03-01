<?php

namespace App\Http\Requests\Admin\Order;

use App\Traits\CustomValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderValidation extends FormRequest
{
    use CustomValidationTrait;
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
        $this->customValidation();
        return [

            'customer_name'                 => ['required','string'],
            'address'                       => ['required','string'],
            'email'                         => ['required','string'],
            'address'                       => ['required'],
            'item_id'                       => ['required','item_id_validation'],
            'quantity'                      => ['required','string'],
            'phone_number'                  => ['nullable','string'],
            'message'                       => ['nullable','string'],
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

