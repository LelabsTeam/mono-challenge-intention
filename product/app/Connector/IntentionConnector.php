<?php

namespace App\Connector;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class IntentionConnector
{
    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('INTENTIONS_BASE_URL', '');
    }

    /**
     * Envia uma requisição GET síncrona
     *
     * @param  string  $endpoint - endpoint que será concatenado a baseUrl
     * @param  array  $data - body da requisição
     * @return Response - retorno da requisição
     */
    public function post(string $endpoint, array $data = []): Response
    {
        return Http::post(url: "{$this->baseUrl}{$endpoint}", data: $data);
    }
}
