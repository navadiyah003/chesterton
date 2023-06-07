<!-- footer-section-starts-here -->
<footer class="section-space-top">
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row footer-bottom-row">
                <h5 class="only-mob footer-acc-click" id="footerMenuSec">Quick Links</h5>
                <div class="col-sm-4 footer-acc-container f-service-link f-bottom-col" id="f-menu">
                    <h5>Quick Links</h5>
                    <ul class="border-anim">
                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                        <li><a href="{{ url('career') }}">Careers</a></li>
                        <li><a href="{{ url('global-network') }}">Global Network</a></li>
                        <li><a href="{{ url('contact-us') }}">Get in Touch</a></li>
                        <li><a href="{{ url('stories-listing') }}">Stories</a></li>
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
                        <a href="https://www.facebook.com/chestertonsproperty/" target="_blank" class="">
                            <img src="{{ asset('./images/fb-footer-icon.svg') }}" alt="">
                        </a>

                        <a href="https://uk.linkedin.com/company/chestertons/" target="_blank" class="">
                            <img src="{{ asset('./images/linkedin-footer-icon.svg') }}" alt="">
                        </a>

                        <a href="https://www.instagram.com/chestertons.london/" target="_blank" class="">
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
    //console.log(children);
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

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
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

<!------- for contact page only Start --------->
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js'></script>


<script type="text/javascript">
    // -----Country Code Selection

    $("#mobile_code").intlTelInput({

        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
</script>

<!-- custom scrollbar plugin -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset('./js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- complete-examples -->
<script>
    (function($) {
        $(window).on("load", function() {
            $("#content-6").mCustomScrollbar({
                axis: "x",
                theme: "light-3",
                advanced: {
                    autoExpandHorizontalScroll: true
                }
            });
        });
    })(jQuery);
</script>

<!----------- for contact page only End --------------->

{{-- ---------- Property Listing Page Script ---------- --}}


<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js'></script>
<script>
    var app = new Vue({
        name: 'Vue Price Range',
        el: '#app',
        data: {
            min: 0,
            max: 5000,
            minValue: 0,
            maxValue: 5000,
            step: 5,
            totalSteps: 0,
            percentPerStep: 1,
            trackWidth: null,
            isDragging: false,
            pos: {
                curTrack: null
            }

        },

        methods: {
            moveTrack(track, ev) {

                let percentInPx = this.getPercentInPx();

                let trackX = Math.round(this.$refs._vpcTrack.getBoundingClientRect().left);
                let clientX = ev.clientX;
                let moveDiff = clientX - trackX;

                let moveInPct = moveDiff / percentInPx
                // console.log(moveInPct)

                if (moveInPct < 1 || moveInPct > 100) return;
                let value = (Math.round(moveInPct / this.percentPerStep) * this.step) + this.min;
                if (track === 'track1') {
                    if (value >= (this.maxValue - this.step)) return;
                    this.minValue = value;
                    document.getElementById('minVal').innerHTML = value;
                  }
                  
                  if (track === 'track2') {
                    if (value <= (this.minValue + this.step)) return;
                    this.maxValue = value;
                    document.getElementById('maxVal').innerHTML = value;
                }

                this.$refs[track].style.left = moveInPct + '%';
                this.setTrackHightlight()

            },
            mousedown(ev, track) {

                if (this.isDragging) return;
                this.isDragging = true;
                this.pos.curTrack = track;
            },

            touchstart(ev, track) {
                this.mousedown(ev, track)
            },

            mouseup(ev, track) {
                if (!this.isDragging) return;
                this.isDragging = false
            },

            touchend(ev, track) {
                this.mouseup(ev, track)
            },

            mousemove(ev, track) {
                if (!this.isDragging) return;
                this.moveTrack(track, ev)
            },

            touchmove(ev, track) {
                this.mousemove(ev.changedTouches[0], track)
            },

            valueToPercent(value) {
                return ((value - this.min) / this.step) * this.percentPerStep
            },

            setTrackHightlight() {
                this.$refs.trackHighlight.style.left = this.valueToPercent(this.minValue) + '%'
                this.$refs.trackHighlight.style.width = (this.valueToPercent(this.maxValue) - this
                    .valueToPercent(this.minValue)) + '%'
            },

            getPercentInPx() {
                let trackWidth = this.$refs._vpcTrack.offsetWidth;
                let oneStepInPx = trackWidth / this.totalSteps;
                // 1 percent in px
                let percentInPx = oneStepInPx / this.percentPerStep;

                return percentInPx;
            },

            setClickMove(ev) {
                let track1Left = this.$refs.track1.getBoundingClientRect().left;
                let track2Left = this.$refs.track2.getBoundingClientRect().left;
                // console.log('track1Left', track1Left)
                if (ev.clientX < track1Left) {
                    this.moveTrack('track1', ev)
                } else if ((ev.clientX - track1Left) < (track2Left - ev.clientX)) {
                    this.moveTrack('track1', ev)
                } else {
                    this.moveTrack('track2', ev)
                }
            }
        },

        mounted() {
            // calc per step value
            this.totalSteps = (this.max - this.min) / this.step;

            // percent the track button to be moved on each step
            this.percentPerStep = 100 / this.totalSteps;
            // console.log('percentPerStep', this.percentPerStep)

            // set track1 initilal
            document.querySelector('.track1').style.left = this.valueToPercent(this.minValue) + '%'
            // track2 initial position
            document.querySelector('.track2').style.left = this.valueToPercent(this.maxValue) + '%'
            // set initila track highlight
            this.setTrackHightlight()

            var self = this;

            ['mouseup', 'mousemove'].forEach(type => {
                document.body.addEventListener(type, (ev) => {
                    // ev.preventDefault();
                    if (self.isDragging && self.pos.curTrack) {
                        self[type](ev, self.pos.curTrack)
                    }
                })
            });

            ['mousedown', 'mouseup', 'mousemove', 'touchstart', 'touchmove', 'touchend'].forEach(type => {
                document.querySelector('.track1').addEventListener(type, (ev) => {
                    ev.stopPropagation();
                    self[type](ev, 'track1')
                })

                document.querySelector('.track2').addEventListener(type, (ev) => {
                    ev.stopPropagation();
                    self[type](ev, 'track2')
                })
            })

            // on track clik
            // determine direction based on click proximity
            // determine percent to move based on track.clientX - click.clientX
            document.querySelector('.track').addEventListener('click', function(ev) {
                ev.stopPropagation();
                self.setClickMove(ev)

            })

            document.querySelector('.track-highlight').addEventListener('click', function(ev) {
                ev.stopPropagation();
                self.setClickMove(ev)

            })
        }
    })
</script>

<!-- for-mobile-filter-show -->

<script>
    const mobFilterClick = document.getElementById('mob-filter-show');
    const popularSearchMob = document.getElementById('pop-Search-sec');
    const closePopSearch = document.getElementById('close-prop-search');

    function showMobileSearch() {
        popularSearchMob.classList.add("active");
    }


    function closePopSearchfn() {
        popularSearchMob.classList.remove("active");
    }

    mobFilterClick.addEventListener('click', showMobileSearch);
    closePopSearch.addEventListener('click', closePopSearchfn);


    const advFilterClick = document.getElementById('adv-filt-click');
    const advSearchMob = document.getElementById('adv-search-main');

    function advShowSearch() {
        advSearchMob.classList.toggle("active");
    }
    advFilterClick.addEventListener('click', advShowSearch)
</script>

{{-- --------- Property Listing page script end ----------- --}}

{{-- --------- About-us page script start ----------- --}}
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 3000,
        disable: function() {
            var maxWidth = 1200;
            return window.innerWidth < maxWidth;
        }
    });
    var swiper = new Swiper(".our-service-slides-inner", {
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
    var swiper = new Swiper(".full-width-slides", {
        slidesPerView: "4",
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 15,
                slidesPerView: "1.2"
            },
            600: {
                spaceBetween: 15,
                slidesPerView: "3"
            },
            1100: {
                spaceBetween: 20,
            },
            1200: {
                spaceBetween: 20,
            },
            1800: {

                spaceBetween: 20,
            },
        },
    });
</script>

{{-- ----------About-us page script end ------------- --}}

{{-- ----------Research-insights page script start----- --}}
<script>
    var swiper = new Swiper(".inner-searchinsight-carousel", {
        slidesPerView: 1,
        spaceBetween: 0,

        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 0,
                slidesPerView: "auto",
            },
            1200: {
                spaceBetween: 0,
            },
        },
    });
</script>

{{-- ---------Research-insights page script end----------- --}}

{{-- ---------Career page script start----------- --}}
<script>
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 1,
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 3000,
        },
        speed: 500,
    });
</script>
{{-- ---------Career page script end----------- --}}

{{-- ---------Career-detail-page script start----------- --}}
<script>
    const clickJobForm = document.getElementById('click-Job-form');
    const jobFormSec = document.getElementById('job-form');

    function JobeFromFunction() {
        jobFormSec.classList.toggle('active');
        this.classList.toggle('selected');
    }
    clickJobForm.addEventListener('click', JobeFromFunction)
</script>

{{-- ---------Career-detail-page script end----------- --}}


<!----------- for history-page-only -------------------->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js'></script>
<script src="{{ asset('./js/app.js') }}"></script>
<!-------------end history-page script--------------->


<script>
    var swiper = new Swiper(".our-feature-properties", {
        slidesPerView: "auto",
        spaceBetween: 25,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 20,
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
                spaceBetween: 40,
            },
            1800: {
                spaceBetween: 40,
            },
        },
    });
  
    var swiper = new Swiper(".inner-popular-top-carousel", {
        slidesPerView: 1,
        spaceBetween: 0,
  
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
  
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 0,
                slidesPerView: "auto",
            },
            1200: {
                spaceBetween: 0,
            },
        },
    });
  
  
    var swiper = new Swiper(".service-offer-slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
  
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
  
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 18,
            },
            1200: {
                spaceBetween: 20,
            },
        },
    });
  
  
    var swiper = new Swiper(".testimonial-slider", {
        slidesPerView: 1,
        spaceBetween: 5,
  
  
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                spaceBetween: 5,
                slidesPerView: "auto",
            },
            1200: {
                spaceBetween: 5,
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

@stack('scripts')
</body>

</html>
