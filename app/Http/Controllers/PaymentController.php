<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use Illuminate\Support\Facades\DB;



class PaymentController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
        $bill = Order::where('id_user', $id)->where('status', 'active')->get();
        $count = count($bill);
        return view("payment",['bill' => $bill , 'count' => $count]);
    //    return($bill[0]->id_order);
    }

    public function detail(){
        $id_order=$_GET['id_order'];
        $totalsemua=0;
        $daftarharga=[];
        // $detail = OrderMenu::where('id_order',$id_order)->get();
        $detail = DB::table('ordermenu')
        ->join('menu', 'ordermenu.id_menu', '=', 'menu.id_menu')
        ->select('menu.name', 'ordermenu.qty', 'menu.price')
        ->where('ordermenu.id_order', "=", $id_order)
        ->get();
        foreach($detail as $menu=>$value){
            $total=$value->qty*$value->price;
            $totalsemua+=$total;
            $daftarharga[$value->name]=$total;
        }
        session()->put('payment_active',$id_order);
        return view('payment_checkout',['detail'=>$detail,'totalsemua'=>$totalsemua,'daftarharga'=>$daftarharga]);
        // return redirect("payment/confirm")->with('detail',$detail);
        // return($detail);
    }

    public function done(){
        $id_order= session()->get('payment_active');
        DB::table('order')
            ->where('id_order', $id_order)
            ->update(['status' => "Paid"]);
        session()->forget('payment_active');

        return view('pay_confirm');
    }

    public function cek(){
        $id_order=$_GET['id_order'];
        return($id_order);
    }
}
