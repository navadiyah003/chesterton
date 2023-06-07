<section class="hm-our-feature-properties section-space-top section-space-bottom">

    <div class="container">

        <div class="section-title ">
            <h2>Our<br>
                Featured Properties</h2>
            <a href="{{ url('/property-listing') }}" class="button-1 arrow">
                view all
            </a>
        </div>

        <div class="hm-feature-slider-section">
            <!-- Swiper -->
            <div class="swiper our-feature-properties">
                <div class="swiper-wrapper" style="height: auto;">
                    <!-- each-slider -->
                    @foreach ($properties as $property)

                    <div class="swiper-slide">
                        @php
                            $propertySlug = Str::slug($property->propertyName, '_');
                        @endphp
                        <a href="property-detail/{{ $property->sfid }}/{{ $propertySlug }}" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                @if ($property->images != "null")
                                    <?php $image =  explode(",",$property->images)?>
                                    <img src="{{ $image[0] }}" alt="{{ $property->images }}" style="width: 500px;height: 484px;">
                                @else
                                    <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="" style="width: 500px;height: 484px;">
                                @endif
                                {{-- <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">  --}}
                                {{-- <img src="{{asset('/admin/uploads/home/'.$property->images) }}" alt="" style="height: 483px;"> --}}
                                <div class="for-hover-effect"></div>
                            </div>
                            <span class="location">{{ $property->city }}, {{ $property->country }}</span>
                            <h4>{{ $property->propertyName }}</h4>
                            <span class="price">£ {{ number_format($property->price) }}</span>
                        </a>

                    </div>
                    <!-- each-slider-ends -->

                    <!-- each-slider -->
                    <!-- <div class="swiper-slide">
                        <a href="" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                <div class="for-hover-effect"></div>
                            </div>
                            <span class="location">London, United Kingdom</span>
                            <h4>2 Bedroom Apartment</h4>
                            <span class="price">$19,000,000</span>
                        </a>

                    </div> -->
                    <!-- each-slider-ends -->


                    <!-- each-slider -->
                    <!-- <div class="swiper-slide">
                        <a href="" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                <div class="for-hover-effect"></div>
                            </div>
                            <span class="location">London, United Kingdom</span>
                            <h4>2 Bedroom Apartment</h4>
                            <span class="price">$19,000,000</span>
                        </a>

                    </div> -->
                    <!-- each-slider-ends -->


                    <!-- each-slider -->
                    <!-- <div class="swiper-slide">
                        <a href="" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                <div class="for-hover-effect"></div>
                            </div>
                            <span class="location">London, United Kingdom</span>
                            <h4>2 Bedroom Apartment</h4>
                            <span class="price">$19,000,000</span>
                        </a>

                    </div> -->
                    <!-- each-slider-ends -->


                    <!-- each-slider -->
                    <!-- <div class="swiper-slide">
                        <a href="" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                <div class="for-hover-effect"></div>
                            </div>
                            <span class="location">London, United Kingdom</span>
                            <h4>2 Bedroom Apartment</h4>
                            <span class="price">$19,000,000</span>
                        </a>

                    </div> -->
                    <!-- each-slider-ends -->
                    @endforeach
                </div>

            </div>
            

            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                    <g id="Group_30733" data-name="Group 30733" transform="translate(-1686.54 -1468.54)">
                        <g id="Ellipse_10" data-name="Ellipse 10" transform="translate(1686.54 1468.54)" fill="none"
                            stroke="#bc8418" stroke-width="1.5">
                            <circle cx="37.5" cy="37.5" r="37.5" stroke="none" />
                            <circle cx="37.5" cy="37.5" r="36.75" fill="none" />
                        </g>
                        <path id="Path_1886" data-name="Path 1886" d="M-9292.216,1245.925l5.294,5.294-5.294,5.294"
                            transform="translate(11013.658 254.92)" fill="none" stroke="#bc8418"
                            stroke-linecap="round" stroke-width="1.5" />
                    </g>
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg id="Group_30744" data-name="Group 30744" xmlns="http://www.w3.org/2000/svg" width="75"
                    height="75" viewBox="0 0 75 75">
                    <g id="Ellipse_10" data-name="Ellipse 10" fill="none" stroke="#bc8418" stroke-width="1.5">
                        <circle cx="37.5" cy="37.5" r="37.5" stroke="none" />
                        <circle cx="37.5" cy="37.5" r="36.75" fill="none" />
                    </g>
                    <path id="Path_1886" data-name="Path 1886" d="M-9286.921,1245.925l-5.294,5.294,5.294,5.294"
                        transform="translate(9327.019 -1213.62)" fill="none" stroke="#bc8418"
                        stroke-linecap="round" stroke-width="1.5" />
                </svg>
            </div>
            <!-- Swiper JS -->
        </div>

    </div>

</section>
