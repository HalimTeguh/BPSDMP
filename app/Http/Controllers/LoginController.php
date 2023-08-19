<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('pages.login');
    }

    public function logout(){
        
        Auth::logout();

        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        // foreach($user as $value){
        //     if(($request->username == $value->username) && $request->password == $value->password){
        //         $_SESSION['username'] = $value->username;
        //         $_SESSION['password'] = $value->password;
        //         return redirect('/dashboard');
        //     }else{
        //         dd('false');
        //     }
        // }

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }

        return back()->with('loginError', "Login Gagal");
    }
}
