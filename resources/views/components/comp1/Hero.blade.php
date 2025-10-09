

<!-- Header Start -->

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
 <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">

        {{-- start --}}
        @foreach ($sliders as $slider )
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2" style="
                background: url('{{ $slider->image }}') no-repeat center; background-size: cover;
                min-height:100vh;
                position: relative;
                z-index: 0;
                display: grid;
                align-items: center;
                margin-top: 90px;"
                >
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                    <p>{{ $slider->sub_title }}</p>
                    <h5>{{ $slider->title }}</h5>
                    <a href="#" class="btn btn-white">Read More</a>
                  </div>
                </div>
              </div>
              <div class="banhny-w3grids">
                <div class="banhny-w3grids-1">
                  <img src="{{ $slider->image }}" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">{{ $slider->sub_title }}</a></h4>
                </div>
                <?php if ($slider->image2->image != "") { ?>
                <div class="banhny-w3grids-1">
                  <img src="{{ $slider->image2->image }}" class="img-curve img-fluid" alt="" />
                  <h4><a href="#" class="hnys-title">{{ $slider->image2->title }}</a></h4>
                </div>
                <?php } ?>
              </div>
            </div>
          </li>
        </div>
        @endforeach
        {{-- end --}}
      </div>
    </div>
  </section>