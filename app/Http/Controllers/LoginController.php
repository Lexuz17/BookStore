<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{

    public function redirectLogin(){
        return view('login');
    }

    public function login(Request $request){
        $remember_me = $request->remember_me;
        $email = $request->email;
        $password = $request-> password;

        if($remember_me){
            Cookie::queue('email',$email,60);
            Cookie::queue('password',$password,60);
        }else{
            Cookie::queue('email','',-1);
            Cookie::queue('password','',-1);
        }

        $valid1 = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($valid1)){
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }

        return back()->with('loginError', 'invalid login credentials');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }

}
