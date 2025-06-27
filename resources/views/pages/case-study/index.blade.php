<x-app-layout>
    @section('title', 'Case Studies')

<!-- breadcurmb area start -->
                <div class="tp-breadcrumb-area tp-breadcrumb-ptb" data-background="assets/img/about-us/about-us-4/about-us-4-bg.png">
                    <div class="container container-1430">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="tp-portfolio-inner-box pb-100">
                                    <div class="tp-portfolio-heading pb-30 d-flex p-relative tp_fade_anim">
                                        <span class="tp-section-subtitle pre orange-color tp_fade_anim mr-95">Case Studies <svg xmlns="http://www.w3.org/2000/svg" width="82" height="9" viewBox="0 0 82 9" fill="none">
                                                <path d="M78 7.95425L81.5 4.47169L78 0.989136M1 3.98977H81V4.98977H1V3.98977Z" stroke="#FF5722" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>

                                        <h3 class="tp-blog-title fs-100 tp_fade_anim">We Make <img src="assets/img/about-us/about-us-4/about-us-4-shape-1.png" alt=""> <br>
                                            Digital Beautiful</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcurmb area end -->


                <!-- portfolio area start -->
                <div class="tp-portfolio-inner-ptb pb-120">
                    <div class="container container-1430">
                        <div class="tp-portfolio-tab-content-wrap">
                            <div class="row">
                                @foreach ($caseStudies as $case)
                                    <div class="col-md-6">
                                        <div class="tp-portfolio-inner-item mb-65">
                                            <div class="tp-portfolio-inner-thumb tp--hover-item">
                                                <a href="{{ route('case-study.show', $case->slug) }}">
                                                    <div class=" tp--hover-img" data-displacement="assets/img/webgl/1.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                        <img src="{{ asset('storage/' . $case->banner_image) }}" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="tp-portfolio-inner-content">
                                                <h4 class="tp-portfolio-inner-title"><a class="tp-line-white" href="{{ route('case-study.show', $case->slug) }}"> {{ $case->title }}</a></h4>
                                                <span>{{ $case->role }} - {{ $case->date->year }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="tp-portfolio-masonry-grid-bottom">
                                        <a class="tp-btn-animation" href="portfolio-col-2-light.html#">
                                            <span>Load more Projects <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                            <span>Load more Projects <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                            <span>Load more Projects <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                            <span>Load more Projects <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                            <span>Load more Projects <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.5 1V12M6.5 12L12 6.5M6.5 12L1 6.5" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio area end -->
</x-app-layout>
