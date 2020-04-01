<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        session()->put('status_order','ready');
        return redirect('/menu');
    }
    
    public function destroy(){
        session()->forget('status_order');
        session()->forget('order');
        session()->forget('order_name');
        session()->forget('order_qty');
        
        return redirect('/order_confirm');
    }

    public function add_order(){
        $menu_name = $_GET['nama'];
        $qty = $_GET['qty'];

        session()->push('order.0',$menu_name);
        session()->push('order.1',$qty);
        session()->push('order_name',$menu_name);
        session()->push('order_qty',$qty);
        return redirect('/menu');
    }

    public function show(){
        dd(session()->all());
    }
}
