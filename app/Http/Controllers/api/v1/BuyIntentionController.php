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
            return BuyIntentionResource::collection($this->buyIntentionRepository->all());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $product = ProductResource::make($this->productRepository->productEdit($request->product_id));
            return $this->productRepository->store($product[0])?
            BuyIntentionResource::make($this->buyIntentionRepository->store($request->all())):false;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
