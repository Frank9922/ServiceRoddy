<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        if(Auth::attempt($request))
        {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;
            $cookie = cookie('cookie_token', $token, 60 * 24);
            return response(["token" => $token], Response::HTTP_OK)->withoutCookie($cookie);
        }
        else {
            return response(Response::HTTP_UNAUTHORIZED);
        }
    }

    public function login(LoginUserRequest $request)
    {

    }

    public function user()
    {

    }

}
