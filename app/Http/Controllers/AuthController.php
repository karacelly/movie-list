<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    public function showLoginPage(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $email = $request->email;
        $password = $request->password;

        $rememberToken = $request->has('remember_token') ? true : false;



        if ($request->remember_token) {
            Cookie::queue('cookie_email', $email, 5);
            Cookie::queue('cookie_pass', $password, 5);
        } else {
            Cookie::queue('cookie_email', $email, -1);
            Cookie::queue('cookie_pass', $password, -1);
        }


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $rememberToken)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'login complete');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
