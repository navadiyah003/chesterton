@extends('main-layouts.header')
@section('content')
    <!-- Banner Section Starts here -->
    <section class="banner inner-banner text-white">
        <img class="banner-img only-desk" src="{{ asset('/admin/uploads/global-network/banner_image/'.$globNet->banner_image) }}" width="1940px" height="645px" alt="">
        <img class="banner-img only-mob"  src="{{ asset('/images/global-net-banner-mobile.jpg')}}" alt="">
        <div class="overlay">
            <h1>{{ $globNet->banner_title }}</h1>
        </div>
    </section>
    <!-- Banner Section Starts here -->


    <!-- small section  starts  -->
    <section class="global-network-wrap section-space-top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-4">
                    <h3>{{ $globNet->short_desc }}</h3>
                    <a href="{{ $globNet->web_link }}" class="button-1 arrow">View Local Website&nbsp;&nbsp;</a>

                    <a class="button-1 button-1-down arrow" data-bs-toggle="collapse" href="#office-ad" role="button"
                        aria-expanded="false" aria-controls="office-ad">View office address</a>
                    <div class="collapse multi-collapse" id="office-ad">
                        <div class="office-ad-bx">
                            <a class="close-btn" data-bs-toggle="collapse" href="#office-ad" role="button"><img
                                    src="{{ asset('images/close-btn.png')}}" alt="" /></a>
                            <p>{{ $globNet->office_address}}</p>
                            {{-- <p>44-48 Old Brompton Road,<br> South Kensington, SW7 3DY</p> --}}
                            <div class="f-cont-list">
                                @if ($globNet->office_phone)    
                                    <i class="icons"><img src="{{ asset('images/icon-phone.svg')}}" alt="" /></i><a
                                        href="tel:{{ $globNet->office_phone }}" class="">{{ $globNet->office_phone }}</a>
                                @endif
                            </div>
                            <div class="f-cont-list">
                                @if ($globNet->office_email)
                                    <i class="icons"><img src="{{ asset('images/icon-mail.svg')}}" alt="" /></i><a
                                        href="mailto:{{ $globNet->office_email }}"
                                        class="">{{ $globNet->office_email }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 px-5-lg">
                    <p>{{ $globNet->long_desc }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- small section  ends -->

    <!-- for-border-devider -->
    <div class="container border-container">
        <div class="border-devider"></div>
    </div>
    <!-- for-border-devider -->

    <!-- our-integrated service starts here -->
    <section class="hm-our-integrated-service our-integrated-service-inner section-space-top section-space-bottom service-section-slide">
        <div class="container-fluid no-padd-right ">
            <div class="row">
                <div class="col-sm-12">

                    <h2>Our Integrated<br> Services</h2>
                    <!-- Swiper -->
                    <div class="swiper our-service-slides-inner bottom-space-pagination">
                        <div class="swiper-wrapper">
                            @foreach ($homeServData as $service)
                            <!-- each-slide -->
                            <div class="swiper-slide">

                                <div class="service-box">
                                    <div class="row service-box-row align-items-center">
                                        <div class="col-5 service-box-col-left">
                                            <img src="{{ asset('admin/uploads/global-network-integrate/image/'.$service->image) }}" alt="" style="height: 339px;">
                                        </div>
                                        <div class="col-7 service-box-col-right">
                                            <h4>{{ $service->title }}</h4>
                                            <p>{{ $service->description }}</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- each-slide -->
                            @endforeach
                            {{-- <!-- each-slide -->
                            <div class="swiper-slide">

                                <div class="service-box">
                                    <div class="row service-box-row align-items-center">
                                        <div class="col-5 service-box-col-left">
                                            <img src="{{ asset('./images/service-slide-thumb.jpg')}}" alt="">
                                        </div>
                                        <div class="col-7 service-box-col-right">
                                            <h4>Residential Agency 2</h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt
                                                ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- each-slide -->


                            <!-- each-slide -->
                            <div class="swiper-slide">

                                <div class="service-box">
                                    <div class="row service-box-row align-items-center">
                                        <div class="col-5 service-box-col-left">
                                            <img src="{{ asset('./images/service-slide-thumb.jpg')}}" alt="">
                                        </div>
                                        <div class="col-7 service-box-col-right">
                                            <h4>Residential Agency 3</h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt
                                                ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- each-slide -->


                            <!-- each-slide -->
                            <div class="swiper-slide">

                                <div class="service-box">
                                    <div class="row service-box-row align-items-center">
                                        <div class="col-5 service-box-col-left">
                                            <img src="{{ asset('./images/service-slide-thumb.jpg')}}" alt="">
                                        </div>
                                        <div class="col-7 service-box-col-right">
                                            <h4>Residential Agency 4</h4>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt
                                                ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- each-slide --> --}}


                        </div>

                        <div class="swiper-button-next"> </div>
                        <div class="swiper-button-prev"> </div>
                        <div class="center-pagination">
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                    <!-- Swiper JS -->
                </div>

            </div>
        </div>
    </section>
    <!-- our-integrated service starts here -->

    <!-- small section  starts  -->
    <section class="global-network-middle-sec section-space-top section-space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <h3>{{ $globNet->popular_city_content }}</h3>

                </div>
                <div class="col-md-7 px-5-lg">
                    <img src="{{ asset('admin/uploads/global-network/popular_city_image/'.$globNet->popular_city_image) }}" width="630px" height="700px" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- small section  ends -->

    <!-- violet-strip-section-starts -->
    <section class="violet-strip-common" data-aos="zoom-in">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center violet-strip-row">

                <div class="col-auto violet-strip-col">
                    <h2>{{ $globNet->web_link_content }}</h2>
                </div>
                <div class="col-auto violet-strip-col"><a href="{{ $globNet->web_link }}" class="button-1 arrow">View Local Website</a></div>

            </div>

        </div>

    </section>
    <!-- violet-strip-section-ends -->

    <!-- full width carousel starts-->
    <section class="full-width-swiper-wrap section-space-top section-space-bottom">
        <div>
            <div class="col-sm-12">
                <!-- Swiper -->
                <div class="swiper full-width-slides">
                    <div class="swiper-wrapper">
                        @foreach(json_decode($globNet->image_slide,true) as $item)
                            <!-- each-slide -->
                            <div class="swiper-slide">
  
                                <div class="full-width-swiper-box">
                                    <img src="{{ asset('/admin/uploads/global-network/image_slide/'.$item) }}" class="img-fluid" alt="" style="height: 486px;">
    
                                </div>
    
                            </div>
                            <!-- each-slide -->
                        @endforeach

                        {{-- <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="full-width-swiper-box">
                                <img src="{{ asset('./images/full-width-swip-img2.jpg')}}" class="img-fluid" alt="">

                            </div>

                        </div>
                        <!-- each-slide -->


                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="full-width-swiper-box">
                                <img src="{{ asset('./images/full-width-swip-img3.jpg')}}" class="img-fluid" alt="">

                            </div>

                        </div>
                        <!-- each-slide -->


                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="full-width-swiper-box">
                                <img src="{{ asset('./images/full-width-swip-img4.jpg')}}" class="img-fluid" alt="">

                            </div>

                        </div>
                        <!-- each-slide -->

                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="full-width-swiper-box">
                                <img src="{{ asset('./images/full-width-swip-img2.jpg')}}" class="img-fluid" alt="">

                            </div>

                        </div>
                        <!-- each-slide -->


                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="full-width-swiper-box">
                                <img src="{{ asset('./images/full-width-swip-img3.jpg')}}" class="img-fluid" alt="">

                            </div>

                        </div>
                        <!-- each-slide --> --}}
                    </div>

                    <div class="swiper-button-next"> </div>
                    <div class="swiper-button-prev"> </div>
                    <div class="center-pagination">
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <!-- Swiper JS -->
            </div>
        </div>
    </section>
    <!-- full width carousel ends-->

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
