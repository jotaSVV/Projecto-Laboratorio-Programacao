@extends('layouts.app')

@section('content')

<!-- Breadcrumb End -->
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Porsche Cayenne Turbo S 2019</h2>
                        <div class="breadcrumb__links">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Car Listing</a>
                            <span>{{$anuncio->titulo}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Begin -->

    <!-- Car Details Section Begin -->
    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="img/cars/details/cd-1.jpg" alt="">
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl="img/cars/details/cd-2.jpg"><img
                                        src="img/cars/details/sm-1.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-3.jpg"><img
                                        src="img/cars/details/sm-2.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-4.jpg"><img
                                        src="img/cars/details/sm-3.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-5.jpg"><img
                                        src="img/cars/details/sm-4.jpg" alt=""></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-6.jpg"><img
                                        src="img/cars/details/sm-5.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Descrição</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Detalhes Tecnicos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Features & Options</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Vehicle Location</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="car__details__tab__info__item">
                                                <h5>Anotações</h5>
                                                <label> {{$anuncio->descricao}}  </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                               </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information2</h5>
                                                <ul>
                                                    <li><i class="fa fa-long-arrow-right"></i> Anunciante: {{$anuncio->id_utilizador}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Marca: {{$anuncio->id_marca}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Modelo: {{$anuncio->id_modelo}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Versao: {{$anuncio->versao}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Cor: {{$anuncio->cor}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Combustivel: {{$anuncio->combustivel}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Mês de Registo: {{$anuncio->data_registo}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Ano de Registo: {{$anuncio->data_registo}}</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Quilómetros: {{$anuncio->quilometragem}} km</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Cilindrada: {{$anuncio->cilindrada}} cc</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Potência: {{$anuncio->potencia}} cv</li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Retoma: {{$anuncio->retoma}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Financiamento: {{$anuncio->financiamento}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Segmento: {{$anuncio->segmento}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Metalizado: {{$anuncio->metalizado}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Caixa: {{$anuncio->caixa}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Lotação: {{$anuncio->lotacao}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Portas: {{$anuncio->portas}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Classe Veiculo: {{$anuncio->classe_veiculo}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Tração: {{$anuncio->tracao}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Garantia Stand: {{$anuncio->garantia_stand}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Número de Registos: {{$anuncio->nr_registos}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Livro de Revisões: {{$anuncio->livro_revisoes}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Segunda-Chave: {{$anuncio->seg_chave}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Jantes Liga Leve: {{$anuncio->jantes_liga_leve}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Estofos: {{$anuncio->estofos}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Medida Jantes: {{$anuncio->medida_jantes}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Airbags: {{$anuncio->airbags}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Ar Condicionado: {{$anuncio->ar_condicionado}} </li>
                                                    <li><i class="fa fa-long-arrow-right"></i> Importado: {{$anuncio->importado}} </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information3</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information4</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="car__details__sidebar">
                        <div class="car__details__sidebar__model">
                            <ul>
                                <li>Stock <span>K99D10459934</span></li>
                                <li>Vin <span>3VWKM245686</span></li>
                            </ul>
                            <a href="#" class="primary-btn">Get Today Is Price</a>
                            <p>Pricing in 11/26/2019</p>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <li>MSRP <span>$120,000</span></li>
                                <li>Dealer Discounts <span>$3,000</span></li>
                                <li>Price <span>$117,000</span></li>
                            </ul>
                            <a href="#" class="primary-btn"><i class="fa fa-credit-card"></i> Express Purchase</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-sliders"></i> Build Payment</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-money"></i> Value Trade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
  
       <div class="col-lg-3 col-md-4 col-sm-6 mix sale">
                    
                    
                </div>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="/resources/theme/img/cars/car-2.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-8.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-6.jpg" alt="">
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
    <div class="col-sm">
      <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="/resources/theme/img/cars/car-2.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-8.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-6.jpg" alt="">
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
    <div class="col-sm">
      <div class="car__item">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="/resources/theme/img/cars/car-2.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-8.jpg" alt="">
                            <img src="/resources/theme/img/cars/car-6.jpg" alt="">
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
  </div>
</div>
                
   
    
       
    </section>
    <!-- Car Details Section End -->

@endsection