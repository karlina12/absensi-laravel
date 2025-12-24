<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            switch (auth()->user()->role) {
                case 'admin':
                    return redirect()->intended('/admin/dashboard');
                case 'karyawan':
                    return redirect()->intended('/karyawan/dashboard');
                case 'manajer':
                    return redirect()->intended('/manajer/dashboard');
                default:
                    Auth::logout();
                    return redirect('/')->withErrors([
                        'role' => 'Role tidak dikenali'
                    ]);
            }
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
