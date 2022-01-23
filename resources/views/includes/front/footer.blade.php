<footer class="bg-white footer border-top">
    <div class="footer-top pb-6">
        <div class="container">
            <div class="border p-4 mt-n5 bg-white mb-6">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="h5">@lang('Newsletter subscription')</h6>
                        <p class="small m-0">@lang('Get the latest news from Hand 2 Hand')</p>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="email" class="form-control bg-gray-100" placeholder="@lang('Email Address')">
                            <button class="btn btn-primary" type="submit">@lang('Get Started')</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 my-3">
                    <h6 class="text-uppercase mb-5">
                        @lang('Quick Links')
                    </h6>
                    <ul class="list-unstyled dark-link footer-link-1 m-0">
                        <li class="pb-2">
                            <a href=" {{route('home')}} ">@lang('Home')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('About')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Shop')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Customer Services')</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 my-3">
                    <h6 class="text-uppercase mb-5">
                        @lang('Services')
                    </h6>
                    <ul class="list-unstyled dark-link footer-link-1 m-0">
                        <li class="pb-2">
                            <a href="#">@lang('My account')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Complaint')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Track My Oder')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Check Order')</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 my-3">
                    <h6 class="text-uppercase mb-5">
                        @lang('Support')
                    </h6>
                    <ul class="list-unstyled dark-link footer-link-1 m-0">
                        <li class="pb-2">
                            <a href="#">@lang('Contact Us')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Privacy Policy')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('Terms & Conditions')</a>
                        </li>
                        <li class="pb-2">
                            <a href="#">@lang('FAQS')</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 my-3">
                    <div class="pb-3">
                        <img src=" {{asset('front/img/logo.png')}} " title="" alt="">
                    </div>
                    <address class="dark-link mb-4">
                        <p class="mb-2">301 The Greenhouse London,<br /> E2 8DY UK</p>
                        <p class="mb-2"><a class="border-bottom border-secondary" href="mailto:support@domain.com">support@hand2hand.live</a></p>
                        <p class="mb-2"><a class="border-bottom border-secondary" href="tel:+49 1575-113-6867">+49 1575-113-6867</a></p>
                    </address>
                    <div class="nav dark-link fs-5">
                        <a class="me-3" href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="me-3" href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a class="me-3" href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="me-3" href="#">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-2 border-top small">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start py-1">
                    @lang('Copyright') &copy; <script>document.write(new Date().getFullYear());</script> @lang('All rights reserved') | <i class="bi bi-heart" aria-hidden="true"></i> @lang('by') <a href="https://bvision-lte.com/" target="_blank"><strong style="color: #2752c8;">Better Vision</strong></a>
                   
                </div>
                <div class="col-md-6 text-center text-md-end py-1">
                    <img src=" {{asset('front/img/payments.png')}} " title="" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>