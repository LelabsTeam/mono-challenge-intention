<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $data = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        if ($this->routeIs('api.register')) {
            $data['email'] = 'required|email|unique:users,email';
            $data['name'] = 'required';
        }

        return $data;
    }
}
