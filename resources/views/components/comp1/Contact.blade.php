
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Contact</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <div class="contact-form py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
      <h3 class="hny-title mb-lg-5 mb-4">Get in touch</h3>
        <div class="contacts12-main mb-5">
            <form action="#" method="post">
                <div class="main-input">
                    <div class="d-grid">
                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name" class="contact-input" />
                        <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Phone Number"
                            class="contact-input" />
                    </div>
                    <div class="d-grid">
                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email id"
                            class="contact-input" required />
                        <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject"
                            class="contact-input" />
                    </div>
                </div>
                <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage"
                    placeholder="Type your message here" required></textarea>
                <div class="text-right">
                    <button class="btn btn-style btn-secondary btn-contact">Submit Now</button>
                </div>
            </form>
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
    </div>
  </div>
   @include('components.Map')
<!--//contact-->