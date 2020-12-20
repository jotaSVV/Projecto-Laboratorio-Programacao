<?php

namespace App\Http\Controllers;

use App\Models\utilizadores;
use Illuminate\Http\Request;

class UtilizadoresController extends Controller
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
        return view("users.create");
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
            'nome' => 'required',
            'apelido' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'tipovendedor' => 'required',
            'admin' => 'required',
            'password' => 'required',
            'id_freguesia' => 'required',
            'foto_perfil' => 'required',
        ]);

        utilizadores::create($request->all());

        return redirect('/register')->with('success', 'User created successfully.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function show(utilizadores $utilizadores)
    {
        return view('user.index', ['user' => $utilizadores]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function edit(utilizadores $utilizadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, utilizadores $utilizadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(utilizadores $utilizadores)
    {
        //
    }
}
