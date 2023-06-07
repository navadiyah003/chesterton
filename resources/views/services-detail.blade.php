@extends('main-layouts.header')
@section('content')
    <!--inner-banner-starts-->
    <section class="banner inner-banner">
        <img class="banner-img only-desk" src="{{asset('/admin/uploads/service/'.$service_main->main_image) }}" alt="" style="height: 642px;">
        <img class="banner-img only-mob" src="./images/service-detail-banner-mob.png" alt="">
        <div class="overlay">
            <h1>{{$service_main->titles}}</h1>
        </div>
    </section>
    <!--inner-banner-end-->


    <!--service-detail-ctn-wrap-starts-->
    <section class="service-detail-ctn-wrap section-space-top section-space-bottom" data-aos="fade-up">

        <div class="container">

            <div class="row service-detail-ctn">

                <div class="col-lg-6">
                    <h3>{{$service_main->description}}
                    </h3>
                </div>
                <!--col-lg-6"-->

                <div class="col-lg-6">
                    <p>{{$service_main->content}}</p>
                </div>
                <!--col-lg-6"-->

            </div>
            <!--row-->

            <div class="service-detail-ctn-img space-top">
            <img src="{{asset('/admin/uploads/service/'.$service_main->image) }}" alt="" style="height: 518px;">
                <!-- <img src="images/service-detail-ctn-img.png" alt=""> -->
            </div>
            <!--service-detail-ctn-img-->

        </div>
        <!--container-->

    </section>
    <!--service-detail-ctn-wrap-end-->

    <div class="container border-container">
        <div class="border-devider"></div>
    </div>


    <!--service-offer-slider-wrap-starts-->
    <section class="service-offer-slider-wrap space-top space-bottom" data-aos="fade-down">

        <div class="container">

            <h2>What we offer with Our Valuation Services</h2>

            <div class="service-offer-slider-sec">

                <div class="swiper service-offer-slider">
                    <div class="swiper-wrapper">   
                    @php 
                    $i = 1;
                    @endphp 
                   
                     @foreach($service_part as $obj)
                        <!-- each-slider -->
                        <div class="swiper-slide">

                            <div class="service-offer-slider-block" style="height: 264px;">               
                                <span class="count">0{{ $i++;}}</span>

                                <h6>{{$obj->offer_title}}</h6>

                                <p>{{$obj->offer_content}} </p>

                            </div>
                            <!--service-offer-slider-block-->

                        </div>
                        <!-- each-slider-ends -->

                        <!-- each-slider -->
                        <!-- <div class="swiper-slide">

                            <div class="service-offer-slider-block">

                                <span class="count">02</span>

                                <h6>Unique point of contact for tenants</h6>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut </p>

                            </div>

                        </div> -->
                        <!-- each-slider-ends -->

                        <!-- <div class="swiper-slide">

                            <div class="service-offer-slider-block">

                                <span class="count">03</span>

                                <h6>Detailed reports of your assets</h6>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut </p>

                            </div>
                         
                        </div> -->
                        <!-- each-slider-ends -->
<!-- 
                        <div class="swiper-slide">

                            <div class="service-offer-slider-block">

                                <span class="count">04</span>

                                <h6>An optimal occupancy rate</h6>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut </p>

                            </div>
                          

                        </div> -->
                        <!-- each-slider-ends -->

                        <!-- <div class="swiper-slide">

                            <div class="service-offer-slider-block">

                                <span class="count">05</span>

                                <h6>A coordination of trades & experts</h6>

                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut </p>

                            </div>

                        </div> -->
                        <!-- each-slider-ends -->
                    @endforeach

                    </div>
                    <!--swiper-wrapper-->

                    <div class="swiper-button-next"> </div>
                    <div class="swiper-button-prev"> </div>
                    <div class="center-pagination">
                        <div class="swiper-pagination"></div>
                    </div>


                </div>
                <!--swiper-->



            </div>
            <!--inner-top-carousel-->

        </div>
        <!--container-->

    </section>
    <!--service-offer-slider-wrap-end-->

    <div class="container border-container">
        <div class="border-devider"></div>
    </div>


    <!--valuation-listing-block-starts-->
    <section class="valuation-listing-block-wrap space-top space-bottom" data-aos="fade-up">

        <div class="container">

            <h2>Why Chestertons
                for your Valuation</h2>

            <div class="row">
            @foreach($service_valution as $obj)
                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">
                        <div class="valuation-listing-block-icon">
                            <img src="{{asset('/admin/uploads/service/'.$obj->valution_image) }}" alt="" style="height: 47px;width: 47px;">
                        </div>

                        <p>{{$obj->valution_content}}</p>

                    </div>
                    <!--valuation-listing-block-->

                </div>
              
<!-- 
                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">

                        <div class="valuation-listing-block-icon"><img src="images/valuation-icon-2.svg" alt="" />
                        </div>

                        <p>Extensive portfolio of properties</p>

                    </div>
              
                </div>
              

                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">

                        <div class="valuation-listing-block-icon"><img src="images/valuation-icon-3.svg" alt="" />
                        </div>

                        <p>A global network of expert consultants</p>

                    </div>
                   

                </div>
              

                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">

                        <div class="valuation-listing-block-icon"><img src="images/valuation-icon-4.svg" alt="" />
                        </div>

                        <p>Offices across 4 continents</p>

                    </div>

                </div>
               

                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">

                        <div class="valuation-listing-block-icon"><img src="images/valuation-icon-5.svg" alt="" />
                        </div>

                        <p>Over $15 billion in
                            property sold in past 5 years</p>

                    </div>
   

                </div>
             

                <div class="col-lg-4 col-sm-6">

                    <div class="valuation-listing-block">

                        <div class="valuation-listing-block-icon"><img src="images/valuation-icon-6.svg" alt="" />
                        </div>

                        <p>Strong relationships with major developers</p>

                    </div>
      

                </div> -->
            
             @endforeach
            </div>
            <!--row-->

        </div>
        <!--container-->

    </section>
    <!--valuation-listing-block-end-->

    <div class="container border-container">
        <div class="border-devider"></div>
    </div>


    <!--read-our-story-section-starts-->
    <section class="read-our-story-section space-top space-bottom" data-aos="fade-up">


        <div class="container">
            <div class="read-our-story-main research-insignt-main">
                <h2>Research and Insights on Valuation</h2>

                <div class="row">
                @foreach($service_insight as $obj)
                    <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">
                            <span class="read-our-story-block-img">
                                <img src="{{asset('/admin/uploads/service/'.$obj->insights_image) }}" alt="" style="height: 304px;">
                                <!-- <img src="images/research-valuation-img-1.png" alt="" /> -->
                            </span>
                         
                            <h6>{{$obj->insights_title}}</h6>

                            <p>{{$obj->insights_content}}</p>

                            <label>{{Carbon\Carbon::parse($obj->created_at)->format('F j, Y')}}</label>

                        </a>
                       
                    </div>

                    <!-- <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">

                            <span class="read-our-story-block-img">
                                <img src="images/research-valuation-img-2.png" alt="" />
                            </span>

                            <h6>Industry Insights</h6>

                            <p>Integer ultrices suscipit neque, nec lacinia mauris ultricies vel.</p>

                            <label>January 16, 2023</label>

                        </a>
                      
                    </div>
                   
                    <div class="col-lg-4 col-sm-6">

                        <a href="#" class="read-our-story-block">

                            <span class="read-our-story-block-img">
                                <img src="images/research-valuation-img-3.png" alt="" />
                            </span>
                          
                            <h6>Trending Topics</h6>

                            <p>Proin dui sem, hendrerit quis consequat in, semper nec erat</p>

                            <label>January 16, 2023</label>

                        </a>
                      

                    </div> -->
                    <!--col-lg-4 col-sm-6-->
                @endforeach
                </div>
                <!--row-->

            </div>
            <!--read-our-story-main-->
        </div>
        <!--container-->

    </section>
    <!--read-our-story-section-end-->


    <!--testimonial-wrapper-starts-->
    <section class="testimonial-wrapper" data-aos="fade-down">

        <div class="container">

            <div class="testimonial-slider-section">

                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                     @foreach($service_consultants as $obj)
                        <!-- each-slider -->
                        <div class="swiper-slide">

                            <div class="testimonial-slider-ctn-block">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <h2>{{$obj->title}}</h2>
                                    </div>
                                    <!--col-md-6-->

                                    <div class="col-lg-6">
                                        <p>{{$obj->content}}</p>
                                        <label>{{$obj->name}}</label>
                                    </div>
                                    <!--col-md-6-->

                                </div>
                                <!--row-->

                            </div>
                            <!--testimonial-slider-ctn-block-->

                        </div>
                        <!-- each-slider-ends -->

                        <!-- each-slider -->
                        <!-- <div class="swiper-slide">

                            <div class="testimonial-slider-ctn-block">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <h2>The very best consultants I’ve ever worked with!</h2>
                                    </div>
                           
                                    <div class="col-lg-6">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                            vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                                            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                                            amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                            labore et dolore magna.</p>
                                        <label>ALEX</label>
                                    </div>
                              
                                </div>
                             

                            </div>
                           

                        </div>
                         -->
                        <!-- each-slider-ends -->
                    @endforeach

                    </div>
                    <!--swiper-wrapper-->

                    <div class="inner-popular-top-carousel-arrows">

                        <div class="row align-items-center">

                            <div class="col-lg-6 offset-lg-6">

                                <div class="swiper-button-prev"><img src="images/simple-left-arw.svg" alt="" />
                                </div>

                                <div class="swiper-button-next"><img src="images/simple-right-arw.svg" alt="" />
                                </div>

                            </div>
                            <!--col-->

                        </div>
                        <!--row-->

                    </div>
                    <!--inner-popular-top-carousel-arrows-->


                </div>
                <!--swiper-->




            </div>
            <!--inner-top-carousel-->

        </div>
        <!--container-->

    </section>
    <!--testimonial-wrapper-end-->


    <!--expolre-other-pages-starts-->
    <section class="expolre-other-pages  space-top space-bottom" data-aos="fade-up">
        <div class="container">
            <h2>Explore More</h2>

            <div class="row">

                <!-- each-box -->
                @foreach($service_explore as $obj)
                <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <!-- <img src="./images/explore-img-1.png" alt=""> -->
                            <img src="{{asset('/admin/uploads/service/'.$obj->image) }}" alt="" style="height: 455px;">
                            <div class="for-hover-effect align-items-center">

                                <span class="button-4 arrow">read more</span>
                            </div>
                        </div>

                        <h4>{{$obj->title}}</h4>
                    </a>
                </div>

                
                <!-- <div class="col-sm-6 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx  for-overlay-hover">
                            <img src="./images/explore-img-2.png" alt="">
                            <div class="for-hover-effect align-items-center">

                                <span class="button-4 arrow">read more</span>
                            </div>
                        </div>

                        <h4>Explore Opportunities at Chestertons</h4>
                    </a>
                </div> -->
             @endforeach
            </div>
        </div>
    </section>
    <!--expolre-other-pages-end-->


    <!-- popular-serach-section-starts -->
    <section class="popular-search ">

        <!-- for-border-devider -->
        <div class="container border-container">
            <div class="border-devider"></div>
        </div>
        <!-- for-border-devider -->

        <div class="container popular-search-main  space-top space-bottom">

            <h2>Popular Searches</h2>
            <div class="row popular-search-row space-bottom">

                <!-- each-box -->
                <div class="col-sm-4 popular-search-col">
                    <div class="pop-search-box">
                        <h4>Popular City Searches</h4>
                        <span class="subtitle">Find homes in these popular cities</span>
                        <ul class="border-anim">
                            <li><a href="">New York</a></li>
                            <li><a href="">Miami</a></li>
                            <li><a href="">Washington</a></li>
                            <li><a href="">Sydney</a></li>
                            <li><a href="">London</a></li>
                            <li><a href="">Los Angeles</a></li>

                        </ul>
                        <a href="" class="button-2 arrow">SEE ALL CITIES</a>
                    </div>
                </div>

                <!-- each-box -->
                <!-- each-box -->
                <div class="col-sm-4 popular-search-col">
                    <div class="pop-search-box">
                        <h4>Popular City Searches</h4>
                        <span class="subtitle">Find homes in these popular cities</span>
                        <ul class="border-anim">
                            <li><a href="">New York</a></li>
                            <li><a href="">Miami</a></li>
                            <li><a href="">Washington</a></li>
                            <li><a href="">Sydney</a></li>
                            <li><a href="">London</a></li>
                            <li><a href="">Los Angeles</a></li>

                        </ul>
                        <a href="" class="button-2 arrow">SEE ALL CITIES</a>
                    </div>
                </div>

                <!-- each-box -->

                <!-- each-box -->
                <div class="col-sm-4 popular-search-col">
                    <div class="pop-search-box">
                        <h4>Popular City Searches</h4>
                        <span class="subtitle">Find homes in these popular cities</span>
                        <ul class="border-anim">
                            <li><a href="">New York</a></li>
                            <li><a href="">Miami</a></li>
                            <li><a href="">Washington</a></li>
                            <li><a href="">Sydney</a></li>
                            <li><a href="">London</a></li>
                            <li><a href="">Los Angeles</a></li>

                        </ul>
                        <a href="" class="button-2 arrow">SEE ALL CITIES</a>
                    </div>
                </div>

                <!-- each-box -->



            </div>
            <!-- for-border-devider -->

        </div>

    </section>
    <!-- popular-serach-section-ends -->
@endsection
