<div class="account-hub-content" id="pistascentro">
      <div class="chat-widget" id="msjeDetalle"style="width:100%; display:none">
          
          
      </div>

    <div class="widget" id="msjesCabecera">  
      <!-- start.1er FORM -->    
      <div class="form-box style='width:100%' login-register-form-element">
       
        <h2 class="form-box-title"> <p class="">Creá tu grupo, agrega a los participantes  y comiencen a participar de este juego histórico ahora 100% Online!. Cada uno de los participantes
      va a poder acceder a un panel interactivo dónde podrá intercambiar mensajes con su amigo invisible, seleccionar un regalo para enviarle y mucho más.</p>
     </h2>
        <form class="form" id="formJuego" action="/grupos/crear" method="post">
        @csrf
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-username">Nombre de Grupo</label>
                <input type="text" id="nombreGrupo" name="nombreGrupo" autocomplete="off">
              </div>
            </div>
          </div>
          @if (!Auth::check())
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Email</label>
                <input type="text" id="email"  name="email" autocomplete="off">
              </div>
            </div>
          </div>
          @endif

          <div class="form-row">
            <div class="form-item">
              <div class="form-input active">
                <label for="login-password">Cuando Termina ?</label>
                <input type="date" id="fechaFin"  class="dateInput" name="fechaFin" autocomplete="off">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-item">
              <div class="form-input">
                <label for="login-password">Maximo $ a gastar</label>
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
      <!-- end.1er FORM -->
    
      <!-- start.2do FORM -->
      <div class="form-box login-register-form-element">
        <form class="form">
        </form>
      </div>
      <!-- end.2do FORM -->
    </div>
  
  
</div>
<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>





