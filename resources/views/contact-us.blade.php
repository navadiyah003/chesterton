@extends('main-layouts.header')


<!-- for country select -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css'>
<!-- for country select -->
<link href="{{ asset('css/style-e.css') }}" rel="stylesheet">
<!-- for scrollbar -->
<link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

@section('content')

<!-- Banner Section Starts here -->
<section class="banner inner-banner">
    <img class="banner-img only-desk"
        src="{{ asset('/admin/uploads/offices/main_image/'.$contact_detail->main_image) }}" alt="">

    <img class="banner-img only-mob" src="{{ asset('./images/contact-banner-mob.jpg') }}" alt="">
    <div class="overlay">
        <h1 data-aos="zoom-in">{{ $contact_detail->title }}</h1>
    </div>
</section>
<!-- Banner Section Starts here -->

<!-- section-contact-form-section -->
<section class="section-space-top section-space-bottom  contact-form-section">
    <div class="container">

        <div id="main-content" class="site-main clearfix">
            @if (Session::has('form-submit'))
            <section class="popup">
                <div class="popup-inner">
                    <div class="popup-content">
                        <div class="content alert alert-success text-center" id="success-content">
                            {{ Session::get('form-submit') }}
                        </div>
                    </div>
                </div>
            </section>
            @elseif (Session::has('error'))
            <section class="popup">
                <div class="popup-inner">
                    <div class="popup-content">
                        <div class="content alert alert-danger text-center">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                </div>
            </section>
            @endif
        </div>
        <!-- contact-tab-starts -->
        <div class="tab-strucutre-1 section-space-bottom" data-aos="zoom-in">
            <ul>
                <li><a href="" class="active">All</a></li>
                <li><a href="" class="">Properties For Rent</a></li>
                <li><a href="" class="">Properties For Sale</a></li>
            </ul>
        </div>
        <!-- contact-tab-starts -->


        <div class="row form-sec-row justify-content-between">

            <!-- left-section -->

            <div class="col-sm-8 col-12 form-section" data-aos="zoom-in">
                <form action="{{ url('add-inquiry')}}" method="POST">
                    @csrf
                    <div class="row form-div-row">
                        <div class="col-sm-12 form-div-field">
                            <label>Title</label>
                            <input type="text" name="title" id="title" placeholder="Title">
                            @if($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-sm-6 form-div-field">
                            <label>First Name</label>
                            <input type="text" name="f_name" id="f_name" placeholder="Enter your first name here">
                            @if($errors->has('f_name'))
                            <div class="text-danger">{{ $errors->first('f_name') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-6 form-div-field">
                            <label>Last Name</label>
                            <input type="text" name="l_name" id="l_name" placeholder="Enter your last name here">
                            @if($errors->has('l_name'))
                            <div class="text-danger">{{ $errors->first('l_name') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-6 form-div-field">
                            <label>Email Address</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email address here">
                            @if($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-6 form-div-field">
                            <label>Phone Number</label>
                            <input type="tel" id="mobile_code" class="form-control" name="mobile_code"
                                placeholder="Phone Number">
                            @if($errors->has('mobile_code'))
                            <div class="text-danger">{{ $errors->first('mobile_code') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-6 form-div-field">
                            <label>Address</label>
                            <input type="text" name="address" id="address" placeholder="Enter your city here">
                            @if($errors->has('address'))
                            <div class="text-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-6 form-div-field">
                            <label>Postcode / ZIP</label>
                            <input type="text" name="zipcode" id="zipcode" placeholder="Enter your postcode / ZIP here">
                            @if($errors->has('zipcode'))
                            <div class="text-danger">{{ $errors->first('zipcode') }}</div>
                            @endif
                        </div>

                        <div class="col-sm-12 form-div-field">
                            <label>How can we help?</label>
                            <textarea name="contact_help" id="contact_help" placeholder="What can we help?"></textarea>
                            @if($errors->has('contact_help'))
                            <div class="text-danger">{{ $errors->first('contact_help') }}</div>
                            @endif
                        </div>


                        <div class="col-auto">
                            <div class="button-1 submit arrow">
                                <input type="submit" name="submit" value="submit" placeholder="Submit">
                            </div>
                        </div>

                        <div class="col-sm-12 section-space-top">
                            <p>Yes, I would like more information from Chestertons. Please use and/or share my
                                information
                                with a Chestertons agent to contact me about my real estate requirements.
                            </p>
                            <p>By clicking Submit, I agree that a Chestertons agent may contact me by phone, email or
                                text
                                message including by automated means about real estate services, and that I can access
                                real
                                estate services without providing my phone number. I acknowledge that I have read and
                                agree
                                to the Terms & Conditions and Privacy Policy.</p>
                        </div>

                    </div>

                </form>
            </div>

            <!-- left-section -->
            <!-- right-section -->
            <div class="col-sm-3 col-12 address-sec" data-aos="zoom-in">
                <div class="address-box">
                    <h3>Head Office</h3>
                    <p>{{ $contact_detail->office_address }}</p>
                    <div class="border-devider devider"></div>
                </div>

                <div class="address-box">
                    <h3>Get in touch</h3>
                    <span class="icon-plus-content"> <img class="icon-plus-content-icons"
                            src="{{ asset('./images/mail-icon.svg') }}"> <a
                            href="mailto:{{ $contact_detail->office_email }}">{{ $contact_detail->office_email }}</a></span>
                    <div class="border-devider devider"></div>
                </div>

                <div class="address-box">
                    <h3>Follow us</h3>
                    <div class="social-icons-one">

                        <a href="{{ $contact_detail->facebook }}" target="_blank" class="soc-link messenger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                <g id="Group_31755" data-name="Group 31755" transform="translate(-1353 -1674)">
                                    <rect id="Rectangle_1543" data-name="Rectangle 1543" width="37" height="37" rx="8"
                                        transform="translate(1353 1674)" fill="#bc8418" />
                                    <path id="Path_2800" data-name="Path 2800"
                                        d="M47,260.342h4.5V249.073h3.139l.335-3.773H51.5v-2.148c0-.889.179-1.241,1.039-1.241h2.435V238H51.859C48.51,238,47,239.47,47,242.293V245.3H44.66v3.82H47Z"
                                        transform="translate(1321.34 1443.004)" fill="#fff" />
                                </g>
                            </svg>


                        </a>
                        <a href="{{ $contact_detail->linkedin }}" target="_blank" class="soc-link mail">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                <g id="Group_31757" data-name="Group 31757" transform="translate(-1411 -1674)">
                                    <rect id="Rectangle_1544" data-name="Rectangle 1544" width="37" height="37" rx="8"
                                        transform="translate(1411 1674)" fill="#bc8418" />
                                    <g id="Group_31756" data-name="Group 31756" transform="translate(1420 1683)">
                                        <g id="Group_31750" data-name="Group 31750" transform="translate(0 0)">
                                            <rect id="Rectangle_1541" data-name="Rectangle 1541" width="3.826"
                                                height="12.359" transform="translate(0.367 6.18)" fill="#fff" />
                                            <path id="Path_2795" data-name="Path 2795"
                                                d="M215.505,300.584a2.281,2.281,0,1,0-2.262-2.281A2.272,2.272,0,0,0,215.505,300.584Z"
                                                transform="translate(-213.243 -296.022)" fill="#fff" />
                                        </g>
                                        <path id="Path_2796" data-name="Path 2796"
                                            d="M225.429,309.714c0-1.737.8-2.773,2.331-2.773,1.406,0,2.082.994,2.082,2.773V316.2h3.808v-7.825c0-3.31-1.876-4.911-4.5-4.911a4.309,4.309,0,0,0-3.724,2.042v-1.665H221.76V316.2h3.669Z"
                                            transform="translate(-215.121 -297.663)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <a href="{{ $contact_detail->instagram }}" target="_blank" class="soc-link wtsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
                                <g id="Group_31759" data-name="Group 31759" transform="translate(-1468 -1674)">
                                    <rect id="Rectangle_1545" data-name="Rectangle 1545" width="37" height="37" rx="8"
                                        transform="translate(1468 1674)" fill="#bc8418" />
                                    <g id="Group_31758" data-name="Group 31758" transform="translate(1476 1682)">
                                        <path id="Path_2797" data-name="Path 2797"
                                            d="M104.849,241.153c2.706,0,3.027.01,4.1.059a5.6,5.6,0,0,1,1.882.348,3.36,3.36,0,0,1,1.924,1.924,5.612,5.612,0,0,1,.348,1.882c.049,1.069.059,1.389.059,4.1s-.01,3.027-.059,4.1a5.612,5.612,0,0,1-.348,1.882,3.354,3.354,0,0,1-1.924,1.924,5.611,5.611,0,0,1-1.882.349c-1.069.048-1.389.058-4.1.058s-3.027-.01-4.1-.058a5.607,5.607,0,0,1-1.882-.349,3.348,3.348,0,0,1-1.924-1.924,5.607,5.607,0,0,1-.349-1.882c-.048-1.069-.059-1.389-.059-4.1s.011-3.027.059-4.1a5.607,5.607,0,0,1,.349-1.882,3.354,3.354,0,0,1,1.924-1.924,5.592,5.592,0,0,1,1.882-.348c1.069-.049,1.389-.059,4.1-.059m0-1.826c-2.752,0-3.1.012-4.179.061a7.423,7.423,0,0,0-2.46.472,5.181,5.181,0,0,0-2.964,2.964,7.448,7.448,0,0,0-.471,2.46c-.049,1.081-.061,1.426-.061,4.179s.012,3.1.061,4.179a7.444,7.444,0,0,0,.471,2.46,5.185,5.185,0,0,0,2.964,2.964,7.443,7.443,0,0,0,2.46.471c1.081.049,1.426.061,4.179.061s3.1-.012,4.179-.061a7.447,7.447,0,0,0,2.46-.471,5.181,5.181,0,0,0,2.964-2.964,7.422,7.422,0,0,0,.472-2.46c.049-1.081.061-1.426.061-4.179s-.012-3.1-.061-4.179a7.426,7.426,0,0,0-.472-2.46,5.177,5.177,0,0,0-2.964-2.964,7.427,7.427,0,0,0-2.46-.472c-1.081-.049-1.426-.061-4.179-.061"
                                            transform="translate(-94.714 -239.327)" fill="#fff" />
                                        <path id="Path_2798" data-name="Path 2798"
                                            d="M106.244,245.653a5.2,5.2,0,1,0,5.2,5.2,5.2,5.2,0,0,0-5.2-5.2m0,8.582a3.378,3.378,0,1,1,3.378-3.378,3.378,3.378,0,0,1-3.378,3.378"
                                            transform="translate(-96.109 -240.722)" fill="#fff" />
                                        <path id="Path_2799" data-name="Path 2799"
                                            d="M115.529,245.045a1.216,1.216,0,1,1-1.217-1.217,1.217,1.217,0,0,1,1.217,1.217"
                                            transform="translate(-98.767 -240.32)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>


            </div>
            <!-- right-section -->

        </div>


    </div>


</section>
<!-- section-contact-form-section-ends -->


<!-- section-map-section -->

<section class="contact-map-section section-space-top section-space-bottom">
    <div class="container">
        <div class="disc text-center" data-aos="zoom-in">
            <h2>Our Global Presence</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
        </div>
        <div class="map-scrolling-div-mobile" id="content-6" data-aos="zoom-in">
            <div class="map-point-section">
                <img class="map-image" src="{{ asset('./images/map-image.svg') }}" alt="">
                <div class="map-overlay-sec">
                    <div class="map-pointer-realtive-div">
                        <!-- each-pointer -->
                        <div class="pointer pointer-1">
                            <div class="pointer-title">MENA</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-2">
                            <div class="pointer-title">MENA2</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->


                        <!-- each-pointer -->
                        <div class="pointer pointer-3">
                            <div class="pointer-title">MENA3</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->


                        <!-- each-pointer -->
                        <div class="pointer pointer-4">
                            <div class="pointer-title">MENA4</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-5">
                            <div class="pointer-title">MENA5</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-6">
                            <div class="pointer-title">MENA6</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->


                        <!-- each-pointer -->
                        <div class="pointer pointer-7">
                            <div class="pointer-title">MENA7</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-8">
                            <div class="pointer-title">MENA8</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-9">
                            <div class="pointer-title">MENA9</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->

                        <!-- each-pointer -->
                        <div class="pointer pointer-10">
                            <div class="pointer-title">MENA10</div>
                            <div class="blob white"></div>

                        </div>
                        <!-- each-pointer -->


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- section-map-section ends -->


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

<style scoped>
.mCustomScrollBox {
    height: auto;
}
</style>