<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            return $this->responseWithToken($token)->header('Authorization', $token);
        }
        return response()->json([
            'message' => 'Invalid Email or Password'
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function logout(): JsonResponse
    {
        $this->guard()->logout();
        return response()->json([], Response::HTTP_OK);
    }

    public function user(): JsonResponse
    {
        return response()->json([
            'data' => auth()->user()
        ],Response::HTTP_OK);
    }

    public function refresh(): JsonResponse
    {
        if ($token = $this->guard()->refresh()) {
            return response()
                ->json(['status' => 'success'], Response::HTTP_OK)
                ->header('Authorization', $token);
        }
        return response()->json([
            'error' => 'refresh_token_error'
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    private function guard()
    {
        return Auth::guard('api');
    }

    protected function responseWithToken($token): JsonResponse
    {
        return response()->json([
            'user' => $this->guard()->user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $this->guard()->factory()->getTTL() * 6000000
        ],Response::HTTP_OK);
    }
}
