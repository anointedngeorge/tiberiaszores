<?php
    $sliders = [
        (object)[
                  "title" => "Experience The Best Of Our Cows",
                  "sub_title"=>"Good Food", 
                  "image"=> "nagari/photo/cows1.jpg",
                  "is_title"=>false,
                  "image2" => (object)["title" => "...", "image" => "nagari/photo/cows1.jpg"],
            ],

            (object)[
                  "title" => "Meet  Our Best Doctors ",
                  "sub_title"=>"Good Food", 
                  "image"=> "nagari/photo/m2.jpeg",
                  "is_title"=>false,
                  "image2" => (object)["title" => "...", "image" => "nagari/photo/cows1.jpg"],
            ],

            (object)[
                  "title" => "Consultation",
                  "sub_title"=>"Good Food", 
                  "image"=> "nagari/photo/m1.jpeg",
                  "is_title"=>false,
                  "image2" => (object)["title" => "...", "image" => "nagari/photo/cows1.jpg"],
            ],

            (object)[
                  "title" => "Experience The Best Of Our Milk",
                  "sub_title"=>"Good Food", 
                  "image"=> "nagari/photo/cow4.jpg",
                  "is_title"=>false,
                  "image2" => (object)["title" => "...", "image" => "nagari/photo/cows1.jpg"],
            ],
    ]

?>


<section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Enjoy our Photos</h6>
          <h3 class="hny-title">Gallery</h3>
        </div>
  
        <!-- Swiper Container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            @foreach ($sliders as $slider )
                <!-- Slide 1 -->
                <div class="swiper-slide">
                <div class="box16">
                    <img style="height: 500px;" src="{{ asset($slider->image) }}" alt="{{ $slider->title }}" class="img-fluid" />
                </div>
                </div>
            @endforeach
        
          </div>
  
          <!-- Swiper Controls -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section>
  