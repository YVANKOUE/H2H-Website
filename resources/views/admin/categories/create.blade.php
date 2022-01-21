@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Categories') | @lang('Create')
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
                                <span class="text-muted">@lang('New Category')</span>
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
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST"
                                action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row justify-content-center">
                                    <div class="col-xl-9">
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-left">Image</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                    <div class="image-input-wrapper" style="background-image: url({{asset('assets/img/banner/1.png')}}"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change image">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="image" id="image" class="@error('image') is-invalid @enderror" accept=".png, .jpg, .jpeg" value="{{old('image')}}"/>

                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel image">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                                @error('image')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger image">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Group-->

                                        <!--begin::Name-->
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">@lang('Name')</label>
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

                                        <!--begin::Description-->
                                        <div class="form-group row">
                                            <label for="description" class="col-xl-3 col-lg-3 col-form-label">@lang('Description')</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="input-group input-group-solid input-group-lg">
                                                    <textarea class="form-control form-control-solid @error('description') 
                                                        is-invalid @enderror" id="description" name="description" required> {{ old('description') }}</textarea>
                                                </div>
                                                @error('description')
                                                    <span class="form-text text-muted" role="alert"><strong class="text-danger description">{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Wizard Actions-->
                                        <div class="card-footer border-top font-weight-bolder text-right">
                                            <button class="btn btn-primary">@lang('Submit')</button>
                                        </div>
                                        <!--end::Wizard Actions-->

                                    </div>
                                </div>
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