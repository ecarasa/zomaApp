<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('pista.name', 'CheAmigo.com.ar') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="http://www.odindesign-themes.com/thetrickster/css/vendor/font-awesome.min.css">
            <link rel="stylesheet" href="http://www.odindesign-themes.com/thetrickster/css/vendor/simple-line-icons.css">
             <link rel="stylesheet" href="http://www.odindesign-themes.com/thetrickster/css/vendor/magnific-popup.css">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
  
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
        </head>
     
    <body>

  <!-- PAGE LOADER -->
  @include('pageloader')
  <!-- /PAGE LOADER -->
  <!-- MENU  DE NAV WIDGET 
   @ //include('nav_menu') -->
  <!-- /NAVIGATION WIDGET -->
  <!-- MENU  DE NAV WIDGET -->
  @include('header_responsive')
  <style>

.modal-dialog {
    max-width: 500px;
    margin: 6.75rem auto!important;
}

.sidebar-menu-header {
    height: 81px!important;
    padding: 22px 28px 1px 65px!important;
    background-color: #fff;
    cursor: pointer;
    position: relative;
}

</style>
  <!-- /NAVIGATION WIDGET -->


  <!-- FLOATY BAR -->
 
  <!-- /FLOATY BAR -->

  <!-- CONTENT GRID -->
  <div class="content-grid" >
     <!-- / englobador de grid  -->
    <div class="grid grid-1 mobile-prefer-content">
      <!-- grid izquierdo -->
          
            <!-- / grid izquierdo -->
            <!--grid centro -->    
            <div class="account-hub-content" >
              <!-- SECTION HEADER -->
              <div class="section-header" style="margin-bottom:0px">
                <!-- SECTION HEADER INFO -->
                <div class="section-header-info">
                  <!-- SECTION PRETITLE -->
                  <p class="section-pretitle">Frecuentes</p>
                  <!-- /SECTION PRETITLE -->

                  <!-- SECTION TITLE -->
                  <h2 class="section-title"></h2>
                  <!-- /SECTION TITLE -->
                </div>
                <!-- /SECTION HEADER INFO -->
              </div>
              <!-- /SECTION HEADER -->

              <!-- GRID COLUMN -->
              <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box">
                  <!-- WIDGET BOX TITLE -->
                  <p class="widget-box-title">Preguntas y Respuestas</p>
                  <!-- /WIDGET BOX TITLE -->

                  <!-- WIDGET BOX CONTENT -->
                  <div class="widget-box-content">
                    <!-- FORM -->
                       <ul class="widget-dropdown" style="font-weight:700;">
                              <li class="widget-dropdown-item" style="border-bottom:1px solid #3e3f5e;margin-bottom:15px">
                                  <a href="#" class="dropdown-control bold" style="font-size: 1.95rem ;font-weight:700;">
                                    ¿Qué es CheAmigo?                                 
                                  </a>

                                  <!-- WIDGET INNER DROPDOWN -->
                                  <ul class="widget-inner-dropdown dropdown" style="display: none;">
                                    <!-- WIDGET INNER DROPDOWN ITEM -->
                                    <li class="widget-inner-dropdown-item" style="margin-left:20px;font-size: 1.15rem">
                                      <a href="#">Es una plataforma  digital que te permite jugar al amigo invible y/o comprar regalos de manera Online</a>
                                    </li>
                                    <!-- /WIDGET INNER DROPDOWN ITEM -->
                                  </ul>
                                  <!-- /WIDGET INNER DROPDOWN -->
                                </li>
                              <li class="widget-dropdown-item" style="border-bottom:1px solid #3e3f5e;margin-bottom:15px;">
                                  <a href="#" class="dropdown-control" style="font-size: 1.95rem;font-weight:700;">
                                    ¿Cómo funciona la plataforma?
                                    
                                  </a>

                                  <!-- WIDGET INNER DROPDOWN -->
                                  <ul class="widget-inner-dropdown dropdown" style="display: none;">
                                    <!-- WIDGET INNER DROPDOWN ITEM -->
                                    <li class="widget-inner-dropdown-item" style="margin-left:20px;font-size: 1.15rem">
                                      <span href="#">Creas tu cuenta, un Grupo y agregás a los participantes con sus datos. Ellos reciben un email de aviso, les compartis por Whastapp el código de grupo y ya están jugando.</span>
                                    </li>
                                    <!-- /WIDGET INNER DROPDOWN ITEM -->
                                  </ul>
                                  <!-- /WIDGET INNER DROPDOWN -->
                                </li>
                                <li class="widget-dropdown-item" style="border-bottom:1px solid #3e3f5e;margin-bottom:15px">
                                  <a href="#" class="dropdown-control" style="font-size: 1.95rem; font-weight:700;">
                                    ¿Puedo armar y jugar al amigo invisible en más de un grupo? 
                                  
                                  </a>

                                  <!-- WIDGET INNER DROPDOWN -->
                                  <ul class="widget-inner-dropdown dropdown" style="display: none;">
                                    <!-- WIDGET INNER DROPDOWN ITEM -->
                                    <li class="widget-inner-dropdown-item">
                                      <span style="margin-left:20px;font-size: 1.15rem">Si, no hay límites, podes jugar en todos los grupos que quieras crear y también podes ser invitado a grupos creados por otras personas</span>
                                    </li>
                                    <!-- /WIDGET INNER DROPDOWN ITEM -->
                                  </ul>
                                  <!-- /WIDGET INNER DROPDOWN -->
                                </li>
                                <li class="widget-dropdown-item" style="border-bottom:1px solid #3e3f5e;margin-bottom:15px">
                                  <a  href="#" class="dropdown-control" style="font-size: 1.95rem; font-weight:700;">
                                    Compré un regalo para un amigo y no encuentro los datos
                                    </a> 
                                  


                                  <!-- WIDGET INNER DROPDOWN -->
                                  <ul class="widget-inner-dropdown dropdown" style="display: none;">
                                    <!-- WIDGET INNER DROPDOWN ITEM -->
                                    <li class="widget-inner-dropdown-item">
                                      <span style="margin-left:20px;font-size: 1.15rem">
                                      Los datos de tu compra y del vendedor se encuentran en la sección CheAmigo Invisible -> Regalos Enviados o </span>
                                      <a href="/pista">presioná aqui. </a> 
                                      </span>
                                    </li>
                                    <!-- /WIDGET INNER DROPDOWN ITEM -->
                                  </ul>
                                  <!-- /WIDGET INNER DROPDOWN -->
                                </li>


                      </ul>
                    </form>
                    <!-- /FORM -->
                  </div>
                  <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
              </div>
              <!-- /GRID COLUMN -->
        </div>

     <!--grid centro -->

    
    </div>  

  </div>


<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://www.odindesign-themes.com/thetrickster/js/dropdowns.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>
</body>
</html> 