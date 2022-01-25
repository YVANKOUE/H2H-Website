@extends('layouts.front')
@section('title', trans('Shop'))

@section('content')
<!-- Main -->
<main class="pt-8 pt-lg-12">
 
 <div class="py-3 bg-gray-100">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 my-2">
                  <h1 class="m-0 h4 text-center text-lg-start">Login</h1>
              </div>
              <div class="col-lg-6 my-2">
                  <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                      <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                      <li class="breadcrumb-item text-nowrap active" aria-current="page">Login</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>
  
  <div class="section" >
      <div class="container">
          <div class="justify-content-center row">
              <div class="col-lg-5 col-xxl-4">
                  <div class="card">
                      <div class="card-header bg-transparent py-3">
                          <h3 class="h4 mb-0">Login </h3>
                      </div>
                      <div class="card-body">
                      <form  method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                              <div class="form-group mb-3">
                                <label for="email_1" class="form-label">Email<span class="text-danger">*</span></label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                <!-- <div class="invalid-feedback">
                                  @lang('Please fill in your email')
                                </div> -->
                                
                              </div>
                              <div class="form-group">
                                <div class="d-block">
                                  <div class="row align-items-center">
                                    <label for="password" class="form-label">@lang('Password')</label>
                                  </div>
                                  <div class="float-right">
                                      @if (Route::has('password.request'))
                                          <a href="{{ route('password.request') }}" class="text-small">
                                              @lang('Forgot your password?')
                                          </a>
                                      @endif
                                  </div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                  @lang('Please fill in your password')
                                </div>
                              </div>
                              <!-- Checkbox -->
                              <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                  <label class="custom-control-label" for="remember-me">@lang('Remember Me')</label>
                                </div>
                              </div>
                              <div class="form-group text-center">
                                  <button type="submit" class="btn btn-primary w-100">
                                      Log in
                                  </button>
                              </div>
                          </form>
                          <div class="text-center pt-4 pb-5" style="">
                              <span class="px-3 bg-white d-inline-block align-top lh-sm">OR</span>
                              <div class="border-bottom mt-n3"></div>
                          </div>
                          <div class="row g-2">
                              <div class="col">
                                  <button class="btn w-100 btn-dark" type="button"><i class="bi bi-facebook me-2"></i> Facebook</button>
                              </div>
                              <div class="col">
                                  <button class="btn w-100 btn-dark" type="button"><i class="bi bi-twitter me-2"></i> Twitter</button>
                              </div>
                          </div>
                          <div class="pt-4 text-center">
                              <span class="text-muted">Don't have an account? <a href="sign-up.html">Signup here</a></span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end login -->
</main>
<!-- End Main -->

@endsection
