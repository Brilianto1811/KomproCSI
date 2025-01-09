<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email_user' => 'required|email',
            'password' => 'required',
        ]);

        // Gunakan credentials dengan kolom yang sesuai
        $credentials = [
            'email_user' => $request->email_user,
            'password' => $request->password,
        ];


        // Coba autentikasi
        if (Auth::attempt($credentials)) {
            // Ambil data user yang berhasil login
            $user = Auth::user();

            // Simpan data penting ke sesi
            session([
                'id_user' => $user->id_user,
                'nama_user' => $user->nama_user,
                'id_role' => $user->id_role,
            ]);

            // dd($user);
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email_user' => 'Email atau password salah.',
        ]);
    }

    public function logout()
    {
        Auth::logout(); // Logout user
        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
}
