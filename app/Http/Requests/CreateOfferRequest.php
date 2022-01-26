<?php

namespace App\Http\Requests;

use App\Models\Products\Offer;
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
        $collection = collect();
        $offers = Offer::where('to', '>', request()->from)->get()->each(function($offer) use($collection){
            return $collection->push($offer->products);
        });
        $unavailable_products = implode(',', $offers->isNotEmpty() ? $collection->first()->pluck('id')->toArray() : []);

        return [
            'name' => 'required|max:55|unique:offers,name',
            'from' => 'required|date_format:Y-m-d|after_or_equal:' . now(),
            'to' => 'required|date_format:Y-m-d|after:' . request()->from,
            'discount' => 'required|integer',
            'products.*' => 'required|exists:products,id|not_in:' . $unavailable_products
        ];
    }
}
