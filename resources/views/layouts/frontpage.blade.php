@extends ('layouts.app')


@section('title')
<title>MR. Automotive | Index </title>
@endsection('title')

@section('content')

   <!-- Hero Section Begin -->
   <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
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
                            <h2>$399<span>/Month</span></h2>
                        </div>
                        <a href="#" class="primary-btn"><img src="img/wheel.png" alt=""> Test Drive</a>
                        <a href="#" class="primary-btn more-btn">Learn More</a>
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
            <div class="row car-filter">

                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
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
                                <span class="car-option sale">For Sale</span>
                                <h6>$120,000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
            <div class="row">
			
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-1.png" alt="">
                        <h5>Aluguer de Carros</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-2.png" alt="">
                        <h5>Venda de Carros</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="img/services/services-4.png" alt="">
                        <h5>Suporte 24/7</h5>
                        <p>Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                            viverra maecenas.</p>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
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
            <div class="row car-filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-1.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
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
                                <span class="car-option sale">For Sale</span>
                                <h6>$120,000</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
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
                                <span class="car-option">For Rent</span>
                                <h6>$319<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-6.jpg" alt="">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-7.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
                            <img src="img/cars/car-4.jpg" alt="">
                            <img src="img/cars/car-1.jpg" alt="">
                        </div>
                        <div class="car__item__text">
                            <div class="car__item__text__inner">
                                <div class="label-date">2020</div>
                                <h5><a href="#">Lamborghini aventador A90</a></h5>
                                <ul>
                                    <li><span>35,000</span> mi</li>
                                    <li>Auto</li>
                                    <li><span>700</span> hp</li>
                                </ul>
                            </div>
                            <div class="car__item__price">
                                <span class="car-option">For Rent</span>
                                <h6>$422<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-8.jpg" alt="">
                            <img src="img/cars/car-3.jpg" alt="">
                            <img src="img/cars/car-5.jpg" alt="">
                            <img src="img/cars/car-2.jpg" alt="">
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
                                <h6>$322<span>/Month</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <p>Duis aute irure dolorin reprehenderits volupta velit dolore fugiat nulla pariatur
                                excepteur sint occaecat cupidatat.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</li>
                            <li><i class="fa fa-check-circle"></i> Integer et nisl et massa tempor ornare vel id orci.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Nunc consectetur ligula vitae nisl placerat tempus.
                            </li>
                            <li><i class="fa fa-check-circle"></i> Curabitur quis ante vitae lacus varius pretium.</li>
                        </ul>
                        <a href="#" class="primary-btn">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="chooseus__video set-bg">
            <img src="img/chooseus-video.png" alt="">
            <a href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
        </div>
    </section>
    <!-- Chooseus Section End -->

<br>


@endsection