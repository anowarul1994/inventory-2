<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Services\ProductService;
use App\Models\Category;
use App\Models\Product;


class ProductController extends Controller
{
    protected $productServices;

    public function __construct(ProductService $productService)
    {
        $this->productServices = $productService;
    }


    public function index()
    {
        $products = Product::with('category')->get();
        return view('backend.pages.product.index', compact('products'));
    }


    public function create()
    {
         $categories = Category::all();
        return view('backend.pages.product.add', compact('categories'));
    }




    public function store(ProductStoreRequest $request)
    {
        $this->productServices->productStore($request);
        $this->setSuccessMessage('success', 'Product has been Created');
        return redirect()->route('product.create');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('backend.pages.product.edit', compact('product', 'categories'));
    }



    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);
        $this->productServices->productUpdate($product, $request);
        $this->setSuccessMessage('success', 'product has been updated');
        return redirect()->route('product.index');
    }


    public function show($id)
    {
        $product= Product::find($id);
        return view('backend.pages.product.show', compact('product'));
    }



    public function destroy($id)
    {
        $product= Product::find($id);
        $url = parse_url($product->image); //base url different
        $image_path = public_path($url['path']);

        if(file_exists($image_path)){
            unlink($image_path);
        }

        $product->delete();
        $this->setSuccessMessage('danger', 'Product has been Deleted');
         return redirect()->route('product.index');
    }
}
