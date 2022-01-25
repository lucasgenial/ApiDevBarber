<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
    public function __construct(){
        $this->middleware('auth:api', [
           'except' => ['loginUsuario']
        ]);
    }

    public function loginUsuario(Request $request){

    }

    public function logoutUsuario(Request $request){

    }

    public function refreshlogin(Request $request){

    }

}
