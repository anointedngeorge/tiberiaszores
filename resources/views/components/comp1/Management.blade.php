<?php
    $teams = [
      (object)[
            "name" => "Senator (Dr.) Abdullahi Adamu",
            "position" => "Founder",
            "img" => "nagari/founder.png",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "#"
        ],
        (object)[
            "name" => "Muhammad Nuraini Adamu MNSE",
            "position" => "Executive Director",
            "img" => "nagari/t1.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "#"
        ],
        (object)[
            "name" => "Prof Ojowu",
            "position" => "Chairman",
            "img" => "nagari/d1.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "#"
        ],
        
        (object)[
            "name" => "Arch Kabiru",
            "position" => "#",
            "img" => "nagari/d2.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "#"
        ],

        (object)[
            "name" => "Barr Akubo SAN",
            "position" => "#",
            "img" => "nagari/d3.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "#"
        ]

    ];

?>


<section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          {{-- <h6 class="sub-title">Hard Wor</h6> --}}
          <h3 class="hny-title">Board Of Directors</h3>
        </div>
  
        <!-- Swiper Container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            @foreach ($teams as $team )
                <!-- Slide 1 -->
                <div class="swiper-slide">
                <div class="box16">
                    <a href="#url"><img style="height: 500px;" src="{{ asset($team->img) }}" alt="{{ $team->name }}" class="img-fluid" /></a>
                    <div class="box-content">
                    <h3 class="title"><a href="#url">{{ $team->name }}</a></h3>
                    <span class="post">{{ $team->position }}</span>
                    <ul class="social">
                        <li><a href="{{ $team->facebook }}" class="facebook"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="{{ $team->twitter }}" class="twitter"><span class="fa fa-twitter"></span></a></li>
                    </ul>
                    </div>
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
  