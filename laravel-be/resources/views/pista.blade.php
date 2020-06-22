<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'CheAmigo.com.ar') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
        </head>
    <body>


  @include('pageloader')  
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


@media (max-width: 480px) {
  .botonCrearG{
      width: 100%;
      margin-top: 25px;
  }

  .section-title{
    text-align: center!important;
  }

}
</style>
  <!-- /NAVIGATION WIDGET -->


  <!-- FLOATY BAR -->
  
  <!-- /FLOATY BAR -->

  <!-- CONTENT GRID -->
  <div class="content-grid">
 
      <div tabindex="-1" role="dialog" class="modal" id="MD" >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" style="width: 100%;"></h5>
                              </div>
                              <div class="modal-body" id="modalDinamicoDiv">
                               <p> cargando...</p>
                              </div> 
                              <div class="modal-footer">                                
                                <button style="background-color:#615dfa" type="button" class="btn btn-secondary" data-dismiss="modal"  >Ok</button>
                              </div>
                            </div>
                          </div>
        </div>
  
    <!-- SECTION BANNER -->
    <div class="dropdown-box" id="msfConfirm" style="display:none">
      <div class="dropdown-box-header"> Pista Mensaje Enviad@ 
      <svg onclick="$('#msfConfirm').hide()" class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
      </div>
    </div>

    <h2 class="section-title">
            Empezá a jugar al amigo invisible 100% online ahora!          
    </h2>
    
    
    <a style="padding: 0px 12px 0px 12px;" class="button tiny secondary botonCrearG" href="javascript:CargarEnviados('true');MostrarDivUnico('DivEnviarPista');" ><svg class="icon-plus demo-box-icon"><use xlink:href="#svg-plus"></use></svg> Enviar Pista a mi amig@ invisible</a>
    <a style="padding: 0px 12px 0px 12px;" class="button tiny secondary botonCrearG" href="javascript:irCrearGrupo();" ><svg class="icon-add-friend demo-box-icon"><use xlink:href="#svg-add-friend"></use></svg> Crear Grupo</a>
   
    <!-- /SECTION BANNER -->

   

    <!-- / englobador de grid  -->
  <div class="grid grid-3-9 mobile-prefer-content">
    <!-- grid izquierdo -->
    <div class="grid-sidebar">
          <!-- PROFILE STATS -->
          <div class="profile-stats fixed-height">
            <!-- PROFILE STATS COVER -->
            <div class="profile-stats-cover">
              <!-- PROFILE STATS COVER TITLE -->
              <p class="profile-stats-cover-title">Welcome Back! </p>
              <!-- /PROFILE STATS COVER TITLE -->
        
              <!-- PROFILE STATS COVER TEXT -->
              @foreach ($users as $usuario)
              <p class="profile-stats-cover-text">{{ $usuario->nombre  }}</p>
              @endforeach
              <!-- /PROFILE STATS COVER TEXT -->
            </div>
            <!-- /PROFILE STATS COVER -->
        
            <!-- PROFILE STATS INFO -->
            <div class="profile-stats-info">
              <!-- USER AVATAR -->
              <div class="user-avatar medium">
                <!-- USER AVATAR BORDER -->
                <div class="user-avatar-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-120-132" style="width: 120px; height: 132px; position: relative;"><canvas width="120" height="132" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR BORDER -->
            
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                  <!-- HEXAGON -->
                  <div class="hexagon-image-82-90" data-src="https://cheamigo.com.ar/public/img/avatar/01.png" style="width: 82px; height: 90px; position: relative;">
                  <img src="https://cheamigo.com.ar/public/img/avatar/01.png" style="width: 82px; height: 90px; position: relative;" ></img>
                  <canvas width="82" height="90" style="position: absolute; top: 0px; left: 0px;"></canvas>
                  </div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR CONTENT -->
            
                <!-- USER AVATAR PROGRESS -->
                <div class="user-avatar-progress">
                  <!-- HEXAGON -->
                  <div class="hexagon-progress-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS -->
            
                <!-- USER AVATAR PROGRESS BORDER -->
                <div class="user-avatar-progress-border">
                  <!-- HEXAGON -->
                  <div class="hexagon-border-100-110" style="width: 100px; height: 110px; position: relative;"><canvas width="100" height="110" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                  <!-- /HEXAGON -->
                </div>
                <!-- /USER AVATAR PROGRESS BORDER -->
            
                <!-- USER AVATAR BADGE -->
                <div class="user-avatar-badge">
                  <!-- USER AVATAR BADGE BORDER -->
                  <div class="user-avatar-badge-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-32-36" style="width: 32px; height: 36px; position: relative;"><canvas width="32" height="36" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE BORDER -->
            
                  <!-- USER AVATAR BADGE CONTENT -->
                  <div class="user-avatar-badge-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-dark-26-28" style="width: 26px; height: 28px; position: relative;"><canvas width="26" height="28" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR BADGE CONTENT -->
            
                  <!-- USER AVATAR BADGE TEXT -->
                  <p class="user-avatar-badge-text">CH</p>
                  <!-- /USER AVATAR BADGE TEXT -->
                </div>
                <!-- /USER AVATAR BADGE -->
              </div>
              <!-- /USER AVATAR -->
        
              <!-- FEATURED STAT LIST -->
                              <!-- FEATURED STAT -->



                <div class="sidebar-menu-item" onclick="CargarRecibidos();">
                  <!-- FEATURED STAT ICON -->
                  <div class="sidebar-menu-header accordion-trigger-linked" >
                    <svg class="sidebar-menu-header-icon icon-messages">
                      <use xlink:href="#svg-messages">                      
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
                        <p class="sidebar-menu-header-title">Recibidos</p>
                        <p class="sidebar-menu-header-text">Pistas recibidas para adivinar quién es tu AI</p>
                    </div>

                  </div>
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="sidebar-menu-item" onclick="CargarEnviados();" style="cursor:pointer">
                  <div class="sidebar-menu-header accordion-trigger-linked" >
                    <svg class="sidebar-menu-header-icon icon-messages">
                      <use xlink:href="#svg-messages">                      
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
                        <p class="sidebar-menu-header-title">Enviados</p>
                        <p class="sidebar-menu-header-text">Pistas que envias a un amigo invisible</p>
                    </div>

                  </div>
                </div>
                <!-- /FEATURED STAT -->
              
              <!-- /FEATURED STAT LIST -->
        
              <!-- FEATURED STAT LIST -->
              
                <!-- FEATURED STAT -->
                <div class="sidebar-menu-item" onclick="window.location.href='/store'">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="sidebar-menu-header accordion-trigger-linked">
                    <svg class="sidebar-menu-header-icon icon-store">
                      <use xlink:href="#svg-store">
                      
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
                        <p class="sidebar-menu-header-title">Regalar</p>
                        <p class="sidebar-menu-header-text">Encontrá el mejor regalo para tu amigo invisible!</p>
                    </div>
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="sidebar-menu-item" onclick="CargarGrupos();">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="sidebar-menu-header accordion-trigger-linked">
                    <svg class="sidebar-menu-header-icon icon-group">
                      <use xlink:href="#svg-group">
                      
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
                        <p class="sidebar-menu-header-title">Grupos</p>
                        <p class="sidebar-menu-header-text">Mira con quien juegas y en que grupos participas!</p>
                     <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
              <!-- FEATURED STAT -->
              <div class="sidebar-menu-item" onclick="CargarRegalosEnviados();">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="sidebar-menu-header accordion-trigger-linked">
                    <svg class="sidebar-menu-header-icon icon-group">
                      <use xlink:href="#svg-group">
                      
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
                        <p class="sidebar-menu-header-title">Regalos Enviados</p>
                        <p class="sidebar-menu-header-text">Chequea la info de los regalos que realizaste</p>
                     <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  
                  <!-- /FEATURED STAT TEXT -->
                </div>
              <!-- /FEATURED STAT LIST -->
            </div>
            <!-- /PROFILE STATS INFO -->
          </div>
          <!-- /PROFILE STATS -->
     </div>
    <!-- / grid izquierdo -->
    <!--grid centro -->
    
    @include ('grid_pista_centro')
     <!--grid centro -->

    
    </div>  

  </div>


<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/core_scripts.js"></script>
</body>
</html> 