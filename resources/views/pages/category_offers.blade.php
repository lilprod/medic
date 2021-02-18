<!DOCTYPE html>
<html lang="fr">
   
   <head>
    <meta charset="UTF-8">
    <meta name="description" content="Allo Medic Assistance &amp; Offres par Catégorie">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Allo Medic Assistance &amp; Offres par Catégorie</title>
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
                  <h2 class="title">Offres par Catégorie</h2>
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
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Offres par Catégorie</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>

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