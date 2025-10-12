@php
    $data = loaddata('services', 'frontend');

    $services = !empty($data) ? $data : [
        (object) [
            'title' => 'Supply chain and logistics',
            'image' => asset('assets/img/services/logistics.jpg'),
            'content' => "We provide end-to-end supply chain and logistics solutions that ensure efficient movement of goods, optimized routes, and timely deliveries across global markets.",
        ],
         (object) [
            'title' => 'Strategic Storage Services',
            'image' => asset('assets/img/services/storage.jpg'),
            'content' => "Our secure and scalable storage facilities are designed to support businesses with reliable warehousing, inventory management, and just-in-time distribution."
        ],
         (object) [
            'title' => 'Shipping',
            'image' => asset('assets/img/services/shipping.webp'),
            'content' => "We offer comprehensive shipping solutions covering sea, air, and land transport—ensuring safe, efficient, and cost-effective delivery of cargo worldwide."
        ],
         (object) [
            'title' => 'Civil Engineering and Construction',
            'image' => asset('assets/img/services/civil.webp'),
            'content' => "Our team delivers innovative engineering and construction services, building sustainable infrastructure and industrial projects with precision and excellence."
        ],
         (object) [
            'title' => 'Oil And Gas',
            'image' => asset('assets/img/services/oil_and_gas.jpg'),
            'content' => "We provide integrated services across the oil and gas value chain—from exploration support to logistics and infrastructure development—driving energy efficiency and sustainability."
        ],
         (object) [
            'title' => 'Port Operations',
            'image' => asset('assets/img/services/port_operation.webp'),
            'content' => "We manage and optimize port operations with advanced technology, ensuring smooth cargo handling, vessel management, and efficient terminal services."
        ],
         (object) [
            'title' => 'Telecommunications',
            'image' => asset('assets/img/services/telecommunication.webp'),
            'content' => "We deliver reliable telecommunication infrastructure and solutions that connect people, businesses, and industries across regions."
        ],
         (object) [
            'title' => 'Dredging',
            'image' => asset('assets/img/services/dredging.webp'),
            'content' => "Our dredging services enhance navigational channels, reclaim land, and protect coastal areas using advanced equipment and sustainable practices."
        ],
         (object) [
            'title' => 'Power Generation',
            'image' => asset('assets/img/services/power.png'),
            'content' => "We develop and manage power generation projects that provide reliable, sustainable, and cost-effective energy to communities and industries."
        ],
         (object) [
            'title' => 'Aviation',
            'image' => asset('assets/img/services/aviation.jpeg'),
            'content' => "We support the aviation industry with ground operations, logistics, and infrastructure solutions that enhance efficiency and passenger experience."
        ],
    ];
@endphp

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-red text-uppercase">{{ config('data.name') }}</h5>
            <h1 class="mb-0">TiberiasZores Services</h1>
        </div>
        <div class="row g-5">

            @foreach ($services as $service )
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <a href="#">
                             <img class="img-fluid" style="width: 1005; height: 280px;" src="{{ $service->image }}" alt="{{ $service->title }}">
                        </a>
                    </div>
                    <div class="p-4">
                
                        <h4 class="mb-3 text-red text-center">{{ $service->title }} </h4>
                        <p class="text-center">{{ $service->content }}</p>
                        {{-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>