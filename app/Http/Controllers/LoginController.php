<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function showLoginForm(){
        return view("auth.login");
    }

    public function showDashboard(){
        return view('auth.dashboard');
    }

    public function deleteData(Request $request){
        try {
            DB::table('forms')->where('id', '=', $request->id)->delete();
            return back()->with('success', 'Berhasil Menghapus Formulir');
        } catch (Exception $e) {
            return abort(101, 'ada error bosku');
        }
    }

    public function Login(Request $request){

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
