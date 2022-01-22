<header class="header-main header-dark fixed-top header-fluid header-transparent">
        <!-- Top Header -->
        <div class="header-top header-border-bottom small">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Left -->
                    <div class="d-flex align-items-center justify-content-center d-none d-lg-block">
                        <ul class="nav white-link">
                            <li class="nav-item me-3 text-white-85">
                                <span>
                                    <i class="bi bi-clock me-2"></i>
                                    Visit time: Mon-Sat 9:00-19:00
                                </span>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="navbar-link">
                                    <i class="bi bi-headset me-2"></i>
                                    Call us now: +01 035-477-5588
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Right -->
                    <div class="d-flex align-items-center justify-content-center w-100 w-lg-auto">
                        <!-- Language -->
                        <div class="dropdown ms-0 ms-lg-3">
                            <a class="dropdown-toggle text-white" href="#" role="button" id="dropdown_language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" width="20" src="../static/img/flags/uk.svg" alt=""> English
                            </a>
                            <div class="dropdown-menu mt-2 shadow" aria-labelledby="dropdown_language" style="margin: 0px;">
                                <div class="dropdown-item">
                                    <select class="form-select form-select-sm">
                                        <option value="usd">$ USD</option>
                                        <option value="eur">€ EUR</option>
                                        <option value="ukp">£ UKP</option>
                                        <option value="jpy">¥ JPY</option>
                                    </select>
                                </div>
                                <a class="dropdown-item" href="#"><img class="me-2" width="20" src="../static/img/flags/sp.svg" alt=""> Español</a>
                                <a class="dropdown-item" href="#"><img class="me-2" width="20" src="../static/img/flags/fr.svg" alt=""> Français</a>
                                <a class="dropdown-item" href="#"><img class="me-2" width="20" src="../static/img/flags/gr.svg" alt=""> Deutsch</a>
                            </div>
                        </div>
                        <!-- Top link -->
                        <ul class="nav ms-auto ms-lg-3">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#topbarlogin"><i class="bi bi-person-circle me-2"></i>Login</a>
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
        <nav class="navbar navbar-expand-lg navbar-dark">
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
                        <li class="dropdown nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <ul class="dropdown-menu list-unstyled left">
                                <li><a class="dropdown-item" href="../../home/index.html">Home Option 1</a></li>
                                <li><a class="dropdown-item" href="../../home/index-02.html">Home Option 2</a></li>
                                <li><a class="dropdown-item" href="../../home/index-03.html">Home Option 3</a></li>
                                <li><a class="dropdown-item" href="../../home/index-04.html">Home Option 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link">Pages</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <ul class="dropdown-menu left list-unstyled">
                                <li><a class="dropdown-item" href="../../pages/about.html">About</a></li>
                                <li><a class="dropdown-item" href="../../pages/faq.html">FAQ's</a></li>
                                <li><a class="dropdown-item" href="../../pages/contact-us.html">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-full nav-item">
                            <a href="#" class="nav-link">Shop</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-menu-lg py-lg-2">
                                <div class="container px-0">
                                    <div class="row g-0">
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">Shop Style</h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="../../shop/shop.html" class="dropdown-item">Shop Default</a>
                                                </li>
                                                <li>
                                                    <a href="../../shop/shop-filter.html" class="dropdown-item">Shop Filter</a>
                                                </li>
                                                <li>
                                                    <a href="../../shop/shop-fw-left.html" class="dropdown-item">Shop Full Width</a>
                                                </li>
                                                <li>
                                                    <a href="../../shop/shop-fw-right.html" class="dropdown-item">Shop Full Width Right</a>
                                                </li>
                                                <li>
                                                    <a href="../../shop/shop-fw-without-filtres.html" class="dropdown-item">Shop Full Width No Filter</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">Product Pages</h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="../../product-detail/product-details.html" class="dropdown-item">Product Details 01</a>
                                                </li>
                                                <li>
                                                    <a href="../../product-detail/product-details-02.html" class="dropdown-item">Product Details 02</a>
                                                </li>
                                                <li>
                                                    <a href="../../product-detail/product-details-03.html" class="dropdown-item">Product Details 03</a>
                                                </li>
                                                <li>
                                                    <a href="../../product-detail/product-details-04.html" class="dropdown-item">Product Details 04</a>
                                                </li>
                                                <li>
                                                    <a href="../../product-detail/product-details-05.html" class="dropdown-item">Product Details 05</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-full nav-item">
                            <a href="#" class="nav-link">Categories</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-mega-menu py-3">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-2">
                                            <div class="hover-scale position-relative mb-3">
                                                <div class="hover-scale-in">
                                                    <a href="#">
                                                        <img src="{{asset('front/img/1000x1000.jpg')}} " title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                    <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Categories</a></h5>
                                                </div>
                                            </div>
                                            <ul class="list-unstyled link-style-1">
                                                <li><a href="#">Scarf</a></li>
                                                <li><a href="#">Shirt</a></li>
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Summer</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Vintage</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex rounded w-100 align-items-center justify-content-center mx-2 py-4 position-relative bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('front/img/1000x1000.jpg')}} );">
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
                        <li class="dropdown dropdown-full nav-item">
                            <a href="#" class="nav-link">Account</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu dropdown-menu-lg py-lg-2">
                                <div class="container px-0">
                                    <div class="row g-0">
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">Account</h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="../../account-01/login.html" class="dropdown-item">Login </a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/sign-up.html" class="dropdown-item">Sign up</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/reset-password.html" class="dropdown-item">Forgot Password</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/wishlist.html" class="dropdown-item">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/shopping-cart.html" class="dropdown-item">Shopping Cart </a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/my-account.html" class="dropdown-item">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-01/checkout.html" class="dropdown-item">Checkout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <h6 class="px-3">My Account Option 2 </h6>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="../../account-02/account-address.html" class="dropdown-item">Account Address</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-02/account-order.html" class="dropdown-item">Account Order</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-02/account-payment.html" class="dropdown-item">Account Payment</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-02/account-profile.html" class="dropdown-item">Account Profile</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-02/account-tickets.html" class="dropdown-item">Account Tickets</a>
                                                </li>
                                                <li>
                                                    <a href="../../account-02/account-wishlist.html" class="dropdown-item">Account Wishlist</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="nav-link">Blog</a>
                            <label class="px-dropdown-toggle mob-menu"></label>
                            <div class="dropdown-menu left shadow-lg">
                                <a class="dropdown-item" href="../../blog/blog.html">Blog</a>
                                <a class="dropdown-item" href="../../blog/blog-single.html">Blog Single</a>
                            </div>
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
                            <a class="dropdown-item" href="login.html">Login</a>
                            <a class="dropdown-item" href="sign-up.html">Register</a>
                            <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                            <a class="dropdown-item" href="my-account.html">My account</a>
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
                            <span class="" data-cart-items="8">
                                <i class="bi bi-cart"> </i>
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