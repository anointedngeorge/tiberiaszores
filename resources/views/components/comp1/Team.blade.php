<?php
    $teams = [
        // (object)[
        //     "name" => "Muhammad Nuraini Adamu MNSE",
        //     "position" => "Executive Director",
        //     "img" => "nagari/t1.jpeg",
        //     "facebook" => "#",
        //     "instagram" => "#",
        //     "twitter" => "",
        //     "contents" => [

        //     ]
        // ],
        (object)[
            "name" => "Dr junaidu",
            "position" => "Vet Scientist",
            "img" => "nagari/t3.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "",
            "contents" => [

            ]
        ],

        (object)[
            "name" => "Enenche Usman",
            "position" => "Marketing Manager",
            "img" => "nagari/t5.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "",
            "contents" => [

            ]
        ],
        (object)[
            "name" => "Dr Majeed Baje",
            "position" => "Executive Director",
            "img" => "nagari/t4.jpeg",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "",
            "contents" => [

            ]
        ],

        (object)[
            "name" => "Mr Isaac Adah",
            "position" => "Manager/QCM",
            "img" => "nagari/b1.png",
            "facebook" => "#",
            "instagram" => "#",
            "twitter" => "",
            "contents" => [

            ]
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
        <div class="row">

          @foreach ($teams as $team)
            <div class="col-lg-4 col-6 mt-lg-5 mt-4">
              <div class="box16">
                <a href="#url"><img src="{{ asset($team->img) }}" alt="" class="img-fluid" /></a>
                <div class="box-content">
                  <h3 class="title"><a href="#url">{{ $team->name }}</a></h3>
                  <span class="post">{{ $team->position }}</span>
                  <ul class="social">
                    <li>
                      <a href="#" class="facebook">
                        <span class="fa fa-facebook-f"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="twitter">
                        <span class="fa fa-twitter"></span>
                      </a>
                    </li>
                  </ul>
                </div>
                
              </div>
              @foreach ($team->contents as $param)
                  <p>{{ $param }}</p>
              @endforeach
              
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </section>