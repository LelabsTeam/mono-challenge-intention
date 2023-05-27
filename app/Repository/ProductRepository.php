<?php

namespace App\Repository;

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
}
