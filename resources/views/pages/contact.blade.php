<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Contact">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Contact</title>
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
                 <h2 class="title">Contact</h2>
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
                       <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                 </nav>
              </div>
           </div>
        </div>
     </div>

     <section class="dento-contact-area mt-50 mb-100">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="google-maps mb-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11956.9355465873!2d24.0768412544878!3d56.9550599906977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2z4Kaw4Ka_4KaX4Ka-LCDgprLgp43gpq_gpr7gpp_gp43gpq3gpr_gpoY!5e0!3m2!1sbn!2sbd!4v1543911160102" allowfullscreen></iframe>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-12 col-md-4">
                 <div class="contact-information">
                    <h5>Adresse</h5>
                    <p>24 place Raoul Follereau, 75010 Paris</p>
                    <h5>Téléphone</h5>
                    <p>01.48.03.13.00</p>
                    <h5>Fax</h5>
                    <p>01.48.03.02.62</p>
                    <h5>Email</h5>
                    <p class="mb-0">allomed@allo-medic.com</p>
                 </div>
              </div>
              <div class="col-12 col-md-8">
                 <div class="contact-form">
                    <div class="section-heading">
                       <h2>Rester en Contact</h2>
                       <div class="line"></div>
                    </div>
                    <form action="#" method="post">
                       <div class="row">
                          <div class="col-lg-6">
                             <input type="text" name="message-name" class="form-control mb-30" placeholder="Votre nom">
                          </div>
                          <div class="col-lg-6">
                             <input type="email" name="message-email" class="form-control mb-30" placeholder="Votre adresse email">
                          </div>
                          <div class="col-12">
                             <textarea name="message" class="form-control mb-30" placeholder="Votre message"></textarea>
                          </div>
                          <div class="col-12">
                             <button type="submit" class="btn dento-btn">Envoyer Message</button>
                          </div>
                       </div>
                    </form>
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