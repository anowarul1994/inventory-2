<?php

namespace App\Http\Controllers\Backend;



use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;


class CategoryController extends Controller
{
    public function index(CategoryService $categories)
    {
        $categories = $categories->categoryList();
        return view('backend.pages.category.index', compact('categories'));
    }

    
    public function create()
    {
        return view('backend.pages.category.add');
    }
    public function store(CategoryStoreRequest $request, CategoryService $services)
    {
        
        $services->categoryStore($request);
       $this->setSuccessMessage('success', 'Category has been added');
        return redirect()->back();
        
    }
    public function edit($id)
    {
        $category =Category::find($id);
        return view('backend.pages.category.edit', compact('category'));
    }
    public function update(CategoryStoreRequest $request, CategoryService $categoryService,$id)
    {
        
        $categoryService->categoryUpdate($id, $request);
        $this->setSuccessMessage('success', 'Category has been Updated');
         return redirect()->route('category.index');
         
    }

    public function destroy($id)
    {
        $category= Category::find($id);
        $category->delete();
        $this->setSuccessMessage('warning', 'Category has been Deleted');
         return redirect()->route('category.index');
    }
}
