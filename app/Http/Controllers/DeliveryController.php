<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderMenu;
use Illuminate\Support\Facades\DB;



class DeliveryController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
        $bill = Order::where('id_user', $id)->where('status', 'active')->get();
        $count = count($bill);
        session()->put('delivery_status',"process");
        return view("delivery",['bill' => $bill , 'count' => $count]);   
    
    }

}
