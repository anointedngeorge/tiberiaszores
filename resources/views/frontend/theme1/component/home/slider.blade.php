@php
    $sliders = [

        (object) [
            'title' => 'Civil Engineering and Construction',
            'content' => "Building sustainable infrastructure that drives development.",
            'image' => asset('assets/img/services/civil.webp'),
            'classname' => 'active'
        ],


        (object) [
            'title' => 'Oil and Gas',
            'content' => "Powering industries through innovation in energy and petroleum solutions.",
            'image' => asset(path: 'assets/img/services/oil_and_gas.jpg'),
            'classname' => ''
        ],

        (object) [
            'title' => 'Supply chain and logistics',
            'content' => "Seamless movement of goods through smart, efficient logistics solutions.",
            'image' => asset('assets/img/sliders/chain.jpg'),
            'classname' => ''
        ],


        (object) [
            'title' => 'Port Operations',
            'content' => "Efficient port management ensuring smooth global trade flow.",
            'image' => asset('assets/img/sliders/port_operation.jpg'),
            'classname' => ''
        ],
    ];
@endphp

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($sliders as $slider )
            <div class="carousel-item {{ $slider->classname }}">
                <img class="w-100 " id="sliderImage" src="{{ $slider->image }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $slider->title }}</h5>
                        <p class="display-3 text-white mb-md-4 animated zoomIn" id="sliderParagraph">{{ $slider->content }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- second --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>