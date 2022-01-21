@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Sub-categories') | @lang('Sub-category edition')
@endsection

@section('content')
<div class="section-body">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('Sub-categories Management')</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.sub-categories.index') }}" class="text-muted">@lang('Sub-categories')</a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <span class="text-muted">@lang('Sub-category edition')</span>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>

            <!--begin::Body-->
            <div class="card-body p-0">
                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-10">
                        <form action="{{ route('admin.sub-categories.update', $subCategory->slug) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('Name')<sup class="text-danger">*</sup></label>
                                <div class="col-lg-10 col-xl-10 col-sm-10">
                                    <div class="input-group input-group-solid input-group-lg">
                                        <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" id="name" placeholder="@lang('Name')" value="{{ old('name') ?? $subCategory->name }}"/>
                                    </div>
                                    @error('name')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
        
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('Description')<sup class="text-danger">*</sup></label>
                                <div class="col-lg-10 col-xl-10 col-sm-10">
                                    <div class="input-group input-group-solid input-group-lg">
                                        <textarea class="form-control form-control-solid @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="5" placeholder="@lang('Description')">{{ old('description') ?? $subCategory->description }}</textarea>
                                    </div>
                                    @error('description')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
        
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('Category')<sup class="text-danger">*</sup></label>
                                <div class="col-lg-10 col-xl-10 col-sm-10">
                                    <div class="input-group input-group-solid input-group-lg">
                                        <select class="form-control select2 @error('category_id') is-invalid @enderror" name="category_id">
                                            {{-- <option disabled selected>@lang('Select a category')</option> --}}
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') || ($subCategory->category->id === $category->id) ?? 'selected' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
        
                            <!--begin::Group-->
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">@lang('Update image')</label>
                                <div class="col-lg-10 col-xl-10 col-sm-10">
                                    <div class="input-group input-group-solid input-group-lg">
                                        <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" name="image" id="image">
                                    </div>
                                    @error('image')
                                        <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Group-->
        
                            <div class="modal-footer bg-whitesmoke br">
                                <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
@endsection