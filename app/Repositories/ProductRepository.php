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
    public function updateProduct(CreateProductRequest $request, Product $product)
    {
        $product->update($request->except(['_token', '_method']));
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