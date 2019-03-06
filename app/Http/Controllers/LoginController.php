<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
    	return view('pages/login/index');
    }

    public function daftar()
    {
        return view('pages/login/daftar');
    }

    public function proses_daftar(Request $request)
    {
        $data = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/')->with('berhasil', 'Akun Berhasil DiBuat');
    }

    function validasi(Request $request)
    {
    	if(Auth::attempt($request->only('email', 'password'))){

    		return redirect('/home');
    	}
    	
    	return redirect('/')->with('error', 'Email atau Password anda salah!');
    }

    function logout()
    {
    	Auth::logout();

    	return redirect('/');
    }
}
