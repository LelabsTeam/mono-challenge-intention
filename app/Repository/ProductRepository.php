<?php

namespace App\Repository;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ProductRepository extends RepositoryBase
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        return json_decode(Http::get('https://fakestoreapi.com/products'));
    }

    public function productEdit($id)
    {
        return ProductResource::make(json_decode(Http::get('https://fakestoreapi.com/products/'.$id)));
    }

    public function productView($array)
    {
        $result = collect();
        foreach ($array as $key => $value) {
            $result->add($this->productEdit($array[$key]));
        }
        return $result;
    }
}
