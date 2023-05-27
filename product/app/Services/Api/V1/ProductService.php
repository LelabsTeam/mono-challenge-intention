<?php

namespace App\Services\Api\V1;

use App\Actions\GetFakeStoreProductsAction;

class ProductService
{
    /**
     * Busca a lista de produtos na fakestore
     */
    public function getAll(): array
    {
        return (new GetFakeStoreProductsAction())->run();
    }
}
