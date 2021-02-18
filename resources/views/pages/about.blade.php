<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Notre Agence">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Notre Agence</title>
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
                 <h2 class="title">Notre Agence</h2>
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
                       <li class="breadcrumb-item active" aria-current="page">Notre Agence</li>
                    </ol>
                 </nav>
              </div>
           </div>
        </div>
     </div>

     <!--Content-->

     <section class="dento-about-us-area mt-70">
      <div class="container">
         <div class="row align-items-center">

            <div class="col-lg-12">
               <div class="about-us-content mb-50">
                  <div class="section-heading">
                     <h6>Allo Médic Assistance est le pionnier du remplacement médical en France</h6>
                     <div class="line"></div>
                  </div>
                  <p class="text-justify">Depuis plus de 30 ans, notre équipe met tout en œuvre pour être l’intermédiaire privilégié des établissements de santé (publics ou privés) et des médecins remplaçants.
                  </p>

                  <h6>Comment est née Allo Médic Assistance ?</h6>

                  <p class="text-justify">En 1984, Alice Abecassis constate la difficulté des établissements de santé à recruter du personnel médical. Créer une entreprise pour les aider à trouver des médecins, lui semble une évidence. Allo Médic Assistance est née ! Depuis, l’agence a bien grandi grâce aux 700 centres hospitaliers et polycliniques qui nous font confiance.</p>

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
                  <h6>Pourquoi nous choisir ?</h6>
                  <div class="line"></div>
               </div>
            </div>
         </div>
         <div class="row">

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
              
                  <img src="{{asset('assets/website/img/bg-img/NOTRE-AGENCE-1.png') }}" alt="">
             
                  <div class="blog-content">
                     <p><b>1. Transparence :</b></p>
                     <p class="text-justify">On partage avec vous toutes les informations dont nous disposons.</p>
                     <p><b>2. Ecoute :</b></p>
                     <p class="text-justify">On est attentif à vos besoins pour vous proposer une solution sur-mesure.</p>
                     <p><b>3. Réactivité :</b></p>
                     <p class="text-justify">On est disponible 7 jours/7, 24h/24.</p>
                     <p><b>4. Sérieux :</b></p>
                     <p class="text-justify">On respecte nos engagements.
                     <p><b>5. Proximité :</b></p>
                     <p class="text-justify">On tisse des liens durables et on connaît bien votre métier.</p>
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
              
                  <img src="{{asset('assets/website/img/bg-img/NOTRE-AGENCE-2.png') }}" alt="">
          
                  <div class="blog-content">

                        <p class="text-justify"><i class="fa fa-square"></i> + <b>de 700 centres hospitaliers</b> qui nous font confiance au niveau national</p>
                        <p class="text-justify"><i class="fa fa-square"></i> + <b>de 100 médecins</b> en poste sur toute la France</p>
                        <p class="text-justify"><i class="fa fa-square"></i> + <b>de 15 000 médecins</b> toutes disciplines confondues</p>
                     
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
            
                  <img src="{{asset('assets/website/img/bg-img/NOTRE-AGENCE-3.png') }}" alt="">
               
                  <div class="blog-content">
                    
                     <p class="text-justify"><i class="fa fa-square"></i>  <b>On connait bien votre métier</b> après plus de 30 ans à vos côtés.</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  <b>On est toujours disponible</b> et réactif, 24h/24 et 7j/7.</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  Vous aurez <b>un interlocuteur dédié</b> , à votre écoute.</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  <b>On s’occupe de tout</b> et on vous accompagne à chaque étape du remplacement médical.</p>

                     <div class="post-meta">
                     </div>
                  </div>
               </div>
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