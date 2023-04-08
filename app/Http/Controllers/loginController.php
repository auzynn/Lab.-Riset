<?php

namespace App\Http\Controllers;

use PharIo\Manifest\Email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index()
    {
        return view('login-page');
    }
    public function login(Request $request)
    {
        $request-> validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password   
        ];

        if(Auth::attempt($infologin)){
            //Jika otentikasi berhasil
            return view('home-page');
        }else{
            // Jika otentikasi gagal
            return 'Tidak berhasil login';
        }
    }   
}