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
                                        <div class="testimonials-main-wrapper-two">
                                            <div class="left-thumbnail">
                                                <img loading="lazy" src="{{ asset('storage/' . $review->image_path) }}" alt="testimonials">
                                            </div>
                                            <div class="right-content-testimonials">
                                                <p class="disc">
                                                    {{ $review->review }}
                                                </p>
                                                <div class="name-desig">
                                                    <h6 class="title">{{ $review->name }}</h6>
                                                    <p>{{ $review->role }} at <b>{{ $review->company }}</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="client-review-single">
                                            <div class="client-review-image">
                                                <img src="{{ asset('storage/' . $review->image_path) }}" alt="client image">
                                            </div>
                                            <div class="client-review-content">
                                                <p>{{ $review->content }}</p>
                                                <h5 class="title">{{ $review->name }}</h5>
                                                <span class="designation">{{ $review->role }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
