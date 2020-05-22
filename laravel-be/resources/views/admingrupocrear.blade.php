
<div class="account-hub-content" id="pistascentro" href="#tg">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle" onclick="MostrarDetallesGrupo(22)"> Nuevo Grupo </p>
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
            <p class="section-header-action" >  </p>
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
            <div class="chat-widget-messages" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
              <div class="simplebar-height-auto-observer-wrapper">
                 <div class="simplebar-height-auto-observer"></div>
              </div><div class="simplebar-mask">
              <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
              <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
              <div class="simplebar-content" style="padding: 0px;">
              <!-- CHAT WIDGET MESSAGE 
              for cada mensaje mio   -->
              
              
                <div class="form-box" style='width:100%' login-register-form-element">
                    
                      <h2 class="form-box-title"> <p class="">Creá tu grupo, agrega a los participantes  y comiencen a participar de este juego histórico ahora 100% Online!. Cada uno de los participantes
                    va a poder acceder a un panel interactivo dónde podrá intercambiar mensajes con su amigo invisible, seleccionar un regalo para enviarle y mucho más.</p>
                    </h2>
                      <form class="form" id="formCrearGrupo" action="/grupos/crear" method="post">
                      @csrf
                        <div class="form-row">
                          <div class="form-item">
                            <div class="form-input active">
                              <label for="login-nombregrupo">Nombre de Grupo</label>
                              <input type="text" id="nombreGrupo" name="nombreGrupo" autocomplete="off">
                            </div>
                          </div>
                        </div>
                        
                        <div class="form-row">
                          <div class="form-item">
                            <div class="form-input active">
                              <label for="login-fechafin">Cuando Termina ?</label>
                              <input type="date" id="fechaFin"  class="dateInput" name="fechaFin" autocomplete="off">
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-item">
                            <div class="form-input active">
                              <label for="login-maxdinero">Maximo $ a gastar</label>
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
                            <a href="javascript:crearGrupo();" class="button medium secondary" style="width: 100%;">CREAR</a>
                          </div>
                        </div>
                      </form>
                    </div>
             
              
        
              
             
            </div></div></div></div>
            
            <div class="simplebar-placeholder" style="width: auto; height: 924px;"></div></div>
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
