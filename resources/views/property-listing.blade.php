@extends('main-layouts.header')
@section('title', 'Property list')

@section('content')
    <!-- Banner Section Starts here -->
    <section class="banner inner-banner">
        <img class="banner-img only-desk" src="{{ asset('./images/property-banner.jpg') }}" alt="">
        <img class="banner-img only-mob" src="{{ asset('./images/property-banner-mob.jpg') }}" alt="">
        <div class="overlay">
            <h1>Residential Properties</h1>
        </div>
    </section>
    <!-- Banner Section Starts here -->


    <!-- propert-search-listing-section -->
    <section class="section-space-top section-space-bottom">
        <div class="container">

            <form method="GET" action="{{ url('property-listing') }}" role="search">
                <!-- property-search-tab-starts -->
    
                <div class="tab-strucutre-1" data-aos="zoom-in">
                    <ul id="saleRentList">
                        <li value="all" ><a href="#" id="all" class="active">All</a></li>
                        <li value="rent"><a href="#" id="rent" class="">Properties For Rent</a></li>
                        <li value="sale"><a href="#" id="sale" class="">Properties For Sale</a></li>
                    </ul>
                </div>
                <!-- property-search-tab-starts -->
                <input type="hidden" name="saleRentType" id="saleRentType" value="all">
                <!-- property-search-section-starts -->
                <div class="property-search-section" id="pop-Search-sec">
                    <div class="mob-search-heading">
                        <h5>Filters</h5>
                        <a class="close-button" id="close-prop-search"><img src="{{ asset('./images/close-button.svg') }}"
                                alt=""></a>
                    </div>
                    <div class="for-mob-search">

                        <div class="row property-main-filter-row only-mob">

                            <div class="col-sm-2 pr-filter-col">
                                <label>Items per page</label>
                                <select name="itemsPerPageMob">
                                    <option value="6" @if ($properties->perPage() == 6) selected @endif >6</option>
                                    <option value="12" @if ($properties->perPage() == 12) selected @endif >12</option>
                                    <option value="18" @if ($properties->perPage() == 18) selected @endif >18</option>
                                </select>
                            </div>
                            <div class="col-sm-2 pr-filter-col">
                                <label>Sort by</label>
                                <select name="itemsOrderByMob">
                                    <option>Price</option>
                                    <option>12</option>
                                    <option>12</option>
                                </select>
                            </div>

                        </div>
                        <!-- for-border-devider -->
                        <div class="border-container only-mob">
                            <div class="border-devider"></div>
                        </div>
                        <!-- for-border-devider -->

                        {{-- <form method="GET" action="{{ url('property-listing') }}" role="search"> --}}
                            <!-- property-main-search -->
                            <div class="row proprty-main-search">
        
                                <!-- each-field -->
                                <div class="col-sm-2 field-one-col">
                                    <label>Country</label>
                                    <select name="location">
                                        <option selected disabled>Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->contry_name }}">{{ $country->contry_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- each-field -->
                                <!-- each-field -->
                                <div class="col-sm-2 field-one-col">
                                    <label>Location</label>
                                    <select name="city">
                                        <option selected disabled>Select</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->city_name }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- each-field -->
        
        
                                <!-- each-field -->
                                <div class="col-sm-2 field-one-col">
                                    <label>Type</label>
                                    <select name="propertyType">
                                        <option selected disabled>Select</option>
                                        <option value="residential">Residential</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="services">Services</option>
                                    </select>
                                </div>
                                <!-- each-field -->
        
        
                                <!-- each-field -->
                                <div class="col-sm-2 field-two-col">
                                    <label>Price </label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <select name="minPrice">
                                                <option selected disabled>Select</option>
                                                <option value="150000">500</option>
                                                <option value="">1000</option>
                                                <option value="">1500</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="maxPrice">
                                                <option selected disabled>Select</option>
                                                <option value="">1000</option>
                                                <option value="190000">1500</option>
                                                <option value="">2000</option>
                                            </select>
                                        </div>
                                    </div>
        
                                </div>
                                <!-- each-field -->
        
                                <!-- each-field -->
        
                                <div class="col-sm-2 field-one-col adv-filter d-flex align-items-end">
                                    <div class="adv-filter-click" id="adv-filt-click"> <img src="{{ asset('./images/filter.svg') }}"
                                            alt=""> <span>Advanced Filter</span></div>
                                </div>
        
                                <!-- each-field -->
        
                                <div class="col-sm-2 clear-apply  align-items-end">
                                    <div class="clear-apply-wrap d-flex align-items-center">
                                        <div class="clear-all d-flex align-items-center">
                                            {{-- <span> --}}
                                                <button type="reset" class="btn" style="margin: -10px">
                                                    Clear all
                                                </button>
                                            {{-- </span> --}}
                                            <img
                                                src="{{ asset('./images/clear-all.svg') }}"></div>
                                        <button type="submit" class="button-3">APPLY</button>
                                    </div>
                                </div>
        
        
                            </div>
                            <!-- property-main-search -->

                            <!-- advance-search-section-starts -->
                            <div class="adv-search-main-wrap" id="adv-search-main">
                                <!-- for-border-devider -->
                                <div class="border-container">
                                    <div class="border-devider"></div>
                                </div>
                                <!-- for-border-devider -->
                                <div class="row  property-adv-search-sec first-property-adv-search-sec">
                                    <!-- each-field -->
                                    <div class="col-sm-2 field-one-col">
                                        <label for="keyword">Keyword Search</label>
                                        <input type="text" id="keyword" name="keyword" value="" placeholder="Search Here">
                                    </div>
                                    <!-- each-field -->
                                    <!-- each-field -->
                                    <div class="col-auto field-three-col radio-select-sec">
                                        <label>Type of Rental</label>
                                        <div class="row radio-field-row">
                                            <div class="col-auto">
                                                <input type="radio" name="rentalType" value="all"><span>All</span>
                                            </div>
                                            <div class="col-auto">
                                                <input type="radio" name="rentalType" value="short-term"><span>Short-term</span>
                                            </div>
                                            <div class="col-auto">
                                                <input type="radio" name="rentalType" value="long-term"><span>Long-term</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- each-field -->
        
        
                                    <!-- each-field -->
                                    <div class="col-sm-2 field-one-col">
                                        <label>Bedrooms</label>
                                        <input type="text" name="numOfBedroom" value="" placeholder="Search Here">
                                    </div>
                                    <!-- each-field -->
        
        
                                    <!-- each-field -->
                                    <div class="col-sm-2 field-one-col">
                                        <label>Bathrooms</label>
                                        <input type="text" name="numOfBathroom" value="" placeholder="Search Here">
                                    </div>
                                    <!-- each-field -->
        
                                    <!-- each-field -->
                                    <div class="col-sm-2 field-one-col">
                                        <label>Street</label>
                                        <input type="text" name="numOfDiningRoom" value="" placeholder="Search Here">
                                    </div>
                                    <!-- each-field -->
                                </div>
                                <!-- for-border-devider -->
                                <div class="border-container">
                                    <div class="border-devider"></div>
                                </div>
                                <!-- for-border-devider -->
                                <div class="row  property-adv-search-sec second-property-adv-search-sec">
        
                                    <!-- each-field -->
                                    <div class="col-auto field-three-col radio-select-sec">
                                        <label>Select Unit</label>
                                        <div class="row radio-field-row">
                                            <div class="col-auto">
                                                <input type="radio" name="measureUnit" value="square-feet"><span>Square feet</span>
                                            </div>
                                            <div class="col-auto">
                                                <input type="radio" name="measureUnit" value="square-meter"><span>Square meter</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- each-field -->
        
        
                                    <!-- each-field -->
                                    <div class="col-sm-4 range-selector">
                                        <div id="app">
                                            <div class="track-container">
                                                <div class="range-main-sec">
                                                    <label>Area</label>
                                                    <div class="range-heighlited">
                                                        <span class="range-value min" id="minVal">0</span> - 
                                                        <span class="range-value max" id="maxVal">5000</span> sq. ft
                                                    </div>
                                                </div>
        
        
                                                <div class="range-track-with-button">
                                                    <div class="track" ref="_vpcTrack"></div>
                                                    <div class="track-highlight" ref="trackHighlight"></div>
                                                    <button class="track-btn track1" ref="track1"></button>
                                                    <button class="track-btn track2" ref="track2"></button>
                                                </div>
        
                                                <div class="range-start-ends">
                                                    <span>0</span>
                                                    <span>5000</span>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                    <!-- each-field -->
                                </div>
                            </div>
                            <!-- advance-search-section-ends -->
                        {{-- </form> --}}
                    </div>
                </div>
                <!-- property-search-section-ends -->

                {{-- <form method="GET" action="{{ url('property-listing') }}"> --}}
                <div class="property-main-filter-sec" data-aos="zoom-in">
                    <div class="row property-main-filter-row only-desk">
                        <div class="col-sm-2 pr-filter-col">
                            <label>Items per page</label>
                            <select name="itemsPerPage" onchange="this.form.submit()">
                                <option value="6" @if ($properties->perPage() == 6) selected @endif >6</option>
                                <option value="12" @if ($properties->perPage() == 12) selected @endif>12</option>
                                <option value="18" @if ($properties->perPage() == 18) selected @endif>18</option>
                            </select>
                        </div>
                        <div class="col-sm-2 pr-filter-col">
                            <label>Sort by</label>
                            <select name="itemsOrderBy" onchange="this.form.submit()">
                                <option value="newest">Newest</option>
                                <option value="price">Price</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>




            <div class="row property-listing-box">
                @foreach ($properties as $property)
                    <!-- each-box -->
                    <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                        <?php $propertySlug = Str::slug($property->propertyName, '-'); ?>
                        <a href="property-detail/{{ $property->sfid }}/{{ $propertySlug }}" class="feature-thumb-bx-main">
                            <div class="hm-feature-thumb-bx for-overlay-hover">
                                {{-- <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt=""> --}}
                                @if ($property->images != "null")
                                    <?php $image =  explode(",",$property->images)?>
                                    <img src="{{ $image[0] }}" alt="" style="width: 484px;height: 306px;">
                                @else
                                    <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="" style="width: 484px;height: 306px;">
                                @endif
                                <div class="for-hover-effect">
                                    <p>{{ $property->shortDescription }}</p>
                                    <span class="button-4 arrow">View</span>
                                </div>
                            </div>
                            <span class="location">{{ $property->city }}, {{ $property->country }}</span>
                            <?php $propName =  explode(", ",$property->propertyName)?>
                            <h4>{{ $propName[0] }}</h4>
                            <span class="price">${{ number_format($property->price) }}</span>
                        </a>
                    </div>
                    <!-- each-box -->
                @endforeach
                {{-- <!-- each-box -->
                <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect">
                                <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a
                                    large, private terrace overlooking the city horizon.</p>
                                <span class="button-4 arrow">View</span>
                            </div>
                        </div>
                        <span class="location">London, United Kingdom</span>
                        <h4>2 Bedroom Apartment</h4>
                        <span class="price">$19,000,000</span>
                    </a>
                </div>
                <!-- each-box -->

                <!-- each-box -->
                <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect">
                                <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a
                                    large, private terrace overlooking the city horizon.</p>
                                <span class="button-4 arrow">View</span>
                            </div>
                        </div>
                        <span class="location">London, United Kingdom</span>
                        <h4>2 Bedroom Apartment</h4>
                        <span class="price">$19,000,000</span>
                    </a>
                </div>
                <!-- each-box -->


                <!-- each-box -->
                <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect">
                                <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a
                                    large, private terrace overlooking the city horizon.</p>
                                <span class="button-4 arrow">View</span>
                            </div>
                        </div>
                        <span class="location">London, United Kingdom</span>
                        <h4>2 Bedroom Apartment</h4>
                        <span class="price">$19,000,000</span>
                    </a>
                </div>
                <!-- each-box -->


                <!-- each-box -->
                <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect">
                                <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a
                                    large, private terrace overlooking the city horizon.</p>
                                <span class="button-4 arrow">View</span>
                            </div>
                        </div>
                        <span class="location">London, United Kingdom</span>
                        <h4>2 Bedroom Apartment</h4>
                        <span class="price">$19,000,000</span>
                    </a>
                </div>
                <!-- each-box -->



                <!-- each-box -->
                <div class="col-sm-4 propert-column-box" data-aos="fade-up">
                    <a href="" class="feature-thumb-bx-main">
                        <div class="hm-feature-thumb-bx for-overlay-hover">
                            <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="">
                            <div class="for-hover-effect">
                                <p>A meticulously renovated residence in the sought-after Finchley Area, complimented with a
                                    large, private terrace overlooking the city horizon.</p>
                                <span class="button-4 arrow">View</span>
                            </div>
                        </div>
                        <span class="location">London, United Kingdom</span>
                        <h4>2 Bedroom Apartment</h4>
                        <span class="price">$19,000,000</span>
                    </a>
                </div>
                <!-- each-box --> --}}

            </div>

            <div class="pagination-sec" data-aos="zoom-in">
                <nav aria-label="...">
                    @if ($properties->count() > 0)
                    <ul class="pagination">
                        <li class="page-item {{ ($properties->currentPage() == 1) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $properties->url(1) }}">
                                <span class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="20.549"
                                        height="11.469" viewBox="0 0 20.549 11.469">
                                        <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                            transform="translate(0.75 1.061)">
                                            <path id="Path_1938" data-name="Path 1938" d="M26.549,18H7.5"
                                                transform="translate(-7.5 -13.326)" fill="none" stroke="#bc8418"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                            <path id="Path_1939" data-name="Path 1939" d="M22.673,7.5,18,12.174l4.673,4.674"
                                                transform="translate(-18 -7.5)" fill="none" stroke="#bc8418"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        </g>
                                    </svg>
                                    Previous</span>
                            </a>
                        </li>
                        @for ($i = 1; $i <= $properties->lastPage(); $i++)
                        <li class="page-item {{ ($properties->currentPage() == $i) ? ' active disabled' : '' }}"><a class="page-link" href="{{ $properties->url($i) }}">{{ $i }}</a></li>
                        {{-- <li class="page-item active" aria-current="page">
                            <span class="page-link">2</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                        @endfor
                        <li class="page-item {{ ($properties->currentPage() == $properties->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $properties->url($properties->currentPage()+1) }}">Next <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20.549" height="11.469" viewBox="0 0 20.549 11.469">
                                    <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                        transform="translate(0.75 1.061)">
                                        <path id="Path_1938" data-name="Path 1938" d="M26.549,18H7.5"
                                            transform="translate(-7.5 -13.326)" fill="none" stroke="#bc8418"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                        <path id="Path_1939" data-name="Path 1939" d="M22.673,7.5,18,12.174l4.673,4.674"
                                            transform="translate(-18 -7.5)" fill="none" stroke="#bc8418"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    @else
                        <h3>No results found</h3>
                    @endif
                </nav>
            </div>

        </div>
    </section>

    <!-- propert-search-listing-section ends -->

    <!-- violet-strip-section-starts -->

    <section class="violet-strip-common " data-aos="zoom-in">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center violet-strip-row">

                <div class="col-auto violet-strip-col">
                    <h2>Ready for a consultation?</h2>
                </div>
                <div class="col-auto violet-strip-col"><a href="{{ url('contact-us') }}" class="button-1 arrow">Contact
                        us</a></div>

            </div>

        </div>

    </section>

    <!-- violet-strip-section-starts -->

    <!-- why-chesterton-section -->

    <section class="space-top space-bottom why-chess-main" data-aos="zoom-in">
        <div class="container">
            <h2>Why Chestertons</h2>
            <div class="row why-ches-row">
                <!-- each-box-starts -->
                <div class="col-sm-6 why-ches-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-auto why-ches-box-sub-col"><img src="{{ asset('./images/why-ches-icon1.svg') }}">
                        </div>
                        <div class="col-9 col-md-8 why-ches-box-sub-col">
                            <h4>Over 200 years of trusted experience</h4>
                            <p>Quisque lectus risus, ornare id nibh ut, interdum consectetur leo. Praesent at iaculis elit.
                                Quisque imperdiet tincidunt risus, vitae facilisis ante malesuada eu. Donec nec augue vitae
                                libero.</p>
                        </div>
                    </div>
                </div>
                <!-- each-box-ends -->

                <!-- each-box-starts -->
                <div class="col-sm-6 why-ches-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-auto why-ches-box-sub-col"><img src="{{ asset('./images/why-ches-icon1.svg') }}">
                        </div>
                        <div class="col-9 col-md-8 why-ches-box-sub-col">
                            <h4>Over 200 years of trusted experience</h4>
                            <p>Quisque lectus risus, ornare id nibh ut, interdum consectetur leo. Praesent at iaculis elit.
                                Quisque imperdiet tincidunt risus, vitae facilisis ante malesuada eu. Donec nec augue vitae
                                libero.</p>
                        </div>
                    </div>
                </div>
                <!-- each-box-ends -->


                <!-- each-box-starts -->
                <div class="col-sm-6 why-ches-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-auto why-ches-box-sub-col"><img src="{{ asset('./images/why-ches-icon1.svg') }}">
                        </div>
                        <div class="col-9 col-md-8 why-ches-box-sub-col">
                            <h4>Over 200 years of trusted experience</h4>
                            <p>Quisque lectus risus, ornare id nibh ut, interdum consectetur leo. Praesent at iaculis elit.
                                Quisque imperdiet tincidunt risus, vitae facilisis ante malesuada eu. Donec nec augue vitae
                                libero.</p>
                        </div>
                    </div>
                </div>
                <!-- each-box-ends -->


                <!-- each-box-starts -->
                <div class="col-sm-6 why-ches-box" data-aos="fade-up">
                    <div class="row">
                        <div class="col-auto why-ches-box-sub-col"><img src="{{ asset('./images/why-ches-icon1.svg') }}">
                        </div>
                        <div class="col-9 col-md-8 why-ches-box-sub-col">
                            <h4>Over 200 years of trusted experience</h4>
                            <p>Quisque lectus risus, ornare id nibh ut, interdum consectetur leo. Praesent at iaculis elit.
                                Quisque imperdiet tincidunt risus, vitae facilisis ante malesuada eu. Donec nec augue vitae
                                libero.</p>
                        </div>
                    </div>
                </div>
                <!-- each-box-ends -->

            </div>
        </div>
    </section>

    <!-- why-chesterton-section -->

    <!-- for-border-devider -->
    <div class="container border-container">
        <div class="border-devider"></div>
    </div>
    <!-- for-border-devider -->

    <!-- our feature property starts here -->
    <section class="hm-our-feature-properties section-space-top section-space-bottom" data-aos="zoom-in">

        <div class="container">

            <div class="section-title ">
                <h2>Our<br>
                    Featured Properties</h2>
                <a href="" class="button-1 arrow">
                    view all
                </a>
            </div>

            <div class="hm-feature-slider-section">
                <!-- Swiper -->
                <div class="swiper our-feature-properties">
                    <div class="swiper-wrapper" style="height: auto;">
                        <!-- each-slider -->
                        @foreach ($featuredProperties as $property)
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
                                        <img src="{{ asset('./images/property-list-thumb.jpg') }}" alt="" style="width: 70px;height: 70px;">
                                    @endif
                                    {{-- <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt=""> --}}
                                    <div class="for-hover-effect"></div>
                                </div>
                                <span class="location">{{ $property->city }}, {{ $property->country }}</span>
                                <h4>{{ $property->propertyName }}</h4>
                                <span class="price">${{ number_format($property->price) }}</span>
                            </a>
                        </div>
                        @endforeach
                        <!-- each-slider-ends -->

                        {{-- <!-- each-slider -->
                        <div class="swiper-slide">
                            <a href="" class="feature-thumb-bx-main">
                                <div class="hm-feature-thumb-bx for-overlay-hover">
                                    <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                    <div class="for-hover-effect"></div>
                                </div>
                                <span class="location">London, United Kingdom</span>
                                <h4>2 Bedroom Apartment</h4>
                                <span class="price">$19,000,000</span>
                            </a>

                        </div>
                        <!-- each-slider-ends -->


                        <!-- each-slider -->
                        <div class="swiper-slide">
                            <a href="" class="feature-thumb-bx-main">
                                <div class="hm-feature-thumb-bx for-overlay-hover">
                                    <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                    <div class="for-hover-effect"></div>
                                </div>
                                <span class="location">London, United Kingdom</span>
                                <h4>2 Bedroom Apartment</h4>
                                <span class="price">$19,000,000</span>
                            </a>

                        </div>
                        <!-- each-slider-ends -->


                        <!-- each-slider -->
                        <div class="swiper-slide">
                            <a href="" class="feature-thumb-bx-main">
                                <div class="hm-feature-thumb-bx for-overlay-hover">
                                    <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                    <div class="for-hover-effect"></div>
                                </div>
                                <span class="location">London, United Kingdom</span>
                                <h4>2 Bedroom Apartment</h4>
                                <span class="price">$19,000,000</span>
                            </a>

                        </div>
                        <!-- each-slider-ends -->


                        <!-- each-slider -->
                        <div class="swiper-slide">
                            <a href="" class="feature-thumb-bx-main">
                                <div class="hm-feature-thumb-bx for-overlay-hover">
                                    <img src="{{ asset('./images/hm-feature-thumb.jpg') }}" alt="">
                                    <div class="for-hover-effect"></div>
                                </div>
                                <span class="location">London, United Kingdom</span>
                                <h4>2 Bedroom Apartment</h4>
                                <span class="price">$19,000,000</span>
                            </a>

                        </div>
                        <!-- each-slider-ends --> --}}

                    </div>

                </div>

                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                        <g id="Group_30733" data-name="Group 30733" transform="translate(-1686.54 -1468.54)">
                            <g id="Ellipse_10" data-name="Ellipse 10" transform="translate(1686.54 1468.54)"
                                fill="none" stroke="#bc8418" stroke-width="1.5">
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
    <!-- our feature property starts here -->

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
            <div class="container border-container">
                <div class="border-devider"></div>
            </div>
            <!-- for-border-devider -->
            <div class="row bottom-discription space-top">
                <div class="row">
                    <div class="cols-m-12" data-aos="fade-up">
                        <h2>About Chestertons</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos
                            et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus
                            est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- popular-serach-section-ends -->

    <!-- mobile-filter-section -->

    <div class="float-filter">
        <a class="filter-button" id="mob-filter-show">
            <img src="{{ asset('./images/filter-icon.svg') }}" alt=""> <span>Filter</span></a>
    </div>

    <!-- mobile-filter-section-ends -->
@endsection

@push('scripts')
    <script>
        $('#all').on('click', function(e) {
            $('#all').addClass('active');
            $('#rent').removeClass('active');
            $('#sale').removeClass('active');
        });
        $('#rent').on('click', function(e) {
            $('#rent').addClass('active');
            $('#sale').removeClass('active');
            $('#all').removeClass('active');
        });
        $('#sale').on('click', function(e) {
            $('#sale').addClass('active');
            $('#all').removeClass('active');
            $('#rent').removeClass('active');
        });
        var saleRentList = document.getElementById("saleRentList");
        var hiddenInput = document.getElementById("saleRentType");
        saleRentList.addEventListener("click", function(event) {
            var selectedOption = event.target.getAttribute("value");
            hiddenInput.value = selectedOption;
        });
    </script>
@endpush
