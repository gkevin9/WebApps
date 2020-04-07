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

       return view("payment")->with('bill',$bill);
    //    return($bill[0]->id_order);
    }

    public function detail(){
        $id_order=$_GET['id_order'];
        // $detail = OrderMenu::where('id_order',$id_order)->get();
        $detail = DB::table('ordermenu')
        ->join('menu', 'ordermenu.id_menu', '=', 'menu.id_menu')
        ->select('menu.name', 'ordermenu.qty')
        ->where('ordermenu.id_order', "=", $id_order)
        ->get();
        return redirect("payment/detail")->with('detail',$detail);
        // return($detail);
    }

    public function cek(){
        $id_order=$_GET['id_order'];
        return($id_order);
    }
}
