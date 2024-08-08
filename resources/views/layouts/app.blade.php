<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Goncy Multi-Purpose themeforest">
    <meta name="description" content="Goncy - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Fortandhubs</title>

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

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

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

            <div class="nav-top md-hide">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="links-list">
                                <a href="home-design-studio.html#0">Terms & Condition</a>
                                <a href="home-design-studio.html#0">Privacy Policy</a>
                                <a href="home-design-studio.html#0">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <div class="social-list">
                                <a href="home-design-studio.html#0">Facebook</a>
                                <a href="home-design-studio.html#0">Twitter</a>
                                <a href="home-design-studio.html#0">LinkedIn</a>
                                <a href="home-design-studio.html#0">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==================== End Topbar ==================== -->

            <main class="position-re">
                @include('components.nav')
                @include('components.header')
                @yield('content')
            </main>

            <!-- ==================== Start Footer ==================== -->

            @include('components.footer')

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
