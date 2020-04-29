            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
            
              <!-- CHAT WIDGET SETTINGS -->
              <div class="chat-widget-settings">
                <!-- POST SETTINGS WRAP -->
                <div class="post-settings-wrap" style="position: relative;" onclick="Volver('#msjeDetalle','#msjesCabecera')">
                  <!-- POST SETTINGS -->
                  <div class="post-settings widget-box-post-settings-dropdown-trigger">  <<< 
                    <!-- POST SETTINGS ICON -->
                    <svg class="post-settings-icon icon-return">
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
              <div class="featured-stat-list"> 
                <div class="featured-stat">
                <!-- USER STATUS -->
                <span class="bold">Participantes</span>
                @foreach ($grupos as $grupo)
                <div class="user-status ">             
                
                  <!-- USER STATUS TITLE -->
                  <!-- /USER STATUS TITLE -->
                  <p class="featured-stat-text" style="color:#7729cc"><span class="bold"> {{$grupo->usuarioN}}: {{$grupo->usuario}}</span></p>          
          
                  <!-- USER STATUS TAG -->
                  <p class="featured-stat-text user-status-tag @if ($grupo->rol=='Admin') {{ 'online' }} @endif"> 
                  <span class="bold">{{$grupo->rol}}</span></p>
                
                  <!-- /USER STATUS TAG -->
                </div>              
                @endforeach
                </div> 
                <div class="user-status featured-stat">  
                <p class="user-status-title"><span class="bold"> Datos del grupo </span></p>
                @foreach ($gruposdato as $dato)
                <p class="user-status-title"><span class="bold">Nombre: {{$dato -> nombre}} </span></p>
                <p class="user-status-title"><span class="bold">Código: {{$dato -> codigo}} </span></p>
                <p class="user-status-title"><span class="bold"> Máx. para Regalo: $ {{$dato -> maxDinero}} </span></p>
                
                @endforeach
                </div>
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
        
              
              <!-- /CHAT WIDGET SPEAKER -->
              
          </div>
          <!-- /CHAT WIDGET -->
        </div>
        <!-- /CHAT WIDGET WRAP -->

</div>