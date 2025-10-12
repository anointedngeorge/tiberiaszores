@extends('frontend.theme1.layout')


@section('content')
    @php
        $data = loaddata('news', 'frontend');
        $news = !empty($data) ? $data :  [
            (object) [
                'title' => "Industrialist Backs Gabon's Refinery Initiatives",
                'image' => "assets/img/services/gabon.jpg",
                'content' => '<p class="news-text">
                                    Industrialist and President of <strong>TiberiasZores Group</strong>, <strong>Roland Soures</strong>, 
                                    has reaffirmed the group’s commitment to supporting the Government of Gabon in expanding refinery 
                                    capacity and improving petroleum product supply.
                                </p>
                                <p class="news-text">
                                    Soures commended the government for issuing 23 refinery licenses, noting that 
                                    <strong>TiberiasZores Petroleum</strong> is a proud beneficiary. 
                                    Work at the TiberiasZores Refinery site is currently <strong>60% completed</strong>, 
                                    with production scheduled to commence next year.
                                </p>',

                'location' => "Port-Gentil, Gabon"
            ],


            (object) [
                'title' => "Congo Brazzaville Advances Refinery Expansion Programs",
                'image' => "assets/img/services/congo.jpg",
                'content' => '<p class="news-text">
                                    The <strong>Société Nationale des Pétroles du Congo (SNPC)</strong> is inviting private and international 
                                    investors to help boost the country’s refining capacity, reduce fuel imports, and strengthen petroleum infrastructure.
                                </p>
                                <p class="news-text">
                                    <strong>TiberiasZores Petroleum Ltd.</strong> has begun constructing a <strong>12,000-b/sd modular refinery</strong> 
                                    in Pointe-Noire, in partnership with <strong>Ventech Engineering LLC</strong>, Houston. Construction progress 
                                    currently stands at <strong>55% completion</strong>, with refinery startup expected next year.
                                </p>',
                'location' => "Pointe-Noire, Congo Brazzaville"
            ],
        ];
    @endphp

    @include('frontend.theme1.component.general.navigation2')
    <br><br><br><br>
    <section class="container-fluid py-5 wow fadeInUp" id="news">
        <div class="container">
            <!-- Section Header -->
            <div class="section-title text-center mb-5">
                <h2 class="title text-red">Activities</h2>
                <p class="subtitle">Stay updated on our latest developments across Africa’s industrial and energy sectors.
                </p>
            </div>

            <!-- News Grid -->
            <div class="row g-4">

                @foreach ($news as $new)
                    <!-- News Item 1 -->
                    <div class="col-lg-6 col-md-12">
                        <article class="news-card shadow-sm">
                            <div class="news-image">
                                <img src="{{ asset($new->image ?? '') }}" alt="{{ $new->title ?? '' }}"
                                    class="img-fluid rounded-top">
                            </div>
                            <div class="news-content p-4">
                                <h4 class="news-title text-red">{{ $new->title ?? '' }}</h4>
                                <p class="news-meta mb-2"><i class="fa fa-map-marker-alt"></i> {{ $new->location ?? '' }}  </p>
                                {!! $new->content !!}
                                {{-- <a href="#" class="read-more">Read Full Story <i class="fa fa-arrow-right"></i></a> --}}
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection