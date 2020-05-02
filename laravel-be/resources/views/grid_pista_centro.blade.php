<div class="account-hub-content" id="pistascentro">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle"> @foreach ($users as $usuario) 
            {{ $usuario->nombre }} -   {{ $usuario->email }} 
            @endforeach 
            </p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Pistas Enviadas</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->

          <!-- SECTION HEADER ACTIONS -->
          <div class="section-header-actions">
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action" onclick="MostrarDivUnico('DivEnviarPista')">Enviar Pista</p>
            <!-- /SECTION HEADER ACTION -->
      
            <!-- SECTION HEADER ACTION -->
            <p class="section-header-action" onclick="MostrarDivUnico('msjEnviados')"> Ver Pistas </p>
            <!-- /SECTION HEADER ACTION -->
          </div>
        <!-- /SECTION HEADER ACTIONS -->
        </div>
        <!-- /SECTION HEADER -->
        <!-- CHAT WIDGET FORM -->
        <div class="chat-widget-wrap" id="DivEnviarPista" style="display:none">
        @include('grid_enviarpista')
        
        </div>
        <!-- /CHAT WIDGET FORM -->
        <!-- CHAT WIDGET WRAP -->
        <div class="chat-widget-wrap" id="msjEnviados" >
          <!-- CHAT WIDGET -->
          <div class="chat-widget static" id="msjesCabecera" style="width:100%">
            <!-- CHAT WIDGET MESSAGES -->
            <div class="chat-widget-messages" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
              <!-- CHAT WIDGET MESSAGE 
              for cada mensaje mio   -->
              
              @foreach ($mensajes as $mensaje)
                <!-- USER STATUS -->
              <div class="chat-widget-message" onclick="MostrarDetallePista({{$mensaje->id}})" style="border-bottom-style: groove;
    border-bottom-width: thin; border-bottom-color: #615dfa;" >
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
                  <p class="user-status-title"><span class="bold" readonly>{{ $mensaje->receptor }}</span></p>
                  <p class="user-status-timestamp ">Grupo: {{$mensaje->GrupoNombre}}</p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text"> {{ $mensaje->mensaje }} </p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">{{ date('d-m-Y h:s', strtotime($mensaje->fecha)) }}</p>
                  <!-- /mensaje pista grupo-->
                 
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /CHAT WIDGET MESSAGE 
              //fin for -->
              @endforeach
              
        
              
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: auto;"></div></div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;">
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
            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
              <!-- CHAT WIDGET SETTINGS -->
              <div class="chat-widget-settings">
                <!-- POST SETTINGS WRAP -->
                <div class="post-settings-wrap" style="position: relative;">
                  <!-- POST SETTINGS -->
                  <div class="post-settings widget-box-post-settings-dropdown-trigger">
                    <!-- POST SETTINGS ICON -->
                    <svg class="post-settings-icon icon-more-dots">
                      <use xlink:href="#svg-more-dots"></use>
                    </svg>
                    <!-- /POST SETTINGS ICON -->
                  </div>
                  <!-- /POST SETTINGS -->
          
                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown widget-box-post-settings-dropdown" style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 0; visibility: hidden; transform: translate(0px, -20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Report</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Block</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Mute</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /POST SETTINGS WRAP -->
              </div>
              <!-- CHAT WIDGET SETTINGS -->
        
              <!-- USER STATUS -->
              <div class="user-status">
                <!-- USER STATUS AVATAR -->
                <div class="user-status-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar small no-outline online">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
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
                      <p class="user-avatar-badge-text">16</p>
                      <!-- /USER AVATAR BADGE TEXT -->
                    </div>
                    <!-- /USER AVATAR BADGE -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /USER STATUS AVATAR -->
        
                <!-- USER STATUS TITLE -->
                <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                <!-- /USER STATUS TITLE -->
        
                <!-- USER STATUS TAG -->
                <p class="user-status-tag online">Online</p>
                <!-- /USER STATUS TAG -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET HEADER -->
        
            <!-- CHAT WIDGET CONVERSATION -->
            <div class="chat-widget-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -35px -28px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 35px 28px;">
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar tiny no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg" style="width: 24px; height: 26px; position: relative;"><canvas width="24" height="26" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
        
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker right">
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Hey Nick!</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last time we saw was at Neko's party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">10:05AM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
        
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar tiny no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg" style="width: 24px; height: 26px; position: relative;"><canvas width="24" height="26" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
        
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
            </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 430px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
            <!-- /CHAT WIDGET CONVERSATION -->
        
            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
              <!-- FORM ROW -->
              <div class="form-row split">
                <!-- FORM ITEM -->
                <div class="form-item">
                  <!-- INTERACTIVE INPUT -->
                  <div class="interactive-input small">
                    <input type="text" id="chat-widget-message-text-2" name="chat_widget_message_text_2" placeholder="Write a message...">
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
                <div class="form-item auto-width">
                  <!-- BUTTON -->
                  <p class="button primary padded">
                    <!-- BUTTON ICON -->
                    <svg class="button-icon no-space icon-send-message">
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
            <!-- /CHAT WIDGET FORM -->
          </div>
          <!-- /CHAT WIDGET -->
        </div>
        <!-- /CHAT WIDGET WRAP -->

</div>