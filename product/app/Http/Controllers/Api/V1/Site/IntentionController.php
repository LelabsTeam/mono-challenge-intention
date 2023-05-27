<?php

namespace App\Http\Controllers\Api\V1\Site;

use App\Http\Controllers\Controller;
use App\Services\Api\V1\IntentionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IntentionController extends Controller
{
    private $service;

    public function __construct(IntentionService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request): JsonResponse
    {
        $products = $this->service->sendIntentionRequest($request);

        return $this->response($products);
    }
}
