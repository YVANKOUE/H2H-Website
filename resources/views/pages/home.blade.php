@extends('layouts.front')
@section('title', trans('Home'))

@section('content')

<main>
    <!-- Home Slider -->
    <div class="slick-carousel slick-nav-rounded" data-slick='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "arrows": true,
        "fade": true,
    }'>
        <div class="bg-no-repeat bg-cover bg-right-center px-8" style="background-image: url({{asset('front/img/1600x900.jpg')}});">
            <div class="container">
                <div class="row min-vh-100 align-items-center py-12">
                    <div class="col-lg-8 col-xl-8 pt-8 pt-lg-12">
                        <h6 class="fw-500 text-white mb-4">hand2hand.live</h6>
                        <h2 class="fw-600 text-white">@lang('Hundreds of popular items and featured suppliers. Be satisfied or your money back.')</h2>
                        <div class="pt-5">
                            <a class="btn btn-outline-white" href="#">@lang('Discover More')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-no-repeat bg-cover bg-right-center px-8" style="background-image: url({{asset('front/img/1600x900.jpg')}});">
            <div class="container">
                <div class="row min-vh-100 align-items-center py-12">
                    <div class="col-lg-8 col-xl-6 pt-8 pt-lg-12">
                        <h6 class="fw-500 text-white mb-4">@lang('New items and trends')</h6>
                        <h1 class="display fw-600 text-white">@lang('Available 24/7 to discover popular items. Essential tools and accessories.')</h1>
                        <div class="pt-5">
                            <a class="btn btn-outline-white" href="#">@lang('Discover More')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Slider -->
    <!-- section -->
    <section class="section bg-gray-100">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-6 text-center">
                    <h3 class="h2 mt-2">Shop by Category</h3>
                </div>
            </div>
            <div class="row g-3">
                @forelse ($categories->take(4) as $category)
                    <div class="col-sm-6 col-lg-3">
                        <div class="hover-scale">
                            <div class="hover-scale-in">
                                <a href="#">
                                    <img class="img-fluid" src=" {{ asset($category->image) }} " title="{{ $category->name }}" alt="{{ $category->description }}">
                                </a>
                            </div>
                            <div class="text-center mx-4 mt-n5 position-relative z-index-1 bg-white shadow p-4">
                                <h6 class="m-0"><a class="text-reset" href="#">{{ $category->name }}</a></h6>
                                {{-- <small>25 Products</small> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info text-center">@lang('No category yet.')</div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End section -->
    <!-- Product section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-6 text-center">
                    <p class="fs-6 m-0">Read Today’s News.</p>
                    <h3 class="h2 mt-2">Latest Arrivals</h3>
                </div>
            </div>
            <div class="row">
                @forelse ($products->take(8) as $product)
                    <!-- Product Box -->
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="product-card-2">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-info">Sale</span>
                                </div>
                                <div class="product-wishlist">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                    </a>
                                    <div class="product-action nav justify-content-center">
                                        <a href="#" class="btn btn-primary">
                                            <i class="bi bi-cart"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary">
                                            <i class="bi bi-arrow-left-right"></i>
                                        </a>
                                        <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="rating-star text">
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star-fill active"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                                <h6 class="product-title">
                                    <a href="#">{{ $product->name }}</a>
                                </h6>
                                <div class="product-price">
                                    <span class="text-primary">{{ $product->price }}</span>
                                    {{-- <del class="fs-sm text-muted">$38.<small>50</small></del> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Box -->
                @empty
                    <div class="alert alert-info text-center">@lang('No product yet.')</div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Product section -->
    <!-- call to action -->
    <section>
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="position-relative hover-scale">
                        <div class="hover-scale-in">
                            <img class="w-100" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                        </div>
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                            <div class="text-center bg-white px-4 py-3">
                                <h6 class="text-uppercase fw-lighten text-primary mb-3">NEW IN</h6>
                                <h3 class="fw-600 h4">New Arrival</h3>
                                <div class="pt-2">
                                    <a class="btn btn-dark btn-sm" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative hover-scale">
                        <div class="hover-scale-in">
                            <img class="w-100" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                        </div>
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                            <div class="text-center bg-white px-4 py-3">
                                <h6 class="text-uppercase fw-lighten text-primary mb-3">NEW IN</h6>
                                <h3 class="fw-600 h4">Upcoming</h3>
                                <div class="pt-2">
                                    <a class="btn btn-dark btn-sm" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative hover-scale">
                        <div class="hover-scale-in">
                            <img class="w-100" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                        </div>
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center top-0 left-0">
                            <div class="text-center bg-white px-4 py-3">
                                <h6 class="text-uppercase fw-lighten text-primary mb-3">NEW IN</h6>
                                <h3 class="fw-600 h4">Flat 50% off</h3>
                                <div class="pt-2">
                                    <a class="btn btn-dark btn-sm" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End call to action -->
    <!-- Product section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center section-heading">
                <div class="col-lg-6 text-center">
                    <h3 class="h2 mb-2">Shop The Collection</h3>
                    <p class="fs-6 m-0">Read Today’s News.</p>
                </div>
            </div>
            <div class="slick-carousel slick-nav-dark" data-slick='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "centerMode": false,
                "focusOnSelect": true,
                "infinite": false,
                "responsive": [
                    {
                        "breakpoint":1200,
                        "settings":{
                            "slidesToShow": 4
                        }
                    },
                    {
                        "breakpoint":992,
                        "settings":{
                            "slidesToShow": 3
                        }
                    },
                    {
                        "breakpoint":768,
                        "settings":{
                            "slidesToShow": 2
                        }
                    },
                    {
                        "breakpoint":576,
                        "settings":{
                            "slidesToShow": 1
                        }
                    }
                ]
                }'>
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
                <!-- Product Box -->
                <div class="p-2">
                    <div class="product-card-2">
                        <div class="product-card-image">
                            <div class="badge-ribbon">
                                <span class="badge bg-info">Sale</span>
                            </div>
                            <div class="product-wishlist">
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="bi bi-heart"></i>
                                </a>
                            </div>
                            <div class="product-media">
                                <a href="#">
                                    <img class="img-fluid" src=" {{asset('front/img/product.jpg')}} " title="" alt="">
                                </a>
                                <div class="product-action nav justify-content-center">
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                    <a href="#" class="btn btn-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-card-info">
                            <div class="rating-star text">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <h6 class="product-title">
                                <a href="#">Fine-knit sweater</a>
                            </h6>
                            <div class="product-price">
                                <span class="text-primary">$28.<small>50</small></span>
                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
            </div>
        </div>
    </section>
    <!-- End Product section -->
    <!-- blog -->
  
    <!-- End blog -->
</main>
@endsection