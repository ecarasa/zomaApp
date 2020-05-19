<style>
  .profile-header.v2 .profile-header-info .user-short-description {
    padding: 84px 0 0 0px!important;   
}


.earning-stat-box .earning-stat-box-title {
    font-size: 16PX!important;   
    font-weight: 700;
}

.earning-stat-box .earning-stat-box-icon-wrap {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    -ms-flex-align: center;
    align-items: center;
    width: 32px!important;   
    height: 32px!important;   
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
}


.earning-stat-box {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
    /* min-height: 73px; */
    min-height: 42px;
    padding: 10px 20px 10px 20px!important;
    border-radius: 5px!important;
    background-position-x: 12px!important;
    background-color: #eaeaf5!important;
    box-shadow: 22px 11px 40px 7px rgba(94,92,154,.06);
}


</style>            
            
            
            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
            

            <div class="profile-header v2">
      <!-- PROFILE HEADER COVER -->
      
      <!-- /PROFILE HEADER COVER -->

      <!-- PROFILE HEADER INFO -->
      <div class="profile-header-info">
        <!-- USER SHORT DESCRIPTION -->
        <div class="user-short-description big">

          <p class="user-short-description-title">
            @foreach ($gruposdato as $dato)
                {{$dato->nombre}}
            @endforeach
          </p>
          <!-- /USER SHORT DESCRIPTION TITLE -->
    
          <!-- USER SHORT DESCRIPTION TEXT -->
          <p class="user-short-description-text">Hola !</p>
          <!-- /USER SHORT DESCRIPTION TEXT -->
        </div>
        <!-- /USER SHORT DESCRIPTION -->

        <!-- USER STATS -->
        <div class="user-stats">
          <!-- USER STAT -->

          <!-- /USER STAT -->

          <!-- USER STAT -->
          <div class="user-stat big">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">{{ count($grupos) }}</p>
            <!-- /USER STAT TITLE -->
    
            <!-- USER STAT TEXT -->
            <p class="user-stat-text">Jugadores</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
    
          <!-- USER STAT -->
          <div class="user-stat big">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">@foreach ($gruposdato as $dato)
                {{$dato->maxDinero}}
        @endforeach</p>
            <!-- /USER STAT TITLE -->
    
            <!-- USER STAT TEXT -->
            <p class="user-stat-text">Max a gastar</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
    
          <!-- USER STAT -->
          <div class="user-stat big">
            <!-- USER STAT TITLE -->
            <p class="user-stat-title">@foreach ($gruposdato as $dato)
                {{$dato->codigo}}
        @endforeach</p>
            <!-- /USER STAT TITLE -->
    
            <!-- USER STAT TEXT -->
            <p class="user-stat-text">código grupo</p>
            <!-- /USER STAT TEXT -->
          </div>
          <!-- /USER STAT -->
        </div>
        <!-- /USER STATS -->

        <!-- TAG STICKER -->
        <div class="tag-sticker">
          <!-- TAG STICKER ICON -->
          <svg class="tag-sticker-icon icon-public">
            <use xlink:href="#svg-public"></use>
          </svg>
          <!-- /TAG STICKER ICON -->
        </div>
        <!-- /TAG STICKER -->

        
        <div class="profile-header-info-actions">
        <a class="profile-header-info-action button" href="javascript:sortear(@foreach ($gruposdato as $dato){{$dato->id}}@endforeach);" alt="Sortear amigo invisible">
            Sortear
          </a>
          
          <a class="profile-header-info-action button" href="#" onclick="Volver('#msjeDetalle','#msjesCabecera')" alt="Volver">
          Volver
          </a>
        </div>
        
      </div>
      <!-- /PROFILE HEADER INFO -->
    </div>





              


                <div class="featured-stat-list" style="margin-top: 20px;">
                  <div class="featured-stat">
                    <!-- USER STATUS -->
                    <span class="bold">Participantes</span>
                    <div class="grid grid-1 centered" style="margin-top: 20px;">
                    @foreach ($grupos as $grupo)
                                  
                      <div class="earning-stat-box">
                        <div class="earning-stat-box-info">
                          <div class="earning-stat-box-icon-wrap stat-item">
                          <svg class="icon-friend demo-box-icon"><use xlink:href="#svg-friend"></use></svg>
                          </div>
                          <p class="earning-stat-box-title">{{$grupo->usuarioN}}: {{$grupo->usuario}}</p>
                          <p class="featured-stat-text user-status-tag @if ($grupo->rol=='Admin') {{ 'online' }} @endif">
                            <span class="bold">{{$grupo->rol}}</span>
                          </p>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>    


        
            <!-- CHAT WIDGET CONVERSATION
            <div class="chat-widget-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -35px -28px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 35px 28px;">
              
              <div class="chat-widget-speaker left">
                
                <div class="chat-widget-speaker-avatar">
                
                  <div class="user-avatar tiny no-border">
                
                    <div class="user-avatar-content">
                
                      <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg" style="width: 24px; height: 26px; position: relative;"><canvas width="24" height="26" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                
                    </div>
                
                  </div>
                
                </div>
                
        
              
              
              
            </div>
            -->
        </div>
        

</div>