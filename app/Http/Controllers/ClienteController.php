<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller {
    public function __construct(){
        $this->middleware('auth:api', [
           'except' => ['cadastrarCliente']
        ]);
    }

    public function cadastrarCliente(Request $request){

    }

    public function listarClientess(Request $request){

    }

    public function mostrarCliente(Request $request){
        echo 'ok';
    }

    public function cadastrarCompromisso(Request $request){

    }

    public function listarCompromissos(Request $request){

    }

    public function mostrarCompromisso(Request $request){

    }

    public function cadastrarFavorito(Request $request){

    }

    public function listarFavoritos(Request $request){

    }

    public function mostrarFavorito(Request $request){

    }


    public function cadastrarAvaliacao(Request $request){

    }

    public function listarAvaliacoes(Request $request){

    }

    public function mostrarAvaliacao(Request $request){

    }


    public function cadastrarDepoimento(Request $request){

    }

    public function listarDepoimentos(Request $request){

    }

    public function mostrarDepoimento(Request $request){

    }
}
