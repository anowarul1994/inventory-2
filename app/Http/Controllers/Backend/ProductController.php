<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.pages.product.index', compact('products'));
    }
    public function create()
    {
         $categories = Category::all();
        return view('backend.pages.product.add', compact('categories'));
    }
    public function store(ProductStoreRequest $request)
    {
        return $request->all();
    }
    public function edit($id)
    {

    }
    public function update(ProductUpdateRequest $request, $id)
    {

    }
    public function show($id)
    {

    }
    public function destroy($id)
    {

    }
}
