@foreach ($regalos as $regalo)
                <!-- CARGAR REGALO -->
                    <figure class="product-preview-image liquid" style="background: url('{{ $regalo->url }}') center center / cover no-repeat;">
                      <img src="{{ $regalo->url }}" alt="item-01" style="display: none;">
                    </figure>
                      
                      <!-- /PRODUCT PREVIEW IMAGE -->
                  
                      <!-- PRODUCT PREVIEW INFO -->
                      <div class="product-preview-info">
                        <!-- TEXT STICKER -->
                        <p class="text-sticker"><span class="highlighted">$</span> GRATIS</p>
                        <!-- /TEXT STICKER -->
                  
                        <!-- PRODUCT PREVIEW TITLE -->
                        <p class="product-preview-title">{{ $regalo->nombre }}</p>
                        <!-- /PRODUCT PREVIEW TITLE -->
                  
                        <!-- PRODUCT PREVIEW CATEGORY -->
                        <p class="product-preview-category digital"><a href="marketplace-category.html"></a></p>
                        <!-- /PRODUCT PREVIEW CATEGORY -->
                  
                        <!-- PRODUCT PREVIEW TEXT -->
                        <p class="product-preview-text">{{$regalo->descripcion}}</p>

                      
                        <a mp-mode="dftl" target="_blank" style="width: 100%;" href="" name="MP-payButton" class="button small twitch blue-ar-l-rn-none">Ver Voucher</a>
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
                          <p class="product-preview-author-title">A Disfrutarlo!</p>
                          <!-- /PRODUCT PREVIEW AUTHOR TITLE -->
                  
                          <!-- PRODUCT PREVIEW AUTHOR TEXT -->
                          <p class="product-preview-author-text"><a href="profile-timeline.html"></a></p>
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
  @endforeach            
                