<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    /* user added code */

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request){
        $validator = Validator::make( $request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if( $validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $token_validity = 24 * 60;

        $this->guard()->factory()->setTTL($token_validity);

        if( !$token = $this->guard()->attempt( $validator->validated()) ){
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

    }

    public function register(Request $request){

    }

    public function logout(Request $request){

    }

    public function profile(Request $request){

    }

    public function refresh(Request $request){

    }

    public function guard(Request $request){
        return Auth::guard();
    }

}
