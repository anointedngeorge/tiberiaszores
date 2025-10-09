
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $page_title ?? "Home"}} | {{ config("data.title") }} </title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('nagari/css/style-liberty.css') }}">

  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
  <!-- Template CSS -->

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="{{ config("data.meta_keywords") }}" name="keywords">
  <meta content="{{ config("data.meta_description") }}" name="description">

  <!-- Favicon -->
  <link href="{{ asset(config("data.logo")) }}" rel="icon">

</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        {{-- <h1><a href="/" class="navbar-brand mr-lg-5" href="index.html">
            
          </a></h1> --}}
         
      <a class="navbar-brand" href="/">
            {!! logo(config('data.logo')) !!}
          {{-- <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" /> --}}
      </a> 
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
            </li>
            <li class="nav-item  {{ Request::is('p/about') ? 'active' : '' }}">
              <a class="nav-link scroll" href="{{ route('frontend.page', ['pagename' => 'about']) }}">About</a>
            </li>
            <li class="nav-item {{ Request::is('p/profile') ? 'active' : '' }}">
              <a class="nav-link scroll" href="{{ route('frontend.page', ['pagename' => 'profile']) }}">Profile</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link scroll" href="#services">Services</a>
            </li> --}}
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Sections <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item scroll" href="#team">Team</a>
                <a class="dropdown-item scroll" href="#stats">Stats</a>
                <a class="dropdown-item scroll" href="#clients">Testimonials</a>
              </div>
            </li> --}}
            <li class="nav-item {{ Request::is('p/contact') ? 'active' : '' }} ">
              <a class="nav-link scroll" href="{{ route('frontend.page', ['pagename' => 'contact']) }}">Contact</a>
            </li>

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a 
              href="{{ route('frontend.page', ['pagename' => 'distributor']) }}" 
              class="btn btn-style btn-secondary ml-lg-3">Become A Distributor</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->

    @yield("content")

      <!--/w3l-footer-29-main-->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="footer-list-29 col-lg-4">
            <h6 class="footer-title-29">About Us</h6>
            <a class="navbar-brand" href="/">
                {!! logo(config('data.logo'), '100') !!}
              {{-- <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" /> --}}
          </a> 
            <p class="pr-lg-5">{{ config('data.footer_about') }}</p>
            <div class="main-social-footer-29 mt-4">
              <a href="{{ config('data.facebook') }}" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="{{ config('data.twitter') }}" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="{{ config('data.instagram') }}" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="{{ config('data.linkedin') }}" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-lg-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Links</h6>
              <li><a href="{{ route('frontend.index') }}" >Home</a></li>
              <li><a href="{{ route('frontend.page', ['pagename' => 'about']) }}">About</a></li>
              {{-- <li><a href="services.html">Services</a></li>
              <li><a href="blog.html"> Blog posts</a></li> --}}
              <li><a href="{{ route('frontend.page', ['pagename' => 'contact']) }}">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <ul>
              <h6 class="footer-title-29">Services</h6>
              <li>
                <a href="#url">
                  Healthy Milk
                </a>
              </li>
              <li>
                <a href="#url">
                  Organic Food
                </a>
              </li>
              <li>
                <a href="#url">
                  Fresh Fruits
                </a>
              </li>
              <li>
                <a href="#url">
                  Tree Planting
                </a>
              </li>
              <li>
                <a href="#url">
                  Gardening
                </a>
              </li>
            </ul>


          </div>
          <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
              <li>
                <p><span class="fa fa-map-marker"></span> {{ config('data.address') }}</p>
              </li>
              <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> {{ config('data.phone1') }} </a></li>
              <li><a href="mailto:{{ config('data.email') }}" class="mail"><span class="fa fa-envelope-open-o"></span>
                  {{ config('data.email') }}</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="bottom-copies">
        <p class="copy-footer-29 text-center">© {{ now()->year }} {{ config('data.title') }}. All rights reserved.
            </p>
      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- Template JavaScript -->
  <script src="{{ asset('nagari/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('nagari/js/theme-change.js') }}"></script>
  <script src="{{ asset('nagari/js/owl.carousel.js') }}"></script>

    <!-- script for banner slider-->
    <script>
      $(document).ready(function () {
        $('.owl-one').owlCarousel({
          loop: true,
          margin: 0,
          nav: false,
          responsiveClass: true,
          autoplay: true,
          autoplayTimeout: 5000,
          autoplaySpeed: 1000,
          autoplayHoverPause: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            480: {
              items: 1,
              nav: false
            },
            667: {
              items: 1,
              nav: true
            },
            1000: {
              items: 1,
              nav: true
            }
          }
        })
      })
    </script>
    <!-- //script -->
    <!-- script for tesimonials carousel slider -->
    <script>
      $(document).ready(function () {
        $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            736: {
              items: 2,
              nav: false
            },
            1000: {
              items: 3,
              nav: false,
              loop: true
            }
          }
        })
      })
    </script>
    <!-- //script for tesimonials carousel slider -->
    <!-- stats number counter-->
    <script src="{{ asset('nagari/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('nagari/js/jquery.countup.js') }}"></script>
    <script>
      $('.counter').countUp();
    </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="{{ asset('nagari/js/bootstrap.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  
      // Responsive breakpoints
      breakpoints: {
        768: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        }
      }
    });
  </script>
  

</body>

</html>