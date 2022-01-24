<?php

namespace App\Repositories;

use App\Http\Requests\CreateProductRequest;
use App\Models\Products\Product;

class ProductRepository
{
    /**
     * Save Product resource in storage
     * 
     */
    public function saveProduct(CreateProductRequest $request)
    {
        $product = Product::create($request->except(['_token', '_method']));
        $this->setProductExtra($product);
    }

    /**
     * Update specified Product resource in storage
     * 
     */
    public function updateProduct(Product $product)
    {
        request()->validate([
            'name' => 'required|string|unique:products,name,' . $product->id,
            'brand' => 'required|string',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'mini_description' => 'required|string',
            'long_description' => 'required|string',
            'price' => 'required|numeric',
            'available' => 'required|boolean',
            'colors.*' => 'required|exists:colors,id',
            'sizes.*' => 'required|exists:sizes,id',
            'images.*' => 'required|image|mimes:png,jpg,svg,jpeg,gif|max:2000'
        ]);
        $product->update(request()->except(['_token', '_method']));
        $this->setProductExtra($product);
    }

    public function setProductExtra(Product $product)
    {
        $this->syncColors($product);
        $this->syncSizes($product);
        $this->saveImages($product);
    }

    /**
     * Syncing colors for specified Product
     * 
     */
    public function syncColors(Product $product)
    {
        return $product->colors()->sync(request()->colors);
    }

    /**
     * Syncing sizes for specified Product
     * 
     */
    public function syncSizes(Product $product)
    {
        return $product->sizes()->sync(request()->sizes);
    }

    /**
     * Upload and save images for the specified Product
     * 
     */
    public function saveImages(Product $product)
    {
        if (request()->hasFile('images')) {
            foreach (request()->images as $key => $image) {
                $imageName = $product->slug . $key . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/products/images', $imageName);
                
                $product->images()->create(['name' => $imageName]);
            }
        }
    }

}