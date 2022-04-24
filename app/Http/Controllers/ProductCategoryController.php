<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Database\QueryException;
use App\Services\ProductCategoryService;

class ProductCategoryController extends Controller
{
    public function __construct(private ProductCategoryService $_productCategoryService) 
    {
       // 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product-category.index', [
            'categories'=> ProductCategory::all()
        ]);
    }

    public function all()
    {
        return view('product-category.all', [
            'categories' =>ProductCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product-category.create', [
            'categories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $category= $this->_productCategoryService->create($request);

        return redirect('/dashboard/product-categories');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        $productCategory->load('products');

        return view('products')->withCategory($productCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('product-category.edit', [
            'categories' => ProductCategory::all(),
            'productCategory' => $productCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategoryRequest  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $this->_productCategoryService->update($request, $productCategory);
        return redirect('/dashboard/product-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        $hasError = false;

        try{
            $productCategory->delete();
        } catch(QueryException $e) {
            $hasError = true;
        }

        return redirect('/dashboard/product-categories')->with([
            'action' => 'destroy' ,
            'hasError' => $hasError
        ]);
                
    }
}
