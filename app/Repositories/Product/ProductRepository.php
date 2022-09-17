<?php

namespace App\Repositories\Product;

use App\Models\Product;
use  App\Repositories\Repository;

class ProductRepository extends Repository
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

}
