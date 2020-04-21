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
  <!-- MENU  DE NAV WIDGET -->
   @include('nav_menu')
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
          <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
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
              <p class="profile-stats-cover-title">Welcome Back!</p>
              <!-- /PROFILE STATS COVER TITLE -->
        
              <!-- PROFILE STATS COVER TEXT -->
              <p class="profile-stats-cover-text">Nombre Usuario</p>
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
              <div class="featured-stat-list">
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- FEATURED STAT ICON -->
                  <svg class="featured-stat-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                  </svg>
                  <!-- /FEATURED STAT ICON -->
        
                  <!-- FEATURED STAT TITLE -->
                  <p class="featured-stat-title">28.4</p>
                  <!-- /FEATURED STAT TITLE -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Avg Month</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- FEATURED STAT ICON -->
                  <svg class="featured-stat-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                  </svg>
                  <!-- /FEATURED STAT ICON -->
        
                  <!-- FEATURED STAT TITLE -->
                  <p class="featured-stat-title">69.7</p>
                  <!-- /FEATURED STAT TITLE -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Comments</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Avg Month</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
              </div>
              <!-- /FEATURED STAT LIST -->
        
              <!-- FEATURED STAT LIST -->
              <div class="featured-stat-list">
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="progress-arc-wrap small">
                    <!-- PROGRESS ARC -->
                    <div class="progress-arc"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="posts-engagement-chart" width="100" height="100" class="chartjs-render-monitor" style="display: block; height: 80px; width: 80px;"></canvas>
                    </div>
                    <!-- PROGRESS ARC -->
              
                    <!-- PROGRESS ARC INFO -->
                    <div class="progress-arc-info">
                      <!-- PROGRESS ARC TITLE -->
                      <p class="progress-arc-title">87%</p>
                      <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Engagement</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
        
                <!-- FEATURED STAT -->
                <div class="featured-stat">
                  <!-- PROGRESS ARC WRAP -->
                  <div class="progress-arc-wrap small">
                    <!-- PROGRESS ARC -->
                    <div class="progress-arc"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="posts-shared-chart" width="100" height="100" class="chartjs-render-monitor" style="display: block; height: 80px; width: 80px;"></canvas>
                    </div>
                    <!-- PROGRESS ARC -->
        
                    <!-- PROGRESS ARC INFO -->
                    <div class="progress-arc-info">
                      <!-- PROGRESS ARC TITLE -->
                      <p class="progress-arc-title">42%</p>
                      <!-- /PROGRESS ARC TITLE -->
                    </div>
                    <!-- /PROGRESS ARC INFO -->
                  </div>
                  <!-- /PROGRESS ARC WRAP -->
        
                  <!-- FEATURED STAT SUBTITLE -->
                  <p class="featured-stat-subtitle">Posts</p>
                  <!-- /FEATURED STAT SUBTITLE -->
        
                  <!-- FEATURED STAT TEXT -->
                  <p class="featured-stat-text">Shared</p>
                  <!-- /FEATURED STAT TEXT -->
                </div>
                <!-- /FEATURED STAT -->
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
function sendMsj() {

  var datos = new FormData();
      datos.append("_token", $("input[name=_token]").val());
      datos.append('receptor', document.getElementById("receptor").value);
      datos.append('emisor', {{ $userLogueado}} );
      datos.append('emisor', {{ $userLogueado}} );
      datos.append('pistamsj', document.getElementById("pistamsj_enviar").value);
 
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
            console.log("before send request");
        }
        }).done(function(data) {
          
          console.log(data);
          
          if (data.status == true){
            //window.location.reload();
          //  document.getElementById('msjesExistentes').style.display='none';
          //  $('#msjesExistentes').load('grid_pista_dentro.php');
            console.log("pista/" + data.codigo);
          }else{
            console.log(data);
          }

        });
    
      return false;

}
</script>
</body>
</html>