<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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


    public function store(BrandRequest $request)
    {
        Brand::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
        ]);

        $this->setSuccessMessage('success', 'Brand added Successfully');
        return redirect()->back();
        
    }


    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit', compact('brand'));
    }
    

    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->save();

        $this->setSuccessMessage('success', 'Brand Updated Successfully');
        return redirect()->route('brand.index');
    }


    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        $this->setSuccessMessage('addWarning', 'Brand Deleted Successfully');
        return redirect()->route('brand.index');
    }
}
