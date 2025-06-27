<x-app-layout>
    <!-- ==================== Start Intro ==================== -->
@section('title', 'Home Page')


                <!-- hero area start -->
                <x-banner :slide="$slide" />
                <!-- hero area end -->

                <!-- about area start -->
                <x-about-us :about="$about" />
                <!-- about area end -->

                <!-- step area start -->
                <x-feature-area :approaches="$approaches" />
                <!-- step area end -->

                <!-- service area end -->
                <x-service-area />
                <!-- service area end -->

                <!-- barnd area start -->
                <div class="tp-brand-area black-bg-5 pt-160 pb-200">
                    <div class="tp-brand-wrapper green-regular-bg z-index-1">
                        <div class="swiper-container tp-brand-active fix">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Creative agency</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Website marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Digital marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Product marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Research marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Website marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Lifetime Update</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-brand-wrapper tp-brand-style-2 black-bg-6">
                        <div class="swiper-container tp-brand-active fix" dir="rtl">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Creative agency</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Website marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Digital marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Product marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Research marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Website marketing</span>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tp-brand-item">
                                        <span class="tp-brand-title">Lifetime Update</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- barnd area end -->

                <!-- case study area start -->
                <x-case-study :caseStudies="$caseStudies" />
                <!-- case study area end -->

                <!-- team area start -->
                <div class="dgm-team-area pt-120 pb-80">
                    <div class="container container-1330">
                        <div class="dgm-team-top-wrap mb-60">
                            <div class="row align-items-end">
                                <div class="col-md-8">
                                    <div class="dgm-team-title-box z-index-">
                                        <span class="tp-section-subtitle subtitle-black mb-15 tp_fade_anim" data-delay=".3">Team member</span>
                                        <h4 class="tp-section-title-grotesk mb-0 tp_fade_anim" data-delay=".5">
                                            Meet the <br> talented
                                            <span class="p-relative">
                                                team
                                                <span class="tp-section-title-shape d-none d-md-block">
                                                    <svg width="140" height="15" viewBox="0 0 140 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M78.8214 0.790959C76.2763 0.992579 66.4063 1.39582 56.9397 1.69825C32.2025 2.45433 21.7737 3.10959 13.3314 4.26891C6.75134 5.1762 0.512711 6.48673 0.171293 7.04118C0.109217 7.14199 0.0471415 8.40212 0.0161036 9.81346C-0.0459723 12.0817 0.0471415 12.4849 0.729976 13.2914C1.16451 13.7955 1.75423 14.2995 2.00253 14.4507C2.43706 14.7027 19.2596 13.1906 23.2635 12.5353C25.0327 12.2833 79.5043 11.1744 92.7885 11.124C97.5684 11.124 108.68 11.4264 117.464 11.8297C126.247 12.2329 134.193 12.4849 135.093 12.4345C137.328 12.3337 139.314 10.5695 139.408 8.65414C139.439 7.49482 139.345 7.29321 138.632 7.2428C137.856 7.1924 137.856 7.14199 138.818 6.78916C140.152 6.28511 140.308 5.98268 139.532 5.277C138.787 4.62174 138.663 3.76486 139.345 3.76486C139.594 3.76486 139.811 3.51283 139.811 3.2608C139.811 2.95837 139.656 2.75675 139.439 2.75675C139.252 2.75675 138.445 2.25271 137.669 1.64784L136.242 0.538934L109.859 0.488529C95.3647 0.438124 81.3976 0.589339 78.8214 0.790959ZM100.238 2.80716C100.424 3.00878 102.286 3.2104 104.428 3.2104C106.569 3.2608 110.604 3.46242 113.429 3.71445C117.929 4.11769 117.433 4.1681 109.394 3.96648C104.366 3.86567 96.1406 3.76486 91.1125 3.76486C86.0843 3.76486 82.0494 3.66405 82.1115 3.56324C82.2046 3.41202 85.6498 3.2608 89.7778 3.2104C93.9059 3.10959 97.4442 2.90797 97.6615 2.65594C98.127 2.2023 99.772 2.25271 100.238 2.80716ZM132.269 3.61364C131.648 3.71445 130.655 3.71445 130.096 3.61364C129.568 3.51283 130.096 3.41202 131.276 3.41202C132.486 3.41202 132.921 3.51283 132.269 3.61364ZM64.0474 3.96648C63.9853 4.06729 56.8155 4.2185 48.0939 4.31931C39.4033 4.47053 34.4372 4.42012 37.0754 4.26891C42.6312 3.91607 64.2336 3.66405 64.0474 3.96648ZM79.5043 4.06729C79.4112 4.2185 79.1318 4.26891 78.9146 4.11769C78.6662 3.96648 78.7594 3.81526 79.1008 3.81526C79.4422 3.76486 79.6284 3.91607 79.5043 4.06729ZM134.379 7.34361C134.597 7.69645 133.697 7.79726 131.586 7.74685C129.879 7.64604 123.795 7.64604 118.084 7.69645C112.373 7.74685 106.911 7.69645 105.98 7.59564C103.217 7.2428 88.288 7.1924 77.1143 7.44442C65.6303 7.74685 64.9164 7.49483 75.4073 6.83956C84.8118 6.2347 133.976 6.68835 134.379 7.34361ZM59.4227 7.84766C50.0493 8.2509 40.3965 8.2509 42.6622 7.79726C43.5934 7.59564 49.3975 7.44442 55.543 7.44442C66.4994 7.49483 66.5925 7.49483 59.4227 7.84766ZM100.393 8.30131C100.393 8.55333 100.176 8.65414 99.9272 8.50293C99.6789 8.30131 99.4617 8.09969 99.4617 7.99888C99.4617 7.89807 99.6789 7.79726 99.9272 7.79726C100.176 7.79726 100.393 7.99888 100.393 8.30131ZM101.324 8.30131C101.324 8.55333 101.169 8.80536 100.983 8.80536C100.827 8.80536 100.765 8.55333 100.858 8.30131C100.951 7.99888 101.107 7.79726 101.2 7.79726C101.262 7.79726 101.324 7.99888 101.324 8.30131ZM103.652 8.30131C103.745 8.55333 103.621 8.80536 103.372 8.80536C103.093 8.80536 102.876 8.55333 102.876 8.30131C102.876 7.99888 103 7.79726 103.155 7.79726C103.341 7.79726 103.559 7.99888 103.652 8.30131ZM133.138 8.80536C133.697 9.2086 133.697 9.259 132.983 9.2086C132.548 9.2086 131.803 9.00698 131.276 8.80536L130.344 8.40212H131.431C132.02 8.40212 132.796 8.55333 133.138 8.80536ZM61.3471 9.15819C56.6914 9.259 49.1492 9.259 44.5866 9.15819C40.024 9.10779 43.8417 9.05738 53.0599 9.05738C62.2782 9.05738 66.0028 9.10779 61.3471 9.15819ZM2.93367 10.8216C2.93367 11.0736 2.4681 11.3256 1.94046 11.2752C1.07139 11.2752 1.00932 11.1744 1.53696 10.8216C2.40602 10.2167 2.93367 10.2167 2.93367 10.8216ZM7.8687 10.5191C7.80663 10.6199 6.68926 10.8216 5.41671 10.9728C3.89585 11.1744 3.24405 11.124 3.55443 10.8216C3.98896 10.3679 8.17908 10.0655 7.8687 10.5191ZM129.196 11.6784C128.73 11.7793 127.892 11.7793 127.334 11.6784C126.775 11.5776 127.148 11.4768 128.172 11.4768C129.196 11.4768 129.662 11.5776 129.196 11.6784Z" fill="url(#paint0_linear_5013_167)" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_5013_167" x1="26.75" y1="18.4368" x2="31.9187" y2="30.338" gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="#43E508" />
                                                                <stop offset="1" stop-color="#F7EF33" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </span>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dgm-team-btn-box text-start text-md-end tp_fade_anim" data-delay=".3">
                                        <a class="tp-btn-yellow-green green-solid btn-60" href="team-light.html">
                                            <span>
                                                <span class="text-1">All team member</span>
                                                <span class="text-2">All team member</span>
                                            </span>
                                            <i>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dgm-team-wrap">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="dgm-team-item mb-40 tp_fade_anim" data-delay=".3">
                                        <div class="dgm-team-thumb tp--hover-item p-relative">
                                            <a href="team-details-light.html">
                                                <div class="tp--hover-img" data-displacement="assets/img/fluid.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                    <img src="assets/img/home-03/team/team-1.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dgm-team-content">
                                            <h4 class="dgm-team-title-sm"><a class="tp-line-black" href="team-details-light.html">Ethan Roberts</a></h4>
                                            <span>Marketing Leader</span>
                                            <div class="dgm-team-social">
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 0H5.09091C4.24704 0 3.43773 0.335226 2.84102 0.931933C2.24432 1.52864 1.90909 2.33795 1.90909 3.18182V5.09091H0V7.63636H1.90909V12.7273H4.45455V7.63636H6.36364L7 5.09091H4.45455V3.18182C4.45455 3.01304 4.52159 2.85118 4.64093 2.73184C4.76027 2.6125 4.92213 2.54545 5.09091 2.54545H7V0Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M9.4507 0.5H11.2908L7.27076 5.15949L12 11.5H8.29704L5.39675 7.65451L2.07815 11.5H0.236963L4.53678 6.51615L0 0.5H3.79697L6.41858 4.01492L9.4507 0.5ZM8.8049 10.3831H9.8245L3.24294 1.55826H2.1488L8.8049 10.3831Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.39996 3.59989C9.35474 3.59989 10.2704 3.97918 10.9455 4.65431C11.6207 5.32944 12 6.24512 12 7.1999V11.3999H9.59996V7.1999C9.59996 6.88164 9.47353 6.57642 9.24849 6.35137C9.02344 6.12633 8.71822 5.9999 8.39996 5.9999C8.0817 5.9999 7.77647 6.12633 7.55143 6.35137C7.32639 6.57642 7.19996 6.88164 7.19996 7.1999V11.3999H4.79995V7.1999C4.79995 6.24512 5.17924 5.32944 5.85437 4.65431C6.5295 3.97918 7.44518 3.59989 8.39996 3.59989Z" fill="#141414" />
                                                            <path d="M2.4 4.19951H0V11.3995H2.4V4.19951Z" fill="#141414" />
                                                            <path d="M1.2 2.4C1.86274 2.4 2.4 1.86274 2.4 1.2C2.4 0.537259 1.86274 0 1.2 0C0.537259 0 0 0.537259 0 1.2C0 1.86274 0.537259 2.4 1.2 2.4Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="dgm-team-item mb-40 tp_fade_anim" data-delay=".4">
                                        <div class="dgm-team-thumb tp--hover-item p-relative">
                                            <a href="team-details-light.html">
                                                <div class="tp--hover-img" data-displacement="assets/img/fluid.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                    <img src="assets/img/home-03/team/team-2.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dgm-team-content">
                                            <h4 class="dgm-team-title-sm"><a class="tp-line-black" href="team-details-light.html">Alex Jamie</a></h4>
                                            <span>Marketing Leader</span>
                                            <div class="dgm-team-social">
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 0H5.09091C4.24704 0 3.43773 0.335226 2.84102 0.931933C2.24432 1.52864 1.90909 2.33795 1.90909 3.18182V5.09091H0V7.63636H1.90909V12.7273H4.45455V7.63636H6.36364L7 5.09091H4.45455V3.18182C4.45455 3.01304 4.52159 2.85118 4.64093 2.73184C4.76027 2.6125 4.92213 2.54545 5.09091 2.54545H7V0Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M9.4507 0.5H11.2908L7.27076 5.15949L12 11.5H8.29704L5.39675 7.65451L2.07815 11.5H0.236963L4.53678 6.51615L0 0.5H3.79697L6.41858 4.01492L9.4507 0.5ZM8.8049 10.3831H9.8245L3.24294 1.55826H2.1488L8.8049 10.3831Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.39996 3.59989C9.35474 3.59989 10.2704 3.97918 10.9455 4.65431C11.6207 5.32944 12 6.24512 12 7.1999V11.3999H9.59996V7.1999C9.59996 6.88164 9.47353 6.57642 9.24849 6.35137C9.02344 6.12633 8.71822 5.9999 8.39996 5.9999C8.0817 5.9999 7.77647 6.12633 7.55143 6.35137C7.32639 6.57642 7.19996 6.88164 7.19996 7.1999V11.3999H4.79995V7.1999C4.79995 6.24512 5.17924 5.32944 5.85437 4.65431C6.5295 3.97918 7.44518 3.59989 8.39996 3.59989Z" fill="#141414" />
                                                            <path d="M2.4 4.19951H0V11.3995H2.4V4.19951Z" fill="#141414" />
                                                            <path d="M1.2 2.4C1.86274 2.4 2.4 1.86274 2.4 1.2C2.4 0.537259 1.86274 0 1.2 0C0.537259 0 0 0.537259 0 1.2C0 1.86274 0.537259 2.4 1.2 2.4Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="dgm-team-item mb-40 tp_fade_anim" data-delay=".5">
                                        <div class="dgm-team-thumb tp--hover-item p-relative">
                                            <a href="team-details-light.html">
                                                <div class="tp--hover-img" data-displacement="assets/img/fluid.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                    <img src="assets/img/home-03/team/team-3.png" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dgm-team-content">
                                            <h4 class="dgm-team-title-sm"><a class="tp-line-black" href="team-details-light.html">Taylor Same</a></h4>
                                            <span>Marketing Leader</span>
                                            <div class="dgm-team-social">
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 0H5.09091C4.24704 0 3.43773 0.335226 2.84102 0.931933C2.24432 1.52864 1.90909 2.33795 1.90909 3.18182V5.09091H0V7.63636H1.90909V12.7273H4.45455V7.63636H6.36364L7 5.09091H4.45455V3.18182C4.45455 3.01304 4.52159 2.85118 4.64093 2.73184C4.76027 2.6125 4.92213 2.54545 5.09091 2.54545H7V0Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M9.4507 0.5H11.2908L7.27076 5.15949L12 11.5H8.29704L5.39675 7.65451L2.07815 11.5H0.236963L4.53678 6.51615L0 0.5H3.79697L6.41858 4.01492L9.4507 0.5ZM8.8049 10.3831H9.8245L3.24294 1.55826H2.1488L8.8049 10.3831Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.39996 3.59989C9.35474 3.59989 10.2704 3.97918 10.9455 4.65431C11.6207 5.32944 12 6.24512 12 7.1999V11.3999H9.59996V7.1999C9.59996 6.88164 9.47353 6.57642 9.24849 6.35137C9.02344 6.12633 8.71822 5.9999 8.39996 5.9999C8.0817 5.9999 7.77647 6.12633 7.55143 6.35137C7.32639 6.57642 7.19996 6.88164 7.19996 7.1999V11.3999H4.79995V7.1999C4.79995 6.24512 5.17924 5.32944 5.85437 4.65431C6.5295 3.97918 7.44518 3.59989 8.39996 3.59989Z" fill="#141414" />
                                                            <path d="M2.4 4.19951H0V11.3995H2.4V4.19951Z" fill="#141414" />
                                                            <path d="M1.2 2.4C1.86274 2.4 2.4 1.86274 2.4 1.2C2.4 0.537259 1.86274 0 1.2 0C0.537259 0 0 0.537259 0 1.2C0 1.86274 0.537259 2.4 1.2 2.4Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="dgm-team-item mb-40 tp_fade_anim" data-delay=".6">
                                        <div class="dgm-team-thumb tp--hover-item p-relative">
                                            <a href="team-details-light.html">
                                                <div class="tp--hover-img" data-displacement="assets/img/fluid.jpg" data-intensity="0.6" data-speedin="1" data-speedout="1">
                                                    <img src="assets/img/home-03/team/team-4.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dgm-team-content">
                                            <h4 class="dgm-team-title-sm"><a class="tp-line-black" href="team-details-light.html">Yoyo Casey</a></h4>
                                            <span>Marketing Leader</span>
                                            <div class="dgm-team-social">
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="7" height="13" viewBox="0 0 7 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 0H5.09091C4.24704 0 3.43773 0.335226 2.84102 0.931933C2.24432 1.52864 1.90909 2.33795 1.90909 3.18182V5.09091H0V7.63636H1.90909V12.7273H4.45455V7.63636H6.36364L7 5.09091H4.45455V3.18182C4.45455 3.01304 4.52159 2.85118 4.64093 2.73184C4.76027 2.6125 4.92213 2.54545 5.09091 2.54545H7V0Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                            <path d="M9.4507 0.5H11.2908L7.27076 5.15949L12 11.5H8.29704L5.39675 7.65451L2.07815 11.5H0.236963L4.53678 6.51615L0 0.5H3.79697L6.41858 4.01492L9.4507 0.5ZM8.8049 10.3831H9.8245L3.24294 1.55826H2.1488L8.8049 10.3831Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="index-digital-marketing-light.html#">
                                                    <span>
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.39996 3.59989C9.35474 3.59989 10.2704 3.97918 10.9455 4.65431C11.6207 5.32944 12 6.24512 12 7.1999V11.3999H9.59996V7.1999C9.59996 6.88164 9.47353 6.57642 9.24849 6.35137C9.02344 6.12633 8.71822 5.9999 8.39996 5.9999C8.0817 5.9999 7.77647 6.12633 7.55143 6.35137C7.32639 6.57642 7.19996 6.88164 7.19996 7.1999V11.3999H4.79995V7.1999C4.79995 6.24512 5.17924 5.32944 5.85437 4.65431C6.5295 3.97918 7.44518 3.59989 8.39996 3.59989Z" fill="#141414" />
                                                            <path d="M2.4 4.19951H0V11.3995H2.4V4.19951Z" fill="#141414" />
                                                            <path d="M1.2 2.4C1.86274 2.4 2.4 1.86274 2.4 1.2C2.4 0.537259 1.86274 0 1.2 0C0.537259 0 0 0.537259 0 1.2C0 1.86274 0.537259 2.4 1.2 2.4Z" fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- team area end -->

                <!-- brand area start -->
                <x-clients :clients="$clients" />
                <!-- brand area end -->

                <!-- testimonial area start -->
                <div class="dgm-testimonial-area dgm-testimonial-radius dgm-testimonial-space grey-bg-2 pt-120 pb-120 p-relative">
                    <div class="dgm-testimonial-bg" data-background="assets/img/home-03/testimonial/test-bg-shape.jpg"></div>
                    <div class="dgm-testimonial-thumb">
                        <div class="anim-zoomin-wrap">
                            <img class="anim-zoomin" src="assets/img/home-03/testimonial/test-bg.jpg" alt="">
                        </div>
                        <a class="popup-video dgm-testimonial-playbtn" href="https://www.youtube.com/watch?v=VCPGMjCW0is">
                            <span>
                                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 12L0.5 23.2583V0.74167L20 12Z" fill="currentcolor" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="offset-xl-6 col-xl-6 col-lg-8 col-md-9">
                                <div class="dgm-testimonial-title-box text-center z-index-1 mb-45">
                                    <span class="tp-section-subtitle subtitle-grey mb-15 tp_fade_anim" data-delay=".3">Testimonials</span>
                                    <h4 class="tp-section-title-grotesk tp_fade_anim" data-delay=".5">
                                        What
                                        <span class="p-relative">
                                            clients say
                                            <span class="tp-section-title-shape d-none d-md-block">
                                                <svg width="300" height="15" viewBox="0 0 300 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.18518 11.5148C3.94801 12.9925 5.3191 13.3157 14.525 14.0545C24.3185 14.8395 26.2772 14.8395 57.8124 14.1007C92.2856 13.2695 116.378 12.8539 195.509 11.6995C253.487 10.8222 275.62 10.2219 288.548 9.25216C297.754 8.51334 298.341 8.32863 299.517 6.6201C300.3 5.60422 300.104 4.72686 299.125 4.63451C298.145 4.54216 297.95 3.94186 298.537 3.34157C299.321 2.64892 298.929 2.23333 297.362 2.23333C296.187 2.23333 295.795 2.00245 296.383 1.77157C296.97 1.49451 296.383 1.21745 295.012 1.07892C289.527 0.66333 265.239 0.478624 261.322 0.848036C259.167 1.07892 202.952 1.49451 136.552 1.72539C24.7103 2.18715 1.98931 2.46421 6.29846 3.4801C6.88607 3.6648 6.29846 4.21892 4.73149 4.77304C1.20582 6.0198 0.226471 7.35892 2.18518 8.09775C3.16453 8.46716 2.96866 8.69804 1.79343 8.69804C-0.752881 8.69804 -0.557011 9.20598 2.18518 11.5148ZM98.7493 9.62157C110.893 9.15981 136.161 8.9751 134.594 9.39069C133.223 9.66775 77.3994 11.0069 68.7811 10.9607C63.2968 10.9145 64.6679 10.776 74.0696 10.4989C81.121 10.268 92.2856 9.89863 98.7493 9.62157ZM70.544 4.68069C71.9151 4.81922 70.9357 4.91157 68.1935 4.91157C65.4513 4.91157 64.472 4.81922 65.6472 4.68069C67.0183 4.58833 69.3687 4.58833 70.544 4.68069ZM85.2343 3.29539C87.193 3.43392 86.0177 3.52627 82.8838 3.52627C79.554 3.52627 78.1829 3.43392 79.3581 3.29539C80.7292 3.20304 83.4714 3.20304 85.2343 3.29539ZM115.986 3.61863C122.254 3.61863 128.717 3.80333 130.676 4.08039C132.831 4.35745 126.955 4.49598 112.264 4.49598C95.2236 4.4498 92.0897 4.35745 97.5741 4.03421C101.296 3.80333 109.522 3.61863 115.986 3.61863ZM144.975 4.21892C146.542 4.35745 145.954 4.49598 143.8 4.49598C141.645 4.54216 140.47 4.40363 141.253 4.2651C141.841 4.12657 143.604 4.08039 144.975 4.21892ZM274.249 4.68069C275.816 4.81922 275.229 4.95775 273.074 4.95775C270.919 5.00392 269.744 4.86539 270.528 4.72686C271.115 4.58833 272.878 4.54216 274.249 4.68069Z" fill="url(#paint0_linear_5013_169)" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear_5013_169" x1="384.814" y1="11.9742" x2="384.849" y2="8.71733" gradientUnits="userSpaceOnUse">
                                                            <stop offset="1" stop-color="#43E508" />
                                                            <stop offset="1" stop-color="#F7EF33" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </span> <br>
                                        about us
                                    </h4>
                                </div>
                                <div class="dgm-testimonial-slider-wrap z-index-1">
                                    <div class="siwper-container dgm-testimonial-active fix">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="dgm-testimonial-slider-item text-center">
                                                    <div class="dgm-testimonial-quote">
                                                        <span>
                                                            <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.417 2.25185V11.4963C15.417 13.6296 14.4936 16.079 12.6467 18.8444L4.33602 30.8148C3.77395 31.6049 3.01113 32 2.04757 32C0.682522 32 0 31.2099 0 29.6296V2.37037C0 0.790124 0.802967 0 2.4089 0H13.1285C14.6542 0 15.417 0.750615 15.417 2.25185Z" fill="currentcolor" />
                                                                <path d="M40 2.25185V11.4963C40 13.6296 39.0766 16.079 37.2298 18.8444L28.919 30.8148C28.357 31.6049 27.5942 32 26.6306 32C25.2656 32 24.583 31.2099 24.583 29.6296V2.37037C24.583 0.790124 25.386 0 26.9919 0H37.7115C39.2372 0 40 0.750615 40 2.25185Z" fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="dgm-testimonial-text">
                                                        <p>
                                                            We will help you identify your target market, develop a marketing plan, and grow your customer base. We are committed to helping you succeed, and we will work with you every step of the way.
                                                        </p>
                                                    </div>
                                                    <div class="dgm-testimonial-author-wrap d-flex align-items-center justify-content-center">
                                                        <div class="dgm-testimonial-author p-relative">
                                                            <img class="dgm-testimonial-author-img" src="assets/img/home-03/avater/author-1.jpg" alt="">
                                                            <img class="dgm-testimonial-author-logo" src="assets/img/home-03/testimonial/testi-logo.png" alt="">
                                                        </div>
                                                        <div class="dgm-testimonial-author-info">
                                                            <h4 class="dgm-testimonial-author-name">Leslie Alexander
                                                            </h4>
                                                            <span>CEO at Specter</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="dgm-testimonial-slider-item text-center">
                                                    <div class="dgm-testimonial-quote">
                                                        <span>
                                                            <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.417 2.25185V11.4963C15.417 13.6296 14.4936 16.079 12.6467 18.8444L4.33602 30.8148C3.77395 31.6049 3.01113 32 2.04757 32C0.682522 32 0 31.2099 0 29.6296V2.37037C0 0.790124 0.802967 0 2.4089 0H13.1285C14.6542 0 15.417 0.750615 15.417 2.25185Z" fill="currentcolor" />
                                                                <path d="M40 2.25185V11.4963C40 13.6296 39.0766 16.079 37.2298 18.8444L28.919 30.8148C28.357 31.6049 27.5942 32 26.6306 32C25.2656 32 24.583 31.2099 24.583 29.6296V2.37037C24.583 0.790124 25.386 0 26.9919 0H37.7115C39.2372 0 40 0.750615 40 2.25185Z" fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="dgm-testimonial-text">
                                                        <p>
                                                            We will help you identify your target market, develop a marketing plan, and grow your customer base. We are committed to helping you succeed, and we will work with you every step of the way.
                                                        </p>
                                                    </div>
                                                    <div class="dgm-testimonial-author-wrap d-flex align-items-center justify-content-center">
                                                        <div class="dgm-testimonial-author p-relative">
                                                            <img class="dgm-testimonial-author-img" src="assets/img/home-03/avater/author-1.jpg" alt="">
                                                            <img class="dgm-testimonial-author-logo" src="assets/img/home-03/testimonial/testi-logo.png" alt="">
                                                        </div>
                                                        <div class="dgm-testimonial-author-info">
                                                            <h4 class="dgm-testimonial-author-name">Leslie Alexander
                                                            </h4>
                                                            <span>CEO at Specter</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="dgm-testimonial-slider-item text-center">
                                                    <div class="dgm-testimonial-quote">
                                                        <span>
                                                            <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.417 2.25185V11.4963C15.417 13.6296 14.4936 16.079 12.6467 18.8444L4.33602 30.8148C3.77395 31.6049 3.01113 32 2.04757 32C0.682522 32 0 31.2099 0 29.6296V2.37037C0 0.790124 0.802967 0 2.4089 0H13.1285C14.6542 0 15.417 0.750615 15.417 2.25185Z" fill="currentcolor" />
                                                                <path d="M40 2.25185V11.4963C40 13.6296 39.0766 16.079 37.2298 18.8444L28.919 30.8148C28.357 31.6049 27.5942 32 26.6306 32C25.2656 32 24.583 31.2099 24.583 29.6296V2.37037C24.583 0.790124 25.386 0 26.9919 0H37.7115C39.2372 0 40 0.750615 40 2.25185Z" fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="dgm-testimonial-text">
                                                        <p>
                                                            We will help you identify your target market, develop a marketing plan, and grow your customer base. We are committed to helping you succeed, and we will work with you every step of the way.
                                                        </p>
                                                    </div>
                                                    <div class="dgm-testimonial-author-wrap d-flex align-items-center justify-content-center">
                                                        <div class="dgm-testimonial-author p-relative">
                                                            <img class="dgm-testimonial-author-img" src="assets/img/home-03/avater/author-1.jpg" alt="">
                                                            <img class="dgm-testimonial-author-logo" src="assets/img/home-03/testimonial/testi-logo.png" alt="">
                                                        </div>
                                                        <div class="dgm-testimonial-author-info">
                                                            <h4 class="dgm-testimonial-author-name">Leslie Alexander
                                                            </h4>
                                                            <span>CEO at Specter</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dgm-testimonial-dot text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- testimonial area end -->

                <!-- blog area start -->
                <x-resources />
                <!-- blog area end -->




</x-app-layout>


<script>
    document.getElementById('appointment-form').addEventListener('submit', async function (e) {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);

        try {
            const response = await fetch("{{ route('appointments.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData,
            });

            if (!response.ok) throw new Error('Network response was not ok');

            const result = await response.json();

            Toastify({
                text: result.message,
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#28a745",
            }).showToast();

            form.reset();
        } catch (error) {
            Toastify({
                text: "Oops! Something went wrong.",
                duration: 3000,
                gravity: "top",
                position: "right",
                backgroundColor: "#dc3545",
            }).showToast();
        }
    });
</script>


