<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'username' => 'Maaf, username atau password tidak ditemukan',
        ])->onlyInput('username');
    }

    public function register(Request $req) : RedirectResponse {
        User::create(
            [
                'nama_lengkap' => $req->nama_lengkap,
                'role' => $req->role,
                'username' => $req->username,
                'password' => Hash::make($req->password),
            ]
            );
        return redirect('/login')->with('pesan', 'silahkan login menggunakan username dan password yang telah di daftarkan');
    }
}
