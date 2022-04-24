<?php

namespace App\Services;

use App\Http\Requests\{StoreProductCategoryRequest, UpdateProductCategoryRequest};
use App\Models\ProductCategory;

class ProductCategoryService
{
    public function __construct()
    {

    }

    public function create(StoreProductCategoryRequest $request): ProductCategory
    {
        return ProductCategory::create([
            'name' => $request->input('name'),
            'product_category_id' => $request->input('product-category-id',null)
        ]);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory ): ProductCategory
    {
        $productCategory->name = $request->input('name');
        $productCategory->product_category_id = $request->input('product-category-id');
        $productCategory->save();

        return $productCategory;
    }
}