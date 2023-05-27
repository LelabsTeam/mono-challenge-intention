<?php

namespace App\Http\Controllers\Api\V1\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Site\IntentionRequest;
use App\Services\Api\V1\Site\IntentionService;
use Illuminate\Http\Request;

class IntentionController extends Controller
{
    private $service;

    public function __construct(IntentionService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $intentions = $this->service->getAll($request);

        return $this->response($intentions);
    }

    public function store(IntentionRequest $request)
    {
        $createdintention = $this->service->store($request);

        return $this->response(data: $createdintention, status: 201);
    }
}
