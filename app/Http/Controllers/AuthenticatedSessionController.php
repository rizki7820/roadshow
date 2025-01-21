<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Redirect;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'name'           => 'required|int|min:5|unique:akuns,nip',
            'email'          => 'required|string|max:255',
            'username'       => 'required|int|min:10|unique:akuns,no_telfon',
            'level'          => 'required|string',
            'passoword'      => 'required|mimes:jpg,png',
        ]);
    
        User::create([
            'name'           => $request->name,
            'email'          => $request->email,
            'username'       => $request->username,
            'level'          => $request->level,
            'password'       => $request->password,
        ]);
    
        return redirect()->route('akun.create')->with('success', 'Data akun anda berhasil disimpan');
    
    }
}
