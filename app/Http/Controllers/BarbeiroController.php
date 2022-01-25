<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BarbeiroController extends Controller {
    public function __construct(){
        $this->middleware('auth:api', [
           'except' => ['cadastarBarbeiro']
        ]);
    }

    public function cadastarBarbeiro(Request $request){

    }

    public function listaBarbeiros(Request $request){

    }

    public function mostrarBarbeiro(Request $request){

    }

    public function listarDisponibilidades(Request $request){

    }

    public function mostrarDisponibilidade(Request $request){

    }
}
