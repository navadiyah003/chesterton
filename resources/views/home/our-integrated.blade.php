<section class="hm-our-integrated-service section-space-top section-space-bottom service-section-slide">
    <div class="container-fluid no-padd-right ">
        <div class="row">
            <div class="col-sm-12">

                <h2>Our Integrated<br> Services</h2>
                <!-- Swiper -->
                <div class="swiper our-service-slides bottom-space-pagination">
                    <div class="swiper-wrapper">
                        @foreach ($homeServData as $service)    
                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="service-box">
                                <div class="row service-box-row">
                                    <div class="col-5 service-box-col-left">
                                        <img src="admin/uploads/integrated-service/image/{{ $service->image }}" alt="{{ $service->image }}" style="height: 339px;">
                                    </div>
                                    <div class="col-7 service-box-col-right">
                                        <h4>{{ $service->title }}</h4>
                                        <p style="display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">{{ $service->description }}</p>
                                        <a href="" class="button-2 arrow">learn more</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- each-slide -->
                        @endforeach

                        {{-- <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="service-box">
                                <div class="row service-box-row">
                                    <div class="col-5 service-box-col-left">
                                        <img src="{{ asset('./images/service-slide-thumb.jpg') }}" alt="">
                                    </div>
                                    <div class="col-7 service-box-col-right">
                                        <h4>Residential Agency 2</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                            voluptua.</p>
                                        <a href="" class="button-2 arrow">learn more</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- each-slide -->


                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="service-box">
                                <div class="row service-box-row">
                                    <div class="col-5 service-box-col-left">
                                        <img src="{{ asset('./images/service-slide-thumb.jpg') }}" alt="">
                                    </div>
                                    <div class="col-7 service-box-col-right">
                                        <h4>Residential Agency 3</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                            voluptua.</p>
                                        <a href="" class="button-2 arrow">learn more</a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- each-slide -->


                        <!-- each-slide -->
                        <div class="swiper-slide">

                            <div class="service-box">
                                <div class="row service-box-row">
                                    <div class="col-5 service-box-col-left">
                                        <img src="{{ asset('./images/service-slide-thumb.jpg') }}" alt="">
                                    </div>
                                    <div class="col-7 service-box-col-right">
                                        <h4>Residential Agency 4</h4>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                            voluptua.</p>
                                        <a href="" class="button-2 arrow">learn more</a>
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
