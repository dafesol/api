<?php

namespace App\Api\Auth\Controllers;

use App\Api\Auth\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function login(Request $request): JsonResponse
    {
        $credentials = request([User::EMAIL, User::PASSWORD]);
        if (!Auth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $user = User::where(User::EMAIL, $request->{User::EMAIL})->first();

        $token = $user->createToken('authToken')->plainTextToken;
        $token = [
            'token' => $token,
        ];

        return response()->json(array_merge($token));
    }


    public function me(Request $request): JsonResponse
    {
        return response()->json($request->user());
    }
}
