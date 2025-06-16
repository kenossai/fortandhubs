<x-app-layout>
    <!-- ==================== Start Intro ==================== -->
@section('title', 'Home Page')
<x-banner :slides="$slides" :clients="$clients" />

    <!-- rts about area start -->
    <x-about-us />
    <!-- rts about area end -->


    <!-- rts service area start -->
    <x-our-services />
    <!-- rts service area end -->


    <!-- rts call to action area start -->
    <div class="rts-call-to-action-area-two bg_image">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cta-style-two-area">
                                    <h3 class="title rts-text-anime-style-1">
                                        Let’s discuss about how we can help <br>
                                        make your business better
                                    </h3>
                                    <a href="contact.html" class="rts-btn btn-primary btn-white">Lets Work Together</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts call to action area end -->



    <!-- rts business goal area start -->
    <div class="business-goal-area-2 rts-section-gap">
        <div class="container pt--30">
            <div class="row">
                <div class="col-lg-6">
                    <div class="consultancy-style-one">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Business Goal</span>
                            <span class="pre">JUST A CONSULTANCY</span>
                            <h2 class="title rts-text-anime-style-1">We know how to manage <br>
                                business globally
                            </h2>
                        </div>
                        <div class="signle-consultancy mb--30">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/01.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">Best Business Consulting</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                    gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="signle-consultancy">
                            <div class="icon">
                                <img loading="lazy" src="assets/images/about/icons/02.svg" alt="">
                            </div>
                            <div class="information">
                                <h4 class="title">24/7 Customer Support</h4>
                                <p class="disc">
                                    Fusce condimentum mattis placerat odio donec lacus porta torquent, mauris
                                    gravida
                                    rutrum
                                </p>
                            </div>
                        </div>
                        <div class="button-wrapper mt--40" data-animation="fadeInUp" data-delay="0.4" data-duration="1.2">
                            <a href="contact.html" class="rts-btn btn-primary">Contact Us</a>
                            <div class="vedio-icone">
                                <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=vZE0j_WCRvI" aria-label="Watch promotional video on YouTube">
                                    <span></span>
                                </a>
                                <div class="video-overlay">
                                    <a href="index.html#section1" class="video-overlay-close">×</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-business-area-right-two">
                        <div class="large-thumbnail">
                            <img loading="lazy" src="assets/images/business-goal/02.webp" alt="">
                        </div>
                        <div class="small-thumbnail images-r">
                            <img loading="lazy" src="assets/images/business-goal/01.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rts business goal area end -->
    </div>

    <!-- rts counter up area start -->
    <div class="rts-counter-up-area rts-section-gap counter-bg">
        <div class="container">
            <div class="row g-5">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/01.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="199">00</span>+
                            </h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/02.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="300">00</span>+
                            </h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50 pl_md--10 pl_sm--0">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/03.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="699">00</span>+
                            </h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 four">
                        <div class="icon">
                            <img loading="lazy" src="assets/images/counterup/icon/04.svg" alt="Business_counter">
                        </div>
                        <div class="counter-details">
                            <h2 class="counter title"><span class="odometer" data-count="120">00</span>+
                            </h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts counter up area end -->

    <!-- start gallery section -->
    <x-home-projects :projects="$projects" />
    <!-- start gallery section -->


    <div class="rts-trusted-client rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client-client text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    @foreach ($clients as $client)
                        <a href="index.html#" data-animation="fadeInUp" data-delay="0.1" data-duration="1.2"><img src="{{ asset('storage/' . $client->image_path) }}" alt="fortandhubs"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- rts team area start -->
    <x-team-member :teamMembers="$teamMembers" />
    <!-- rts team area end -->



    <!-- rts clients review area start -->
    <x-reviews :reviews="$reviews" />
    <!-- rts clients review area end -->


    <!-- appoinment areas tart -->
    <x-appointment />
    <!-- appoinment areas end -->





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


