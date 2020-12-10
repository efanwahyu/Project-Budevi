<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function getRegister()
    {
        return view('auths.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|confirmed' // filed confirmation
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        // Alert::success('berhasil', 'Berhasil');
        return redirect('/login')->with('success_message', 'Silahkan Login! ');
    }



    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
