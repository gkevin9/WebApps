<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register(){
 
    	return view('register');
 
    }

    public function store(Request $request){
        $this->validate($request,[
    		'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required|numeric'
        ]);
        
        $email = $request->input('email');
        $nama = $request->input('nama');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $usercek = User::where('email', $email)->first(); 
        
        
        if(!$usercek){
            User::create([
                'name' => $nama,
                'email' => $email,
                'password' => $password,
                'phone_number' => $phone
            ]);
            $userid = User::where('email', $email)->value('id');
            $request->session()->put('email',$email);
            session()->put('id',$userid);
            return redirect('/');
        }else{
            return redirect()->back()->with('alert', 'Email yang anda masukkan sudah terdaftar');
        }
    }
}