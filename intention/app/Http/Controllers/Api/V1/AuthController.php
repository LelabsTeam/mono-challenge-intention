<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AuthRequest;
use App\Models\User;
use App\Services\Api\V1\AuthService;

class AuthController extends Controller
{
    private $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function createUser(AuthRequest $request)
    {
        $responseData = $this->service->createUser(requestData: $request->validated());

        return $this->response(data: $responseData);
    }

    public function loginUser(AuthRequest $request)
    {
        $responseData = $this->service->loginUser(requestData: $request->validated());

        return $this->response(data: $responseData);
    }

    public function logout(User $user)
    {
        $responseData = $this->service->logout($user);

        return $this->response(data: $responseData);
    }
}
