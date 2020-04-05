<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use App\Menu;
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
        $menu= session()->get('order');
        Order::create([
            'id_user' => $id,
            'status' => 'active'
        ]);
        
        $count = count($menu[0]);
        $id_order = Order::where('id_user', $id)->orderBy('id_order', 'DESC')->first();
        
        for($i = 0;$i < $count;$i++){
            $menuselect = Menu::where('name',$menu[0][$i])->first();
            OrderMenu::create([
                'id_menu' =>  $menuselect->id_menu,
                'id_order' => $id_order->id_order,
                'qty' => $menu[1][$i]
            ]);
        }
        
        session()->forget('status_order');
        session()->forget('order');
        return redirect('/order_confirm');
        
    }
}
