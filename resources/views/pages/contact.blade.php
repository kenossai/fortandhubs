<x-app-layout title="Contact Us">
    <!-- ==================== Start google-map ==================== -->
    <div class="rts-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Contact</span>
                        <h1 class="title rts-text-anime-style-1">
                            Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/about/shape/01.png" alt="shape" class="one">
            <img src="assets/images/about/shape/02.png" alt="shape" class="two">
            <img src="assets/images/about/shape/03.png" alt="shape" class="three">
        </div>
    </div>


    <!-- contact areas main -->
    <div class="rts-contact-area-in-page" data-animation="fadeInUp" data-delay="0.2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="contact-info-area-wrapper-p">
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-phone-flip"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Call Us 24/7</span>
                                <a href="javascript:void()">(+256) 2145.2156</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Work with us</span>
                                <a href="javascript:void()">info@fortandhubs.com</a>
                            </div>
                        </div>
                        <div class="single-contact-info">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="info-wrapper">
                                <span>Our Location</span>
                                <a href="javascript:void()">125 Town, United State</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="thumbnail-contact-form">
                        <img src="assets/images/contact/01.webp" alt="contact">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-form-p">
                        <form class="form__content" method="POST" action="{{ route('messages.store') }}" >
                            @csrf
                            <h4 class="title">Get In Touch</h4>
                            <input name="name" type="text" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Johndoe@gmail.com" required>
                            <input name="subject" type="text" placeholder="Subject">
                            <textarea name="message"  placeholder="Message"></textarea>

                            <div id="form-messages"></div>
                            <button class="rts-btn btn-primary" type="submit">Get In Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact areas main end -->

    <!-- map area start -->
    <div class="google-map-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3248778.1226535137!2d-86.69566092360928!3d37.327475452900615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8842734c8b1953c9%3A0x771f6f4ec5ccdffc!2sKentucky%2C%20USA!5e0!3m2!1sen!2sbd!4v1741757435755!5m2!1sen!2sbd" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- map area end -->
</x-app-layout>
