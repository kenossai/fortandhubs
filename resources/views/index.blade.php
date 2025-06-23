<x-app-layout>
    <!-- ==================== Start Intro ==================== -->
@section('title', 'Home Page')
<!-- hero area start  -->
          <x-banner />
          <!-- hero area end  -->

          <!-- clients area start  -->
          <x-clients />
          <!-- clients area end  -->

          <!-- about area start  -->
          <x-about-us />
          <!-- about area end  -->

          <!-- feature area start  -->
          <x-feature-area />
          <!-- feature area end  -->

          <!-- skill area start  -->
          <section class="skill-area">
            <div class="container">
              <div class="skill-area-inner section-spacing-top">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_text_move_anim">Empowering skills
                        to help you!</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Add the best talent on the market, an agile skilled management &
                      seamless
                      involvement</p>
                  </div>
                </div>
                <div class="skills-wrapper-box">
                  <div class="skills-wrapper">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item has_fade_anim" role="presentation">
                        <div class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                          role="tab" aria-controls="pills-1" aria-selected="true">
                          <div class="skill-nav">
                            <div class="icon">
                              <img class="show-light" src="assets/imgs/icon/icon-s-27.webp" alt="icon">
                              <img class="show-dark" src="assets/imgs/icon/icon-s-27-light.webp" alt="icon">
                            </div>
                            <div class="content">
                              <h3 class="title">Creativity</h3>
                              <p class="text">Add the best talent on the market, an agile skilled management & seamless
                                involvement</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item has_fade_anim" role="presentation">
                        <div class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                          role="tab" aria-controls="pills-2" aria-selected="false">
                          <div class="skill-nav">
                            <div class="icon">
                              <img class="show-light" src="assets/imgs/icon/icon-s-28.webp" alt="icon">
                              <img class="show-dark" src="assets/imgs/icon/icon-s-28-light.webp" alt="icon">
                            </div>
                            <div class="content">
                              <h3 class="title">Relationships</h3>
                              <p class="text">Add the best talent on the market, an agile skilled management & seamless
                                involvement</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item has_fade_anim" role="presentation">
                        <div class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                          role="tab" aria-controls="pills-3" aria-selected="false">
                          <div class="skill-nav">
                            <div class="icon">
                              <img class="show-light" src="assets/imgs/icon/icon-s-29.webp" alt="icon">
                              <img class="show-dark" src="assets/imgs/icon/icon-s-29-light.webp" alt="icon">
                            </div>
                            <div class="content">
                              <h3 class="title">Responsibility</h3>
                              <p class="text">Add the best talent on the market, an agile skilled management & seamless
                                involvement</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item has_fade_anim" role="presentation">
                        <div class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                          role="tab" aria-controls="pills-4" aria-selected="false">
                          <div class="skill-nav">
                            <div class="icon">
                              <img class="show-light" src="assets/imgs/icon/icon-s-30.webp" alt="icon">
                              <img class="show-dark" src="assets/imgs/icon/icon-s-30-light.webp" alt="icon">
                            </div>
                            <div class="content">
                              <h3 class="title">Cost effective</h3>
                              <p class="text">Add the best talent on the market, an agile skilled management & seamless
                                involvement</p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab"
                        tabindex="0">
                        <div class="skill-thumb has_fade_anim" data-fade-offset="0" data-delay="0.45">
                          <img class="main-image" src="assets/imgs/gallery/img-s-72.webp" alt="image">
                          <img class="small-image" src="assets/imgs/gallery/img-s-73.webp" alt="image">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab"
                        tabindex="0">
                        <div class="skill-thumb has_fade_anim" data-fade-offset="0" data-delay="0.45">
                          <img class="main-image" src="assets/imgs/gallery/img-s-74.webp" alt="image">
                          <img class="small-image" src="assets/imgs/gallery/img-s-73.webp" alt="image">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab"
                        tabindex="0">
                        <div class="skill-thumb has_fade_anim" data-fade-offset="0" data-delay="0.45">
                          <img class="main-image" src="assets/imgs/gallery/img-s-72.webp" alt="image">
                          <img class="small-image" src="assets/imgs/gallery/img-s-73.webp" alt="image">
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab"
                        tabindex="0">
                        <div class="skill-thumb has_fade_anim" data-fade-offset="0" data-delay="0.45">
                          <img class="main-image" src="assets/imgs/gallery/img-s-74.webp" alt="image">
                          <img class="small-image" src="assets/imgs/gallery/img-s-73.webp" alt="image">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- skill area end  -->

          <!-- eterprise area start  -->
          <div class="enterprise-area">
            <div class="container">
              <div class="enterprise-area-inner section-spacing">
                <div class="section-header">
                  <div class="text-wrapper">
                    <p class="text has_text_move_anim">Our Arolax Technology Expertise includes</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- eterprise area end  -->

          <!-- work area start  -->
          <div class="work-area has_fade_anim">
            <div class="container-hd">
              <div class="work-area-inner">
                <div class="works-wrapper-box">
                  <div class="works-wrapper">
                    <div class="swiper work-slider-active">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-6.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-7.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-8.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper work-slider-active" dir="rtl">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-9.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-10.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="swiper-slide">
                          <a href="work-details-bold.html">
                            <div class="work-box">
                              <div class="thumb">
                                <img src="assets/imgs/project/img-s-11.webp" alt="image">
                              </div>
                              <div class="content">
                                <div class="icon">
                                  <img src="assets/imgs/shape/img-s-69.webp" alt="icon">
                                </div>
                                <h3 class="title">Mastartery</h3>
                                <span class="meta">Design - 2019</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- work area end  -->

          <!-- service area start  -->
          <section class="service-area">
            <div class="container">
              <div class="service-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="shape-1 has_fade_anim" data-fade-offset="0" data-delay="0.9">
                      <img src="assets/imgs/shape/img-s-68.webp" alt="image">
                    </div>
                    <div class="title-wrapper has_text_move_anim">
                      <h2 class="section-title">we <span>provide</span> premium
                        arolax service</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Our ability to combine expertise and systems thinking is what fuels us
                      as a team.
                    </p>
                  </div>
                </div>
                <div class="services-wrapper-box">
                  <div class="services-wrapper">
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">01.</span>
                          <div class="content">
                            <h3 class="title">Project <br>
                              Management</h3>
                            <div class="content-last">
                              <p class="text">Creative Design team on demand that can design, build, ship and scale your
                                real
                                has development agency.</p>
                              <div class="feature-list">
                                <ul>
                                  <li>+ Mobile & Web Design</li>
                                  <li>+ Interation Design</li>
                                  <li>+ UX Research & Plan</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-36.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-36-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">02.</span>
                          <div class="content">
                            <h3 class="title">Product <br>
                              Management</h3>
                            <div class="content-last">
                              <p class="text">Creative Design team on demand that can design, build, ship and scale your
                                real
                                has development agency.</p>
                              <div class="feature-list">
                                <ul>
                                  <li>+ Mobile & Web Design</li>
                                  <li>+ Interation Design</li>
                                  <li>+ UX Research & Plan</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-37.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-37-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">03.</span>
                          <div class="content">
                            <h3 class="title">Web <br>
                              Design</h3>
                            <div class="content-last">
                              <p class="text">Creative Design team on demand that can design, build, ship and scale your
                                real
                                has development agency.</p>
                              <div class="feature-list">
                                <ul>
                                  <li>+ Mobile & Web Design</li>
                                  <li>+ Interation Design</li>
                                  <li>+ UX Research & Plan</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-38.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-38-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                    <div class="has_fade_anim">
                      <a href="service-details-bold.html">
                        <div class="service-box">
                          <span class="number">04.</span>
                          <div class="content">
                            <h3 class="title">Backend <br>
                              Development</h3>
                            <div class="content-last">
                              <p class="text">Creative Design team on demand that can design, build, ship and scale your
                                real
                                has development agency.</p>
                              <div class="feature-list">
                                <ul>
                                  <li>+ Mobile & Web Design</li>
                                  <li>+ Interation Design</li>
                                  <li>+ UX Research & Plan</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="icon">
                            <img class="show-light" src="assets/imgs/icon/icon-s-39.webp" alt="icon">
                            <img class="show-dark" src="assets/imgs/icon/icon-s-39-light.webp" alt="icon">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- service area end  -->

          <div class="image-wrapper overflow-hidden">
            <img class="w-100" data-speed="0.8" src="assets/imgs/gallery/img-s-19.webp" alt="gallery image">
          </div>

          <!-- testimonial area start  -->
          <section class="testimonial-area">
            <div class="container">
              <div class="testimonial-area-inner section-spacing">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_text_move_anim">Trusted clients testimonial</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Consumers today rely heavily on digital means to research products. We
                      research a
                      brand of bldend</p>
                  </div>
                  <div class="btn-wrapper has_fade_anim" data-fade-from="top" data-ease="bounce" data-fade-offset="50">
                    <div class="btn-wrapper btn-move">
                      <a href="about-bold.html" class="wc-btn wc-btn-circle btn-hover-bgchange btn-item">Explore Us <br>
                        More</a>
                    </div>
                  </div>
                </div>
                <div class="testimonial-wrapper-box">
                  <div class="testimonial-wrapper">
                    <div class="swiper testimonial-slider-active has_fade_anim" data-fade-from="right"
                      data-delay="0.45">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="content">
                              <span class="rating">4.9<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                              <p class="rating-label">(out of 5 stars)</p>
                              <p class="text">We full service digital agency that build’s fascinating users
                                experiences...</p>
                              <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                            </div>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Ceyhan Özçivit</h2>
                                <span class="meta-title">Mid-Level Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="content">
                              <span class="rating">4.8<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                              <p class="rating-label">(out of 5 stars)</p>
                              <p class="text">We full service digital agency that build’s fascinating users
                                experiences...</p>
                              <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                            </div>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Ceyhan Özçivit</h2>
                                <span class="meta-title">Mid-Level Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="testimonial-box">
                            <div class="content">
                              <span class="rating">4.6<img src="assets/imgs/icon/star-5.webp" alt="icon"></span>
                              <p class="rating-label">(out of 5 stars)</p>
                              <p class="text">We full service digital agency that build’s fascinating users
                                experiences...</p>
                              <div class="icon"><img src="assets/imgs/icon/quote-9.webp" alt="icon"></div>
                            </div>
                            <div class="author">
                              <div class="avatar"><img src="assets/imgs/client/img-s-1.webp" alt="image"></div>
                              <div class="">
                                <h2 class="name">Ceyhan Özçivit</h2>
                                <span class="meta-title">Mid-Level Developer</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-nav">
                      <div class="testimonial-button-prev nav-icon">
                        <i class="fa-solid fa-arrow-left"></i>
                      </div>
                      <div class="testimonial-button-next nav-icon">
                        <i class="fa-solid fa-arrow-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- testimonial area end  -->

          <!-- team area start  -->
          <section class="team-area">
            <div class="container">
              <div class="team-area-inner section-spacing">
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_text_move_anim">Introducing arolax
                        skilled team!</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Our ability to combine expertise and systems thinking is what fuels us
                      as a team.
                    </p>
                  </div>
                </div>
                <div class="team-wrapper-box">
                  <div class="team-wrapper">
                    <div class="team-box has_fade_anim" data-fade-from="bottom" data-delay="0.15" data-fade-offset="30"
                      data-duration="0.75">
                      <a href="team-details-bold.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-1.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Kamal Abraham</h3>
                          <p class="text">CEO, Wealcoder</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="top" data-delay="0.30" data-fade-offset="30"
                      data-duration="0.75">
                      <a href="team-details-bold.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-2.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Selina Gomaze</h3>
                          <p class="text">Junior Executive</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="bottom" data-delay="0.45" data-fade-offset="30"
                      data-duration="0.75">
                      <a href="team-details-bold.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-3.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Pedrik Vadra</h3>
                          <p class="text">Sr. Developer</p>
                        </div>
                      </a>
                    </div>
                    <div class="team-box has_fade_anim" data-fade-from="top" data-delay="0.60" data-fade-offset="30"
                      data-duration="0.75">
                      <a href="team-details-bold.html">
                        <div class="thumb">
                          <img src="assets/imgs/team/img-s-4.webp" alt="team icon">
                        </div>
                        <div class="content">
                          <h3 class="title">Thomas Ribbon</h3>
                          <p class="text">UX Designer</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- team area end  -->

          <!-- faq area start  -->
          <section class="faq-area">
            <div class="container">
              <div class="faq-area-inner section-spacing">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title has_text_move_anim">frequently
                        asked
                        questions</h2>
                    </div>
                  </div>
                  <div class="text-wrapper">
                    <p class="text has_fade_anim">Frequently asked question (FAQ) pages to find answars.</p>
                  </div>
                </div>
                <div class="accordion-wrapper has_fade_anim" data-delay="0.45">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseOne" aria-expanded="false"
                          aria-controls="flush-collapseOne">How does the Agile Manifesto address planning?</button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseTwo" aria-expanded="false"
                          aria-controls="flush-collapseTwo">Reflects your audience’s need?</button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse show"
                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseThree" aria-expanded="false"
                          aria-controls="flush-collapseThree">What Is a Statement of Work in Project
                          Management?</button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFour" aria-expanded="false"
                          aria-controls="flush-collapseFour">When is an FAQ page appropriate? </button>
                      </h2>
                      <div id="flush-collapseFour" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseFive" aria-expanded="false"
                          aria-controls="flush-collapseFive">What questions belong on an FAQ page?</button>
                      </h2>
                      <div id="flush-collapseFive" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseSix" aria-expanded="false"
                          aria-controls="flush-collapseSix">Align with your brand look and feel?</button>
                      </h2>
                      <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseSeven" aria-expanded="false"
                          aria-controls="flush-collapseSeven">How to become an Agile project manager?</button>
                      </h2>
                      <div id="flush-collapseSeven" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#flush-collapseEight" aria-expanded="false"
                          aria-controls="flush-collapseEight">How to manage Agile teams?</button>
                      </h2>
                      <div id="flush-collapseEight" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">People know what an FAQ is, so make that your page title. don’t
                          overcomplicate thing heve calling it’s good to know or more info. sometimes people put the
                          frequently asked question section on their contact page but you can create your own page and
                          put it right in your on website navigation menu or website footer so it’s easy to find.</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- faq area end  -->



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


