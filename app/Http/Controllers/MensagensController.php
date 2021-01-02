<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\mensagens;
use App\Models\anuncios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'id_anuncio' => ['required', 'int', 'max:255'],
        ]);
        
        $data = $request ->all();
        $data['id_emissor'] = Auth::user()->id;
        $data['id_recetor'] = $data['id_recetor'];
        $data['id_anuncio'] = $data['id_anuncio'];
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
    public function show(mensagens $mensagem)
    {
        $mensagem = mensagens::findOrFail($mensagem->id_mensagem);
        return view('Utilizadores.utilizadorConversa', [
            'mensagem' => $mensagem,
        ]);
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

    public static function findMensagemId()
    {   
       // $mensagem = mensagens::findOrFail(Auth::user()->id);
        ///o id que recebe como argumento é o id que é para excluir.
        $mensagem = mensagens::max('id_anuncio');
        for($i=1;$i<=$mensagem;$i++){
            $arr[$i] = DB::table('mensagens')
            ->select()
            ->where('id_anuncio','=',$i)
            ->where('id_recetor', '=' , Auth::user()->id)
            ->where('id_recetor','!=',DB::raw('id_emissor'))
            ->limit(1)
            ->get();

        }
        $mensagens= collect($arr);
        //$mensagens = collect($arr);
        // $mensagens = DB::table('mensagens')
        //     ->where('id_recetor','=',Auth::user()->id)
        //     ->where('id_recetor','!=',DB::raw('id_emissor'))
        //     ->where('id_anuncio','=',[$mensagem->id_anuncio])
        //     ->distinct()
        //     ->get();
        //mensagens::inRandomOrder()->where('id_anuncio', '!=', $id)->limit(3)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($mensagens);
    }

    public static function countConversas($id)
    {   
       // $mensagem = mensagens::findOrFail(Auth::user()->id);
        ///o id que recebe como argumento é o id que é para excluir.
        
        
        $mensagens = DB::table('mensagens')
            ->select()
            ->where('id_anuncio','=',$id)
            ->where('id_recetor', '=' , Auth::user()->id)
            ->where('id_recetor','!=',DB::raw('id_emissor'))
            ->count();
            
  
        
        
        //$mensagens = collect($arr);
        // $mensagens = DB::table('mensagens')
        //     ->where('id_recetor','=',Auth::user()->id)
        //     ->where('id_recetor','!=',DB::raw('id_emissor'))
        //     ->where('id_anuncio','=',[$mensagem->id_anuncio])
        //     ->distinct()
        //     ->get();
        //mensagens::inRandomOrder()->where('id_anuncio', '!=', $id)->limit(3)->get();
        //$anuncios = anuncios::orderBy('id_utilizador', 'asc')->get();
        return ($mensagens);
    }

    public static function findMensagensConversa($id)
    {   
        //vai buscar a 1º mensagem
        $mensagem = mensagens::findOrFail($id);
        //carrega todas as mensagens da conversa com base na 1º mensagem
        


            
            $conversa = DB::table('mensagens')
            ->whereIn('id_recetor',[$mensagem->id_recetor,$mensagem->id_emissor])
            ->whereIn('id_emissor',[$mensagem->id_recetor,$mensagem->id_emissor])
            ->where('id_anuncio','=',[$mensagem->id_anuncio])
            ->where('id_recetor','!=',DB::raw('id_emissor'))
            ->get();
            

        return ($conversa);
    }

   
}
