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
      <h2 class="landing-info-pretitle">GRACIAS</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <h1 class="landing-info-title">AMIGO FIEL</h1>
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">La idea de esta app es manternos, de alguna forma, cercanos a nuestros amigos, familia, etc... y tambien de ayudar a la situacion que genero este COVid19. Por eso te invitamos a regalar un voucher a futuro. Jugando un pequeño juego.</p>
      <!-- /LANDING INFO TEXT -->

      <!-- TAB SWITCH -->
      <div class="tab-switch">
        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">AMIGO INVISIBLE</p>
        <!-- /TAB SWITCH BUTTON -->

        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">POR QUE SI, POR QUE NO ?</p>
        <!-- /TAB SWITCH BUTTON -->
      </div>
      <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <div class="landing-form">  
      <!-- start.1er FORM -->    
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration overflowing" src="img/landing/rocket.png" alt="rocket">
        <h2 class="form-box-title">Crear Grupo</h2>
        <form class="form" id="formJuego" action="/grupos/crear" method="post">
        @csrf
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-username">Nombre de Grupo</label>
                <input type="text" id="nombreGrupo" name="nombreGrupo" autocomplete="off">
              </div>
            </div>
          </div>
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
                <label for="login-password">Cuando Termina ?</label>
                <input type="date" id="fechaFin"  class="dateInput" name="fechaFin" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Maximo $ a gastar</label>
                <input type="number" id="maxDinero"  name="maxDinero" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="form-row space-between">
            <div class="form-item">
              <div class="checkbox-wrap">
                <input type="checkbox" id="adivinar" name="adivinar" checked>
                <div class="checkbox-box">
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross"></use>
                  </svg>
                </div>
                <label for="adivinar">PERMITIR ADIVINAR ?</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <a href="javascript:crear();" class="button medium secondary" style="width: 100%;">CREAR</a>
            </div>
          </div>
        </form>
      </div>
      <!-- end.1er FORM -->
    
      <!-- start.2do FORM -->
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <img class="form-box-decoration" src="img/landing/rocket.png" alt="rocket">
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">Create your Account!</h2>
        <!-- /FORM BOX TITLE -->
    
        <!-- FORM -->
        <form class="form">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-email">Your Email</label>
                <input type="text" id="register-email" name="register_email">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-username">Username</label>
                <input type="text" id="register-username" name="register_username">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-password">Password</label>
                <input type="password" id="register-password" name="register_password">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-password-repeat">Repeat Password</label>
                <input type="password" id="register-password-repeat" name="register_password_repeat">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- CHECKBOX WRAP -->
              <div class="checkbox-wrap">
                <input type="checkbox" id="register-newsletter" name="register_newsletter" checked>
                <!-- CHECKBOX BOX -->
                <div class="checkbox-box">
                  <!-- ICON CROSS -->
                  <svg class="icon-cross">
                    <use xlink:href="#svg-cross"></use>
                  </svg>
                  <!-- /ICON CROSS -->
                </div>
                <!-- /CHECKBOX BOX -->
                <label for="register-newsletter">Send me news and updates via email</label>
              </div>
              <!-- /CHECKBOX WRAP -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- BUTTON -->
              <button class="button medium primary">Register Now!</button>
              <!-- /BUTTON -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
        </form>
        <!-- /FORM -->
    
        <!-- FORM TEXT -->
        <p class="form-text">You'll receive a confirmation email in your inbox with a link to activate your account. If you have any problems, <a href="#">contact us</a>!</p>
        <!-- /FORM TEXT -->
      </div>
      <!-- end.2do FORM -->
    </div>
  </div>
  

<script src="js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    function crear() {

        var fd = new FormData(document.getElementById('formJuego'));
        fd.append("_token", $("input[name=_token]").val());

        $.ajax({
        url: "{{ env('APP_URL_PUERTO') }}/grupos/crear",
        type: "POST",
        data: fd,
        dataType: 'json',
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        beforeSend: function() {
            console.log("before send request");
        }
        }).done(function(data) {
          
          console.log(data);
          
          if (data.status == true){
            // window.location.href = "grupo/" + data.codigo;
            console.log("grupo/" + data.codigo);
          }else{
            console.log(data);
          }

        });
}
</script>
</body>
</html>
