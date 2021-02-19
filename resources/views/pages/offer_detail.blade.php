<!DOCTYPE html>
<html lang="fr">
   
   <head>
    <meta charset="UTF-8">
    <meta name="description" content="Allo Medic Assistance &amp; Détail de l'offre">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Allo Medic Assistance &amp; Détail de l'offre</title>
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
                  <h2 class="title">Offres</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Détail de l'offre</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>

      <section class="dento--blog-area mt-50">
        <div class="container">
           <div class="row">
              <div class="col-12 col-lg-9 mb-100">
                 <div class="blog-details-area">
                    <!--<img src="img/bg-img/24.jpg" alt="">-->
                    <h2 class="post-title">{{$post->title}}</h2>
                    <div class="post-meta">
                       <a href="#"><i class="icon_clock_alt"></i> {{ $post->created_at->format('m/d/Y') }}</a>
                       <a href="#"><i class="fa fa-map-marker"></i> {{$post->region}}</a>
                    </div>

                    <p>{!! $post->body!!}</p>

                 </div>
                <!-- <div class="post-share-area mb-30">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i> Share</a>
                    <a href="#" class="tweet"><i class="fa fa-twitter"></i> Tweet</a>
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Share</a>
                    <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Share</a>
                 </div>-->

                 <h5 class="mb-30">Caractéristiques de l'emploi</h5>

                 <table class="table">
                    <tbody>
                        <tr>
                            <td>Catégorie emploi</td>
                            <td>{{$post->category->title}}</td>
                        </tr>

                        <tr>
                            <td>Date de début de mission</td>
                            <td>{{$post->start_date}}</td>
                        </tr>

                        <tr>
                            <td>Date de fin de mission</td>
                            <td>{{$post->end_date}}</td>
                        </tr>

                        <tr>
                            <td>Rémunération jour</td>
                            <td>{{$post->day_pay}} €</td>
                        </tr>

                        <tr>
                            <td>Rémunération jour + astreinte</td>
                            <td>{{$post->day_pay + $post->penalty}} €</td>
                        </tr>
                        
                        <tr>
                            <td>Inscrit et qualifié par conseil de l'ordre Français</td>
                            <td> {{ $post->registered_with_council ? 'Requis' : 'Non Requis' }} </td>
                        </tr>

                        <tr>
                            <td>Logement, repas et frais de déplacements</td>
                            <td> {{ $post->accom_meal_travel ? 'Pris en charge' : 'Non Pris en charge' }} </td>
                        </tr>

                        <tr>
                            <td>Structure</td>
                            <td>{{$post->structure->title}} </td>
                        </tr> 
                        @if ($post->service != '')
                        <tr>
                            <td>Service</td>
                            <td>{{$post->service->title}} </td>
                        </tr>  
                        @endif     
                    </tbody>
                </table>
                 
                 <div class="contact-form mt-30">
                    <h5 class="mb-30">Postuler en ligne</h5>

                    <form action="#" method="post">

                       <div class="row">

                          <div class="col-lg-6">
                            <label>Nom <span class="text-danger">*</span></label>
                             <input type="text" name="name" class="form-control mb-30" placeholder="Nom" required>
                          </div>

                          <div class="col-lg-6">
                            <label>Prénom(s)</label>
                             <input type="text" name="message-name" class="form-control mb-30" placeholder=" Prénom(s)">
                          </div>

                          <div class="col-lg-6">
                            <label>Adresse email <span class="text-danger">*</span></label>
                             <input type="email" name="email" class="form-control mb-30" placeholder="Adresse email" required>
                          </div>

                          <div class="col-lg-6">
                            <label>Téléphone <span class="text-danger">*</span></label>
                            <input type="text" name="phone_number" class="form-control mb-30" placeholder="Téléphone" required>
                         </div>

                         <div class="col-lg-6">
                            <label>Inscription au Conseil de l'Ordre des médecins </label>
                            <input type="file" name="registration_file" class="mb-30">
                         </div>

                         <div class="col-lg-6">
                            <label>Joindre un CV <span class="text-danger">*</span></label>
                            <input type="file" name="cv_file" class="mb-30">
                         </div>

                          <div class="col-lg-12">
                            <div class="form-group">
                                <input type="checkbox" name="jobapp_rgpd[]" class="sjb-required" id="jobapp_rgpd" required="required"> J'accepte les conditions d'Allo Medic Assistance concernant la nouvelle réglementation sur la détention de données.  
                            </div>
                          </div>


                          <div class="col-12">
                             <textarea name="message" class="form-control mb-30" placeholder="Votre Message"></textarea>
                          </div>

                          <div class="col-12">
                             <button type="submit" class="btn dento-btn">Envoyer</button>
                          </div>
                       </div>

                    </form>
                 </div>
              </div>
              <div class="col-12 col-lg-3">
                 <div class="dento-sidebar">
                    <div class="single-widget-area search-widget">
                       <form action="#" method="post">
                          <input type="search" name="search" class="form-control" placeholder="Recherche ...">
                          <button type="submit"><i class="icon_search"></i></button>
                       </form>
                    </div>
                    <div class="single-widget-area catagories-widget">
                       <h5 class="widget-title">Catégories</h5>
                       <ul class="catagories-list">
                        @foreach( $categories as $category)
                            <li><a href="{{$category->getLink()}}">{{$category->title}}</a></li>
                        @endforeach
                       </ul>
                    </div>
                    <div class="single-widget-area news-widget">
                       <h5 class="widget-title">Dernières offres</h5>

                       <div class="single-news-area d-flex align-items-center">
                          <!--<div class="blog-thumbnail">
                             <img src="img/bg-img/21.jpg" alt="">
                          </div>-->
                          <div class="blog-content">
                             <a href="{{$post->getLink()}}" class="post-title">{{$post->title}}</a>
                             <span class="post-date">{{ $post->created_at->format('m/d/Y') }}</span>
                          </div>
                       </div>

                    </div>
                    <div class="single-widget-area adds-widget">
                       <a href="#"><img class="w-100" src="img/bg-img/adds.png" alt=""></a>
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