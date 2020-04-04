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
            'phone' => 'required'
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
            session()->put('id',$userid);
            $request->session()->put('email',$email);
                
            return redirect('/');
        }else{
            return "Email sudah ada";
        }
    }
}