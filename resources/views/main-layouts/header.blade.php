<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://use.typekit.net/ajp8cni.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-common.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-home.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-N.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-J.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-e.css') }}" rel="stylesheet">


    <title>Chesterton @yield('title')</title>
</head>

<body>
    <!-- header-section-starts -->
    <header class="inner-header">
        <div class="container-fluid">
            <div class="row header-row">
                <div class="col-6 col-xl-2 header-col-left">
                    <a href="{{ url('/') }}" class="logo">
                      <img src="{{ asset('./images/logo.svg')}}" alt="">
                    </a>
                  </div>
                  <div class="col-6 hm-manu">
                <div class="hamburger" id="menu-toggle">
                                <div class="top-bun"></div>
                                <div class="meat"></div>
                                <div class="bottom-bun"></div>
                            </div>
                </div>
                {{-- <div class="col-2 header-col-left">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('./images/logo.svg')}}" alt="">
                    </a>
                </div> --}}
                {{-- <div class="col-10 header-col-right menu-main-wrap hide" id="slide-nav">
                    <div class="close-menu-div">
                      <div class="close-menu" id="close-menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.58" height="15.58" viewBox="0 0 15.58 15.58">
                          <g id="Group_30972" data-name="Group 30972" transform="translate(-712.045 -893.087) rotate(45)">
                            <path id="Path_1925" data-name="Path 1925" d="M1087-234v18.033" transform="translate(59.016 353)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <path id="Path_1926" data-name="Path 1926" d="M0,0V18.033" transform="translate(1155.033 128.016) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                          </g>
                        </svg>
                
                      </div>
                    </div>
                    <div class="menu-sec">
                        <ul class="border-anim">
                            <li><a href="{{ url('/property-listing') }}">Properties</a></li>
                            <li><a href="{{ url('/service') }}">Services</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li class="menu-item-has-child"><a href="{{ url('/global-network') }}">Global Network</a>
                                <div class="menu-subs">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h1>test</h1>
                                        </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('/foundations') }}">Foundation</a></li>
                            <li><a href="{{ url('/stories-listing') }}">Stories</a></li>
                            <li class="menu-item-has-child"><a href="{{ url('/career') }}">Careers</a>
                                <div class="menu-subs">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h1>test</h1>
                                        </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-devider"></div>

                    <div class="social-get-touch">

                        <a href="{{ url('/contact-us') }}" class="button-1">
                            GET IN TOUCH
                        </a>

                        <div class="sc-icons-mob">
                            <a href="" >
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g id="Group_31944" data-name="Group 31944" transform="translate(-60 -640)">
                                  <circle id="Ellipse_39" data-name="Ellipse 39" cx="16" cy="16" r="16" transform="translate(60 640)" fill="#bc8418"/>
                                  <g id="Icon_feather-mail" data-name="Icon feather-mail" transform="translate(69 651)">
                                    <path id="Path_2656" data-name="Path 2656" d="M4.314,6h10.51a1.318,1.318,0,0,1,1.314,1.314V15.2a1.318,1.318,0,0,1-1.314,1.314H4.314A1.318,1.318,0,0,1,3,15.2V7.314A1.318,1.318,0,0,1,4.314,6Z" transform="translate(-3 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                    <path id="Path_2657" data-name="Path 2657" d="M16.137,9,9.569,13.6,3,9" transform="translate(-3 -7.686)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                  </g>
                                </g>
                              </svg>
                  
                            <span>global-enquiries@chestertons.com</span>
                            </a>
                          </div>
                  
                          <div class="sc-icons-mob">
                            <a href="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <g id="Group_31334" data-name="Group 31334" transform="translate(-1252.666 -47.916)">
                                  <circle id="Ellipse_39" data-name="Ellipse 39" cx="16" cy="16" r="16" transform="translate(1252.666 47.916)" fill="#bc8418"/>
                                  <path id="Icon_feather-phone-call" data-name="Icon feather-phone-call" d="M11.584,4.1a3.253,3.253,0,0,1,2.57,2.57M11.584,1.5a5.855,5.855,0,0,1,5.172,5.165m-.651,5.191v1.952a1.3,1.3,0,0,1-1.418,1.3,12.874,12.874,0,0,1-5.614-2,12.685,12.685,0,0,1-3.9-3.9,12.874,12.874,0,0,1-2-5.64A1.3,1.3,0,0,1,4.468,2.151H6.419a1.3,1.3,0,0,1,1.3,1.119A8.352,8.352,0,0,0,8.176,5.1,1.3,1.3,0,0,1,7.883,6.47L7.057,7.3a10.408,10.408,0,0,0,3.9,3.9l.826-.826a1.3,1.3,0,0,1,1.373-.293,8.353,8.353,0,0,0,1.828.455A1.3,1.3,0,0,1,16.105,11.856Z" transform="translate(1258.998 55.917)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
                                </g>
                              </svg>
                              <span>+971 4 3810200</span>            
                            </a>
                          </div>

                    </div>
                </div> --}}
                <div class="col-10 header-col-right menu-main-wrap hide" id="slide-nav">


                    <div class="menu-sec">
                        <ul class="border-anim">
                            <li><a href="{{ url('/property-listing') }}">Properties</a></li>
                            {{-- <li  class="menu-item-has-children menu-item-has-child"><a href="{{ url('/service') }}">Services</a> --}}
                                <li class="menu-item-has-children"><a href="">Services</a>
                                    <ul class="menu-subs one-column-sub-menu">
                                        @foreach ($services as $service)   
                                        <li ><a href="{{ url('/property-listing', $service->slug) }}">{{ $service->titles }}</a></li>
                                        @endforeach
                                      {{-- <li ><a href="">Service2</a></li>
                                      <li ><a href="">Service3</a></li>
                                      <li ><a href="">Service4</a></li> --}}
                                    </ul>
                                    
                                </li>
                                <div class="menu-subs">
                                    <div class="row">
                                        <div class="col-sm-4 menu-sec-left">
                                            <div class="nav flex-column nav-pills menu-sec-tab-links  me-3"
                                                id="menu-tab1" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="menu-1" data-bs-toggle="pill" data-bs-target="#menu-one" type="button" role="tab" aria-controls="menu-one"  aria-selected="true"><span>Region</span></button>
                                                {{-- @foreach ($globalNetwork as $item)
                                                    <form method="get" action="{{ url('global-network',$item->banner_title) }}">
                                                        <button type="submit" class="nav-link" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" type="button" role="tab" aria-controls="menu-child-one" aria-selected="true"><span>{{ $item->banner_title }}</span></button>
                                                    </form>
                                                @endforeach --}}
                                                <button class="nav-link" id="menu-2" data-bs-toggle="pill" data-bs-target="#menu-two" type="button" role="tab" aria-controls="menu-two" aria-selected="false"><span>Asia</span></button>
                                                <button class="nav-link" id="menu-3" data-bs-toggle="pill" data-bs-target="#menu-three" type="button" role="tab" aria-controls="menu-three" aria-selected="false"><span>Caribbean</span></button>
                                                <button class="nav-link" id="menu-4" data-bs-toggle="pill" data-bs-target="#menu-four" type="button" role="tab" aria-controls="menu-four" aria-selected="false"><span>Europe</span></button>
                                                <button class="nav-link" id="menu-5" data-bs-toggle="pill" data-bs-target="#menu-five" type="button" role="tab" aria-controls="menu-five" aria-selected="false"><span>MENA</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li class="menu-item-has-children menu-item-has-child"><a href="#">Global Network</a>
                                <div class="menu-subs">
                                    <div class="row">
                                        <div class="col-sm-4 menu-sec-left">
                                            <div class="nav flex-column nav-pills menu-sec-tab-links  me-3"
                                                id="menu-tab1" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="menu-1" data-bs-toggle="pill" data-bs-target="#menu-one" type="button" role="tab" aria-controls="menu-one"  aria-selected="true"><span>Region</span></button>
                                                {{-- @foreach ($globalNetwork as $item)
                                                    <form method="get" action="{{ url('global-network',$item->banner_title) }}">
                                                        <button type="submit" class="nav-link" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" type="button" role="tab" aria-controls="menu-child-one" aria-selected="true"><span>{{ $item->banner_title }}</span></button>
                                                    </form>
                                                @endforeach --}}
                                                <button class="nav-link" id="menu-2" data-bs-toggle="pill" data-bs-target="#menu-two" type="button" role="tab" aria-controls="menu-two" aria-selected="false"><span>Asia</span></button>
                                                <button class="nav-link" id="menu-3" data-bs-toggle="pill" data-bs-target="#menu-three" type="button" role="tab" aria-controls="menu-three" aria-selected="false"><span>Caribbean</span></button>
                                                <button class="nav-link" id="menu-4" data-bs-toggle="pill" data-bs-target="#menu-four" type="button" role="tab" aria-controls="menu-four" aria-selected="false"><span>Europe</span></button>
                                                <button class="nav-link" id="menu-5" data-bs-toggle="pill" data-bs-target="#menu-five" type="button" role="tab" aria-controls="menu-five" aria-selected="false"><span>MENA</span></button>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 menu-sec-right">
                                            <div class="tab-content" id="menu-child-tabContent1">



                                                <div class="tab-pane fade show active" id="menu-one" role="tabpanel"
                                                    aria-labelledby="menu-1">

                                                    <div class="reginaol-global-sec">
                                                        <div class="row">
                                                            <div class="col-sm-5 reginaol-global-left">
                                                                <h5>Our Global Presence. Your Local Expertise.</h5>
                                                                <p>Chestertons' Contacts And Expertise Covers Every Corner Of The Globe. Please Select Your Preferred Region To Continue.</p>
                                                            </div>
                                                            <div class="col-sm-7 reginaol-global-right  d-flex justify-content-end">
                                                                <img src="{{ asset('./images/global-image.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <!-- Asia Country Listing Start -->
                                                <div class="tab-pane fade" id="menu-two" role="tabpanel" aria-labelledby="menu-2">
                                                    <div class="row">
                                                        <div class="col-sm-4 menu-sec-child-left">
                                                            <span class="subtitle-menu">Country</span>
                                                            <div class="nav flex-column nav-pills menu-sec-tab-links me-3" id="menu-child-tab1" role="tablist" aria-orientation="vertical">
                                                                @foreach ($fetchCountry as $item)
                                                                <form method="get" action="{{ url('global-network',$item->contry_name) }}">
                                                                    @if (in_array($item->country_sfid, $expAsia))
                                                                        <button type="submit" class="nav-link" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" role="tab" aria-controls="menu-child-one" aria-selected="true">
                                                                            <span>
                                                                                {{ $item->contry_name }}
                                                                            </span>
                                                                        </button>
                                                                    @endif
                                                                </form>
                                                                @endforeach
                                                                {{-- <button class="nav-link" id="menu-child-2" data-bs-toggle="pill" data-bs-target="#menu-child-two" type="button" role="tab" aria-controls="menu-child-two" aria-selected="false"><span>Profile</span></button>
                                                                <button class="nav-link" id="menu-child-3" data-bs-toggle="pill" data-bs-target="#menu-child-three" type="button" role="tab" aria-controls="menu-child-three" aria-selected="false"><span>Messages</span></button>
                                                                <button class="nav-link" id="menu-child-4" data-bs-toggle="pill" data-bs-target="#menu-child-four" type="button" role="tab" aria-controls="menu-child-four" aria-selected="false"><span>Settings</span></button> --}}
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-8 menu-sec-child-right">

                                                            <div class="tab-content" id="menu-child-tabContent1">
                                                                <div class="tab-pane fade show active" id="menu-child-one" role="tabpanel" aria-labelledby="menu-child-1">
                                                                    <div class="menu-country-section">
                                                                        <img src="{{ asset('./images/country-one.jpg') }}"
                                                                            alt="">
                                                                        <h5>Barbados</h5>
                                                                        <p>Barbados is a coral island, pushed out of sea
                                                                            by volcanic activity in a far away time. On
                                                                            the West Coast, beaches of fine white
                                                                            sand...</p>
                                                                    </div>

                                                                </div>
                                                                <div class="tab-pane fade" id="menu-child-two" role="tabpanel" aria-labelledby="menu-child-2"> 2 </div>
                                                                <div class="tab-pane fade" id="menu-child-three" role="tabpanel" aria-labelledby="menu-child-3"> 3 </div>
                                                                <div class="tab-pane fade" id="menu-child-four" role="tabpanel" aria-labelledby="menu-child-4"> 4 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Asia Country Listing End -->

                                                <!-- Caribbean Country Listing Start -->
                                                <div class="tab-pane fade" id="menu-three" role="tabpanel" aria-labelledby="menu-3">
                                                    <div class="row">
                                                        <div class="col-sm-4 menu-sec-child-left">
                                                            <span class="subtitle-menu">Country</span>
                                                            <div class="nav flex-column nav-pills menu-sec-tab-links me-3" id="menu-child-tab1" role="tablist" aria-orientation="vertical">
                                                                @foreach ($fetchCountry as $item)
                                                                <form method="get" action="{{ url('global-network',$item->contry_name) }}">
                                                                    @if (in_array($item->country_sfid, $expCaribbean))
                                                                        <button type="submit" class="nav-link" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" type="button" role="tab" aria-controls="menu-child-one" aria-selected="true">
                                                                            <span>
                                                                                {{ $item->contry_name }}
                                                                            </span>
                                                                        </button>
                                                                    @endif
                                                                </form>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 menu-sec-child-right">

                                                            <div class="tab-content" id="menu-child-tabContent1">
                                                                <div class="tab-pane fade show active" id="menu-child-one" role="tabpanel" aria-labelledby="menu-child-1">
                                                                    <div class="menu-country-section">
                                                                        <img src="{{ asset('./images/country-one.jpg') }}"
                                                                            alt="">
                                                                        <h5>Barbados</h5>
                                                                        <p>Barbados is a coral island, pushed out of sea
                                                                            by volcanic activity in a far away time. On
                                                                            the West Coast, beaches of fine white
                                                                            sand...</p>
                                                                    </div>

                                                                </div>
                                                                <div class="tab-pane fade" id="menu-child-two" role="tabpanel" aria-labelledby="menu-child-2"> 2 </div>
                                                                <div class="tab-pane fade" id="menu-child-three" role="tabpanel" aria-labelledby="menu-child-3"> 3 </div>
                                                                <div class="tab-pane fade" id="menu-child-four" role="tabpanel" aria-labelledby="menu-child-4"> 4 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <!-- Caribbean Country Listing End -->

                                                <!-- Europe Country Listing Start -->
                                                <div class="tab-pane fade" id="menu-four" role="tabpanel" aria-labelledby="menu-4">
                                                    <div class="row">
                                                        <div class="col-sm-4 menu-sec-child-left">
                                                            <span class="subtitle-menu">Country</span>
                                                            <div class="nav flex-column nav-pills menu-sec-tab-links me-3" id="menu-child-tab1" role="tablist" aria-orientation="vertical">
                                                                @foreach ($fetchCountry as $item)
                                                                <form method="get" action="{{ url('global-network',$item->contry_name) }}">
                                                                    @if (in_array($item->country_sfid, $expEurope))
                                                                        <button type="submit" class="nav-link active" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" type="button" role="tab" aria-controls="menu-child-one" aria-selected="true">
                                                                            <span>
                                                                                {{ $item->contry_name }}
                                                                            </span>
                                                                        </button>
                                                                    @endif
                                                                </form>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 menu-sec-child-right">
    
                                                            <div class="tab-content" id="menu-child-tabContent1">
                                                                <div class="tab-pane fade show active" id="menu-child-one" role="tabpanel" aria-labelledby="menu-child-1">
                                                                    <div class="menu-country-section">
                                                                        <img src="{{ asset('./images/country-one.jpg') }}"
                                                                            alt="">
                                                                        <h5>Barbados</h5>
                                                                        <p>Barbados is a coral island, pushed out of sea
                                                                            by volcanic activity in a far away time. On
                                                                            the West Coast, beaches of fine white
                                                                            sand...</p>
                                                                    </div>
    
                                                                </div>
                                                                <div class="tab-pane fade" id="menu-child-two" role="tabpanel" aria-labelledby="menu-child-2"> 2 </div>
                                                                <div class="tab-pane fade" id="menu-child-three" role="tabpanel" aria-labelledby="menu-child-3"> 3 </div>
                                                                <div class="tab-pane fade" id="menu-child-four" role="tabpanel" aria-labelledby="menu-child-4"> 4 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Europe Country Listing End -->
                                                
                                                <!-- Mena Country Listing Start -->
                                                <div class="tab-pane fade" id="menu-five" role="tabpanel" aria-labelledby="menu-5">
                                                    <div class="row">
                                                        <div class="col-sm-4 menu-sec-child-left">
                                                            <span class="subtitle-menu">Country</span>
                                                            <div class="nav flex-column nav-pills menu-sec-tab-links me-3" id="menu-child-tab1" role="tablist" aria-orientation="vertical">
                                                                @foreach ($fetchCountry as $item)
                                                                <form method="get" action="{{ url('global-network',$item->contry_name) }}">
                                                                    @if (in_array($item->country_sfid, $expMena))
                                                                        <button type="submit" class="nav-link active" id="menu-child-1" data-bs-toggle="pill" data-bs-target="#menu-child-one" type="button" role="tab" aria-controls="menu-child-one" aria-selected="true">
                                                                            <span>
                                                                                {{ $item->contry_name }}
                                                                            </span>
                                                                        </button>
                                                                    @endif
                                                                </form>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 menu-sec-child-right">

                                                            <div class="tab-content" id="menu-child-tabContent1">
                                                                <div class="tab-pane fade show active" id="menu-child-one" role="tabpanel" aria-labelledby="menu-child-1">
                                                                    <div class="menu-country-section">
                                                                        <img src="{{ asset('./images/country-one.jpg') }}"
                                                                            alt="">
                                                                        <h5>Barbados</h5>
                                                                        <p>Barbados is a coral island, pushed out of sea
                                                                            by volcanic activity in a far away time. On
                                                                            the West Coast, beaches of fine white
                                                                            sand...</p>
                                                                    </div>

                                                                </div>
                                                                <div class="tab-pane fade" id="menu-child-two" role="tabpanel" aria-labelledby="menu-child-2"> 2 </div>
                                                                <div class="tab-pane fade" id="menu-child-three" role="tabpanel" aria-labelledby="menu-child-3"> 3 </div>
                                                                <div class="tab-pane fade" id="menu-child-four" role="tabpanel" aria-labelledby="menu-child-4"> 4 </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mena Country Listing End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('/foundations') }}">Foundation</a></li>
                            <li><a href="{{ url('/stories-listing') }}">Stories</a></li>
                            <li class="menu-item-has-child"><a href="{{ url('/career') }}">Careers</a>
                                <div class="menu-subs">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h1>test</h1>
                                        </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="menu-devider"></div>

                    <div class="social-get-touch">

                        <a href="{{ url('/contact-us') }}" class="button-1">
                            GET IN TOUCH
                        </a>

                        <div class="sc-icons">
                            <a href="tel:+97143810200" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                    viewBox="0 0 70 70">
                                    <g id="Group_31313" data-name="Group 31313" transform="translate(10816 23657)">
                                        <g id="Ellipse_39" data-name="Ellipse 39" transform="translate(-10816 -23657)"
                                            fill="none" stroke="#bc8418" stroke-width="1.5">
                                            <circle cx="35" cy="35" r="35" stroke="none">
                                            </circle>
                                            <circle cx="35" cy="35" r="34.25" fill="none">
                                            </circle>
                                        </g>
                                        <path id="Icon_feather-phone-call" data-name="Icon feather-phone-call"
                                            d="M17.208,5.841A5.426,5.426,0,0,1,21.5,10.127M17.208,1.5a9.767,9.767,0,0,1,8.627,8.617m-1.085,8.66v3.256a2.17,2.17,0,0,1-2.366,2.17,21.476,21.476,0,0,1-9.365-3.332A21.162,21.162,0,0,1,6.508,14.36,21.476,21.476,0,0,1,3.177,4.951a2.17,2.17,0,0,1,2.16-2.366H8.592a2.17,2.17,0,0,1,2.17,1.867,13.934,13.934,0,0,0,.76,3.049,2.17,2.17,0,0,1-.488,2.29L9.655,11.169a17.363,17.363,0,0,0,6.511,6.511L17.545,16.3a2.17,2.17,0,0,1,2.29-.488,13.934,13.934,0,0,0,3.049.76A2.17,2.17,0,0,1,24.751,18.777Z"
                                            transform="translate(-10795.502 -23634.855)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>



                        <div class="sc-icons">
                            <a href="mailto:global-enquiries@chestertons.com" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                    viewBox="0 0 70 70">
                                    <g id="Group_31312" data-name="Group 31312" transform="translate(10728 23657)">
                                        <g id="Ellipse_40" data-name="Ellipse 40"
                                            transform="translate(-10728 -23657)" fill="none" stroke="#bc8418"
                                            stroke-width="1.5">
                                            <circle cx="35" cy="35" r="35" stroke="none">
                                            </circle>
                                            <circle cx="35" cy="35" r="34.25" fill="none">
                                            </circle>
                                        </g>
                                        <g id="Icon_feather-mail" data-name="Icon feather-mail"
                                            transform="translate(-10708.969 -23638.375)">
                                            <path id="Path_2656" data-name="Path 2656"
                                                d="M5.594,6h20.75a2.6,2.6,0,0,1,2.594,2.594V24.156a2.6,2.6,0,0,1-2.594,2.594H5.594A2.6,2.6,0,0,1,3,24.156V8.594A2.6,2.6,0,0,1,5.594,6Z"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"></path>
                                            <path id="Path_2657" data-name="Path 2657"
                                                d="M28.938,9,15.969,18.078,3,9" transform="translate(0 -0.406)"
                                                fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div id="main-content" class="site-main clearfix">

                @if (Session::has('success'))
                <section class="popup">
                    <div class="popup-inner">
                        <div class="popup-content">
                            <div class="content alert alert-success text-center" id="success-content">
                                {{ Session::get('success') }}
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

    </header>
    <!-- header-section-ends -->

    
  <!-- menu-custom-js-starts -->
<script>
    const hamBurger = document.getElementById('menu-toggle');
    const slideNav = document.getElementById('slide-nav');
    const closeNav = document.getElementById('close-menu');
    const overlay = document.getElementById('overlay');
    const header = document.getElementById('header-sec');
    
    hamBurger.addEventListener('click', offcanvasMenu);
    closeNav.addEventListener('click', hideOffcanvasMenu);
    
    
    function offcanvasMenu(){
      slideNav.classList.add('show');
      overlay.classList.add('show');
      header.classList.add('show');
    }
    
    function hideOffcanvasMenu(){
      slideNav.classList.remove('show');
      overlay.classList.remove('show');
      header.classList.remove('show');
    }
    
    // for-submenu
    
    let menuChildItem = document.querySelectorAll('.menu-item-has-children');
    
    menuChildItem.forEach(classAdd);
    
    // creating arrow elem function
    
    function classAdd(items){
      const childMenu = document.createElement("span");
      childMenu.classList.add('res-submenu')
      items.appendChild(childMenu);
    }
    
    // click handler arrow elem function
    
    let subMenu = document.querySelectorAll('.res-submenu');
    subMenu.forEach(subMenuHandler);
    function subMenuHandler(items){
      items.addEventListener('click', function(){
        this.parentNode.classList.toggle('active');
        this.classList.toggle('active')
      })
    }
      </script>
    <!-- menu-custom-js-ends -->


    <div class="page-content">
        <!-- Main Content -->
        @yield('content')
        <!-- Main Content Ends -->
    </div>

    @extends('main-layouts.footer')