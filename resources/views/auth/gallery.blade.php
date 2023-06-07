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
    <link href="{{ asset('css/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('css/aos.css')}}" rel="stylesheet">
    <link rel ="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.css') }}">
    <link href="{{ asset('css/style-common.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-home.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-J.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-e.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-N.css')}}" rel="stylesheet">


    <title>Chestertons</title>
</head>

<body>


    <!--gallery-header-section-starts -->
    <section class="">
        <div class="container">
            <div class="row the-way-header gallery-header">
                <div class="col logo-login"> <img class="img-fluid" src="{{ asset('images/asset-login-logo.svg')}}"> </div>
                <div class="col">
                    <a class="user-log" href="{{ url('/the-way-login') }}"><img class="img-fluid" src="{{ asset('images/user-log.svg')}}"> <span>Hi,
                        {{ $user->name }}</span></a>
                    <a class="sign-out-log" href="{{ url('/logout') }}"><img class="img-fluid" src="{{ asset('images/log-out-icon.svg') }}">
                        <span>Sign
                            out</span></a>
                </div>

            </div>
        </div>
    </section>
    <!--gallery-header-section-ends -->


    <!--galler-section-starts-->
    <section class="galler-section space-top" data-aos="fade-up">

        <div class="container">

            <div class="row">

                <div class="col-xl-3 col-lg-4">

                    <a class="filter-btn collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample">
                        Filter
                    </a>

                    <div class="collapse gallery-acordio-for-mobile-fixed" id="collapseExample">

                        <div class="gallery-left-acordion-sec">

                            <div class="filter-label">
                                <div class="row align-items-center">
                                    <div class="col"><label>Filters</label></div>
                                    <!--col-->
                                    <div class="col"><a href="#"><img class="img-fluid"
                                                src="{{ asset('images/white-close-icon.png')}}" data-bs-toggle="collapse"
                                                href="#collapseExample" role="button" aria-expanded="false"
                                                aria-controls="collapseExample"></a></div>
                                    <!--col-->
                                </div>
                                <!--row-->
                            </div>
                            <!--filter-label-->

                            <div class="content mCustomScrollbar">

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                All
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="acordion-menus">

                                                    <li><a href="#">For Printing</a>

                                                        <ul>
                                                            <li><a href="#">Brochures</a></li>
                                                            <li><a href="#">Event Cards</a></li>
                                                            <li><a href="#">Flyers</a></li>
                                                            <li><a href="#">Signages</a></li>
                                                            <li><a href="#">Posters</a></li>
                                                            <li><a href="#">Invite</a></li>
                                                            <li><a href="#">Key Tags</a></li>
                                                            <li><a href="#">Window Cards</a></li>
                                                        </ul>

                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Digital Marketing
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="acordion-menus">
                                                    <li><a href="#">Brochures</a></li>
                                                    <li><a href="#">Event Cards</a></li>
                                                    <li><a href="#">Flyers</a></li>
                                                    <li><a href="#">Signages</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Social Media
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="acordion-menus">

                                                    <li><a href="#">Signages</a></li>
                                                    <li><a href="#">Posters</a></li>
                                                    <li><a href="#">Invite</a></li>
                                                    <li><a href="#">Key Tags</a></li>
                                                    <li><a href="#">Window Cards</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                                Occasion
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="acordion-menus">

                                                    <li><a href="#">Flyers</a></li>
                                                    <li><a href="#">Signages</a></li>
                                                    <li><a href="#">Posters</a></li>
                                                    <li><a href="#">Invite</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!--content-->

                        </div>
                        <!--gallery-left-acordion-sec-->

                    </div>
                    <!--collapse-->

                </div>
                <!--col-xl-3-->

                <div class="col-xl-9 col-lg-8">

                    <div class="gallery-listed">

                        <h1>Gallery</h1>

                        <div class="row">

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-1.png')}}"
                                            alt="" /></div>

                                    <label>Brochures</label>

                                    <h4>Nullam vitae massa</h4>

                                    <a id="pop-gallery-click" href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-2.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-3.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->


                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-4.png')}}"
                                            alt="" /></div>

                                    <label>Brochures</label>

                                    <h4>Integer sit amet magna auc</h4>

                                    <a id="pop-gallery-click" href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-5.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-6.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-7.png')}}"
                                            alt="" /></div>

                                    <label>Brochures</label>

                                    <h4>Nullam vitae massa</h4>

                                    <a id="pop-gallery-click" href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-8.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                            <div class="col-xl-4 col-md-6">

                                <div class="gallery-listed-block">

                                    <div class="gallery-listed-block-img"><img src="{{ asset('images/galery-img-9.png')}}"
                                            alt="" /></div>

                                    <label>Event Cards</label>

                                    <h4>Etiam euismod at quam</h4>

                                    <a href="#" class="dwnload-btn">Download</a>

                                </div>
                                <!--gallery-listed-block-->

                            </div>
                            <!--col-xl-4-->

                        </div>
                        <!--row-->

                    </div>
                    <!--gallery-listed-->

                </div>
                <!--col-xl-3-->

            </div>
            <!--row-->

            <nav class="pagination-nav space-top section-space-bottom" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link active" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
        <!--container-->

    </section>
    <!--galler-section-end-->
    	<!-- pop-gallery-swiper -->

<div class="pop-overlay" id="pop-gallery-main">

    <div class="swiper-gallery-main">
      <a class="close-pop-gallery" id="close-pop-gallery">
        <svg xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
        <g id="Group_30853" data-name="Group 30853" transform="translate(6902.561 -89.439)">
          <path id="Path_1929" data-name="Path 1929" d="M-6903.579,90.579l16.284,16.285" transform="translate(2.079 -0.079)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-width="1.5"/>
          <path id="Path_1930" data-name="Path 1930" d="M-6887.3,90.579l-16.284,16.285" transform="translate(2.08 -0.079)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-width="1.5"/>
        </g>
      </svg>
      </a>
        
          <a class="close-pop-gallery dwnld-btn"><img src="{{ asset('images/download-icon.png')}}" alt=""/></a>
      <!-- Swiper -->
      <div class="swiper gallery-slider">
       <div class="swiper-wrapper pop-gallery-slide">
         <!-- each-slider -->
         <div class="swiper-slide">
           <img src="{{ asset('./images/gallery-image-1.jpg')}}" alt="">
         </div>
         <!-- each-slider -->
    
               <!-- each-slider -->
               <div class="swiper-slide">
                 <img src="{{ asset('./images/gallery-image-1.jpg')}}" alt="">
               </div>
               <!-- each-slider -->
    
    
                     <!-- each-slider -->
         <div class="swiper-slide">
           <img src="{{ asset('./images/gallery-image-1.jpg')}}" alt="">
         </div>
         <!-- each-slider -->
    
         <!-- each-slider -->
         <div class="swiper-slide">
          <img src="{{ asset('./images/gallery-image-1.jpg')}}" alt="">
        </div>
        <!-- each-slider -->
    
        <!-- each-slider -->
        <div class="swiper-slide">
          <img src="{{ asset('./images/gallery-image-1.jpg')}}" alt="">
        </div>
        <!-- each-slider -->
    
    
       </div>
       <div class="pop-gallery-controll">
    
       <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="30.739" height="16.468" viewBox="0 0 30.739 16.468">
          <g id="Icon_feather-arrow-left" data-name="Icon feather-arrow-left" transform="translate(0.75 1.061)">
            <path id="Path_1938" data-name="Path 1938" d="M36.739,18H7.5" transform="translate(-7.5 -10.827)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
            <path id="Path_1939" data-name="Path 1939" d="M25.174,7.5,18,14.673l7.174,7.173" transform="translate(-18 -7.5)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          </g>
        </svg>
        
       </div>
       <div class="swiper-pagination"></div>
    
       <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="30.739" height="16.468" viewBox="0 0 30.739 16.468">
          <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right" transform="translate(15.048 -6.439)">
            <path id="Path_1938" data-name="Path 1938" d="M7.5,18H36.739" transform="translate(-21.798 -3.327)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
            <path id="Path_1939" data-name="Path 1939" d="M18,7.5l7.173,7.173L18,21.847" transform="translate(-10.232)" fill="none" stroke="#bc8418" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/>
          </g>
        </svg>
       </div>
    
      </div>
     </div>
    
     <!-- Swiper JS --> 
    </div>
    
    </div>
    
    
    <!-- pop-gallery-swiper-ends -->
@include('main-layouts.footer')