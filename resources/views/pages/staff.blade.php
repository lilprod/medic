<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Personnel Médical">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Personnel Médical</title>
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
                 <h2 class="title">Personnel Médical</h2>
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
                       <li class="breadcrumb-item active" aria-current="page">Personnel Médical</li>
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

                  <h6>Rejoignez la communauté des 15 000 médecins avec qui nous sommes en lien constant. Toute l’année des missions de remplacements de courte, moyenne ou longue durée partout en France</h6>
                  
                  <p class="text-justify"><i class="fa fa-square"></i> Choisissez-nous ! On vous contactera dès qu’une opportunité qui vous ressemble se présente.
                  </p>
                  <p class="text-justify"><i class="fa fa-square"></i> Quelle que soit votre spécialité, on est toujours à la recherche de nouveaux médecins pour rejoindre notre communauté.</p>

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

                        <p class="text-justify"><i class="fa fa-square"></i> Un référent dédié, par spécialité médicale.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On tient compte de vos préférences (secteur géographique, particularités de la mission…)</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On connait bien votre métier et votre spécialité.</p>
                     
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
                  <img src="{{asset('assets/website/img/bg-img/Personnel-medical-2.png') }}" alt="">

                  <div class="blog-content">

                        <p class="text-justify"><i class="fa fa-square"></i> On facilite votre intégration au sein de l’établissement de santé qui vous accueille.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On vous aide à préparer vos déplacements ainsi que vos séjours.</p>
                        <p class="text-justify"><i class="fa fa-square"></i> On vous conseille (conseils juridique et fiscaux, contrats d’assurance professionnelle, etc.)</p>
                     
                     <div class="post-meta">
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
               <div class="single-blog-item mb-100">
  
                  <img src="{{asset('assets/website/img/bg-img/Personnel-medical-3.png') }}" alt="">
             
                  <div class="blog-content">
                    
                     <p class="text-justify"><i class="fa fa-square"></i>  On organise votre planning. Confiez-le nous!</p>
                     <p class="text-justify"><i class="fa fa-square"></i>  On gère vos démarches administratives dans toutes vos missions de remplacement.</p>
              
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