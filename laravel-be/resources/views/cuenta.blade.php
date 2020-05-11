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
            <link rel="stylesheet" href="css/bootstrap.min.css">
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
  <br>
<br><br>
<br><br>
<br>

  <div class="account-hub-content" style="padding: 30px;">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Mi cuenta</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Info</h2>
            <!-- /SECTION TITLE -->
          </div>
          <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
          <!-- WIDGET BOX -->
          <div class="widget-box">
            <!-- WIDGET BOX TITLE -->
            <p class="widget-box-title">Perfil</p>
            <!-- /WIDGET BOX TITLE -->

            <!-- WIDGET BOX CONTENT -->
            <div class="widget-box-content">
              <!-- FORM -->
              <form class="form" method="post" action="/cuenta/edit">
                <!-- FORM ROW -->
                @csrf
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="account-full-name">Nombre</label>
                      <input type="text" id="nya" name="nya" value="{{ $user->name }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="account-email">Email</label>
                      <input type="text" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->

                <!-- FORM ROW -->
                <div class="form-row split">
                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                    <label for="account-phone">Whatsapp </label>
                      <input type="text" id="phone" name="phone" placeholder="+54911 ..." value="{{ $user->telefono }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small">
                      <label for="account-phone">Apodo</label>
                      <input type="text" id="nick" name="nick"  value="{{ $user->json }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>


                <!-- /FORM ROW -->
                <!-- /FORM ROW -->
                <button type="submit" class="btn btn-primary">Editar</button>
              </form>
              <!-- /FORM -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
      </div>
</div>
<!-- app -->
<script src="js/app.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

</script>
</body>
</html> 