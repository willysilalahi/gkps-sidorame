<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewlogin(Request $request)
    {
        if ($request->has('src')) {
            return view('login');
        } else {
            if (Auth::check()) {
                return redirect('dashboard');
            } else {
                return view('login');
            }
        }
    }

    public function proccesslogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard_view');
        } else {
            return redirect()->route('login')->with('login_message', 'Login gagal. Periksa kembali username dan password anda');
        }
    }

    public function proccesslogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
