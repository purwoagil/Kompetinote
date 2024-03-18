<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view("login.index");
    }

    public function authenticate(Request $request){
        $credentials = $request-> validate([
            "email"=> "required|email:dns",
            "password"=> "required"
        ]);

        if (Auth::attempt($credentials)){
            $request ->session()->regenerate();
            return redirect()->intended('/beranda');
        }

        return back()->with('loginError','Login failed!');
           
    }

    public function tentang(){
        return view("login.tentang");
    }

    public function daftar(){
        return view("login.daftar");
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'Nama' => 'required|max:255',
            'password' => 'required|string|max:255',
            'EmailOff' => 'required|email|max:255',
            'email' => 'required|email|max:255',
            'No_hp' => 'required|string|max:30',
            'Fakultas' => 'required|string|max:100',
            'Prodi' => 'required|string|max:100',
            'Angkatan' => 'required|string|max:100',
            'NIM' => 'required|string|max:8',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        return redirect('/')->with('success', 'Registration successful! Please login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect("/");
    }

}
