
@extends('frontend.theme1.layout')


@section('content')

@include('frontend.theme1.component.general.navigation2')
<br><br><br><br>
<section class="container-fluid py-5 wow fadeInUp" id="news">
    <div class="container">
        <!-- Section Header -->
        <div class="section-title text-center mb-5">
            <h2 class="title text-red">Activities</h2>
            <p class="subtitle">Stay updated on our latest developments across Africa’s industrial and energy sectors.</p>
        </div>

        <!-- News Grid -->
        <div class="row g-4">

            <!-- News Item 1 -->
            <div class="col-lg-6 col-md-12">
                <article class="news-card shadow-sm">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/services/gabon.jpg') }}" alt="Gabon Refinery Initiative" class="img-fluid rounded-top">
                    </div>
                    <div class="news-content p-4">
                        <h4 class="news-title text-red">Industrialist Backs Gabon's Refinery Initiatives</h4>
                        <p class="news-meta mb-2"><i class="fa fa-map-marker-alt"></i> Port-Gentil, Gabon</p>
                        <p class="news-text">
                            Industrialist and President of <strong>TiberiasZores Group</strong>, <strong>Roland Soures</strong>, 
                            has reaffirmed the group’s commitment to supporting the Government of Gabon in expanding refinery 
                            capacity and improving petroleum product supply.
                        </p>
                        <p class="news-text">
                            Soures commended the government for issuing 23 refinery licenses, noting that 
                            <strong>TiberiasZores Petroleum</strong> is a proud beneficiary. 
                            Work at the TiberiasZores Refinery site is currently <strong>60% completed</strong>, 
                            with production scheduled to commence next year.
                        </p>
                        {{-- <a href="#" class="read-more">Read Full Story <i class="fa fa-arrow-right"></i></a> --}}
                    </div>
                </article>
            </div>

            <!-- News Item 2 -->
            <div class="col-lg-6 col-md-12">
                <article class="news-card shadow-sm">
                    <div class="news-image">
                        <img src="{{ asset('assets/img/services/congo.jpg') }}" alt="Congo Refinery Expansion" class="img-fluid rounded-top">
                    </div>
                    <div class="news-content p-4">
                        <h4 class="news-title text-red">Congo Brazzaville Advances Refinery Expansion Programs</h4>
                        <p class="news-meta mb-2"><i class="fa fa-map-marker-alt"></i> Pointe-Noire, Congo Brazzaville</p>
                        <p class="news-text">
                            The <strong>Société Nationale des Pétroles du Congo (SNPC)</strong> is inviting private and international 
                            investors to help boost the country’s refining capacity, reduce fuel imports, and strengthen petroleum infrastructure.
                        </p>
                        <p class="news-text">
                            <strong>TiberiasZores Petroleum Ltd.</strong> has begun constructing a <strong>12,000-b/sd modular refinery</strong> 
                            in Pointe-Noire, in partnership with <strong>Ventech Engineering LLC</strong>, Houston. Construction progress 
                            currently stands at <strong>55% completion</strong>, with refinery startup expected next year.
                        </p>
                        {{-- <a href="#" class="read-more">Read Full Story <i class="fa fa-arrow-right"></i></a> --}}
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



@endsection


