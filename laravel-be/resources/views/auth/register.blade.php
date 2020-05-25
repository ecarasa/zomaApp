<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'cheamigo.com.ar') }}</title>
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
      <h2 class="landing-info-pretitle">Bienvenido</h2>
      <!-- /LANDING INFO PRETITLE -->

      <!-- LANDING INFO TITLE -->
      <h1 class="landing-info-title">REGISTRATE</h1>
      <!-- /LANDING INFO TITLE -->

      <!-- LANDING INFO TEXT -->
      <p class="landing-info-text">La idea de esta app es manternos, de alguna forma, cercanos a nuestros amigos, familia, etc... y tambien de ayudar a la situacion que genero este COVid19. Por eso te invitamos a regalar un voucher a futuro. Jugando un pequeño juego.</p>
      <!-- /LANDING INFO TEXT -->

    </div>


    <div class="landing-form">  
      <div class="form-box login-register-form-element">
        <!-- FORM BOX DECORATION -->
        <img class="form-box-decoration" src="img/landing/rocket.png" alt="rocket">
        <!-- /FORM BOX DECORATION -->

        <!-- FORM BOX TITLE -->
        <h2 class="form-box-title">CREA TU CUENTA</h2>
        <!-- /FORM BOX TITLE -->
    
        <!-- FORM -->
        <form class="form" id="form-register" method="post" action="/register">
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-email">Nombre</label>
                <input type="text" id="name" name="name">
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
                <label for="register-username">Email</label>
                <input type="text" id="email" name="email">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="login-password">Password</label>
                <input type="password" id="password" name="password">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
    
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item">
              <!-- FORM INPUT -->
              <div class="form-input">
                <label for="register-password-repeat">Repeat Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
              </div>
              <!-- /FORM INPUT -->
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->
    
          @csrf
    
          <div class="form-row" style="margin-top: 28px;">    
            <div class="form-item">
              <button type="submit" class="button medium secondary" style="width: 100%;">REGISTRARME</a>
            </div>
          </div>
        </form>
            
      </div>
    </div>
  </div>
  
<style>
input[type="password"] {
  -webkit-tap-highlight-color: transparent;
--blue: #007bff;
--indigo: #6610f2;
--purple: #6f42c1;
--pink: #e83e8c;
--red: #dc3545;
--orange: #fd7e14;
--yellow: #ffc107;
--green: #28a745;
--teal: #20c997;
--cyan: #17a2b8;
--white: #fff;
--gray: #6c757d;
--gray-dark: #343a40;
--primary: #007bff;
--secondary: #6c757d;
--success: #28a745;
--info: #17a2b8;
--warning: #ffc107;
--danger: #dc3545;
--light: #f8f9fa;
--dark: #343a40;
--breakpoint-xs: 0;
--breakpoint-sm: 576px;
--breakpoint-md: 768px;
--breakpoint-lg: 992px;
--breakpoint-xl: 1200px;
--font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
visibility: visible;
outline: none;
box-sizing: border-box;
margin: 0;
line-height: inherit;
overflow: visible;
font-family: Rajdhani,sans-serif;
width: 100%;
border-radius: 12px;
font-size: 1rem;
font-weight: 700;
background-color: #fff;
border: 1px solid #dedeea;
color: #3e3f5e;
transition: border-color .2s ease-in-out;
height: 54px;
padding: 0 18px;
}

.invalid { 
    position: initial!important;
    padding: 5px!important;
    color: #cc0000!important;
}
</style>

<script src="js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script>

jQuery.extend(jQuery.validator.messages, {
    required: "Este campo es requerido.",
    equalTo: "El campo debe coincidir.",
    email: "No parece un mail valido."
});

$("#form-register").validate({
  rules: {
    name: "required",
    email: {
      required: true,
      email: true
    },
    password: {
      required: true,
      minlength : 5
    },
    password_confirmation:{
      required: true,
      minlength : 5,
      equalTo: "#password"
    }
  },
  errorClass: "invalid"
});
</script>
</body>
</html>
