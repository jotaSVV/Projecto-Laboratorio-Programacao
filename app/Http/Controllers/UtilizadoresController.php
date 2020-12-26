<?php

namespace App\Http\Controllers;

use App\Models\utilizadores;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function show(utilizadores $utilizadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function edit(utilizadores $utilizadores)
    {
        return view('Utilizadores.utilizadorDash', ['utilizadores' => $utilizadores]);
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
        //$utilizadores = Auth::user();
        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'apelido' => ['required', 'string', 'max:255'],
            
            'data_nascimento' => ['required', 'date'],
            'sexo' => ['required', 'string', 'max:1'],
            'tipovendedor' => ['required', 'string', 'max:15'],
            
            'id_freguesia' => ['required', 'integer', 'max:10'],
            'foto_perfil' => ['required', 'string', 'max:255'],
        ]);

        $utilizadores->update($request->all());

        return redirect('/dashboard')->with('success', 'Dados alterados com sucesso!');;    
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function updateemail(Request $request, utilizadores $utilizadores)
    {   
        //$utilizadores = Auth::user();
        $request->validate([
            'oldemail' => ['required', 'string', 'max:255'],
            'nvemail' => ['required', 'string', 'max:255'],
            'nvemailc' => ['required', 'string', 'max:255'],
        ]);
        
        ///Se o email antigo for corretamente inserido
        if(strcmp($request['oldemail'],Auth::user()->email)==0){
            //Se os emails dos outros dois campos forem iguais
            if(strcmp($request['nvemail'],$request['nvemailc'])==0){
                
             $utilizadores->email = $request->nvemail;
             
                 $utilizadores->save();
               

                return redirect('/dashboard')->with('success', 'Email alterado com sucesso!');  
            }else {
                return redirect('/dashboard')->with('danger', 'Novo email e confirmação não são iguais!');
            }
        } else {
            return redirect('/dashboard')->with('danger', 'Email antigo errado!');
        }    
   
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\utilizadores  $utilizadores
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request, utilizadores $utilizadores)
    {   
        //$utilizadores = Auth::user();
        $request->validate([
            'oldpass' => ['required', 'string', 'max:255'],
            'nvpass' => ['required', 'string', 'max:255'],
            'nvpassc' => ['required', 'string', 'max:255'],
        ]);
        
            /// se as passwords derem match , testamos o novo campo
        if (Hash::check($request['oldpass'], Auth::user()->password))
{   //se tudo estiver certo no novo campo, alteramos
    if(strcmp($request['nvpass'],$request['nvpassc'])==0){
        $newpassword = Hash::make($request->nvpass);
        $utilizadores->password = $newpassword;
             
        $utilizadores->save();
        return redirect('/dashboard')->with('success', 'Password alterada com sucesso!');
    }else {
        return redirect('/dashboard')->with('danger', 'As novas passwords nao coincidem!');
    }
}else {
    
    return redirect('/dashboard')->with('danger', 'Password antiga incorreta!');
}

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