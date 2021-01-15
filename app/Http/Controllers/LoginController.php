<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Model\User;
use Hash;
use Auth;

class LoginController{
    public function register(Request $request){
        $user = new User;

        $cek = $user->where('phone', $request->phone)->orWhere('email', $request->email)->first();
        if($cek){
            return redirect()->back()->withInput()->withErrors(['Jangan gunakan no. telpon atau email yang sama']);
        }else{
            $user->email = $request->email;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role = 2;
            $user->save();
            return redirect('/');
        }
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }else{
            return redirect()->back()->withInput()->withErrors(['Email atau password salah']);
        }
    }
}