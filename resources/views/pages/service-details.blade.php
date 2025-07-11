<x-app-layout>

    @section('title', 'Services Details')
<div class="ar-hero-area p-relative pt-190 pb-100" data-background="assets/img/team/team-bg.png" style="background-image: url(&quot;assets/img/team/team-bg.png&quot;);">
    <div class="container container-1230">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="ar-hero-title-box service-5-heading tp_fade_anim mb-80" data-delay=".3" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                        <span class="tp-section-subtitle pre tp_fade_anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">Service Detail</span>
                        <div class="ar-about-us-4-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                <rect y="4" width="80" height="1" fill="#111013"></rect>
                                <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#111013" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="tp-career-title">{{ $service->title }} </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-service-5-text tp_fade_anim" data-delay=".5" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <p>{!! $service->content !!}</p>
                </div>
                <div class="tp-service-5-list tp_fade_anim " data-delay=".7" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tp-service-5-features-ptb p-relative pb-100">
    <div class="container container-1550">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-service-5-feature-wrap p-relative">
                    <div class="tp-service-5-feature-content">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                <path d="M99 74.5858L76 97.5858V25V24H75H2.41421L25.4142 1H99V25V74.5858ZM30.1193 51L1 80.1193V51H30.1193ZM49 99H20.3031L49 70.3032V99Z" stroke="white" stroke-width="2"></path>
                            </svg></span>
                        <h3 class="tp-service-5-feature-title">{{ $service->title }}</h3>
                    </div>
                    <img data-speed=".8" src="{{ asset('storage/' . $service->photo) }}" alt="" data-lag="0" style="translate: none; rotate: none; scale: none; transform: translate(0px, -101.7px); will-change: transform;">
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
