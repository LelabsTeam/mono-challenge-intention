<?php

namespace App\Actions;

use App\Connector\FakeStoreConnector;

class GetFakeStoreProductsAction
{
    /**
     * Busca os produtos na api da fake store
     *
     * @return array - Lista dos produtos
     */
    public function run(): array
    {
        return (new FakeStoreConnector())->get(endpoint: '/products')->json();
    }
}
