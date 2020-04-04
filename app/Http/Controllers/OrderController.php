<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index(){
        session()->put('status_order','ready');
        return redirect('/menu');
    }
    
    public function destroy(){
        session()->forget('status_order');
        session()->forget('order');
    
        return redirect('/order_confirm');
    }

    public function add_order(){
        $menu_name = $_GET['nama'];
        $qty = $_GET['qty'];

        session()->push('order.0',$menu_name);
        session()->push('order.1',$qty);
        return redirect('/menu');
    }

    public function show(){
        dd(session()->all());
    }

    public function store(){
        $id= session()->get('id'); 

        Order::create([
            'id_user' => $id,
        ]);

        session()->forget('status_order');
        session()->forget('order');
        return redirect('/order_confirm');
        
    }
}
