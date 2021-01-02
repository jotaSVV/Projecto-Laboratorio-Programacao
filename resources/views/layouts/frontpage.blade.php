@extends ('layouts.app')


@section('title')
<title>MR. Automotive | Index </title>
@endsection('title')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
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

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="resources/theme/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero__text">
                    <div class="hero__text__title">
                        <span> ENCONTRE O SEU CARRO DE SONHO</span>
                        <h2>Porsche Cayenne S</h2>
                    </div>
                    <div class="hero__text__price">
                        <div class="car-model">Model 2019</div>
                        <a href="#" class="primary-btn"><img src="resources/theme/img/wheel.png" alt=""> Test Drive</a>

                    </div>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Alugar Carro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Comprar Carro</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="hero__tab__form">
                                <h2>O que procura?</h2>
                                <form>
                                    <div class="select-list">
                                        <div class="select-list-item">
                                            <p>Ano:</p>
                                            <select>
                                                <option data-display=" ">Select Year</option>
                                                <option value="">2020</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                                <option value="">2017</option>
                                                <option value="">2016</option>
                                                <option value="">2015</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Marca:</p>
                                            <select>
                                                <option data-display=" ">Select Brand</option>
                                                <option value="">Acura</option>
                                                <option value="">Audi</option>
                                                <option value="">Bentley</option>
                                                <option value="">BMW</option>
                                                <option value="">Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Modelo:</p>
                                            <select>
                                                <option data-display=" ">Select Model</option>
                                                <option value="">Q3</option>
                                                <option value="">A4 </option>
                                                <option value="">AVENTADOR</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Quilómetros</p>
                                            <select>
                                                <option data-display=" ">Select Mileage</option>
                                                <option value="">27</option>
                                                <option value="">25</option>
                                                <option value="">15</option>
                                                <option value="">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="car-price">
                                        <p>Intervalo de Preço:</p>
                                        <div class="price-range-wrap">
                                            <div class="price-range"></div>
                                            <div class="range-slider">
                                                <div class="price-input">
                                                    <input type="text" id="amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="site-btn">Searching</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="hero__tab__form">
                                <h2>Buy Your Dream Car</h2>
                                <form>
                                    <div class="select-list">
                                        <div class="select-list-item">
                                            <p>Select Year</p>
                                            <select>
                                                <option data-display=" ">Select Year</option>
                                                <option value="">2020</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                                <option value="">2017</option>
                                                <option value="">2016</option>
                                                <option value="">2015</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Select Brand</p>
                                            <select>
                                                <option data-display=" ">Select Brand</option>
                                                <option value="">Acura</option>
                                                <option value="">Audi</option>
                                                <option value="">Bentley</option>
                                                <<option value="">BMW</option>
                                                    <option value="">Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Select Model</p>
                                            <select>
                                                <option data-display=" ">Select Model</option>
                                                <option value="">Q3</option>
                                                <option value="">A4 </option>
                                                <option value="">AVENTADOR</option>
                                            </select>
                                        </div>
                                        <div class="select-list-item">
                                            <p>Select Mileage</p>
                                            <select>
                                                <option data-display=" ">Select Mileage</option>
                                                <option value="">27</option>
                                                <option value="">25</option>
                                                <option value="">15</option>
                                                <option value="">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="car-price">
                                        <p>Price Range:</p>
                                        <div class="price-range-wrap">
                                            <div class="price-range"></div>
                                            <div class="range-slider">
                                                <div class="price-input">
                                                    <input type="text" id="amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="site-btn">Searching</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Anúncios em Destaque</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($anuncios as $anuncio)
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">


                        @if( $anuncio->fotos != "dfsdfsdfsd")
                        <img src="resources/theme/img/cars/noimage.jpg" alt="">
                        <img src="resources/theme/img/cars/car-1.jpg" alt="">
                        <img src="resources/theme/img/cars/car-8.jpg" alt="">
                        <img src="resources/theme/img/cars/car-6.jpg" alt="">
                        <img src="resources/theme/img/cars/car-3.jpg" alt="">
                        @else
                        <img src="resources/theme/img/cars/noimage.jpg" alt="">
                        @endif

                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">Ano: {{ App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo) }}</div>
                            <h5><a href="/anuncios/show/{{$anuncio->id_anuncio}}">{{$anuncio->titulo}}</a></h5>
                            <ul>
                                @foreach(App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca) as $marca)
                                <li><span>Marca:</span> {{$marca->nome}}</li>
                                @endforeach
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
        </div>


    </div>
    </div>
</section>
<!-- Car Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Os Nossos Serviços</span>
                    <h2>O que oferecemos?</h2>
                    <p>Uma grande disponiveilidade de oferta preços mais competitivos do mercado</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="resources/theme/img/services/services-1.png" alt="">
                    <h5>Aluguer de Carros</h5>
                    <p>Encontra o carro que desea alugar ao melhor preço.</p>
                    <a href="/cars"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                    <img src="resources/theme/img/services/services-2.png" alt="">
                    <h5>Venda de Carros</h5>
                    <p>Compra o carro teu carro de sonho ao preço que nunca sonhaste pagar </p>
                    <a href="/cars"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>

        </div>
</section>
<!-- Services Section End -->



<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Anúncios</h2>
                </div>
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Mais Procurados</li>
                    <li data-filter=".sale">Mais recentes</li>
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($anuncios as $anuncio)
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic__slider owl-carousel">


                        @if( $anuncio->fotos != "dfsdfsdfsd")
                        <img src="resources/theme/img/cars/noimage.jpg" alt="">
                        <img src="resources/theme/img/cars/car-1.jpg" alt="">
                        <img src="resources/theme/img/cars/car-8.jpg" alt="">
                        <img src="resources/theme/img/cars/car-6.jpg" alt="">
                        <img src="resources/theme/img/cars/car-3.jpg" alt="">
                        @else
                        <img src="resources/theme/img/cars/noimage.jpg" alt="">
                        @endif

                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">Ano: {{ App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo) }}</div>
                            <h5><a href="/anuncios/show/{{$anuncio->id_anuncio}}">{{$anuncio->titulo}}</a></h5>
                            <ul>
                                @foreach(App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca) as $marca)
                                <li><span>Marca:</span> {{$marca->nome}}</li>
                                @endforeach
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
        </div>
    </div>
</section>
<!-- Car Section End -->

<!-- Chooseus Section Begin -->
<section class="chooseus spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="chooseus__text">
                    <div class="section-title">
                        <h2>Porquê comprar pelo nosso website?</h2>

                    </div>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> Site conceitudado no mercado, que garante que a segurança das vendas
                            .</li>
                        <li><i class="fa fa-check-circle"></i> Maior plataforma de comercialização e aluguer de carros portuguesa
                        </li>

                    </ul>
                    <a href="#" class="primary-btn">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="chooseus__video set-bg">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Xd0Ok-MkqoE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<!-- Chooseus Section End -->

<br>
<!-- Js Plugins -->
<script src="resources/theme/js/jquery-3.3.1.min.js"></script>
<script src="resources/theme/js/bootstrap.min.js"></script>


<script src="resources/theme/js/jquery.nice-select.min.js"></script>
<script src="resources/theme/js/jquery-ui.min.js"></script>
<script src="resources/theme/js/jquery.magnific-popup.min.js"></script>
<script src="resources/theme/js/mixitup.min.js"></script>
<script src="resources/theme/js/jquery.slicknav.js"></script>
<script src="resources/theme/js/owl.carousel.min.js"></script>
<script src="resources/theme/js/main.js"></script>

@endsection