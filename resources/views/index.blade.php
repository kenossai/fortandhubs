<x-app-layout>
    <!-- ==================== Start Intro ==================== -->
@section('title', 'Home Page')
<x-banner :slides="$slides" :clients="$clients" />

    <!-- rts about area start -->
    <x-about-us />
    <!-- rts about area end -->


    <!-- rts service area start -->
    <x-our-services />
    <!-- rts service area end -->


    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Let’s discuss about how we can help <br>
                                        make your business better
                                    </h3>
                                    <a href="contact.html" class="rts-btn btn-primary btn-white">Lets Work Together</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->



    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Business Goal</span>
                            <span class="pre">JUST A CONSULTANCY</span>
                            <h2 class="title rts-text-anime-style-1">We know how to manage <br>
                                business globally
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Best Business Consulting</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                    gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">24/7 Customer Support</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                    gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="contact.html" class="rts-btn btn-primary">Contact Us</a>
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI" aria-label="Watch promotional video on YouTube">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="index.html#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img loading="lazy" src="assets/images/business-goal/02.webp" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img loading="lazy" src="assets/images/business-goal/01.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business goal area end -->
    </div>

    <!-- rts counter up area start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row g-5">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                            </h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="300">00</span>+
                            </h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="699">00</span>+
                            </h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                            </h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- start gallery section -->
    <div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Projects</span>
                            <span class="pre">Popular Projects</span>
                            <h2 class="title rts-text-anime-style-1">Projects
                                Our Completed Projects
                            </h2>
                        </div>

                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">

                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.html" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.html">
                                                <h5 class="title">Business Growth</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.html" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/02.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.html">
                                                <h5 class="title">Startup Solution</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <a href="project-details.html" class="thumbnail">
                                            <img loading="lazy" src="assets/images/project/01.webp" alt="project">
                                        </a>
                                        <div class="inner-content">
                                            <a href="project-details.html">
                                                <h5 class="title">Marketing Growth</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start gallery section -->


    <div class="rts-trusted-client rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client-client text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    @foreach ($clients as $client)
                        <a href="index.html#" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2"><img src="{{ asset('storage/' . $client->image_path) }}" alt="fortandhubs"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- rts team area start -->
    <x-team-member :teamMembers="$teamMembers" />
    <!-- rts team area end -->



    <!-- rts clients review area start -->
    <x-reviews :reviews="$reviews" />
    <!-- rts clients review area end -->


    <!-- appoinment areas tart -->
    <div class="appoinment-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="appoinment-wrapper-one-start">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Hello</span>
                            <span class="pre">Make An Appointment</span>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <form action="index.html#">
                            <div class="single-input-wrapper">
                                <div class="single-input">
                                    <input type="text" placeholder="Your Name">
                                </div>
                                <div class="single-input">
                                    <input type="number" placeholder="Number">
                                </div>
                            </div>
                            <div class="single-input">
                                <input type="email" placeholder="Your Email">
                            </div>
                            <div class="single-input mb--30">
                                <textarea placeholder="Type Your Message"></textarea>
                            </div>
                            <button class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="appoinment-thumbnail">
                        <img loading="lazy" src="assets/images/appoinment/01.webp" alt="appoinment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment areas end -->





</x-app-layout>




