<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function showAll(Request $request){
        $aids = $request->get('ordenarOrder');
        if(!$aids)
        {
            $aids = 'id';
        }
        $orders = Order::orderBy($aids,'asc')->paginate(5);
        return view('orders/ordersIndex', compact('orders'));
    }

    public function showOrder($id){
        $order = Order::findOrFail($id);
        return view('orders/ordersShow', ['order' => $order]);
    }
    
    public function createOrder(){
        return view('orders/ordersCreate');
    }

    public function storeOrder(){

        Order::create([

            'fecha' => request('fecha'),
            'estado' => request('estado'),
            'direccion' => request('direccion'),
            'pago' => request('pago'),
            'user_id' => intval(request('usuario')),

        ]);

        return redirect()->route('orders.showOrders');

    }

    public function editOrder($id){
        $order = Order::findOrfail($id);

        return view('orders/ordersEdit', [
            'order' => $order
        ]);
    }

    public function updateOrder(Order $order){
        $order->update([
            'fecha' => request('fecha'),
            'estado' => request('estado'),
            'direccion' => request('direccion'),
            'pago' => request('pago'),
            'user_id' => intval(request('usuario')),
        ]);

        return redirect() -> route('orders.showOrders');
            
    }

    public function deleteOrder(Order $order){
        $order -> delete();
        return redirect() -> route('orders.showOrders');
    }
}
