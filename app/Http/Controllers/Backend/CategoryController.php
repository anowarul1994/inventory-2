<?php

namespace App\Http\Controllers\Backend;



use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function showCategoryList()
    {
        $categories = Category::latest()->get();
        return view('backend.category.index', compact('categories'));
    }

    
    public function showCategoryForm()
    {
        return view('backend.category.add');
    }
    public function categoryStore(CategoryStoreRequest $request, CategoryService $services)
    {
        
        // $services->categoryStore($request);
       $this->setSuccessMessage('success', 'Category has been added');
        return redirect()->back();
        
    }
    public function categoryEdit($id)
    {
        $category =Category::find($id);
        return view('backend.category.edit', compact('category'));
    }
    public function categoryUpdate($id)
    {
        
    }
    public function categoryDestroy()
    {
        return "categoryCreate";
    }
}
