<x-app-layout>
     @section('title', 'Project')


    <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Project</span>
                        <h1 class="title">
                            Project Slider
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->




    <div class="rts-project-area rts-section-gap bg_project-5 bg_image" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-style-five center">
                        <span class="pre">Popular Projects</span>
                        <h2 class="title">Our Completed Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="project-swiper-5-area">
                        <div class="swiper mySwiper-project-five">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="assets/images/project/01.svg" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Pro Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="project-card-slider.html#" class="rts-btn btn-primary">View Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="assets/images/project/11.webp" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="assets/images/project/01.svg" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Pro Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="project-card-slider.html#" class="rts-btn btn-primary">View Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="assets/images/project/11.webp" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row g-5">
                                        <div class="col-lg-5">
                                            <div class="project-content-left-5">
                                                <div class="icon">
                                                    <img src="assets/images/project/01.svg" alt="project">
                                                </div>
                                                <div class="title-area">
                                                    <h6 class="title">Pro Business Solution</h6>
                                                    <span>Case Study, Growth</span>
                                                </div>
                                                <div class="inner">
                                                    <p class="disc">
                                                        Ornare etiam laoreet dictumst nisl quisque scelerisque cras ut
                                                        porta
                                                        interdum purus mattis iaculis litora turpis torquent posuere
                                                        sodales
                                                        himenaeos
                                                    </p>
                                                    <a href="project-card-slider.html#" class="rts-btn btn-primary">View Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="thumbnail-project-5">
                                                <img src="assets/images/project/11.webp" alt="project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="rts-brand-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-list-area-wrapper">
                        <div class="left-paragraph">
                            <p>Our Trusted Clients</p>
                        </div>
                        <div class="right-brand-area-wrapper">
                            @foreach ($clients as $client)
                                <div class="single-image">
                                    <img src="{{ asset('storage/' . $client->image_path) }}" alt="brand logo">
                                </div>
                                
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

