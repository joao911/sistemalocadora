<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;

class AtorController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosAtores = ator::all();
            return view('ator',["todosAtores"=>$todosAtores]);
        }
    }
    public function create(Request $request){
        if($request->isMethod('GET')){
            return view('cadastrarAtor');
        }
        $novoAtor = new Ator();
        $novoAtor->primeiro_nome = $request->primeiroNome;
        $novoAtor->ultimo_nome = $request->segundoNome;
        $novoAtor->ultima_atualizacao = date('y-m-d');
        $resultado =$novoAtor->save();
        return view('cadastrarAtor',["resultado"=> $resultado]);
    }
    public function ediar(Request $request, $id){
        if($request->isMethod('GET')){
            $ator = Ator::find($id);
            return view('editarAtor',["ator"=>$ator]);
        }
        $ator = Ator::find($request->ator_id);
        $ator->primeiro_nome = $request->primeiroNome;
        $ator->ultimo_nome = $request->segundoNome;
        $ator->save();
    }
}
