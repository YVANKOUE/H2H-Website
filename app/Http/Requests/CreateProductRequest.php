<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'unique:products,name'],
            'brand' => 'required|string',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'mini_description' => 'required|string',
            'long_description' => 'required|string',
            'price' => 'required|numeric',
            'available' => 'required|boolean',
            'colors.*' => 'required|exists:colors,id',
            'sizes.*' => 'required|exists:sizes,id',
            'images.*' => 'required|image|mimes:png,jpg,svg,jpeg,gif|max:2000'
        ];
    }
}
