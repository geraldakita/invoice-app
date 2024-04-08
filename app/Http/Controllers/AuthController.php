<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function signUpScreen()
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            return redirect('/');
        }
        return view('signup');
    }
    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Optionally log the user in after registration
        Auth::login($user);

        // Redirect to a specific route or view
        return redirect()->route('dashboard');
    }

    public function loginScreen()
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            return redirect('/');
        }
        return view('login');
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $remember = $request->has('remember-me');

        if (Auth::attempt($validatedData, $remember)) {
            $request->session()->regenerate();

            // Redirect the user to the intended page or a default page
            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session to prevent the "back" button from causing issues after logout
        $request->session()->invalidate();

        // Generate a new session token for security purposes
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
