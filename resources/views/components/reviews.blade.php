<div class="rts-client-review-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper" dir="ltr">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Review</span>
                            <span class="pre">Our Testimonial</span>
                            <h2 class="title ">Our Client Reviews
                            </h2>
                        </div>
                        <div class="pagination-wrapper">
                            <div class="swiper-pagination-fraction"></div>
                            <div class="swiper-button-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-wrapper-swiper-demo-2">
                        <div class="swiper mySwiper-testimonials-dmeo-2" dir="ltr">
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="client-review-single">
                                            <div class="client-review-image">
                                                <img src="{{ asset('storage/' . $review->photo) }}" alt="client image">
                                            </div>
                                            <div class="client-review-content">
                                                <p>{{ $review->content }}</p>
                                                <h5 class="title">{{ $review->name }}</h5>
                                                <span class="designation">{{ $review->role }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
