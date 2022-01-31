@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Offers') | @lang('Edit')
@endsection

@section('content')
    <div class="section-body">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('Offers Management')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('admin.offers.index') }}" class="text-muted">@lang('Offers')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <span class="text-muted">@lang('Offer edition')</span>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>

                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-12">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST"
                                action="{{ route('admin.offers.update', ['offer' => $offer]) }}">
                                @csrf
                                @method('PATCH')

                                <!--begin::Name-->
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">@lang('Name') <span class="text-danger">*</span></label>
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="text" class="form-control form-control-solid @error('name') 
                                                is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $offer->name }}"/>
                                        </div> 
                                        @error('name')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Name-->

                                <!--begin::Begins at-->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('Begins at')<sup class="text-danger">*</sup></label>
                                    <div class="col-lg-10 col-xl-10 col-sm-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="text" name="from" id="from" class="form-control datepicker @error('from') is-invalid @enderror" required value="{{ old('from') ?? $offer->from }}">
                                        </div>
                                        @error('from')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Begins at-->

                                <!--begin::Ends at-->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('Ends at')<sup class="text-danger">*</sup></label>
                                    <div class="col-lg-10 col-xl-10 col-sm-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="text" name="to" id="to" class="form-control datepicker @error('to') is-invalid @enderror" required value="{{ old('to') ?? $offer->to }}">
                                        </div>
                                        @error('to')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Ends at-->

                                <!--begin::Discount-->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('Discount')<sup class="text-danger">*</sup></label>
                                    <div class="col-lg-10 col-xl-10 col-sm-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="number" class="form-control form-control-solid @error('discount') is-invalid @enderror" name="discount" 
                                                id="discount" min="1" placeholder="...%" value="{{ old('discount') ?? $offer->discount }}" required/>
                                        </div>
                                        @error('discount')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Discount-->

                                <!--begin::Products-->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('Products')<sup class="text-danger">*</sup></label>
                                    <div class="col-lg-10 col-xl-10 col-sm-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <select multiple="multiple" class="form-control select2 @error('products.*') is-invalid @enderror" name="products[]" id="products" required>
                                                @foreach($products as $product)
                                                    <option value="{{ $product->id }}"
                                                        @if (old('products'))
                                                            @if (in_array($product->id, old('products'))) selected @endif
                                                        @elseif (in_array($product->id, $offer->products->pluck('id')->toArray())) selected @endif>{{ $product->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('products.*')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Products-->

                                <div class="modal-footer bg-whitesmoke br">
                                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                                </div>
                                <!--end::Wizard Actions-->
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>

@endsection