<x-app-layout>
     @section('title', 'About Us')

<div class="ar-hero-area p-relative" data-background="assets/img/about-us/about-us-4/about-us-4-bg.png">
                    <div class="ar-about-us-4-shape">
                        <img src="assets/img/about-us/about-us-4/about-us-4-shape-1.png" alt="">
                    </div>
                    <div class="container container-1230">
                        <div class="ar-about-us-4-hero-ptb">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                                        <h3 class="ar-about-us-4-title">{{ $about->title }}</h3>
                                        <div class="ar-about-us-4-title-box d-flex justify-content-end">
                                            <span class="tp-section-subtitle pre">About Us</span>
                                            <div class="ar-about-us-4-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                                    <rect y="4" width="80" height="1" fill="#111013" />
                                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#111013" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <p>We are dedicated to helping businesses navigate this complex landscape by providing comprehensive solutions tailored to their specific needs..<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->
                <x-about-us :about="$about" />

                <div class="tp-testimonial-area tp-team-bg black-bg-3 p-relative fix" data-background="assets/img/home-01/testimonial/noise.png">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6">
                                <div class="tp-testimonial-title-wrap z-index-3">
                                    <div class="tp-testimonial-title-box mb-75 text-center">
                                        <h4 class="tp-section-title text-white fs-140">meet <br>
                                            our team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-team-slider-wrap">
                        <div class="tp-team-slider-active swiper-container">
                            <div class="swiper-wrapper slide-transtion">
                                @foreach($teamMembers as $member)
                                    <div class="swiper-slide">
                                        <div class="tp-team-item">
                                            <div class="tp-team-item-thumb">
                                                <a href="team-details-light.html"><img src="{{ asset('storage/' . $member->photo) }}" alt=""></a>
                                                <div class="studio-team-content text-center">
                                                    <h4 class="studio-team-title-sm"><a href="team-details-light.html">{{ $member->name }}</a></h4>
                                                    <span>{{ $member->role }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

</x-app-layout>
