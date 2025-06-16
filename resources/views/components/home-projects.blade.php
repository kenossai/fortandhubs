<div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
        <div class="container pt--40">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-between-wrapper-gallery-project">
                        <div class="title-style-two mb--40 left">
                            <span class="bg-content">Projects</span>
                            <span class="pre">Popular Projects</span>
                            <h2 class="title rts-text-anime-style-1">
                                Our Completed Projects
                            </h2>
                        </div>
                        <div class="swiper-paginations"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-style-one-wrapper">
                        <div class="swiper mySwiper-project-1">
                            <div class="swiper-wrapper">
                                    @foreach ($projects as $project)
                                    <div class="swiper-slide">
                                        <div class="project-style-one">
                                            <a href="{{ route('projects.show', $project->slug) }}" class="thumbnail">
                                                <img loading="lazy" src="{{ asset('storage/'. $project->image_path[0]) }}" alt="project">
                                            </a>
                                            <div class="inner-content">
                                                <a href="{{ route('projects.show', $project->slug) }}" class="title">
                                                    <h5 class="title">{{ $project->title }}</h5>
                                                </a>
                                                <span>{{ $project->client_name }}</span>
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
