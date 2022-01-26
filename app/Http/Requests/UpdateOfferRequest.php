<?php

namespace App\Http\Requests;

use App\Models\Products\Offer;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOfferRequest extends FormRequest
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
        $offers = Offer::whereBetween('to', [request()->from, now()])->get();
        $products_unavailable = collect();
        $offers->each(function($key, $item) use($products_unavailable){
            $products_unavailable->push($item->id);
        });
        return [
            'name' => 'required|max:55|unique:offers,name,' . $this->offer->id,
            'from' => 'required|date_format:Y-m-d|after_or_equal:' . now(),
            'to' => 'required|date_format:Y-m-d|after:' . request()->from,
            'discount' => 'required|integer',
            'products.*' => 'required|exists:products,id|not_in:' . implode(',', $products_unavailable->isEmpty() ? [] : $products_unavailable->toArray())
        ];
    }
}
