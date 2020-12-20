@extends ('layouts.app')


@section('title')
<title>MR. Automotive | Cars </title>
@endsection('title')


@section('content')
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
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="car__filter">
                            <h5>Filtros:</h5>
                            <form action="#">
                                <select>
                                    <option data-display="Marca">Marca</option>
                                    <option value="">Acura</option>
                                    <option value="">Audi</option>
                                    <option value="">Bentley</option>
                                    <option value="">BMW</option>
                                    <option value="">Bugatti</option>
                                </select>
                                <select>
                                    <option data-display="Modelo">Modelo</option>
                                    <option value="">Q3</option>
                                    <option value="">A4 </option>
                                    <option value="">AVENTADOR</option>
                                </select>
                                <select>
                                    <option value="">Body Style</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <select>
                                    <option value="">Condição</option>
                                    <option value="">Novo</option>
                                    <option value="">Segunda Mão</option>
                                </select>
                                <select>
                                    <option value="">Tecnologias</option>
                                    <option value="">Bluetooth</option>
                                    <option value="">WiFi</option>
                                </select>
                                <select>
                                    <option value="">Quilometragem</option>
                                    <option value="">Até 27 KM</option>
                                    <option value="">Até 20 KM</option>
                                    <option value="">Até 15 KM</option>
                                    <option value="">Até 10 KM</option>
                                </select>
                                <select>
                                    <option value="">Engenharia</option>
                                    <option value="">BS3</option>
                                    <option value="">BS4</option>
                                    <option value="">BS5</option>
                                    <option value="">BS6</option>
                                </select>
                                <select>
                                    <option value="">Cores</option>
                                    <option value="">Vermelho</option>
                                    <option value="">Azul</option>
                                    <option value="">Preto</option>
                                    <option value="">Amarelo</option>
                                </select>
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
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn">Remover Filtros</button>
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
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$218<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-6.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-4.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-3.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-6.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-5.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$299<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-5.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-7.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2018</div>
                                        <h5><a href="#">Audi q8 2020</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">Para arrendar</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-6.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-3.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Mustang shelby gt500</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$730,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-4.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2019</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-7.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-4.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-1.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$120,000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-3.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-5.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel">
                                    <img src="resources/theme/img/cars/car-8.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-3.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-5.jpg" alt="">
                                    <img src="resources/theme/img/cars/car-2.jpg" alt="">
                                </div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


@endsection