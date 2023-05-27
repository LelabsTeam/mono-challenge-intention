<?php

namespace App\Traits;

use Symfony\Component\HttpFoundation\Request;

trait SuportValidationRequest
{
    /**
     * Realiza a validação
     *
     *
     * @return array request validada ou lista de erros
     */
    public function checkValidationRequest(Request $request): array
    {
        return $this->validate($request, $this->validationRules(), $this->validationMessages());
    }

    /**
     * Regras para a validação
     */
    public function validationRules(): array
    {
        return [
            'address' => 'array|required',
            'address.*.street' => 'string|required',
            'address.*.number' => 'string|required',
            'address.*.post_code' => 'string|required',
            'address.*.complement' => 'string|nullable',
            'products' => 'array|required',
            'products.*.id' => 'numeric|required',
            'products.*.title' => 'string|required',
            'products.*.price' => 'numeric|required',
            'products.*.category' => 'string|required',
            'products.*.description' => 'string|required',
            'products.*.image' => 'string|required',
        ];
    }

    /**
     * Mensagens customizadas da validação
     */
    public function validationMessages(): array
    {
        return [
            'required' => ':attribute é obrigatório',
            'array' => ':attribute precisa ser array',
            'array' => ':numeric precisa ser número',
        ];
    }
}
