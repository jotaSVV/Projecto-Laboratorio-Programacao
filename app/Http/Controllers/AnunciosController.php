<?php

namespace App\Http\Controllers;

use App\Models\anuncios;
use Illuminate\Http\Request;
use App\Models\modelos;
use App\Models\marcas;
use Auth;

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
            'quilometragem' => ['required', 'integer', 'max:3000000'],
            'potencia' => ['required', 'integer', 'max:1000'],
            'cilindrada' => ['required', 'integer', 'max:32767'],
            'retoma' => ['required', 'integer', 'max:1'],
            'financiamento' => ['required', 'integer', 'max:1'],
            'segmento' => ['required', 'string', 'max:20'],
            'metalizado' => ['required', 'integer', 'max:1'],
            'caixa' => ['required', 'integer', 'max:10'],
            'lotacao' => ['required', 'integer', 'max:9'],
            'portas' => ['required', 'integer', 'max:5'],
            'classe_veiculo' => ['required', 'string', 'max:50'],
            'garantia_stand' => ['required', 'integer', 'max:1'],
            'nr_registos' => ['required', 'integer', 'max:50'],
            'tracao' => ['required', 'string', 'max:10'],
            'livro_revisoes' => ['required', 'integer', 'max:1'],
            'seg_chave' => ['required', 'integer', 'max:1'],
            'jantes_liga_leve' => ['required', 'integer', 'max:1'],
            'estofos' => ['required', 'string', 'max:10'],
            'medida_jantes' => ['required', 'integer', 'max:50'],
            'airbags' => ['required', 'integer', 'max:1'],
            'ar_condicionado' => ['required', 'integer', 'max:1'],
            'importado' => ['required', 'integer', 'max:1'],
            'fotos' => ['required', 'string', 'max:60'],
        ]);

        list($lixo, $id_modelo) = explode("-", $request['id_modelo']);
        $request['id_modelo'] = $id_modelo;
        $request['id_utilizador'] = Auth::user()->id;
        $request['disponivel'] = 1;
        $request['foto_perfil'] = $request['fotos'];

        anuncios::create($request->all());
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
        $anuncios = anuncios::orderBy('created_at', 'desc')->where('id_utilizador','=',Auth::user()->id)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($anuncios);
    }

    public static function findAnunciosId()
    {
        $anuncios = anuncios::orderBy('created_at', 'desc')->where('id_utilizador','=',Auth::user()->id)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($anuncios);
    }


    
}
