<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Models\Products\Offer;
use App\Models\Products\Product;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use RealRashid\SweetAlert\Facades\Alert;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offers.index', [
            'offers' => Offer::orderByDesc('created_at')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offers.create', [
            'products' => Product::whereNotIn('id', Product::notInOffer()->get()->pluck('id')->toArray())->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOfferRequest $createOfferRequest)
    {
        if (request()->from < Offer::all()->max('to')) {
            Alert::toast(trans('There is already an offer for this period.'), 'error');
            return back()->withInput();
        }

        $offer = Offer::create($createOfferRequest->validated());
        foreach ($createOfferRequest->products as $product) {
            $offer->products()->attach($product);
        }

        Alert::toast(trans('Offer has been successfully added.'), 'success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', [
            'offer' => $offer,
            'products' => Product::whereNotIn('id', Product::notInOffer()->get()->pluck('id')->toArray())->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Products\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfferRequest $updateOfferRequest, Offer $offer)
    {
        $offer->update($updateOfferRequest->validated());
        $offer->products()->sync($updateOfferRequest->products);

        Alert::toast(trans('Offer has been successfully updated.'), 'success');
        return redirect()->route('admin.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        Alert::toast(trans('Offer has been successfully deleted.'), 'success');
        return back();
    }
}
