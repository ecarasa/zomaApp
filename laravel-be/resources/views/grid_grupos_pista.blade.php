<div class="account-hub-content" id="pistascentro" href="#tg">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle"> Tus Grupos </p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title"></h2>
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
        <form class="chat-widget-form" id="FormPistaEnv"  action="/pista/crear" method="post">
         @csrf
            <!-- FORM ROW -->
            
              <div class="form-row split">
                <!-- FORM ITEM -->   
             
                <div class="form-item">
                  <select class="form-control" id="ComboGr" onchange="slReceptor();" >
                  <option value=0 emailamigoi="" idamigoi=0> Seleccionar grupo</option>
                  @foreach ($grupos as $grupo)
                  <option value={{$grupo->id}} idamigoi="{{$grupo->idUserAmigoInvible}}" emailamigoi="{{$grupo->email}}"> 
                    {{$grupo->codigoGrupo}}
                  </option>
                  @endforeach               
                  </select>                  
                </div>
                 <!-- FORM ITEM -->
              </div>
              <div class="form-row split">
                <div class="form-item" >
                  <p class="user-status-title">Tu amigo invisible es:</p>
                  <input type="hidden" id="receptor" name="receptor" placeholder="Receptor" value="">
                  <p readonly class="user-status user-status-tag online" type="text" id="receptorEmail"  ></p>
                </div>
                
                <!-- FORM ITEM -->
              </div>
              <!-- FORM ROW -->
              <div class="form-row split">
                <div class="form-item">
                  <!-- INTERACTIVE INPUT -->
                  <div class="interactive-input small">
                    <textarea id="pistamsj_enviar" name="pistamsj_enviar" placeholder="Escribe un mensaje..." class="form-control"></textarea>
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap actionable">
                      <!-- TOOLTIP WRAP -->
                      <div class="tooltip-wrap text-tooltip-tft" data-title="Send Photo" style="position: relative;">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-camera">
                          <use xlink:href="#svg-camera"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                      <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -40px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Send Photo</p></div><div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -40px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Send Photo</p></div></div>
                      <!-- /TOOLTIP WRAP -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->
            
                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                      <!-- INTERACTIVE INPUT ACTION ICON -->
                      <svg class="interactive-input-action-icon icon-cross-thin">
                        <use xlink:href="#svg-cross-thin"></use>
                      </svg>
                      <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                  </div>
                  <!-- /INTERACTIVE INPUT -->
                </div>
                <!-- /FORM ITEM -->
      
                <!-- FORM ITEM -->
                <div class="form-item auto-width" onclick="sendMsj();">
                  <!-- BUTTON -->
                  <p class="button primary padded">
                    <!-- BUTTON ICON -->
                    <svg  class="button-icon no-space icon-send-message">
                      <use xlink:href="#svg-send-message"></use>
                    </svg>
                    <!-- /BUTTON ICON -->
                  </p>
                  <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
              </div>
              <!-- /FORM ROW -->
        </form>
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
                        <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
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
                        <p class="user-avatar-badge-text">6</p>
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
            <form class="chat-widget-form">
              <!-- INTERACTIVE INPUT -->
              <div class="interactive-input small">
                <input type="text" id="chat-widget-search-2" name="chat_widget_search_2" placeholder="Search Messages...">
                <!-- INTERACTIVE INPUT ICON WRAP -->
                <div class="interactive-input-icon-wrap">
                  <!-- INTERACTIVE INPUT ICON -->
                  <svg class="interactive-input-icon icon-magnifying-glass">
                    <use xlink:href="#svg-magnifying-glass"></use>
                  </svg>
                  <!-- /INTERACTIVE INPUT ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ICON WRAP -->
        
                <!-- INTERACTIVE INPUT ACTION -->
                <div class="interactive-input-action">
                  <!-- INTERACTIVE INPUT ACTION ICON -->
                  <svg class="interactive-input-action-icon icon-cross-thin">
                    <use xlink:href="#svg-cross-thin"></use>
                  </svg>
                  <!-- /INTERACTIVE INPUT ACTION ICON -->
                </div>
                <!-- /INTERACTIVE INPUT ACTION -->
              </div>
              <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->
          </div>
          <!-- /CHAT WIDGET -->
      
          <!-- CHAT WIDGET -->
        <div class="chat-widget" id="msjeDetalle"style="width:100%; display:none">
          
          
        </div>
        <!-- /CHAT WIDGET WRAP -->

</div>