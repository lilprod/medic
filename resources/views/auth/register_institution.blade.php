<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Allo Medic Assistance &amp; Formulaire d'inscription d'établissement">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Allo Medic Assistance &amp; Formulaire d'inscription d'établissement</title>
      <link rel="icon" href="img/core-img/favicon.ico">
      <link rel="stylesheet" href="{{asset('assets/website/style.css') }}">
      <link rel="stylesheet" href="{{asset('css/intlTelInput.css') }}">

      <style>
        .iti { width: 100%; }

        .iti__flag {background-image: url("{{asset('images/flags.png') }}");}

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
        .iti__flag {background-image: url("{{asset('images/flags@2x.png') }}");}
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

      <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url({{asset('assets/website/img/bg-img/12.jpg') }});">
        <div class="container h-100">
           <div class="row h-100 align-items-center">
              <div class="col-12">
                 <h2 class="title">Formulaire d'inscription d'établissement</h2>
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

                    @include('inc.messages')
                    <div class="card">
                       <!-- <div class="card-header">{{ __('Inscription') }}</div>-->

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                               
                                <div class="contact-form mt-30">
                                    <p class="mb-30 text-justify">En tant qu’établissement de santé, vous pouvez rejoindre notre réseau collaboratif. Nous publierons dès lors vos prochaines offres d’emploi sur notre site.
                                        Pour ceci, il vous suffit de remplir le formulaire d’inscription ci-dessous et nous vous contacterons dans les plus brefs délais.
                                    </p>
                
                                    <form action="#" method="post">
                
                                       <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Type d'établissement <span class="text-danger">*</span></label>
                                                <select name="structure_id" id="structure_id" class="form-control mb-30" required>
                                                    @foreach ($structures as $structure)
                                                        <option value="{{$structure->id}}">{{$structure->title}}</option>	
                                                    @endforeach	
                                                </select>
                                            </div>
                                         </div>
                
                                          <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nom <span class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control mb-30" placeholder="Nom" required>
                                            </div>
                                          </div>
                
                                          
                                          <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Adresse <span class="text-danger">*</span></label>
                                                <input type="text" name="address" class="form-control mb-30" placeholder="Adresse" required>
                                            </div>
                                          </div>

                                          <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Ville <span class="text-danger">*</span></label>
                                                <input type="text" name="city" class="form-control mb-30" placeholder="Ville" required>
                                            </div>
                                          </div>

                                          <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Code postal <span class="text-danger">*</span></label>
                                                <input type="text" name="postal_code" class="form-control mb-30" placeholder="Code postal" required>
                                            </div>
                                          </div>
                
                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Adresse email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" class="form-control mb-30" placeholder="Adresse email" required>
                                            </div>
                                          </div>
                
                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Téléphone <span class="text-danger">*</span></label>
                                                <input type="text" name="phone_number" class="form-control mb-30" placeholder="Téléphone" required>
                                            </div>
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

                                          <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Joindre vos documents <span class="text-danger">*</span></label><br>
                                                <input type="file" name="documents[]" id="documents" class="mb-30" multiple>
                                            </div>
                                         </div>

                                         <div class="col-lg-6">
                                         </div>

                                          <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>RGPD <span class="text-danger">*</span> </label><br>
                                                <input type="checkbox" name="jobapp_rgpd[]" class="sjb-required" id="agree" required="required" onclick="checkbox();"> J'accepte les conditions d'Allo Medic Assistance concernant la nouvelle réglementation sur la détention de données.  
                                            </div>
                                          </div>

                                          <div class="col-12">
                                            <div class="form-group">
                                                <label>Message / Questions</label>
                                                <textarea name="message" class="form-control mb-30" placeholder="Votre Message"></textarea>
                                            </div>
                                          </div>
                
                                          <div class="col-12">
                                             <button type="submit" class="btn dento-btn" id="submit" disabled>S'inscrire</button>
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
    <script type="text/javascript" src="{{asset('js/intlTelInput.js') }}"></script>
    <script>
        var input = document.querySelector("#phone");
        output = document.querySelector("#output");
        var iti = window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            separateDialCode: true,
            utilsScript: "{{asset('js/utils.js') }}" // just for formatting/placeholders etc
        });
      
        var handleChange = function() {
          var text = iti.getNumber();
          //var text = iti.getNumber(intlTelInputUtils.numberFormat.E164);
          
          var textNode = document.createTextNode(text);
          output.innerHTML = "";
          output.appendChild(textNode);
          document.getElementById("output").value=text;
        };
      
        // listen to "keyup", but also "change" to update when the user selects a country
        input.addEventListener('change', handleChange);
        input.addEventListener('keyup', handleChange); 
    </script>

    <script>
        function checkbox(){
           if(document.getElementById('agree').checked){
               document.getElementById('submit').disabled = '';
           }
           else{
               document.getElementById('submit').disabled = 'disabled';
           }
       }
     </script>
    <script src="{{asset('assets/website/js/popper.min.js') }}"></script>
    <script src="{{asset('assets/website/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('assets/website/js/dento.bundle.js') }}"></script>
    <script src="{{asset('assets/website/js/default-assets/active.js') }}"></script>
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       
       gtag('config', 'UA-23581568-13');
    </script>-->
    </body>
    </html>
