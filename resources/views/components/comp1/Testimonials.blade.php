<?php
  $testimonials = [
    (object)[
        'name' => 'Mrs. Ifeoma Umeh, Abuja',
        'image' => 'nagari/logo.jpeg',
        'quote' => "Nagari Farms has completely changed the way I shop for dairy. The milk is always fresh, and I love knowing it's coming directly from a trusted local source. My family can taste the difference!",
        'location' => 'Abuja',
    ],
    (object)[
        'name' => 'Mr. Samuel Adewale, Port Harcourt',
        'image' => 'nagari/logo.jpeg',
        'quote' => "Their customer service is top-notch and the quality of their farm produce is unmatched. I order vegetables and fresh eggs weekly and they've never disappointed!",
        'location' => 'Port Harcourt',
    ],
    (object)[
        'name' => 'Chef Grace Eze, Lagos',
        'image' => 'nagari/logo.jpeg',
        'quote' => "I've tried many suppliers before, but none compares to the consistency and freshness from Nagari Integrated Dairy Farms. As a chef, I rely on high-quality ingredients, and Nagari delivers every time.",
        'location' => 'Lagos',
    ],

];


?>


<section class="w3l-clients" id="clients">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-4 py-md-3 pb-lg-0">
        <div class="heading text-center mx-auto">
          <h6 class="sub-title text-center">Here’s what they have to say</h6>
          <h3 class="hny-title mb-md-5 mb-4">our clients do the talking</h3>
        </div>
        <!-- /grids -->
        <div class="testimonial-width mt-5">
          <div id="owl-demo1" class="owl-two owl-carousel owl-theme">


            @foreach ($testimonials as $testimonial )
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <blockquote>
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    {{ $testimonial->quote }}
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{ $testimonial->image }}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>{{ $testimonial->name }}</h3>
                      <p class="indentity">{{ $testimonial->location }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
        </div>
      </div>
      <!-- /grids -->
    </div>
    <!-- //grids -->
  </section>