<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Services\Product\ProductService;

class ProductController extends Controller
{
    public function __construct(ProductService $productService, ProductStoreRequest $productStoreRequest)
    {
        $this->service = $productService;
        $this->storeRequest = $productStoreRequest;
        $this->updateRequest = $productStoreRequest;
    }
}
