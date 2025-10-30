<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

    public function login(Request $request)
    {
        if(Auth::attempt($request->all())){
            $user = auth()->user();
            $accessToken = $user->createToken('authToken')->plainTextToken;
            $userData["user"] = $user;
            $userData["token"] = $accessToken;
            return response(['message'=> 'Authentification réussi','userData' => $userData,'authTest'=>true]);
        }else{
            return response(['message'=> 'Authentification non réussi','authTest'=>false]);
        }

    }

}
