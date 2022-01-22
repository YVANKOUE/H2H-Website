<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::orderByDesc('created_at')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:categories,name',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        Category::create($request->all());

        Alert::toast(trans('Category has been successfully added.'), 'success');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:categories,name,'. $category->id,
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $category->update($request->all());

        Alert::toast(trans('Category has been successfully updated.'), 'success');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Alert::toast(trans('Sub-category has been successfully removed.'), 'success');
        return back();
    }
}
