<?php

namespace App\Services;

use App\Models\Product;

use Illuminate\Support\Str;

Class ProductService
{
    public function productStore($request)
    {
        if($request->file('image')){
            $imageName = Str::slug($request->name).'-'.time().'.'.$request->image->extension();
            $request->image->move('images/products/', $imageName);
        }
        $product = Product::create([
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'slug'=> Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'qty' => $request->qty,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'sku' => $request->sku,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => url('images/products/'.$imageName), 
        ]);
        
        return $product;
    }

    
    public function productUpdate($product, $request)
    {
        if($request->hasFile('image')){
            $oldImage = $product->image;
            $url = parse_url($oldImage); //base url different
            $image_path = public_path($url['path']);

            if(file_exists($image_path)){
                unlink($image_path);
            }
            $imageName = Str::slug($request->name).'-'.time().'.'.$request->image->extension();
            $request->image->move('images/products/', $imageName);
            $product->image = url('images/products/'.$imageName);
        }
        $product->update([
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'slug'=> Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'qty' => $request->qty,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'sku' => $request->sku,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);
        
        return $product;
    }
}

