<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'TuAmigoFiel.com') }}</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
            <link rel="stylesheet" href="css/styles.min.css">
            <link rel="icon" href="img/favicon.ico">
        </head>
    <body>

  <!-- PAGE LOADER -->
  <div class="page-loader">
    <!-- PAGE LOADER DECORATION -->
    <div class="page-loader-decoration">
      <!-- ICON LOGO -->
      <svg class="icon-logo" viewBox="0 0 28 40" preserveAspectRatio="xMinYMin meet">
        <path d="M27.18,24.038c-0.141-0.095-0.244-0.146-0.244-0.146l-0.005-0.049C25.489,22.783,23.103,22,23.103,22c1.542,0,2.582-0.563,3.501-1.334c-0.049-0.055,0.7-0.666,0.7-0.666c0.146-8.251-4.477-12.745-7.001-14.667C18.15,9.564,16.802,14,16.802,14c-0.219-4.426,0.243-8.072,0.7-10.667c-0.85-0.452-1.956-0.698-2.296-1.537C14.865,0.957,14.015,0,14.015,0L14,0.014L13.985,0c0,0-0.85,0.957-1.19,1.796c-0.34,0.839-1.445,1.085-2.295,1.537C10.957,5.928,11.418,9.574,11.2,14c0,0-1.349-4.436-3.501-8.667C5.174,7.255,0.551,11.749,0.697,20c0,0,0.75,0.611,0.701,0.666C2.316,21.437,3.357,22,4.898,22c0,0-2.387,0.783-3.829,1.844l-0.005,0.049c0,0-0.104,0.051-0.244,0.146c-0.48,0.397-0.806,0.828-0.819,1.269c-0.023,0.521,0.263,1.181,1.233,1.973c0,0,0.136,9.259,9.69,11.29c0,0,0.212,0.815,0.975,1.431L14,38l2.102,2c0.763-0.615,0.975-1.431,0.975-1.431c9.555-2.031,9.689-11.29,9.689-11.29c0.971-0.792,1.256-1.451,1.233-1.973C27.986,24.866,27.659,24.436,27.18,24.038z M4.198,26c2.362,0.121,3.517,1.473,5.602,4c0.799,0.969,2.059,0.83,2.059,0.83L11.899,34C5.249,34,4.198,26,4.198,26z M14,28.162l-2.97-2.828l2.101-2.001l-2.101-2l2.101-2l-2.101-2L14,14.505l2.972,2.828l-2.102,2l2.102,2l-2.102,2l2.102,2.001L14,28.162z M16.102,34l0.041-3.17c0,0,1.26,0.139,2.059-0.83c2.085-2.527,3.239-3.879,5.602-4C23.803,26,22.752,34,16.102,34z M13.3,26h1.4v-1.333h-1.4V26z M13.3,22h1.4v-1.334h-1.4V22z M13.3,18h1.4v-1.333h-1.4V18z"/>
      </svg>
      <!-- /ICON LOGO -->
    </div>
    <!-- /PAGE LOADER DECORATION -->

    <!-- PAGE LOADER INFO -->
    <div class="page-loader-info">
      <!-- PAGE LOADER INFO TITLE -->
      <p class="page-loader-info-title">Vikinger</p>
      <!-- /PAGE LOADER INFO TITLE -->

      <!-- PAGE LOADER INFO TEXT -->
      <p class="page-loader-info-text">Loading...</p>
      <!-- /PAGE LOADER INFO TEXT -->
    </div>
    <!-- /PAGE LOADER INFO -->
    
    <!-- PAGE LOADER INDICATOR -->
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
    <!-- /PAGE LOADER INDICATOR -->
  </div>
  <!-- /PAGE LOADER -->

  <!-- HEADER -->
  <header class="header">
    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- HEADER BRAND -->
      <div class="header-brand">
        <!-- LOGO -->
        <div class="logo">
          <!-- ICON LOGO VIKINGER -->
          <svg class="icon-logo-vikinger small">
            <use xlink:href="#svg-logo-vikinger"></use>
          </svg>
          <!-- /ICON LOGO VIKINGER -->
        </div>
        <!-- /LOGO -->

        <!-- HEADER BRAND TEXT -->
        <h1 class="header-brand-text">Vikinger</h1>
        <!-- /HEADER BRAND TEXT -->
      </div>
      <!-- /HEADER BRAND -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- SIDEMENU TRIGGER -->
      <div class="sidemenu-trigger navigation-widget-trigger">
        <!-- ICON GRID -->
        <svg class="icon-grid">
          <use xlink:href="#svg-grid"></use>
        </svg>
        <!-- /ICON GRID -->
      </div>
      <!-- /SIDEMENU TRIGGER -->

      <!-- MOBILEMENU TRIGGER -->
      <div class="mobilemenu-trigger navigation-widget-mobile-trigger">
        <!-- BURGER ICON -->
        <div class="burger-icon inverted">
          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->

          <!-- BURGER ICON BAR -->
          <div class="burger-icon-bar"></div>
          <!-- /BURGER ICON BAR -->
        </div>
        <!-- /BURGER ICON -->
      </div>
      <!-- /MOBILEMENU TRIGGER -->

      <!-- NAVIGATION -->
      <nav class="navigation">
        <!-- MENU MAIN -->
        <ul class="menu-main">
          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Home</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Careers</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <a class="menu-main-item-link" href="#">Faqs</a>
            <!-- /MENU MAIN ITEM LINK -->
          </li>
          <!-- /MENU MAIN ITEM -->

          <!-- MENU MAIN ITEM -->
          <li class="menu-main-item">
            <!-- MENU MAIN ITEM LINK -->
            <p class="menu-main-item-link">
              <!-- ICON DOTS -->
              <svg class="icon-dots">
                <use xlink:href="#svg-dots"></use>
              </svg>
              <!-- /ICON DOTS -->
            </p>
            <!-- /MENU MAIN ITEM LINK -->

            <!-- MENU MAIN -->
            <ul class="menu-main">
              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">About Us</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Our Blog</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Contact Us</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->

              <!-- MENU MAIN ITEM -->
              <li class="menu-main-item">
                <!-- MENU MAIN ITEM LINK -->
                <a class="menu-main-item-link" href="#">Privacy Policy</a>
                <!-- /MENU MAIN ITEM LINK -->
              </li>
              <!-- /MENU MAIN ITEM -->
            </ul>
            <!-- /MENU MAIN -->
          </li>
          <!-- /MENU MAIN ITEM -->
        </ul>
        <!-- /MENU MAIN -->
      </nav>
      <!-- /NAVIGATION -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions search-bar">
      <!-- INTERACTIVE INPUT -->
      <div class="interactive-input dark">
        <input type="text" id="search-main" name="search_main" placeholder="Search here for people or groups">
        <!-- INTERACTIVE INPUT ICON WRAP -->
        <div class="interactive-input-icon-wrap">
          <!-- INTERACTIVE INPUT ICON -->
          <svg class="interactive-input-icon icon-magnifying-glass">
            <use xlink:href="#svg-magnifying-glass"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ICON WRAP -->

        <!-- INTERACTIVE INPUT ACTION -->
        <div class="interactive-input-action">
          <!-- INTERACTIVE INPUT ACTION ICON -->
          <svg class="interactive-input-action-icon icon-cross-thin">
            <use xlink:href="#svg-cross-thin"></use>
          </svg>
          <!-- /INTERACTIVE INPUT ACTION ICON -->
        </div>
        <!-- /INTERACTIVE INPUT ACTION -->
      </div>
      <!-- /INTERACTIVE INPUT -->

      <!-- DROPDOWN BOX -->
      <div class="dropdown-box padding-bottom-small header-search-dropdown">
        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Members</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->
    
        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="profile-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
              
                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->
              
                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->
              
                  <!-- USER AVATAR BADGE -->
                  <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-22-24"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->
              
                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-dark-16-18"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->
              
                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">12</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text">1 friends in common</p>
              <!-- /USER STATUS TEXT -->
          
              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON FRIEND -->
                <svg class="icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /ICON FRIEND -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
    
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="profile-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
              
                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->
              
                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->
              
                  <!-- USER AVATAR BADGE -->
                  <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-22-24"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->
              
                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-dark-16-18"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE CONTENT -->
              
                    <!-- USER AVATAR BADGE TEXT -->
                    <p class="user-avatar-badge-text">7</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Tim Rogers</span></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text">4 friends in common</p>
              <!-- /USER STATUS TEXT -->
          
              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON FRIEND -->
                <svg class="icon-friend">
                  <use xlink:href="#svg-friend"></use>
                </svg>
                <!-- /ICON FRIEND -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->
    
        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Groups</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->
    
        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="group-timeline.html">
            <!-- USER STATUS -->
            <div class="user-status notification">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-border">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-40-44" data-src="img/avatar/24.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </div>
                <!-- /USER AVATAR -->
              </div>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Cosplayers of the World</span></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text">139 members</p>
              <!-- /USER STATUS TEXT -->
          
              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON GROUP -->
                <svg class="icon-group">
                  <use xlink:href="#svg-group"></use>
                </svg>
                <!-- /ICON GROUP -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->
    
        <!-- DROPDOWN BOX CATEGORY -->
        <div class="dropdown-box-category">
          <!-- DROPDOWN BOX CATEGORY TITLE -->
          <p class="dropdown-box-category-title">Marketplace</p>
          <!-- /DROPDOWN BOX CATEGORY TITLE -->
        </div>
        <!-- /DROPDOWN BOX CATEGORY -->
      
        <!-- DROPDOWN BOX LIST -->
        <div class="dropdown-box-list small no-scroll">
          <!-- DROPDOWN BOX LIST ITEM -->
          <a class="dropdown-box-list-item" href="marketplace-product.html">
            <!-- USER STATUS -->
            <div class="user-status no-padding-top">
              <!-- USER STATUS AVATAR -->
              <div class="user-status-avatar">
                <!-- PICTURE -->
                <figure class="picture small round liquid">
                  <img src="img/marketplace/items/07.jpg" alt="item-07">
                </figure>
                <!-- /PICTURE -->
              </div>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Mercenaries White Frame</span></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text">By Neko Bebop</p>
              <!-- /USER STATUS TEXT -->
          
              <!-- USER STATUS ICON -->
              <div class="user-status-icon">
                <!-- ICON MARKETPLACE -->
                <svg class="icon-marketplace">
                  <use xlink:href="#svg-marketplace"></use>
                </svg>
                <!-- /ICON MARKETPLACE -->
              </div>
              <!-- /USER STATUS ICON -->
            </div>
            <!-- /USER STATUS -->
          </a>
          <!-- /DROPDOWN BOX LIST ITEM -->
        </div>
        <!-- /DROPDOWN BOX LIST -->
      </div>
      <!-- /DROPDOWN BOX -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
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
        <div id="logged-user-level" class="progress-stat-bar"></div>
        <!-- /PROGRESS STAT BAR -->
      </div>
      <!-- /PROGRESS STAT -->
    </div>
    <!-- /HEADER ACTIONS -->

    <!-- HEADER ACTIONS -->
    <div class="header-actions">
      <!-- ACTION LIST -->
      <div class="action-list dark">
        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-shopping-bag">
              <use xlink:href="#svg-shopping-bag"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box no-padding-bottom header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Shopping Cart <span class="highlighted">3</span></p>
              <!-- /DROPDOWN BOX HEADER TITLE -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->
        
            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list scroll-small no-hover" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/01.jpg" alt="item-01">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->
              
                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->
              
                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->
              
                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 12.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->
              
                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/11.jpg" alt="item-11">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->
              
                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Gaming Coin Badges Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->
              
                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->
              
                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 6.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->
              
                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/10.jpg" alt="item-10">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->
              
                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Twitch Stream UI Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->
              
                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->
              
                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 26.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->
              
                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- CART ITEM PREVIEW -->
                <div class="cart-item-preview">
                  <!-- CART ITEM PREVIEW IMAGE -->
                  <a class="cart-item-preview-image" href="marketplace-product.html">
                    <!-- PICTURE -->
                    <figure class="picture medium round liquid">
                      <img src="img/marketplace/items/04.jpg" alt="item-04">
                    </figure>
                    <!-- /PICTURE -->
                  </a>
                  <!-- /CART ITEM PREVIEW IMAGE -->
              
                  <!-- CART ITEM PREVIEW TITLE -->
                  <p class="cart-item-preview-title"><a href="marketplace-product.html">Generic Joystick Pack</a></p>
                  <!-- /CART ITEM PREVIEW TITLE -->
              
                  <!-- CART ITEM PREVIEW TEXT -->
                  <p class="cart-item-preview-text">Regular License</p>
                  <!-- /CART ITEM PREVIEW TEXT -->
              
                  <!-- CART ITEM PREVIEW PRICE -->
                  <p class="cart-item-preview-price"><span class="highlighted">$</span> 16.00 x 1</p>
                  <!-- /CART ITEM PREVIEW PRICE -->
              
                  <!-- CART ITEM PREVIEW ACTION -->
                  <div class="cart-item-preview-action">
                    <!-- ICON DELETE -->
                    <svg class="icon-delete">
                      <use xlink:href="#svg-delete"></use>
                    </svg>
                    <!-- /ICON DELETE -->
                  </div>
                  <!-- /CART ITEM PREVIEW ACTION -->
                </div>
                <!-- /CART ITEM PREVIEW -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->
        
            <!-- CART PREVIEW TOTAL -->
            <div class="cart-preview-total">
              <!-- CART PREVIEW TOTAL TITLE -->
              <p class="cart-preview-total-title">Total:</p>
              <!-- /CART PREVIEW TOTAL TITLE -->
        
              <!-- CART PREVIEW TOTAL TEXT -->
              <p class="cart-preview-total-text"><span class="highlighted">$</span> 60.00</p>
              <!-- /CART PREVIEW TOTAL TEXT -->
            </div>
            <!-- /CART PREVIEW TOTAL -->
        
            <!-- DROPDOWN BOX ACTIONS -->
            <div class="dropdown-box-actions">
              <!-- DROPDOWN BOX ACTION -->
              <div class="dropdown-box-action">
                <!-- BUTTON -->
                <a class="button secondary" href="marketplace-cart.html">Shopping Cart</a>
                <!-- /BUTTON -->
              </div>
              <!-- /DROPDOWN BOX ACTION -->
        
              <!-- DROPDOWN BOX ACTION -->
              <div class="dropdown-box-action">
                <!-- BUTTON -->
                <a class="button primary" href="marketplace-checkout.html">Go to Checkout</a>
                <!-- /BUTTON -->
              </div>
              <!-- /DROPDOWN BOX ACTION -->
            </div>
            <!-- /DROPDOWN BOX ACTIONS -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-friend">
              <use xlink:href="#svg-friend"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Friend Requests</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->
        
              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Find Friends</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
                
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->
        
            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list no-hover" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/16.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">14</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Ginny Danvers</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">6 friends in common</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- ACTION REQUEST LIST -->
                  <div class="action-request-list">
                    <!-- ACTION REQUEST -->
                    <div class="action-request accept">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
              
                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/14.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">3</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Paul Lang</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">2 friends in common</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- ACTION REQUEST LIST -->
                  <div class="action-request-list">
                    <!-- ACTION REQUEST -->
                    <div class="action-request accept">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
              
                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status request">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/11.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">9</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Cassie May</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">4 friends in common</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- ACTION REQUEST LIST -->
                  <div class="action-request-list">
                    <!-- ACTION REQUEST -->
                    <div class="action-request accept">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-add-friend">
                        <use xlink:href="#svg-add-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
              
                    <!-- ACTION REQUEST -->
                    <div class="action-request decline">
                      <!-- ACTION REQUEST ICON -->
                      <svg class="action-request-icon icon-remove-friend">
                        <use xlink:href="#svg-remove-friend"></use>
                      </svg>
                      <!-- /ACTION REQUEST ICON -->
                    </div>
                    <!-- /ACTION REQUEST -->
                  </div>
                  <!-- ACTION REQUEST LIST -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->
        
            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button secondary" href="hub-profile-requests.html">View all Requests</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-messages">
              <use xlink:href="#svg-messages"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Messages</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->
        
              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Mark all as Read</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
                
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->
        
            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list medium" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">6</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Bearded Wonder</span></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then will meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">29 mins ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
        
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
        
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
        
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
        
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
        
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">12</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Neko Bebop</span></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Awesome! I'll see you there!</p>
                  <!-- /USER STATUS TEXT -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">54 mins ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">16</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Nick Grissom</span></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream that new game?</p>
                  <!-- /USER STATUS TEXT -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">26</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">Sarah Diamond</span></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">I'm sending you the latest news of the release...</p>
                  <!-- /USER STATUS TEXT -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">16 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/12.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">10</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">James Murdock</span></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Great! Then will meet with them at the party...</p>
                  <!-- /USER STATUS TEXT -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">7 days ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <a class="dropdown-box-list-item" href="hub-profile-messages.html">
                <!-- USER STATUS -->
                <div class="user-status">
                  <!-- USER STATUS AVATAR -->
                  <div class="user-status-avatar">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">5</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </div>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><span class="bold">The Green Goo</span></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TEXT -->
                  <p class="user-status-text">Can you stream that new game?</p>
                  <!-- /USER STATUS TEXT -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp floaty">10 days ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
                </div>
                <!-- /USER STATUS -->
              </a>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->
        
            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button primary" href="hub-profile-messages.html">View all Messages</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->

        <!-- ACTION LIST ITEM WRAP -->
        <div class="action-list-item-wrap">
          <!-- ACTION LIST ITEM -->
          <div class="action-list-item unread header-dropdown-trigger">
            <!-- ACTION LIST ITEM ICON -->
            <svg class="action-list-item-icon icon-notification">
              <use xlink:href="#svg-notification"></use>
            </svg>
            <!-- /ACTION LIST ITEM ICON -->
          </div>
          <!-- /ACTION LIST ITEM -->

          <!-- DROPDOWN BOX -->
          <div class="dropdown-box header-dropdown">
            <!-- DROPDOWN BOX HEADER -->
            <div class="dropdown-box-header">
              <!-- DROPDOWN BOX HEADER TITLE -->
              <p class="dropdown-box-header-title">Notifications</p>
              <!-- /DROPDOWN BOX HEADER TITLE -->
        
              <!-- DROPDOWN BOX HEADER ACTIONS -->
              <div class="dropdown-box-header-actions">
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Mark all as Read</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
                
                <!-- DROPDOWN BOX HEADER ACTION -->
                <p class="dropdown-box-header-action">Settings</p>
                <!-- /DROPDOWN BOX HEADER ACTION -->
              </div>
              <!-- /DROPDOWN BOX HEADER ACTIONS -->
            </div>
            <!-- /DROPDOWN BOX HEADER -->
        
            <!-- DROPDOWN BOX LIST -->
            <div class="dropdown-box-list" data-simplebar>
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item unread">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">16</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">2 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
              
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">26</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
              
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a> left a like <img class="reaction" src="img/reaction/like.png" alt="reaction-like"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
              
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">17 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
              
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">13</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> posted a comment on your <a class="highlighted" href="profile-photos.html">photo</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">31 minutes ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">5</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> left a love <img class="reaction" src="img/reaction/love.png" alt="reaction-love"> reaction on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">2 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON THUMBS UP -->
                    <svg class="icon-thumbs-up">
                      <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <!-- /ICON THUMBS UP -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
        
              <!-- DROPDOWN BOX LIST ITEM -->
              <div class="dropdown-box-list-item">
                <!-- USER STATUS -->
                <div class="user-status notification">
                  <!-- USER STATUS AVATAR -->
                  <a class="user-status-avatar" href="profile-timeline.html">
                    <!-- USER AVATAR -->
                    <div class="user-avatar small no-outline">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-40-44"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-16-18"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">12</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </div>
                    <!-- /USER AVATAR -->
                  </a>
                  <!-- /USER STATUS AVATAR -->
        
                  <!-- USER STATUS TITLE -->
                  <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> posted a comment on your <a class="highlighted" href="profile-timeline.html">status update</a></p>
                  <!-- /USER STATUS TITLE -->
        
                  <!-- USER STATUS TIMESTAMP -->
                  <p class="user-status-timestamp">3 hours ago</p>
                  <!-- /USER STATUS TIMESTAMP -->
        
                  <!-- USER STATUS ICON -->
                  <div class="user-status-icon">
                    <!-- ICON COMMENT -->
                    <svg class="icon-comment">
                      <use xlink:href="#svg-comment"></use>
                    </svg>
                    <!-- /ICON COMMENT -->
                  </div>
                  <!-- /USER STATUS ICON -->
                </div>
                <!-- /USER STATUS -->
              </div>
              <!-- /DROPDOWN BOX LIST ITEM -->
            </div>
            <!-- /DROPDOWN BOX LIST -->
        
            <!-- DROPDOWN BOX BUTTON -->
            <a class="dropdown-box-button secondary" href="hub-profile-notifications.html">View all Notifications</a>
            <!-- /DROPDOWN BOX BUTTON -->
          </div>
          <!-- /DROPDOWN BOX -->
        </div>
        <!-- /ACTION LIST ITEM WRAP -->
      </div>
      <!-- /ACTION LIST -->

      <!-- ACTION ITEM WRAP -->
      <div class="action-item-wrap">
        <!-- ACTION ITEM -->
        <div class="action-item dark header-settings-dropdown-trigger">
          <!-- ACTION ITEM ICON -->
          <svg class="action-item-icon icon-settings">
            <use xlink:href="#svg-settings"></use>
          </svg>
          <!-- /ACTION ITEM ICON -->
        </div>
        <!-- /ACTION ITEM -->

        <!-- DROPDOWN NAVIGATION -->
        <div class="dropdown-navigation header-settings-dropdown">
          <!-- DROPDOWN NAVIGATION HEADER -->
          <div class="dropdown-navigation-header">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
              
                  <!-- USER AVATAR PROGRESS -->
                  <div class="user-avatar-progress">
                    <!-- HEXAGON -->
                    <div class="hexagon-progress-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS -->
              
                  <!-- USER AVATAR PROGRESS BORDER -->
                  <div class="user-avatar-progress-border">
                    <!-- HEXAGON -->
                    <div class="hexagon-border-40-44"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR PROGRESS BORDER -->
              
                  <!-- USER AVATAR BADGE -->
                  <div class="user-avatar-badge">
                    <!-- USER AVATAR BADGE BORDER -->
                    <div class="user-avatar-badge-border">
                      <!-- HEXAGON -->
                      <div class="hexagon-22-24"></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR BADGE BORDER -->
              
                    <!-- USER AVATAR BADGE CONTENT -->
                    <div class="user-avatar-badge-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-dark-16-18"></div>
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
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><span class="bold">Hi Marina!</span></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small"><a href="profile-timeline.html">@marinavalentine</a></p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /DROPDOWN NAVIGATION HEADER -->
      
          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">My Profile</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-info.html">Profile Info</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-social.html">Social &amp; Stream</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-notifications.html">Notifications</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-messages.html">Messages</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-profile-requests.html">Friend Requests</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">Account</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-info.html">Account Info</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-password.html">Change Password</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-account-settings.html">General Settings</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">Groups</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-group-management.html">Manage Groups</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-group-invitations.html">Invitations</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION CATEGORY -->
          <p class="dropdown-navigation-category">My Store</p>
          <!-- /DROPDOWN NAVIGATION CATEGORY -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-account.html">My Account <span class="highlighted">$250,32</span></a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-statement.html">Sales Statement</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-items.html">Manage Items</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION LINK -->
          <a class="dropdown-navigation-link" href="hub-store-downloads.html">Downloads</a>
          <!-- /DROPDOWN NAVIGATION LINK -->
      
          <!-- DROPDOWN NAVIGATION BUTTON -->
          <p class="dropdown-navigation-button button small secondary">Logout</p>
          <!-- /DROPDOWN NAVIGATION BUTTON -->
        </div>
        <!-- /DROPDOWN NAVIGATION -->
      </div>
      <!-- /ACTION ITEM WRAP -->
    </div>
    <!-- /HEADER ACTIONS -->
  </header>
  <!-- /HEADER -->

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
    <div class="section-banner">
      <!-- SECTION BANNER ICON -->
      <img class="section-banner-icon" src="img/banner/marketplace-icon.png" alt="marketplace-icon">
      <!-- /SECTION BANNER ICON -->
  
      <!-- SECTION BANNER TITLE -->
      <p class="section-banner-title">Marketplace</p>
      <!-- /SECTION BANNER TITLE -->
  
      <!-- SECTION BANNER TEXT -->
      <p class="section-banner-text">The best place for the community to buy and sell!</p>
      <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Search what you want!</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Market Categories</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

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
      
      
      
      
      



      @foreach ($regalos as $regalo)
    

              <!-- PRODUCT PREVIEW -->
      <div class="product-preview">
        <!-- PRODUCT PREVIEW IMAGE -->
        <a href="marketplace-product.html">
          <figure class="product-preview-image liquid">
            <img src="img/marketplace/items/01.jpg" alt="item-01">
          </figure>
        </a>
        <!-- /PRODUCT PREVIEW IMAGE -->
    
        <!-- PRODUCT PREVIEW INFO -->
        <div class="product-preview-info">
          <!-- TEXT STICKER -->
          <p class="text-sticker"><span class="highlighted">$</span> {{ $regalo->blabla }}</p>
          <!-- /TEXT STICKER -->
    
          <!-- PRODUCT PREVIEW TITLE -->
          <p class="product-preview-title"><a href="marketplace-product.html">{{ $regalo->nombre }}</a></p>
          <!-- /PRODUCT PREVIEW TITLE -->
    
          <!-- PRODUCT PREVIEW CATEGORY -->
          <p class="product-preview-category digital"><a href="marketplace-category.html">Stream Packs</a></p>
          <!-- /PRODUCT PREVIEW CATEGORY -->
    
          <!-- PRODUCT PREVIEW TEXT -->
          <p class="product-preview-text">Awesome hexagon themed stream pack, you can change all colors and...</p>
          <!-- /PRODUCT PREVIEW TEXT -->
        </div>
        <!-- /PRODUCT PREVIEW INFO -->
    
        <!-- PRODUCT PREVIEW META -->
        <div class="product-preview-meta">
          <!-- PRODUCT PREVIEW AUTHOR -->
          <div class="product-preview-author">
            <!-- PRODUCT PREVIEW AUTHOR IMAGE -->
            <a class="product-preview-author-image user-avatar micro no-border" href="profile-timeline.html">
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
            <p class="product-preview-author-title">Posted By</p>
            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->
    
            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
            <p class="product-preview-author-text"><a href="profile-timeline.html">Marina Valentine</a></p>
            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
          </div>
          <!-- /PRODUCT PREVIEW AUTHOR -->
    
          <!-- RATING LIST -->
          <div class="rating-list">
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating filled">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
    
            <!-- RATING -->
            <div class="rating">
              <!-- RATING ICON -->
              <svg class="rating-icon icon-star">
                <use xlink:href="#svg-star"></use>
              </svg>
              <!-- /RATING ICON -->
            </div>
            <!-- /RATING -->
          </div>
          <!-- /RATING LIST -->
        </div>
        <!-- /PRODUCT PREVIEW META -->
      </div>
      <!-- /PRODUCT PREVIEW -->

      @endforeach

    </div>
    <!-- /GRID -->
  </div>
  <!-- /CONTENT GRID -->

<!-- app -->
<script src="js/app.bundle.min.js"></script>
</body>
</html>