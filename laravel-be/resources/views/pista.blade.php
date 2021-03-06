<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'CheAmigo.com.ar') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
        </head>
    <body>


  @include('pageloader')  
  @include('header_responsive')
  <style>

.modal-dialog {
    max-width: 500px;
    margin: 6.75rem auto!important;
}

.sidebar-menu-header {
    height: 81px!important;
    padding: 22px 28px 1px 65px!important;
    background-color: #fff;
    cursor: pointer;
    position: relative;
}


@media (max-width: 480px) {
  .botonCrearG{
      width: 100%;
      margin-top: 25px;
  }

  .section-title{
    text-align: center!important;
  }

}
</style>
  <!-- /NAVIGATION WIDGET -->


  <!-- FLOATY BAR -->
  
  <!-- /FLOATY BAR -->

  <!-- CONTENT GRID -->
  <div class="content-grid">
 
      <div tabindex="-1" role="dialog" class="modal" id="MD" >
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" style="width: 100%;"></h5>
                              </div>
                              <div class="modal-body" id="modalDinamicoDiv">
                               <p> cargando...</p>
                              </div> 
                              <div class="modal-footer">                                
                                <button style="background-color:#615dfa" type="button" class="btn btn-secondary" data-dismiss="modal"  >Ok</button>
                              </div>
                            </div>
                          </div>
        </div>
  
    <!-- SECTION BANNER -->
    <div class="dropdown-box" id="msfConfirm" style="display:none">
      <div class="dropdown-box-header"> Pista Mensaje Enviad@ 
      <svg onclick="$('#msfConfirm').hide()" class="sidebar-menu-header-control-icon-open icon-minus-small">
                    <use xlink:href="#svg-minus-small"></use>
                  </svg>
      </div>
    </div>

    <h2 class="section-title">
            Empezá a jugar al amigo invisible 100% online ahora!          
    </h2>
    
    
    <a style="padding: 0px 12px 0px 12px;" class="button tiny secondary botonCrearG" href="javascript:CargarEnviados('true');MostrarDivUnico('DivEnviarPista');" ><svg class="icon-plus demo-box-icon"><use xlink:href="#svg-plus"></use></svg> Enviar Pista a mi amig@ invisible</a>
    <a style="padding: 0px 12px 0px 12px;" class="button tiny secondary botonCrearG" href="javascript:irCrearGrupo();" ><svg class="icon-add-friend demo-box-icon"><use xlink:href="#svg-add-friend"></use></svg> Crear Grupo</a>
   
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
                  <div class="hexagon-image-82-90" data-src="https://cheamigo.com.ar/public/img/avatar/01.png" style="width: 82px; height: 90px; position: relative;">
                  <img src="https://cheamigo.com.ar/public/img/avatar/01.png" style="width: 82px; height: 90px; position: relative;" ></img>
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
                  <p class="user-avatar-badge-text">CH</p>
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
                    <svg class="sidebar-menu-header-icon icon-messages">
                      <use xlink:href="#svg-messages">                      
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
                        <p class="sidebar-menu-header-title">Recibidos</p>
                        <p class="sidebar-menu-header-text">Pistas recibidas para adivinar quién es tu AI</p>
                    </div>

                  </div>
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="sidebar-menu-item" onclick="CargarEnviados();" style="cursor:pointer">
                  <div class="sidebar-menu-header accordion-trigger-linked" >
                    <svg class="sidebar-menu-header-icon icon-messages">
                      <use xlink:href="#svg-messages">                      
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
                        <p class="sidebar-menu-header-title">Enviados</p>
                        <p class="sidebar-menu-header-text">Pistas que envias a un amigo invisible</p>
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
              <!-- FEATURED STAT -->
              <div class="sidebar-menu-item" onclick="CargarRegalosEnviados();" style="border-bottom: 2px dashed #615dfa;padding-bottom: 5px;">
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
                        <p class="sidebar-menu-header-title">Regalos Enviados</p>
                        <p class="sidebar-menu-header-text">Chequea la info de los regalos que realizaste</p>
                     <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  
                  <!-- /FEATURED STAT TEXT -->
                </div>
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

  </div>

<div style="position: fixed; z-index: 100000; transition: all 0.3s ease-in-out 0s; top: auto; bottom: 34px; left: auto; right: 34px;">
    <div onclick="ContactWh();" class="xm-alert-icon" style="margin: 0px; padding: 0px; outline: none; border: none; box-sizing: border-box; width: 75px; height: 75px; display: flex; justify-content: center; align-items: center; position: relative; top: 0px; left: 0px; box-shadow: rgba(38, 39, 51, 0.06) 0px 0px 20px 0px; background-color: rgb(113, 80, 255); cursor: pointer; transition: all 0.3s ease-in-out 0s; border-radius: 50%;">
      <div style="background: url(&quot;https://cdn.clipart.email/b9e683c9f60241154f17af59e3f914ef_logo-png-format-whatsapp-icon_715-715.png&quot;) center center / cover no-repeat transparent; margin: 0px; padding: 0px; outline: none; border: none; box-sizing: border-box; width: 95px; height: 95px; transition: all 0.3s ease-in-out 0s; border-radius: 50%;">
      </div>        
    </div>  
</div>


<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>
<script >
$(document).ready(function(){
    $('.content-grid').css({"transform": ""});
    $('.content-grid').css({"margin-left": "10px"});
    $('.content-grid').css({"margin-right": "10px"});
    $('.content-grid').css({"max-width": "1555px"});
    
    if ($(window).width() <= 480) {  
      $('.sidebar-menu-item').css({"height": "45px"})
    }
    
    $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
    $('#pistascentro').load('/pista/grupos?idUser={{ $userLogueado}}');

  });
  
  function InfoCanjeRegaloModal() {
    
    $('#buyModal').appendTo("body").modal('show');
  
  }
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
    $('#titleamigo').show();
    $('div[name$="camposdivpista"]').show();
    
  
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
  
  
  
  if ( $("#pistamsj_enviar").val() == "") 
  {
    alert("El mensje no puede estar vacío.")
    return false;
  }
  if ( $("#ComboRegalo").val() >0) 
  {
    alert("La compra de este regalo se hará efectiva cuando acuerdes el pago con el proveedor.")
    
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
          url: "{{ env('APP_URL') }}/pista/crear",
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
            
            if (data.idregalo>0)
            {
              $("#modalDinamicoDiv").html("Cargando...");
              $("#modalDinamicoDiv").load('/pista/mensaje/regalo/modal?idregalo='+data.idregalo);
              $("#MD").appendTo("body").modal('show');
  
            }
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
  
  
  function sortear(idGrupo) {
  
        var datos = new FormData();
        datos.append("_token", $("input[name=_token]").val());
        datos.append('idGrupo', idGrupo);
  
        $.ajax({
          url: "{{ env('APP_URL') }}/grupo/sortear",
          type: "POST",
          data: datos,
          dataType: 'json',
          enctype: 'multipart/form-data',
          processData: false,
          contentType: false,
          beforeSend: function() {
            $('#msjeDetalle').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
            var fromTop = $('#fixed-header').height();
            $(window).scrollTop($('#msjeDetalle').offset().top - fromTop)
          }
          }).done(function(data) {
            if (data.status == true){
              $('#msjeDetalle').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
              $('#msjeDetalle').load('/pista/grupodetalle?idgrupo='+idGrupo);
            }else{
              console.log(data);
            }
          });
        //return false;
  
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
  function CargarRegalosEnviados() {
  // si estoy en el mobile me muevo para abajo automaticamente
  var fromTop = $('#headerWeb').height();
  
  $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
  
  $('#pistascentro').load('/pista/regalosenviados?idEmisor={{$userLogueado}}');
  
  //if(($('#pistascentro').offset().top - fromTop)>1)
    $(window).scrollTop($('#pistascentro').offset().top - fromTop);
  
  
  
  }
  
  
  /*****
  FUNCION PARA CARGAR DIV PHP DE PISTAS enviadas
  ***** */
  function CargarEnviados(enviar) {
  
    // si estoy en el mobile me muevo para abajo automaticamente
    var fromTop = $('#headerWeb').height();
   
    if(($('#pistascentro').offset().top - fromTop)>500)
      $(window).scrollTop($('#pistascentro').offset().top - fromTop);
  
      
  
  $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
  
  $('#pistascentro').load('/pista/enviados?idUser={{ $userLogueado}}');
  if (enviar=="true") { 
    setTimeout(function(){
      MostrarDivUnico('DivEnviarPista');
    },5);    
    }
  
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
  /*****
  FUNCION PARA CARGAR DIV PHP DE CREAR GRUPO
  ***** */
  function irCrearGrupo() {
    // si estoy en el mobile me muevo para abajo automaticamente
    var fromTop = $('#headerWeb').height();
   
    if(($('#pistascentro').offset().top - fromTop)>500)
      $(window).scrollTop($('#pistascentro').offset().top - fromTop);
  
    $('#pistascentro').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
    $('#pistascentro').load('/pista/creargrupo');
  }
  
  function irAgregarParticipante(codgrupo){
              $("#modalDinamicoDiv").html("Cargando...");
              $("#modalDinamicoDiv").load('/grupo/'+codgrupo);
              $("#MD").appendTo("body").modal('show');
              
    //          $('#pistascentro').load('/pista/enviados?idUser={{ $userLogueado}}');
  }
  /*****
  FUNCION PARA CREAR GRUPO 
  ***** */
  function crearGrupo() {
  
  var fd = new FormData(document.getElementById('formCrearGrupo'));
  fd.append("_token", $("input[name=_token]").val());
  
  $.ajax({
  url: "{{ env('APP_URL') }}/grupos/crear",
  type: "POST",
  data: fd,
  dataType: 'json',
  enctype: 'multipart/form-data',
  processData: false,
  contentType: false,
  beforeSend: function() {
      console.log("before send request");
      $('.page-loader-indicator').show();
  }
  }).done(function(data) {
    
    console.log(data);
    $('.page-loader-indicator').hide();
    if (data.status == true){
      alert('Grupo Creado'); 
      MostrarDetallesGrupo(data.idgrupo);
      //console.log("grupo/" + data.codigo);
    }else{
      alert('Hubo un error, intenta nuevamente')
    }
  
  });
  }
  
  function SendWebWths(numerowts,codgrupo,emailU) {
  
   window.open('https://api.whatsapp.com/send?phone=' + numerowts + '&text=%20' + "Hola! quiero invitarte a jugar al amigo invisble en Cheamigo.com.ar/jugar - ingresa con tu email ("+ emailU+ ")  "+String.fromCodePoint('0x1F60F')+ " en el grupo "+codgrupo+" podes enviar pistas a tu amigo invisible desde el menú Enviado->Enviar Pista. Suerte! y a Jugar!!! ");
  
  }
  
  function SendWebWthsVendedor(numerowts,vendedor,producto,codcanje) {
  
  window.open('https://api.whatsapp.com/send?phone=' + numerowts + '&text=%20' + "Hola vendedor! compré un regalo en Cheamigo.com.ar ->"+ String.fromCodePoint('0x1F381') + " ("+ producto+ ") mi codigo de canje es:  "+codcanje );
  
  }
  /* *
  * function que cambia de estado un grupo 
  */
  function CambiarEGrupo(op,idgrupo) {
  
  
  var fd = new FormData();
  fd.append("_token", $("input[name=_token]").val());
  fd.append("idgrupo", idgrupo);
  
  $.ajax({
  url: "{{ env('APP_URL') }}/grupo/cambiarestado/"+op,
  type: "POST",
  data: fd,
  dataType: 'json',
  enctype: 'multipart/form-data',
  processData: false,
  contentType: false,
  beforeSend: function() {
      console.log("before send request");
      $('.page-loader-indicator').show()
  }
  }).done(function(data) {
    
    console.log(data);
    $('.page-loader-indicator').hide()
    if (data.status == true){
      if (data.op==2){
        alert('Has iniciado el Juego. Ya pueden empezar a jugar. Podés publicar los resultados cuando gustes haciendo click en Terminar');
        MostrarDetallesGrupo(data.idgrupo);
        }
        if (data.op==3){
          alert('Grupo terminado. Se muestran los resultados a continuación');
          VerResultadosGrupo(data.idgrupo);
        }
      //console.log("grupo/" + data.codigo);
    }else{
      alert('Hubo un error, si agregaste participantes nuevos, por favor realizá el sorteo nuevamente y luego dale Iniciar')
    }
  
  });
  }
  
  function VerResultadosGrupo(idgrupo) { 
    
  $("#listadoparticipantes").hide();
  $('#resultadosGrupo').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
  $('#resultadosGrupo').fadeIn();
  $('#resultadosGrupo').load('/grupos/resultados?idgrupo='+idgrupo);
  
  }
  

</script>
</body>
</html> 