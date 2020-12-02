<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login/login');
    }

    public function register(){
        return view('login/register');
    }

    public function postLogin(Request $request){

        // dd('login ok');

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('home');
            return redirect('home');
        }

        // dd(Auth::attempt(['email'=>$request->email,'password'=>$request->password]));

        // if(!) {
        //     return redirect()->back();
        //     // return redirect('home');
        // }

        // return view('home');
    }

    public function postRegister(Request $request){

        $this->validate($request, [
            'name' => ['required','max:255'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->back();
        // return view('login/login');
    }

    public function logout(){
        Auth::logout();
        return view('welcome');
    }
}
