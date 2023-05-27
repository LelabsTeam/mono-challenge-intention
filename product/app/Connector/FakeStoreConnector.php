<?php

namespace App\Connector;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FakeStoreConnector
{
    public $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('FAKE_STORE_BASE_URL', '');
    }

    /**
     * Envia uma requisição GET síncrona
     *
     * @param  string  $endpoint - endpoint que será concatenado a baseUrl
     * @return Response - retorno da requisição
     */
    public function get(string $endpoint): Response
    {
        return Http::get(url: "{$this->baseUrl}{$endpoint}");
    }
}
