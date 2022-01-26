@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Categories') | @lang('Edit')
@endsection

@section('content')
    <div class="section-body">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('Categories Management')</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('admin.categories.index') }}" class="text-muted">@lang('Categories')</a>
                            </li>
                            <li class="breadcrumb-item text-muted">
                                <span class="text-muted">@lang('Category edition')</span>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>

                <!--begin::Body-->
                <div class="card-body p-0">
                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                        <div class="col-xl-8 col-xxl-7">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST"
                                action="{{ route('admin.categories.update',['category'=>$category]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!--begin::Name-->
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">@lang('Name') <span class="text-danger">*</span></label>
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="text" class="form-control form-control-solid @error('name') 
                                                is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $category->name }}"/>
                                        </div> 
                                        @error('name')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger name">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Name-->

                                <!--begin::Description-->
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">@lang('Description') <span class="text-danger">*</span></label>
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <textarea class="form-control form-control-solid @error('description') 
                                                is-invalid @enderror" id="description" name="description" required> {{ old('description') ?? $category->description}}</textarea>
                                        </div>
                                        @error('description')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger description">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Description-->

                                <!--begin::Image-->
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">@lang('Update image')</label>
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" 
                                                value="{{ old('image') }}" name="image" id="image">
                                        </div>
                                        @error('image')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Image-->

                                <div class="modal-footer bg-whitesmoke br">
                                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                                </div>
                                <!--end::Wizard Actions-->
                            </form>
                            <!--end::Wizard Form-->
                        </div>

                        <div class="col-xl-4 col-xxl-5">
                            <img src="{{ $category->image }}" alt="">
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>

@endsection