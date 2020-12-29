<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\utilizadores;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nome' => ['required', 'string', 'max:255'],
            'apelido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:utilizadores'],
            'telefone' => ['integer', 'min:9', 'unique:utilizadores'],
            'data_nascimento' => ['required', 'date'],
            'sexo' => ['required', 'string', 'max:1'],
            'tipovendedor' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'id_freguesia' => ['required', 'integer', 'max:3092'],
            'foto_perfil' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $request = request();
        $request->foto_perfil;
        //var_dump($request);

        $a = new utilizadores;
        $a->nome = $request->nome;
        //var_dump($request->nome);
        $a->apelido = $request->apelido;
        $a->email = $request->email;
        $a->telefone = $request->telefone;
        $a->data_nascimento = $request->data_nascimento;
        $a->sexo = $request->sexo;
        $a->tipovendedor = $request->tipovendedor;
        $a->password = $request->password;
        $a->id_freguesia = $request->id_freguesia;
        $a->admin = 0;
        $a->foto_perfil = "teste";
        $a->save();

        $dir = "utilizadoresImg";
        //var_dump($a);
        Storage::makeDirectory($dir . "/"  . $a['id']);
        $name = Storage::putFile($dir . "/" . $a['id'], $request->foto_perfil);
        $a->foto_perfil = $name;
        $a->save();

        return $a;

    }
}