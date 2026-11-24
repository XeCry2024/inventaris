<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $req)
    {
        Auth::logout();

        // hapus sesi lama dan buat token CSRF baru
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }
}
