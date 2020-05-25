<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('pista.name', 'TuAmigoFiel.com') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/styles.min.css">
        <link rel="icon" href="img/favicon.ico">
        <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/bootstrap.min.css">
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

        <style>

            .modal-dialog {
                max-width: 500px;
                margin: 6.75rem auto!important;
            }

        </style>

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
        <div class="content-grid" style="padding: 80px 0 60px;">
            <div class="grid  mobile-prefer-content" style="  grid-template-columns: auto auto auto auto ;grid-template-rows: auto;">
                @foreach ($categorias as $categoria)
                <div class="grid  centered" >
                    <a class="product-category-box category-all" href="/store/categoria/{{$categoria->id}}"     
                       style="background-image: url({{$categoria->imagen}});background-size: cover;">
                        <p class="product-category-box-title">{{$categoria->nombre}}</p>
                        <p class="product-category-box-text"></p>
                        <p class="product-category-box-tag">{{ $categoria->getCantidad() }} cosas</p>
                    </a>
                </div>
                @endforeach
            </div>



            <div class="section-header">
                <!-- SECTION HEADER INFO -->
                <div class="section-header-info">
                    <!-- SECTION PRETITLE -->
                    <p class="section-pretitle">Mira todo lo que tenemos para vos</p>
                    <!-- /SECTION PRETITLE -->

                    <!-- SECTION TITLE -->
                    <h2 class="section-title">Vouchers {{ isset($categoriaSelected->nombre) ? $categoriaSelected->nombre : 'Todos'}}{{ ' tenemos ' . count($regalos) }}</h2>
                    <!-- /SECTION TITLE -->
                </div>
            </div>

            <!-- GRID -->
            <div class="grid grid-3-3-3-3 centered">
                @foreach ($regalos as $regalo)
                <div class="product-preview">        
                    <figure class="product-preview-image liquid" style="background: url({{ $regalo->url }}) center center / cover no-repeat;">
                        <img src="{{ $regalo->url }}" alt="item-01" style="display: none;">
                    </figure>

                    <!-- /PRODUCT PREVIEW IMAGE -->

                    <!-- PRODUCT PREVIEW INFO -->
                    <div class="product-preview-info">
                        <!-- TEXT STICKER -->
                        <p class="text-sticker"><span class="highlighted">$</span> {{ $regalo->importe }}</p>
                        <!-- /TEXT STICKER -->

                        <!-- PRODUCT PREVIEW TITLE -->
                        <p class="product-preview-title">{{ $regalo->nombre }}</p>
                        <!-- /PRODUCT PREVIEW TITLE -->

                        <!-- PRODUCT PREVIEW CATEGORY -->
                        <p class="product-preview-category digital"><a href="marketplace-category.html">{{ $regalo->Categoria->nombre }}</a></p>
                        <!-- /PRODUCT PREVIEW CATEGORY -->

                        <!-- PRODUCT PREVIEW TEXT -->
                        <p class="product-preview-text">{{$regalo->descripcion}}</p>


                        <a style="width: 100%;" href="javascript:buyModal({{ $regalo->id }});"  class='button small twitch blue-ar-l-rn-none'>Comprar</a>
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
                                    <div class="hexagon-image-18-20" data-src="https://cheamigo.com.ar/public/img/avatar/01.jpg" style="width: 18px; height: 20px; position: relative;"><canvas width="18" height="20" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </a>
                            <!-- /PRODUCT PREVIEW AUTHOR IMAGE -->

                            <!-- PRODUCT PREVIEW AUTHOR TITLE -->
                            <p class="product-preview-author-title">By</p>
                            <!-- /PRODUCT PREVIEW AUTHOR TITLE -->

                            <!-- PRODUCT PREVIEW AUTHOR TEXT -->
                            <p class="product-preview-author-text"><a href="profile-timeline.html">{{$regalo->Empresa->nombre}}</a></p>
                            <!-- /PRODUCT PREVIEW AUTHOR TEXT -->
                        </div>

                        <div class="rating-list">
                            <div class="rating filled">
                                <svg class="rating-icon icon-star">
                                <use xlink:href="#svg-star"></use>
                                </svg>
                            </div>
                            <div class="rating filled">
                                <svg class="rating-icon icon-star">
                                <use xlink:href="#svg-star"></use>
                                </svg>
                            </div>
                            <div class="rating filled">
                                <svg class="rating-icon icon-star">
                                <use xlink:href="#svg-star"></use>
                                </svg>
                            </div>
                            <div class="rating filled">
                                <svg class="rating-icon icon-star">
                                <use xlink:href="#svg-star"></use>
                                </svg>
                            </div>
                            <div class="rating">
                                <svg class="rating-icon icon-star">
                                <use xlink:href="#svg-star"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div tabindex="-1" role="dialog" class="modal fade" id="buyModal" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="width: 100%;">Para quien es este regalo?</h5>
                    </div>
                    <div class="modal-body">
                        @if ($grupos != null)
                        <div class="form-item">
                            <form id="formregalo">
                                <input type='hidden' value name="idRegalo" id="idRegalo">
                                <div class="form-select">
                                    <label for="billing-state">Grupo</label>
                                    <select id="grupo_regalo" name="grupo_regalo" onchange="javascript:fulfillSelect(this.value);">
                                        <option value="-1">Selecciona grupo ...</option>
                                        @foreach ($grupos as $grupo)
                                        <option value="{{ $grupo->codigo }}">{{ $grupo->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <!-- FORM SELECT ICON -->
                                    <svg class="form-select-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                    </svg>
                                    <!-- /FORM SELECT ICON -->
                                </div>
                                <div class="form-item">
                                    <!-- FORM SELECT -->
                                    <div class="form-select">
                                        <label for="billing-state">Amigo</label>
                                        <select id="amigo_a_regalar" name="amigo_a_regalar">
                                            <option value="0">a quien se lo regalas ?</option>
                                            <option value="1">...</option>
                                        </select>
                                        <!-- FORM SELECT ICON -->
                                        <svg class="form-select-icon icon-small-arrow">
                                        <use xlink:href="#svg-small-arrow"></use>
                                        </svg>
                                        <!-- /FORM SELECT ICON -->
                                    </div>
                                    <!-- /FORM SELECT -->
                                </div>
                            </form>
                        </div>
                        @else
                        <div class="form-item">
                            <h3>Tenes que iniciar sesion.</h3>
                        </div>
                        @endif
                        <div class="modal-footer">
                            <button onclick="javascript:regalar();" type="button" class="btn btn-primary">Comprar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- app -->
            <script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>

            @if (Auth::check())
            <script>
                                function buyModal(idregalo) {
                                    $('#buyModal').modal('show');
                                    $('#idRegalo').val(idregalo);
                                }
            </script>
            @else
            <script>
                function buyModal(idregalo) {
                    window.location.href = "{{ env('APP_URL_PUERTO') }}/login";
                }
            </script>
            @endif

            <script>



                function regalar() {
                    if ($('#grupo_regalo').val() != '-1' && $('#amigo_a_regalar').val() != '-1')
                        var fd = new FormData(document.getElementById('formregalo'));
                    fd.append("_token", $("input[name=_token]").val());
                    $.ajax({
                        url: "{{ env('APP_URL') }}/grupo/regalar/",
                        type: "POST",
                        data: fd,
                        dataType: 'json',
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            //console.log("before send request");
                            //$('#amigo_a_regalar').empty().append($('<option></option>').attr('value', '-1').text('Cargando...'));
                        }
                    }).done(function (data) {
                        console.log(data)
                    });
                }

                function fulfillSelect(codigoGrupo) {
                    if ($('#grupo_regalo').val() != '-1')
                        var fd = new FormData(document.getElementById('formregalo'));
                    fd.append("_token", $("input[name=_token]").val());
                    $.ajax({
                        url: "{{ env('APP_URL') }}/grupo/integrantes/" + codigoGrupo,
                        type: "POST",
                        data: fd,
                        dataType: 'json',
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        beforeSend: function () {
                            //console.log("before send request");
                            $('#amigo_a_regalar').empty().append($('<option></option>').attr('value', '-1').text('Cargando...'));
                        }
                    }).done(function (data) {
                        $('#amigo_a_regalar').empty();
                        $('#amigo_a_regalar').append($('<option></option>').attr('value', '-1').text('Para quien es ? Elegi'));
                        $.each(data, function (key, entry) {
                            $('#amigo_a_regalar').append($('<option></option>').attr('value', entry.id).text(entry.name));
                        })
                    });
                }


            </script>
    </body>
</html> 