<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @if ($page_title)
            {{ $page_title}} | {{ config('data.name') }}
        @else
            {{ config('data.name') }}
        @endif
    </title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ config('data.meta_keywords') }}" name="keywords">
    <meta content="{{ config('data.footer_about') }}" name="description">

    <!-- Favicon -->
    <link href="{{ config("data.fav") }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        /* Base styling for all screens */
        #sliderImage {
            width: 100%;
            height: 950px;
            /* desktop default */
            object-fit: cover;
            /* keeps image proportion */
        }

        /* Tablet view */
        @media screen and (max-width: 1024px) {
            #sliderImage {
                height: 700px;
            }

        }

        /* Large mobile devices (e.g., 600–768px width) */
        @media screen and (max-width: 768px) {
            #sliderImage {
                height: 550px;
            }

            #sliderParagraph {
                font-size: 30px
            }
        }

        /* Small mobile devices (phones under 480px) */
        @media screen and (max-width: 480px) {
            #sliderImage {
                height: 400px;
            }

            #sliderParagraph {
                font-size: 23px
            }
        }

        #logo {
            width: 80px;
            height: 80px;
            /* box-shadow: 0 0px 5px #fff; */
            border-radius: 10px;
        }
    </style>
</head>


@php
    $data = loadSingleData('offices', 'settings');
    $settings = loadSingleData('settings', 'settings');
@endphp

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-red px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i
                            class="fa fa-map-marker-alt me-2"></i>{{ $data->address1 ?? config('data.address') }}</small>
                    <small class="me-3 text-light"><i
                            class="fa fa-phone-alt me-2"></i>{{  $data->phone1 ?? config('data.phone1') }}</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $data->email_address1 ?? config('data.email') }}
                    </small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    @yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-red p-4">
                        <a href="{{ route('frontend.index') }}" class="navbar-brand">
                            <img src="{{ asset($settings->logo ?? config('data.logo')) }}" />
                            <h1 class="m-0 text-white">
                                {{ $settings->sitename ??  "TiberiasZores" }}</h1>
                        </a>
                        <p class="mt-3 mb-4">
                           
                            {{ $settings->footer_description ?? config('data.footer_about') }}
                        </p>
                        {{-- <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-red mb-0">AZORES OFFICE</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-red me-2"></i>
                                <p class="mb-0">{{ $data->address1 ?? config('data.address') }}</p>
                            </div>


                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-red me-2"></i>
                                <p class="mb-0">{{  $data->email_address1 ?? config('data.email') }}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-red me-2"></i>
                                <p class="mb-0">{{ $data->phone1 ?? config('data.phone1') }}</p>
                            </div>
                            {{-- <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>

                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">ITALY OFFICE</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-red me-2"></i>
                                <p class="mb-0">{{ $data->address2 ?? config('data.address2') }}</p>
                            </div>


                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-red me-2"></i>
                                <p class="mb-0">{{ $data->email_address2 ?? config('data.email2') }}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-red me-2"></i>
                                <p class="mb-0">{{ $data->phone2 ?? config('data.phone2') }}</p>
                            </div>
                            {{-- <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div> --}}
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-red mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                @foreach ($navigationProvider as $link)
                                    <a class="text-light mb-2" href="{{ $link->url ?? '#' }}"><i
                                            class="bi bi-arrow-right text-red me-2"></i>{{ $link->title }}</a>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom"
                                href="#">{{ config('data.name') }}</a>. All Rights Reserved. <a
                                class="text-white border-bottom" target="_blank" href="https://htmlcodex.com"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-red text-white btn-lg-square rounded back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>