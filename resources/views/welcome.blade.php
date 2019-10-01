@extends('layouts.apps')
@section('title', __('Home').' MHSC (Media House of Sports in Cameroon)')
@section('commonsection')
    <!--Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-1 swiper-container-horizontal swiper-container-fade" data-autoplay="5000" data-slide-effect="fade" data-simulate-touch="false">
        <div class="swiper-wrapper" style="transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-duplicate" data-slide-bg="images/swiper-1-slide-4.jpg" style="background-image: url('{{asset('images/swiper-1-slide-4.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(0px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="3">
                <div class="swiper-slide-custom"></div>
            </div>
            <div class="swiper-slide swiper-slide-prev" data-slide-bg="images/swiper-1-slide-1.jpg" style="background-image: url('{{asset('images/swiper-1-slide-1.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(-1905px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="0">
                <div class="swiper-slide-custom"></div>
            </div>
            <div class="swiper-slide swiper-slide-active" data-slide-bg="images/swiper-1-slide-2.jpg" style="background-image: url('{{asset('images/swiper-1-slide-2.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(-3810px, 0px, 0px); opacity: 1; transition-duration: 0ms;" data-swiper-slide-index="1">
                <div class="swiper-slide-custom"></div>
            </div>
            <div class="swiper-slide swiper-slide-next" data-slide-bg="images/swiper-1-slide-3.jpg" style="background-image: url('{{asset('images/swiper-1-slide-3.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(-5715px, 0px, 0px); opacity: 0; transition-duration: 0ms;" data-swiper-slide-index="2">
                <div class="swiper-slide-custom"></div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/swiper-1-slide-4.jpg" style="background-image: url('{{asset('images/swiper-1-slide-4.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(-7620px, 0px, 0px); opacity: 0; transition-duration: 0ms;" data-swiper-slide-index="3">
                <div class="swiper-slide-custom"></div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-slide-bg="images/swiper-1-slide-1.jpg" style="background-image: url('{{asset('images/swiper-1-slide-1.jpg')}}'); background-size: cover; width: 1905px; transform: translate3d(-9525px, 0px, 0px); opacity: 0; transition-duration: 0ms;" data-swiper-slide-index="0">
                <div class="swiper-slide-custom"></div>
            </div></div>
        <div class="swiper-content context-dark">
            <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h1 class="swiper-title">A la Une</h1>
                <h5 class="swiper-subtitle">Le<span>Dialogue</span><span>National</span><span>Au Cameroun</span></h5>
                <a class="button button-lg button-gradient" href="https://livedemo00.template-help.com/wt_prod-18029/checkout.html">Lire en detail</a>
            </div>
        </div><img class="swiper-slider-image wow slideInUp" src="{{asset('images/decor-1-1254x801.png')}}" alt="" width="1254" height="801" style="visibility: visible; animation-name: slideInUp;">
    </section>
    <!-- Next Event-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <div class="event-modern">
                <div class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
                    <ul class="event-modern-info list-inline list-inline-xl big">
                        <li><span class="icon mdi mdi-flag-outline"></span><span>distance: 6 Mi</span></li>
                        <li><span class="icon mdi mdi-map-marker"></span><span>Los angeles</span></li>
                        <li><span class="icon mdi mdi-account-multiple-outline"></span><span>10k members</span></li>
                    </ul>
                </div>
                <div class="event-modern-time">
                    <div class="countdown-2 countdown-style-1 is-countdown" data-type="until" data-time="31 Dec 2019 16:00">
                        <span class="countdown-row countdown-show4">
                            <span class="countdown-section">
                                <span class="countdown-amount">41</span>
                                <span class="countdown-period">Days</span>
                            </span>
                            <span class="countdown-section">
                                <span class="countdown-amount">23</span>
                                <span class="countdown-period">Hrs</span>
                            </span>
                            <span class="countdown-section">
                                <span class="countdown-amount">55</span>
                                <span class="countdown-period">Mins</span>
                            </span>
                            <span class="countdown-section">
                                <span class="countdown-amount">14</span>
                                <span class="countdown-period">Secs</span>
                            </span>
                        </span>
                    </div>
                    <div class="event-modern-title wow fadeIn" style="visibility: visible; animation-name: fadeIn;">Next Event</div>
                </div>
                <a class="button button-lg button-primary-outline wow fadeInUp" href="https://livedemo00.template-help.com/wt_prod-18029/#" style="visibility: hidden; animation-name: none;">Take part</a>
            </div>
        </div>
    </section>
    <!-- Our Mission-->
    <section class="section section-xl bg-gray-700 position-relative">
        <div class="container">
            <div class="row row-30 justify-content-lg-between">
                <div class="col-md-6 col-lg-5 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                    <h2 class="title-7"><span>Our Mission</span></h2>
                    <h4>Our event unites athletic professionals and enthusiasts to pursue a great goal.</h4>
                    <p class="big">
                        We create and promote initiatives that enable people to become and remain physically active
                        regardless and challenge inequality of access to physical activity.</p>
                </div>
                <div class="col-md-6 position-static">
                    <!-- Video-->
                    <article class="video video-1 wow slideInRight slideInCustom" style="visibility: hidden; animation-name: none;">
                        <div class="video-figure">
                            <img class="video-image" src="{{asset('images/video-2-958x584.jpg')}}" alt="" width="958" height="584">
                        </div><a class="video-link" href="https://www.youtube.com/watch?v=1UWpbtUupQQ" data-lightgallery="item"><span class="icon mdi mdi-play"></span></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Route-->
    <section class="section section-md section-inset-3 bg-default section-decor section-decor-left-2">
        <div class="container">
            <div class="row row-30 align-items-center align-items-xxl-start justify-content-sm-end">
                <div class="col-md-6 wow fadeIn" style="visibility: hidden; animation-name: none;">
                    <article class="event-route event-route-1"><img src="{{asset('images/map-2-715x655.jpg')}}" alt="" width="715" height="655">
                        <div class="event-route-point-1 event-route-extreme-point">S
                            <!-- Event route-->
                            <div class="event-route-caption event-route-caption-1">
                                <div class="heading-5 event-route-title">Start</div>
                                <div class="big event-route-text">Culver Center</div>
                            </div>
                        </div>
                        <div class="event-route-point-3 event-route-point">
                            <!-- Event route-->
                            <div class="event-route-caption">
                                <div class="heading-5 event-route-title">2,4 mi</div>
                                <div class="big event-route-text">Farragut Dr</div>
                            </div>
                        </div>
                        <div class="event-route-point-2 event-route-point">
                            <!-- Event route-->
                            <div class="event-route-caption">
                                <div class="heading-5 event-route-title">1,3 mi</div>
                                <div class="big event-route-text">Menton Ave</div>
                            </div>
                        </div>
                        <div class="event-route-point-4 event-route-point">
                            <!-- Event route-->
                            <div class="event-route-caption">
                                <div class="heading-5 event-route-title">4 mi</div>
                                <div class="big event-route-text">Sawtelle Blvd</div>
                            </div>
                        </div>
                        <div class="event-route-point-5 event-route-point">
                            <!-- Event route-->
                            <div class="event-route-caption">
                                <div class="heading-5 event-route-title">5 mi</div>
                                <div class="big event-route-text">Diller Ave</div>
                            </div>
                        </div>
                        <div class="event-route-point-6 event-route-extreme-point">F
                            <!-- Event route-->
                            <div class="event-route-caption">
                                <div class="heading-5 event-route-title">Finish</div>
                                <div class="big event-route-text">Slauson Ave</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-9 col-md-6 wow fadeInUp" style="visibility: hidden; animation-name: none;">
                    <div class="inset-xl-left-70">
                        <h2 class="title-7"><span>Event Route</span></h2>
                        <h4>The race will begin in Washington Culver and finish in Blanco-Culver Crest covering 6 miles.</h4>
                        <p class="big">We have four official water stations along our course as marked on the route map, with more unofficial water stations set up by our volunteers.</p>
                        <div class="group-xl group-middle align-items-end">
                            <div class="event-route-info"><span class="heading-1"><span class="font-weight-thin">6</span></span><span class="heading-3"><span class="text-primary">MI</span></span>
                                <div class="event-route-info-text">distance</div>
                            </div><a class="button button-lg button-primary-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Take part</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section text-center">
        <div class="section-md bg-default section-decor section-decor-left">
            <div class="container">
                <div class="row row-xl no-gutters bordered-2 ordered-1 wow fadeInRight" style="visibility: hidden; animation-name: none;">
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-bottle"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Water Stations</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-bus2"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Free Transportation</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-clipboard-user"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Quick Registration</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-man-woman"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Comfortable Toilets</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-first-aid"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Medical Support</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <!-- Box minimal-->
                        <article class="box-minimal">
                            <div class="unit align-items-center">
                                <div class="unit-left">
                                    <div class="box-minimal-icon linearicons-trophy2"></div>
                                </div>
                                <div class="unit-body">
                                    <div class="heading-4 box-minimal-title">Medals for Winners</div>
                                </div>
                            </div>
                            <div class="heading-5 box-minimal-number ordered-item"></div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event-->
    <section class="section section-xxl bg-default text-center section-decor section-decor-left tabs-style-1">
        <div class="tabs-bg-1 bg-gray-700 wow fadeInUp" style="visibility: hidden; animation-name: none;"></div>
        <div class="tabs-custom">
            <div class="tabs-bg-2 bg-gray-100 wow fadeInUp" style="visibility: hidden; animation-name: none;"></div>
            <div class="container">
                <!--Nav tabs-->
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="https://livedemo00.template-help.com/wt_prod-18029/#tabs-1-1" data-toggle="tab"><span>Opening</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://livedemo00.template-help.com/wt_prod-18029/#tabs-1-2" data-toggle="tab"><span>Warming Up</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://livedemo00.template-help.com/wt_prod-18029/#tabs-1-3" data-toggle="tab"><span>Main Part</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="https://livedemo00.template-help.com/wt_prod-18029/#tabs-1-4" data-toggle="tab"><span>Awarding</span></a></li>
                </ul>
                <div class="row row-30 row-md-50">
                    <div class="col-md-10 col-lg-6 col-xxl-5">
                        <!--Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <div class="event-minimal-wrap">
                                    <!-- Event minimal-->
                                    <article class="event-minimal wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">7.00 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Event Opening</a></div>
                                        </div>
                                        <div class="event-minimal-text big">Take part in a special event opening part available to those guests and participants who arrive early.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">7.30 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Route Selection</a></div>
                                        </div>
                                        <div class="event-minimal-text big">Event participants get a chance to select a preffered route of our race before it starts.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">8.00 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Registration</a></div>
                                        </div>
                                        <div class="event-minimal-text big">When all participants arrive and gather at Culver Center, our volunteers will register them.</div>
                                    </article>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <div class="event-minimal-wrap">
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">8.15 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Stretching</a></div>
                                        </div>
                                        <div class="event-minimal-text big">To optimize our participants’ performance, we also offer free warm-up that starts with stretching.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">8.20 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Basic Warm-up</a></div>
                                        </div>
                                        <div class="event-minimal-text big">After stretching, we invite everyone to basic warm-up to be better prepared for the race.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">8.30 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Runner Warm-up</a></div>
                                        </div>
                                        <div class="event-minimal-text big">In this very essential part of the warming-up, there is a focus on the movements of a runner.</div>
                                    </article>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <div class="event-minimal-wrap">
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">9.00 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">General Start</a></div>
                                        </div>
                                        <div class="event-minimal-text big">All adults start their run at 9:00 am after registration and gathering outside of the Culver Center.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">9.30 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Kids’ Race</a></div>
                                        </div>
                                        <div class="event-minimal-text big">If your child is registered, they can also take part in a special race organized for kids and teens.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">11.45 am</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Race Finish</a></div>
                                        </div>
                                        <div class="event-minimal-text big">Planned time of race finish is set for 11.45 am but event organizers will wait for all finishers.</div>
                                    </article>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                <div class="event-minimal-wrap">
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">12.00 pm</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Results</a></div>
                                        </div>
                                        <div class="event-minimal-text big">After all participants arrive at the finish line, organizers will announce the half marathon results.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">12.15 pm</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Awarding</a></div>
                                        </div>
                                        <div class="event-minimal-text big">Our volunteers and organizers will present awards and certificate to all winners, including children.</div>
                                    </article>
                                    <!-- Event minimal-->
                                    <article class="event-minimal">
                                        <div class="event-minimal-caption"><span class="event-minimal-icon mdi mdi-arrow-right"></span>
                                            <div class="heading-3 event-minimal-time">12.30 pm</div>
                                            <div class="heading-3 event-minimal-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/#">Entertainment</a></div>
                                        </div>
                                        <div class="event-minimal-text big">The entertainment program provided by our partners will begin straight after the award ceremony.</div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6 col-xxl-7">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-style-1 owl-loaded owl-drag" data-items="1" data-dots="true" data-autoplay="true" style="">
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1662px, 0px, 0px); transition: all 0.25s ease 0s; width: 3878px;"><div class="owl-item cloned" style="width: 554px;">
                                        <img src="{{asset('images/event-2-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item cloned" style="width: 554px;">
                                        <img src="{{asset('images/event-3-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item" style="width: 554px;">
                                        <img src="{{asset('images/event-1-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item active" style="width: 554px;">
                                        <img src="{{asset('images/event-2-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item" style="width: 554px;">
                                        <img src="{{asset('images/event-3-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item cloned" style="width: 554px;">
                                        <img src="{{asset('images/event-1-556x538.jpg')}}" alt="" width="556" height="538"></div><div class="owl-item cloned" style="width: 554px;">
                                        <img src="{{asset('images/event-2-556x538.jpg')}}" alt="" width="556" height="538"></div></div></div><div class="owl-nav disabled">
                                <div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our community-->
    <section class="section bg-gray-700 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xl-6 index-1">
                    <div class="section-lg section-inset-4 inset-xl-right-70 wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                        <h2 class="title-7"><span>Our Community</span></h2>
                        <h4>Our half marathon unites a vast number of athletes and running enthusiasts.</h4>
                        <p class="big">The community of our event pursues the goal of promoting healthy living among children, teens, and adults. We are also known for widespread charitable work.</p><a class="button button-lg button-gradient" href="https://livedemo00.template-help.com/wt_prod-18029/single-class.html">Read more</a>
                    </div>
                </div>
                <div class="col-md-7 col-xl-6 counter-classic-wrap">
                    <!--Counter classic-->
                    <div class="counter-classic wow fadeInRight" style="visibility: hidden; animation-name: none;">
                        <div class="unit unit-spacing-2">
                            <div class="unit-left">
                                <div class="counter-classic-main">
                                    <div class="heading-1 counter-classic-number counter">45</div>
                                    <div class="heading-3 counter-classic-postfix">k</div>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="counter-classic-icon mdi mdi-account-multiple-outline"></div>
                                <div class="big counter-classic-text">Average number of people taking part in our half marathons.</div>
                            </div>
                        </div>
                    </div>
                    <!--Counter classic-->
                    <div class="counter-classic wow fadeInRight" style="visibility: hidden; animation-name: none;">
                        <div class="unit unit-spacing-2">
                            <div class="unit-left">
                                <div class="counter-classic-main">
                                    <div class="heading-1 counter-classic-number counter">78</div>
                                    <div class="heading-3 counter-classic-postfix">%</div>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="counter-classic-icon mdi mdi-account-convert"></div>
                                <div class="big counter-classic-text">Percentage of runners who became our regular participants over the years.</div>
                            </div>
                        </div>
                    </div>
                    <!--Counter classic-->
                    <div class="counter-classic wow fadeInRight" style="visibility: hidden; animation-name: none;">
                        <div class="unit unit-spacing-2">
                            <div class="unit-left">
                                <div class="counter-classic-main">
                                    <div class="heading-1 counter-classic-number counter">90</div>
                                    <div class="heading-3 counter-classic-postfix">k</div>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="counter-classic-icon mdi mdi-map"></div>
                                <div class="big counter-classic-text">The total number of participants in all races in the last 5 years.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-classic-wrap">
                <img class="image-classic image-classic-1 wow fadeIn" src="{{asset('images/image-2-369x284.jpg')}}" alt="" width="369" height="284" style="visibility: hidden; animation-name: none;">
                <img class="image-classic image-classic-2 wow fadeIn" src="{{asset('images/image-3-244x204.jpg')}}" alt="" width="244" height="204" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                <img class="image-classic image-classic-3 wow fadeIn" src="{{asset('images/image-4-289x204.jpg')}}" alt="" width="289" height="204" style="visibility: hidden; animation-name: none;">
                <img class="image-classic image-classic-4 wow fadeIn" src="{{asset('images/image-5-196x352.jpg')}}" alt="" width="196" height="352" style="visibility: hidden; animation-name: none;">
                <img class="image-classic image-classic-5 wow fadeIn" src="{{asset('images/image-6-289x204.jpg')}}" alt="" width="289" height="204" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
            </div>
        </div>
    </section>
    <!-- Our partners-->
    <section class="section section-xxl section-inset-5 bg-default section-decor section-decor-top">
        <div class="container container-style-1 wow fadeInUp" style="visibility: hidden; animation-name: none;">
            <div class="owl-carousel owl-style-2 owl-loaded" data-items="1" data-nav="true" data-dots="true" data-margin="230" data-smart-speed="400" data-loop="false" data-mouse-drag="false" data-start-item="1" style="">
                <!-- Quote classic-->

                <!-- Quote classic-->

                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1467px, 0px, 0px); transition: all 0s ease 0s; width: 2935px;"><div class="owl-item" style="width: 1237.5px; margin-right: 230px;"><article class="quote-classic">
                                <div class="unit unit-spacing-3 flex-column flex-sm-row">
                                    <div class="unit-left">
                                        <img class="quote-classic-image" src="{{asset('images/user-10-450x541.jpg')}}" alt="" width="450" height="541">
                                    </div>
                                    <div class="unit-body">
                                        <div class="quote-classic-content">
                                            <div class="heading-2 quote-classic-author title-7"><span>Kate Wilson</span></div>
                                            <div class="heading-3 quote-classic-text">
                                                <p class="q">The RACE Half Marathon shows what a well-organized event means. I especially liked the awarding ceremony and how the kids’ race was planned. Thank you!</p>
                                            </div>
                                            <div class="heading-5 quote-classic-position">First-time Participant</div>
                                        </div>
                                    </div>
                                </div>
                            </article></div><div class="owl-item active" style="width: 1237.5px; margin-right: 230px;"><article class="quote-classic">
                                <div class="unit unit-spacing-3 flex-column flex-sm-row">
                                    <div class="unit-left"><img class="quote-classic-image" src="{{asset('images/user-11-450x541.jpg')}}" alt="" width="450" height="541">
                                    </div>
                                    <div class="unit-body">
                                        <div class="quote-classic-content">
                                            <div class="heading-2 quote-classic-author title-7"><span>John Smith</span></div>
                                            <div class="heading-3 quote-classic-text">
                                                <p class="q">If you are looking for an early winter half marathon there are none better than the RACE Half Marathon! Everything was great during this event, thank you!</p>
                                            </div>
                                            <div class="heading-5 quote-classic-position">Professional Athlete</div>
                                        </div>
                                    </div>
                                </div>
                            </article></div></div></div><div class="owl-nav"><div class="owl-prev"></div><div class="owl-next disabled"></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
        </div>
    </section>
    <!-- CTA-->
    <section class="parallax-container bg-gray-700 text-center parallax-no-fixed" data-parallax-img="images/parallax-2.jpg">
        <div class="material-parallax parallax">
            <img src="{{asset('images/parallax-2.jpg')}}" alt="" style="display: block;"></div>
        <div class="parallax-content section-lg">
            <div class="container wow fadeInUp" style="visibility: hidden; animation-name: none;">
                <h2 class="title-7"><span>Do you know what you are capable of?</span></h2>
                <p class="big">RACE Half Marathon provides you with a great opportunity to check your skills, <br class="d-none d-lg-block">strength, endurance and help the local community. What are you waiting for?
                </p><a class="button button-lg button-gradient" href="https://livedemo00.template-help.com/wt_prod-18029/#">Sign up now</a>
            </div>
        </div>
    </section>
    <!-- Our partners-->
    <section class="section section-xl bg-default text-center">
        <div class="container">
            <h2 class="title-7 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span>Our Partners</span></h2>
            <p class="big wow fadeInUp" style="visibility: hidden; animation-name: none;">We work with an extensive amount of partners and investors who not only help us promote <br class="d-none d-xl-block">our events but also make impactful contributions in the life of our community.
            </p>
            <div class="row row-xl row-30">
                <div class="col-sm-4 col-lg-3 wow fadeInDown" style="visibility: hidden; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-1-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".05s" style="visibility: hidden; animation-delay: 0.05s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-2-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-3-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInDown" data-wow-delay=".15s" style="visibility: hidden; animation-delay: 0.15s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-4-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".15s" style="visibility: hidden; animation-delay: 0.15s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-5-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-6-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" data-wow-delay=".05s" style="visibility: hidden; animation-delay: 0.05s; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-7-270x145.png')}}" alt="" width="270" height="145"></a></div>
                <div class="col-sm-4 col-lg-3 wow fadeInUp" style="visibility: hidden; animation-name: none;"><a class="client-classic" href="https://livedemo00.template-help.com/wt_prod-18029/#">
                        <img src="{{asset('images/client-8-270x145.png')}}" alt="" width="270" height="145"></a></div>
            </div>
        </div>
    </section>
    <!-- Upcoming events-->
    <section class="section section-xl bg-gray-700 text-center">
        <div class="container container-style-2">
            <h2 class="title-7 wow fadeInUp" style="visibility: hidden; animation-name: none;"><span>Upcoming events</span></h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel ie-carousel owl-loaded owl-drag" data-items="1" data-md-items="2" data-xl-items="3" data-margin="30" data-dots="true" data-autoplay="true" style="">
                <!--post-->

                <!--post-->

                <!--post-->

                <!--post-->

                <!--post-->

                <!--post-->

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-4200px, 0px, 0px); transition: all 0.25s ease 0s; width: 7200px;">
                        <div class="owl-item cloned" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-14-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div>
                                        <a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Texas</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Dallas half marathon: <br>Race to beat Cancer</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-03">May 3, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item cloned" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-15-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Georgia</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Kids &amp; Teens Atlanta <br>Charity run</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-29">May 29, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item cloned" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-16-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Seattle</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">RACE professional Marathon: <br>Autumn 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-18">May 18, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-2-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">New York</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">New york Half Marathon: <br>winter 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-15">May 15, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-1-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Los angeles</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Women’s half marathon: <br>spring 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-29">May 29, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-4-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Atlanta</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Kids &amp; Teens Half Marathon: <br>Summer 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-05">May 5, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-14-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Texas</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Dallas half marathon: <br>Race to beat Cancer</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-03">May 3, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item active" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-15-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Georgia</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Kids &amp; Teens Atlanta <br>Charity run</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-29">May 29, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item active" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-16-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Seattle</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">RACE professional Marathon: <br>Autumn 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-18">May 18, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item cloned active" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-2-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">New York</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">New york Half Marathon: <br>winter 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-15">May 15, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item cloned" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-1-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Los angeles</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Women’s half marathon: <br>spring 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-29">May 29, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div><div class="owl-item cloned" style="width: 570px; margin-right: 30px;"><article class="post block-xl">
                                <img class="post-image" src="{{asset('images/post-4-570x367.jpg')}}" alt="" width="570" height="367">
                                <div class="post-content">
                                    <div><a class="post-tag post-tag-white-outline" href="https://livedemo00.template-help.com/wt_prod-18029/#">Atlanta</a>
                                        <div class="heading-5 post-title"><a href="https://livedemo00.template-help.com/wt_prod-18029/blog-post.html">Kids &amp; Teens Half Marathon: <br>Summer 2019</a></div>
                                    </div>
                                    <div class="post-time">
                                        <time datetime="2019-05-05">May 5, 2019</time>
                                    </div>
                                </div>
                                <div class="post-dummy"></div>
                            </article></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div></div></div>
        </div>
    </section>
@endsection
