<?php

namespace App\Repository;

use App\Models\BuyIntention;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TestRunner\TestResult\Collector;

class BuyIntentionRepository extends RepositoryBase
{
    protected $productRepository;
    public function __construct(BuyIntention $model, ProductRepository $productRepository)
    {
        parent::__construct($model);
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $result = $this->model->paginate();
        foreach ($result as $key => $value) {
            $value->product_id = $this->productRepository->productView(json_decode($value->product_id));
        }
        return $result;
    }
}
