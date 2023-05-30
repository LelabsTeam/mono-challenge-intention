<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreintentionRequest extends FormRequest
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
            'id' => 'required|integer',
            'title' => 'required',
            'price' => 'required|integer',
            'category' => 'required|string',
            'description' => 'required|string',
            'image' => 'required'
        ];
    }
}
