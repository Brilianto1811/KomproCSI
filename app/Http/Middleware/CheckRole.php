<?php

// app/Http/Middleware/CheckRole.php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Memastikan user sudah login dan memiliki role yang sesuai
        if (Auth::check() && Auth::user()->id_role == $role) {
            return $next($request);
        }

        // Jika tidak sesuai, redirect kembali dengan pesan error
        return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke menu ini!');
    }
}
