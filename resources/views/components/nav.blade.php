<header class="header-one header--sticky">
    <x-top-nav />
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-one-wrapper">
                        <div class="thumbnail">
                            <a href="index.html">
                                <img class="site-logo" src="{{ asset('assets/images/logo/logo.png') }}" alt="finbiz-logo">
                            </a>
                        </div>
                        <div class="main-header">
                            <div class="nav-area">
                                <ul class="">
                                    <li class="main-nav project-a-after">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="{{ route('service') }}">Service</a>
                                    </li>
                                    <li class="main-nav">
                                        <a href="index.html#">Project</a>
                                    </li>
                                    <li class="main-nav project-a-after">
                                        <a href="{{ route('contact') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <x-loader />
                            <div class="button-area">
                                <button class="search" id="search" aria-label="Search"><i
                                    class="far fa-search"></i></button>
                                <a href="{{ route('contact') }}" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get
                                    Quote</a>
                                <button id="menu-btn" aria-label="Menu" class="menu-btn menu ml--20 ml_sm--5">
                                    <img class="menu-light" src="assets/images/icons/01.svg" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
