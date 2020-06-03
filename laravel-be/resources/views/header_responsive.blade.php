<header class="header" id="headerWeb">
    <div class="header-actions">
      <div class="header-brand">
        <div class="logo">
          <svg class="icon-logo-vikinger small">
            <use xlink:href="#svg-logo-vikinger"></use>
          </svg>
        </div>
        <h1 class="header-brand-text">CheAmigo</h1>
      </div>
      <div class="mobilemenu-trigger navigation-widget-mobile-trigger2" onClick="javascript:toggleMenu();">
        <div class="burger-icon inverted">
          <div class="burger-icon-bar"></div>
          <div class="burger-icon-bar"></div>
          <div class="burger-icon-bar"></div>
        </div>
      </div>
    </div>
    
    <div class="header-actions" >

      

      <nav class="navigation">
        <ul class="menu-main">
          <li class="menu-main-item">
            <a class="menu-main-item-link" href="/store">CheRegalos</a>
          </li>
          <li class="menu-main-item">
            <a class="menu-main-item-link" href="/pista"> CheAmigoInvisible</a>
          </li>
          <li class="menu-main-item">
            <a class="menu-main-item-link" href="/cuenta">Cuenta</a>
          </li>
          <li class="menu-main-item">
            <a class="menu-main-item-link" href="/faqs">Preguntas Frecuentes</a>
          </li>


        </ul>
      </nav>
    </div>


    
    
 
    
    <nav class="navigation">
        <!-- MENU MAIN -->
        <ul class="menu-main">
          


        @if (Auth::check())
          <li class="menu-main-item" style="    margin-top: 25px;margin-right: 20px;">
            <form method="post" action="/logout" id="salida">
              @csrf
              <!--<button class="btnbtn" type="submit">{{Auth::user()->name}} - {{Auth::user()->id}} - Salir</button>-->
              <button class="btnbtn" style="padding-left: 10px;padding-right: 6px;" type="submit">Hola, {{Auth::user()->name}} - Salir</button>
            </form>
          </li>

        @else
            <li class="menu-main-item">
              <a class="menu-main-item-link" href="/login";>INGRESA</a>
            </li>
            <li class="menu-main-item">
              <a class="menu-main-item-link" href="/register";>REGISTRATE</a>
            </li>
        @endif
        </ul>
      </nav>
  </header>


  <nav id="navigation-widget-mobile" class="navigation-widget navigation-widget-mobile sidebar left" data-simplebar="init" style="height: 936px; display: none;">
  <div class="simplebar-wrapper" style="margin: 0px 0px -40px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px 0px 40px;">
    <!-- NAVIGATION WIDGET CLOSE BUTTON -->
    <div class="navigation-widget-close-button" onClick="javascript:toggleMenu();">
      <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
      <svg class="navigation-widget-close-button-icon icon-back-arrow">
        <use xlink:href="#svg-back-arrow"></use>
      </svg>
      <!-- NAVIGATION WIDGET CLOSE BUTTON ICON -->
    </div>
    <!-- /NAVIGATION WIDGET CLOSE BUTTON -->

    <!-- NAVIGATION WIDGET INFO WRAP -->
    <div class="navigation-widget-info-wrap">


      @if (Auth::check())


          <div class="navigation-widget-info">
        <p class="navigation-widget-info-title">Hola, {{Auth::user()->name}}</p>
        <p class="navigation-widget-info-text">Bienvenido!</p>  
      </div>

   


        @else
        <ul>
            <li class="menu-main-item">
              <a class="menu-main-item-link" href="/login";>INGRESA</a>
            </li>
            <li class="menu-main-item">
              <a class="menu-main-item-link" href="/register";>REGISTRATE</a>
            </li>
            </ul>
        @endif





    </div>
    <!-- /NAVIGATION WIDGET INFO WRAP -->

    <!-- NAVIGATION WIDGET SECTION TITLE -->
    <p class="navigation-widget-section-title">Secciones</p>
  
  
    <ul class="menu">

      <li class="menu-item">
        <a class="menu-item-link" href="/store">
          <svg class="menu-item-link-icon icon-marketplace">
            <use xlink:href="#svg-marketplace"></use>
          </svg>
          CheRegalos
        </a>
      </li>

      <li class="menu-item">
        <a class="menu-item-link" href="/pista">
          <svg class="menu-item-link-icon icon-group">
            <use xlink:href="#svg-group"></use>
          </svg>
          Jugar CheAmigoInvisible
        </a>
      </li>

      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="/cuenta">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-quests">
            <use xlink:href="#svg-quests"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Cuenta
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
      <li class="menu-item">
        <!-- MENU ITEM LINK -->
        <a class="menu-item-link" href="/faqs">
          <!-- MENU ITEM LINK ICON -->
          <svg class="menu-item-link-icon icon-forums">
            <use xlink:href="#svg-forums"></use>
          </svg>
          <!-- /MENU ITEM LINK ICON -->
          Ayuda
        </a>
        <!-- /MENU ITEM LINK -->
      </li>
    

    </ul>
    
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
  <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
  <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
  <div class="simplebar-scrollbar" style="height: 443px; transform: translate3d(0px, 0px, 0px); display: block;">
  </div></div>
  </nav>



  <script>
  function toggleMenu(){
    $('#navigation-widget-mobile').toggle(200);
  }
  </script>