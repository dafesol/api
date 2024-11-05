<?php

namespace App\Api\Auth\Controllers;

use App\Api\Auth\Requests\LoginRequest;
use App\Api\Auth\Resources\UserResource;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Sanctum;

class LoginController extends Controller
{
    public function login(LoginRequest $request): JsonResponse
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

    public function logout(Request $request): Response
    {

        if ($token = $request->bearerToken()) {
            $model = Sanctum::$personalAccessTokenModel;
            $accessToken = $model::findToken($token);
            $accessToken->delete();
        }

        return response()->noContent();
    }


    public function me(Request $request): UserResource
    {
        return new UserResource($request->user());
    }
}
