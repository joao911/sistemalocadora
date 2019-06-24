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
}
