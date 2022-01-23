@extends('layouts.front')
@section('title', trans('Shop'))

@section('content')
    <!-- Main -->
    <main>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">@lang('Shop')</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>@lang('Home')</a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">@lang('Products')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- Product Details -->
        <section class="product-details py-6">
            <div class="container">
                <div class="row align-items-start">
                    <!-- Product Gallery -->
                    <div class="col-lg-4 lightbox-gallery product-gallery sticky-lg-top sticky-lg-top-header">
                        <div class="slick-carousel product-slider" data-slick='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "arrows": false,
                                "fade": true,
                                "asNavFor": ".product-thumb"
                            }'>
                           
                            <div>
                                <a class="gallery-link" href="{{asset('front/img/product.jpg')}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="{{asset('front/img/product.jpg')}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="{{asset('front/img/product.jpg')}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="{{asset('front/img/product.jpg')}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div>
                                <a class="gallery-link" href="{{asset('front/img/product.jpg')}}"><i class="bi bi-arrows-fullscreen"></i></a>
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                        </div>
                        <div class="slick-carousel product-thumb mt-3" data-slick='{
                                "slidesToShow": 5,
                                "slidesToScroll": 1,
                                "asNavFor": ".product-slider",
                                "centerMode": true,
                                "focusOnSelect": true,
                                "centerPadding": "40px",
                                "responsive": [
                                    {
                                        "breakpoint":1200,
                                        "settings":{
                                            "slidesToShow": 5
                                        }
                                    },
                                    {
                                        "breakpoint":992,
                                        "settings":{
                                            "slidesToShow": 4
                                        }
                                    },
                                    {
                                        "breakpoint":768,
                                        "settings":{
                                            "slidesToShow": 4
                                        }
                                    },
                                    {
                                        "breakpoint":576,
                                        "settings":{
                                            "slidesToShow": 3
                                        }
                                    }
                                ]
                            }'>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                            <div class="pe-2">
                                <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End Product Gallery -->
                    <!-- Product Details -->
                    <div class="col-md-7 col-lg-5 ps-lg-5 mt-5 mt-lg-0">
                        <div class="product-detail">
                            <div class="products-brand pb-2">
                                <span>@lang('Brand name')</span>
                            </div>
                            <div class="products-title mb-2">
                                <h4 class="h4">Fine-knit sweater</h4>
                            </div>
                            <div class="rating-star text small pb-4">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                                <small>(4 Reviews )</small>
                            </div>
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            </div>
                            <div class="product-attribute">
                                <label class="fs-6 text-dark pb-2 fw-500">@lang('Size')</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="xs_2" checked="">
                                        <label class="radio-text-label" for="xs_2">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="s_2">
                                        <label class="radio-text-label" for="s_2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="m_2">
                                        <label class="radio-text-label" for="m_2">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size_d3" id="l_2">
                                        <label class="radio-text-label" for="l_2">L</label>
                                    </div>
                                </div>
                                <label class="fs-6 text-dark pb-2 fw-500">@lang('Color')</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color_1" id="color_01" checked="">
                                        <label class="radio-color-label" for="color_01">
                                            <span style="background-color: #126532;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color_1" id="color_2">
                                        <label class="radio-color-label" for="color_2">
                                            <span style="background-color: #ff9922;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color_1" id="color_3">
                                        <label class="radio-color-label" for="color_3">
                                            <span style="background-color: #326598;"></span>
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="count-down count-down-02 mb-3" data-countdown="January 01, 2022 15:00:00"></div>
                            <div class="product-price fs-3 fw-500 mb-2">
                                <del class="text-muted fs-6">$38.<small>50</small></del>
                                <span class="text-primary">$28.<small>50</small></span>
                            </div>
                            <div class="product-detail-actions d-flex flex-wrap pt-3">
                                <div class="cart-qty me-3 mb-3">
                                    <div class="dec qty-btn">-</div>
                                    <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                    <div class="inc qty-btn">+</div>
                                </div>
                                <div class="cart-button mb-3 d-flex">
                                    <button class="btn btn-dark me-3">
                                        <i class="bi bi-cart"></i> @lang('Add to cart')
                                    </button>
                                    <button class="btn btn-outline-dark me-3">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <a href=" {{route('shop')}} " class="btn btn-outline-dark">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-info-buttons nav pt-4">
                                <a href="#" class="me-3" data-bs-toggle="modal" data-bs-target="#px_shipping_modal"><i class="bi bi-truck me-2"></i>@lang('Shipping')</a>
                            </div>
                            <div class="pt-3 border-top mt-3 small">
                                <p class="theme-link mb-2">
                                    <label class="m-0 text-dark">@lang('Categories'):</label>
                                    <a href="#">Sunglasses</a>,
                                    <a href="#">Winter</a>,
                                   
                                </p>
                                <p class="theme-link mb-2">
                                    <label class="m-0 text-dark">@lang('Sub Categories')</label>
                                    <a href="#">Fashion</a>,
                                    <a href="#">Women</a>,
                                    <a href="#">Winter</a>
                                </p>
                                <p class="theme-link m-0">
                                    <label class="m-0 text-dark">@lang('Share'):</label>
                                    <a class="icon icon-sm icon-secondary me-2" href="#">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a class="icon icon-sm icon-secondary me-2" href="#">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a class="icon icon-sm icon-secondary me-2" href="#">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a class="icon icon-sm icon-secondary me-2" href="#">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="pt-4">
                                <img class="img-fluid" src="{{asset('front/img/payments.png')}}" title="" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->
                    <!-- Sidebar -->
                    <div class="col-md-5 col-lg-3 mt-5 mt-lg-0">
                        <div class="border p-3">
                            <div class="d-flex border-bottom pb-3 mb-3">
                                <div class="fs-1 text-primary">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div class="col ps-3">
                                    <h6 class="mb-1">Free shipping</h6>
                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="d-flex border-bottom pb-3 mb-3">
                                <div class="fs-1 text-primary">
                                    <i class="bi bi-box-arrow-in-left"></i>
                                </div>
                                <div class="col ps-3">
                                    <h6 class="mb-1">30 Days Return</h6>
                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="fs-1 text-primary">
                                    <i class="bi bi-headphones"></i>
                                </div>
                                <div class="col ps-3">
                                    <h6 class="mb-1">Contact us 24/7</h6>
                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#">
                                <img class="w-100" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- End Sidebar -->
                </div>
            </div>
        </section>
        <!-- End Product Details -->
        <!-- Product Tabs -->
        <section class="pb-6 py-md-6 pb-lg-10 pt-lg-5">
            <div class="container">
                <div class="product-tabs">
                    <ul class="nav product-nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link active" id="pd_description_tab" data-bs-toggle="tab" data-bs-target="#pd_description" role="tab" aria-controls="pd_description" aria-selected="true">@lang('Description')</a>
                        </li>
                       
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" id="pd_reviews_tab" data-bs-toggle="tab" data-bs-target="#pd_reviews" role="tab" aria-controls="pd_reviews" aria-selected="false">@lang('Reviews')</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="pd_description" role="tabpanel" aria-labelledby="pd_description_tab">
                            <div class="row">
                                <div class="col-lg-7 pe-lg-10">
                                    <h5>@lang('Medium Description')</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                                    <h5 class="pt-3">@lang('Description')</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>

                                </div>
                                <div class="col-lg-5">
                                    <div class="pb-3">
                                        <img src="{{asset('front/img/product.jpg')}}" class="img-fluid" title="" alt="">
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="d-flex border p-3">
                                                <div class="fs-1 text-primary">
                                                    <i class="bi bi-truck"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <h6 class="mb-1">Free shipping</h6>
                                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex border p-3">
                                                <div class="fs-1 text-primary">
                                                    <i class="bi bi-headphones"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <h6 class="mb-1">Contact us 24/7</h6>
                                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex border p-3">
                                                <div class="fs-1 text-primary">
                                                    <i class="bi bi-box-arrow-in-left"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <h6 class="mb-1">30 Days Return</h6>
                                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="d-flex border p-3">
                                                <div class="fs-1 text-primary">
                                                    <i class="bi bi-shield-lock"></i>
                                                </div>
                                                <div class="col ps-3">
                                                    <h6 class="mb-1">100% Secure Payment</h6>
                                                    <p class="m-0">Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="px_information" role="tabpanel" aria-labelledby="pd_information_tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table class="table text-sm">
                                        <tbody>
                                            <tr>
                                                <th class="fw-500 text-dark">Product #</th>
                                                <td class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisic elit</td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Available packaging</th>
                                                <td class="text-muted ">consectetur adipisic elit eiusm tempor</td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Weight</th>
                                                <td class="text-muted ">Ut enim ad minim venialo quis nostrud</td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                                <td class="text-muted ">labore et dolore magna aliqua.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table class="table text-sm">
                                        <tbody>
                                            <tr>
                                                <th class="fw-500 text-dark">Weight</th>
                                                <td class="text-muted">dolor sit amet </td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                                <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Product #</th>
                                                <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                            </tr>
                                            <tr>
                                                <th class="fw-500 text-dark">Available packaging</th>
                                                <td class="text-muted ">Lorem ipsum dolor sit amet </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pd_reviews" role="tabpanel" aria-labelledby="pd_reviews_tab">
                            <div class="row">
                                <div class="col-lg-8 pe-lg-8">
                                    <div class="row align-items-end">
                                        <div class="col-sm-6">
                                            <h5 class="m-0">@lang('Reviews')</h5>
                                            <div class="rating-star small">
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star"></i>
                                                <span>4.85/5 (400 Reviews)</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="d-flex review-box border-top mt-4 pt-4">
                                        <div>
                                            <div class="review-image">
                                                <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <h6>Nancy Bayer</h6>
                                            <div class="rating-star small">
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star-fill active"></i>
                                                <i class="bi small bi-star"></i>
                                                <span>13 April 2012</span>
                                            </div>
                                            <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <div class="border p-4 sticky-lg-top review-form">
                                        <h5 class="mb-3 pb-3 border-bottom">@lang('WRITE A REVIEW')</h5>
                                        <form>
                                            <div class="row g-2">
                                                <div class="col-sm-6">
                                                    <label class="form-label">@lang('Name')</label>
                                                    <input type="text" name="name" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label">@lang('Email')</label>
                                                    <input type="text" name="email" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="form-label m-0 pe-3 w-100">@lang('Rating')</label>
                                                    <div class="rating-star">
                                                        <i class="bi small bi-star-fill"></i>
                                                        <i class="bi small bi-star-fill"></i>
                                                        <i class="bi small bi-star-fill"></i>
                                                        <i class="bi small bi-star-fill"></i>
                                                        <i class="bi small bi-star-fill"></i>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="form-label">@lang('Review Title')</label>
                                                    <input type="text" name="review" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label class="form-label">@lang('Body of Review (1500)')</label>
                                                    <textarea rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="col-sm-12 pt-2">
                                                    <button class="btn btn-primary">@lang('Submit Review')</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Tabs -->
        <!-- You may also like -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="row justify-content-center mb-4 mb-lg-6">
                    <div class="col-lg-6 text-center">
                        <h3 class="h2 mb-2">@lang('You might also like these')</h3>
                        <p class="fs-6 m-0">@lang('Product of the day')</p>
                    </div>
                </div>
                <div class="slick-carousel slick-nav-dark" data-slick='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                    <div class="p-2">
                        <div class="product-card-1">
                            <div class="product-card-image">
                                <div class="badge-ribbon">
                                    <span class="badge bg-danger">Sale</span>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </div>
                                <div class="product-media">
                                    <a href="#">
                                        <img class="img-fluid" src="{{asset('front/img/product.jpg')}}" title="" alt="">
                                    </a>
                                    <div class="product-cart-btn">
                                        <a href="#" class="btn btn-primary btn-sm w-100">
                                            <i class="bi bi-cart"></i>
                                            Add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-card-info">
                                <div class="product-meta small">
                                    <a href="#">Clothing</a>, <a href="#">Men</a>
                                </div>
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
                </div>
            </div>
        </section>
        <!-- End You may also like -->
    </main>
    <!-- End Main -->

@endsection