<?php
namespace App\Services;
use App\Models\Brand;
use Illuminate\Support\Str;

Class BrandService
{
    public function brandStore($request)
    {
        $brand = Brand::create([
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
        ]);

        return $brand;
    }

    public function brandUpdate($id, $request)
    {
        $brand = Brand::find($id);
        $brandUpdate = $brand->update([
            'name'=>$request->name,
            'slug'=> Str::slug($request->name),
        ]);

        return $brandUpdate;
    }





}









?>


