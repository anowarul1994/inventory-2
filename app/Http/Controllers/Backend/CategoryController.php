<?php

namespace App\Http\Controllers\Backend;



use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.category.index', compact('categories'));
    }

    
    public function create()
    {
        return view('backend.category.add');
    }
    public function store(CategoryStoreRequest $request, CategoryService $services)
    {
        
        // $services->categoryStore($request);
       $this->setSuccessMessage('success', 'Category has been added');
        return redirect()->back();
        
    }
    public function edit($id)
    {
        $category =Category::find($id);
        return view('backend.category.edit', compact('category'));
    }
    public function update($id)
    {
        
    }
    public function destroy()
    {
        return "categoryCreate";
    }
}
