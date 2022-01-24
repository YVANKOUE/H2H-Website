<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Title -->
    <title>H2H | @yield('title')</title>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front/favicon.png') }}">
    
    <!-- CSS Template -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('includes.front.elements')
    <!-- Header -->
    @include('includes.front.header', ['categories' => App\Models\Products\Category::orderByDesc('created_at')->get()->take(6)])
    <!-- Header End -->
    <!-- Main -->
    @yield('content')
   
    <!-- End Main -->
    <!-- Footer -->
    @include('includes.front.footer')

    
    <!-- End Footer -->
    <!-- jquery -->
    <script src="{{asset('front/js/jquery-3.5.1.min.js')}}"></script>
    <!-- appear -->
    <script src="{{asset('front/vendor/appear/jquery.appear.js')}}"></script>
    <!--bootstrap-->
    <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slick carousel -->
    <script src="{{asset('front/vendor/slick/slick.min.js')}}"></script>
    <!-- magnific -->
    <script src="{{asset('front/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('front/vendor/isotope/isotope.pkgd.min.js')}}"></script>
    <!-- count-down -->
    <script src="{{asset('front/vendor/count-down/jquery.countdown.min.js')}}"></script>
    <!-- Theme Js -->
    <script src="{{asset('front/js/custom.js')}}"></script>
</body>
<!-- end body -->

</html>