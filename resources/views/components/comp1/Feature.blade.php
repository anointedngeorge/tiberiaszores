<?php 

$features = [
    (object)[
        'icon' => 'fa fa-fire-extinguisher',
        'title' => 'Production and Process Control',
        'content' => 'The plant is automated and runs smoothly with minimum maintenance and manpower. The production process is constantly 
checked and controlled, ensuring that the parameters are in accord with set standards',
        'link' => '#url',
    ],
    (object)[
        'icon' => 'fa fa-american-sign-language-interpreting',
        'title' => 'Plant Maintenance',
        'content' => 'The Company has a team of in-house engineers and technicians equipped with the necessary skills and tools required for effective 
maintenance management carry out maintenance activities.',
        'link' => '#url',
    ],
    (object)[
        'icon' => 'fa fa-shower',
        'title' => 'packaging',
        'content' => 'The finished products are packed into 500m and 1 litre Tetra pack containers. Tetra packs provide enhanced convenience, portability, 
and shelf-stability.',
        'link' => '#url',
    ],
    (object)[
        'icon' => 'fa fa-leaf',
        'title' => 'Marketing & Distribution',
        'content' => 'The distribution of dairy products is a time-sensitive operation that 
requires careful planning and coordination.',
        'link' => '#url',
    ],
    (object)[
        'icon' => 'fa fa-superpowers',
        'title' => 'Research & Development',
        'content' => 'Integrated Dairy has invested in research and development, and in start-of the-art dairy farming technology.',
        'link' => '#url',
    ],
    (object)[
        'icon' => 'fa fa-flask',
        'title' => 'Pricing Strategy',
        'content' => 'The Company’s product pricing policy reflects prevailing market circumstances 
and provides reasonable margin for the Company and its distribution partners',
        'link' => '#url',
    ],
];


?>



<section class="w3l-features14" id="services">
    <div class="w3l-feature-6-main py-5">
      <div class="container py-lg-5">
        <div class="wrapper-max">
          <div class="header-section text-center mb-5">
            <h6 class="sub-title">Services We Do</h6>
            <h3 class="hny-title two">
              Services We Provided
            </h3>
          </div>
          
          @foreach (collect($features)->chunk(3) as $group)
              <div class="grid mt-lg-4">
                  @foreach ($group as $feature)
                      <div class="w3l-feature-6-gd">
                          <div class="icon"><span class="{{ $feature->icon }}"></span></div>
                          <div class="w3l-feature-6-gd-info">
                              <h3><a href="{{ $feature->link }}">{{ $feature->title }}</a></h3>
                              <p>{{ $feature->content }}</p>
                             
                          </div>
                      </div>
                  @endforeach
              </div>
          @endforeach

  
  
              <center> <p><a href="{{ route('frontend.page', ['pagename' => 'profile']) }}" class="btn btn-style btn-secondary mt-4">Read More</a></p></center>
        </div>
      </div>
    </div>
  </section>