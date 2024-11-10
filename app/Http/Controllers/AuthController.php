<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'ok' => false,
                'message' => 'Invalid credentials'
            ], 401);
        }

        return response()->json([
            'token' => $token, 
            'role' => auth()->user()->role
        ]);
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}
