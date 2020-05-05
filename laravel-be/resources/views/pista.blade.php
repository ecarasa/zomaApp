<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('pista.name', 'TuAmigoFiel.com') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="css/styles.min.css">
            <link rel="icon" href="img/favicon.ico">
        </head>
    <body>

  <!-- PAGE LOADER -->
  @include('pageloader')
  <!-- /PAGE LOADER -->
  <!-- MENU  DE NAV WIDGET 
   @ //include('nav_menu') -->
  <!-- /NAVIGATION WIDGET -->
  <!-- MENU  DE NAV WIDGET -->
  @include('header')
  <!-- /NAVIGATION WIDGET -->


  <!-- FLOATY BAR -->
  <aside class="floaty-bar">
    <!-- BAR ACTIONS -->
    <div class="bar-actions">
      <!-- PROGRESS STAT -->
      <div class="progress-stat">
        <!-- BAR PROGRESS WRAP -->
        <div class="bar-progress-wrap">
          <!-- BAR PROGRESS INFO -->
          <p class="bar-progress-info" onclick="MandarWts();">MANDARW: <span class="bar-progress-text"></span></p>
          <!-- /BAR PROGRESS INFO -->
        </div>
        <!-- /BAR PROGRESS WRAP -->
    
        <!-- PROGRESS STAT BAR -->
        <div id="logged-user-level-cp" class="progress-stat-bar"></div>
        <!-- /PROGRESS STAT BAR -->
      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /BAR ACTIONS -->

    <!-- BAR ACTIONS -->
    <div class="bar-actions">
      <!-- ACTION LIST -->
      <div class="action-list dark">
        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="marketplace-cart.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-shopping-bag">
            <use xlink:href="#svg-shopping-bag"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="hub-profile-requests.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-friend">
            <use xlink:href="#svg-friend"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item" href="hub-profile-messages.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-messages">
            <use xlink:href="#svg-messages"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->

        <!-- ACTION LIST ITEM -->
        <a class="action-list-item unread" href="hub-profile-notifications.html">
          <!-- ACTION LIST ITEM ICON -->
          <svg class="action-list-item-icon icon-notification">
            <use xlink:href="#svg-notification"></use>
          </svg>
          <!-- /ACTION LIST ITEM ICON -->
        </a>
        <!-- /ACTION LIST ITEM -->
      </div>
      <!-- /ACTION LIST -->

      <!-- ACTION ITEM WRAP -->
      <a class="action-item-wrap" href="hub-profile-info.html">
        <!-- ACTION ITEM -->
        <div class="action-item dark">
          <!-- ACTION ITEM ICON -->
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /ACTION ITEM ICON -->
        </div>
        <!-- /ACTION ITEM -->
      </a>
      <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /BAR ACTIONS -->
  </aside>
  <!-- /FLOATY BAR -->

  <!-- CONTENT GRID -->
  <div class="content-grid">
    <!-- SECTION BANNER -->
    <div class="dropdown-box" id="msfConfirm" style="display:none">
      <div class="dropdown-box-header"> Pista Mensaje Enviad@ 
      <svg onclick="$('#msfConfirm').hide()" class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
      </div>
    </div>
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
                  <div class="hexagon-image-82-90" data-src="img/avatar/01.png" style="width: 82px; height: 90px; position: relative;">
                  <img src="img/avatar/01.png" style="width: 82px; height: 90px; position: relative;" ></img>
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
                  <p class="user-avatar-badge-text">24</p>
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
                        <p class="sidebar-menu-header-title">Adivinar</p>
                        <p class="sidebar-menu-header-text">Pistas recibidas</p>
                    </div>

                  </div>
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="sidebar-menu-item" onclick="CargarEnviados();" style="cursor:pointer">
                  <div class="sidebar-menu-header accordion-trigger-linked" >
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
                        <p class="sidebar-menu-header-title">Enviar</p>
                        <p class="sidebar-menu-header-text">Pistas a un amigo invisible</p>
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
    <!-- / englobador de grids  -->
    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-all" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Browse All</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Check out all items</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">1360 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-featured" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Featured</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Handpicked by us</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">254 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-digital" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Digital</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Logos, banners...</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">1207 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    
      <!-- PRODUCT CATEGORY BOX -->
      <a class="product-category-box category-physical" href="marketplace-category.html">
        <!-- PRODUCT CATEGORY BOX TITLE -->
        <p class="product-category-box-title">Physical</p>
        <!-- /PRODUCT CATEGORY BOX TITLE -->
    
        <!-- PRODUCT CATEGORY BOX TEXT -->
        <p class="product-category-box-text">Prints, joysticks...</p>
        <!-- /PRODUCT CATEGORY BOX TEXT -->
    
        <!-- PRODUCT CATEGORY BOX TAG -->
        <p class="product-category-box-tag">153 items</p>
        <!-- /PRODUCT CATEGORY BOX TAG -->
      </a>
      <!-- /PRODUCT CATEGORY BOX -->
    </div>
    <!-- /GRID -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">See what's new!</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Latest Items</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
  
      <!-- SECTION HEADER ACTIONS -->
      <div class="section-header-actions">
        <!-- SECTION HEADER ACTION -->
        <a class="section-header-action" href="marketplace-category.html">Browse All Latest</a>
        <!-- /SECTION HEADER ACTION -->
      </div>
      <!-- /SECTION HEADER ACTIONS -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-3-3-3-3 centered">

    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

<!-- app -->
<script src="js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function CargaRegaloenPista(idregalo){


$("#regalo-detalle").html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
$("#regalo-detalle").fadeIn();
$("#regalo-detalle").load('/pista/mensaje/regalo?idregalo='+idregalo);

}
function slRegalo() {
  //$('#receptor').val($('#ComboGr option:selected').attr('idamigoi'));
  //$('#receptorEmail').text($('#ComboGr option:selected').attr('emailamigoi'));

}  
function slReceptor() {
  $('#receptor').val($('#ComboGr option:selected').attr('idamigoi'));
  $('#receptorEmail').text($('#ComboGr option:selected').attr('emailamigoi'));

}

function sendMsj() {

if ( $("#ComboGr").val() == 0) 
{
  alert("Debe seleccionar un grupo en el que está paricipando")
  return false;
}
if (document.getElementById("receptor").value == 0)
{
  alert ("No hay amigo invisble asociado al grupo. Por favor contactate con el Admin del grupo para que realice el sorteo y puedas comenzar a enviar pistas")
  return false;
}

  var datos = new FormData();
      datos.append("_token", $("input[name=_token]").val());
      datos.append('receptor', document.getElementById("receptor").value);
      datos.append('emisor', {{ $userLogueado}} );
      datos.append('grupo', $("#ComboGr").val());
      datos.append('pistamsj', document.getElementById("pistamsj_enviar").value);
      datos.append('regalo', $("#ComboRegalo").val()); 
 
      // AJAX CALL
      $.ajax({
        url: "{{ env('APP_URL_PUERTO') }}/pista/crear",
        type: "POST",
        data: datos,
        dataType: 'json',
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        beforeSend: function() {
          $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
         
          var fromTop = $('#fixed-header').height();
           $(window).scrollTop($('#pistascentro').offset().top - fromTop)
          //$('html, body').animate({ scrollTop: $target.offset().top - fromTop }, 0);
        }
        }).done(function(data) {
          
          if (data.status == true){
           // window.location.reload();
          //  document.getElementById('msjesExistentes').style.display='none';
          $('#msfConfirm').show();
          $('#pistascentro').load('/pista/enviados?idUser={{ $userLogueado}}');
           
          }else{
            console.log(data);
          }

        });
    
      return false;

}


function MostrarDetallePista(idpista) {

$("#msjesCabecera").hide();
$('#msjeDetalle').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
$('#msjeDetalle').fadeIn();
$('#msjeDetalle').load('/pista/mensaje?idpista='+idpista);

}


function Volver(from,to) {

  $(from).hide();
  $(to).fadeIn();
}

function MostrarDetallesGrupo(idgrupo) {
$("#msjesCabecera").hide();
$('#msjeDetalle').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
$('#msjeDetalle').fadeIn();
$('#msjeDetalle').load('/pista/grupodetalle?idgrupo='+idgrupo);

}

/*****
FUNCION PARA CARGAR DIV PHP DE PISTAS enviadas
***** */
function CargarGrupos() {
// si estoy en el mobile me muevo para abajo automaticamente
var fromTop = $('#headerWeb').height();

if(($('#pistascentro').offset().top - fromTop)>500)
  $(window).scrollTop($('#pistascentro').offset().top - fromTop);

$('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');

$('#pistascentro').load('/pista/grupos?idUser={{ $userLogueado}}');

}


/*****
FUNCION PARA CARGAR DIV PHP DE PISTAS enviadas
***** */
function CargarEnviados() {

  // si estoy en el mobile me muevo para abajo automaticamente
  var fromTop = $('#headerWeb').height();
 
  if(($('#pistascentro').offset().top - fromTop)>500)
    $(window).scrollTop($('#pistascentro').offset().top - fromTop);

$('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');

$('#pistascentro').load('/pista/enviados?idUser={{ $userLogueado}}');

}

/*****
FUNCION PARA CARGAR DIV PHP DE PISTAS RECIBIDAS
***** */
function CargarRecibidos() {
  // si estoy en el mobile me muevo para abajo automaticamente
  var fromTop = $('#headerWeb').height();
 
  if(($('#pistascentro').offset().top - fromTop)>500)
    $(window).scrollTop($('#pistascentro').offset().top - fromTop);

  $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
  $('#pistascentro').load('/pista/recibidos?idUser={{ $userLogueado}}');
}

/**** 
FUNCION PARA MOSTRAR UN SOLO DIV Y OCULTAR EL RESTO 
ENTRADA : DIV A MOSTRAR
PREDEF: DIVS A OCULTAR
***/
function MostrarDivUnico(divamostrar) {

var listaDivs=["DivEnviarPista","msjEnviados"];
var divaocultar="";
listaDivs.forEach(function (elemento, indice, array) {
    console.log(elemento, indice);
    divaocultar="#"+elemento;
    $(divaocultar).hide();
    divaocultar="";
});
divamostrar="#"+divamostrar;
$(divamostrar).fadeIn();


}

</script>
</body>
</html> 