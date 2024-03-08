<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Services\BrandService;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.brand.index', compact('brands'));
    }


    public function create()
    {
        return view('backend.brand.add');
    }


    public function store(BrandRequest $request, BrandService $brandService)
    {
        $brandService->brandStore($request);
        $this->setSuccessMessage('success', 'Brand added Successfully');
        return redirect()->back();
        
    }


    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit', compact('brand'));
    }
    

    public function update(BrandRequest $request, $id, BrandService $brandService)
    {
        $brandService->brandUpdate($id, $request);
        $this->setSuccessMessage('success', 'Brand Updated Successfully');
        return redirect()->route('brand.index');
    }


    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        $this->setSuccessMessage('error', 'Brand Deleted Successfully');
        return redirect()->route('brand.index');
    }
}
