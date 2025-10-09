
<?php
    $products = [
    (object)[
            "title" => "Product 1",
            "img" => "nagari/photo/cows1.jpg",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "price" => "100000"
    ],

    (object)[
            "title" => "Product 2",
            "img" => "nagari/photo/cow4.jpg",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "price" => "200000"
    ],

    (object)[
            "title" => "Product 3",
            "img" => "nagari/images/g3.jpg",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "price" => "4000000"
    ],
    (object)[
            "title" => "Product 4",
            "img" => "nagari/photo/cow4.jpg",
            "content" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
            "price" => "3000000"
    ],
];

?>

<section class="w3l-how-grids-3 py-5" id="how">
    <div class="container py-md-5">
      <div class="w3l-header mb-md-5 mb-4 text-center">
        <h6 class="sub-title">Healthy food</h6>
        <h3 class="hny-title">We Provide<br>High-Quality Products</h3>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
      </div>
  
      <!-- Swiper Slider Start -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">

         @foreach ($products as $product )
              <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="grdhny-info text-center">
                    <img src="{{ $product->img }}" class="img-curve img-fluid" alt="{{ $product->title }}" />
                    <h4 class="hnys-title">{{ $product->title }}</h4>
                    <p class="mt-2">{{ $product->content }}</p>
                    <div class="container">
                        <h6>{{ money_local_format($product->price) }}</h6>
                        {{-- <button class="btn btn-style btn-secondary mt-4">Order</button> --}}
                        <a href="#" class="btn btn-style btn-secondary mt-4">Order</a>
                    </div>
                    </div>
                </div>
         @endforeach
        
        </div>
  
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
  
        <!-- Pagination (optional) -->
        <div class="swiper-pagination"></div>
      </div>
      <!-- Swiper Slider End -->
    </div>

  </section>