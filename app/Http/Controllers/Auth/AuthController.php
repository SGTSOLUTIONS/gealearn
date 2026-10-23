<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // Register page
    public function showRegister()
    {
        return view('auth.register');
    }

    // Register user
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'student',
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return response()->json([
            'success' => true,
            'message' => 'Registration successful!',
            'redirect' => route('dashboard'),
        ], 201);
    }

    // Login user
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt(
            $validated,
            $request->boolean('remember')
        )) {
            throw ValidationException::withMessages([
                'email' => ['Invalid email or password.'],
            ]);
        }

        $request->session()->regenerate();

        return response()->json([
            'success' => true,
            'message' => 'Login successful!',
            'redirect' => route('dashboard'),
        ]);
    }

    // Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
