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
                        <div class="col-xl-8 col-xxl-7">
                            <!--begin::Wizard Form-->
                            <form class="form" method="POST"
                                action="{{ route('admin.offers.update',['offer'=>$offer]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!--begin::Name-->
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">@lang('Name') <span class="text-danger">*</span></label>
                                    <div class="col-lg-10 col-xl-10">
                                        <div class="input-group input-group-solid input-group-lg">
                                            <input type="text" class="form-control form-control-solid @error('name') 
                                                is-invalid @enderror" name="name" id="name" value="{{ old('name') ?? $product->name }}"/>
                                        </div> 
                                        @error('name')
                                            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <!--end::Name-->

                                <div class="modal-footer bg-whitesmoke br">
                                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                                </div>
                                <!--end::Wizard Actions-->
                            </form>
                            <!--end::Wizard Form-->
                        </div>

                        <div class="col-xl-4 col-xxl-5">
                            
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
    </div>

@endsection