@extends('frontend.theme1.layout')


@section('content')

    <!-- Navbar & Carousel Start -->
    @include('frontend.theme1.component.general.navigation')
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    @include('frontend.theme1.component.general.search')
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    {{-- @include('frontend.theme1.component.general.facts'); --}}
    <!-- Facts Start -->


    <!-- About Start -->
    @include('frontend.theme1.component.home.about')
    <!-- About End -->


    <!-- Features Start -->
   @include('frontend.theme1.component.general.features')
    <!-- Features Start -->


    <!-- Service Start -->
    {{-- @include('frontend.theme1.component.general.services') --}}
    <!-- Service End -->



    <!-- Quote Start -->
   {{-- @include('frontend.theme1.component.home.quotes') --}}
    <!-- Quote End -->


    <!-- Testimonial Start -->
    {{-- @include('frontend.theme1.component.general.testimonials') --}}
    <!-- Testimonial End -->


    <!-- Team Start -->
   {{-- @include('frontend.theme1.component.general.teams') --}}
    <!-- Team End -->


    <!-- Blog Start -->
    {{-- @include('frontend.theme1.component.general.blog') --}}
    <!-- Blog Start -->


@endsection