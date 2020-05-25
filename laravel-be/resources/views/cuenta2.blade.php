<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('pista.name', 'CheAmigo.com.ar') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
            <link rel="icon" href="{{ env('APP_URL_PUERTO') }}/img/favicon.ico">
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

</style>
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
  <div class="content-grid" >
     <!-- / englobador de grid  -->
  <div class="grid grid-3-9 mobile-prefer-content">
    <!-- grid izquierdo -->
    <div class="grid-sidebar">
          <!-- PROFILE STATS -->
          <div class="profile-stats fixed-height">
            <!-- PROFILE STATS COVER -->
            <div class="profile-stats-cover" >
              <!-- PROFILE STATS COVER TITLE -->
              <p class="profile-stats-cover-title">Mi cuenta</p>
              <!-- /PROFILE STATS COVER TITLE -->
        
              <!-- PROFILE STATS COVER TEXT -->
              
              <p class="profile-stats-cover-text">{{ $user->name  }}</p>
             
              <!-- /PROFILE STATS COVER TEXT -->
            </div>
            <!-- /PROFILE STATS COVER -->
        
            <!-- PROFILE STATS INFO -->
            <div class="profile-stats-info">
           
            



                <div class="sidebar-menu-item" onclick="">
                  <!-- FEATURED STAT ICON -->
                  <div class="sidebar-menu-header accordion-trigger-linked" >
                    <svg class="sidebar-menu-header-icon icon-profile">
                      <use xlink:href="#svg-profile">                      
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
                        <p class="sidebar-menu-header-title">Perfil</p>
                        <p class="sidebar-menu-header-text">Datos de tu Cuenta</p>
                    </div>

                  </div>
                </div>
                
              <!-- /FEATURED STAT LIST -->
            </div>
            <!-- /PROFILE STATS INFO -->
          </div>
          <!-- /PROFILE STATS -->
     </div>
    <!-- / grid izquierdo -->
    <!--grid centro -->    
    @include ('cuenta')
     <!--grid centro -->

    
    </div>  

  </div>


<script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>
<script>



function sendMsj() {




  var datos = new FormData();
      datos.append("_token", $("input[name=_token]").val());
      datos.append('receptor', document.getElementById("receptor").value);
      datos.append('emisor', {{ $user->id}} );
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
          
          
           
          }else{
            console.log(data);
          }

        });
    
      return false;

}



</script>
</body>
</html> 