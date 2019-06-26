<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class filmeController extends Controller
{
    public function create(Request $request){
        if ($request ->isMethod('GET')){
            $todosFilmes = filme::all();
            return view('filme',["todosFilmes"=>$todosFilmes]);
        }
    }
    public function editar(Request $request,$id){
        if($request->isMethod('GET')){
            $filme = filme::find($id);
            return view('editarfilme',["filme"=>$filme]);
        }
        $filme = filme::find($id);
        $filme->titulo = $request->filmeTitulo;
        $resultado = $filme->save();
        return view('editarFilme',['resultado'=>$resultado,'filme'=>$filme]);
    }
}
