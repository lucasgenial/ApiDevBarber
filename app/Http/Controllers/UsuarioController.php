<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller {

    public function __construct(){
        $this->middleware('auth:api', [
           'except' => ['cadastrarUsuario']
        ]);
    }

    public function cadastrarUsuario(Request $request){

    }

    public function listarUsuarios(Request $request){

    }

    public function mostrarUsuario(Request $request){

    }
}
