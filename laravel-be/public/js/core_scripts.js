
$(document).ready(function(){
    $('.content-grid').css({"transform": ""});
    $('.content-grid').css({"margin-left": "10px"});
    $('.content-grid').css({"margin-right": "10px"});
    $('.content-grid').css({"max-width": "1555px"});
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
  