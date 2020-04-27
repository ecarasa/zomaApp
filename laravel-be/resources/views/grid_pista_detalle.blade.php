            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
              <!-- CHAT WIDGET SETTINGS -->
              <div class="chat-widget-settings">
                <!-- POST SETTINGS WRAP -->
                <div class="post-settings-wrap" style="position: relative;" onclick="Volver('#msjeDetalle','#msjesCabecera')">
                  <!-- POST SETTINGS -->
                  <div class="post-settings widget-box-post-settings-dropdown-trigger">  <<< 
                    <!-- POST SETTINGS ICON -->
                    <svg class="post-settings-icon icon-return">
                      <use xlink:href="#svg-more-dots"></use>
                    </svg>
                    <!-- /POST SETTINGS ICON -->
                  </div>
                  <!-- /POST SETTINGS -->
          
                  <!-- SIMPLE DROPDOWN -->
                  <div class="simple-dropdown widget-box-post-settings-dropdown" style="position: absolute; z-index: 9999; top: 30px; right: 9px; opacity: 0; visibility: hidden; transform: translate(0px, -20px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Report</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Block</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
      
                    <!-- SIMPLE DROPDOWN LINK -->
                    <p class="simple-dropdown-link">Mute</p>
                    <!-- /SIMPLE DROPDOWN LINK -->
                  </div>
                  <!-- /SIMPLE DROPDOWN -->
                </div>
                <!-- /POST SETTINGS WRAP -->
              </div>
              <!-- CHAT WIDGET SETTINGS -->
        
              <!-- USER STATUS -->
              <div class="user-status">             
              @foreach ($mensajes as $mensaje)
                <!-- USER STATUS TITLE -->
                <!-- /USER STATUS TITLE -->
                <p class="user-status-title"><span class="bold">Destinatario: {{$mensaje->receptor}}</span></p>
              
        
                <!-- USER STATUS TAG -->
                <p class="user-status-tag online">Grupo de juego: {{$mensaje->grupo}}</p>
               
                <!-- /USER STATUS TAG -->
              </div>
              <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET HEADER -->
        
            <!-- CHAT WIDGET CONVERSATION -->
            <div class="chat-widget-conversation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: -35px -28px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;"><div class="simplebar-content" style="padding: 35px 28px;">
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER AVATAR -->
                <div class="chat-widget-speaker-avatar">
                  <!-- USER AVATAR -->
                  <div class="user-avatar tiny no-border">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                      <!-- HEXAGON -->
                      <div class="hexagon-image-24-26" data-src="img/avatar/03.jpg" style="width: 24px; height: 26px; position: relative;"><canvas width="24" height="26" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                      <!-- /HEXAGON -->
                    </div>
                    <!-- /USER AVATAR CONTENT -->
                  </div>
                  <!-- /USER AVATAR -->
                </div>
                <!-- /CHAT WIDGET SPEAKER AVATAR -->              
        
              <!-- CHAT WIDGET SPEAKER -->
              <div class="chat-widget-speaker left">
                <!-- CHAT WIDGET SPEAKER MESSAGE -->
                <p class="chat-widget-speaker-message" style="color:white;background-color:#615dfa">Pista: {{$mensaje->mensaje}}</p>
                <p class="chat-widget-speaker-message" style="color:white;background-color:#615dfa">Buenas Noticias! Tu amigo te dejó un regalo</p>
                <p></p>
                <div class="product-preview">        
                    <figure class="product-preview-image liquid" style="background: url(&quot;https://www.infobae.com/new-resizer/5iHq3D_WRtu1vURNMoDp7WW4yw8=/750x0/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/08/18202233/papas-fritas-dupla.jpg&quot;) center center / cover no-repeat;">
                      <img src="https://www.infobae.com/new-resizer/5iHq3D_WRtu1vURNMoDp7WW4yw8=/750x0/filters:quality(100)/s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2019/08/18202233/papas-fritas-dupla.jpg" alt="item-01" style="display: none;">
                    </figure>
                      
                      <!-- /PRODUCT PREVIEW IMAGE -->
                  
                      <!-- PRODUCT PREVIEW INFO -->
                      <div class="product-preview-info">
                        <!-- TEXT STICKER -->
                        <p class="text-sticker"><span class="highlighted">$</span> 250</p>
                        <!-- /TEXT STICKER -->
                  
                        <!-- PRODUCT PREVIEW TITLE -->
                        <p class="product-preview-title">2x1 Birra + papas bravas</p>
                        <!-- /PRODUCT PREVIEW TITLE -->
                  
                        <!-- PRODUCT PREVIEW CATEGORY -->
                        <p class="product-preview-category digital"><a href="marketplace-category.html">Cerveceria</a></p>
                        <!-- /PRODUCT PREVIEW CATEGORY -->
                  
                        <!-- PRODUCT PREVIEW TEXT -->
                        <p class="product-preview-text">amigo! Tomate una birra conmigo</p>

                      
                        <a mp-mode="dftl" target="_blank" style="width: 100%;" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=46588395-ac4fe9f8-4427-4c9c-8ca1-a256e01ad59d" name="MP-payButton" class="button small twitch blue-ar-l-rn-none">Ver Voucher</a>
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
                              <div class="hexagon-image-18-20" data-src="img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                              <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                          </a>
                          <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->
                  
                          <!-- PRODUCT PREVIEW AUTHOR TITLE -->
                          <p class="product-preview-author-title">By</p>
                          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->
                  
                          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
                          <p class="product-preview-author-text"><a href="profile-timeline.html">Antares</a></p>
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
                <!-- /CHAT WIDGET SPEAKER MESSAGE -->


        
                <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                <p class="chat-widget-speaker-timestamp">10:05AM</p>
                <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
              </div>
              <!-- /CHAT WIDGET SPEAKER -->
              @endforeach 
          </div>
          <!-- /CHAT WIDGET -->
        </div>
        <!-- /CHAT WIDGET WRAP -->

</div>