<!DOCTYPE html>
<html lang="fr">
   
   <head>
    <meta charset="UTF-8">
    <meta name="description" content="Allo Medic Assistance &amp; Nos Offres">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Allo Medic Assistance &amp; Nos Offres</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Offres</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>

      <section class="dento-blog-area mt-50">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-9">

                  @foreach ($posts as $post)
                     <div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50">
                        <!--<div class="blog-thumbnail">
                           <a href="blog-details.html">
                           <img src="img/bg-img/16.jpg" alt="">
                           </a>
                        </div>-->
                        <div class="blog-content">
                           <a href="{{$post->getLink()}}" class="post-title">{{$post->title}}</a>
                           <p>{!! \Illuminate\Support\Str::limit($post->body, 100, '...') !!}</p>
                           <div class="post-meta">
                              <a href="#"><i class="icon_clock_alt"></i> {{ $post->created_at->format('m/d/Y') }}</a>
                              <a href="#"><i class="fa fa-map-marker"></i> {{$post->region}} </a>
                           </div>
                        </div>
                     </div>
                  @endforeach
   
                  <nav class="dento-pagination mb-100">
                     <ul class="pagination">
                        {{$posts->links()}}
                     </ul>
                 </nav>

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

                        @foreach($latestposts as $post)
                           <div class="single-news-area d-flex align-items-center">
                              <!--<div class="blog-thumbnail">
                                 <img src="img/bg-img/21.jpg" alt="">
                              </div>-->
                              <div class="blog-content">
                                 <a href="{{$post->getLink()}}" class="post-title">{{$post->title}}</a>
                                 <span class="post-date">{{ $post->created_at->format('m/d/Y') }}</span>
                              </div>
                           </div>
                        @endforeach

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