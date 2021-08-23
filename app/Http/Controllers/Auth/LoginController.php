<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function authenticate(Request $request){
        // Inputan yg diambil
        $credentials = $request->only('nim', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login

            return redirect('dashboard');

            //return redirect()->intended('/details');
        }
        // Jika Gagal
        return redirect('login');
    }
}
