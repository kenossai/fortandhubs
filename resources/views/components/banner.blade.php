<section class="hero-area">
    <div class="container large">
        <div class="hero-area-inner">
        <div class="area-shape-1">
            <img class="show-light" src="assets/imgs/shape/img-s-64.webp" alt="shape">
            <img class="show-dark" src="assets/imgs/shape/img-s-64-dark.webp" alt="shape">
        </div>
        <div class="info-text has_word_anim" data-delay="0.75">BUILDING
            OUTSTANDING
            DESIGN &
            DEVELOPMENT</div>
        <div class="section-content">
            <div class="content-first">
            <div class="section-title-wrapper">
                <div class="title-wrapper">
                <h1 class="section-title has_fade_anim">We are
                    Skilled in <span class="marked">Web <br>
                    Design</span> and <span class="rotated">development</span><span class="shape-1">
                    <img class="show-dark has_fade_anim" data-fade-offset="0"
                        src="assets/imgs/shape/img-s-60-light.webp" alt="shape">
                    </span>
                </h1>
                </div>
            </div>
            <div class="content-bottom">
                <div class="scroll-down has_fade_anim" data-fade-offset="0" data-on-scroll="0" data-delay="0.75">
                <img class="show-light" src="{{ asset('assets/imgs/shape/img-s-61.webp') }}" alt="image">
                <img class="show-dark" src="{{ asset('assets/imgs/shape/img-s-61-light.webp') }}" alt="image">
                </div>
                <div class="text-wrapper">
                <p class="text has_fade_anim" data-on-scroll="0" data-delay="0.30">We are a full-service digital
                    agency that builds fascinating user experiences.
                    our
                    team creates and exceptional UI design
                    and functionality.</p>
                </div>
                <div class="btn-wrapper has_fade_anim">
                <a href="contact-bold.html" class="wc-btn wc-btn-underline btn-text-flip"> <span
                    data-text="get started now">get started now</span> <img class="show-light"
                    src="assets/imgs/icon/arrow-right-half.webp" alt="icon image"><img class="show-dark"
                    src="assets/imgs/icon/arrow-right-half-light.webp" alt="icon image"></a>
                </div>
            </div>
            </div>
            <div class="content-last">
            <div class="thumb-wrapper has_fade_anim" data-fade-from="right">
                <div class="shape-1">
                <img class="show-light" src="{{ asset('assets/imgs/shape/img-s-62.webp') }}" alt="shape">
                <img class="show-dark" src="{{ asset('assets/imgs/shape/img-s-62-light.webp') }}" alt="shape">
                </div>
                <div class="video-btn-box">
                    <div class="video-btn">
                        <a href="../../assets/wp-content/uploads/2024/05/insurance-video.mp4"
                        class="wc-btn wc-btn-circle video-popup"><i class="fa-solid fa-play"></i></a>
                        <span class="text">Watch <br>
                        Video</span>
                    </div>
                </div>
                <div class="hero-thumb">
                    <div class="thumb-1">
                        <img src="{{ asset('assets/imgs/gallery/img-s-68.webp') }}" alt="image">
                    </div>
                    <div class="thumb-2">
                        <img src="{{ asset('assets/imgs/gallery/img-s-69.webp') }}" alt="image">
                    </div>
                </div>
            </div>
            <div class="customer-wrapper-box">
                <div class="customer-wrapper">
                <div class="icon">
                    <img class="show-light" src="assets/imgs/shape/img-s-63.webp" alt="shape">
                    <img class="show-dark" src="assets/imgs/shape/img-s-63-light.webp" alt="shape">
                </div>
                <div class="thumb">
                    <img class="show-light" src="{{ asset('assets/imgs/client/img-s-3.webp') }}" alt="image">
                    <img class="show-dark" src="{{ asset('assets/imgs/client/img-s-3-light.webp') }}" alt="image">
                </div>
                <p class="text"><span class="text-underline">We have 18k+</span> customers <br>
                    word-wide</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>

{{-- Uncomment the following section if you want to use the swiper banner --}}

{{-- <div class="banner-swiper-two">
    <div class="swiper mySwiper-banner-two">
        <div class="swiper-wrapper">
            @foreach ($slides as $banner)
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area-two rts-section-gap bg_image" style="background-image: url('{{ asset('storage/' . $banner->image_path) }}');">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-inner-two-content">
                                        <p class="pre-title"><span>Welcome!</span> Forts &amp; Hubs Global Inc.</p>
                                        <h1 class="title" style="font-size: 96px;">{{ $banner->title }}</h1>
                                        <p class="disc">
                                            {{ $banner->description }}
                                        </p>
                                        <a href="{{ route('home') }}" class="rts-btn btn-primary btn-white">Get Consultant</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape-area-start">
                            <div class="shape shape-one">
                                <img loading="lazy" src="assets/images/banner/shape/01.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-two">
                                <img loading="lazy" src="assets/images/banner/shape/02.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-three">
                                <img loading="lazy" src="assets/images/banner/shape/03.webp" alt="shape-area">
                            </div>
                            <div class="shape shape-four">
                                <img loading="lazy" src="assets/images/banner/shape/04.webp" alt="shape-area">
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"><i class="fa-light fa-chevron-right"></i></div>
        <div class="swiper-button-prev"><i class="fa-light fa-chevron-left"></i></div>
    </div>
</div> --}}
