<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use App\Delivery;
use Illuminate\Support\Facades\DB;


class DeliveryController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
        $bill = Order::where('id_user', $id)->where('status', 'active')->get();
        $count = count($bill);
        return view("delivery",['bill' => $bill , 'count' => $count]);   
    }

    public function otw(){
        $id= session()->get('id');
        $alamat = $_GET['alamat'];
        $kec = $_GET['kecamatan'];
        $id_order = session()->get('order_delivery');

        Delivery::create([
            'id_user'=>$id,
            'id_order'=>$id_order,
            'address'=>$alamat,
            'kecamatan'=>$kec
        ]);
        session()->put('delivery_status',"process");
        session()->put('kecamatan',$kec);
        return redirect('delivery');
        // return($id_order);
    }

    public function done(){
        $id_order= session()->get('order_delivery');
        DB::table('order')
            ->where('id_order', $id_order)
            ->update(['status' => "Paid"]);
        session()->forget('payment_active');
        session()->forget('delivery_status');
        session()->forget('order_delivery');
        return redirect('delivery');

    }

}
