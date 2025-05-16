<nav class="navbar navbar-expand-lg pt-15">
    <div class="container-xl o-hidden light-ver">

        <!-- Logo -->
        <a class="logo icon-img-100" href="{{ route('home') }}">
            <img src="assets/imgs/logo-1.png" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="home-design-studio.html#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Home</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('about') }}" role="button"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">About</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('service') }}"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Our Service</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="home-design-studio.html#"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Projects</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="home-design-studio.html#"
                        aria-haspopup="true" aria-expanded="false"><span
                            class="rolling-text">Blogs</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}" >
                        <span class="rolling-text">Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="contact-button">
            <a href="{{ route('contact')}}" class="butn butn-md bg-light">
                <span class="text">Let's contact</span>
            </a>
        </div>
    </div>
</nav>
