<?php

namespace App\Services;

use App\Http\Requests\{StoreProductRequest, UpdateProductRequest};
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductService
{
    public function __construct()
    {

    }

    public function create(StoreProductRequest $request): Product
    {
        $path = $request->image->store('public/products');
        
        return Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => str_replace('public','/storage', $path),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'), 
            'product_category_id' => $request->input('product-category-id'), 
                       
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product ): Product
    {
        if($request->hasFile('image') ) {
            $this->deleteOldImage($product);
            $path = $request->image->store('public/products');
            $product->image = str_replace('public','/storage', $path);
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->product_category_id = $request->input('product-category-id');
        $product->save();

        return $product;
    }

    public function deleteOldImage(Product $product)
    {
        if($product->image) {
            File::delete($product->image);
        }
    }
}