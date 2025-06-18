<div class="rts-cta-area-inner bg_image ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-inner-content-inner-page">
                        <div class="left-side-content">
                            <span>Newsletter</span>
                            <h3 class="title">Stay Updated with <br> our Latest news!</h3>
                        </div>
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            @if(session('success'))
                                <div class="alert alert-success mt-2">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <input type="email" name="email" placeholder="Enter Email Address">
                            <button type="submit" class="rts-btn btn-primary btn-white">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area start -->
    <div class="footer-8-area-bg bg_image pt--65">
        <div class="container pb--65">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-area-left-8">
                        <a href="javascript:void()" class="logo">
                            <img src="{{ asset('assets/images/logo/logo-footer.png') }}" alt="logo">
                        </a>
                        <p class="disc">
                            At Fort and Hub Global, we empower organizations to thrive in a rapidly evolving digital landscape by delivering
                            world-class cybersecurity and digital transformation solutions. Our mission is to protect your critical assets, enhance
                            resilience, and drive innovations securely and sustainably.
                        </p>
                        <ul class="social-area-wrapper-two">
                            <li><a href="javascript:void()"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="javascript:void()"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links margin-right-70">
                                <li><a href="{{ route('home') }}"><i class="far fa-arrow-right"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="{{ route('service') }}"><i class="far fa-arrow-right"></i>Services</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="{{ route('projects') }}"><i class="far fa-arrow-right"></i>Projects</a></li>
                                <li><a href="{{ route('coming-soon') }}"><i class="far fa-arrow-right"></i> Help &amp; FAQ</a></li>
                                <li><a href="{{ route('contact') }}"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Contact Us</h5>
                            <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner d-block">
                            <div class="signle-footer-contact-8">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-alt"></i>
                                </div>
                                <div class="inner-content">
                                    <h5 class="title">Call Us 24/7</h5>
                                    <a href="javascript:void()">(+256) 2145.2156</a>
                                </div>
                            </div>
                            <div class="signle-footer-contact-8">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="inner-content">
                                    <h5 class="title">Work with us</h5>
                                    <a href="service.html#">info@fortandhubs.com</a>
                                </div>
                            </div>
                            <div class="signle-footer-contact-8">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="inner-content">
                                    <h5 class="title">Our Location</h5>
                                    <a href="service.html#">XYZ Hilton Street, 125 Town <br>
                                        United State</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-8-wrapper">
                            <p>Fort&Hubs - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                            <ul>
                                <li><a href="{{ route('coming-soon') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('coming-soon') }}">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area start -->

    <x-sidebar-about />
    <!-- inner menu area desktop End -->


    <div id="anywhere-home" class="">
    </div>


    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->
