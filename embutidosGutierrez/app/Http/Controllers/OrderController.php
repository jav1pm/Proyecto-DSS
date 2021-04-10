<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function showAll(){
        $orders = Order::all();
        return view('orders/ordersIndex', compact('orders'));
    }

    public function showOrder($id){
        $order = Order::findOrFail($id);
        return view('orders/ordersShow', ['order' => $order]);
    }
}
