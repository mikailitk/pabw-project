<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email_user', 'password');

        if(Auth::attempt($credentials)){
            $user = $request->user();
            $token = $user->createToken('authToken')->plainTextToken;
            $user->api_token = $token;
            $user->save();

            return response()->json([
                'user' => $user,
                'token' => $token
            ]);
        } else {
            return response()->json([
                'error' => 'Unauthorized'
            ], 401);
        }
    }
}
