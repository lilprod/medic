<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Etablissements de santé">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Etablissements de santé</title>
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

      <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url({{asset('assets/website/img/bg-img/12.jpg') }});">
        <div class="container h-100">
           <div class="row h-100 align-items-center">
              <div class="col-12">
                 <h2 class="title">Etablissements de santé</h2>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcumb--con">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fa fa-home"></i> Accueil</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Etablissements de santé</li>
                    </ol>
                 </nav>
              </div>
           </div>
        </div>
     </div>

     <!--Content-->

     <section class="dento-about-us-area mt-50">
      <div class="container">


         <div class="row align-items-center">

            <div class="col-lg-12">
               <div class="about-us-content mb-50">

                  <div class="section-heading">
                     <h6>Notre réseau de médecins couvre tous vos besoins en remplacement.</h6>
                     <div class="line"></div>
                  </div>

                  <h6>On vérifie systématiquement les qualifications des médecins et leur inscription au Conseil de l’Ordre :</h6>
                  
                  <p class="text-justify">la majorité des établissements de santé (Centres Hospitaliers, Polycliniques, Cliniques) nous font déjà confiance.</p>
                  
                  <p class="text-justify"> <b>Partout en France</b>, notre équipe met tout en œuvre pour vous trouver les solutions de placement médical les plus adaptées à vos besoins.</p>
                  <p class="text-justify"> <b>Notre réseau de médecins assure avec sérieux des missions de courte, moyenne ou longue durée et toutes</b> les spécialités médicales sont représentées.</p>

               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="dento-blog-area section-padding-10-0 clearfix">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="section-heading">
                  <h6>Les services + d’Allo Médic Assistance :</h6>
                  <div class="line"></div>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
                  <img src="{{asset('assets/website/img/bg-img/Etablissement-de-santé-1.png') }}" alt="">
                  
                  <div class="blog-content">

                        <p class="text-justify"><i class="fa fa-square"></i> Vous aurez un interlocuteur formé à la spécialité médicale qui vous intéresse.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On analyse chaque demande pour sélectionner le profil qu’il vous faut.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On vous accompagne à toutes les étapes du recrutement.</p>
                     
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
                  <img src="{{asset('assets/website/img/bg-img/Etablissement-de-santé-2.png') }}" alt="">

                  <div class="blog-content">

                        <p class="text-justify"><i class="fa fa-square"></i> On est disponible 24h/24 et 7 jours/7.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On est à votre disposition même les weekends et jours fériés.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> Après 18h, on assure une permanence téléphonique pour vous aider à gérer les urgences.</p>
                     
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
  
                  <img src="{{asset('assets/website/img/bg-img/Etablissement-de-santé-3.png') }}" alt="">
             
                  <div class="blog-content">
                    
                     <p class="text-justify"><i class="fa fa-square"></i>  On gère les plannings des médecins.</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  On vous garantit une continuité des soins et une sécurité de prise en charge.</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  On vous accompagne dans vos démarches administratives.</p>

                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>

   <section class="dento-blog-area section-padding-10-0 clearfix">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-12">
               <p class="text-justify"> <b>Pour en savoir plus, <a href="#"><b>inscrivez-vous</b></a> sur notre site ou <a href="#"><b>contactez-nous</b></a>. Nos experts sont à votre écoute pour répondre à toutes vos questions.</p>
            </div>
         </div>
      </div>
   </section>

     <!--End Content-->

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