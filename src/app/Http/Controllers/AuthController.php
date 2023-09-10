<?php

namespace App\Http\Controllers;

use App\Http\Repository\UserRepoInterface;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * @group Authentication
 *
 * APIs for managing authentication.
 */
class AuthController extends Controller
{
    private UserRepoInterface $userRepo;

    public function __construct(UserRepoInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * Register a new user
     *
     * @bodyParam name string required The name of the user.
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     *
     * @return JsonResponse
     * @response {"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDIwZmI3MzFjZTMwNzA3MzgzZmFhYzU2NzljZTA0YjQ0YTIxMWU0ZWJiMzVkZmIxYzA1OTFhN2I5MWQzNzNmNDgxNjlhYmUzYjk3Njg1YjEiLCJpYXQiOjE2OTQzNDQ4MjcuNjA1ODcsIm5iZiI6MTY5NDM0NDgyNy42MDU4NzUsImV4cCI6MTcyNTk2NzIyNy41OTgwMDksInN1YiI6IjQiLCJzY29wZXMiOltdfQ.SA-Ys8yuuBeANz-qAC0sWQNxQoFWlVjJ1rDTr8XwSXUQJFh_fFOHlBifwDUY1DYv80oQ-Gko3Vb-fBDdWECmff3ValnusUkIS1d-GkKfViywWA515NHWlqvpazytZf1ziUiT3IvjOTEAl0CYD0IEGHS_vlRgpRLyao7Fa4niqBxp28etI08rTh8Uo-9c-5PL0kp94hj2ifbz9gF8RASQtRnbFWKAOJ_ncHoc8znYk8-oEbBsWtK0sqSdj7uTOSdS-fbKwVvihe4bIzMQHAr0JQ6R2-6_CGK4diR1BK28Ul2bkur6TvuCkF2xwGlB9OQ09ioXZS9XQtduVymwaugsYMSNBZUwoifjzBEepiOuxyAy2n_NWR4XERnjo_Amhwnm_mpWzhXUC0vDbDegCPthankB0By8h9JlEqUt3PimiEYW5fDP6jyDLqD_gOtiTGTlAtTBXLxt9MStMl37Xk-PlODaOMqvPqrk7gEspr2JnRBKb8YDIb7LN7fuIRFBf7Rj7OO3eW9TPwheJS5D6NtZvW8gGzH7qDeaEsgDFKgoFYqahqhqYbojkUmTncx_ywXWMDTWord_V8GyzEa8zwv0KR5a92MGwwisOjg-9z6qHqhoJxh4yM5EYijyVaYcYSkENHz0nJ3L7HhKDXFovZVtmNIgmaLhSvXU4qIEEyX8Vvs","status":true,"message":"success"}
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $password = Hash::make($request->password);

        $user = $this->userRepo->saveUser([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);

        $token = $user->createToken(config('app.name'))->accessToken;

        return response()->json([
            'token' => $token,
            'status' => true,
            'message' => 'Registration successful'
        ]);
    }

    /**
     * Login a user
     *
     * @bodyParam email string required The email of the user.
     * @bodyParam password string required The password of the user.
     *
     * @return JsonResponse
     * @response {"token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiM2JhNDJmM2JlMzQ2MmE3NGFjYWUyMzkwYjIxNzRjNzIwYThmNjRlM2NmNGE5ZWM3ODhkYTRlYTYyZWM2ZDkzZTQ1MzBjNjA5YWM1NWYwZGMiLCJpYXQiOjE2OTQzNTU5MjYuMTA5MjY1LCJuYmYiOjE2OTQzNTU5MjYuMTA5MjY5LCJleHAiOjE3MjU5NzgzMjYuMTAxMTczLCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.LoXcohMEvQCS40IJ9NjWezb9dHKNCQ6I5I_zZ4QRd74ul1aYZFz3lJ01XnSx5zAwhwyg1W4YTetni3SmyqcxIs56A5hJnwcah7x3R0qL-9LYGSeQ_h4y2TnL4zcwNeyAcyarB-pRaTXCR5bwliWETfTB_VYM5EFXlYpJPGUGwv5K6L-x1VDSdvPp6a-wzO4FZOzUaSDCuxacgzfQNxZn35QeGpUnpGGpIbYs1Y9l0acHszB1dgm9G8IieqB6zcHKTVC7Yf9qfaNcCdIin1RrcAjLofgPM0GLrVPpSNRs6IF943FTZMezVzLC8iq55fgrvYfGFg7542zhiY2DH5zGUgttVwbpOJnZNPkqn42MPT0G3F7HGMi1pNcQ-agc9s3Fm3cdhIw6H-U2DZZjDXXOohhf4BlvFv1l-DLKoA3DzcQlV912LiILZVsVWz41sCOXaAG3W-hlkCxtS9DdI26P7TzaGzYfENNeo4yqSKjKIJF_tnDetnZrZJfgNHXkY_AHEO3-hhxJY1DXBFckIZWAnXZd_ws7XBSW5sBbNxOc0RhoSFM6F3t4-TUQ8qIRTRBOkJIw0XvhHCvHkQqOoYRPePeLWzzar-5qpXJZbKfymzB9vmiIKZ9ONgaDkK6qCpc18hRYCpMUg4kRS6Egs1y0lcAk7jU9mD6pUjpTKI9w-nk","status":true,"message":"Login Successful"}
     */
    public function login(LoginRequest $request): JsonResponse
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            throw new HttpResponseException(response()->json([
                'success' => false,
                'message' => 'Invalid Credentials.',
            ], Response::HTTP_UNAUTHORIZED));
        }

        $token = $request->user()->createToken(config('app.name'))->accessToken;

        return response()->json([
            'token' => $token,
            'status' => true,
            'message' => 'Login Successful'
        ]);
    }


    /**
     * Logout a user
     *
     * @return JsonResponse
     * @response {"status":true,"message":"Logout Successful"}
     * @authenticated
     */
    public function logout(): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'message' => 'Logout Successful'
        ]);
    }
}
