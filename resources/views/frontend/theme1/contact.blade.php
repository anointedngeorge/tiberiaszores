@extends('frontend.theme1.layout')


@section('content')
    <!-- Navbar & Carousel Start -->
    @include('frontend.theme1.component.general.navigation2')

    <br><br>
    <!-- Navbar & Carousel End -->
    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-red text-uppercase">Contact Us</h5>
                <h1 class="mb-0">{{ $settings->contact_us_description ?? "If You Have Any Query, Feel Free To Contact Us" }}
                </h1>
            </div>

            @php
                $data = loadSingleData('offices', 'settings');
            @endphp


            @if ($data->address1)
                <div class="row g-5 mb-5">
                    @if ($data->phone1)


                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Call to ask any question</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->phone1 ?? config('data.phone1') }} </h4>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($data->email_address1)


                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Email Address</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->email_address1 ?? config('data.email') }}</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($data->address1)


                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Azores office</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->address1 ?? config('data.address') }}</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif


            @if ($data->email_address2)
                <div class="row g-5 mb-5">
                    @if ($data->phone2)
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Call to ask any question</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->phone2 ?? config('data.phone2') }} </h4>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($data->email_address2)
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Email Address</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->email_address2 ?? config('data.email2') }}</h4>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($data->address2)
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                                <div class="bg-red d-flex align-items-center justify-content-center rounded"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5 class="mb-2 text-red">Italy office</h5>
                                    <h4 class="text-blue-dark mb-0">{{ $data->address2 ?? config('data.address2') }}</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <div class="row g-5">
                {{-- <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name"
                                    style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div> --}}
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    {{-- class="position-relative rounded w-100 h-100" --}}

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.131787111055!2d-25.667986923151183!3d37.740052371994196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb432ab5715566dd%3A0xf632ca53697ac8ca!2sR.%20Dr.%20Jos%C3%A9%20Bruno%20Tavares%20Carreiro%207%2C%209500-150%20Ponta%20Delgada%2C%20Portugal!5e0!3m2!1sen!2sng!4v1759958795748!5m2!1sen!2sng"
                        class="position-relative rounded w-100 h-100" style="min-height: 350px; border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


            @include('frontend.theme1.component.home.ports')

        </div>

    </div>
    <!-- Contact End -->

@endsection