@extends('layouts.front')
@section('title', trans('Forgot Password'))

@section('content')

<main>
    <!-- Breadcrumb -->
    <div class="py-3 bg-gray-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 my-2">
                    <h1 class="m-0 h4 text-center text-lg-start">@lang('Forgot Password')</h1>
                </div>
                <div class="col-lg-6 my-2">
                    <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/"><i class="bi bi-home"></i>@lang('Home')</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">@lang('Forgot Password')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- login page -->
    <div class="section">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-lg-5 col-xxl-4">
                    <div class="card">
                        <div class="card-header bg-transparent py-3">
                            <h3 class="h4 mb-0">@lang('Forgot Password') </h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                @method('post')
                                <div class="form-group mb-3">
                                    <label for="email_1" class="form-label">@lang('Email')<span class="text-danger">*</span></label>
                                    <input type="text" id="email_1" class="form-control" name="email" tabindex="1" required autofocus placeholder="@lang('E-mail')">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary w-100">
                                        @lang('Forgot Password')
                                    </button>
                                </div>
                            </form>
                            <div class="pt-4 text-center">
                                <span class="text-muted">@lang('Have an account?') <a href="#" data-bs-target="#topbarlogin" >@lang('Log in')</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->
</main>



@endsection
