<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
  <!-- Skippy -->
  <a id="skippy" class="visually-hidden visually-hidden-focusable u-skippy" href="#content">
    <div class="container">
        <span class="u-skiplink-text">Skip to main content</span>
    </div>
</a>
<!-- End Skippy -->
<!-- Preload -->
<div id="loading" class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- End Preload -->
<!-- Search START -->
<div class="px-search-full collapse bg-dark p-3 z-index-999 position-fixed w-100 top-0" id="search-open">
    <div class="container position-relative">
        <div class="row vh-100 justify-content-center">
            <div class="col-lg-8 pt-12">
                <h2 class="h1">
                    <span class="d-block text-white">Search</span>
                </h2>
                <form class="position-relative w-100">
                    <div class="mb-3 input-group">
                        <!-- Search input -->
                        <input class="form-control border-0 shadow-none" type="text" name="search" placeholder="What are you looking for?">
                        <!-- Search button -->
                        <button type="button" class="btn btn-primary shadow-none">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <div class="pt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-6 white-link">
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Search Results List
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Search Results Grid
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> About
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Services
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Invoice
                                    </a>
                                </div>
                                <div class="col-6 white-link">
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Profile
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> User Contacts
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Reviews
                                    </a>
                                    <a class="nav-link px-0" href="#">
                                        <i class="fas fa-angle-right me-1"></i> Settings
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search button close START -->
            <a class="search-close" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="true">
                <i class="bi bi-x p-0 lh-1"></i>
            </a>
            <!-- Search button close END -->
        </div>
    </div>
</div>
<!-- Search END -->
<!-- Login Popup START -->
<div class="modal fade" id="topbarlogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <div class="modal-title p-3">
                    <h5 class="m-0 text-white"> @lang('Sign in to your account!') </h5>
                    <p class="m-0 text-white">@lang('Nice to see you! Please log in with your account.')</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="w-100 p-3">
                    <!-- Form START -->
                    <form method="POST" action="{{ route('login') }}" novalidate="" >
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">@lang('Email address')<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"  required autofocus placeholder="@lang('E-mail')">
                            <div class="invalid-feedback">
                                @lang('Please fill in your email')
                              </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">@lang('Password')</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required placeholder="*********">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">@lang('Remember Me')</label>
                            <div class="invalid-feedback">
                                @lang('Please fill in your password')
                              </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-dark">@lang('Log in')</button>
                            </div>
                            <div class="col-sm-8 text-sm-end">
                                <span class="text-muted">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" data-bs-toggle="modal" data-bs-target="#topbarlogin"> 
                                            @lang('Forgot your password?')
                                        </a>
                                    @endif 
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Popup END -->
<!-- Mini Cart -->
<div class="modal px-modal-right fade" id="modalMiniCart" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Shopping Cart -->
    <div class="modal-dialog px-modal-vertical">
        <div class="modal-content">
            <!-- Header-->
            <div class="modal-header border-bottom">
                <h6 class="m-0 fw-bold">
                    Your Cart (2)
                </h6>
                <!-- Close -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <!-- List group -->
                <ul class="list-unstyled m-0 p-0">
                    <li class="py-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <!-- Image -->
                                <a href="#">
                                    <img class="img-fluid border" src=" {{asset('front/img/product.jpg')}} " alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <!-- Title -->
                                <p class="mb-2">
                                    <a class="text-dark fw-500" href="#">Cotton floral print Dress</a>
                                    <span class="m-0 text-muted w-100 d-block">$40.00</span>
                                </p>
                                <!--Footer -->
                                <div class="d-flex align-items-center">
                                    <!-- Select -->
                                    <select class="form-select form-select-sm w-auto">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                    </select>
                                    <!-- Remove -->
                                    <a class="small text-dark ms-auto" href="#!">
                                        <i class="bi bi-x"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="py-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <!-- Image -->
                                <a href="#">
                                    <img class="img-fluid border" src=" {{asset('front/img/product.jpg')}} " alt="...">
                                </a>
                            </div>
                            <div class="col-8">
                                <!-- Title -->
                                <p class="mb-2">
                                    <a class="text-dark fw-500" href="#">Cotton floral print Dress</a>
                                    <span class="m-0 text-muted w-100 d-block">$40.00</span>
                                </p>
                                <!--Footer -->
                                <div class="d-flex align-items-center">
                                    <!-- Select -->
                                    <select class="form-select form-select-sm w-auto">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                    </select>
                                    <!-- Remove -->
                                    <a class="small text-dark ms-auto" href="#!">
                                        <i class="bi bi-x"></i> Remove
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer -->
            <div class="mt-auto p-3 pt-0">
                <div class="row g-0 py-2">
                    <div class="col-8">
                        <span class="text-dark">Subtotal</span>
                    </div>
                    <div class="col-4 text-end">
                        <span class="ml-auto">$89.00</span>
                    </div>
                </div>
                <div class="row g-0 py-2">
                    <div class="col-8">
                        <span class="text-dark">Taxes:</span>
                    </div>
                    <div class="col-4 text-end">
                        <span class="ml-auto">$89.00</span>
                    </div>
                </div>
                <div class="row g-0 pt-2 mt-2 border-top fw-bold text-dark">
                    <div class="col-8">
                        <span class="text-dark">Subtotal</span>
                    </div>
                    <div class="col-4 text-end">
                        <span class="ml-auto">$89.00</span>
                    </div>
                </div>
                <div class="pt-4">
                    <a class="btn btn-block btn-dark w-100 mb-3" href="#">Continue to Checkout</a>
                    <a class="btn btn-block btn-outline-dark w-100" href="#">View Cart</a>
                </div>
            </div>
            <!-- Buttons -->
        </div>
    </div>
</div>
<!-- End Mini Cart -->
<!-- Quick View Modal-->
<div class="modal-quick-view modal fade" id="px-quick-view" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button class="btn-close position-absolute end-0 top-0 me-2 mt-2 z-index-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-3">
                <div class="row">
                    <!-- Product Gallery -->
                    <div class="col-lg-6 lightbox-gallery product-gallery">
                        <img src=" {{asset('front/img/product.jpg')}} " class="img-fluid" title="" alt="">
                    </div>
                    <!-- End Product Gallery -->
                    <!-- Product Details -->
                    <div class="col-lg-6">
                        <div class="product-detail pt-4">
                            <div class="products-brand pb-2">
                                <span>Brand name</span>
                            </div>
                            <div class="products-title mb-2">
                                <h1 class="h4">Product Title Here</h1>
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
                                <label class="fs-6 text-dark pb-2 fw-500">Size</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="xs2" checked="">
                                        <label class="radio-text-label" for="xs2">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="s2">
                                        <label class="radio-text-label" for="s2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="m2">
                                        <label class="radio-text-label" for="m2">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="l2">
                                        <label class="radio-text-label" for="l2">L</label>
                                    </div>
                                </div>
                                <label class="fs-6 text-dark pb-2 fw-500">Color</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color1" checked="">
                                        <label class="radio-color-label" for="color1">
                                            <span style="background-color: #126532;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color2">
                                        <label class="radio-color-label" for="color2">
                                            <span style="background-color: #ff9922;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color3">
                                        <label class="radio-color-label" for="color3">
                                            <span style="background-color: #326598;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color4">
                                        <label class="radio-color-label" for="color4">
                                            <span style="background-color: #126578;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                                        <i class="bi bi-cart"></i> Add to cart
                                    </button>
                                    <button class="btn btn-outline-primary me-3">
                                        <i class="bi bi-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quick View Modal-->
<!-- Size chart popup-->
<div class="modal-size-chart modal fade" id="px_size_chart_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Size Chart</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th class="border-0 bg-light">US Sizes</th>
                            <th class="border-0 bg-light">Euro Sizes</th>
                            <th class="border-0 bg-light">UK Sizes</th>
                            <th class="border-0 bg-light">Inches</th>
                            <th class="border-0 bg-light">CM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">6</td>
                            <td>39</td>
                            <td>5.5</td>
                            <td>9.25"</td>
                            <td>23.5</td>
                        </tr>
                        <tr>
                            <td class="">6.5</td>
                            <td>39</td>
                            <td>6</td>
                            <td>9.5"</td>
                            <td>24.1</td>
                        </tr>
                        <tr>
                            <td class="">7</td>
                            <td>40</td>
                            <td>6.5</td>
                            <td>9.625"</td>
                            <td>24.4</td>
                        </tr>
                        <tr>
                            <td class="">7.5</td>
                            <td>40-41</td>
                            <td>7</td>
                            <td>9.75"</td>
                            <td>24.8</td>
                        </tr>
                        <tr>
                            <td class="">8</td>
                            <td>41</td>
                            <td>7.5</td>
                            <td>9.9375"</td>
                            <td>25.4</td>
                        </tr>
                        <tr>
                            <td class="">8.5</td>
                            <td>41-42</td>
                            <td>8</td>
                            <td>10.125"</td>
                            <td>25.7</td>
                        </tr>
                        <tr>
                            <td class="">9</td>
                            <td>42</td>
                            <td>8.5</td>
                            <td>10.25"</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td class="">9.5</td>
                            <td>42-43</td>
                            <td>9</td>
                            <td>10.4375"</td>
                            <td>26.7</td>
                        </tr>
                        <tr>
                            <td class="">10</td>
                            <td>43</td>
                            <td>9.5</td>
                            <td>10.5625"</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td class="">10.5</td>
                            <td>43-44</td>
                            <td>10</td>
                            <td>10.75"</td>
                            <td>27.3</td>
                        </tr>
                        <tr>
                            <td class="">11</td>
                            <td>44</td>
                            <td>10.5</td>
                            <td>10.9375"</td>
                            <td>27.9</td>
                        </tr>
                        <tr>
                            <td class="">11.5</td>
                            <td>44-45</td>
                            <td>11</td>
                            <td>11.125"</td>
                            <td>28.3</td>
                        </tr>
                        <tr>
                            <td class="">12</td>
                            <td>45</td>
                            <td>11.5</td>
                            <td>11.25"</td>
                            <td>28.6</td>
                        </tr>
                        <tr>
                            <td class="">13</td>
                            <td>46</td>
                            <td>12.5</td>
                            <td>11.5625"</td>
                            <td>29.4</td>
                        </tr>
                        <tr>
                            <td class="">14</td>
                            <td>47</td>
                            <td>13.5</td>
                            <td>11.875"</td>
                            <td>30.2</td>
                        </tr>
                        <tr>
                            <td class="">15</td>
                            <td>48</td>
                            <td>14.5</td>
                            <td>12.1875"</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td class="">16</td>
                            <td>49</td>
                            <td>15.5</td>
                            <td>12.5"</td>
                            <td>31.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Size chart popup-->
<!-- shipping-->
<div class="modal-shipping-view modal fade" id="px_shipping_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Shipping Information</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="mb-3">
                    <li>Comodous in tempor ullamcorper miaculis</li>
                    <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                    <li>Divamus sit amet purus justo.</li>
                    <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                </ul>
                <h4 class="pt-4">Privacy Policy</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="mb-5">
                    <li>Comodous in tempor ullamcorper miaculis</li>
                    <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                    <li>Divamus sit amet purus justo.</li>
                    <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End shipping-->
<!-- Ask About Product-->
<div class="modal-askform-view modal fade" id="px_ask_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ask about product</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Your Message</label>
                                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Ask About Product-->