<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
@if($route == 'home') <div></div>
@else<div class="header-height-bar" style="min-height: 115.125px;"></div>@endif


<header class="header-main header-dark fixed-top header-fluid header-transparent">
        <!-- Top Header -->
        <div class="header-top header-border-bottom small @if($route == 'home') "" @else bg-black @endif ">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Left -->
                    <div class="d-flex align-items-center justify-content-center d-none d-lg-block">
                        <ul class="nav white-link">
                           
                            <li class="nav-item">
                                <a href="#" class="navbar-link">
                                    <i class="bi bi-headset me-2"></i>
                                    Call us now: +49 1575-113-6867
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Right -->
                    <div class="d-flex align-items-center justify-content-center w-100 w-lg-auto">
                        <!-- Language -->
                        <div class="dropdown ms-0 ms-lg-3">
                            
                            @php $locale = app()->getLocale(); @endphp
                            @if ($locale == 'en')
                            <a class="dropdown-toggle text-white" href="#" role="button" id="dropdown_language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" width="20" src="{{asset('front/img/flags/en.svg')}}" alt=""> English
                            </a>
                            @elseif($locale == 'de')
                            <a class="dropdown-toggle text-white" href="#" role="button" id="dropdown_language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" width="20" src="{{asset('front/img/flags/de.svg')}}" alt=""> Deutsch
                            </a>
                            @elseif($locale == 'fr')
                            <a class="dropdown-toggle text-white" href="#" role="button" id="dropdown_language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" width="20" src=" {{asset('front/img/flags/fr.svg')}} " alt=""> Français
                            </a>
                            @else
                            English
                            @endif
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdown_language" style="margin: 0px;">
                                <div class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">$ USD</option>
                                        <option value="eur">€ EUR</option>
                                    </select>
                                </div>
                                <a class="dropdown-item" @if($locale == 'en') active @endif" href="{{route('langue',['locale' => 'en'])}}"><img class="me-2" width="20" src="{{asset('front/img/flags/en.svg')}}" alt=""> English</a>
                                <a class="dropdown-item" @if($locale == 'de') active @endif" href="{{route('langue',['locale' => 'de'])}}"><img class="me-2" width="20" src="{{asset('front/img/flags/de.svg')}}" alt=""> Deutsch</a>
                                <a class="dropdown-item" @if($locale == 'fr') active @endif" href="{{route('langue',['locale' => 'fr'])}}"><img class="me-2" width="20" src="{{asset('front/img/flags/fr.svg')}}" alt=""> Français</a>
                            </div>
                        </div>
                        <!-- Top link -->
                        <ul class="nav ms-auto ms-lg-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">@lang('Contact')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#topbarlogin"><i class="bi bi-person-circle me-2"></i>@lang('Log in')</a>
                            </li>
                        </ul>
                        <!-- Top social -->
                        <div class="nav header-social justify-content-end d-none d-lg-block white-link">
                            <a class="h-social-link" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="h-social-link" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="h-social-link" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header -->
        <nav class="navbar navbar-expand-lg  @if ($route === 'home')
            navbar-dark
        @else
        navbar-light
        @endif">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand" href=" {{route('home')}} ">
                    <img class="logo-dark" src=" {{asset('front/img/logo.png')}} " title="" alt="">
                    <img class="logo-light" src=" {{asset('front/img/logo.png')}} " title="" alt="">
                </a>
                <!-- Logo -->
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href=" {{route('home')}} " class="nav-link">@lang('Home')</a>
                        </li>
                        <li class="nav-item">
                            <a href=" # " class="nav-link">@lang('About')</a>
                        </li>

                        <li class="nav-item">
                            <a href=" {{route('shop')}} " class="nav-link">@lang('Shop')</a>
                        </li>

                        <li class="dropdown dropdown-full nav-item">
                            <a href="#" class="nav-link">@lang('Categories')</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-mega-menu py-3">
                                <div class="container">
                                    <div class="row g-3">
                                        @forelse ($categories as $category)
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{ asset($category->image) }}" title="{{ $category->name }}" alt="{{ $category->description }}">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">{{ $category->name }}</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                @forelse ($category->subCategories as $subCategory)
                                                    <li><a href="#">{{ $subCategory->name }}</a></li>
                                                @empty
                                                    <div class="alert alert-info text-center">@lang('No subcategory yet.')</div>
                                                @endforelse
                                            </ul>
                                        </div>
                                        @empty
                                            <div class="alert alert-info text-center">@lang('No category yet.')</div>
                                        @endforelse
                                        <div class="col-12">
                                            <div class="d-flex rounded w-100 align-items-center justify-content-center mx-2 py-4 position-relative bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('front/img/product.jpg')}} );">
                                                <div class="text-center">
                                                    <h5 class="text-white">Flat 20% Off</h5>
                                                    <h2 class="text-white h2 m-0"><a class="stretched-link text-reset" href="#">Big Sale Offer</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">@lang('Flash sales')</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">@lang('FAQS')</a>
                        </li>
                    </ul>
                </div>
                <!-- End Menu -->
                <div class="nav flex-nowrap align-items-center header-right">
                    <!-- Nav Search-->
                    <div class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="false">
                            <i class="bi bi-search"> </i>
                        </a>
                    </div>
                    <!-- Acount -->
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="dropdown_myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="dropdown_myaccount">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#topbarlogin">@lang('Log in')</a>
                            <a class="dropdown-item" href="#">@lang('My account')</a>
                        </div>
                    </div>
                    <!-- Wishlist -->
                    <div class="nav-item d-none d-xl-block">
                        <a class="nav-link" href="#">
                            <i class="bi bi-heart"> </i>
                        </a>
                    </div>
                    <!-- Cart -->
                    <div class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalMiniCart" href="javascript:void(0)">
                            <span class="" data-cart-items="8" >
                                <i class="bi bi-cart" title="@lang('My cart')"> </i>
                            </span>
                        </a>
                    </div>
                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End Mobile Toggle -->
                </div>
            </div>
        </nav>
   </header>
