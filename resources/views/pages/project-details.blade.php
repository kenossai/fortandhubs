<x-app-layout>
     @section('title', 'Project Details')

  <!-- partners area breadcrumb area wrapper -->
    <div class="partner-breadcrumb bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-left center">
                        <span class="bg-title">Project</span>
                        <h1 class="title">
                            Project Details
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partners area breadcrumb area end -->



    <!-- project details area top -->
    <div class="project-details-wrapper-image-top rts-section-gap">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-8">
                    <div class="thumbnail">
                        <img src="{{ asset('storage/'. $project->image_path[0]) }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-4 pl--20 pl_md--0 pl_sm--0">
                    <div class="thumbnail mb--10 mt_md--10 mt_sm--15">
                        <img src="{{ asset('storage/'. $project->image_path[1]) }}" alt="portfolio">
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('storage/'. $project->image_path[2]) }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt--30">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h4 class="title">{{ $project->title }}</h4>
                        <h5 class="disc">
                            {{ $project->sub_title }}
                        </h5>
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Client:</span>
                                    <p>{{ $project->client_name }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Location:</span>
                                    <p>{{ $project->category }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Location:</span>
                                    <p>{{ $project->location }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Project Year:</span>
                                    <p>{{ $project->project_year }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Duration: </span>
                                    <p>{{ $project->duration }}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Price:</span>
                                    <p>${{ number_format($project->price) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-content-bottom">
                        <p class="disc">
                            {!! $project->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- counterup area start -->
                    <div class="counterup-area-project-details">
                        <div class="single-counter-up-area">
                            <div class="icon">
                                <img src="{{ asset('assets/images/portfolio/icons/05.svg') }}" alt="portfolio">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="1200">00</span>+
                            </h2>
                            <p class="disc">
                                We’ve had so many compliments
                                from friends and family
                            </p>
                        </div>
                        <div class="single-counter-up-area with-pl">
                            <div class="icon">
                                <img src="{{ asset('assets/images/portfolio/icons/06.svg') }}" alt="portfolio">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="100">00</span>+
                            </h2>
                            <p class="disc">
                                Our dedication to sustainable
                                building practices
                            </p>
                        </div>
                        <div class="single-counter-up-area with-pl">
                            <div class="icon">
                                <img src="{{ asset('assets/images/portfolio/icons/07.svg') }}" alt="portfolio">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="95">00</span>+
                            </h2>
                            <p class="disc">
                                Success rate of bot case
                                completion
                            </p>
                        </div>
                        <div class="single-counter-up-area with-pl b-n">
                            <div class="icon">
                                <img src="{{ asset('assets/images/portfolio/icons/08.svg') }}" alt="portfolio">
                            </div>
                            <h2 class="counter title"><span class="odometer" data-count="16">00</span>+
                            </h2>
                            <p class="disc">
                                Hours delivered back to
                                the business
                            </p>
                        </div>
                    </div>
                    <!-- counterup area end -->
                </div>
                <div class="col-lg-12 mt--50">
                    <div class="faq-inner-wrapper-one project-detils">
                        <h2 class="title">Our Approach</h2>
                        @if (!empty($project->project_approach) && is_array($project->project_approach))
                        <div class="accordion" id="accordionExample">
                            @foreach ($project->project_approach as $index => $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                            {{ ucwords(str_replace('-', ' ', $item['type'])) }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="right-area">
                                                <h4 class="title">{{ ucwords(str_replace('-', ' ', $item['type'])) }}</h4>
                                                <p class="disc mb--20">
                                                    {{ $item['explanation'] }}
                                                </p>
                                                <a href="project-details.html#" class="rts-btn btn-primary">Get A Free Quote</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- project details area top -->
</x-app-layout>
