<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'firstName' => 'required|min:3|max:255',
            'lastName' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => 'required|same:password'
        ]);

        $isActive = null;

        if ($request->role == 0) {
            $isActive = true;
        } else {
            $isActive = false;
        };

        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'isActive' => $isActive,
        ]);

        return response()->json([
            'message' => 'Register success',
            'status'  => 200,
            'data' => $request->all()
        ]);
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:255'
        ]);

        $user = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'Login success',
                'status'  => 200,
                'data' => $user
            ], 200);
        } else {
            return response()->json([
                'errors' => [
                    'email' => [
                        "The provided credentials do not match our records"
                    ]
                ]
            ], 422);
        }
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
