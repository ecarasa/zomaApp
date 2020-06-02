<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('pista.name', 'CheAmigo.com.ar') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
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
  <div class="grid grid-3-9 mobile-prefer-content">
    <!-- grid izquierdo -->
    <div class="grid-sidebar">
          <!-- PROFILE STATS -->
          <div class="profile-stats ">
            <!-- PROFILE STATS COVER -->
            <div class="profile-stats-cover" >
              <!-- PROFILE STATS COVER TITLE -->
              <p class="profile-stats-cover-title">Mi cuenta</p>
              <!-- /PROFILE STATS COVER TITLE -->
        
              <!-- PROFILE STATS COVER TEXT -->
              
              <p class="profile-stats-cover-text">{{ $user->name  }}</p>
             
              <!-- /PROFILE STATS COVER TEXT -->
            </div>
            <!-- /PROFILE STATS COVER -->
        
            <!-- PROFILE STATS INFO -->
            <div class="profile-stats-info">
           
            



                <div class="sidebar-menu-item" onclick="">
                  <!-- FEATURED STAT ICON -->
                  <div class="sidebar-menu-header accordion-trigger-linked" >
                    <svg class="sidebar-menu-header-icon icon-profile">
                      <use xlink:href="#svg-profile">                      
                      </use>
                    </svg>
        
                    <!-- PROGRESS ARC INFO -->
                    <div class="sidebar-menu-header-control-icon" >
                      <!-- PROGRESS ARC TITLE -->
                        <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                           <use xlink:href="#svg-minus-small"></use>
                         </svg>
                        <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                            <use xlink:href="#svg-plus-small"></use>
                        </svg>
                        <p class="sidebar-menu-header-title">Perfil</p>
                        <p class="sidebar-menu-header-text">Datos de tu Cuenta</p>
                    </div>

                  </div>
                </div>
                
              <!-- /FEATURED STAT LIST -->
            </div>
            <!-- /PROFILE STATS INFO -->
          </div>
          <!-- /PROFILE STATS -->
     </div>
    <!-- / grid izquierdo -->
    <!--grid centro -->    
    @include ('cuenta')
     <!--grid centro -->

    
    </div>  

  </div>


<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>
</body>
</html> 