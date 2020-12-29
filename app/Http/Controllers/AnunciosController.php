<?php

namespace App\Http\Controllers;

use App\Models\anuncios;
use Illuminate\Http\Request;
use App\Models\modelos;
use App\Models\marcas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'titulo' => ['required', 'string', 'max:90'],
            'descricao' => ['required', 'string', 'max:9000'],
            'id_marca' => ['required', 'integer', 'max:100'],
            'id_modelo' => ['required', 'string', 'max:100'], //*
            'preco' => ['required', 'integer', 'max:10000000'], //*
            'valor_fixo' => ['required', 'integer', 'max:1'], //* //*
            'data_registo' => ['required', 'date'], //validar
            'cor' => ['required', 'string', 'max:10'],
            'estado' => ['required', 'integer', 'max:1'], //*
            'versao' => ['required', 'string', 'max:60'], ///-----------
            'combustivel' => ['required', 'string', 'max:30'],
            'quilometragem' => ['required', 'integer', 'max:30000000'],
            'potencia' => ['required', 'integer', 'max:1000'],
            'cilindrada' => ['required', 'integer', 'max:32767'],
            'retoma' => ['required', 'integer', 'max:1'],
            'financiamento' => ['required', 'integer', 'max:1'],
            'segmento' => ['required', 'string', 'max:20'],
            'metalizado' => ['integer', 'max:1'],
            'caixa' => ['required', 'integer', 'max:10'],
            'lotacao' => ['required', 'integer', 'max:9'],
            'portas' => ['required', 'integer', 'max:5'],
            'classe_veiculo' => ['required', 'string', 'max:50'],
            'garantia_stand' => ['integer', 'max:1'],
            'nr_registos' => ['required', 'integer', 'max:50'],
            'tracao' => ['required', 'string', 'max:10'],
            'livro_revisoes' => ['integer', 'max:1'],
            'seg_chave' => ['integer', 'max:1'],
            'jantes_liga_leve' => ['integer', 'max:1'],
            'estofos' => ['required', 'string', 'max:10'],
            'medida_jantes' => ['required', 'integer', 'max:50'],
            'airbags' => ['integer', 'max:1'],
            'ar_condicionado' => ['integer', 'max:1'],
            'importado' => ['integer', 'max:1'],
            'fotos.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
        ]);

        list($lixo, $id_modelo) = explode("-", $request['id_modelo']);
        $request['id_modelo'] = $id_modelo;
        $request['id_utilizador'] = Auth::user()->id;
        $request['disponivel'] = 1;
        $data = $request->all();
        if (empty($data['garantia_stand'])) {
            $request['garantia_stand'] = 0;
        } else {
            $request['garantia_stand'] = 1;
        }
        if (empty($data['livro_revisoes'])) {
        } else
            $request['livro_revisoes'] = 0; {
            $request['livro_revisoes'] = 1;
        }
        if (empty($data['seg_chave'])) {
            $request['seg_chave'] = 0;
        } else {
            $request['seg_chave'] = 1;
        }
        if (empty($data['jantes_liga_leve'])) {
            $request['jantes_liga_leve'] = 0;
        } else {
            $request['jantes_liga_leve'] = 1;
        }
        if (empty($data['airbags'])) {
            $request['airbags'] = 0;
        } else {
            $request['airbags'] = 1;
        }
        if (empty($data['ar_condicionado'])) {
            $request['ar_condicionado'] = 0;
        } else {
            $request['ar_condicionado'] = 1;
        }
        if (empty($data['importado'])) {
            $request['importado'] = 0;
        } else {
            $request['importado'] = 1;
        }
        if (empty($data['metalizado'])) {
            $request['metalizado'] = 0;
        } else {
            $request['metalizado'] = 1;
        }

        

        if ($request->hasFile('fotos')) {

            $save = $request->fotos;
            $a = new anuncios;

            $a->titulo = $request->titulo;
            $a->id_utilizador = $request->id_utilizador;
            $a->disponivel = $request->disponivel;
            $a->foto_perfil = "teste";
            $a->descricao = $request->descricao;
            $a->id_marca = $request->id_marca;
            $a->id_modelo = $request->id_modelo;
            $a->preco = $request->preco;
            $a->valor_fixo = $request->valor_fixo;
            $a->data_registo = $request->data_registo;
            $a->cor = $request->cor;
            $a->estado = $request->estado;
            $a->versao = $request->versao;
            $a->combustivel = $request->combustivel;
            $a->quilometragem = $request->quilometragem;
            $a->potencia = $request->potencia;
            $a->cilindrada = $request->cilindrada;
            $a->retoma = $request->retoma;
            $a->financiamento = $request->financiamento;
            $a->segmento = $request->segmento;
            $a->metalizado = $request->metalizado;
            $a->caixa = $request->caixa;
            $a->lotacao = $request->lotacao;
            $a->portas = $request->portas;
            $a->classe_veiculo = $request->classe_veiculo;
            $a->garantia_stand = $request->garantia_stand;
            $a->nr_registos = $request->nr_registos;
            $a->tracao = $request->tracao;
            $a->livro_revisoes = $request->livro_revisoes;
            $a->seg_chave = $request->seg_chave;
            $a->jantes_liga_leve = $request->jantes_liga_leve;
            $a->estofos = $request->estofos;
            $a->medida_jantes = $request->medida_jantes;
            $a->airbags = $request->airbags;
            $a->ar_condicionado = $request->ar_condicionado;
            $a->importado = $request->importado;
            $a->fotos = "teste";
            //var_dump($a);
            $a->save();

            $dir = "anunciosImg";
            $scan = Storage::directories($dir);
            if (in_array("anunciosImg" . "/" . $a['id_utilizador'], $scan)) {
                Storage::makeDirectory("anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a->id_anuncio);
                $files = $save;
                foreach ($files as $pics) {
                    Storage::putFile("anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a['id_anuncio'], $pics);
                }
            } else {
                Storage::makeDirectory($dir . "/" . $a['id_utilizador']);
                Storage::makeDirectory("anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a->id_anuncio);
                $files = $save;
                foreach ($files as $pics) {
                    /*$fileName = $pics->getClientOriginalName();
                    $extension = $pics->getClientOriginalExtension();
                    $storeName = $fileName . '.' . $extension;
                    $pics->move("anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a->id_anuncio, $storeName);*/
                    Storage::putFile("anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a['id_anuncio'], $pics);
                }
            }

            $a['fotos'] = "anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a->id_anuncio;
            $files = scandir("storage/app/anunciosImg" . "/"  . $a['id_utilizador'] . "/" . $a->id_anuncio);
            //var_dump($files);
            $name = $files[2];
            $a['foto_perfil'] = $name;
            $a->save();
        }
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anuncios  $anuncios
     * @return \Illuminate\Http\Response
     */
    public function show(anuncios $anuncio)
    {
        $anuncio = anuncios::findOrFail($anuncio->id_anuncio);
        return view('Anuncios.detalhesanuncio', [
            'anuncio' => $anuncio,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anuncios  $anuncios
     * @return \Illuminate\Http\Response
     */
    public function edit(anuncios $anuncios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anuncios  $anuncios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anuncios $anuncios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anuncios  $anuncios
     * @return \Illuminate\Http\Response
     */
    public function destroy(anuncios $anuncios)
    {
        //
    }


    public static function findMarcas()
    {

        $marcas = marcas::orderBy('nome', 'asc')->get(); //get data from table
        return ($marcas);
    }
    public static function  findModelos()
    {

        $modelos = modelos::orderBy('nome', 'asc')->get(); //get data from table
        //dd($distrito);
        //return view('findDistritos'); //sent data to view
        //return view('register'); //sent data to view~
        return ($modelos);
    }

    public static function findAnunciosId()
    {
        $anuncios = anuncios::orderBy('created_at', 'desc')->where('id_anuncio', '=', Auth::user()->id)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($anuncios);
    }

    public static function findAnunciosById($id)
    {
        $anuncios = anuncios::orderBy('created_at', 'desc')->where('id_utilizador', '=', $id)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($anuncios);
    }

    public static function randomAdds($id)
    {   
        ///o id que recebe como argumento é o id que é para excluir.

        $anuncios = anuncios::inRandomOrder()->where('id_anuncio', '!=', $id)->limit(3)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($anuncios);
    }
}
