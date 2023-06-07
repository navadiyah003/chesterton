@extends('main-layouts.header')
@section('content')
    <section class="banner inner-banner text-white foundation-banner">
        <img class="banner-img only-desk" src="{{ asset('./images/foundation-banner.jpg')}}" alt="">
        <img class="banner-img only-mob" src="{{ asset('./images/foundation-mobile-banner.jpg') }}" alt="">
        <div class="overlay">
            <h1>Each one of us <br>
                has a role to play in building a better world</h1>
        </div>
    </section>

    <section class="service-detail-ctn-wrap section-space-top section-space-bottom" data-aos="fade-up">

        <div class="container">

            <div class="row service-detail-ctn">

                <div class="col-lg-6">
                    <h2>The Chestertons <br>
                        Foundation </h2>
                </div>
                <!--col-lg-6"-->

                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu ex, fringilla et rhoncus
                        quis,
                        porttitor a magna. Nam dignissim felis iaculis lacus malesuada fermentum non eget lectus. Mauris
                        eu enim ut
                        est pulvinar dictum. Ut vitae felis eget elit vehicula cursus sit amet et metus. Nullam quis
                        facilisis ex.
                        Curabitur molestie nulla vitae lacus porta, a convallis risus convallis. Cras porta lacus at
                        pretium
                        facilisis. Aenean quis mauris.
                    </p>

                    <p>vel lorem sodales volutpat. Suspendisse condimentum pellentesque est, a maximus metus
                        pellentesque ut.
                        Suspendisse at dictum arcu, vel luctus leo. Praesent blandit ligula quis tempor imperdiet. Nunc
                        sed ligula
                        ante.</p>
                </div>
                <!--col-lg-6"-->

            </div>
            <!--row-->

        </div>
        <!--container-->

    </section>

    <div class="container border-container">
        <div class="border-devider"></div>
    </div>

    <!--charity-sec-wrap starts-->
    <section class="charity-sec-wrap section-space-top section-space-bottom text-center" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <h2>Our Charity Programs</h2>
                    <p class="px-0 px-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu ex,
                        fringilla et rhoncus
                        quis, porttitor a magna. Nam dignissim felis iaculis lacus malesuada fermentum non eget lectus.
                        Mauris eu enim
                        ut est pulvinar dictum. Ut vitae felis eget elit vehicula cursus sit amet et metus. Nullam quis
                        facilisis ex.
                        Curabitur molestie nulla vitae lacus porta, a convallis risus convallis. Cras porta lacus at
                        pretium
                        facilisis. Aenean quis mauris. vel lorem sodales volutpat. Suspendisse condimentum pellentesque
                        est, a maximus
                        metus pellentesque ut. Suspendisse at dictum arcu, vel luctus leo. Praesent blandit ligula quis
                        tempor
                        imperdiet. Nunc sed ligula ante. </p>
                </div>
            </div>
            <div class="row charity-pgms">
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img1.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img2.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img3.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img4.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img5.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/charity-img6.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>

            </div>
            <a class="button-1 button-1-down arrow d-inline-block" data-bs-toggle="collapse" href="#office-ad"
                role="button" aria-expanded="false" aria-controls="office-ad">Load More</a>
        </div>
    </section>
    <!--charity-sec-wrap ends-->

    <div class="container border-container">
        <div class="border-devider"></div>
    </div>

    <!--charity-sec-wrap starts-->
    <section class="charity-sec-wrap section-space-top section-space-bottom text-left" data-aos="fade-up">
        <div class="container">
            <div class="row">

                <h2>Our Events</h2>

            </div>
            <div class="row charity-pgms">
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">

                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/events-img1.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <h4>Community Sport at the Old
                            Deer Park</h4>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">

                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/events-img2.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <h4>“Calling London” Coat Drive</h4>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="" class="feature-thumb-bx-main">

                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img class="" src="{{ asset('./images/events-img3.jpg') }}" alt="">
                            <div class="for-hover-effect"></div>
                        </div>
                        <h4>Chestertons Polo in the Park</h4>
                        <p>Donec vitae placerat placerat id ex ex enim. turpis urna maximustincidunt placerat ex
                            elementum ipsum Morbi
                            tincidunt</p>
                    </a>
                </div>

            </div>
            <div class="text-center">
                <a class="button-1 button-1-down arrow d-inline-block" data-bs-toggle="collapse" href="#office-ad"
                    role="button" aria-expanded="false" aria-controls="office-ad">Load More</a>
            </div>
        </div>
    </section>
    <!--charity-sec-wrap ends-->


    <div class="container border-container">
        <div class="border-devider"></div>
    </div>

    <!-- other page-section-starts -->
    <section class="otherpage-section section-space-top section-space-bottom" data-aos="zoom-in">

        <div class="container">
            <h2>Explore Other Pages</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="wg-box-content">

                        <div class="wg-box-content-overlay"></div>
                        <img class="wg-box-content-image" src="{{ asset('images/otherpage-img3.jpg')}}">
                        <div class="wg-box-content-details wg-box-fadeIn-bottom">
                            <a href="" class="button-2 arrow">Read More</a>
                        </div>
                    </div>
                    <h5>Explore Opportunities at Chestertons</h5>
                </div>
                <div class="col-md-6">
                    <div class="wg-box-content">

                        <div class="wg-box-content-overlay"></div>
                        <img class="wg-box-content-image" src="{{ asset('images/otherpage-img2.jpg') }}">
                        <div class="wg-box-content-details wg-box-fadeIn-bottom">
                            <a href="" class="button-2 arrow">Read More</a>
                        </div>
                    </div>
                    <h5>Learn more about Chestertons</h5>
                </div>

            </div>

        </div>

    </section>

    <!-- other page-section-ends -->


    <!-- popular-serach-section-starts -->
    <section class="popular-search ">

        <!-- for-border-devider -->
        <div class="container border-container">
            <div class="border-devider"></div>
        </div>
        <!-- for-border-devider -->

        <div class="container popular-search-main  space-top space-bottom">

            @include('main-layouts.popular-searches')
            
            <!-- for-border-devider -->
            <div class="container border-container" data-aos="fade-up">
                <div class="border-devider"></div>
            </div>
            <!-- for-border-devider -->
            <div class="row bottom-discription space-top">
                <div class="row">
                    <div class="cols-m-12" data-aos="fade-up">
                        <h2>More About Our Foundation</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore
                            et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum.
                            Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                            ipsum dolor sit
                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                            dolore magna
                            aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            Stet clita kasd
                            gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                            amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                            erat, sed diam
                            voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd
                            gubergren, no sea
                            takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                            voluptua. </p>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- popular-serach-section-ends -->
@endsection
