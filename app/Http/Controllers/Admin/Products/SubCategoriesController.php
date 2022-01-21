<?php

namespace App\Http\Controllers\Admin\Products;

use Illuminate\Http\Request;
use App\Models\Products\Category;
use App\Http\Controllers\Controller;
use App\Models\Products\SubCategory;
use RealRashid\SweetAlert\Facades\Alert;

class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sub-categories.index', [
            'subCategories' => SubCategory::orderByDesc('created_at')->get(),
            'categories' => Category::all(),
        ]);
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
            'name' => 'required|string|unique:sub_categories,name|max:35',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required|string',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,gif,svg'
        ]);
        
        SubCategory::create($request->except('_token', '_method'));

        Alert::toast(trans('Sub-category has been successfully added.'), 'success');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.sub-categories.edit', [
            'subCategory' => $subCategory,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        $this->validate($request, [
            'name' => "required|string|unique:sub_categories,name,$subCategory->id|max:35",
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'required|string',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,gif,svg'
        ]);

        $subCategory->update($request->except('_token', '_method'));
        
        Alert::toast(trans('Sub-category has been successfully updated.'), 'success');
        return redirect()->route('admin.sub-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        
        Alert::toast(trans('Sub-category has been successfully removed.'), 'success');
        return back();
    }
}
