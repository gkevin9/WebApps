<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    public function login(){
        session()->forget('status_order');
        session()->forget('order');
        session()->forget('order_name');
        session()->forget('order_qty');
    	return view('login');
 
    }
 
     public function proses(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $usercek = User::where('email', $email)->first(); 
        
        
        if($usercek){
            if($usercek->password==$password){
                $request->session()->put('email',$email);
                
                return redirect('/');
            }else{
                return "Password Salah";
            }
        }else{
            return "Username salah";
        }
        
    }

    public function logout(Request $request) {
        $request->session()->forget('email');
        
        
        return redirect('/');
    }

}
