<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreintentionRequest;
use App\Models\intention;

class IntentionController extends Controller
{

    public function store(StoreintentionRequest $request)
    {
        $intention = new intention();

        $intention = $request->all();

        return response()->json($intention);
    }
}
