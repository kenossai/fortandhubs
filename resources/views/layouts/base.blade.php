<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Goncy Multi-Purpose themeforest">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Goncy - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master-web-agency.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/master-contact.css') }}"> --}}


</head>

<body class="font-heading-teko-bold">

{{ $slot }}



<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/progressbar.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('assets/js/backToTop.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/error-handling.js') }}"></script>
<script src="{{ asset('assets/js/offcanvas.js') }}"></script>
<script>

    // client slider
    if ('.client-slider-active') {
      var client_slider_active = new Swiper(".client-slider-active", {
        slidesPerView: 'auto',
        loop: true,
        autoplay: true,
        spaceBetween: 130,
        speed: 3000,
        autoplay: {
          delay: 1,
        },
      });
    }

    // work slider
    if ('.work-slider-active') {
      var work_slider_active = new Swiper(".work-slider-active", {
        slidesPerView: 'auto',
        loop: true,
        autoplay: true,
        spaceBetween: 10,
        speed: 3000,
        autoplay: {
          delay: 0,
        },
      });
    }

    // testimonial slider
    if ('.testimonial-slider-active') {
      var testimonial_slider_active = new Swiper(".testimonial-slider-active", {
        effect: "cards",
        grabCursor: true,
        perSlideOffset: 50,
        rotate: false,
        perSlideRotate: 10,
        navigation: {
          prevEl: ".testimonial-button-prev",
          nextEl: ".testimonial-button-next",
        },
      });
    }

  </script>
</body>

</html>
