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
  <link href="{{ asset('css/style-common.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-J.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-home.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-e.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-N.css')}}" rel="stylesheet">


  <title>Chestertons</title>
</head>

<body>
  <!-- header-section-starts -->
  <section class="">
    <div class="container">
      <div class="row the-way-header">
        <div class="col"><a class="user-log" href=""><img class="img-fluid" src="{{ asset('images/user-log.svg')}}"> <span>Hi, {{ $user->name }}</span></a></div>
        <div class="col logo-login"><a class=""  href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('images/asset-login-logo.svg')}}"></a></div>
        <div class="col"><a class="sign-out-log"  href="{{ url('/logout') }}"><img class="img-fluid" src="{{ asset('images/log-out-icon.svg')}}"> <span>Sign
              out</span></a></div>

      </div>
    </div>
  </section>
  <!-- header-section-ends -->


  <!-- stories-section-starts -->
  <section class="theway-section section-space-bottom">

    <div class="container">
      <div class="row">
        <div class="col-md-6 way-left">
          <h4>Tools and Assets</h4>
          <div class="row tools-wrap">
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img1.svg')}}">
              </a>
            </div>
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img2.svg')}}">
              </a>
            </div>
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img3.svg')}}">
              </a>
            </div>
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img4.svg')}}">
              </a>
            </div>
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img5.svg')}}">
              </a>
            </div>
            <div class="col-md-4 mb-4">
              <a href="">
                <img class="img-fluid" src="{{ asset('images/tools-img6.svg')}}">
              </a>
            </div>
          </div>
          <!-- for-border-devider -->
          <div class="border-container mb-4">           
              <div class="border-devider"></div>           
          </div>
          <!-- for-border-devider -->

          <h4>Social</h4>
          <div class="row social-wrap">
            <div class="col-md-12">
              <div class="social-icons">

                <a href="https://www.facebook.com/chestertonsproperty/" target="_blank" class="">
                  <img src="{{ asset('./images/fb-icon-admin.svg')}}" alt="">
                </a>

                <a href="https://uk.linkedin.com/company/chestertons" target="_blank" class="">
                  <img src="{{ asset('./images/linkedin-admin.svg')}}" alt="">
                </a>

                <a href="https://www.instagram.com/chestertons.london/" target="_blank" class="">
                  <img src="{{ asset('./images/insta-icon-admin.svg')}}" alt="">
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6 way-right">
          <h4>Gallery</h4>
          <div class="row gal-wrap">
            <div class="col-md-12">
              <div class="wg-box-content">

                <div class="wg-box-content-overlay"></div>
                <img class="wg-box-content-image" src="{{ asset('images/admin-gal-img.jpg')}}">
                <div class="wg-box-content-details wg-box-fadeIn-bottom">
                  <a href="{{ url('gallery') }}" class="button-2 arrow">View All</a>
                </div>
              </div>

            </div>
            <!-- for-border-devider -->
            <div class="border-container mb-3">
              <div class="border-devider"></div>
            </div>
            <!-- for-border-devider -->
          </div>
          <h4>Latest Updates</h4>
          <div class="row latest-news">
            <div class="col-md-4">
              <img class="wg-box-content-image" src="{{ asset('images/lt-news-img.jpg')}}">

            </div>
            <div class="col-md-8">
           <h4> <a href="">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.</a></h4>
            <label>January 16, 2023</label>
          </div>
          </div>

        </div>

      </div>

  </section>

  <!-- stories-section ends -->




  <!-- footer-section-starts-here -->
  <footer class="">
  
    <div class="footer-bottom-sec">
      <div class="container">
        <div class="row copy-write-2">
          <div class="col-sm-12 copy-write">
            <p>© Chestertons International. All rights reserved. </p>
          </div>
        </div>
      </div>
    </div>
  
  </footer>
  <!-- footer-section-ends-here -->

  <script>
    const popOverlayContent = document.getElementById('pop-overlay');
    const bodyTag = document.body;
    function formPopUp() {
      popOverlayContent.classList.add('selected');
      bodyTag.classList.add('pop-active');
    }
    function closePopUp() {

      popOverlayContent.classList.remove('selected');
      bodyTag.classList.remove('pop-active');
    }
  </script>
  <!-- floating-icons-ends -->

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script src="{{ asset('js/aos.js')}}"></script>

  <script>
    $(function () {
      AOS.init({
        duration: 1200
      });

      $('.js-load-more').on('click', function () {
        var $content = $(this).next('.js-more-content');

        $content.animate({
          height: 750,
        }, 500);
      });

      onElementHeightChange(document.body, function () {
        AOS.refresh();
      });
    });

    function onElementHeightChange(elm, callback) {
      var lastHeight = elm.clientHeight
      var newHeight;

      (function run() {
        newHeight = elm.clientHeight;
        if (lastHeight !== newHeight) callback();
        lastHeight = newHeight;

        if (elm.onElementHeightChangeTimer) {
          clearTimeout(elm.onElementHeightChangeTimer);
        }

        elm.onElementHeightChangeTimer = setTimeout(run, 200);
      })();
    }

  </script>





  <script>
    <!-- Initialize Swiper -->

    var swiper = new Swiper(".our-feature-properties", {
      slidesPerView: 3,
      spaceBetween: 25,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        0: {
          spaceBetween: 20,
          slidesPerView: "auto",
        },
        1200: {
          spaceBetween: 24,
        },
      },
    });


    var swiper = new Swiper(".our-service-slides", {
      slidesPerView: "auto",
      pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        767: {
          spaceBetween: 0,
        },
        1100: {
          spaceBetween: 20,
        },
        1200: {
          spaceBetween: 30,
        },
        1800: {

          spaceBetween: 40,
        },
      },
    });

  </script>


  <script>

    const footerMenuSecClick = document.getElementById('footerMenuSec');
    const footerServiceClick = document.getElementById('footerService');
    const footerContactSecClick = document.getElementById('footerContactSec');

    function footerMenuSec() {
      var fmenusec = document.getElementById('f-menu');
      fmenusec.classList.toggle("active");
      footerMenuSecClick.classList.toggle('active');
    }

    function footerService() {
      var fcontactsec = document.getElementById('f-menu-service');
      fcontactsec.classList.toggle("active");
      footerServiceClick.classList.toggle('active');
    }

    function footerContactSec() {
      var fcontactsec = document.getElementById('f-address');
      fcontactsec.classList.toggle("active");
      footerContactSecClick.classList.toggle('active');
    }

    // for click 
    footerMenuSecClick.addEventListener('click', footerMenuSec);
    footerServiceClick.addEventListener('click', footerService);
    footerContactSecClick.addEventListener('click', footerContactSec);

  </script>

  <script>

    $(document).ready(function () {
      /******************************
          BOTTOM SCROLL TOP BUTTON
       ******************************/

      // declare variable
      var scrollTop = $(".scrollTop");

      $(window).scroll(function () {
        // declare variable
        var topPos = $(this).scrollTop();

        // if user scrolls down - show scroll to top button
        if (topPos > 100) {
          $(scrollTop).css("opacity", "1");

        } else {
          $(scrollTop).css("opacity", "0");
        }

      }); // scroll END

      //Click event to scroll to top
      $(scrollTop).click(function () {
        $('html, body').animate({
          scrollTop: 0
        }, 800);
        return false;

      });
    }); // click() scroll top EMD
  </script>

</body>

</html>