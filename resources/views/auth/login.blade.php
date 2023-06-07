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
    <link href="{{ asset('css/login.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-common.css')}}" rel="stylesheet">



    <title>Chestertons</title>
</head>

<body>
    <!-- login-starts -->
    <div class="login-wrap d-xl-flex half">
        <div class="bg order-1 order-md-2">
            <div class="login-content">
                <div class="logo-login"> <img class="img-fluid" src="{{ asset('images/asset-login-logo.svg')}}"> </div>
                <h2>The Chestertons <br>Way</h2>
                <p>Our Chestertons Way evolved over a period of more than
                    200 years. Login to get access to our images, digital assets
                    and other resources.</p>
            </div>
            <div class="content-img">
                <ul>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img1.jpg') }}"></a></li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img5.jpg') }}"> </a></li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img4.jpg') }}"></a></li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img2.jpg') }}"></a></li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img3.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img3.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img4.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img2.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img3.jpg') }}"> </a></li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img1.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img3.jpg') }}"></a> </li>
                    <li> <a href=""><img class="img-fluid" src="{{ asset('images/login-img3.jpg') }}"></a> </li>
                </ul>
            </div>

        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10 col-md-12">
                        <div class="card-body">
                            <div id="main-content" class="site-main clearfix">
                                @if (Session::has('message'))
                                <section class="popup">
                                    <div class="popup-inner">
                                        <div class="popup-content">
                                            <div class="content alert alert-success text-center">
                                                {{ Session::get('message') }}
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
                        </div>
                        <h3>Login</h3>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Username</label>
                                @if($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                                <i class="fa-user-icon"></i>
                                <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com"
                                    id="username">
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                @if($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                                <i class="fa-pwd-icon"></i>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                            </div>
                            
                            <div class="d-flex mb-3 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" name="remember_me" />
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                            </div>
                            <input type="submit" value="SUBMIT" class="button-1 arrow-login">

                        </form>
                        <div class="copy-ryt" style="position:unset">©Chestertons International. All rights reserved. </div>
                    </div>

                </div>
            </div>
        </div>


    </div>





    <!-- login ends -->





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
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/aos.js')}}"></script>
    <script>
        AOS.init({
            easing: 'ease-out-back',
            duration: 3000,
            disable: function() {
                var maxWidth = 1200;
                return window.innerWidth < maxWidth;
            }
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
        $(document).ready(function() {
            /******************************
                BOTTOM SCROLL TOP BUTTON
             ******************************/

            // declare variable
            var scrollTop = $(".scrollTop");

            $(window).scroll(function() {
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
            $(scrollTop).click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;

            });
        }); // click() scroll top EMD
    </script>

</body>

</html>
