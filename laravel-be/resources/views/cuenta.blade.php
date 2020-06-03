<div class="account-hub-content" style="">
        <!-- SECTION HEADER -->
        <div class="section-header">
          <!-- SECTION HEADER INFO -->
          <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Perfil</p>
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
            <p class="widget-box-title"></p>
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
                      <input type="text" id="phone" name="phone" placeholder="Característica sin 0 y numero sin 15" value="{{ $user->telefono }}">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->

                  <!-- FORM ITEM -->
                  <div class="form-item">
                    <!-- FORM INPUT -->
                    <div class="form-input small active">
                      <label for="account-phone">Apodo</label>
                      <input type="text" id="nick" name="nick"  value="{{ $user->json }}" placeholder="">
                    </div>
                    <!-- /FORM INPUT -->
                  </div>
                  <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
                <div class="form-row ">
                <button type="submit" class="btn btn-primary" style="background:#615dfa">Guardar Cambios
                </div>
                <!-- /FORM ROW -->
                

                {{ $output }}
                </button>
              </form>
              <!-- /FORM -->
            </div>
            <!-- WIDGET BOX CONTENT -->
          </div>
          <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->
  </div>
