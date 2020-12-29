@extends ('layouts.app')


@section('title')
<title>MR. Automotive | Carros </title>
@endsection('title')


@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="resources/theme/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="resources/theme/css/style.css" type="text/css">


</head>


<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="resources/theme/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Lista de carros:</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Pesquisa de carro:</h5>



                        <form action="/cars" method="GET">
                            <input type="text" placeholder="Pesquisar por nome..." name="titulo">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>



                    <div class="car__filter">
                        <h5>Filtros:</h5>


                        <form action="/cars" method="GET">

                            <select class="form-select" name="marca" id="marca_id">
                                <option value="">Marca</option>
                                @foreach(App\Http\Controllers\AnunciosController::findMarcas() as $marca)
                                <option value="{{ $marca->id_marca }}">{{ $marca->nome }}</option>
                                @endforeach
                            </select>

                            <!--

                            <select class="form-select" name="modelo" id="modelo_id" style="moverflow-x: hidden">
                                <option value="">Modelo</option>
                                @foreach(App\Http\Controllers\AnunciosController::findModelos() as $modelo)
                                <option value=" {{ $modelo->id_marca }}-{{ $modelo->id_modelo }}">{{ $modelo->nome }} </option>
                                @endforeach
                            </select>

                            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Modelos">
                            <datalist id="datalistOptions">
                                <option value="">Modelo</option>
                                @foreach(App\Http\Controllers\AnunciosController::findModelos() as $modelo)
                                <option value="{{ $modelo->id_marca }}-{{ $modelo->id_modelo }}">{{ $modelo->nome }} </option>
                                @endforeach
                            </datalist>


                            <script>
                                $(document).ready(function() {
                                    var $options = $("#modelo_id").clone(); // this will save all initial options in the second dropdown

                                    $("#marca_id").change(function() {
                                        var filters = [];
                                        if ($(this).val() == "") {
                                            $(this).find("option").each(function(index, option) {
                                                if ($(option).val() != "")
                                                    filters.push($(option).val());
                                            });
                                        } else {
                                            filters.push($(this).val())
                                        }

                                        $("#modelo_id").html("");

                                        $.each(filters, function(index, value) {
                                            $options.find("option").each(function(optionIndex, option) { // a second loop that check if the option value starts with the filter value
                                                if ($(option).val().startsWith(value))
                                                    $(option).clone().appendTo($("#modelo_id"));
                                            });

                                        });

                                    });
                                });
                            </script>


                            -->


                            <select name="estado">
                                <option value="">Condição</option>
                                <option value="1">Novo</option>
                                <option value="0">Usado</option>
                            </select>
                            <select name="quilometragem">
                                <option value="">Quilometragem (KM)</option>
                                <option value="5000">Até 5.000 KM</option>
                                <option value="10000">Até 10.000 KM</option>
                                <option value="50000">Até 50.000 KM</option>
                                <option value="100000">Até 100.000 KM</option>
                                <option value="200000">Até 200.000 KM</option>
                                <option value="500000">Até 500.000 KM</option>
                            </select>
                            <select name="combustivel">
                                <option value="">Combustivel</option>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Diesel">Diesel</option>
                                <option value="GPL">GPL</option>
                                <option value="Híbrido">Híbrido</option>
                                <option value="Elétrico">Elétrico</option>
                            </select>
                            <select name="cor">
                                <option value="">Cores</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Azul">Azul</option>
                                <option value="Preto">Preto</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Verde">Verde</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Branco">Branco</option>
                                <option value="Outro">Outro</option>
                            </select>

                            <select name="preco">
                                <option value="">Preço Máximo</option>
                                <option value="2000">Até 2.000€</option>
                                <option value="5000">Até 5.000€</option>
                                <option value="10000">Até 10.000€</option>
                                <option value="20000">Até 20.000€</option>
                                <option value="50000">Até 50.000€</option>
                                <option value="100000">Até 100.000€</option>
                                <option value="200000">Até 200.000€</option>
                            </select>
                            <!--
                            <div class="filter-price">
                                <p>Preço:</p>
                                <div class="price-range-wrap">
                                    <div class="filter-price-range"></div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <input type="text" id="filterAmount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->


                            <div>
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn" name="remover" value="remover">Remover Filtros</button>
                                </div>

                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn" name="filtrar" value="filtrar"> Filtrar </button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Mostrar na página:</h6>
                                <select>
                                    <option value="">9 Carros</option>
                                    <option value="">15 Carros</option>
                                    <option value="">20 Carros</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Preço</h6>
                                <select>
                                    <option value="">Mais caros primeiro</option>
                                    <option value="">Mais baratos primeiro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                @if(empty(request()->filtrar=="filtrar")||request()->remover=="remover")
                @foreach(App\Http\Controllers\AnunciosController::findAllAnuncios() as $anuncio)
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">

                                <img src="resources/theme/img/cars/car-1.jpg" alt="">
                                <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                <img src="resources/theme/img/cars/car-6.jpg" alt="">
                                <img src="resources/theme/img/cars/car-3.jpg" alt="">

                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">Ano: {{ App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo) }}</div>
                                    <h5><a href="/anuncios/show/{{$anuncio->id_anuncio}}">{{$anuncio->titulo}}</a></h5>
                                    <ul>
                                        <li><span>Cor:</span> {{$anuncio->cor}}</li>
                                        <li>Segmento: {{$anuncio->segmento}}</li>
                                        <li><span>{{$anuncio->quilometragem }}</span> Quilometragem(KMs)</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option sale">Para Venda</span>
                                    <h6> &nbsp;&nbsp; {{$anuncio->preco}}&nbsp;paus(€)<span></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @if($anuncios_filtrados ?? ''!=null)
                    @foreach($anuncios_filtrados as $anuncio)
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">

                                    <img src="resources/theme/img/cars/car-1.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-6.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-3.jpg" alt="">

                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">Ano: {{ App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo) }}</div>
                                        <h5><a href="/anuncios/show/{{$anuncio->id_anuncio}}">{{$anuncio->titulo}}</a></h5>
                                        <ul>
                                            <li><span>Cor:</span> {{$anuncio->cor}}</li>
                                            <li>Segmento: {{$anuncio->segmento}}</li>
                                            <li><span>{{$anuncio->quilometragem }}</span> Quilometragem(KMs)</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">Para Venda</span>
                                        <h6> &nbsp;&nbsp; {{$anuncio->preco}}&nbsp;paus(€)<span></span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        <div class="ShowDataHere">
                            Debug:</br>
                            @if(!empty(request()->all()))
                            marca: {{ request()->marca }} </br>
                            modelo: {{ request()->modelo }} </br>
                            estado:{{ request()->estado }} </br>
                            quilometragem:{{ request()->quilometragem }} </br>
                            combustivel: {{ request()->combustivel }} </br>
                            Cor: {{ request()->cor }} </br>
                            preco: {{ request()->preco }} </br>

                            @endif
                        </div>
                        @endif






                        <div class="pagination__option">
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><span class="arrow_carrot-2right"></span></a>
                        </div>


                    </div>
                </div>
            </div>
</section>
<!-- Car Section End -->
<!-- Js Plugins -->
<script src="resources/theme/js/jquery-3.3.1.min.js"></script>
<script src="resources/theme/js/bootstrap.min.js"></script>


<script src="resources/theme/js/jquery.nice-select.min.js"></script>
<script src="resources/theme/js/jquery-ui.min.js"></script>
<script src="resources/theme/js/jquery.magnific-popup.min.js"></script>

<script src="resources/theme/js/jquery.slicknav.js"></script>
<script src="resources/theme/js/owl.carousel.min.js"></script>
<script src="resources/theme/js/main.js"></script>

@endsection