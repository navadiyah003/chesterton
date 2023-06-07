@extends('main-layouts.header')
@section('title', 'History')
@section('content')
    <!-- history-banner-section -->

    <section class="history-banner-section section-space-top section-space-bottom">

        <div class="container">
            <h1>The History of Chestertons</h1>
            <div class="h-banner section-space-bottom">
                <img class="only-desk" src="/admin/uploads/history/main_image/{{ $history->main_image }}" alt="" >
                {{-- <img class="only-desk" src="{{ asset('./images/history-banner.jpg')}}" alt=""> --}}
                <img class="only-mob" src="/admin/uploads/history/main_image/{{ $history->main_image }}" alt="">
                {{-- <img class="only-mob" src="{{ asset('./images/history-banner-mobile.jpg')}}" alt=""> --}}
            </div>
            <div class="row h-banner-content-row">
                <div class="col-sm-5 h-banner-cont-left">
                    <h3>{{ $history->short_desc }}</h3>
                    {{-- <h3>The history of our organisation is defined by the stalwarts that led us through the generations</h3> --}}
                </div>
                <div class="col-sm-7 h-banner-cont-right">
                    <p>{{ $history->long_desc }}</p>
                    {{-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p> --}}
                </div>
            </div>
        </div>

    </section>

    <!-- history-banner-section-ends-->

    <!-- history-animation-section-starts -->
    <section class="history-animation-section">
        <div class="timeline_progress">
            <div class="timeline_progress-bar"></div>
        </div>
        @foreach ($timeline as $history_timeline)
            <!-- each-section -->
            <section class="sections">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 anim-section-left">
                            <div class="round">
                                <span class="owners-name">Charles Chesterton </span>
                                <h2>{{ $history_timeline->year }}</h2>
                            </div>
                        </div>
                        <div class="col-sm-8 anim-section-right">
                            <div class="square">
                                <div class="history-slide-section">
                                    <img src="/admin/uploads/timeline/timeline_image/{{ $history_timeline->timeline_image }}" alt="" style="width: 690px; height: 368px">
                                    <span class="title">{{ $history_timeline->timeline_title }}</span>
                                    <p>{{ $history_timeline->timeline_desc }}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="pinpointer"></div>
            </section>
            <!-- each-section -->
        @endforeach
        {{-- <!-- each-section -->
          <section class="sections">
            <div class="container">
            <div class="row">
              <div class="col-sm-4 anim-section-left">
                <div class="round">
                  <span class="owners-name">Charles Chesterton </span>
                  <h2>1779 - 1849</h2>
                </div>
              </div>
              <div class="col-sm-8 anim-section-right">
                <div class="square">
                <div class="history-slide-section">
                  <img src="{{ asset('./images/history-slide-1.jpg')}}" alt="">
                  <span class="title">Chesterton & Sons office, Kensington High Street, 1924</span>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                </div>
          

                </div>
              </div>
            </div>
            </div>
            <div class="pinpointer"></div>
          </section>
        <!-- each-section -->

        <!-- each-section -->
        <section class="sections">
          <div class="container">
          <div class="row">
            <div class="col-sm-4 anim-section-left">
              <div class="round">
                <span class="owners-name">Charles Chesterton </span>
                <h2>1779 - 1849</h2>
              </div>
            </div>
            <div class="col-sm-8 anim-section-right">
              <div class="square">
              <div class="history-slide-section">
                <img src="{{ asset('./images/history-slide-1.jpg')}}" alt="">
                <span class="title">Chesterton & Sons office, Kensington High Street, 1924</span>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
              </div>


              </div>
            </div>
          </div>
          </div>
          <div class="pinpointer"></div>
        </section>
        <!-- each-section --> --}}
        <div class="overlay-fade-top"></div>
        <div class="overlay-fade-bottom"></div>

    </section>
    <!-- history-animation-section-ends -->

    <div class="spacer-div history-sections-spacer"></div>



    <!-- violet-strip-section-starts -->

    <section class="violet-strip-common">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center violet-strip-row">

                <div class="col-auto violet-strip-col">
                    <h2>Download our e-brochure</h2>
                </div>
                <div class="col-auto violet-strip-col"><a href="/history-brochure"
                        class="button-1 arrow download">DOWNLOAD</a></div>

            </div>

        </div>

    </section>

    <!-- violet-strip-section-starts -->



    <section class="expolre-other-pages section-space-top section-space-top">
        <div class="container">
            <h2 data-aos="zoom-in">Explore Other Pages</h2>

            <div class="row">

                <!-- each-box -->
                <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/explore-other-page-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect align-items-center">

                                <span class="button-4 arrow">read more</span>
                            </div>
                        </div>

                        <h4>Explore Opportunities at Chestertons</h4>
                    </a>
                </div>
                <!-- each-box -->


                <!-- each-box -->
                <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx  for-overlay-hover">
                            <img src="{{ asset('./images/explore-other-page-thumb2.jpg') }}" alt="">
                            <div class="for-hover-effect align-items-center">

                                <span class="button-4 arrow">read more</span>
                            </div>
                        </div>

                        <h4>Explore Opportunities at Chestertons</h4>
                    </a>
                </div>
                <!-- each-box -->

            </div>
        </div>
    </section>






    <!-- popular-serach-section-starts -->
    <section class="popular-search section-space-bottom">

        <!-- for-border-devider -->
        <div class="container border-container">
            <div class="border-devider"></div>
        </div>
        <!-- for-border-devider -->

        <div class="container popular-search-main  space-top ">

            @include('main-layouts.popular-searches')

        </div>

    </section>
    <!-- popular-serach-section-ends -->
@endsection
