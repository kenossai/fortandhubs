<x-app-layout>
    @section('title', 'Career Details')
    <div class="ar-banner-area pt-100">
        <div class="ar-banner-wrap ar-about-us-4">
            <img class="w-100" src="assets/img/about-us/about-us-4/about-us-4-thumb-1.jpg" alt="" data-speed=".8" data-lag="0" style="translate: none; rotate: none; scale: none; transform: translate(0px, -41.9002px); will-change: transform;">
        </div>
    </div>
    <section class="tp-career-details-ptb pt-120 pb-100">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tp-career-details-wrapper pb-40">
                        <div class="tp-career-details-top pb-80">
                            <span class="tp-career-details-subtitle">Job Title</span>
                            <h4 class="tp-career-details-title">{{ $career->title }}</h4>
                            <div class="tp-career-details-info d-flex align-items-center">
                                <div class="tp-career-details-info-item">
                                    <span>Location:</span>
                                    <h5>{{ $career->location }}</h5>
                                </div>
                                <div class="tp-career-details-info-item">
                                    <span>Date:</span>
                                    <h5>{{ $career->created_at->diffForHumans() }}</h5>
                                </div>
                                <div class="tp-career-details-info-item">
                                    <span>Job Type</span>
                                    <h5>{{ $career->type }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tp-career-details-wrap">
                            <h4 class="tp-career-details-title-2">Job Summary</h4>
                            <p class="pb-5">{!! $career->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pin-spacer" style="order: 0; place-self: auto; grid-area: auto; z-index: auto; float: none; flex-shrink: 1; display: block; margin: 0px; inset: auto; position: relative; flex-basis: auto; overflow: visible; box-sizing: border-box; width: 380px; height: 679px; padding: 0px;"><div class="tp-career-details-sidebar" style="translate: none; rotate: none; scale: none; inset: 0px auto auto 0px; margin: 0px; max-width: 380px; width: 380px; max-height: 679.188px; height: 679.188px; padding: 0px; transform: translate(0px, 0px);">
                        <div class="tp-career-details-sidebar-box">
                            <div class="tp-career-details-sidebar-heading">
                                <span>Avg. Salary</span>
                                <h4 class="tp-career-details-sidebar-title">{{ $career->job_avg_salary }}</h4><span>(Year)</span>
                            </div>
                            <div class="tp-career-details-sidebar-item d-flex">
                                <div class="tp-career-details-sidebar-item-icon">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M1.47656 9.05273L1.62139 12.1098C1.77701 15.3703 1.85481 17.0006 2.95336 18.0003C4.05191 19.0001 5.76545 19.0001 9.19252 19.0001H10.8132C14.2403 19.0001 15.9538 19.0001 17.0524 18.0003C18.1509 17.0006 18.2287 15.3703 18.3844 12.1098L18.5292 9.05273" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1.32891 8.52513C2.93877 11.5864 6.56977 12.8422 10 12.8422C13.4302 12.8422 17.0612 11.5864 18.6711 8.52513C19.4396 7.06382 18.8577 4.31592 16.965 4.31592H3.03495C1.14233 4.31592 0.560447 7.06382 1.32891 8.52513Z" stroke="#111013" stroke-width="1.5"></path>
                                            <path d="M10 9.05273H10.0085" stroke="#111013" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13.7899 4.31579L13.7062 4.02299C13.2894 2.564 13.0809 1.83451 12.5847 1.41725C12.0885 1 11.4294 1 10.1112 1H9.8896C8.5714 1 7.91229 1 7.41608 1.41725C6.91988 1.83451 6.71145 2.564 6.29459 4.02299L6.21094 4.31579" stroke="#111013" stroke-width="1.5"></path>
                                        </svg></span>
                                </div>
                                <div class="tp-career-details-sidebar-item-content">
                                    <span>Experience</span>
                                    <h5>{{ $career->experience }} Experience</h5>
                                </div>
                            </div>
                            <div class="tp-career-details-sidebar-item d-flex">
                                <div class="tp-career-details-sidebar-item-icon">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <circle cx="10" cy="10" r="9" stroke="#111013" stroke-width="1.5"></circle>
                                            <path d="M7.75 7.7499L10.8999 10.8996M13.6 6.3999L9.1 10.8999" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span>
                                </div>
                                <div class="tp-career-details-sidebar-item-content">
                                    <span>Working Hours</span>
                                    <h5>{{ $career->working_hours }}</h5>
                                </div>
                            </div>
                            <div class="tp-career-details-sidebar-item d-flex">
                                <div class="tp-career-details-sidebar-item-icon">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                            <path d="M14.0506 1V2.68423M3.94531 1V2.68423" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1 9.62565C1 5.95631 1 4.12163 2.05442 2.98172C3.10883 1.8418 4.80589 1.8418 8.2 1.8418H9.8C13.1941 1.8418 14.8912 1.8418 15.9456 2.98172C17 4.12163 17 5.95631 17 9.62565V10.0581C17 13.7274 17 15.5621 15.9456 16.702C14.8912 17.8419 13.1941 17.8419 9.8 17.8419H8.2C4.80589 17.8419 3.10883 17.8419 2.05442 16.702C1 15.5621 1 13.7274 1 10.0581V9.62565Z" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M1.42188 6.05273H16.5798" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span>
                                </div>
                                <div class="tp-career-details-sidebar-item-content">
                                    <span>Working Days</span>
                                    <h5>Weekly ({{ $career->working_days }})</h5>
                                </div>
                            </div>
                            <div class="tp-career-details-sidebar-item d-flex">
                                <div class="tp-career-details-sidebar-item-icon">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                            <circle cx="11" cy="11" r="10" stroke="#111013" stroke-width="1.5"></circle>
                                            <path d="M8.5 8.5L11.9999 11.9996M15 7L10 12" stroke="#111013" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></span>
                                </div>
                                <div class="tp-career-details-sidebar-item-content">
                                    <span>Deadline</span>
                                    <h5>03 Feb 2025</h5>
                                </div>
                            </div>
                            <div class="tp-career-details-sidebar-btn">
                                <a href="job-application-form.html">Apply for the Job</a>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
