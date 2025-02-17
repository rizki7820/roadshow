<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthenticatedSessionController extends Controller
{
    /**
     * Menampilkan halaman login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Menangani proses login.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string', 
            'password' => 'required|string',
        ]);

        $user = User::where('username', $request->username)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['username' => 'Akun belum terdaftar. Silakan daftar terlebih dahulu.']);
        }

        if (Auth::attempt($request->only('username', 'password'))) {
            $request->session()->regenerate(); 

            session()->flash('success', 'Login berhasil! Selamat datang di Dashboard.');
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['password' => 'Password salah.']);
        }
    }

    /**
     * Logout dan hapus sesi.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login'); // Redirect ke halaman login setelah logout
    }
    /**
     * Handle user registration.
     */
    public function daftar(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|min:5|unique:users,name',
            'birth_date' => 'required|date',
            'username'   => 'required|string|min:5|unique:users,username',
            'password'   => [
                'required',
                'string',
                'min:6',
                'confirmed',
                'regex:/[A-Z]/' // Minimal satu huruf besar
            ],
        ], [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf besar.',
        ]);

        $user = User::create([
            'name'       => $request->name,
            'birth_date' => $request->birth_date,
            'username'   => $request->username,
            'level'   => "user",
            'password'   => Hash::make($request->password),
        ]);

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'Registrasi gagal, coba lagi.']);
        }

        return redirect()->route('login')->with('success', 'Akun berhasil dibuat, silakan login.');
    }

    public function logout(Request $request)
{
    // Melakukan logout
    Auth::logout();

    // Menutup sesi dan mengalihkan ke halaman login
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login'); // Atau sesuaikan dengan rute yang sesuai
}
    
}
