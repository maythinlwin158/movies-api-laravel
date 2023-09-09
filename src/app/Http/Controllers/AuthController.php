<?php

namespace App\Http\Controllers;

use App\Http\Repository\AuthorRepoInterface;
use App\Http\Repository\UserRepoInterface;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private UserRepoInterface $userRepo;

    public function __construct(UserRepoInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    public function register(RegisterRequest $request): JsonResponse
    {
        $password = Hash::make($request->password);

        $user = $this->userRepo->saveUser([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);

        $token = $user->createToken(config('name'))->accessToken;

        return response()->json([
            'token' => $token,
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'message' => 'Invalid Credentials.',
            ], Response::HTTP_UNAUTHORIZED));
        }

        $token = $request->user()->createToken(config('name'))->accessToken;

        return response()->json([
            'token' => $token,
            'status' => true,
            'message' => 'Login Successful'
        ]);
    }

    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logout Successful'
        ]);
    }
}
