<?php

namespace App\Http\Controllers;
use App\Masyarakat;
use Illuminate\Http\Request;
//use JWTAuth
use Tymon\JWTAuth\Facades\JWTAuth;

class AksesController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        dd('Login OK');
    }

    public function registrasi(){
        return view('registrasi');
    }

    public function postRegis(Request $request){

        $this->validate($request, [
            'nik' => 'required|unique:masyarakat|max:16',
            'nama' => 'required|max:35',
            'username' => 'required|unique:masyarakat|max:25',
            'password' => 'required|confirmed|min:8|max:32',
            'telp' => 'required|max:13'
        ]);

        Masyarakat::create([
            'nik' => $request ->nik,
            'nama' => $request ->nama,
            'username'=> $request ->username,
            'password'=> bcrypt($request->password),
            'telp'=> $request ->telp
        ]);

        return redirect()->back();
       // dd('Registrasi OK');
    }
}
