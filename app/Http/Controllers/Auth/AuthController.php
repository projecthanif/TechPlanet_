<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\StoreAuthRequest;

class AuthController extends Controller
{
    /**
     * Display a Login page for an existing User
     */
    public function index()
    {
        return view('auth.auth-login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Display a Register page for a  User
     */

    public function create()
    {
        return view('auth.auth-register');
    }

    public function store(StoreAuthRequest $request)
    {
        $validated = $request->validated();

        $userId = "#" . date('Ymd');
        $validated['user_id'] = $userId;
        $validated['password'] = Hash::make($request->password);

        $user = User::create($validated);
        Auth::login($user);

        return redirect('/')->with(['message' => 'Register Successfully and Loged in']);
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
}
