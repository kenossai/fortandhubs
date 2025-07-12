<x-app-layout>
    @section('title', 'Apply for ' . $career->title)
    <div class="ar-hero-area p-relative" data-background="assets/img/team/team-bg.png" style="background-image: url(&quot;assets/img/team/team-bg.png&quot;);">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                    <path d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344" stroke="#030303" stroke-width="1.5"></path>
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                            <span class="tp-application-subtitle mb-25">{{ $career->type }}</span>
                            <h3 class="tp-career-title pb-30">{{ $career->title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-application-aera pb-140">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tp-contact-form-wrap tp-application-form-wrap">
                        <form method="POST" action="{{ route('careers.apply.store', $career->slug) }}" enctype="multipart/form-data">
                            @csrf
                            <h4 class="tp-application-form-title">Application Form</h4>
                            <p class="tp-application-form-subtitle">Please fill out the form below to apply for the position of {{ $career->title }}.</p>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger"></div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your Name <span class="text-danger">*</span></label>
                                        <input name="name" type="text" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your Email address<span class="text-danger">*</span></label>
                                        <input name="email" type="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>why you decided to apply hare and why should we select you?<span class="text-danger">*</span></label>
                                        <textarea name="why_apply"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Tell us About a project that you worked on and felt proud of IT.
                                        </label>
                                        <textarea name="project_pride"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>share your portfolio. ( behance, dribble, etc)*
                                        </label>
                                        <textarea name="portfolio"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>your current salary &amp; what are your salary expectations?*
                                        </label>
                                        <textarea name="salary_expectation"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-application-form-btn d-flex justify-content-between">
                                        <div class="tp-application-upload mb-15">
                                            <span>Upload your CV <span class="text-danger">*</span></span>
                                            <input type="file" name="cv" accept=".pdf,.doc,.docx" required>
                                        </div>
                                        <div class="tp-application-btn mb-15 mt-10">
                                            <button type="submit" class="tp-btn-yellow-green green-solid btn-60">
                                                <span>
                                                    <span class="text-1">Submit Now</span>
                                                    <span class="text-2">Submit Now</span>
                                                </span>
                                                <i>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
