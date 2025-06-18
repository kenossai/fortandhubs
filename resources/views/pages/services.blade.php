<x-app-layout>

    @section('title', 'Services')

   <!-- about us area wrapper main -->
    <div class="rts-breadcrumb-area small-h">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="pre">Our Service</span>
                        <span class="bg-title">Our Service</span>
                        <h1 class="title rts-text-anime-style-1">
                            Service We Provide
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>
    <!-- about us area wrapper main end -->

    <!-- service area start -->
    <div class="our-service-area-start rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-service-main-wrapper-10">
                        @foreach ($services as $service)
                            <div class="signle-service-style-10">
                                <div class="content-area-wrapper">
                                    <div class="icon">
                                        <img src="assets/images/service/icons/12.svg" alt="service">
                                    </div>
                                    <h5 class="title">{{ $service->title }}</h5>
                                    <p class="disc">
                                        {{ str($service->sub_content)->limit(50) }}
                                    </p>
                                    <a href="{{ route('service.show', $service->id) }}" class="arrow-right-btn">Learn More <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <div class="thumbnail">
                                    <img src="{{ asset('storage/' . $service->photo) }}" alt="service">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- eorking process areas start -->
    <div class="working-process-one bg-main rts-section-gap without-clip-radious">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="title-style-one">
                        <span class="pre">How we works</span>
                        <h2 class="title rts-text-anime-style-1">Easy 3 Steps To Work
                        </h2>
                    </div>
                    <div class="working-process-main-wrapper mt--60">
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/01.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">01</span>
                                </div>
                                <h5 class="title">Client Discovery</h5>
                                <p class="disc">
                                    The agency begins by understanding the
                                    client's needs, goals, and
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/02.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">02</span>
                                </div>
                                <h5 class="title">Research & Analysis</h5>
                                <p class="disc">
                                    The agency begins by understanding the
                                    client's needs, goals, and
                                </p>
                            </div>
                        </div>
                        <div class="single-working-process-one" data-animation="fadeInUp" data-delay="0.2" data-duration="1.2">
                            <div class="left">
                                <div class="icon">
                                    <img src="assets/images/process/icon/03.svg" alt="process">
                                </div>
                            </div>
                            <div class="inner-content">
                                <div class="number-main">
                                    <span class="number">03</span>
                                </div>
                                <h5 class="title">Strategy Development</h5>
                                <p class="disc">
                                    The agency begins by understanding the
                                    client's needs, goals, and
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-working-procss-one" data-animation="zoomOut" data-delay="0.2" data-duration="1.2">
                        <img src="assets/images/process/03.webp" alt="working-process">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- eorking process areas end -->

    <!-- faq area start -->
    <div class="rts-faq-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">FAQ</span>
                        <h2 class="title rts-text-anime-style-1">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full mt--40">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail-faq-left">
                        <img src="assets/images/faq/02.webp" alt="faq-iumage area">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="accordion faq-wrapper-inner-page" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01. What services/products do you offer?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet
                                    vivamus est aliquam euismod nector quam convallis ornare justo service visionary
                                    sources unleash online
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    02. Where i can find my business growth result?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet
                                    vivamus est aliquam euismod nector quam convallis ornare justo service visionary
                                    sources unleash online
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    03. Did you get any business consultant?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet
                                    vivamus est aliquam euismod nector quam convallis ornare justo service visionary
                                    sources unleash online
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    04. Do you need any business invesment policy?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet
                                    vivamus est aliquam euismod nector quam convallis ornare justo service visionary
                                    sources unleash online
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    04. Do you need any business invesment policy?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Neque partrient sed nascetur facilisis suscipit ridiculus magna lobortis imperdiet
                                    vivamus est aliquam euismod nector quam convallis ornare justo service visionary
                                    sources unleash online
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area start -->

    <!-- brand area start -->
    <div class="rts-brand-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-list-area-wrapper">
                        <div class="left-paragraph">
                            <p>Our Trusted Clients</p>
                        </div>
                        <div class="right-brand-area-wrapper">
                            <div class="single-image">
                                <img src="assets/images/brand/01.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/02.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/03.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/04.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/05.webp" alt="brand">
                            </div>
                            <div class="single-image">
                                <img src="assets/images/brand/06.webp" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->

    <!-- tectimonisl-area start -->
    <div class="rts-testimonials-area-five bg_image rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-style-five">
                            <span class="pre">Our Testimonials</span>
                            <h2 class="title rts-text-anime-style-1">Our Customer Feedbacks
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-button-prevs"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                            <div class="swiper-pagination-fractions"></div>
                            <div class="swiper-button-nexts"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--10">
                <div class="col-lg-12">
                    <div class="swiper mySwiper-testimonials-5">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="assets/images/testimonials/03.webp" alt="testimoanils">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title">Jonathon Doe</h5>
                                            <span>Finance</span>
                                        </div>
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="service.html#"><img src="assets/images/testimonials/icons/03.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="assets/images/testimonials/04.webp" alt="testimoanils">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title">Jonathon Doe</h5>
                                            <span>Finance</span>
                                        </div>
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="service.html#"><img src="assets/images/testimonials/icons/02.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-testimonials-style-five">
                                    <div class="thumbnail">
                                        <img src="assets/images/testimonials/03.webp" alt="testimoanils">
                                    </div>
                                    <div class="inner-content">
                                        <div class="name-area">
                                            <h5 class="title">Jonathon Doe</h5>
                                            <span>Finance</span>
                                        </div>
                                        <p class="disc">
                                            “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu
                                            dictums augue
                                            volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                        </p>
                                        <div class="body-end">
                                            <a href="service.html#"><img src="assets/images/testimonials/icons/03.webp" alt="Client_logo"></a>
                                            <div class="star-icon">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
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
    </div>
    <!-- tectimonisl-area end -->
</x-app-layout>
