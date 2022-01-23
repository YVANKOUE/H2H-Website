@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Products') | @lang('Edit ') {{ $product->name }}
@endsection

@section('content')

    <div class="section-body">
        <div class="container-fluid" id="content">
            <div class="card">
                <div class="card-header">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('Products Management')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('admin.products.index') }}" class="text-muted">@lang('Products')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <span class="text-muted">@lang('New Product')</span>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                </div>

                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        
                        <div class="col-xl-8 card-footer border font-weight-bolder col-xxl-7">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST" action="{{ route('admin.products.update', $product->slug) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row justify-content-center">
                                    <div class="col-xl-11">
                                        <!--begin::Name-->
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">@lang('Name')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <input type="text" class="form-control form-control-solid @error('name') 
                                                        is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $product->name }}"/>
                                                </div> 
                                                @error('name')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger name">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Name-->

                                        <!--begin::Sub category-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">@lang('Subcategory')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <select class="form-control select2 @error('sub_category_id') is-invalid @enderror" name="sub_category_id" id="sub_category" required>
                                                        <option disabled selected>@lang('Select a subcategory')</option>
                                                        @foreach ($subCategories as $subCategory)
                                                            <option value="{{ $subCategory->id }}" 
                                                                @if (old('sub_category_id'))
                                                                    @if (old('sub_category_id') == $subCategory->id) selected @endif
                                                                @elseif ($product->subCategory->id == $subCategory->id) selected @endif>{{ $subCategory->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('sub_category_id')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger sub_category">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Sub category-->

                                        <!--begin::Description-->
                                        <div class="form-group row">
                                            <label for="mini_description" class="col-xl-3 col-lg-3 col-form-label">@lang('Description')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <textarea class="form-control form-control-solid @error('mini_description') 
                                                        is-invalid @enderror" id="mini_description" name="mini_description" required> {{ old('mini_description') ?? $product->mini_description }}</textarea>
                                                </div>
                                                @error('mini_description')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger mini_description">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Long description-->
                                        <div class="form-group row">
                                            <label for="long_description" class="col-xl-3 col-lg-3 col-form-label">@lang('Long description')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <textarea class="form-control form-control-solid @error('long_description') 
                                                        is-invalid @enderror" id="long_description" name="long_description" required> {{ old('long_description') ?? $product->long_description }}</textarea>
                                                </div>
                                                @error('long_description')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger long_description">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Long description-->

                                        <!--begin::Brand-->
                                        <div class="form-group row">
                                            <label for="brand" class="col-sm-3 col-form-label">@lang('Brand')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <input type="text" class="form-control form-control-solid @error('brand') 
                                                        is-invalid @enderror" name="brand" id="brand" value="{{ old('brand') ?? $product->brand }}" required/>
                                                </div> 
                                                @error('brand')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger brand">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Brand-->

                                        <!--begin::Price-->
                                        <div class="form-group row">
                                            <label for="price" class="col-sm-3 col-form-label">@lang('Price')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <input type="number" class="form-control form-control-solid @error('price') 
                                                        is-invalid @enderror" name="price" id="price" value="{{ old('price') ?? $product->price }}" />
                                                </div> 
                                                @error('price')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Price-->

                                        <!--begin::Available-->
                                        <div class="form-group row">
                                            <label for="available" class="col-sm-3 col-form-label">@lang('Available')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9 @error('available') 
                                            is-invalid @enderror">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="available" id="inlineRadio1" value="1" {{ (old('available') && old('available') == 1) || $product->available ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">@lang('Yes')</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="available" id="inlineRadio2" value="0" {{ (old('available') && old('available') == 0) || !$product->available ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">@lang('No')</label>
                                                </div>
                                                @error('available')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Available-->

                                        <!--begin::Colors-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Colors')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <select multiple="multiple" class="form-control select2 @error('colors.*') 
                                                    is-invalid @enderror" name="colors[]" id="colors" required>
                                                        @foreach($colors as $key => $color)
                                                            <option value="{{ $color->id }}" 
                                                                @if (old('colors'))
                                                                    @if (in_array($color->id, old('colors'))) selected @endif
                                                                @elseif (in_array($color->id, $product->colors->pluck('id')->toArray())) selected @endif>{{ $color->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('colors.*')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Colors-->

                                        <!--begin::Sizes-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Sizes')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <select multiple="multiple" class="form-control select2 @error('sizes.*') 
                                                    is-invalid @enderror" name="sizes[]" id="sizes" required>
                                                        @foreach($sizes as $size)
                                                            <option value="{{ $size->id }}"
                                                                @if (old('sizes'))
                                                                    @if (in_array($size->id, old('sizes'))) selected @endif
                                                                @elseif (in_array($size->id, $product->sizes->pluck('id')->toArray())) selected @endif>{{ $size->size }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('sizes.*')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Sizes-->

                                        <!--begin::Images-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-sm-3 col-form-label">@lang('Images')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9 @error('images.*') 
                                            is-invalid @enderror">
                                                <div class="fallback">
                                                    <input name="images[]" type="file" multiple />
                                                </div>
                                                @error('images.*')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger price">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Images-->

                                        <!--begin::Wizard Actions-->
                                        <div class="card-footer border-top font-weight-bolder text-right">
                                            <button type="submit" class="btn btn-primary">@lang('Save')</button>
                                        </div>
                                        <!--end::Wizard Actions-->

                                    </div>
                                </div>
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                        <div class="col-xl-4 col-xxl-5">
                            <div class="card-body">
                                <div class="form-group">
                                  <label class="form-label h1 font-weight-bold">@lang('Product\'s images')</label>
                                  <div class="row gutters-sm">
                                    @forelse ($product->images as $image)
                                        <div class="col-6 col-sm-6">
                                            <label class="imagecheck mb-4">
                                            <input name="imagecheck" type="checkbox" value="1" class="imagecheck-input" />
                                            <span class="imagecheck-figure">
                                                <img src="{{ $image->name }}" alt="}" class="imagecheck-image">
                                            </span>
                                            </label>
                                        </div>
                                    @empty
                                        <p class="text-center text-info font-weight-bold">@lang('No image for this product.')</p>
                                    @endforelse
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>
                                    
    {{-- COLORS MODAL --}}
    @include('admin.products.modals.colors')

    {{-- SIZES MODAL --}}
    @include('admin.products.modals.sizes')
@endsection