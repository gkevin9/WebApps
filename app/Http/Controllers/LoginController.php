<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    public function login(){
 
    	return view('login');
 
    }
 
     public function proses(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $usercek = User::where('email', $email)->first(); 
        
        if($usercek){
            if($usercek->password==$password){
                $request->session()->put('email',$email);
                
                return view('index');
            }else{
                return "Password Salah";
            }
        }else{
            return "Username salah";
        }
        
    }

}
