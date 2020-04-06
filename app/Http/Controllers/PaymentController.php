<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class PaymentController extends Controller
{
    public function index(){
        $id= session()->get('id'); 
       $bill = Order::where('id_user', $id)->where('status', 'active')->get();

       return($bill[0]->id_order);
    }
}
