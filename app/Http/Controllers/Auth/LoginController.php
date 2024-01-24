<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email or password is incorrect',
        ]);
    }
}
