<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cat_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'slug' => 'unique:products',
            'buy_price' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'sku' => 'required|unique:products',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
        ];
    }
}
