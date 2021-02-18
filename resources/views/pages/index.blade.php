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

      <style>
         .icon-circle.icon-xl {
            width: 137px;
            height: 137px;
            line-height: 135px;
            font-size: 50px;
         }
      </style>
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
              <!--<div class="col-12 col-md-6">
                 <div class="about-us-thumbnail mb-50">
                    <img src="{{asset('assets/website/img/bg-img/15.jpg') }}" alt="">
                 </div>
              </div>-->
              <div class="col-lg-10 offset-lg-1">
                 <div class="about-us-content mb-50">
                    <div class="section-heading text-center">
                       <h2>Présentation</h2>
                       <div class="line"></div>
                    </div>

                    <h6 class="text-center">Depuis plus de 30 ans…</h6>
                    <h6 class="text-center">Allo Medic Assistance spécialiste du remplacement médical</h6>
                    <p class="text-center">Au fil des ans, notre équipe a su gagner la confiance de ses partenaires et devenir l’intermédiaire privilégié</p>
                    <p class="text-center">des <a href="#">établissements de santé</a> et des <a href="#">médecins remplaçants</a></p>

                    <!--<div class="single-skills-area mt-30">
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
                    </div>-->

                 </div>
              </div>
           </div>
        </div>
     </section>

     <div class="container">
        <div class="dento-border clearfix"></div>
     </div>

     <section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('{{asset('assets/website/img/bg-img/13.jpg') }}');">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-12 ">
                 <div class="service-content mb-30">
                    <div class="section-heading white">
                       <h2>Nos services</h2>
                       <div class="line"></div>
                    </div>
                    <div class="row">

                       <div class="col-md-3">
                          <div class="single-service mb-70">
                             <!--<img src="img/core-img/s1.png" alt="">-->
                             <div class="icon-circle icon-xl text-middle text-white">
                                 <i class="fa fa-vcard-o" aria-hidden="true"></i>
                             </div>
                             
                             <h6>NOS OFFRES</h6><br>
                             <h6>Réactivité et solution « gagnant-gagnant »</h6><br>
                             <p class="text-justify" style="color: white;">Dès qu’une offre est disponible, on la diffuse ! On veille à trouver la meilleure adéquation entre médecin et établissement de santé qui cherchent une solution de remplacement.</p>
                          </div>
                       </div>

                       <div class="col-md-3">
                          <div class="single-service mb-70">
                            <!-- <img src="img/core-img/s2.png" alt="">-->
                             <div class="icon-circle icon-xl text-middle text-white">
                                 <i class="fa fa-hospital-o" aria-hidden="true"></i>
                             </div>
                             <h6>ÉTABLISSEMENTS DE SANTÉ</h6><br>
                             <h6>Vos démarches simplifiées et la continuité des services, assurée</h6><br>
                             <p class="text-justify" style="color: white;">On s’engage à vous accompagner et à prendre en charge la gestion des plannings de votre personnel pour assurer la continuité des services.</p>
                          </div>
                       </div>

                       <div class="col-md-3">
                          <div class="single-service mb-70">
                            <!-- <img src="img/core-img/s3.png" alt="">-->
                             <div class="icon-circle icon-xl text-middle text-white">
                                 <i class="fa fa-user-md" aria-hidden="true"></i>
                             </div>
                             <h6>PERSONNEL MÉDICAL​</h6><br>
                             <h6>Des remplacements qui vous ressemblent</h6>
                             <p class="text-justify" style="color: white;">Notre équipe s’engage à vous contacter régulièrement pour vous proposer des missions de remplacements de courte, moyenne et longue durée, en accord avec votre expérience et vos préférences.</p>
                          </div>
                       </div>

                       <div class="col-md-3">
                          <div class="single-service mb-70">
                             <!--<img src="{{asset('assets/website/img/core-img/s4.png') }}" alt="">-->
                             <div class="icon-circle icon-xl text-middle text-white">
                              <i class="fa fa-home" aria-hidden="true"></i>
                             </div>
                             <h6>NOTRE AGENCE​</h6><br>
                             <h6>Une équipe disponible qui cultive la proximité</h6>
                             <p class="text-justify" style="color: white;">On simplifie vos démarches et on reste à votre disposition en permanence pour vous aider à accomplir au mieux votre mission.</p>
                          </div>
                       </div>

                      <!-- <div class="col-6 col-md-4">
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
                       </div>-->

                    </div>
                 </div>
              </div>
              <!--<div class="col-12 col-lg-6">
                 <div class="dento-video-area mb-100">
                    <img src="img/bg-img/14.jpg" alt="">
                    <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
                 </div>
              </div>-->
           </div>
        </div>
     </section>

     <section class="dento-blog-area section-padding-100-0 clearfix">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="section-heading text-center">
                    <h2>Dernières offres</h2>
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

           </div>

           <div class="row">
               <div class="col-12">
                  <div class=" text-center">
                     <a href="{{route('blog')}}" class="btn dento-btn mx-2">Tout lire</a>
                  </div>
               </div>
            </div>
            <br>

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