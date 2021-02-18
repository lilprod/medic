<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Inscription">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Inscription</title>
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
                 <h2 class="title">Inscription</h2>
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
                       <li class="breadcrumb-item active" aria-current="page">Inscription</li>
                    </ol>
                 </nav>
              </div>
           </div>
        </div>
     </div>

     <section class="dento-contact-area mt-50 mb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <div class="card">
                       <!-- <div class="card-header">{{ __('Inscription') }}</div>-->

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!--<div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                                            <div class="col-md-8">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Prénom(s)') }}</label>

                                            <div class="col-md-8">
                                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                                @error('firstname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
        
                                            <div class="col-md-8">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
        
                                            <div class="col-md-8">
                                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
        
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
        
                                            <div class="col-md-8">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Resaisir Mot de passe') }}</label>
        
                                            <div class="col-md-8">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn dento-btn">
                                            {{ __('S\'inscrire') }}
                                        </button>
                                    </div>
                                </div>-->

                                <div class="contact-form mt-30">
                                    <p class="mb-30 text-justify">En tant que personnel médical, vous pouvez rejoindre notre réseau collaboratif. Vous recevrez dès lors nos offres d’emploi et pourrez y postuler.
                                    Pour ceci, il vous suffit de remplir le formulaire d’inscription ci-dessous et nous vous contacterons dans les plus brefs délais.
                                    </p>
                
                                    <form action="#" method="post">
                
                                       <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Spécialité</label>
                                                <select name="speciality_id" id="speciality_id" class="form-control mb-30">
                                                    @foreach ($specialities as $speciality)
                                                        <option value="{{$speciality->id}}">{{$speciality->title}}</option>	
                                                    @endforeach
                                                    		
                                                </select>
                                            </div>
                                         </div>
                
                                          <div class="col-lg-6">
                                            <label>Nom <span class="text-danger">*</span></label>
                                             <input type="text" name="name" class="form-control mb-30" placeholder="Nom" required>
                                          </div>
                
                                          <div class="col-lg-6">
                                            <label>Prénom(s)</label>
                                             <input type="text" name="firstname" class="form-control mb-30" placeholder=" Prénom(s)" required>
                                          </div>
                                          
                                          <div class="col-lg-6">
                                            <label>Date de naissance</label>
                                             <input type="date" name="birth_date" class="form-control mb-30" required>
                                          </div>

                                          <div class="col-lg-6">
                                            <label>Civilité <span class="text-danger">*</span></label><br>
                                              <div class="form-check form-check-inline mb-30">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="M">
                                                <label class="form-check-label" for="inlineRadio1">Mr</label>
                                              </div>
                                              <div class="form-check form-check-inline mb-30">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="F">
                                                <label class="form-check-label" for="inlineRadio2">Mme</label>
                                              </div>
                                          </div>

                                          <div class="col-lg-4">
                                            <label>Adresse <span class="text-danger">*</span></label>
                                             <input type="text" name="address" class="form-control mb-30" placeholder="Adresse" required>
                                          </div>

                                          <div class="col-lg-4">
                                            <label>Ville <span class="text-danger">*</span></label>
                                             <input type="text" name="city" class="form-control mb-30" placeholder="Ville" required>
                                          </div>

                                          <div class="col-lg-4">
                                            <label>Code postal <span class="text-danger">*</span></label>
                                             <input type="text" name="postal_code" class="form-control mb-30" placeholder="Code postal" required>
                                          </div>
                
                                          <div class="col-lg-6">
                                            <label>Adresse email <span class="text-danger">*</span></label>
                                             <input type="email" name="email" class="form-control mb-30" placeholder="Adresse email" required>
                                          </div>
                
                                          <div class="col-lg-6">
                                            <label>Téléphone <span class="text-danger">*</span></label>
                                            <input type="text" name="phone_number" class="form-control mb-30" placeholder="Téléphone" required>
                                         </div>

                                         <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Comment vous nous avez connus ?</label>
                                                <select name="how_find_us" id="how_find_us" class="form-control mb-30">
                                                    <option value="Google">Google</option>
                                                    <option value="Autre moteur de recherche">Autre moteur de recherche</option>
                                                    <option value="Quotidien du Médecin">Quotidien du Médecin</option>
                                                    <option value="Site d'annonces spécialisées">Site d'annonces spécialisées</option>
                                                    <option value="Centre hospitalier">Centre hospitalier</option>
                                                    <option value="Confrère">Confrère</option>
                                                    <option value="Salons - congrès ">Salons - congrès </option>
                                                    <option value="Autres ">Autres </option>			
                                                </select>
                                            </div>
                                         </div>

                                         <!--<label>Conseil de l'Ordre</label>-->
                
                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="registered_with_council" class="sjb-required" id="registered_with_council" required="required"> Inscrit au Conseil de l'Ordreation sur la détention de données.  
                                            </div>
                                          </div>

                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="qualified_by_council" class="sjb-required" id="qualified_by_council" required="required"> Qualifié par le Conseil de l'Ordre  
                                            </div>
                                          </div>

                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Joindre vos documents <span class="text-danger">*</span></label><br>
                                                <input type="file" name="documents[]" id="documents" class="mb-30" multiple>
                                            </div>
                                         </div>

                                         <div class="col-lg-6">
                                         </div>

                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="jobapp_rgpd[]" class="sjb-required" id="jobapp_rgpd" required="required"> J'accepte les conditions d'Allo Medic Assistance concernant la nouvelle réglementation sur la détention de données.  
                                            </div>
                                          </div>

                                          
                
                
                                          <div class="col-12">
                                             <textarea name="message" class="form-control mb-30" placeholder="Votre Message"></textarea>
                                          </div>
                
                                          <div class="col-12">
                                             <button type="submit" class="btn dento-btn">S'inscrire</button>
                                          </div>
                                       </div>
                
                                    </form>
                                 </div>

                            </form>
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
