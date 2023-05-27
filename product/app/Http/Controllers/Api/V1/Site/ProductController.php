<?php

namespace App\Http\Controllers\Api\V1\Site;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\ProductService;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        $products = $this->service->getAll();

        return $this->response($products);
    }
}
