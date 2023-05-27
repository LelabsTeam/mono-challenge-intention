<?php

namespace App\Http\Requests\Api\V1\Site;

use Illuminate\Foundation\Http\FormRequest;

class IntentionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'address' => 'array|required',
            'address.street' => 'string|required',
            'address.number' => 'string|required',
            'address.postcode' => 'string|required',
            'address.complement' => 'string|nullable',
            'products' => 'array|required',
            'products.*.id' => 'numeric|required',
            'products.*.title' => 'string|required',
            'products.*.price' => 'numeric|required',
            'products.*.category' => 'string|required',
            'products.*.description' => 'string|required',
            'products.*.image' => 'string|required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute é obrigatório',
            'array' => ':attribute precisa ser array',
            'array' => ':numeric precisa ser número',
        ];
    }
}
