
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Profile</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> profile </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <div class="contact-form py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
      <h3 class="hny-title mb-lg-5 mb-4">Companies Profile</h3>
        <div class="contacts12-main mb-5">
            <iframe src="{{ asset('nagari/profile.pdf') }}" width="100%" height="800px"></iframe>
        </div>
            
        <div class="row pt-lg-4">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-map-marker"></span> <span>{{ config("data.address") }}</span> </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-phone"></span> <span><a class="" href="tel:+(21)-234-9999">Phone :{{ config('data.phone1') }}</a>
                                 <a class="" href="tel:+(21)-234-8888">Fax : {{ config('data.phone2') }}</a></span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                      <div class="contact-address">
                          <ul>
                            <li class="icon-color"><span class="fa fa-mail-reply"></span><span>
                              <a href="mailto:agricfarm@mail.com"> {{ config('data.url') }}</a>
                              <a href="mailto:info@agricfarm.com"> {{ config('data.email') }}</a>
                             </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      {{-- profile --}}
    </div>
  </div>

  @include('components.Map')
<!--//contact-->