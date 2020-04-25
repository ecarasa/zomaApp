<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'TuAmigoFiel.com') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="css/styles.min.css">
            <link rel="icon" href="img/favicon.ico">
        </head>
    <body>

  <!-- LANDING -->
  <div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
      <!-- LOGO -->
      <div class="logo">
        <!-- ICON LOGO VIKINGER -->
        <svg class="icon-logo-vikinger">
          <use xlink:href="#svg-logo-vikinger"></use>
        </svg>
        <!-- /ICON LOGO VIKINGER -->
      </div>
      <!-- /LOGO -->

      <!-- LANDING INFO PRETITLE -->
      <h2 class="landing-info-pretitle">Hola !</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <h1 class="landing-info-title">INGRESÁ</h1>
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">La idea de esta app es manternos, de alguna forma, cercanos a nuestros amigos, familia, etc... y tambien de ayudar a la situacion que genero este COVid19. Por eso te invitamos a regalar un voucher a futuro. Jugando un pequeño juego.</p>
      <!-- /LANDING INFO TEXT -->


    </div>


    <div class="landing-form">  
      <!-- start.1er FORM -->    
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration overflowing" src="img/landing/rocket.png" alt="rocket">
        <h2 class="form-box-title">Bienvenido</h2>
        <form class="form" id="formJuego" action="/login" method="post">
        @csrf

          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Email</label>
                <input type="text" id="email"  name="email" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Contraseña</label>
                <input type="password" id="password" class="dateInput" name="password" autocomplete="off">
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-item">
              <button type="submit" class="button medium secondary" style="width: 100%;">Ingresar</a>
            </div>
          </div>
        </form>
      </div>
      <!-- end.1er FORM -->
    

    </div>
  </div>
  

<script src="js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>
</html>
