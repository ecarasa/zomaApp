<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'cheamigo.com.ar') }}</title>
            <meta charset="utf-8">
            
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
        </head>
    <body>

  <!-- LANDING -->
  <div class="landing">
    <!-- LANDING DECORATION -->
    <div class="landing-decoration"></div>
    <!-- /LANDING DECORATION -->

    <!-- LANDING INFO -->
    <div class="landing-info">
  
      <!-- LANDING INFO PRETITLE -->
      <h2 class="landing-info-pretitle">JUGA AHORA</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <h1 class="landing-info-title">AMIGO INVISIBLE</h1>
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">Creá tu grupo, agrega a los participantes del juego y comiencen a participar de este juego histórico ahora 100% Online!. Cada uno de los participantes
      va a poder acceder a un panel interactivo dónde podrá intercambiar mensajes con su amigo invisible, seleccionar un regalo para enviarle y mucho más.</p>
      <!-- /LANDING INFO TEXT -->

      <!-- TAB SWITCH -->
      <div class="tab-switch">
        <!-- TAB SWITCH BUTTON -->
        <p class="tab-switch-button login-register-form-trigger">AMIGO INVISIBLE</p>
        <!-- /TAB SWITCH BUTTON -->

        <!-- TAB SWITCH BUTTON -->
        <p style="display:none" class="tab-switch-button login-register-form-trigger">POR QUE SI, POR QUE NO ?</p>
        <!-- /TAB SWITCH BUTTON -->
      </div>
      <!-- /TAB SWITCH -->
    </div>
    <!-- /LANDING INFO -->

    <div class="landing-form">  
      <!-- start.1er FORM -->    
      <div class="form-box login-register-form-element">
        <img class="form-box-decoration overflowing" src="https://cheamigo.com.ar/public/img/landing/rocket.png" alt="rocket">
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
          @if (!Auth::check())
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Email</label>
                <input type="text" id="email"  name="email" autocomplete="off">
              </div>
            </div>
          </div>
          @endif

          <div class="form-row">
            <div class="form-item">
              <div class="form-input active">
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
            <div class="page-loader-indicator loader-bars" style='display: none;'>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
              <a href="javascript:crear();" class="button medium secondary" style="width: 100%;">CREAR</a>
            </div>
          </div>
        </form>
      </div>
      <!-- end.1er FORM -->
    
      <!-- start.2do FORM -->
      <div class="form-box login-register-form-element">
        <form class="form">
        </form>
      </div>
      <!-- end.2do FORM -->
    </div>
  </div>
  

  <script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
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
            $('.page-loader-indicator').show()
        }
        }).done(function(data) {
          
          console.log(data);
          $('.page-loader-indicator').hide()
          if (data.status == true){
            alert('Grupo Creado');
            window.location.href = "{{ env('APP_URL_PUERTO') }}/grupo/" + data.codigo;
            //console.log("grupo/" + data.codigo);
          }else{
            alert('Hubo un error, intenta nuevamente')
          }

        });
}
</script>
</body>
</html>
