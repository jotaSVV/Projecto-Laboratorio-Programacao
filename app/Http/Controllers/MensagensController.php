<?php

namespace App\Http\Controllers;

use App\Models\mensagens;
use App\Models\anuncios;
use Illuminate\Http\Request;
use Auth;


class MensagensController extends Controller
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
        //
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
            'texto' => ['required', 'string', 'max:255'],
            'id_recetor' => ['required', 'int', 'max:255'],
        ]);
        
        $data = $request ->all();
        $data['id_emissor'] = Auth::user()->id;
        $data['id_recetor'] = $data['id_recetor'];
        $data['data'] = "2020/10/10";
        $data['fotos'] = "tste";
        $data['visto'] = 1;
        
        
        mensagens::create($data);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function show(mensagens $mensagens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function edit(mensagens $mensagens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mensagens $mensagens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mensagens  $mensagens
     * @return \Illuminate\Http\Response
     */
    public function destroy(mensagens $mensagens)
    {
        //
    }
}
