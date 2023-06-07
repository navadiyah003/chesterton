

@extends('main-layouts.header')

@section('content')

    <!--inner-top-sec-starts-->
    <section class="inner-top-sec inner-popular-top-carousel-wraper section-space-top" data-aos="fade-up">

        <div class="container-fluid">
            <h1>Popular Destinations</h1>

            <div class="inner-popular-top-carousel-section">

                <div class="swiper inner-popular-top-carousel">
                    <div class="swiper-wrapper">

                        <!-- each-slider -->
                        <div class="swiper-slide">
                            <?php $img_banner = explode(", ",$popularCities->banner_image); ?>
                            <div class="inner-popular-top-carousel-img">
                                <img src='images/{{ $img_banner[0] }}' alt="" style="height: 740px;" />
                            </div>
                            <!--inner-top-carousel-img-->

                        </div>
                        <!-- each-slider-ends -->

                        <!-- each-slider -->
                        <div class="swiper-slide">

                            <div class="inner-popular-top-carousel-img">
                                <img src="images/{{ $img_banner[1] }}" alt="" style="height: 740px;" />
                            </div>
                            <!--inner-top-carousel-img-->

                        </div>
                        <!-- each-slider-ends -->


                    </div>
                    <!--swiper-wrapper-->

                </div>
                <!--swiper-->

                <div class="inner-popular-top-carousel-arrows">

                    <div class="row align-items-center">

                        <div class="col">
                            <div class="swiper-pagination"></div>
                        </div>
                        <!--col-->

                        <div class="col">

                            <div class="swiper-button-prev"><img src="{{ asset('images/round-btn-long-arrow-left.svg')}}"
                                    alt="" /></div>

                            <div class="swiper-button-next"><img src="{{ asset('images/round-btn-long-arrow-right.svg')}}"
                                    alt="" /></div>

                        </div>
                        <!--col-->

                    </div>
                    <!--row-->



                </div>
                <!--inner-popular-top-carousel-arrows-->


            </div>
            <!--inner-top-carousel-->

        </div>
        <!--container-->

    </section>
    <!--inner-top-carousel-wraper-->

    <!--inner-top-sec-end-->

    <!--country-listed-section-starts-->

    <section class="country-listed-section space-top space-bottom" data-aos="fade-down">

        <div class="container">

            <ul class="country-listed">
                <?php $img_banner = explode(",",$popularCities->country_name); ?>
                @foreach ($img_banner as $item)    
                    <li><a href="#">{{ $item }}</a></li>
                @endforeach
                {{-- <li><a href="#">Bahrain</a></li>
                <li><a href="#">Antigua</a></li>
                <li><a href="#">Greece</a></li>
                <li><a href="#">Cambodia</a></li>
                <li><a href="#">Gibraltar</a></li>

                <li><a href="#">United Arab Emirates</a></li>
                <li><a href="#">Spain</a></li>
                <li><a href="#">Barbados</a></li>
                <li><a href="#">Cyprus</a></li>
                <li><a href="#">Egypt</a></li>

                <li><a href="#">Saudi Arabia</a></li>
                <li><a href="#">St. Lucia</a></li>
                <li><a href="#">Morocco</a></li>
                <li><a href="#">South Korea</a></li>
                <li><a href="#">Malaysia</a></li> --}}
            </ul>

        </div>
        <!--container-->



    </section>

    <!--country-listed-section-end-->



    <div class="container border-container">
        <div class="border-devider"></div>
    </div>


    <!--read-our-story-section-starts-->

    <section class="read-our-story-section space-top space-bottom" data-aos="fade-up">


        <div class="container">
            <div class="read-our-story-main">
                <h2>Read Our Stories</h2>

                <div class="row">
                    @foreach ($stories as $story)
                        <div class="col-lg-4 col-sm-6">

                            <a href="{{ url('/stories-detail', $story->id) }}" class="read-our-story-block">

                                <span class="read-our-story-block-img">
                                    <img src="admin/uploads/story/main_image/{{ $story->main_image }}" alt="" style="height: 306px;"/>
                                </span>
                                <!--read-our-story-block-img-->

                                <h6>{{ $story->stories_type }}</h6>

                                <p>{{ $story->short_description }}</p>

                                <label>{{ date_format($story->created_at, "F d, Y") }}</label>

                            </a>
                            <!--read-our-story-block-->

                        </div>
                    @endforeach
                        
                    {{-- <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">

                            <span class="read-our-story-block-img">
                                <img src="{{ asset('images/read-our-story-block-img-1.png')}}" alt="" />
                            </span>
                            <!--read-our-story-block-img-->

                            <h6>Intelligence</h6>

                            <p>Praesent blandit egestas porta. Morbi egestas vel arcu at mattis</p>

                            <label>January 16, 2023</label>

                        </a>
                        <!--read-our-story-block-->

                    </div>
                    <!--col-lg-4 col-sm-6-->

                    <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">

                            <span class="read-our-story-block-img">
                                <img src="{{ asset('images/read-our-story-block-img-2.png')}}" alt="" />
                            </span>
                            <!--read-our-story-block-img-->

                            <h6>Technology</h6>

                            <p>Praesent egestas ut felis sollicitudin aliquam. Praesent tincidunt risus nunc</p>

                            <label>January 16, 2023</label>

                        </a>
                        <!--read-our-story-block-->

                    </div>
                    <!--col-lg-4 col-sm-6-->


                    <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">

                            <span class="read-our-story-block-img">
                                <img src="{{ asset('images/read-our-story-block-img-3.png')}}" alt="" />
                            </span>
                            <!--read-our-story-block-img-->

                            <h6>Lifestyle</h6>

                            <p>Proin dui sem, hendrerit quis consequat in, semper nec erat vehicula </p>

                            <label>January 16, 2023</label>

                        </a>
                        <!--read-our-story-block-->

                    </div>
                    <!--col-lg-4 col-sm-6--> --}}

                </div>
                <!--row-->

            </div>
            <!--read-our-story-main-->
        </div>
        <!--container-->

    </section>

    <!--read-our-story-section-end-->

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

        </div>

    </section>
    <!-- popular-serach-section-ends -->

@endsection