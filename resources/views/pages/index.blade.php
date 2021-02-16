<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Accueil">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Accueil</title>
      <link rel="icon" href="img/core-img/favicon.ico">
      <link rel="stylesheet" href="{{asset('assets/website/style.css') }}">
   </head>
   <body>
      <div id="preloader">
         <div class="preload-content">
            <div id="dento-load"></div>
         </div>
      </div>

      <!-- header-->
        @include('website.header')
      <!--End  header-->

      <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
           <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url({{asset('assets/website/img/bg-img/1.jpg') }});">
              <div class="container h-100">
                 <div class="row h-100 align-items-center">
                    <div class="col-12">
                       <div class="welcome-text text-center">
                          <h2 data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
                          <p data-animation="fadeInUp" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                             offer you.
                          </p>
                          <div class="welcome-btn-group">
                             <a href="#" class="btn dento-btn mx-2" data-animation="fadeInUp" data-delay="500ms">Get Started</a>
                             <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInUp" data-delay="700ms">Contact Us</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url({{asset('assets/website/img/bg-img/2.jpg') }});">
              <div class="container h-100">
                 <div class="row h-100 align-items-center">
                    <div class="col-12">
                       <div class="welcome-text text-center">
                          <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
                          <p data-animation="fadeInDown" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to
                             offer you.
                          </p>
                          <div class="welcome-btn-group">
                             <a href="#" class="btn dento-btn mx-2" data-animation="fadeInDown" data-delay="500ms">Get Started</a>
                             <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInDown" data-delay="700ms">Contact Us</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section class="dento-about-us-area section-padding-100-0">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-12 col-md-6">
                 <div class="about-us-thumbnail mb-50">
                    <img src="img/bg-img/15.jpg" alt="">
                 </div>
              </div>
              <div class="col-12 col-md-6">
                 <div class="about-us-content mb-50">
                    <div class="section-heading">
                       <h2>About Us</h2>
                       <div class="line"></div>
                    </div>
                    <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel. Pellentesque ultrices nisl quam iaculis, nec pulvinar
                       augue.
                    </p>
                    <div class="single-skills-area mt-30">
                       <h6>Experience Dentist</h6>
                       <div id="bar1" class="barfiller">
                          <span class="tip"></span>
                          <span class="fill" data-percentage="80"></span>
                       </div>
                    </div>
                    <div class="single-skills-area mt-30">
                       <h6>Modern Equipment</h6>
                       <div id="bar2" class="barfiller">
                          <span class="tip"></span>
                          <span class="fill" data-percentage="65"></span>
                       </div>
                    </div>
                    <div class="single-skills-area mt-30">
                       <h6>Friendly Staff</h6>
                       <div id="bar3" class="barfiller">
                          <span class="tip"></span>
                          <span class="fill" data-percentage="85"></span>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <div class="container">
        <div class="dento-border clearfix"></div>
     </div>

     <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('img/bg-img/13.jpg');">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-12 col-lg-6">
                 <div class="service-content mb-30">
                    <div class="section-heading white">
                       <h2>Our Services</h2>
                       <div class="line"></div>
                    </div>
                    <div class="row">
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s1.png" alt="">
                             <h6>Teeth Whitening</h6>
                          </div>
                       </div>
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s2.png" alt="">
                             <h6>Missing Teeth</h6>
                          </div>
                       </div>
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s3.png" alt="">
                             <h6>Teeth Whitening</h6>
                          </div>
                       </div>
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s4.png" alt="">
                             <h6>Cosmetic Dentistry</h6>
                          </div>
                       </div>
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s5.png" alt="">
                             <h6>Examination</h6>
                          </div>
                       </div>
                       <div class="col-6 col-md-4">
                          <div class="single-service mb-70">
                             <img src="img/core-img/s1.png" alt="">
                             <h6>Teeth Pain</h6>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-lg-6">
                 <div class="dento-video-area mb-100">
                    <img src="img/bg-img/14.jpg" alt="">
                    <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section class="dento-blog-area section-padding-100-0 clearfix">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="section-heading text-center">
                    <h2>The Latest News</h2>
                    <div class="line"></div>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-blog-item mb-100">
                    <a href="blog-details.html">
                    <img src="img/bg-img/4.jpg" alt="">
                    </a>
                    <div class="blog-content">
                       <a href="blog-details.html" class="post-title">How your mouth bacteria can harm your lungs</a>
                       <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
                       <div class="post-meta">
                          <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                          <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-blog-item mb-100">
                    <a href="blog-details.html">
                    <img src="img/bg-img/5.jpg" alt="">
                    </a>
                    <div class="blog-content">
                       <a href="blog-details.html" class="post-title">What is the best kind of toothpaste to use?</a>
                       <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
                       <div class="post-meta">
                          <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                          <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                 <div class="single-blog-item mb-100">
                    <a href="blog-details.html">
                    <img src="img/bg-img/6.jpg" alt="">
                    </a>
                    <div class="blog-content">
                       <a href="blog-details.html" class="post-title">Why you should avoid sipping your drinks</a>
                       <p>Donec tempor, lorem et euismod eleifend, est lectus laoreet ante, sed accusan justo diam ...</p>
                       <div class="post-meta">
                          <a href="#"><i class="icon_clock_alt"></i> 28 Sep 2018</a>
                          <a href="#"><i class="icon_chat_alt"></i> 3 Comments</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <!-- footer-->
     @include('website.footer')
     <!--End  footer-->
      <script src="{{asset('assets/website/js/jquery.min.js') }}"></script>
      <script src="{{asset('assets/website/js/popper.min.js') }}"></script>
      <script src="{{asset('assets/website/js/bootstrap.min.js') }}"></script>
      <script src="{{asset('assets/website/js/dento.bundle.js') }}"></script>
      <script src="{{asset('assets/website/js/default-assets/active.js') }}"></script>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-23581568-13');
      </script>
   </body>
</html>