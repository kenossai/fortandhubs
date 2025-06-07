<div class="rts-cta-area-inner bg_image ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-inner-content-inner-page">
                        <div class="left-side-content">
                            <span>Subscribe Newsletter</span>
                            <h3 class="title">Stay Updated with <br> the Latest News!</h3>
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
                        <a href="service.html#" class="logo">
                            <img src="{{ asset('assets/images/logo/logo-footer.png') }}" alt="logo">
                        </a>
                        <p class="disc">
                            Felis consquat magnis fames sagittis ultrices plasodales porttitor quisque ultrice tempor
                            turpis.
                        </p>
                        <ul class="social-area-wrapper-two">
                            <li><a href="service.html#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="service.html#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="service.html#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="service.html#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="service.html#"><i class="fa-brands fa-linkedin-in"></i></a></li>
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
                            <ul class="links">
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> Help &amp; FAQ</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> Pricing &amp; Plans</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="service.html#"><i class="far fa-arrow-right"></i>Service</a></li>
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
                                    <a href="service.html#">(+256) 2145.2156</a>
                                </div>
                            </div>
                            <div class="signle-footer-contact-8">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="inner-content">
                                    <h5 class="title">Work with us</h5>
                                    <a href="service.html#">info@Invena.com</a>
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
                            <p>Invena - Copyright
                                <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                </script>. All rights reserved.
                            </p>
                            <ul>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="terms-of-condition.html">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area start -->

    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index.html"><img class="logo" src="assets/images/logo/01.svg" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                    All seds this mistakens idea denouncing pleasures.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="service.html#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="service.html#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="service.html#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="service.html#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="service.html#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="service.html#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="service.html#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="service.html#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Demos</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="index.html">Business One</a></li>
                            <li><a href="index-two.html">Business Two</a></li>
                            <li><a href="index-three.html">Business Three</a></li>
                            <li><a href="index-four.html">Business Four</a></li>
                            <li><a href="index-five.html">Finance Demo</a></li>
                            <li><a href="index-six.html">Marketing agency</a></li>
                            <li><a href="index-seven.html">Business agency</a></li>
                            <li><a href="index-eight.html">Business Management</a></li>
                            <li><a href="index-nine.html">Insurance Home</a></li>
                            <li><a href="index-ten.html">Business Website</a></li>
                            <li><a href="index-eleven.html">Business Parallax</a></li>
                            <li><a href="index-twelve.html">Business Video</a></li>
                            <li><a href="index-thirteen.html">Accountent One</a></li>
                            <li><a href="index-fourteen.html">Accountent Two</a></li>
                            <li><a href="index-fifteen.html">HR Website</a></li>
                            <li><a href="index-sixteen.html">Business Coach</a></li>
                            <li><a href="index-seventeen.html">SEO Website</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Onepage</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="onepage-one.html">Business One</a></li>
                            <li><a href="onepage-two.html">Business Two</a></li>
                            <li><a href="onepage-three.html">Business Three</a></li>
                            <li><a href="onepage-four.html">Business Four</a></li>
                            <li><a href="onepage-five.html">Finance Demo</a></li>
                            <li><a href="onepage-six.html">Marketing agency</a></li>
                            <li><a href="onepage-seven.html">Business agency</a></li>
                            <li><a href="onepage-eight.html">Business Management</a></li>
                            <li><a href="onepage-nine.html">Insurance Home</a></li>
                            <li><a href="onepage-ten.html">Business Website</a></li>
                            <li><a href="onepage-eleven.html">Business Parallax</a></li>
                            <li><a href="onepage-twelve.html">Business Video</a></li>
                            <li><a href="onepage-thirteen.html">Accountent One</a></li>
                            <li><a href="onepage-fourteen.html">Accountent Two</a></li>
                            <li><a href="onepage-fifteen.html">HR Website</a></li>
                            <li><a href="onepage-sixteen.html">Business Coach</a></li>
                            <li><a href="onepage-seventeen.html">SEO Website</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Pages</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a href="about.html">About
                                    Company</a></li>
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service
                                    Details</a>
                            </li>
                            <li><a href="service-details-2.html">Service
                                    Details 2</a>
                            </li>
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="team.html">Team</a>
                            </li>
                            <li><a href="team-details.html">Team
                                    Details</a>
                            </li>
                            <li><a href="pricing.html">Pricing</a>
                            </li>
                            <li><a href="appoinment.html">Appoinment</a>
                            </li>
                            <li><a href="history.html">Our
                                    History</a>
                            </li>
                            <li><a href="blog-list.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-grid.html">Blog
                                    List</a>
                            </li>
                            <li><a href="blog-details.html">Blog
                                    Details</a>
                            </li>
                            <li><a href="blog-details-2.html">Blog
                                    Details 02</a>
                            </li>
                            <li><a href="faq.html">Faq's</a>
                            <li><a href="career.html">Career</a>
                            </li>
                            <li><a href="our-mission.html">Our
                                    Mission</a>
                            </li>
                            <li><a href="partners.html">Partners</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Services</a>
                        <ul class="submenu mm-collapse" style="height: 0px;">
                            <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                            <li><a class="mobile-menu-link" href="service-details-2.html">Service Details 2</a></li>
                            <li><a class="mobile-menu-link" href="service-details-3.html">Service Details 3</a></li>
                            <li><a class="mobile-menu-link" href="service-details-4.html">Service Details 4</a></li>
                            <li><a class="mobile-menu-link" href="service-details-5.html">Service Details 5</a></li>

                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Projects</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="project.html">Project</a>
                            </li>
                            <li><a href="project-slider.html">Project
                                    Slider</a></li>
                            <li><a href="project-slider-2.html">Project
                                    Slider 2</a></li>
                            <li><a href="project-card-slider.html">Project
                                    Card Slider</a></li>
                            <li><a href="project-bg-dark.html">Project
                                    Bg Dark</a></li>
                            <li><a href="project-grid.html">Project
                                    Grid</a></li>
                            <li><a href="project-grid-col-2.html">Project
                                    Grid Col 2</a></li>
                            <li><a href="project-slider-grid.html">Grid Slider</a></li>
                            <li><a href="project-slider-overflow.html">Project Overflow</a>
                            </li>
                            <li><a href="project-grid-col-3.html">Project Grid Col 3</a>
                            </li>
                            <li><a href="project-bg-dark.html">Project
                                    Hide Content</a></li>


                            <li><a href="project-slider-2.html">Project
                                    Hide
                                    Content wide</a>
                            </li>
                            <li><a href="project-grid.html">Project
                                    Card Hover</a>
                            </li>
                            <li><a href="project-slider-2.html">Project
                                    Slider Image
                                    Zoom</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Shop Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="shop.html">Shop</a>
                            </li>
                            <li><a href="shop-single.html">Shop
                                    Details</a>
                            </li>
                            <li><a href="account.html">Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="service.html#" class="main" aria-expanded="false">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-2.html">Blog Details 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="service.html#" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="service.html#" aria-label="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="service.html#" aria-label="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="service.html#" aria-label="linkedin">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->
    <x-search-form />
    <!-- offcanvase search end -->
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
