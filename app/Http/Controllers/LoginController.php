<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm(){
        return view("auth.login");
    }

    public function showDashboard(){
        return view('auth.dashboard');
    }

    public function Login(){

        $attr = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::whereEmail(request('email'))->first();

        if (Auth::attempt($attr)){
            Auth::login($user);
            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Email / Password Salah!')->withInput();

        }
    }
}
