<?php
    $teams = [
        // [
        //     "name" => "Muhammad Nuraini Adamu MNSE",
        //     "position" => "Executive Director",
        //     "img" => "nagari/t1.jpeg",
        //     "facebook" => "#",
        //     "instagram" => "#",
        //     "twitter" => ""
        // ],
        [
            "name" => "Dr junaidu",
            "position" => "Vet Scientist",
            "img" => "nagari/t3.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => ""
        ],

        [
            "name" => "Enenche Usman",
            "position" => "Marketing Manager",
            "img" => "nagari/t5.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => ""
        ],
        [
            "name" => "Dr Majeed Baje",
            "position" => "Executive Director",
            "img" => "nagari/t4.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => ""
        ],

        [
            "name" => "Mr Isaac Adah",
            "position" => "Manager/QCM",
            "img" => "nagari/b1.png",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => ""
        ],
    ];

?>


<section class="w3l-team" id="team">
    <div class="team-block py-5">
      <div class="container py-lg-5">
        <div class="title-content text-center mb-lg-3 mb-4">
          <h6 class="sub-title">Hard Working People</h6>
          <h3 class="hny-title">Our Team</h3>
        </div>
  
        <!-- Swiper Container -->
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            @foreach ($teams as $team )
                <!-- Slide 1 -->
                <div class="swiper-slide">
                <div class="box16">
                    <a href="#url"><img style="height: 500px;" src="{{ asset($team["img"]) }}" alt="{{ $team["name"] }}" class="img-fluid" /></a>
                    <div class="box-content">
                    <h3 class="title"><a href="#url">{{ $team["name"] }}</a></h3>
                    <span class="post">{{ $team["position"] }}</span>
                    <ul class="social">
                        <li><a href="{{ $team['facebook'] }}" class="facebook"><span class="fa fa-facebook-f"></span></a></li>
                        <li><a href="{{ $team['twitter'] }}" class="twitter"><span class="fa fa-twitter"></span></a></li>
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
  