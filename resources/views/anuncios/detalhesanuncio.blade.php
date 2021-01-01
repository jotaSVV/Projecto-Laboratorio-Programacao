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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/storage/app/anunciosImg/{{$anuncio->id_utilizador}}/{{$anuncio->id_anuncio}}/{{$anuncio->foto_perfil}}" alt="First slide">
    </div>
    @foreach(App\Http\Controllers\AnunciosController::getImgs("storage/app/anunciosImg/".$anuncio->id_utilizador."/".$anuncio->id_anuncio."/") as $files)
    @if(strcmp($files->getFilename(),$anuncio->foto_perfil)!=0)
<div class="carousel-item">
      <img class="d-block w-100" src="/storage/app/anunciosImg/{{$anuncio->id_utilizador}}/{{$anuncio->id_anuncio}}/{{ $files->getFilename() }}">
    </div>
    @endif
        @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
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
                                            <label> {{$anuncio->descricao}} </label>
                                        </div>
                                    </div>

                                    <form action="{{ ('/msg') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Mensagem:</label>
                                            <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>

                                        </div>
                                        <input type="hidden" id="id_recetor" name="id_recetor" value="{{$anuncio->id_utilizador}}">
                                        <input type="hidden" id="id_anuncio" name="id_anuncio" value="{{$anuncio->id_anuncio}}">
                                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                                    </form>
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
                                                @foreach(App\Http\Controllers\MarcasController::findMarcasById($anuncio->id_marca) as $marca)
                                                <li><i class="fa fa-long-arrow-right"></i> Marca: {{$marca->nome}}</li>
                                                @endforeach
                                                @foreach(App\Http\Controllers\ModelosController::findModeloById($anuncio->id_modelo) as $modelo)
                                                <li><i class="fa fa-long-arrow-right"></i> Modelo: {{$modelo->nome}}</li>
                                                @endforeach

                                                <li><i class="fa fa-long-arrow-right"></i> Versao: {{$anuncio->versao}}</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Cor: {{$anuncio->cor}}</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Combustivel: {{$anuncio->combustivel}}</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Data de Registo: {{$anuncio->data_registo}}</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Quilómetros: {{$anuncio->quilometragem}} km</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Cilindrada: {{$anuncio->cilindrada}} cc</li>
                                                <li><i class="fa fa-long-arrow-right"></i> Potência: {{$anuncio->potencia}} cv</li>
                                                @if($anuncio->retoma == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Retoma: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Retoma: Sim </li>
                                                @endif
                                                @if($anuncio->financiamento == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Financiamento: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Financiamento: Sim </li>
                                                @endif
                                                <li><i class="fa fa-long-arrow-right"></i> Segmento: {{$anuncio->segmento}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Metalizado: {{$anuncio->metalizado}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Caixa: {{$anuncio->caixa}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Lotação: {{$anuncio->lotacao}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Portas: {{$anuncio->portas}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Classe Veiculo: {{$anuncio->classe_veiculo}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Tração: {{$anuncio->tracao}} </li>
                                                @if($anuncio->garantia_stand == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Garantia Stand: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Garantia Stand: Sim </li>
                                                @endif
                                                <li><i class="fa fa-long-arrow-right"></i> Número de Registos: {{$anuncio->nr_registos}} </li>
                                                @if($anuncio->livro_revisoes == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Livro de Revisões: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Livro de Revisões: Sim </li>
                                                @endif
                                                @if($anuncio->seg_chave == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Segunda-chave: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Segunda-chave: Sim </li>
                                                @endif
                                                @if($anuncio->jantes_liga_leve == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Jantes Liga Leve: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Jantes Liga Leve: Sim </li>
                                                @endif

                                                <li><i class="fa fa-long-arrow-right"></i> Estofos: {{$anuncio->estofos}} </li>
                                                <li><i class="fa fa-long-arrow-right"></i> Medida Jantes: {{$anuncio->medida_jantes}} </li>
                                                @if($anuncio->airbags == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Airbags: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Airbags: Sim </li>
                                                @endif
                                                @if($anuncio->ar_condicionado == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Ar Condicionado: Não </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Ar Condicionado: Sim </li>
                                                @endif
                                                @if($anuncio->importado == 0)
                                                <li><i class="fa fa-long-arrow-right"></i> Origem: Nacional </li>
                                                @else
                                                <li><i class="fa fa-long-arrow-right"></i> Origem: Importado </li>
                                                @endif

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
                            <li><span>{{$anuncio->titulo}}</span></li>
                            <li>{{$anuncio->data_registo}}<i class="fa fa-circle" aria-hidden="true"></i>
                                {{$anuncio->quilometragem}} km<i class="fa fa-circle" aria-hidden="true"></i>{{$anuncio->combustivel}}
                            </li>
                        </ul>
                        <ul>
                            <li>Preço <span>{{$anuncio->preco}} €</span></li>
                        </ul>
                        @foreach(App\Http\Controllers\UtilizadoresController::findUserById($anuncio->id_utilizador) as $utilizador)
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <p> {{$utilizador->tipovendedor}} </p>
                                <li> <span>{{$utilizador->nome}} {{$utilizador->apelido}}</span></li>

                            </ul>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <h6><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Localização </h6>
                            @foreach(App\Http\Controllers\FrequesiasController::findFregById($utilizador->id_freguesia) as $freguesia)
                            <li> <span>{{$freguesia->nome}}, concelho de {{$freguesia->concelho}} </span></li>
                            @endforeach

                        </div>
                        <p></p>


                        @endforeach
                    </div>
                    <div class="car__details__sidebar__payment">
                        <h5><i class="fa fa-phone" aria-hidden="true"></i>
                            Telefone </h5>
                        <p><button class="primary-btn" id="myDIV" onclick="myFunction()">Mostrar</button></p>



<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Mostrar") {
    x.innerHTML = {{$utilizador->telefone}};
  } else {
    x.innerHTML = "Mostrar";
  }
}
</script>

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


    <div class="container-fluid">
        <div class="row">
            @foreach(App\Http\Controllers\AnunciosController::randomAdds($anuncio->id_anuncio) as $anuncio)
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic ">
                        <img src="/storage/app/anunciosImg/{{$anuncio->id_utilizador}}/{{$anuncio->id_anuncio}}/{{$anuncio->foto_perfil}}" alt="" style="width:156px;height:156px;" class="center">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">{{$anuncio->data_registo}}</div>
                            <h5><a href="/anuncios/show/{{$anuncio->id_anuncio}}" target="_blank" style="color:black;">{{$anuncio->titulo}}</a></h5>
                            <ul>
                                <li><span>{{$anuncio->quilometragem}}</span> km</li>
                                <li>{{$anuncio->caixa}}</li>
                                <li><span>{{$anuncio->potencia}}</span> cv</li>
                            </ul>
                        </div>
                        <div class="car__item__price">
                            <span class="car-option sale">Venda</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>




</section>
<!-- Car Details Section End -->

@endsection