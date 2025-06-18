<div class="banner-swiper-two">
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
</div>
