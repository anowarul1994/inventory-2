<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

Class CategoryService
{
     public function categoryStore($request)
     {
          $category= Category::create([
               'name'=>$request->name,
               'slug'=>Str::slug($request->name,'-'),
           ]);

          return $category;
     }
     public function categoryUpdate($request)
     {
          $updateCategory = Category::update([
               'name' => $request->name,
               'slug' => Str::slug($request->name),
          ]);

          return $updateCategory;
     }
}