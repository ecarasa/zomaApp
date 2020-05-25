<div class="account-hub-content" id="pistascentro" href="#tg">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle"> Tus Grupos </p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->

          <!-- SECTION HEADER ACTIONS -->
          <div class="section-header-actions">
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action"></p>
            <!-- /SECTION HEADER ACTION -->
      
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action" onclick="MostrarDivUnico('msjRecibidos')">  </p>
            <!-- /SECTION HEADER ACTION -->
          </div>
        <!-- /SECTION HEADER ACTIONS -->
        </div>
        <!-- /SECTION HEADER -->
        <!-- CHAT WIDGET FORM -->
        <div class="chat-widget-wrap" id="DivEnviarPista" style="display:none">
        
        </div>
        <!-- /CHAT WIDGET FORM -->
        <!-- CHAT WIDGET WRAP -->
        <div class="chat-widget-wrap" id="msjEnviados" style="width:100%">
          <!-- CHAT WIDGET -->
          <div class="chat-widget static" id="msjesCabecera" style="width:100%">
            <!-- CHAT WIDGET MESSAGES -->
            <div class="chat-widget-messages" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
              <!-- CHAT WIDGET MESSAGE 
              for cada mensaje mio   -->
              
              @foreach ($grupos as $grupo)
              <div class="chat-widget-message" id="{{$grupo->id}}" onclick="MostrarDetallesGrupo({{$grupo->id}});">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="https://cheamigo.com.ar/public/img/avatar/04.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">
                        <div class="demo-box-icon-wrap"><svg class="icon-group demo-box-icon"><use xlink:href="#svg-group"></use></svg></div>
                        </p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title" class="accordion-trigger-linked"><span class="bold" readonly> Nombre:</span></p>
                  <p class="user-status-title "> {{$grupo->codigoGrupo}} </p>
                  <!-- /USER STATUS TITLE -->              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text"> Tu Amigo Invisible ->{{ $grupo->email }} </p>
                  <p class="user-status-timestamp"> Fecha Fin:  {{ $grupo->fechaFin}} </p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty"> En juego </p>
                  <!-- /mensaje pista grupo-->
                 
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE 
              //fin for -->
              @endforeach
              
        
              
             
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 924px;"></div></div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div><div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: auto; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>
            <!-- /CHAT WIDGET MESSAGES -->
        
            <!-- CHAT WIDGET FORM -->
            
            <!-- /CHAT WIDGET FORM -->
          </div>
          <!-- /CHAT WIDGET -->
      
          <!-- CHAT WIDGET -->
        <div class="chat-widget" id="msjeDetalle"style="width:100%; display:none">
          
          
        </div>
        <!-- /CHAT WIDGET WRAP -->

</div>