<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOfferRequest extends FormRequest
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
            'name' => 'required|max:55|unique:offers,name',
            'from' => 'required|date_format:d-m-Y|after_or_equal:' . now(),
            'to' => 'required|date_format:d-m-Y|after:' . request()->from,
            'discount' => 'required|integer',
            'products.*' => 'required|exists:products,id'
        ];
    }
}
