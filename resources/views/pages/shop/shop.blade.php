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
                        <li class="breadcrumb-item"><a class="text-nowrap" href=" {{route('home')}} "><i class="bi bi-home"></i>@lang('Home')</a></li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">@lang('Products')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Shop -->
    <section class="py-6">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 col-xl-3 pe-xl-5 pt-9 pt-lg-0 shop-mob-toggle collapse d-lg-block" id="shop_filter">
                    <!-- Mobile Toggle -->
                    <button class="p-3 btn-close position-absolute top-0 start-0 ms-2 mt-2 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#shop_filter" aria-controls="shop_filter" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <!-- End Mobile Toggle -->
                    <!-- Categories -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_categories" role="button" aria-expanded="true" aria-controls="shop_categories">@lang('Categories') <i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-category-list collapse show" id="shop_categories">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">@lang('All Products')</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">Men <span>(25)</span></a>
                                    <a data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false" aria-controls="shop_cat_1" class="s-icon"></a>
                                    <div class="collapse" id="shop_cat_1">
                                        <ul class="nav nav-pills flex-column nav-hierarchy">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Topwear</a>
                                            </li>
                                           
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Sports &amp; Active Wear</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">Home &amp; Living <span>(80)</span></a>
                                    <a data-bs-toggle="collapse" href="#shop_cat_4" role="button" aria-expanded="false" aria-controls="shop_cat_4" class="s-icon"></a>
                                    <div class="collapse" id="shop_cat_4">
                                        <ul class="nav nav-pills flex-column nav-hierarchy">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Bed Linen &amp; Furnishing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Bath</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Home Decor</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Kitchen &amp; Table</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Categories -->
                    <!-- gender -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_Gender" role="button" aria-expanded="true" aria-controls="shop_Gender">@lang('Size') <i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-sidebar-list collapse show" id="shop_Gender">
                            <ul>
                                <li class="custom-radio">
                                    <input class="custom-control-input" id="gen1" type="radio" name="Gender" checked>
                                    <label class="custom-control-label" for="gen1">
                                        Size 1
                                    </label>
                                </li>
                                <li class="custom-radio">
                                    <input class="custom-control-input" id="gen2" type="radio" name="Gender">
                                    <label class="custom-control-label" for="gen2">
                                        Size 2
                                    </label>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Gender -->
                    <!-- Color -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_Color" role="button" aria-expanded="true" aria-controls="shop_Color">@lang('Color') <i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-sidebar-list collapse show" id="shop_Color">
                            <ul>
                                <li class="custom-checkbox checkbox-color">
                                    <input class="custom-control-input" id="colorsidebar1" type="checkbox" checked="">
                                    <label class="custom-control-label" style="color: #1F45FC;" for="colorsidebar1">
                                        <span class="text-body">
                                            Royal Blue
                                        </span>
                                    </label>
                                </li>
                                <li class="custom-checkbox checkbox-color">
                                    <input class="custom-control-input" id="colorsidebar2" type="checkbox">
                                    <label class="custom-control-label" style="color: #FCD71E;" for="colorsidebar2">
                                        <span class="text-body">
                                            Yellow
                                        </span>
                                    </label>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Color -->
                    <!-- Brands -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_brand" role="button" aria-expanded="true" aria-controls="shop_brand">@lang('Brands') <i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-sidebar-list collapse show" id="shop_brand">
                            <ul>
                                <li class="custom-checkbox">
                                    <input class="custom-control-input" id="brand1" type="checkbox">
                                    <label class="custom-control-label" for="brand1">
                                        Adidas
                                    </label>
                                </li>
                                <li class="custom-checkbox">
                                    <input class="custom-control-input" id="brand2" type="checkbox">
                                    <label class="custom-control-label" for="brand2">
                                        Levis
                                    </label>
                                </li>
                                <li class="custom-checkbox">
                                    <input class="custom-control-input" id="brand3" type="checkbox">
                                    <label class="custom-control-label" for="brand3">
                                        Puma
                                    </label>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Brands -->
                    <!-- Brands -->
                    <div class="shop-sidebar-block">
                        <div class="shop-sidebar-title">
                            <a class="h5" data-bs-toggle="collapse" href="#shop_price" role="button" aria-expanded="true" aria-controls="shop_price">@lang('Price')<i class="bi bi-chevron-up"></i></a>
                        </div>
                        <div class="shop-sidebar-list collapse show" id="shop_price">
                            <ul>
                                <li class="custom-checkbox">
                                    <input class="custom-control-input" id="price1" type="checkbox">
                                    <label class="custom-control-label" for="price1">
                                        $10.00 - $49.00
                                    </label>
                                </li>
                                
                                <li class="custom-checkbox">
                                    <input class="custom-control-input" id="price4" type="checkbox">
                                    <label class="custom-control-label" for="price4">
                                        $200.00 and Up
                                    </label>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center pt-3">
                                <!-- Input -->
                                <input type="number" class="form-control form-control-sm" placeholder="$10.00" min="10">
                                <!-- Divider -->
                                <div class="text-gray-350 mx-2">‒</div>
                                <!-- Input -->
                                <input type="number" class="form-control form-control-sm" placeholder="$350.00" max="350">
                            </div>
                        </div>
                    </div>
                    <!-- End Brands -->
                </div>
                <!-- End Sidebar -->
                <!-- Product Box -->
                <div class="col-lg-8 col-xl-9">
                   
                    <div class="row g-3">
                        <!-- Product Box -->
                        <div class="col-sm-6 col-lg-4">
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
                                    <div class="nav-thumbs">
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size3" id="btnradio1" checked>
                                            <label class="radio-text-label" for="btnradio1">XS</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size3" id="btnradio2">
                                            <label class="radio-text-label" for="btnradio2">S</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size3" id="btnradio3">
                                            <label class="radio-text-label" for="btnradio3">M</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size3" id="btnradio4">
                                            <label class="radio-text-label" for="btnradio4">L</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                        <!-- Product Box -->
                        <div class="col-sm-6 col-lg-4">
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
                                    <div class="nav-thumbs">
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color1" id="color_1" checked="">
                                            <label class="radio-color-label" for="color_1">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color1" id="color_2">
                                            <label class="radio-color-label" for="color_2">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color1" id="color_3">
                                            <label class="radio-color-label" for="color_3">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color1" id="color_4">
                                            <label class="radio-color-label" for="color_4">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                        <!-- Product Box -->
                        <div class="col-sm-6 col-lg-4">
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
                                    <div class="nav-thumbs">
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size4" id="btnradio_1" checked>
                                            <label class="radio-text-label" for="btnradio_1">XS</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size4" id="btnradi_o2">
                                            <label class="radio-text-label" for="btnradi_o2">S</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size4" id="btnradi_o3">
                                            <label class="radio-text-label" for="btnradi_o3">M</label>
                                        </div>
                                        <div class="form-check radio-text form-check-inline">
                                            <input class="form-check-input" type="radio" name="size4" id="btnradi_o4">
                                            <label class="radio-text-label" for="btnradi_o4">L</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                        <!-- Product Box -->
                        <div class="col-sm-6 col-lg-4">
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
                                    <div class="nav-thumbs">
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color2" id="color_5" checked="">
                                            <label class="radio-color-label" for="color_5">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color2" id="color_6">
                                            <label class="radio-color-label" for="color_6">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color2" id="color_7">
                                            <label class="radio-color-label" for="color_7">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                        <div class="form-check radio-color form-check-inline">
                                            <input class="form-check-input" type="radio" name="color2" id="color_8">
                                            <label class="radio-color-label" for="color_8">
                                                <span style="background-color: #d1dceb;"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                        <!-- Product Box -->
                        <div class="col-sm-6 col-lg-4">
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
                        <!-- End Product Box -->
                      
                    </div>
                    <div class="shop-bottom-bar d-flex align-items-center mt-3">
                        <div>Showing: 1 - 12 of 17</div>
                        <div class="ms-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Product Box -->
            </div>
        </div>
    </section>
    <!-- End Shop -->
</main>
<!-- End Main -->

@endsection
