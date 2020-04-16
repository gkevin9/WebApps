<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use App\Menu;
use Illuminate\Support\Facades\DB;

class OrderHistoryController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
        $bill = Order::where('id_user', $id)->where('status', 'paid')->get();
        $count = count($bill);
        return view("orderhistory",['bill' => $bill , 'count' => $count]);
    //    return($bill[0]->id_order);
    }

    public function detail(){
        $id_order=$_GET['id_order'];
        $totalsemua=0;
        $daftarharga=[];
        // $detail = OrderMenu::where('id_order',$id_order)->get();
        $detail = DB::table('ordermenu')
        ->join('menu', 'ordermenu.id_menu', '=', 'menu.id_menu')
        ->select('menu.name', 'ordermenu.qty','menu.price')
        ->where('ordermenu.id_order', "=", $id_order)
        ->get();
        $order = Order::where('id_order', $id_order)->get()->first();
        $tgl = $order->created_at;

        foreach($detail as $menu=>$value){
            $total=$value->qty*$value->price;
            $totalsemua+=$total;
            $daftarharga[$value->name]=$total;
        }
        return view('orderhistory_complete',['detail'=>$detail, 'tgl'=>$tgl,'totalsemua'=>$totalsemua,'daftarharga'=>$daftarharga]);
    }
}
