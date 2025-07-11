<x-app-layout>

    @section('title', 'Services')

   <div class="tp-service-4-area tp-service-4-border p-relative">
                    <div class="tp-career-shape-1">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                                <path d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344" stroke="#030303" stroke-width="1.5" />
                            </svg></span>
                    </div>
                    <div class="container container-1320">
                        <div class="ar-about-us-4-hero-ptb">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="tp-service-hero-title-box tp_fade_anim z-index-1" data-delay=".3">
                                        <h3 class="tp-service-4-title">We Provide Smart <br> Solutions.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->


                <!-- banner area start -->
                <div class="tp-service-4-banner-area p-relative">
                    <div class="tp-service-4-bg-shape">
                        <img src="assets/img/service/service-4-bg.png" alt="">
                    </div>
                    <div class="ar-banner-wrap ar-about-us-4">
                        <img class="w-100 h-60" src="{{ asset('assets/img/about-us/about-us-4/service.jpg') }}" alt="" data-speed=".8">
                    </div>
                </div>
                <!-- banner area end -->

                <div id="down" class="tp-service-area pt-120">
                    <div class="container container-1320">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="tp-service-4-solution-subtitle pb-0 tp_fade_anim">
                                    <p>Our Smart Solutions</p>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="tp-service-4-solution-heading pb-10 tp_fade_anim">
                                    <h3 class="tp-service-4-solution-title">Let Fort and Hub Global be your trusted   partner in building a secure, innovative, and resilient future.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="tp-service-pin">
                            @foreach ($services as $service)
                            <div class="pin-spacer" style="order: 0; place-self: auto; grid-area: auto; z-index: auto; float: none; flex-shrink: 1; display: block; margin: 0px; inset: auto; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 1905px; height: 661px; padding: 0px;">
                                <div class="tp-service-item tp-service-panel" style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin:  0px; max-width: 1905px; width: 1905px; max-height: 661px; height: 661px; padding: 40px; transform: translate(0px, 58.9988px);">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="tp-service-number">
                                                <span>0{{ $service->id }}</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-7">
                                            <div class="tp-service-content">
                                                <h4 class="tp-section-title"><a class="tp_text_invert" href="service-details-light.html" style=""><div style="display: block; text-align: start; position: relative; background-position-x: 0%;">{{ $service->title }}</div></a></h4>
                                                <p>
                                                    {{ $service->sub_content }}
                                                </p>
                                                <div class="tp-service-btn">
                                                    <a href="{{ route('service.show', $service->slug) }}" class="tp-btn-black btn-red-bg">
                                                        <span class="tp-btn-black-filter-blur">
                                                            <svg width="0" height="0">
                                                                <defs>
                                                                    <filter id="buttonFilter2">
                                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur"></feGaussianBlur>
                                                                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                                        <feComposite in="SourceGraphic" in2="buttonFilter2" operator="atop"></feComposite>
                                                                        <feBlend in="SourceGraphic" in2="buttonFilter2"></feBlend>
                                                                    </filter>
                                                                </defs>
                                                            </svg>
                                                        </span>
                                                        <span class="tp-btn-black-filter d-inline-flex align-items-center" style="filter: url(#buttonFilter2)">
                                                            <span class="tp-btn-black-text">Learn More</span>
                                                            <span class="tp-btn-black-circle">
                                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                            <div class="tp-service-thumb text-left">
                                                <img class="tp_fade_anim" data-fade-from="right" data-delay=".2" src="{{ asset('storage/' . $service->photo) }}" alt="" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!-- service process area start -->
                <div class="tp-service-4-process-ptb pt-150 pb-140">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dgm-service-title-box service-4-heading z-index-1 mb-60">
                                    <span class="tp-section-subtitle subtitle-grey mb-15 text-black tp_fade_anim" data-delay=".3">How We Work</span>
                                    <h4 class="tp-section-title-grotesk text-black tp_fade_anim" data-delay=".5">
                                        We think out of the box <br>
                                        and follow the
                                        <span class="p-relative">
                                            working
                                            <span class="tp-section-title-shape">
                                                <svg width="231" height="15" viewBox="0 0 231 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M130.373 0.9726C126.192 1.17422 109.977 1.57746 94.4246 1.87989C53.7849 2.63597 36.6519 3.29123 22.7824 4.45055C11.9723 5.35784 1.72317 6.66837 1.16227 7.22282C1.06029 7.32363 0.958306 8.58376 0.907315 9.9951C0.805333 12.2633 0.958306 12.6666 2.08011 13.473C2.79398 13.9771 3.76281 14.4811 4.17073 14.6324C4.88461 14.8844 32.5217 13.3722 39.0995 12.717C42.006 12.4649 131.495 11.356 153.319 11.3056C161.172 11.3056 179.426 11.6081 193.857 12.0113C208.287 12.4145 221.341 12.6666 222.82 12.6162C226.491 12.5153 229.755 10.7512 229.907 8.83578C229.958 7.67647 229.805 7.47485 228.633 7.42444C227.358 7.37404 227.358 7.32363 228.939 6.9708C231.131 6.46675 231.386 6.16432 230.111 5.45865C228.888 4.80338 228.684 3.9465 229.805 3.9465C230.213 3.9465 230.57 3.69447 230.57 3.44245C230.57 3.14002 230.315 2.9384 229.958 2.9384C229.653 2.9384 228.327 2.43435 227.052 1.82949L224.706 0.720575L181.364 0.670169C157.551 0.619765 134.605 0.77098 130.373 0.9726ZM165.557 2.9888C165.863 3.19042 168.922 3.39204 172.441 3.39204C175.959 3.44245 182.588 3.64407 187.228 3.89609C194.622 4.29933 193.806 4.34974 180.599 4.14812C172.339 4.04731 158.826 3.9465 150.566 3.9465C142.305 3.9465 135.676 3.84569 135.778 3.74488C135.931 3.59366 141.591 3.44245 148.373 3.39204C155.155 3.29123 160.968 3.08961 161.325 2.83759C162.09 2.38394 164.792 2.43435 165.557 2.9888ZM218.18 3.79528C217.16 3.89609 215.528 3.89609 214.61 3.79528C213.743 3.69447 214.61 3.59366 216.548 3.59366C218.537 3.59366 219.25 3.69447 218.18 3.79528ZM106.102 4.14812C106 4.24893 94.2207 4.40014 79.8922 4.50095C65.6148 4.65217 57.4562 4.60176 61.7905 4.45055C70.9178 4.09771 106.407 3.84569 106.102 4.14812ZM131.495 4.24893C131.342 4.40014 130.883 4.45055 130.526 4.29933C130.118 4.14812 130.271 3.9969 130.832 3.9969C131.393 3.9465 131.699 4.09771 131.495 4.24893ZM221.647 7.52525C222.004 7.87809 220.525 7.9789 217.058 7.92849C214.253 7.82768 204.259 7.82768 194.877 7.87809C185.494 7.92849 176.52 7.87809 174.99 7.77728C170.452 7.42444 145.925 7.37404 127.569 7.62606C108.702 7.92849 107.529 7.67647 124.764 7.0212C140.214 6.41634 220.984 6.86999 221.647 7.52525ZM98.5039 8.0293C83.1047 8.43254 67.2465 8.43254 70.9688 7.9789C72.4985 7.77728 82.0338 7.62606 92.13 7.62606C110.13 7.67647 110.283 7.67647 98.5039 8.0293ZM165.812 8.48295C165.812 8.73497 165.455 8.83578 165.047 8.68457C164.639 8.48295 164.282 8.28133 164.282 8.18052C164.282 8.07971 164.639 7.9789 165.047 7.9789C165.455 7.9789 165.812 8.18052 165.812 8.48295ZM167.342 8.48295C167.342 8.73497 167.087 8.987 166.781 8.987C166.526 8.987 166.424 8.73497 166.577 8.48295C166.73 8.18052 166.985 7.9789 167.138 7.9789C167.24 7.9789 167.342 8.18052 167.342 8.48295ZM171.166 8.48295C171.319 8.73497 171.115 8.987 170.707 8.987C170.248 8.987 169.891 8.73497 169.891 8.48295C169.891 8.18052 170.095 7.9789 170.35 7.9789C170.656 7.9789 171.013 8.18052 171.166 8.48295ZM219.607 8.987C220.525 9.39024 220.525 9.44064 219.352 9.39024C218.638 9.39024 217.415 9.18862 216.548 8.987L215.018 8.58376H216.803C217.772 8.58376 219.046 8.73497 219.607 8.987ZM101.665 9.33983C94.0167 9.44064 81.6259 9.44064 74.1303 9.33983C66.6346 9.28943 72.9065 9.23902 88.0508 9.23902C103.195 9.23902 109.314 9.28943 101.665 9.33983ZM5.70046 11.0032C5.70046 11.2552 4.9356 11.5072 4.06875 11.4568C2.64101 11.4568 2.53902 11.356 3.40587 11.0032C4.83361 10.3983 5.70046 10.3983 5.70046 11.0032ZM13.808 10.7008C13.706 10.8016 11.8704 11.0032 9.77973 11.1544C7.28118 11.356 6.21037 11.3056 6.72028 11.0032C7.43415 10.5496 14.3179 10.2471 13.808 10.7008ZM213.131 11.8601C212.367 11.9609 210.99 11.9609 210.072 11.8601C209.154 11.7593 209.766 11.6585 211.449 11.6585C213.131 11.6585 213.896 11.7593 213.131 11.8601Z" fill="url(#paint0_linear_5012_166)" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear_5012_166" x1="44.8273" y1="18.6184" x2="48.3226" y2="31.8404" gradientUnits="userSpaceOnUse">
                                                            <stop offset="1" stop-color="#43E508" />
                                                            <stop offset="1" stop-color="#F7EF33" />
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </span>
                                        </span>
                                        <br>
                                        process
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tp-service-4-process-wrap">
                                    <div class="tp-service-4-process-list">
                                        <span>01</span>
                                        <p>Thinking & Research</p>
                                    </div>
                                    <div class="tp-service-4-process-list">
                                        <span>02</span>
                                        <p>Problem Discovery</p>
                                    </div>
                                    <div class="tp-service-4-process-list">
                                        <span>03</span>
                                        <p>Design from Scratch</p>
                                    </div>
                                    <div class="tp-service-4-process-list">
                                        <span>04</span>
                                        <p>Implementation & Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tp-service-4-process-wrapper pl-70 p-relative">
                                    <p class="mb-50">
                                        Innovation is at the heart of everything we do. At our core, we believe that real solutions come from bold ideas and proven processes. That’s why we blend creative thinking with a structured, results-driven approach — delivering outcomes that are both imaginative and effective.
                                        Whether it's solving complex challenges or crafting unique experiences, we think beyond the ordinary while staying grounded in what truly works.
                                    </p>
                                    <div class="tp-service-4-process-thumb fix">
                                        <div class="tp_img_reveal">
                                            <img src="assets/img/service/service-4-thumb-1.jpg" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- service process area end -->


                <!-- brand area start -->
                <x-clients :class="'tp-service-4-brand-area pt-120 pb-120'" :clients="$clients" />
                <!-- brand area end -->
</x-app-layout>
