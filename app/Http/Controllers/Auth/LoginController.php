<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // You can use Auth::user() instead of fetching the user again
            $token = $user->createToken('API Token')->plainTextToken; // Simpler token creation

            return $this->sendResponse([
                'token' => $token,
                'user' => $user,
            ], 'Login successfully');
        }

        return $this->sendError([
            'message' => 'The given data was invalid.',
            'errors' => ['email' => ['The provided credentials do not match our records']]
        ], 422);

    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->sendResponse([], 'Logged out successfully');
    }
}
