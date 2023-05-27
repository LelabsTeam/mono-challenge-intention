<?php

namespace App\Repository;

use App\Models\BuyIntention;

class BuyIntentionRepository extends RepositoryBase
{
    public function __construct(BuyIntention $model)
    {
        parent::__construct($model);
    }
}
