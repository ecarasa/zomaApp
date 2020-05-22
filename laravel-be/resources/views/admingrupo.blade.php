<div class="modal-body">  
      <!-- start.1er FORM -->    
    <div class="widget-box login-register-form-element">
        
        
        <form class="form" id="formJuego" action="/grupos/crear" method="post">
        
        @csrf

          <div class="form-row split">
            <div class="form-item">
              <div class="form-input active">
                <label for="login-username">Nombre de integrante</label>
                <input type="text" id="nombreusuario" name="nombreusuario" autocomplete="off">
              </div>
            </div>  
            <div class="form-item">
              <div class="form-input active">
                <label for="login-username">Email</label>
                <input type="text" id="email" name="email" autocomplete="off">
              </div>
            </div>
            <div class="form-item">
              <div class="form-input active">
                <label for="login-username">Whatsapp</label>
                <input type="text" id="telefono" name="telefono" autocomplete="off">
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
            </div>
        </div>
        <div class="form-row split">
          <div class="form-item">
            <a href="javascript:addParticipante();" id="btnAdd" class="button medium primary" style="width: 50%;">Agregar Integrante</a>
          </div>
          <div class="form-item">
            <a  id="btnfinish" href="javascript:FinishGrupo();" class="button medium secondary" style="width: 50%; display:none">Empezar a Jugar!/a>
          </div>    
        </div>
      </div>
    </form>
      
      <!-- end.1er FORM -->
    
      
      <!-- end.2do FORM -->
  </div>

  

 

<script>

    function finish() {
   
    }

    function addParticipante() {

        var fd = new FormData(document.getElementById('formJuego'));
        fd.append("_token", $("input[name=_token]").val());
        fd.append("codgrupo",{{$grupo->codigo}});

        $.ajax({
        url: "{{ env('APP_URL_PUERTO') }}/grupo/agregarparticipante",
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
            alert('Participante Agregado!');
            document.getElementById('formJuego').reset();
           
            $('#msjeDetalle').html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
            $('#msjeDetalle').load('/pista/grupodetalle?idgrupo='+data.idgrupo);
            
           
            //console.log("grupo/" + data.codigo);
          }else{
            alert(data.msj)
          }

        });
}
</script>

