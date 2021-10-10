@include('templates.partials.header')
       
                
            </div>
        </header>
        
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Kesenian Banjarmasin</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead">Kesenian adalah bagian dari budaya dan merupakan sarana yang digunakan untuk mengekpresikan rasa keindahan dari dalam jiwa manusia, Kesenian uga suatu kompleks dari ide-ide, gagasan, nilai-nilai, norma-norma, dan peraturan dimana kompleks aktivitas dan tindakan berpola dari manusia dalam masyarakat dan biasanya berwujud benda-benda hasil manusia.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Seni tradisional banjar adalah unsur kesenian yang menjadi bagian hidup masyarakat dalam suku banar, Urang banjar mengembangkan sistem budaya, sistem sosial dan material budaya yang berkaitan dengan religi, melalui berbagai proses adaptasi, akulturasi, dan asimilasi. Sehingga tampak terjadinya pembauran dalam aspek-aspek budaya.</p></div>
                </div>
                <!-- About Section Button-->
                
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kesenian Banjarmasin</h2>
                <div class="page-section">
    

      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/assets/assets/img/baksaaa.png')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title">Tarian Baksa</h5>
              
            </div>
          </div>
        </div>

        
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/assets/assets/img/madihin2.png')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title">Madihin</h5>
              
            </div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb">
                <img src="{{ asset('/assets/assets/img/mandaa2.png')}}" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title">Mamanda</h5>
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        @include('templates.partials.footer')
       