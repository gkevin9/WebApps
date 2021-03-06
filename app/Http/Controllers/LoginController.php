<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class LoginController extends Controller
{
    public function login(){
        session()->forget('status_order');
        session()->forget('order');
    	return view('login');
    }
 
     public function proses(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $usercek = User::where('email', $email)->first(); 
        $userid = User::where('email', $email)->value('id');
        
        
        if($usercek){
            if($usercek->password==$password){
                $request->session()->put('email',$email);
                session()->put('id',$userid);
                
                return redirect('/');
            }else{
                return redirect()->back()->with('alert', 'Password yang anda masukkan salah');
            }
        }else{
            return redirect()->back()->with('alert', 'Username yang anda masukkan tidak ditemukan');
        }
        
    }

    public function logout(Request $request) {
        $request->session()->forget('email');
        session()->forget('status_order');
        session()->forget('order');
        session()->forget('id');
        session()->forget('payment_active');
        session()->forget('delivery_status');
        
        return redirect('/');
    }

}
