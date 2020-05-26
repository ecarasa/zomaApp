<form class="form" id="FormPistaEnv"  action="/pista/crear" method="post">
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
                  <span class="user-status-title">Tu amigo invisible es:</span>
                  <span class="bold" id="receptorEmail" > </span>
                  
                  <input type="hidden" id="receptor" name="receptor" placeholder="Receptor" value="0">
                 
                </div>
                
                <!-- FORM ITEM -->
              </div>
              <!-- /FORM ITEM -->
              <div class="form-row split">
                  <div class="form-item">
                  <span> Querés incluir un regalo? (podes elegirlo pagarlo ahora o arreglar con el vendedor después) </span>
                  <select class="form-control" id="ComboRegalo" onchange="slRegalo();" >
                  <option value=0 regalourl="" nombreregalo=0> No...</option>
                  @foreach ($regalos as $regalo)
                  <option value={{$regalo->id}} regalourl="{{$regalo->url}}" nombreregalo="{{$regalo->nombre}}"> 
                    {{$regalo->nombre. '-'.$regalo->descripcion }}
                  </option>
                  @endforeach               
                  </select>              
                  </div>
                </div>  
                <!-- FORM ITEM -->
              <!-- FORM ROW -->
              <div class="form-row ">
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

                


              </div>
              <div class="form-row ">
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