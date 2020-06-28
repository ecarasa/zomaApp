
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- styles -->
  <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styleshome.min.css">
  <!-- favicon -->
  <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
  <title>CheAmigo | Más que un amigo invisible</title>
</head>
<body>
    <style>
        #top {
            background: url(https://cheamigo.com.ar/public/img/landing/landing-background.jpg) no-repeat 0!important;
        }
        .architecture-item-list .architecture-item {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            height: 165px!important;
            position: relative;
        }
        .section {
    padding: 50px 0 50px!important;




}
        </style>
  <!-- NAVIGATION WRAP -->
  <div class="navigation-wrap">
    <!-- NAVIGATION -->
    <nav class="navigation grid-limit">
      <!-- LOGO -->
      <div class="logo void">
        <!-- LOGO ICON -->
        
        <!-- /LOGO ICON -->
      </div>
      <!-- /LOGO -->


      <div class="botoneraup">
      <a class="button small primary" href="/register" target="_blank">Crear Cuenta</a>
      <a class="button small primary" href="/login" target="_blank">Ingresar</a>
      <p class="button small secondary popup-event-information-trigger btnempresa" >Empresas</p>
      </div>
    </nav>
    <!-- /NAVIGATION -->
  </div>
  <!-- /NAVIGATION WRAP -->

  <!-- BANNER WRAP -->
  <div id="top" class="banner-wrap">
    <!-- BANNER -->
    <div class="banner grid-limit">
      <!-- BANNER INFO -->
      <div class="banner-info">
        <!-- BANNER IMAGE -->
        
        <!-- /BANNER IMAGE -->

        <!-- BANNER PRETITLE -->
        <p class="banner-pretitle">Bienvenidos a</p>
        <!-- /BANNER PRETITLE -->

        <!-- BANNER TITLE -->
        <p class="banner-title">CheAmigo</p>
        <!-- /BANNER TITLE -->

        <!-- BANNER TEXT -->
        <p class="banner-text" style="display: block!important;"><mark style="background:bisque"> La web que te invita a jugar al amigo invisible de manera 100% Online. </mark> </p>
        <!-- /BANNER TEXT -->

        <!-- BUTTON -->
        <a class="button" href="#features">Nuevo Juego</a>
        <!-- /BUTTON -->
      </div>
      <!-- /BANNER INFO -->
    </div>
    <!-- /BANNER -->
  </div>
  <!-- /BANNER WRAP -->

  <!-- ARCHITECTURE ITEM LIST -->
  <div class="architecture-item-list">
    <!-- ARCHITECTURE ITEM -->
    <div class="architecture-item">
      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image" src="{{ env('APP_URL_PUERTO') }}/img/regalo.png" alt="feature-html" style="width: 36%;">
      <!-- /ARCHITECTURE IMAGE -->

      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image-hover" src="{{ env('APP_URL_PUERTO') }}/img/regalo.png" alt="feature-html-hover" style="width: 36%;">
      <!-- /ARCHITECTURE IMAGE -->
    </div>
    <!-- /ARCHITECTURE ITEM -->

    <!-- ARCHITECTURE ITEM -->
    <div class="architecture-item">
      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image" src="{{ env('APP_URL_PUERTO') }}/img/compuregalo.png" alt="feature-html-hover" style="width: 36%;    margin-top: 20px;">
      <!-- /ARCHITECTURE IMAGE -->

      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image-hover" src="{{ env('APP_URL_PUERTO') }}/img/compuregalo.png" alt="feature-html-hover" style="width: 36%;    margin-top: 20px;">
      <!-- /ARCHITECTURE IMAGE -->
    </div>
    <!-- /ARCHITECTURE ITEM -->

    <!-- ARCHITECTURE ITEM -->
    <div class="architecture-item">
      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image" src="{{ env('APP_URL_PUERTO') }}/img/regalos_mano.png" alt="feature-html-hover" style="width: 36%;">
      <!-- /ARCHITECTURE IMAGE -->

      <!-- ARCHITECTURE IMAGE -->
      <img class="architecture-image-hover" src="{{ env('APP_URL_PUERTO') }}/img/regalos_mano.png" alt="feature-html-hover" style="width: 36%;">
      <!-- /ARCHITECTURE IMAGE -->
    </div>
    <!-- /ARCHITECTURE ITEM -->


  </div>
  <!-- /ARCHITECTURE ITEM LIST -->



  <!-- SECTION WRAP -->
  <div id="features" class="section-wrap">
    <!-- SECTION -->
    <section class="section grid-limit">
      <!-- SECTION INFO -->
      <div class="section-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">CHEAMIGO la mejor plataforma para jugar al Amigo Invisible Online</p>
        <!-- /SECTION PRETITLE -->

        <!-- SECTION TITLE -->
        <h2 class="section-title">¿Cómo funciona?</h2>
        <!-- /SECTION TITLE -->

        <!-- SECTION TEXT -->
        
        <!-- /SECTION TEXT -->
      </div>
      <!-- /SECTION INFO -->

      <!-- GRID -->
      <div class="grid grid-4">
        <!-- FEATURE ITEM -->
        <article class="feature-item">
          <h2 class="feature-item-title">1.</h2>
          <!-- /FEATURE ITEM TITLE -->

          <!-- FEATURE ITEM TEXT -->
          <p class="feature-item-text">Creá tu cuenta y un grupo para invitar a tus amig@s a jugar. No hay límite, ni de grupos ni de usuarios para invitar, y es Totalmente GRATIS!.</p>
          <!-- /FEATURE ITEM TEXT -->
        </article>
        <!-- /FEATURE ITEM -->

        <!-- FEATURE ITEM -->
        <article class="feature-item">
          <!-- FEATURE ITEM IMAGE -->
          
          <!-- /FEATURE ITEM IMAGE -->

          <!-- FEATURE ITEM TITLE -->
          <h2 class="feature-item-title">2.</h2>
          <!-- /FEATURE ITEM TITLE -->

          <!-- FEATURE ITEM TEXT -->
          <p class="feature-item-text">Cuando tod@s se hayan unido, ingresá al grupo y sortealo. A partir de ese momento el grupo entra en juego y pueden comenzar a enviar pistas al amigo invisible correspondiente de cada uno.Pistas y regalos estarán disponibles los 365 días del año!</p>
          <!-- /FEATURE ITEM TEXT -->
        </article>
        <!-- /FEATURE ITEM -->

        <!-- FEATURE ITEM -->
        <article class="feature-item">
          <!-- FEATURE ITEM IMAGE -->
          
          <!-- /FEATURE ITEM IMAGE -->

          <!-- FEATURE ITEM TITLE -->
          <h2 class="feature-item-title">3.</h2>
          <!-- /FEATURE ITEM TITLE -->

          <!-- FEATURE ITEM TEXT -->
          <p class="feature-item-text">Al finalizar el Admin del grupo podrá ver un listado con quién es el amigo invisble de quién para informar los resultados. Si quieren saber más detalles de las reglas del juego Amigo invisible  hacer <a href="/reglas"> click aquí </a> </p>
          <!-- /FEATURE ITEM TEXT -->
        </article>
        <!-- /FEATURE ITEM -->

    
    
      </div>
      <!-- /GRID -->
    </section>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  <!-- SECTION WRAP -->
  <div class="section-wrap">
    <!-- SECTION -->
    <section class="section grid-limit" style="padding-top:0px">
      <!-- SECTION INFO -->
      <div class="section-info" style="width: 100%;">
        
        <h2 class="section-title">            
            <img style="width: 100%;" src="{{ env('APP_URL_PUERTO') }}/img/landing/empresas_captura_enviarpista.jpg">
            <br>            
            <a class="button big" href="/register" >Registrate para empezar a jugar!</a>            
        </h2>

      </div>
    </section>
    <!-- /SECTION -->
  </div>
  <!-- /SECTION WRAP -->

  @include('empresaspop')  

<div style="position: fixed; z-index: 200000; transition: all 0.3s ease-in-out 0s; top: auto; bottom: 34px; left: auto; right: 34px;">
    <div onclick="ContactWh();" class="xm-alert-icon" style="margin: 0px; padding: 0px; outline: none; border: none; box-sizing: border-box; width: 75px; height: 75px; display: flex; justify-content: center; align-items: center; position: relative; top: 0px; left: 0px; box-shadow: rgba(38, 39, 51, 0.06) 0px 0px 20px 0px; background-color: rgb(113, 80, 255); cursor: pointer; transition: all 0.3s ease-in-out 0s; border-radius: 50%;">
      <div style="background: url(&quot;https://cdn.clipart.email/b9e683c9f60241154f17af59e3f914ef_logo-png-format-whatsapp-icon_715-715.png&quot;) center center / cover no-repeat transparent; margin: 0px; padding: 0px; outline: none; border: none; box-sizing: border-box; width: 95px; height: 95px; transition: all 0.3s ease-in-out 0s; border-radius: 50%;">
      </div>        
    </div>  
</div>


<!-- app -->

<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168586368-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168586368-1');

  function ContactWh() {
    
    var numerowts= '+5491125258045';
    window.open('https://api.whatsapp.com/send?phone=' + numerowts + '&text=%20' + "Hola! me gustaría obtener más info de tu página Cheamigo.com.ar ");

  }
</script>
</body>
</html>