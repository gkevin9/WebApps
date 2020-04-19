<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use App\Menu;
use Session;

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
        $order = session()->get('order',[]);
        $cek =false;
        $hasil=0;
        if($qty>0)
        {   
            if($order)
            {   
                foreach($order as &$data)
                {   
                    $menu=array_keys($data);
                    if(strcmp($menu[0],$menu_name)==0)
                    {   
                        $hasil=(int)$data[$menu_name];
                        $hasil+=$qty;
                        $data[$menu_name]=$hasil;
                        $cek=true;
                        break;
                    }
                }
                if($cek){
                    echo "<br>";
                    Session::put('order',$order);
                    
                }else{
                    $array =[];
                    $array[$menu_name]=$qty;
                    Session::push('order',$array);
                }
            }
            else 
            {   
                $array =[];
                $array[$menu_name]=$qty;
                Session::push('order', $array);
                
            }
            return redirect('/menu');
        }
        else
        {
            return redirect()->back()->with('alert', 'Angka yang anda masukkan kurang dari 1');
        }
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
        
        $count = count($menu);
        $id_order = Order::where('id_user', $id)->orderBy('id_order', 'DESC')->first();
        
        for($i = 0;$i < $count;$i++){
            $menulist=array_keys($menu[$i]);
            $menuselect = Menu::where('name',$menulist[0])->first();
            echo ($menuselect->id_menu);
            echo "<br>";
            print(var_dump($menu[$i][$menulist[0]]));
            echo "<br>";
            
            OrderMenu::create([
                'id_menu' =>  $menuselect->id_menu,
                'id_order' => $id_order->id_order,
                'qty' => $menu[$i][$menulist[0]]
            ]);
        }
        
        session()->forget('status_order');
        session()->forget('order');
        return redirect('/order_confirm');
        
    }

    public function cancel(){
        $pos = $_GET['posisi'];
        $event_data_display = session()->get('order');
        session()->forget('order');
        array_splice($event_data_display,$pos,1);     
        print(var_dump($event_data_display));
        $count=count($event_data_display);
        if($count>0){
            print("halo");
            echo "<br>";
            print(var_dump($event_data_display));
            session()->put('order', $event_data_display);
        }
        return redirect('/order');
        // return (dd($event_data_display));
    }
}
