@extends('layouts.app')

@section('content')

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
                        <li class="nav-item" style="width: 50%; margin-right: 0px">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" style="text-align: center;">Descrição</a>
                        </li>
                        <li class="nav-item" style="width: 50%;">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" style="text-align: center;">Detalhes técnicos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="car__details__tab__info__item">
                                            <h5>Descrição do anúncio</h5>
                                            <label style="padding-left: 15px;"> {{$anuncio->descricao}} </label>
                                        </div>
                                    </div>

                                    <form action="{{ ('/msg') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1" style="padding-left: 15px;padding-top: 15px;">Mensagem:</label>
                                            <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3" style="margin-left: 15px;"></textarea>

                                        </div>
                                        <input type="hidden" id="id_recetor" name="id_recetor" value="{{$anuncio->id_utilizador}}">
                                        <input type="hidden" id="id_anuncio" name="id_anuncio" value="{{$anuncio->id_anuncio}}">
                                        <button type="submit" class="btn btn-primary mb-2" style="margin-left: 15px;">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="car__details__tab__info__item">
                                            <h5>Detalhes técnicos sobre o veículo:</h5>
                                            <ul style="columns:2">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="car__details__sidebar">
                    <div class="car__details__sidebar__model">
                        <ul>
                            <li style="font-weight:900; text-align: center">{{$anuncio->titulo}}</li>
                            <li ><i class="fa fa-circle" aria-hidden="true"></i> Data de registo: {{$anuncio->data_registo}} <br>
                                <i class="fa fa-circle" aria-hidden="true"></i> Quilometragem: {{$anuncio->quilometragem}} km <br>
                                <i class="fa fa-circle" aria-hidden="true"></i> Combustível: {{$anuncio->combustivel}}
                            </li>
                        </ul>
                        <ul>
                            <li>Preço: {{$anuncio->preco}} <i class="fa fa-euro" aria-hidden="true"></i> </li>
                        </ul>
                        @foreach(App\Http\Controllers\UtilizadoresController::findUserById($anuncio->id_utilizador) as $utilizador)
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <p> {{$utilizador->tipovendedor}} </p>
                                <li> {{$utilizador->nome}} {{$utilizador->apelido}} <a target="_blank" href="/storage/app/{{$utilizador->foto_perfil}}"><img src="/storage/app/{{$utilizador->foto_perfil}}" class="rounded-circle z-depth-2" style="height: 70px;width: 70px;padding: 5px;margin-left: 40px;" ></a></li>
                            </ul>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <h6><i class="fa fa-map-marker" aria-hidden="true"></i>
                                Localização: </h6>
                            @foreach(App\Http\Controllers\FrequesiasController::findFregById($utilizador->id_freguesia) as $freguesia)
                            <li>{{$freguesia->nome}}, concelho de {{$freguesia->concelho}} </li>
                            @endforeach

                        </div>
                        <p></p>


                        @endforeach
                    </div>
                    <div class="car__details__sidebar__payment">
                        <h5><i class="fa fa-phone" aria-hidden="true"></i>
                            Telefone </h5>
                        <p><button class="primary-btn" id="myDIV" onclick="myFunction()" style="padding-top: 0px;padding-bottom: 0px;padding-left: 5px;padding-right: 5px;margin-top: 10px;">Mostrar</button></p>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 mix sale">


    </div>

    <div class="container-fluid">
        <div class="row" style="padding-left: 47px;">
            @foreach(App\Http\Controllers\AnunciosController::randomAdds($anuncio->id_anuncio) as $anuncio)
            <div class="col-lg-4 col-md-4">
                <div class="car__item">
                    <div class="car__item__pic ">
                        <img src="/storage/app/anunciosImg/{{$anuncio->id_utilizador}}/{{$anuncio->id_anuncio}}/{{$anuncio->foto_perfil}}" alt="" style="width:375px;height:200px;" class="center">
                    </div>
                    <div class="car__item__text">
                        <div class="car__item__text__inner">
                            <div class="label-date">{{ App\Http\Controllers\AnunciosController::getYear($anuncio->data_registo) }}</div>
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