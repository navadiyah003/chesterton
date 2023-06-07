<!-- footer-section-starts-here -->
<footer class="section-space-top">



    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row footer-bottom-row">

                <h5 class="only-mob footer-acc-click" id="footerMenuSec">Quick Links</h5>
                <div class="col-sm-4 footer-acc-container f-service-link f-bottom-col" id="f-menu">
                    <h5>Quick Links</h5>
                    <ul class="border-anim">
                        <li><a href="{{ url('about-us')}}">About Us</a></li>
                        <li><a href="{{ url('career')}}">Careers</a></li>
                        <li><a href="{{ url('global-network')}}">Global Network</a></li>
                        <li><a href="{{ url('contact-us')}}">Get in Touch</a></li>
                        <li><a href="{{ url('stories-listing')}}">Stories</a></li>

                    </ul>
                </div>

                <h5 class="only-mob footer-acc-click" id="footerService">Our Services</h5>
                <div class="col-sm-6 footer-acc-container f-quick-link f-bottom-col" id="f-menu-service">
                    <h5>Our Services</h5>
                    <ul class="border-anim">
                        <li><a href="">Residential Agency</a></li>
                        <li><a href="">Consulting and Research</a></li>
                        <li><a href="">Commercial Agency</a></li>
                        <li><a href="">Citizenship by Investment</a></li>
                        <li><a href="">Property Management</a></li>
                        <li><a href="">Building Consultancy and Project Management</a></li>
                        <li><a href="">Valuations and Advisory</a></li>
                        <li><a href="">Short-term Rentals</a></li>

                    </ul>
                </div>

                <div class="col-sm-2 f-get-in-touch f-bottom-col">
                    <h5>Address</h5>
                    <p>Marina Plaza, Office 2503<br>
                        Dubai Marina, Dubai<br>
                        United Arab Emirates</p>

                    <div class="social-icons">

                        <a href="https://www.facebook.com/chestertonsproperty/" class="" target="_blank">
                            <img src="{{ asset('./images/fb-footer-icon.svg') }}" alt="">
                        </a>

                        <a href="https://uk.linkedin.com/company/chestertons" class="" target="_blank">
                            <img src="{{ asset('./images/linkedin-footer-icon.svg') }}" alt="">
                        </a>

                        <a href="https://www.instagram.com/chestertons.london/" class="" target="_blank">
                            <img src="{{ asset('./images/insta-footer-icon.svg') }}" alt="">
                        </a>
                    </div>

                </div>


            </div>


            <div class="row copy-write-main">

                <div class="col-sm-6 copy-write">
                    <p>© Chestertons International. All rights reserved. </p>

                </div>
                <div class="col-sm-6 f-enquiry">
                    <a href="mailto:global-enquiries@chestertons.com">global-enquiries@chestertons.com</a>
                    <div class="devider"></div>
                    <a href="tel:+97143810200">+971 4 3810200</a>


                </div>

            </div>

        </div>
    </div>

</footer>
<!-- footer-section-ends-here -->

<script>
    let person = document.getElementsByClassName('person');
    let children = person.children;
    console.log(children);
</script>

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

<script src="{{ asset('js/aos.js') }}"></script>

<script>
    $(function() {
        AOS.init({
            duration: 1200
        });

        $('.js-load-more').on('click', function() {
            var $content = $(this).next('.js-more-content');

            $content.animate({
                height: 750,
            }, 500);
        });

        onElementHeightChange(document.body, function() {
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
    <!-- Initialize Swiper 
    -->
    var
    swiper
    =
    new
    Swiper(".our-feature-properties",
    {
    slidesPerView:
    "auto",
    spaceBetween:
    25,
    navigation:
    {
    nextEl:
    ".swiper-button-next",
    prevEl:
    ".swiper-button-prev",
    },
    breakpoints:
    {
    0:
    {
    spaceBetween:
    20,
    },
    1200:
    {
    spaceBetween:
    24,
    },
    },
    });
    var
    swiper
    =
    new
    Swiper(".our-service-slides",
    {
    slidesPerView:
    "auto",
    pagination:
    {
    el:
    ".swiper-pagination",
    type:
    "progressbar",
    },
    navigation:
    {
    nextEl:
    ".swiper-button-next",
    prevEl:
    ".swiper-button-prev",
    },
    breakpoints:
    {
    767:
    {
    spaceBetween:
    0,
    },
    1100:
    {
    spaceBetween:
    20,
    },
    1200:
    {
    spaceBetween:
    40,
    },
    1800:
    {
    spaceBetween:
    40,
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
    });
</script>

@stack('scripts');


</body>

</html>
