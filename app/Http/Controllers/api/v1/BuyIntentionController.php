<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BuyIntentionResource;
use App\Http\Resources\ProductResource;
use App\Repository\BuyIntentionRepository;
use App\Repository\ProductRepository;
use Illuminate\Http\Request;

class BuyIntentionController extends Controller
{
    protected $buyIntentionRepository, $productRepository;
    public function __construct(BuyIntentionRepository $buyIntentionRepository, ProductRepository $productRepository)
    {
        $this->buyIntentionRepository = $buyIntentionRepository;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        try {
            return $this->buyIntentionRepository->index();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $request['product_id'] = json_encode($request['product_id']);
            return BuyIntentionResource::make($this->buyIntentionRepository->store($request->all()));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
