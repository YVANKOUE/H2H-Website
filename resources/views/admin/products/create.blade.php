@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Products') | @lang('Create')
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
                    {{-- <div class="text-right">
                        <button class="btn btn-primary" onclick="updateDiv()"><i data-feather="refresh-cw"></i></button>
                    </div> --}}
                    <!--end::Page Heading-->
                </div>

                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        
                        <div class="card-footer border font-weight-bolder col-xl-6 mr-2 col-xxl-5">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="row justify-content-center">
                                    <div class="col-xl-11">
                                        <!--begin::Name-->
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">@lang('Name')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9 col-sm-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <input type="text" class="form-control form-control-solid @error('name') 
                                                        is-invalid @enderror" name="name" id="name" value="{{ old('name') }}"/>
                                                </div> 
                                                @error('name')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger name">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Name-->

                                        <!--begin::Category-->
                                        {{-- <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">@lang('Category')</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <select class="form-control @error('category') is-invalid @enderror" name="category" id="category">
                                                        <option disabled selected>@lang('Select a category')</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('category')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger category">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <!--end::Category-->

                                        <!--begin::Sub category-->
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">@lang('Subcategory')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <select class="form-control select2 @error('sub_category_id') is-invalid @enderror" name="sub_category_id" id="sub_category" required>
                                                        <option disabled selected>@lang('Select a subcategory')</option>
                                                        @foreach ($subCategories as $subCategory)
                                                            <option value="{{ $subCategory->id }}" {{ old('sub_category_id') == $subCategory->id ? 'selected' : '' }}>{{ $subCategory->name }}</option>
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
                                            <label for="mini_description" class="col-xl-3 col-lg-3 col-form-label">@lang('Short description')<sup class="text-danger">*</sup></label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <textarea class="form-control form-control-solid @error('mini_description') 
                                                        is-invalid @enderror" id="mini_description" name="mini_description" required> {{ old('mini_description') }}</textarea>
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
                                                        is-invalid @enderror" id="long_description" name="long_description" required> {{ old('long_description') }}</textarea>
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
                                                        is-invalid @enderror" name="brand" id="brand" value="{{ old('brand') }}" required/>
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
                                                        is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" required/>
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
                                                    <input class="form-check-input" type="radio" name="available" id="inlineRadio1" value="1" {{ old('available') == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">@lang('Yes')</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="available" id="inlineRadio2" value="0" {{ old('available') == 0 ? 'checked' : '' }}>
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
                                                            <option value="{{ $color->id }}" {{ old('colors') && in_array($color->id, old('colors')) ? 'selected' : '' }}>{{ $color->name }}</option>
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
                                                            <option value="{{ $size->id }}" {{ old('sizes') && in_array($size->id, old('sizes')) ? 'selected' : '' }}>{{ $size->size }}</option>
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
                                            <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                                        </div>
                                        <!--end::Wizard Actions-->

                                    </div>
                                </div>
                            </form>
                            <!--end::Wizard Form-->
                        </div>
                        
                        <!-- formulaire de couleur et taille -->
                        <div class="col-xl-5 col-xxl-3">
                            
                            {{-- <div class="card-body">
                                <p class="buttons">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#colorsCollapse" role="button" aria-expanded="false" aria-controls="colorsCollapse">@lang('Colors')</a>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sizesCollapse" aria-expanded="false" aria-controls="sizesCollapse">@lang('Sizes')</button>
                                </p>
                                <div class="collapse multi-collapse" id="colorsCollapse">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row card-title">
                                                <h5 class="col-md-6"></h5>
                                                <!-- Button trigger modal -->
                                                <div class="col-md-6 text-right">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicColorsModal">@lang('All colors')</button>
                                                </div>
                                            </div>
        
                                            @livewire('products.create-color')
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse" id="sizesCollapse">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row card-title">
                                                <h5 class="col-md-6"></h5>
                                                <!-- Button trigger modal -->
                                                <div class="col-md-6 text-right">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicSizesModal">@lang('All sizes')</button>
                                                </div>
                                            </div>
        
                                            @livewire('products.create-size')
                                        </div>
                                    </div>
                                </div>
                            </div>
                         --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="row card-title">
                                        <h5 class="col-md-6"></h5>
                                        <!-- Button trigger modal -->
                                        <div class="col-md-6 text-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicColorsModal">@lang('All colors')</button>
                                        </div>
                                    </div>

                                    @livewire('products.create-color')
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="row card-title">
                                        <h5 class="col-md-6"></h5>
                                        <!-- Button trigger modal -->
                                        <div class="col-md-6 text-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicSizesModal">@lang('All sizes')</button>
                                        </div>
                                    </div>

                                    @livewire('products.create-size')
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

    @push('scripts')
        <script>
            function updateDiv()
            { 
                $("#content").load(window.location.href + " #content" );
            }
        </script>
    @endpush
@endsection