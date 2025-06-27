<x-app-layout>
    @section('title', 'Case Study - ' . $caseStudy->title)
<div id="top" class="tp-pd-4-ptb">
                    <div class="container container-1630">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-pd-4-heading mb-90 tp_fade_anim" data-delay=".3">
                                    <h3 class="tp-pd-4-title">{{ $caseStudy->title }}</h3>
                                </div>
                                <div class="tp-pd-4-heading-bottom d-flex justify-content-between tp_fade_anim" data-delay=".5">
                                    <div class="tp-pd-2-bottom-item mb-30">
                                        <span class="text-dark">Client</span>
                                        <h6 class="text-dark">{{ $caseStudy->client }}</h6>
                                    </div>
                                    <div class="tp-pd-2-bottom-item mb-30">
                                        <span class="text-dark">Expertise</span>
                                        <h6 class="text-dark">{{ $caseStudy->subtitle }}</h6>
                                    </div>
                                    <div class="tp-pd-2-bottom-item mb-30">
                                        <span class="text-dark">Duration</span>
                                        <h6 class="text-dark">{{ $caseStudy->date }}</h6>
                                    </div>
                                    <div class="tp-pd-2-bottom-item mb-30">
                                        <span class="text-dark">Designer</span>
                                        <h6 class="text-dark">ThemePure</h6>
                                    </div>
                                    <div class="tp-pd-4-bottom-btn mb-30">
                                        <a class="tp-portfolio-details-btn" href="portfolio-details-modern-light.html#">Visit Site <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                    <path d="M1 9L9 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 1H9V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details 4 area end -->


                <!-- portfolio details 4 banner start -->
                <div class="tp-pd-4-banner-ptb img-box fix pt-120" data-bg-color="#FFF669">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-pd-4-banner-thumb tp-top-bottom-scroll">
                                    <img src="{{ asset('storage/' . $caseStudy->banner_image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details 4 banner end -->


                <!-- portfolio details 4 about start -->
                <div class="tp-pd-4-about-ptb pt-160 pb-140">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="tp-pd-4-about-heading tp_fade_anim" data-delay=".3">
                                    <h3 class="tp-pd-4-about-sub">about project</h3>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tp-portfolio-details-1-about-content">
                                    <h3 class="tp-pd-1-about-text color-cng">{{ $caseStudy->overview }}.</h3>
                                    <div class="tp-pd-1-about-list">
                                        <ul>
                                            <li>UX/UI Design</li>
                                            <li>App Design</li>
                                            <li>Brand Development</li>
                                            <li>Copywriting</li>
                                            <li>Front-end Development</li>
                                            <li>Shopify Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details 4 about end -->


                <!-- portfolio details 4 color start -->
                <div class="tp-pd-4-color-ptb p-relative mb-160">
                    <div class="tp-pd-4-color-picker">
                        <img src="{{ asset('assets/img/portfolio/portfolio-details-4/portfolio-details-shape.jpg') }}" alt="">
                    </div>
                    <div class="container-fluid p-0">
                        <div class="row gx-0">
                            <div class="col-xl-4 col-lg-6">
                                <div class="tp-pd-4-color-heading">
                                    <div class="tp-pd-4-color-shape">
                                        <img src="assets/img/portfolio/portfolio-details-4/portfolio-details-logo.png" alt="">
                                    </div>
                                    <div class="tp_fade_anim" data-delay=".3">
                                        <h4 class="tp-pd-4-color-title">{{ $caseStudy->role }}</h4>
                                        <p>{{ $caseStudy->about_project }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-6">
                                <div class="tp-pd-4-color-wrapper p-relative">
                                    <div class="tp-pd-4-color-thumb">
                                        <img src="{{ asset('storage/' . $caseStudy->gallery[3]) }}" alt="">
                                    </div>
                                    <div class="row gx-0">
                                        <div class="offset-xl-6 col-xl-6">
                                            <div class="tp-pd-4-color-content tp_fade_anim" data-delay=".5">
                                                <span>Color Palete</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                                                    elit. Maecenas varius tortor nibh, sit amet tempor nibh <br>
                                                    finibus et. Aenean eu enim justo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details 4 color end -->


                <!-- portfolio details work start -->
                <div class="tp-pd-1-work-ptb pb-130">
                    <div class="container container-1230">
                        <div class="tp-pd-1-work-top pb-70">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tp-pd-1-work-heading title-box pb-60">
                                        <h2 class="tp-pd-1-work-title ff-clash"><span class="tp-text-right-scroll">Work </span><br>
                                            <span class="tp-text-left-scroll">overview</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-pd-1-work-heading">
                                        <span class="tp-pd-1-about-title text-dark">OUR <br>
                                            APPROACH <svg xmlns="http://www.w3.org/2000/svg" width="102" height="9" viewBox="0 0 102 9" fill="none">
                                                <path d="M98 7.91996L101.5 4.43813L98 0.956299M1 3.99989H101V4.99989H1V3.99989Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tp-pd-1-work-content pl-20 text-dark">
                                        <p>{{ $caseStudy->approach }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tp-pd-1-work-item mb-30">
                                    <h3 class="tp-pd-1-work-item-title"><span><i data-purecounter-duration="2" data-purecounter-end="120" class="purecounter">0</i>%</span></h3>
                                    <div class="tp-pd-1-work-item-text">
                                        <span>Increase in conversions</span>
                                    </div>
                                </div>
                                <div class="tp-pd-1-work-item mb-30">
                                    <h3 class="tp-pd-1-work-item-title"><span><i data-purecounter-duration="2" data-purecounter-end="140" class="purecounter">0</i>%</span></h3>
                                    <div class="tp-pd-1-work-item-text">
                                        <span>Increase in website traffic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-pd-1-work-item mb-30">
                                    <h3 class="tp-pd-1-work-item-title"><span><i data-purecounter-duration="2" data-purecounter-end="80" class="purecounter">0</i>%</span></h3>
                                    <div class="tp-pd-1-work-item-text">
                                        <span>Average daily signups</span>
                                    </div>
                                </div>
                                <div class="tp-pd-1-work-item mb-30">
                                    <h3 class="tp-pd-1-work-item-title"><span><i data-purecounter-duration="2" data-purecounter-end="130" class="purecounter">0</i>%</span></h3>
                                    <div class="tp-pd-1-work-item-text">
                                        <span>Increase in conversions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details work end -->


                <!-- portfolio details thumb start -->
                <div class="tp-pd-4-thumb-ptb img-box pb-120">
                    <div class="container container-1630">
                        <div class="row gx-0">
                            <div class="col-lg-12">
                                <div class="tp-pd-4-thumb-wrap fix mb-20">
                                    <div class="tp-pd-4-thumb-item text-center tp-top-bottom-scroll">
                                        <img src="{{ asset('storage/' . $caseStudy->gallery[0]) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-20">
                            <div class="col-lg-5">
                                <div class="tp-pd-4-thumb-box mb-20">
                                    <img data-speed=".8" src="{{ asset('storage/' . $caseStudy->gallery[1]) }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tp-pd-4-thumb-box mb-20">
                                    <img data-speed=".8" src="{{ asset('storage/' . $caseStudy->gallery[2]) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details thumb end -->


                <!-- portfolio details slider start -->
                <div class="tp-pd-4-slider-ptb pb-110">
                    <div class="container container-1230">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <div class="tp-pd-4-slider-heading design-social-title-box title-box text-center mb-150">
                                    <h4 class="tp-section-title-dirtyline fs-140">
                                        <span class="tp-text-right-scroll tp_text_invert_2">View</span><br>
                                        <span class="tp-text-left-scroll tp_text_invert_2">Case Study</span><br>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-pd-4-slider-wrapper">
                        <div class="tp-pd-4-slider-active swiper">
                            <div class="swiper-wrapper">
                                @foreach ($caseStudies as $case)
                                    <div class="swiper-slide">
                                        <div class="tp-pd-4-slider-item">
                                            <div class="tp-pd-4-slider-thumb">
                                                <img src="{{ asset('storage/' . $case->banner_image) }}" alt="" width="100%" height="500">
                                            </div>
                                            <div class="tp-pd-4-slider-content text-center mt-5">
                                                <h4 class="tp-pd-4-slider-title">{{ $case->title }}</h4>
                                                <p>{{ $case->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details slider end -->


                <!-- portfolio details next prv start -->
                <div class="tp-pd-1-np-ptb pt-40">
                    <div class="container container-1230">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-8">
                                <div class="tp-pd-1-np-box hover-reveal-item p-relative">
                                    <a href="portfolio-details-modern-light.html#" class="tp-pd-1-np-content z-index-1 text-center">
                                        <span>next</span>
                                        <h4 class="tp-pd-1-np-title">merit global</h4>
                                        <p>Research, UX, UI Design</p>
                                    </a>
                                    <div class="tp-award-reveal-img" data-background="assets/img/portfolio/portfolio-details-1/portfolio-details-np.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details next prv end -->
</x-app-layout>
