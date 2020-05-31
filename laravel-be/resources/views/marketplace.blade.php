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
        <link rel="icon" href="img/favicon.ico">
        <link rel="stylesheet" href="{{ env('APP_URL_PUERTO') }}/css/bootstrap.min.css">
    </head>
    <body>ÏÏ

        @include('pageloader')
        @include('header_responsive')

        <style>

            .modal-dialog {
                max-width: 500px;
                margin: 6.75rem auto!important;
            }


            .grid-categorias{
                grid-template-columns: auto auto auto auto ;
                grid-template-rows: auto;
            }

            .slidecontainer {
                width: 100%;
            }

            .slider {
                -webkit-appearance: none;
                width: 100%;
                height: 8px;
                background: #d3d3d3;
                outline: none;
                opacity: 0.7;
                -webkit-transition: .2s;
                transition: opacity .2s;
            }

            .slider:hover {
                opacity: 1;
            }

            .slider::-webkit-slider-thumb {
                -webkit-appearance: none;
                appearance: none;
                width: 20px;
                height: 20px;
                background: #7a5cf9;
                cursor: pointer;
            }

            .slider::-moz-range-thumb {
                width: 25px;
                height: 25px;
                background: #615cfa;
                cursor: pointer;
            }

            @media (max-width: 480px) {

                .grid-categorias{
                    display: grid;
                    grid-template-columns: auto;
                    grid-template-rows: auto;
                }

                .boton_compra{
                    width: 100%;
                }

            }

        </style>



        <div class="content-grid" style="padding: 80px 0 60px;">


            <div class="grid mobile-prefer-content grid-categorias">
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


            <br>


            <div class="row">
                <div class="col-md-12">
                    <h3>Que buscas ? Encontra lo que estas por regalar</h3>
                </div>
                <div class="col-md-3" style="margin-top:20px;">
                    <div class="form-select" style="margin-bottom: 28px;">
                        <label for="billing-state">Categoria</label>
                        <select id="categoria_filtro" name="categoria_filtro">
                            <option value="-1">Selecciona categoria ...</option>


                            @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <svg class="form-select-icon icon-small-arrow">
                        <use xlink:href="#svg-small-arrow"></use>
                        </svg>
                    </div>
                </div>
                <div class="col-md-3  slidecontainer" style="margin-top:14px;">
                    <label for="billing-state" id="rangoMax_filtrotxt">Maximo a Gastar ? $ 500</label>
                    <input type="range" min="200" max="5000" value="500" class="slider" id="rangoMax_filtro" name="rangoMax_filtro">

                </div>
                <div class="col-md-3"style="margin-top:16px;">

                </div>
                <div class="col-md-3"style="margin-top: 14px;">
                    <a style="width: 100%;" href="javascript:filtrarRegalos();"  class='button small twitch blue-ar-l-rn-none'>Buscar</a>
                </div>
            </div>

            <hr/>


            <!-- START/LISTADO PRODUCTOS -->
            <div id="grillaRegalos">
                <div class="section-header">
                    <div class="section-header-info">
                        <p class="section-pretitle">Mira todo lo que tenemos para vos</p>
                        <h2 class="section-title">Vouchers {{ isset($categoriaSelected->nombre) ? $categoriaSelected->nombre : 'Todos'}}{{ ' tenemos ' . count($regalos) }}</h2>
                    </div>
                </div>
                <div class="grid grid-3-3-3-3 centered" >
                    @foreach ($regalos as $regalo)
                    <div class="product-preview">        
                        <figure class="product-preview-image liquid" style="background: url({{ $regalo->url }}) center center / cover no-repeat;">
                            <img src="{{ $regalo->url }}" alt="item-01" style="display: none;">
                        </figure>
                        <div class="product-preview-info">
                            <p class="text-sticker"><span class="highlighted">$</span> {{ $regalo->importe }}</p>
                            <p class="product-preview-title">{{ $regalo->nombre }}</p>
                            <p class="product-preview-category digital"><a href="marketplace-category.html">{{ $regalo->Categoria->nombre }}</a></p>
                            <p class="product-preview-text">{{$regalo->descripcion}}</p>
                            <a style="width: 100%;" href="javascript:buyModal({{ $regalo->id }});"  class='button small twitch blue-ar-l-rn-none'>Comprar</a>
                        </div>

                        <div class="product-preview-meta">
                            <div class="product-preview-author">
                                <p class="product-preview-author-title">By</p>
                                <p class="product-preview-author-text"><a href="profile-timeline.html">{{$regalo->Empresa->nombre}}</a></p>
                            </div>

                            <div class="rating-list">
                                <div class="rating filled">
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
        </div>
        <!-- END/LISTADO PRODUCTOS -->

        <!-- /CONTENT GRID -->
        <div tabindex="-1" role="dialog" class="modal fade" id="buyModal" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" style="width: 100%;">Para quien es este regalo?</h5>
                    </div>
                    <div class="modal-body">
                        @if ($grupos != null)
                        <div class="form-item">
                            <!-- FORM SELECT -->
                            <form id="formregalo">
                                <input type='hidden' value name="idRegalo" id="idRegalo">
                                <div class="form-select" style="margin-bottom: 28px;">
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
                                <!-- /FORM SELECT -->



                                <div class="form-item">
                                    <!-- FORM SELECT -->
                                    <div class="form-select" style="margin-bottom: 28px;">
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

                                <div class="form-item">
                                    <!-- FORM SELECT -->
                                    <div class="form-select" style="margin-bottom: 28px;">
                                        <label for="billing-state">Mensaje</label>
                                        <input type='text' value name="mensaje" id="mensaje">
                                        <!-- /FORM SELECT ICON -->
                                    </div>
                                    <!-- /FORM SELECT -->
                                </div>
                            </form>

                        </div>
                        @else
                        <div class="form-item">
                            <h3>Tenes que iniciar sesion.</>

                        </div>
                        @endif
                        <div id="botonpagoml">
                        
                        </div>

                        <div class="modal-footer">
                            <a href="javascript:regalar();" class="btn btn-primary boton_compra" style="    width: 100%;">Comprar</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>

    <!-- app -->
    <script src="{{ env('APP_URL_PUERTO') }}/js/app.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ env('APP_URL_PUERTO') }}/js/bootstrap.min.js"></script>

    @if (Auth::check())

    <script>
                                        function buyModal(idregalo) {
                                            $('#botonpagoml').html('')
                                            $('.modal-footer').show(100);
                                            $('#buyModal').modal('show');
                                            $('#idRegalo').val(idregalo);
                                        }
    </script>

    @else

    <script>
        function buyModal(idregalo) {
            window.location.href = "/login";

        }
    </script>

    @endif



    <script>

        var slider = document.getElementById("rangoMax_filtro");
        var output = document.getElementById("rangoMax_filtrotxt");


        slider.oninput = function () {
            output.innerHTML = "Maximo a Gastar $ " + this.value;
        }

        function regalar() {
            if ($('#grupo_regalo').val() != '-1' && $('#amigo_a_regalar').val() != '-1'){
                
                var fd = new FormData();
                
                fd.append("_token", $("input[name=_token]").val());
                
                fd.append("idRegalo", $("#idRegalo").val());
                fd.append("amigo_a_regalar", $("#amigo_a_regalar").val());
                fd.append("grupo_regalo", $("#grupo_regalo").val());
                fd.append("mensaje", $("#mensaje").val());
                
                
                $.ajax({
                    url: "/grupo/regalar",
                    type: "POST",
                    data: fd,
                    dataType: 'json',
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                beforeSend: function () {
                    //console.log("before send request");
                    $("#botonpagoml").html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');
                }
                }).done(function (data) {
                    $('#botonpagoml').html(data.boton)
                    $('.modal-footer').hide(100)
                });
            }
        }


        function filtrarRegalos() {

            var fd = new FormData();
            fd.append("_token", $("input[name=_token]").val());
            fd.append("categoria_filtro", $("#categoria_filtro").val());
            fd.append("rangoMax_filtro", $("input[name=rangoMax_filtro]").val());

            $.ajax({
                url: "/regalos/filtro",
                type: "POST",
                data: fd,
                dataType: 'text',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $("#grillaRegalos").html('<div class="page-loader-indicator loader-bars"><div class="loader-bar"></div><div class="loader-bar"></div><div class="loader-bar"></div></div><center><p class="page-loader-info-text">Cargando...</p></center>');

                }
            }).done(function (data) {
                $('#grillaRegalos').empty();
                $('#grillaRegalos').html(data)

            });


        }

        function SendWebWthsVendedor(numerowts,vendedor,codcanje) {
            window.open('https://api.whatsapp.com/send?phone=' + numerowts + '&text=%20' + "Hola vendedor! compré un regalo en Cheamigo.com.ar ->"+ String.fromCodePoint('0x1F381') + " Mi codigo de canje es:  "+codcanje );
        }

        function fulfillSelect(codigoGrupo) {

            $('.modal-footer').show(100)
            $('#botonpagoml').html('')

            if ($('#grupo_regalo').val() != '-1')
                var fd = new FormData(document.getElementById('formregalo'));
            fd.append("_token", $("input[name=_token]").val());
            $.ajax({
                url: "/grupo/integrantes/" + codigoGrupo,
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



</html> 