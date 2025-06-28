<x-app-layout>
    <!-- ==================== Start Intro ==================== -->
@section('title', 'Home Page')


                <!-- hero area start -->
                <x-banner :slide="$slide" />
                <!-- hero area end -->

                <!-- about area start -->
                {{-- <x-about-us :about="$about" /> --}}
                <!-- about area end -->

                <!-- step area start -->
                <x-feature-area :approaches="$approaches" />
                <!-- step area end -->

                <!-- service area end -->
                <x-service-area :services="$services" />
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
                <x-team-member :teamMembers="$teamMembers" />
                <!-- team area end -->

                <!-- brand area start -->
                <x-clients :clients="$clients" />
                <!-- brand area end -->

                <!-- testimonial area start -->
                <x-reviews :reviews="$reviews" />
                <!-- testimonial area end -->

                <!-- blog area start -->
                {{-- <x-resources /> --}}
                <!-- blog area end -->




</x-app-layout>


{{-- <script>
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
</script> --}}


