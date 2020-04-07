<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class PaymentController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
       $bill = Order::where('id_user', $id)->where('status', 'active')->get();

       return view("/payment")->with('bill',$bill);
    //    return($bill[0]->id_order);
    }

    public function detail(){
        
    }

    public function cek(){
        $id_order=$_GET['id_order'];
        return($id_order);
    }
}
