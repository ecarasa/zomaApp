<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'cheamigo.com.ar') }}</title>
            <meta charset="utf-8">
            
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
        </head>
    <body>

  <!-- LANDING -->
  <div >
   AAAAAAAAAAAAAAAAAAAAAAAA {{$datos}} @if ($datos>0) "hola" @endif
   AAAAAAAAAAAAAAAAAAAAAAAA {{$participantes}} @if ($datos>0) "hola" @endif
  </div>
  



<script>
    function crear() {

        var fd = new FormData(document.getElementById('formJuego'));
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
            $('.page-loader-indicator').show()
        }
        }).done(function(data) {
          
          console.log(data);
          $('.page-loader-indicator').hide()
          if (data.status == true){
            alert('Grupo Creado');
            window.location.href = "{{ env('APP_URL_PUERTO') }}/grupo/" + data.codigo;
            //console.log("grupo/" + data.codigo);
          }else{
            alert('Hubo un error, intenta nuevamente')
          }

        });
}
</script>
</body>
</html>
