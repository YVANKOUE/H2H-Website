<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Models\Products\Size;
use App\Models\Products\Color;
use App\Models\Products\Product;
use App\Http\Controllers\Controller;
use App\Models\Products\SubCategory;
use App\Repositories\ProductRepository;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::orderByDesc('created_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'subCategories' => SubCategory::all(),
            'colors' => Color::all(),
            'sizes' => Size::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request, ProductRepository $productRepository)
    {
        $productRepository->saveProduct($request);

        Alert::toast(trans('Product has been successfully added.'), 'success');
        return redirect()->route('admin.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'subCategories' => SubCategory::all(),
            'colors' => Color::all(),
            'sizes' => Size::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRepository $productRepository, Product $product)
    {
        $productRepository->updateProduct($product);

        Alert::toast(trans('Product has been successfully updated.'), 'success');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        Alert::toast(trans('Product has been successfully deleted.'), 'success');
        return back();
    }

    /**
     * Update the specified resource' available column in storage
     * 
     * @param  \App\Models\Products\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function available(Product $product)
    {
        $product->update(['available' => $product->available ? 0 : 1]);

        Alert::toast(trans('Product\'s status has been successfully updated.'), 'success');
        return back();
    }
}
