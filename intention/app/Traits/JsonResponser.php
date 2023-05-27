<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait JsonResponser
{
    public function response($data = [], $status = 200): JsonResponse
    {
        return response()->json($data, $status);
    }
}
