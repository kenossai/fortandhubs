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

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
 <!-- ==================== Start Loading ==================== -->

 <x-loader />

 <!-- ==================== End Loading ==================== -->


 <div class="cursor"></div>


 <!-- ==================== Start progress-scroll-button ==================== -->

 <div class="progress-wrap cursor-pointer">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
     </svg>
 </div>

 <!-- ==================== End progress-scroll-button ==================== -->



 <div id="smooth-wrapper">


     <div id="smooth-content">

         <!-- ==================== Start Topbar ==================== -->

         <x-top-nav />

         <!-- ==================== End Topbar ==================== -->

        <main class="position-re">

            {{ $slot }}

        </main>

        <!-- ==================== Start Footer ==================== -->

        <x-footer />

        <!-- ==================== End Footer ==================== -->


    </div>

</div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.min.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

</body>

</html>
